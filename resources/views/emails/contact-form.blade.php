<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #002d58 0%, #000000 100%);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #002d58;
            margin-bottom: 5px;
            display: block;
        }
        .field-value {
            background-color: #f8f9fa;
            padding: 12px;
            border-radius: 4px;
            border-left: 4px solid #002d58;
        }
        .message-content {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            border-left: 4px solid #002d58;
            white-space: pre-wrap;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
        }
        .contact-info h3 {
            margin-top: 0;
            color: #002d58;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🐻 New Contact Form Submission</h1>
        </div>

        <p>You have received a new contact form submission from your portfolio website.</p>

        <div class="field">
            <span class="field-label">Name:</span>
            <div class="field-value">{{ $name }}</div>
        </div>

        <div class="field">
            <span class="field-label">Email:</span>
            <div class="field-value">{{ $email }}</div>
        </div>

        <div class="field">
            <span class="field-label">Subject:</span>
            <div class="field-value">{{ $subject }}</div>
        </div>

        <div class="field">
            <span class="field-label">Message:</span>
            <div class="message-content">{{ $message }}</div>
        </div>

        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><strong>From:</strong> {{ $name }} ({{ $email }})</p>
            <p><strong>Received:</strong> {{ now()->format('F j, Y \a\t g:i A') }}</p>
            <p><strong>IP Address:</strong> {{ request()->ip() }}</p>
        </div>

        <div class="footer">
            <p>This email was sent from your BearJCC portfolio contact form.</p>
            <p>Please respond directly to {{ $email }} to reply to this inquiry.</p>
        </div>
    </div>
</body>
</html>
