<?php
    require_once AUTOLOAD_COMPOSER_PATH; //Composer Autoload

    spl_autoload_register('classLoader');
    
    function classLoader($className){

        $filePath = APPROOT . DS . $className . '.php';

        if(file_exists($filePath)){
            require_once $filePath;
        }else{
            foreach(unserialize(AUTOLOAD_ARR) as $path ){
                $filePath = $path . DS . $className . '.php';
                if(file_exists($filePath)){
                    require_once $filePath;
                }
            }
        }
    }
?>