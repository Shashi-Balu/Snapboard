<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page-title'] ?></title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/happiness.css">

    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/happiness.css">
    <link rel="stylesheet" href="../css/home.css">

    <link rel="shortcut icon" href="../img/logo.svg" type="image/x-icon">
</head>

<body>
    <div>
        <nav class="nav">
            <div class="settings">
                <h3 class="settings-heading"><span>Signin</span>, <span>Signup</span></h3>
            </div>
        </nav>

        <section class="hero">
            <h2 class="hero-text">Set up your&nbsp;</h2>
            <div class="carousel-container">
                <div class="list motion-text" id="dynamicMoods"></div>
            </div>
        </section>
    </div>

    <div class="external">
        <div class="horizontal-scroll-wrapper">
            <div class="img-wrapper slower">
                <a href="https://altphotos.com/photo/stylish-parisian-cafe-terrace-279/" target="_blank" rel="noopener"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/paris-cafe-terrace.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper faster">
                <a href="https://altphotos.com/photo/retro-boy-doll-wearing-elegant-clothes-330/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/antiquedollboy.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower vertical">
                <a href="https://altphotos.com/photo/clocks-shop-exposition-window-reflecting-the-streets-277/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/windowshopclock.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower slower-down">
                <a href="https://altphotos.com/photo/swans-and-ducks-swimming-in-a-river-264/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/swanduckriver.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper">
                <a href="https://altphotos.com/photo/sidewalk-terrace-of-a-blue-facade-cafe-312/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/cafe-terrace.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower">
                <a href="https://altphotos.com/photo/paris-waterfront-at-sunset-1555/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/paris-seine-boat.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper faster1">
                <a href="https://altphotos.com/photo/old-man-leaning-over-the-barrier-looking-at-the-river-265/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/old-man-river.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower slower2">
                <a href="https://altphotos.com/photo/cafe-terrace-with-a-row-of-retro-tables-261/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/cafe-table-street.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper">
                <a href="https://altphotos.com/photo/street-scene-with-pedestrians-and-dogs-318/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/street-scene-people.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower">
                <a href="https://altphotos.com/photo/tourist-barge-on-the-river-seine-near-notre-dame-266/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/notre-dame-river-boat.jpg" alt="">
                </a>
            </div>

            <div class="img-wrapper slower last">
                <a href="https://altphotos.com/photo/skulls-decoration-in-a-shop-window-331/" target="_blank" rel="noopener">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/shop-window-reflection.jpg" alt="">
                </a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="form-container login-container">
            <h1>Login</h1>
            <form action="assets/php/actions.php?login" method="post">
                <?= showError('username_email') ?>
                <input type="email" placeholder="Email" name="email" />
                <?= showError('password') ?>
                <input type="password" placeholder="Password" name="password" />
                <button>Login</button>
            </form>
        </div>
        <div class="form-container signup-container">
            <h1>Sign up</h1>

            <form action="assets/php/actions.php?signup" method="post">
                <?= showError('name') ?><input type="text" placeholder="Name" name="name" value="<?= showFormData('name') ?>" />

                <?= showError('email') ?> <input type="email" placeholder="Email" name="email" value="<?= showFormData('email') ?>" />

                <?= showError('password') ?> <input type="password" placeholder="Password" name="password" />

                <?= showError('confirm_password') ?> <input type="password" placeholder="Confirm Password" name="confirm-password" />

                <button>Signup</button>
            </form>
        </div>
    </div>

    <div class="happiness-container">
        <div class="happiness-text">Display your Happiness</div>
        <div class="happiness-img">
            <img class="img-design first-img" src="https://images.unsplash.com/photo-1602538301104-99c26324fba1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGZsb3dlciUyMGFlc3RoZXRpY3xlbnwwfHwwfHx8MA%3D%3D" alt="">
            <img class="img-design second-img" src="https://images.unsplash.com/photo-1545398865-0062dafeb74d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGNhdCUyMGFlc3RoZXRpY3xlbnwwfHwwfHx8MA%3D%3D" alt="">
        </div>
    </div>

    <footer>
        <p>Snapboard by Shashi Balu</p>
    </footer>


    <!-- <script src="./assets/js/main.js"></script> -->
    <!-- <script src="../js/main.js"></script> -->
    <script>
        const moods = ["Moodboard", "Euphoria", "Vision Board", "Imaginative Gallery"];
        const dynamicMoodsContainer = document.getElementById("dynamicMoods");

        function createMoodElement(mood, index) {
            const h2 = document.createElement("h2");
            h2.textContent = mood;
            h2.classList.add("hero-text", "motion-text");
            h2.style.color = getColorForIndex(index);

            dynamicMoodsContainer.appendChild(h2);

            setTimeout(() => {
                const previousMood = dynamicMoodsContainer.firstElementChild;
                if (previousMood) {
                    dynamicMoodsContainer.removeChild(previousMood);
                }
            }, 4000);
        }

        function getColorForIndex(index) {
            const colors = ["#74b8ab", "#B25699", "#c9c93c", "#FF204E"];
            return colors[index % colors.length];
        }

        function loopMoods(index) {
            createMoodElement(moods[index], index);

            index = (index + 1) % moods.length;

            setTimeout(() => {
                loopMoods(index);
            }, 4000);
        }

        // Start the loop
        loopMoods(0);
    </script>
</body>

</html>