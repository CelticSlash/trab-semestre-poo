<?php
    abstract class Database extends PDO{

        private $user = 'root';
        private $password = '';
        private $db_name = 'chamado_tecnico';
        private $host = 'localhost';
        private $port = '3306';
        private $driver = 'mysql';
        

        public function __construct()
        {
            $dns = $this->driver . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name;

            parent::__construct($dns, $this->user, $this->password);
        }
    }