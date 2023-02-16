<html>

<head>
    <title>Página PHP</title>
</head>

<body>

<?php
//ini_set("display_errors", 1);
//header('content-Type: text/html; charset=UTF-8');

echo 'Versão Atual do PHP: ' .phpversion() . '<br>';

$servername = "desafio-docker-microservicos-db-1";
$username = "root";
$password = "123456";
$database = "meuBanco";

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($link->connect_error) {
    die("Erro na conexão: " . $link->connect_error);
}

$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(bin2hex(random_bytes(4)));
$host_name = gethostname();

$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$host_name')";

if ($link->query($query) === TRUE){
    echo "Novo registro criado com Sucesso";
} else {
    echo "Erro: " . $link->error;
}

$link->close();
?>
</body>
</html>
