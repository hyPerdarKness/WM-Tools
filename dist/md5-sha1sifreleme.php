<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-unlock-alt fa-fw"></i> MD5-SHA1 Şifreleme</h1>
                    </div>
					
				<div class="col-lg-12">	
					<form id="form">
						<div class="form-group">
						<input class="form-control" name="md5sha1" placeholder="Şifrelemek istediğiniz içeriği buraya yazın..">
						<input type="hidden" name="md5sha1sifrele" value="<?php echo sha1(md5("md5sha1sifrele564111224")); ?>">
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Şifrele</button></div>
					</form> 					
									
					<div id="output"></div>					
                </div>
				</div>