<?php 
require_once __DIR__.'/../controllers/conexao.php'; 
 
//define a query SQL a ser executada
$statement = $pdo->query("SELECT * FROM comentarios  WHERE situacao = 1 ORDER BY data DESC");
//define o modo de busca para obter os registros como objetos
$statement->setFetchMode(PDO::FETCH_OBJ);
//busca todos os registros
$comentarios = $statement->fetchAll();

if(isset($comentarios )){
echo "<ul>";


    foreach($comentarios as $comentario) {
        $data =  new DateTime( $comentario->data);
        echo       
        "<li>"
        ."<article>"
         ."<header>"
           .'<figure class="avatar"><img src="/images/demo/avatar.png" alt=""></figure>'
            ."<address>"
         ."{$comentario->nome}"
           ." </address>"
           .' <time datetime="'.$comentario->data .'" > '.$data->format('d/m/Y').' </time>'
         ."</header>"
       .' <div class="comcont">'
          ." <p>{$comentario->comentario}</p>"
         ." </div>"
      ."  </article>"
     ." </li>";
    }
    echo "</ul>";
}