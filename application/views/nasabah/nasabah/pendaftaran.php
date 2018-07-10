
<?php $this->session->set_userdata('referred_from', current_url()); ?>
<!-- Rooms -->
<section class="parallax-effect" tabindex="5000" style="overflow: hidden; outline: none;">
  <div id="parallax-pagetitle" style="background-image: url(); background-position: 50% -67px;">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li>&nbsp;</li>
              <li>&nbsp;</li>
            </ol>
            <h1><i class="fa fa-user"></i> FORM PENDAFTARAN NASABAH</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      <!-- <div class="col-sm-4 single">
       
      </div> -->
      <!-- Room -->
      <div class="col-md-12">
        <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
        <form class="clearfix" role="form" method="post" action="<?=base_url()?>nasabah_control/addnasabah" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h4 class="lined-heading"><span>Identitas Pemohon</span></h4>
                <div class="form-group">
                  <h4 class=""><span>A. Data Diri</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama Pemohon*</label>
                    <input name="nama" type="text" value="" class="form-control" style="color:black" required />
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nomor Induk Kependudukan*</label>
                    <input name="nik" type="number" value="" class="form-control" style="color:black" required />
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Tempat Lahir*</label>
                    <input name="tmplahir" type="text"  value="" class="form-control" style="color:black" required="" />
                  </div> 
                  <div class="form-group">
                    <label for="subject" accesskey="S">Tanggal Lahir*</label>
                     <input class="form-control" id="date" required="" name="tgllahir" type="text" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Pekerjaan*</label>
                     <input class="form-control" name="pekerjaan" required="" type="text" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Alamat Rumah*</label>
                    <textarea class="form-control" rows="4" name="alamatrumah" required="" style="color:black"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="subject" accesskey="S">Alamat Kantor*</label>
                    <textarea class="form-control" rows="4" name="alamatkantor" required="" style="color:black"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">No Telp/HP*</label>
                    <input class="form-control" name="telp" type="number" required="" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Foto Pemohon</label>
                    <input type="file" class="file"  name="foto1" id="foto1" style="color:black">
                  </div>
                </div>  
                <h6 class="lined-heading"></h6>
                <div class="form-group">
                  <h4 class=""><span>B. Data Keluarga Lain</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama Suami/Istri/Orang Tua*</label>
                    <input name="nama2" type="text" value="" required="" class="form-control" style="color:black" />
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Tempat Lahir*</label>
                    <input name="tmplahir2" type="text"  value="" required="" class="form-control" style="color:black"/>
                  </div> 
                  <div class="form-group">
                    <label for="subject" accesskey="S">Tanggal Lahir*</label>
                     <input class="form-control" id="date" name="tgllahir2" required="" type="text" style="color:black"/>
                  </div>
                   <div class="form-group">
                    <label for="subject" accesskey="S">Pekerjaan</label>
                     <input class="form-control" name="pekerjaan2" type="text" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">No Telp/HP</label>
                     <input class="form-control" name="telp2" type="number"  style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Alamat Rumah*</label>
                    <textarea class="form-control" rows="4" name="alamatrumah2" required="" style="color:black"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Foto Suami/Istri/Orang Tua</label>
                    <input type="file" class="file"  name="foto2" id="foto2" style="color:black" >
                  </div>
                </div> 
                <h6 class="lined-heading"></h6>
                <div class="form-group">
                  <h4 class=""><span>C.Data Tanggungan</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Jumlah Tanggungan</label>
                    <input name="tanggungan" type="number" value="" class="form-control" style="color:black" />
                  </div>
                </div> 
                <h6 class="lined-heading"></h6>
                <div class="form-group">
                  <h4 class=""><span>D.Data Kepemilikan Rumah</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Status Kepemilikan Rumah*</label>
                    <select class="form-control" style="color:black" name="hakmilikrumah" required="">
                      <option value="">Pilih</option>
                      <option value="sendiri">Sendiri</option>
                      <option value="orang Tua">Orang Tua</option>
                      <option value="sewa">Sewa</option>
                    </select>
                  </div>
                </div> 
                <h6 class="lined-heading"></h6>
                <div class="form-group">
                  <h4 class=""><span>E.Keluarga Lain Yang Mudah Dihubungi (Tidak Serumah)</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama</label>
                    <input name="nama3" type="text" value="" class="form-control" style="color:black" />
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Alamat</label>
                    <textarea class="form-control" rows="4" name="alamat3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">No Telp/HP</label>
                    <input name="telp3" type="number"  value="" class="form-control" style="color:black"/>
                  </div> 
                  <div class="form-group">
                    <label for="subject" accesskey="S">Hubungan</label>
                     <input class="form-control"  name="hubungan13" style="color:black" type="text"/>
                  </div>
                </div> 
              </div> 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h4 class="lined-heading"><span>Jenis Usaha</span></h4>
                <div class="form-group">
                  <h4 class=""><span>A. Wirausaha</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama Perusahaan</label>
                    <input name="namausaha" type="text" value="" class="form-control" style="color:black" />
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Bidang Usaha</label>
                    <input name="bidangusaha" type="text" class="form-control" style="color:black"/>
                  </div>  
                  <div class="form-group">
                    <label for="subject" accesskey="S">Berdiri Sejak</label>
                    <input name="berdiri" type="text" id="date" class="form-control" style="color:black"/>
                  </div>   
                  <div class="form-group">
                    <label for="subject" accesskey="S">Legalitas</label>
                    <select class="form-control" style="color:black" name="legalitas">
                      <option value="">Pilih</option>
                      <option value="PT">PT</option>
                      <option value="Yayasan">Yayasan</option>
                      <option value="Koperasi">Koperasi</option>
                      <option value="CV">CV</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="subject" accesskey="S">Izin yang dimiliki</label>
                    <input name="izin" type="text" class="form-control" style="color:black"/>
                  </div>  
                  <div class="form-group">
                    <label for="subject" accesskey="S">Jumlah Tenaga Kerja</label>
                    <input name="jmlkaryawan" type="number" class="form-control" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Alamat Usaha</label>
                    <textarea class="form-control" rows="4" name="alamatusaha" style="color:black"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">No Telp Perusahaan</label>
                    <input name="telpusaha" type="number" class="form-control" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Bidang Usaha</label>
                    <input name="bidangusaha" type="text" class="form-control" style="color:black"/>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Tempat Usaha</label>
                    <select class="form-control" style="color:black" name="legalitas">
                      <option value="">Pilih</option>
                      <option value="milik Sendiri">Milik Sendiri</option>
                      <option value="sewa">Sewa</option>
                      <option value="lainnya">Lainnya</option>
                    </select>
                  </div> 
                </div>
                <h6 class="lined-heading"></h6>
                <div class="form-group">
                  <h4 class=""><span>B. Karyawan</span></h4>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Jenis Karyawan</label>
                    <select class="form-control" style="color:black" name="jeniskaryawan">
                      <option value="">Pilih</option>
                      <option value="PNS">PNS</option>
                      <option value="BUMN">BUMN</option>
                      <option value="Swasta">Swasta</option>
                      
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama Instansi</label>
                    <input name="namainstansi" type="text" class="form-control" style="color:black"/>
                  </div>  
                  <div class="form-group">
                    <label for="subject" accesskey="S">No Telp Instansi</label>
                    <input name="telpinstansi" type="number"  class="form-control" style="color:black"/>
                  </div>   
                  
                  <div class="form-group">
                    <label for="subject" accesskey="S">Nama Pimpinan</label>
                    <input name="namapimpinan" type="text" class="form-control" style="color:black"/>
                  </div>  
                  <div class="form-group">
                    <label for="subject" accesskey="S">Jabatan</label>
                    <input name="jabatan" type="text" class="form-control" style="color:black"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="subject" accesskey="S">Golongan</label>
                    <input name="golongan" type="text" class="form-control" style="color:black"/>
                  </div>
                </div>
              </div> 

              <div class="form-group"> 
                <h4 class="lined-heading"><span>Bantuan</span></h4> 
                <div class="form-group">
                  
                  <div class="form-group">
                    <label for="subject" accesskey="S">1. Format Foto yang diperbolehkan adalah JPG</label>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">2. Username Untuk Login Nasabah adalah NIK yang didaftarkan dengan password default adalah tanggal lahir dengan format yyyy-mm-dd (2000-01-01)</label>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">3. Harap Isi Data Dengan Benar</label>
                  </div>
                  <div class="form-group">
                    <label for="subject" accesskey="S">4. Tanggung Jawab Keamanan Atas Hak Akses User Berada ditangan nasabah sendiri</label>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="form-group"> 
                <h4 class="lined-heading"><span>Akun Login Nasabah</span></h4> 
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-4">
              <button type="submit" class="btn  btn-lg btn-primary">Daftar</button>
            </div>
          </div>
          
        </form>
      </div>
      <!-- Room -->
      <div class="col-sm-4 double apartment">
        
      </div>
    
      
    </div>
  </div>
</section>

<!-- <script>
    $(document).ready(function(){
      var date_input=$('input[name="tgllahir"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script> -->




