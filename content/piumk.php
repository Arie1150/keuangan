<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      
<style type="text/css">
table.table-details tfoot tr.buttons input[type="submit"],
table.table-details tfoot tr.buttons input[type="reset"]{
   display: inline-block;
  *display: inline;
  padding: 4px 12px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

table.table-edit input[readonly].gvFloat{
   color: #005E20;
   font-weight: bold;
   border: none;
   text-align: left !important;
   background-color: inherit;
}

table.table-details input[readonly].gvFloat{
   color: #000;
   font-weight: normal;
   border: 1px solid #cccccc;
   text-align: right !important;
   background-color: #f5f5f5;
}

</style>

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=46&amp;mid=46">Transaksi Realisasi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=AddCashAdvance&amp;act=view&amp;typ=html">Payment Instruction UMK &amp; Perjalanan Dinas</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Payment Instruction UMK &amp; Perjalanan Dinas
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<div class="panel panel-default">
   <div class="panel-heading">
      <span class="panel-title">
         Add
         Data 
      </span>
   </div>
   <div class="panel-body">
      
      
      <div class="btn-toolbar mb-15">
         <div class="btn-group pull-right"> 
            <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=CashAdvance&amp;act=view&amp;typ=html" title="Daftar Jurnal Umum">
               <i class="fa fa-list-alt"></i> List Jurnal
            </a>
         </div>
      </div>
      <form method="POST" action="/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=SaveCashAdvance&amp;act=do&amp;typ=json" id="frmInputCA" name="frmInputCA" class="form-horizontal">
         <input type="hidden" name="form_token" value="81d276c21626e1a2a18859ff449406e8">
         <input type="hidden" name="data_id" value="">
         <input type="hidden" name="pembukuan_id" value="">
         <div class="form-group">
            <label class="col-md-3 control-label">
               No. SP3    
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="trans_umk_id" value="" id="trans_umk_id">
                  <input type="hidden" name="unit_kerja_id" value="" id="unit_kerja_id">
                  <input type="hidden" name="peng_real_id" value="" id="peng_real_id">
                  <input type="hidden" name="peng_real_id_old" value="" id="peng_real_id_old">
                  <input type="hidden" name="peng_real_kd_id" value="" id="peng_real_kd_id">
                  <input type="hidden" name="jenis_sp3_old" value="" id="jenis_sp3_old">
                  <input type="hidden" name="jenis_sp3_id" value="" id="jenis_sp3_id">
                  <input type="text" name="peng_real_no_pengajuan" id="peng_real_no_pengajuan" size="35" value="" readonly="" class="form-control">
                  <span class="input-group-btn">
                     <button type="button" class="btn btn-default" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=PopupSP3&amp;act=view&amp;typ=html', 'SP3', 800, 500);">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               No. Payment Instruction UMK
            </label>
            <div class="col-md-4">  
               <label class="form-control-label" id="unit_kerja_label">
                  <b>
                                      
                           (Auto Number)
                        
                  </b>
               </label>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Tanggal
            </label>
            <div class="col-md-4">          
               <input type="hidden" name="tanggal_old" id="tanggal_old" value="">
               <input type="text" name="tanggal" id="tanggal" value="10 January 2023" readonly="readonly" class="datepicker form-control">
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Nominal  
            </label>
            <div class="col-md-4"> 
               <div class="input-group">
                  <input type="hidden" name="nominal" id="nominal" value="0">
                  <label class="form-control-label" style="font-weight: bold;">
                     Rp
                     <label id="nominal_f">0,00</label>
                  </label>
               </div> 
            </div>
         </div>  
         <div class="form-group">
            <label class="col-md-3 control-label">
               Keterangan
            </label>
            <div class="col-md-4"> 
               <textarea name="keterangan" id="txt_keterangan" rows="4" class="form-control"></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Penanggung Jawab *
            </label>
            <div class="col-md-4"> 
               <input type="text" name="penanggung_jawab" id="penanggung_jawab" value="Demo PTS" class="form-control">
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <span class="panel-title">
                  Jurnal
               </span>
            </div>
            <div class="panel-body">                       
               <div class="btn-toolbar mb-15">
                  <div class="btn-group pull-right">
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=PopupCoa&amp;act=view&amp;typ=html&amp;tipe=debet','Chart Of Account',600, 500);" title="Tambah">
                           <i class="fa fa-plus-circle"></i> Tambah Akun
                     </a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                           <th style="width: 20px;">
                              Aksi
                           </th>
                           <th style="width: 115px;">
                              <input type="hidden" name="max_coa" id="max_coa" value="">
                             Kode Akun
                           </th>
                           <th style="width: 145px;">
                              Atribut
                           </th>
                           <th>
                              Nama Rekening
                           </th>
                           <th style="width: 120px;">
                              Debet
                           </th>
                           <th style="width: 120px;">
                              Kredit
                           </th>
                        </tr>
                     </thead>
                     <tbody id="CoaPlaceHolder_jurnal">
                        <tr id="jurnal-empty-row">
                           <td colspan="6" style="text-align: center;">
                              Pilih data Akun
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-offset-3 col-md-7">
               <input name="btnsimpan" value=" Simpan " class="btn btn-primary" type="submit">
               <a class="btn btn-danger xhr dest_subcontent-element button" href="/ekeuanganpts/index.php?mod=finansi_cash_advance&amp;sub=CashAdvance&amp;act=view&amp;typ=html" title="Batal">
                  Batal
               </a>
            </div>
         </div>
      </form>
   </div>
</div>


<script type="text/javascript">
var formInput     = document.forms['frmInputCA'];
var formElements  = formInput.elements;

var clearCurrency = function(str){
   num      = str.toString();
   num      = num.replace(/\$|\./g, '');
   num      = num.replace(/\$|\,/g,'.');
   num      = parseFloat(num);
   return num;
}

var formatNumber = function (num, mode){
   var num     = num.toString();
   num         = num.replace(/\$|\,/g,'');
   if(isNaN(num)){
      num      = "0";
   }
   sign        = (num == (num = Math.abs(num)));
   num         = Math.floor(num*100+0.50000000001);
   cents       = num%100;
   num         = Math.floor(num/100).toString();
   if(cents<10){
      cents    = "0" + cents;
   }
   for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++){
      num      = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
   }

   return ((sign)?'':'-') + num + ',' + cents;;
}

