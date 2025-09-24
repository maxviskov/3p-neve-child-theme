<?php
/**
 * Template Name: Wedding Planner Resend
 * 
 * Page template for handling email resend requests
 * Save this as: page-resend.php in your theme directory
 */

require_once get_template_directory() . '/includes/class-database.php';
get_header(); ?>

<div class="resend-container" style="max-width: 800px; margin: 40px auto; padding: 20px;">

<?php
// Handle form submissions
$message = '';
$message_type = '';
$submission_found = false;
$submission_data = null;

if (isset($_POST['action'])) {
    
    // Initialize database handler
    $db = get_wedding_database();
    
    if ($_POST['action'] === 'lookup_email') {
        
        if (!wp_verify_nonce($_POST['resend_nonce'], 'wedding_resend')) {
            $message = 'Security verification failed. Please try again.';
            $message_type = 'error';
        } else {
            $email = sanitize_email($_POST['lookup_email']);
            
            if (!is_email($email)) {
                $message = 'Please enter a valid email address.';
                $message_type = 'error';
            } else {
                $submission_data = $db->find_submission_by_email($email);
                
                if ($submission_data) {
                    $submission_found = true;
                    $message = 'Wedding plan found! Review the details below and click "Resend Email" to receive your plan again.';
                    $message_type = 'success';
                } else {
                    $message = 'No wedding plan found for this email address. Please check the spelling or <a href="' . home_url('/wedding') . '">complete the survey again</a>.';
                    $message_type = 'error';
                }
            }
        }
        
    } elseif ($_POST['action'] === 'resend_email') {
        
        if (!wp_verify_nonce($_POST['resend_nonce'], 'wedding_resend')) {
            $message = 'Security verification failed. Please try again.';
            $message_type = 'error';
        } else {
            $submission_id = intval($_POST['submission_id']);
            $new_email = !empty($_POST['new_email']) ? sanitize_email($_POST['new_email']) : null;
            
            $submission_data = $db->get_submission($submission_id);
            
            if (!$submission_data) {
                $message = 'Submission not found. Please try the lookup again.';
                $message_type = 'error';
            } else {
                
                // Check if resend is allowed
                $can_resend = $db->can_resend_email($submission_data['email']);
                
                if (!$can_resend['can_resend']) {
                    $message = $can_resend['reason'];
                    $message_type = 'error';
                } else {
                    
                    // Update email if provided
                    if ($new_email && $new_email !== $submission_data['email']) {
                        if (!is_email($new_email)) {
                            $message = 'Please enter a valid new email address.';
                            $message_type = 'error';
                        } else {
                            $db->update_email_address($submission_id, $new_email);
                            $submission_data['email'] = $new_email;
                        }
                    }
                    
                    if (empty($message)) {
                        // Attempt to resend email
                        $resent = resend_wedding_plan_email($submission_data);
                        
                        if ($resent) {
                            $db->update_email_status($submission_id, 'sent');
                            $message = '✅ Email sent successfully to ' . esc_html($submission_data['email']) . '! Please check your inbox within 30 minutes.';
                            $message_type = 'success';
                        } else {
                            $db->update_email_status($submission_id, 'failed');
                            $message = '❌ Failed to send email. Please try again or contact support.';
                            $message_type = 'error';
                        }
                    }
                }
            }
        }
    }
}

