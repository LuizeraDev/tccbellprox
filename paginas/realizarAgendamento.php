<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    for($i = 0; $i < 4; $i++)
    {
        $ano = $data[$i]; 
        if($ano < 2019){
        echo "<script>alert('Este agendamento é impossível pois não podemos voltar ao passado :)');
        var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
        $contador++;
        break;
        }
        else if($ano > 2020)
        {
        echo "<script>alert('Este agendamento é impossível pois não trabalhamos com o futuro distante :)');
        var r = confirm('Você será redirecionado para a sua página principal'); if(r == true){ window.location.href='../paginas/index.php';}</script>";
        $contador++;
        break;
        }
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
?>  
