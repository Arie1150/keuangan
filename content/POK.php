<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_rincian_pengeluaran_unit&amp;sub=lapRincianPengeluaran&amp;act=view&amp;typ=html">Petunjuk Operasional Kegiatan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Petunjuk Operasional Kegiatan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
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
   newwin = window.open(xurl,'Cetak', params);
   if (window.focus) {
      newwin.focus();
   }

   return false;
}

function bukaPopupUnitKerja(xurl){
   showPopup(xurl, 'Unit Kerja', 600, 550);
}
</script>
<style type="text/css">
   .table-common tbody tr.rkat td{
      border-bottom-color: #f9d54b !important;
   }
   label.rkakl{
      display: block;
      width: 100%;
      border-top: #f9d54b 1px solid;
      margin: 4px 0px;
      padding-top: 4px;
   }
</style>
<div class="panel panel-default">
		<div class="panel-heading">
			  <span class="panel-title">
				  Pencarian
			  </span>
		</div>
		<div class="panel-body">
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_rincian_pengeluaran_unit&amp;sub=lapRincianPengeluaran&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  <div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Tahun Periode
								  </label>
								  <div class="col-md-7">
									  
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="cmb_tahun_anggaran" style="width: 215px;" class="form-control">
	
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
                                              
                                                   <div class="input-group"> 
                                                    <input type="hidden" name="unit_id" id="txt_unit_id" value="1">
                                                    <input type="text" name="unit_nama" id="txt_unit" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
                                                       <div class="input-group-btn">
                                                          <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=lap_rincian_pengeluaran_unit&amp;sub=PopupUnitKerja&amp;act=view&amp;typ=html')">
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
          <b>1</b>-<b>7</b> dari <b>7</b> &nbsp;
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
			  <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_rincian_pengeluaran_unit&amp;sub=excelLapRincianPengeluaran&amp;act=view&amp;typ=xlsx&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;sub_unit_show=1&amp;ta_nama=2023" target="_blank" title="Cetak">
				 <i class="fa fa-file-excel-o"></i> Export Xls
			  </a>
			  <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_rincian_pengeluaran_unit&amp;sub=cetakLapRincianPengeluaran&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;sub_unit_show=1&amp;ta_nama=2023')" title="Cetak">
				 <i class="ion-printer"></i> 
				 Cetak
              </a>
		</div>
	 </div>
	 
	 <div class="table-responsive">
	    <table class="table table-bordered table-stipe table-hover">
            <thead>
                  <tr>
                     <th width="5px" rowspan="2">
                        No
                     </th>
                     <th colspan="2" width="350px">
                        Kegiatan/Sub Kegiatan/Jenis Belanja/Rincian Belanja
                     </th>
                     <th rowspan="2">
                        Unit Kerja
                     </th>
                     <th rowspan="2" width="90px">
                        Indikator Kinerja Kegiatan
                     </th>
                     <th rowspan="2" width="90px">
                        Indikator Kinerja Utama
                     </th>
                     <th rowspan="2" width="90px">
                        Output
                     </th>
                     <th colspan="3">
                        Perhitungan
                     </th>
                  </tr>
                  <tr>
                     <th>
                        Kode
                     </th>
                     <th>
                        Nama
                     </th>
                     <th width="90px">
                        Volume
                     </th>
                     <th width="100px">
                        Harga Satuan
                     </th>
                     <th width="120px">
                        Jumlah Biaya (Rp.)
                     </th>
                  </tr>
               </thead>
               <tbody>
                     
                           
                              <tr class="table-common-even1" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">00</td>
                                 <td>
                                    Kegiatan Pendidikan Perguruan Tinggi
                                    
                                          <label class="rkakl">
                                             [Kegiatan Pendidikan Perguruan Tinggi]
                                          </label>
                                       
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">65.780.000</td>
                                 <td style="text-align:right;">102.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even1" style="font-weight: bold; font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01</td>
                                 <td>
                                    Layanan Pendidikan Dan Operasional Kampus
                                    
                                          <label class="rkakl">
                                             [Layanan Pendidikan Dan Operasional Kampus]
                                          </label>
                                       
                                 </td>
                                 <td></td>
                                 <td>-</td>
                                 <td>-</td>
                                 <td>-</td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">65.780.000</td>
                                 <td style="text-align:right;">102.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">01.01</td>
                                 <td>
                                    Pendidikan Dan Pengajaran
                                    
                                          <label class="rkakl">
                                             [Pendidikan Dan Pengajaran]
                                          </label>
                                       
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">7.780.000</td>
                                 <td style="text-align:right;">28.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.01.19</td>
                                 <td>
                                    Perawatan Alat-alat Laboratorium Teknik Kimia
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="rkat" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">525119</td>
                                 <td>
                                    Belanja Barang Jasa
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">7.000.000</td>
                                 <td style="text-align:right;">7.000.000</td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">1</td>
                                 <td align="right">0068</td>
                                 <td>
                                    Perawatan Laboratorium
                                    
                                 </td>
                                 <td>Teknik Kimia</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">1 Tahun</td>
                                 <td style="text-align:right;">7.000.000</td>
                                 <td style="text-align:right;">7.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.01.23</td>
                                 <td>
                                    Penyusunan Modul Praktikum Semester Genap
