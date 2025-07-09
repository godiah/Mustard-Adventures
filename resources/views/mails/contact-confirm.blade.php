<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Received - Mustard Adventures</title>
    <style>
        /* Email-safe styles */
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f8fafc;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #10b981 0%, #059669 50%, #047857 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .tagline {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 300;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 24px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 20px;
            text-align: center;
        }

        .message {
            font-size: 16px;
            color: #4b5563;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .highlight-box {
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            border-left: 4px solid #10b981;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }

        .highlight-text {
            color: #065f46;
            font-weight: 500;
            margin: 0;
        }

        .contact-info {
            background-color: #f8fafc;
            padding: 25px;
            border-radius: 12px;
            margin: 25px 0;
            border: 1px solid #e5e7eb;
        }

        .contact-title {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 15px;
            text-align: center;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
            color: #6b7280;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 16px;
            height: 16px;
            margin-right: 10px;
            color: #10b981;
        }

        .footer {
            background-color: #1f2937;
            color: #d1d5db;
            padding: 30px;
            text-align: center;
        }

        .footer-brand {
            font-size: 20px;
            font-weight: bold;
            color: #10b981;
            margin-bottom: 10px;
        }

        .footer-text {
            font-size: 14px;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-link {
            display: inline-block;
            margin: 0 10px;
            color: #10b981;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #e5e7eb, transparent);
            margin: 30px 0;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }

            .header, .content, .footer {
                padding: 25px 20px !important;
            }

            .greeting {
                font-size: 20px !important;
            }

            .logo {
                font-size: 24px !important;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">🌿 Mustard Adventures</div>
            <div class="tagline">Discover Kenya's Hidden Gems</div>
        </div>

        <!-- Content -->
        <div class="content">
            <h2 class="greeting">Thank You for Your Enquiry!</h2>

            <p class="message">
                Dear <strong>{{ $details['first_name'] ?? 'Valued Adventurer' }}</strong>,
            </p>

            <p class="message">
                We have received your enquiry and are thrilled that you're interested in exploring Kenya with Mustard Adventures!
            </p>

            <div class="highlight-box">
                <p class="highlight-text">
                    🎯 <strong>What happens next?</strong><br>
                    Our experienced team will carefully review your enquiry and craft a personalized adventure proposal just for you. We'll get back to you within 24 hours with exciting options tailored to your preferences.
                </p>
            </div>

            <p class="message">
                In the meantime, feel free to follow us on social media to get inspired by our latest adventures and travel tips from fellow explorers.
            </p>

            <div class="divider"></div>

            <div class="contact-info">
                <div class="contact-title">Need Immediate Assistance?</div>
                <div class="contact-item">
                    <span class="contact-icon">📧</span>
                    <span>Email: mustardadventures1@gmail.com</span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">📱</span>
                    <span>WhatsApp: +254 710 136 271</span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">⏰</span>
                    <span>Available: 6:00 AM - 10:00 PM EAT</span>
                </div>
            </div>

            <p class="message">
                Thank you for choosing Mustard Adventures for your Kenyan journey. We can't wait to help you create unforgettable memories!
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-brand">Mustard Adventures</div>
            <div class="footer-text">
                Your gateway to authentic Kenyan experiences
            </div>

            <div class="social-links">
                <a href="https://www.instagram.com/mustard_adventures/" class="social-link">Instagram</a>
                <a href="https://www.facebook.com/people/Mustard-Adventures/61576743444132/" class="social-link">Facebook</a>
                <a href="https://www.tiktok.com/@mustard_adventures" class="social-link">TikTok</a>
            </div>

            <div style="margin-top: 20px; font-size: 12px; opacity: 0.6;">
                This is an automated message. Please do not reply to this email.
            </div>
        </div>
    </div>
</body>
</html>
