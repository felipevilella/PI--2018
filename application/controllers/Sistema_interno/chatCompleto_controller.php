<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chatCompleto_controller extends CI_Controller {
	
	public function index() {
		$this->load->helper("url");
		$this->load->view("estrutura/header");
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/chatCompleto");
		$this->load->view("estrutura/footer");
	}

	public function salvar_conversa() {
		$this->load->helper('url'); 
		$this->load->model("chat_model");
		$idusuario = $this->input->post("idusuario");
 		$idamigo = $this->input->post("idamigo");
 		$mensagem = $this->input->post("mensagem");

 		$dadosMensagem = array(
 			'chatMensagem' => $mensagem,
 			'id_destinatario' => $idamigo
 		);
 		//enviar mensagem
 		$this->chat_model->enviar_mensagem($dadosMensagem);
 	    //obter o ultimo id da mensagem
 		$ultima_mensagem = $this->chat_model->buscarUltimaMensagem($mensagem,$idamigo);
 		$dadosConversa = array(
 			'fk_idUsuario' => $idusuario,
 			'Fk_idMensagem' =>$ultima_mensagem["idMensagem"],
 			'id_destinatario' => $idamigo
 		); 
 		//salvar conversa
 		$this->chat_model->criarConversa($dadosConversa);

	}
	public function buscar_conversa(){
		$this->load->helper('url');
		$this->load->model("chat_model");

		$dados["idusuario"] = $this->input->post("idusuario");
		$dados["idamigo"] = $this->input->post("idamigo");
		$dados["dadosConversa"] = $this->chat_model->buscarMensagem($dados["idusuario"],$dados["idamigo"]);
		$html = $this->load->view("templates/chat_conversa",$dados,true);
		echo json_encode(array (
			'permisao' => 'true' ,
			'html' => $html 
		));
	}

}   