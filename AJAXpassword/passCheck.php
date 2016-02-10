<?php
	$password = "oscar";
   	$pass = $_POST['pass'];
   	if($pass == $password){
   		echo "true";
   	} else {
   		echo "Stop being naughty!";
   	}
?>