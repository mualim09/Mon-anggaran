<?php
if(($this->session->userdata('id'))==NULL){
	echo "<script>alert('Harap login terlebih dahulu')</script>";
	echo "<script>window.location='".base_url('Auth/logout')."'</script>";
}else{
	if($this->session->userdata('role_id')=='0' OR $this->session->userdata('role_id')=='1'){
		echo'';
	}else{
		echo "<script>alert('Harap login terlebih dahulu')</script>";
		echo "<script>window.location='".base_url('Auth/logout')."'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sistem Informasi</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="<?=base_url('assets/global/plugins/datatables/datatables.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/ladda/ladda-themeless.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/css/components-md.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
		<link href="<?=base_url('assets/global/css/plugins-md.min.css');?>" rel="stylesheet" type="text/css" />
		<!-- <link href="<?=base_url('assets/pages/css/blog.min.css');?>" rel="stylesheet" type="text/css" /> -->
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<link href="<?=base_url('assets/layouts/layout3/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/layouts/layout3/css/themes/default.min.css');?>" rel="stylesheet" type="text/css" id="style_color" />
		<link href="<?=base_url('assets/layouts/layout3/css/custom.min.css');?>" rel="stylesheet" type="text/css" />
		<!-- END THEME LAYOUT STYLES -->
		<link href="<?= site_url(); ?>assets/icon.png" rel="icon" type="image/x-icon">
	</head>

		<body class="page-container-bg-solid page-md">
		<div class="page-header">
			<div class="page-header-top">
				<div class="container">
					<div id="logo" class="pull-left">
						<h3>Sistem Informasi Evaluasi dan Monitoring Anggaran dan Kegiatan</h3>
						<!-- <h3><img src="<?= site_url(); ?>assets/pages/img/logo.png" width='10%'></h3> -->
					</div>
					<a href="javascript:;" class="menu-toggler"></a>
					<div class="top-menu">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
								<?php
									$data_notif = 0;
								?>
								<a href="#" class="dropdown-toggle" title="Notifikasi">
								</a>
							</li>
							<li class="dropdown dropdown-user dropdown-dark">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<img alt="" class="img-circle" src="https://i-love-png.com/images/profile_png_1113533.png">
									<span class="username username-hide-mobile">Administrator</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-default">
									<!-- <li>
										<a href="#!">
											<i class="icon-user"></i> Profil </a>
									</li> -->
									<li>
										<a href="<?php echo site_url('admin_side/bantuan'); ?>">
											<i class="icon-rocket"></i> Bantuan
											<!-- <span class="badge badge-success"> 7 </span> -->
										</a>
									</li>
									<li class="divider"> </li>
									<!-- <li>
										<a href="page_user_lock_1.html">
											<i class="icon-lock"></i> Lock Screen </a>
									</li> -->
									<li>
										<a href="<?php echo site_url('Auth/logout'); ?>">
											<i class="icon-key"></i> Keluar </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-header-menu">
				<div class="container">
					<div class="hor-menu  ">
						<ul class="nav navbar-nav">
							<li class="menu-dropdown classic-menu-dropdown <?php if($parent=='home'){echo 'active';}else{echo '';} ?>">
								<a href="<?php echo site_url('admin_side/beranda'); ?>"><i class="icon-home"></i> Beranda
								</a>
							</li>
							<li class="menu-dropdown classic-menu-dropdown <?php if($parent=='master'){echo 'active';}else{echo '';} ?>">
								<a href="javascript:;"><i class="icon-drawer"></i> Master
									<span class="arrow <?php if($parent=='master'){echo 'open';}else{echo '';} ?>"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									<li class=" <?php if($child=='master_admin'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/admin'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Administrator
										</a>
									</li>
									<li class=" <?php if($child=='master_departemen'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/departemen'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Departemen
										</a>
									</li>
									<!-- <li class=" <?php if($child=='master_anggaran'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/anggaran'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Anggaran
										</a>
									</li> -->
									<li class=" <?php if($child=='master_kegiatan'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/kegiatan'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Kegiatan
										</a>
									</li>
									<li class=" <?php if($child=='master_output'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/output'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Output
										</a>
									</li>
									<li class=" <?php if($child=='master_sub_output'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/sub_output'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Sub Output
										</a>
									</li>
									<li class=" <?php if($child=='master_komponen'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/komponen'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Komponen
										</a>
									</li>
									<li class=" <?php if($child=='master_sub_komponen'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/sub_komponen'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Sub Komponen
										</a>
									</li>
									<li class=" <?php if($child=='master_rkakl'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/rkakl'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> RKAKL
										</a>
									</li>
									<!-- <li class="dropdown-submenu <?php if($child=='antrean'){echo 'active';}else{echo '';} ?>">
										<a href="javascript:;" class="nav-link nav-toggle  <?php if($child=='antrean'){echo 'active';}else{echo '';} ?>">
											<i class="icon-layers"></i> Data Antrean
											<span class="arrow  <?php if($child=='antrean'){echo 'open';}else{echo '';} ?>"></span>
										</a>
										<ul class="dropdown-menu">
											<li class=" <?php if($grand_child=='antrean_kk'){echo 'active';}else{echo '';} ?>">
												<a href="<?php echo site_url('admin_side/antrean_kk'); ?>" class="nav-link "> Data KK </a>
											</li>
											<li class=" <?php if($grand_child=='antrean_ktp'){echo 'active';}else{echo '';} ?>">
												<a href="<?php echo site_url('admin_side/antrean_ktp'); ?>" class="nav-link "> Data KTP</a>
											</li>
										</ul>
									</li> -->
								</ul>
							</li>
							<li class="menu-dropdown classic-menu-dropdown <?php if($parent=='laporan'){echo 'active';}else{echo '';} ?>">
								<a href="javascript:;"><i class="icon-layers"></i> Laporan
									<span class="arrow <?php if($parent=='laporan'){echo 'open';}else{echo '';} ?>"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									<li class=" <?php if($child=='penggunaan_anggaran'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/penggunaan_anggaran'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Penggunaan Anggaran
										</a>
									</li>
									<li class=" <?php if($child=='pendapatan'){echo 'active';}else{echo '';} ?>">
										<a href="<?php echo site_url('admin_side/pendapatan'); ?>" class="nav-link nav-toggle ">
											<i class="icon-pin"></i> Pendapatan Negara Bukan Pajak
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-dropdown classic-menu-dropdown <?php if($parent=='log_activity'){echo 'active';}else{echo '';} ?>">
								<a href="<?php echo site_url('admin_side/log_activity'); ?>"><i class="fa fa-rss"></i> Log Aktifitas
								</a>
							</li>
							<li class="menu-dropdown classic-menu-dropdown <?php if($parent=='about'){echo 'active';}else{echo '';} ?>">
								<a href="<?php echo site_url('admin_side/tentang_aplikasi'); ?>"><i class="icon-bulb"></i> Tentang Aplikasi
								</a>
							</li>
						</ul>
					</div>
					<!-- END MEGA MENU -->
				</div>
			</div>
			<!-- END HEADER MENU -->
		</div>
		<!-- END HEADER -->
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<!-- BEGIN CONTENT BODY -->
				<!-- BEGIN PAGE HEAD-->
				<div class="page-head">
					<div class="container">
						<!-- BEGIN PAGE TITLE -->
						<div class="page-title">
							<h1>Dashboard
								<small>Sistem Informasi</small>
							</h1>
						</div>
						<!-- END PAGE TITLE -->
						<!-- BEGIN PAGE TOOLBAR -->
						<div class="page-toolbar">
							<!-- BEGIN THEME PANEL -->
							<div class="btn-group btn-theme-panel">
								<!-- <a href="#" title="Setting Informasi Aplikasi" class="btn dropdown-toggle" >
									<i class="icon-settings"></i>
								</a> -->
								<script type="text/javascript">function startTime(){var today=new Date(),curr_hour=today.getHours(),curr_min=today.getMinutes(),curr_sec=today.getSeconds();curr_hour=checkTime(curr_hour);curr_min=checkTime(curr_min);curr_sec=checkTime(curr_sec);document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;}function checkTime(i){if(i<10){i="0"+i;}return i;}setInterval(startTime,500);</script>
								<span class="tanggalwaktu">
								<?= $this->Main_model->convert_hari(date('Y-m-d')).', '.$this->Main_model->convert_tanggal(date('Y-m-d')) ?>  -  Pukul  <span id="clock">13:53:45</span>
								</span>
							</div>
						</div>
						<!-- END PAGE TOOLBAR -->
					</div>
				</div>
				<!-- END PAGE HEAD-->
				<!-- BEGIN PAGE CONTENT BODY -->
				<div class="page-content">
					<div class="container">
						<!-- BEGIN PAGE BREADCRUMBS -->
<?php // }} ?>