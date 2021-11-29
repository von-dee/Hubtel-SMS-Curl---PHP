<?php

    $phonenumber = "233555883284";
    $msg = "Selasie will be great.";

    $msg = str_replace(" ", '%20', $msg);
    $url = 'https://smsc.hubtel.com/v1/messages/send?clientsecret=mcmrcrmx&clientid=qlxaflxo&from=Pickgaro&to='.$phonenumber.'&content='.$msg;


    $ch = curl_init($url);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,   // return web page
        CURLOPT_HEADER         => false,  // don't return headers
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'], // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    ); 

    curl_setopt_array($ch, $options);


    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);

?>