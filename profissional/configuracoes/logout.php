<?php
include('../../login/verificar-login.php');
unset($_SESSION['logado']);
unset($_SESSION['nm_email_profissional']);
unset($_SESSION['cd_tel_cel_profissional']);
unset($_SESSION['nm_profissional']);
header("location:../../login/login.php");
