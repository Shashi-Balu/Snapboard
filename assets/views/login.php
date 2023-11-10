<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            flex: 1;
        }

        .left {
            flex: 1;
            background: url('your-image.jpg') center/cover no-repeat;
            display: none;
        }

        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4f4f4;
        }

        .form {
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
            border-radius: 8px;
        }

        @media (min-width: 768px) {
            .left {
                display: block;
            }

            .right {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">

        </div>
    </div>
</body>

</html>