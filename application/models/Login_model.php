<?php
class Login_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	public function validacao($usuario,$senha){
		$this->db->where("email",$usuario);
		$this->db->where("senha",$senha); 
		return $this->db->get("usuario")->row_array();
	}
	public function session_usuario($usuario,$senha,$idUsuario,$nome){
		
		$this->load->library('session');
		$this->session->set_userdata('usuario_session',$usuario);
		$this->session->set_userdata('senha_session',$senha);
		$this->session->set_userdata('nome_session',$nome);
		$this->session->set_userdata('idusuario_session',$idUsuario);
	}

}




