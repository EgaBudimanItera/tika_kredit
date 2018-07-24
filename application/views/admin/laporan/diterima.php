
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Pembiayaan Diterima</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
	<table width="100%">
		<tr>
			<td>
				<center>
					<h4>PT Bank Pembiayaan Rakyat Syariah Metro Madani<br/>Periode <?=date("d F Y", strtotime($daritanggal));?> - <?=date("d F Y", strtotime($hinggatanggal));?><br>Laporan Pembiayaan Diterima</h4>
				</center>
			</td>
		</tr>
	</table>
	<br>
      
	<table border="1" width="100%" cellpadding="2" cellspacing="0">
	    <tr >
	        <td ><div style="width: 30px;"><center><b>No</b></center></div></td>
	        <td ><div style="width: 120px;"><center><b>ID Pembiayaan</b></center></div></td>
	        <td ><div style="width: 100px;"><center><b>Tanggal</b></center></div></td>
	        <td ><div style="width: 100px;"><center><b>Nama Nasabah</b></center></div></td>
	        <td ><div style="width: 150px;"><center><b>Plafond (Rp)</b></center></div></td>
	        <td ><div style="width: 150px;"><center><b>Margin (Rp)</b></center></div></td>
	        <td ><div style="width: 150px;"><center><b>Waktu Pinjam (Bulan)</b></center></div></td>
	        <td ><div style="width: 150px;"><center><b>Angsuran (Rp)</b></center></div></td>
	        <td ><div style="width: 100px;"><center><b>Jenis Pinjaman</b></center></div></td>
	    
	   	<?php
	   		$no=1;
	   		$total=0;
	   		$totalmargin=0;
	   		foreach ($isilaporan as $isi) {
	   		$margin=$isi->totalpembayaran-$isi->jumlah;
	   	?>
	   	<tr>
	   		<td><center><?=$no++;?></center></td>
	   		<td><center><?=$isi->idpembiayaan?></center></td>
	   		<td><center><?=$isi->tglreaksi?></center></td>
	   		<td><?=$isi->nama?></td>
	   		<td align="right"><?php echo number_format($isi->jumlah)?></td>
	   		<td align="right"><?php echo number_format($margin)?></td>
	   		<td align="right"><?=$isi->waktu?></td>
	   		<td align="right"><?php echo number_format($isi->angsuran)?></td>
	   		<td><?=$isi->jenis?></td>
	   	</tr>
	   	<?php
	   		$total=$total+$isi->jumlah;
	   		$totalmargin=$totalmargin+$margin;
	   		}
	   	?>
	    

	    <tr>
	    	<td colspan="4">Total</td>
	    	<td align="right"><?php echo number_format($total)?></td>
	    	<td align="right"><?php echo number_format($totalmargin)?></td>
	    	<td colspan="3"></td>
	    	
	    </tr>
	</table> 
</body>
</html>

