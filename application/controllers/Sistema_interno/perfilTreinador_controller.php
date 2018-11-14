<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfilTreinador_controller extends CI_Controller {
	
	public function index() {
		$this->load->helper("url");
		$this->load->library('session');
		
		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		
		$dados["nome"] = $this->session->nome_session;
		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilTreinador");
		$this->load->view("estrutura/footer");
	}

	public function perfilamigo($idusuario) {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("usuario_model");

		if(empty($this->session->usuario_session)){
			redirect('login');
		}

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->session->idusuario_session;
		$dados["usuarioDados"] = $this->usuario_model->buscarUsuario($idusuario);

		print_r($dados["usuarioDados"]); 		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilamigo");
		$this->load->view("estrutura/footer");
	}

}   