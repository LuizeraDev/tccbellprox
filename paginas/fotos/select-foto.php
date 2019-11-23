<?php
    session_start();
    $d = $_SESSION['cd_cliente'];
    
    foreach($d as $dados)
    {
        echo $cd_cliente = $dados['cd_cliente'];
    }

    die(); 
  
    $comandoSQLfoto =  "SELECT ds_caminho_img from tb_cliente where cd_cliente = '$cd_cliente'";
    $resultado_foto = mysqli_query($con, $comandoSQLfoto);
    $resultado_foto = mysqli_fetch_array( $resultado_foto);
?>