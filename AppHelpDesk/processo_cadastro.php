<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "programador_web";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Falha na conexão: " . $conn->connect_error);

}

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha= password_hash($_POST['senha'], PASSWORD_DEFAULT);


$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {

echo "Usuário cadastrado com sucesso!";

} else {

echo "Erro: " . $sql . "<br>" . $conn->error;

}

$conn->close();


?>