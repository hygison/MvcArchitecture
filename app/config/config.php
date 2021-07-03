<?php

    /**
     * ###Define Credentials###
     * This file has the goal to make iy more dynamic
     * Define the constant for the website
     * 
     */
    date_default_timezone_set("Asia/Tokyo");

    define('APPROOT', dirname(dirname(__FILE__)));
    define('URLROOT', 'localhost');
    define('SITENAME', 'My MVC Architecture');

    define('DS', DIRECTORY_SEPARATOR);
    define('LIB', APPROOT . DS . 'lib');

    define('CONTROLLERS', LIB . DS . 'controllers');
    define('MODELS', LIB . DS . 'models');
    define('VIEWS', LIB . DS . 'views');
    define('TRAITS', LIB . DS . 'traits');

    define('HELPERS', APPROOT . DS . 'helpers');
    define('CONFIG', APPROOT . DS . 'config');
   
    define('AUTOLOAD_COMPOSER_PATH', APPROOT . DS . 'providers' . DS . 'vendor' . DS . 'autoload.php');

    define('AUTOLOAD_ARR', serialize(array(LIB, CONTROLLERS, HELPERS, CONFIG, MODELS, VIEWS, TRAITS)));

    define ('HEADER_PATH', VIEWS . DS . 'includes' . DS . 'header.php');
    define ('FOOTER_PATH', VIEWS . DS . 'includes' . DS . 'footer.php');
    define ('SIDEBAR_PATH', VIEWS . DS . 'includes' . DS . 'sidebar.php');
    


    
    /**
     * Google Credentials
     */
    define('GOOGLE_CREDENTIALS', APPROOT . DS . 'providers' . DS . 'google_credentials.json');

    /**
     * Database Credentials
     */
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PWD','root');//For XAMAPP it is empty, For MAMP it is 'root'
    define('DB_NAME','mcv-architecture');
    define('DB_CHAR_SET', 'utf8mb4' );


    /**
     * IMAP CREDENTIALS
     */
    define('IMAP_EMAIL', 'hygison.dev@gmail.com');
    define('IMAP_PWD', '---------');
    define('IMAP_HOST_NAME', '{imap.gmail.com:993/imap/ssl}INBOX');

    /**
     * SMTP CREDENTIALS
     */
    define('SMTP_EMAIL', 'hygison.dev@gmail.com');
    define('SMTP_PWD', '---------');
    define('SMTP_SERVER', 'smtp.gmail.com');
    define('SMTP_PORT', '587');
    define('SMTP_NO_REPLY_EMAIL', 'hygison.dev@gmail.com');