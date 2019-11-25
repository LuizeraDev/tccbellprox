<?php
$query_fotoprof = "SELECT cd_profissional,nm_profissional,ds_profissional, ds_caminho_img from tb_profissional";
$resultado_prof =mysqli_query($con, $query_fotoprof);
$resultado_prof = mysqli_fetch_all($resultado_prof,MYSQL_ASSOC);

?>