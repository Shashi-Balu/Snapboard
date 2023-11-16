<?php

print_r($_POST);

require_once 'functions.php';

if (isset($_GET['signup'])) {
    $response = validateSignupForm($_POST);

    if ($response['status']) {
        if (createUser($_POST)) {
            header('location:../../?login&newuser');
        } else {
            echo "<script>alert('somethihng is wrong')</script>";
        }
    } else {
        $_SESSION['error'] = $response;
        $_SESSION['formdata'] = $_POST;
        header("location:../../?signup");
    }
}


if (isset($_GET['login'])) {


    $response = validateLoginForm($_POST);

    if ($response['status']) {
        $_SESSION['Auth'] = true;
        $_SESSION['userdata'] = $response['user'];

        header("location:../../");
    } else {
        $_SESSION['error'] = $response;
        $_SESSION['formdata'] = $_POST;
        header("location:../../?login");
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    header('location:../../');
}


if (isset($_GET['addpost'])) {
    $response = validatePostImage($_FILES['post_img']);

    if ($response['status']) {
        if (createPost($_POST, $_FILES['post_img'])) {
            header("location:../../?new_post_added");
        } else {
            echo "something went wrong";
        }
    } else {
        $_SESSION['error'] = $response;
        header("location:../../");
    }
}
