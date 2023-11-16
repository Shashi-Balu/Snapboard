<?php global $user; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?= $data['page-title'] ?></title> -->
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/verify.css">
    <link rel="stylesheet" href="./assets/css/wall.css">
    <link rel="stylesheet" href="./assets/css/post.css">



</head>

<body>
    <nav class="nav">
        <h2 class="heading" style="font-style: italic;">Snapboard</h2>
        <div class="right-nav">
            <h4><a href="#" class="logout">Logout</a></h4>
        </div>
    </nav>
    <div class="container verify-container">
        <div class="form-container login-container">
            <h1>Upload Image</h1>
            <div class="profile-container">
                <img src="" alt="" id="post_img">
                <form method="post" action="assets/php/actions.php?addpost" enctype="multipart/form-data">
                    <div class="profile-text">
                        <input class="upload-post" name="post_img" type="file" id="select_post_img">
                        <div class="heading-card"><input type="text" name="post_text" placeholder="add some title" class="post_text"></div>
                        <button class="button-post">Post</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="assets/js/custom.js?v=<?= time() ?>"></script>
</body>

</html>