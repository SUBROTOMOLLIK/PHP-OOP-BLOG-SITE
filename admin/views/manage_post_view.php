<?php 
    include_once('Classes/Postsclass.php');
    $post = new Posts();

?>
<h1 class="mt-4">Manage Post</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Manage Post</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Posts
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>SI</th>
                    <th>Post Title</th>
                    <th>Post Image</th>
                    <th>Post Category</th>
                    <th>Post By</th>
                    <th>Post Date</th>
                    <th>Post Summary</th>
                    <th>Post tags</th>
                    <th>Post status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SI</th>
                    <th>Post Title</th>
                    <th>Post Image</th>
                    <th>Post Category</th>
                    <th>Post By</th>
                    <th>Post Date</th>
                    <th>Post Summary</th>
                    <th>Post tags</th>
                    <th>Post status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php 

            $post_data = $post->show_pots();
            $val= 1;
            
            while ($row = mysqli_fetch_assoc($post_data)) {?>
                <tr>
                    <td><?php echo $val++;?></td>
                    <td><?php echo $row['post_title'];?></td>
                    <td>
                        <img src="../upload/<?php echo $row['post_img'];?>" alt="post-img" width="100" height="auto" srcset="">
                    </td>
                    <td>
                    <?php 
                    include_once('Classes/Categoryclass.php');
                    $cat = new Category(); 
                    $cat_data = $cat->show_category();
                    if (mysqli_num_rows($cat_data) > 0 ) {
                        foreach ($cat_data as $cat_row) {
                            
                            if ($cat_row['id'] == $row['post_cat']) {
                                echo $cat_row['categoryName'];
                            }
                                
                        }
                    }

                ?>
                
                    </td>
                    <td><?php echo $row['post_user'];?></td>
                    <td><?php echo $row['post_date'];?></td>
                    <td><?php echo $row['post_summery'];?></td>
                    <td><?php echo $row['post_tag'];?></td>
                    <td> 
                            
                        <?php 
                        if($row['post_status'] == 1){
                            echo "Active";
                        }else{
                            echo "Deactive";
                        }
                        ?>              
                    </td>

                    <td>
                        <a href="edit_post.php?id=<?php echo $row['id'];?>" class="text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="delete_post.php?id=<?php echo $row['id'];?>" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
              
            <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