( Percetakan modul praktikum semester genap (OTK1, Praktikum Kimia Lanjut, Simulasi Proses) )
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">2</td>
                                 <td align="right">0070</td>
                                 <td>
                                    Cetak Modul Praktikum Teknik Kimia
                                    
                                 </td>
                                 <td>Teknik Kimia</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">100 Buah</td>
                                 <td style="text-align:right;">80.000</td>
                                 <td style="text-align:right;">8.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.01.24</td>
                                 <td>
                                    Honor Dosen Pembimbing TA
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="rkat" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">535111</td>
                                 <td>
                                    Belanja Pengelolaan Kegiatan Kemahasiswaan
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">600.000</td>
                                 <td style="text-align:right;">12.000.000</td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">3</td>
                                 <td align="right">0071</td>
                                 <td>
                                    Honor Dosen Pembimbing 1
                                    
                                 </td>
                                 <td>Prodi Akuntansi</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">20 OK</td>
                                 <td style="text-align:right;">600.000</td>
                                 <td style="text-align:right;">12.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.01.26</td>
                                 <td>
                                    Kegiatan Penerimaan Mahasiswa Baru Tahun Ajaran 2023/2024
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="rkat" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">571123</td>
                                 <td>
                                    Belanja Komputer
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">100.000</td>
                                 <td style="text-align:right;">1.000.000</td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">4</td>
                                 <td align="right">0073</td>
                                 <td>
                                    Honor Panitia PMB
                                    
                                 </td>
                                 <td>Fakultas Kesenian</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">10 OK</td>
                                 <td style="text-align:right;">100.000</td>
                                 <td style="text-align:right;">1.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">01.04</td>
                                 <td>
                                    Kegiatan Non Akademik / Operasional Kampus
                                    
                                          <label class="rkakl">
                                             [Kegiatan Non Akademik / Operasional Kampus]
                                          </label>
                                       
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">58.000.000</td>
                                 <td style="text-align:right;">74.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.04.21</td>
                                 <td>
                                    Pengadaan dan Pengembangan Sistem Informasi dan Software
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="rkat" style="font-weight: bold;">
                                 <td align="center"></td>
                                 <td align="right">52120</td>
                                 <td>
                                    Belanja Keperluan Kantor
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;">5.000.000</td>
                                 <td style="text-align:right;">5.000.000</td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">5</td>
                                 <td align="right">0063</td>
                                 <td>
                                    Perpanjangan akun Hosting/Domain
                                    
                                 </td>
                                 <td>Manajer Teknologi Komunikasi dan Informasi</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">1 Paket</td>
                                 <td style="text-align:right;">5.000.000</td>
                                 <td style="text-align:right;">5.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.04.25</td>
                                 <td>
                                    Pemeliharaan Perangkat IT ( PC, Laptop, Printer, Proyektor, dan Perangkat Jaringan )
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">6</td>
                                 <td align="right">0072</td>
                                 <td>
                                    Pemeliharaan Perangkat IT
                                    
                                 </td>
                                 <td>Manajer Teknologi Komunikasi dan Informasi</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">1 Paket</td>
                                 <td style="text-align:right;">45.000.000</td>
                                 <td style="text-align:right;">45.000.000</td>
                              </tr>
                           
                              <tr class="table-common-even2" style="font-style: italic;">
                                 <td align="center"></td>
                                 <td align="right">01.04.27</td>
                                 <td>
                                    Perjalanan Dinas Training Tim Keuangan
                                    
                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;"></td>
                                 <td style="text-align:right;"></td>
                                 <td style="text-align:right;"></td>
                              </tr>
                           
                              <tr class="" style="">
                                 <td align="center">7</td>
                                 <td align="right">0069</td>
                                 <td>
                                    SPPD Perjalanan
                                    
                                 </td>
                                 <td>Prodi Akuntansi</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="text-align:center;">3 Kegiatan</td>
                                 <td style="text-align:right;">8.000.000</td>
                                 <td style="text-align:right;">24.000.000</td>
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
            <div style="margin:10px 0px 0px 10px;font-weight:bold;color:#965F11;text-transform: uppercase">
                  <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">    </div>
                  = Kegiatan
               </div>
               <div style="margin:10px 0px 0px 10px;font-weight:bold;color:#965F11">
                  <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">    </div>
                  = Output
               </div>
               <div style="margin:10px 0px 0px 10px;font-style:italic;color:#965F11">
                  <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">    </div>
                  = Komponen
               </div>
               <div style="margin:10px 0px 0px 10px;">
                  <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFFFF; border:#D1C698 1px solid; float: left;">    </div>
                  = Rincian Belanja
               </div>
               <div style="margin:10px 0px 0px 10px;">
                  [ ] = Nama dalam RKAKL
               </div>
      </div>
  </div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>