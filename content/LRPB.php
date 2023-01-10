<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&amp;sub=LapRencanaPenerimaan&amp;act=view&amp;typ=html">Laporan Rencana Penerimaan Bulanan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Laporan Rencana Penerimaan Bulanan
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
		showPopup(xurl,'Unit Kerja',550, 550);
	}

	function resetFormIni() {
	    GtfwAjax.replaceContentWithUrl("subcontent-element","/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&sub=LapRencanaPenerimaan&act=view&typ=html&ascomponent=1");
        /**
		if(document.getElementById('unitkerja')) document.getElementById('unitkerja').value='';
		if(document.getElementById('unitkerja_label')) document.getElementById('unitkerja_label').innerHTML='';
		if(document.getElementById('program')) document.getElementById('program').value='';
		if(document.getElementById('program_label')) document.getElementById('program_label').innerHTML='';
		*/
	}
</script>

<div class="panel panel-default">
		<div class="panel-heading">
			  <span class="panel-title">
				  Pencarian
			  </span>
		</div>
		<div class="panel-body">
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&amp;sub=LapRencanaPenerimaan&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  
					  <div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Tahun Periode
								  </label>
								  <div class="col-md-7">
									  
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
						  </div>
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">               
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Unit Kerja
								  </label>
								  <div class="col-md-7">                                
									  <input type="hidden" name="unitkerja" id="unitkerja" value="1">
									  
										   <div class="input-group">
											<input type="text" name="unitkerja_label" id="unitkerja_label" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
											   <div class="input-group-btn">
												  <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&amp;sub=PopupUnitKerja&amp;act=view&amp;typ=html')">
													 <i class="fa fa-search"></i>
												  </button>
											   </div>
										 </div>
										 
									  
								  </div>
							  </div>
							  <div class="form-group">
									  <label class="control-label col-md-3">
									  </label>
  
									  <div class="col-md-7">
											<input type="submit" name="btncari" value="Tampilkan »" class="btn btn-primary">
											<input type="reset" name="btnReset" value="Reset" class="btn btn-warning">
									  </div>
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
      

<ul class="pagination" style="margin: 0px">
      
      <li class="disabled">
        <a href="#" aria-label="First">
          &lt;&lt;
        </a>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Previous">
          &lt;
        </a>
      </li>
      
    
      
      <li>
        <span>
          <b>1</b>-<b>8</b> dari <b>8</b> &nbsp;
        </span>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Next">
          &gt;
        </a>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Last">
          &gt;&gt;
        </a>
      </li>
      
    </ul>
    
    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
		</div>
		<div class="btn-group pull-right">         
			  <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&amp;sub=ExcelLapRencanaPenerimaan&amp;act=view&amp;typ=xlsx&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS" target="_blank" title="Cetak">
				 <i class="fa fa-file-excel-o"></i> Export Xls
			  </a>
			  <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_rencana_penerimaan&amp;sub=CetakLapRencanaPenerimaan&amp;act=view&amp;typ=html&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS')" title="Cetak">
				 <i class="ion-printer"></i> 
				 Cetak
			  </a>
		</div>
	 </div>
	 
	 <div class="table-responsive">
	 <table class="table table-bordered table-stipe table-hover">
		 <thead>
				<tr>
					<th rowspan="2" width="5">No</th>
					<th rowspan="2">Kode Penerimaan</th>
					<th rowspan="2">Unit Kerja</th>
					<th rowspan="2">Jenis Penerimaan</th>
					  <th rowspan="2">Total Penerimaan</th>
					<th colspan="24">Distribusi Penerimaan</th>
				</tr>
				<tr>
						 <th>%</th>
						<th>Januari</th>
						<th>%</th>
					   <th>Februari</th>
					   <th>%</th>
					   <th>Maret</th>
					   <th>%</th>
					   <th>April</th>
					   <th>%</th>
					   <th>Mei</th>
					   <th>%</th>
					   <th>Juni</th>
					   <th>%</th>
					   <th>Juli</th>
					   <th>%</th>
					   <th>Agustus</th>
					   <th>%</th>
					   <th>September</th>
					   <th>%</th>
					   <th>Oktober</th>
					   <th>%</th>
					   <th>November</th>
					   <th>%</th>
					   <th>Desember</th>
				</tr>
			 </thead>
			 <tbody>
					
						  
						  <tr class="">
							 <td align="center">1</td>
								  <td>400009</td>
								  <td>Prodi Akuntansi</td>
								  <td>Penerimaan Mahasiswa Baru</td>
								  <td style="text-align:right;">1.125.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">2</td>
								  <td>400018</td>
								  <td></td>
								  <td>perpanjangan Studi S2</td>
								  <td style="text-align:right;">10.000.000</td>
								  <td style="text-align:right;">50</td>
								  <td style="text-align:right;">5.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">10</td>
								  <td style="text-align:right;">1.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">20</td>
								  <td style="text-align:right;">2.000.000</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">20</td>
								  <td style="text-align:right;">2.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">3</td>
								  <td>400021</td>
								  <td></td>
								  <td>Penerimaan SPP 2023/2024</td>
								  <td style="text-align:right;">900.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">100</td>
									 <td style="text-align:right;">900.000.000</td>
									 <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">4</td>
								  <td>400003</td>
								  <td>Fakultas Ilmu Sosial dan Ilmu Politik</td>
								  <td>Penerimaan SPP Ganjil</td>
								  <td style="text-align:right;">490.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">5</td>
								  <td>400009</td>
								  <td>Fakultas Kesenian</td>
								  <td>Penerimaan Mahasiswa Baru</td>
								  <td style="text-align:right;">2.160.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">6</td>
								  <td>400009</td>
								  <td>Teknik Kimia</td>
								  <td>Penerimaan Mahasiswa Baru</td>
								  <td style="text-align:right;">1.200.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">100</td>
								  <td style="text-align:right;">1.200.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">7</td>
								  <td>400020</td>
								  <td></td>
								  <td>Penerimaan Jasa Fasilitas Laboratorium</td>
								  <td style="text-align:right;">500.000.000</td>
								  <td style="text-align:right;">50</td>
								  <td style="text-align:right;">250.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">50</td>
								  <td style="text-align:right;">250.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  <tr class="">
							 <td align="center">8</td>
								  <td>400019</td>
								  <td>Manajer Pemberdayaan dan Pengabdian Masyarakat</td>
								  <td>Penerimaan Hibah</td>
								  <td style="text-align:right;">100.000.000</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
									 <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">0</td>
			  
						  </tr>
			  
						  
						  
							 <tr class="table-common-even" style="text-align:right; font-weight:bold;">
			  
							 <td colspan="4">Total</td>
								  <td style="text-align:right;">6.485.000.000</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">255.000.000</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">1.000.000</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">2.000.000</td>
									 <td style="text-align:right;">&nbsp;</td>
									 <td style="text-align:right;">900.000.000</td>
									 <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">1.452.000.000</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
								  <td style="text-align:right;">&nbsp;</td>
								  <td style="text-align:right;">0</td>
			  
							  </tr>
						  
					   
				 </tbody>
			  </table>
	</div>
	</div>
  </div>

   <div class="panel panel-default panel-petunjuk">
		<div class="panel-heading">
			<span class="panel-title">
			   Petunjuk
			</span>
		</div>
		<div class="panel-body">
			<div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">    </div> = Unit Kerja </div>
			<div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">    </div> = Unit Kerja </div>
			<div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFFFF; border:#D1C698 1px solid; float: left;">    </div> = Daftar Penerimaan Unit / Sub Unit </div>
		</div>
  </div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>