<?php 
include "../../login/confirma-login-paginas.php";
include "../detalhes.php";
include '../sql/select-foto.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Bell Prox - Meu Perfil</title>
        <!--LOGO-->
        <link rel="shortcut icon" href="../img/logo.png" />
        <!--MAIN CSS-->
        <link rel="stylesheet" type="text/css" href="../../index/main.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../../css/profEstilo.css" />
        <link rel="stylesheet" type="text/css" href="../../css/.css" />
        <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css" media="screen" />
    </head>

    <body>
        <?php 
            include "../../index/menu.php";
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="../sql/update-alteracoes.php" method="POST">
                        <br><p>Deseja Alterar o nome:<br> </p>
                    <div class="input-group input-group-sm mb-3">                        
                        <input type="text" name="nome" class="form-control" aria-label="Small" require placeholder="Alterar seu nome para os seus cliente" aria-describedby="inputGroup-sizing-sm">
                    </div>


                    <p >Alterar email</p>
                    <div class="input-group input-group-sm mb-3">                        
                        <input type="email" class="form-control" name="email" aria-label="Small" require placeholder="Alterar email" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary ">Alterar</button>
                    </center>
                    </form>
                </div>
                <div class="col-md-6">
                    <form class="imagem" action="../foto/upload.php" method="POST" enctype="multipart/form-data">
                        <br/>
                        <br/>
                        <?php          
                            echo "<img class='imgProf' src=../foto/arquivos/".$resultado_foto['ds_caminho_img'].">";
                            ?>
                        <div class="mt-5">    
                            <input type="file" name="arquivo" id="arquivo" /> <br />
                            <input type="submit" value="Enviar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
