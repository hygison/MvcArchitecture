<?php
    class Pages extends Controller{

        public function __construct(){
            $this->userModel = $this->model('user');
        }

        public function index(){
            $data = [
                'title' => 'My MCV Architecture - Index Page',
                'name' => 'Bola',
            ];
            $this->view('pages/index', $data);
        }
       
        public function about(){
            $this->view('pages/about');
        }
    }

?>