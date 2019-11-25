<?php


$cd_profissional = $informacoes2[0]['cd_profissional'];
$nm_profissional = $informacoes2[0]['nm_profissional'];
$nm_profissional = $informacoes2[0]['nm_profissional'];
$nm_email_profissional = $informacoes2[0]['nm_email_profissional'];	
$tel_cell_profissional = $informacoes2[0]['cd_tel_cell_profissional'];
function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}