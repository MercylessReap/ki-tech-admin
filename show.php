<?php include 'functions.php';

if(isset($_POST['t'])){
  echo 'post is set';
  if($_POST['t'] == 'register'){
    echo 'processing register';
    if($_POST['password'] == $_POST['confirmpwd']){
      login_user($_POST['t'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['name']);
    }else{
      echo 'Passwords do not match';
    }
  }else{
    echo 'processing login';
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

      login_user($_POST['t'],$_POST['email'],'',$_POST['password'],null);
    }else{
      login_user($_POST['t'],'',$_POST['email'],$_POST['password'],null);
    }
  }
}
if (isset($_POST["t"])) {
    echo $_POST["t"];
}else{
    echo "N0, type is not set";
}
echo session_status();

?>
