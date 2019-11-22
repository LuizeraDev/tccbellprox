<?php 
//  // Acesso ao banco de dados
//  include('conecta-banco.php');
$cd_cliente = $informacoes[0]['cd_cliente'];

$query_servico = "SELECT tb_servico.nm_servico, tb_agendamento.dt_agendamento, tb_servico_agendamento.vl_servico
                    FROM tb_agendamento
                        LEFT JOIN tb_servico_agendamento ON tb_servico_agendamento.cd_agendamento = tb_agendamento.cd_agendamento
                            LEFT JOIN tb_servico ON tb_servico_agendamento.cd_servico = tb_servico.cd_servico
                                WHERE cd_cliente = '$cd_cliente'";
$resultados_servicos = mysqli_query($con, $query_servico);
 $resultados_servicos = mysqli_fetch_array( $resultados_servicos);


 $query_agendamento = "SELECT cd_agendamento,dt_agendamento, ds_confirmacao_agendamento
                        from tb_agendamento
                            where cd_cliente= '$cd_cliente' and cd_profissional=3";
$resultados_agendamento =mysqli_query($con, $query_agendamento);
$resultados_agendamento = mysqli_fetch_all($resultados_agendamento,MYSQL_ASSOC);


foreach( $resultados_agendamento as $d => $dad)
{
    $cd_agendamento = $resultados_agendamento[$d]["cd_agendamento"];   
}

