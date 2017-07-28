<html>
<head>
<title>Cookies - Menu</title>
<link rel= "stylesheet" href="css/css.css">
<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
</head>
	
<body>
 <div id= "login">
			<h3>Login</h3>
				<form action= "myForm">
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="submit" value="Login">
					<div class="hr-sect">OR</div>					
					<a href="https://www.facebook.com/">
					<button>Login With Facebook
					</button>
					</a>
				</form>
		</div> 
</body>
</html>