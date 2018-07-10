<div id="info-alert1">
    <?=@$this->session->flashdata('msg')?>
</div>

<table class="table table-striped table-bordered" id="sample_1">
 <thead>
   <tr>
   	 <th>No</th>
   	 <th>Jenis</th>
   	 <th>Sumber</th>
   </tr>	
 </thead>
 

 <tbody>
  <?php
   $no=1;
   foreach ($listkreditlain as $k) {
  ?>
  <tr>
    <td><?=$no++;?></td>
    <td><?=$k->jenis?></td>
    <td><?=$k->sumber?></td>
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