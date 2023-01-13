<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=tabsMataAnggaran&amp;act=view&amp;typ=html">Mata Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<div class="page-header">
   <h1><span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-cube"></i>
         Daftar Mata Anggaran
      </span></h1>
</div>
<ul class="nav nav-tabs nav-tabs-simple nav-justified" id="jTabular">
   <li>
      <a href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=rkaklBas&amp;act=view&amp;typ=html">
         <b>B A S</b>
      </a>
   </li>
   <li>
      <a href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=rkaklMap&amp;act=view&amp;typ=html">
         <b>M A P</b>
      </a>
   </li>
   <li class="active">
      <a href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=MataAnggaran&amp;act=view&amp;typ=html">
         <b>M A K</b>
      </a>
   </li>
</ul>
<div class="tab-content tab-content-bordered" id="tab-container">
   <!-- FormHelper Content BEGIN -->
      



<div class="panel panel-default">
   <div class="panel-heading">
         <span class="panel-title">                
         Pencarian
         </span>
   </div>
   <form method="POST" action="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=MataAnggaran&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_tab-container form-horizontal">
   <div class="panel-body">                           
             <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                     <div class="form-group">
                         <label class="col-md-4 control-label">
                             BAS
                         </label>
                         <div class="col-md-7">
                           <input type="text" name="bas" id="src_bas" value="" class="form-control" placeholder="Bagan Akun Standar">
                         </div>
                     </div>               
                     <div class="form-group">
                         <label class="col-md-4 control-label">
                             Kode
                         </label>
                         <div class="col-md-7">
                           <input type="text" name="kode" id="src_kode" value="" class="form-control" placeholder="Kode Mata Anggaran">
                         </div>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                     <div class="form-group">
                         <label class="col-md-4 control-label">
                             Nama
                         </label>
                         <div class="col-md-7">
                           <input type="text" name="nama" id="src_nama" value="" class="form-control" placeholder="Nama Mata Anggaran">
                         </div>
                     </div> 
                     <div class="form-group">
                         <div class="col-md-offset-4 col-md-7">
                             <button type="submit" name="btnSearch" class="btn btn-primary">
                                 Tampilkan
                             </button>
                             
                             <button type="reset" class=" xhr dest_tab-container btn btn-warning" name="btnReset">
                                 Reset
                             </button>                          
                         </div>                        
                     </div>
                 
                 </div>            
             </div>
   </div>
 </form>
</div>


<div class="panel panel-default">
   
