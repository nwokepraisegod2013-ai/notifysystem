<!DOCTYPE html>
<html>
<head>
    <title>Notify System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            text-align: center;
            max-width: 600px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            opacity: 0.9;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: white;
            color: #2a5298;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        a:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>📡 Notify System</h1>
    <p>A simple Laravel-based notification API system for Email, SMS & Webhooks.</p>

    <a href="{{ route('dashboard') }}">Go to Dashboard</a>
</div>

</body>
</html>