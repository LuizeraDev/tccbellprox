<?php
	include "select-servicos.php";
?>

<html lang="PT-BR">

<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
	<div class="table-title">
		<h3 >Registro de atividades de <?php
			
			  if(isset($informacoes)){
				   if($informacoes != null)
					   { echo $informacoes[0]['nm_cliente'];}
					   } else 
					   		{echo $resultado_prof[0]['nm_profissional'];}; ?></h3>

	</div>
	
	<table class="table-fill">
		<thead>
			<tr>
				<th class="text-left">Tipo de serviço</th>
				<th class="text-left">Data</th>
				<th class="text-left">Preço do serviço</th>
			</tr>
		</thead>
		<tbody class="table-hover">

		<pre>
			<?php
			var_dump($resultados_servicos);
			?>
		<pre>
		

			<tr>
				<td class='text-left'>

					<?php 
						echo $resultados_servicos['nm_servico'] ;
					
					?>
				</td>
				<td class='text-left'>
					<?php
						echo $resultados_servicos['dt_agendamento'];	

						?>
				</td>
				<td class='text-left'>
					<center>
					<?php
	

							echo $resultados_servicos['vl_servico'];
				
						?>
					</center>
				</td> 	

			</tr>
		</tbody>
	</table>


</body>

</html>