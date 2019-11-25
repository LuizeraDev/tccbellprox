<?php
$query_fotoprof = "SELECT cd_profissional, ds_caminho_img from tb_Cliente";
$resultado_prof =mysqli_query($con, $query_fotoprof);
$resultado_prof = mysqli_fetch_all($resultado_prof,MYSQL_ASSOC);
$cd_prof = $query_fotoprof[0]['cd_profissional'];

?>