<!DOCTYPE html>
<?php

if(isset($_SESSION['token']))
{
  setcookie('token_key', $token, time() + (86400 * 30), "/", $_SERVER['SERVER_NAME'],false,true); // 86400 = 1 day
}
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjViMmRiMTE3ZjFkOGVlMzhkODZjYjRhNSIsImlhdCI6MTUyOTgwODg1NywiZXhwIjoxNTI5ODk1MjU3fQ.rdNl0FpoRtFpvPJOxm-Od2vmS13oANxfzPGG8DyEELM';

setcookie('token_key', $token, time() + (86400 * 30), "/");
print_r($_SESSION['token_key']);
print_r($_COOKIE['token_key']);
//setcookie('token_key', $token, time() + (86400 * 30), "/", $_SERVER['SERVER_NAME'],false,true); // 86400 = 1 day
?>
