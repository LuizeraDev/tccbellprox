<?php

$query_agendamento_conf = "SELECT cd_agendamento,dt_agendamento,ds_confirmacao_agendamento, nm_cliente, ds_caminho_img
from tb_agendamento 
    join tb_cliente on tb_cliente.cd_cliente = tb_agendamento.cd_cliente
        where cd_profissional = 3";
$resultado_conf_agendamento = mysqli_query($con, $query_agendamento_conf);
$resultado_conf_agendamento = mysqli_fetch_all($resultado_conf_agendamento, MYSQL_ASSOC);
?>