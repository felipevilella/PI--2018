<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paginainicial extends CI_Controller  {
	
	public function index() {	
		$this->load->helper("url");
		$this->load->view("estrutura/headerinicial");
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/telainicial");
		$this->load->view("estrutura/footerinicial");
	}
	public function cadastro() {
		$this->load->helper("url");
		$this->load->model("localizacao_model");

		$dados["estado"] = $this->localizacao_model->buscarEstado();

		$this->load->view("estrutura/headercadastro",$dados);
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/cadastro");
		$this->load->view("estrutura/footerinicial");
	}
	public function validaEmail() {
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->model("usuario_model");

		$email = $this->input->post("email");

		$email = $this->usuario_model->buscarEmailExistente($email);

		if(!empty($email)){
			echo json_encode(array("mensagem" => "E-mail indisponivel"));
		}else{
			echo json_encode(array("mensagem" => ""));
		}

	}
	public function cadastroUsuarios() {
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->model("usuario_model");

		$this->form_validation->set_rules("nome","nome","required");
		$this->form_validation->set_rules("sobrenome","sobrenome","required");
		$this->form_validation->set_rules("estado","estado","required");
		$this->form_validation->set_rules("cidade","cidade","required");
		$this->form_validation->set_rules("email","email","required|valid_email");
		$this->form_validation->set_rules("senha","senha","required");

		if($this->form_validation->run() == false) {
			 echo json_encode($this->form_validation->error_array());
		}
		else {
			$dadosUsuario = array(
				'nome'=> $this->input->post("nome")." ".$this->input->post("sobrenome"),
				'email' => $this->input->post("email"),
				'senha' =>  md5($this->input->post("senha")),
				'fk_idCidade' => $this->input->post("cidade"),
				'fk_idEstado' => $this->input->post("estado"),
			);
			$this->usuario_model->cadastroUsuario($dadosUsuario);
			echo json_encode(array("mensagem" => "Conta cadastrada com sucesso!"));
		}
	}
	public function buscarCidadePorEstado() {
		$this->load->helper("url");
		$this->load->model("localizacao_model");

		$idEstado = $this->input->post("idEstado");
		$dadosCidades = $this->localizacao_model->getbuscarCidadePorEstado($idEstado);
		echo json_encode($dadosCidades);
	}
	public function login() {
		$this->load->helper("url");
		$this->load->view("estrutura/headerlogin");
		$this->load->view("estrutura/navbar_inicial");
		$this->load->view("estrutura_interna/paginainicial");
		$this->load->view("estrutura/footerinicial");
	}

}   