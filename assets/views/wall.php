<?php global $user; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page-title'] ?></title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/wall.css">
</head>

<body>
    <nav class="nav">
        <h2 class="heading" style="font-style: italic;">Snapboard</h2>
        <div class="right-nav">
            <input type="text" class="search" placeholder="Search">
            <img src="assets/img/upload.svg" alt="Upload" class="upload-icon">
            <a href="?editprofile" class="edit-profile">
                <img class="prof-pic" src="assets/img/<?= $user['profile_picture'] ?>" alt="">
            </a>
        </div>
    </nav>

    <div class="card-container">
        <div class="card">
            <img class="card-img" src="data:image/jpeg;base64,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" alt="">
            <div class="card-heading">
                <div class="user-text">
                    <h3>Card Heading</h3>
                    <p>Card User</p>
                </div>
                <img src="assets/img/heart.svg" alt="Like" class="heart">
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="https://www.phowd.com/images/landing/rose-beauty-face-retouched-example-after.jpg">
            <div class="card-heading">
                <div class="user-text">
                    <h3>Card Heading</h3>
                    <p>Card User</p>
                </div>
                <img src="assets/img/heart.svg" alt="Like" class="heart">
            </div>
        </div>
    </div>

</body>

</html>