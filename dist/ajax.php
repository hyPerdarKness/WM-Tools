<?php define("include",true); include("functions.php"); check_is_ajax(__FILE__); sleep(1); echo '<h2>Sonuç</h2>';

include("autoload.php"); //google recaptcha
include("core/pagespeed.php");
include("core/domainwhois.php");

//IP Bul
if(isset($_POST["ipbul"])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain'])));

if($domain==""){ echo '<div class="alert alert-danger">IP bilgisi için alan adı girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz alan adı geçersizdir. Lütfen tekrar deneyin.</div>'; }else{	
	
if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{
	
$lxk = gethostbyname($domain); $look = doPWLookup($lxk); echo '<pre><b>Alan Adı:</b> '.$domain.'<br><br><b>IP Adresi:</b> '.$lxk.'<br><br><b>Lokasyon:</b> '.$look['region'].', '; if($look['country']=="Turkey"){ echo 'Türkiye'; }else{ echo $look['country']; } echo '</pre>';

echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } }

//Şifre Oluşturucu
if(isset($_POST['sifreolustur'])){ $sifre = intval($_POST['sifre']); 

if($sifre==""){ echo '<div class="alert alert-danger">Şifre oluşturabilmek için istediğiniz uzunluğu girmeniz gerekir.</div>'; }else{
	
echo '<pre><b>Uzunluk;</b> '.$sifre.' Karakter<br><br>';
echo sifreuret($sifre);
echo '</pre>'; echo '<script>document.getElementById("form").reset();</script>'; } } 

//MD5-SHA1 Şifreleme
if(isset($_POST['md5sha1sifrele'])){ $md5sha1 = $_POST['md5sha1'];

if($md5sha1==""){ echo '<div class="alert alert-danger">Şifreleme yapabilmek için alanı doldurmanız gerekir.</div>'; }else{

echo '<pre><b>Şifrelenen İçerik;</b><br><br>'.$md5sha1.'<br><br>';
echo '<b>MD5;</b><br><br>'.md5($md5sha1).'<br><br>';
echo '<b>SHA1;</b><br><br>'.sha1($md5sha1).'<br><br>';
echo '<b>MD5 & SHA1;</b><br><br>'.md5(sha1($md5sha1)).'<br><br>';
echo '<b>SHA1 & MD5;</b><br><br>'.sha1(md5($md5sha1));
echo '</pre>'; echo '<script>document.getElementById("form").reset();</script>'; } }		

//Site DNS Bilgileri
if(isset($_POST['dnsorgula'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain']))); 

if($domain==""){ echo '<div class="alert alert-danger">DNS bilgisi için alan adı girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz alan adı geçersizdir. Lütfen tekrar deneyin.</div>'; }else{	
	
if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{ $result = dns_get_record($domain,DNS_ALL); 

foreach($result as $ress){ echo '<table class="table table-bordered table-hover" style="margin-bottom: 30px;"><tbody>';
foreach($ress as $res=>$name){ echo '<tr><td style="width:200px;">'.ucfirst($res).'</td><td><strong>'; if($res=="entries"){ echo $name[0]; }else{ echo $name; } echo '</strong></td></tr>'; } echo '</tbody></table>'; } echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } }				

//Site HTTP Bilgisi
if(isset($_POST['httpsorgula'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain']))); 

if($domain==""){ echo '<div class="alert alert-danger">HTTP bilgisi için alan adı girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz alan adı geçersizdir. Lütfen tekrar deneyin.</div>'; }else{
	
if(!checkOnline($domain)){ echo '<div class="alert alert-warning">Sorguladığınız site kapalı yada DNS ayarları hatalı olduğundan dolayı HTTP bilgisi alınamıyor.</div>'; }else{
	
if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{ 
 
$resCurl = curl_init();
curl_setopt($resCurl, CURLOPT_URL, $domain);
curl_setopt($resCurl, CURLOPT_HEADER, true);
curl_setopt($resCurl, CURLOPT_NOBODY, true);
curl_setopt($resCurl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($resCurl, CURLOPT_FOLLOWLOCATION, true);
$strHeaders = curl_exec($resCurl);
curl_close($resCurl);
 
echo '<pre>Site; <b>'.$domain.'</b><br><br>'.$strHeaders.'</pre>'; echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } } } 

//Site Erişim Kontrolü
if(isset($_POST['siteupdown'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain']))); 

if($domain==""){ echo '<div class="alert alert-danger">Erişim kontrolü için alan adı girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz alan adı geçersizdir. Lütfen tekrar deneyin.</div>'; }else{	
	
if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{

if(checkOnline($domain)){ echo '<div class="alert alert-success">Site; <b>'.$domain.'</b>, aktif bir şekilde çalışmaktadır.</div>'; 
}else{ echo '<div class="alert alert-warning">Site; <b>'.$domain.'</b>, erişilemiyor, site kapalı veya DNS ayarları hatalı.</div>'; } echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } }

//Site Hız Testi
if(isset($_POST['speedtest'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain']))); 

if($domain==""){ echo '<div class="alert alert-danger">Hız testi için alan adı girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz alan adı geçersizdir. Lütfen tekrar deneyin.</div>'; }else{	
	
if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{ $times = k_http_sitespeed($domain);

echo '<pre><b>Site</b>; '.$domain.'<br><br><b>Sayfa Boyutu</b> : '.formatBytes($times['size']).'<br><br><b>Site Hızı</b> : '.$times['total'].' saniye</pre>'; echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } } 

//Kelime Hesaplayıcı
if(isset($_POST['hesapla'])){ $kelime = htmlclean($_POST['kelime']);

if($kelime==""){ echo '<div class="alert alert-danger">Kelime hesabı yapabilmek için alanı doldurmanız gerekir.</div>'; }else{

echo '<pre><b>Kelime Sayısı</b> : '.word_count($kelime).'<br>';
echo '<b>Karakter Sayısı(boşluklu)</b> : '.strlen($kelime).'<br>';
echo '<b>Karakter Sayısı(boşluksuz)</b> : '.strlen(str_replace(' ', '', $kelime)).'</pre>'; } }

//Whois
if(isset($_POST['sorgula'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain'])));
			
if($domain==""){ echo '<div class="alert alert-danger">Sorgulama yapabilmek için alan adı girmeniz gerekir.</div>'; }else{		

if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{

 echo '<pre>'.iconv('ISO-8859-9', 'UTF-8', whois_query($domain)).'</pre>'; echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } }

//Link Kısaltma
if(isset($_POST['linkisalt'])){ $domain = htmlclean(clean_url(cleanWWW($_POST['domain'])));

if($domain==""){ echo '<div class="alert alert-danger">Kısaltma yapabilmek için link girmeniz gerekir.</div>'; }else{
	
if(!filter_var_domain($domain)){ echo '<div class="alert alert-danger">Girdiğiniz link geçersizdir. Lütfen tekrar deneyin.</div>'; }else{	

if(isset($_POST['g-recaptcha-response'])){ $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\SocketPost()); $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if(!$resp->isSuccess()){ echo '<div class="alert alert-danger">Güvenlik kodu hatası! Lütfen tekrar deneyin.</div>'; }else{	

$icerik = curl("api adresi buraya gelecek&link=".$domain."&f=1"); $k = json_decode($icerik, true);

if(!isset($k[0]['link'])){ echo '<div class="alert alert-danger">'.$k[0]['error'].'</div>'; echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; }else{ 

echo '<div class="alert alert-success">Link kısaltma tamamlandı; <b>'.$k[0]['link'].'</b>'; echo '<script>grecaptcha.reset();</script>'; echo '<script>document.getElementById("form").reset();</script>'; } } } } } }

//Base64 Şifreleme
if(isset($_POST['sifrele'])){ $base64 = $_POST['base64']; 

if($base64==""){ echo '<div class="alert alert-danger">Şifreleme yapabilmek için alanı doldurmanız gerekir.</div>'; }else{

echo '<pre><b>İçerik;</b><br><br>'.$base64.'<br><br><b>Şifrelenen İçerik;</b><br><br>'.base64url_encode($base64).'</pre>'; echo '<script>document.getElementById("form").reset();</script>'; } }

if(isset($_POST['coz'])){ $base64 = $_POST['base64'];

if($base64==""){ echo '<div class="alert alert-danger">Şifre çözebilmek için alanı doldurmanız gerekir.</div>'; }else{
	
if (!is_base64($base64)){ echo '<div class="alert alert-danger">Sadece base64 şifrelemesi çözebilirsiniz. Lütfen kontrol ederek tekrar deneyin.</div>'; }else{

echo '<pre><b>İçerik;</b><br><br>'.$base64.'<br><br><b>Çözülen İçerik;</b><br><br>'.base64url_decode($base64).'</pre>'; echo '<script>document.getElementById("form1").reset();</script>'; } } }

//Mail Ayıklama
if(isset($_POST['mailayiklama'])){ $sourcecode = htmlclean($_POST['sourcecode']);

if($sourcecode==""){ echo '<div class="alert alert-danger">Mail ayıklayabilmek için alanı doldurmanız gerekir.</div>'; }else{
	
$pattern = '/(?<email>\w+@\w+(?:\.\w+)+)/i'; preg_match_all($pattern, $sourcecode, $results); 

$zxc = array_values(array_unique($results['email'])); $say = count($zxc);

if($say=="0"){ echo '<div class="alert alert-danger">Hatalı veya bilinmeyen bir kaynak kod ayıklamaya çalışıyorsunuz. Lütfen kontrol ederek tekrar deneyin.</div>'; }else{

echo '<pre><b>Ayıklanan Mail Sayısı</b> : '.$say.'<br><br>'; for($i=0;$i<$say;$i++){ echo $zxc[$i].'<br>'; } echo '</pre>'; echo '<script>document.getElementById("form").reset();</script>'; } } }

?>