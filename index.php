<?php define("include",true); include("dist/sysconf.php"); include("dist/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php echo $print['keywords']; ?>" />
	<meta name="description" content="<?php echo $print['description']; ?>" />	

    <title><?php if(isset($_GET['link'])){ $link = htmlentities(htmlclean($_GET['link'])); foreach($db->query("select * from ".$dbek."title where url='".$link."'") as $aaa){ echo $aaa['baslik'].' | '.$print['siteadi']; } }else{ echo $print['siteadi'].' | Webmaster Araçları'; } ?></title>
	
	<link rel="shortcut icon" href="dist/favicon.png">
    <link href="bower_components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="bower_components/fontawesome/all.min.css" rel="stylesheet">	
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="dist/css/sticky-footer.css" rel="stylesheet">
<?php echo $print['analytics']; ?>	
</head>
<body>

    <div id="wrapper">
<?php include("dist/navbar.php"); ?>

        <div id="page-wrapper">
<?php if(isset($_GET['link'])){ $link = htmlentities(htmlclean($_GET['link']));

switch($link){ 
case 'ipbul': $file = "dist/ipbul.php"; break;
case 'linkisalt': $file = "dist/linkisalt.php"; break;
case 'whois': $file = "dist/whois.php"; break;
case 'hiztesti': $file = "dist/hiztesti.php"; break;
case 'siteupdown': $file = "dist/siteupdown.php"; break;
case 'sitehttp': $file = "dist/sitehttp.php"; break;
case 'sitedns': $file = "dist/sitedns.php"; break;
case 'kelimehesaplayici': $file = "dist/kelimehesaplayici.php"; break;
case 'htmlsifreleme': $file = "dist/htmlsifreleme.php"; break;
case 'base64sifreleme': $file = "dist/base64sifreleme.php"; break;
case 'md5-sha1sifreleme': $file = "dist/md5-sha1sifreleme.php"; break;
case 'sifreolusturucu': $file = "dist/sifreolusturucu.php"; break;
case 'mailayiklama': $file = "dist/mailayiklama.php"; break;
default: echo '<meta http-equiv="refresh" content="0;URL=index">'; exit; break;
}

include_once("".$file."");

}else{ include("dist/home.php"); } ?>
		</div>
	</div>

    <footer class="footer text-center col-lg-12">
      <div class="container">
        <p class="text-muted">&copy; <?php echo date('Y'); ?>, <?php echo $print['siteadi']; ?>. Tüm hakları saklıdır.</p>
		<p class="text-muted" style="font-size:10pt;">Sitemizde yer alan tüm işlemler ücretsizdir. Ziyaretçilerin kullandığı işlemler için herhangi bir kayıt/veritabanı/log tutulmamaktadır. Tüm bilgiler farklı kaynaklardan alınmaktadır. Bu bilgiler teyit edilemez ve doğrulanamaz.</p>
      </div>
    </footer>

    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/metisMenu.min.js"></script>
    <script src="bower_components/fontawesome/all.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
	<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>"></script>

</body>
</html>