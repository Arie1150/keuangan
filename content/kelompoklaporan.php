<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=195&amp;mid=195">Referensi Akuntansi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=KlpLaporan&amp;act=view&amp;typ=html">Kelompok Laporan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Kelompok Laporan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<style>
    
    .status_label {
        padding: 3px;
        font-size: 10px;
        font-weight: bold;
        text-align: center;
        min-width: 40px;
        display: inline-block;

    }
    .green{
        border: 1px solid #9ce183;
        background-color: #9ce183;
        color: #1b4a0a;
    }
    .pink{
        border: 1px solid #f680b6;
        background-color: #f680b6;
        color: #a4024c;
    }
    .grey{
        border: 1px solid #dbe4d7;
        background-color: #dbe4d7;
        color: #6f6e6a;
    }
    
</style>
<script language="javascript" type="text/javascript">
	function centangin_semua(varname, start_num, end_num) {
		var obj = document.getElementById('cek_all');
		var ceks;
		if(obj.checked == false) {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
				if(ceks) ceks.checked = false;
			}
		} else {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
				if(ceks) ceks.checked = true;
			}
		}
	}
	function show_checkbox () {
		if(document.getElementById('cek_all'))
			document.getElementById('cek_all').style.display='';
	}
	document.onload = show_checkbox();
