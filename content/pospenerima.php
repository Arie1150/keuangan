<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=KodePenerimaan&amp;act=view&amp;typ=html">Pos Penerimaan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<div class="page-header">
   <h1>
      <span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-cube"></i>
         Daftar Pos Penerimaan
      </span>
   </h1>
</div>

<div class="panel panel-default">
   <div class="panel-heading">
      <span class="panel-title">
         Pencarian
      </span>
   </div>
   <div class="panel-body">
      <form method="POST" name="frmKegiatan" action="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=kodePenerimaan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Kode
                  </label>
                  <div class="col-md-9">
                     <input type="text" name="kode" value="" class="form-control">
                  </div>
               </div>         
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Nama
                  </label>
                  <div class="col-md-9">
                     <input type="text" name="nama" value="" class="form-control">
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
      <form method="post" action="" class="xhr_simple_form dest_subcontent-element" id="form_list">
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
               <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5 mb-5" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html" title="Tambah Data"><i class="fa fa-plus-circle"></i> Tambah Data </a>
            </div>
         </div>
          
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
               <thead>
                  <tr>
                     <th width="5">No</th>	                            
                     <th width="120">Aksi</th>
                     <th>
                        Kode 
                        <i class="fa fa-question-circle text-muted" id="popoverKode" data-state="info" onmouseover="showPopover(this.id, 'Kode', 'Kolom Kode menampilkan data Kode Pos Penerimaan', 'top');"></i>
                     </th>
                     <th>
                        Nama 
                        <i class="fa fa-question-circle text-muted" id="popoverNama" data-state="info" onmouseover="showPopover(this.id, 'Nama', 'Kolom Nama menampilkan data Nama Pos Penerimaan', 'top');"></i>
                     </th>
                     <th>Chart Of Account</th>
                     <th>MAP</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  
                        
                        <tr>
                           <td class="text-center">1</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=1&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=1&amp;label=Kode Penerimaan&amp;dataName=Penerimaan SPP Ganjil" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400003</td>
                           <td>Penerimaan SPP Ganjil</td>
                           <td> - </td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">2</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=2&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=2&amp;label=Kode Penerimaan&amp;dataName=Penerimaan SPP Genap" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400004</td>
                           <td>Penerimaan SPP Genap</td>
                           <td> - </td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">3</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=3&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=3&amp;label=Kode Penerimaan&amp;dataName=Sewa Gedung" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400005</td>
                           <td>Sewa Gedung</td>
                           <td>5300000 - Belanja Kemahasiswaan</td>
                           <td>
                              423313 - Pendapatan Lainnya 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">4</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=4&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=4&amp;label=Kode Penerimaan&amp;dataName=Penerimaan UKT 1 Angk. 2020/2021" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400006</td>
                           <td>Penerimaan UKT 1 Angk. 2020/2021</td>
                           <td> - </td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">5</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=5&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=5&amp;label=Kode Penerimaan&amp;dataName=Penerimaan UKT 2 Angk. 2020/2021" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400007</td>
                           <td>Penerimaan UKT 2 Angk. 2020/2021</td>
                           <td> - </td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">6</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=6&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=6&amp;label=Kode Penerimaan&amp;dataName=Penerimaan SPP Genap" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400005</td>
                           <td>Penerimaan SPP Genap</td>
                           <td> - </td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">7</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=7&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=7&amp;label=Kode Penerimaan&amp;dataName=Uang Pendaftaran" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400005</td>
                           <td>Uang Pendaftaran</td>
                           <td> - </td>
                           <td>
                              423313 - Pendapatan Lainnya 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-danger">Tidak Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">8</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=8&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=8&amp;label=Kode Penerimaan&amp;dataName=Penerimaan SPP 2022/2023" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400008</td>
                           <td>Penerimaan SPP 2022/2023</td>
                           <td>4101000 - Penerimaan SPP Mahasiswa</td>
                           <td>
                              423311 - Pendapatan Uang Pendidikan 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">9</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=9&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=9&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Mahasiswa Baru" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400009</td>
                           <td>Penerimaan Mahasiswa Baru</td>
                           <td>4201000 - Pendapatan Penerimaan Mahasiswa Baru</td>
                           <td>
                              443312 - Pendapatan Penerimaan Mahasiswa Baru 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">10</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=10&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=10&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Kegiatan Teater 2022" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400010</td>
                           <td>Penerimaan Kegiatan Teater 2022</td>
                           <td>1110203 - Bank BTN</td>
                           <td>
                              443311 - Pendapatan Pengelolaan Kegiatan Mahasiswa 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">11</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=11&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=11&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Kegiatan Opera 2022" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400011</td>
                           <td>Penerimaan Kegiatan Opera 2022</td>
                           <td>1110203 - Bank BTN</td>
                           <td>
                              443311 - Pendapatan Pengelolaan Kegiatan Mahasiswa 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">12</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=12&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=12&amp;label=Kode Penerimaan&amp;dataName=Pendapatan Kunjungan Industri Mahasiswa" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400012</td>
                           <td>Pendapatan Kunjungan Industri Mahasiswa</td>
                           <td>4102000 - Penerimaan Kunjungan Industri Mahasiswa</td>
                           <td>
                              423313 - Pendapatan Lainnya 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">13</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=13&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=13&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Wisuda Mahasiswa" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400013</td>
                           <td>Penerimaan Wisuda Mahasiswa</td>
                           <td>4103000 - Penerimaan Wisuda Mahasiswa</td>
                           <td>
                              453311 - Pendapatan Wisuda Mahasiswa 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">14</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=14&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=14&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Kunjungan Industri Fakultas MIPA" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400014</td>
                           <td>Penerimaan Kunjungan Industri Fakultas MIPA</td>
                           <td>4102000 - Penerimaan Kunjungan Industri Mahasiswa</td>
                           <td>
                              453312 - Pendapatan Kunjungan Industri Fakultas Matematika dan Ilmu Pengetahuan Alam 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">15</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=15&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=15&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Kegiatan Komunitas Musik 2022" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400015</td>
                           <td>Penerimaan Kegiatan Komunitas Musik 2022</td>
                           <td>1110202 - Bank Mandiri</td>
                           <td>
                              443311 - Pendapatan Pengelolaan Kegiatan Mahasiswa 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">16</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=16&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=16&amp;label=Kode Penerimaan&amp;dataName=Sewa Sound System" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400016</td>
                           <td>Sewa Sound System</td>
                           <td>4202000 - Pendapatan Kegiatan Kemahasiswaan</td>
                           <td>
                              443311 - Pendapatan Pengelolaan Kegiatan Mahasiswa 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">17</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=17&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=17&amp;label=Kode Penerimaan&amp;dataName=SPP Semester Ganjil - Februari" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400017</td>
                           <td>SPP Semester Ganjil - Februari</td>
                           <td>4101000 - Penerimaan SPP Mahasiswa</td>
                           <td>
                              423315 - Pendapatan SPP Semester Ganjil Mahasiswa SKI 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">18</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=18&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=18&amp;label=Kode Penerimaan&amp;dataName=perpanjangan Studi S2" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400018</td>
                           <td>perpanjangan Studi S2</td>
                           <td>4105000 - Penerimaan Mahasiswa Lainnya</td>
                           <td>
                              4233116 - Pendapatan Uang Pendidikan Lainnya 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">19</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=19&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=19&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Hibah" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400019</td>
                           <td>Penerimaan Hibah</td>
                           <td> - </td>
                           <td>
                              473313 - Pendapatan Iuran Alumni 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="text-center">20</td>
                           <td class="links text-center">
                              
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kode_penerimaan&amp;sub=inputKodePenerimaan&amp;act=view&amp;typ=html&amp;grp=20&amp;kode=&amp;nama=&amp;cari=1" title="Ubah Data"><i class="fa fa-pencil"></i></a>
                              <a class="xhr dest_subcontent-element  btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kode_penerimaan|deleteKodePenerimaan|do|html-kode|nama|cari-||1&amp;urlReturn=kode_penerimaan|kodePenerimaan|view|html-kode|nama|cari-||1&amp;id=20&amp;label=Kode Penerimaan&amp;dataName=Penerimaan Jasa Fasilitas Laboratorium" title="Hapus Data"><i class="fa fa-trash"></i></a>
                           </td>
                           <td class="text-right">400020</td>
                           <td>Penerimaan Jasa Fasilitas Laboratorium</td>
                           <td> - </td>
                           <td>
                              423313 - Pendapatan Lainnya 
                           </td>
                           <td class="text-center" style="width: 35px;">
                              
                                    <span class="badge badge-success">Aktif</span>
                                 
                           </td>
                        </tr>
                        
                     
               </tbody>
            </table>
         </div>
      </form>
   </div>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>