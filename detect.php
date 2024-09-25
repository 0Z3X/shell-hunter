<?php
// You can use this script on a server to search for infections. 
// Or if you have access to one of the shells, you can use its PHP Execution feature. Then you have to strip the <?php prefix, though.

function scanDirectoryForHashMatch($dir) {
    $compromisedHashes = [
        '8cda68e69fb4eaae6a24c756dd9d2b6f656638275fb1e221fbe47a3e2f63020d' => 'Webshell v1 (no pwd)',
        'ec73efb74f45d8a4a95b23b97bcc16b6ea5ed940ab7c63209fd64614dac249ae' => 'LuFix Webshell v1 (pwd: lufix)',
        'e4d72584fc36ee12e10906a8d73a0926abf7baa4bed9b77a71028864e30033e2' => 'LuFix Webshell v2 (pwd: lufix)',
        '0c32b8f6679f8e0821bb344c18b88fcff84c8a2b3e0fbe78ad296197fb1ed000' => 'LuFix Webshell v3 (pwd: lufix)',
        '74954af2bf66739e1b112023f2a81575e71dd139f60529206b8f6e1edfea2dc9' => 'Yanz Webshell (fake, static content)',
        '9ce9a517602eb41ac2ad1854c83bdaed9e71bfc567a902b9a3343839649d8455' => 'Yanz Webshell (fake, static content)',
        '2c95ccccec0d40319130590c60cf1936c81692705ecbc879ff3de1b6cff6b095' => 'Yanz Webshell (fake, static content)',
        '164d968fbab42a9df553cfb1b829e9671117ace2cbe88d9916a9d1db830ba299' => 'Yanz Webshell (fake, static content)',
        '36dbb961274c46bbf717a5503e8e1128f4e06c48adc736e66b890b4b18920eed' => 'Yanz Webshell (fake, static content)',
        '04e687550de59c67e993d5ea638c2ed7a4044fa449d97ff2c1ead20561b96c64' => 'Yanz Webshell (fake, static content)',
        'e7d51691e197983cef7ed0222345df5e92e1448a3cbe02e88f25ddeeaabe4747' => 'PHP file uploader',
        '7c6fc52332a2ec6e7fc6c298f491ef89f043b3f437e812876090740208b135af' => 'PHP file uploader and dir lister',
        '313f2aa393b1f9743b8ae86124ab9ff9ce21e7879b68edcb62e49e01aeef1b52' => 'Leaf Mailer 2.8 (password: 3JpdGVfY2)'
    ];
    
    $compromisedFiles = [
        "/.*\/ORVX-.*\.php/" => [
            'name' => 'ORVX Webshell v3',
            'data' => '/.*shellpassword\s*=\s*"(.*?)"/',
            'label' => 'pwd'
        ],
        "/.*\/\.xtolz\.php/" => [
            'name' => '0Z3X Webshell',
            'notes' => 'Scan Root function seems use Linux kernel exploits (maybe pwnkit) to escalate privileges.',
            'data' => '/.*correctPassword\s*=\s*"(.*?)"/',
            'label' => 'pwd'
        ],
        "/.*\/cong\.php/" => [
            'name' => 'Yanz Webshell (Fake)',
            'notes' => 'Frontend is fake (content is static) but the file is used by the "Upload Via Link" function of the OZ3X Webshell when no filename is provided.'
        ],
        "/.*\/fex\.php/" => [
            'name' => 'Yanz Webshell (Working)',
            'notes' => 'Looks like a working version of Yanz Webshell, does not require a password.'
        ],
        "/.*\/query-medium-posts\.php/" => [
            'name' => 'Payload Downloader And Runner',
            'data' => '/\$l\s*=\s*"(.*?)"/',
            'label' => 'payload'
        ],
        "/.*\/uploader\.php/" => [
            'name' => 'LuFix.to Uploader'
        ],
        "/.*\/\.test\.php/" => [
            'name' => 'Connection Tester',
            'notes' => 'Used by marketplaces to check if accounts are available and/or have certain features. Contains default emails (maybe of the seller?)',
            'data' => '/\$defaultEmail\d+\s*=\s*"(.*?)"/',
            'label' => 'email'
        ],
        "/.*\/\.xleet\.php/" => [
            'name' => 'xLeet 4.2.5 Webshell',
            'dataFn' => function ($path, $home) { return "xleet"; },
            'label' => 'pwd'
        ],
        "/.*\/\.xl\.php/" => [
            'name' => 'xLeet 4.2.5 Webshell',
            'dataFn' => function ($path, $home) { return "xleet"; },
            'label' => 'pwd'
        ],
        "/.*\/sts\.php/" => [
            'name' => 'Smart Tools Shop Webshell', // 
            'notes' => 'Password is "md5(dirname(__FILE__) . $_SERVER["PHP_SELF"] . "!@#$%^&*()_+")"',
            'label' => 'pwd',
            'dataFn' => function ($path, $home) { 
                return md5(dirname($path) . str_replace($home."/public_html", "", $path) . "!@#$%^&*()_+"); 
            }
        ]
    ];

    $result = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($rii as $file) {
        if ($file->isFile()) {
            $filePath = $file->getPathname();
            $fileHash = hash_file('sha256', $filePath);
            if (isset($compromisedHashes[$fileHash])) {
                $result[$filePath] = [
                    'hash' => $fileHash,
                    'name' => $compromisedHashes[$fileHash]
                ];
            } else {
                foreach ($compromisedFiles as $re => $data) {
                    if (preg_match($re, $filePath)) {
                        $res = [];
                        $d = "";
                        if (isset($data['data']) && $data['data'] !== "") {
                            preg_match_all($data['data'], file_get_contents($filePath), $d, PREG_SET_ORDER);
                            foreach ($d as $m) {
                                $res[] = $m[1];
                            }
                        } elseif (isset($data['dataFn'])) {
                            $res[] = $data['dataFn']($filePath, $dir);
                        }

                        $name = $data['name'];
                        if (isset($data['label']) && !empty($data['label'])) {
                            $name .= ' ('.$data['label'].': '.implode(", ", $res).')';
                        }
                        $result[$filePath] = [
                            'hash' => $fileHash,
                            'name' => $name
                        ];
                    }
                }

            }
        }
    }

    return $result;
}

