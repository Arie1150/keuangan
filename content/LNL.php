<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=21&amp;mid=21">Laporan Keuangan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_neraca_lajur&amp;sub=LapNeracaLajur&amp;act=view&amp;typ=html">Laporan Neraca Lajur</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Laporan Neraca Lajur
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   var xpopup;
   function bukaPopupCetak(xurl) {
      xpopup = window.open(xurl,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup.focus();
   }
   function bukaPopupUnitKerja(xurl) {
		showPopup(xurl,'UNIT KERJA',550, 550);
	}

	function resetFormIni() {
		GtfwAjax.replaceContentWithUrl("subcontent-element","/ekeuanganpts/index.php?mod=lap_neraca_lajur&sub=lapNeracaLajur&act=view&typ=html&ascomponent=1");


	}
</script> 
<div class="panel panel-default">
   <div class="panel-heading">
        <span class="panel-title">
           Pencarian
        </span>
   </div>
   <div class="panel-body"> 
 
   <form method="POST" action="/ekeuanganpts/index.php?mod=lap_neraca_lajur&amp;sub=lapNeracaLajur&amp;act=view&amp;typ=html" id="frmfilter" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
      <div class="row">
         <div class="form-group">
            <label class="col-md-3 control-label">
               Tahun Periode
            </label>
            <div class="col-md-4">
               
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="tahun_anggaran" class="form-control">
	
		<option value="13">2020</option>
	
		<option value="1">2021</option>
	
		<option value="6">2022</option>
	
		<option value="9" selected="">2023</option>
	
		<option value="10">2024</option>
	
		<option value="12">2025</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Unit Kerja
            </label>
            <div class="col-md-4">
               <input type="hidden" name="unitkerja" id="unitkerja" value="1">
               
                    <div class="input-group"> 
                       <input name="unitkerja_label" id="unitkerja_label" readonly="readonly" rows="1" class="form-control" value="UNIVERSITAS">
                       <div class="input-group-btn">
                          <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_neraca_lajur&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html');">
                             <i class="fa fa-search"></i>
                          </button>
                       </div>
                    </div> 
                      
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3">
            </label>
   
            <div class="col-md-4">
               <input type="submit" name="btncari" value="Tampilkan »" class="btn btn-primary">
               <input type="reset" name="btnReset" value="Reset" class="btn btn-warning">
            </div>
         </div>
      </div>
   </form>
   </div>
</div>  
 

<div class="panel panel-default">
   <div class="panel-body">
 <div class="btn-toolbar mb-15">
   <div class="btn-group">
      
   <!-- FormHelper Content BEGIN -->
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
   </div>
   <div class="btn-group pull-right">   
        <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_neraca_lajur&amp;sub=ExcelLapNeracaLajur&amp;act=view&amp;typ=xlsx&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS" target="_blank" title="Cetak">
          <i class="fa fa-file-excel-o"></i> Export Xls
        </a> 
  
        <a class="btn btn-flat btn-default mr-5" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_neraca_lajur&amp;sub=CetakLapNeracaLajur&amp;act=view&amp;typ=html&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS')" title="Cetak">
          <i class="ion-printer"></i> Cetak
        </a>  
 
   </div>
 </div>
 
 <div class="table-responsive">
    <table class="table table-bordered table-stipe table-hover">
      <thead>
         <tr>
            <th width="60" rowspan="2">Kode</th>
            <th width="60" colspan="5" rowspan="2">Nama Akun</th>
   
            <th colspan="2">Neraca Saldo Awal</th>
            <th colspan="2">Aktivitas</th>
            <th colspan="2">Ayat Jurnal Penyesuaian</th>
            <th colspan="2">Neraca Saldo Disesuaikan</th>
            <th colspan="2">Rugi/Laba (Defisit/Surplus)</th>
            <th colspan="2">Neraca</th> 
         </tr>
         <tr>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Kredit</th>
         </tr>
         <tr> 
            <th width="60">0</th>
            
                <th>1</th>
            
                <th>2</th>
            
                <th>3</th>
            
                <th>4</th>
            
                <th>5</th>
            
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
        </tr>
      </thead>
      <tbody>
      
               

               <tr class="" style="font-weight:bold">
               <td align="left">1000000</td>
                  <td colspan="5">ASET</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1100000</td>
                  <td width="10">&nbsp;</td><td colspan="4">AKTIVA LANCAR</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1110000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Kas dan Setara Kas</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1110100</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="2">Kas</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110101</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Petty Cash</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1110200</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="2">Bank</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110201</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank BNI</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110202</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank Mandiri</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110203</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank BTN</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110204</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank BRI</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110205</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank BSI</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110206</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank Panin</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1110207</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="1">Bank BPD</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1120000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Perlengkapan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1130000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Piutang</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1140000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Sewa dibayar dimuka</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1150000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Uang Muka Kerja</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1200000</td>
                  <td width="10">&nbsp;</td><td colspan="4">AKTIVA TETAP</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1210000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Peralatan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1220000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Akumulasi penyusutan peralatan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1230000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Kendaraan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1240000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Akumulasi penyusutan kendaraan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1250000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Gedung</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1260000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Akumulasi penyusutan gedung</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1270000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="2">Tanah</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">1300000</td>
                  <td width="10">&nbsp;</td><td colspan="4">AKTIVA LAIN-LAIN</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">1310000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Peralatan Bekas</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">2000000</td>
                  <td colspan="5">LIABILITAS</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">2100000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Utang Usaha</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">2200000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Utang Bank</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">2300000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Utang Gaji</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">2400000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Utang Bunga</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">3000000</td>
                  <td colspan="5">ASET NETO</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">3100000</td>
                  <td width="10">&nbsp;</td><td colspan="4">ASET NETO TIDAK TERIKAT</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">3101000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Aset Neto Tidak Terikat Tahun Berjalan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">3102000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Aset Neto Tidak Terikat Awal Tahun</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">3200000</td>
                  <td width="10">&nbsp;</td><td colspan="4">ASET NETO TERIKAT TEMPORER</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">3300000</td>
                  <td width="10">&nbsp;</td><td colspan="4">ASET NETO TERIKAT PERMANEN</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">4000000</td>
                  <td colspan="5">PENDAPATAN</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">4100000</td>
                  <td width="10">&nbsp;</td><td colspan="4">PENDAPATAN MAHASISWA</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4101000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Penerimaan SPP Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4102000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Penerimaan Kunjungan Industri Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4103000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Penerimaan Wisuda Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4104000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Penerimaan Kegiatan Talenta Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4105000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Penerimaan Mahasiswa Lainnya</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">4200000</td>
                  <td width="10">&nbsp;</td><td colspan="4">PENDAPATAN NON MAHASISWA</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4201000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Pendapatan Penerimaan Mahasiswa Baru</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4202000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Pendapatan Kegiatan Kemahasiswaan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">4203000</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Pendapatan Sewa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">5000000</td>
                  <td colspan="5">BEBAN</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">5100000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Belanja Pegawai</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5100001</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Belanja Premi Asuransi</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5200000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Belanja Barang</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">5300000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Belanja Kemahasiswaan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5300001</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Akomodasi Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5300002</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Kunjungan Indutri Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5300003</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Wisuda Mahasiswa</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5300004</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Lomba</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5300005</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Seminar</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:bold">
               <td align="left">5400000</td>
                  <td width="10">&nbsp;</td><td colspan="4">Belanja Non-Kemahasiswaan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5400001</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Penerimaan Mahasiswa Baru</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            

               <tr class="" style="font-weight:normal">
               <td align="left">5400002</td>
                  <td width="10">&nbsp;</td><td width="10">&nbsp;</td><td colspan="3">Biaya Kegiatan Kemahasiswaan</td>

                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
                  <td align="right">0,00</td>
               </tr>

            
         
      </tbody>
   </table>
</div>
</div>
</div> 
 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>