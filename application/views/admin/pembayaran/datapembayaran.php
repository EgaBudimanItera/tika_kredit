
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Pembayaran Angsuran
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li>
              <a href="#">Pembiayaan Diterima</i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Pembayaran Angsuran</a><span class="divider-last">&nbsp;</span></li>
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
             <?php
              
              $hakakses=$this->session->userdata('userHakakses');

              if($sisapembayaran->statuslunas=='Belum Lunas' && $hakakses=='Teller'){
                
            ?>
            <div><a href="<?=base_url()?>pembayaran_control/formtambahpembayaran/<?=$sisapembayaran->idpembiayaan?>" class="btn btn-primary">Tambah Pembayaran</a></div>
             <br>
            <?php
              }
             ?>
             
              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">ID Pembayaran</th>
                    <th class="hidden-phone">Tanggal Pembayaran</th>
                    <th class="hidden-phone">Jumlah Pembayaran</th>
                    <!-- <th class="hidden-phone">Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    $totalbayar=0;
                    foreach ($isipembayaran as $isi ) {
                  ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$isi->idbayar?></td>
                    <td><?=$isi->tglbayar?></td>
                    <td><?php echo number_format($isi->angsuran)?></td>
                    <!-- <td>
                      <a class="btn btn-primary" href="<?=base_url()?>pembiayaan_control/detailpengajuanadmin/<?=$isi->idpembiayaan?>" title="Detail"><i class="icon-eye-open"></i></a>
                      <a class="btn btn-warning" href="<?=base_url()?>pembiayaan_control/download/<?=$isi->file?>" title="Download File Persyaratan"><i class="icon-download"></i></a>
                      <a class="btn btn-success" href="<?=base_url()?>pembiayaan_control/formsurvey/<?=$isi->idpembiayaan?>" title="Atur Jadwal Survey"><i class="icon-user" ></i></a>
                    </td> -->
                  </tr>
                  <?php
                    $totalbayar=$totalbayar+ $isi->angsuran;  
                    }
                  ?>
                </tbody>
              </table>
              <hr>
              Total Piutang = Rp. <?php echo number_format($sisapembayaran->totalpembayaran)?>
              <br>
              <br>
              Total Bayar   = Rp. <?php echo number_format($totalbayar)?>
              <br>
              <br>
              Sisa Bayar    = Rp. <?php echo number_format($sisapembayaran->sisapembayaran)?>
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
  


