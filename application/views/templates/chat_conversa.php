<?php foreach  ($dadosConversa as $key => $conversa): ?>
 <?php if($conversa["id_destinatario"] == $idamigo ){ ?> 
  <div class="message w3layouts">
   <a href="<?php echo base_url("perfilusuario");?>"> <img src="<?php echo base_url('assets/personalizado/imagem/avatar.jpg');?>" ></a>
   <div class="bubble">
     <?php echo $conversa["chatMensagem"];?>
     <span></span>
   </div>
 </div>
<?php } ?> 

<?php if($conversa["fk_idUsuario"] == $idusuario){ ?> 
<div class="message right agileits">
  <img src="<?php echo ('assets/personalizado/imagem/card-profile1-square.jpg');?>">
  <div class="bubble">
    <?php echo $conversa["chatMensagem"];?>
    <span></span>
  </div>
</div>
<?php } ?> 
<?php endforeach ?>
