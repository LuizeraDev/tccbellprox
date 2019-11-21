<?php 

//Acesso ao Banco de Dados
include('conecta-banco.php');

//obtem os valores digitados
$nome = $_POST["username"];
$senha = $_POST["password"];
$email = $_POST["email"];
$celular = $_POST["cellphone"];
$radiobutton = $_POST["radiobutton"];

/* CADASTRANDO CLIENTE */
/* ---------------------------------------- */
if($radiobutton == "1"){ /* verifica se o usuário é um cliente pelo radio button */
//VALIDAÇÃO COM PHP
$res = $con->query("SELECT nm_email_cliente FROM tb_cliente WHERE nm_email_cliente = '$email'");
$array = $res->fetch_array();
$logarray = $array['nm_email_cliente'];

$res = $con->query("SELECT cd_tel_cell_cliente FROM tb_cliente WHERE cd_tel_cell_cliente = '$celular'");
$array = $res->fetch_array();
$logarray2 = $array['cd_tel_cell_cliente'];

    if($logarray === $email){ 
            echo"<meta charset='utf-8'><script language='javascript' 
            type='text/javascript'>alert('Já existe um cliente utilizando este email');
            window.location.href='login.php';</script>";           
    } 
    if($logarray2 === $celular)
    {
        echo"<meta charset='utf-8'><script language='javascript' type='text/javascript'>alert('Já existe um cliente utilizando este celular');
        window.location.href='login.php';</script>";
    }
//INSERINDO VALORES   
    elseif($logarray != $email && $logarray2 != $celular){
        $res = $con->query("INSERT INTO tb_cliente (nm_cliente,cd_senha_cliente,nm_email_cliente,cd_tel_cell_cliente) 
        VALUES ('$nome','$senha', '$email', '$celular')");
        echo"<meta charset='utf-8'><script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso!');
        window.location.href='login.php';</script>";
    }
}

/* CADASTRANDO PROFISSIONAL */
/* ---------------------------------------- */
else if($radiobutton == "2"){
    $res = $con->query("SELECT nm_email_profissional FROM tb_profissional WHERE nm_email_profissional = '$email'");
    $array = $res->fetch_array();
    $logarray3 = $array['nm_email_profissional'];
    
    $res = $con->query("SELECT cd_tel_cell_profissional FROM tb_profissional WHERE cd_tel_cell_profissional='$celular'");
    $array = $res->fetch_array();
    $logarray4 = $array['cd_tel_cell_profissional'];
    
        if($logarray3 === $email){ 
                echo"<meta charset='utf-8'><script language='javascript' 
                type='text/javascript'>alert('Esse email já está sendo utilizado por um profissional');
                window.location.href='login.php';</script>";           
        } 
        if($logarray4 === $celular)
        {
            echo"<meta charset='utf-8'><script language='javascript' type='text/javascript'>alert('Esse celular já está sendo utilizado por um profissional');
            window.location.href='login.php';</script>";
        }
    //INSERINDO VALORES   
        else if($logarray3 != $email && $logarray4 != $celular) {
            $res = $con->query("INSERT INTO tb_profissional (nm_profissional,cd_senha_profissional,nm_email_profissional,cd_tel_cell_profissional) 
            VALUES ('$nome','$senha', '$email', '$celular')");
             echo"<meta charset='utf-8'><script language='javascript' type='text/javascript'>alert('Profissional cadastrado com sucesso!');
             window.location.href='login.php';</script>";
        }
}
else{
    echo"<meta charset='utf-8'><script language='javascript' type='text/javascript'>alert('Você não definiu se você é um Cliente ou um Profissional, tente novamente.');
             window.location.href='login.php';</script>";
}
mysqli_close($con);


