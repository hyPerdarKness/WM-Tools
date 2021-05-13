<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } $ip = $_SERVER['REMOTE_ADDR']; $look = doPWLookup($ip); ?>
                <div class="row">
				<div class="col-lg-12 text-center" style="margin-top:30px;">
				<h3>IP Adresim</h3>
				<h1><?php echo $ip; ?></h1><hr>
					<div class="col-lg-6">
						<ul class="list-group">
						  <li class="list-group-item list-group-item-success"><b>ISP</b> (internet servis sağlayıcı)<br> <?php echo $look['asorgname'].'<br>'.$look['orgname']; ?></li>
						  <li class="list-group-item list-group-item-info"><b>Enlem</b> (kordinat)<br> <?php echo $look['latitude']; ?></li>
						  <li class="list-group-item"><?php echo $look['region']; ?></li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="list-group">
						  <a href="#" class="list-group-item list-group-item-success"><b>Tarayıcı</b> (internet sayfalarına erişim aracı)<br> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></a>
						  <li class="list-group-item list-group-item-info"><b>Boylam</b> (kordinat)<br> <?php echo $look['longitude']; ?></li>
						  <a href="#" class="list-group-item"><?php if($look['country']=="Turkey"){ echo 'Türkiye'; }else{ echo $look['country']; } ?></a>
						</ul>
					</div>
				<div class="col-lg-12 alert alert-warning"><i class="fas fa-exclamation-circle fa-3x" style="float:left; margin-right:10px;"></i> Bu sayfada yazılanlar, ip adresinize göre hizmet aldığınız firma tarafından uluslararası (tarayıcı hariç) olarak yayınlanan bilgilerdir. 
				Bu bilgiler sizin ev/iş adresi bilginizi içermez. İnternet'e erişmek için kullandığınız sunucunun bilgileridir. Bu bilgiler yüzde yüz(%100) doğru olmayabilir.</div>
				</div>
                </div>