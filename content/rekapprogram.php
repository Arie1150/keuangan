<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=lapRekapProgram&amp;act=view&amp;typ=html">Rekap Program</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Rekap Program
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
    var xpopup;
    function bukaPopupProgram(xurl) {
        var tahun_anggaran;
        var tahun_anggaran_label;
        tahun_anggaran = document.getElementById('tahun_anggaran').value;
        tahun_anggaran_label = document.getElementById('tahun_anggaran').options[document.getElementById('tahun_anggaran').selectedIndex].text;
        showPopup(xurl + '&tahun_anggaran=' + tahun_anggaran + '&tahun_anggaran_label=' + tahun_anggaran_label, 'Kegiatan', 550, 550);
        //xpopup.focus();
    }
    function bukaPopupUnitKerja(xurl) {
        showPopup(xurl, 'Unit Kerja', 550, 550);

    }
    function bukaPopupCetak(xurl) {
        xpopup = window.open(xurl, 'xpopup', 'width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
        xpopup.focus();
    }
    function resetFormIni() {
        GtfwAjax.replaceContentWithUrl("subcontent-element", "/ekeuanganpts/index.php?mod=lap_rekap_program&sub=lapRekapProgram&act=view&typ=html&ascomponent=1");
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
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=lapRekapProgram&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  
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
                              <div class="form-group">
                                      <label class="col-md-3 control-label">
                                            Kegiatan
                                      </label>
                                      <div class="col-md-7">
                                          <div class="input-group">
                                              <input type="hidden" name="program" id="program" value="">
                                              <input type="text" name="program_label" id="program_label" readonly="readonly" class="form-control" size="35" value="">
                                               <div class="input-group-btn">
                                                  <button class="btn btn-default" type="button" onclick="javascript:bukaPopupProgram('/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=popupProgram&amp;act=view&amp;typ=html')">
                                                     <i class="fa fa-search"></i>
                                                  </button>
                                               </div>
                                         </div>
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
                                                          <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html')">
                                                             <i class="fa fa-search"></i>
                                                          </button>
                                                       </div>
                                                 </div> 

                                                 <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="CheckBoxFW_parent custom-control-input" name="sub_unit_show" value="1" checked="checked">
                                                    <span class="custom-control-indicator"></span> Tampilkan Unit Kerja
                                                </label>

                                                  
                                          </div>
                                    </div>  
                                <div class="form-group" style="display: none">
                                        <label class="col-md-3 control-label">
                                              Jenis Kegiatan
                                        </label>
                                        <div class="col-md-7">
                                            
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="" class="form-control">
	
		<option value=""></option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
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
          <b>1</b>-<b>10</b> dari <b>10</b> &nbsp;
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
			  <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=ExcelLapRekapProgram&amp;act=view&amp;typ=xlsx&amp;tahun_anggaran=9&amp;program=&amp;unitkerja=1&amp;sub_unit_show=1" target="_blank" title="Cetak">
				 <i class="fa fa-file-excel-o"></i> Export Xls
			  </a>
			  <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_rekap_program&amp;sub=CetakLapRekapProgram&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;program=&amp;unitkerja=1&amp;sub_unit_show=1')" title="Cetak">
				 <i class="ion-printer"></i> 
				 Cetak
              </a>
              <!-- a href="/ekeuanganpts/index.php?mod=lap_rekap_program&sub=RtfLapRekapProgram&act=view&typ=html&tahun_anggaran=9&program=&unitkerja=1&sub_unit_show=1" title="Export Rtf" ><img src="images/button-tindaklanjuti.gif" alt=""> Rtf</a -->
		</div>
	 </div>
	 
	 <div class="table-responsive">
	    <table class="table table-bordered table-stipe table-hover">
		    <thead>
                    <tr>
                            <th>Output</th>
                            <th>Nama</th>
                            <th>Unit Kerja</th>
                            <th>Nominal Usulan (Rp.)</th>
                            <th>Nominal Setuju (Rp.)</th>
                        </tr>
			</thead>
			<tbody>
                
                
                <tr class="table-common-even1">
                    <td align="center">00</td>
                    <td>Kegiatan Pendidikan Perguruan Tinggi</td>
                    <td></td>
                    <td style="text-align:right;" width="150">253.000.000</td>
                    <td style="text-align:right;" width="150">102.000.000</td>
                </tr>
                
                <tr class="table-common-even">
                    <td align="center">01</td>
                    <td>Layanan Pendidikan Dan Operasional Kampus (Tridharma Perguruan Tinggi)</td>
                    <td></td>
                    <td style="text-align:right;" width="150"></td>
                    <td style="text-align:right;" width="150"></td>
                </tr>
                
                <tr class="">
                    <td align="center">01.01</td>
                    <td>Pendidikan Dan Pengajaran</td>
                    <td>Fakultas Kesenian</td>
                    <td style="text-align:right;" width="150">1.000.000</td>
                    <td style="text-align:right;" width="150">1.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.01</td>
                    <td>Pendidikan Dan Pengajaran</td>
                    <td>Prodi Akuntansi</td>
                    <td style="text-align:right;" width="150">12.000.000</td>
                    <td style="text-align:right;" width="150">12.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.01</td>
                    <td>Pendidikan Dan Pengajaran</td>
                    <td>Teknik Kimia</td>
                    <td style="text-align:right;" width="150">7.000.000</td>
                    <td style="text-align:right;" width="150">7.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.01</td>
                    <td>Pendidikan Dan Pengajaran</td>
                    <td>Teknik Kimia</td>
                    <td style="text-align:right;" width="150">8.000.000</td>
                    <td style="text-align:right;" width="150">8.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.01</td>
                    <td>Pendidikan Dan Pengajaran</td>
                    <td>Teknik Komputer</td>
                    <td style="text-align:right;" width="150">100.000.000</td>
                    <td style="text-align:right;" width="150">0</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.02</td>
                    <td>Penelitian Dan Pengembangan</td>
                    <td>Teknik Komputer</td>
                    <td style="text-align:right;" width="150">11.000.000</td>
                    <td style="text-align:right;" width="150">0</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.04</td>
                    <td>Kegiatan Non Akademik / Operasional Kampus</td>
                    <td>Direktur Keuangan &amp; Akuntansi</td>
                    <td style="text-align:right;" width="150">24.000.000</td>
                    <td style="text-align:right;" width="150">0</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.04</td>
                    <td>Kegiatan Non Akademik / Operasional Kampus</td>
                    <td>Manajer Teknologi Komunikasi dan Informasi</td>
                    <td style="text-align:right;" width="150">5.000.000</td>
                    <td style="text-align:right;" width="150">5.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.04</td>
                    <td>Kegiatan Non Akademik / Operasional Kampus</td>
                    <td>Manajer Teknologi Komunikasi dan Informasi</td>
                    <td style="text-align:right;" width="150">45.000.000</td>
                    <td style="text-align:right;" width="150">45.000.000</td>
                </tr>
                
                <tr class="">
                    <td align="center">01.04</td>
                    <td>Kegiatan Non Akademik / Operasional Kampus</td>
                    <td>Prodi Akuntansi</td>
                    <td style="text-align:right;" width="150">40.000.000</td>
                    <td style="text-align:right;" width="150">24.000.000</td>
                </tr>
                
                
			</tbody>
		</table>
	</div>
	</div>
  </div>



<div class="panel panel-default">
      <div class="panel-heading">
            <span class="panel-title">Resume</span>
      </div>
      <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-stipe table-hover">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Kegiatan</th>
                            <th>Nominal Usulan (Rp.)</th>
                            <th>Nominal Setuju (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        <tr class="table-common-even1">
                            <td align="center">00</td>
                            <td>Kegiatan Pendidikan Perguruan Tinggi</td>
                            <td style="text-align:right;" width="150">253.000.000</td>
                            <td style="text-align:right;" width="150">102.000.000</td>
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
            <div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">    </div> = Kegiatan </div>
            <div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">    </div> = Output </div>
            <div style="margin:10px 0px 0px 10px;"><div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFFFF; border:#D1C698 1px solid; float: left;">    </div> = Komponen </div>
        </div>
  </div>
    

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>