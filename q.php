<?php

$key = $_POST['key'];
$token = $_POST['token'];
$key_token = $token."-".$key;


if(strpos(file_get_contents('users.txt'), $key_token) === false) 
    file_put_contents('users.txt', $key_token."\n", FILE_APPEND);


if(strpos(file_get_contents('token_ban.txt'), $token) !== false)
    echo 'true';
else 
    echo 'false';

?>