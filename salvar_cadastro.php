<?php 
// recebe aqui os dados enviados pelo formulário 
//variaveis são criados com o " $ " + nome da variavel

$nome = $_POST['nome'];
$email = $_POST['email'];

//CRIPTOGRAFIA DA SENHA ANTES DE SALVAR NO BANCO (por segurança)
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
?>