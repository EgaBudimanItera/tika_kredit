
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
           
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Laporan Pengajuan Ditolak
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li>
            <a href="#">Laporan</a><span class="divider">&nbsp;</span>
          </li>
          <li>
            <a href="#">Pengajuan Ditolak</a><span class="divider-last">&nbsp;</span>
          </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      <form  role="form" method="post" action="<?=base_url()?>laporan_control/cetakditolak" target="_blank">
        <div class="row-fluid">  
          <!-- identitas Nasabah -->
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
               <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Dari Tanggal</label>
                  <div class="controls">
                    <div class="input-append" id="ui_date_picker_trigger">
                      <input name="daritanggal" type="text"  class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                  </div>
                </div> 
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Hingga Tanggal</label>
                  <div class="controls">
                     <div class="input-append" id="ui_date_picker_trigger">
                      <input name="hinggatanggal" type="text"  class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                   <button type="submit" class="btn btn-success">Cetak</button>
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
  


