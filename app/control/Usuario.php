<?php 

    // Criando Classe
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    class Usuario
    {

        private $nome = "a"; 
        private $apelido = "a"; 
        private $email ="@xyz.com";  
        private $senha = "a"; 
        private $biografia = "a";
        private $genero = "a"; 
        private $recado = "Nothing yet";  
        private $verificado = false;
        private $nacionalidade = "BR";
        private $quantSeguidores = 0;
        private $quantSeguindo = 0;
        private $quantPosts = 0;

        function __construct($nome,$apelido,$genero)
        {
            $this->nome = $nome;
            $this->apelido = $apelido;  
            $this->genero = $genero;
        }

        //Metodos
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        function postar($post)
        {
            echo " $post (POST) <br>";
        }

        function bemVindo()
        {
            if(strtolower($this->genero) === "masculino")
            {
                $gen = "o";
                echo "Bem vind(". $gen .") " . $this->nome ."! Seu apelido está definido como \"" . $this->apelido ."\".<br>";
            }
            else if(strtolower($this->genero) === "feminino")
            {
                $gen = "a";
                echo "Bem vind(". $gen .") " . $this->nome ."! Seu apelido está definido como \"" . $this->apelido ."\".<br>";
            }
            else if(!strtolower($this->genero) === "feminino" && !strtolower($this->genero) === "masculino")
            {
                $gen = "o/a";
                echo "Bem vind(". $gen .") " . $this->nome ."! Seu apelido está definido como \"" . $this->apelido ."\".<br>";
            }
        }

        function editarRecado($recado)
        {
            $this->recado = $recado;
        }

        public function changeVerificado()
        {
            if(($this->verificado)===true)
            {
                $this->verificado = false;
            }
            else
            {
                $this->verificado = true;
            }
        }

        public function mostrarDados()
        {
            echo "Seguindo: " . $quantSeguindo . "<br>Seguidores:" . $quantSeguidores . "<br>Posts: " . $quantPosts;
        }


        //GETS
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        public function getNome() 
        {
            return $this->nome;
        }

        public function getApelido() 
        {
            return $this->apelido;
        }

        public function getEmail() 
        {
            return $this->email;
        }

        public function getSenha() 
        {
            return $this->senha;
        }

        public function getBiografia() 
        {
            return $this->biografia;
        }

        public function getGenero() 
        {
            return $this->genero;
        }

        public function getRecado() 
        {
            return $this->recado;
        }

        public function getVerificado() 
        {
            return $this->verificado;
        }

        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }

        public function getQtSeguidores()
        {
            return $this->quantSeguidores;
        }

        public function getQtSeguindo()
        {
            return $this->quantSeguindo;
        }

        public function getQtPosts()
        {
            return $this->quantPosts;
        }

        //SETS
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        //=====================================================================================================================================================
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setApelido($apelido)
        {
            $this->apelido = $apelido;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function setBiografia($biografia)
        {
            $this->biografia = $biografia;
        }

        public function setGenero($genero)
        {
            $this->genero = $genero;
        }

        public function setRecado($recado)
        {
            $this->recado = $recado;
        }

        public function setVerificado($verificado)
        {
            $this->verificado = $verificado;
        }

        public function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;
        }

        public function setQtSeguidores($quantSeguidores)
        {
            if($quantSeguidores <= 0)
            {
                $this->quantSeguidores = 0;
            }
            else
            {
                $this->quantSeguidores = $quantSeguidores;
            }
        }

        public function setQtSeguindo($quantSeguindo)
        {
            if($quantSeguindo <= 0)
            {
                $this->quantSeguindo = 0;
            }
            else
            {
                $this->quantSeguindo = $quantSeguindo;
            }
        }

        public function setQtPosts($quantPosts)
        {
            if($quantPosts <= 0)
            {
                $this->quantPosts = 0;
            }
            else
            {
                $this->quantPosts = $quantPosts;
            }
        }
    }

    //Instanciando Objetos
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    //=====================================================================================================================================================

    $Renan = new Usuario("Renan Felliphe", "super peee", "Masculino");
    $Nath = new Usuario("Nathália Campos", "mirrorNL2", "Feminino");

    //Metodos
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    $Renan->postar("GO LOUD!");
    $Nath->postar("Me sentindo motivada!");

    $Nath->editarRecado("We're Bonfire!");

    //Construtores
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    //=====================================================================================================================================================
    $genericUser = new Usuario("Natália da Mata", "nattmc", "Feminino");

    $genericUser->bemVindo();



?>