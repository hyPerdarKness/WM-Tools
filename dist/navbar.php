<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } ?>
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"><i class="fas fa-network-wired"></i> <?php echo $print['siteadi']; ?></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
				<li><a href="#" target="_blank"><i class="fas fa-link"></i> Link 1</a></li>	
				<li><a href="#" target="_blank"><i class="fas fa-globe-europe"></i> Link 2</a></li>	
				<li><a href="#" target="_blank"><i class="fas fa-globe-europe"></i> Link 3</a></li>	
				<li><a href="#" target="_blank"><i class="fas fa-globe-europe"></i> Link 4</a></li>	
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
						<?php fuctarih(); ?>
                        </li>
                        <li>
                            <a href="ipbul"><i class="fas fa-network-wired"></i> IP Bul</a>
                        </li>						
                        <li>
                            <a href="linkisalt"><i class="fas fa-link"></i> Link Kısaltma</a>
                        </li>						
                        <li>
                            <a href="whois"><i class="fas fa-user-secret"></i> Whois</a>
                        </li>
                        <li>
                            <a href="mailayiklama"><i class="fas fa-code"></i> Mail Ayıklama</a>
                        </li>						
                        <li>
                            <a href="kelimehesaplayici"><i class="fab fa-acquisitions-incorporated"></i> Kelime Hesaplayıcı</a>
                        </li>						
                        <li>
                            <a href="#"><i class="fas fa-info-circle"></i> Site Araçları</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="hiztesti">Site Hız Testi</a>
                                </li>
                                <li>
                                    <a href="siteupdown">Site Erişim Kontrolü</a>
                                </li>
                                <li>
                                    <a href="sitehttp">Site HTTP Bilgisi</a>
                                </li>
                                <li>
                                    <a href="sitedns">Site DNS Bilgileri</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Şifreleme Araçları</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="htmlsifreleme">HTML Şifreleme</a>
                                </li>
                                <li>
                                    <a href="base64sifreleme">Base64 Şifreleme</a>
                                </li>
                                <li>
                                    <a href="md5-sha1sifreleme">MD5-SHA1 Şifreleme</a>
                                </li>
                                <li>
                                    <a href="sifreolusturucu">Şifre Oluşturucu</a>
                                </li>								
                            </ul>
                        </li>						
                    </ul>
                </div>
            </div>
        </nav>