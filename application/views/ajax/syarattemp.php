<div id="info-alert1">
    <?=@$this->session->flashdata('msg')?>
</div>

<table class="table table-striped table-bordered" id="sample_1">
 <thead>
   <tr>
   	 <th>No</th>
   	 <th>Jenis</th>
   	 <th>Gambar</th>
   </tr>	
 </thead>
 
 <tbody>
  <?php
   $no=1;
   foreach ($listsyarat as $k) {
  ?>
  <tr>
    <td><?=$no++;?></td>
    <td><?=$k->jenis?></td>
    <td><img src="<?=base_url()?>assets/file_upload/<?=$k->file?>" width="100" height="200" alt="fotosyarat"></td>
  </tr>
  <?php  
   }
  ?>	
 </tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$("#info-alert1").fadeTo(2000,50).slideUp(50,function(){
          $("#info-alert1").slideUp(50);
      });
	});
</script>