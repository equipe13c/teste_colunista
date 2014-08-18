<?php
session_start();
include "../conexao/conecta.inc";
echo "<meta charset=UTF-8>";
$nome = $_POST['nomeMateria'];
$tipo = $_POST['categoriaMateria'];
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$data = $_POST['dataMateria'];
$hora = $_POST['horaMateria'];
$autor = $_POST['autor'];

  
    $query = "INSERT INTO ARTIGO (TITULO_ARTIGO, CATEGORIA_ARTIGO, DESCRICAO_ARTIGO, CONTEUDO_ARTIGO, DATA_ARTIGO, HORA_ARTIGO, AUTOR_ARTIGO)
        VALUES('$nome', '$tipo', '$descricao', '$conteudo', '$data', '$hora', '$autor')";
   
    if(mysql_query($query)){
    echo "Matéria inserida com sucesso!";
}
else{
    echo "Não Foi Possível Inserir a Matéria :( ";
    echo mysql_error();
}  
    
    


?>  

