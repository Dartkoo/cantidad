<?php
if ($_GET["token"] == "pelismax") {
$id=$_GET['id'];
header ("Content-Type: application/x-mpegURL; charset=UTF-8");
header("HTTP/1.1 302 Found"); 
header('Location: http://regioplay.xyz/php/SR_REGIO_220122_/tpnuevo01.php?c=' .$id. '&tokennn=Regio&f=.m3u8');
} else {
//Aqui pones el codigo de los eventos que ocurriran si la contraseña es incorrecta o si el usuario es incorrecto.
echo $_GET["user"] . ' Denied access.';
}
?>