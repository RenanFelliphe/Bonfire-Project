<?php
    class Conn
    {
        
        public $hostname = '162.240.17.101'; 
        public $username = 'projetos_nlessa'; 
        public $password = 'Gc&sgY74PK$}'; 
        public $database = 'projetos_INF2023_G10';

        public function connect()
        {
            try
            {
                //Conexao
                $this->connect = new PDO("mysql:host=".$this->hostname.";dbname=".$this->database,$this->username,$this->password);
                
                echo "Conexão realizada.";
                return $this->connect;
            }
            catch (Exception $err)
            {
                echo "Erro: Conexão não realizada com sucesso! Erro gerado: " . $err;
                return false;
            }
        }

    }
    $conn = new Conn();

    $conn->connect();
?>