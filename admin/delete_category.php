<?php
include_once('Classes/Categoryclass.php');
$category = new Category();
$cat_id= $_GET['id'];

$category->delete_category($cat_id);


?>