<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");



$table = 'posts';
$errors = array();

$posts = selectAll($table);

$title ="";
$body = "";

$published = "";

if (isset($_POST['add-post'])) {
    $errors = validatePost($_POST);
    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 :0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = " success";
        header("location: " . BASE_URL . "/postindex.php");
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 :0;
    }
    
    
    //dd($post_id);
}