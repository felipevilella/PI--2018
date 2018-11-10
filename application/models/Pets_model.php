<?php
class Pets_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	public function cadastro_pets($dadosPets){
		$this->db->insert("animal",$dadosPets);
	}
}