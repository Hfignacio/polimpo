<?php require_once("../php/sql.php");
    
    // Validação de CPF
    if(isset($_POST['fcpf'])) {

        $fcpf = $_POST['fcpf'];
        $fname = $_POST['fname'];

        $sql = new Sql();
    
        $check = "SELECT CPFRepresentante, NomeRepresentante FROM tb_c_representante WHERE CPFRepresentante = '".$fcpf."'";

        $result = $sql->Query($check);
        
        if (mysqli_num_rows($result) > 0 && $fname == "") {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $nome = explode(" ",$row['NomeRepresentante'],2)[0];

            echo '<h3><strong>Olá '.$nome.' seus dados foram encontrados em nossa base, digite Email e senha para edita-los !</strong></h3>';

            return 0;
        } 

    }

    if(isset($_POST['flsenha'])) {

        $flemail = $_POST['flemail'];
        $flsenha = $_POST['flsenha'];

        $sql = new Sql();
    
        $check = "SELECT * FROM tb_c_representante 
        WHERE Email = '".$flemail."' AND Senha = '".$flsenha."'";

        $result = $sql->Query($check);
        
        if (mysqli_num_rows($result) > 0) {

            echo '<h3><strong>Dados do Apresentante.</h3></strong>';

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $cpf = $row['CPFRepresentante'];
            $dtnasc = $row['DataNasc'];
            $nome = explode(" ",$row['NomeRepresentante'],2)[0];
            $surname = explode(" ",$row['NomeRepresentante'],2)[1];
            $cep = $row['Cep'];
            $end = explode(",",$row['Endereco'])[0];
            $num = explode(",",$row['Endereco'])[1];
            $comp = $row['Complemento'];
            $city = $row['Cidade'];
            $estate = $row['Estado'];
            $tel = $row['Telefone'];
            $cel = $row['Telefone_celular'];
            $banco = $row['BncNome'];
            $tipocc = $row['TipoConta'];
            $ag = $row['AgNumero'];
            $cc = explode("-",$row['CcNumero'])[0];
            $dig = explode("-",$row['CcNumero'])[1];
            $email = $row['Email'];
            $dtdisp = $row['DtDisp'];

            return 0;
        
        } else {

            echo '<h3><strong> Email ou Senha estão incorretos.</h3></strong>';
            return 0;
        }

    }

    // Insert de dados do representante no banco
    if (isset($_POST['fname'])) {

        if ($_POST['fname'] == "") {

            $cpf = $_POST['fcpf'];
            echo '<h3><strong> Não há dados cadastrado para este CPF.</h3></strong>';
            return 0;
        }

        $fname = $_POST['fname'].' '.$_POST['fsurname'];

        $fsurname = $_POST['fsurname'];
        $fcpf = $_POST['fcpf'];
        $fdtnasc = $_POST['fdtnasc'];
        $fcep = $_POST['fcep'];
        $fnum = $_POST['fnum'];
        $faddress = $_POST['faddress'].', '.$_POST['fnum'];
        $fcomp = $_POST['fcomp'];
        $fcity = $_POST['fcity'];
        $festate = $_POST['festate'];
        $ftel = $_POST['ftel'];
        $fcel = $_POST['fcel'];
        $femail = $_POST['femail'];
        $fbancname = $_POST['fbancname'];
        $ftipocc = $_POST['ftipocc'];
        $fagn = $_POST['fagn'];
        $fcc = $_POST['fcc'].'-'.$_POST['fdig'];
        $fdig = $_POST['fdig'];
        $flinkedin = "";
        $fdtdisp = $_POST['fdtdisp'];
        $fsenha = $_POST['fsenha'];
        $fsegsenha = $_POST['fsegsenha'];

        if ($fname == "" ||
            $fsurname == "" ||
            $fcpf == "" ||
            $fdtnasc == "" ||
            $fcep == "" ||
            $faddress == "" ||
            $fcity == "" ||
            $festate == "" ||
            $fcel == "" ||
            $femail == "" ||
            $fbancname == "" || $fbancname == "Cod. - Escolha seu Banco" ||
            $ftipocc == "" || $ftipocc == "Tipo da Conta" ||
            $fagn == "" ||
            $fcc == "" ||
            $fdig == "" ||
            $fdtdisp == "" ||
            ($fsenha != $fsegsenha)) {

            echo "<h3><strong>*Um dos campos obrigatorios não foram preenchidos corretamente ou as senhas não conferem.</strong>.</h3>";

        } else {

            $sql = new Sql();

            $result = $sql->rep($fname,$fcpf,$fdtnasc,$faddress,$fcity,$festate,$ftel,$fcel,$fbancname,$fagn,$fcc,$femail,$flinkedin,$fdtdisp,$ftipocc,$fcomp,$fcep,$fsenha);
            
            if ($result) {

                echo "<h3>Obrigado por enviar ".$fname." !</h3>";

                $subject = 'Novo Revendedor Cadastrado - '.$fname;
                $message = file_get_contents('../php/webRevendedor.html');

                $representante = array($fname,$fcpf,$fdtnasc,$faddress,$fcity,$festate,$ftel,$fcel,$fbancname,$fagn,$fcc,$femail,$flinkedin,$fdtdisp);
                $campos   = array(":fname",":fcpf",":fdtnasc",":faddress",":fcity",":festate",":ftel",":fcel",":fbancname",":fagn",":fcc",":femail",":flinkedin",":fdtdisp");

                $message = str_replace($campos, $representante, $message);

                $to = 'websecretaria.jb@gmail.com';

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

                $headers .= 'From: Notificação <secretarianet@notification.com>' . "\r\n";

                $mail = mail($to, $subject, $message, $headers);
                return 0;

            } else {

                echo "<h3>Não foi possivel realizar seu cadastro</h3>"; 
                return 0;

            
            }

        }

    }

?>