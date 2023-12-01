<?php
   // Database connection parameters
   $hostname = '162.240.17.101'; // Change this to your database hostname
   $username = 'projetos_nlessa'; // Change this to your database username
   $password = 'Gc&sgY74PK$}'; // Change this to your database password
   $database = 'projetos_INF2023_G10'; // Change this to your database name

   // Create a database connection
   $conn = mysqli_connect($hostname, $username, $password, $database);

   // Get user input from the form
   function logIn($conn)
   {
      if(isset($_POST['acessar']) and !empty($_POST['email']) and !empty($_POST['senha']))
      {
         $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
         $senha = md5($_POST['senha']);

         $query = "SELECT * FROM Usuario WHERE email = '$email' AND senha = '$senha' ";

         $execute = mysqli_query($conn,$query);

         $return = mysqli_fetch_assoc($execute);

         if(!empty($return['email']))
         {
            //echo "Olá, " . $return['apelido'] . "!";

            session_start();

            $_SESSION['nome'] = $return['nome'];
            $_SESSION['idConta'] = $return['idConta'];
            $_SESSION['email'] = $return['email'];
            $_SESSION['active'] = true;

            header('Location: ../../index.php');
         }
         else
         {
            echo "Usuário ou senha não encontrados!";
         }
      }
   }

   function logOut()
   {
      session_start();
      session_unset();
      session_destroy();
      
      header("location: ../../login.php");
   }
