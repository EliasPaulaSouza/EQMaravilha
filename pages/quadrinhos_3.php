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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link
      href="../layout/styles/layout.css"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
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
  include_once __DIR__.'/componentes/menu_pequeno.php';   
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
  include_once __DIR__.'/componentes/menu.php';   
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
                <select
                  class="form-control"
                  id="control-paginas"
                  onchange="change_page()"
                  name="size"
                >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3" selected="selected">3</option>
                  <option value="4">4</option>
                </select>
              </div>

              
          
            <div class="col-md-12">
              <img src="../artes/03.png" class="img_livro" alt="" />
            </div>
            <div id="control-container" class="col-md-12">
              <a href="quadrinhos_2.php" class="vertical-btn btn btn-primary"
                ><i class="fa fa-arrow-left" aria-hidden="true"></i
              ></a>
              <a href="quadrinhos_4.php" class="vertical-btn btn btn-primary"
                ><i class="fa fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <br />
          <br />
          <br />

          <div id="comments">
            <h2>Comentários</h2>
            <br />
            <br />

            <!--    <ul>
           <li>
             <article>
               <header>
                 <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                 <address>
                 By <a href="#">A Name</a>
                 </address>
                 <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
               </header>
               <div class="comcont">
                 <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
               </div>
             </article>
           </li>
           <li>
             <article>
               <header>
                 <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                 <address>
                 By <a href="#">A Name</a>
                 </address>
                 <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
               </header>
               <div class="comcont">
                 <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
               </div>
             </article>
           </li>
           <li>
             <article>
               <header>
                 <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                 <address>
                 By <a href="#">A Name</a>
                 </address>
                 <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
               </header>
               <div class="comcont">
                 <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
               </div>
             </article>
           </li>
         </ul>-->
            <h2>Deixe seu comentario</h2>
            <form action="#" method="post">
              <div class="one_third first">
                <label for="name">Nome <span>*</span></label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  value=""
                  size="22"
                  required
                />
              </div>
              <div class="one_third">
                <label for="email">Email <span>*</span></label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  value=""
                  size="22"
                  required
                />
              </div>
              <div class="one_third">
                <label for="range">Avaliação </label>
                <input
                  type="range"
                  name="range"
                  id="range"
                  value=""
                  size="22"
                  min="1"
                  max="5"
                  step="0.5"
                />
              </div>
              <div class="block clear">
                <label for="comment"></label>
                <textarea
                  name="comment"
                  id="comment"
                  cols="25"
                  rows="10"
                ></textarea>
              </div>
              <div>
                <input type="submit" name="submit" value="Enviar" />
                &nbsp;
                <input type="reset" name="reset" value="Limpar" />
              </div>
            </form>
          </div>
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
include_once __DIR__.'/componentes/rodape.php';
?>