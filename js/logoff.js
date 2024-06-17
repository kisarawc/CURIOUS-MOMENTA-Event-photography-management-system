function logoff(){
	     var result = confirm("Are you sure you want to logoff from your account?");

            if (result) {
                return true;
            } else {
                event.preventDefault();
            }
        }