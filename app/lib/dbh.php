<?php
    /**
     * Connection to the database by using PDO
     * SQL connection
     */
    class Dbh {
        private $dbHostName = DB_HOST;
        private $dbUserName = DB_USER;
        private $dbPassword = DB_PWD;
        private $dbName = DB_NAME;
        private $charSet = DB_CHAR_SET;

        
        public function __construct(){
            /*
            try {
                $dsn = 'mysql:host='.$this->dbHostName.';dbname='.$this->dbName.';charset='.$this->charSet;
                $pdo = new PDO($dsn, $this->dbUserName, $this->dbPassword);
                $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            }catch(\Exception $error){
                return 'Connection Failed: -> '.$error->getMessage();
            }*/
            return true;
        }

        public function connect(){
            try {
                $dsn = 'mysql:host='.$this->dbHostName.';dbname='.$this->dbName.';charset='.$this->charSet;
                $pdo = new PDO($dsn, $this->dbUserName, $this->dbPassword);
                $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            }catch(\Exception $e){
                return 'Connection Failed: ->'.$e->getMessage();
            }
        }

     

        public function insertDbh(string $query, array $data){
            try{
                $stmt = $this->connect()->prepare($query);
                $stmt->execute($data);
            }catch(PDOException $e){
                echo '<br>Query: '.$query.'<br>Error :'.$e->getMessage();
            } 
        }


        public function readDbh($query, array $data){

        }

        public function deleteDbh($query, array $data){

        }
        public function updateDbh($query, array $data){

        }
    }