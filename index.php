<?php

require_once 'assets/php/functions.php';
if (isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
    $posts = getPost();
}

$pagecount = count($_GET);

if (isset($_SESSION['Auth']) && !$pagecount) {
    showPage('wall',  ['page-title' => 'Snapboard']);
} elseif (isset($_SESSION['Auth']) && isset($_GET['profile'])) {
    showPage('profile', ['page_title' => 'Edit Profile']);
} elseif (isset($_SESSION['Auth']) && isset($_GET['post'])) {
    showPage('post', ['page_title' => 'Post Images']);
} else {
    showPage('home', ['page-title' => 'Snapboard']);
}


unset($_SESSION['error']);
unset($_SESSION['formdata']);
