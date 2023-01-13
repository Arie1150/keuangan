<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=RkaklSumberDana&amp;act=view&amp;typ=html">Sumber Dana</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Sumber Dana
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

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
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=RkaklSumberDana&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
				  <div class="form-group">
					 <label class="control-label col-md-3">
						Sumber Dana
					 </label>
					 <div class="col-md-4">
							<input type="text" name="sumber_dana_nama" value="" class="form-control">
					 </div>
				  </div>
				  <div class="form-group">
					 <div class="col-md-offset-3 col-md-4">
						<button type="submit" name="btncari" class="btn btn-primary">Tampilkan</button>
						<button type="reset" name="btnReset" class="btn btn-warning">Reset</button> 
					 </div>                        
				  </div>
			   </div>               
			   </form>
		</div>
   </div>

   <div class="panel panel-default">
		<div class="panel-body">
   <form method="POST" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element" id="form_list">
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
          <b>1</b>-<b>5</b> dari <b>5</b> &nbsp;
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
			<a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html" title="Tambah Data">
				<i class="fa fa-plus-circle"></i>
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
         <th width="5">No</th>
         <th width="70">Aksi</th>
			<th width="5">		                   					
                <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" style="" name="cek_all" id="cek_all" value="ALL" class="custom-control-input" onclick="centangin_semua('sumber_dana_id_','1','5');">
                    <span class="custom-control-indicator"></span>
                </label>
			</th>
			<th>Nama</th>
		 	<th width="100">Status</th>
	  </tr>
	</thead>
	<tbody>
      
            
		<tr class="table-common-even">
			<td class="text-center">
				1
			</td>
			<td class="links text-center">
				<a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html&amp;dataId=12" title="Ubah">
					<i class="fa fa-pencil"></i>
				</a>
			</td>
			<td class="text-center">
				 <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" name="id[]" id="sumber_dana_id_1" value="12" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                </label>
				
			 	<input type="hidden" name="name[12]" value="BOPTN">
		 	</td>
			<td>BOPTN</td>
			<td class="text-center">
                
                        <span class="badge badge-success">Aktif</span>
                	
			</td>
		</tr>
            
		<tr class="">
			<td class="text-center">
				2
			</td>
			<td class="links text-center">
				<a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html&amp;dataId=13" title="Ubah">
					<i class="fa fa-pencil"></i>
				</a>
			</td>
			<td class="text-center">
				 <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" name="id[]" id="sumber_dana_id_2" value="13" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                </label>
				
			 	<input type="hidden" name="name[13]" value="CSR">
		 	</td>
			<td>CSR</td>
			<td class="text-center">
                
                        <span class="badge badge-success">Aktif</span>
                	
			</td>
		</tr>
            
		<tr class="table-common-even">
			<td class="text-center">
				3
			</td>
			<td class="links text-center">
				<a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html&amp;dataId=14" title="Ubah">
					<i class="fa fa-pencil"></i>
				</a>
			</td>
			<td class="text-center">
				 <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" name="id[]" id="sumber_dana_id_3" value="14" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                </label>
				
			 	<input type="hidden" name="name[14]" value="Mahasiswa">
		 	</td>
			<td>Mahasiswa</td>
			<td class="text-center">
                
                        <span class="badge badge-success">Aktif</span>
                	
			</td>
		</tr>
            
		<tr class="">
			<td class="text-center">
				4
			</td>
			<td class="links text-center">
				<a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html&amp;dataId=11" title="Ubah">
					<i class="fa fa-pencil"></i>
				</a>
			</td>
			<td class="text-center">
				 <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" name="id[]" id="sumber_dana_id_4" value="11" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                </label>
				
			 	<input type="hidden" name="name[11]" value="Universitas">
		 	</td>
			<td>Universitas</td>
			<td class="text-center">
                
                        <span class="badge badge-success">Aktif</span>
                	
			</td>
		</tr>
            
		<tr class="table-common-even">
			<td class="text-center">
				5
			</td>
			<td class="links text-center">
				<a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=rkakl_sumber_dana&amp;sub=inputRkaklSumberDana&amp;act=view&amp;typ=html&amp;dataId=10" title="Ubah">
					<i class="fa fa-pencil"></i>
				</a>
			</td>
			<td class="text-center">
				 <label class="custom-control custom-checkbox custom-control-blank">
					<input type="checkbox" name="id[]" id="sumber_dana_id_5" value="10" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                </label>
				
			 	<input type="hidden" name="name[10]" value="Yayasan">
		 	</td>
			<td>Yayasan</td>
			<td class="text-center">
                
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