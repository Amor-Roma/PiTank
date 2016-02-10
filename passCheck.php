<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
	$password = "asdffdsa";
	$pass = $_POST['password'];

	if($password == $pass){
		session_start();
        $_SESSION['login']= true;
        header( "refresh: 0; url = controlTank.php" );
    } else {
        header( "refresh: 0; url = index.php" );
	}
?>

</body>
</html>