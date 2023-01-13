<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=copy_program_kegiatan&amp;sub=copyProgramKegiatan&amp;act=view&amp;typ=html">Copy Program Kegiatan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
	function ChekAll(varname, start_num, end_num) {
		var obj = document.getElementById('cek_all');
        
		if(obj.checked == false) {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
                if(ceks)
				    ceks.checked = false;
			}
		} else {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
                if(ceks)
				    ceks.checked = true;
			}
		}		
	}
    
	function showDetailProgram(url){
		showPopup(url,'Detail Kegiatan',900,560);
		//alert(url);
	}
    
</script>
<div class="page-header">
    <h1><span class="text-muted font-weight-light">
            <i class="page-header-icon fa fa-cube"></i>
            Copy Activity
        </span></h1>
</div>
<div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">Calculate Program Kegiatan</span>
        </div>
        <div class="panel-body">   
        <form method="POST" action="/ekeuanganpts/index.php?mod=copy_program_kegiatan&amp;sub=copyProgramKegiatan&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="frmInput">
            <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Tahun Anggaran Sumber
                        </label>
                        <div class="col-md-4">
                                
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="th_anggar_awal" class="form-control">
	
		<option value="12">2025</option>
	
		<option value="10">2024</option>
	
		<option value="9" selected="">2023</option>
	
		<option value="6">2022</option>
	
		<option value="1">2021</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                        </div>
                    </div>                    
                    <div class="form-group">
                            <label class="control-label col-md-3">
                                Tahun Anggaran Tujuan
                            </label>
                            <div class="col-md-4">
                                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="th_anggar_akhir" class="form-control">
	
		<option value="12">2025</option>
	
		<option value="10">2024</option>
	
		<option value="9" selected="">2023</option>
	
		<option value="6">2022</option>
	
		<option value="1">2021</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                        </label>
                        <div class="col-md-4">
                                <button type="submit" name="btncalculate" class="btn btn-primary">
                                    Calculate
                                </button>
                        </div>
                    </div>
            </div>
        </form>
   </div>
</div>


<h2>Daftar Program Yang Tersedia</h2>
<h3>Pilih (cek) program kegiatan yang akan di copy</h3>
<div class="panel panel-default">
        <div class="panel-body">           
            
            <form method="POST" action="/ekeuanganpts/index.php?mod=copy_program_kegiatan&amp;sub=copyProgramKegiatan&amp;act=do&amp;typ=html" class="xhr_form" name="frmCopy">
                <div class="btn-toolbar mb-15">
                    <div class="btn-group">
                            
   <!-- FormHelper Content BEGIN -->
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                        </div>
                    <div class="btn-group pull-right">
                            <button type="submit" name="btnCopy" value="Process Copy" class="btn btn-primary">
                                <i class="fa fa-copy"></i>
                                Proses Copy
                            </button>
                            <input type="hidden" name="th_anggaran_sumber" id="th_anggaran_sumber" value="9">
                            <input type="hidden" name="th_anggaran_tujuan" id="th_anggaran_tujuan" value="9">
                    </div>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                    <th width="5">No</th>
                                    <th width="20">                    
                                        <label class="custom-control custom-checkbox custom-control-blank">
                                            <input type="checkbox" name="cek_all" id="cek_all" value="ALL" class="CheckBoxFW_parent custom-control-input" onclick="ChekAll('program_id_','','');">
                                            <span class="custom-control-indicator"></span>
                                        </label>                    
                                    </th>
                                            
                                    <th width="100" align="center">Kode</th>
                                    <th>Kegiatan</th>
                                    <th width="30">Detail</th>
                                </tr>
                        </thead>
                        <tbody>

                                
                                    <tr>
                                            <td colspan="5" align="center">
                                            <em>--Data Tidak Ditemukan--</em>
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