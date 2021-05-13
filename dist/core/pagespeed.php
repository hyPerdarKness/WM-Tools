<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

function k_http_sitespeed($url)
{
$s = array(
CURLOPT_USERAGENT =>'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)',
CURLOPT_TIMEOUT =>10,
CURLOPT_RETURNTRANSFER =>true,
CURLOPT_URL =>$url,
CURLOPT_HEADER =>true,
CURLOPT_REFERER =>'',
CURLOPT_FOLLOWLOCATION =>true
);
$ch = curl_init();
foreach($s as $opt =>$val)
{
curl_setopt($ch,$opt,$val);
}
ob_start();
$response = curl_exec($ch);
$times['total'] = ($curlinfo = curl_getinfo($ch,CURLINFO_TOTAL_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['namelookup'] = ($curlinfo = curl_getinfo($ch,CURLINFO_NAMELOOKUP_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['connect'] = ($curlinfo = curl_getinfo($ch,CURLINFO_CONNECT_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['pretransfer'] = ($curlinfo = curl_getinfo($ch,CURLINFO_PRETRANSFER_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['starttransfer'] = ($curlinfo = curl_getinfo($ch,CURLINFO_STARTTRANSFER_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['redirect'] = ($curlinfo = curl_getinfo($ch,CURLINFO_REDIRECT_TIME)) ?round($curlinfo,2) : 'Unknown';
$times['size'] = ($curlinfo = curl_getinfo($ch,CURLINFO_SIZE_DOWNLOAD)) ?round($curlinfo,2) : 'Unknown';
ob_end_clean();
curl_close($ch);
unset($ch);
return $times;
}

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}

?>