<?php

require_once 'assets/php/functions.php';

if (isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
}


// if(isset($_GET['newfp'])){
//     unset($_SESSION['auth_temp']);
//     unset($_SESSION['forgot_email']);
//     unset($_SESSION['forgot_code']);
// }
// if(isset($_SESSION['Auth'])){
//     $user = getUser($_SESSION['userdata']['id']);
//     $posts = filterPosts();
//     $follow_suggestions = filterFollowSuggestion();
// }

$pagecount = count($_GET);


//manage pages
if (isset($_SESSION['Auth']) && !$pagecount) {
    showPage('wall',  ['page-title' => 'Snapboard']);
} elseif (isset($_SESSION['Auth']) && isset($_GET['editprofile'])) {
    showPage('edit_profile', ['page_title' => 'Edit Profile']);
} else {
    showPage('home', ['page-title' => 'Snapboard']);
}
//  elseif (isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status'] == 1) {
//     $profile = getUserByUsername($_GET['u']);
//     if (!$profile) {
//         showPage('wall', ['page_title' => 'User Not Found']);
//         showPage('user_not_found');
//     } else {
//         $profile_post = getPostById($profile['id']);
//         $profile['followers'] = getFollowers($profile['id']);
//         $profile['following'] = getFollowing($profile['id']);
//         showPage('wall', ['page_title' => $profile['first_name'] . ' ' . $profile['last_name']]);
//         showPage('profile');
//     }
// } elseif (isset($_GET['signup'])) {
//     showPage('wall', ['page_title' => 'Pictogram - SignUp']);
//     showPage('signup');
// } elseif (isset($_GET['login'])) {

//     showPage('wall', ['page_title' => 'Pictogram - Login']);
//     showPage('login');
// } elseif (isset($_GET['forgotpassword'])) {

//     showPage('wall', ['page_title' => 'Pictogram - Forgot Password']);
//     showPage('forgot_password');
// } else {
//     if (isset($_SESSION['Auth']) && $user['ac_status'] == 1) {
//         showPage('wall', ['page_title' => 'Home']);
//         showPage('wall');
//     } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0) {
//         showPage('wall', ['page_title' => 'Verify Your Email']);
//         showPage('verify_email');
//     }
// }


unset($_SESSION['error']);
unset($_SESSION['formdata']);
