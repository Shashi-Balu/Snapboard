<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page-title'] ?></title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/verify.css">

</head>

<body>
    <div class="container verify-container">
        <div class="form-container login-container">
            <h1>Verify your email</h1>
            <form action="assets/php/actions.php?verify_email" method="post">
                <?= showError('username_email') ?>
                <input type="text" placeholder="verify code" name="code" />
                <button>Verify Email</button>
            </form>
        </div>
    </div>

</body>

</html>