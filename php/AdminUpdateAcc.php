<?php

require'connection.php';


//Retrieve edit details from the form
$First_Name = $_POST['firstName'];
$Last_Name = $_POST['lastName'];
$uname = $_POST['userName'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];
$DateOfBirth = $_POST['dob'];
$phone = $_POST['phone'];

    //select SQL statement
    $query1 = "SELECT * FROM user WHERE Username = '$uname'";
    $result1 = $connection->query($query1);

    if ($result1->num_rows > 0) {

        // update SQL statement
        $query2 = "UPDATE user SET FirstName='$First_Name', LastName='$Last_Name', Gender='$Gender', DateOfBirth='$DateOfBirth', Email='$Email', ContactNumber='$phone', Address='$Address'
            WHERE Username='$uname'";
        $result2 = $connection->query($query2);

        if ($result2) {
                            echo "<h1>Update successful<h1>";
                        }     
        }

    else {
           echo "<h1>Error updating the details</h1> ".$connection->error;
            }




  
$connection->close();

?>