$(document).ready(function(){
	
});


function enviar(){
	let nome = $('#nome').val();
	let endereco = $('#endereco').val();
	alert('nome' +nome +'e endereco'+ endereco);
	console.log(nome);
	$.get('nomeprojeto/cadastrar?nome='+nome+'&endereco='+endereco,function(data){
		
	
	});
}

//echo <pre>;
//print_r($_REQUEST);
