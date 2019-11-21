

<?php 
include('select-servicos.php');
$ds_confirmacao_agendamento = $resultados_agendamento['ds_confirmacao_agendamento'];

function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

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
                    <a href="servicos.php" class="list-group-item list-group-item-action">Historico de servicos</a>
                    <a href="configuracoes.php" class="list-group-item list-group-item-action">Configurações</a>

                </div>



            </div>

            <div class="col-md-6 ">

                <h2 class="text-center ">Destaques da Semana</h2>
                <div class="container ">
                    <div class="row">
                        <div class="col-md">

                            <div class="card mt-5 mb-3 altura card-centraliza"                                >
                                <div class="row no-gutters">
                                    <div class="col-md ">
                                        <br /><img class="imgProf" src="../img/paulo.jpg">
                                    </div>
                                    <div class="col-md">
                                        <div class="card-body">
                                            <h5 class="card-title">Agendamento com </h5>
                                                <p class="card-text ">data dos agendamentos<br><?php echo  inverteData($resultados_agendamento['dt_agendamento']); ?><br><br></p>
                                                <?php 
                                               
                                                if ($ds_confirmacao_agendamento == 1){
                                                    echo"<img src='../img/img1.png' style='margin-top: -50px; width:50px; height:50px;'> <br>";
                                                    echo"<strong>O agendamento foi confirmado com sucesso.</strong><br>";

                                                }else {
                                                    echo "<h5><b>Pendente</b></h5>";
                                                }
                                                ?>
                                                <br>
                                                status de agendamento
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md ">
                            <div class="card altura mt-5 mb-3 card-centraliza"
                                >
                                <div class="row no-gutters">
                                    <div class="col-md ">
                                        <br /><img class="imgProf" src="../img/clodoaldo.jpg">
                                    </div>
                                    <div class="col-md ">
                                        <div class="card-body">
                                            <h5 class="card-title">Clodoaldo Barbosa</h5>
                                            <p class="card-text text">Realizo trabalhos como pédicure, cortes de cabelo
                                                e muitos outros trabalhos para voce!!</p>
                                            <button class="button"><span>Agendar</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md  ">
                            <div class="card altura mt-5 mb-3 card-centraliza"
                                >
                                <div class="row no-gutters">
                                    <div class="col-md ">
                                        <br /><img class="imgProf" src="../img/camila.jpg">
                                    </div>
                                    <div class="col-md ">
                                        <div class="card-body">
                                            <h5 class="card-title">Camila Prieto</h5>
                                            <p class="card-text">Realizo trabalhos como pédicure, cortes de cabelo e
                                                muitos outros trabalhos para voce!!</p>
                                            <button class="button menu"><span>Agendar</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h2>Meu Perfil</h2>
                <form class="imagem" action="../paginas/fotos/upload.php" method="POST" enctype="multipart/form-data" >
                    <br />
                    <?php

                    include('fotos/select-foto.php');               


                    echo "<img class='imgProf' src=fotos/arquivos/".$resultado_foto['ds_caminho_img'];
          
                    ?>
                    <label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />                    <br/>
                    <input type="submit" value="Enviar" />
                    <br/>
                    <br/>

                    <h2 class="text-center">
                        <p>
                        <?php  
                        echo $informacoes[0]['nm_cliente'];
                        ?>
                        </p>
                    </h2>             
                    <br>                    
                </form>

                
            </div>
        </div>

    </div>
