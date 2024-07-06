<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007BFF;
        }
        .content {
            margin-bottom: 20px;
        }
        .footer {
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">2024studios</div>
    <div class="content">
        <p><strong>Name:</strong> {{$contact->name}}</p>
        <p><strong>Email:</strong> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
        <p><strong style="padding-left: 5px;">Message:</strong>{{$contact->message}}</p>
    </div>
    <div class="footer">
        <p>Thanks,<br>
            <strong>2024studios</strong></p>
    </div>
</div>
</body>
</html>