document.getElementById('CoaPlaceHolder_jurnal').addItem     = function(prk_id, id,kode, nama, subAkun, keterangan, nominal_d, nominal_k){
   var elemen_id  = 'jurnal_debet_'+id;
   if(document.getElementById(elemen_id)){
      return true;
   }
   var frag             = document.createDocumentFragment();
   var childObj         = this.getElementsByTagName('tr');

   for (var i = childObj.length - 1; i >= 0; i--) {
      if(childObj[i].id === 'jurnal-empty-row' || childObj[i].id == 'row-jurnal-total'){
         this.removeChild(childObj[i]);
      }
    };
    
    var ronly = false;
    /*
    if( prk_id !== '0' ) {
        ronly = true;
    } 
    */
   var tr      = document.createElement('tr');
   tr.id       = elemen_id;

   var prKId       = document.createElement('input');
   prKId.type      = 'hidden';
   prKId.id        = 'jurnal-prk-id-'+id;
   prKId.name      = 'jurnal['+id+'][prk_id]';
   prKId.value     = prk_id;
   
   var inputId       = document.createElement('input');
   inputId.type      = 'hidden';
   inputId.id        = 'jurnal-id-'+id;
   inputId.name      = 'jurnal['+id+'][id]';
   inputId.value     = id;

   var tdKode        = document.createElement('td');
   tdKode.style.textAlign  = 'center';
   var inputKode     = document.createElement('input');
   inputKode.type    = 'hidden';
   inputKode.name    = 'jurnal['+id+'][kode]';
   inputKode.id      = 'jurnal-kode-'+id;
   inputKode.value   = kode;

   var labelKode     = document.createElement('label');
   labelKode.innerHTML  = kode;
   labelKode.style.display    = 'block';
   labelKode.style.width      = '100%';
   tdKode.appendChild(labelKode);

   var tdNama        = document.createElement('td');
   var inputNama     = document.createElement('input');
   inputNama.type    = 'hidden';
   inputNama.id      = 'jurnal-nama-'+id;
   inputNama.name    = 'jurnal['+id+'][nama]';
   inputNama.value   = nama;
   var labelNama     = document.createElement('label');
   labelNama.innerHTML  = nama;
   tdNama.appendChild(labelNama);

   var tdSubAkun     = document.createElement('td');
   var inputSubAkun  = document.createElement('input');
   inputSubAkun.type       = 'text';
   inputSubAkun.name       = 'jurnal['+id+'][subaccount]';
   inputSubAkun.className  = 'input_mask';
   inputSubAkun.size       = '22';
   inputSubAkun.id         = 'jurnal-sub-account-'+id;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = 'jurnal['+id+'][keterangan]';
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.style.width   = '100%';
   inputKeterangan.id            = 'jurnal-keterangan-'+id;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);


   var tdNominalD     = document.createElement('td');   
   var inputNominalDH           = document.createElement('input');
   inputNominalDH.type          = 'hidden';
   inputNominalDH.name          = 'jurnal['+id+'][nominal_d_h]';
   inputNominalDH.id            = 'jurnal-nominal-d-h'+id;
   inputNominalDH.value         = nominal_d;
   
   var inputNominalD           = document.createElement('input');
   inputNominalD.type          = 'text';
   inputNominalD.name          = 'jurnal['+id+'][nominal_d]';
   inputNominalD.className     = 'gvFloat';
   inputNominalD.id            = 'jurnal-nominal-d'+id;
   inputNominalD.value         = nominal_d;
   inputNominalD.setAttribute('onkeyup', 'validasiNominalJurnal("'+this.id+'", this,"D"); setNominalJurnal("'+this.id+'", this,"D");');
   inputNominalD.readOnly = ronly;
   tdNominalD.appendChild(inputNominalDH);
   tdNominalD.appendChild(inputNominalD);
   
   var tdNominalK     = document.createElement('td');
   var inputNominalKH           = document.createElement('input');
   inputNominalKH.type          = 'hidden';
   inputNominalKH.name          = 'jurnal['+id+'][nominal_k_h]';
   inputNominalKH.id            = 'jurnal-nominal-k-h'+id;
   inputNominalKH.value         = nominal_k;
   
   var inputNominalK           = document.createElement('input');
   inputNominalK.type          = 'text';
   inputNominalK.name          = 'jurnal['+id+'][nominal_k]';
   inputNominalK.className     = 'gvFloat';
   inputNominalK.id            = 'jurnal-nominal-k'+id;
   inputNominalK.value         = nominal_k;
   inputNominalK.setAttribute('onkeyup', 'validasiNominalJurnal("'+this.id+'", this,"K"); setNominalJurnal("'+this.id+'", this,"K");');
   inputNominalK.readOnly = ronly;
   tdNominalK.appendChild(inputNominalKH);
   tdNominalK.appendChild(inputNominalK);

   var tdAksi        = document.createElement('td');
   tdAksi.className  = 'links';
   tdAksi.style.padding       = 0;
   tdAksi.style.paddingTop    = '4px';
   tdAksi.style.textAlign     = 'center';
   var linkAksiDelete         = document.createElement('a');
   linkAksiDelete.className =' btn btn-xs btn-danger';
   linkAksiDelete.style.float = 'none';
   linkAksiDelete.style.display = 'inline-block';
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+id;
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.className            = 'fa fa-trash';
   iconDelete.alt             = 'delete';
   // if( prk_id === '0' ) {
        linkAksiDelete.appendChild(iconDelete);
        tdAksi.appendChild(linkAksiDelete);
   // }

   tdKode.appendChild(prKId);
   tdKode.appendChild(inputId);
   tdKode.appendChild(inputKode);
   tdKode.appendChild(inputNama);
   tr.appendChild(tdAksi);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);
   //tr.appendChild(tdKeterangan);
   tr.appendChild(tdNominalD);
   tr.appendChild(tdNominalK);

   frag.appendChild(tr);

   // elemen row total
   var trTotal       = document.createElement('tr');
   trTotal.id        = 'row-jurnal-total';
   trTotal.style.fontWeight      = 'bold';


   var tdTotalLabel              = document.createElement('td');
   tdTotalLabel.innerHTML        = 'Total';
   tdTotalLabel.style.textAlign  = 'center';
   tdTotalLabel.setAttribute('colspan', '4');

   var tdTotalNominalD            = document.createElement('td');
   var inputNominalTDH           = document.createElement('input');
   inputNominalTDH.type          = 'hidden';
   inputNominalTDH.name          = 'jurnal-total-d-h';   
   inputNominalTDH.id            = 'jurnal-total-d-h';
   var labelNominalTotalD         = document.createElement('label');
   labelNominalTotalD.id          = 'jurnal-total-d';
   labelNominalTotalD.style.display     = 'block';
   labelNominalTotalD.style.fontWeight  = 'bold';
   labelNominalTotalD.style.textAlign   = 'right';
   labelNominalTotalD.style.width       = '100%';
   labelNominalTotalD.innerHTML         = 0;
   tdTotalNominalD.appendChild(inputNominalTDH);
   tdTotalNominalD.appendChild(labelNominalTotalD);


   var tdTotalNominalK            = document.createElement('td');
   var inputNominalTKH           = document.createElement('input');
   inputNominalTKH.type          = 'hidden';
   inputNominalTKH.name          = 'jurnal-total-k-h';
   inputNominalTKH.id            = 'jurnal-total-k-h';
   var labelNominalTotalK         = document.createElement('label');
   labelNominalTotalK.id          = 'jurnal-total-k';
   labelNominalTotalK.style.display     = 'block';
   labelNominalTotalK.style.fontWeight  = 'bold';
   labelNominalTotalK.style.textAlign   = 'right';
   labelNominalTotalK.style.width       = '100%';
   labelNominalTotalK.innerHTML         = 0;
   tdTotalNominalK.appendChild(inputNominalTKH);
   tdTotalNominalK.appendChild(labelNominalTotalK);
   
   // var tdEmptyTotal              = document.createElement('td');
   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominalD);
   trTotal.appendChild(tdTotalNominalK);
   // trTotal.appendChild(tdEmptyTotal);
   frag.appendChild(trTotal);
   this.appendChild(frag);

   var childObjNominalD = tdNominalD.firstChild;
   do {
      if (childObjNominalD.tagName && childObjNominalD.tagName.toUpperCase() == 'INPUT' && childObjNominalD.getAttribute('class') != null && childObjNominalD.getAttribute('class').toUpperCase() == 'GVFLOAT'){
         gValidation20090108['.gvFloat'](childObjNominalD);
      }
   } while (childObjNominalD   = childObjNominalD.nextSibling);

   var childObjNominalK = tdNominalK.firstChild;
   do {
      if (childObjNominalK.tagName && childObjNominalK.tagName.toUpperCase() == 'INPUT' && childObjNominalK.getAttribute('class') != null && childObjNominalK.getAttribute('class').toUpperCase() == 'GVFLOAT'){
         gValidation20090108['.gvFloat'](childObjNominalK);
      }
   } while (childObjNominalK = childObjNominalK.nextSibling);


   var subAkunNode      = tdSubAkun.firstChild;
   do {
      if (subAkunNode.tagName && subAkunNode.tagName.toUpperCase() == 'INPUT' && subAkunNode.getAttribute('class') != null && subAkunNode.getAttribute('class').toUpperCase() == 'INPUT_MASK'){
         // $(subAkunNode).inputmask('**-**-**-**-**-**-**');
         custom_js['.input_mask'](subAkunNode);
      }
   } while (subAkunNode   = subAkunNode.nextSibling);
   
    setNominalJurnal(this.id,null,'D');
    setNominalJurnal(this.id,null,'K');
 
   return true;
}

