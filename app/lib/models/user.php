<?php
    class User{
        use Validation;

        private $dbhConn;
        private $tableName = 'users';
        public $gname;
        public $fname;
        public $email;
        public $pwd;
        public $userID;        


        public function __construct(){
            $this->dbhConn = new Dbh;
        }

        public function registerValidate($gname, $fname, $email, $pwd, $confirmPwd){
            $this->gname = $gname;
            $this->fname = $fname;
            $this->email =$email;
            $this->pwd = $pwd;
            $this->confirmPwd =$confirmPwd;
            return true;
        }
        
        public function createUserID(){
            $userID = microtime(true);
            $userID = str_replace('.','M',$userID);
            $this->userID = $userID;
        }

        public function hashPwd($pwd){
            return md5($pwd);
        }


        public function createUser(){
            $this->createUserID();
            $data = [
                $this->userID,
                $this->gname,
                $this->fname,
                $this->email,
                $this->hashPwd($this->pwd),
                date('y-m-d h:i:s')
            ];
            $query = "INSERT INTO $this->tableName SET 
                userID=?,
                givenName=?,
                familyName=?,
                email=?,
                pwd=?,
                accCreatedDate=?
            ";
            $this->dbhConn->insertDbh($query, $data);
        }







        public function createDummyUser(){
            $data = [
                $this->userID,
                'bola'.rand(),
                'mega'.rand(),
                'emailwe'.rand().'@gmail.com',
                $this->hashPwd('pwdsecret'),
                date('y-m-d h:i:s')
            ];
            $query = "INSERT INTO $this->tableName SET 
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