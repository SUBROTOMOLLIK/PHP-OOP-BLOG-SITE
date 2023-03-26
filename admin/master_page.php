<?php  

include_once("Classes/Userclass.php");

 $email = $_SESSION['admin_email'];
 $pass = $_SESSION['admin_pass'];

 if ($email == null){
     header('Location: index.php');
 }

 if(isset($_GET['admin_logout'])){
    if ($_GET['admin_logout'] == "logout") {
        session_destroy();
        header("Location: ../index.php"); 
    }
}



?>

    <!-- header Section -->
    <?php include_once('includes/header.php');?>

    <!-- Top Nav Section -->
    <?php include_once('includes/topnav.php');?>

    <div id="layoutSidenav">
        <!-- Side Nav Section -->
        <?php include_once('includes/sidenav.php');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    
                    <?php
                        if ($view) {
                            if ($view == 'dashboard') {
                                require('views/dashboard_view.php');
                            }elseif ($view == 'add_category') {
                                require('views/add_cat_view.php');
                            }elseif($view == 'manage_category'){
                                require('views/manage_cat_view.php');
                            }elseif ($view == 'edit_category') {
                                require('views/edit_cat_view.php');
                            }
                            elseif ($view == 'add_post') {
                                require_once('views/add_post_view.php');
                            }elseif ($view == 'manage_post'){
                                require_once('views/manage_post_view.php');
                            }elseif ($view == 'edit_post'){
                                require_once('views/edit_post_view.php');
                            }
                        } 
                    ?>
                </div>
            </main>
    <?php include_once('includes/footer.php');?>
