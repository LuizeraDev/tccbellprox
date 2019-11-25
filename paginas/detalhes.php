<?php


$cd_prof = $select_profi[0]['cd_profissional'];
$nm_profissional = $select_profi[0]['nm_profissional'];
$ds_profissional = $select_profi[0]['ds_profissional'];
$ds_caminho_img = $select_profi[0]['ds_caminho_img'];



function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}




?>