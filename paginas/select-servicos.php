<?php 
//  // Acesso ao banco de dados
//  include('conecta-banco.php');

// $queryServico1 = "SELECT cd_servico, nm_servico FROM tb_servico";
// $dadosServico1 = mysqli_query($con,  $queryServico1);
// $dadosServico1 = mysqli_fetch_all( $dadosServico1,MYSQLI_ASSOC);

// $queryServico2 = "SELECT cd_agendamento, dt_agendamento FROM tb_agendamento";
// $dadosServico2 = mysqli_query($con,  $queryServico2);
// $dadosServico2 = mysqli_fetch_all( $dadosServico2,MYSQLI_ASSOC);

// $queryser = "SELECT vl_servico FROM tb_servico_agendamento ";
// $dadosServico = mysqli_query($con, $queryser);
// $dadosServico = mysqli_fetch_all($dadosServico,MYSQLI_ASSOC);

// $queryser = "SELECT * FROM tb_profissional_servico, tb_servico, tb_agendamento";
// $dadosServico = mysqli_query($con, $queryser);
// $dadosServico = mysqli_fetch_array(object $dadosser,MYSQLI_ASSOC);

// $selectServ = "SELECT * FROM tb_profissional_servico";
// $resServ = mysqli_query($con, $selectServ);
$query_servico = "SELECT tb_servico.nm_servico, tb_agendamento.dt_agendamento, tb_servico_agendamento.vl_servico
                    FROM tb_agendamento
                        LEFT JOIN tb_servico_agendamento ON tb_servico_agendamento.cd_agendamento = tb_agendamento.cd_agendamento
                            LEFT JOIN tb_servico ON tb_servico_agendamento.cd_servico = tb_servico.cd_servico
                                WHERE cd_cliente = 2";
$resultados_servicos = mysqli_query($con, $query_servico);
 $resultados_servicos = mysqli_fetch_array( $resultados_servicos);


 $query_agendamento = "SELECT dt_agendamento, ds_confirmacao_agendamento
                        from tb_agendamento
                            where cd_cliente= 2 and cd_profissional=1";
$resultados_agendamento =mysqli_query($con, $query_agendamento);
$resultados_agendamento = mysqli_fetch_array($resultados_agendamento);
