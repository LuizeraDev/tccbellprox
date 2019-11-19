<?php
    $comandoSQLfoto =  "SELECT ds_caminho_img from tb_cliente where cd_cliente = 2";
    $resultado_foto = mysqli_query($con, $comandoSQLfoto);
    $resultado_foto = mysqli_fetch_array( $resultado_foto);
?>