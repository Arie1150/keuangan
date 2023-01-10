<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=history_apbnp&amp;sub=HistoryApbnp&amp;act=view&amp;typ=html">Daftar Relokasi Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Daftar Relokasi Anggaran
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script type="text/javascript" language="javascript" charset="utf-8">
// <![CDATA[
    function detail(id){
        showPopup('/ekeuanganpts/index.php?mod=history_apbnp&sub=DetailApbnp&act=view&typ=html&id='+id,'Budget Reloc Detail',650,550);
    }
// ]]>
</script>
<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">            
			<form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=history_apbnp&amp;sub=HistoryApbnp&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
               
               <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="form-group">
                     <label class="control-label col-md-3">
                        Tahun Anggaran
                     </label>
                     <div class="col-md-7">
                           
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
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6">

				  <div class="form-group">
						<label class="control-label col-md-4">
						   Nomor RKAT/Nama Aktivitas
						</label>
						<div class="col-md-6">
                            <input type="text" name="kode" value="" size="35" maxlength="35" tabindex="0" class="form-control">
                            <label class="custom-control custom-radio radio-inline">
                                    <input type="radio" name="type" value="asal" id="asal" checked="checked" class="custom-control-input">
                                   <span class="custom-control-indicator"></span>
                                   Asal
                                </label>
                                <label class="custom-control custom-radio radio-inline">
                                    <input type="radio" name="type" value="tujuan" id="tujuan" class="custom-control-input">
                                   <span class="custom-control-indicator"></span>
                                   Tujuan
                                </label>  
						</div>
					 </div> 
                  <div class="form-group">
                     <label class="control-label col-md-4">
                     </label>
                     <div class="col-md-6">
                        <input type="submit" name="btnCari" value=" Tampilkan »" class="btn btn-primary">                   
                        <input type="reset" name="btnReset" value=" Reset »" class="btn btn-warning">                   
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
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
        </div>
    </div>
   
        <!-- start: Table List -->
        <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                <tr>
                    <th rowspan="2">
                        No
                    </th>
                    <th rowspan="2" width="20">
                        Aksi
                    </th>
                    <th rowspan="2" width="120">
                        Tanggal
                    </th>
                    <th colspan="3">
                        Asal
                    </th>
                    <th colspan="3">
                        Tujuan
                    </th>
                    <th rowspan="2" width="120">
                        Nominal Reloc
                    </th>
                </tr>
                <tr>
                    <th>
                        Unit Kerja
                    </th>
                    <th>
                        Nomor RKAT
                    </th>
                    <th>
                        Nama
                    </th>  
                    <th>
                        Unit Kerja
                    </th> 
                    <th>
                        Nomor RKAT
                    </th>
                    <th>
                        Nama
                    </th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td colspan="10" align="center">
                            <em> -- Data tidak ditemukan -- </em>
                        </td>
                    </tr>
                
            </tbody>
        </table>
        </div>
    </div>
</div>


<div class="panel panel-default panel-petunjuk">
	<div class="panel-heading">
		<span class="panel-title">Petunjuk</span>
	</div>
	<div class="panel-body">  
        <ul>
            <li>
                Klik 
                <button class="btn btn-xs btn-default"><i class="fa fa-eye"></i></button> Untuk melihat detail Budget Reloc
            </li>
        </ul>
    </div>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>