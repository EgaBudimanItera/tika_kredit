
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Profil Nasabah
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li>
            <a href="#">Nasabah</a><span class="divider">&nbsp;</span>
          </li>
          <li>
            <a href="#">Profil Nasabah</a><span class="divider-last">&nbsp;</span>
          </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      <form role="form" method="post" action="#" >
      <div class="row-fluid">  
          <!-- identitas Nasabah -->
          <div class="span6">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Identitas Nasabah</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                A.Data Diri
                <table class="table table-striped table-bordered table-advance table-hover">
                  
                  <tr>
                    <td >Nama Nasabah</td>
                    <td><?=$isinasabah->nama?></td>
                  </tr>
                  <tr>
                    <td >NIK</td>
                    <td><?=$isinasabah->nik?></td>
                  </tr>
                  <tr>
                    <td >Tempat Lahir</td>
                    <td><?=$isinasabah->tmplahir?></td>
                  </tr>
                   <tr>
                    <td >Tanggal Lahir</td>
                    <td><?=$isinasabah->tgllahir?></td>
                  </tr>
                   <tr>
                    <td >Pekerjaan</td>
                    <td><?=$isinasabah->pekerjaan?></td>
                  </tr>
                   <tr>
                    <td >Alamat Rumah</td>
                    <td><?=$isinasabah->alamatrumah?></td>
                  </tr>
                   <tr>
                    <td >Alamat Kantor</td>
                    <td><?=$isinasabah->alamatkantor?></td>
                  </tr>
                   <tr>
                    <td >No Telp/HP</td>
                    <td><?=$isinasabah->telp?></td>
                  </tr>
                </table>
                <hr>
                B. Data Keluarga Lain
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td span3>Nama Suami/Istri/Orang Tua</td>
                    <td><?=$isinasabah->nama2?></td>
                  </tr>
                  <tr>
                    <td >Tempat Lahir</td>
                    <td><?=$isinasabah->tmplahir2?></td>
                  </tr>
                   <tr>
                    <td >Tanggal Lahir</td>
                    <td><?=$isinasabah->tgllahir2?></td>
                  </tr>
                   <tr>
                    <td >Pekerjaan</td>
                    <td><?=$isinasabah->pekerjaan2?></td>
                  </tr>
                   <tr>
                    <td >Alamat Rumah</td>
                    <td><?=$isinasabah->alamatrumah?></td>
                  </tr>
                   
                   <tr>
                    <td >No Telp/HP</td>
                    <td><?=$isinasabah->telp2?></td>
                  </tr>
                </table>
                <hr>
                C. Tanggungan
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td span3>Jumlah Tanggungan</td>
                    <td><?=$isinasabah->tanggungan?></td>
                  </tr>
                </table>
                <hr>
                D. Data Kepemilikan Rumah
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td span3>Hak Milik Rumah</td>
                    <td><?=$isinasabah->hakmilikrumah?></td>
                  </tr>
                </table>
                <hr>
                E. Keluarga Lain Yang Mudah Dihubungi
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td span3>Nama</td>
                    <td><?=$isinasabah->nama3?></td>
                  </tr>
                  <tr>
                    <td span3>Alamat</td>
                    <td><?=$isinasabah->alamat3?></td>
                  </tr>
                  <tr>
                    <td span3>No Telp</td>
                    <td><?=$isinasabah->telp3?></td>
                  </tr>
                  <tr>
                    <td span3>Hubungan</td>
                    <td><?=$isinasabah->hubungan13?></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div>
          <!-- jenis usaha -->
          <div class="span6">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Jenis Usaha</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                A. Wira Usaha
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td class="span3">Nama Perusahaan</td>
                    <td><?=$isinasabah->namausaha?></td>
                  </tr>
                  <tr>
                    <td >Bidang Usaha</td>
                    <td><?=$isinasabah->bidangusaha?></td>
                  </tr>
                  <tr>
                    <td >Berdiri Sejak</td>
                    <td><?=$isinasabah->berdiri?></td>
                  </tr>
                  <tr>
                    <td >Legalitas</td>
                    <td><?=$isinasabah->legalitas?></td>
                  </tr>
                  <tr>
                    <td >Izin yang Dimiliki</td>
                    <td><?=$isinasabah->izin?></td>
                  </tr>
                  <tr>
                    <td >Jumlah Tenaga Kerja</td>
                    <td><?=$isinasabah->jmlkaryawan?></td>
                  </tr>
                  <tr>
                    <td >Alamat Perusahaan</td>
                    <td><?=$isinasabah->alamatusaha?></td>
                  </tr>
                  <tr>
                    <td >No Telp Perusahaan</td>
                    <td><?=$isinasabah->telpusaha?></td>
                  </tr>
                  <tr>
                    <td >Tempat Usaha</td>
                    <td><?=$isinasabah->tempatusaha?></td>
                  </tr>
                </table>
                <hr>
                B. Karyawan
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td class="span3">Jenis Karyawan</td>
                    <td><?=$isinasabah->jeniskaryawan?></td>
                  </tr>
                  <tr>
                    <td >Nama Instansi</td>
                    <td><?=$isinasabah->namainstansi?></td>
                  </tr>
                  <tr>
                    <td >Telp Instansi</td>
                    <td><?=$isinasabah->telpinstansi?></td>
                  </tr>
                  <tr>
                    <td >Nama Pimpinan</td>
                    <td><?=$isinasabah->namapimpinan?></td>
                  </tr>
                  <tr>
                    <td >Jabatan</td>
                    <td><?=$isinasabah->jabatan?></td>
                  </tr>
                  <tr>
                    <td >Golongan</td>
                    <td><?=$isinasabah->golongan?></td>
                  </tr>
                  
                </table>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div> 
      </div>
      <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Foto Nasabah</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                
                <br>
                <table class="table table-striped table-bordered table-advance table-hover">
                  <tr>
                    <td class="span6">Foto 1(Nasabah)</td>
                    <td class="span6">Foto 2(Suami/Istri/Orang Tua)</td>
                  </tr>
                  <tr>
                    <td><img src="<?=base_url()?>assets/file_upload/<?=$isinasabah->foto1?>" width="100" height="200" alt="foto1"></td>
                    <td><img src="<?=base_url()?>assets/file_upload/<?=$isinasabah->foto2?>" width="100" height="200" alt="foto2"></td>
                  </tr>
                  
                </table>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Edit Profil</button>
                  
                </div>

              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div> 
      </div> 
      </form>                 
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


