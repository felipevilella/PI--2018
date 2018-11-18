<?php foreach  ($dadosConversa as $key => $conversa): ?>
 <?php
 $dateTime = explode(" ", $conversa["data"]);
 if($conversa["fk_idUsuario"] == $idamigo && $conversa["id_destinatario"] == $idusuario ){ ?> 
  <div class="message w3layouts">
    <?php
    if (empty($dadosamigo["foto_principal"])) {
      echo "<img class='img' src=".base_url('assets/personalizado/imagem/avatar.jpg').">";
    } else {
      echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosamigo["foto_principal"])."'>";
    }
    ?>
    <div class="bubble">
     <?php echo $conversa["chatMensagem"];?>
     <span><?php echo $dateTime[1];?></span>
   </div>
 </div>
<?php } ?> 

<?php if($conversa["fk_idUsuario"] == $idusuario && $conversa["id_destinatario"] == $idamigo){ ?> 
  <div class="message right agileits">
     <?php
    if (empty($dadosuser["foto_principal"])) {
      echo "<img class='img' src=".base_url('assets/personalizado/imagem/avatar.jpg').">";
    } else {
      echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosuser["foto_principal"])."'>";
    }
    ?>
    <div class="bubble">
      <?php echo $conversa["chatMensagem"];?>
      <span><?php echo $dateTime[1];?></span>
    </div>
  </div>
<?php } ?>
<?php endforeach ?>
<label id="retorno"></label>