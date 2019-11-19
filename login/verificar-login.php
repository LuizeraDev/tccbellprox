<?php 
//INICIA A SESSAO
 session_start();

 // Acesso ao banco de dados
include('conecta-banco.php');

if(isset($_POST['radiobutton2'])){
//PEGA OS VALORES DOS RADIO BUTTONS CLIENTE E PROFISSIONAL
$radiobutton = $_POST["radiobutton2"];
if($radiobutton == "3"){ /* verifica se o usuário é um cliente pelo radio button */
if(isset($_POST['login'])){
    //passando o method post para variavel
    $login_usuario=mysqli_real_escape_string($con,$_POST['login']);
    $senha_usuario=mysqli_real_escape_string($con,$_POST['senha']);
    //fazendo o select
    $selecionar_usuario="SELECT `cd_tel_cell_cliente`, `cd_senha_cliente`, `nm_cliente` ,`nm_email_cliente` FROM `tb_cliente` WHERE cd_senha_cliente='$senha_usuario' and (cd_tel_cell_cliente = '$login_usuario' or nm_email_cliente ='$login_usuario')";
    //executando o select
    $procurar=mysqli_query($con,$selecionar_usuario);
    //checando atras de resultados
    $checar_usuario=mysqli_num_rows($procurar);

    $query = "SELECT cd_cliente, nm_cliente,nm_email_cliente,cd_tel_cell_cliente FROM tb_cliente WHERE cd_senha_cliente='$senha_usuario' and (cd_tel_cell_cliente = '$login_usuario' or nm_email_cliente ='$login_usuario')";
    $result = mysqli_query($con, $query);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
    $informacoes = $result;

    $_SESSION['nm_email_cliente'] = $informacoes; //NECESSARIO
    $_SESSION['cd_tel_cell_cliente'] = $informacoes; //NECESSARIO
    $_SESSION['nm_cliente'] = $informacoes; //NECESSARIO
    $_SESSION['cd_cliente'] = $informacoes; //NECESSARIO
     /* 
    foreach ($result as $linha => $coluna) {
        var_dump($coluna['nm_cliente']);
    }
    die();
    */
    // $_SESSION['nm_cliente'] = $nome;
    $vericaCadCom = "SELECT cd_cpf_cliente, dt_nasc_cliente, cd_logradouro  FROM tb_cliente  WHERE cd_senha_cliente='$senha_usuario' and (cd_tel_cell_cliente = '$login_usuario' or nm_email_cliente ='$login_usuario')";
    $dadosSelCadCom = mysqli_query($con,  $vericaCadCom);
    $dadosSelCadCom = mysqli_fetch_all( $dadosSelCadCom,MYSQLI_ASSOC);
    $resultado =  $dadosSelCadCom;

    if($checar_usuario > 0){
        //se achou resultado ele vai gravar uma session com o nome logado e com o login do cliente
        //e vai redirecionar pra outra pagina
        $_SESSION['logado']= true;
        $_SESSION['usu_email']= $login_usuario;

        if($resultado[0]['cd_cpf_cliente'] == null || $resultado[0]['dt_nasc_cliente'] == null|| $resultado[0]['cd_logradouro'] == null){
            echo"<meta charset='utf-8'>
        <script language='javascript' type='text/javascript'>
        alert('Seu Cadastro sera direcionado para completar informações necessarias!');
        window.location.href='cadastro-completo/cadastro.php';</script>";

        
        }
        else{
            header("location:../paginas/index.php"); // direciona para a index
        }
    }else{
        echo "<script>confirm('login ou senha invalidos, tente novamente!', window.location.href='login.php')</script> ";
    }
  }
}

if($radiobutton == "4"){ /* verifica se o usuário é um profissional pelo radio button */
    if(isset($_POST['login'])){
        //passando o method post para variavel
        $login_usuario=mysqli_real_escape_string($con,$_POST['login']);
        $senha_usuario=mysqli_real_escape_string($con,$_POST['senha']);
        //fazendo o select
        $selecionar_usuario="SELECT `cd_tel_cell_profissional`, `cd_senha_profissional`, `nm_profissional` ,`nm_email_profissional` FROM `tb_profissional` WHERE cd_senha_profissional='$senha_usuario' and (cd_tel_cell_profissional = '$login_usuario' or nm_email_profissional ='$login_usuario')";
        //executando o select
        $procurar=mysqli_query($con,$selecionar_usuario);
        //checando atras de resultados
        $checar_usuario=mysqli_num_rows($procurar);
        
        $query_profissional = "SELECT cd_profissional,nm_profissional,nm_email_profissional,cd_tel_cell_profissional FROM tb_profissional WHERE cd_senha_profissional='$senha_usuario' and (cd_tel_cell_profissional = '$login_usuario' or nm_email_profissional ='$login_usuario')";
        $resultado_prof = mysqli_query($con, $query_profissional);
        $resultado_prof = mysqli_fetch_array($result);
        
        $_SESSION['cd_profissional'] = $resultado_prof; //NECESSARIO
        $_SESSION['nm_email_profissional'] = $resultado_prof; //NECESSARIO
        $_SESSION['cd_tel_cell_profissional'] = $resultado_prof; //NECESSARIO
        $_SESSION['nm_profissional'] = $resultado_prof; //NECESSARIO

        if($checar_usuario > 0){
            //se achou resultado ele vai gravar uma session com o nome logado e com o login do cliente
            //e vai redirecionar pra outra pagina
            $_SESSION['logado']= true;
            $_SESSION['nome']=$nome;
            $_SESSION['usu_email']= $login_usuario;
            header("location:../profissional/index.php");
        }else{
            echo "<script>confirm('login ou senha invalidos, tente novamente!', window.location.href='login.php')</script> ";
     }
    }
  }
}