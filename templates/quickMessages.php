<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles/variable.css">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Bonfire</title>

</head>

<body class="">

    <section class="Q-quick-messages close">
        <span class="Q-message-pusher"><i class="bi bi-chat-dots All-icon"></i></span>
        <div class="Q-message-content">
            <p>MENSAGENS RÁPIDAS</p>
        </div>
    </section>

    <script>
        function openQuickMessages() {
            const quickMessages = document.querySelector('.Q-quick-messages');
            const messagePusher = document.querySelector('.Q-message-pusher');

            messagePusher.addEventListener('click', () => {
                quickMessages.classList.toggle("close");
            });
        }
    </script>
</body>
</html>