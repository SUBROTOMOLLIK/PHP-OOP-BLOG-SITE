<div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

        <?php 
                $i=0;
                $post_data = $post->show_pots();
                if (mysqli_num_rows($post_data) > 0 ){
                    foreach ($post_data as $get_post){?>
        
    
        <div class="item">
            <img src="upload/<?php echo $get_post['post_img'];?>" class="img-fluid" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php
                    $cat_data = $cat->show_category();
                    if (mysqli_num_rows($cat_data) > 0 ) {
                        foreach ($cat_data as $cat_row) {
                            
                            if ($cat_row['id'] == $get_post['post_cat']) {
                                echo $cat_row['categoryName'];
                            }
                                
                        }
                    }
                
                    ?></span>
                </div>
                <a href="#"><h4><?php echo $get_post['post_title'];?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php echo $get_post['post_user'];?></a></li>
                  <li><a href="#"><?php echo $get_post['post_date'];?></a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>

            <?php
            $i++;
            if ($i == 5) {
              break; // because we don't want to continue the loop
            }
          }
        }
        ?>



        </div>
      </div>
    </div>