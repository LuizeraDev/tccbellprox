<?php 
 include "../login/confirma-login-paginas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Bell Prox - Profissionais</title>
    <!--LOGO-->
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" type="text/css" href="../index/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/profEstilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/estiloModal.css" />
</head>

<body>


    <?php 
        include "../index/menu.php";
        ?>

    <div class="container preto">
        <div class="row">
            <div class="col-md">

                <div class="card mt-5 mb-3 altura card-centraliza" style="max-width: 21rem; min-width: 21rem;">
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><img class="imgProf" src="../img/paulo.jpg">
                        </div>
                        <div class="col-md">
                            <div class="card-body">
                                <h5 class="card-title">Paulo Rosendo</h5>
                                <p class="card-text ">Sou um profissional especializado na area de beleza, saúde e
                                    bem-estar. <br><br></p>
                                <!-- <button class="button pos"><span>Agendar</span></button> -->

                                <!-- Modal -->
                                <!-- Button trigger modal -->
                                <button type="button" class="button pos" data-toggle="modal" data-target="#exampleModalLong">
                                    Agendar 
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">




                                                <!-- the text-input class will be used as parent for input styling -->

                                                    <div class="text-input">
                                                    <input id="password" type="password" placeholder="Password" autocomplete="off" required />
                                                    <label for="password">Password</label>
                                                </div>

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Agendar com Paulo?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="realizarAgendamento.php" method="POST">
                                                <br>
                                                <div class="text-input">
                                                    <input id="username" type="text" placeholder="Qual data voce deseja?" autocomplete="off" required />
                                                    <label for="username">Qual data voce deseja?</label>
                                                </div>
                                                <input type="time"  name="tempo" placeholder="Digite a hora desejada"><br>
                                                <br>
                                                <input type="text" name="msg" placeholder="Mensagem(OPCIONAL)">
                                                <br/>
                                                <br/>
                                                <h4>Seviços disponibiliados por Paulo</h4>
                                                <b>
                                                    <input type="checkbox" name="vehicle1" value="Cabeleireiro"> Cabelereiro
                                                    <input type="checkbox" name="vehicle2" value="Barba"> Barba
                                                    <input type="checkbox" name="vehicle3" value="Alisamento" checked> Aliasamento
                                                </b>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="SUBMIT" class="btn btn-primary">SALVAR INFORMAÇÕES</button>
                                                <form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Final modal -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md ">
                <div class="card altura mt-5 mb-3 card-centraliza" style="max-width: 21rem; min-width: 21rem;">
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><img class="imgProf" src="../img/clodoaldo.jpg">
                        </div>
                        <div class="col-md ">
                            <div class="card-body">
                                <h5 class="card-title">Clodoaldo Barbosa</h5>
                                <p class="card-text text">Realizo trabalhos como pédicure, cortes de cabelo e muitos
                                    outros trabalhos para voce!!</p>
                                <button class="button"><span>Agendar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md  ">
                <div class="card altura mt-5 mb-3 card-centraliza" style="max-width: 21rem; min-width: 21rem;">
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><img class="imgProf" src="../img/camila.jpg">
                        </div>
                        <div class="col-md ">
                            <div class="card-body">
                                <h5 class="card-title">Camila Prieto</h5>
                                <p class="card-text">Realizo trabalhos como pédicure, cortes de cabelo e muitos outros
                                    trabalhos para voce!!</p>
                                <button class="button"><span>Agendar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>