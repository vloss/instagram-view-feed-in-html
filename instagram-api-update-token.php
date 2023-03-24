<?php

    // Renovar Access Token
    $file_token     = dirname(__FILE__).'/instagram-api-token.txt';
    $ACCESS_TOKEN   = file_get_contents($file_token);

    if ($ACCESS_TOKEN != "") {
        $CONN = curl_init();
        curl_setopt($CONN, CURLOPT_URL, 'https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=' . $ACCESS_TOKEN);
        curl_setopt($CONN, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($CONN);
        curl_close($CONN);

        $JSON_DATA = json_decode($data);
        echo "<pre>";
        print_r($JSON_DATA->access_token);
        echo "</pre>";

        if(isset($JSON_DATA->access_token) && $JSON_DATA->access_token != ""){
            file_put_contents($file_token, $JSON_DATA->access_token);
        }
    } else {
        echo "TOKEN não informado, adicione o token no arquivo 'instagram-api-token.txt'";
    }
?>