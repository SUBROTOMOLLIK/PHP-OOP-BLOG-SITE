<?php
  include_once("admin/config/Config.php");
  include_once("admin/Classes/Categoryclass.php");
  $cat = new Category();

  include_once("admin/Classes/Postsclass.php");
  $post = new Posts();
?> 
  <?php include_once("includes/head.php");?>

  <!-- ***** Preloader Start ***** -->
  <?php include_once("includes/preloader.php");?>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <?php include_once("includes/navbar.php");?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <?php include_once("includes/banner.php");?>
  <!-- Banner Ends Here -->

  <!-- call to action Starts Here -->
  <?php include_once("includes/call_to_action.php");?>
  <!-- call to action Ends Here -->


  <section class="blog-posts">
    <div class="container">
      <div class="row">
      <?php include_once("includes/blog_post.php");?>

      <?php include_once("includes/sidebar.php");?>
      </div>
    </div>
  </section>

    
  <?php include_once("includes/footer.php");?>

  <?php include_once("includes/scripts.php");?>