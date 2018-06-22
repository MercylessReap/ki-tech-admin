<?php
$test = file_get_contents("http://10.0.0.4:8080/api/user");
$users = json_decode($test, true);
$currentUser = $users[0];
for($i=0; $i>count($users); $i++){
  $currentUser = $users[$i];
  echo $users[$i];
};

 ?>
