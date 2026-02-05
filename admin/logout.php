<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Auto redirect after 2 seconds -->
    <meta http-equiv="refresh" content="2;url=login.php">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 420px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            text-align: center;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        h2 {
            color: #2d7a46;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 14px;
        }

        .login-link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #1e3c72;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .card {
                margin: 15px;
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <div class="icon">✅</div>
    <h2>Logged Out Successfully</h2>
    <p>You have been safely logged out.</p>
    <p>Redirecting to login page…</p>

    <a class="login-link" href="login.php">Go to Login</a>
</div>

</body>
</html>
