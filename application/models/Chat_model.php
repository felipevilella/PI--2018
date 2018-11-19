<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model{

	function __construct() { 
		$this->load->database();
	}

	public function enviar_mensagem($dados) {
		$this->db->insert("mensagem",$dados);
	}

	public function criarConversa($dados) {
		$this->db->insert("conversa",$dados);
	}
	public function criarNotificacao($dados) {
		$this->db->insert("notificacao",$dados);
	}
	public function buscarUltimaMensagem($mensagem,$id_destinatario){
		$this->db->where("chatMensagem",$mensagem);
		$this->db->where("id_destinatario",$id_destinatario);
		return $this->db->get("mensagem")->row_array();
	}
	public function buscarMensagem($fk_idUsuario,$id_destinatario){

		$codigoPrimeiro = $fk_idUsuario.$id_destinatario;
 		$codigoSegundo = $id_destinatario.$fk_idUsuario;
 		$soma = $codigoPrimeiro+$codigoSegundo;

		$this->db->select('conversa.Fk_idMensagem, conversa.fk_idUsuario, mensagem.id_destinatario,mensagem.chatMensagem, conversa.id_destinatario as idConversaDestinatario, mensagem.data, mensagem.ativo');
		$this->db->where("mensagem.codigofinal",$soma);
		$this->db->join("mensagem","mensagem.idMensagem = conversa.Fk_idMensagem");
		return $this->db->get("conversa")->result_array();
	}
	
	public function buscarConversa($fk_idUsuario,$id_destinatario){
		$codigoPrimeiro = $fk_idUsuario.$id_destinatario;
 		$codigoSegundo = $id_destinatario.$fk_idUsuario;
 		$soma = $codigoPrimeiro+$codigoSegundo;
		$this->db->select('conversa.fk_idUsuario,conversa.id_destinatario as idConversaDestinatario, mensagem.data');
		return $this->db->get("conversa")->result_array();
	}
	
	public function buscarNotificacao($idusuario){
		$this->db->where("idAmigo",$idusuario);
		$this->db->group_by("codigoTotal");
		return $this->db->get("notificacao")->result_array();
	}
	public function mostrarMensagemNotificacao($idusuario,$id_destinatario,$codigoTotal){
		$this->db->select("mensagem.chatMensagem,conversa.id_destinatario,conversa.fk_idUsuario,mensagem.codigofinal");
		$this->db->where("codigofinal",$codigoTotal);
		$this->db->join("mensagem","mensagem.idMensagem = conversa.Fk_idMensagem");
		$this->db->where("mensagem.id_destinatario",$idusuario);
		$this->db->where("conversa.fk_idUsuario",$id_destinatario);
		$this->db->order_by("idMensagem","desc");
		return $this->db->get("conversa")->row_array();
	}
	public function mostrarContadorDeMensagem($idusuario){
		$this->db->select_sum("ativo");
		$this->db->where("idAmigo",$idusuario);
		return $this->db->get("notificacao")->row_array();
		
	}

}
