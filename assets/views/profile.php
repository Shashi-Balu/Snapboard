<?php global $user; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/verify.css">
    <link rel="stylesheet" href="./assets/css/wall.css">


</head>

<body>
    <nav class="nav">
        <h2 class="heading" style="font-style: italic;">Snapboard</h2>
        <div class="right-nav">
            <h4><a href="assets/php/actions.php?logout" class="logout">Logout</a></h4>
        </div>
    </nav>
    <div class="container verify-container">
        <div class="form-container login-container">
            <h1>Your Profile</h1>
            <div class="profile-container">
                <img class="profile" src="assets/img/default.jpeg" alt="">
                <div class="profile-text">
                    <div class="name"><?= $user['name'] ?></div>
                    <div class="email"><?= $user['email'] ?></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>