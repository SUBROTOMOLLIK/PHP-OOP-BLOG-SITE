<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">
        <?php
        $i= 0;
        $post_data = $post->show_pots();
        if (mysqli_num_rows($post_data) > 0 ){
            foreach ($post_data as $get_post){?>
            <div class="col-lg-12">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="upload/<?php echo $get_post['post_img'];?>" height="350" width="auto" alt="">
                </div>
                <div class="down-content">
                    <span><?php
                    $cat_data = $cat->show_category();
                    if (mysqli_num_rows($cat_data) > 0 ) {
                        foreach ($cat_data as $cat_row) {
                            
                            if ($cat_row['id'] == $get_post['post_cat']) {
                                echo $cat_row['categoryName'];
                            }
                                
                        }
                    }
                
                    ?>
                    </span>
                    <a href="post-details.php?id=<?php echo $get_post['id'];?>"><h4><?php echo $get_post['post_title'];?></h4></a>
                    <ul class="post-info">
                    <li><a href="#"><?php echo $get_post['post_user'];?></a></li>
                    <li><a href="#"><?php echo $get_post['post_date'];?></a></li>
                    <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p><?php echo $get_post['post_summery'];?></p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                        <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Beauty</a>,</li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                        </div>
                        <div class="col-6">
                        <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php

            $i++;
            if ($i == 3) {
            break; // because we don't want to continue the loop
            }
            }
        }  
        ?>

        <div class="col-lg-12">
            <div class="main-button">
            <a href="index.php">View All Posts</a>
            </div>
        </div>
        </div>
    </div>
</div>