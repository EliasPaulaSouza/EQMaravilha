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
  <title>EQ MARAVILHA | quadrinhos</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all" />
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
        <?php
         $pagina='quadrinhos';
         $numero_pagina = 5;
        include_once __DIR__ . '/componentes/menu_pequeno.php';
        ?>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <div class="bgded" style="background: url('../artes/FUNDO.png') repeat">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <?php
      include_once __DIR__ . '/componentes/menu.php';
      ?>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="overlay">
      <div id="breadcrumb" class="hoc clear">
        <!-- ################################################################################################ -->
        <h6 class="heading">Quadrinhos</h6>
        <ul>
          <li><a href="/">Home</a></li>

          <li><a href="#">Quadrinhos</a></li>
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
      <div class="content">
        <!-- ################################################################################################ -->
        <h1>Escola em Quadrinhos Maravilha</h1>

        <div class="row">

          <div class="col-md-12">
            <label for="">Página:</label>
            <select class="form-control" id="control-paginas" onchange="change_page()" name="size">
              <option value="0">capa</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5" selected="selected">5</option>

            </select>
          </div>



          <div class="col-md-12">
            <img src="../artes/05.jpg" class="img_livro" alt="" />
          </div>
          <div id="control-container" class="col-md-12">
            <a href="quadrinhos_4.php" class="vertical-btn btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <a href="quadrinhos.php" class="vertical-btn btn btn-primary"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <br />
        <br />
        <br />

        <div id="comments">

          <?php
          include_once __DIR__ . '/componentes/comentarios_list_item_com_limite.php';

          include_once __DIR__ . '/componentes/deixe_seu_comentario.php';
          ?>
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php
  include_once __DIR__ . '/componentes/rodape.php';
  ?>