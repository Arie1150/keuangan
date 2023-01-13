<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&amp;sub=lapRekapProgram&amp;act=view&amp;typ=html">Rekap Anggaran Program</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Rekap Anggaran Program
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   var xpopup;
   function bukaPopupProgram(xurl) {
      var cmbTa      = document.getElementById('cmb_tahun_anggaran');
      var taId       = cmbTa.options[cmbTa.selectedIndex].value;
      var taNama     = cmbTa.options[cmbTa.selectedIndex].text;
      var url        = '/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&sub=popupProgram&act=view&typ=html';
      var xurl       = url+'&tahun_anggaran='+taId+'&tahun_anggaran_label='+taNama;
      showPopup(xurl, 'Kegiatan', 600, 550);
   }
   function bukaPopupUnitKerja(xurl) {
      showPopup(xurl,'Unit Kerja',550, 550);

   }
   function bukaPopupCetak(xurl) {
      var width  = 940;
      var height = 600;
      var left   = (screen.width  - width)/2;
      var top    = (screen.height - height)/2;
      var params = 'width='+width+', height='+height;
      params += ', top='+top+', left='+left;
      params += ', directories=no';
      params += ', location=no';
      params += ', menubar=no';
      params += ', resizable=no';
      params += ', scrollbars=yes';
      params += ', status=no';
      params += ', toolbar=no';
      newwin=window.open(xurl,'Cetak', params);
      if (window.focus) {
         newwin.focus();
      }

      return false;
   }
