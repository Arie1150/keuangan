<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=508&amp;mid=508">Target Penerimaan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html">Pengajuan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Pengajuan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<style type="text/css" media="screen">
/* <![CDATA[ */
   .table-common tbody tr.level_approved td:first-child,
   .table-common tbody tr.hoverTd.level_approved_none:hover td:first-child{
      border-left-color: #43ac6a !important;
      border-left-width: 5px;
      border-left-style: inset;
   }

   .table-common tbody tr.level_request td:first-child,
   .table-common tbody tr.hoverTd.level_request_none:hover td:first-child{
      border-left-color: #f08a24 !important;
      border-left-width: 5px;
      border-left-style: inset;
   }

   .table-common tbody tr.level_reject td:first-child,
   .table-common tbody tr.hoverTd.level_reject_none:hover td:first-child{
      border-left-color: #f04124 !important;
      border-left-width: 5px;
      border-left-style: inset;
   }

   .table-common tbody tr.hoverTd.level_request_none:hover td{
      background-color: rgba(230,230,0, 0.4) !important;
   }
/* ]]> */
</style>

<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
               
               <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="form-group">
                     <label class="control-label col-md-3">
                        Tahun Anggaran
                     </label>
                     <div class="col-md-4">
                           
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="cmb_tahun_anggaran" class="form-control">
	
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
                     <label class="control-label col-md-3">
                        Unit Kerja
                     </label>
                     <div class="col-md-9">
                                                            
                                 <div class="input-group">
                                    <input type="hidden" name="unit_id" id="src_unit_id" value="1">
                                    <input type="text" name="unit_nama" id="src_unit_nama" readonly="" value="UNIVERSITAS" class="form-control">
                                    <span class="input-group-btn">
                                       <button type="button" class="btn btn-default" onclick="showPopup('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=popupUnitKerja&amp;act=view&amp;typ=html', 'Unit Kerja', 600, 550);">
                                          <i class="fa fa-search"></i>
                                       </button>
                                    </span>   
                                 </div>                                 
                              
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="form-group">
                     <label class="control-label col-md-3">
                        Kode /
                        Nama
                     </label>
                     <div class="col-md-9">
                           <input type="text" name="kodenama" value="" class="form-control">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="btncari" class="btn btn-primary">Tampilkan</button>
                        <button type="reset" class="btn btn-warning" name="btnReset">Reset</button> 
                     </div>                        
                  </div>
               </div>
			   </div>               
			   </form>
		</div>
   </div>

<div class="panel panel-default">
		<div class="panel-body">
