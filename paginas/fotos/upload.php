<?php
include "../login/confirma-login-paginas.php";
if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if(isset($_FILES['arquivo']) ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['arquivo']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['arquivo']['name']; // Recebe o nome do arquivo.
		$upImg = "UPDATE tb_cliente SET ds_caminho_img = '$name' where cd_cliente = 2";
		$resultadoUP = $con->query($upImg) ;


		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			echo"<meta charset='utf-8'>
			<script language='javascript' type='text/javascript'>
			alert('Foto adicionada!');
			window.location.href='index.php';</script>";
			 
		}else {
			echo "<p align=center>O arquivo não pode ser copiado para o servidor.</p>";
		}
	}

}

