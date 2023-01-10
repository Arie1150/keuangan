<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=76&amp;mid=76">Entri Jurnal</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=jurnal_penerimaan&amp;sub=inputJurnalPenerimaan&amp;act=view&amp;typ=html">Jurnal Kas Masuk</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Jurnal Kas Masuk
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
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
   font-weight: bold;
   border: none;
   text-align: right !important;
   background-color: inherit;
}



    div.option-wrap ,
    div.amortisasi-wrap {    
        display: inline-flex;
        margin-right: 5px;
    }
    div.option,
    div.amortisasi{
        padding: 3px 10px 3px 10px;
        font-weight: bold;
        min-width: 87px;
        min-height: 17px;
        /* display: inline-flex; */
        margin-right: 3px;
    }

    div.option {
        padding: 0px 10px 0px 10px;
    }

    div.green {
        background: #daf9ca;
    }

    div.option label{
        padding: 3px 3px 0px 5px;
        min-width: 30px;
    }

    div.amortisasi label {
        padding: 4px 3px 3px 5px;
        min-width: 30px;
    }

    div.disabled {
        background: #efecea !important;
        color: #d1c5c5 !important;
    }
    div.disabled input {
        border-color: #ddd4d4;
    }

    .no_referensi_bold {
        font-weight:  bold;
    }

    div.btn-ref-box {
        display: contents;
    }
</style> 

