/**
 * 3P Life OS - Notify Me Button JavaScript (Fixed Version)
 * Place this file in /js/notify-me.js in your child theme
 */

(function($) {
    'use strict';

    // Modal HTML template - initially completely hidden
    const modalHTML = `
        <div id="threepNotifyModal" class="threep-modal-overlay" style="display: none !important; visibility: hidden; opacity: 0; z-index: -1;">
            <div class="threep-modal">
                <div class="threep-modal-header">
                    <h3>Get Notified When Available</h3>
                    <button class="threep-modal-close">&times;</button>
                </div>
                <div class="threep-modal-body">
                    <p>Enter your email and we'll notify you as soon as the <strong><span id="toolNameDisplay"></span></strong> becomes available.</p>
                    <form id="threepNotifyForm">
                        <div class="threep-form-group">
                            <label for="notifyEmail">Email Address</label>
                            <input type="email" id="notifyEmail" name="email" required>
                        </div>
                        <div class="threep-form-actions">
                            <button type="submit" class="threep-notify-submit">
                                <span class="button-text">Notify Me</span>
                                <span class="button-spinner" style="display: none;">⏳</span>
                            </button>
                            <button type="button" class="threep-notify-cancel">Cancel</button>
                        </div>
                    </form>
                    <div class="threep-notify-message" style="display: none;"></div>
                </div>
            </div>
        </div>
    `;

    // Modal styles
    const modalCSS = `
        <style id="threepNotifyModalCSS">
        .threep-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: -1;
            display: none !important;
            visibility: hidden;
            opacity: 0;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease, visibility 0.3s ease, z-index 0s linear 0.3s;
        }

        .threep-modal-overlay.show {
            z-index: 999999;
            display: flex !important;
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease, visibility 0.3s ease, z-index 0s linear 0s;
        }

        .threep-modal {
            background: white;
            border-radius: 20px;
            padding: 0;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.7);
            transition: transform 0.3s ease;
        }

        .threep-modal-overlay.show .threep-modal {
            transform: scale(1);
        }

        .threep-modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px 30px;
            position: relative;
        }

        .threep-modal-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .threep-modal-close {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            padding: 5px;
            line-height: 1;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .threep-modal-close:hover {
            opacity: 1;
        }

        .threep-modal-body {
            padding: 30px;
        }

        .threep-modal-body p {
            margin: 0 0 25px 0;
            font-size: 1.1rem;
            color: #2c3e50;
            line-height: 1.6;
        }

        .threep-form-group {
            margin-bottom: 25px;
        }

        .threep-form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1rem;
        }

        .threep-form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .threep-form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .threep-form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
        }

        .threep-notify-submit,
        .threep-notify-cancel {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .threep-notify-submit {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .threep-notify-submit:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .threep-notify-submit:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .threep-notify-cancel {
            background: #e9ecef;
            color: #6c757d;
        }

        .threep-notify-cancel:hover {
            background: #dee2e6;
        }

        .threep-notify-message {
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-weight: 600;
        }

        .threep-notify-message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .threep-notify-message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        @media (max-width: 768px) {
            .threep-modal {
                margin: 20px;
                width: calc(100% - 40px);
            }
            
            .threep-modal-header,
            .threep-modal-body {
                padding: 20px;
            }
            
            .threep-form-actions {
                flex-direction: column;
            }
            
            .threep-notify-submit,
            .threep-notify-cancel {
                width: 100%;
            }
        }
        </style>
    `;

    let currentToolName = '';
    let currentSourcePage = '';

    // Initialize when document is ready
    $(document).ready(function() {
        // Add modal HTML and CSS to page
        if (!$('#threepNotifyModal').length) {
            $('head').append(modalCSS);
            $('body').append(modalHTML);
            
            // Ensure modal is completely hidden on load
            $('#threepNotifyModal').css({
                'display': 'none',
                'visibility': 'hidden',
                'z-index': '-1'
            });
        }

        // Bind click events to notify buttons
        bindNotifyButtons();

        // Modal event handlers
        setupModalEvents();
    });

    /**
     * Bind click events to notify me buttons
     */
    function bindNotifyButtons() {
        // Use event delegation to handle dynamically added buttons
        $(document).on('click', '.threep-notify-button', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('Notify button clicked'); // Debug log
            
            currentToolName = $(this).data('tool-name') || 'Unknown Tool';
            currentSourcePage = $(this).data('source-page') || window.location.href;
            
            console.log('Tool name:', currentToolName); // Debug log
            
            $('#toolNameDisplay').text(currentToolName);
            $('#notifyEmail').val('');
            $('.threep-notify-message').hide();
            
            showModal();
            
            return false;
        });
    }

    /**
     * Setup modal event handlers
     */
    function setupModalEvents() {
        // Close modal events - use event delegation
        $(document).on('click', '.threep-modal-close, .threep-notify-cancel', function(e) {
            e.preventDefault();
            hideModal();
        });
        
        // Close on overlay click
        $(document).on('click', '.threep-modal-overlay', function(e) {
            if (e.target === this) {
                hideModal();
            }
        });

        // Prevent modal from closing when clicking inside
        $(document).on('click', '.threep-modal', function(e) {
            e.stopPropagation();
        });

        // Form submission
        $(document).on('submit', '#threepNotifyForm', function(e) {
            e.preventDefault();
            submitNotification();
        });

        // Escape key to close modal
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27 && $('#threepNotifyModal').hasClass('show')) {
                hideModal();
            }
        });
    }

    /**
     * Show modal with animation
     */
    function showModal() {
        console.log('Showing modal'); // Debug log
        const $modal = $('#threepNotifyModal');
        
        // Ensure modal is completely visible and interactive
        $modal.css({
            'display': 'flex',
            'visibility': 'visible',
            'z-index': '999999'
        });
        
        // Force reflow for animation
        $modal[0].offsetHeight;
        
        $modal.addClass('show');
        $('body').css('overflow', 'hidden');
    }

    /**
     * Hide modal with animation
     */
    function hideModal() {
        console.log('Hiding modal'); // Debug log
        const $modal = $('#threepNotifyModal');
        $modal.removeClass('show');
        
        setTimeout(function() {
            $modal.css({
                'display': 'none',
                'visibility': 'hidden',
                'z-index': '-1'
            });
            $('body').css('overflow', '');
        }, 300);
    }

    /**
     * Submit notification request
     */
    function submitNotification() {
        const email = $('#notifyEmail').val().trim();
        const $submitBtn = $('.threep-notify-submit');
        const $buttonText = $submitBtn.find('.button-text');
        const $buttonSpinner = $submitBtn.find('.button-spinner');
        const $message = $('.threep-notify-message');

        console.log('Submitting notification for:', email); // Debug log

        // Validate email
        if (!email || !isValidEmail(email)) {
            showMessage('Please enter a valid email address.', 'error');
            return;
        }

        // Show loading state
        $submitBtn.prop('disabled', true);
        $buttonText.hide();
        $buttonSpinner.show();
        $message.hide();

        // Check if threep_ajax is available
        if (typeof threep_ajax === 'undefined') {
            console.error('threep_ajax not defined');
            showMessage('Configuration error. Please refresh the page and try again.', 'error');
            resetButton();
            return;
        }

        // AJAX request
        $.ajax({
            url: threep_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'threep_notify_me',
                email: email,
                tool_name: currentToolName,
                source_page: currentSourcePage,
                nonce: threep_ajax.nonce
            },
            success: function(response) {
                console.log('AJAX success:', response); // Debug log
                if (response.success) {
                    showMessage(response.data.message, 'success');
                    $('#threepNotifyForm')[0].reset();
                    
                    // Track conversion if gtag is available
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'notify_me_signup', {
                            'event_category': 'engagement',
                            'event_label': currentToolName,
                            'custom_parameter_1': currentSourcePage
                        });
                    }
                    
                    // Auto-close modal after success
                    setTimeout(function() {
                        hideModal();
                    }, 3000);
                    
                } else {
                    showMessage(response.data.message || 'Something went wrong. Please try again.', 'error');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error, xhr); // Debug log
                showMessage('Something went wrong. Please try again.', 'error');
            },
            complete: function() {
                resetButton();
            }
        });
    }

    /**
     * Reset button state
     */
    function resetButton() {
        const $submitBtn = $('.threep-notify-submit');
        const $buttonText = $submitBtn.find('.button-text');
        const $buttonSpinner = $submitBtn.find('.button-spinner');
        
        $submitBtn.prop('disabled', false);
        $buttonText.show();
        $buttonSpinner.hide();
    }

    /**
     * Show message in modal
     */
    function showMessage(message, type) {
        const $message = $('.threep-notify-message');
        $message
            .removeClass('success error')
            .addClass(type)
            .text(message)
            .show();
    }

    /**
     * Validate email address
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * Public API for manually triggering notify modal
     */
    window.ThreePNotify = {
        show: function(toolName, sourcePage) {
            currentToolName = toolName || 'Unknown Tool';
            currentSourcePage = sourcePage || window.location.href;
            $('#toolNameDisplay').text(currentToolName);
            $('#notifyEmail').val('');
            $('.threep-notify-message').hide();
            showModal();
        },
        hide: hideModal
    };

})(jQuery);