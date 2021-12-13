<?php 
session_start();

require_once __DIR__.'/../../configuracoes.php';

$usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);


if($usuario == ADMINISTRADOR_LOGIN and $senha == ADMINISTRADOR_SENHA){    
    $_SESSION['logado'] = true;
    if(isset($_SESSION['errors'])){
        unset($_SESSION['errors']);
    }
    $url = 'http://'.$_SERVER['HTTP_HOST'].'/pages/area_restrita.php';
    header("Location: $url");
    die();    
}

$_SESSION['errors'] = "login ou senha inválido";
$url = 'http://'.$_SERVER['HTTP_HOST'].'/pages/formulario_login.html';
header("Location: $url");
die();