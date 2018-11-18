//ACIONANDO O MODAL DESCRIÇÃO
$("#descricao").on("click",function()  {
	$("#modaldescricao").modal();
});
//CONTANDO CARACTER DOS CAMPOS
$("#textDescricao").on("input",function()  {
	texto = $(this).val();
	total = 200 - texto.length;
	$("#limitecaracter").html(total);
});
// VISUALIZAR MODAL PERFIL PETS
$("#perfilpets").on("click",function()  {
	$(".pets_perfil_modal").modal();

});
//ADICIONAR PETS NO PERFIL
$("#entrarperfilpets0").on("click",function()  {
	var id = $("#idPets0").val();
  window.location.href = base_url+"perfilpets/"+id;
});

$("#entrarperfilpets1").on("click",function()  {
  var id = $("#idPets1").val();
  window.location.href = base_url+"perfilpets/"+id;
});

$("#entrarperfilpets2").on("click",function()  {
  var id = $("#idPets2").val();
  window.location.href = base_url+"perfilpets/"+id;
});

$("#entrarperfilpets3").on("click",function()  {
  var id = $("#idPets3").val();
  window.location.href = base_url+"perfilpets/"+id;
});


$("#entrarperfilpetsamigo0").on("click",function()  {
  var id = $("#idPets0").val();
  var idamigo = $("#idUsuarioAmigo").val();
  window.location.href = base_url+"verperfilpets/"+id+"/"+idamigo;
});

$("#entrarperfilpetsamigo1").on("click",function()  {
  var id = $("#idPets1").val();
  var idamigo = $("#idUsuarioAmigo").val();
  window.location.href = base_url+"verperfilpets/"+id+"/"+idamigo;
});

$("#entrarperfilpetsamigo2").on("click",function()  {
  var id = $("#idPets2").val();
  var idamigo = $("#idUsuarioAmigo").val();
  window.location.href = base_url+"verperfilpets/"+id+"/"+idamigo;
});

$("#entrarperfilpetsamigo3").on("click",function()  {
  var id = $("#idPets3").val();
  var idamigo = $("#idUsuarioAmigo").val();
  window.location.href = base_url+"verperfilpets/"+id+"/"+idamigo;
});





$("#alterarfotousuario").on("click",function()  {
  $(".alterarfoto_usuario").modal();
});
$("#alterarperfil").on("click",function()  {
  $(".editarinformacaousuario").modal();
});
$("#inserirfotoPets").on("click",function() {
  $("#perfilfotopets").modal();
});
$("#sobreperfilpets").on("click",function() {
  $("#alterardescricao").modal();
});


//VER CONVERSAS

$("#verconversa").on("click",function()  {
  $("#chatbox").toggleClass("hidden");
});

$("#campochat").on("input",function() {
 $("#retorno").html("você está digitando...");
});


function showNotification(from, align)  {

  $.notify( {
    icon: "add_alert",
    message: " <b>Mirian te enviou uma</b> - Nova mensagem ."

  }, {
    type: 'success',
    timer: 4000,
    placement:  {
      from: from,
      align: align
    }
  });
}
$("#editarperfilpets").on("click",function() {
  $("#modalalteracaopets").modal();
});
$("#adicionarfotospets").on("click",function() {
  $("#exampleModalCenter").modal();
});


//MODAL FOTOS PETS

$('.newbtn').bind("click" , function ()  {
  $('#pic').click();
});

