<?php

    class User{
        private $dbhConn;

        public function __construct(){
            $this->dbhConn = new Dbh;
            echo microtime(true).'<br>';
            echo time().'<br>';
            $data = [
                $this->createUserID(),
                'bola',
                'mega',
                'emailwe'.rand(),
                'pwdsecret',
                date('y-m-d h:i:s')
            ];
            $query = "INSERT INTO users SET 
                userID=?,
                givenName=?,
                familyName=?,
                email=?,
                pwd=?,
                accCreatedDate=?
            ";
            $this->dbhConn->insertDbh($query, $data);
        }

        public function createUserID(){
            $userID = microtime(true);
            $userID = str_replace('.','M',$userID);
            return $userID;
        }
    }