
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Pembiayaan Diterima
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Pembiayaan Diterima</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
             
             
             <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>

              <table class="table table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">ID Pembiayaan</th>
                    <th class="hidden-phone">Tanggal Pengajuan</th>
                    <th class="hidden-phone">Tanggal Persetujuan</th>
                    <th class="hidden-phone">Jumlah Diajukan (Rp)</th>
                    <th class="hidden-phone">Waktu (Bulan)</th>
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    $a=date('Y-m-d');
                    $skr=new DateTime($a);
                    foreach ($isipembiayaan as $isi ) {
                      $tempo=new DateTime($isi->bayarnext);
                      $beda  = $tempo->diff($skr)->format('%a');
                      if($a>$isi->bayarnext){
                        $beda=$beda;
                      }
                      else{
                        $beda=$beda*-1;
                      }
                      if($beda>7){
                        $warna='warning';
                      }else if($beda>=0 && $beda<=7){
                         $warna='success';
                      }else{
                         $warna='';
                      }
                  ?>
                  
                  <tr class="<?=$warna?>">
                    <td><?=$no++;?></td>
                    <td><?=$isi->idpembiayaan?></td>
                    <td><?=$isi->tglpengajuan?></td>
                    <td><?=$isi->tglreaksi?></td>
                    <td><?php echo number_format($isi->jumlah)?></td>
                    <td><?=$isi->waktu?></td>
                    <td>
                      <!-- <a class="btn btn-primary" href="<?=base_url()?>pembiayaan_control/detailditerima/<?=$isi->idpembiayaan?>">Detail Pembiayaan</a> -->
                      <a href="<?=base_url()?>pembayaran_control/listpembayaranadmin/<?=$isi->idpembiayaan?>" class="btn btn-warning">Detail Pembayaran</a>
                    </td>
                  </tr>
                  <?php    
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>                  
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


