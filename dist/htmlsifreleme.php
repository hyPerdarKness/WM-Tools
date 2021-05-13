<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-unlock-alt fa-fw"></i> HTML Şifreleme</h1>
                    </div>
					
				<div class="col-lg-12">	
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
					<td width="100%">
					<form method="post" name="pad" align="center">
					<textarea rows="11" class="form-control" name="text" cols="58" placeholder="Şifrelemek istediğiniz içeriği buraya yazın.."></textarea><br>
					<button type="button" id="sifrele" name="compileIt" onClick="generate()" onMouseOver="LightOn(this)" onMouseOut="LightOut(this)" class="btn btn-danger"><i class="fas fa-lock"></i> Şifrele</button>
					<button type="button" name="select" onClick="selectCode()" onMouseOver="LightOn(this)" onMouseOut="LightOut(this)" class="btn btn-warning"><i class="fas fa-mouse-pointer"></i> Seç</button>
					<button type="button" name="view" onClick="preview()" onMouseOver="LightOn(this)" onMouseOut="LightOut(this)" class="btn btn-info"><i class="fas fa-info-circle"></i> Önizleme</button>
					<button type="button" name="retur" onClick="uncompile()" onMouseOver="LightOn(this)" onMouseOut="LightOut(this)" class="btn btn-success"><i class="fas fa-check-circle"></i> Çöz</button>
					<button type="reset" name="clear" onMouseOver="LightOn(this)" onMouseOut="LightOut(this)" class="btn"><i class="fas fa-eraser"></i> Temizle</button>
					</form>
					</td>
					</tr>
					</table>					
                </div>
				</div>
				
<script type="text/javascript" src="dist/js/htmlsifreleme.js"></script>