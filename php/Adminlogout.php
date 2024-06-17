
<?php
    session_start();

if(isset($_POST["Adminlogout"])){
    session_destroy();     //end the session
    header('Location:Index.php'); 
}
?> 