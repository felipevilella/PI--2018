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