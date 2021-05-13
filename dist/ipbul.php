<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } include("autoload.php"); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fas fa-network-wired"></i> IP Bul</h1>
                    </div>
					
                <div class="col-lg-12">
					<form id="form">
						<div class="form-group">
						  <input name="domain" placeholder="IP adresini bulmak istediğiniz sitenin adresini yazın. Örnek: ipbul.net" class="form-control">
						  <input type="hidden" name="ipbul" value="<?php echo sha1(md5("ipbul*/-876312h")); ?>">		  
					   </div>
					<div class="form-group"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div></div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> IP Bul</button></div>
					</form> 
					
					<div id="output"></div>
				</div>
				</div>						