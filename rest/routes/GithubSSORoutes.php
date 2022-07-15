<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

Flight::route('GET /SSO-login', function(){
  header('Access-Control-Allow-Origin: *');
  
  $url = "https://github.com/login/oauth/authorize?client_id=" . Config::CLIENT_ID() . "&redirect_uri=http://127.0.0.1:80/video-game-statistics-tracker/SSO-login-callback.php";
  //$url = "https://beat-cors-master.herokuapp.com/";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  //curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
  $response = curl_exec($ch);
  curl_close($ch);

  header("Location: " . $url);
  exit;
  //exit;

  //$data = json_decode($response);
  //var_dump($url); die;
  
});

//Flight::route('GET /SSO-login-callback', function(){

//});
/*
Flight::route('POST /register', function(){
$data = Flight::request()->data->getData();
$data['password'] = md5($data['password']);
$user = Flight::userService()->add($data);
Flight::json($user);}
);
*/
/**
* login user
*/


/*
Flight::route('POST /login', function(){
  $login = Flight::request()->data->getData();
  $user = Flight::userDao()->getUserByEmail($login['emailLogIn']);
  if (isset($user['iduser'])){
    if($user['password'] == md5($login['passwordLogIn'])){
      unset($user['password']);
      $jwt = JWT::encode($user, Config::JWT_SECRET(), 'HS256');
      Flight::json(['token' => $jwt]);
    }else{
      Flight::json(["message" => "Wrong password"], 404);
    }
  }else{
    Flight::json(["message" => "User doesn't exist"], 404);
  }
});
*/
?>