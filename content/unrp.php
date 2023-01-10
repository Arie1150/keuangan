<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=pembalikApprovalPencairan&amp;act=view&amp;typ=html">Un-approval Rencana Pencairan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Pembalik Persetujuan SP3
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
      <form method="POST" name="filterbox" action="/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=pembalikApprovalPencairan&amp;act=view&amp;typ=html" class="dataquest xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Tahun Periode
                     </label>
                     <div class="col-md-5">
                        
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
                              Unit Kerja
                           </label>
                           <div class="col-md-9">
                              <div class="input-group">  
                                 <input type="hidden" name="unitkerja" id="unitkerja" value="1">
                                 <input type="text" name="unitkerja_label" id="unitkerja_label" value="UNIVERSITAS" size="40" readonly="" class="form-control">
                                 <span class="input-group-btn btn-group-align-top">
                                    <button type="button" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html', 'List Unit Kerja', 650, 550)" class="btn btn-default" nama="btn-unit">
                                       <i class="fa fa-search"></i>
                                    </button>
                                 </span>
                              </div>
                           </div>
                        </div>
                     
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Kegiatan
                     </label>
                     <div class="col-md-9">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="program" id="cmb_program" class="form-control">
	
		
	       
	<option value="">-- SEMUA --</option><option value="27">Kegiatan Pendidikan Perguruan Tinggi</option></select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Nomor RKAT
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="nomor_rka" value="" class="form-control">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        No. SP3
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="nosp3" value="" class="form-control">
                     </div>
                  </div>   
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Kode
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="kode" value="" class="form-control">
                     </div>
                  </div>       
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Nama
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="nama" value="" class="form-control">
                     </div>
                  </div>     
                  <div class="form-group">
                     <label class="col-md-3 control-label">
                        Jenis SP3
                     </label>
                     <div class="col-md-5">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="jnssp3" class="form-control" id="jenis_sp3">
	
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
                  <div class="form-group" style="display:none;">
                     <label class="col-md-3 control-label">
                        Jenis Kegiatan
                     </label>
                     <div class="col-md-5">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="jenis_kegiatan" class="form-control" id="jenis_kegiatan">
	
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
                        Status
                     </label>
                     <div class="col-md-5">
                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="status_approval" id="cmb_status_approval" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="Belum">Belum Disetujui</option>
	
		<option value="Ya">Disetujui</option>
	
		<option value="Tidak">Ditolak</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-offset-3 col-md-9">
                     <button type="submit" name="btncari" class="btn btn-primary">Tampilkan</button>
                     <button type="reset" name="btnReset" class="btn btn-warning">Reset</button> 
                     </div>                        
                  </div>
               </div>            
            </div>
      </form>
   </div>
