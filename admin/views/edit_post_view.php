
<?php 
   // link for post data 
    include_once('Classes/Postsclass.php');
    $post = new Posts();

    if(isset($_GET['id'])) {
       $post_id=  $_GET['id'];

       $data= $post->edit_post($post_id);
       $row = mysqli_fetch_assoc($data);
    }

    if (isset($_POST['update_post'])) {
        $post->update_post($_POST);  
    }
      
?>
<h1 class="mt-4">Edit Post</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Edit Post</li>
</ol>

<div class="row">
    <div class="col-md-7 col-lg-7 mx-auto shadow mt-2 p-4">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <div class="form-group mb-4">
                <label class="text-muted mb-2">Post Image</label>
                <br>
                <img class="mb-2" src="../upload/<?php echo $row['post_img'];?>" width="80" height="40" alt="" srcset="">
                <input type="hidden" class="form-control" value="<?php echo $row['post_img'];?>" name="old_post_img">
                <input type="file" class="form-control" name="post_img">
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="post_title" value="<?php echo $row['post_title'];?>" placeholder="Enter Post Title" required>
            </div>
            
            <div class="form-group mb-4">
              <select name="post_cat" class="form-control" required>
                <option value="">Select Post Category</option>
                <?php 
                    include_once('Classes/Categoryclass.php');
                    $cat = new Category(); 
                    $cat_data = $cat->show_category();
                    
                    while ($cat_row = mysqli_fetch_assoc($cat_data)){
                        if ($cat_row['id'] == $row['post_cat']) { ?>
                            <option selected value="<?php echo $cat_row['id'];?>"><?php echo $cat_row['categoryName'];?></option>
                        <?php        
                        }else{?>
                            <option value="<?php echo $cat_row['id'];?>"><?php echo $cat_row['categoryName'];?></option>
                        <?php 
                        }
                    }
                ?>
                                                                                                                                                                                                                                                                                                                                      
              </select>
            </div>
            <div class="form-group mb-4">
                <textarea name="post_summery" class="form-control" cols="30" rows="4" placeholder="Enter Post Summery" required><?php echo $row['post_summery'];?></textarea>
            </div>
            <div class="form-group mb-4">
                <textarea name="post_desc" class="form-control" cols="30" rows="6" placeholder="Enter Post Description" required><?php echo $row['post_desc'];?></textarea>
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="post_tag" value="<?php echo $row['post_tag'];?>" placeholder="Enter Post Tags" required>
            </div>
            <div>
                <input type="hidden" name="post_status" value="<?php echo $row['post_status'];?>">
                <input type="hidden" name="post_user" value="<?php echo $row['post_user'];?>">
                <input type="hidden" name="post_date" value="<?php echo $row['post_date'];?>">
            </div>
            <div class="form-group ">
                <input type="submit" name="update_post" class="btn btn-dark w-100" value="Update Post">
            </div>
        </form>
    </div>
</div>
