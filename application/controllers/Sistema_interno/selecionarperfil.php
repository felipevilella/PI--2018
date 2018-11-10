<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class selecionarperfil extends CI_Controller {
	
	public function index(){
		$this->load->helper("url");
		$this->load->library('session');
		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$this->load->view("estrutura/header");
		$this->load->view("estrutura_interna/selecaoperfilpets");
		$this->load->view("estrutura/footer");
	}

}   