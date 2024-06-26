<?php
function ping_tcp_port($host, $port, $timeout = 10) {
    $start = microtime(true);
    $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
    $end = microtime(true);

    if (!$fp) {
        return "Disconnect";
    } else {
        fclose($fp);
        return round(($end - $start) * 1000);
    }
}

// Memisahkan host dan port dari URL
$url = 'tcp://0.ap.ngrok.io:';
$parsedUrl = parse_url($url);

$host = $parsedUrl['host'];

// Membaca daftar port dari file port.txt
$ports = file_get_contents('port.txt');
$portsArray = explode("\n", $ports);

// Menjalankan ping port dan mengumpulkan hasil
$results = [];
foreach ($portsArray as $port) {
    $port = trim($port);
    if (!empty($port)) {
        $results[] = ping_tcp_port($host, $port);
    }
}

// Mengembalikan hasil sebagai teks
echo implode("\n", $results);
?>