<form name="frmList" id="frmList" class="xhr_simple_form dest_tab-container" method="post" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html">
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
          <b>1</b>-<b>12</b> dari <b>12</b> &nbsp;
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
                        <a class="xhr dest_tab-container  btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=AddMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak" title="Tambah">
                        <i class="fa fa-plus-circle"></i> 
                           Tambah
                        </a>
                        
                           <button type="submit" id="btnDelete" name="btnDelete" class="btn btn-danger btn-flat">
                                 <i class="fa fa-trash"></i> 
                              Hapus
                           </button>
                        


               </div>
         </div>
         <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover">
                  <thead>
                     <tr>
                        <th rowspan="2" style="width: 20px;">
                           No
                        </th>
                        <th rowspan="2" style="width: 50px;">
                           Aksi
                        </th>
                        <th rowspan="2" style="width: 18px;">
                           <label class="custom-control custom-checkbox custom-control-blank">
                              <input type="checkbox" class="CheckBoxFW_parent custom-control-input">
                              <span class="custom-control-indicator"></span>
                           </label>
                        </th>
                        <th rowspan="2">
                           Kode
                        </th>
                        <th rowspan="2">
                           Nama
                        </th>
                        <th colspan="2">
                           Chart Of Account
                        </th>
                        <th rowspan="2">
                           Tipe
                        </th>
                        <th rowspan="2" style="width: 30px;">
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
                     </tr>
                  </thead>
                  <tbody>
                     
                           
                               <tr>
                                 <td align="center">
                                    
                                 </td>
                                 <td class="text-center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td align="center">
                                    51
                                 </td>
                                 <td>
                                    Belanja Pegawai
                                 </td>
                                 <td align="center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    1
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=17" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    515111
                                 </td>
                                 <td>
                                    Pelatihan TIK
                                 </td>
                                 <td align="center">
                                    1110100
                                 </td>
                                 <td>
                                    Kas
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    
                                 </td>
                                 <td class="text-center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td align="center">
                                    52
                                 </td>
                                 <td>
                                    Belanja Barang dan Jasa
                                 </td>
                                 <td align="center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    2
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=47" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    52120
                                 </td>
                                 <td>
                                    Belanja Keperluan Kantor
                                 </td>
                                 <td align="center">
                                    5200000
                                 </td>
                                 <td>
                                    Belanja Barang
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    3
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=10" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    525116
                                 </td>
                                 <td>
                                    Belanja Penyediaan Barang dan Jasa BLU Lainnya
                                 </td>
                                 <td align="center">
                                    3100000
                                 </td>
                                 <td>
                                    ASET NETO TIDAK TERIKAT
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    4
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=7" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    525119
                                 </td>
                                 <td>
                                    Belanja Barang Jasa
                                 </td>
                                 <td align="center">
                                    3100000
                                 </td>
                                 <td>
                                    ASET NETO TIDAK TERIKAT
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    
                                 </td>
                                 <td class="text-center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td align="center">
                                    53
                                 </td>
                                 <td>
                                    Belanja Non-Akademik
                                 </td>
                                 <td align="center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    5
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=22" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    535111
                                 </td>
                                 <td>
                                    Belanja Pengelolaan Kegiatan Kemahasiswaan
                                 </td>
                                 <td align="center">
                                    5400002
                                 </td>
                                 <td>
                                    Biaya Kegiatan Kemahasiswaan
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    6
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=26" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    535112
                                 </td>
                                 <td>
                                    Belanja Penerimaan Mahasiswa Baru
                                 </td>
                                 <td align="center">
                                    5400001
                                 </td>
                                 <td>
                                    Biaya Penerimaan Mahasiswa Baru
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    
                                 </td>
                                 <td class="text-center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td align="center">
                                    54
                                 </td>
                                 <td>
                                    Belanja Akademik
                                 </td>
                                 <td align="center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    7
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=30" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    545111
                                 </td>
                                 <td>
                                    Belanja Wisuda Mahasiswa
                                 </td>
                                 <td align="center">
                                    5300003
                                 </td>
                                 <td>
                                    Biaya Wisuda Mahasiswa
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    8
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=32" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    545112
                                 </td>
                                 <td>
                                    Belanja Kunjungan Industri Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam
                                 </td>
                                 <td align="center">
                                    5300002
                                 </td>
                                 <td>
                                    Biaya Kunjungan Indutri Mahasiswa
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    9
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=35" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                             <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" value="35" class="CheckBoxFW_child custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                             <input type="hidden" name="name[35]" value="545113 - Belanja Kunjungan Industri Fakultas Teknologi Industri">
                                          
                                     
                                 </td>
                                 <td align="center">
                                    545113
                                 </td>
                                 <td>
                                    Belanja Kunjungan Industri Fakultas Teknologi Industri
                                 </td>
                                 <td align="center">
                                    5300002
                                 </td>
                                 <td>
                                    Biaya Kunjungan Indutri Mahasiswa
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    10
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=36" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    545114
                                 </td>
                                 <td>
                                    Belanja Lomba Mahasiswa
                                 </td>
                                 <td align="center">
                                    5300004
                                 </td>
                                 <td>
                                    Biaya Lomba
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    11
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=37" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    545115
                                 </td>
                                 <td>
                                    Belanja Seminar Umum
                                 </td>
                                 <td align="center">
                                    5300005
                                 </td>
                                 <td>
                                    Biaya Seminar
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    
                                 </td>
                                 <td class="text-center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td align="center">
                                    57
                                 </td>
                                 <td>
                                    Belanja Kebutuhan Lab
                                 </td>
                                 <td align="center">
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                 </td>
                              </tr>
                           
                               <tr>
                                 <td align="center">
                                    12
                                 </td>
                                 <td class="text-center">
                                    
                                       <a class="xhr dest_tab-container btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_mata_anggaran&amp;sub=EditMataAnggaran&amp;act=view&amp;typ=html&amp;bas_kode=&amp;kode=&amp;nama=&amp;page=1&amp;data_tipe=mak&amp;data_id=44" title="Ubah">
                                             <i class="fa fa-pencil"></i>
                                       </a>
                                     
                                 </td>
                                 <td>
                                    
                                       
                                          <label class="custom-control custom-checkbox custom-control-blank">
                                                <input type="checkbox" name="id[]" class="custom-control-input" disabled="">
                                                <span class="custom-control-indicator"></span>
                                             </label>
                                          
                                     
                                 </td>
                                 <td align="center">
                                    571123
                                 </td>
                                 <td>
                                    Belanja Komputer
                                 </td>
                                 <td align="center">
                                    3101000
                                 </td>
                                 <td>
                                    Aset Neto Tidak Terikat Tahun Berjalan
                                 </td>
                                 <td>
                                    Belanja
                                 </td>
                                 <td style="width: 150px; text-align: center">
                                    
                                       
                                             <span class="badge badge-success">Aktif</span>
                                          
                                     
                                 </td>
                              </tr>
                           
                        
                  </tbody>
               </table>
            </div>
   </div>
</form>
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
var formObj       = document.getElementById('frmList');
if(typeof(formObj) != 'undefined' && formObj != null){
   for (var i = 0; i < formObj.length; i++){
      CheckBoxFW_initiate(formObj[i]);
   }
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>
    
<script type="text/javascript">
    $(document).ready(function(){
       $("ul#jTabular li:last-child").addClass('active');
       var dataMak       = '/ekeuanganpts/index.php?mod=finansi_mata_anggaran&sub=MataAnggaran&act=view&typ=html';
       GtfwAjax.replaceContentWithUrl("tab-container", dataMak+'&ascomponent=1');
       console.log(dataMak);
       $("ul#jTabular li a").click(function(){
          // do something
          var activeTab = $(this).attr("href");
          $("ul#jTabular li").removeClass('active');
          $(this).parent().addClass('active');
          //$("#tab-container").html(''+activeTab+'');
          GtfwAjax.replaceContentWithUrl("tab-container", ""+activeTab+"&ascomponent=1")
          //$("ul#jTabular li:first").removeClass('active');
          return false;
       });
    });
</script>
    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>