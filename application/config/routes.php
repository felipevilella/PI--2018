<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Paginainicial';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["perfiltreinador"] = "Sistema_interno/Perfiltreinador_controller"; 
$route["perfilpets"] = "Sistema_interno/Perfilpets_controller"; 
$route["selecionarperfilpets"] = "Sistema_interno/Selecionarperfil";
$route["cadastrar"] = "paginainicial/cadastro";
$route["login"] = "Paginainicial/login";
$route['inicio'] = 'Paginainicial';
$route['perfilusuario/(:num)']="Sistema_interno/Perfiltreinador_controller/perfilamigo/$1";
$route["chatCompleto"] = "Sistema_interno/ChatCompleto_controller"; 
$route["pesquisa"] = "Sistema_interno/Pesquisa_controller";


## controller de funções ##
$route["validacaousuario"] = "funcoes_sistema/Login/validacao_login";