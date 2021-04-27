<?php require_once("sql.php");

$conn = new Sql();

echo "teste<\br>"; 

$string = "INSERT INTO tb_c_representante (
NomeRepresentante, 
CPFRepresentante, 
DataNasc, 
Endereco, 
Cidade, 
Estado, 
Telefone_celular, 
BncNome, 
AgNumero, 
CcNumero, 
Email)
VALUES (
'Maria Ignacio',
'40577123807',
'22/04/1994',
'Rua Caqui',
'Embu das Artes',
'São Paulo',
'11984452203',
'Santander',
'0658',
'',
'maria.santana444@gmail.com');";

$result = $conn->query($string);

echo var_dump($result);

/*
$row = $result->fetch_array(MYSQLI_NUM);

printf ("%s (%s)\n", $row[0], $row[0]);
*/
?>
