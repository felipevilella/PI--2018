//ACIONANDO O MODAL DESCRIÇÃO
$("#descricao").on("click",function(){
	$("#modaldescricao").modal();
});
//CONTANDO CARACTER DOS CAMPOS
$("#textDescricao").on("input",function(){
	texto = $(this).val();
	total = 200 - texto.length;
	$("#limitecaracter").html(total);
});
// VISUALIZAR MODAL PERFIL PETS
$("#perfilpets").on("click",function(){
	$(".pets_perfil_modal").modal();

});
//ADICIONAR PETS NO PERFIL
$("#adicionar_pets").on("click",function(){
	$(".adicionar_pets_perfil").modal();
});
$("#entrarperfilpets").on("click",function(){
	window.location.href="perfilpets";
});