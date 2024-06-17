

function updatevalidation(){
	var dob = document.getElementById('dob').value;
	var phone = document.getElementById('phone').value;

  var currentDate = new Date();
  var enteredDate = new Date(dob);

  if (enteredDate > currentDate) {
    alert("Date of birth cannot be a future date.");
    event.preventDefault();
    
  }

  if (phone.length !== 10){
  	alert("Invalid phone number.");
    event.preventDefault();
   
  }

  return true;
}