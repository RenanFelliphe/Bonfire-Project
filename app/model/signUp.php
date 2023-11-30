<?php
   // Database connection parameters
   $hostname = '162.240.17.101'; // Change this to your database hostname
   $username = 'projetos_nlessa'; // Change this to your database username
   $password = 'Gc&sgY74PK$}'; // Change this to your database password
   $database = 'projetos_INF2023_G10'; // Change this to your database name


   // Create a database connection
   $conn = mysqli_connect($hostname, $username, $password, $database);


   if ($conn->connect_error)
   {
      die("Erro " . $conn->connect_error) . ".";
   }


   // Get user input from the form
   function sign($connect)
   {
      if(isset($_POST['acessar']) AND !empty($_POST['apelido']) AND !empty($_POST['email']) AND !empty($_POST['senha']))
      {
         $email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
         $senha = md5($_POST['senha']);

         $query = "SELECT * FROM Usuario WHERE email='$email' AND senha = '$senha' ";

         $execute = mysqli_query($connect,$query);

         $return = mysqli_fetch_assoc($execute);

         if(!empty($return['email']) && !empty($return['senha']))
         {
            echo "Olá, " . $return['apelido'] . "!";
         }
         else
         {
            echo "Usuário ou senha não encontrados!";
         }
      }
   }
