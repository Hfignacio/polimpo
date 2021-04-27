<?php

    if(isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $ftel = $_POST['ftel'];
        $femail = $_POST['femail'];
        $fassun = $_POST['fassun'];
        $fmes = $_POST['fmes'];

        If ($fname == "" ||
        $ftel == "" ||
        $femail == "" ||
        $fassun == "" ||
        $fmes == ""
        ) {

            echo "<h3><strong>*Um dos campos obrigatorios não foram preenchidos.</strong>.</h3>";

        } else {

            echo "<h3>Obrigado por enviar ".$fname." !</h3>";

            $subject = 'Novo Contato - '.$fname;
            $message = file_get_contents('../php/webContato.html');

            $contato = array($fname,$ftel,$femail,$fassun,$fmes);
            $campos   = array(":fname",":ftel",":femail",":fassun",":fmes");

            $message = str_replace($campos, $contato, $message);

            $to = 'websecretaria.jb@gmail.com';

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

            $headers .= 'From: Notificação <secretarianet@notification.com>' . "\r\n";

            $mail = mail($to, $subject, $message, $headers);

        }

    }

?>