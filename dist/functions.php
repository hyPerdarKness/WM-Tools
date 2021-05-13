<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); }

    function kisalt($metin, $uzunluk){
        $metin = substr($metin, 0, $uzunluk)."...";
        $metin_son = strrchr($metin, " ");
        $metin = str_replace($metin_son," ...", $metin);
        
        return $metin;
    }
	
function fuctarih(){
	$tarihgoster = array(
	'January' => 'Ocak',
	'February' => 'Şubat',
	'March' => 'Mart',
	'April' => 'Nisan',
	'May' => 'Mayıs',
	'June' => 'Haziran',
	'July' => 'Temmuz',
	'August' => 'Ağustos',
	'September' => 'Eylül',
	'October' => 'Ekim',
	'November' => 'Kasım',
	'December' => 'Aralık',
	'Monday' => 'Pazartesi',
	'Tuesday' => 'Salı',
	'Wednesday' => 'Çarşamba',
	'Thursday' => 'Perşembe',
	'Friday' => 'Cuma',
	'Saturday' => 'Cumartesi',
	'Sunday' => 'Pazar',
);

echo "". strtr(date('d F Y, l'), $tarihgoster).""; }

function sifreuret($uzunluk){

$harfler = "0123456789"."abcdefghijklmnopqrstuvwxyz"."ABCDEFGHIJKLMNOPQRSTUVWXYZ"."!@#$%^&*()_-=+;:,.?"; $str = "";

while(strlen($str) < $uzunluk){ $str .= substr($harfler, (rand() % strlen($harfler)), 1); } return($str); }

function koduret($uzunluk){

$harfler = "0123456789"; $str = "";

while(strlen($str) < $uzunluk){ $str .= substr($harfler, (rand() % strlen($harfler)), 1); } return($str); }

function htmlclean($text){  
    $text = preg_replace("'<script[^>]*>.*?</script>'si", '', $text );  
    $text = preg_replace('/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)',$text );  
    $text = preg_replace( '/<!--.+?-->/', '', $text );  
    $text = preg_replace( '/{.+?}/', '', $text );  
    $text = preg_replace( '/&nbsp;/', ' ', $text );  
    $text = preg_replace( '/&amp;/', ' ', $text );  
    $text = preg_replace( '/&quot;/', ' ', $text );  
    $text = strip_tags($text);  
    $text = htmlspecialchars($text);  
    return $text;  
}  	

function timeConvert ( $zaman ){
	$zaman =  strtotime($zaman);
	$zaman_farki = time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "az önce";
		} else {
			return $saniye .' saniye önce';
		}
	} else if ( $dakika < 60 ){
		return $dakika .' dakika önce';
	} else if ( $saat < 24 ){
		return $saat.' saat önce';
	} else if ( $gun < 7 ){
		return $gun .' gün önce';
	} else if ( $hafta < 4 ){
		return $hafta.' hafta önce';
	} else if ( $ay < 12 ){
		return $ay .' ay önce';
	} else {
		return $yil.' yıl önce';
	}
}