</script>
<div class="panel panel-default">
		<div class="panel-heading">
			  <span class="panel-title">
				  Pencarian
			  </span>
		</div>
		<div class="panel-body">
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&amp;sub=lapRekapProgram&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  
					  <div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Tahun Periode
								  </label>
								  <div class="col-md-7">
									  
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="cmb_tahun_anggaran" class="form-control">
	
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
                                                  <button class="btn btn-default" type="button" onclick="javascript:bukaPopupProgram()">
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
                                              
                                                   <div class="input-group">
                                                    <input type="hidden" name="unitkerja" id="unitkerja" value="1">
                                                    <input type="text" name="unitkerja_label" id="unitkerja_label" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
                                                       <div class="input-group-btn">
                                                          <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html')">
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
      
	
   <select name="jenis_kegiatan" id="cmb_jenis_kegiatan" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="1">Tridharma Perguruan Tinggi</option>
	
		<option value="2">Pengembangan</option>
	
		<option value="3">Rutin</option>
	       
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
			  <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&amp;sub=ExcelLapRekapProgram&amp;act=view&amp;typ=xlsx&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;program_nama=&amp;jenis_kegiatan=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1" target="_blank" title="Cetak">
				 <i class="fa fa-file-excel-o"></i> Export Xls
			  </a>
			  <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_rekap_anggaran_program&amp;sub=CetakLapRekapProgram&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;program_nama=&amp;jenis_kegiatan=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1')" title="Cetak">
				 <i class="ion-printer"></i> 
				 Cetak
              </a>
		</div>
	 </div>
	 
	 <div class="table-responsive">
	    <table class="table table-bordered table-stipe table-hover">
		    <thead>
               <tr>
                     <th colspan="2">
                        Kegiatan/Output/Komponen
                     </th>
                     <th rowspan="2">
                        Unit Kerja
                     </th>
                     <th rowspan="2" style="width: 215px;">
                        Nominal Setuju (Rp.)
                     </th>
                  </tr>
                  <tr>
                     <th>
                        Kode
                     </th>
                     <th>
                        Nama
                     </th>
                  </tr>
			</thead>
			<tbody>
            
                  
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           00
                        </td>
                        <td>
                           Kegiatan Pendidikan Perguruan Tinggi
                        </td>
                        <td>
                           
                        </td>
                        <td style="text-align:right;">
                           102.000.000
                        </td>
                     </tr>
                  
                     <tr class="table-common-even2" style="">
                        <td align="center">
                           01
                        </td>
                        <td>
                           Layanan Pendidikan Dan Operasional Kampus (Tridharma Perguruan Tinggi)
                        </td>
                        <td>
                           
                        </td>
                        <td style="text-align:right;">
                           102.000.000
                        </td>
                     </tr>
                  
                     <tr class="table-common-even" style="">
                        <td align="center">
                           01.01
                        </td>
                        <td>
                           Pendidikan Dan Pengajaran
                        </td>
                        <td>
                           Prodi Akuntansi
                        </td>
                        <td style="text-align:right;">
                           12.000.000
                        </td>
                     </tr>
                  
                     <tr class="" style="">
                        <td align="center">
                           01.01
                        </td>
                        <td>
                           Pendidikan Dan Pengajaran
                        </td>
                        <td>
                           Teknik Kimia
                        </td>
                        <td style="text-align:right;">
                           7.000.000
                        </td>
                     </tr>
                  
                     <tr class="table-common-even" style="">
                        <td align="center">
                           01.01
                        </td>
                        <td>
                           Pendidikan Dan Pengajaran
                        </td>
                        <td>
                           Teknik Kimia
                        </td>
                        <td style="text-align:right;">
                           8.000.000
                        </td>
                     </tr>
                  
                     <tr class="" style="">
                        <td align="center">
                           01.01
                        </td>
                        <td>
                           Pendidikan Dan Pengajaran
                        </td>
                        <td>
                           Teknik Komputer
                        </td>
                        <td style="text-align:right;">
                           0
                        </td>
                     </tr>
                  
                     <tr class="table-common-even" style="">
                        <td align="center">
                           01.01
                        </td>
                        <td>
                           Pendidikan Dan Pengajaran
                        </td>
                        <td>
                           Fakultas Kesenian
                        </td>
                        <td style="text-align:right;">
                           1.000.000
                        </td>
                     </tr>
                  
                     <tr class="" style="">
                        <td align="center">
                           01.02
                        </td>
                        <td>
                           Penelitian Dan Pengembangan
                        </td>
                        <td>
                           Teknik Komputer
                        </td>
                        <td style="text-align:right;">
                           0
                        </td>
                     </tr>
                  
                     <tr class="table-common-even" style="">
                        <td align="center">
                           01.04
                        </td>
                        <td>
                           Kegiatan Non Akademik / Operasional Kampus
                        </td>
                        <td>
                           Prodi Akuntansi
                        </td>
                        <td style="text-align:right;">
                           24.000.000
                        </td>
                     </tr>
                  
                     <tr class="" style="">
                        <td align="center">
                           01.04
                        </td>
                        <td>
                           Kegiatan Non Akademik / Operasional Kampus
                        </td>
                        <td>
                           Direktur Keuangan &amp; Akuntansi
                        </td>
                        <td style="text-align:right;">
                           0
                        </td>
                     </tr>
                  
                     <tr class="table-common-even" style="">
                        <td align="center">
                           01.04
                        </td>
                        <td>
                           Kegiatan Non Akademik / Operasional Kampus
                        </td>
                        <td>
                           Manajer Teknologi Komunikasi dan Informasi
                        </td>
                        <td style="text-align:right;">
                           5.000.000
                        </td>
                     </tr>
                  
                     <tr class="" style="">
                        <td align="center">
                           01.04
                        </td>
                        <td>
                           Kegiatan Non Akademik / Operasional Kampus
                        </td>
                        <td>
                           Manajer Teknologi Komunikasi dan Informasi
                        </td>
                        <td style="text-align:right;">
                           45.000.000
                        </td>
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
                              <th colspan="2">
                                 Kegiatan
                              </th>
                              <th rowspan="2" style="width: 215px;">
                                 Nominal Setuju (Rp.)
                              </th>
                           </tr>
                           <tr>
                              <th style="width: 115px;">
                                 Kode
                              </th>
                              <th>
                                 Nama
                              </th>
                           </tr>
                    </thead>
                    <tbody>
                     
                              
                              <tr class="table-common-even1">
                                 <td align="center">00</td>
                                 <td>Kegiatan Pendidikan Perguruan Tinggi</td>
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
         <div style="margin:10px 0px 0px 10px;">
            <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">    </div> = Kegiatan
         </div>
         <div style="margin:10px 0px 0px 10px;">
            <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">    </div> = Output
         </div>
         <div style="margin:10px 0px 0px 10px;">
            <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFFFF; border:#D1C698 1px solid; float: left;">    </div> = Komponen
         </div>
      </div>
  </div>


   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>