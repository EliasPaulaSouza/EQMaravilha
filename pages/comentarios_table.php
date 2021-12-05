<?php 
require_once __DIR__.'/conexao.php'; 
 
//define a query SQL a ser executada
$statement = $pdo->query("SELECT * FROM comentarios ORDER BY data DESC");
//define o modo de busca para obter os registros como objetos
$statement->setFetchMode(PDO::FETCH_OBJ);
//busca todos os registros
$comentarios = $statement->fetchAll();

if(isset($comentarios )){




    foreach($comentarios as $comentario) {
      $data =  new DateTime( $comentario->data);
      $situacao = $comentario->situacao =='0' ?' <span class="badge badge-danger">Cadastrado</span>':'<span class="badge badge-success">Publicado</span>';
      $acoes = $comentario->situacao =='0' ?'Publicar':'Despublicar';
   
      echo "<tr>";
        $data =  new DateTime( $comentario->data);
        echo       
       ' <td scope="row">'.$comentario->id.'</td>'
        .'<td><strong>'.$comentario->nome.'</strong> </td>'
        .'<td>'.$comentario->email.'</td>'
        .'<td>'.$data->format('d/m/Y H:i').'</td>'
      .'  <td>'.$comentario->avaliacao.'</td>'
      .'  <td>'.$comentario->comentario.'</td>'
      //.'  <td>'.$comentario->situacao.'</td>'
     .'   <td>'.$situacao.' </td>'
 .'  <td> <a class="btn btn-primary" href="/pages/publicar_comentario.php?id='.$comentario->id.'&situacao='.$acoes.'">'.$acoes.'</a> </td>';   
      echo "</tr>";
    }


 
   
   

} 