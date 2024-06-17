<?php require_once ('connection.php');  //Add header
  session_start();
  ?>

<?php 

	$query = "SELECT * FROM user";

    $result_set = mysqli_query ($connection , $query);

    if ($result_set->num_rows > 0) {

	/*create table*/
	 	$table = '<table>';
	 	$table .= '<tr> <th>User Name</th> <th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Date Of Birth</th> <th>Email</th> <th>Contact Number</th> <th>Address</th> </tr>';

	 	/*Fetch data*/
	 	while ($record = mysqli_fetch_assoc($result_set)){
	 		$table .= '<tr>';
	 		$table .= '<td>' . $record['Username'] . '</td>';
	 		$table .= '<td>' . $record['FirstName'] . '</td>';
	 		$table .= '<td>' . $record['LastName'] . '</td>';
	 		$table .= '<td>' . $record['Gender'] . '</td>';
	 		$table .= '<td>' . $record['DateOfBirth'] . '</td>';
	 		$table .= '<td>' . $record['Email'] . '</td>';
	 		$table .= '<td>' . $record['ContactNumber'] . '</td>';
	 		$table .= '<td>' . $record['Address'] . '</td>';
	 		$table .= '</tr>';
	 	}

	 	$table .= '</table>';
	 }

 ?>


<?php include ('header.php'); ?>

<html>
<head>
	
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/Adminmain.css">
	<link rel="stylesheet" type="text/css" href="../css/AdminDelete.css">
	
	
</head>


<body>
	<div class="BASE"> 

			<div class="Ad-H1">
				<p>Admin's Infromation</p>
					<hr>
			</div><!-- Ad-H1 -->

			<div>
		 		<?php echo $table;  ?>
			</div>

	</div><!-- BASE --> 	
	

  <div class="ADD">

	    <form action="AdminAdd.php">  
	      <input type="submit" value="Add Admin">
	    </form>

	    <form action="Adminlogout.php" method="POST">
	      <input name="Adminlogout" type="submit" value="Log Out">
	    </form> 

	    <form action="AdminEditAcc.php" method="POST">
	      <input name="EditAcc" type="submit" value="Edit">
	    </form>

	    <form action="AdminDelete.php" method="POST" class="DelAcc">
	    	<label class="LBL" >User Name:</label>
          <input type="text" id="username" name="username" required>
        	  <div class="DelButton">
	     				 <input  name="Adminlogout" type="submit" value="Delete Account">
	    			</div>
	  	</form>

	  	

  </div> <!-- ADD -->



</body>

<?php include ('footer.php'); ?>



</html>
<?php mysqli_close($connection); ?>