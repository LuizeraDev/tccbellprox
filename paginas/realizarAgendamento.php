<?php
    include "../login/confirma-login-paginas.php";
     require("../login/conecta-banco.php") ;


    $data = $_POST['data'];
    $tempo = $_POST['tempo'];
    $msg = $_POST['msg'];
    $servico = $_POST['servico'];
    $cd_cliente = $informacoes[0]['cd_cliente'];
    

    $selectProfi = "SELECT cd_profissional FROM `tb_profissional` WHERE 1" ;
    $cd_profissional = mysqli_query($con,  $selectProfi);
    $cd_profissional = mysqli_fetch_array( $cd_profissional,MYSQLI_ASSOC);


    $comandoDataSQL = "INSERT INTO tb_agendamento(dt_agendamento, hr_agendamento, cd_cliente, cd_profissional) VALUES";
    $comandoDataSQL .= " ('$data', '$tempo', '$cd_cliente[cd_cliente]',  '$cd_profissional[cd_profissional]' )";
    $resComDTsql = $con->query($comandoDataSQL) ;

    $comandoMsgSQL = "INSERT INTO `tb_servico`(`nm_servico`, `ds_servico`) VALUES"; 
    $comandoMsgSQL .= "('$servico','$msg')";
    $resComMsgsql = $con->query($comandoMsgSQL) ;


    $linhadaDT = mysqli_affected_rows($con);



    if($linhadaDT == 1){
    echo"<meta charset='utf-8'>
    <script language='javascript' type='text/javascript'>
    alert('Obaa!! Seu agendamento será confirmado em breve!!<br> O profissional irá confimar o serviço e diponibilizará o valor em breve!!');
    window.location.href='profissionais.php';</script>";
    }    else{
        echo"<meta charset='utf-8'>
        <script language='javascript' type='text/javascript'>
        alert('Agendamento não realizado !');
        window.location.href='profissionais.php';</script>";
    }
?>  
