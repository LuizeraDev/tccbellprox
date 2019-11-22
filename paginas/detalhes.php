<?php
$query_profissional= ("SELECT cd_profissional, nm_profissional, ds_profissional, ds_caminho_img from tb_profissional");
$resultado_profissional = mysqli_query($con,  $query_profissional);
$resultado_profissional = mysqli_fetch_array( $resultado_profissional);


$nm_profissional = $resultado_profissional['nm_profissional'];
$ds_profissional = $resultado_profissional['ds_profissional'];
$ds_caminho_img = $resultado_profissional['ds_caminho_img'];



function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}




?>