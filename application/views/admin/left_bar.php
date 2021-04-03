<?php $cont=$this->uri->segment(2, 0); ?>
<?php $url1=$this->uri->segment(1, 0); ?>
<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li <?php if (isset($cont) AND trim($cont)!="" AND $cont=="dashboard"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('admin/dashboard'); ?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<!-- user menu -->
									<li class="nav-parent <?php if (!empty($url1) AND $url1 == 'user'): ?>nav-expanded nav-active<?php endif ?>">
										<a>
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>User</span>
										</a>
										<ul class="nav nav-children">
											
											<li <?php if (isset($cont) AND trim($cont)!="" AND $cont=="owner"): ?>
												 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('user/owner'); ?>">
													<i class="fa fa-user" aria-hidden="true"></i>
													<span>Owner</span>
												</a>
											</li>
											<li <?php if (isset($cont) AND trim($cont)!="" AND $cont=="kasir"): ?>
												 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('user/kasir'); ?>">
													<i class="fa fa-user" aria-hidden="true"></i>
													<span>Kasir</span>
												</a>
											</li>
											<li <?php if (isset($cont) AND trim($cont)!="" AND $cont=="kolektor"): ?>
												 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('user/kolektor'); ?>">
													<i class="fa fa-user" aria-hidden="true"></i>
													<span>Kolektor</span>
												</a>
											</li>
											<li <?php if (isset($cont) AND trim($cont)!="" AND $cont=="nasabah"): ?>
												 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('user/nasabah'); ?>">
													<i class="fa fa-user" aria-hidden="true"></i>
													<span>Nasabah</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent <?php if (!empty($url1) AND ($url1 == 'pinjaman' OR $url1 == 'riwayat_pinjaman')): ?>nav-expanded nav-active<?php endif ?>">
										<a>
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>Pinjaman</span>
										</a>
										<ul class="nav nav-children">
											<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="pinjaman"): ?>
										 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('pinjaman/index'); ?>">
													<i class="fa fa-money" aria-hidden="true"></i>
													<span>Pinjaman</span>
												</a>
											</li>
											<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="riwayat_pinjaman"): ?>
										 	class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('riwayat_pinjaman/index'); ?>">
													<i class="fa fa-history" aria-hidden="true"></i>
													<span>Riwayat Angsuran</span>
												</a>
											</li>
										</ul>
									</li>											
									<li class="nav-parent <?php if (!empty($url1) AND ($url1 == 'simpanan' OR $url1 == 'riwayat_simpanan')): ?>nav-expanded nav-active<?php endif ?>">
										<a>
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>Simpanan</span>
										</a>
										<ul class="nav nav-children">
											<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="simpanan" AND $cont != "non_aktif"): ?>
										 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('simpanan/index'); ?>">
													<i class="fa fa-bank" aria-hidden="true"></i>
													<span>Simpanan</span>
												</a>
											</li>
											<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="simpanan" AND $cont == "non_aktif"): ?>
										 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('simpanan/non_aktif'); ?>">
													<i class="fa fa-ban" aria-hidden="true"></i>
													<span>Simpanan Non Aktif</span>
												</a>
											</li>
											<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="riwayat_simpanan"): ?>
												 class="nav-active"
											<?php endif ?>>
												<a href="<?php echo base_url('riwayat_simpanan/index'); ?>">
													<i class="fa fa-history" aria-hidden="true"></i>
													<span>Riwayat Simpanan</span>
										</a>
									</li>
										</ul>
									</li>	
									<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="hari_libur"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('hari_libur/index'); ?>">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>Hari Libur</span>
										</a>
									</li>	
									<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="paket"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('paket/index'); ?>">
											<i class="fa fa-file" aria-hidden="true"></i>
											<span>Paket</span>
										</a>
									</li>		
									<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="slider"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('slider/index'); ?>">
											<i class="fa fa-image" aria-hidden="true"></i>
											<span>Slider</span>
										</a>
									</li>	
									<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="pengaduan"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('pengaduan/index'); ?>">
											<i class="fa fa-comments-o" aria-hidden="true"></i>
											<span>Pengaduan</span>
										</a>
									</li>								
									<li <?php if (isset($url1) AND trim($url1)!="" AND $url1=="pengaturan"): ?>
										 class="nav-active"
									<?php endif ?>>
										<a href="<?php echo base_url('pengaturan/edit'); ?>">
											<i class="fa fa-cog" aria-hidden="true"></i>
											<span>Pengaturan</span>
										</a>
									</li>
									
									
								

								</ul>
							</nav>				
							
						</div>
				
					</div>
				
				</aside>