<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=508&amp;mid=508">Target Penerimaan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html">Persetujuan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Persetujuan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<script language="javascript" type="text/javascript">

function showPopupDetailRencanaPenerimaan(xurl) {
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
		<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			<div class="row">
               	<div class="col-xs-12 col-sm-12 col-md-6">
                  	<div class="form-group">
                     	<label class="control-label col-md-3">
                        	Tahun Anggaran
                    	</label>
                     	<div class="col-md-5">
                           
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="tahun_anggaran" class="form-control">
	
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
							<input type="text" name="kodenama" value="" class="form-control">
						</div>
					</div>
               	</div>
               	<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
					   	<label class="control-label col-md-3">
						  	Unit Kerja
					   	</label>
					   	<div class="col-md-9">
							<input type="hidden" name="unitkerja" id="unitkerja" value="1">
							                                 
								   	<div class="input-group">									  
									  	<input type="text" name="unitkerja_label" id="unitkerja_label" readonly="" value="UNIVERSITAS" class="form-control">
									  	<span class="input-group-btn">
										 	<button type="button" class="btn btn-default" onclick="showPopup('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html', 'Unit Kerja', 600, 550);">
											<i class="fa fa-search"></i></button>
									  	</span>   
								   	</div>                                 
								
					   	</div>
					</div>
                  	<div class="form-group">
                     	<label class="control-label col-md-3">
                        	Status
                    	</label>
                     	<div class="col-md-5">
                           
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="approval" id="approval" class="form-control">
	
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
					<tr><th width="5">No</th>
					<th width="100">Aksi</th>
					<th>
						Kode 
               			<i class="fa fa-question-circle text-muted" id="popoverKode" data-state="info" onmouseover="showPopover(this.id, 'Kode', 'Kolom Kode menampilkan data Kode Unit Kerja dan Kode Pos Penerimaan', 'top');"></i>
					</th>
					<th>
						Nama 
               			<i class="fa fa-question-circle text-muted" id="popoverNama" data-state="info" onmouseover="showPopover(this.id, 'Nama', 'Kolom Nama menampilkan data Nama Unit Kerja dan Nama Pos Penerimaan', 'top');"></i>
					</th>
					<th>Total Penerimaan (Rp)</th>
					<th style="width: 100px;">Status</th>
				</tr></thead>
				<tbody> 
					
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2001.2</b></td>
								<td><b>Prodi Akuntansi</b></td>
								<td style="text-align:right;"><b>2.035.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=26" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=26');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400009</td>
								<td>Penerimaan Mahasiswa Baru</td>
								<td style="text-align:right;">1.125.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">2</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=21" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=21');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400021</td>
								<td>Penerimaan SPP 2023/2024</td>
								<td style="text-align:right;">900.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">3</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=24" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=24');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400018</td>
								<td>perpanjangan Studi S2</td>
								<td style="text-align:right;">10.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>1000.3.01.02</b></td>
								<td><b>Manajer Pemberdayaan dan Pengabdian Masyarakat</b></td>
								<td style="text-align:right;"><b>100.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=18" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=18');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400019</td>
								<td>Penerimaan Hibah</td>
								<td style="text-align:right;">100.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2005</b></td>
								<td><b>Fakultas Ilmu Sosial dan Ilmu Politik</b></td>
								<td style="text-align:right;"><b>490.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=23" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=23');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400003</td>
								<td>Penerimaan SPP Ganjil</td>
								<td style="text-align:right;">490.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2006.2</b></td>
								<td><b>Teknik Kimia</b></td>
								<td style="text-align:right;"><b>1.700.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=19" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=19');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400020</td>
								<td>Penerimaan Jasa Fasilitas Laboratorium</td>
								<td style="text-align:right;">500.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">2</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=17" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=17');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400009</td>
								<td>Penerimaan Mahasiswa Baru</td>
								<td style="text-align:right;">1.200.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2006.3</b></td>
								<td><b>Teknik Komputer</b></td>
								<td style="text-align:right;"><b>1.200.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<a class="xhr dest_subcontent-element btn btn-xs btn-success" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=InputRencanaPenerimaan&amp;act=view&amp;typ=html&amp;kodenama=&amp;tahun_anggaran=9&amp;unitkerja=1&amp;unitkerja_label=UNIVERSITAS&amp;approval=&amp;page=1&amp;cari=1&amp;dataId=25" title="Persetujuan"><i class="fa fa-check-square"></i></a>
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=25');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400009</td>
								<td>Penerimaan Mahasiswa Baru</td>
								<td style="text-align:right;">1.200.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-warning">Diajukan</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2007</b></td>
								<td><b>Fakultas Kesenian</b></td>
								<td style="text-align:right;"><b>2.160.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=22" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=22');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400009</td>
								<td>Penerimaan Mahasiswa Baru</td>
								<td style="text-align:right;">2.160.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-success">Disetujui</span>
											
								</td>
							</tr>
							
							<tr class="table-common-even1">
								<td class="text-center"></td> 
								<td class="links text-center">
									<!--<a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1" title="Tambah Rencana Penerimaan">
											 <img src="images/button-add.gif" 
											 alt="Tambah Rencana Penerimaan"/></a>-->
									
								</td>
								<td class="text-right"><b>2008</b></td>
								<td><b>Fakultas Matematika dan Ilmu Pengetahuan Alam</b></td>
								<td style="text-align:right;"><b>250.000.000</b></td>
								<td style="text-align:center;">
										
								</td>
							</tr>
							
							<tr class="">
								<td class="text-center">1</td> 
								<td class="links text-center">
									<!-- <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&sub=InputRencanaPenerimaan&act=view&typ=html&kodenama=&tahun_anggaran=9&unitkerja=1&unitkerja_label=UNIVERSITAS&approval=&page=1&cari=1&dataId=20" title="Persetujuan">
												<img src="images/button-check.gif" 
												alt="Detail Data"/></a> -->
													  
											<a onclick="showPopupDetailRencanaPenerimaan('/ekeuanganpts/index.php?mod=approval_rencana_penerimaan&amp;sub=PopupDetailRencanaPenerimaan&amp;act=view&amp;typ=html&amp;dataId=20');" class="btn btn-xs btn-default" title="Detail Data"><i class="fa fa-eye"></i></a>
										
								</td>
								<td class="text-right">400014</td>
								<td>Penerimaan Kunjungan Industri Fakultas MIPA</td>
								<td style="text-align:right;">250.000.000</td>
								<td style="text-align:center;">
									
											<span class="badge badge-danger">Ditolak</span>
											
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