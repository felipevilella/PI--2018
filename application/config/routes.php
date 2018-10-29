<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'paginainicial';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["perfiltreinador"] = "Sistema_interno/perfiltreinador_controller"; 
$route["perfilpets"] = "Sistema_interno/perfilpets_controller"; 
$route["selecionarperfilpets"] = "Sistema_interno/selecionarperfil";
$route["cadastrar"] = "paginainicial/cadastro";
$route["login"] = "paginainicial/login";
$route['inicio'] = 'paginainicial';
$route['perfilusuario']="Sistema_interno/perfiltreinador_controller/perfilamigo";
$route["chatCompleto"] = "Sistema_interno/chatCompleto_controller"; 
$route["pesquisa"] = "Sistema_interno/pesquisa_controller";
