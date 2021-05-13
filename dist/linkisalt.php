<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } include("autoload.php"); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-link fa-fw"></i> Link Kısaltma</h1>
                    </div>
					
                <div class="col-lg-12">					
				<div class="alert alert-info">İşlem için <a style="color:black;" href="https://kisaurl.net" target="_blank">Link Kısaltma Servisi</a> API sistemi kullanılmaktadır.</div>
					<form id="form">
						<div class="form-group">
						  <input name="domain" placeholder="Kısaltmak istediğiniz linki buraya yazın. Örnek: ipbul.net" class="form-control">
						  <input type="hidden" name="linkisalt" value="<?php echo sha1(md5("linkisalt&%65456312h")); ?>">		  
					   </div>
					<div class="form-group"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div></div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Kısalt</button></div>
					</form> 
					
					<div id="output"></div>
				</div>
				</div>						