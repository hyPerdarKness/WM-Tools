<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } include("autoload.php"); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-info-circle fa-fw"></i> Site HTTP Bilgisi</h1>
                    </div>
					
				<div class="col-lg-12">
					<form id="form">
						<div class="form-group">
						  <input name="domain" placeholder="HTTP bilgisini almak istediğiniz alan adını buraya yazın. Örnek: ipbul.net" class="form-control">
						  <input type="hidden" name="httpsorgula" value="<?php echo sha1(md5("httpsorgula26*56981224")); ?>">		  
					   </div>
					<div class="form-group"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div></div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Sorgula</button></div>
					</form> 					
									
					<div id="output"></div>
                </div>
				</div>