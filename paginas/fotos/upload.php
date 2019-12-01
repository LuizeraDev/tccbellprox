<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Erro</title>
</head>
<body>
	
</body>
</html>
<?php

include '../../login/conecta-banco.php';
include '../../login/confirma-login-paginas.php';
$cd_cliente = $informacoes[0]['cd_cliente'];
if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if(isset($_FILES['arquivo']) ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['arquivo']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['arquivo']['name']; // Recebe o nome do arquivo.
		$upImg = "UPDATE tb_cliente SET ds_caminho_img = '$name' where cd_cliente = '$cd_cliente'";
		$resultadoUP = $con->query($upImg) ;


		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
            echo"<meta charset='utf-8'>
            <script language='javascript' type='text/javascript'>
            alert('Foto Adicionada com sucesso');
            window.location.href='../index.php';</script>";
		}else {
			echo"<script>alert('O arquivo não pode ser copiado para o servidor.')</script>";
		}
	}

}