<div class="panel panel-default">
   <div class="panel-heading">
       <span class="panel-title">
          Tambah
       </span>
   </div>
   <div class="panel-body">
      
       
       
       <div class="btn-toolbar mb-15">
          <div class="btn-group pull-right"> 
                <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=jurnal_penerimaan&amp;sub=JurnalPenerimaan&amp;act=view&amp;typ=html" title="Daftar Jurnal Kas Masuk">
                    <i class="fa fa-list-alt"></i> Daftar Jurnal Kas Masuk
                </a>
          </div>
       </div>

       <form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=jurnal_penerimaan&amp;sub=AddJurnalPenerimaan&amp;act=do&amp;typ=json" class="xhr_form form-horizontal dest_subcontent-element" data-target="/ekeuanganpts/index.php?mod=jurnal_penerimaan&amp;sub=JurnalPenerimaan&amp;act=view&amp;typ=html" id="frmInput">
         <input type="hidden" name="data_id" value="">
         <input type="hidden" name="pembukuan_id" value="">
         <div class="form-group">
            <label class="col-md-3 control-label">
               Jenis Penerimaan
            </label>
            <div class="col-md-4">                       
               <label class="custom-control custom-radio radio-inline">
                  <input type="radio" name="is_penerimaan_mhs" value="T" checked="checked" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  Non-Mahasiswa
               </label>
               <label class="custom-control custom-radio radio-inline">
                  <input type="radio" name="is_penerimaan_mhs" value="Y" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  Mahasiswa
               </label> 
            </div>
         </div> 
         <div class="form-group" id="rencana-penerimaan-place" style="display: none;">
            <label class="col-md-3 control-label">
               Target Penerimaan
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="r_penerimaan_id" id="r_penerimaan_id" value="">
                  <input type="text" name="r_penerimaan_nama" id="r_penerimaan_nama" size="55" value="" readonly="" class="form-control">
                  <span class="input-group-btn">
                     <button type="button" class="btn btn-default" onclick="javascript:popupRencanaPenerimaan();">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div>  
         <div class="form-group">
            <label class="col-md-3 control-label" id="label-ref-peneriman">
                Ref. Penerimaan
            </label>
            <label class="col-md-3 control-label" id="label-ref-peneriman-mhs" style="display: none;">
               Ref. Trans Mahasiswa
            </label>
            <div class="col-md-4">   
               <div class="input-group">
                  <input type="hidden" name="referensi_id" value="" id="txt_referensi_id">
                  <input type="text" name="referensi_nama" id="txt_referensi_nama" size="55" value="" readonly="" class="form-control">                
              
                  <input type="hidden" name="no_referensi" id="no_referensi" value="">
                  <input type="hidden" name="gel_id" id="prodi_id" value="">
                  <input type="hidden" name="gel_nama" id="prodi_nama" value="">
                  <input type="hidden" name="prodi_id" id="prodi_id" value="">
                  <input type="hidden" name="prodi_nama" id="prodi_nama" value="">
                  <input type="hidden" name="jenis_pembayaran_id" id="jp_id" value="">
                  <input type="hidden" name="jenis_pembayaran_nama" id="jp_nama" value="">
                  <input type="hidden" name="trans_is_piutang" id="trans_is_piutang" value="">
                  <input type="hidden" name="trans_collection_id" id="trans_collection_id" value="">
                  <span class="input-group-btn" id="button-ref-place"><button type="button" class="btn btn-default" onclick="javascript:popupReferensi();"><i class="fa fa-search"></i></button></span>
               </div>                
                
            </div>
         </div>   

         <div class="form-group" id="jenis-pembayaran-place" style="display: none;">
            <label class="col-md-3 control-label">
               Jenis Pembayaran    
            </label>
            <div class="col-md-4">                   
               <label id="jenis-pembayaran-label" class="form-control-label">
                   
               </label> 
               <label style="font-size: 11px; font-style: italic">
                   ( Jenis Pembayaran akan terisi otomatis setelah memilih Ref. Trans Mahasiswa)
               </label>
            </div>
         </div>   

         <div class="form-group" id="tanggal-place" style="display: none;">
            <label class="col-md-3 control-label">
               Tanggal
            </label>
            <div class="col-md-4">          
               <input type="hidden" name="tanggal_old" id="tanggal_old" value="">
               <input type="text" name="tanggal" id="tanggal" value="10 January 2023" readonly="readonly" class="datepicker form-control">
            </div>
         </div>   

         <div class="form-group" id="no-referensi-place" style="display: none;">
            <label class="col-md-3 control-label">
               Nomor Referensi  
            </label>
            <div class="col-md-4">             
               <label id="no_referensi_label" class="form-control-label">
                   (Auto Number)
               </label>
            </div>
         </div>   

         <div class="form-group" id="nominal-transaksi-place">
            <label class="col-md-3 control-label">
               Nominal Ref. Transaksi   
            </label>
            <div class="col-md-4"> 
               <div class="input-group">
                     <div class="input-group-addon">
                        Rp.
                     </div> 
                     <input type="text" name="nominal_ref_transaksi" id="nominal_ref_transaksi" value="" class="gvFloat form-control" readonly="" style="text-align: right;"> 
               </div> 
            </div>
         </div>  
         <div id="amortisasi-place" style="display: none;">
            <div class="form-group">
               <label class="col-md-3 control-label">
                  Amortisasi  
               </label>
               <div class="col-md-4">                
                     <label class="custom-control custom-radio radio-inline">
                        <input type="radio" name="is_amortisasi" value="T" checked="checked" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        Tidak
                     </label>
                     <label class="custom-control custom-radio radio-inline">
                        <input type="radio" name="is_amortisasi" value="Y" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        Ya
                     </label>   
               </div>
            </div>  
            <div class="form-group">
               <div class="col-md-2 col-md-offset-3 ">
                  <div class="input-group">
                        <div class="input-group-addon">
                           Selama
                        </div> 
                        <input type="text" name="amortisasi" size="5" class="gvNum form-control" id="amortisasi-input" value="" disabled="" style="text-align: right;">
                        <div class="input-group-addon">
                           Bulan
                        </div> 
                  </div>  
               </div>
            </div>
         </div>
         <div class="form-group" id="nominal-amortisasi-place" style="display: none;">
            <label class="col-md-3 control-label">
               Nominal  
            </label>
            <div class="col-md-4"> 
               <div class="input-group">
                     <div class="input-group-addon">
                        Rp.
                     </div> 
                     <input type="hidden" name="nominal_amortisasi" id="nominal_amortisasi" value="0">
                     <input type="text" name="nominal" size="40" class="gvFloat form-control" id="nominal" value="" readonly="readonly" style="text-align: right;">
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
         <div class="form-group" id="penanggung-jawab-place">
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
                   Daftar 
                   Chart Of Account
                </span>
            </div>
            <div class="panel-body">                       
               <div class="btn-toolbar mb-15">
                  <div class="btn-group pull-right">
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=jurnal_penerimaan&amp;sub=Coa&amp;act=popup&amp;typ=html','Chart Of Account',600, 500);" title="Tambah COA">
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
                              <th style="width: 115px; display: none;">
                                 Nomor Referensi
                              </th>
                              <th>
                                 Deskripsi
                              </th>
                              <th style="width: 280px;">
                                 Debet 
                                 (Rp.)
                              </th>
                              <th style="width: 280px;">
                                 Kredit 
                                 (Rp.)
                              </th>

                           </tr>
                         </thead>
                         <tbody id="CoaPlaceHolder">
                            <tr id="coa-empty-row">
                              <td colspan="7" style="text-align: center;">
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
                      <input name="btnReset" value=" Batal " class="btn btn-danger" type="RESET">
                </div>
             </div>
          </form>
          
   </div>