var deleteRecord     = function(elemenId, el){
   var tBody         = document.getElementById(elemenId);
   if(typeof(tBody) != 'undefined' && tBody != null){
      var emptyRow   = 'jurnal-empty-row';
      var totalRow   = 'row-jurnal-total';

      var record        = el.parentNode.parentNode;
      var firstNode     = tBody.firstChild.nextSibling;
      var childObj      = tBody.getElementsByTagName('tr');

      if(firstNode.id != emptyRow || firstNode.id != totalRow){
         tBody.removeChild(record);
         if(childObj.length === 0){
            setEmptyRecord(tBody);
         }else{
            if(childObj[0].id == totalRow){
               setEmptyRecord(tBody);
            }else{
               setNominalJurnal(tBody.id,null,'D');
               setNominalJurnal(tBody.id,null,'K');
            }
         }
      }else{
         setEmptyRecord(tBody);
      }
   }else{
      console.log('Cannot find HTML elemen');
   }
}

var setEmptyRecord      = function(elemen){
   var emptyRow   = 'jurnal-empty-row';


   var childObj   = elemen.getElementsByTagName('tr');
   for (var i = childObj.length - 1; i >= 0; i--) {
      elemen.removeChild(childObj[i]);
   };

   var frag       = document.createDocumentFragment();
   var tr         = document.createElement('tr');
   tr.id          = emptyRow;
   var td         = document.createElement('td');
   td.setAttribute('colspan', 6);
   td.style.textAlign   = 'center';
   td.innerHTML   = 'Pilih Data Akun';

   tr.appendChild(td);
   frag.appendChild(tr);
   elemen.insertBefore(frag, elemen.firstChild);

   return true;
}

