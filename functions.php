<?php
//session start
function sec_session_start() {
    $session_name = 'kitech_admin_sss';   // Set a custom session name
    /*Sets the session name.
     *This must come before session_set_cookie_params due to an undocumented bug/feature in PHP.
     */
    session_name($session_name);

    $secure = true;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"],
        $cookieParams["domain"],
        $secure,
        $httponly);

    session_start();            // Start the PHP session
    session_regenerate_id(true);    // regenerated the session, delete the old one.
}
//.session end
//login user start
function login_user($t,$email, $username, $password, $name) {
  if($t == 'login'){
    $url = 'http://lechateaux.uk:8080/api/auth/login';
    $myvars = 'email='.$email.'&username='.$username.'&password='.$password;
  }elseif ($t == 'register') {
    $url = 'http://lechateaux.uk:8080/api/auth/register';
    $myvars = 'email='.$email.'&username='.$username.'&password='.$password.'&first='.$name[0]['first'].'&last='.$name[0]['last'].'&type=staff';
  }


  $ch = curl_init( $url );
  $headers    = ['Content-Type: application/x-www-form-urlencoded'];//,$token];
  curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt( $ch, CURLOPT_HEADER, 0);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

  $jsonresponse = curl_exec( $ch );
  curl_close($ch);
  $response = json_decode($jsonresponse, true);
  if(!empty($response['token'])){
    setcookie('token_key', $response['token'] , time() + (86400 * 30), "/");
    if(check_user($response['token'])){header('Location:./dashboard.php');};
  }else{
    echo 'failed';
  }
}

function check_cookie(){
  if(!isset($_COOKIE['token_key'])) return false;// cookie token is not set
  if(!empty($_COOKIE['token_key'])){
    //cookie token is set and not empty
    if(check_user($_COOKIE['token_key'])){
      //cookie token is set and valid
      return true;
    }
    //cookie token is set and invalid

    return false;
  }else{
    //cookie token is set and empty
    return false;
  };
}
//.login user end
function check_user($accesstoken) {
  $url = 'http://lechateaux.uk:8080/api/auth/me';
  $xaccesstoken = 'x-access-token: '.$accesstoken;
  $ch = curl_init( $url );
  $headers    = ['Content-Type: application/x-www-form-urlencoded',$xaccesstoken];
  curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt( $ch, CURLOPT_HEADER, 0);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

  $jsonresponse = curl_exec( $ch );
  curl_close($ch);
  $response = json_decode($jsonresponse, true);
  if(!empty($response['message'])){
    return false;
  }else if(!empty($response['_id'])){
    if(session_status() === 1){
      sec_session_start();
    }
    $_SESSION['token'] = $accesstoken;
    $_SESSION['uid'] = $response['_id'];
    $_SESSION['username'] = $response['username'];
    $_SESSION['firstname'] = $response['name'][0]['first'];
    $_SESSION['lastname'] = $response['name'][0]['last'];
    $_SESSION['email'] = $response['email'];
    $_SESSION['type'] = $response['type'];
    return true;
  }else{
    return false;
  }
}
//logout start
function logout_user() {
  session_destroy();
  setcookie('token_key', '', time() - (86400 * 30), "/", $_SERVER['SERVER_NAME'],false,true);
  header('Location:../');
}
//.logout end


?>
