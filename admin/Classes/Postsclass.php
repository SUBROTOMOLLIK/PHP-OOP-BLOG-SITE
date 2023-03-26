<?php

class Posts extends Config{
    // add post
   public function add_post($post_data){
      //post image 
     $post_img_name = $_FILES['post_img']['name'];
     $post_tmp_name = $_FILES['post_img']['tmp_name'];

     $post_title= $post_data['post_title'];
     $post_cat= $post_data['post_cat'];
     $post_summery= $post_data['post_summery'];
     $post_desc= $post_data['post_desc'];
     $post_tag= $post_data['post_tag'];
     
     $query = " INSERT INTO `tbl_posts`(`post_img`, `post_title`, `post_cat`, `post_user`, `post_summery`, `post_desc`, `post_date`, `post_tag`) VALUES ('$post_img_name','$post_title','$post_cat','admin',' $post_summery','$post_desc', now(),'$post_tag') ";
     
     $result = $this->conn->query($query);

     if ($result) {
        if (isset($_FILES['post_img'])) {
         move_uploaded_file($post_tmp_name,"../upload/".$post_img_name);
        }?>
       <script>window.location.replace("manage_post.php")</script>
      <?php
     }
     
   }

   // show posts
   public function show_pots(){
      return $this->conn->query(" SELECT `id`, `post_img`, `post_title`, `post_cat`, `post_user`, `post_summery`, `post_desc`, date_format(post_date, '%M %d, %Y') as post_date, `post_tag`, `post_status` FROM `tbl_posts` ");
   }

   // edit posts
   public function edit_post($post_id){
      return $this->conn->query("SELECT * FROM `tbl_posts` WHERE `id`= '$post_id'");
   }

   // update posts
   public function update_post($post_data){

      $post_id= $post_data['id'];
      $post_title= $post_data['post_title'];
      $post_cat= $post_data['post_cat'];
      $post_user = $post_data['post_user'];
      $post_summery= $post_data['post_summery'];
      $post_desc= $post_data['post_desc'];
      $post_date = $post_data['post_date'];
      $post_tag= $post_data['post_tag'];
      $post_status= $post_data['post_status'];


      $post_img_name = $_FILES['post_img']['name'];
      $post_tmp_name = $_FILES['post_img']['tmp_name'];
      $old_post_img = $post_data['old_post_img'];


      if ($post_img_name != ''){

         $query = " UPDATE `tbl_posts` SET `post_img`='$post_img_name',`post_title`='$post_title',`post_cat`='$post_cat',`post_user`='$post_user',`post_summery`='$post_summery',`post_desc`='$post_desc',`post_date`='$post_date',`post_tag`='$post_tag',`post_status`='$post_status' WHERE `id` = '$post_id' ";

         $result = $this->conn->query($query);

         if ($result) {
         move_uploaded_file($post_tmp_name,"../upload/".$post_img_name);
         unlink("../upload/".$old_post_img);
        }?>
       <script>window.location.replace("manage_post.php")</script>
      <?php
      exit; 
      }else{

         $query = " UPDATE `tbl_posts` SET `post_img`='$old_post_img',`post_title`='$post_title',`post_cat`='$post_cat',`post_user`='$post_user',`post_summery`='$post_summery',`post_desc`='$post_desc',`post_date`='$post_date',`post_tag`='$post_tag',`post_status`='$post_status' WHERE `id` = '$post_id' ";

         $result = $this->conn->query($query);
         if ($result) {?>
           <script>window.location.replace("manage_post.php")</script>
          <?php
         }
      exit; 
      }




   }

   // delete post
   public function delete_post($post_id){
      $result = $this->conn->query("DELETE FROM `tbl_posts` WHERE `id`= '$post_id' ");
      if ($result ) {?>
      <script>window.location.replace("manage_post.php")</script>
      <?php
      }
   }






}





?>