
<?php
    session_start();


if(isset($_POST["logoff"])){
    session_destroy();     //end the session
    header("Location:Index.php"); 
}
?> 