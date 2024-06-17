<?php require_once ('Config.php');  
  session_start();
  ?>

<?php 

	$query = "SELECT * FROM contactus";

    $result_set = mysqli_query ($conn , $query);

    if ($result_set->num_rows > 0) {

	
	 	$table = '<table>';
	 	$table .= '<tr> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Subject</th> <th>Message</th> </tr>';

	
	 	while ($record = mysqli_fetch_assoc($result_set)){
	 		$table .= '<tr>';
	 		$table .= '<td>' . $record['first_name'] . '</td>';
	 		$table .= '<td>' . $record['last_name'] . '</td>';
	 		$table .= '<td>' . $record['email'] . '</td>';
	 		$table .= '<td>' . $record['subject'] . '</td>';
	 		$table .= '<td>' . $record['message'] . '</td>';

	 		$table .= '</tr>';
	 	}

	 	$table .= '</table>';
	 }

 ?>


<?php include ('header.php'); ?>

<html>
<head>
	
	<title>Contact Admin Page</title>
	
</head>


<body>
	 
			<div>
				<p><h1>Contact Us details</h1></p>
					<hr>
			</div><!-- Ad-H1 -->

			<div>
		 		<?php echo $table;  ?>
			</div>	
	


	    <form action="AdminDelete.php" method="POST">
	    	
	     	 <input  name="Adminlogout" type="submit" value="Delete Details">
	    			
	  	</form>


</body>

<?php include ('footer.php'); ?>



</html>
<?php mysqli_close($conn);?>