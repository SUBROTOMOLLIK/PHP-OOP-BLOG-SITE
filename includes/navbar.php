
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php"><h2>Stand Blog<em>.</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> 

        <?php 
        $i = 0;
        $get_cat = $cat->show_category();
        if (mysqli_num_rows($get_cat)>0) {
          foreach ($get_cat as $value) {?>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $value['categoryName'];?></a>
            </li>
          <?php
            $i++;
            if ($i == 5) {
              break; // because we don't want to continue the loop
            }
          }
        }
        
        
        ?>

          <li class="nav-item main-button">
            <a class="nav-link text-light" href="admin/index.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>