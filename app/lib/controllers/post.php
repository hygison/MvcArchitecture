<?php
    class Post extends Controller{

        public function __construct(){
            $this->userModel = $this->model('user');
        }

        public function index(){
            $pageDataArr = [
                'title' => 'Page Title',
            ];
            $this->view('post/index', $pageDataArr);
        }
        public function user_register(){
            
            $this->view('post/user_register');
        }

    }

?>