<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class selecionarperfil extends CI_Controller {
	
	public function index() {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");

		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->session->idusuario_session;

		$dados["dadosPets"] = $this->pets_model->buscarPets($dados["idusuario"]);
		$dados["racaPets"] = $this->pets_model->racaoPets();

		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura_interna/selecaoperfilpets");
		$this->load->view("estrutura/footer");
	}
	public function cadastrarPets() {
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("pets_model");
		$this->load->library('session');

		$this->form_validation->set_rules("nome","nome","required");
		$this->form_validation->set_rules("altura","altura","required");
		$this->form_validation->set_rules("ano","ano","required");
		$this->form_validation->set_rules("sexo","sexo","required");
		$this->form_validation->set_rules("peso","peso","required");
		$this->form_validation->set_rules("raca","raca","required");
	
		if($this->form_validation->run() == false ){
			echo json_encode($this->form_validation->error_array());
		}
		else{
			$dadosPets = array(
				'nome' => $this->input->post("nome") ,
				'ativo' => '1',
				'altura' => $this->input->post("altura"),
				'ano_nascimento'=> $this->input->post("ano"),
				'sexo'=>$this->input->post("sexo"),
				'peso' => $this->input->post("peso"),
				'fk_idUsuario'=>$this->session->idusuario_session,
				'fk_idtipo_animal'=>'1',
				'fk_idraca' =>$this->input->post("raca")
			);
			$this->pets_model->cadastro_pets($dadosPets);
			echo json_encode(array("mensagem"=>"Pets cadastrado com sucesso"));
		}
		
		
		

	}
}   