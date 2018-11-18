<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Localizacao_model extends CI_Model {
	
	function __construct(){
		$this->load->database();
	}
	public function buscarEstado(){
		$this->db->where("ativo","1");
		return $this->db->get("estado")->result_array();
	}
	public function getbuscarCidadePorEstado($fk_idestado){
		$this->db->where("fk_idestado",$fk_idestado);
		$this->db->where("ativo","1");
		return $this->db->get("cidade")->result_array();
	}
}