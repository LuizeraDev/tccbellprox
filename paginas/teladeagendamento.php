<?php 
include "../login/confirma-login-paginas.php";

$cd_profissional = $_GET['id'];

$query_fotoprof = "SELECT cd_profissional,nm_profissional,ds_profissional, ds_caminho_img from tb_profissional
    where cd_profissional = '$cd_profissional'";
$resultado_prof =mysqli_query($con, $query_fotoprof);
$resultado_prof = mysqli_fetch_all($resultado_prof,MYSQL_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
    <title>Bell Prox - Profissionais</title>
    <!--LOGO-->
    <link rel="shortcut icon" href="../img/logo.png" />
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../index/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/profEstilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/estiloModal.css" />
    <title></title>
</head>

<body>
    <?php 
        include "../index/menu.php";
        ?>

    <div class="container">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Agendar com
                <?php echo $resultado_prof[0]['nm_profissional'];?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div >

            <form action="realizarAgendamento.php?id=<?php echo $cd_profissional?> " method="POST">
            <div class="container">
                <div class='row'>
                    <div class="col-md-6">
                        <div class="text-input">
                            <input id="username" type="date" placeholder="Qual data voce deseja?" name="data"
                                autocomplete="off" required />
                            <label for="username">Selecione a data:</label>
                        </div>
                        <div class="col-md-6">
                            <div class="text-input">
                                <input id="username" type="time" name="tempo" autocomplete="off" required />
                                <label for="username">Hora do agendamento</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-input">
                    <input id="username" type="text" name="msg"
                        placeholder="Deseja enviar alguma mensagem para esse profissinal?" autocomplete="off" />
                    <label for="username">Deseja enviar alguma mensagem para o profissional?</label>
                </div>
                <p>Qual serviço você gostaria de realizar com <?php echo $resultado_prof[0]['nm_profissional'];?> ( 1
                    por agendamento, para mais servicos, realizar outro agendamento) </p>
                <div class="text-input">
                    <input id="username" type="text" name="servico" placeholder="Escolher servico" autocomplete="off"
                        required />
                    <label for="username">Diga ao profissional o serviço desejado.</label>
                </div>

            </div>
            <div >
                <button value="<?php echo $resultado_prof[0]['cd_profissional']?>"
                    class="ml-alto btn btn-primary">SALVAR INFORMAÇÕES</button>

            </div>
        </div>
    </div>
    </div>
    </form>
</body>

</html>