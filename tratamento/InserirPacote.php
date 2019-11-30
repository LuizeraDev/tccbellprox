<?php

	$cate = $_POST['categoria'];
	$tema = $_POST['temapacote'];
	$tipo = $_POST['tipo'];
		
	if($_GET['funcao'] == "gravar" && is_file($_FILES['imagem']['tmp_name'])){
	
	$foto = $_FILES['imagem']['name'];
	
	$foto = str_replace(" ","_", $foto);
	$foto = str_replace("ã","a", $foto);
	$foto = str_replace("á","a", $foto);
	$foto = str_replace("à","a", $foto);
	$foto = str_replace("é","e", $foto);
	$foto = str_replace("è","e", $foto);
	$foto = str_replace("í","i", $foto);
	$foto = str_replace("ì","i", $foto);
	$foto = str_replace("ó","o", $foto);
	$foto = str_replace("õ","o", $foto);
	$foto = str_replace("ç","c", $foto);
	
	$foto = strtolower($foto);	
	//echo "$foto - com ajuste<br>";
	
	$tipos = array('image/jpeg','image/pjpeg','image/jpeg','image/gif','image/png');
	$arqType = $_FILES['imagem']['type'];
	if(array_search($arqType,$tipos) === false){
		echo "
		<meta http-equiv=refresh content='1; url=CriarPacote.php'>
		<script type='text/javascript'>
		alert('Formato inválido');
		</script>";	
	}
	else
	{
		
		if(file_exists("Pacote_Imagem/$foto")){
			$a = 1;
			
			while(file_exists("Pacote_Imagem/[$a]$foto")){
				$a++;
				
			}
			$foto = "[".$a."]".$foto;
		}
		
			if(!move_uploaded_file($_FILES['imagem']['tmp_name'], "Pacote_Imagem/".$foto)){
				echo "
				<meta http-equiv=refresh content='0; url=CriarPacote.php'>
				<script type='text/javascript'>
					alert('Formato inválido');
				</script>";	
			
			}
			if($tema == '' && $categoria == '' && $tipo == ''){
				echo "<script>
						alert('erro');
						window.location.href = 'ListarItens.php';	
				</script>";
				
			}	
			else
			{
				
				include_once 'conexao.php';
				
				
					include_once "conexao.php";
					session_start();
					
					$sql = "select cd_decorador from decorador where nm_login = '".$_SESSION['usu']."'";
					$id = mysqli_query($bd, $sql);
								while($pegar = mysqli_fetch_assoc($id)){
									$variavel = $pegar['cd_decorador'];
								}
				
					
	
				$textoSQL = "INSERT INTO pacote (cd_pacote,cd_decorador,nm_pacote,nm_categoria,img_pacote,tipo_pacote,ic_ativo)
				VALUES (default,'".$variavel."','".$tema."','".$cate."','".$foto."','".$tipo."',0)"; 
				
				
				//mp ($textoSQL); die();
				
				$result = mysqli_query($bd, $textoSQL) or die (mysqli_error($bd));
				
				$textoSQL = "call p_last_id()";
				$query = mysqli_query($bd, $textoSQL) or die (mysqli_error($bd));
				 
				 $linha = mysqli_fetch_assoc($query);
				 $teste = implode("",$linha);
				 
				 $_SESSION['pacote'] = $teste;
				 
				
					
				
					echo "<script>
						window.location.href = 'ListarItens.php';		
					</script>	
					";	
			}
	}
	
}else{
	echo "<script>
			window.location.href = 'CriarPacote.php';
			alert('Informações invalidas!');</script>";
}	

?>