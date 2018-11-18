<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfilpets_controller extends CI_Controller {

	public function index(){

	}
	
	public function perfilPets($idpets) {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");
		$this->load->model("usuario_model");

		if (empty($this->session->usuario_session)) {
			redirect('login');
		}
		$dados["idpets"] = $idpets;
		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->session->idusuario_session;
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($idpets);
		$dados["dadosusuario"] = $this->usuario_model->buscarUsuario($dados["idusuario"]);
		$dados["buscarFotosPets"] = $this->pets_model->buscaFotosPets($idpets);
		
		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilpets");
		$this->load->view("estrutura/footer");
	}
	public function perfilPetsAmigo($idpets,$idusuario) {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");
		$this->load->model("usuario_model");

		if (empty($this->session->usuario_session)) {
			redirect('login');
		}
		$dados["idpets"] = $idpets;
		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->session->idusuario_session;
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($idpets);
		$dados["dadosusuario"] = $this->usuario_model->buscarUsuario($idusuario);
		$dados["buscarFotosPets"] = $this->pets_model->buscaFotosPets($idpets);
		
		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilpetsamigo");
		$this->load->view("estrutura/footer");
	}
	public function salvarSobre(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->input->post("idusuario");
		$dados["idpets"] = $this->input->post("idpets");
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($dados["idpets"]);

		if (empty($this->session->usuario_session)) {
			redirect('login');
		}
		$sobre = $this->input->post("descricaoPets");
		$DadoSobre = array(
			'descricao' => $sobre
		);

		$this->pets_model->alterarPerfilPets($DadoSobre,$dados["idpets"]);
		redirect('perfilpets/'.$dados["idpets"]);

	}
	public function inserirFotoPetsPerfil() {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->input->post("idusuario");
		$dados["idpets"] = $this->input->post("idpets");
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($dados["idpets"]);



		if (empty($this->session->usuario_session)) {
			redirect('login');
		}

		$config['upload_path'] = 'assets/personalizado/fotos_pets';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 800;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['width'] = 400;
		$config['height'] = 400;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fotopet')){
			$nome = $this->upload->data();
			$data = array('upload_data' => $this->upload->data());
			$dadosFoto = array(
				'diretorio' => $nome["client_name"],
				'fk_idanimais' => $dados["idpets"]
			);

			$this->pets_model->inserirFotosPets($dadosFoto);
			redirect('perfilpets/'.$dados["idpets"]);

			/*$this->load->library("Image_lib");
			$config["source_image"] = "assets/personalizado/fotos_pets";
			$config['image_library'] = 'gd2';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width']  = 400;
			$config['height'] = 400;
			; */
			
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);

		}
	}
	public function salvarFotoPetsPerfil() {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->input->post("idusuario");
		$dados["idpets"] = $this->input->post("idpets");
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($dados["idpets"]);

		if (empty($this->session->usuario_session)) {
			redirect('login');
		}

		$config['upload_path'] = 'assets/personalizado/fotos_pets';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 800;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['width'] = 400;
		$config['height'] = 400;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fotopetsperfil')){
			$nome = $this->upload->data();
			$data = array('upload_data' => $this->upload->data());
			$dadosFoto = array(
				'foto_principal' => $nome["client_name"]
			);

			$this->pets_model->alterarPerfilPets($dadosFoto,$dados["idpets"]);
			redirect('perfilpets/'.$dados["idpets"]);

			/*$this->load->library("Image_lib");
			$config["source_image"] = "assets/personalizado/fotos_pets";
			$config['image_library'] = 'gd2';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width']  = 400;
			$config['height'] = 400;
			; */
			
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());

		}
	}

	public function alterarPets() {
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("pets_model");
		$this->load->library('session');

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->input->post("idusuario");
		$dados["idpets"] = $this->input->post("idpets");
		$dados["dadosPets"] = $this->pets_model->buscarPetsPorIdPets($dados["idpets"]);

		if (empty($this->session->usuario_session)) {
			redirect('login');
		}

		$this->form_validation->set_rules("nome","nome","required");
		$this->form_validation->set_rules("altura","altura","required");
		$this->form_validation->set_rules("peso","peso","required");

		if($this->form_validation->run() == false ){
			echo json_encode($this->form_validation->error_array());
		}
		else{
			$dadosPets = array(
				'nome' => $this->input->post("nome") ,
				'altura' => $this->input->post("altura"),
				'peso' => $this->input->post("peso"),
			);
			$this->pets_model->alterarPerfilPets($dadosPets,$dados["idpets"]);
			echo json_encode(array("mensagem"=>"Pets cadastrado com sucesso"));
		}
		
		
		

	}

}   