<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=Komponen&amp;act=view&amp;typ=html">Standar Biaya</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<div class="page-header">
   <h1><span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-cube"></i>
         Standar Biaya
      </span></h1>
</div>


<div class="panel panel-default">
     <div class="panel-heading">
         <span class="panel-title">
            Pencarian
         </span>
     </div>
     <div class="panel-body">
         <form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=komponen&amp;sub=Komponen&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
               <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                         <div class="form-group">
                             <label class="col-md-4 control-label">
                                 Tahun Anggaran
                             </label>
                             <div class="col-md-7">
                                 
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="ta_id" id="cmb_tahun_anggaran" class="form-control">
	
		<option value="12">2025</option>
	
		<option value="10">2024</option>
	
		<option value="9" selected="">2023</option>
	
		<option value="6">2022</option>
	
		<option value="1">2021</option>
	
		<option value="13">2020</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                             </div>
                         </div>               
                         <div class="form-group">
                             <label class="col-md-4 control-label">
                                 Nama
                             </label>
                             <div class="col-md-7">
                                 <input type="text" name="nama_komponen" id="nama_komponen" class="form-control" value="">
                             </div>
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                         <div class="form-group">
                             <label class="col-md-4 control-label">
                                 Aktif
                             </label>
                             <div class="col-md-7">
                                 
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="is_aktif" id="cmb_prioritas" class="form-control">
	
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
                             <div class="col-md-offset-4 col-md-7">
                                 <button type="submit" name="btncari" class="btn btn-primary">
                                     Tampilkan »
                                 </button>
                                 
                                 <button type="reset" class=" xhr dest_tab-container btn btn-warning" name="btnReset">
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
      
      <form method="POST" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=ConfirmDelete&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element" id="form_list">         
      <input type="hidden" name="control_label" value="Standar Biaya">
      <input type="hidden" name="control_action" value="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeleteKomponen&amp;act=do&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1">
      <input type="hidden" name="control_return" value="/ekeuanganpts/index.php?mod=komponen&amp;sub=Komponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1">
      <div class="btn-toolbar">
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
          <b>1</b>-<b>16</b> dari <b>16</b> &nbsp;
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
            <a href="/ekeuanganpts/index.php?mod=komponen&amp;sub=templateImport&amp;act=view&amp;typ=xlsx&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" class="btn btn-flat btn-warning btn-fwn mr-5 mb-5" title="Download Template Import" target="_blank">
               <i class="fa fa-download"></i>
               Download
            </a>
            <a class="xhr dest_subcontent-element btn btn-flat btn-success btn-fwn mr-5 mb-5" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=importData&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Import Data Standar Biaya">
               <i class="fa fa-upload"></i>
               Import
            </a>
            <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5 mb-5" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Tambah">                     
				   <i class="fa fa-plus-circle"></i>
               Tambah
            </a>
            <a href="/ekeuanganpts/index.php?mod=komponen&amp;sub=Komponen&amp;act=view&amp;typ=xlsx&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Export ke Excel" target="_blank" class="btn btn-flat btn-default btn-fwn mr-5 mb-5">
               <i class="fa fa-file-excel-o"></i>
               Excel
            </a>
            <button type="submit" id="btnHapus" name="btnHapus" class="btn btn-danger btn-flat mb-5">  
               <i class="fa fa-trash"></i>                   
               Hapus
            </button>
         </div>
      </div>

      <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover">
         <thead>
            <tr>
               <th width="5" rowspan="2">
                  No
               </th>
               <th width="120" rowspan="2">
                  Aksi
               </th>
               <th width="5" rowspan="2">
                     <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" class="CheckBoxFW_parent custom-control-input">
                        <span class="custom-control-indicator"></span>
                     </label>
               </th>
               <th colspan="2">
                  Standar Biaya
               </th>
               <th rowspan="2">
                  Satuan
               </th>
               <th rowspan="2">
                  Keterangan
               </th>
               <th style="display: none;" rowspan="2">
                  Formula
               </th>
               <th rowspan="2">
                  Harga Satuan
               </th>
               <th colspan="2">
                  Mata Anggaran
               </th>
   
               <th rowspan="2">
                  Sumber Dana
               </th>
               <th rowspan="2">
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
               <th>
                  Kode
               </th>
               <th>
                  Nama
               </th>
            </tr>
         </thead>
         <tbody>
            
                  
                  <tr class="table-common-even">
                     <td align="center">
                        1
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=77&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=77&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="77" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0074
                     </td>
                     <td>
                        Kegiatan PMB
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        -
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        100.000.000
                     </td>
                     <td class="text-center">
                        535112
                     </td>
                     <td>
                        Belanja Penerimaan Mahasiswa Baru
                     </td>
                     <td class="text-center">
                        Universitas
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        2
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=76&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=76&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="76" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0073
                     </td>
                     <td>
                        Honor Panitia PMB
                     </td>
                     <td class="text-center">
                        OK
                     </td>
                     <td>
                        Honor Panitia PMB
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        100.000
                     </td>
                     <td class="text-center">
                        571123
                     </td>
                     <td>
                        Belanja Komputer
                     </td>
                     <td class="text-center">
                        Universitas
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        3
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=75&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=75&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="75" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0072
                     </td>
                     <td>
                        Pemeliharaan Perangkat IT
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        Maintenance Perangkat IT ( Printer, PC, Laptop, PC, Proyektor, dan Perangkat Jaringan )
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        45.000.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        4
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=74&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=74&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="74" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0071
                     </td>
                     <td>
                        Honor Dosen Pembimbing 1
                     </td>
                     <td class="text-center">
                        OK
                     </td>
                     <td>
                        Dosen Pembimbing Tugas Akhir
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        600.000
                     </td>
                     <td class="text-center">
                        535111
                     </td>
                     <td>
                        Belanja Pengelolaan Kegiatan Kemahasiswaan
                     </td>
                     <td class="text-center">
                        Mahasiswa
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        5
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=73&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=73&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="73" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0070
                     </td>
                     <td>
                        Cetak Modul Praktikum Teknik Kimia
                     </td>
                     <td class="text-center">
                        Buah
                     </td>
                     <td>
                        Modul Praktikum OTK 1 Praktikum Kimia Lanjut
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        80.000
                     </td>
                     <td class="text-center">
                        525119
                     </td>
                     <td>
                        Belanja Barang Jasa
                     </td>
                     <td class="text-center">
                        Mahasiswa
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        6
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=72&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=72&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="72" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0069
                     </td>
                     <td>
                        SPPD Perjalanan
                     </td>
                     <td class="text-center">
                        Kegiatan
                     </td>
                     <td>
                        Biaya Perjalanan Dinas Dalam Negeri
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        8.000.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        7
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=71&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=71&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="71" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0068
                     </td>
                     <td>
                        Perawatan Laboratorium
                     </td>
                     <td class="text-center">
                        Tahun
                     </td>
                     <td>
                        Lab. Teknik Kimia
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        7.000.000
                     </td>
                     <td class="text-center">
                        525119
                     </td>
                     <td>
                        Belanja Barang Jasa
                     </td>
                     <td class="text-center">
                        Mahasiswa
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        8
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=70&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=70&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="70" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0067
                     </td>
                     <td>
                        Seminar Nasional
                     </td>
                     <td class="text-center">
                        Kegiatan
                     </td>
                     <td>
                        Kegiatan Operasional Kampus
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        11.000.000
                     </td>
                     <td class="text-center">
                        545115
                     </td>
                     <td>
                        Belanja Seminar Umum
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        9
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=69&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=69&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="69" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_69" value="69" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[69]" value="Pengembangan Website dan Database">
                           
                     </td>
                     <td class="text-center">
                        0066
                     </td>
                     <td>
                        Pengembangan Website dan Database
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        Pengadaan Website
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        30.000.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        10
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=68&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=68&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="68" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_68" value="68" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[68]" value="Kegiatan BEM">
                           
                     </td>
                     <td class="text-center">
                        0065
                     </td>
                     <td>
                        Kegiatan BEM
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        Non Kompetisi
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        5.000.000
                     </td>
                     <td class="text-center">
                        535111
                     </td>
                     <td>
                        Belanja Pengelolaan Kegiatan Kemahasiswaan
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        11
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=67&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=67&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="67" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_67" value="67" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[67]" value="Kegiatan UKM">
                           
                     </td>
                     <td class="text-center">
                        0064
                     </td>
                     <td>
                        Kegiatan UKM
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        Non Kompetisi
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        3.000.000
                     </td>
                     <td class="text-center">
                        535111
                     </td>
                     <td>
                        Belanja Pengelolaan Kegiatan Kemahasiswaan
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        12
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=66&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=66&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="66" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                           <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_" value="" class="CheckBoxFW_child custom-control-input" disabled="">
                                 <span class="custom-control-indicator"></span>
                              </label>
                           
                     </td>
                     <td class="text-center">
                        0063
                     </td>
                     <td>
                        Perpanjangan akun Hosting/Domain
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        -
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        5.000.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        13
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=65&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=65&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="65" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_65" value="65" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[65]" value="Pembelian License Windows">
                           
                     </td>
                     <td class="text-center">
                        0062
                     </td>
                     <td>
                        Pembelian License Windows
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        License Windows PC/Laptop Pegawai
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        500.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        14
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=64&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=64&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="64" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_64" value="64" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[64]" value="Konsumsi Tamu">
                           
                     </td>
                     <td class="text-center">
                        0061
                     </td>
                     <td>
                        Konsumsi Tamu
                     </td>
                     <td class="text-center">
                        OH
                     </td>
                     <td>
                        Tamu Eksternal
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        30.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="table-common-even">
                     <td align="center">
                        15
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=63&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=63&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="63" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_63" value="63" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[63]" value="Konsumsi Rapat">
                           
                     </td>
                     <td class="text-center">
                        0060
                     </td>
                     <td>
                        Konsumsi Rapat
                     </td>
                     <td class="text-center">
                        OH
                     </td>
                     <td>
                        Rapat Rutin Pegawai
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        25.000
                     </td>
                     <td class="text-center">
                        52120
                     </td>
                     <td>
                        Belanja Keperluan Kantor
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
                  <tr class="">
                     <td align="center">
                        16
                     </td>
                     <td class="text-center">
                        <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=62&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" title="Ubah Data">
                           <i class="fa fa-pencil"></i>
                        </a>
                        <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=InputKomponen&amp;act=view&amp;typ=html&amp;search=1&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;dataId=62&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1&amp;isCopy=yes" title="Salin Data">
                           <i class="fa fa-copy"></i>
                        </a>
                       <a class="btn btn-danger btn-xs set_active" href="/ekeuanganpts/index.php?mod=komponen&amp;sub=DeAktif&amp;act=do&amp;typ=json&amp;nama=&amp;is_aktif=all&amp;ta_id=9&amp;page=1" data-id="62" title="Set Tidak Aktif">
                           <i class="fa fa-close"></i>
                       </a>
                        <!-- a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a-->
                     </td>
                     <td>
                        
                              <label class="custom-control custom-checkbox custom-control-blank">
                                 <input type="checkbox" name="id[]" id="komponen_id_62" value="62" class="CheckBoxFW_child custom-control-input">
                                 <span class="custom-control-indicator"></span>
                              </label>
                              <input type="hidden" name="name[62]" value="Kegiatan Internal Audit">
                           
                     </td>
                     <td class="text-center">
                        0059
                     </td>
                     <td>
                        Kegiatan Internal Audit
                     </td>
                     <td class="text-center">
                        Paket
                     </td>
                     <td>
                        -
                     </td>
                     <td style="display: none;">
                        1
                     </td>
                     <td style="text-align:right">
                        5.000.000
                     </td>
                     <td class="text-center">
                        525119
                     </td>
                     <td>
                        Belanja Barang Jasa
                     </td>
                     <td class="text-center">
                        Yayasan
                     </td>
                      <td align="center">                      
                        <span class="label label-success">Aktif</span>
                     </td>
                  </tr>
                  
               
         </tbody>
         </table>
      </div>
   </form>
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
var formObj       = document.getElementById('form_list');
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