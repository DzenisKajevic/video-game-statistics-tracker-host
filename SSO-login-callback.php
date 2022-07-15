<?php
    header('Access-Control-Allow-Origin: *');
    var_dump("idKlol");
    die;
    //die;
    $code = $_GET['code'];
    if($code = ""){
        //header('Location: http://localhost:80/video-game-statistics-tracker');
        header('Location: https://stattrack.me');
        die;
    }
    else{
        $url = "https://github.com/login/oauth/access_token";

        $postParams = [
            'client_id' => Config::CLIENT_ID,
            'client_secret' => Config::CLIENT_SECRET,
            'code' => $code
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response);

        echo '<br/>';

        var_dump($data);
        die;
    }
?>