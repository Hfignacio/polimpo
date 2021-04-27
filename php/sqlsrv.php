<?php

    require_once "conec-sqlsrv.php";

    class Sql
    {

        public function selectQuery($query) {

            try{

                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query($query);
                return $result   = $query->fetchAll();

            }catch(Exception $e){
                echo $e->getMessage();
                exit;
            }

        }

        public function insertQuery($query) {

            try{

                $Conexao    = Conexao::getConnection();
                $stmt     = $Conexao->prepare($query);
                return $result   = $stmt->execute();

            }catch(Exception $e){
                echo $e->getMessage();
                exit;
            }

        }

        public function rep($fname,$fcpf,$fdtnasc,$faddress,$fcity,$festate,$ftel,$fcel,$fbancname,$fagn,$fcc,
                $femail,$flinkedin,$fdtdisp) {

                $query = "INSERT INTO tb_c_representante (
                NomeRepresentante, 
                CPFRepresentante, 
                DataNasc, 
                Endereco, 
                Cidade, 
                Estado, 
                Telefone, 
                Telefone_celular, 
                BncNome, 
                AgNumero, 
                CcNumero, 
                Email, 
                LinkedIn, 
                DtDisp) 
                VALUES ('".$fname."','".$fcpf."','".$fdtnasc."','".$faddress."','"
                .$fcity."','".$festate."','".$ftel."','".$fcel."','".$fbancname."','".$fagn."','".$fcc."','"
                .$femail."','".$flinkedin."','".$fdtdisp."');";

                return $query;

        }

    }

?>