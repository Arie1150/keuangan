<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=SatuanKomponen&amp;act=view&amp;typ=html">Satuan</a></li>
    

    
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
				ceks.checked = false;
			}
		} else {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
				ceks.checked = true;
			}
		}		
	}
</script>
<div class="page-header">
   <h1><span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-cube"></i>
         Pengelolaan Satuan Komponen
      </span></h1>
</div>


<div class="panel panel-default">
     <div class="panel-heading">
         <span class="panel-title">Pencarian</span>
     </div>
     <div class="panel-body">
         <form method="POST" name="frmSearch" action="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=SatuanKomponen&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
            <div class="row">
               <div class="form-group">
                  <label class="control-label col-md-3">
                     Nama Satuan
                  </label>
                  <div class="col-md-4">
                        <input type="text" name="nama_satuan_komponen" value="" class="form-control">
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
   <form method="POST" action="/ekeuanganpts/index.php?mod=confirm&amp;sub=ConfirmDelete&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element" id="form_list">
         
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
          <b>1</b>-<b>11</b> dari <b>11</b> &nbsp;
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
                  <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;op=add" title="Tambah Data">
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
                  <th width="5">
                     No
                  </th>
                  <th width="70">
                     Aksi
                  </th>
                  <th width="5">                     					
                     <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" name="cek_all" id="cek_all" value="ALL" class="custom-control-input" onclick="ChekAll('satuan_komponen_id_','1','11');">
                        <span class="custom-control-indicator"></span>
                     </label>
                  </th>
                  <th>
                     Nama Satuan
                  </th>
               </tr>
               </thead>
               <tbody>
               
               
               <tr class="table-common-even">
                  <td align="right">1</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=6&amp;op=edit" title="Ubah satuan komponen Buah">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_1" value="6" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[6]" value="Buah">
                  <td>Buah</td>
               </tr>
               
               <tr class="">
                  <td align="right">2</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=2&amp;op=edit" title="Ubah satuan komponen Kali">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_2" value="2" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[2]" value="Kali">
                  <td>Kali</td>
               </tr>
               
               <tr class="table-common-even">
                  <td align="right">3</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=10&amp;op=edit" title="Ubah satuan komponen Kegiatan">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_3" value="10" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[10]" value="Kegiatan">
                  <td>Kegiatan</td>
               </tr>
               
               <tr class="">
                  <td align="right">4</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=7&amp;op=edit" title="Ubah satuan komponen Lembar">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_4" value="7" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[7]" value="Lembar">
                  <td>Lembar</td>
               </tr>
               
               <tr class="table-common-even">
                  <td align="right">5</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=12&amp;op=edit" title="Ubah satuan komponen Mhs">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_5" value="12" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[12]" value="Mhs">
                  <td>Mhs</td>
               </tr>
               
               <tr class="">
                  <td align="right">6</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=4&amp;op=edit" title="Ubah satuan komponen OB">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_6" value="4" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[4]" value="OB">
                  <td>OB</td>
               </tr>
               
               <tr class="table-common-even">
                  <td align="right">7</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=9&amp;op=edit" title="Ubah satuan komponen OH">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_7" value="9" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[9]" value="OH">
                  <td>OH</td>
               </tr>
               
               <tr class="">
                  <td align="right">8</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=5&amp;op=edit" title="Ubah satuan komponen OK">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_8" value="5" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[5]" value="OK">
                  <td>OK</td>
               </tr>
               
               <tr class="table-common-even">
                  <td align="right">9</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=8&amp;op=edit" title="Ubah satuan komponen Paket">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_9" value="8" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[8]" value="Paket">
                  <td>Paket</td>
               </tr>
               
               <tr class="">
                  <td align="right">10</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=11&amp;op=edit" title="Ubah satuan komponen Tahun">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_10" value="11" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[11]" value="Tahun">
                  <td>Tahun</td>
               </tr>
               
               <tr class="table-common-even">
                  <td align="right">11</td>
                  <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=satuan_komponen&amp;sub=InputSatuanKomponen&amp;act=view&amp;typ=html&amp;kid=1&amp;op=edit" title="Ubah satuan komponen Unit">
                        <i class="fa fa-pencil"></i>
                     </a>
                        <!-- <a class="xhr dest_subcontent-element" href="" title="List sub komponen pada " ><img src="images/button-detail.gif" alt="" /></a>    -->
                  </td>
                  <td>
                        <label class="custom-control custom-checkbox custom-control-blank">
                           <input type="checkbox" name="id[]" id="satuan_komponen_id_11" value="1" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
							   </label>
                  </td>
                  <input type="hidden" name="name[1]" value="Unit">
                  <td>Unit</td>
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