var validasiNominalJurnal    = function (elemenId, el, tipe){
   var patern     = /(\w+)\[(\d+)\]\[(\w+)\]/;
   
   var name       = el.name.match(patern);
   var elIndex    = name[2];
   var elName     = name[3];

   var debet      = document.getElementsByName('jurnal['+elIndex+'][nominal_d]')[0];
   var kredit     = document.getElementsByName('jurnal['+elIndex+'][nominal_k]')[0];
   var debet_hidden      = document.getElementsByName('jurnal['+elIndex+'][nominal_d_h]')[0];
   var kredit_hidden     = document.getElementsByName('jurnal['+elIndex+'][nominal_k_h]')[0];
   
   if(tipe === 'D') {
      if(clearCurrency(kredit.gvGetValue()) > 0) {
         var msg = confirm("Anda yakin akan mengubah nominal Kredit menjadi Debet?");
      }
   } else {
      if(clearCurrency(debet.gvGetValue()) > 0) {
         var msg = confirm("Anda yakin akan mengubah nominal Debet menjadi Kredit?");
      }
   }

   if (msg == true) {
      if(tipe === 'D') {
         if(clearCurrency(debet.gvGetValue()) > 0) {
            formatNumber(kredit.gvSetValue(0));
            kredit_hidden.value = '0';
         }
      } else {
         if(clearCurrency(kredit.gvGetValue()) > 0) {
            formatNumber(debet.gvSetValue(0));
            debet_hidden.value = '0';
         }
      }

      hitungTotal();
   } else {
      if(tipe === 'D') {
         if(clearCurrency(kredit.gvGetValue()) > 0) {
            formatNumber(debet.gvSetValue(0));
            formatNumber(kredit.gvSetValue(kredit.gvGetValue(0)));
         }
      } else {
         if(clearCurrency(debet.gvGetValue()) > 0) {
            formatNumber(kredit.gvSetValue(0));
            formatNumber(debet.gvSetValue(debet.gvGetValue(0)));
         }
      }

      hitungTotal();
   } 
}

