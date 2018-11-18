<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function buscarUsuario($idusuario) {
		$this->db->select("usuario.*, cidade.nome as nomeCidade, estado.nome as nomeEstado");
		$this->db->where("usuario.ativo","1");
		$this->db->where("idusuario",$idusuario);
		$this->db->join("cidade","usuario.fk_idCidade = cidade.idcidade");
		$this->db->join("estado","usuario.fk_idEstado = estado.idestado");
		return $this->db->get("usuario")->row_array();
	}
	
	public function cadastroUsuario($dados) {
		$this->db->insert("usuario",$dados);
	}
	public function buscarEmailExistente($email){
		$this->db->where("email",$email);
		return $this->db->get("usuario")->row_array();
	}
	public function alterarPerfilusuario($dados,$id) {
		$this->db->where('idUsuario', $id);
		$this->db->update('usuario', $dados);
	}
}