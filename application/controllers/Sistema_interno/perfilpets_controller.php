<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfilpets_controller extends CI_Controller {
	
	public function index(){
		$this->load->helper("url");
		$this->load->view("estrutura/header");
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilpets");
		$this->load->view("estrutura/footer");
	}

}   