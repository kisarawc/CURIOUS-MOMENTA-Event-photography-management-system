<?php include ('header.php'); ?>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/payment.css">
	
  <script src="../js/payment.js"></script>
</head>

<body>
	<div class="container">
    <form class="payment-form" method="post" action="payment.php">
      <h1>Credit Card Details</h1>
      <div class="form-group">
        <label for="payment-method">Payment Method:</label>
        <div class="radio-group">
          <input type="radio" id="visa" name="payment-method" value="visa" checked>
          <label for="visa">Visa</label>
          <input type="radio" id="master" name="payment-method" value="master">
          <label for="master">Master</label>
        </div>
      </div>
      <div class="form-group">
        <label for="card-holder-name">Card Holder Name:</label>
        <input type="text" id="card-holder-name" name="card-holder-name" required>
      
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" required>
      
      
        <label for="expiry-date">Expiration Date:</label>
        <div class="expiry-group">
          <input type="text" id="expiry-month" name="expiry-month" placeholder="MM" required>
          <input type="text" id="expiry-year" name="expiry-year" placeholder="YY" required>
        </div>
      </div>
      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>
      </div>
      <input type="submit" value="Submit" onclick="validation()">
    </form>
  </div>
</body>

<?php include ('footer.php'); ?>

</html>