<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=5&amp;mid=5">Manajemen Referensi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=tipeunit&amp;act=view&amp;typ=html">Tipe Unit Kerja</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
	CheckBoxFW_initiate = function (Obj)
{
   if (!Obj || Obj.className.indexOf('CheckBoxFW_parent') < 0 || !Obj.form) return;

   var CBList     = new Array;
   var CheckedAll = true;
   var FormObj    = Obj.form;

   for (var i = 0; i < FormObj.length; i++) if (FormObj[i] == Obj) break;
   if (i == FormObj.length) return;

   for(i += 1; i < FormObj.length; i++)
   {
      var CBObj = FormObj[i];
      if (CBObj.type.toUpperCase() != 'CHECKBOX') continue;
      if (CBObj.className.indexOf('CheckBoxFW_child') >= 0)
      {
         CBObj.onchange = function () {
            Obj.checkChild();
         }
         CBList[CBList.length] = CBObj;
         if (!CBObj.checked) CheckedAll = false;
      }
      if (CBObj.className.indexOf('CheckBoxFW_parent') >= 0) break;
   }

   if (CBList.length > 0)
   {
      Obj.onchange = function ()
      {
         for (var i = 0; i < CBList.length; i++){
            if(CBList[i].getAttribute('disabled') == null){
               CBList[i].checked = this.checked;
            }
         }
      }

      Obj.checkChild = function ()
      {
         var CheckedAll = true;
         for (var i = 0; i < CBList.length; i++) if (!CBList[i].checked)
         {
            CheckedAll = false;
            break;
         }
         this.checked = CheckedAll;
      }

      Obj.checked = CheckedAll;
   }
}
var formObj       = document.getElementById('form_list');
if(typeof(formObj) != 'undefined' && formObj != null){
   for (var i = 0; i < formObj.length; i++){
      CheckBoxFW_initiate(formObj[i]);
   }
}
</script>



<div class="page-header">
        <h1><span class="text-muted font-weight-light">
              <i class="page-header-icon fa fa-building-o"></i>
              Tipe Unit
           </span></h1>
     </div>


<div class="panel panel-default">
     <div class="panel-heading">
         <span class="panel-title">Pencarian</span>
     </div>
     <div class="panel-body">

<form method="POST" action="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=tipeunit&amp;act=view&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox"> 
   <div class="row">
         <div class="form-group">
            <label class="control-label col-md-3">
                  Tipe Unit
            </label>
            <div class="col-md-4">
                  <input type="text" name="tipeunit" value="" size="30" class="form-control">
            </div>
            <div class="col-md-5">
                  <button type="submit" name="btncari" class="btn btn-primary">
                     Tampilkan »
                  </button>
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
          <b>1</b>-<b>3</b> dari <b>3</b> &nbsp;
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
                  <a class="xhr dest_subcontent-element btn btn-info btn-flat mr-5 btn-fwn" href="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=inputTipeunit&amp;act=view&amp;typ=html" title="Tambah Data Sub Unit kerja">
                        <i class="fa fa-plus-circle"></i> 
                     Tambah
                  </a>
                  <button type="submit" id="btnHapus" name="btnHapus" class="btn btn-danger btn-flat btn-fwn">
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
            <th width="5">
                  <label class="custom-control custom-checkbox custom-control-blank">
                     <input type="checkbox" name="cek_all" id="cek_all" value="ALL" class="CheckBoxFW_parent custom-control-input">
                     <span class="custom-control-indicator"></span>
                  </label>
               
               </th>
            <th width="31">Aksi</th>
               <th>Tipe Unit</th>
            </tr>
         </thead>
         <tbody>
      
            
            <tr class="table-common-even">
               <td align="center">1</td>
			   <td align="center">               
                  <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" name="id[]" id="tipeunit_id_1" value="1" class="CheckBoxFW_child custom-control-input" disabled="">                        
                        <span class="custom-control-indicator"></span>
                  </label>               
               <input type="hidden" name="name[1]" value="A (Pusat Biaya)">
            </td>               
               <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=inputTipeunit&amp;act=view&amp;typ=html&amp;dataId=1&amp;page=&amp;cari=" title="Ubah" style="display: none;">
                        <i class="fa fa-pencil"></i>
                     </a>
                  </td>
               <td>A (Pusat Biaya)</td>
            </tr>
            
            <tr class="">
               <td align="center">2</td>
			   <td align="center">               
                  <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" name="id[]" id="tipeunit_id_2" value="2" class="CheckBoxFW_child custom-control-input" disabled="">                        
                        <span class="custom-control-indicator"></span>
                  </label>               
               <input type="hidden" name="name[2]" value="B (Pusat Biaya dan Sumber Penerimaan)">
            </td>               
               <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=inputTipeunit&amp;act=view&amp;typ=html&amp;dataId=2&amp;page=&amp;cari=" title="Ubah" style="display: none;">
                        <i class="fa fa-pencil"></i>
                     </a>
                  </td>
               <td>B (Pusat Biaya dan Sumber Penerimaan)</td>
            </tr>
            
            <tr class="table-common-even">
               <td align="center">3</td>
			   <td align="center">               
                  <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" name="id[]" id="tipeunit_id_3" value="3" class="CheckBoxFW_child custom-control-input" disabled="">                        
                        <span class="custom-control-indicator"></span>
                  </label>               
               <input type="hidden" name="name[3]" value="C (Sumber Penerimaan)">
            </td>               
               <td class="links" align="center">
                     <a class="xhr dest_subcontent-element btn btn-warning btn-xs" href="/ekeuanganpts/index.php?mod=tipeunit&amp;sub=inputTipeunit&amp;act=view&amp;typ=html&amp;dataId=3&amp;page=&amp;cari=" title="Ubah" style="display: none;">
                        <i class="fa fa-pencil"></i>
                     </a>
                  </td>
               <td>C (Sumber Penerimaan)</td>
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
           <h5>Keterangan Type Unit Kerja:</h5>
            <ul>
               <li>Type A : Unit kerja yang dinilai kinerjanya dari aktivitas efisiensi belanja</li>
               <li>Type B : Unit kerja yang dinilai kinerjanya dari aktivitas pencapaian target penerimaan</li>
               <li>Type C : Unit kerja yang dinilai kinerjanya dari aktivitas efisiensi belanja dan pencapaian target penerimaan</li>
      
            </ul>
        </div>
   </div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>