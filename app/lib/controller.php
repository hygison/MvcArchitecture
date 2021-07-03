<?php
    /**
     * Load Model and View
     * The goal is that all classes inside the controllers folder will extends to controller.php
     * To load model and view from one file
     */
    class Controller{

        public function model($model){
            require_once MODELS . DS .$model.'.php';
            return new $model;
        }
        
        public function view($view, $data =[]){
            $file = VIEWS . DS . $view.'.php';
            if(file_exists($file)){
                require_once $file;
            }else{
                die("Loading View Error");
            }
        }

    }