
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Tambah User Login
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li>
              <a href="#">List User</a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Tambah User Login</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
       <form role="form" method="post" action="<?=base_url()?>userlogin_control/tambahuser" enctype="multipart/form-data"> 
        <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
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
                  <label class="control-label" for="inputWarning">Nama User</label>
                  <div class="controls">
                     <input type="text" class="span6" required name="userName" />
                     <span class="help-inline"></span>
                  </div>
                </div> 
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Hak Akses</label>
                  <div class="controls">
                     <select class="span6" name="userHakakses"  required style="color:black">
                      <option value="">Pilih</option>
                      <option value="Admin">Admin</option>
                      <option value="Teller">Teller</option>
                      <option value="Pimpinan">Pimpinan</option>
                     </select>
                     <span class="help-inline"></span>
                  </div>
                </div> 
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Password Default adalah 123456</label>
                  
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
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

