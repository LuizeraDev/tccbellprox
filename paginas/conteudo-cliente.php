<?php 
include('select-servicos.php');
$nm_cliente = $informacoes[0]['nm_cliente'];


include 'sql/resulta_foto.php';

include "detalhes.php";
?>
<div class="container">

    <div class="row">
        <br>
        <br>
        <div class="col-md-3 ">
            <!-- menu lateral -->
            <div class="list-group">
                <h3 class="list-group-item list-group-item-action menu text-center " style="color:white;"> Menu</h3>
                <a href="profissionais.php" class="list-group-item list-group-item-action">Realizar agendamentos</a>
                <a href="configuracoes.php" class="list-group-item list-group-item-action">Configurações</a>

            </div>



        </div>

        <div class="col-md-6 ">
        

            <h2 class="text-center ">Seus Requisitados</h2>
            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <?php foreach( $resultados_agendamento as $d => $dad){
                        if($resultados_agendamento[$d]['cd_agendamento'] == true ){ ?>

                        <div class="card mt-5 mb-3 altura card-centraliza">
                            <div class="row no-gutters">
                                <div class="col-md ">
                                    <br /><?php echo "<img class='imgProf' src=../profissional/foto/arquivos/".$resultados_agendamento[$d]['ds_caminho_img'].">";?>
                                </div>
                                <div class="col-md">
                                    <div class="card-body">
                                        <h5 class="card-title">Agendamento com <?php echo $resultados_agendamento[$d]['nm_profissional'];?></h5>
                                        <p class="card-text ">data dos
                                            agendamentos<br><?php echo  inverteData($resultados_agendamento[$d]['dt_agendamento']); ?><br><br>
                                        </p>
                                        <?php 
                                               
                                                if ($resultados_agendamento[$d]['ds_confirmacao_agendamento'] == 1){
                                                    echo"<img src='../img/img1.png' style='margin-top: -50px; width:50px; height:50px;'> <br>";
                                                    echo"<strong>O agendamento foi confirmado com sucesso.</strong><br>";

                                                }else {
                                                    echo "<h5><b>Pendente</b></h5>";
                                                }
                                                ?>
                                        <br>
                                        <p>Por favor entre em contato com o profissional pelo numero ou email: <?php
                                            echo $resultados_agendamento[$d]['cd_tel_cell_profissional'];

                                        ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <?php } else {
                                                echo "não há nenhum agendamneto";
                                            }} ?>

                    </div>






                </div>
            </div>
        </div>

        <div class="col-md-3">
            <h2>Olá, <?php echo $nm_cliente;?></h2>
            <form class="imagem" action="../paginas/fotos/upload.php" method="POST" enctype="multipart/form-data">
                <br />
                <?php
              


                    echo "<img class='imgProf' src=fotos/arquivos/".$resultado_foto['ds_caminho_img'];
          
                    ?>
                <p style="display:block; margin:auto;;">
                Arquivo:
                <input type="file" style="margin-left:-30px; border:none; padding:1%;" class="ghost" name="arquivo" id="arquivo"> <br><br>
                <input type="submit" style="margin-left:25%; border:none;" class="ghost" value="Enviar">
                </p>
                <br>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>