function readURL(input)  {
  if (input.files && input.files[0])  {
    var reader = new FileReader();

    reader.onload = function (e)  {
      $('#blah')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$("#esqueci").on("click",function()  {
  $("#recuperarsenha").modal();
});
$("#Entrar").on("click",function()  {
  var email_usuario = $("#email").val();
  var senha_usuario = $("#senha").val();
  $("#retorno").val();
  $.ajax( {
    url:base_url+"validacaousuario",
    type:'post',
    dataType:'Json',
    data: {
      usuario: email_usuario,
      senha: senha_usuario
    },
    success:function(data) {
     if(data.confirmado == false) {
      $("#retorno").html(data.mensagem);
    }
    else {
      console.log(data);
      window.location.href = base_url+"selecionarperfilpets";
    }
  }

});
});
$("#cadastrarpets").on("click",function()  {
  var nome_pets = $("#nome").val();
  var raca_pets = $("#raca").val();
  var peso_pets = $("#peso").val();
  var altura_pets = $("#altura").val();
  var data_pets = $("#data").val();
  var sexo_pets = $("#sexo").val();

  $.ajax( {
      //chamar a rota configurada da função (config/routes) para o envio
      url:base_url+"cadastrarPets",
      type:'post',
      dataType:'Json',
      //envia os dados para  para a funções
      data: {
       nome:nome_pets,
       raca:raca_pets,
       peso:peso_pets,
       altura:altura_pets,
       ano:data_pets,
       sexo:sexo_pets
     },
     success:function(data) {
      if(data.mensagem == "Pets cadastrado com sucesso") {
        $("#exampleModalCenter").modal('hide');
        window.location.href = base_url+"selecionarperfilpets";
      }
      else {
        $("#erroNome").html(data.nome);
        $("#erroRaca").html(data.raca);
        $("#erroPeso").html(data.peso);
        $("#erroAltura").html(data.altura);
        $("#erroAno").html(data.ano);
      }

    }
  });
});

$("#Solicitar").on("click",function()  {
 $("#chatbox").toggleClass("hidden");
});

$("#digitarMensagem").on("input",function()  {
  var nome = $("#nomeusuario").val();
  $("#retorno").html( nome +" está digitando...");
  setTimeout(function() { 
    $("#retorno").html("");
  }, 5000);
});

$("#enviar_chat").on("click",function()  {
 $("#retorno").html("");

 var idusuario_usuario = $("#identifuser").val();
 var idamigo_usuario = $("#identificacao").val();
 var mensagem_usuario = $("#digitarMensagem").val();

 if(mensagem_usuario != "") {
   $.ajax( {
     url:base_url+'enviarMensagem',
     type:'post',
     dataType:"Json",
     data: {
      idusuario: idusuario_usuario,
      idamigo: idamigo_usuario,
      mensagem: mensagem_usuario
    },
    success:function(data) {
    }
  });
 }
 $("#digitarMensagem").val("");
});

$("#estadoBuscar").on("change",function()  {
  var idEstadoCadastro = $(this).val();
  $("#Cidade").attr("disabled",true);
  $("#Cidade").html("<option> Carregando ... </option>");
  $.ajax( {
   url:base_url+'buscarCidade',
   type:'post',
   dataType:"Json",
   data: {
    idEstado: idEstadoCadastro,
  },
  success:function(data) {
    for (var i = 0; i <data.length; i++)  {
      if(i == 0) {
       $("#Cidade").html("<option value ='"+data[i].idcidade+"'>"+data[i].nome+"</option>");
     }
     else {
       $("#Cidade").append("<option value ='"+data[i].idcidade+"'>"+data[i].nome+"</option>");
     }

   }
 }
});
  $("#Cidade").attr("disabled",false);
});

$("#password1").on("input",function() {
  var senha1_usuario = $("#password").val();
  var senha2_usuario = $(this).val();
  if(senha1_usuario != senha2_usuario) {
    $("#retornosenha").html("Senhas divergentes");
    $("#Cadastrar").attr("disabled",true);
  }
  else {
    $("#retornosenha").html("Senha valida");
    $("#Cadastrar").attr("disabled",false);
  }
});

$("#Cadastrar").on("click",function() {

  var nome_usuario = $("#nome").val();
  var sobre_usuario = $("#sobrenome").val();
  var estado_usuario = $("#estadoBuscar").val();
  var cidade_usuario = $("#Cidade").val();
  var email_usuario = $("#email").val();
  var senha1_usuario = $("#password").val();
  $("#Cadastrar").attr("disabled",false);
  $.ajax({
   url:base_url+'salvarUsuario',
   type:'post',
   dataType:"Json",
   data:{
    nome:nome_usuario,
    sobrenome:sobre_usuario,
    estado:estado_usuario,
    cidade:cidade_usuario,
    email:email_usuario,
    senha:senha1_usuario
  },
  success:function(data) {
    if(data.mensagem != "") {
      $("#retonoCadastro").html(data.mensagem);
      $("#Cadastrar").attr("disabled",true);
    } 
    $("#erroNome").html(data.nome);
    $("#erroSobrenome").html(data.sobrenome);
    $("#erroEstado").html(data.estado);
    $("#erroCidade").html(data.cidade);
    $("#erroEmail").html(data.email);
    $("#erroSenha").html(data.senha);
    
    
  }
});
});
$("#email").on("input",function() {
  var email_usuario = $(this).val();

  $.ajax( {
   url:base_url+'validarUsuario',
   type:'post',
   dataType:"Json",
   data: {
     email: email_usuario
   },
   success:function(data) {
    if (data.mensagem == "E-mail indisponivel"){
      $("#erroEmail").html(data.mensagem);
      $("#Cadastrar").attr("disabled",true);
    }else{
      $("#Cadastrar").attr("disabled",false);
      $("#erroEmail").html("");
    }
  }
});
});

$("#atualizarDescricacao").on("click",function() {
  var texto = $("#sobretexto").val();
  var idPets = $("#idpets").val();
  $.ajax( {
   url:base_url+'salvarDescricao',
   type:'post',
   dataType:"Json",
   data: {
     descricaoPets:texto,
     idpets: idPets
   },
   success:function(data) {

   }
 });
  window.location.href = base_url+"perfilpets/"+idPets;
});
$("#editarinformacaopets").on("click",function() {
  var nome_pets = $("#nome").val();
  var raca_pets = $("#raca").val();
  var peso_pets = $("#peso").val();
  var altura_pets = $("#altura").val();
  var data_pets = $("#data").val();
  var sexo_pets = $("input[name='sexo']:checked").val();
  var idPets = $("#idpets").val();

  $.ajax({
      //chamar a rota configurada da função (config/routes) para o envio
      url:base_url+"alterarPets",
      type:'post',
      dataType:'Json',
      //envia os dados para  para a funções
      data: {
       nome:nome_pets,
       raca:raca_pets,
       peso:peso_pets,
       altura:altura_pets,
       idpets: idPets
     },
     success:function(data) {
      if(data.mensagem == "Pets cadastrado com sucesso") {
       $("#mensagemAlteracao").html("Alterações realizadas com sucesso! ");
     }
     else {
      $("#erroNome").html(data.nome);
      $("#erroRaca").html(data.raca);
      $("#erroPeso").html(data.peso);
      $("#erroAltura").html(data.altura);
      $("#erroAno").html(data.ano);
    }

  }
});
});
$("#buscarPets").on("click",function() {
  var idpets = $("#pets").val();
  var Cidade = $("#Cidade").val();
  $.ajax({
      url:base_url+'buscarPets',
      type:'post',
      dataType:"Json",
      data: {
      idPets:idpets,
      cidade: Cidade
   },
     success:function(data) {
      for ( var i = 0 ; i < data.length; i++) {
        $("#nomePetsPesquisa").html(data[i].nome);
        if(data.foto_principal != ""){
          $("#fotopesquisapet").html("<a href = '"+base_url+"verperfilpets/"+data[i].idanimais+"/"+data[i].idUsuario+"'><img  src='"+base_url+"assets/personalizado/fotos_pets/"+data[i].foto_principal+"' width=100%></a>");
        }else{
           $("#fotopesquisapet").html("<a href = '"+base_url+"verperfilpets/"+data[i].idanimais+"/"+data[i].idUsuario+"'><img  src='"+base_url+"assets/personalizado/imagem/cachoro.png' width=100%></a>");
        }
         if(data.fotoUsurio != ""){
          $("#fotoPerfilUsuarioPets").html("<a href = '"+base_url+"perfilusuario/"+data[i].idUsuario+"'><img  src='"+base_url+"assets/personalizado/fotos_pets/"+data[i].fotoUsurio+"' width=100%></a>");
        }else{
           $("#fotoPerfilUsuarioPets").html("<a href = '"+base_url+"perfilusuario/"+data[i].idUsuario+"'><img  src='"+base_url+"assets/personalizado/imagem/cachoro.png' width=100%></a>");
        }
       
      }
     }
    });
});
//fotoPerfilUsuarioPets   fk_idtipo_animal