function searchForDomainNames($ip, $logsDir) {
    $domains = [gethostbyaddr($ip)];
    $result = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($logsDir));
    foreach ($rii as $file) {
        if ($file->isFile()) {
            $domain = basename(str_replace("-ssl_log", "", $file->getPathname()));       
            if (!isset($result[$domain])) {
                $result[$domain] = true;
                $domains[] = $domain;
            }
        }
    }
    return $domains;
}

function getIP() {
    $socket = stream_socket_client("udp://8.8.8.8:80", $errno, $errstr, 30);
    if ($socket) {
        $localIP = stream_socket_get_name($socket, false);
        fclose($socket);
        return preg_replace("/(.*):\d+/", '$1', $localIP);
    }
    return "N/A";
}

$uname = php_uname();
$uid = posix_getuid();
$userInfo = posix_getpwuid($uid);
$gid = posix_getgid();
$groupInfo = posix_getgrgid($gid);
$publicIp = getIP();
$userName = $userInfo['name'];
$groupName = $groupInfo['name'];
$homeDirectory = $userInfo['dir'];
$domains = searchForDomainNames($publicIp, "$homeDirectory/access-logs");

$report  = "Abuse Report\n";
$report .= "------------\n";
$report .= "Host:   $uname\n";
$report .= "IP:     $publicIp\n";
$report .= "User:   $userName (".$uid.")\n";
$report .= "Group:  $groupName (".$gid.")\n";
$report .= "Home:   $homeDirectory\n";
$report .= "\n";
$report .= "Domains\n";
$report .= "-------\n";
foreach ($domains as $domain) {
    $report .= "- $domain\n";
}
$report .= "\n";
$report .= "Compromised files\n";
$report .= "-----------------\n";
$infectedFiles = scanDirectoryForHashMatch($homeDirectory);
foreach ($infectedFiles as $filePath => $data) {
    $report .= "- $filePath | " . $data['hash'] . " | " . $data['name'] . "\n";
}
echo $report;
?>