var hitungTotal   = function(){
   var totalDebet    = 0;
   var totalKredit   = 0;
   var labelTotalDebet   = document.getElementById('jurnal-total-d');
   var labelTotalKredit  = document.getElementById('jurnal-total-k');
   var inputTotalDebet   = document.getElementById('jurnal-total-d-h');
   var inputTotalKredit  = document.getElementById('jurnal-total-k-h');
   var holder            = document.getElementById('CoaPlaceHolder_jurnal');
   var inputElement      = holder.getElementsByTagName('input');
   var rows              = holder.getElementsByTagName('tr');

   for (var i = rows.length - 1; i >= 0; i--) {
      var el_id   = /\sjurnal_debet_(.*?)\s/.exec(' '+rows[i].id+' ');

      if(el_id != null){
         var nominalDebet   = document.getElementsByName('jurnal['+el_id[1]+'][nominal_d]')[0];
         var nominalKredit  = document.getElementsByName('jurnal['+el_id[1]+'][nominal_k]')[0];

         if(nominalDebet && typeof(nominalDebet) != 'undefined'){
            totalDebet      += parseFloat(nominalDebet.gvGetValue());
         }

         if(nominalKredit && typeof(nominalKredit) != 'undefined'){
            totalKredit     += parseFloat(nominalKredit.gvGetValue());
         }
      }
   };

   if(labelTotalDebet != null || typeof(labelTotalDebet) != 'undefined'){
      inputTotalDebet.value       = totalDebet;
      labelTotalDebet.innerHTML       = formatNumber(totalDebet);
   }
   
   if(labelTotalKredit != null || typeof(labelTotalKredit) != 'undefined'){
      inputTotalKredit.value       = totalKredit;
      labelTotalKredit.innerHTML       = formatNumber(totalKredit);
   }
}