</div>
    
<script type="text/javascript">
var formInput     = document.forms['frmInput'];
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

document.getElementById('CoaPlaceHolder').addItem = function(tipe, id, kode, nama, subAkun, referensi, keterangan, nominal){
   var elemen_id  = 'jurnal_'+tipe+'_'+id;
   if(document.getElementById(elemen_id)){
      return true;
   }
   var frag             = document.createDocumentFragment();
   var childObj         = this.getElementsByTagName('tr');

   for (var i = childObj.length - 1; i >= 0; i--) {
      if(childObj[i].id === 'coa-empty-row' || childObj[i].id == 'row-coa-total'){
         this.removeChild(childObj[i]);
      }
   };

   var tr      = document.createElement('tr');
   tr.id       = elemen_id;

   var inputId       = document.createElement('input');
   inputId.type      = 'hidden';
   inputId.id        = tipe+'-id-'+id;
   inputId.name      = tipe+'['+id+'][id]';
   inputId.value     = id;

   var tdKode        = document.createElement('td');
   tdKode.style.textAlign  = 'center';
   var inputKode     = document.createElement('input');
   inputKode.type    = 'hidden';
   inputKode.name    = tipe+'['+id+'][kode]';
   inputKode.id      = tipe+'-kode-'+id;
   inputKode.value   = kode;

   var labelKode     = document.createElement('label');
   labelKode.innerHTML  = kode;
   labelKode.style.display    = 'block';
   labelKode.style.width      = '100%';
   tdKode.appendChild(labelKode);

   var tdNama        = document.createElement('td');
   var inputNama     = document.createElement('input');
   inputNama.type    = 'hidden';
   inputNama.id      = tipe+'-nama-'+id;
   inputNama.name    = tipe+'['+id+'][nama]';
   inputNama.value   = nama;
   var labelNama     = document.createElement('label');
   labelNama.innerHTML  = nama;
   tdNama.appendChild(labelNama);

   var tdSubAkun     = document.createElement('td');
   var inputSubAkun  = document.createElement('input');
   inputSubAkun.type       = 'text';
   inputSubAkun.name       = tipe+'['+id+'][subaccount]';
   inputSubAkun.className  = 'input_mask';
   inputSubAkun.size       = '22';
   inputSubAkun.id         = tipe+'-sub-account-'+id;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);

   var tdReferensi   = document.createElement('td');
   var inputReferensi      = document.createElement('input');
   inputReferensi.type     = 'text';
   inputReferensi.name     = tipe+'['+id+'][nomor_referensi]';
   inputReferensi.id       = tipe+'-referensi-'+id;
   inputReferensi.value    = referensi;
   tdReferensi.appendChild(inputReferensi);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = tipe+'['+id+'][keterangan]';
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.style.width   = '100%';
   inputKeterangan.id            = tipe+'-keterangan-'+id;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);

   var tdNominal     = document.createElement('td');
   var inputNominal           = document.createElement('input');
   inputNominal.type          = 'text';
   inputNominal.name          = tipe+'['+id+'][nominal]';
   inputNominal.className     = 'gvFloat';
   inputNominal.id            = tipe+'-nominal-'+id;
   inputNominal.value         = nominal;
   inputNominal.setAttribute('onkeyup', 'setNominalJurnal("'+this.id+'", this);');
   tdNominal.appendChild(inputNominal);

   var tdAksi        = document.createElement('td');
   tdAksi.className  = 'links';
   tdAksi.style.padding       = 0;
   tdAksi.style.paddingTop    = '4px';
   tdAksi.style.textAlign     = 'center';
   var linkAksiDelete         = document.createElement('button');
   linkAksiDelete.style.float = 'none';
   linkAksiDelete.style.display = 'inline-block';
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+id;
   linkAksiDelete.classList.add('btn','btn-xs','btn-danger');
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.classList.add('fa','fa-trash');
   iconDelete.alt             = 'delete';
   linkAksiDelete.appendChild(iconDelete);
   tdAksi.appendChild(linkAksiDelete);

   var tdNominalEmtpy = document.createElement('td');

   tr.appendChild(inputId);
   tr.appendChild(inputKode);
   tr.appendChild(inputNama);
   tr.appendChild(tdAksi);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);
   // tr.appendChild(tdReferensi);
   tr.appendChild(tdKeterangan);

   if(tipe == 'debet') {
      tr.appendChild(tdNominal);
      tr.appendChild(tdNominalEmtpy);
   } else if(tipe == 'kredit') {
      tr.appendChild(tdNominalEmtpy);
      tr.appendChild(tdNominal);
   } 

   frag.appendChild(tr);

   // elemen row total
   var trTotal       = document.createElement('tr');
   trTotal.id        = 'row-coa-total';
   trTotal.style.fontWeight      = 'bold';

   var tdTotalLabel              = document.createElement('td');
   tdTotalLabel.innerHTML        = 'Total';
   tdTotalLabel.style.textAlign  = 'center';
   tdTotalLabel.setAttribute('colspan', '5');

   var tdTotalNominalDebet                   = document.createElement('td');
   var labelNominalTotalDebet                = document.createElement('label');
   labelNominalTotalDebet.id                 = 'debet-total';
   labelNominalTotalDebet.style.display      = 'block';
   labelNominalTotalDebet.style.fontWeight   = 'bold';
   labelNominalTotalDebet.style.textAlign    = 'right';
   labelNominalTotalDebet.style.width        = '100%';
   labelNominalTotalDebet.innerHTML          = 0;
   tdTotalNominalDebet.appendChild(labelNominalTotalDebet);

   var tdTotalNominalKredit                  = document.createElement('td');
   var labelNominalTotalKredit               = document.createElement('label');
   labelNominalTotalKredit.id                = 'kredit-total';
   labelNominalTotalKredit.style.display     = 'block';
   labelNominalTotalKredit.style.fontWeight  = 'bold';
   labelNominalTotalKredit.style.textAlign   = 'right';
   labelNominalTotalKredit.style.width       = '100%';
   labelNominalTotalKredit.innerHTML         = 0;
   tdTotalNominalKredit.appendChild(labelNominalTotalKredit);

   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominalDebet);
   trTotal.appendChild(tdTotalNominalKredit);
   frag.appendChild(trTotal);
   this.appendChild(frag);

   setNominalJurnal(this.id);

   var childObjNominal = tdNominal.firstChild;
   do {
      if (childObjNominal.tagName && childObjNominal.tagName.toUpperCase() == 'INPUT' && childObjNominal.getAttribute('class') != null && childObjNominal.getAttribute('class').toUpperCase() == 'GVFLOAT'){
         gValidation20090108['.gvFloat'](childObjNominal);
      }
   } while (childObjNominal   = childObjNominal.nextSibling);

   var subAkunNode      = tdSubAkun.firstChild;
   do {
      if (subAkunNode.tagName && subAkunNode.tagName.toUpperCase() == 'INPUT' && subAkunNode.getAttribute('class') != null && subAkunNode.getAttribute('class').toUpperCase() == 'INPUT_MASK'){
         // $(subAkunNode).inputmask('**-**-**-**-**-**-**');
         custom_js['.input_mask'](subAkunNode);
      }
   } while (subAkunNode   = subAkunNode.nextSibling);


   return true;
}

