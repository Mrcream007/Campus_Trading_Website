function login() {
	// get form input values
	var username = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	// check if inputs are empty
	if(username === '' || password === '') {
		document.getElementById("message").innerHTML = "Please enter both Email and password";
		return;
	}

	// check if username and password are correct
	if(email === 'admin' && password === 'password') {
		document.getElementById("message").innerHTML = "Login successful";
		window.location.href = "index.html"; // redirect to home page
	} else {
		document.getElementById("message").innerHTML = "Incorrect username or password";
	}
}

function signup() {
	// get form input values
	var username = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var confirm_password = document.getElementById("confirm_password").value;
    var gender = document.getElementById("gender").value;
    var role = document.getElementById("role").value;
    var phone = document.getElementById("phone").value;

	// check if inputs are empty
	if(username === '' || email === '' || password === '' || confirm_password === '' || gender === '') {
		document.getElementById("message").innerHTML = "Please fill all fields";
		return;
	}

	// check if passwords match
	if(password !== confirm_password) {
		document.getElementById("message").innerHTML = "Passwords do not match";
		return;
	}

	// do additional checks and validation here, such as email format validation

	// signup successful
	document.getElementById("message").innerHTML = "Signup successful";
}
