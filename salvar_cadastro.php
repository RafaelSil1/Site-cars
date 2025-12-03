<?php 
// recebe aqui os dados enviados pelo formulário 
//variaveis são criados com o " $ " + nome da variavel
 $nome = $_POST['nome'];
 $email = $_POST['email'];

//CRIPTOGRAFIA DA SENHA ANTES DE SALVAR NO BANCO (por segurança)
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// conecta ao banco de dados (servidor, usuario senha, nome, do banco)
$con = new mysql("localshot", "root", "", "cadastro");

// verificar se houve erro na conexão 
if ($con->connect_error) {
    die("Erro: " . $con->connect_error);
}

// monta a instrução SQL para inserir o novo usuário no banco
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// tenta executar o comando SQL 
if ($con->query($sql) === TRUE) {

    // se der certo, mostra mensagem de sucesso 
    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<a href='login.html'>Ir para o login</a>";

} else {

    // caso dê erro, mostra o motivo 
    echo "Erro ao cadastrar " . $con->error;
}

// Encerra a conexão com o banco 
$con->close();
 ?>