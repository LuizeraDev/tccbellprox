<?php 
 include "../login/confirma-login-paginas.php";
 include "detalhes.php";
 include 'sql/select-profissional.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
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
        <pre>   
            <?php
                echo $informacoes[0]['nm_cliente'];
                echo "<br>";
                echo$resultado_prof[0]['cd_profissional'];
            ?>
        </pre>

    <div class="container preto">
        <div class="row">
            <div class="col-md">
                
                <div class="border mt-1 mb-4" >
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><img class="imgProf p-2 mr-auto " src="../profissional/foto/arquivos/<?php echo $resultado_prof[0]['ds_caminho_img']?>"></br>
                            </div>
                            <div class="col-md">
                                <br>
                                <h5 class="card-title"><?php echo $resultado_prof[0]['nm_profissional'];?> </h5>
                                <p class="card-text "><?php echo $resultado_prof[0]['ds_profissional']; ?> <br><br></p>
                                <button type="button" class="button pos" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Agendar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Agendar com <?php echo $resultado_prof[0]['nm_profissional']?>?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="realizarAgendamento.php" method="POST">
                                                    <br>
                                                    <div class="container">
                                                        <div class="col">
                                                            <div class="text-input">
                                                                <input id="username" type="date"
                                                                    placeholder="Qual data voce deseja?" name="data"
                                                                    autocomplete="off" required />
                                                                <label for="username">Qual data voce deseja?</label>
                                                            </div>
                                                        <div class="col">
                                                            <div class="text-input">
                                                                <input id="username" type="time" name="tempo" 
                                                                    autocomplete="off" required />
                                                                <label for="username">Hora do agendamento</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-input">
                                                        <input id="username" type="text" name="msg"
                                                            placeholder="Deseja enviar alguma mensagem para esse profissinal?"
                                                            autocomplete="off"  />
                                                        <label for="username">Deseja enviar alguma mensagem para o profissional?</label>
                                                    </div>
                                                    <p>Qual servico voce gostaria de realizar com <?php echo $resultado_prof[0]['nm_profissional'];?> ( 1 por agendamento, para mais servicos, realizar outro agendamento) </p>
                                                    <div class="text-input">
                                                        <input id="username" type="text" name="servico"
                                                            placeholder="Escolher servico"
                                                            autocomplete="off" required />
                                                        <label for="username">Diga ao profissional Qual serviço voce deseja </label>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
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
    

                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>


</body>

</html>