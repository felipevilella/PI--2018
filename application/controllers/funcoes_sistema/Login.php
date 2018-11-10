<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
 
	public function index(){

	}

	public function validacao_login(){
		$this->load->helper("url");
		$this->load->model("login_model");

		$usuario = $this->input->post("usuario");
		$senha = md5($this->input->post("senha"));

		$autenticacao = $this->login_model->validacao($usuario,$senha);
	
	
		if(!empty($autenticacao)){
			$this->login_model->session_usuario($autenticacao["email"],$autenticacao["senha"],$autenticacao["idUsuario"],$autenticacao["nome"]);
			echo json_encode(array("confirmado"=>"ok"));

		}
		else{
			echo json_encode(array(
				"mensagem"=>"Email ou senha invalida, tente novamente!",
				"confirmado"=>false));
		}
	}
	

}





?>