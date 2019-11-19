// muda as telas de um lado para o outro INICIO
const signUpButton = document.getElementById('signUp');
const signUpButton2 = document.getElementById('signUp2');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton2.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
// muda as telas de um lado para o outro FIM
function validarEMAIL(){
	var email = document.getElementById('email').value.length;
	
	
	if(matricula != 0){
	
	$("#emailCadastro").keyup(function (e) {
		var matricula = $(this).val(); 
		$.post('validacao-tempo-real.php', {'emailCadastro':matricula}, function(data) {
			$("#resultadoEmail").show();    
			$("#resultadoEmail").fadeOut(9000).html(data);

	 });
	});
	}
	else
	$("#resultadoEmail").hide();
		
	}

//MASCARA JQUERY PARA CELULAR
$("#cellphone").keypress(function (event) { 
	if(event.keyCode == 48 ) { 
		$("#cellphone").mask("0000-000-00000"); 
	} else { 
		$("#cellphone").mask("(00) 0000-000000");
	}       
}); 