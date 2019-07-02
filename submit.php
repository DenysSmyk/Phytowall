<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {

    $headers = "From: Phytowall\r\n";
               

    $theme = 'Нове повідомлення';

    $letter = "Дані повідомлення:\r\n";
    $letter .='Імя: '.$_POST['name']."\r\n"; 
    $letter .='Email: '.$_POST['email']."\r\n"; 
    $letter .='Телефон: '.$_POST['phone']."\r\n"; 
    $letter .='Повідомлення: '.$_POST['message']."\r\n"; 

    if (mail('smukdenys10@gmail.com', $theme, $letter, $headers)){
        header('Location:/thankyou.php');
    } else {
        header('Location:/');
    }
}else{
    header('Location:/');
}