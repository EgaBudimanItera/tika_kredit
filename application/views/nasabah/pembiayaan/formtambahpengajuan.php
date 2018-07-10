
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
       <form role="form" method="post" action="<?=base_url()?>pembiayaan_control/tambahpengajuan" enctype="multipart/form-data"> 
        <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
        <div class="row-fluid">
          <div class="span12">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Rincian Pembiayaan Yang Diajukan</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Jenis Pembiayaan</label>
                  <div class="controls">
                     <select class="span6" name="jenis" id="jenis" required style="color:black">
                      <option value="">Pilih</option>
                      <option value="Umum">Umum</option>
                      <option value="Usaha">Usaha</option>
                     </select>
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Kegunaan</label>
                  <div class="controls">
                     <input type="text" class="span6" id="kegunaan" required name="kegunaan" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Besarnya Pembiayaan</label>
                  <div class="controls">
                     <input type="number" class="span6" id="jumlah" required name="jumlah" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Waktu Pelunasan</label>
                  <div class="controls">
                     <select class="span6" name="waktu" id="waktu" required style="color:black">
                      <option value="">Pilih</option>
                      <option value="12">12 Bulan</option>
                      <option value="18">18 Bulan</option>
                      <option value="24">24 Bulan</option>
                      <option value="30">30 Bulan</option>
                      <option value="36">36 Bulan</option>
                     </select>
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <input type="button" value="Hitung Angsuran" onClick="perkalian()" class="btn btn-primary">
                </div>

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Besarnya Angsuran</label>
                  <div class="controls">
                     <input type="number" class="span6" id="angsuran" readonly required name="angsuran" />
                     <span class="help-inline"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div>
        </div> 
       <!--  <div class="row-fluid">
          <div class="span12">
           
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Fasilitas Pembiayaan Kredit dari Lembaga Lain</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detailkreditlain">Tambahkan Kredit Lain</a>
                </div>
                
                <br>
                <div id="tampilkreditlain">

                </div>
              </div>
            </div>
            
          </div>
        </div>  -->
       <!--  <div class="row-fluid">
          <div class="span12">
           
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Jaminan Yang Akan Diserahkan</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div>
                   <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detailjaminan">Tambahkan Jaminan</a>
                </div>
               
                <br>
                <div id="tampiljaminan">

                </div>
              </div>
            </div>
            
          </div>
        </div>  -->
        <div class="row-fluid">
          <div class="span12">
            
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Persyaratan</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Upload File Persyaratan (Dalam ekstensi rar)</label>
                  <div class="controls">
                     <input type="file" class="span6" id="inputWarning" required name="gambar" />
                     <span class="help-inline"></span>
                  </div>
                </div>    
              </div>
            </div>
            
          </div>
        </div> 
        <!-- <div class="row-fluid">
          <div class="span12">
            
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Persyaratan</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detailpersyaratan">Tambahkan Persyaratan</a>
                </div>
                
                <br>
                <div id="tampilsyarat">

                </div>  

              </div>
            </div>
            
          </div>
        </div>  -->
        <div class="row-fluid">
          <div class="span12">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Aksi</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                
                  <button type="submit" class="btn btn-success">Ajukan Pembiayaan</button>
                
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

<!-- Modal kredit lain-->
<div class="modal fade" id="detailkreditlain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kredit Lain</h5>
        
      </div>
      <div class="modal-body">
        <form id="formkreditlain" role="form" method="post">
          <div class="container-fluid">
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Jenis Kredit</label>
                <div class="col-md-5">
                  <input name="jenis" id="jenis" type="text" class="form-control" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Sumber Kredit</label>
                <div class="col-md-5">
                  <input name="sumber" id="sumber" type="text" class="form-control" required="">
                </div>
              </div>  
            </div>
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Jaminan-->
<div class="modal fade" id="detailjaminan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Jaminan</h5>
        
      </div>
      <div class="modal-body">
        <form  id="formjaminan" role="form" method="post">
          
          <div class="container-fluid">
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Jenis Kredit</label>
                <div class="col-md-5">
                  <input name="jenis" id="jenis" type="text" class="form-control" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Taksiran Harga</label>
                <div class="col-md-5">
                  <input name="taksiran" id="taksiran" type="text" class="form-control" required="">
                </div>
              </div>  
            </div>
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Persyaratan-->
<div class="modal fade" id="detailpersyaratan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Persyaratan</h5>
        
      </div>
      <div class="modal-body">
        <form  id="formpersyaratan" role="form" method="post" enctype="multipart/form-data">
          <div class="container-fluid">
            <!-- <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Jenis Jaminan</label>
                <div class="col-md-9">
                  <select name="jenis" class="form-control span12" style="color:black">
                    <option value="">Pilih</option> 
                    <option value="KTP Pemohon">KTP Pemohon</option>
                    <option value="KTP Suami/Istri">KTP Suami/Istri</option>
                    <option value="Kartu Keluarga">Kartu Keluarga</option>
                    <option value="Surat Nikah">Surat Nikah</option>
                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                    <option value="Slip Gaji">Slip Gaji</option> 

                    <option value="SIUP">SIUP</option> 
                    <option value="SITU">SITU</option> 
                    <option value="TDP">TDP</option> 
                    <option value="NPWP">NPWP</option> 
                    <option value="IMB">IMB</option> 
                    <option value="SIUJK">SIUJK</option> 
                    <option value="Surat Keterangan Letak Usaha">Surat Keterangan Letak Usaha</option> 
                    <option value="Laporan Keuangan 2 Tahun Terakhir">Laporan Keuangan 2 Tahun Terakhir</option> 
                  </select>
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Dokumen</label>
                <div class="col-md-5">
                  <input name="file" id="file" type="file" class="form-control" required="">
                </div>
              </div>  
            </div>
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Dokumen</label>
                <div class="col-md-5">
                  <input name="file" id="file" type="file" class="form-control" required="">
                </div>
              </div>  
            </div>
            <div class="row">
              <div class="form-group">
                <label class="col-md-4 control-label">Dokumen</label>
                <div class="col-md-5">
                  <input name="file" id="file" type="file" class="form-control" required="">
                </div>
              </div>  
            </div>
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  


