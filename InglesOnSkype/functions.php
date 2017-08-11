<?php
// arquivo de funcoes do wordpress
function validateMail($emailAddress){
    return filter_var($emailAddress, FILTER_VALIDATE_EMAIL);
}

function sendMail($to, $subject, $body){
    $headers = array('Content-Type: text/html; charset=UTF-8');
    return wp_mail( $to, $subject, $body, $headers );
}