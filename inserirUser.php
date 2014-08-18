<?php
include "conexao/conecta.inc";
include_once 'classes/Bcrypt.class.php';
echo "<meta charset=UTF-8>";
function formataData($data){
$explode = explode("-", $data);
return $explode[2].'-'.$explode[1].'-'.$explode[0];
} 
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmsenha = $_POST['confirmsenha'];
$email = $_POST['email'];
$confirmemail = $_POST['confirmemail'];
$data = $_POST['dataNasc'];
$tipo = 2;
$data_formatada = formataData($data);

if(!($senha !== $confirmsenha)&& !($email !== $confirmemail))
{
    $senha = Bcrypt::hash($senha);
    $query = "INSERT INTO USUARIO (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, DATA_NASCIMENTO, TIPO_USUARIO)
        VALUES('$nome', '$senha', '$email', '$data_formatada', $tipo)";
if($email === ""){
    echo "Desculpe, Campo de E-mail nao Definidos";
}
else{
  if(mysql_query($query)){
    echo "Obrigado Por Se Cadastrar";
}
else{
    echo "Não Foi Possível Realizar o Cadastro";
}  
}
}
?>  

