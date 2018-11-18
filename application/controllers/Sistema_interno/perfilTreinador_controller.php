<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfilTreinador_controller extends CI_Controller {
	
	public function index(){

	}
	public function perfil($id) {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");
		$this->load->model("usuario_model");
		$this->load->model("chat_model");

		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$dados["idusuario"] = $this->session->idusuario_session;
		$dados["nome"] = $this->session->nome_session;
		$dados["dadosusuario"] = $this->usuario_model->buscarUsuario($dados["idusuario"]);
		$dados["dadosPets"] = $this->pets_model->buscarPets($dados["idusuario"]);
/*
		$dados["contadornotificacao"] = $this->chat_model->mostrarContadorDeMensagem($dados["idusuario"]);

		$notificacao = $this->chat_model->buscarNotificacao($dados["idusuario"]);
		foreach ($notificacao as $dadosNotificacao) {
			$menagemNotificacao = $this->chat_model->mostrarMensagemNotificacao($dados["idusuario"],$dadosNotificacao["fk_idUsuario"],$dadosNotificacao["codigoTotal"]);
			print_r($menagemNotificacao);
		}
		*/

		
		
		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilTreinador");
		$this->load->view("estrutura/footer");
	}

	public function perfilamigo($idusuario) {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("pets_model");
		$this->load->model("usuario_model");

		if(empty($this->session->usuario_session)){
			redirect('login');
		}
		$dados["idusuario"] = $idusuario;
		$dados["nome"] = $this->session->nome_session;
		$dados["dadosusuarioamigo"] = $this->usuario_model->buscarUsuario($dados["idusuario"]);
		$dados["dadosPets"] = $this->pets_model->buscarPets($dados["idusuario"]);

		
		$this->load->view("estrutura/header",$dados);
		$this->load->view("estrutura/navbar_usuario");
		$this->load->view("estrutura_interna/perfilamigo");
		$this->load->view("estrutura/footer");
	}
	public function salvarFotoPetsPerfil() {
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("usuario_model");

		$dados["nome"] = $this->session->nome_session;
		$dados["idusuario"] = $this->input->post("idusuario");

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

		if ($this->upload->do_upload('fotousuarioperfil')){
			$nome = $this->upload->data();
			$data = array('upload_data' => $this->upload->data());
			$dadosFoto = array(
				'foto_principal' => $nome["client_name"]
			);

			$this->usuario_model->alterarPerfilusuario($dadosFoto,$dados["idusuario"]);
			redirect('perfiltreinador/'.$dados["idusuario"]);

			/*$this->load->library("Image_lib");
			$config["source_image"] = "assets/personalizado/fotos_pets";
			$config['image_library'] = 'gd2';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width']  = 400;
			$config['height'] = 400;
			; */
			redirect("perfiltreinador/".$dados["idusuario"]);
			
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());

		}
	}
	public function deslogarUsuario(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect("login");
	}

}   