<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Paginainicial';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["perfiltreinador/(:num)"] = "Sistema_interno/Perfiltreinador_controller/perfil/$1"; 
$route["perfilpets/(:num)"] = "Sistema_interno/Perfilpets_controller/perfilPets/$1"; 
$route["selecionarperfilpets"] = "Sistema_interno/Selecionarperfil";
$route["cadastrar"] = "paginainicial/cadastro";
$route["login"] = "Paginainicial/login";
$route['inicio'] = 'Paginainicial';
$route['perfilusuario/(:num)']="Sistema_interno/Perfiltreinador_controller/perfilamigo/$1";
$route["chatCompleto"] = "Sistema_interno/ChatCompleto_controller"; 
$route["pesquisa"] = "Sistema_interno/Pesquisa_controller";
$route["cadastrarPets"] = "Sistema_interno/Selecionarperfil/cadastrarPets";
$route["enviarMensagem"] = "Sistema_interno/ChatCompleto_controller/salvar_conversa";
$route["mensagem"] = "Sistema_interno/ChatCompleto_controller/buscar_conversa";
$route["buscarCidade"] = "Paginainicial/buscarCidadePorEstado";
$route["salvarUsuario"] = "Paginainicial/cadastroUsuarios";
$route["salvarFotopets"] = "Sistema_interno/Perfilpets_controller/salvarFotoPetsPerfil";
$route["salvarDescricao"] ="Sistema_interno/Perfilpets_controller/salvarSobre";
$route["inserirfotoPets"] = "Sistema_interno/Perfilpets_controller/inserirFotoPetsPerfil";
$route["alterarPets"] = "Sistema_interno/Perfilpets_controller/alterarPets";
$route["alterarFotoUsuario"] = "Sistema_interno/Perfiltreinador_controller/salvarFotoPetsPerfil";
$route["validarUsuario"] = "Paginainicial/validaEmail";
$route["buscarPets"] = "Sistema_interno/Pesquisa_controller/buscarPets";
$route["verperfilpets/(:num)/(:num)"] = "Sistema_interno/Perfilpets_controller/perfilPetsAmigo/$1/$2";
$route["sair"] = "Sistema_interno/Perfiltreinador_controller/deslogarUsuario";

## controller de funções ##
$route["validacaousuario"] = "funcoes_sistema/Login/validacao_login";
