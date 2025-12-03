<?php

// inicia a sessão para que possamos quardar os dados do usuario logado 
session_start();

// recebe o email digitado no formulário de login 
$email = $_POST['email'];

// recebe a senha digitada no formulário 
$senha = $_POST['senha'];

// conexão com o banco de dados ( servidor, usuário, senha, nome do banco )
$con = new mysql("localhost", "root", "", "cadastro" );

// verificar se ocorreu erro ao tentar conectar 
if ($con->connect_error); {
// Encerra o programa e mostra o erro
}

//  SQL para buscar o usuário pelo e-mail informado
$sql = "SELECT * FROM usuarios WHERE email = '$eamil'";
$result = $con->query($sql);
// Executa a consulta no banco 

// verifica se o email existe na tabela 
if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    // pega os dados do usuário encontrado

    // verificar se a senha digitada confere com a senha  criptografada do banco
    if (password_verify($senha, $usuario['senha'])) {

        $_SESSION['usuario'] = $usuario['nome'];
        // guarda o nome do usuario na sessão ( para manter o login ativo )

        header("location: inicio.php");
        // redireciona para a pagina protegida
        exit;
        // encerra o script após o redirecionamento
    } else {
        echo "Senha incorreta!";
        //s senha não bate
    }
} else {
    echo "E-mail não encontrado!";
    // nenhum usuário com esse e-mail foi localizado no banco
}

$con->close();
// fecha a conexão com o banco 
?>