<form method="POST" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element" name="form_list" id="form_list">
   <input type="hidden" name="control_label" value="Target Penerimaan">
   <input type="hidden" name="control_action" value="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=deleteRencanaPenerimaan&amp;act=do&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;kode=&amp;ta_nama=2023">
   <input type="hidden" name="control_return" value="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html&amp;search=1&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;kode=&amp;ta_nama=2023">	
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
			<a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;kode=&amp;ta_nama=2023" title="Tambah Data"><i class="fa fa-plus-circle"></i>
				Tambah Data
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
            <th width="5">
               No
            </th>
            <th width="85">
               Aksi
            </th>
            <th width="5">		                   					
               <label class="custom-control custom-checkbox custom-control-blank">
                  <input type="checkbox" class="CheckBoxFW_parent custom-control-input">
                  <span class="custom-control-indicator"></span>
               </label>
            </th>
            <th>
               Kode 
               <i class="fa fa-question-circle text-muted" id="popoverKode" data-state="info" onmouseover="showPopover(this.id, 'Kode', 'Kolom Kode menampilkan data Kode Unit Kerja dan Kode Pos Penerimaan', 'top');"></i>
            </th>
            <th>
               Nama 
               <i class="fa fa-question-circle text-muted" id="popoverNama" data-state="info" onmouseover="showPopover(this.id, 'Nama', 'Kolom Nama menampilkan data Nama Unit Kerja dan Nama Pos Penerimaan', 'top');"></i>
            </th>
            <th>
               Total Penerimaan (Rp)
            </th>
         </tr>
      </thead>
      <tbody>
         
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2001.2
                  </td>
                  <td>
                     Prodi Akuntansi
                     
                  </td>
                  <td style="text-align:right;">
                     2.035.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even level_approved" style="">
                  <td align="center">
                     1
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=26');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400009
                  </td>
                  <td>
                     Penerimaan Mahasiswa Baru
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan Mahasiswa Baru Prodi Akuntansi Angkatan 2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     1.125.000.000
                  </td>
               </tr>
               
               <tr class=" level_approved" style="">
                  <td align="center">
                     2
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=24');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400018
                  </td>
                  <td>
                     perpanjangan Studi S2
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (-)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     10.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even level_approved" style="">
                  <td align="center">
                     3
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=21');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400021
                  </td>
                  <td>
                     Penerimaan SPP 2023/2024
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan SPP 2023/2024 Prodi Akuntansi)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     900.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2005
                  </td>
                  <td>
                     Fakultas Ilmu Sosial dan Ilmu Politik
                     
                  </td>
                  <td style="text-align:right;">
                     490.000.000
                  </td>
               </tr>
               
               <tr class=" level_approved" style="">
                  <td align="center">
                     4
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=23');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400003
                  </td>
                  <td>
                     Penerimaan SPP Ganjil
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan SPP Ganjil FISIPOL angkatan 2021/2022)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     490.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2006.2
                  </td>
                  <td>
                     Teknik Kimia
                     
                  </td>
                  <td style="text-align:right;">
                     1.700.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even level_approved" style="">
                  <td align="center">
                     5
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=17');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400009
                  </td>
                  <td>
                     Penerimaan Mahasiswa Baru
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan Mahasiswa Baru 2023/2024)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     1.200.000.000
                  </td>
               </tr>
               
               <tr class=" level_approved" style="">
                  <td align="center">
                     6
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=19');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400020
                  </td>
                  <td>
                     Penerimaan Jasa Fasilitas Laboratorium
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan Jasa Fasilitas Laboratorium T. Kimia 2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     500.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2006.3
                  </td>
                  <td>
                     Teknik Komputer
                     
                  </td>
                  <td style="text-align:right;">
                     1.200.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even level_request" style="">
                  <td align="center">
                     7
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=EditRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;kode=&amp;ta_nama=2023&amp;data_id=25" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Ubah Data">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=25');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" name="id[]" class="CheckBoxFW_child custom-control-input" value="25">
                                 <span class="custom-control-indicator"></span>
                                 <input type="hidden" name="name[25]" value="Penerimaan Mahasiswa Baru (Penerimaan Mahasiswa Baru Teknik Komputer TA 2023)">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400009
                  </td>
                  <td>
                     Penerimaan Mahasiswa Baru
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan Mahasiswa Baru Teknik Komputer TA 2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     1.200.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2007
                  </td>
                  <td>
                     Fakultas Kesenian
                     
                  </td>
                  <td style="text-align:right;">
                     2.160.000.000
                  </td>
               </tr>
               
               <tr class=" level_approved" style="">
                  <td align="center">
                     8
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=22');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400009
                  </td>
                  <td>
                     Penerimaan Mahasiswa Baru
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Penerimaan mahasiswa baru untuk Fakultas Seni Angkatan 2022/2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     2.160.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     2008
                  </td>
                  <td>
                     Fakultas Matematika dan Ilmu Pengetahuan Alam
                     
                  </td>
                  <td style="text-align:right;">
                     250.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even level_reject" style="">
                  <td align="center">
                     9
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=EditRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;kode=&amp;ta_nama=2023&amp;data_id=20" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Ubah Data">
                                       <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=20');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" name="id[]" class="CheckBoxFW_child custom-control-input" value="20">
                                 <span class="custom-control-indicator"></span>
                                 <input type="hidden" name="name[20]" value="Penerimaan Kunjungan Industri Fakultas MIPA (Kunjungan Industri FMIPA 2023)">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400014
                  </td>
                  <td>
                     Penerimaan Kunjungan Industri Fakultas MIPA
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (Kunjungan Industri FMIPA 2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     250.000.000
                  </td>
               </tr>
               
               <tr class="table-common-even1 " style="font-weight: bold;">
                  <td align="center">
                     
                  </td>
                  <td class="links" align="center">
                     
                           &nbsp;
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           &nbsp;
                        
                     </label>
                  </td>
                  <td align="right">
                     1000.3.01.02
                  </td>
                  <td>
                     Manajer Pemberdayaan dan Pengabdian Masyarakat
                     
                  </td>
                  <td style="text-align:right;">
                     100.000.000
                  </td>
               </tr>
               
               <tr class=" level_approved" style="">
                  <td align="center">
                     10
                  </td>
                  <td class="links" align="center">
                     
                           
                                 <a href="javascript:void(0);" class="btn btn-xs btn-default" title="Data tidak dapat diubah">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                              

                           <a href="javascript:void(0);" onclick="getDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;data_id=18');" class="btn btn-xs btn-default" title="Detail Data">
                                 <i class="fa fa-eye"></i>
                           </a>
                        
                  </td>
                  <td align="center">
                        <label class="custom-control custom-checkbox custom-control-blank">
                     
                           
                                 <input type="checkbox" disabled="">
                              
                        
                     </label>
                  </td>
                  <td align="right">
                     400019
                  </td>
                  <td>
                     Penerimaan Hibah
                     
                     <label style="font-weight: bold; display: block; width: 100%; padding-top: 8px; font-style: italic;">
                        (PKM Dikti 2023)
                     </label>
                     
                  </td>
                  <td style="text-align:right;">
                     100.000.000
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

function getDetailRencanaPenerimaan(urlDest){
   var titlePopup = 'Detail ';
   titlePopup += 'Target Penerimaan';
   showPopup(urlDest, titlePopup , 940, 500);
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>   