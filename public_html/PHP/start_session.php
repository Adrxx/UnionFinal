<?php

require_once("voluntario.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

session_start();

makeSession($user, $pass);

if (isset($_SESSION['voluntario']))
{
		
	header("Location: http://www.ment.com.mx/union/perfil_voluntario.php?id=".$_SESSION['voluntario']);
	
}
else {
	
	header("Location: http://www.ment.com.mx/union/login.php?e=s");
}


?>