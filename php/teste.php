<?php 
$to = 'humbertofizero@hotmail.com';

$subject ='Notificação';

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= 'From: Notificação <secretarianet@notification.com>' . "\r\n";

$message = file_get_contents('webRevendedor.html');

$representante = array("Humberto","40577123807","23061990","Cesar Simoes","Taboão","São Paulo","","11984452203","Santander","Ag","Cc","E-mail","LinkedIn","Data disponivel");

$campos   = array(":fname",":fcpf",":fdtnasc",":faddress",":fcity",":festate",":ftel",":fcel",":fbancname",":fagn",":fcc",":femail",":flinkedin",":fdtdisp");

$message = str_replace($campos, $representante, $message);

$mail = mail($to, $subject, $message, $headers);

var_dump($mail);

?>