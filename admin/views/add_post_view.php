
<?php 
   // link for post data 
    include_once('Classes/Postsclass.php');
    $post = new Posts();

    if (isset($_POST['add_post'])) {
        $post->add_post($_POST);  
    }
      
?>
<h1 class="mt-4">Add Post</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Add Post</li>
</ol>

<div class="row">
    <div class="col-md-7 col-lg-7 mx-auto shadow mt-2 p-4">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group mb-4">
                <label class="text-muted mb-2">Select Post Image</label>
                <input type="file" class="form-control" name="post_img" required>
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="post_title" placeholder="Enter Post Title" required>
            </div>
            
            <div class="form-group mb-4">
              <select name="post_cat" class="form-control" required>
                <option value="">Select Post Category</option>
                <?php 
                    include_once('Classes/Categoryclass.php');
                    $cat = new Category(); 
                    $data = $cat->show_category();
                    
                    while ($row = mysqli_fetch_assoc($data)){?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>

                        <?php        
                
                    }
                ?>
                                                                                                                                                                                                                                                                                                                                      
              </select>
            </div>
            <div class="form-group mb-4">
                <textarea name="post_summery" class="form-control" cols="30" rows="4" placeholder="Enter Post Summery" required></textarea>
            </div>
            <div class="form-group mb-4">
                <textarea name="post_desc" class="form-control" cols="30" rows="6" placeholder="Enter Post Description" required></textarea>
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="post_tag" placeholder="Enter Post Tags" required>
            </div>
            <div class="form-group ">
                <input type="submit" name="add_post" class="btn btn-dark w-100" value="Add Post">
            </div>
        </form>
    </div>
</div>
