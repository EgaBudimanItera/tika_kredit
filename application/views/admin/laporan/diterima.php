
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Pembiayaan Diterima</title>
<style>
table {
    border-collapse: collapse;
}
table.tabel{
    border-collapse: collapse;
}
td.garis {
  border-bottom: 1pt solid black;
}

</style>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
	
	<table border="1px" width="100%">
	  <tr>
		<td colspan="9">
			<table border="0" width="100%">
				<tr>
					<td width="20%"><img src="<?=base_url()?>assets/logo.jpg" width="100px" height="80px"></td>
					<td width="5%">&nbsp</td>
					<td width="50%" align="center">
						<h4>PT Bank Pembiayaan Rakyat Syariah Metro Madani<br/>Periode <?=date("d F Y", strtotime($daritanggal));?> - <?=date("d F Y", strtotime($hinggatanggal));?><br>Laporan Pembiayaan Diterima</h4>
					</td>
					<td width="25%">&nbsp</td>
				</tr>
			</table>
		</td>
	  </tr>
	  <tr>
	  	<td colspan="9">&nbsp</td>
	  </tr>	
	  <tr>
	  	<td align="center" width="30px;"><b>No</b></td>
	    <td align="center" width="120px"><b>ID Pembiayaan</b></td>
        <td align="center" width="120px"><b>Tanggal</b></td>
        <td align="center" width="200px"><b>Nama Nasabah</b></td>
        <td align="center" width="150px"><b>Plafond (Rp)</b></td>
        <td align="center" width="150px"><b>Margin (Rp)</b></td>
        <td align="center" width="150px"><b>Waktu Pinjam (Bulan)</b></td>
        <td align="center" width="150px"><b>Angsuran (Rp)</b></td>
        <td align="center" width="100px"><b>Jenis Pinjaman</b></td>
	  </tr>
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
	    <tr>
	    	<td colspan="9">
	    		<table width="100%" border="0">
	    			<tr>
	    				<td colspan="4">&nbsp</td>
	    			</tr>

	    			<tr>
	    				<td width="20%">&nbsp</td>
	    				<td width="40%">&nbsp</td>
	    				<td width="30%" align="center">Bandarlampung, <?=date('d-m-Y')?></td>
	    				<td width="10%">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td width="20%">&nbsp</td>
	    				<td width="40%">&nbsp</td>
	    				<td width="30%" align="center">Mengetahui,</td>
	    				<td width="10%">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td width="20%">&nbsp</td>
	    				<td width="40%">&nbsp</td>
	    				<td width="30%" align="center">Pimpinan</td>
	    				<td width="10%">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td colspan="4">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td colspan="4">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td colspan="4">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td width="20%">&nbsp</td>
	    				<td width="40%">&nbsp</td>
	    				<td width="30%" align="center">(..............................)</td>
	    				<td width="10%">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td colspan="4">&nbsp</td>
	    			</tr>
	    		</table>
	    	</td>
	    </tr>
	</table>
</body>
</html>

