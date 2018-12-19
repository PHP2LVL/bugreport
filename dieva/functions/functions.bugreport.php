<?php

/**
 * Collects browsers version and OS
 * 
 * @return array
 */

function getBrowser(){
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        } else {
            $version= $matches['version'][1];
        }
    } else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return [
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'   => $pattern
    ];

}

/**
 * Collects all data for report, uses sendReport() function so 
 * send issue to youtrak and inserts issue ID and desciprion to local DB.
 * 
 * @param $data
 * 
 * @return string | null
 */

function getBugReportAjax($data){
    $bugDescription = $data['bugReportInfo'];
    $ip             = $_SERVER['REMOTE_ADDR']; // USERIO IP
    $mmVersion      = $data['currentVersion'];
    $activelink     = $_SERVER['SERVER_NAME']. $_SERVER['SCRIPT_NAME'];
    $email          = $data['email'];
    $themeVersion   = $data['themeVersion'];
    $screenRes      = $data['screenRes'];
    $cordX          = $data['cordX'];
    $cordY          = $data['cordY'];
    
    // now try it
    $ua = getBrowser();
    $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'];

    // return [
    //     'ip'            => $ip,
    //     'url'           => $activelink,
    //     'screen'        => $screenRes,
    //     'theme'         => $themeVersion,
    //     'browser'       => $yourbrowser,
    //     'description'   => $bugDescription,
    //     'version'       => $mmVersion,
    //     'email'         => $email,
    //     'x-coordinates' => $cordX,
    //     'y-coordinates' => $cordY
    // ];

    $bugInfo = '*IP:* ' . $ip . '\n*Url:* ' . $activelink . '\n*Screen:* ' . $screenRes . '\n*Theme:* ' . $themeVersion . '\n*Browser:* ' . $yourbrowser . '\n*Version:* ' . $mmVersion . '\n*Email:* ' . $email . '\n*X-coordinates:* ' . $cordX . '\n*Y-coordinates:* ' . $cordY . '\n*Description:* ' . $bugDescription;
    $data = '{
        "project":{"id":"0-0"},
        "summary":"' . date('Y-m-d H:i:s') . '",
        "description":"'.$bugInfo.'"
    }';


    if(!empty($email) && !empty($bugDescription)){

        if($sendResponse = sendReport($data)){
            $issueArray = json_decode($sendResponse, true);
            $issueId = $issueArray['id'];
            // var_dump($issueId);
            $insertQuery = "INSERT INTO `" . LENTELES_PRIESAGA . "bugs`(`description`, `report_id`) VALUES ('$bugDescription','$issueId')";
            if(mysql_query1($insertQuery)){
                return sendReport($data);
            }
        }
    }
    return null;
}


// Sends reported issue with API to youtrak
function sendReport($data){
    $headers = [
        'Content-Type: application/json', 
        'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
    ];

    $url = 'https://mightmedia.myjetbrains.com/youtrack/api/issues';

    // open connection
    $ch = curl_init();

    $curlConfig = [
        CURLOPT_HTTPHEADER      => $headers,
        CURLOPT_URL             => $url,
        CURLOPT_POST            => true,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_POSTFIELDS      => $data,
        // not secure stuff
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0
    ];

    curl_setopt_array($ch, $curlConfig);

    $response = curl_exec($ch);
    $resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($resultStatus != 200) {
        return curl_error($ch);
    }
    
    //close connection
    curl_close($ch);

    return $response;
}


// RETURNS ALL REPORTED BUGS FROM YOUTRACK
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


// ISSUES TRINIMO FUNKCIJA TIK YOUTRACK'e || Prideti tuo paciu trinima is DB
// URL'o gale issitraukti kiekvieno issue ID, kad trinti ta issue ant kurio paspaudi
function deleteReport(){
    $curl = curl_init();

    $headers = [
        'Content-Type: application/json', 
        'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
    ];

    $deleteUrl = "https://mightmedia.myjetbrains.com/youtrack/api/issues/2-75";

    $curlConfig = [
        CURLOPT_HTTPHEADER      => $headers,
        CURLOPT_URL             => $deleteUrl,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 0,
        CURLOPT_FOLLOWLOCATION  => false,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "DELETE",  
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


// $bugId = $_GET['id'];
// Istraukiamas issue is youtrak'o pagal GET['id']
function getReportedIssueInfo($issueId){
    
    $headers = [
        'Content-Type: application/json', 
        'Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB'    
    ];

    $url = 'https://mightmedia.myjetbrains.com/youtrack/api/issues/'.$issueId.'?fields=created,updated,summary,description';

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
        return $response;               
    }
}