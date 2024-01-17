<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
 {
   echo "Erro";
 }
else
 {
  echo "Dados enviados com sucesso";
 }

    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cargo = $_POST['cargo'];
        $turno = $_POST['turno'];
        $valor = $_POST['valor'];
        $dia = $_POST['dia'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,cargo,turno,valor,dia) 
        VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$cargo','$turno','$valor','$dia')");

    }

?>
