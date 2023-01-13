<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=92&amp;mid=92">Setting</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=renstra&amp;act=view&amp;typ=html">Renstra</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Renstra
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
         <form method="POST" action="/ekeuanganpts/index.php?mod=renstra&amp;sub=renstra&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
				  <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
							<div class="form-group">
								<label class="col-md-3 control-label">
									Nama Renstra
								</label>
								<div class="col-md-9">
                           <input type="text" name="nama" value="" class="form-control">
								</div>
							</div>         
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
							<div class="form-group">
								<label class="col-md-3 control-label">
									Tahun
								</label>
								<div class="col-md-9">
                           <div class="input-daterange input-group" id="datepicker-range-year">
                              <input type="text" class="form-control text-center font-weight-semibold" name="start_year" id="start_year" value="2010" placeholder="Tahun Awal" readonly="">
                              <span class="input-group-addon">Sampai</span>
                              <input type="text" class="form-control text-center font-weight-semibold" name="end_year" id="end_year" value="2050" placeholder="Tahun Akhir" readonly="">
                           </div>
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
          <b>1</b>-<b>8</b> dari <b>8</b> &nbsp;
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
               <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=inputRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050" title="Tambah">                     
						   <i class="fa fa-plus-circle"></i>
						  Tambah
					   </a>
			  </div>
		   </div>
	 
		   <div class="table-responsive">
			  <table class="table table-striped table-bordered table-hover">
			  <thead>
               <tr>
                  <th style="width: 10px;">
                     No
                  </th>  
                  <th style="width: 150px;">
                     Aksi
                  </th>
                  <th>
                     Nama
                  </th>
                  <th>
                     Tanggal  Awal
                  </th>
                  <th>
                     Tanggal Selesai
                  </th>
                  <th>
                     Status
                  </th>
               </tr>
           </thead>
           <tbody>
               
                     
                     <tr class=" success font-weight-semibold">
                        <td class="text-center">
                           1
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=5" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=5" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2021-2025
                        </td>
                        <td class="text-center">
                           1 Januari 2021
                        </td>
                        <td class="text-center">
                           31 Desember 2025
                        </td>
                        <td class="text-center">
                           
											<span class="badge badge-success">Aktif</span>
                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           2
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=20" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=20&amp;label=Renstra&amp;dataName=2026-2030" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=20" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2026-2030
                        </td>
                        <td class="text-center">
                           1 Januari 2026
                        </td>
                        <td class="text-center">
                           31 Desember 2030
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=20" data-id="20" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           3
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=21" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=21&amp;label=Renstra&amp;dataName=2031-2035" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=21" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2031-2035
                        </td>
                        <td class="text-center">
                           1 Januari 2031
                        </td>
                        <td class="text-center">
                           31 Desember 2035
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=21" data-id="21" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           4
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=22" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=22&amp;label=Renstra&amp;dataName=2036-2040" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=22" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2036-2040
                        </td>
                        <td class="text-center">
                           1 Januari 2036
                        </td>
                        <td class="text-center">
                           30 Desember 2040
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=22" data-id="22" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           5
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=23" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=23&amp;label=Renstra&amp;dataName=2040-2045" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=23" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2040-2045
                        </td>
                        <td class="text-center">
                           31 Desember 2040
                        </td>
                        <td class="text-center">
                           30 Desember 2045
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=23" data-id="23" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           6
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=24" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=24&amp;label=Renstra&amp;dataName=2045-2050" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=24" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2045-2050
                        </td>
                        <td class="text-center">
                           31 Desember 2045
                        </td>
                        <td class="text-center">
                           30 Desember 2050
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=24" data-id="24" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           7
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=25" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=renstra|deleteRenstra|do|html-search|nama|start_year|end_year-1||2010|2050&amp;urlReturn=renstra|renstra|view|html-search|nama|start_year|end_year-1||2010|2050&amp;id=25&amp;label=Renstra&amp;dataName=2010 - 2015" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=25" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2010 - 2015
                        </td>
                        <td class="text-center">
                           31 Januari 2010
                        </td>
                        <td class="text-center">
                           31 Desember 2015
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=25" data-id="25" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                     <tr class=" ">
                        <td class="text-center">
                           8
                        </td>
                        <td class="links text-center">
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=renstra&amp;sub=EditRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=26" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="btn btn-xs btn-info" href="javascript:alert('Renstra sudah memiliki Periode Anggaran!');">
                                    <i class="fa fa-info-circle" title="Renstra sudah memiliki Periode Anggaran!"></i>
                                 </a>
                              
                           <a href="/ekeuanganpts/index.php?mod=renstra&amp;sub=DetailRenstra&amp;act=view&amp;typ=html&amp;nama=&amp;start_year=2010&amp;end_year=2050&amp;data_id=26" class="xhr dest_subcontent-element btn btn-default btn-xs" title="Detail">
                              <i class="fa fa-eye"></i>
                           </a>
                        </td>
                        <td class="text-center">
                           2016 - 2020
                        </td>
                        <td class="text-center">
                           1 Januari 2016
                        </td>
                        <td class="text-center">
                           31 Desember 2020
                        </td>
                        <td class="text-center">
                           

											<span class="badge badge-danger">TIdak Aktif</span>
         
                                 <!-- <a class="set_active" href="/ekeuanganpts/index.php?mod=renstra&sub=SetAktifRenstra&act=do&typ=json&nama=&start_year=2010&end_year=2050&grp=26" data-id="26" title="Set Aktif" style="display: inline-block; float: none;">
                                    <img src="images/icons/16/button-check.gif" alt="Set Aktif" />
                                 </a> -->

                              
                        </td>
                     </tr>
                     
                  
            </tbody>
			  </table>
		   </div>
		</div>
</div>

<script>
	$('#datepicker-range-year').datepicker({
      viewMode: 'years',
      minViewMode: 'years',
      format: 'yyyy',
      autoclose: true,
      orientation: 'bottom',
      startDate: "2010",
      endDate: "2050"
    });
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>