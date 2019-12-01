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
            include "../../index/menu-profi.php";
        ?>
        <div style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="../sql/update-alteracoes.php" method="POST">
                        <br><p><b>Alterar seu nome</b><br> </p>
                    <div class="input-group input-group-sm mb-3">                        
                        <input style="border-radius: 50px;" type="text" name="nome" class="form-control" aria-label="Small" require placeholder="Alterar seu nome para os seus cliente" aria-describedby="inputGroup-sizing-sm">
                    </div>


                    <p> <b>Alterar seu email</b></p>
                    <div class="input-group input-group-sm mb-3">                        
                        <input style="border-radius: 50px;" type="email" class="form-control" name="email" aria-label="Small" require placeholder="Alterar email" aria-describedby="inputGroup-sizing-sm">
                    </div>
                        <button type="submit" style="width: 500px; border-radius: 20px;background-color:  #922c93;color: #FFFFFF;outline:none; border:solid 1px black;padding:2%;display:block;margin:auto;">Alterar</button>
                    </form>
                </div>
                <!-- PARTE DA FOTO DO USUARIO -->
                <div class="col-md-6" style="background-color: #a869a8; border: dotted 2px black; border-radius: 70px; padding: 2%; text-align:center; margin:auto;width: 300px;">
                    <form style="margin-top: -60px;" class="imagem" action="../foto/upload.php" method="POST" enctype="multipart/form-data">
                        <br/>
                        <br/>
                        <?php          
                            echo "<img class='imgProf' src=../foto/arquivos/".$resultado_foto['ds_caminho_img'].">";
                            ?>
                        <div class="mt-5">    
                            <input type="file" style="border-radius: 20px;background-color:  #922c93;color: #FFFFFF;outline:none; border:solid 1px black;padding:2%;display:block;margin:auto;" name="arquivo" id="arquivo" /> <br />
                            <input  style="border-radius: 20px;background-color:  #922c93;color: #FFFFFF;outline:none; border:solid 1px black;padding:2%;display:block;margin:auto;" type="submit" value="Enviar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </body>
</html>
