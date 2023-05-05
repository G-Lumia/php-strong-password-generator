<?php
    session_start();

    function randomPassword($lenght) {
        if((!is_numeric($lenght)))
        {
            $_SESSION['password'] = "You need to use numbers, you madlad";
        }
        elseif($lenght > 0){
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789~`!@#$%^&*{}[]()\|/:;<>.?/";
            $password = [];
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < $lenght; $i++) {
                $letter = rand(0, $alphaLength);
                $password[] = $alphabet[$letter];
            }
            $_SESSION['password'] = implode($password);
        }
        elseif($lenght <= 0)
        {
            $_SESSION['password'] = "Use a number higher than 0";
        }
}?>