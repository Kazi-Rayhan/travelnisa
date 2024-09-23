<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Email</title>
    <style>
        /* General Styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        .container {
            width: 100%;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .email-body {
            padding: 30px;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .email-footer {
            text-align: center;
            background-color: #f1f1f1;
            padding: 20px;
            font-size: 14px;
            color: #888;
        }

        .email-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .message-box {
            padding: 15px;
            background-color: #f1f1f1;
            border-left: 4px solid #007bff;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {

            .email-body,
            .email-header,
            .email-footer {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="email-wrapper">
            @yield('email')
            <!-- Email Footer -->
            <div class="email-footer">
                &copy;  Your Company Name. All rights reserved.<br>
                <a href="#">Unsubscribe</a> | <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</body>

</html>