function temizle($url){
$url = trim($url);
$find = array('<b>', '</b>');
$url = str_replace ($find, '', $url);
$url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
$find = array(' ', '&amp;quot;', '&amp;amp;', '&amp;', '\r\n', '\n', '/', '\\', '+', '<', '>');
$url = str_replace ($find, '-', $url);
$find = array('..', '...');
$url = str_replace ($find, '.', $url);
$find = array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ë', 'Ê');
$url = str_replace ($find, 'e', $url);
$find = array('í', 'ì', 'î', 'ï', 'I', 'Í', 'Ì', 'Î', 'Ï','İ','ı');
$url = str_replace ($find, 'i', $url);
$find = array('ó', 'ö', 'Ö', 'ò', 'ô', 'Ó', 'Ò', 'Ô');
$url = str_replace ($find, 'o', $url);
$find = array('á', 'ä', 'â', 'à', 'â', 'Ä', 'Â', 'Á', 'À', 'Â');
$url = str_replace ($find, 'a', $url);
$find = array('ú', 'ü', 'Ü', 'ù', 'û', 'Ú', 'Ù', 'Û');
$url = str_replace ($find, 'u', $url);
$find = array('ç', 'Ç');
$url = str_replace ($find, 'c', $url);
$find = array('ş','Ş');
$url = str_replace ($find, 's', $url);
$find = array('ğ','Ğ');
$url = str_replace ($find, 'g', $url);
$find = array('?');
$url = str_replace ($find, '', $url);
$find = array('/[^A-Za-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
$repl = array('.', '-', '.');
$url = preg_replace ($find, $repl, $url);
$url = str_replace ('--', '-', $url);
$url = strtolower($url);
return $url;
}

function curlGET($url,$ref_url = "http://www.google.com/",$agent = "Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0"){
    $cookie=tempnam("/tmp","CURLCOOKIE");
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent );
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 100);
	curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/html; charset=utf-8","Accept: */*"));
    curl_setopt($ch, CURLOPT_VERBOSE, True);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_REFERER, $ref_url);
	$html=curl_exec($ch);
    curl_close($ch);
    return $html;
}

function curlGET_Text($url){
    $cookie=tempnam("/tmp","CURLCOOKIE");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_HEADER,0); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_AUTOREFERER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array ("Accept: text/plain"));
	$html=curl_exec($ch);
    curl_close($ch);
    return $html;
}

function clean_url($site) {
    $site = strtolower($site);
    $site = str_replace(array(
        'http://',
        'https://',
        'www.'), '', $site);
    return $site;
}

function cleanWWW($string) {
    $string = strtolower($string);
	if(strstr($string,"www")) {
		$urlArr=explode("www.",$string);
        $fURL=$urlArr[0].$urlArr[1];
		return $fURL;
	}
	else 
	   return $string;
}

function word_count($sentence)
{
$break = explode(" ",$sentence);
$count = count($break);
return $count;
}

function checkOnline($domain) {
   $curlInit = curl_init($domain);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   $response = curl_exec($curlInit);

   curl_close($curlInit);
   if ($response) return true;
   return false;
}

function filter_var_domain($domain)
{
    if(stripos($domain, 'http://') === 0)
    {
        $domain = substr($domain, 7); 
    }
     
    if(!substr_count($domain, '.'))
    {
        return false;
    }
     
    if(stripos($domain, 'www.') === 0)
    {
        $domain = substr($domain, 4); 
    }
     
    $again = 'http://' . $domain;
    return filter_var ($again, FILTER_VALIDATE_URL);
}

function check_url($url){
   $headers = @get_headers($url);
   $headers = (is_array($headers)) ? implode( "\n ", $headers) : $headers;

   return (bool)preg_match('#^HTTP/.*\s+[(200|301|302)]+\s#i', $headers);
}

function base64url_encode($data) { 
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
} 

function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
} 

function is_base64($s){
    if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s)) return false;

    $decoded = base64_decode($s, true);
    if(false === $decoded) return false;

    if(base64_encode($decoded) != $s) return false;

    return true;
}

function check_is_ajax($script) {
  $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
  if(!$isAjax) {
   echo '<meta http-equiv="refresh" content="0;URL=https://'.$_SERVER['HTTP_HOST'].'">'; exit;
  }
}

function doPWLookup($query) {

    # Initialization
    $pwserver = 'whois.pwhois.org';   # Prefix WhoIswhois Server (public)
    $pwport = 43;                     # Port to which Prefix WhoIswhois listens
    $socket_timeout = 20;             # Timeout for socket connection operations
    $socket_delay = 5;                # Timeout for socket read/write operations
    $max_batch = 500;                 # Maximum retrieval batch size (n per batch)
    $app_name = "PWPHPLib";              # Library name
    
    # Mostly generic code beyond this point
    $pwserver = gethostbyname($pwserver);
    $buffer = '';                     # Temporary buffer space
    $response = array();              # The response array set of answers

    $query = trim($query);
    if (!filter_var($query, FILTER_VALIDATE_IP)) {
        return 0;
    }
    
    # Build, then submit query
    $request = "app=\"$app_name\"\n";
    $request .= $query . "\n";
        
    # Create a new socket
    $sock = stream_socket_client("tcp://".$pwserver.":".$pwport, 
      $errno, $errstr, $socket_timeout);
    if (!$sock) {
     #echo "$errstr ($errno)<br />\n";
     return 0;
    }       
    stream_set_blocking($sock,0);         # Set stream to non-blocking
    stream_set_timeout($sock, $socket_delay); # Set stream delay timeout
    
    fwrite($sock, $request);
    
    # Keep looking for more responses until EOF or timeout
    $before_query = date('U');
    while(!feof($sock)){
     if($buf=fgets($sock,128)){
       $buffer .= $buf;
       if (date('U') > ($before_query + $socket_timeout)) break;
    }
    }
    
    fclose($sock);
    #print "REQUEST:\n\n$request\n\nRESPONSE:\n\n$buffer";
    
    $resp = explode("\n",$buffer);
    $entity_id = 0; $found = 0;
    foreach ($resp as $r) {
    unset($matcher);
    
    $r = html_entity_decode(strip_tags(trim($r)));
    if (stristr($r,':')) {
       if (preg_match('/^IP:/i',$r) > 0) {
            if ($found > 0) { $entity_id++; $found = 0; }
            $found++;
       }
       $matcher = explode(":",$r);
       $matcher[0] = preg_replace('/[^A-Za-z0-9]/', '', $matcher[0]);
       $matcher[1] = preg_replace('/[^A-Za-z0-9-\n\s_\.\/,;]/', '_', $matcher[1]);
       $response[strtolower($matcher[0])] = trim($matcher[1]);
    } 
    }
  return $response;
}

function curl($url, $post=false)
{
    $user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, $post ? true : false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post ? $post : false);
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    $gelenveri = curl_exec($ch);
    curl_close($ch);
    return $gelenveri;
}

?>