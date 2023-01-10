<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=rencanaPengeluaran&amp;act=view&amp;typ=html">Rencana Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Rencana Anggaran
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   var xpopup = false;

   function focusPopup() {
      if(xpopup) xpopup.focus();
      return true;
   }

   function cetak(url) {
      window.open(url,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup='xpopup';
   }

   function bukaPopupCetak(grp) {
      window.open('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&sub=cetakRencanaPengeluaran&act=view&typ=html&ta_id=9&unit_id=1&unit_nama=UNIVERSITAS&jenis_kegiatan=&pengadaan=&rka=&kode=&nama=&sub_unit_show=1&ta_nama=2023&page=1&grp=' + grp,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup='xpopup';
   }

   function bukaPopupCetakRtf(grp) {
      window.open('&grp=' + grp,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup='xpopup';
   }

   function popupUnitKerja(action) {
      showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&sub=PopupUnitkerja&act=view&typ=html','Unit Kerja', 550, 500)
   }
   document.onmousedown=focusPopup();
</script>
<style type="text/css" media="screen">
/* <![CDATA[ */
   table.table-common tr.table-yellow td{
      background-color: #FFFF66;
   }
   .table-common tr.table-common-even1 td{
      font-weight: bold !important;
   }
   .table-common tr.hoverTd.table-common-even1_none:hover td{
      font-weight: bold !important;
   }
   .table-common tbody tr:hover td{
      background-color: #91bdff !important;
   }
   .table-common tbody tr.rkat td{
      border-bottom-color: #f9d54b !important;
   }
   .table-common tbody tr.rkat.no_document td:first-child,
   .table-common tbody tr.hoverTd.no_document_none:hover td:first-child{
      border-left-color: #990000 !important;
      border-left-width: 5px;
      border-left-style: inset;
   }
   .table-common tbody tr.hoverTd.no_document_none:hover td{
      background-color: rgba(230,230,0, 0.4) !important;
   }
/* ]]> */
</style>
<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=rencanaPengeluaran&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
               
               <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="form-group">
                     <label class="control-label col-md-3">
                        Periode Tahun
                     </label>
                     <div class="col-md-7">
                           
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[ta_id]" id="cmb_periode_tahun" class="form-control">
	
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
                        <label class="control-label col-md-3">
                           RKAT 
                        </label>
                        <div class="col-md-7">
                           <input type="text" value="" size="20" name="data[rka]" id="rka" class="form-control">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3">
                           Kode 
                        </label>
                        <div class="col-md-7">
                              <input type="text" value="" size="20" name="data[kode]" id="kode" class="form-control">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3">
                           Nama 
                        </label>
                        <div class="col-md-7">
                              <input type="text" name="data[nama]" size="35" id="nama" value="" class="form-control">
                        </div>
                  </div>

               </div>
               <div class="col-xs-12 col-sm-12 col-md-6">
                     <div class="form-group">
                           <label class="control-label col-md-3">
                              Unit Kerja
                           </label>
                           <div class="col-md-7">
                                                                  
                                       <div class="input-group">
                                          <input type="hidden" name="data[unit_id]" id="unit_id" value="1">
                                          <input type="text" name="data[unit_nama]" id="unit_nama" value="UNIVERSITAS" size="35" readonly="" class="form-control">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-default" onclick="javascript:popupUnitKerja()">
                                                <i class="fa fa-search"></i>
                                             </button>
                                          </span>   
                                       </div>  

                                       <label class="custom-control custom-checkbox">
                                          <input type="checkbox" class="CheckBoxFW_parent custom-control-input" name="data[sub_unit_show]" value="1" checked="checked">
                                             <span class="custom-control-indicator"></span> Tampilkan Unit Kerja
                                       </label>                       
                                    
                           </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">
                                 Jenis Kegiatan
                              </label>
                           <div class="col-md-7">
                               
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[jenis_kegiatan]" id="cmb_jenis_kegiatan" class="form-control">
	
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
                                 Pengadaan
                              </label>
                           <div class="col-md-7">
                               
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[pengadaan]" id="cmb_pengadaan" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="Y">Ya</option>
	
		<option value="T">Tidak</option>
	       
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
                        <input type="submit" name="btnTampilkan" value=" Tampilkan »" class="btn btn-primary">                   
                        <input type="reset" name="btnReset" value=" Reset »" class="btn btn-warning">                   
                     </div>
                  </div>
                  
               </div>
				  

				  
			   </div>               
			   </form>
		</div>
   </div>
   

<div class="panel panel-default">      
     <div class="panel-body">
      
      <form method="post" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element" id="form_list_rba">
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
			<a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=inputRencanaPengeluaranRutin&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1" title="Tambah Data">
				<i class="fa fa-plus-circle"></i>
				Tambah
			</a>
			<button type="submit" id="btnHapus" name="btnHapus" class="btn btn-danger btn-flat">
				<i class="fa fa-trash"></i>
				Hapus
			</button>
		</div>
	</div>

   <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover">
      <thead>
         <tr>
            <th style="width: 25px;" rowspan="2">
               No
            </th>
            <th rowspan="2" style="width: 40px;">
               Aksi
            </th>
            <th rowspan="2">
                  <label class="custom-control custom-checkbox custom-control-blank">
                 <input type="checkbox" class="CheckBoxFW_parent custom-control-input">
                      <span class="custom-control-indicator"></span>
                  </label>
            </th>
            <th rowspan="2">
               RKAT
            </th>
            <th rowspan="2">
               Kode
            </th>
            <th rowspan="2">
               Nama
            </th>
            <!-- th rowspan="2">Jenis Kegiatan</th -->
            <th rowspan="2">
               Unit Kerja
            </th>
            <th colspan="2">
               Nilai (Rp.)
            </th>
            <th colspan="2">
               Nilai Setujui(Rp.)
            </th>
            <th rowspan="2">
               Total Nilai (Rp.)
            </th>
            <th rowspan="2">
               Total Nilai Setujui(Rp.)
            </th>
            <th rowspan="2">
               File
            </th>
         </tr>
         <tr>
            <th>
               Pengadaan
            </th>
            <th>
               Non Pengadaan
            </th>
            <th>
               Pengadaan
            </th>
            <th>
               Non Pengadaan
            </th>
         </tr>
      </thead>
      <tbody>
         
               
                  <tr class="table-common-even1 program">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                          
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           00
                        </label>
                     </td>
                     <td>
                        Kegiatan Pendidikan Perguruan Tinggi
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        253.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        102.000.000
                     </td>
                     <td style="text-align:right;">
                        253.000.000
                     </td>
                     <td style="text-align:right;">
                        102.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even2 kegiatan">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                          
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01
                        </label>
                     </td>
                     <td>
                        Layanan Pendidikan Dan Operasional Kampus
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        253.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        102.000.000
                     </td>
                     <td style="text-align:right;">
                        253.000.000
                     </td>
                     <td style="text-align:right;">
                        102.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        1
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_26">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/01/00003
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.01
                        </label>
                     </td>
                     <td>
                        Pendidikan Dan Pengajaran
                        
                              <label style="font-style: italic;">
                                 (Kegiatan Penerimaan Mahasiswa Baru Tahun Ajaran 2023/2024)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Fakultas Kesenian
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_26_20221221230204.xlsx" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0073
                        </label>
                     </td>
                     <td>
                        Honor Panitia PMB
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:right;">
                        1.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        2
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_19">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/03/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.01
                        </label>
                     </td>
                     <td>
                        Pendidikan Dan Pengajaran
                        
                              <label style="font-style: italic;">
                                 (Perawatan Alat-alat Laboratorium Teknik Kimia)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Teknik Kimia
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_19_20221221133128.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0068
                        </label>
                     </td>
                     <td>
                        Perawatan Laboratorium
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:right;">
                        7.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        3
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_24">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/06/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.01
                        </label>
                     </td>
                     <td>
                        Pendidikan Dan Pengajaran
                        
                              <label style="font-style: italic;">
                                 (Honor Dosen Pembimbing TA)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Prodi Akuntansi
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_24_20221221160517.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0071
                        </label>
                     </td>
                     <td>
                        Honor Dosen Pembimbing 1
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:right;">
                        12.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        4
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_23">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/07/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.01
                        </label>
                     </td>
                     <td>
                        Pendidikan Dan Pengajaran
                        
                              <label style="font-style: italic;">
                                 (Penyusunan Modul Praktikum Semester Genap
( Percetakan modul praktikum semester genap (OTK1, Praktikum Kimia Lanjut, Simulasi Proses) ))<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Teknik Kimia
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_23_20221221150805.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0070
                        </label>
                     </td>
                     <td>
                        Cetak Modul Praktikum Teknik Kimia
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:right;">
                        8.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        5
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                                    <a href="/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=inputRencanaPengeluaranRutin&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;kd_id=28&amp;prog_no=00&amp;keg_no=01&amp;subkeg_no=01.01" class="xhr dest_subcontent-element  btn btn-warning btn-xs" title="Ubah Data" onclick="javascript:document.forms.frmManipulasi57.submit()">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                 
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" name="id[]" id="id_28" value="28|28">
                                   <span class="custom-control-indicator"></span>
                              </label>
                             <input type="hidden" name="name[28|28]" value="01.01 - Pendidikan Dan Pengajaran">
                          
                    </td>
                    <td>
                       RKAT/2024/07/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.01
                        </label>
                     </td>
                     <td>
                        Pendidikan Dan Pengajaran
                        
                              <label style="font-style: italic;">
                                 (Anggaran Kegiatan PMB)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Teknik Komputer
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        100.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        100.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_28_20230105153649.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0074
                        </label>
                     </td>
                     <td>
                        Kegiatan PMB
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        100.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        100.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        6
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28&amp;data_id=20','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                                    <a href="/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=inputRencanaPengeluaranRutin&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;kd_id=20&amp;prog_no=00&amp;keg_no=01&amp;subkeg_no=01.02" class="xhr dest_subcontent-element  btn btn-warning btn-xs" title="Ubah Data" onclick="javascript:document.forms.frmManipulasi58.submit()">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                 
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" name="id[]" id="id_20" value="20|20">
                                   <span class="custom-control-indicator"></span>
                              </label>
                             <input type="hidden" name="name[20|20]" value="01.02 - Penelitian Dan Pengembangan">
                          
                    </td>
                    <td>
                       RKAT/2023/01/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.02
                        </label>
                     </td>
                     <td>
                        Penelitian Dan Pengembangan
                        
                              <label style="font-style: italic;">
                                 (Diskusi Ilmiah &amp; Seminar : Webinar Reguler Topik Teknologi)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Teknik Komputer
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        11.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        11.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_20_20221221143209.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0067
                        </label>
                     </td>
                     <td>
                        Seminar Nasional
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        11.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        11.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        7
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28&amp;data_id=20&amp;data_id=21','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_21">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/01/00002
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.04
                        </label>
                     </td>
                     <td>
                        Kegiatan Non Akademik / Operasional Kampus
                        
                              <label style="font-style: italic;">
                                 (Pengadaan dan Pengembangan Sistem Informasi dan Software)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Manajer Teknologi Komunikasi dan Informasi
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_21_20221221144133.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0063
                        </label>
                     </td>
                     <td>
                        Perpanjangan akun Hosting/Domain
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:right;">
                        5.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        8
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28&amp;data_id=20&amp;data_id=21&amp;data_id=27','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_27">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/01/00004
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.04
                        </label>
                     </td>
                     <td>
                        Kegiatan Non Akademik / Operasional Kampus
                        
                              <label style="font-style: italic;">
                                 (Perjalanan Dinas Training Tim Keuangan)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Prodi Akuntansi
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        40.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        40.000.000
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_27_20221222103958.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0069
                        </label>
                     </td>
                     <td>
                        SPPD Perjalanan
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        40.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        40.000.000
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        9
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28&amp;data_id=20&amp;data_id=21&amp;data_id=27&amp;data_id=22','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_22">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/04/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.04
                        </label>
                     </td>
                     <td>
                        Kegiatan Non Akademik / Operasional Kampus
                        
                              <label style="font-style: italic;">
                                 (Biaya Perjalanan Dinas Training Tim Keuangan)<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Direktur Keuangan &amp; Akuntansi
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_22_20221221145942.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0069
                        </label>
                     </td>
                     <td>
                        SPPD Perjalanan
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        24.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
                  <tr class="table-common-even rkat">
                     <td align="center">
                        10
                     </td>
                     <td class="links" align="center">
                        
                              <a class="btn btn-default btn-xs" href="javascript:void(0);" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_kegiatan_pengeluaran&amp;sub=UploadRABFile&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;jenis_kegiatan=&amp;pengadaan=&amp;rka=&amp;kode=&amp;nama=&amp;sub_unit_show=1&amp;ta_nama=2023&amp;page=1&amp;data_id=26&amp;data_id=19&amp;data_id=24&amp;data_id=23&amp;data_id=28&amp;data_id=20&amp;data_id=21&amp;data_id=27&amp;data_id=22&amp;data_id=25','Upload File',500,145)" title="Upload File" style="display: none;">
                                 <img src="images/icons/16/upload-icon.png">
                              </a>
                              
                           
                     </td>
                    <td align="center">
                       
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" class="CheckBoxFW_child custom-control-input" disabled="" id="id_25">
                                   <span class="custom-control-indicator"></span>
                              </label>
                          
                    </td>
                    <td>
                       RKAT/2023/08/00001
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           01.04
                        </label>
                     </td>
                     <td>
                        Kegiatan Non Akademik / Operasional Kampus
                        
                              <label style="font-style: italic;">
                                 (Pemeliharaan Perangkat IT ( PC, Laptop, Printer, Proyektor, dan Perangkat Jaringan ))<br>( -  -  - )
                              </label>
                           
                     </td>
                     <!-- td>  </td -->
                     <td>
                        Manajer Teknologi Komunikasi dan Informasi
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              <a href="http://suite.ecampuz.com/file_upload/ekeuanganpts/rab/RAB_25_20221221162851.pdf" target="_BLANK" title="Download">
                                 <img src="images/icons/16/document-download-red.png">
                              </a>
                           
                     </td>
                  </tr>
               
                  <tr class="">
                     <td align="center">
                        
                     </td>
                     <td class="links" align="center">
                        
                     </td>
                    <td align="center">
                       
                    </td>
                    <td>
                       
                    </td>
                     <td style="text-align: right;">
                        <label style="display: inline-block;">
                           0072
                        </label>
                     </td>
                     <td>
                        Pemeliharaan Perangkat IT
                        
                     </td>
                     <!-- td>  </td -->
                     <td>
                        
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        0
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:right;">
                        45.000.000
                     </td>
                     <td style="text-align:center" class="links" id="">
                        
                              &nbsp;
                           
                     </td>
                  </tr>
               
            
      </tbody>
   </table>
   </div>
   </form>
   </div>
</div>

<div class="panel panel-default">
     <div class="panel-heading">
         <h3 class="panel-title"> Resume</h3>
     </div>
     <div class="panel-body">
   <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
      <thead>
         <tr>
            <th rowspan="2">
               Kode
            </th>
            <th rowspan="2">
               Kegiatan
            </th>
            <th colspan="2">
               Nilai (Rp.)
            </th>
            <th colspan="2">
               Nilai Setujui(Rp.)
            </th>
            <th rowspan="2">
               Total Nilai (Rp.)
            </th>
            <th rowspan="2">
               Total Nilai Setujui(Rp.)
            </th>
         </tr>
         <tr>
            <th>
               Pengadaan
            </th>
            <th>
               Non Pengadaan
            </th>
            <th>
               Pengadaan
            </th>
            <th>
               Non Pengadaan
            </th>
         </tr>
      </thead>
      <tbody>
         
               
                  <tr class="table-common-even1">
                     <td align="center">
                        <strong>
                           00
                        </strong>
                     </td>
                     <td>
                        <strong>
                           Kegiatan Pendidikan Perguruan Tinggi
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           0
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           253.000.000
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           0
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           102.000.000
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           253.000.000
                        </strong>
                     </td>
                     <td style="text-align:right;">
                        <strong>
                           102.000.000
                        </strong>
                     </td>
                  </tr>
               
               <tr>
                  <td align="center" colspan="2">
                     <strong>
                        Total
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        0
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        253.000.000
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        0
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        102.000.000
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        253.000.000
                     </strong>
                  </td>
                  <td style="text-align:right;">
                     <strong>
                        102.000.000
                     </strong>
                  </td>
               </tr>
            
      </tbody>
   </table>
      </div>
   </div>
</div>


<div class="panel panel-default panel-petunjuk">
     <div class="panel-heading">
         <span class="panel-title">Petunjuk</span>
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
   <ul>
      <li>
         Klik <img src="images/button-add.gif" style="margin-bottom: -4px;"> untuk menambah data
      </li>
      <li>
         Klik <img src="images/button-edit.gif" style="margin-bottom: -4px;"> untuk mengubah data
      </li>
      <li>
         Klik <img src="images/icons/16/upload-icon.png" style="margin-bottom: -4px;"> untuk mengunggah dokumen
      </li>
      <li>
         Klik <img src="images/icons/16/document-download-red.png" style="margin-bottom: -4px;"> untuk mengunduh dokumen
      </li>
      <li>
         <img src="images/icons/16/box-download-lock.png" alt="lock" style="margin-bottom: -4px;"> Data tidak memiliki lampiran dokumen
      </li>
   </ul>
</div>
</div>

<script type="text/javascript">
CheckBoxFW_initiate = function (Obj)
{
   if (!Obj || Obj.className.indexOf('CheckBoxFW_parent') < 0 || !Obj.form) return;

   var CBList     = new Array;
   var CheckedAll = true;
   var FormObj    = Obj.form;

   for (var i = 0; i < FormObj.length; i++) if (FormObj[i] == Obj) break;
   if (i == FormObj.length) return;

   for(i += 1; i < FormObj.length; i++)
   {
      var CBObj = FormObj[i];
      if (CBObj.type.toUpperCase() != 'CHECKBOX') continue;
      if (CBObj.className.indexOf('CheckBoxFW_child') >= 0)
      {
         CBObj.onchange = function () {
            Obj.checkChild();
         }
         CBList[CBList.length] = CBObj;
         if (!CBObj.checked) CheckedAll = false;
      }
      if (CBObj.className.indexOf('CheckBoxFW_parent') >= 0) break;
   }

   if (CBList.length > 0)
   {
      Obj.onchange = function ()
      {
         for (var i = 0; i < CBList.length; i++){
            if(CBList[i].getAttribute('disabled') == null){
               CBList[i].checked = this.checked;
            }
         }
      }

      Obj.checkChild = function ()
      {
         var CheckedAll = true;
         for (var i = 0; i < CBList.length; i++) if (!CBList[i].checked)
         {
            CheckedAll = false;
            break;
         }
         this.checked = CheckedAll;
      }

      Obj.checked = CheckedAll;
   }
}
var formObj       = document.getElementById('form_list_rba');

if(typeof(formObj) != 'undefined' && formObj != null){
   for (var i = 0; i < formObj.length; i++){
      CheckBoxFW_initiate(formObj[i]);
   }
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>