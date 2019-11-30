    <?php 
        include 'sql/select-agendamento.php';
        include 'sql/select-foto.php';
        
        ?>
    <div class="container">

        <div class="row">
            <br>
            <br>

            <div class="col-md-3 "><!-- menu lateral -->                   
                <div class="list-group">
                    <h3 class="list-group-item list-group-item-action menu text-center " style="color:white;"> Menu</h3>
                    <!-- <a href="servicos-confirmados.php" class="list-group-item list-group-item-action">Seus servicos confirmados</a> -->
                    <a href="perfil/alterar.php" class="list-group-item list-group-item-action">Meu Perfil</a>
                    <a href="configuracoes/configuracoes.php" class="list-group-item list-group-item-action">Configurações</a>
                </div>  
            </div>

     

            <div class="col-md-5 "> <!--Área Principal -->

                <?php foreach ($resultado_conf_agendamento as $d => $ded) {?>                

                <?php if($resultado_conf_agendamento[$d]['ds_confirmacao_agendamento'] == null){ ?> <!-- Verifica Se possui Agendamentos pendentes-->
                    
                <div class="cardinho card mt-5 mb-3 altura card-centraliza">
                    <div class="row no-gutters">
                        <div class="col-md ">
                            <br /><?php echo "<img class='imgProf' src=../paginas/fotos/arquivos/".$resultado_conf_agendamento[0]['ds_caminho_img'].">";?>
                            </div>
                            <div class="col-md">
                            <div class="card-body" id="cardinha">
                            <p class="card-title">Agendamento com<b> <?php echo $resultado_conf_agendamento[$d]['nm_cliente']; ?> </b></p>
                            <p class="card-text ">data do agendamento: <br><b><?php echo inverteData($resultado_conf_agendamento[$d]['dt_agendamento']); ?> <?php ?></b><br></p>

                            <br>
                                
                                voce deseja confirmar o agendamento  
                                <button value="<?php echo $resultado_conf_agendamento[$d]['cd_agendamento'];?>"  class="confirmar btn btn-outline-success"><img src="../img/img1.png" style="width:20px;height:20px; margin:2px;"></button>
                                <button  class="rejeitar btn btn-outline-danger"><p style="width:20px;height:20px; margin:2px; ">X</p></button>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <?php  } } ?>   

                
            </div>

            <div class="col-md-3 ">
            <h2><?php                 
                            echo $nm_profissional;
                            ?>
                        </p></h2>
          
                    <?php          
                        echo "<img class='imgProf' src=foto/arquivos/".$resultado_foto['ds_caminho_img'].">";
                        ?>

            </div>

            
        </div><!--fim do container -->

    </div>
<script>
            
    $(document).ready(function(){

        $(document).on('click','.confirmar',function(){
        
            var codigo = $(this).val();
            console.log(codigo); 

            $.ajax({
                    url:'sql/update.php',
                    data:{
                            'agenda':codigo,
                        },
                    type: 'POST',
                success: function(data){


                                console.log('dados', data);

                                 $('.cardinho').html(location.reload());
                            },
                error(err ){
                    console.log("Erro!: ", err );
                }
            });
        
        });
    });

    $(document).ready(function(){ //rejeitar

        $(document).on('click','.rejeitar',function(){

            var codigo = $(this).val();
            console.log(codigo); 

            $.ajax({
                    url:'sql/update.php',
                    data:{
                            'agenda':codigo,
                        },
                    type: 'POST',
                success: function(data){


                                console.log('dados', data);

                                $('.cardinho').html(location.reload());
                            },
                error(err ){
                    console.log("Erro!: ", err );
                }
            });

        });
    });

</script>
