<?php

    class Core{

        protected $currentController = 'pages';//If there are no other controller this page will loaded
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $urlArr = $this->getUrl();
            if(isset($urlArr[0])){
                if(file_exists(CONTROLLERS . DS . strtolower($urlArr[0]) .'.php')){
                    //New controller
                    $this->currentController = strtolower($urlArr[0]);
                    unset($urlArr[0]);
                }
            }
            //It will load the constructor of hte class in the page below
            require_once CONTROLLERS . DS .$this->currentController.'.php';
            $this->currentController = new $this->currentController;


            if(isset($urlArr[1])){
                if(method_exists($this->currentController, $urlArr[1])){
                    $this->currentMethod = $urlArr[1];
                    unset($urlArr[1]);
                }
            }
            $this->params = $urlArr ? array_values($urlArr) : [];
            //Callback with array of params
            call_user_func_array( [$this->currentController, $this->currentMethod] , $this->params);

        }

        public function getUrl(){
            /**
             * Explode url  at / 
             */
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);//Remove spacial characteres including japanese
                $urlArr = explode('/',$url);
                return $urlArr;
            }
        }

    }