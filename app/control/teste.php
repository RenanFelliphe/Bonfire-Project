<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Control TEST</title>
    </head>

    <body>
        <?php
            require "./Usuario.php";

            $listUsers = new Usuario();
            $resultUsers = $listUsers->list();

            foreach($resultUsers as $rowUser)
            {
                extract($rowUser);
                echo "ID: $idConta <br>";
                echo "Nome: $nome <br>";
                echo "Email: $email <br>";
            }
        ?>
    </body>
</html>