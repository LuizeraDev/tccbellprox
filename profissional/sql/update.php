<?php 
include "../../login/conecta-banco.php";
if(isset($_POST['agenda'])){
    $cd_agendamento = $_POST['agenda'];
            $update = "UPDATE tb_agendamento
                        SET ds_confirmacao_agendamento = 1
                            WHERE cd_agendamento = '$cd_agendamento'"; 
        	$resagen = $con->query($update) ;
}


?>