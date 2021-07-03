<?php

    class User{
        private $dbhConn;

        public $userName;
        public $userFamilyName;
        public $userEmail;
        public $userID;

        private $hashedPwd;
        
        public $userPwdHashed;

        public function __construct(){
            $this->dbhConn = new Dbh;

            $this->createUserID();
            $this->createDummyUser();
        }

        

        public function createUser(){

        }
        
        public function createUserID(){
            $userID = microtime(true);
            $userID = str_replace('.','M',$userID);
            $this->userID = $userID;
        }
        public function hashPwd($pwd){
            $this->hashedPwd = md5($pwd);
        }











        public function createDummyUser(){
            $data = [
                $this->userID,
                'bola'.rand(),
                'mega'.rand(),
                'emailwe'.rand().'@gmail.com',
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
    }