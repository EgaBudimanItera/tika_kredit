
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
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> Master
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url() ?>Adm_spare">Sparepart</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_pel">Pelanggan</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_tek">Teknisi</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_usr">Pengguna</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-cogs"></i></span> Transaksi
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="Adm_ord">Order</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_ser">Service</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_pjl">Penjualan</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-tasks"></i></span> Laporan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url() ?>Adm_graf">Grafik</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_rord">Order</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_rser">Service</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_rpjl">Penjualan</a></li>
                        <li><a class="" href="<?php echo base_url() ?>Adm_pdtk">Pendapatan Teknisi</a></li>
                    </ul>
                </li>
                <li><a class="" href="<?php echo base_url() ?>Welcome/Logout"><span class="icon-box"><i class="icon-lock"></i></span> Logout</a></li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->