var setNominalJurnal    = function (elemenId, el, tipe){
   var elemen           = document.getElementById(elemenId);
   var childObj         = elemen.getElementsByTagName('input');
   var elemenId         = elemen.id.toUpperCase();
   //var maxNominal       = formElements.nominal.gvGetValue();
   if(tipe === 'D') {       
        var patern          = /jurnal\[(\d+)\]\[nominal_d\]/;
        var nominalHolderH   = document.getElementById('jurnal-total-d-h');  
        var nominalHolder   = document.getElementById('jurnal-total-d');
        if(el){
            var nominalD = document.getElementById(el.id).gvGetValue();
            var elNominalHD = el.id.toString().replace('jurnal-nominal-d','jurnal-nominal-d-h');
            var nominalHD =  document.getElementById(elNominalHD);
            nominalHD.value  = nominalD;
        }
   } else {
        var patern          = /jurnal\[(\d+)\]\[nominal_k\]/;
        var nominalHolderH   = document.getElementById('jurnal-total-k-h');
        var nominalHolder   = document.getElementById('jurnal-total-k');
        if(el){
            var nominalK = document.getElementById(el.id).gvGetValue();
            var elNominalHK = el.id.toString().replace('jurnal-nominal-k','jurnal-nominal-k-h');
            var nominalHK =  document.getElementById(elNominalHK);
            nominalHK.value  = nominalK;
        }
   }
   var nominalTotal     = 0;

   if(childObj.length > 0){
      for (var i = childObj.length - 1; i >= 0; i--) {
         var str  = childObj[i].name;
         if(str.match(patern)){
            var nominal       = clearCurrency(childObj[i].value);
            nominalTotal      += nominal;
         }
      };
   }
   /*
   if(nominalTotal > maxNominal){
      alert('Nominal melebihi nominal transaksi');
      if(el && typeof(el) != 'undefined'){
         nominalTotal-=parseFloat(el.gvGetValue());
         el.gvSetValue(parseFloat(0));
         el.focus();
      }
   }
   */
   if(nominalHolder != null || typeof(nominalHolder) != 'undefined'){
      nominalHolder.innerHTML       = formatNumber(nominalTotal);
      nominalHolderH.value          = nominalTotal;
   }
}

document.getElementById('CoaPlaceHolder_jurnal').deleteAllItem = function ()
{
   var Obj        = this.getElementsByTagName('tr');
   var emptyRow   = document.createElement('tr');
   emptyRow.id    = 'jurnal-empty-row';
   var tdEmpty    = document.createElement('td');
   tdEmpty.setAttribute('colspan', '6');
   tdEmpty.style.textAlign    = 'center';
   tdEmpty.style.fontStyle    = 'italic';
   tdEmpty.innerHTML          = '-- Pilih Data Akun -- ';
   emptyRow.appendChild(tdEmpty);

   for (var i = Obj.length - 1; i >= 0; i--) {
      this.removeChild(Obj[i]);
   };
   this.appendChild(emptyRow);
}

var dataJurnal       = [];

if(dataJurnal.length > 0){
   for(var i in dataJurnal){
      document.getElementById('CoaPlaceHolder_jurnal').addItem(
         dataJurnal[i].prk_id,
         dataJurnal[i].id,
         dataJurnal[i].kode,
         dataJurnal[i].nama,
         dataJurnal[i].sub_akun,
         dataJurnal[i].keterangan,
         dataJurnal[i].nominal_d,
         dataJurnal[i].nominal_k
      );
   }
}



  $( function() {
    $( "#tanggal" ).datepicker({
        dateFormat: 'd MM yy'
    });
  } );
  
  
    $('#frmInputCA').submit(function(event) {
        event.preventDefault(); 
        var nominalCA = parseFloat($('#nominal').val());
        var nominalTD = parseFloat($('#jurnal-total-d-h').val());
        var nominalTK = parseFloat($('#jurnal-total-k-h').val());  
         
    
        if($('#jurnal-total-d-h').length && $('#jurnal-total-k-h').length &&
                (nominalTD === nominalTK) && ( nominalTD !== nominalCA)) {
               dialogConfirm.dialog( "open" );           
        } else {
             processSubmit(true);
        }
        
    });
    
    var processSubmit = function(status){
        var action = $('#frmInputCA').attr('action');
        var dataToSend = $('#frmInputCA').serializeArray();
        
        if(status === false){
            dataToSend.push({name: 'status_submit', value: '0'});
        }
        
        $.ajax(action,{
            dataType : 'json',
            type : 'POST',
            data : dataToSend
        }).done(function(data){
            eval(data.exec);          
        }).fail(function(){
            alert('Data Tidak Diproses.');
        });
    };
    
    
    var dialogConfirm = $( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width: 600,
      modal: true,
      open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); },
      closeOnEscape: false,
      buttons: [
        {
            text : "Ya",
            class : 'dialog-ui-button-default',
            click : function() {
                processSubmit(true);
                $( this ).dialog( "close" );
            }
        },
        {
            text :"Tidak",
            class: 'dialog-ui-button-secondary',
            click : function() {
                processSubmit(false);
                $( this ).dialog( "close" );
            }
        }
        ]
      
    }); 
    
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>