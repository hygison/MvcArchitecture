<?php
    class Login extends Controller{

        public function __construct(){
            $this->userModel = $this->model('user');
        }

        public function index(){
            $pageDataArr = [
                'title' => 'My MCV Architecture - Login',
            ];
            $this->view('pages/login', $pageDataArr);
        }
    }
?>