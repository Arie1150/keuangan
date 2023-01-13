<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      
<script language="javascript" type="text/javascript">
    function bukaPopupUnitkerja(xurl) {
       showPopup(xurl,'',600,500);
    }
   
    function bukaPopupAP(xurl) {
        showPopup(xurl ,'Account Payable',600, 500);
    }
    
    function popupCoa(xurl){
        var trans_ap_id = document.getElementById('trans_ap_id');
        if(!trans_ap_id.value) {            
            alert('Silahkan Memilih Account Payable sebelum memilih Kode Akun');
        } else {
            showPopup(xurl,'',600, 500);
        }
    }
</script>
   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=46&amp;mid=46">Transaksi Realisasi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=transaksi&amp;act=view&amp;typ=html">Payment Instruction</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Payment Instruction
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
      <div class="">
         
      </div>
      
      <div class="btn-toolbar mb-15">
         <div class="btn-group pull-right"> 
            <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=TransaksiDetil&amp;act=view&amp;typ=html" title="Daftar Jurnal">
               <i class="fa fa-list-alt"></i> List Jurnal
            </a>
         </div>
      </div>

      <form method="POST" action="/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=AddTransaksi&amp;act=do&amp;typ=json" name="frmInputPI" id="frmInputPI" class="std_form form-horizontal">
         <input type="hidden" name="check" id="check" value="">
         <input type="hidden" name="aksi" value="add">
         <input type="hidden" name="trans_id" value="">
         <input type="hidden" name="pembukuan_id" value="">
         <div class="form-group" id="no_bkk">
            <label class="col-md-3 control-label">
               Nomor Bukti    
            </label>
            <div class="col-md-4">                   
               <label class="form-control-label">
                                   
                        (Auto Number)
                     
               </label>
            </div>
         </div>   
         <div class="form-group">
            <label class="col-md-3 control-label">
               Account Payable
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="trans_ap_id" id="trans_ap_id" value="">
                  <input type="hidden" name="trans_ap_id_old" id="trans_ap_id_old" value="">
                  <input type="text" name="nomor_ap" id="nomor_ap" value="" readonly="readonly" class="form-control">
                  <span class="input-group-btn">
                     <button type="button" but_mak"="" class="btn btn-default" id="but_mak" onclick="bukaPopupAP('/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=PopupKegiatanDetil&amp;act=view&amp;typ=html')" value=" ... ">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Unit Kerja
            </label>
            <div class="col-md-4">          
               <input type="hidden" name="unit_kerja_id" id="unit_kerja_id" value="">
               <input type="hidden" name="unit_kerja_id_old" id="unit_kerja_id_old" value="">
               <input type="hidden" name="unit_kerja_nama" id="unit_kerja_nama" value="-">
               <input type="button" style="display:none" name="but_unitkerja" onclick="bukaPopupUnitkerja('/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html')" value=" ... ">
               <label class="form-control-label" id="unit_kerja_label">-</label>
               <label style="font-size: 11px; font-style: italic">( Unit Kerja akan terisi otomatis setelah memilih Account Payable )</label>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Tanggal Transaksi  
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
               <input type="hidden" name="nominal" id="nominal" value="">
               <label class="form-control-label" style="font-weight: bold;">
                  Rp
                  <label id="nominal_f">0,00</label>
               </label>
            </div>
         </div>  
         <div class="form-group">
            <label class="col-md-3 control-label">
               Keterangan
            </label>
            <div class="col-md-4"> 
               <textarea name="keterangan" id="keterangan" rows="4" class="form-control"></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Penanggung Jawab *
            </label>
            <div class="col-md-4"> 
               <input type="text" name="penanggung_jawab" id="penanggung_jawab" value="Demo PTS" size="40" class="form-control">
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
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoa('/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=PopupCoa&amp;act=view&amp;typ=html');" title="Tambah Debet">
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
                              Kode Akun
                           </th>
                           <th style="width: 145px;">
                              Atribut
                           </th>
                           <th style="width: 215px;">
                              Nama Rekening
                           </th>
                           <th style="width: 70px; display:none;">
                              Jenis Pajak
                           </th>
                           <th style="width: 115px;">
                              Debet
                           </th>
                           <th style="width: 115px;">
                              Kredit
                           </th>
                        </tr>
                     </thead>
                     <tbody id="CoaPlaceHolder_jurnal">
                        <tr id="jurnal-empty-row">
                           <td colspan="7" style="text-align: center;">
                              Pilih data Akun
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="panel panel-default" style="display:none;">
            <div class="panel-heading">
               <span class="panel-title">
                  Pajak
               </span>
            </div>
            <div class="panel-body">                       
               <div class="btn-toolbar mb-15">
                  <div class="btn-group pull-right">
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoa('/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=PopupCoa&amp;act=view&amp;typ=html');" title="Tambah Debet">
                           <i class="fa fa-plus-circle"></i> Tambah Akun
                     </a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                     <tbody>
                        
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-offset-3 col-md-7">
               <input name="btnsimpan" value=" Simpan " class="btn btn-primary" type="submit">
               <a class="xhr dest_subcontent-element button btn btn-danger" href="/ekeuanganpts/index.php?mod=transaksi_realisasi&amp;sub=TransaksiDetil&amp;act=view&amp;typ=html" title="Batal">
                  Batal
               </a>
            </div>
         </div>
      </form>
   </div>
