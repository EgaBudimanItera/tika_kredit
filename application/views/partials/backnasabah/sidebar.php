
    <!-- BEGIN CONTAINER -->
    <div id="container" class="row-fluid">
        <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <!-- <li><a class="" href="<?php echo base_url() ?>Adm_dash"><span class="icon-box"><i class="icon-dashboard"></i></span> Dashboard</a></li>    -->             
                <li class="has-sub <?php if($link=='calonnasabah' ||$link=="nasabah"){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> Master
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='nasabah'){echo'active';}?>"><a href="<?=base_url()?>nasabah_control/profilnasabah">Nasabah</a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($link=='pengajuan'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-cogs"></i></span> Transaksi
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li  class="<?php if($link=='pengajuan'){echo'active';}?>" ><a href="<?=base_url()?>pembiayaan_control/pengajuan">Pengajuan Pembiayaan</a></li>
                        
                    </ul>
                </li>
                <li class="has-sub <?php if($link=='diterima'||$link=='ditolak'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-tasks"></i></span> History Transaksi
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='diterima'){echo'active';}?>"><a href="<?=base_url()?>pembiayaan_control/listditerima">Pembiayaan Diterima</a></li>
                        <li class="<?php if($link=='ditolak'){echo'active';}?>"><a href="<?=base_url()?>pembiayaan_control/listditolak">Pembiayaan Ditolak</a></li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->