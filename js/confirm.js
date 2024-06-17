function confirmDelete(){
	     var result = confirm("Are you sure you want to delete your account?");

            if (result) {
                return true;
            } else {
                event.preventDefault();
            }
        }
