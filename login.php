<?php 
    require_once "app/model/signIn.php";
    
    if(isset($_POST['acessar']))
    {
        logIn($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="assets/logo.jpeg">

    <title>Bonfire</title>
</head>

<body>
    <main class="login-start">
        <div class="login-start-wallpaper">
            <div class="blur-filter"></div>
        </div>

        <div class="global-login-container">
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action = "" method = "POST">
                        <h1 class="primary-text">Criar conta</h1>

                        <div class="social-container">
                            <a href="#" class="social"><i class='bx bxl-facebook'></i></a>
                            <a href="#" class="social"><i class='bx bxl-google'></i></a>
                            <a href="#" class="social"><i class='bx bxl-apple'></i></a>
                        </div>

                        <span class="quaternary-text">Ou use seu email para registrar</span>

                        <input type="text" name = "apelido" placeholder="Usuário" required>
                        <input type="email" name = "email" placeholder="E-mail" required>
                        <input type="password" name = "senha" minlength="8" placeholder="Senha" required>
                        <input type="password" name = "confirmaSenha" minlength="8" placeholder="Confirmar senha" required>

                        <input class = "submitButton" type="submit" name = cadastrar value = "Cadastrar">
                    </form>
                    
                </div>

                <div class="form-container sign-in-container">
                    <form action = "" method = "POST">
                        <h1 class="primary-text">Iniciar sessão</h1>

                        <div class="social-container">
                            <a href="#" class="social"><i class='bx bxl-facebook'></i></a>
                            <a href="#" class="social"><i class='bx bxl-google'></i></a>
                            <a href="#" class="social"><i class='bx bxl-apple'></i></a>
                        </div>

                        <span class="quaternary-text">Ou entre com sua conta Bonfire</span>
                        
                        <input type="text" placeholder="E-mail" required>
                        <input type="password" minlength="8" placeholder="Senha" required>

                        <a href="#" class="forgot">Esqueci minha senha</a>

                        <input  class = "submitButton" type="submit" name = acessar value = "Entrar">
                    </form>
                    
                </div>

                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1 class="primary-text">Já possui uma conta?</h1>

                            <p class="terciary-text">Para se manter conectado, preencha seus dados e continue sua
                                jornada</p>

                            <button class="ghost" id="signIn">Entrar</button>
                        </div>

                        <div class="overlay-panel overlay-right">
                            <h2 class="secondary-text">Bem vindo à Bonfire</h2>

                            <h1 class="primary-text">Não possui uma conta?</h1>

                            <p class="terciary-text">Preencha seus dados e comece sua jornada</p>
                            <button class="ghost" id="signUp">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer">

    </footer>

    <script src="js/login.js"></script>
</body>

</html>