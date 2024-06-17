function validation() {
    //input values
    var cardNumber = document.getElementById('card-number').value;
    var expiryMonth = document.getElementById('expiry-month').value;
    var expiryYear = document.getElementById('expiry-year').value;
    var cvv = document.getElementById('cvv').value;
  
    // Card number validation
    if (cardNumber.length !== 16 ) {
      alert('Please enter a valid 16 digit card number.'); 
      event.preventDefault();
      
    }
   
    // Expiry date validation
    var currentYear = new Date().getFullYear();
    
  
    if (expiryYear < currentYear ) {
      alert('Please enter a valid year.'); 
      event.preventDefault();
      
    }

    if (expiryMonth >12 && expiryMonth <1 ) {
        alert('Please enter a valid month.');
        event.preventDefault();
        
      }
  
    // CVV validation
    if (cvv.length !== 3 ) {
      alert('Please enter a valid 3-digit CVV.');
      event.preventDefault();
      
    }

    return true;

}
    
  