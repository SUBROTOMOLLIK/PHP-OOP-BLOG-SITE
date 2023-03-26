<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
    <div class="sidebar-heading">
        <h2>Recent Posts</h2>
    </div>
    <div class="content">
        <ul>
        <?php 
                $i=0;
                $post_data = $post->show_pots();
                if (mysqli_num_rows($post_data) > 0 ){
                    foreach ($post_data as $get_post){?>
        
    
            <li><a href="post-details.php?id=<?php echo $get_post['id'];?>">
                <h5><?php echo $get_post['post_title'];?></h5>
                <span><?php echo $get_post['post_date'];?></span>
            </a></li>

            <?php
            $i++;
            if ($i == 3) {
              break; // because we don't want to continue the loop
            }
          }
        }
        ?>
        </ul>
    </div>
    </div>
</div>