<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realizar agendamento</title>
</head>
<body>
    
</body>
</html>
<?php
    include "../login/confirma-login-paginas.php";
    include_once ("../login/conecta-banco.php") ;


    $data = $_POST['data'];
    $tempo = $_POST['tempo'];
    $msg = $_POST['msg'];
    $servico = $_POST['servico'];
    $cd_cliente = $informacoes[0]['cd_cliente'];
    $cd_profissional = $_GET['id'];


    $contador = 0;


    date_default_timezone_set('America/Sao_Paulo');
    $dataatual = date('d/m/y');
    $horaatual = date('H:i:s');

    $horaatualizada = $horaatual[0].$horaatual[1];
    $atual = (int)$horaatualizada-1;
    $hora = $tempo[0].$tempo[1];


    $diaatual = $dataatual[0].$dataatual[1];  
    $mesatual = $dataatual[3].$dataatual[4]; 
    $anoatual = $dataatual[6].$dataatual[7]; 

    $ano = $data[0].$data[1].$data[2].$data[3];
    $mes = $data[5].$data[6];
    $dia =  $data[8].$data[9]; 
    
    if($dia < $diaatual)
    {
        if($mes == $mesatual)
        {
                echo "<script>alert('Este agendamento é impossível pois não podemos voltar ao passado :)');
                var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
                $contador++;
        }
    }

    if($dia == $diaatual)
    {
        if($mes == $mesatual)
        {
            if($hora < $atual){
                echo "<script>alert('Este agendamento é impossível pois não podemos voltar ao passado :)');
                var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
                $contador++;
            }
        }
    }

    if($ano < 2019)
    {
    echo "<script>alert('Este agendamento é impossível pois não podemos voltar ao passado :)');
    var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
    $contador++;
    }
    else if($ano > 2020)
    {
    echo "<script>alert('Este agendamento é impossível pois não trabalhamos com o futuro distante :)');
    var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
    $contador++;
    }

    if($contador == 0)
    {
    $comandoDataSQL = "INSERT INTO tb_agendamento(dt_agendamento, hr_agendamento, cd_cliente, cd_profissional) VALUES";
    $comandoDataSQL .= " ('$data', '$tempo', '$cd_cliente',  '$cd_profissional' )";
    $resComDTsql = $con->query($comandoDataSQL) ;

    $comandoMsgSQL = "INSERT INTO `tb_servico`(`nm_servico`, `ds_servico`) VALUES"; 
    $comandoMsgSQL .= "('$servico','$msg')";
    $resComMsgsql = $con->query($comandoMsgSQL) ;


    $linhadaDT = mysqli_affected_rows($con);

    if($linhadaDT == 1){
    echo"<meta charset='utf-8'>
    <script language='javascript' type='text/javascript'>
    alert('Obaa!! Seu agendamento será confirmado em breve!! O profissional irá confimar o serviço e diponibilizará o valor em breve!!');
    window.location.href='profissionais.php';</script>";
    }    else{
        echo"<meta charset='utf-8'>
        <script language='javascript' type='text/javascript'>
        alert('Agendamento não realizado !');
        window.location.href='profissionais.php';</script>";
    }

    }
    else{
        echo"<script>alert('Esse agendamento foi cancelado :)')</script>";
    }
?>  
