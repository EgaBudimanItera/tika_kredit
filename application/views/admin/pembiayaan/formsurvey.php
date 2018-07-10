
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Jadwal Survey
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Jadwal Survey</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
       <form role="form" method="post" action="<?=base_url()?>pembiayaan_control/editsurvey" enctype="multipart/form-data"> 
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
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Jenis Pembiayaan</label>
                  <div class="controls">
                     <input type="text" class="form-control span6" value="<?=$isipembiayaan->jenis?>" name="jenis" readonly />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Kegunaan</label>
                  <div class="controls">
                     <input type="text" class="span6" id="kegunaan" readonly name="kegunaan" value="<?=$isipembiayaan->kegunaan?>" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Besarnya Pembiayaan (Rp)</label>
                  <div class="controls">
                     <input type="text" class="span6" id="jumlah" readonly value="<?php echo number_format($isipembiayaan->jumlah)?>" name="jumlah" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Waktu Pelunasan (Bulan)</label>
                  <div class="controls">
                    <input type="text" class="span6" id="waktu" readonly value="<?=$isipembiayaan->waktu?>" name="waktu" />
                     <span class="help-inline"></span>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Besarnya Angsuran (Rp)</label>
                  <div class="controls">
                     <input type="text" class="span6" id="angsuran" readonly value="<?php echo number_format($isipembiayaan->angsuran)?>" name="angsuran" />
                     <span class="help-inline"></span>
                  </div>
                </div>
                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Tanggal Survey</label>
                  <div class="controls">
                    <div class="input-append" id="ui_date_picker_trigger">
                        <input name="tglsurvey" type="text" class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                  </div>
                </div> 

                <div class="control-group primary">
                  <label class="control-label" for="inputWarning">Disurvey Oleh</label>
                  <div class="controls">
                     <input type="text" class="span6"  required name="surveyby" />
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