// Check for URL parameters
if (isset($_GET['resent']) && $_GET['resent'] === 'success') {
    $message = '✅ Email sent successfully! Please check your inbox within 30 minutes.';
    $message_type = 'success';
}
?>

    <div class="resend-header" style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: #8B4B9C; margin-bottom: 10px;">Resend Your Wedding Plan</h1>
        <p style="font-size: 16px; color: #666;">Haven't received your personalized wedding plan? We'll help you get it!</p>
    </div>

    <?php if (!empty($message)): ?>
        <div class="resend-message <?php echo $message_type; ?>" style="
            padding: 15px; 
            border-radius: 8px; 
            margin-bottom: 30px;
            <?php echo $message_type === 'success' ? 'background: #d4edda; color: #155724; border: 1px solid #c3e6cb;' : 'background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;'; ?>
        ">
            <?php echo wp_kses_post($message); ?>
        </div>
    <?php endif; ?>

    <?php if (!$submission_found): ?>
        <!-- Email Lookup Form -->
        <div class="lookup-form-container" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <h2 style="margin-top: 0; color: #333;">Find Your Wedding Plan</h2>
            <p style="color: #666; margin-bottom: 25px;">Enter the email address you used when completing the wedding planner survey:</p>
            
            <form method="POST" action="">
                <?php wp_nonce_field('wedding_resend', 'resend_nonce'); ?>
                <input type="hidden" name="action" value="lookup_email">
                
                <div style="margin-bottom: 20px;">
                    <label for="lookup_email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email Address:</label>
                    <input type="email" 
                           id="lookup_email" 
                           name="lookup_email" 
                           required 
                           placeholder="Enter your email address"
                           style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 6px; font-size: 16px;">
                </div>
                
                <button type="submit" style="
                    background: #8B4B9C; 
                    color: white; 
                    padding: 12px 30px; 
                    border: none; 
                    border-radius: 6px; 
                    font-size: 16px; 
                    cursor: pointer;
                    width: 100%;
                ">Find My Wedding Plan</button>
            </form>
        </div>

    <?php else: ?>
        <!-- Submission Found - Show Details and Resend Options -->
        <div class="submission-details" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <h2 style="margin-top: 0; color: #333;">Wedding Plan Found! 🎉</h2>
            
            <div class="submission-info" style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 25px;">
                <h3 style="margin-top: 0; color: #8B4B9C;">Plan Details:</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div><strong>Couple:</strong> <?php echo esc_html($submission_data['couple_name'] ?: 'Not specified'); ?></div>
                    <div><strong>Email:</strong> <?php echo esc_html($submission_data['email']); ?></div>
                    <div><strong>Wedding Style:</strong> <?php echo esc_html($submission_data['style'] ?: 'Not specified'); ?></div>
                    <div><strong>Budget Range:</strong> <?php echo esc_html($submission_data['budget_range'] ?: 'Not specified'); ?></div>
                    <div><strong>Created:</strong> <?php echo date('M j, Y g:i A', strtotime($submission_data['created_at'])); ?></div>
                    <div><strong>Emails Sent:</strong> <?php echo intval($submission_data['email_sent_count']); ?></div>
                </div>
                
                <?php if ($submission_data['last_email_sent']): ?>
                    <div style="margin-top: 15px;">
                        <strong>Last Email:</strong> <?php echo date('M j, Y g:i A', strtotime($submission_data['last_email_sent'])); ?>
                    </div>
                <?php endif; ?>
            </div>

            <form method="POST" action="">
                <?php wp_nonce_field('wedding_resend', 'resend_nonce'); ?>
                <input type="hidden" name="action" value="resend_email">
                <input type="hidden" name="submission_id" value="<?php echo intval($submission_data['id']); ?>">
                
                <h3 style="color: #8B4B9C;">Resend Options:</h3>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold;">
                        <input type="radio" name="resend_option" value="same_email" checked style="margin-right: 8px;">
                        Send to the same email address (<?php echo esc_html($submission_data['email']); ?>)
                    </label>
                </div>
                
                <div style="margin-bottom: 25px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold;">
                        <input type="radio" name="resend_option" value="new_email" style="margin-right: 8px;">
                        Send to a different email address:
                    </label>
                    <input type="email" 
                           name="new_email" 
                           placeholder="Enter new email address"
                           style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 6px; margin-top: 8px;">
                </div>
                
                <button type="submit" style="
                    background: #28a745; 
                    color: white; 
                    padding: 15px 40px; 
                    border: none; 
                    border-radius: 6px; 
                    font-size: 18px; 
                    cursor: pointer;
                    width: 100%;
                    font-weight: bold;
                ">📧 Resend My Wedding Plan</button>
            </form>
            
            <div style="margin-top: 20px; text-align: center;">
                <a href="<?php echo esc_url(add_query_arg('action', '', remove_query_arg('action'))); ?>" 
                   style="color: #8B4B9C; text-decoration: none;">← Search for a different email</a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Support Information -->
    <div class="support-info" style="background: #fff3cd; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #ffc107;">
        <h3 style="margin-top: 0; color: #856404;">Still Having Issues? 🤔</h3>
        <p style="margin-bottom: 0; color: #856404;">
            If you're still not receiving your wedding plan email, here are some common solutions:
        </p>
        <ul style="color: #856404; margin: 10px 0;">
            <li><strong>Check your spam folder</strong> - Look for emails from "noreply@planner.maxviskov.com"</li>
            <li><strong>Check your promotions tab</strong> (Gmail users)</li>
            <li><strong>Add our domain to your safe senders list</strong> - planner.maxviskov.com</li>
            <li><strong>Try a different email address</strong> - Corporate emails sometimes block automated messages</li>
        </ul>
        <p style="color: #856404; margin-bottom: 0;">
            Need more help? <a href="<?php echo home_url('/support'); ?>" style="color: #8B4B9C;">Contact our support team</a>
        </p>
    </div>

</div>

<script>
// Handle radio button selection for email options
document.addEventListener('DOMContentLoaded', function() {
    const radioButtons = document.querySelectorAll('input[name="resend_option"]');
    const newEmailInput = document.querySelector('input[name="new_email"]');
    
    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === 'new_email') {
                newEmailInput.focus();
                newEmailInput.required = true;
            } else {
                newEmailInput.required = false;
            }
        });
    });
});
</script>

<?php get_footer(); ?>

<?php
/**
 * Resend wedding plan email function
 */
function resend_wedding_plan_email($submission_data) {
    try {
        // Get email sender instance
        $email_sender = new Wedding_Email_Sender();
        
        // Parse form responses
        $form_data = json_decode($submission_data['form_responses'], true);
        
        // Check if PDF exists
        $pdf_path = null;
        if ($submission_data['pdf_generated'] && 
            !empty($submission_data['pdf_file_path']) && 
            file_exists($submission_data['pdf_file_path'])) {
            $pdf_path = $submission_data['pdf_file_path'];
        }
        
        // Send email
        $email_data = array(
            'wedding_data' => $form_data,
            'content' => $submission_data['ai_content'],
            'pdf_path' => $pdf_path
        );
        
        return $email_sender->send_wedding_plan_email($email_data);
        
    } catch (Exception $e) {
        error_log('Wedding plan resend failed: ' . $e->getMessage());
        return false;
    }
}