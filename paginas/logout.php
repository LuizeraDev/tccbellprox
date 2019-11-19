<?php
include('../login/verificar-login.php');
unset($_SESSION['logado']);
unset($_SESSION['nm_email_cliente']);
unset($_SESSION['cd_tel_cel_cliente']);
unset($_SESSION['nm_cliente']);
header("location:../login/login.php");
