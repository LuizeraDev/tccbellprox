<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container { 
  width: 99.40%;
  position: relative;
}

/* Botões de Próximo e preview 
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -30px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
*/

/* Position the "next button" to the Direita 
.next {
    margin-left: 10px;
  right: -0.6%;
  border-radius: 3px 0 0 3px;
}
*/

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #8B0000;
  font-size: 20px;
  padding: 8px 12px;
  font-family: 'Montserrat';
  font-weight: 500;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  margin-left:30px;
  font-family: 'Montserrat';
  position: absolute;
  top: 0;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<div class="slideshow-container ">
<!-- Imagens -->

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/imagem2.jpg">
  <div class="text">Aqui nós</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/imagem1.jpg">
  <div class="text">Fazemos a sua</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/imagem3.jpg">
  <div class="text">Beleza ainda mais bela.</div>
</div>

<!-- Imagens -->
<!-- MUDA A IMAGEM
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
-->
</div>
<br>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
/*
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
//DAQUI PRA CIMA MUDA ATRAVÉS DOS BOTÕES
*/
</script>

<!-- DAQUI PRA BAIXO MUDA AUTOMATICAMENTE -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 4000); // Troca a imagem a cada 3 segundos
}
</script>
</body>
</html> 
