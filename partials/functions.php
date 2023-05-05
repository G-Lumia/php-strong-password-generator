<?php

if(isset($_GET['lenght'])){
    $lenght = $_GET['lenght'];
}
else{
    $lenght = 0;
}

function randomPassword($lenght) {
    if((!is_numeric($lenght)))
    {
        return "You need to use numbers, you madman";
    }
    elseif($lenght > 0){
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789~`!@#$%^&*{}[]()\|/:;<>.?/";
        $password = [];
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $lenght; $i++) {
            $letter = rand(0, $alphaLength);
            $password[] = $alphabet[$letter];
        }
        return implode($password);
    }
    elseif($lenght <= 0)
    {
        return "Use a number higher than 0";
    }
}?>