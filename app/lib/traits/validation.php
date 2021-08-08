<?php

    trait Validation{

        public function isEmail($email){
            $pattern = '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i';
            preg_match($pattern, $email, $match);
            if(!empty($match) && $match[0] == $email){
                return true;
            }
            return false;
            
        }
        public function isPasswordSafe($pwd){
            if($this->isStrLenMoreThan7($pwd) && $this->doesStrHasNumber($pwd) && $this->doesStrHasLowerAndUpper($pwd) && $this->doesStrHasSpecialCharacteres($pwd) ){
                return true;
            }
            return false;
        }
        public function isStrLenMoreThan7($str){
            if(strlen($str > 7)){
                return true;
            }
            return false;
            
        }
        public function doesStrHasNumber($str){
            $pattern = '/[0-9]/';
            preg_match($pattern, $str, $match);
            if(!empty($match)){
                return true;
            }
            return false;
        }
        public function doesStrHasLowerAndUpper($str){
            $pattern1 = '/[a-z]/';
            $pattern2 = '/[A-Z]/';
            preg_match($pattern1, $str, $match1);
            preg_match($pattern2, $str, $match2);
            if(!empty($match1) && !(empty($match2))){
                return true;
            }
            return false;

        }
        public function doesStrHasSpecialCharacteres($str){
            $pattern = '/[\-\+\.\,\=\?\!\@\#\%\^\(\)\/\~\{\}\|]/';
            preg_match($pattern, $str, $match);
            if(!empty($match)){
                return true;
            }
            return false;
        }



    }


?>