</div>
<br>
<div class="petunjuk-area">
   <h4>Petunjuk</h4>
   <ul>
      <li>Tanda <label class="required"></label> menunjukkan bahwa field tersebut harus diisi</li>
   </ul>
</div>

 

<script type="text/javascript">
var formInput     = document.forms['frmInputPI'];
var formElements  = formInput.elements;

var clearCurrency = function(str){
   num      = str.toString();
   num      = num.replace(/\$|\./g, '');
   num      = num.replace(/\$|\,/g,'.');
   num      = parseFloat(num);
   return num;
};

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

   return ((sign)?'':'-') + num + ',' + cents;
};

document.getElementById('CoaPlaceHolder_jurnal').addItem     = function(trans_id, id,kode, nama, subAkun, j_pajak, keterangan, nominal_d, nominal_k){
    
   var elemen_id  = 'jurnal_debet_'+id;
   if(document.getElementById(elemen_id)){
      return true;
   }
   var frag             = document.createDocumentFragment();
   var childObj         = this.getElementsByTagName('tr');

   for (var i = childObj.length - 1; i >= 0; i--) {
      if(childObj[i].id === 'jurnal-empty-row' || childObj[i].id === 'row-jurnal-total'){
         this.removeChild(childObj[i]);
      }
    };
    
    var ronly = false;
   var tr      = document.createElement('tr');
   tr.id       = elemen_id;

   var prKId       = document.createElement('input');
   prKId.type      = 'hidden';
   prKId.id        = 'jurnal-trans-id-'+id;
   prKId.name      = 'jurnal['+id+'][trans_id]';
   prKId.value     = trans_id;
   
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
   /**
   var tdJpajak   = document.createElement('td');
   tdJpajak.style ="text-align:center";
   var inputJpajak = document.createElement('select');
   inputJpajak.name     = 'jurnal['+id+'][j_pajak]';
   inputJpajak.id       = 'jurnal-j-pajak-'+id;
   var jPajakArray = [{"id":0,"nama":"--Pilih--"},{"id":"3","nama":"PPh Pasal 4 (2)"},{"id":"2","nama":"PPh-21"},{"id":"4","nama":"PPh-23"},{"id":"1","nama":"PPN"}];
   var options_str = "";
    if(jPajakArray.length > 0){
        for (var i in jPajakArray){
            var selected ='';
            if(j_pajak === jPajakArray[i]['id']) {
                selected = 'selected="selected"';
            }
            options_str += '<option value="' + jPajakArray[i]['id'] + '" '+ selected +' >' + 
                        jPajakArray[i]['nama'] + 
                        '</option>';
        }
    }

   inputJpajak.innerHTML = options_str;
   tdJpajak.appendChild(inputJpajak);
   */
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
   inputNominalDH.value         = (nominal_d);
   var inputNominalD           = document.createElement('input');
   inputNominalD.type          = 'text';
   inputNominalD.name          = 'jurnal['+id+'][nominal_d]';
   inputNominalD.className     = 'gvFloat';
   inputNominalD.id            = 'jurnal-nominal-d'+id;
   inputNominalD.value         = (nominal_d);
   inputNominalD.setAttribute('onkeyup', 'validasiNominalJurnal("'+this.id+'", this,"D"); setNominalJurnal("'+this.id+'", this,"D");');
   inputNominalD.readOnly = ronly;
   tdNominalD.appendChild(inputNominalDH);
   tdNominalD.appendChild(inputNominalD);
   
   var tdNominalK     = document.createElement('td');
   var inputNominalKH           = document.createElement('input');
   inputNominalKH.type          = 'hidden';
   inputNominalKH.name          = 'jurnal['+id+'][nominal_k_h]';   
   inputNominalKH.id            = 'jurnal-nominal-k-h'+id;
   inputNominalKH.value         = (nominal_k);
   var inputNominalK           = document.createElement('input');
   inputNominalK.type          = 'text';
   inputNominalK.name          = 'jurnal['+id+'][nominal_k]';
   inputNominalK.className     = 'gvFloat';
   inputNominalK.id            = 'jurnal-nominal-k'+id;
   inputNominalK.value         = (nominal_k);
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
   // if( trans_id === '0' ) {
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
   //tr.appendChild(tdJpajak);
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
      if (childObjNominalD.tagName && childObjNominalD.tagName.toUpperCase() === 'INPUT' && childObjNominalD.getAttribute('class') !== null && childObjNominalD.getAttribute('class').toUpperCase() === 'GVFLOAT'){
         gValidation20090108['.gvFloat'](childObjNominalD);
      }
   } while (childObjNominalD   = childObjNominalD.nextSibling);

   var childObjNominalK = tdNominalK.firstChild;
   do {
      if (childObjNominalK.tagName && childObjNominalK.tagName.toUpperCase() === 'INPUT' && childObjNominalK.getAttribute('class') !== null && childObjNominalK.getAttribute('class').toUpperCase() === 'GVFLOAT'){
         gValidation20090108['.gvFloat'](childObjNominalK);
      }
   } while (childObjNominalK = childObjNominalK.nextSibling);


   var subAkunNode      = tdSubAkun.firstChild;
   do {
      if (subAkunNode.tagName && subAkunNode.tagName.toUpperCase() === 'INPUT' && subAkunNode.getAttribute('class') !== null && subAkunNode.getAttribute('class').toUpperCase() === 'INPUT_MASK'){
         // $(subAkunNode).inputmask('**-**-**-**-**-**-**');
         custom_js['.input_mask'](subAkunNode);
      }
   } while (subAkunNode   = subAkunNode.nextSibling);
   
    //gValidation20090108['.gvFloat'](inputNominalD);
    setNominalJurnal(this.id,null,'D');
    setNominalJurnal(this.id,null,'K');
 
   return true;
};

