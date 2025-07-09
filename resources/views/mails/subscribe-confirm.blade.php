<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subscription Confirmation - Mustard Adventures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #222;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 600px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 32px 24px;
        }
        .header {
            text-align: center;
            margin-bottom: 24px;
        }
        .header img {
            width: 80px;
            margin-bottom: 12px;
        }
        .title {
            color: #2d6a4f;
            font-size: 1.6em;
            margin-bottom: 8px;
        }
        .content {
            font-size: 1.1em;
            line-height: 1.7;
        }
        .footer {
            margin-top: 32px;
            text-align: center;
            color: #888;
            font-size: 0.95em;
        }
        .btn {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 28px;
            background: #2d6a4f;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Optional: Add your logo here -->
            <!-- <img src="{{ asset('images/logo.png') }}" alt="Mustard Adventures Logo"> -->
            <div class="title">Welcome to Mustard Adventures!</div>
        </div>
        <div class="content">
            <p>Hi Adventurer,</p>
            <p>
                Thank you for subscribing to the Mustard Adventures newsletter!<br>
                You're now part of a community passionate about exploring the great outdoors, hiking, and discovering new adventures.
            </p>
            <p>
                Look out for our emails with the latest tour updates, hiking tips, exclusive offers, and inspiring stories from the trails.
            </p>
            <p>
                Ready to start your next adventure? Visit our website for upcoming tours and events!
            </p>
            <a href="{{ url('/') }}" class="btn">Explore Mustard Adventures</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Mustard Adventures. All rights reserved.<br>
            You can unsubscribe at any time.
        </div>
    </div>
</body>
</html>
