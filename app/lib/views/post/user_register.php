<?php
    echo 'POST TA CHEGANDO NO ARQUIVO CORRETO';
    if(isset($_POST)){
        if(isset($_POST['registerNewUser'])){

            $gname = $_POST['r-gname'];
            $fname = $_POST['r-fname'];
            $email = $_POST['r-email'];
            $pwd = $_POST['r-pwd'];
            $confirmPwd = $_POST['r-confirm-pwd'];

            $saveUser = new User();
            $isValid = $saveUser->registerValidate($gname, $fname, $email, $pwd, $confirmPwd);
            if($isValid){
                echo true;
            }
        }
    }



?>