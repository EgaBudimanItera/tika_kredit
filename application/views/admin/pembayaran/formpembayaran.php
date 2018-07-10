
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
          <li><a href="#">Pembayaran Angsuran</a><span class="divider">&nbsp;</span></li>
          <li><a href="#">Form Pembayaran Angsuran</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
       <form role="form" method="post" action="<?=base_url()?>pembayaran_control/addpembayaran" enctype="multipart/form-data"> 
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
                  <label class="control-label" for="inputWarning">ID Pembiayaan</label>
                  <div class="controls">
                     <input type="text" class="span6"  readonly="" name="idpembiayaan" value="<?=$isipembiayaan->idpembiayaan?>" />
                     <span class="help-inline"></span>
                     <input type="hidden" class="span6"  readonly="" name="waktu" value="<?=$isipembiayaan->waktu?>" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Besarnya Angsuran (Rp)</label>
                  <div class="controls">
                     <input type="text" class="span6" readonly value="<?php echo number_format($isipembiayaan->angsuran)?>"  />
                     <input type="hidden" class="span6" id="angsuran" readonly value="<?=$isipembiayaan->angsuran?>" name="angsuran" />
                     <span class="help-inline"></span>
                  </div>
                </div>

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Pembayaran Ke</label>
                  <div class="controls">
                     <input type="text" class="span6"  readonly value="<?=$bayarke?>" name="bayarke" />
                     <span class="help-inline"></span>
                  </div>
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
