<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class selecionarperfil extends CI_Controller {
	
	public function index() {
		$this->load->helper("url");
		$this->load->library('session');
		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		
		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->session->idusuario_session;
		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura_interna/selecaoperfilpets");
		$this->load->view("estrutura/footer");
	}
	public function cadastrarPets() {
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("pets_model");
		$this->load->library('session');

		 //Pegar dados do post enviado pelo js
		$dadosPets = array(
			'nome' => $this->input->post("nome") ,
			'ativo' => '1',
			'altura' => $this->input->post("altura"),
			'ano_nascimento'=> $this->input->post("data"),
			'sexo'=>$this->input->post("sexo"),
			'fk_idUsuario'=>$this->session->idusuario_session,
			'fk_idtipo_animal'=>'1',
			'fk_idperfil'=>$this->session->idusuario_session
		);
		
		$this->pets_model->cadastro_pets($dadosPets);
		echo json_encode(array("mensagem"=>"Pets cadastrado com sucesso"));

	}

}   