function recovery() {
	// get form input values
	var email = document.getElementById("email").value;
	var email2 = document.getElementById("email2").value;

	// check if inputs are empty
	if(email === '' || email2 === '') {
		document.getElementById("message").innerHTML = "Email does not match !";
		return;
	}

	
}