<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fab fa-acquisitions-incorporated"></i> Kelime Hesaplayıcı</h1>
                    </div>
					
				<div class="col-lg-12">	
					<form id="form">
						<div class="form-group">
						<textarea class="form-control" name="kelime" rows="10"><?php echo @$_POST['kelime']; ?></textarea>
						  <input type="hidden" name="hesapla" value="<?php echo sha1(md5("hesapla123asd564894/-*")); ?>">		
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Hesapla</button></div>
					</form>  					
									
					<div id="output"></div>								
                </div>	
				</div>