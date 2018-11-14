<?php
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
	public function buscarUltimaMensagem($mensagem,$id_destinatario){
		$this->db->where("chatMensagem",$mensagem);
		$this->db->where("id_destinatario",$id_destinatario);
		return $this->db->get("mensagem")->row_array();
	}
	public function buscarMensagem($fk_idUsuario,$id_destinatario){
		$this->db->select('conversa.Fk_idMensagem, conversa.fk_idUsuario, mensagem.id_destinatario,mensagem.chatMensagem, conversa.id_destinatario as idConversaDestinatario, mensagem.data, mensagem.ativo');
		$this->db->where("fk_idUsuario",$fk_idUsuario);
		$this->db->where("conversa.id_destinatario",$id_destinatario);
		$this->db->or_where("fk_idUsuario",$id_destinatario);
		$this->db->where("conversa.id_destinatario",$fk_idUsuario);
		$this->db->join("mensagem","mensagem.idMensagem = conversa.Fk_idMensagem");
		return $this->db->get("conversa")->result_array();
	}

}