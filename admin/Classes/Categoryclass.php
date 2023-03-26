<?php

class Category extends Config{

    // add category 
    public function add_category($cat_data){

        $categoryName = $cat_data['categoryName'];
        $categoryDesc = $cat_data['categoryDesc'];

        $sql = "INSERT INTO `tbl_category`(`categoryName`, `categoryDesc`) VALUES ('$categoryName','$categoryDesc')";

        $result = $this->conn->query($sql);

        if ($result) {
           
        ?>
        <script>window.location.replace("manage_category.php")</script>
        <?php
        }
    }

    // show category 
    public function show_category(){
       return $this->conn->query("SELECT * FROM `tbl_category`");
    }

    // edit cateory 
    public function edit_category($cat_id){
        return $this->conn->query("SELECT * FROM `tbl_category` WHERE `id`= '$cat_id'");
     }

    //update category
     public function update_category($cat_data){
        $cateid= $cat_data['id'];
        $catename= $cat_data['categoryName'];
        $catedesc= $cat_data['categoryDesc'];

        $query = "UPDATE `tbl_category` SET `categoryName`='$catename',`categoryDesc`='$catedesc' WHERE `id`='$cateid'";
        $result = $this->conn->query($query);
        if ($result){?>
            <script>window.location.replace("manage_category.php")</script>
        <?php
        }
     }

    //  delete category 
    public function delete_category($cat_id){
        $result= $this->conn->query("DELETE FROM `tbl_category` WHERE `id`= '$cat_id' ");

        if ($result){?>
        <script>window.location.replace("manage_category.php")</script>
        <?php
        
        }
    }




}



?>