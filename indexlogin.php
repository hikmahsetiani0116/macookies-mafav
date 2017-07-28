<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<html>
  <head>
    <title>Login-MaCookies</title>
	
   <link rel="stylesheet" href="css/css.css"/>
  
  </head>	
  <body>
	<div id="login">
	    <h3>Login</h3>
	
	      <form action="myForm">
			<label>Username :</label>
			<input name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
			<div class="hr-sect">OR</div>					
			<a href="https://www.facebook.com/">
			<button>Login With Facebook
			</button>
			</a>
			</div>
			
   </div>

  </body>
</html>






