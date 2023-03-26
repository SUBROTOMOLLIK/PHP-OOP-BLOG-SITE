<?php 

include_once('config/Config.php');

class User extends Config{
    // login user functiomn
    public function admin_user($data)
    {
        $userEmail = $data['email'];
        $userPassword = md5($data['password']);

        $sql = "SELECT * FROM `tbl_users` WHERE `email` = '$userEmail' AND `password` = '$userPassword' ";
        $result = $this->conn->query( $sql);

        if ($row = mysqli_fetch_assoc($result)) {
           $_SESSION['admin_email'] = $row['email'];
           $_SESSION['admin_pass'] = $row['password'];

           header("Location: dashboard.php");
        }else{
            $_SESSION['msg'] = "Email and Password doesn't Match!"; 
        }

    }



}






?>
