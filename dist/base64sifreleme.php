<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-unlock-alt fa-fw"></i> Base64 Şifreleme</h1>
                    </div>
					
				<div class="col-lg-12">
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#sifrele">Şifrele</a></li>
				  <li><a data-toggle="tab" href="#coz">Çöz</a></li>
				</ul>

				<div class="tab-content">
				  <div id="sifrele" class="tab-pane fade in active"><br>
					<form id="form">
						<div class="form-group">
						<textarea class="form-control" name="base64" rows="10" placeholder="Şifrelemek istediğiniz içeriği buraya yazın.."></textarea>
						<input type="hidden" name="sifrele" value="<?php echo sha1(md5("sifrele-*/%>'şalsjdlaks")); ?>">		
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Şifrele</button></div>
					</form> 
					<div id="output"></div>
				  </div>
				  <div id="coz" class="tab-pane fade"><br>
					<form id="form1">
						<div class="form-group">
						<textarea class="form-control" name="base64" rows="10" placeholder="Şifresini çözmek istediğiniz içeriği buraya yazın.."></textarea>
						<input type="hidden" name="coz" value="<?php echo sha1(md5("coz-*5/%>'5123şalsjdlaks")); ?>">		
					   </div>
					<div class="form-group"><button type="submit" class="btn btn-success"><i class="fas fa-sync"></i> Çöz</button></div>
					</form> 
					<div id="output1"></div>
				  </div>
				</div>						
            </div>
			</div>