var deleteRecord     = function(elemenId, el){
   var tBody         = document.getElementById(elemenId);
   if(typeof(tBody) !== 'undefined' && tBody !== null){
      var emptyRow   = 'jurnal-empty-row';
      var totalRow   = 'row-jurnal-total';

      var record        = el.parentNode.parentNode;
      var firstNode     = tBody.firstChild.nextSibling;
      var childObj      = tBody.getElementsByTagName('tr');

      if(firstNode.id !== emptyRow || firstNode.id !== totalRow){
         tBody.removeChild(record);
         if(childObj.length === 0){
            setEmptyRecord(tBody);
         }else{
            if(childObj[0].id === totalRow){
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
};

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
   var debet_h    = document.getElementsByName('jurnal['+elIndex+'][nominal_d_h]')[0];
   var kredit_h   = document.getElementsByName('jurnal['+elIndex+'][nominal_k_h]')[0];
   
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
            kredit_h.value = 0;
            debet_h.value = debet.gvGetValue();
         }
      } else {
         if(clearCurrency(kredit.gvGetValue()) > 0) {
            formatNumber(debet.gvSetValue(0));
            debet_h.value = 0;
            kredit_h.value = kredit.gvGetValue();
         }
      }

      hitungTotal();
   } else {
      if(tipe === 'D') {
         if(clearCurrency(kredit.gvGetValue()) > 0) {
            formatNumber(debet.gvSetValue(0));
            formatNumber(kredit.gvSetValue(kredit.gvGetValue()));
            debet_h.value = 0;
            kredit_h.value = kredit.gvGetValue();
         } else {
            debet_h.value = debet.gvGetValue();
         }
      } else {
         if(clearCurrency(debet.gvGetValue()) > 0) {
            formatNumber(kredit.gvSetValue(0));
            formatNumber(debet.gvSetValue(debet.gvGetValue()));
            kredit_h.value = 0;
            debet_h.value = debet.gvGetValue();
         } else {
            kredit_h.value = kredit.gvGetValue();
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
   var inputTotalDebetHidden   = document.getElementById('jurnal-total-d-h');
   var inputTotalKreditHidden  = document.getElementById('jurnal-total-k-h');
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
      labelTotalDebet.innerHTML       = formatNumber(totalDebet);
   }
   if(inputTotalDebetHidden != null || typeof(inputTotalDebetHidden) != 'undefined'){
      inputTotalDebetHidden.value = totalDebet;
   }
   
   if(labelTotalKredit != null || typeof(labelTotalKredit) != 'undefined'){
      labelTotalKredit.innerHTML       = formatNumber(totalKredit);
   }
   if(inputTotalKreditHidden != null || typeof(inputTotalKreditHidden) != 'undefined'){
      inputTotalKreditHidden.value = totalKredit;
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
   if(nominalHolder != null || typeof(nominalHolder) != 'undefined'){
      nominalHolder.innerHTML       = formatNumber(nominalTotal);
      nominalHolderH.value          = nominalTotal;
   }
};

document.getElementById('CoaPlaceHolder_jurnal').deleteAllItem = function ()
{
   var Obj        = this.getElementsByTagName('tr');
   var emptyRow   = document.createElement('tr');
   emptyRow.id    = 'jurnal-empty-row';
   var tdEmpty    = document.createElement('td');
   tdEmpty.setAttribute('colspan', '7');
   tdEmpty.style.textAlign    = 'center';
   tdEmpty.style.fontStyle    = 'italic';
   tdEmpty.innerHTML          = '-- Pilih Data Akun -- ';
   emptyRow.appendChild(tdEmpty);

   for (var i = Obj.length - 1; i >= 0; i--) {
      this.removeChild(Obj[i]);
   };
   this.appendChild(emptyRow);
};

var dataJurnal       = [];
if(dataJurnal.length > 0){
   for(var i in dataJurnal){
      document.getElementById('CoaPlaceHolder_jurnal').addItem(
         dataJurnal[i].trans_id,
         dataJurnal[i].id,
         dataJurnal[i].kode,
         dataJurnal[i].nama,
         dataJurnal[i].sub_akun,
         dataJurnal[i].j_pajak,
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
    });
  
    
    $('#frmInputPI').submit(function(event) {
        event.preventDefault(); 
        var nominalAP = parseFloat($('#nominal').val());
        var nominalTD = parseFloat($('#jurnal-total-d-h').val());
        var nominalTK = parseFloat($('#jurnal-total-k-h').val());  
         
    
        if($('#jurnal-total-d-h').length && $('#jurnal-total-k-h').length &&
                (nominalTD === nominalTK) && ( nominalTD !== nominalAP)) {
               dialogConfirm.dialog( "open" );           
        } else {
             processSubmit(true);
        }
        
    });
    
    var processSubmit = function(status){
        var action = $('#frmInputPI').attr('action');
        var dataToSend = $('#frmInputPI').serializeArray();
        
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