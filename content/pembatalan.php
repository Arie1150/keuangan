<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=508&amp;mid=508">Target Penerimaan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=rencanaPenerimaan&amp;act=view&amp;typ=html">Pembatalan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Pembatalan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   function resetFormIni() {
      GtfwAjax.replaceContentWithUrl("subcontent-element","&ascomponent=1");
   }

   function showPopupDetailRencanaPenerimaan(xurl)
	{
		var titlePopup = 'Detail';
		titlePopup += ' Target Penerimaan';
		showPopup(xurl, titlePopup, 700, 500);
	}
</script>

<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=rencanaPenerimaan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
               
               <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="form-group">
                     <label class="control-label col-md-3">
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
						<label class="control-label col-md-3">
						   Kode / 
						   Nama
						</label>
						<div class="col-md-9">
                        <input type="text" name="kode" value="" class="form-control">
						</div>
					 </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
					   <label class="control-label col-md-3">
						  Unit Kerja
					   </label>
					   <div class="col-md-9">
							          
								   <div class="input-group">							                              
                           <input type="hidden" name="unitkerja" id="unitkerja" value="1">		  
									  <input type="text" name="unitkerja_label" id="unitkerja_label" readonly="" value="UNIVERSITAS" class="form-control">
									  <span class="input-group-btn">
										 <button type="button" class="btn btn-default" onclick="showPopup('/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html', 'Unit Kerja', 600, 550);">
											<i class="fa fa-search"></i>
										 </button>
									  </span>   
								   </div>                                 
								
					   </div>
					</div>
                  <div class="form-group">
                     <label class="control-label col-md-3">
                        Status Approval
                     </label>
                     <div class="col-md-5">
                           
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="approval" id="cmb_approval" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="1">Request</option>
	
		<option value="2">Approved</option>
	
		<option value="4">Reject</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
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
                  <th width="5">
                     No
                  </th>
                  <th style="width: 100px;">
                     Aksi
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
                  <th style="width: 100px;">
                     Status
                  </th>
               </tr>
            </thead>
            <tbody>
               
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2001.2
                        </td>
                        <td>
                           Prodi Akuntansi
                        </td>
                        <td class="text-right">
                           2.035.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even" style="">
                        <td align="center">
                           1
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=26" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400009
                        </td>
                        <td>
                           Penerimaan Mahasiswa Baru
                        </td>
                        <td class="text-right">
                           1.125.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="" style="">
                        <td align="center">
                           2
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=24" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400018
                        </td>
                        <td>
                           perpanjangan Studi S2
                        </td>
                        <td class="text-right">
                           10.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even" style="">
                        <td align="center">
                           3
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=21');" href="javascript:void()" class="btn btn-xs btn-default" title="Detail Data">
                                          <i class="fa fa-eye"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400021
                        </td>
                        <td>
                           Penerimaan SPP 2023/2024
                        </td>
                        <td class="text-right">
                           900.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2005
                        </td>
                        <td>
                           Fakultas Ilmu Sosial dan Ilmu Politik
                        </td>
                        <td class="text-right">
                           490.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="" style="">
                        <td align="center">
                           4
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=23" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400003
                        </td>
                        <td>
                           Penerimaan SPP Ganjil
                        </td>
                        <td class="text-right">
                           490.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2006.2
                        </td>
                        <td>
                           Teknik Kimia
                        </td>
                        <td class="text-right">
                           1.700.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even" style="">
                        <td align="center">
                           5
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=17');" href="javascript:void()" class="btn btn-xs btn-default" title="Detail Data">
                                          <i class="fa fa-eye"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400009
                        </td>
                        <td>
                           Penerimaan Mahasiswa Baru
                        </td>
                        <td class="text-right">
                           1.200.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="" style="">
                        <td align="center">
                           6
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=19" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400020
                        </td>
                        <td>
                           Penerimaan Jasa Fasilitas Laboratorium
                        </td>
                        <td class="text-right">
                           500.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2006.3
                        </td>
                        <td>
                           Teknik Komputer
                        </td>
                        <td class="text-right">
                           1.200.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even" style="">
                        <td align="center">
                           7
                        </td>
                        <td class="links" align="center">
                           
                                 <a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=25');" href="javascript:void()" class="btn btn-xs btn-default" title="Detail Data">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                 
                        </td>
                        <td class="text-right">
                           400009
                        </td>
                        <td>
                           Penerimaan Mahasiswa Baru
                        </td>
                        <td class="text-right">
                           1.200.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-warning">Diajukan</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2007
                        </td>
                        <td>
                           Fakultas Kesenian
                        </td>
                        <td class="text-right">
                           2.160.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="" style="">
                        <td align="center">
                           8
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=22" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400009
                        </td>
                        <td>
                           Penerimaan Mahasiswa Baru
                        </td>
                        <td class="text-right">
                           2.160.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           2008
                        </td>
                        <td>
                           Fakultas Matematika dan Ilmu Pengetahuan Alam
                        </td>
                        <td class="text-right">
                           250.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even" style="">
                        <td align="center">
                           9
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           400014
                        </td>
                        <td>
                           Penerimaan Kunjungan Industri Fakultas MIPA
                        </td>
                        <td class="text-right">
                           250.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-danger">Ditolak</span>
                              
                        </td>
                     </tr>
                     
                     <tr class="table-common-even1" style="font-weight: bold;">
                        <td align="center">
                           
                        </td>
                        <td class="links" align="center">
                           
                                 &nbsp;
                              
                        </td>
                        <td class="text-right">
                           1000.3.01.02
                        </td>
                        <td>
                           Manajer Pemberdayaan dan Pengabdian Masyarakat
                        </td>
                        <td class="text-right">
                           100.000.000
                        </td>
                        <td class="text-center">
                           
                                 &nbsp;
                              
                        </td>
                     </tr>
                     
                     <tr class="" style="">
                        <td align="center">
                           10
                        </td>
                        <td class="links" align="center">
                           
                                 
                                       <a href="/ekeuanganpts/index.php?mod=pembalik_approval_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;ta_id=9&amp;unit_id=1&amp;unit_nama=UNIVERSITAS&amp;status=&amp;kode=&amp;ta_nama=2023&amp;page=0&amp;dataId=18" class="xhr dest_subcontent-element btn btn-xs btn-warning" title="Pembatalan Persetujuan">
                                          <i class="fa fa-undo"></i>
                                       </a>
                                    
                              
                        </td>
                        <td class="text-right">
                           400019
                        </td>
                        <td>
                           Penerimaan Hibah
                        </td>
                        <td class="text-right">
                           100.000.000
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Disetujui</span>
                              
                        </td>
                     </tr>
                     
                  
            </tbody>
         </table>
      </div>
   </div>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>