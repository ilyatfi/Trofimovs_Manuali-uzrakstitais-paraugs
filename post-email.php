<?php

if(isset($_POST['subscription'])) {

    if(file_exists("databases/emails.json"))
        $emails = json_decode(file_get_contents("databases/emails.json"));

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

    file_put_contents("databases/emails.json", json_encode($emails));
    header("location:javascript://history.go(-1)");
}