<?php
class Usuario_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function buscarUsuario($idusuario) {
		$this->db->where("ativo","1");
		$this->db->where("idusuario",$idusuario);
		return $this->db->get("usuario")->row_array();
	}
}