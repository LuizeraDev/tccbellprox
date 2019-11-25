<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Bell Prox - Sobre</title>
    <!--LOGO-->
    <link rel="shortcut icon" href="../img/logo.png" />
    <!--MAIN CSS-->
    <link rel="stylesheet" type="text/css" href="../index/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen" />


</head>

<body>

    

    <nav class="navbar navbar-expand-lg menu" align="center" >
        <img src="../img/logo.png" class="navbar-brand img">
        <h4 class="text-white">BellProx</h4>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php "style="color:white; " >Novidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"style="color:white;"  >Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index/sobre.php" style="color:white;"  >Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/login.php"  >
                    <span style="color:white;">Acesso</span>
                    <i class="fas fa-user-circle fa-lg" style="color:white;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    include "conteudo-sobre.php";
    ?>



</body>

</html>