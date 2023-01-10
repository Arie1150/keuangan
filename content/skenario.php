<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=195&amp;mid=195">Referensi Akuntansi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=skenario&amp;sub=inputSkenario&amp;act=view&amp;typ=html">Skenario</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Skenario
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script languange="javascript">

function popupCoa(tipe){
   var nama_skenario = document.getElementById('nama_skenario').value; 
      
   if(nama_skenario == '') {
      alert('isi nama skenario terlebih dahulu');
	  return false;
   }
   
   var url = '/ekeuanganpts/index.php?mod=skenario&sub=coa&act=popup&typ=html';   
   url = url + '&tipe=' + tipe;
   showPopup(url,'Coa', 550, 500);
   //var xpopup = window.open(url,'xpopup','width=400,height=500,resizable=yes,scrollbars=yes,right=0;center');
   //xpopup.focus();	
}

function hapusAkun(id,tipe) {    
   var elem = document.getElementById(id); 
   elem.parentNode.removeChild(elem);

   var max = parseFloat(document.getElementById('max-'+tipe).value);
   document.getElementById('max-'+tipe).value = max - 1;
}

</script>
<div class="panel panel-default">
	<div class="panel-heading">
		<span class="panel-title">
			Tambah Skenario
		</span>
	</div>
	<div class="panel-body"> 
		
		<div class="btn-toolbar mb-15">
		   <div class="btn-group pull-right">
				 <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=skenario&amp;sub=skenario&amp;act=view&amp;typ=html" title="Daftar Jurnal Umum">
					 <i class="fa fa-list-alt"></i> List Skenario
				 </a>
		   </div>
		</div>
   
		<form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=skenario&amp;sub=addSkenario&amp;act=do&amp;typ=html" class="xhr_form form-horizontal dest_subcontent-element" data-target="/ekeuanganpts/index.php?mod=skenario&amp;sub=skenario&amp;act=view&amp;typ=html" id="frmInput"> 
			<input type="hidden" name="data[action]" value="add">
			<input type="hidden" name="data[skenario][id]" value="">
			  <div class="form-group">
				 <label class="col-md-3 control-label">
					 Nama Skenario *
				 </label>
				 <div class="col-md-4">
					 <input type="text" name="data[skenario][nama]" value="" id="nama_skenario" class="form-control">
				 </div>
			  </div>  
			  <div class="panel panel-default">
				   <div class="panel-heading">
					   <span class="panel-title">
						  Debet
					   </span>
				   </div>
				   <div class="panel-body">                       
					  <div class="btn-toolbar mb-15">
						 <div class="btn-group pull-right"> 
							<a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoa('debet');" title="Tambah Debet">
								<i class="fa fa-plus-circle"></i> Tambah Akun
							 </a>
						 </div>
					  </div>
					  <div class="table-responsive">
						  <input type="hidden" name="data[max_debet]" id="max-debet" value="0">	
						  <table class="table table-striped table-bordered table-hover" id="table-debet"> 
							  <thead>
									<tr>  
										<th width="30">Aksi</th>      
										<th>Kode Akun Debet</th>
										<th>Nama Akun Debet</th>         
										<th>Prosentase</th>  		 
									</tr> 
								</thead>
								<tbody> 

									
								</tbody>
							 </table>
					  </div>
				   </div>
			  </div>
			  
			  <div class="panel panel-default">
				<div class="panel-heading">
					<span class="panel-title">
					   Kredit
					</span>
				</div>
				<div class="panel-body">                       
				   <div class="btn-toolbar mb-15">
					  <div class="btn-group pull-right">  
						 <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoa('kredit');" title="Tambah Kredit">
							 <i class="fa fa-plus-circle"></i> Tambah Akun
						  </a>
					  </div>
				   </div>
				   <div class="table-responsive">
					<input type="hidden" name="data[max_kredit]" id="max-kredit" value="0">	
					   <table class="table table-striped table-bordered table-hover" id="table-kredit"> 
							 <thead> 
								 <tr>             
									<th width="30">Aksi</th>
									<th>Kode Akun Kredit</th>
									<th>Nama Akun Kredit</th>         
									<th>Prosentase</th>  		 
								</tr>
							 </thead>
							 <tbody>
								 
							
							
							 </tbody>
						  </table>
				   </div>
				</div>
		   </div>

			  <div class="form-group">
				 <div class="col-md-offset-3 col-md-7" id="div-btnsimpan">
					   <input name="btnsimpan" value=" Simpan " class="btn btn-primary" type="submit">
					   <input name="btnReset" value=" Batal " class="btn btn-danger" type="RESET">
				 </div>
			  </div>


		   </form>
		   
	</div>
</div>
 
        
   <div class="panel panel-default panel-petunjuk">
	<div class="panel-heading">
		<span class="panel-title">
		   Petunjuk
		</span>
	</div>
	<div class="panel-body">
		<ul>
		   <li>Tanda <label class="required"></label> menunjukkan bahwa field tersebut harus diisi </li>
		</ul>
	</div>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>   