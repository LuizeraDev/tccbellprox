<?php 
include "../login/confirma-login-paginas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Bell Prox - Configurações</title>
<!--LOGO-->
<link rel="shortcut icon" href="../img/logo.png" />
<link rel="stylesheet" type="text/css" href="../paginas/configuracoes.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../index/main.css" media="screen" />
<link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
<link rel="stylesheet" href="..\bootstrap\css\bootstrap-grid.css">
</head>
<body>
<?php 
  if(isset($informacoes)){if($informacoes != null){  include "../index/menu.php";}}else{ include "../../index/menu-profi.php"; }
?>
<div class="overlay">
<div id="profile-card">
  <header>
    <h2><i class="fas fa-cogs fa-1x">&nbsp;</i>Configurações</h2>
    <hr> 
    <div class="profile-info">
      <p><i class="far fa-id-card">&nbsp;</i>Telefone Celular: 
      <?php  if(isset($informacoes)){if($informacoes != null){ echo $informacoes[0]['cd_tel_cell_cliente'];}}else{ echo $informacoes2[0]['cd_tel_cell_profissional']; } ?></p>
      <p><i class="fas fa-user-circle">&nbsp;</i>Nome: 
      <?php  if(isset($informacoes)){ if($informacoes != null){ echo $informacoes[0]['nm_cliente'];}} else {echo $informacoes2[0]['nm_profissional'];}; // mp($nome_cliente[0]['nm_cliente']);?></p>
      <p><i class="fas fa-envelope">&nbsp;</i>Email: 
      <?php if(isset($informacoes)){if($informacoes != null){ echo $informacoes[0]['nm_email_cliente'];}} else{echo $informacoes2[0]['nm_email_profissional'];}?></p>
    </div>
    <hr>
  </header>
<div class="teste"> <!-- TESTE -->
    <div class="profile-item">
      <div class="profile-label">
        Envie-me Novidades
      </div>
      <label class="profile-switch"><input type="checkbox" />
        <div class="profile-slider"></div>
      </label>
    </div>
    
    <div class="profile-item">
      <div class="profile-label">
        Outros usuários podem me mandar mensagem
      </div>
      <label class="profile-switch"><input type="checkbox" />
        <div class="profile-slider"></div>
      </label>
    </div>
    
    <hr>
    
    <p><b>Privacidade</b></p>
    
    <div class="profile-item">
      <div class="profile-label">
        <a href="#">Termos de serviço e nossa política de privacidade</a>
      </div>
      <label class="profile-switch"><input type="checkbox" />
        <div class="profile-slider"></div>
      </label>
    </div>
    
    <div class="profile-item">
      <div class="profile-label">
        <a href="#">Baixar os dados de perfil&nbsp;<i class="text-info fas fa-cloud-download-alt"></i></a>
      </div>
    </div>
    
    <div class="profile-item">
      <div class="profile-label">
        <a href="#" class="delete-acount" style="">Deletar conta</a>
      </div>
    </div>
  <hr>
  <button type="button" id="oi2" class="btn btn-info" href="profissionais.php" style="background:  #922c94;border:none;outline: 0;">Salvar</button>
  <button type="button" id="oi" onClick="window.location='logout.php';" class="btn btn-danger" style="outline: 0; background-color: rgb(36, 40, 88);border:none;">Deslogar</button>
  </div>
</div>
</div>
</div>
<script src="configuracoes.js"></script>
</body>
</html>
