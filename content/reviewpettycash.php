<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=532&amp;mid=532">Petty Cash</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_pettycash_review&amp;sub=PettycashReview&amp;act=view&amp;typ=html">Review Petty Cash</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Review Petty Cash
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<div class="panel panel-default">
   <div class="panel-heading">
      <span class="panel-title">Pencarian</span>
   </div>
   <div class="panel-body">
      <form method="POST" name="filterbox" action="/ekeuanganpts/index.php?mod=finansi_pettycash_review&amp;sub=PettycashReview&amp;act=view&amp;typ=html" class="dataquest xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="control-label col-md-3">
                     Tanggal Pengajuan
                  </label>
                  <div class="col-md-6">
                     <div class="input-daterange input-group" id="datepicker-range">
                        <input type="text" class="form-control" name="tanggal_awal" id="tanggal_awal" value="1 January 2023" placeholder="Tanggal Awal" readonly="">
                        <span class="input-group-addon">
                           s/d
                        </span>
                        <input type="text" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="10 January 2023" placeholder="Tanggal Akhir" readonly="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="control-label col-md-3">
                     Status Review 
                  </label>
                  <div class="col-md-4">
                     
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="status_review" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="Ya">Diterima</option>
	
		<option value="Tidak">Ditolak</option>
	
		<option value="Belum">Belum</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-offset-3 col-md-9">
                     <button type="submit" name="btnSearch" class="btn btn-primary">Tampilkan</button>
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
                  <th style="width: 65px;">
                     Aksi
                  </th>
                  <th>
                     Tanggal Pengajuan
                  </th>
                  <th>
                     Unit Kerja
                  </th>
                  <th>
                     Periode Petty Cash
                  </th>
                  <th>
                      Saldo Penambahan  
                  </th>
                  <th>
                     Nominal Maksimal Transaksi
                  </th>
                  <th>
                     Minimal Saldo Petty Cash
                  </th>
                  <th style="width:130px;">
                     Status Review
                  </th>
               </tr>
            </thead>
            <tbody>            
               
                  <tr>
                     <td colspan="8" align="center">
                        <em>
                           --Data Tidak Ditemukan--
                        </em>
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
            Klik  <button type="button" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></button> Untuk Melihat Detail
         </li>
         <li>
            Klik  <button type="button" class="btn btn-xs btn-success"><i class="fa fa-check-square"></i></button> Untuk Melakukan Review
         </li>
      </ul>
   </div>
</div>
<script type="text/javascript">
   //untuk kalendar
   $( function() {
      $('#datepicker-range').datepicker({
         autoclose: true,
         format: 'dd MM yyyy',
         orientation: 'bottom'
     }); 
   });  
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>