<?php 
include "../login/confirma-login-paginas.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sobre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="sobre.css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
  <link rel="stylesheet" href="..\bootstrap\css\bootstrap-grid.css">
</head>

<body>
<br><br>
    <h1 align="center" class="titulo-desenvolvedores">Sobre</h1>
    <hr class="barra-titulo">
    
        <h6 align="center" style="font-size:20px;">Este é um Trabalho de Conclusão de Curso, (TCC) do grupo <strong>Bell Prox</strong> da Etec Dra Ruth Cardoso de São Vicente</h6>
        
  
    <br>
    <h1 align="center" class="titulo-desenvolvedores">Equipe</h1>
    <hr class="barra-titulo-desenvolvedores">
    <div class="container">
        <div class="row align-items-center">
            <div class="foto1">
                <img src="..\img\luiz.jpg">
            </div>
            <div class="col col-lg-3">
                <h5 class="p1"><strong>Luiz Guilherme</strong></h5>
            </div>
            <div class="col">
                <h6 style="font-size:20px;" > 17 anos, estou cursando Desenvolvimento de Sistemas na <strong>ETEC Dra. Ruth Cardoso</strong> e na <strong>Fatec de Praia Grande</strong>,
                    busco para meu futuro ingressar com um estágio na área de Tecnologia da Informação. Auxiliar na parte de desenvolvimento Front-end e Back-end.
                </h6>
            </div>

        </div>
        <hr class="linha">
        <div class="row align-items-center">
            <div class="col">
                <h6 class="p1" style="font-size:20px;" >Tenho 18 anos, estou cursando Desenvolvimento de Sistemas na ETEC Dra. Ruth Cardoso. Sou Auxiliar na parte de desenvolvimento Front-end e Back-end. </h6>
            </div>
            <div class="col col-lg-3">
                <h5 class="p2"><strong>Wellington Pontes</strong></h5>
            </div>
            <div class="foto2">
                <img src="..\img\well.jpg">
            </div>

        </div>
        <hr class="linha">
        <div class="row align-items-center">
            <div class="foto3 ">
                <img src="..\img\paulo.jpg">
            </div>
            <div class="col col-lg-3">
                <h5 class="p3"><strong>Paulo Rozendo</strong></h5>
            </div>
            <div class="col">
                <h6 class="p3" style="font-size:20px;" >Tenho 18 anos, estou cursando Desenvolvimento de Sistemas na ETEC Dra. Ruth Cardoso.
                   Auxiliar na parte de documentação, desenvolvimento em Front-end e banco de dados.</h6>
            </div>
        </div>
        <hr class="linha">
        <div class="row align-items-center">
                <div class="col">
                        <h6 class="p1" style="font-size:20px;" >Tenho 16 anos, estou cursando Desenvolvimento de Sistemas na Etec Dra. Ruth Cardoso. Sou auxiliar na parte 
                        de documentação, desenvolvimento em front-end e banco de dados
                        <br>Front-end.</h6>
                    </div>
            <div class="col col-lg-3">
                <h5 class="p4"><strong>Camila Prieto</strong></h5>
            </div>
            <div class="foto4">
                <img src="..\img\camila.jpg">
            </div>
        </div>
        <hr class="linha">
        <div class="row align-items-center">
            <div class="foto3 ">
                <img src="..\img\clodoaldo.jpg">
            </div>
            <div class="col col-lg-3">
                <h5 class="p3"><strong>Clodoaldo Barbosa</strong></h5>
            </div>
            <div class="col">
                <h6 class="p3" style="font-size:20px;" >Tenho 41 anos, estou cursando Desenvolvimento de Sistemas na ETEC Dra. Ruth Cardoso.
                  Auxiliar na parte de documentação.</h6>
            </div>
        </div>
        <hr class="linha">
        <div class="row align-items-center">
                <div class="col">
                        <h6 class="p1" style="font-size:20px;" >Tenho 18 anos, estou cursando Desenvolvimento de Sistemas na Etec Dra. Ruth Cardoso. Auxiliar na parte de documentação e design.</h6>
                    </div>
            <div class="col col-lg-3">
                <h5 class="p4"><strong>Davi Bizerra</strong></h5>
            </div>
            <div class="foto4">
                <img src="..\img\davi.jpg">
            </div>
        </div>
        <hr class="linha">
    </div> <!-- FIM DIV -->
    <h1 align="center" class="titulo-desenvolvedores">Contato</h1>
    <hr class="barra-titulo">
        <h6 align="center">Entre em contato com os membros da <strong>Bell Prox</strong> preenchendo o formulário abaixo:</h6>
   <form method="POST"> <!-- INICIO FORM -->
    <!-- TEXTAREA -->
   <div class="formulario"> 
       <!-- INPUT -->
       <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Digite o seu email" aria-label="Recipient's username" aria-describedby="basic-addon2">
       <div class="input-group-append">
       <span class="input-group-text" id="basic-addon2">seunome@example.com</span>
       </div>
       </div>
       <!-- INPUT FINAl-->
        <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <label for="exampleFormControlTextarea1" style="color:red;margin-left:80.6%;">max: 255 caracteres</label>
        <button type="submit" class="ghost">Enviar</button>
        </div>
   </div>  
   <!--FIM TEXTAREA -->
   </form> <!-- FIM FORM -->
    <div style="background:black;">.</div>
</body>

</html>