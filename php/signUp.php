<?php
// Database connection parameters
$hostname = 'localhost'; // Change this to your database hostname
$username = 'root'; // Change this to your database username
$password = '@nlcoding_4(NL4)'; // Change this to your database password
$database = 'Bonfire-Project'; // Change this to your database name


// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error)
{
   die("Erro " . $conn->connect_error) . ".";
}


// Get user input from the form
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$biografia = $_POST['biografia'];
$genero = $_POST['genero'];
$recado = $_POST['recado'];
$verificado = $_POST['verificado'];
$nacionalidade = $_POST['nacionalidade'];


// SQL query to insert user data into the database
$sql = "INSERT INTO users (nome, email, senha, biografia, genero, recado, verificado, nacionalidade) VALUES (x, x, x, x, x, x, x, x)";


if ($stmt = $conn->prepare($sql))
{
   $stmt -> bind_param("ssssssis", $nome, $email, $senha, $biografia, $genero, $recado, $verificado, $nacionalidade);


   if ($stmt->execute())
   {
       echo "Cadastro concluído." . ".";
   }
   else
   {
       echo "Erro: " . $stmt->error;
   }


   $stmt->close();
}
else
{
   echo "Erro " . $conn->error . ".";
}


$conn->close();
?>
