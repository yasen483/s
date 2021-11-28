<?php
$text = $_GET["url"];


    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Referer: http://www.xnxx-downloader.net';
    $headers[] = 'Referer: http://www.xnxx-downloader.net/';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';

    $auther = "http://www.xnxx-downloader.net";
    $data   = "query=".$text;

    $method = curl_init();

    curl_setopt($method, CURLOPT_URL, $auther);
    curl_setopt($method, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($method, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($method, CURLOPT_POST, true);
    curl_setopt($method, CURLOPT_POSTFIELDS, $data);
    curl_setopt($method, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($method, CURLOPT_RETURNTRANSFER, true);


    $response = curl_exec($method);

    preg_match_all('#<a target="_blank" href="(.*?)" class="btn btn-primary"#', $response, $result);

if($text != null){
    echo json_encode([
        "url"=>$result[1][0],
        'by'=>"@JACAC",
    
    ],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
else{
    echo "null";
}
curl_close($method);
