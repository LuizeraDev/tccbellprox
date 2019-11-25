<?php
include '../../login/conecta-banco.php';    
$query_agendamento_conf = "SELECT cd_agendamento,dt_agendamento,ds_confirmacao_agendamento,cd_cliente, nm_profissional
from tb_agendamento 
    join tb_profissional on tb_profissional.cd_profissional = tb_agendamento.cd_profissional
        where tb_profissional.cd_profissional = 3";
$resultado_conf_agendamento = mysqli_query($con, $query_agendamento_conf);
$resultado_conf_agendamento = mysqli_fetch_all($resultado_conf_agendamento, MYSQL_ASSOC);

echo $resultado_conf_agendamento[0]['cd_agendamento'];


?>