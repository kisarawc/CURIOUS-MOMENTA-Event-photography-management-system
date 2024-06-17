<?php 

// Database connection details  
    $connection = mysqli_connect ('localhost','root','','event_photography');

//Cheking the connection
    if(mysqli_connect_errno()){
        die('Database connection failed ' . mysqli_connect_error() );
    }else{
       // echo "connection successful";
    }

 ?>

