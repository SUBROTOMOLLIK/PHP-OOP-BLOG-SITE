<?php
   $title = "Edit Category";
?>
<h1 class="mt-4"><?php echo $title; ?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Edit Category</li>
</ol>

<?php 
    require_once('Classes/Categoryclass.php');
    $category = new Category();

    if (isset($_GET['id'])){
        $cat_id = $_GET['id'];

       $data=$category->edit_category($cat_id);
    }

    // update data

    if (isset($_POST['update_category'])){
        $category->update_category($_POST);
    }
    

?>


<div class="row">
    <div class="col-md-6 col-lg-6 mx-auto shadow mt-2 p-4">

        <?php 
        
         $row = mysqli_fetch_assoc($data);

        
        ?>
        <form action="" method="post">
            <div class="form-group mb-4">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input type="text" class="form-control" name="categoryName" placeholder="Enter Category Name" value="<?php echo $row['categoryName'];?>" required>
            </div>
            <div class="form-group mb-5">
                <textarea name="categoryDesc" class="form-control" cols="30" rows="4" placeholder="Enter Category Description"><?php echo $row['categoryDesc'];?></textarea>
            </div>
            <div class="form-group ">
                <input type="submit" name="update_category" class="btn btn-dark w-100" value="Update Category" >
            </div>
        </form>
    </div>
</div>