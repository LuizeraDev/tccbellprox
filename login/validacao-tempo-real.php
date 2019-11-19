<?php
require_once "conecta-banco.php";

if(isset($_POST["email"])){
$conexao = mysqli_connect(servidor, user, senha, db) or die ("Impossível conectar com a base de dados.");
$conexao->set_charset("ut8");

$email = $_POST['email'];

$resultado = mysqli_query($conexao, "SELECT nm_email_cliente FROM tb_cliente WHERE nm_email_cliente='$email'");

$email_contagem = mysqli_num_rows($resultado);

    if($email_contagem){
        die('<font color="red">Email Indisponível</font>');
    }
    else{
        die('<font color="green">Email disponível</font>');
    }
}
