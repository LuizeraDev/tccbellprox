<?php 
 include "../login/confirma-login-paginas.php";
 include "detalhes.php";
 include 'sql/select-profissional.php';
 header("Content-type: text/html; charset=utf-8");
 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
    <title>Bell Prox - Profissionais</title>
    <!--LOGO-->
    <link rel="shortcut icon" href="../img/logo.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="../index/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/profEstilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/estiloModal.css" />
    <meta charset="utf-8">  
    

</head>

<body>


    <?php 
        include "../index/menu.php";
        ?>


    <div class="container preto">
        <div class="row">
            <div class="col-md">
                <?php foreach ($resultado_prof as $a => $c ){ ?>
                <div class="border mt-1 mb-4" >
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><img class="imgProf p-2 mr-auto " src="../profissional/foto/arquivos/<?php echo $resultado_prof[$a]['ds_caminho_img']; ?>"></br>
                            </div>
                            <div class="col-md">
                                <br>
                                <h5 class="card-title"><?php echo $resultado_prof[$a]['nm_profissional'];?> </h5>
                                <p class="card-text "><?php echo $resultado_prof[$a]['ds_profissional'];?> <br><br></p>
                                
                                <a class="link" href="teladeagendamento.php?id=<?php echo $resultado_prof[$a]['cd_profissional'];?>">
                                <button type="button" class="btn btn-primary">Realizar Agendamento</button>
                                    </a>
                                </button>
                            </div>
                        </div> 
                    </div>                                                        
                                                        
                <?php }?>





        </div>
    </div>


</body>



</html>