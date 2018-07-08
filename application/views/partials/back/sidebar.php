
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
            	<li><a class="" href="<?php echo base_url() ?>Adm_dash"><span class="icon-box"><i class="icon-dashboard"></i></span> Dashboard</a></li>                
                <li class="has-sub <?php if($link=='calonnasabah' ||$link=="nasabah"){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> Master
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='calonnasabah'){echo'active';}?>"><a href="<?=base_url()?>nasabah_control/listcalonnasabah">Calon Nasabah </a></li>
                        <li class="<?php if($link=='nasabah'){echo'active';}?>"><a href="<?=base_url()?>nasabah_control/listnasabah">Nasabah</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-cogs"></i></span> Transaksi
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Pengajuan Pembiayaan</a></li>
                        <li><a class="" href="#">Pembiayaan Diterima</a></li>
                        <li><a class="" href="#">Pembiayaan Ditolak</a></li>
                        <li><a class="" href="#">Pembayaran Angsuran</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-tasks"></i></span> Laporan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Laporan Pembiayaan Diterima</a></li>
                        <li><a class="" href="#">Laporan Pembiayaan Ditolak</a></li>
                    </ul>
                </li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->