<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=approval&amp;sub=approval&amp;act=view&amp;typ=html">Approval Rencana Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Approval Rencana Anggaran
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   function show_detil(url){
      showPopup(url,'Detail Rencana Kegiatan dan Anggaran',940,560);
   }

   function bukaPopupUnitKerja(xurl) {
      showPopup(xurl,'Unit Kerja',650,550);

   }
</script>
<style type="text/css">
   .table-common tr.table-common-even1 td{
      font-weight: bold !important;
   }
   .table-common tr.table-common-even1:hover td,
   .table-common tr.table-common-even2:hover td{
      background-color: #91bdff !important;
   }
   .table-common tbody tr.no_component td:first-child,
   .table-common tbody tr.hoverTd.no_component_none:hover td:first-child{
      border-left-color: #990000 !important;
      border-left-width: 5px;
      border-left-style: inset;
   }
   .table-common tbody tr.hoverTd.no_document_none:hover td{
      background-color: rgba(230,230,0, 0.4) !important;
   }
</style>


<div class="panel panel-default">
     <div class="panel-heading">
         <span class="panel-title">
            Pencarian
         </span>
     </div>
     <div class="panel-body">
         <form method="POST" action="/ekeuanganpts/index.php?mod=approval&amp;sub=approval&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox" name="filterbox">
               <div class="row">
               
                     <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                           <label class="control-label col-md-4">
                              Tahun Anggaran
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
                              <label class="control-label col-md-4">
                                 Unit Kerja
                              </label>
                              <div class="col-md-8">
                                 
                                       <div class="input-group">
                                          <input type="hidden" name="unitkerja" id="unitkerja" value="1">
                                          <input class="form-control" type="text" name="unitkerja_label" id="unitkerja_label" value="UNIVERSITAS" size="40" readonly="readonly">
                                          <div class="input-group-btn">
                                             <button class="btn btn-default" type="button" onclick="bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=approval&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html')" name="but_unitkerja">
                                                <i class="fa fa-search"></i>
                                             </button>
                                          </div>
                                       </div>
                                 
                              
                              </div>
                           </div>
                        <div class="form-group">
                              <label class="control-label col-md-4">                                 
                                 Kode /
                                 Nama /
                                 Nomor RKAT
                              </label>
                              <div class="col-md-8">
                                    <input type="text" name="kodenama" value="" size="30" class="form-control">
                              </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6">
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
         </div>
         
         <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                  <th style="width: 25px;">
                     No
                  </th>
                  <th width="31">
                     Aksi
                  </th>
                  <th style="min-width: 130px;">
                     Nomor RKAT
                  </th>
                  <th>
                     Kode
                  </th>
                  <th>
                     Nama
                  </th>
                  <th>
                     Unit Kerja
                  </th>
                  <th>
                     Nominal Usulan (Rp.)
                  </th>
                  <th>
                     Nominal Setuju (Rp.)
                  </th>
                  <th>
                     Status
                  </th>
               </tr>
            </thead>
            <tbody>
               
                     
                        <tr class="table-common-even1 program ">
                           <td align="center">
                              
                           </td>
                           <td class="links" align="center">
                              
                                    &nbsp;
                                 
                           </td>
                           <td style="text-align: left;">
                              
                           </td>
                           <td style="text-align: right;">
                              00
                           </td>
                           <td>
                              Kegiatan Pendidikan Perguruan Tinggi
                              
                           </td>
                           <td>
                              
                           </td>
                           <td style="text-align:right;">
                              253.000.000
                           </td>
                           <td style="text-align:right;">
                              102.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    &nbsp;
                                    	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even2 subprogram ">
                           <td align="center">
                              
                           </td>
                           <td class="links" align="center">
                              
                                    &nbsp;
                                 
                           </td>
                           <td style="text-align: left;">
                              
                           </td>
                           <td style="text-align: right;">
                              01
                           </td>
                           <td>
                              Layanan Pendidikan Dan Operasional Kampus
                              
                           </td>
                           <td>
                              
                           </td>
                           <td style="text-align:right;">
                              253.000.000
                           </td>
                           <td style="text-align:right;">
                              102.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    &nbsp;
                                    	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even ">
                           <td align="center">
                              1
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/06/00001
                           </td>
                           <td style="text-align: right;">
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                              
                                    <label style="font-style: italic;display: block;">
                                       (Honor Dosen Pembimbing TA))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Prodi Akuntansi
                           </td>
                           <td style="text-align:right;">
                              12.000.000
                           </td>
                           <td style="text-align:right;">
                              12.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class=" ">
                           <td align="center">
                              2
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/01/00004
                           </td>
                           <td style="text-align: right;">
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                              
                                    <label style="font-style: italic;display: block;">
                                       (Perjalanan Dinas Training Tim Keuangan))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Prodi Akuntansi
                           </td>
                           <td style="text-align:right;">
                              40.000.000
                           </td>
                           <td style="text-align:right;">
                              24.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even ">
                           <td align="center">
                              3
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/03/00001
                           </td>
                           <td style="text-align: right;">
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                              
                                    <label style="font-style: italic;display: block;">
                                       (Perawatan Alat-alat Laboratorium Teknik Kimia))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Teknik Kimia
                           </td>
                           <td style="text-align:right;">
                              7.000.000
                           </td>
                           <td style="text-align:right;">
                              7.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class=" ">
                           <td align="center">
                              4
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/07/00001
                           </td>
                           <td style="text-align: right;">
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                              
                                    <label style="font-style: italic;display: block;">
                                       (Penyusunan Modul Praktikum Semester Genap
( Percetakan modul praktikum semester genap (OTK1, Praktikum Kimia Lanjut, Simulasi Proses) )))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Teknik Kimia
                           </td>
                           <td style="text-align:right;">
                              8.000.000
                           </td>
                           <td style="text-align:right;">
                              8.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even ">
                           <td align="center">
                              5
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="btn btn-xs btn-success" href="javascript:void(0);" onclick="javascript:show_detil('/ekeuanganpts/index.php?mod=approval&amp;sub=detilApproval&amp;act=view&amp;typ=html&amp;dataId=28&amp;jenis_kegiatan=Tridharma Perguruan Tinggi&amp;search=1&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;ta_id=9&amp;kode=&amp;status_approval=&amp;ta_nama=2023')" title="Persetujuan Data">
                                       <i class="fa fa-check-square"></i>
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2024/07/00001
                           </td>
                           <td style="text-align: right;">
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                              
                                    <label style="font-style: italic;display: block;">
                                       (Anggaran Kegiatan PMB))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Teknik Komputer
                           </td>
                           <td style="text-align:right;">
                              100.000.000
                           </td>
                           <td style="text-align:right;">
                              0
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-default">Belum Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class=" ">
                           <td align="center">
                              6
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="btn btn-xs btn-success" href="javascript:void(0);" onclick="javascript:show_detil('/ekeuanganpts/index.php?mod=approval&amp;sub=detilApproval&amp;act=view&amp;typ=html&amp;dataId=20&amp;jenis_kegiatan=Tridharma Perguruan Tinggi&amp;search=1&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;ta_id=9&amp;kode=&amp;status_approval=&amp;ta_nama=2023')" title="Persetujuan Data">
                                       <i class="fa fa-check-square"></i>
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/01/00001
                           </td>
                           <td style="text-align: right;">
                              01.02
                           </td>
                           <td>
                              Penelitian Dan Pengembangan
                              
                                    <label style="font-style: italic;display: block;">
                                       (Diskusi Ilmiah &amp; Seminar : Webinar Reguler Topik Teknologi))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Teknik Komputer
                           </td>
                           <td style="text-align:right;">
                              11.000.000
                           </td>
                           <td style="text-align:right;">
                              0
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-default">Belum Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even ">
                           <td align="center">
                              7
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/01/00003
                           </td>
                           <td style="text-align: right;">
                              01.01
                           </td>
                           <td>
                              Pendidikan Dan Pengajaran
                              
                                    <label style="font-style: italic;display: block;">
                                       (Kegiatan Penerimaan Mahasiswa Baru Tahun Ajaran 2023/2024))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Fakultas Kesenian
                           </td>
                           <td style="text-align:right;">
                              1.000.000
                           </td>
                           <td style="text-align:right;">
                              1.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class=" ">
                           <td align="center">
                              8
                           </td>
                           <td class="links" align="center">
                              
                                    &nbsp;
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/04/00001
                           </td>
                           <td style="text-align: right;">
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                              
                                    <label style="font-style: italic;display: block;">
                                       (Biaya Perjalanan Dinas Training Tim Keuangan))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Direktur Keuangan &amp; Akuntansi
                           </td>
                           <td style="text-align:right;">
                              24.000.000
                           </td>
                           <td style="text-align:right;">
                              0
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-danger">Ditolak</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class="table-common-even ">
                           <td align="center">
                              9
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/01/00002
                           </td>
                           <td style="text-align: right;">
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                              
                                    <label style="font-style: italic;display: block;">
                                       (Pengadaan dan Pengembangan Sistem Informasi dan Software))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Manajer Teknologi Komunikasi dan Informasi
                           </td>
                           <td style="text-align:right;">
                              5.000.000
                           </td>
                           <td style="text-align:right;">
                              5.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
                           </td>
                        </tr>
                     
                        <tr class=" ">
                           <td align="center">
                              10
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript:void(0);" style="display: none;">
                                       <img src="images/button-detail.gif">
                                    </a>
                                 
                           </td>
                           <td style="text-align: left;">
                              RKAT/2023/08/00001
                           </td>
                           <td style="text-align: right;">
                              01.04
                           </td>
                           <td>
                              Kegiatan Non Akademik / Operasional Kampus
                              
                                    <label style="font-style: italic;display: block;">
                                       (Pemeliharaan Perangkat IT ( PC, Laptop, Printer, Proyektor, dan Perangkat Jaringan )))<br>
                                       ( -  -  - )
                                    </label>
                                 
                           </td>
                           <td>
                              Manajer Teknologi Komunikasi dan Informasi
                           </td>
                           <td style="text-align:right;">
                              45.000.000
                           </td>
                           <td style="text-align:right;">
                              45.000.000
                           </td>
                           <td style="text-align:center; padding-top: 6px;">
                              
                                    <span class="badge badge-success">Disetujui</span>
                                 	
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