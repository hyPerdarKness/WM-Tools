<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-unlock-alt fa-fw"></i> Şifre Oluşturucu</h1>
                    </div>
					
				<div class="col-lg-12">	
					<form id="form">
						<div class="form-group">
						  <input type="number" name="sifre" min="5" max="999" placeholder="Oluşturmak istediğiniz şifre uzunluğunu buraya yazın.. Örnek: 5" class="form-control">
						<input type="hidden" name="sifreolustur" value="<?php echo sha1(md5("sifreolustur564654654")); ?>">
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Oluştur</button></div>
					</form> 					
									
					<div id="output"></div>
                </div>
				</div>