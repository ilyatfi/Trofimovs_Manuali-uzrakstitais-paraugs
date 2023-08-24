<?php

if(isset($_POST['subscribtion'])) {

    if(file_exists("emails.json"))
        $emails = json_decode(file_get_contents("emails.json"));

    if(!is_array($emails))
        $emails = [];
    
    $email = $_POST['email'];

    $invalid = false;

    if($email == "")
        $invalid = true;

    foreach ($emails as $value) {
        if($value == $email)
            $invalid = true;
    }
    if(!$invalid)
        array_push($emails, $email);

    file_put_contents("emails.json", json_encode($emails));
    header("location:javascript://history.go(-1)");
}