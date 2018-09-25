
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Dashboard
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                    
                                   
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN SITE VISITS PORTLET-->
          <div class="widget">
            <div class="widget-title">
              <h4><i class="icon-folder-close"></i> Data</h4>
              <span class="tools">
              <a href="javascript:;" class="icon-chevron-down"></a>
              <a href="javascript:;" class="icon-remove"></a>
              </span>
            </div>
            <div class="widget-body">
              <div class="row-fluid metro-overview-cont">
                <div data-desktop="span3" data-tablet="span3" class="responsive span3">
                  <div class="metro-overview turquoise-color clearfix">
                    <div class="display">
                      <i class="icon-group"></i>
                      <div class="percent"></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$jumlahnasabah?></div>
                      <div class="title">Jumlah Nasabah</div>
                    </div>
                  </div>   
                </div>  
                <div data-desktop="span3" data-tablet="span3" class="responsive span3">
                  <div class="metro-overview red-color clearfix">
                    <div class="display">
                      <i class="icon-briefcase"></i>
                      <div class="percent"></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$jumlahcalonnasabah?></div>
                      <div class="title">Jumlah Calon Nasabah</div>
                    </div>
                  </div>   
                </div> 
                <div data-desktop="span3" data-tablet="span3" class="responsive span3">
                  <div class="metro-overview green-color clearfix">
                    <div class="display">
                      <i class="icon-leaf"></i>
                      <div class="percent"><?php echo number_format($jumlpembiayaanditerima/$jumlahpembiayaan*100,2,',','').'%'?></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$jumlpembiayaanditerima?></div>
                      <div class="title">Jumlah Pembiayaan Diterima</div>
                    </div>
                  </div>   
                </div> 
                <div data-desktop="span3" data-tablet="span3" class="responsive span3">
                  <div class="metro-overview purple-color clearfix">
                    <div class="display">
                      <i class="icon-heart"></i>
                      <div class="percent"><?php echo number_format($jumlpembiayaanditolak/$jumlahpembiayaan*100,2,',','').'%'?></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$jumlpembiayaanditolak?></div>
                      <div class="title">Jumlah Pembiayaan Ditolak</div>
                    </div>
                  </div>   
                </div> 
              </div>

              <p>
                Alur Permohonan Kredit PT Bank Pembiayaan Rakyat Syariah Metro Madani
              </p>
              <br>
              <center><img src="<?=base_url()?>assets/botak.jpeg" width="50%" height="20%"></center>
            </div>
          </div>
          <!-- END SITE VISITS PORTLET-->
        </div>
      </div>                    
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


