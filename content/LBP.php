<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_pengadaan_rup&amp;sub=LapPengadaanRup&amp;act=view&amp;typ=html">Laporan Belanja Pengadaan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Laporan Belanja Pengadaan
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
		GtfwAjax.replaceContentWithUrl("subcontent-element","/ekeuanganpts/index.php?mod=lap_pengadaan_rup&sub=LapPengadaanRup&act=view&typ=html&ascomponent=1");
		/*
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
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_pengadaan_rup&amp;sub=LapPengadaanRup&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  <div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Tahun Periode
								  </label>
								  <div class="col-md-7">
									  
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" style="width:200px;" id="tahun_anggaran" class="form-control">
	
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
                                        </label><div class="col-md-7">                                 											
			 								<input type="hidden" name="unitkerja" id="unitkerja" value="1">
                                               
                                                   <div class="input-group">  
													<input type="text" name="unitkerja_label" id="unitkerja_label" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
                                                       <div class="input-group-btn">
                                                          <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_pengadaan_rup&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html')">
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
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
		</div>
		<div class="btn-group pull-right">  
			  <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_pengadaan_rup&amp;sub=ExcelLapPengadaanRup&amp;act=view&amp;typ=xls&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS" target="_blank" title="Cetak">
				 <i class="fa fa-file-excel-o"></i> Export Xls
			  </a>
			  <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_pengadaan_rup&amp;sub=CetakLapPengadaanRup&amp;act=view&amp;typ=html&amp;tgl=9&amp;id=16&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS')" title="Cetak">
				 <i class="ion-printer"></i> 
				 Cetak
              </a>
		</div>
	 </div>
	 
	 <div class="table-responsive">
	    <table class="table table-bordered table-stipe table-hover">
            <thead>
                  <tr>
						<th>Kode</th>
						<th>
							Output / 
							Komponen / 
							Mata Anggaran
						
						</th>
						<th>Volume</th>
						<th>Total</th>
						<th>Sumber Dana</th>
                  </tr>
               </thead>
               <tbody>
					
						<tr><td colspan="12" align="center"><em>--Data Tidak Ditemukan--</em></td></tr>
						
                  </tbody>
		</table>
	</div>
	</div>
  </div> 
 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>   