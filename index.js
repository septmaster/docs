const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

// When the login button is clicked, the following code is executed
	loginButton.addEventListener("click", (e) => {
    // Prevent the default submission of the form
    e.preventDefault();
    // Get the values input by the user in the form fields
    const username = loginForm.username.value;
    const PWD = loginForm.PWD.value;
	
	switch (PWD) {
		case "ABIBALAH" :
			window.location.href="/docs/src/selection1.html";
			break;
		case "EL-HANAN" :
			window.location.href="/docs/src/selection12.html";
			break;
		case "YABOROU-HAMMAIM" :
			window.location.href="/docs/src/selection123.html";
			break;
		case "EMMANUEL" :
			window.location.href="/docs/src/selection1234.html";
			break;
		default :
			loginErrorMsg.style.opacity = 1; // Affiche le message d'erreur caché
			break;		
	}
	
})