<?php echo "<input type='hidden' id='nomeusuario' value='".$nome."''>";?>
<?php echo "<input type='hidden' id='identifuser' value='".$idusuario."''>";?>

<div class="container">
  <div id="chatbox" class="hidden">
    <div id="friendslist">
      <div id="topmenu">
        <span class="friends">Contatos</span>
      </div>

      <div id="friends">

        <div class="friend w3layouts">
          <img src="<?php echo base_url('assets/personalizado/imagem/avatar.jpg');?>" >
          <p>
            <strong>Mirian </strong>
            (Enviar mensagem)
          </p>
          
        </div>
      </div>

    </div>

    <div id="chatview" class="p1">

      <div id="profile">
        <div id="close">
          <div class="cy"></div>
          <div class="cx"></div>
        </div>
        <p>Mirian</p>
       <!--  <span id="retorno"></span> -->
      </div>
      <div id="chat-messages"> </div>
        <div id="sendmessage">
          <input type="text" placeholder="Digite a mensagem..." id="digitarMensagem">
          <button id="enviar_chat"> </button>
        </div>

      </div>

    </div>

  </div>



  <script type="text/javascript">
    var base_url = "<?php echo base_url();?>";
  </script>


  <script src="<?php echo base_url('assets/bootstrap/js/core/jquery.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/core/popper.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/core/bootstrap-material-design.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/chartist.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/bootstrap-notify.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/material-dashboard.min.js?v=2.1.0');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/personalizado/js/sistema.js');?>"></script>
  
  <script src="<?php echo base_url('assets/personalizado/js/tabs.js');?>"></script>
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>