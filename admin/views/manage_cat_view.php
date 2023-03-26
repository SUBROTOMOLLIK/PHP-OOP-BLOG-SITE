<h1 class="mt-4">Manage Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Manage Category</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Category
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>SI</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SI</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php 
            include_once('Classes/Categoryclass.php');
            $category = new Category();
            $cat_data = $category->show_category();
            $val= 1;
            ;
            while ($row = mysqli_fetch_assoc($cat_data)) {?>
                <tr>
                    <td><?php echo $val++;?></td>
                    <td><?php echo $row['categoryName'];?></td>
                    <td><?php echo $row['categoryDesc'];?></td>
                    <td>
                        <a href="edit_category.php?id=<?php echo $row['id'];?>" class="text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="delete_category.php?id=<?php echo $row['id'];?>" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
              
            <?php
            }
            ?>





            </tbody>
        </table>
    </div>
</div>