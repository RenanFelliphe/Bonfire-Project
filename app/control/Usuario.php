<?php 
    class Usuario
    {
        private $nome; 
        private $apelido; 
        private $email;  
        private $senha; 
        private $biografia;
        private $genero; 
        private $recado;  
        private $verificado = false;
        private $nacionalidade;
        private $quantSeguidores = 0;
        private $quantSeguindo = 0;

        function postar()
        {
            echo "";
        }

        function seguir($quant)
        {
            $quantSeguindo = $quantSeguindo + $quant;
        }

        function pararSeguir($quant)
        {
            $quantSeguindo = $quantSeguindo - $quant;
        }

        function editarRecado($recado)
        {
            $this -> $recado = $recado;
        }
    }

    $Renan = new Usuario;
    $Nath = new Usuario;

    $Renan -> seguir(10);
    $Nath -> seguir(3);

    $Nath -> pararSeguir(1);

?>