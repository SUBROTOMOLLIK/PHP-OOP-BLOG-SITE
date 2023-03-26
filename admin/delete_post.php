<?php 
    include_once('Classes/Postsclass.php');
    $post = new Posts();

    if (isset($_GET['id'])) {
        $post->delete_post($_GET['id']);
    }
?>