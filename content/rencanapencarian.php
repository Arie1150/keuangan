<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      
<style>
    .sp3-highlight td {
        background-color: #d33438 !important;
        color: #fff;
    }
    
</style>
<script language="javascript" type="text/javascript">
   var xpopup = false;

   function focusPopup() {
      if(xpopup) xpopup.focus();
      return true;
   }

   function popupDetail(grp) {
      showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&sub=detailRealisasiPencairan&act=popup&typ=html&ta_id=9&nomor_rka=&kode=&jnssp3=&nama=&unit_id=1&unit_nama=UNIVERSITAS&program_id=&jenis_kegiatan=&ta_nama=2023&active=Y&open=Y&page=1&grp=' + grp,'',550, 378);
   }

   function popupUnitKerja(action) {
      var url = '';
      showPopup(url,'',550,550);
   }

   function bukaPopupCetak(grp) {
      window.open('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&sub=realisasiPencairan&act=print&typ=html&ta_id=9&nomor_rka=&kode=&jnssp3=&nama=&unit_id=1&unit_nama=UNIVERSITAS&program_id=&jenis_kegiatan=&ta_nama=2023&active=Y&open=Y&page=1&id=' + grp,'xpopup','width=1000,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup='xpopup';
   }

   function Cetak (url, label) {
      var width  = 900;
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
      newwin=window.open(url,label, params);
      if (window.focus) {
         newwin.focus();
      }

      return false;
   }
   document.onmousedown=focusPopup();

</script>

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=realisasiPencairan&amp;act=view&amp;typ=html">Rencana Pencairan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>


   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> SP3
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<div class="panel panel-default">
   <div class="panel-heading">
      <span class="panel-title">
         Pencarian
      </span>
   </div>
   <div class="panel-body">
      <form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=realisasiPencairan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Tahun Periode
                     </label>
                     <div class="col-md-7">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[ta_id]" style="width:150px;" onchange="getProgram(this.value)" id="cmb_tahun_anggaran" class="form-control">
	
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
                     <label class="col-md-4 control-label">
                        Nomor RKAT
                     </label>
                     <div class="col-md-7">
                        <input type="text" value="" size="35" name="data[nomor_rka]" id="nomor_rka" class="form-control">
                     </div>
                  </div>  
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Kode /  No. SP3
                     </label>
                     <div class="col-md-7">
                        <input type="text" value="" size="35" name="data[kode]" id="kode" class="form-control">
                     </div>
                  </div>  
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Jenis SP3
                     </label>
                     <div class="col-md-7">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[jnssp3]" style="width:150px;" id="cmb_jenis_sp3" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="1">UMK</option>
	
		<option value="2">Vendor</option>
	
		<option value="3">Payroll</option>
	
		<option value="4">Reimbursment</option>
	
		<option value="5">Perjalanan Dinas</option>
	
		<option value="6">Cash Basis</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Nama
                     </label>
                     <div class="col-md-7">
                        <input type="text" name="data[nama]" size="35" id="nama" value="" class="form-control">
                     </div>
                  </div>          
                  
                        <div class="form-group">
                           <label class="col-md-4 control-label">
                              Unit Kerja
                           </label>
                           <div class="col-md-7">
                              <div class="input-group">  
                                 <input type="hidden" name="data[unit_id]" id="txt_unit_id" value="1">
                                 <input type="text" name="data[unit_nama]" id="txt_unit_nama" class="form-control" value="UNIVERSITAS" readonly="">
                                 <span class="input-group-btn btn-group-align-top">
                                    <button type="button" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html', 'Unit Kerja', 650, 550)" class="btn btn-default" nama="btn-unit">
                                       <i class="fa fa-search"></i>
                                    </button>
                                 </span>
                              </div>
                           </div>
                        </div>
                     
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Kegiatan
                     </label>
                     <div class="col-md-7">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[program_id]" id="cmb_program_id" style="width:150px;" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="27">Kegiatan Pendidikan Perguruan Tinggi</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-4 control-label">
                        Jenis Kegiatan
                     </label>
                     <div class="col-md-7">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[jenis_kegiatan]" style="width:150px;" id="cmb_jenis_kegiatan" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="2">Pengembangan</option>
	
		<option value="1">Tridharma Perguruan Tinggi</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-offset-4 col-md-7">
                        <button type="submit" name="btnTampilkan" class="btnTampilkan btn btn-primary">
                           Tampilkan »
                        </button>
                        
                        <button type="reset" class="buttonSubmit btn btn-warning" name="btnReset">
                           Reset »
                        </button>                          
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
          <b>1</b>-<b>6</b> dari <b>6</b> &nbsp;
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
            
                  <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputRealisasiPencairan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1" title="Tambah Realisasi Pencairan">                     
                     <i class="fa fa-plus-circle"></i>
                     Tambah
                  </a>
               
        </div>
      </div>
 
      <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                  <th rowspan="2">
                     No
                  </th>
                  <th width="140" rowspan="2">
                     Aksi
                  </th>
                  <th width="111" rowspan="2">
                     Tanggal
                  </th>
                  <th rowspan="2">
                     Nomor RKAT
                  </th>
                  <th rowspan="2">
                     No. SP3
                  </th>
                  <th rowspan="2">
                     Unit Kerja
                  </th>
                  <th colspan="2">
                     Kegiatan,
                     Output,
                     Komponen
                  </th>
                  <th rowspan="2">
                     Nominal Usulan (Rp.)
                  </th>
                  <th rowspan="2">
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
               
                     
                        <tr class="table-common-even1 " style="font-weight: bold;">
                           <td>
                              
                           </td>
                           <td class="links" align="center">
                              
                                    &nbsp;
                                 
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              00
                           </td>
                           <td>
                              Kegiatan Pendidikan Perguruan Tinggi
                           </td>
                           <td style="text-align:right;">
                              49.500.000
                           </td>
                           <td style="text-align:right;">
                              42.500.000
                           </td>
                        </tr>
                     
                        <tr class="table-common-even2 " style="">
                           <td>
                              
                           </td>
                           <td class="links" align="center">
                              
                                    &nbsp;
                                 
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              
                           </td>
                           <td>
                              01
                           </td>
                           <td>
                              Layanan Pendidikan Dan Operasional Kampus (Tridharma Perguruan Tinggi)
                           </td>
                           <td style="text-align:right;">
                              49.500.000
                           </td>
                           <td style="text-align:right;">
                              42.500.000
                           </td>
                        </tr>
                     
                        <tr class="table-common-even " style="">
                           <td>
                              1
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=25', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=25&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                          &nbsp;
                                       

                                    
                                 
                           </td>
                           <td>
                              01 Agustus 2023
                           </td>
                           <td>
                              RKAT/2023/08/00001
                           </td>
                           <td>
                              0001/SP3/1000.2.03.01/08/2023
                           </td>
                           <td>
                              Manajer Teknologi Komunikasi dan Informasi
                           </td>
                           <td>
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                           </td>
                           <td style="text-align:right;">
                              20.000.000
                           </td>
                           <td style="text-align:right;">
                              20.000.000
                           </td>
                        </tr>
                     
                        <tr class=" " style="">
                           <td>
                              2
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=23', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=23&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                          &nbsp;
                                       

                                    
                                 
                           </td>
                           <td>
                              01 Juni 2023
                           </td>
                           <td>
                              RKAT/2023/06/00001
                           </td>
                           <td>
                              0001/SP3/2001.2/06/2023
                           </td>
                           <td>
                              Prodi Akuntansi
                           </td>
                           <td>
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                           </td>
                           <td style="text-align:right;">
                              9.000.000
                           </td>
                           <td style="text-align:right;">
                              9.000.000
                           </td>
                        </tr>
                     
                        <tr class="table-common-even " style="">
                           <td>
                              3
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=22', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=22&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputRealisasiPencairan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=22" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                             </a>
                                             <a href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=realisasi_pencairan_2|deleteRealisasiPencairan|do|html-search|ta_id|nomor_rka|kode|jnssp3|nama|unit_id|unit_nama|program_id|jenis_kegiatan|ta_nama|active|open|page-1|9|||||1|UNIVERSITAS|||2023|Y|Y|1&amp;urlReturn=realisasi_pencairan_2|realisasiPencairan|view|html-search|ta_id|nomor_rka|kode|jnssp3|nama|unit_id|unit_nama|program_id|jenis_kegiatan|ta_nama|active|open|page-1|9|||||1|UNIVERSITAS|||2023|Y|Y|1&amp;id=22&amp;label=SP3&amp;dataName=Sub Kegiatan : Pendidikan Dan Pengajaran&amp;message=Penghapusan Data ini akan menghapus Data SP3 secara permanen." class="xhr dest_subcontent-element btn btn-xs btn-danger" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                       

                                    
                                 
                           </td>
                           <td>
                              01 Maret 2023
                           </td>
                           <td>
                              RKAT/2023/03/00001
                           </td>
                           <td>
                              0001/SP3/2006.2/03/2023
                           </td>
                           <td>
                              Teknik Kimia
                           </td>
                           <td>
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                           </td>
                           <td style="text-align:right;">
                              7.000.000
                           </td>
                           <td style="text-align:right;">
                              0
                           </td>
                        </tr>
                     
                        <tr class=" " style="">
                           <td>
                              4
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=24', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=24&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                          &nbsp;
                                       

                                    
                                 
                           </td>
                           <td>
                              01 Januari 2023
                           </td>
                           <td>
                              RKAT/2023/01/00002
                           </td>
                           <td>
                              0001/SP3/1000.2.03.01/01/2023
                           </td>
                           <td>
                              Manajer Teknologi Komunikasi dan Informasi
                           </td>
                           <td>
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                           </td>
                           <td style="text-align:right;">
                              5.000.000
                           </td>
                           <td style="text-align:right;">
                              5.000.000
                           </td>
                        </tr>
                     
                        <tr class="table-common-even " style="">
                           <td>
                              5
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=21', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=21&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                          &nbsp;
                                       

                                    
                                 
                           </td>
                           <td>
                              01 Januari 2023
                           </td>
                           <td>
                              RKAT/2023/07/00001
                           </td>
                           <td>
                              0001/SP3/2006.2/01/2023
                           </td>
                           <td>
                              Teknik Kimia
                           </td>
                           <td>
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                           </td>
                           <td style="text-align:right;">
                              8.000.000
                           </td>
                           <td style="text-align:right;">
                              8.000.000
                           </td>
                        </tr>
                     
                        <tr class=" " style="">
                           <td>
                              6
                           </td>
                           <td class="links" align="center">
                              
                                    <button type="button" class="btn btn-xs btn-info" onclick="showPopup('/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=detailRealisasiPencairan&amp;act=popup&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;grp=26', 'Detail Usulan SP3', 550, 378);"><i class="fa fa-eye"></i></button>
                                    
                                          <div style="display: block; float: left; margin-top: 1px;">
                                             <a href="/ekeuanganpts/index.php?mod=realisasi_pencairan_2&amp;sub=inputCetakSp3&amp;act=view&amp;typ=html&amp;ta_id=9&amp;nomor_rka=&amp;kode=&amp;jnssp3=&amp;nama=&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;ta_nama=2023&amp;active=Y&amp;open=Y&amp;page=1&amp;id=26&amp;jenis_sp3=6" class="xhr dest_subcontent-element btn btn-xs btn-default" title="Tambah Data Cetak">
                                                <img src="images/button-tindaklanjuti.gif" alt="Tambah Data Cetak">
                                             </a>
                                          </div>
                                       
                                    
                                    
                                          &nbsp;
                                       

                                    
                                 
                           </td>
                           <td>
                              21 Desember 2022
                           </td>
                           <td>
                              RKAT/2023/01/00003
                           </td>
                           <td>
                              0001/SP3/2007/12/2022
                           </td>
                           <td>
                              Fakultas Kesenian
                           </td>
                           <td>
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                           </td>
                           <td style="text-align:right;">
                              500.000
                           </td>
                           <td style="text-align:right;">
                              500.000
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
         <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">
         </div>
         = Kegiatan
      </div>
      <div style="margin:10px 0px 0px 10px;">
         <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">
         </div>
         = Output
      </div>
      <div style="margin:10px 0px 0px 10px;">
         <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFFFF; border:#D1C698 1px solid; float: left;">
         </div>
         = Komponen
      </div>
       <div style="margin:10px 0px 0px 10px;">
         <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#d33438; border:#d33438 1px solid; float: left;">
         </div>
         = SP3 UMK / Perjalanan Dinas Sudah Jatuh Tempo dan Belum Dibuat Transaksi ARL
      </div>
      <ul>
         <li>
            <b>Bold</b> = Data Aset - Tidak dapat diedit atau dihapus
         </li>
         <li>
            <img src="images/lamp-off.gif"> Transaksi Belum Dijurnalkan
         </li>
         <li>
            Klik
            <button type="button" class="btn btn-xs btn-info"><i class="fa fa-plus-circle"></i></button> untuk menambah data
         </li>
         <li>
            <button type="button" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button> = Edit data SP3
         </li>
         <li>
            <button type="button" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button> = Detail data SP3
         </li>
         <li>
            <img src="images/button-tindaklanjuti.gif"> = Input data cetak
         </li>
         <li>
            <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button> = Delete SP3
         </li>
         <li>
            <img src="images/icons/export_excel.gif"> = Export Surat SP3 dalam bentuk xls
         </li>
      </ul>
   </div>
</div>

<script type="text/javascript">
document.getElementById('cmb_tahun_anggaran').onchange   = function(){
   var taId    = this.options[this.selectedIndex].value;
   var taNama  = this.options[this.selectedIndex].text;
   var url     = '/ekeuanganpts/index.php?mod=realisasi_pencairan_2&sub=Program&act=view&typ=json&id_ta='+taId;
   GtfwAjax.loadUrl(url, false, 'json');
}

function replaceProgram(dataArray){
   $('#cmb_program_id').empty();
   $('#cmb_program_id').append($('<option></option>').val('all').text('-- SEMUA --'));
   for (var i = 0; i < dataArray.length; i++) {
      $('#cmb_program_id').append($('<option></option>').val(dataArray[i].id).text(dataArray[i].name));
   }
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>