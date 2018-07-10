
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Ubah Password Nasabah
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Ubah Password Nasabah</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
       <form role="form" method="post" action="<?=base_url()?>secure/ubahpasswordnasabah" enctype="multipart/form-data"> 
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
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">ID Nasabah</label>
                  <div class="controls">
                     <input type="text" class="span6" id="kegunaan" readonly value="<?=$idnasabah?>" name="idnasabah" />
                     <span class="help-inline"></span>
                  </div>
                </div> 
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">NIK</label>
                  <div class="controls">
                     <input type="text" class="span6" name="namauser" readonly="" value="<?=$namauser?>" />
                     <span class="help-inline"></span>
                  </div>
                </div> 
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Password Baru</label>
                  <div class="controls">
                     <input type="password" class="span6" name="password" />
                     <span class="help-inline"></span>
                  </div>
                </div> 
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Ubah Password</button>
                  
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

