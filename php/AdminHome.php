<?php require_once ('connection.php');  //Add header
  session_start();
  ?>


<?php include ('header.php'); ?>

<html>
<head>
	
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/Adminmain.css">
	<link rel="stylesheet" type="text/css" href="../css/AdminDelete.css">
	
	
</head>


<body>


  <div class="ADD">

	    <form action="AdminIndex.php">  
	      <input name="Admin" type="submit" value="Admin Details">
	    </form>

	    <form action="contactusAdmin.php" method="POST">
	      <input name="Adminlogout" type="submit" value="View Contact Us Details">
	    </form> 

	    <form action="#" method="POST">
	      <input name="Edit Package" type="submit" value="Edit Package">
	    </form>

	    <form action="faqAdmin.php" method="POST">
	      <input name="FAQ" type="submit" value="FAQ">
	    </form>

  </div> <!-- ADD -->



</body>

<?php include ('footer.php'); ?>



</html>
<?php mysqli_close($connection); ?>