<?php

require_once 'config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("database is not active");

function showPage($page, $data = "")
{
    include("assets/views/$page.php");
}

function showError($field)
{
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        if (isset($error['field']) && $field == $error['field']) {

?>
            <div class="alert alert-danger my-2" role="alert">
                <?= $error['msg'] ?>
            </div>
<?php
        }
    }
}

function showFormData($field)
{
    if (isset($_SESSION['formdata'])) {
        $formdata = $_SESSION['formdata'];
        return $formdata[$field];
    }
}

function isEmailRegistered($email)
{
    global $db;
    $query = "SELECT count(*) as row FROM users WHERE email='$email'";
    $run = mysqli_query($db, $query);
    $return_data = mysqli_fetch_assoc($run);
    return $return_data['row'];
}

function validateSignupForm($form_data)
{
    $response = array();
    $response['status'] = true;

    if (!$form_data['password']) {
        $response['msg'] = "password is not given";
        $response['status'] = false;
        $response['field'] = 'password';
    }

    if (!$form_data['email']) {
        $response['msg'] = "email is not given";
        $response['status'] = false;
        $response['field'] = 'email';
    }
    if (!$form_data['name']) {
        $response['msg'] = "name is not given";
        $response['status'] = false;
        $response['field'] = 'name';
    }

    if (isEmailRegistered($form_data['email'])) {
        $response['msg'] = "email id is already registered";
        $response['status'] = false;
        $response['field'] = 'email';
    }

    return $response;
}

function validateLoginForm($form_data)
{
    $response = array();
    $response['status'] = true;
    $blank = false;

    if (!$form_data['password']) {
        $response['msg'] = "password is not given";
        $response['status'] = false;
        $response['field'] = 'password';
        $blank = true;
    }

    if (!$form_data['email']) {
        $response['msg'] = "email is not given";
        $response['status'] = false;
        $response['field'] = 'email';
        $blank = true;
    }

    if (!$blank && !checkUser($form_data)['status']) {
        $response['msg'] = "something is incorrect, we can't find you";
        $response['status'] = false;
        $response['field'] = 'checkuser';
    } else {
        $response['user'] = checkUser($form_data)['user'];
    }
    return $response;
}

function checkUser($login_data)
{
    global $db;
    $email = $login_data['email'];
    $password = md5($login_data['password']);

    $query = "SELECT * FROM users WHERE (email='$email') && password='$password'";
    $run = mysqli_query($db, $query);
    $data['user'] = mysqli_fetch_assoc($run) ?? array();
    if (count($data['user']) > 0) {
        $data['status'] = true;
    } else {
        $data['status'] = false;
    }

    return $data;
}

function getUser($user_id)
{
    global $db;
    $query = "SELECT * FROM users WHERE id=$user_id";
    $run = mysqli_query($db, $query);
    return mysqli_fetch_assoc($run);
}

function getPost()
{
    global $db;
    $query = "SELECT users.id as uid,posts.id,posts.post_img,posts.post_text,users.name,users.profile_picture FROM posts JOIN users ON users.id=posts.user_id ORDER BY id DESC";

    $run = mysqli_query($db, $query);
    return mysqli_fetch_all($run, true);
}



function createUser($data)
{
    global $db;
    $name = mysqli_real_escape_string($db, $data['name']);
    $email = mysqli_real_escape_string($db, $data['email']);
    $password = mysqli_real_escape_string($db, $data['password']);
    $password = md5($password);
    $query = "INSERT INTO users(name,email,password) ";
    $query .= "VALUES ('$name','$email','$password')";
    return mysqli_query($db, $query);
}

//function for verify email
function verifyEmail($email)
{
    global $db;
    $query = "UPDATE users SET ac_status=1 WHERE email='$email'";
    return mysqli_query($db, $query);
}





function validatePostImage($image_data)
{
    $response = array();
    $response['status'] = true;


    if (!$image_data['name']) {
        $response['msg'] = "no image is selected";
        $response['status'] = false;
        $response['field'] = 'post_img';
    }



    if ($image_data['name']) {
        $image = basename($image_data['name']);
        $type = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $size = $image_data['size'] / 1000;

        if ($type != 'jpg' && $type != 'jpeg' && $type != 'png') {
            $response['msg'] = "only jpg,jpeg,png images are allowed";
            $response['status'] = false;
            $response['field'] = 'post_img';
        }

        if ($size > 2000) {
            $response['msg'] = "upload image less then 1 mb";
            $response['status'] = false;
            $response['field'] = 'post_img';
        }
    }

    return $response;
}

function createPost($text, $image)
{
    global $db;
    $post_text = mysqli_real_escape_string($db, $text['post_text']);
    $user_id = $_SESSION['userdata']['id'];

    $image_name = time() . basename($image['name']);
    $image_dir = "../images/posts/$image_name";
    move_uploaded_file($image['tmp_name'], $image_dir);


    $query = "INSERT INTO posts(post_text,post_img)";
    $query .= "VALUES ('$post_text','$image_name')";
    return mysqli_query($db, $query);
}