var deleteRecord     = function(elemenId, el){
   var tBody         = document.getElementById(elemenId);
   if(typeof(tBody) != 'undefined' && tBody != null){
      var emptyRow   = 'coa-empty-row';
      var totalRow   = 'row-coa-total';
      var record     = el.parentNode.parentNode;
      var firstNode  = tBody.firstChild.nextSibling;
      var childObj   = tBody.getElementsByTagName('tr');

      if(firstNode.id != emptyRow || firstNode.id != totalRow){
         tBody.removeChild(record);
         if(childObj.length === 0){
            setEmptyRecord(tBody);
         }else{
            if(childObj[0].id == totalRow){
               setEmptyRecord(tBody);
            }else{
               setNominalJurnal(tBody.id);
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
   var emptyRow   = 'coa-empty-row';

   var childObj   = elemen.getElementsByTagName('tr');
   for (var i = childObj.length - 1; i >= 0; i--) {
      elemen.removeChild(childObj[i]);
   };

   var frag       = document.createDocumentFragment();
   var tr         = document.createElement('tr');
   tr.id          = emptyRow;
   var td         = document.createElement('td');
   td.setAttribute('colspan', 7);
   td.style.textAlign   = 'center';
   td.innerHTML   = 'Pilih Data Akun';

   tr.appendChild(td);
   frag.appendChild(tr);
   elemen.insertBefore(frag, elemen.firstChild);

   return true;
}

var setNominalJurnal    = function (elemenId, el){
   var elemen     = document.getElementById(elemenId);
   var childObj   = elemen.getElementsByTagName('input');
   var maxNominal          = formElements.nominal.gvGetValue();
   var nominalDebetTotal   = 0;
   var nominalKreditTotal  = 0;
   var nominalDebetHolder  = document.getElementById('debet-total');
   var nominalKreditHolder = document.getElementById('kredit-total');

   if(childObj.length > 0){
      for (var i = childObj.length - 1; i >= 0; i--) {
         var nominal = 0;
         var str = childObj[i].name;
         if(str.match(/debet\[(\d+)\]\[nominal\]/)){
            var nominal = clearCurrency(childObj[i].value);
            nominalDebetTotal += nominal;
         }

         if(str.match(/kredit\[(\d+)\]\[nominal\]/)){
            var nominal = clearCurrency(childObj[i].value);
            nominalKreditTotal += nominal;
         }
      };
   }

   if(nominalDebetTotal > maxNominal){
      alert('Nominal debet melebihi nominal transaksi');
      if(el && typeof(el) != 'undefined'){
         nominalDebetTotal-=parseFloat(el.gvGetValue());
         el.gvSetValue(parseFloat(0));
         el.focus();
      }
   }

   if(nominalKreditTotal > maxNominal){
      alert('Nominal kredit melebihi nominal transaksi');
      if(el && typeof(el) != 'undefined'){
         nominalKreditTotal-=parseFloat(el.gvGetValue());
         el.gvSetValue(parseFloat(0));
         el.focus();
      }
   }

   if(nominalDebetHolder != null || typeof(nominalDebetHolder) != 'undefined'){
      nominalDebetHolder.innerHTML = formatNumber(nominalDebetTotal);
   }

   if(nominalKreditHolder != null || typeof(nominalKreditHolder) != 'undefined'){
      nominalKreditHolder.innerHTML = formatNumber(nominalKreditTotal);
   }
}

var dataAkunKredit      = [];
var dataAkunDebet       = [];

if(dataAkunDebet.length > 0){
   for(var i in dataAkunDebet){
      document.getElementById('CoaPlaceHolder').addItem(
         'debet',
         dataAkunDebet[i].id,
         dataAkunDebet[i].kode,
         dataAkunDebet[i].nama,
         dataAkunDebet[i].sub_akun,
         dataAkunDebet[i].referensi,
         dataAkunDebet[i].keterangan,
         dataAkunDebet[i].nominal
      );
   }
}

if(dataAkunKredit.length > 0){
   for(var i in dataAkunKredit){
      document.getElementById('CoaPlaceHolder').addItem(
         'kredit',
         dataAkunKredit[i].id,
         dataAkunKredit[i].kode,
         dataAkunKredit[i].nama,
         dataAkunKredit[i].sub_akun,
         dataAkunKredit[i].referensi,
         dataAkunKredit[i].keterangan,
         dataAkunKredit[i].nominal
      );
   }
}

//popup transaksi refrensi
    var popupReferensi = function() {
        showPopup('/ekeuanganpts/index.php?mod=jurnal_penerimaan&sub=ReferensiTransaksi&act=popup&typ=html', 'Ref. Penerimaan', 650, 550);
    }

    var popupRefTransMhs = function() {
        showPopup('/ekeuanganpts/index.php?mod=jurnal_penerimaan&sub=popupRefTransaksiMhs&act=view&typ=html', 'Ref. Trans Mahasiswa', 650, 550);
    }

    var popupRencanaPenerimaan = function() {
        showPopup('/ekeuanganpts/index.php?mod=jurnal_penerimaan&sub=PopupRencanaPenerimaan&act=view&typ=html', 'Target Penerimaan', 650, 550);
    }


//untuk penerimaan mahasiswa dan amortiasi

    var hitungAmortisasi = function(){
        var nominalRef = document.getElementById('nominal_ref_transaksi').gvGetValue();
        var amortisasi = document.getElementById('amortisasi-input').gvGetValue();
        var nominalAmortisasi = nominalRef;
        if(amortisasi > 0 ){
            nominalAmortisasi = parseFloat(nominalRef) / parseFloat(amortisasi);
        }
        
        var inNominalAmortisasi = document.getElementById('nominal');
        inNominalAmortisasi.gvSetValue(parseFloat(nominalAmortisasi));
    }
    
    var setAmortisasi = function (value) { 
        var nominalRef = document.getElementById('nominal_ref_transaksi').gvGetValue();
        if (value === 'Y') {
            $('#amortisasi-lama').removeClass('disabled');
            $('#amortisasi-input').prop('disabled', false);                         
            $('#nominal_amortisasi').val(nominalRef);
        } else {
            $('#amortisasi-lama').addClass('disabled');
            $('#amortisasi-input').val(0);
            $('#amortisasi-input').prop('disabled', true);
            $('#nominal_amortisasi').val(0);
            var inNominalAmortisasi = document.getElementById('nominal');
            inNominalAmortisasi.gvSetValue(parseFloat(nominalRef));
        }
        hitungAmortisasi();
    }

    var setJenisPenerimaan = function (value) {                     
        var el_btn = '<button type="button" class="btn btn-default" onclick="javascript:popupReferensi();" ><i class="fa fa-search"></i></button>';
        var el_btn_mhs = '<button type="button" class="btn btn-default" onclick="javascript:popupRefTransMhs();" ><i class="fa fa-search"></i></button>'; 
        if (value === 'Y') {
            $('#label-ref-peneriman').hide();
            $('#label-ref-peneriman-mhs').show();
            $('#tanggal-place').show();
            $('#no-referensi-place').show();
            $('#rencana-penerimaan-place').show();
            $('#jenis-pembayaran-place').show();
            //$('#penanggung-jawab-place').show();
            
            $('#nominal-transaksi-place').show();
            $('#amortisasi-place').show();
            $('#nominal-amortisasi-place').show();
            
            $('#button-ref-place').html(el_btn_mhs);
        } else {
            $('#label-ref-peneriman').show();
            $('#label-ref-peneriman-mhs').hide();
            $('#tanggal-place').hide();
            $('#no-referensi-place').hide();
            $('#rencana-penerimaan-place').hide();
            $('#jenis-pembayaran-place').hide();
            //$('#penanggung-jawab-place').hide();
            
            $('#nominal-transaksi-place').show();
            $('#amortisasi-place').hide();
            $('#nominal-amortisasi-place').hide();
            
            $('#button-ref-place').html(el_btn);
        }
    }

    var setEmptyPembayaranMhs = function () {
        $('#txt_referensi_id').val(null);
        $('#txt_referensi_nama').val(null);
        $('#referensi_tanggal').val(null);
        $('#referensi_keterangan').val(null);
        document.getElementById('nominal_ref_transaksi').gvSetValue(parseFloat(0));

        $('#jp_id').val(null);
        $('#jp_nama').val(null);
        $('#jenis-pembayaran-label').html('');
        $('#trans_is_piutang').val(null);
        $('#prodi_id').val(null);
        $('#prodi_nama').val(null);
        $('#trans_collection_id').val(null);
    }

    var setEmptyIsAmortisasi = function() {
        var nominalTrRef =  $("input[name='nominal_ref_transaksi']").val();
        $('#amortisasi-input').val(0);
        $('#nominal').val(nominalTrRef);
        $('#nominal_amortisasi').val(0);
    }
    
    $(function () {
        Behaviour.apply();
        //get value
        var isAmortisasi = $("input[name='is_amortisasi']:checked").val();
        var isPenerimaanMhs = $("input[name='is_penerimaan_mhs']:checked").val();
        //set value
        setAmortisasi(isAmortisasi);
        setJenisPenerimaan(isPenerimaanMhs);
        //
        $("input[name='is_amortisasi']").click(function () {
            setAmortisasi($(this).val());
            //setEmptyIsAmortisasi();
        });

        $("input[name='is_penerimaan_mhs']").click(function () {
            setJenisPenerimaan($(this).val());
            setEmptyPembayaranMhs();
            //
            setAmortisasi('T');
            setEmptyIsAmortisasi();
        });

        $("input[name='amortisasi']").keyup(function () {
            hitungAmortisasi();
        });
        //for-tanggal
        $( "#tanggal" ).datepicker({
            dateFormat: 'd MM yy'
        });
    });
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>