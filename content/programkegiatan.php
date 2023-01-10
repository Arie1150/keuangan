<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=196&amp;mid=196">Referensi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ProgramKegiatan&amp;act=view&amp;typ=html">Program Kegiatan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<style type="text/css">
.table-common tr td label{
   padding-top: 4px;
   padding-left: 26px;
   background-position: 4px 50%;
   background-repeat: no-repeat;
}
.table-common tr td label.kegiatan{
   background-image: url('images/button-bukunutup.gif');
   font-weight: bold;
}
.table-common tr td label.output{
   background-image: url('images/button-clipboard.gif');
   margin-left: 16px;
}
.table-common tr td label.komponen{
   background-image: url('images/transkrip_nilai.gif');
   margin-left: 30px;
}
</style>
<div class="page-header">
   <h1>
      <span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-cube"></i>
            Pengelolaan Kegiatan, 
            Output dan 
            Komponen
      </span>
   </h1>
</div>


<div class="panel panel-default">
      <div class="panel-heading">
          <span class="panel-title">
             Pencarian
          </span>
      </div>
      <div class="panel-body">
          <form method="POST" action="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ProgramKegiatan&amp;act=View&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element  form-horizontal">
                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                          <div class="form-group">
                              <label class="col-md-4 control-label">
                                    Tahun Anggaran
                              </label>
                              <div class="col-md-7">
                                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="cb_tahun_anggaran" class="form-control">
	
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
                              <label class="col-md-4 control-label">
                                    Kegiatan
                              </label>
                              <div class="col-md-7">
                                    <input type="hidden" name="kegiatan_id" id="kegiatan_id" value="">
                                    <input type="hidden" name="kegiatan" id="kegiatan" value="--Pilih data output untuk memilih kegiatan--">
                                    <label id="kegiatan_label" class="form-control-label">
                                       --Pilih data output untuk memilih kegiatan--
                                    </label>
                              </div>
                          </div>          
                          <div class="form-group">
                              <label class="col-md-4 control-label">
                                    Output
                              </label>
                              <div class="col-md-7">                               
                                 <div class="input-group"> 
                                    <input type="hidden" name="output_id" id="output_id" value="">
                                    <input type="text" name="output" id="output" value="" size="35" readonly="readonly" class="form-control">
                                    <span class="input-group-btn">
                                          <button type="button" onclick="popupOutput();" class="btn btn-default">
                                             <i class="fa fa-search"></i>
                                          </button>
                                    </span>
                                 </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
                          <div class="form-group">
                              <label class="col-md-4 control-label">
                                    Kode
                                    Komponen
                              </label>
                              <div class="col-md-7">
                                    <input type="text" name="kode" id="kode" value="" size="35" class="form-control">
                              </div>
                          </div>                
                          <div class="form-group">
                              <label class="col-md-4 control-label">
                                    Nama
                                    Komponen
                              </label>
                              <div class="col-md-7">
                                    <input type="text" name="nama" id="nama" value="" size="35" class="form-control">
                              </div>
                          </div> 
                          <div class="form-group">
                              <div class="col-md-offset-4 col-md-7">
                                  <button type="submit" name="btnSearch" class="btn btn-primary">
                                      Tampilkan »
                                  </button>
                                  
                                  <button type="reset" class=" xhr dest_tab-container btn btn-warning" name="btnReset">
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
         
         <form method="POST" action="" class="xhr_simple_form dest_subcontent-element" id="form_list">        
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
          <b>1</b>-<b>4</b> dari <b>4</b> &nbsp;
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
                     <a href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ExcelProgramKegiatan&amp;act=view&amp;typ=xlsx&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023" title="Export Excel" target="_blank" class="btn btn-flat btn-default btn-fwn mr-5">
                        <i class="fa fa-file-excel-o"></i>
                        Excel
                     </a>
                     <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=AddKegiatan&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1" title="Tambah Kegiatan">
                        <i class="fa fa-plus-circle"></i>
                        Kegiatan
                     </a>
                     <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=AddOutput&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1" title="Tambah Output">
                        <i class="fa fa-plus-circle"></i>
                        Output
                     </a>
                     <a class="xhr dest_subcontent-element btn btn-flat btn-info btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=AddKomponen&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1" title="Tambah Komponen">
                        <i class="fa fa-plus-circle"></i>
                        Komponen
                     </a>
            </div>
         </div>
   
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
            <thead> 
                  <tr>
                        <th rowspan="2" style="width: 125px;">
                           Aksi
                        </th>
                        <th>
                           Kegiatan, 
                           Output, 
                           Komponen
                        </th>
                        <th rowspan="2" style="width: 120px;">                           
                           Detail Belanja
                        </th>
                     </tr>
                     <tr>
                        <th>
                           Kode — Nama
                        </th>
                     </tr>
            </thead>
            <tbody>      
                  
                     <tr class="table-common-even1">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditKegiatan&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=27" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a href="javascript:void(0);" title="Delete" class="btn btn-xs btn-default">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 &nbsp;
                              
                        </td>
                        <td>
                           <label class="kegiatan">
                              00 — Kegiatan Pendidikan Perguruan Tinggi
                           </label>
                        </td> 
                        <td align="center">
                           
                        </td>

                     </tr>
                  
                     <tr class="table-common-even2">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditOutput&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=30" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a href="javascript:void(0);" title="Delete" class="btn btn-xs btn-default">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 &nbsp;
                              
                        </td>
                        <td>
                           <label class="output">
                              01 — Layanan Pendidikan Dan Operasional Kampus
                           </label>
                        </td> 
                        <td align="center">
                           
                        </td>

                     </tr>
                  
                     <tr class="table-common-even">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditKomponen&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=57" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a href="javascript:void(0);" title="Delete" class="btn btn-xs btn-default">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ManajemenDetailBelanja&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;komponen_id=57" title="Komponen Belanja">
                                    <i class="fa fa-eye"></i>
                                 </a>
                              
                        </td>
                        <td>
                           <label class="komponen">
                              01.01 — Pendidikan Dan Pengajaran
                           </label>
                        </td> 
                        <td align="center">
                           5
                        </td>

                     </tr>
                  
                     <tr class="">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditKomponen&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=58" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a href="javascript:void(0);" title="Delete" class="btn btn-xs btn-default">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ManajemenDetailBelanja&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;komponen_id=58" title="Komponen Belanja">
                                    <i class="fa fa-eye"></i>
                                 </a>
                              
                        </td>
                        <td>
                           <label class="komponen">
                              01.02 — Penelitian Dan Pengembangan
                           </label>
                        </td> 
                        <td align="center">
                           1
                        </td>

                     </tr>
                  
                     <tr class="table-common-even">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditKomponen&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=59" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-danger" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=finansi_referensi|DeleteKomponen|do|html-search|tahun_anggaran|kegiatan_id|kegiatan|output_id|output|kode|nama|ta_label-1|9||--Pilih data output untuk memilih kegiatan--|||||2023&amp;urlReturn=finansi_referensi|programKegiatan|view|html-search|tahun_anggaran|kegiatan_id|kegiatan|output_id|output|kode|nama|ta_label-1|9||--Pilih data output untuk memilih kegiatan--|||||2023&amp;id=59&amp;label=Kegiatan&amp;dataName=Pengabdian Masyarakat&amp;message=Penghapusan Data ini akan menghapus Komponen secara permanen." title="Delete">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ManajemenDetailBelanja&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;komponen_id=59" title="Komponen Belanja">
                                    <i class="fa fa-eye"></i>
                                 </a>
                              
                        </td>
                        <td>
                           <label class="komponen">
                              01.03 — Pengabdian Masyarakat
                           </label>
                        </td> 
                        <td align="center">
                           -
                        </td>

                     </tr>
                  
                     <tr class="">                        
                        <td class="links" nowrap="">
                     
                           
                           <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=EditKomponen&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;data_id=60" title="Ubah">
                              <i class="fa fa-pencil"></i>
                           </a>
                           
                                 <a href="javascript:void(0);" title="Delete" class="btn btn-xs btn-default">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              
                           
                                 <a class="xhr dest_subcontent-element btn btn-xs btn-info" href="/ekeuanganpts/index.php?mod=finansi_referensi&amp;sub=ManajemenDetailBelanja&amp;act=view&amp;typ=html&amp;tahun_anggaran=9&amp;kegiatan_id=&amp;kegiatan=--Pilih data output untuk memilih kegiatan--&amp;output_id=&amp;output=&amp;kode=&amp;nama=&amp;ta_label=2023&amp;curpage=1&amp;komponen_id=60" title="Komponen Belanja">
                                    <i class="fa fa-eye"></i>
                                 </a>
                              
                        </td>
                        <td>
                           <label class="komponen">
                              01.04 — Kegiatan Non Akademik / Operasional Kampus
                           </label>
                        </td> 
                        <td align="center">
                           3
                        </td>

                     </tr>
                  
               

            </tbody>
            </table>
         </div>
      </form>
      </div>
   </div>
   
   <div class="panel panel-default panel-petunjuk">
         <div class="panel-heading">
             <span class="panel-title">Petunjuk</span>
         </div>
         <div class="panel-body">
               <ul>
                     <li>
                        Gunakan form pencarian untuk filter data
                     </li>
                     <li>
                        <img src="images/button-bukunutup.gif" style="margin-bottom: -3px;"> Data Kegiatan
                     </li>
                     <li>
                        <img src="images/button-clipboard.gif" style="margin-bottom: -3px;"> Data Output
                     </li>
                     <li>
                        <img src="images/transkrip_nilai.gif" style="margin-bottom: -3px;"> Data Komponen
                     </li>
                     <li>
                           Klik
                           <button class="btn btn-xs btn-info" type="button"><li class="fa fa-plus-circle"></li></button>
                           untuk menambah data
                        </li>
                        <li>
                           Klik         
                           <button class="btn btn-xs btn-warning" type="button"><li class="fa fa-pencil"></li></button>
                           untuk update data
                        </li>
                     <li>
                        Klik
                        <button class="btn btn-xs btn-danger" type="button"><li class="fa fa-trash"></li></button>
                        untuk menghapus data
                     </li>
                     <li>
                        Klik
                        <button class="btn btn-xs btn-default" type="button"><li class="fa fa-trash"></li></button> Data tidak bisa di hapus karena mempunya data atau sudah memiliki komponen
                     </li>
                     <li>
                           Klik
                           <button class="btn btn-xs btn-info" type="button"><li class="fa fa-eye"></li></button> Untuk melihat Komponen Belanja atau melakukan penambahan data komponen belanja
                     </li>
                     <li>
                           Klik
                           <button class="btn btn-xs btn-default" type="button"><li class="fa fa-file-excel-o"></li></button> Untuk export excel data program kegiatan
                     </li>

                     
                  </ul>
         </div>
    </div>
    

