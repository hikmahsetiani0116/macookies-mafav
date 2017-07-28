<?php session_start();
ob_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("Select * from login where username = '$username' and password = '$password'");
$ketemu = mysql_num_rows($login);
$r = mysql_fetch_array($login);

if ($ketemu > 0){
$_SESSION[username] = $r[username];
$_SESSION[password] = $r[password];
header('location:admin.php');
}else{
?><script>alert("Login gagal!");document.location.href="login.php"</script>
<?php
echo mysql_error();
}
?>