<?php
// Database connection parameters
$hostname = '162.240.17.101'; // Change this to your database hostname
$username = 'projetos_nlessa'; // Change this to your database username
$password = 'Gc&sgY74PK$}'; // Change this to your database password
$database = 'projetos_INF2023_G10'; // Change this to your database name


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



// SQL query to insert user data into the database
$sql = "SELECT email, senha FROM Usuarios";


if ($stmt = $conn->prepare($sql))
{
   $stmt -> bind_param("ss", $email, $senha);

   if (!($stmt->execute()))
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