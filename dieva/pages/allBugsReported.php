<?php

function getReportedIssues(){

    $headers = [
        'Content-Type: application/json', 
        'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
    ];

    $url = 'https://mightmedia.myjetbrains.com/youtrack/api/issues?fields=id,summary,description';


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
        $info = json_decode($response);        
    }
    return $info;
}

?>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Visi reportinti bugai
                    </h2>
                </div>
                <div class="body clearfix">
                    <?php 
                        $returnedArray = getReportedIssues();
                        foreach ($returnedArray as $key) { ?>
                            <a href="pages/bugInfo.php?id=<?php echo $key->id;?>"><div class="card"><?php echo $key->summary;?></div></a><?php                            
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php


// ISSUES TRINIMO FUNKCIJA
// URL'o gale issitraukti kiekvieno issue ID, kad trinti ta issue ant kurio paspaudi

// function deleteReport(){
//     $curl = curl_init();

//     $headers = [
//         'Content-Type: application/json', 
//         'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
//     ];

//     $deleteUrl = "https://mightmedia.myjetbrains.com/youtrack/api/issues/2-75";

//     $curlConfig = [
//         CURLOPT_HTTPHEADER      => $headers,
//         CURLOPT_URL             => $deleteUrl,
//         CURLOPT_RETURNTRANSFER  => true,
//         CURLOPT_MAXREDIRS       => 10,
//         CURLOPT_TIMEOUT         => 0,
//         CURLOPT_FOLLOWLOCATION  => false,
//         CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST   => "DELETE",  
//     ];

//     curl_setopt_array($curl, $curlConfig);

//     $response = curl_exec($curl);
//     $err = curl_error($curl);

//     curl_close($curl);

//     if ($err) {
//     echo "cURL Error #:" . $err;
//     } else {
//     echo $response;
//     }
// } 

?>