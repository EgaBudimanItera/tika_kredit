<script type="text/javascript">
	//load kreditlain
	function loadkreditlain() {
      $('#tampilkreditlain').load('<?=base_url()?>kreditlaintemp_control',function(){})
    };
	//loadjaminan
	function loadjaminan() {
      $('#tampiljaminan').load('<?=base_url()?>jaminantemp_control',function(){})
    };
	//loadpersyaratan
	function loadsyarat() {
      $('#tampilsyarat').load('<?=base_url()?>syarattemp_control',function(){})
    };
  //perkalian
  function perkalian(){
    var jenis=document.getElementById("jenis").value;
    var waktu=document.getElementById("waktu").value;
    var jumlah=document.getElementById("jumlah").value;
    if(jenis=='Umum'){
      bunga=1.5/100;
    }
    else{
      bunga=1.25/100;
    }
    var jbunga=(bunga*jumlah)*waktu;
    var totalpinjam=parseInt(jbunga)+parseInt(jumlah);
    var jangsur=totalpinjam/waktu;
    // var jangsur2=jangsur.toFixed(2);
    var jangsur2=Math.floor(jangsur);
    document.getElementById("angsuran").value=jangsur2;
  }

  $(document).ready(function(){
  	// loadkreditlain();
  	// loadjaminan();
  	// loadsyarat();

  });
</script>