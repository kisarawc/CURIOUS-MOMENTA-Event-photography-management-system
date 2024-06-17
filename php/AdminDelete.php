<?php

 require'connection.php';
 session_start();

 
$uname = $_POST['username'];

//checking the availibility 
if (isset($_POST['username']))
{
    //select SQL statement
    $query1 = "SELECT * FROM user WHERE Username = '$uname'";
    $result1 = $connection->query($query1);

        //checking databse
        if ($result1->num_rows > 0) {

            //delete SQL statement
            $query2 = "DELETE FROM user WHERE Username = '$uname'";
            $result2 = $connection->query($query2);
                
                if ($result2) {
                    echo "<h1>Deleted successful<h1>";
                } 
        }
else {
       echo "<h1>Error deleting record</h1> ".$connection->error;
        }


}
   
$connection->close();

?>