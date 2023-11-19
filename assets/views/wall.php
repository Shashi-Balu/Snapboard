<?php
global $user;
global $posts;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page-title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/wall.css">
</head>

<body>
    <nav class="nav">
        <h2 class="heading" style="font-style: italic;">Snapboard </h2>
        <div class="right-nav">
            <!-- <input type="text" class="search" placeholder="Search"> -->
            <a href="?post"><img src="assets/img/upload.svg" alt="Upload" id="addpost" class="upload-icon" data-bs-toggle="modal" data-bs-target="#addpost" href="#"></a>

            <a href="?profile" class="edit-profile">
                <img class="prof-pic" src="assets/img/default.jpeg" alt="">
            </a>
        </div>
    </nav>

    <?php if (empty($posts)) : ?>
        <div class="no-posts-message">
            <p>Add images to your mood board.</p>
        </div>
    <?php else : ?>

        <div class="card-container">
            <?php
            foreach ($posts as $post) { ?>
                <div class="card-set">
                    <a class="delete" href="assets/php/actions.php?deletepost=<?= $post['id'] ?>">x</a>
                    <img class="card-img" src="assets/img/posts/<?= $post['post_img'] ?>">
                    <div class="card-heading">
                        <div class="user-text">
                            <h3 class="post-text"><?= $post['post_text'] ?></h3>

                        </div>
                        <img src="assets/img/heart.svg" alt="Like" class="heart">
                    </div>
                </div>
            <?php  }  ?>

        </div>
    <?php endif; ?>

    <div class="modal-container" id="modalContainer">
        <div class="modal-content" id="modalContent">
            <span class="modal-close" id="modalClose">&times;</span>
            <img id="modalImage" class="modal-image" src="" alt="Enlarged Preview">
        </div>
    </div>
</body>

<script>
    const modalContainer = document.getElementById("modalContainer");
    const modalContent = document.getElementById("modalContent");
    const modalImage = document.getElementById("modalImage");
    const modalClose = document.getElementById("modalClose");

    const cards = document.querySelectorAll(".card-set");

    cards.forEach(card => {
        card.addEventListener("click", () => {
            const cardImage = card.querySelector(".card-img");
            const imageUrl = cardImage.getAttribute("src");

            modalImage.setAttribute("src", imageUrl);
            modalContainer.style.display = "flex"; /* Change 'block' to 'flex' */
        });
    });

    modalClose.addEventListener("click", () => {
        modalContainer.style.display = "none";
    });

    modalContainer.addEventListener("click", (event) => {
        if (event.target === modalContainer) {
            modalContainer.style.display = "none";
        }
    });
</script>


</html>