<script type="text/javascript">
var xhr_reset_form = {
   '.xhr_simple_form': function(element) {
      element.onreset   = function(){
         var dest    = /\sdest_(.*?)\s/.exec(' '+this.className+' ');
         var url     = this.getAttribute('action');
         var target  = this.getAttribute('data-target');
         if(typeof(target) != 'undefined' && target != null){
            urlActions     = target;
         }else{
            urlActions     = url;
         }
         if(dest){
            GtfwAjax.replaceContentWithUrl(dest[1], urlActions + '&ascomponent=1');
         }

         return false;
      }
   }, 
   '.xhr_form': function(element) {
      element.onreset   = function(){
         var dest    = /\sdest_(.*?)\s/.exec(' '+this.className+' ');
         var url     = '?mod=home&sub=Home&act=view&typ=html';
         var target  = this.getAttribute('data-target');
         if(typeof(target) != 'undefined' && target != null){
            urlActions     = target;
         }else{
            urlActions     = url;
         }
         if(dest){
            GtfwAjax.replaceContentWithUrl(dest[1], urlActions + '&ascomponent=1');
         }

         return false;
      }
   }
}
Behaviour.register(xhr_reset_form);
document.onload = function() { Behaviour.register(xhr_reset_form); };

function popupOutput(){
   var ta = document.getElementById('cb_tahun_anggaran'); var taId = ta.options[ta.selectedIndex].value; 
   var url= '/ekeuanganpts/index.php?mod=finansi_referensi&sub=PopupOutput&act=view&typ=html&taId='+taId; showPopup(url, 'Output', 600, 550);
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>