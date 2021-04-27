<?php

	class Sql {

		public $conn;

		public function __construc() {

			return $this->conn = mysqli_connect("secretarianet.com","secret48_reptt","secweb19","secret48_clinica_jose");

			/* check connection */
			if (mysqli_connect_errno()) {
			    printf("Connect failed: %s\n", mysqli_connect_error());
			    exit();
			}
			
		}

		public function Query($string_query) {

			$conn = mysqli_connect("secretarianet.com","secret48_reptt","secweb19","secret48_clinica_jose");

			if ($conn == false) {
				
				printf("Conncetion Status: Fail");
			
			} else {

				return mysqli_query($conn,$string_query);

			}

		}

		public function rep($fname,$fcpf,$fdtnasc,$faddress,$fcity,$festate,$ftel,$fcel,$fbancname,$fagn,$fcc,
            $femail,$flinkedin,$fdtdisp,$ftipocc,$fcomp,$fcep,$fsenha) {

			$check = "SELECT CPFRepresentante FROM tb_c_representante WHERE CPFRepresentante = '".$fcpf."'";

	        $result = $this->Query($check);
	        
	        if (mysqli_num_rows($result) > 0) {

				$query = "UPDATE tb_c_representante
				SET
					NomeRepresentante = '$fname', 
					CPFRepresentante  = '$fcpf', 
					DataNasc = '$fdtnasc', 
					Endereco = '$faddress', 
					Cidade = '$fcity', 
					Estado = '$festate', 
					Telefone = '$ftel', 
					Telefone_celular = '$fcel', 
					BncNome = '$fbancname', 
					AgNumero = '$fagn', 
					CcNumero = '$fcc', 
					Email = '$femail', 
					LinkedIn = '$flinkedin', 
					DtDisp = '$fdtdisp', 
					TipoConta = '$ftipocc', 
					Complemento = '$fcomp',
					Cep = '$fcep'
				WHERE 
					CPFRepresentante = '$fcpf'";

			} else {

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
				DtDisp,
				DtCadastro, 
				TipoConta, 
				Complemento,
				Cep,
				Senha) 
				VALUES ('".$fname."','".$fcpf."','".$fdtnasc."','".$faddress."','"
				.$fcity."','".$festate."','".$ftel."','".$fcel."','".$fbancname."','".$fagn."','".$fcc."','"
				.$femail."','".$flinkedin."','".$fdtdisp."',DATE_FORMAT(NOW(), '%d/%m/%Y'),'".$ftipocc."','".$fcomp."','".$fcep."','".$fsenha."');";

			}

			return $this->Query($query);

		}


		public function __desctruc() {

			mysqli_close($this->conn);

		}
		
	}

?>