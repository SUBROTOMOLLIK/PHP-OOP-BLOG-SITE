<?php
   $title = "Add Category";
?>
<h1 class="mt-4"><?php echo $title; ?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Add Category</li>
</ol>

<?php 
    require_once('Classes/Categoryclass.php');
    $category = new Category();

    if (isset($_POST['add_category'])){
        $category->add_category($_POST);
    }

?>


<div class="row">
    <div class="col-md-6 col-lg-6 mx-auto shadow mt-2 p-4">
        <form action="" method="post">
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="categoryName" placeholder="Enter Category Name" required>
            </div>
            <div class="form-group mb-5">
                <textarea name="categoryDesc" class="form-control" cols="30" rows="4" placeholder="Enter Category Description"></textarea>
            </div>
            <div class="form-group ">
                <input type="submit" name="add_category" class="btn btn-dark w-100" value="Add Category" >
            </div>
        </form>
    </div>
</div>