</script>
<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=KlpLaporan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
				  <div class="form-group">
					 <label class="control-label col-md-3">
						Jenis Laporan
					 </label>
					 <div class="col-md-4">
							
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="jns_lap" id="cmb_jenis_laporan" class="form-control">
	
		<option value="6" selected="">Aktivitas</option>
	
		<option value="2">Arus Kas</option>
	
		<option value="1">Perubahan Modal</option>
	
		<option value="14">Posisi Keuangan</option>
	
		<option value="21">Rasio Keuangan</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
					 </div>
					 <div class="col-md-5">
						<input type="submit" name="btncari" value=" Tampilkan »" class="btn btn-primary">                   
						<input type="reset" name="btnreset" value=" Reset »" class="btn btn-warning">                   
					 </div>
				  </div>
			   </div>               
			   </form>
		</div>
   </div>


   <div class="panel panel-default">
         <div class="panel-body">
      
      
      <div class="btn-toolbar mb-15">
         <div class="btn-group"></div>
      </div>
      
    
      <form method="POST" action="" class="xhr_simple_form dest_subcontent-element" id="form_list">
        
      <div class="table-responsive">
       <table class="table table-striped table-bordered table-hover">
         <thead>
         <tr>
               <th width="170">Aksi</th>
               <th>Kelompok Laporan</th>
               <th width="30">Fungsi</th>
        </tr>
      </thead>
      <tbody>
      
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                                                    
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=6&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=6&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>                        
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=6&amp;jns_lap=6&amp;cari=1" data-id="6" title="Set Fungsi">
                              <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                           </a>  
                       
                   
                  </td>
               <td style="padding-left: 0px; font-weight: normal;font-style:normal "> : <b>Aktivitas</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=7&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=7&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=7&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=7&amp;jns_lap=6&amp;cari=1" data-id="7" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: normal;font-style:normal ">1 : <b>PERUBAHAN ASET NETO TIDAK TERIKAT</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=353&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=353&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=353&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=353&amp;jns_lap=6&amp;cari=1" data-id="353" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: normal;font-style:normal ">1 : <b>Pendapatan Tidak Terikat</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=354&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=354&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Mahasiswa" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=354&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=354&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=354&amp;jns_lap=6&amp;cari=1" data-id="354" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">1 : Pendapatan Mahasiswa</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=358&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=358&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Kerjasama, Kemitraan, dan Sponshorship" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=358&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=358&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=358&amp;jns_lap=6&amp;cari=1" data-id="358" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">2 : Pendapatan Kerjasama, Kemitraan, dan Sponshorship</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=359&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=359&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Hibah" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=359&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=359&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=359&amp;jns_lap=6&amp;cari=1" data-id="359" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">3 : Pendapatan Hibah</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=360&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=360&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Jasa Profesi/Keahlian" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=360&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=360&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=360&amp;jns_lap=6&amp;cari=1" data-id="360" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">4 : Pendapatan Jasa Profesi/Keahlian</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=361&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=361&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Dana Lestari Dari Alumni" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=361&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=361&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=361&amp;jns_lap=6&amp;cari=1" data-id="361" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">5 : Pendapatan Dana Lestari Dari Alumni</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=362&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=362&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Jasa Giro" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=362&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=362&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=362&amp;jns_lap=6&amp;cari=1" data-id="362" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">6 : Pendapatan Jasa Giro</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=363&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=363&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Lainnya" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=363&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=363&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=363&amp;jns_lap=6&amp;cari=1" data-id="363" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">7 : Pendapatan Lainnya</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=424&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=424&amp;label=Kelompok Laporan&amp;dataName=Jumlah" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: bold;font-style:italic ">8 : Jumlah</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=364&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=364&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=364&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=364&amp;jns_lap=6&amp;cari=1" data-id="364" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: normal;font-style:normal ">2 : <b>Aset Neto Yang Berakhir Pembatasannya</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=365&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=365&amp;label=Kelompok Laporan&amp;dataName=Pemenuhan Program Pembatasan" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=365&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=365&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=365&amp;jns_lap=6&amp;cari=1" data-id="365" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">1 : Pemenuhan Program Pembatasan</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=366&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=366&amp;label=Kelompok Laporan&amp;dataName=Pemenuhan Pembatasan Pemerolehan Aset" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=366&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=366&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=366&amp;jns_lap=6&amp;cari=1" data-id="366" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">2 : Pemenuhan Pembatasan Pemerolehan Aset</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=367&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=367&amp;label=Kelompok Laporan&amp;dataName=Berakhirnya Pembatasan Waktu" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=367&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=367&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=367&amp;jns_lap=6&amp;cari=1" data-id="367" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">3 : Berakhirnya Pembatasan Waktu</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=425&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=425&amp;label=Kelompok Laporan&amp;dataName=Jumlah" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: bold;font-style:italic ">4 : Jumlah</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=426&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=426&amp;label=Kelompok Laporan&amp;dataName=Jumlah Pendapatan" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: bold;font-style:italic ">3 : Jumlah Pendapatan</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=368&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=368&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=368&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=368&amp;jns_lap=6&amp;cari=1" data-id="368" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: normal;font-style:normal ">4 : <b>Beban</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=369&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=369&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=369&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=369&amp;jns_lap=6&amp;cari=1" data-id="369" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">1 : <b>Beban Kegiatan Utama</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=370&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=370&amp;label=Kelompok Laporan&amp;dataName=Beban Operasional Pendidikan Tinggi" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=370&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=370&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=370&amp;jns_lap=6&amp;cari=1" data-id="370" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 60px; font-weight: normal;font-style:normal ">1 : Beban Operasional Pendidikan Tinggi</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=371&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=371&amp;label=Kelompok Laporan&amp;dataName=Beban Operasional Penelitian" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=371&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=371&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=371&amp;jns_lap=6&amp;cari=1" data-id="371" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 60px; font-weight: normal;font-style:normal ">2 : Beban Operasional Penelitian</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=372&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=372&amp;label=Kelompok Laporan&amp;dataName=Beban Operasional Pengabdian Masyarakat" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=372&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=372&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=372&amp;jns_lap=6&amp;cari=1" data-id="372" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 60px; font-weight: normal;font-style:normal ">3 : Beban Operasional Pengabdian Masyarakat</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=373&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=373&amp;label=Kelompok Laporan&amp;dataName=Beban Administrasi dan Umum" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=373&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=373&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=373&amp;jns_lap=6&amp;cari=1" data-id="373" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">2 : Beban Administrasi dan Umum</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=374&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=374&amp;label=Kelompok Laporan&amp;dataName=Beban Lainnya" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=374&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=374&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=374&amp;jns_lap=6&amp;cari=1" data-id="374" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: normal;font-style:normal ">3 : Beban Lainnya</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=427&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=427&amp;label=Kelompok Laporan&amp;dataName=Jumlah Beban" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 45px; font-weight: bold;font-style:italic ">5 : Jumlah Beban</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=428&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=428&amp;label=Kelompok Laporan&amp;dataName=Kenaikan (Penurunan) Aset Neto Tidak Terikat" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: bold;font-style:italic ">6 : Kenaikan (Penurunan) Aset Neto Tidak Terikat</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=11&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=11&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=11&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=11&amp;jns_lap=6&amp;cari=1" data-id="11" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: normal;font-style:normal ">2 : <b>PERUBAHAN ASET NETO TERIKAT TEMPORER</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=375&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=375&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Hibah" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=375&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=375&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=SetIsTambah&amp;act=do&amp;typ=json&amp;dataId=375&amp;jns_lap=6&amp;cari=1" data-id="375" title="Set Fungsi">
                                 <img src="images/icons/16/if_add_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: normal;font-style:normal ">3 : Pendapatan Hibah</td>
               <td align="center">
                       
                        <label class="status_label pink">(-)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=429&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=429&amp;label=Kelompok Laporan&amp;dataName=Kenaikan (Penurunan) Aset Neto Terikat Temporer" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: bold;font-style:italic ">5 : Kenaikan (Penurunan) Aset Neto Terikat Temporer</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=352&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=352&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=352&amp;jns_lap=6&amp;cari=1" title="SUM">
                              <img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan">
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=352&amp;jns_lap=6&amp;cari=1" data-id="352" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: normal;font-style:normal ">3 : <b>PERUBAHAN ASET NETO TERIKAT PERMANEN</b></td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=377&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=377&amp;label=Kelompok Laporan&amp;dataName=Pendapatan Dana Lestari Dari Alumni" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=377&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=377&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=377&amp;jns_lap=6&amp;cari=1" data-id="377" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: normal;font-style:normal ">1 : Pendapatan Dana Lestari Dari Alumni</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=430&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=430&amp;label=Kelompok Laporan&amp;dataName=Kenaikan (Penurunan) Aset Neto Terikat Permanen" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 30px; font-weight: bold;font-style:italic ">3 : Kenaikan (Penurunan) Aset Neto Terikat Permanen</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=431&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=431&amp;label=Kelompok Laporan&amp;dataName=KENAIKAN (PENURUNAN) ASET NETO" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: bold;font-style:italic ">4 : KENAIKAN (PENURUNAN) ASET NETO</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                      
                           
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=379&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>    
                           <a class="xhr dest_subcontent-element btn btn-danger btn-xs" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=379&amp;label=Kelompok Laporan&amp;dataName=ASET NETO AWAL TAHUN" title="Hapus">                           
                              <i class="fa fa-trash"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputKlpLaporan&amp;act=view&amp;typ=html&amp;process=add&amp;dataId=379&amp;jns_lap=6&amp;cari=1" title="Tambah">
                              <i class="fa fa-plus-circle"></i>
                           </a>
                           <a class="xhr dest_subcontent-element btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=InputDetilKlpLaporan&amp;act=view&amp;typ=html&amp;dataId=379&amp;jns_lap=6&amp;cari=1" title="Detail">                           
                              <i class="fa fa-eye"></i>
                           </a>
                           <a class="set_active btn btn-default btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=UnsetIsTambah&amp;act=do&amp;typ=json&amp;dataId=379&amp;jns_lap=6&amp;cari=1" data-id="379" title="Set Fungsi">
                                 <img src="images/icons/16/if_sub_16_t.png" alt="set fungsi">
                              </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: normal;font-style:normal ">5 : ASET NETO AWAL TAHUN</td>
               <td align="center">
                                        
                        <label class="status_label green">(+)</label>
                    
               </td>
            </tr>
            
            <tr>
                  <td class="links" style="text-align: right;">
                     
                                             
                           <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=kelompok_laporan&amp;sub=inputDetilKlpLapSummary&amp;act=view&amp;typ=html&amp;dataId=432&amp;jns_lap=6&amp;cari=1" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>                        
                           <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=kelompok_laporan|deleteKlpLaporan|do|html-jns_lap|cari-6|1&amp;urlReturn=kelompok_laporan|KlpLaporan|view|html-jns_lap|cari-6|1&amp;id=432&amp;label=Kelompok Laporan&amp;dataName=ASET NETO AKHIR TAHUN" title="Hapus">
                              <i class="fa fa-trash"></i>
                           </a>
                       
                   
                  </td>
               <td style="padding-left: 15px; font-weight: bold;font-style:italic ">6 : ASET NETO AKHIR TAHUN</td>
               <td align="center">
                        
                        <label class="status_label grey">sum</label>
                    
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
               <ul>
                     <li><img src="images/button-edit.gif" alt="Ubah"> = Untuk Edit kelompok laporan</li>
                     <li><img src="images/button-delete.gif" alt="Ubah"> = Untuk Delete kelompok laporan</li>
                     <li><img src="images/button-add.gif" alt="Ubah"> = Untuk Menambah kelompok laporan</li>
                     <li><img src="images/button-detail.gif" alt="Ubah"> = Untuk Menambah COA kedalam kelompok laporan</li>
                     <li><img src="images/icons/16/sigma_icon_16.png" alt="Formla SUM Kelompok Laporan"> = Untuk Menambahkan Item penjumlahan pada kelompok laporan</li>
                     
                  </ul>
         </div>
 </div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>   