<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pets_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	public function cadastro_pets($dadosPets){
		$this->db->insert("animal",$dadosPets);
	}
	public function buscarPets($idUsuario){
		$this->db->where("fk_idUsuario",$idUsuario);
		return $this->db->get("animal")->result_array();
	}

	public function racaoPets(){
		$this->db->where("ativo","1");
		return $this->db->get("racas")->result_array();
	}

	public function alterarPerfilPets($dados,$id){
		$this->db->where('idanimais', $id);
		$this->db->update('animal', $dados);
	}

	public function inserirFotosPets($dados){
		$this->db->insert("fotos_animal",$dados);
	}

	public function buscaFotosPets($idPets){
		$this->db->where("ativo","1");
		$this->db->where('fk_idanimais',$idPets);
		return $this->db->get("fotos_animal")->result_array();
	}

	public function buscarPetsPorIdPets($idPets){
		$this->db->select("animal.*,racas.nome as racaAnimal");
		$this->db->where('idanimais',$idPets);
		$this->db->join("racas","racas.idracas = animal.fk_idraca");
		return $this->db->get("animal")->row_array();
	}

	public function buscarPetsParaMacth($idracas,$cidade,$sexo){
		$this->db->select("usuario.idUsuario,usuario.nome as nomeUsuario,usuario.foto_principal as fotoUsurio,animal.*");
		$this->db->where("animal.ativo","1");
		$this->db->where("animal.fk_idraca",$idracas);
		$this->db->where("usuario.fk_idCidade",$cidade);
		$this->db->where("animal.sexo",$sexo);
		$this->db->join("animal","usuario.idUsuario = animal.fk_idUsuario");
		$this->db->join("racas","animal.fk_idraca = racas.idracas");
		return $this->db->get("usuario")->result_array();

	}

} 