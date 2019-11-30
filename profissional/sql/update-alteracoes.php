<?php
    include "../../login/conecta-banco.php";
    include "../../login/confirma-login-paginas.php";
    echo $cd_profissional = $informacoes2[0]['cd_profissional'];
    if($_POST['nome'] || null){
        $nome_alterado = $_POST['nome'];
                $updateName = "UPDATE tb_profissional
                            SET nm_profissional = '$nome_alterado'
                                WHERE cd_profissional = '$cd_profissional'"; 
                $resname = $con->query($updateName) ;
                echo"<meta charset='utf-8'>
                <script language='javascript' type='text/javascript'>
                alert('Foto Adicionada com sucesso');
                window.location.href='../index.php';</script>";

                if($_POST['email'] || null){
                    $email_alterado = $_POST['email'];
                        $updateEmail = "UPDATE tb_profissional
                                SET nm_email_profissional = '$email_alterado'		
                                    where cd_profissional = '$cd_profissional' ";
                        $resEmail = $con->query($updateEmail) ;

                        echo"<meta charset='utf-8'>
                        <script language='javascript' type='text/javascript'>
                        alert('Foto Adicionada com sucesso');
                        window.location.href='../index.php';</script>";
                }


       

    }



?>