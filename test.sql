-- criando tabela " usuarios " que armazenará os dados de login 
CREATE TABLE usuarios (

-- coluna " id " indentificador unico para cada usuario 
-- INT = numero inteiro 
-- AUTO_INCREMENT = o MYSQL incrementa automaticamente (1, 2, 3, ...)
-- PRIMARY KEY = chave primaria da tabela 

id INT AUTO_INCREMENT PRIMARY KEY,
-- coluna nome: armazena o nome da pessoa 
-- VARCHAR(100) = texto de até 100 caracteres 
-- NOT NULL = não pode ser deixado vazio
nome VARCHAR(100) NOT NULL,

-- coluna email: armazena o email da pessoa 
-- VARCHAR(150) - texto de até 150 caracteres 
-- NOT NULL obrigátorio 
-- UNIQUE = não pode haver dois email iguais 
emial VARCHAR(150) NOT NULL UNIQUE,

-- coluna senha: armazena a senha da pessoa 
-- VARCHAR(255) = texto de até 255 caractares 
-- NOT NULL = obrigatorio 
senha VARCHAR(255) NOT NULL
);