<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-code fa-fw"></i> Mail Ayıklama</h1>
                    </div>
					
				<div class="col-lg-12">	
					<form id="form">
						<div class="form-group">
						<textarea rows="10" class="form-control" name="sourcecode" placeholder="Ayıklamak istediğiniz maillerin html kaynak kodunu buraya yazın.."></textarea>
						<input type="hidden" name="mailayiklama" value="<?php echo sha1(md5("mailayiklama12039*/224")); ?>">
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Ayıklamayı Başlat</button></div>
					</form> 					
									
					<div id="output"></div>					
                </div>
				</div>