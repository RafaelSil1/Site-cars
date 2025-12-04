<?php
session_start(); 
// Inicia a sessão para acessar os dados do usuário logado

// Verifica se existe o dado "usuario" guardado na sessão
// Se não existir, significa que ninguém fez login
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html"); 
    // Redireciona de volta para a página de login
    exit; 
    // Para o código aqui para evitar acesso indevido
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>

<h1>Olá, <?php echo $_SESSION['usuario']; ?>! 🎉</h1>
<h2>Você está logado no sistema.</h2>

<p>Esta é uma página de exemplo para mostrar um ambiente interno.</p>

<a href="logout.php">Sair</a>

</body>
</html>