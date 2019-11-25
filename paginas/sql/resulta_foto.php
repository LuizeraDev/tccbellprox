<?php 
$informacoes[0]['cd_cliente'] = $cd_cliente;
$comandoSQLfoto =  "SELECT ds_caminho_img from tb_cliente where cd_cliente = '$cd_cliente'";
$resultado_foto = mysqli_query($con, $comandoSQLfoto);
$resultado_foto = mysqli_fetch_array( $resultado_foto);

?>