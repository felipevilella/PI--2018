<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesquisa_controller extends CI_Controller {
	
	public function index() {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");
		$this->load->model("usuario_model");
		$this->load->model("localizacao_model");

		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$dados["idusuario"] = $this->session->idusuario_session;
		$dados["nome"] = $this->session->nome_session;
		$dados["dadosusuario"] = $this->usuario_model->buscarUsuario($dados["idusuario"]);
		$dados["dadosPets"] = $this->pets_model->buscarPets($dados["idusuario"]);
		$dados["estado"] = $this->localizacao_model->buscarEstado();

		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/pesquisa");
		$this->load->view("estrutura/footer");
	}
	public function buscarPets() {
		$this->load->model("pets_model");
		$this->load->model("usuario_model");

		$idPets = $this->input->post("idPets");
		$cidade = $this->input->post("cidade");

		$dadosPets = $this->pets_model->buscarPetsPorIdPets($idPets);
		if ($dadosPets["sexo"] == "m") {
			$sexo = "f";
		} else {
			$sexo = "m";
		}

		$resultadoPesquisa = $this->pets_model->buscarPetsParaMacth($dadosPets["fk_idraca"],$cidade,$sexo);
		echo json_encode($resultadoPesquisa);

	}
}  