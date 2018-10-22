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
$("#alterarfotousuario").on("click",function(){
  $(".alterarfoto_usuario").modal();
});
$("#alterarperfil").on("click",function(){
  $(".editarinformacaousuario").modal();
});


//VER CONVERSAS

$("#verconversa").on("click",function(){
  $("#chatbox").toggleClass("hidden");
});



function showNotification(from, align){

  $.notify({
    icon: "add_alert",
    message: " <b>Mirian te enviou uma</b> - Nova mensagem ."

  },{
    type: 'success',
    timer: 4000,
    placement: {
      from: from,
      align: align
    }
  });
}
$("#editarperfilpets").on("click",function(){
  $("#modalalteracaopets").modal();
});


//MODAL FOTOS PETS

$('.newbtn').bind("click" , function () {
  $('#pic').click();
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

