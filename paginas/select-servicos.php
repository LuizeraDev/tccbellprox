<?php 
//  // Acesso ao banco de dados
//  include('conecta-banco.php');
$cd_cliente = $informacoes[0]['cd_cliente'];

$query_servico = "SELECT tb_servico.nm_servico, tb_agendamento.dt_agendamento, tb_servico_agendamento.vl_servico
                    FROM tb_agendamento
                        LEFT JOIN tb_servico_agendamento ON tb_servico_agendamento.cd_agendamento = tb_agendamento.cd_agendamento
                            LEFT JOIN tb_servico ON tb_servico_agendamento.cd_servico = tb_servico.cd_servico
                                WHERE cd_cliente = '$cd_cliente' ";
$resultados_servicos = mysqli_query($con, $query_servico);
 $resultados_servicos = mysqli_fetch_all( $resultados_servicos,MYSQL_ASSOC);


 $query_agendamento = "SELECT cd_agendamento,dt_agendamento, ds_confirmacao_agendamento,ds_caminho_img,nm_profissional,cd_tel_cell_profissional,nm_email_profissional
 from tb_agendamento
     join tb_profissional on tb_profissional.cd_profissional = tb_agendamento.cd_profissional
         where cd_cliente= '$cd_cliente' ";
$resultados_agendamento =mysqli_query($con, $query_agendamento);
$resultados_agendamento = mysqli_fetch_all($resultados_agendamento,MYSQL_ASSOC);



