<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paginainicial extends CI_Controller {
	
	public function index(){
		$this->load->helper("url");
		$this->load->view("estrutura/headerinicial");
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/telainicial");
		$this->load->view("estrutura/footerinicial");
	}
	public function cadastro(){
		$this->load->helper("url");
		$this->load->view("estrutura/headercadastro");
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/cadastro");
		$this->load->view("estrutura/footerinicial");
	}
	public function login(){
		$this->load->helper("url");
		$this->load->view("estrutura/headerlogin");
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/paginainicial");
		$this->load->view("estrutura/footerinicial");
	}

}   