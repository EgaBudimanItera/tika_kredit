
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Pengajuan Pembiayaan
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Pengajuan Pembiayaan</a><span class="divider-last">&nbsp;</span></li>
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

              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">ID Pembiayaan</th>
                    <th class="hidden-phone">Tanggal Pengajuan</th>
                    <th class="hidden-phone">ID Nasabah</th>
                    <th class="hidden-phone">Nama Nasabah</th>
                    
                    <th class="hidden-phone">Jumlah Diajukan (Rp)</th>
                    <th class="hidden-phone">Waktu (Bulan)</th>
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    foreach ($isipembiayaan as $isi ) {
                  ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$isi->idpembiayaan?></td>
                    <td><?=$isi->tglpengajuan?></td>
                    <td><?=$isi->idnasabah?></td>
                    <td><?=$isi->nama?></td>
                    <td><?php echo number_format($isi->jumlah)?></td>
                    <td><?=$isi->waktu?></td>
                    <td>
                      <a class="btn btn-primary" href="<?=base_url()?>pembiayaan_control/detailpengajuanadmin/<?=$isi->idpembiayaan?>" title="Detail"><i class="icon-eye-open"></i></a>
                      <a class="btn btn-warning" href="<?=base_url()?>pembiayaan_control/download/<?=$isi->file?>" title="Download File Persyaratan"><i class="icon-download"></i></a>
                      <a class="btn btn-success" href="<?=base_url()?>pembiayaan_control/formsurvey/<?=$isi->idpembiayaan?>" title="Atur Jadwal Survey"><i class="icon-user" ></i></a>
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
  


