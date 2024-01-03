<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Home
$routes->get('/', "Home::index", ["as"=>"home"]);
//Login
$routes->get('/login', "Login::index", ["as"=>"login"]);
$routes->post('/login/processar', "Login::processar", ["as"=>"login.processar"]);
$routes->get('/login/sair', "Login::sair", ["as"=>"login.sair"]);
//Usuários
$routes->get('/usuarios', "Usuario::index", ["as"=>"usuarios"]);
$routes->get('/usuarios/deletar/(:num)', "Usuario::deletar/$1", ["as"=>"usuarios.deletar"]);
$routes->get('/usuarios/novo', "Usuario::novo", ["as"=>"usuarios.novo"]);
$routes->post('/usuarios/gravar', "Usuario::gravar", ["as"=>"usuarios.gravar"]);
$routes->get('/usuarios/editar/(:num)', "Usuario::editar/$1", ["as"=>"usuarios.editar"]);
//Notícias
$routes->get('/noticias', "Noticia::index", ["as"=>"noticias"]);
$routes->get('/noticias/deletar/(:num)', "Noticia::deletar/$1", ["as"=>"noticias.deletar"]);
$routes->get('/noticias/novo', "Noticia::novo", ["as"=>"noticias.novo"]);
$routes->post('/noticias/gravar', "Noticia::gravar", ["as"=>"noticias.gravar"]);
$routes->get('/noticias/editar/(:num)', "Noticia::editar/$1", ["as"=>"noticias.editar"]);
//Notícia completa
$routes->get('/noticia/(:num)', "News::getNoticia/$1", ["as"=>"noticia.getNoticia"]);
