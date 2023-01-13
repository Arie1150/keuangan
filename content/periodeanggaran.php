<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=92&amp;mid=92">Setting</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=periodeTahun&amp;act=view&amp;typ=html">Periode Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Periode Anggaran
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">
			   Pencarian
			</span>
		</div>
		<div class="panel-body">
         <form method="POST" name="frmRenstra" action="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=PeriodeTahun&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
				  <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
							<div class="form-group">
								<label class="col-md-4 control-label">
									Nama Renstra
								</label>
								<div class="col-md-7">
                            
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="renstra" id="cmb_renstra" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="24">2045-2050</option>
	
		<option value="23">2040-2045</option>
	
		<option value="22">2036-2040</option>
	
		<option value="21">2031-2035</option>
	
		<option value="20">2026-2030</option>
	
		<option value="5" selected="">2021-2025</option>
	
		<option value="26">2016 - 2020</option>
	
		<option value="25">2010 - 2015</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
								</div>
							</div>         
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
							<div class="form-group">
								<label class="col-md-4 control-label">
									 Nama Tahunan
								</label>
								<div class="col-md-7">
                            <input type="text" name="nama" value="" size="35" class="form-control">
								</div>
							</div> 
							<div class="form-group">
								<div class="col-md-offset-4 col-md-7">
									<button type="submit" name="btncari" class="btn btn-primary">
										Tampilkan »
									</button>
									
									<button type="reset" class="btn btn-warning" name="btnReset">
										Reset »
									</button>                          
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
               <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=inputPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=" title="Tambah">                     
						   <i class="fa fa-plus-circle"></i>
						  Tambah
					   </a>
			  </div>
		   </div>
	 
		   <div class="table-responsive">
			  <table class="table table-striped table-bordered table-hover">
			  <thead>
               <tr>
                     <th rowspan="2" width="5">
                        No
                     </th>
                     <th rowspan="2" valign="center" width="125px">
                        Aksi
                     </th>
                     <th rowspan="2" align="center">
                        Nama Periode Tahunan
                     </th>
                     <th colspan="2" align="center">
                        Tanggal
                     </th>
                     <th colspan="3" valign="center">
                        Status
                     </th>
                  </tr>
                  <tr>
                     <th style="width: 115px;">
                        Awal
                     </th>
                     <th style="width: 115px;">
                        Akhir
                     </th>
                     <th valign="center" width="35px">
                        Renstra
                     </th>
                     <th valign="center" width="35px">
                        Aktif
                     </th>
                     <th valign="center" width="35px">
                        Open
                     </th>
                  </tr>
           </thead>
           <tbody>
               
                     
                        <tr class="table-common-even" style="">
                           <td align="center">
                              1
                           </td>
                           <td class="links">
                              
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=EditPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;data_id=12" title="Ubah">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=periode_tahun|deletePeriodeTahun|do|html-search|renstra_id|nama-1|5|&amp;urlReturn=periode_tahun|PeriodeTahun|view|html-search|renstra_id|nama-1|5|&amp;id=12&amp;label=Periode Tahun&amp;dataName=2025&amp;message=Penghapusan Data ini akan menghapus Data secara permanen." title="Hapus">
                                          <i class="fa fa-trash"></i>
                                    </a>
                                 
                           </td>
                           <td>
                              2025
                           </td>
                           <td align="center">
                              1 Januari 2025
                           </td>
                           <td align="center">
                              31 Desember 2025
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/green.gif">
                                    </a>
                                 
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="set_active" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetAktif&amp;act=do&amp;typ=json&amp;renstra_id=5&amp;nama=&amp;id=12&amp;renstra=5" data-id="12" title="Set Aktif">
                                       <img src="images/icons/16/button-check.gif">
                                    </a>
                                 
                           </td>
                           <td align="center" class="links">
                              
                                    <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetOpen&amp;act=do&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;id=12&amp;status=T" data-id="" title="Set Close">
                                       <img src="images/icons/16/switch-on.png">
                                    </a>
                                 
                           </td>
                        </tr>
                     
                        <tr class="" style="">
                           <td align="center">
                              2
                           </td>
                           <td class="links">
                              
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=EditPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;data_id=10" title="Ubah">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=periode_tahun|deletePeriodeTahun|do|html-search|renstra_id|nama-1|5|&amp;urlReturn=periode_tahun|PeriodeTahun|view|html-search|renstra_id|nama-1|5|&amp;id=10&amp;label=Periode Tahun&amp;dataName=2024&amp;message=Penghapusan Data ini akan menghapus Data secara permanen." title="Hapus">
                                          <i class="fa fa-trash"></i>
                                    </a>
                                 
                           </td>
                           <td>
                              2024
                           </td>
                           <td align="center">
                              1 Januari 2024
                           </td>
                           <td align="center">
                              31 Desember 2024
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/green.gif">
                                    </a>
                                 
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="set_active" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetAktif&amp;act=do&amp;typ=json&amp;renstra_id=5&amp;nama=&amp;id=10&amp;renstra=5" data-id="10" title="Set Aktif">
                                       <img src="images/icons/16/button-check.gif">
                                    </a>
                                 
                           </td>
                           <td align="center" class="links">
                              
                                    <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetOpen&amp;act=do&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;id=10&amp;status=T" data-id="" title="Set Close">
                                       <img src="images/icons/16/switch-on.png">
                                    </a>
                                 
                           </td>
                        </tr>
                     
                        <tr class="table-common-even" style="font-weight: bold;">
                           <td align="center">
                              3
                           </td>
                           <td class="links">
                              
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=EditPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;data_id=9" title="Ubah">
                                          <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0);" title="Hapus" class=" btn btn-xs btn-default">
                                          <i class="fa fa-trash"></i>
                                    </a>
                                 
                           </td>
                           <td>
                              2023
                           </td>
                           <td align="center">
                              1 Januari 2023
                           </td>
                           <td align="center">
                              31 Desember 2023
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/green.gif">
                                    </a>
                                 
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/tick_circle.png">
                                    </a>
                                 
                           </td>
                           <td align="center" class="links">
                              
                                    <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetOpen&amp;act=do&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;id=9&amp;status=T" data-id="" title="Set Close">
                                       <img src="images/icons/16/switch-on.png">
                                    </a>
                                 
                           </td>
                        </tr>
                     
                        <tr class="" style="">
                           <td align="center">
                              4
                           </td>
                           <td class="links">
                              
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=EditPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;data_id=6" title="Ubah">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=periode_tahun|deletePeriodeTahun|do|html-search|renstra_id|nama-1|5|&amp;urlReturn=periode_tahun|PeriodeTahun|view|html-search|renstra_id|nama-1|5|&amp;id=6&amp;label=Periode Tahun&amp;dataName=2022&amp;message=Penghapusan Data ini akan menghapus Data secara permanen." title="Hapus">
                                          <i class="fa fa-trash"></i>
                                    </a>
                                 
                           </td>
                           <td>
                              2022
                           </td>
                           <td align="center">
                              1 Januari 2022
                           </td>
                           <td align="center">
                              31 Desember 2022
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/green.gif">
                                    </a>
                                 
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="set_active" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetAktif&amp;act=do&amp;typ=json&amp;renstra_id=5&amp;nama=&amp;id=6&amp;renstra=5" data-id="6" title="Set Aktif">
                                       <img src="images/icons/16/button-check.gif">
                                    </a>
                                 
                           </td>
                           <td align="center" class="links">
                              
                                    <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetOpen&amp;act=do&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;id=6&amp;status=T" data-id="" title="Set Close">
                                       <img src="images/icons/16/switch-on.png">
                                    </a>
                                 
                           </td>
                        </tr>
                     
                        <tr class="table-common-even" style="">
                           <td align="center">
                              5
                           </td>
                           <td class="links">
                              
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=EditPeriodeTahun&amp;act=view&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;data_id=1" title="Ubah">
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=periode_tahun|deletePeriodeTahun|do|html-search|renstra_id|nama-1|5|&amp;urlReturn=periode_tahun|PeriodeTahun|view|html-search|renstra_id|nama-1|5|&amp;id=1&amp;label=Periode Tahun&amp;dataName=2021&amp;message=Penghapusan Data ini akan menghapus Data secara permanen." title="Hapus">
                                          <i class="fa fa-trash"></i>
                                    </a>
                                 
                           </td>
                           <td>
                              2021
                           </td>
                           <td align="center">
                              1 Januari 2021
                           </td>
                           <td align="center">
                              31 Desember 2021
                           </td>
                           <td class="links" align="center">
                              
                                    <a href="javascript: void(0);">
                                       <img src="images/icons/16/green.gif">
                                    </a>
                                 
                           </td>
                           <td class="links" align="center">
                              
                                    <a class="set_active" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetAktif&amp;act=do&amp;typ=json&amp;renstra_id=5&amp;nama=&amp;id=1&amp;renstra=5" data-id="1" title="Set Aktif">
                                       <img src="images/icons/16/button-check.gif">
                                    </a>
                                 
                           </td>
                           <td align="center" class="links">
                              
                                    <a class="xhr dest_subcontent-element" href="/ekeuanganpts/index.php?mod=periode_tahun&amp;sub=SetOpen&amp;act=do&amp;typ=html&amp;renstra_id=5&amp;nama=&amp;id=1&amp;status=T" data-id="" title="Set Close">
                                       <img src="images/icons/16/switch-on.png">
                                    </a>
                                 
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
         <img src="images/lamp-green.gif"> Status Renstra AKTIF
      </li>
      <li>
         <img src="images/lamp-off.gif"> Status Renstra TIDAK AKTIF
      </li>
      <li>
         <img src="images/icons/16/tick_circle.png"> Status Periode Tahun AKTIF
      </li>
      <li>
            Klik <button type="button" class="btn btn-xs btn-info"><i class="fa fa-plus-circle"></i></button> untuk menambah data
         </li>
         <li>
            Klik <button type="button" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button> untuk mengubah data
         </li>
         <li>
            Klik <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button> untuk menghapus data
         </li>
      <li>
         Klik
          <img src="images/icons/16/button-check.gif"> untuk Set Aktif Periode Tahun
      </li>
      <li>
         Klik
          <img src="images/icons/16/switch-off.png"> untuk Set Open Periode Tahun
      </li>
      <li>
         Klik
          <img src="images/icons/16/switch-on.png"> untuk Set Close Periode Tahun
      </li>
   </ul>
   </div>
   </div>


   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>