<?php
include('verificar-login.php');

if(isset($_SESSION['nm_profissional'])){
$resultado_prof = $_SESSION['nm_profissional']; //NECESSARIO
}
if(isset($_SESSION['nm_cliente'])){
$informacoes = $_SESSION['nm_cliente']; //NECESSARIO]

}
$logado = $_SESSION['logado'];

if ($logado == false) {
echo "<html><head>
<title>Verificação</title>
<meta charset=\"utf-8\">
</head><body>";
echo "<script language='javascript' type='text/javascript'>alert('Login não efetuado');window.location.href='../login/login.php';</script>";
echo "</body></html>";
}