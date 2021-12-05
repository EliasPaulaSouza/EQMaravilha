<?php 
session_start();
if (isset($_SESSION['logado'])) {
  header("Location: /pages/area_restrita.php"); 
  die();
}

?>


<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="pt-BR">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>EQ MARAVILHA | quadrinhos </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../layout/styles/custom.css">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
    <!--  <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul> -->
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background:url('../artes/FUNDO.png') repeat;"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
  <?php
  include_once __DIR__.'/componentes/menu.php';   
   ?>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <h6 class="heading">Login</h6>
      <ul>
        <li><a href="/">Home</a></li>
       
        <li><a href="#">Login</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <main class="container vh-100 mt-5">
      <div class="row h-100 d-flex align align-items-center">
          
          <section class="col-12 col-md-6">
              <header>
                  <img src="../images/login.svg" alt="image" class="figure-img img-fluid rounded">
              </header>    
          </section>
          <section class="col-12 col-md-6 p-5 bg-light">
              <header>
                  <h1>Login</h1>
              </header>
              <form action="/pages/controllers/autenticar.php" method="post">
              <div class="form-floating mb-3">        
                  <input type="usuario" class="form-control" id="usuario" name="usuario">
                  <label for="usuario">Login</label>    
              </div>
              <div class="form-floating mb-3">        
                  <input type="password" class="form-control" id="senha" name="senha">
                  <label for="senha" >Senha</label>
              </div>    
              <button type="submit" class="btn btn-primary">Logar</button>
              </form>
          </section>
      </div>
  </main>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
include_once __DIR__.'/componentes/rodape.php';
?>