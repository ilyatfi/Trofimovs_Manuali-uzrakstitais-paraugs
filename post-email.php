<?php

if(isset($_POST['subscribtion'])) {

    if(file_exists("emails.json")) {
        
        $emails = json_decode(file_get_contents("emails.json"));
    }
    else {
        $emails = [];
    }

    $email = $_POST['email'];

    if(is_array($emails)) {

        array_push($emails, $email);
    }
    else {
        $emails = [];
        array_push($emails, $email);
    }

    //TODO: compare if there is no already added that email
    file_put_contents("emails.json", json_encode($emails));
    header("location:javascript://history.go(-1)");
}