<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesquisa_controller extends CI_Controller {
	
	public function index(){
		$this->load->helper("url");
		$this->load->library('session');
		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$dados["nome"] = $this->session->nome_session;
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/pesquisa");
		$this->load->view("estrutura/footer");
	}
}  