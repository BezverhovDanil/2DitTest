<?php


        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        $token = urlencode("5922255477:AAESqXjoBXgcwszmmRFP_C2K2eJo_cPAve4");
        $chat_id = urlencode("-992025261");
        $arr = array(
        'Имя: ' => $name,
        'Email: ' => $email,
        'Телефон: ' => $message
        );
        $txt = "";

        foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");