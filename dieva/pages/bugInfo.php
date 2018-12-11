<?php

$bugId = $_GET['id'];

function getReportedIssueInfo($bugId){
    
    $headers = [
        'Content-Type: application/json', 
        'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
    ];

    $url = 'https://mightmedia.myjetbrains.com/youtrack/api/issues/'.$bugId.'?fields=summary,description';

    $curl = curl_init();
    $curlConfig = [
        CURLOPT_HTTPHEADER      => $headers,
        CURLOPT_URL             => $url,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 30,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "GET",          
        // not secure stuff
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0
    ];

    curl_setopt_array($curl, $curlConfig);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
        echo $response;               
    }
}

getReportedIssueInfo($bugId);