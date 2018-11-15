//ACIONANDO O MODAL DESCRIÇÃO
$("#descricao").on("click",function() {
	$("#modaldescricao").modal();
});
//CONTANDO CARACTER DOS CAMPOS
$("#textDescricao").on("input",function() {
	texto = $(this).val();
	total = 200 - texto.length;
	$("#limitecaracter").html(total);
});
// VISUALIZAR MODAL PERFIL PETS
$("#perfilpets").on("click",function() {
	$(".pets_perfil_modal").modal();

});
//ADICIONAR PETS NO PERFIL
$("#adicionar_pets").on("click",function() {
	$(".adicionar_pets_perfil").modal();
});
$("#entrarperfilpets").on("click",function() {
	window.location.href="perfilpets";
});
$("#alterarfotousuario").on("click",function() {
  $(".alterarfoto_usuario").modal();
});
$("#alterarperfil").on("click",function() {
  $(".editarinformacaousuario").modal();
});


//VER CONVERSAS

$("#verconversa").on("click",function() {
  $("#chatbox").toggleClass("hidden");
});

$("#campochat").on("input",function(){
 $("#retorno").html("você está digitando...");
});


function showNotification(from, align) {

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
$("#adicionarfotospets").on("click",function(){
  $("#exampleModalCenter").modal();
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

$("#esqueci").on("click",function() {
  $("#recuperarsenha").modal();
});
$("#Entrar").on("click",function() {
  var email_usuario = $("#email").val();
  var senha_usuario = $("#senha").val();
  $("#retorno").val();
  $.ajax({
    url:base_url+"validacaousuario",
    type:'post',
    dataType:'Json',
    data:{
      usuario: email_usuario,
      senha: senha_usuario
    },
    success:function(data){
     if(data.confirmado == false){
      $("#retorno").html(data.mensagem);
    }
    else{
      console.log(data);
      window.location.href = base_url+"selecionarperfilpets";
    }
  }

});
});
$("#cadastrarpets").on("click",function() {
  var nome_pets = $("#nome").val();
  var raca_pets = $("#raca").val();
  var peso_pets = $("#peso").val();
  var altura_pets = $("#altura").val();
  var data_pets = $("#data").val();
  var sexo_pets = $("#sexo").val();

  $.ajax({
      //chamar a rota configurada da função (config/routes) para o envio
      url:base_url+"cadastrarPets",
      type:'post',
      dataType:'Json',
      //envia os dados para  para a funções
      data:{
       nome:nome_pets,
       raca:raca_pets,
       peso:peso_pets,
       altura:altura_pets,
       data:data_pets,
       sexo:sexo_pets
     },
     success:function($data){
      console.log(data.mensagem);
    }

  });
});

$("#Solicitar").on("click",function() {
 $("#chatbox").toggleClass("hidden");
});

$("#digitarMensagem").on("input",function() {
  var nome = $("#nomeusuario").val();
  $("#retorno").html( nome +" está digitando...");
  setTimeout(function(){ 
    $("#retorno").html("");
  }, 5000);
});

$(document).keypress(function(e) {
  $("#enviar_chat").on("click",function() {
   $("#retorno").html("");

   var idusuario_usuario = $("#identifuser").val();
   var idamigo_usuario = $("#identificacao").val();
   var mensagem_usuario = $("#digitarMensagem").val();

   if(mensagem_usuario != ""){
     $.ajax({
       url:base_url+'enviarMensagem',
       type:'post',
       dataType:"Json",
       data:{
        idusuario: idusuario_usuario,
        idamigo: idamigo_usuario,
        mensagem: mensagem_usuario
      },
      success:function(data){
        console.log("ok");
      }
    });
   }
     $("#digitarMensagem").val("");
 });
});

setInterval(function mensagem_chat(){
  var idusuario_usuario = $("#identifuser").val();
  var idamigo_usuario = $("#identificacao").val();
  $.ajax({
   url:base_url+'mensagem',
   type:'post',
   dataType:"Json",
   data:{
    idusuario: idusuario_usuario,
    idamigo: idamigo_usuario,
  },
  success:function(data){
    $("#chat-messages").html(data.html);
  }
});
},1000);
