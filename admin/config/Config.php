<?php
    session_start();
    class Config{
    
    // property
    protected $conn;

    // construct function
    public function __construct()
    {       
       $this->conn = new mysqli("localhost", "root", "", "stand_blog");
    }


    }

?>