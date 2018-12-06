<?php

/**
 * from internet to get browser DATA
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
 * @param $data
 * @return array
 */
function getBugInfoAjax($data)
{
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
    $ua=getBrowser();
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
        "summary":"Testing issue from PHP ' . date('Y-m-d H:i:s') . '",
        "description":"'.$bugInfo.'"
    }';
    if(!empty($email) && !empty($bugDescription)){
        sendReport($data);
    }
}
// MIGHTMEDIJOS FUNKCIJA ADRESAS PAZIURETI
function sendReport($data){
    $authorization = "Authorization: Bearer perm:bWlnaHRtZWRpYWJ1Zw==.YnVncmVwb3J0.JOkYoJJswIwwjrD4jCiHnGsMHvvnOB";
    $ch = curl_init('https://mightmedia.myjetbrains.com/youtrack/api/issues');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_exec($ch);

    $resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($resultStatus == 200) {
        $response = 'Delivered';
    } else {
        die('Request sent failed: HTTP error code: ' . $resultStatus);
    }

    curl_close($ch);

    var_dump($response);
}

