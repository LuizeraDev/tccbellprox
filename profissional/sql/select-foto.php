<?php
    $comandoSQLfoto =  "SELECT ds_caminho_img from tb_profissional where cd_profissional = '$cd_profissional'";
    $resultado_foto = mysqli_query($con, $comandoSQLfoto);
    $resultado_foto = mysqli_fetch_array( $resultado_foto);
?>