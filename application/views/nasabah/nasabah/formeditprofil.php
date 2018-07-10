
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
      <form  role="form" method="post" action="<?=base_url()?>nasabah_control/editnasabah?>" enctype="multipart/form-data">
      <div class="row-fluid">  
          <!-- identitas Nasabah -->
          <div class="span12">
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
                  <thead>
                    <tr>
                      <th>Keterangan</th>
                      <th>Data Lama</th>
                      <th>Data Edit</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <tr>
                      <td class="span3">Nama Nasabah</td>
                      <td class="span4"><?=$isinasabah->nama?></td>
                      <td class="span5"></td>
                    </tr>
                    <tr>
                      <td >NIK</td>
                      <td><?=$isinasabah->nik?></td>
                      <td>
                        <div class="controls">
                           <input type="hidden" class="form-control span12" value="<?=$isinasabah->nik?>" name="nik" />
                           <input type="hidden" class="form-control span12" value="<?=$isinasabah->idnasabah?>" name="idnasabah" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Tempat Lahir</td>
                      <td><?=$isinasabah->tmplahir?></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td >Tanggal Lahir</td>
                      <td><?=$isinasabah->tgllahir?></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td >Pekerjaan</td>
                      <td><?=$isinasabah->pekerjaan?></td>
                      <td>
                        <div class="controls">
                           <input type="text" class="form-control span12" value="<?=$isinasabah->pekerjaan?>" name="a" />
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td >Alamat Rumah</td>
                      <td><?=$isinasabah->alamatrumah?></td>
                      <td>
                        <div class="controls">
                           <textarea class="form-control span12" rows="4" name="alamatrumah"><?=$isinasabah->alamatrumah?></textarea>
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td >Alamat Kantor</td>
                      <td><?=$isinasabah->alamatkantor?></td>
                      <td>
                        <div class="controls">
                           <textarea class="form-control span12" rows="4" name="alamatkantor"><?=$isinasabah->alamatkantor?></textarea>
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td >No Telp/HP</td>
                      <td><?=$isinasabah->telp?></td>
                      <td>
                        <div class="controls">
                           <input type="number" class="form-control span12"  name="telp" value="<?=$isinasabah->telp?>" />
                        </div>
                      </td>
                    </tr>  
                  </tbody>
                  
                </table>
                <hr>
                B. Data Keluarga Lain
                <table class="table table-striped table-bordered table-advance table-hover">
                  <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                   <tr>
                      <td >Nama Suami/Istri/Orang Tua</td>
                      <td ><?=$isinasabah->nama2?></td>
                      <td >
                        <div class="controls">
                           <input type="text" class="form-control span12" value="<?=$isinasabah->nama2?>" name="nama2" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Tempat Lahir</td>
                      <td><?=$isinasabah->tmplahir2?></td>
                      <td>
                        <div class="controls">
                           <input type="text" class="form-control span12" value="<?=$isinasabah->tmplahir2?>" name="tmplahir2" />
                        </div>
                      </td>
                    </tr>
                    <?php
                      $phpdate=strtotime($isinasabah->tgllahir2);
                      $mysqldate=date('d/m/Y',$phpdate);
                    ?>
                     <tr>
                      <td >Tanggal Lahir</td>
                      <td><?=$mysqldate?></td>
                      <td>
                        <div class="controls">
                            <div class="input-append" id="ui_date_picker_trigger">
                                <input name="tgllahir2" type="text" value="<?=$mysqldate?>" class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td >Pekerjaan</td>
                      <td><?=$isinasabah->pekerjaan2?></td>
                      <td>
                        <div class="controls">
                           <input type="text" class="form-control span12" value="<?=$isinasabah->pekerjaan2?>" name="pekerjaan2" />
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td >Alamat Rumah</td>
                      <td><?=$isinasabah->alamatrumah2?></td>
                      <td>
                        <div class="controls">
                           <textarea class="form-control span12" rows="4" name="alamatrumah2"><?=$isinasabah->alamatrumah2?></textarea>
                        </div>
                      </td>
                    </tr>
                     
                     <tr>
                      <td >No Telp/HP</td>
                      <td><?=$isinasabah->telp2?></td>
                      <td>
                        <div class="controls">
                           <input type="number" class="form-control span12" value="<?=$isinasabah->telp2?>" name="telp2" />
                        </div>
                      </td>
                    </tr> 
                  </tbody>
                  
                </table>
                <hr>
                C. Tanggungan
                <table class="table table-striped table-bordered table-advance table-hover">
                   <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                   <tr>
                    <td span3>Jumlah Tanggungan</td>
                    <td><?=$isinasabah->tanggungan?></td>
                    <td>
                      <div class="controls">
                        <input type="number" class="form-control span12" value="<?=$isinasabah->tanggungan?>" name="tanggungan" />
                      </div>  
                    </td>
                   </tr>   
                  </tbody>
                  
                </table>
                <hr>
                D. Data Kepemilikan Rumah
                <table class="table table-striped table-bordered table-advance table-hover">
                  <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hak Milik Rumah</td>
                      <td><?=$isinasabah->hakmilikrumah?></td>
                      <td>
                        <div class="controls">
                          <select class="span12" name="hakmilikrumah" required style="color:black">
                            
                            <option <?php if ($isinasabah->hakmilikrumah == "sendiri" ) echo 'selected' ; ?> value="sendiri" >Sendiri</option>
                            <option value="orang tua" <?php if ($isinasabah->hakmilikrumah == "orang tua" ) echo 'selected' ; ?>>Orang Tua</option>
                            <option <?php if ($isinasabah->hakmilikrumah == "sewa" ) echo 'selected' ; ?> value="sewa">Sewa</option>
                          </select>
                        </div>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
                <hr>
                E. Keluarga Lain Yang Mudah Dihubungi
                <table class="table table-striped table-bordered table-advance table-hover">
                  <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                    <tr>
                      <td span3>Nama</td>
                      <td><?=$isinasabah->nama3?></td>
                      <td>
                        <div class="controls">
                          <input type="text" class="form-control span12" value="<?=$isinasabah->nama3?>" name="nama3" />
                        </div>  
                      </td>
                    </tr>
                    <tr>
                      <td span3>Alamat</td>
                      <td><?=$isinasabah->alamat3?></td>
                      <td>
                        <div class="controls">
                           <textarea class="form-control span12" rows="4" name="alamat3"><?=$isinasabah->alamat3?></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td span3>No Telp</td>
                      <td><?=$isinasabah->telp3?></td>
                      <td>
                        <div class="controls">
                          <input type="number" class="form-control span12" value="<?=$isinasabah->telp3?>" name="telp3" />
                        </div>  
                      </td>
                    </tr>
                    <tr>
                      <td span3>Hubungan</td>
                      <td><?=$isinasabah->hubungan13?></td>
                      <td>
                        <div class="controls">
                          <input type="text" class="form-control span12" value="<?=$isinasabah->hubungan13?>" name="hubungan13" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  
                </table>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div>
      </div>
      <div class="row-fluid">
        <!-- jenis usaha -->
          <div class="span12">
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
                  <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                    <tr>
                      <td class="span3">Nama Perusahaan</td>
                      <td><?=$isinasabah->namausaha?></td>
                      <td>
                        <div class="controls">
                          <input type="text" class="form-control span12" value="<?=$isinasabah->namausaha?>" name="namausaha" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Bidang Usaha</td>
                      <td><?=$isinasabah->bidangusaha?></td>
                      <td>
                        <div class="controls">
                          <input type="text" class="form-control span12" value="<?=$isinasabah->bidangusaha?>" name="bidangusaha" />
                        </div>
                      </td>
                    </tr>
                    <?php
                      if($isinasabah->berdiri=="0000-00-00"){
                        $mysqldate='';
                      }
                      else{
                        $phpdate=strtotime($isinasabah->berdiri);
                        $mysqldate=date('d/m/Y',$phpdate);  
                      }
                      
                    ?>
                    <tr>
                      <td >Berdiri Sejak</td>
                      <td><?=$mysqldate?></td>
                      <td>
                        <div class="controls">
                            <div class="input-append" id="ui_date_picker_trigger">
                                <input name="berdiri" value="<?=$mysqldate?>" type="text" class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Legalitas</td>
                      <td><?=$isinasabah->legalitas?></td>
                      <td>
                        <div class="controls">
                          <select class="span12" style="color:black" name="legalitas">
                            
                            <option <?php if ($isinasabah->legalitas == "" ) echo 'selected' ; ?> value="">Pilih</option>
                            <option <?php if ($isinasabah->legalitas == "PT" ) echo 'selected' ; ?> value="PT">PT</option>
                            <option <?php if ($isinasabah->legalitas == "Yayasan" ) echo 'selected' ; ?> value="Yayasan">Yayasan</option>
                            <option <?php if ($isinasabah->legalitas == "Koperasi" ) echo 'selected' ; ?> value="Koperasi">Koperasi</option>
                            <option <?php if ($isinasabah->legalitas == "CV" ) echo 'selected' ; ?> value="CV">CV</option>
                            <option <?php if ($isinasabah->legalitas == "Lainnya" ) echo 'selected' ; ?> value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Izin yang Dimiliki</td>
                      <td><?=$isinasabah->izin?></td>
                      <td>
                        <div class="controls">
                          <input type="text" class="form-control span12" value="<?=$isinasabah->izin?>"  name="izin" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Jumlah Tenaga Kerja</td>
                      <td><?=$isinasabah->jmlkaryawan?></td>
                      <td>
                        <div class="controls">
                          <input type="number" class="form-control span12" value="<?=$isinasabah->jmlkaryawan?>" name="jmlkaryawan" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Alamat Perusahaan</td>
                      <td><?=$isinasabah->alamatusaha?></td>
                      <td>
                        <div class="controls">
                           <textarea class="form-control span12" rows="4" name="alamatusaha"><?=$isinasabah->alamatusaha?></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >No Telp Perusahaan</td>
                      <td><?=$isinasabah->telpusaha?></td>
                      <td>
                        <div class="controls">
                          <input type="number" class="form-control span12" value="<?=$isinasabah->telpusaha?>" name="telpusaha" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Tempat Usaha</td>
                      <td><?=$isinasabah->tempatusaha?></td>
                      <td>
                        <div class="controls">
                          <select class="span12" style="color:black" name="legalitas">
                            <option  <?php if ($isinasabah->tempatusaha == "" ) echo 'selected' ; ?> value="">Pilih</option>
                            <option <?php if ($isinasabah->tempatusaha == "milik sendiri" ) echo 'selected' ; ?> value="milik sendiri">Milik Sendiri</option>
                            <option <?php if ($isinasabah->tempatusaha == "sewa" ) echo 'selected' ; ?> value="sewa">Sewa</option>
                            <option <?php if ($isinasabah->tempatusaha == "lainnya" ) echo 'selected' ; ?> value="lainnya">Lainnya</option>
                          </select>
                        </div>
                      </td>
                    </tr>  
                  </tbody>
                  
                </table>
                <hr>
                B. Karyawan
                <table class="table table-striped table-bordered table-advance table-hover">
                  <thead>
                    <tr>
                      <th span3>Keterangan</th>
                      <th span4>Data Lama</th>
                      <th span5>Data Edit</th>
                    </tr>   
                  </thead>
                  <tbody>
                    <tr>
                      <td class="span3">Jenis Karyawan</td>
                      <td><?=$isinasabah->jeniskaryawan?></td>
                      <td>
                        <div class="controls">
                          <select class="span12" style="color:black" name="jeniskaryawan">
                            <option <?php if ($isinasabah->jeniskaryawan == "" ) echo 'selected' ; ?> value="">Pilih</option>
                            <option <?php if ($isinasabah->jeniskaryawan == "PNS" ) echo 'selected' ; ?> value="PNS">PNS</option>
                            <option <?php if ($isinasabah->jeniskaryawan == "BUMN" ) echo 'selected' ; ?> value="BUMN">BUMN</option>
                            <option <?php if ($isinasabah->jeniskaryawan == "Swasta" ) echo 'selected' ; ?> value="Swasta">Swasta</option>
                            
                            <option <?php if ($isinasabah->jeniskaryawan == "Lainnya" ) echo 'selected' ; ?> value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Nama Instansi</td>
                      <td><?=$isinasabah->namainstansi?></td>
                      <td>
                        <div class="controls">
                            <input type="text" class="form-control span12" value="<?=$isinasabah->namainstansi?>" name="namainstansi" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Telp Instansi</td>
                      <td><?=$isinasabah->telpinstansi?></td>
                      <td>
                        <div class="controls">
                            <input type="number" class="form-control span12" value="<?=$isinasabah->telpinstansi?>" name="telpinstansi" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Nama Pimpinan</td>
                      <td><?=$isinasabah->namapimpinan?></td>
                      <td>
                        <div class="controls">
                            <input type="text" class="form-control span12" value="<?=$isinasabah->namapimpinan?>" name="namapimpinan" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Jabatan</td>
                      <td><?=$isinasabah->jabatan?></td>
                      <td>
                        <div class="controls">
                            <input type="text" class="form-control span12" value="<?=$isinasabah->jabatan?>" name="jabatan" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td >Golongan</td>
                      <td><?=$isinasabah->golongan?></td>
                      <td>
                        <div class="controls">
                            <input type="text" class="form-control span12" value="<?=$isinasabah->golongan?>" name="golongan" />
                          </div>
                      </td>
                    </tr>  
                  </tbody> 
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
                  <thead>
                      <tr>
                        <td class="span6">Foto 1(Nasabah) Lama</td>
                       
                        <td class="span6">Foto 2(Suami/Istri/Orang Tua) Lama</td>
                        
                      </tr>  
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="<?=base_url()?>assets/file_upload/<?=$isinasabah->foto1?>" width="100" height="200" alt="foto1">
                      </td>
                      
                      <td>
                        <img src="<?=base_url()?>assets/file_upload/<?=$isinasabah->foto2?>" width="100" height="200" alt="foto2">
                      </td>
                      
                    </tr>  
                  </tbody>
                  <thead>
                     <td class="span6">Foto 1(Nasabah) Edit</td>
                     <td class="span6">Foto 2(Suami/Istri/Orang Tua) Edit</td> 
                  </thead>
                  <tbody>
                    <td>
                      <div class="controls">
                         <input type="file" class="span6"  name="foto1" />
                      </div>
                    </td> 
                    <td>
                      <div class="controls">
                         <input type="file" class="span6" name="foto2" />
                      </div> 
                    </td>
                  </tbody>
                  
                </table>
                <div class="form-actions">
                   <button type="submit" class="btn btn-success">Ubah Profil</button>
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
  