</div>
<div class="panel panel-default">
   <div class="panel-body">      
      
   <form method="POST" action="" class="xhr_simple_form dest_subcontent-element" id="form_list">
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
      </div>
 
      <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                  <th width="5" rowspan="2">
                     No
                  </th>
                  <th style="width: 80px" rowspan="2">
                     Aksi
                  </th>
                  <th rowspan="2" style="width:120px">
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
                  <th colspan="2">
                     Nominal (Rp.)
                  </th>
                  <th rowspan="2" style="width: 20px;">
                     Status
                  </th>
               </tr>
               <tr>
                  <th>
                     Kode
                  </th>
                  <th>
                     Nama
                  </th>
                  <th style="width: 160px;">
                     Nominal Usulan
                  </th>
                  <th style="width: 160px;">
                     Nominal Setuju
                  </th>
               </tr>
            </thead>
            <tbody>
               
                     
                        <tr class="table-common-even1" style="font-weight: bold;">
                           <td align="center">
                              
                           </td>
                           <td style="text-align:center;" class="links">
                              
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
                           <td style="text-align:center;" class="links">
                              	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even2" style="">
                           <td align="center">
                              
                           </td>
                           <td style="text-align:center;" class="links">
                              
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
                           <td style="text-align:center;" class="links">
                              	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even" style="">
                           <td align="center">
                              1
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=25', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                              
                           </td>
                           <td>
                              1 Agustus 2023
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="" style="">
                           <td align="center">
                              2
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=23', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                              
                           </td>
                           <td>
                              1 Juni 2023
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even" style="">
                           <td align="center">
                              3
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=22', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                              
                           </td>
                           <td>
                              1 Maret 2023
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-default">Belum Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="" style="">
                           <td align="center">
                              4
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=24', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                              
                           </td>
                           <td>
                              1 Januari 2023
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even" style="">
                           <td align="center">
                              5
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=21', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                              
                           </td>
                           <td>
                              1 Januari 2023
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="" style="">
                           <td align="center">
                              6
                           </td>
                           <td style="text-align:center;" class="links">
                              
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Detail" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=detailPencairan&amp;act=view&amp;typ=html&amp;data_id=26', 'Data Detail', 900, 600);">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 
                                    <a href="/ekeuanganpts/index.php?mod=pembalik_approval_pencairan&amp;sub=inputPembalikApprovalPencairan&amp;act=view&amp;typ=html&amp;nosp3=&amp;jnssp3=&amp;nomor_rka=&amp;kode=&amp;nama=&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;program_id=&amp;jenis_kegiatan=&amp;status_approval=&amp;ta_nama=2023&amp;data_id=26" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                       <i class="fa fa-undo"></i>
                                    </a>
                                 
                              
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
                           <td style="text-align:center;" class="links">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                  
            </tbody>
         </table>
      </div>
      </form>
   </div>
</div>
<div class="panel panel-default panel-petunjuk">
   <div class="panel-heading">
      <span class="panel-title">Petunjuk</span>
   </div>
   <div class="panel-body">
      <div style="margin:10px 0px 0px 10px;">
            <b>Bold</b> = Data Aset
      </div>
      <div style="margin:10px 0px 0px 10px;">
         Klik <i class="btn btn-xs btn-default fa fa-eye"></i> untuk melihat detail data
      </div>
      <div style="margin:10px 0px 0px 10px;">
         Klik <i class="btn btn-xs btn-warning fa fa-undo"></i> untuk melakukan pembatalan persetujuan
      </div>
   </div>
</div>
<script type="text/javascript">
var dataProgram   = {"1":[{"id":"1","name":"Penyediaan Dana Bantuan Operasional untuk Perguruan Tinggi Negeri dan bantuan Pendanaan PTN-BH"}],"6":[{"id":"11","name":"Pertunjukkan Opera 2022"},{"id":"10","name":"Pertunjukkan Teater 2022"},{"id":"20","name":"Seminar"},{"id":"19","name":"Seminar Umum"},{"id":"14","name":"Wisuda ke-28"},{"id":"23","name":"Pelatihan Pengembangan SDM"},{"id":"8","name":"Pelatihan TIK"},{"id":"16","name":"Pembelajaran Tatap Muka"}],"9":[{"id":"27","name":"Kegiatan Pendidikan Perguruan Tinggi"}],"13":[{"id":"25","name":"Penyediaan Dana Bantuan Operasional Perguruan Tinggi Negeri"}]};
var form          = document.forms['filterbox'];
var formElements  = form.elements;
var cmbTa         = formElements.cmb_tahun_anggaran;

var loadProgram   = function(id){
   var taId       = cmbTa.options[cmbTa.selectedIndex].value;
   var cmbProgram = formElements.cmb_program;

   var childObj   = cmbProgram.options;
   for (var o = childObj.length - 1; o >= 0; o--) {
      cmbProgram.remove(childObj[o])
   };
   var emptyOption   = document.createElement('option');
   emptyOption.value = '';
   emptyOption.text  = '-- SEMUA --';
   cmbProgram.add(emptyOption);

   var data    = dataProgram[taId];
   if(typeof(data) != 'undefined' && data != null){
      for (var i = data.length - 1; i >= 0; i--) {
         var option  = document.createElement('option');
         option.value   = data[i].id;
         option.text    = data[i].name;
         if(data[i].id == id){
            option.selected   = true;
         }
         cmbProgram.add(option);
      };
   }
}

loadProgram('');
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>   