<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=76&amp;mid=76">Entri Jurnal</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=InputJurnalPettyCash&amp;act=view&amp;typ=html">Jurnal Petty Cash</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Jurnal Petty Cash
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script languange="javascript">
function disableBentukTransaksi(value){
   if(value =='Y'){
      document.getElementById('bentukTransaksi').disabled=false;
   } else{
      document.getElementById('bentukTransaksi').disabled=true;
      document.getElementById('bentukTransaksi').value='';
   }
}
</script>

<div class="panel panel-default">
   <div class="panel-heading">
      <span class="panel-title">
         Tambah
      </span>
   </div>
   <div class="panel-body">
      
      <div class="btn-toolbar mb-15">
         <div class="btn-group pull-right"> 
            <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=JurnalPettyCash&amp;act=view&amp;typ=html" title="Daftar Jurnal Petty Cash">
               <i class="fa fa-list-alt"></i> Daftar Jurnal Petty Cash
            </a>
         </div>
      </div>
      <form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=AddJurnalPettyCash&amp;act=do&amp;typ=json" class="xhr_form form-horizontal dest_subcontent-element" data-target="/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=JurnalPettyCash&amp;act=view&amp;typ=html" id="frmInput">
         <input type="hidden" name="data_id" value="">
         <input type="hidden" name="pembukuan_referensi_id" value="">
         <input type="hidden" name="referensi_id" id="referensi_id" value="">
         <input type="hidden" name="is_jurnal" id="is_jurnal" value="">
         <input type="hidden" name="metode" id="metode" value="">
         <div class="form-group">
            <label class="col-md-3 control-label">
               Unit Kerja
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="unit_id" id="unit_id" value="">
                  <input type="text" name="unit_nama" id="unit_nama" value="" size="50" class="form-control" readonly="">
                  <span class="input-group-btn" id="btn_popup">
                     <button type="button" class="btn btn-default" onclick="showPopup('/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html', 'Unit Kerja', 650, 550);">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div> 
         <div class="form-group">
            <label class="col-md-3 control-label">
               Jenis Transaksi
            </label>
            <div class="col-md-4">                       
               <label class="custom-control custom-radio radio-inline">
                  <input type="radio" name="is_penambahan" value="Y" checked="" class="custom-control-input" id="is_penambahan_y">
                  <span class="custom-control-indicator"></span>
                  Penambahan Petty Cash
               </label>
               <label class="custom-control custom-radio radio-inline">
                  <input type="radio" name="is_penambahan" value="T" class="custom-control-input" id="is_penambahan_t">
                  <span class="custom-control-indicator"></span>
                  Pengeluaran Petty Cash
               </label> 
            </div>
         </div>
         <div class="form-group" id="transaksi_ref" style="">
            <label class="col-md-3 control-label">
               Referensi Penambahan
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="r_transaksi_id" id="r_transaksi_id" value="">
                  <span class="input-group-btn">
                     <button type="button" class="btn btn-default" name="btn_popup_transaksi" onclick="javascript:popupPenambahan('/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=RefTransaksi&amp;act=Popup&amp;typ=html')">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div>
         <div class="form-group" id="pengeluaran_ref" style="display: none;">
            <label class="col-md-3 control-label">
               Referensi Pengeluaran
            </label>
            <div class="col-md-4">         
               <div class="input-group">
                  <input type="hidden" name="pengeluaran_id" id="pengeluaran_id" value="">
                  <span class="input-group-btn">
                     <button type="button" class="btn btn-default" name="btn_pengeluaran_id" onclick="javascript:popupPengeluaran('/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=RefPengeluaran&amp;act=Popup&amp;typ=html')">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>  
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Tanggal Transaksi
            </label>
            <div class="col-md-4">         
               <input type="text" name="tanggal" id="tanggal" value="10 January 2023" class="form-control" readonly="">
            </div>
         </div>
         <div class="form-group" id="nominal_ref" style="">
            <label class="col-md-3 control-label">
               Nominal
            </label>
            <div class="col-md-4">         
               <span id="nominal_label"><b>Rp. 0</b></span>
               <input type="hidden" name="nominal" value="">
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Keterangan
            </label>
            <div class="col-md-4"> 
               <textarea name="keterangan" id="referensi_keterangan" rows="4" class="form-control"></textarea>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-md-3 control-label">
               Penanggung Jawab
            </label>
            <div class="col-md-4"> 
               <input type="text" name="penanggung_jawab" id="penanggung_jawab" value="Demo PTS" class="form-control">
            </div>
         </div> 
         <div class="panel panel-default">
            <div class="panel-heading">
               <span class="panel-title">
                  Debet
               </span>
            </div>
            <div class="panel-body">                       
               <div class="btn-toolbar mb-15">
                  <div class="btn-group pull-right">
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popup('/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=Coa&amp;act=Popup&amp;typ=html&amp;tipe=debet');" title="Tambah Debet" id="link_debet">
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
                              <input type="hidden" name="max_coa_debet" id="max_coa_debet" value="1">
                           </th>
                           <th style="width: 145px;">
                              Atribut
                           </th>
                           <th style="width: 215px;">
                              Nama Rekening
                           </th>
                            <th style="width: 200px">
                              Jenis Pajak
                           </th>
                           <th>
                              Deskripsi
                           </th>
                           <th style="width: 200px;">
                              Nilai (Rp.)
                           </th>
                        </tr>
                     </thead>
                     <tbody id="CoaPlaceHolder_debet">
                        
                     <tr id="jurnal_debet_1"><input type="hidden" id="debet-id-1" name="debet[1][id]" value="49"><input type="hidden" name="debet[1][kode]" id="debet-kode-1" value="1110101"><input type="hidden" id="debet-nama-1" name="debet[1][nama]" value="Petty Cash"><td class="links" style="padding: 4px 0px 0px; text-align: center;"><a href="javascript:void(0);" title="Delete 1" class="btn btn-xs btn-danger" onclick="deleteRecord(&quot;CoaPlaceHolder_debet&quot;, this);" style="float: none; display: inline-block;"><i class="fa fa-trash"></i></a></td><td style="text-align: center;"><label style="display: block; width: 100%;">1110101</label></td><td><input type="text" name="debet[1][subaccount]" class="input_mask" size="22" id="debet-sub-account-1" data-mask="**-**-**-**-**-**-**"></td><td><label>Petty Cash</label></td><td style="text-align: center;"><select name="debet[1][j_pajak]" id="debet-j-pajak-1" class="form-control"><option value="0">--Pilih--</option><option value="3">PPh Pasal 4 (2)</option><option value="2">PPh-21</option><option value="4">PPh-23</option><option value="1">PPN</option></select></td><td><textarea name="debet[1][keterangan]" id="debet-keterangan-1" style="resize: none; width: 100%;"></textarea></td><td><input type="text" name="debet[1][nominal]" class="gvFloat" id="debet-nominal-1" onkeyup="setNominalJurnal(&quot;CoaPlaceHolder_debet&quot;);" style="text-align: right;"></td></tr><tr id="row-debet-total" style="font-weight: bold;"><td colspan="6" style="text-align: center;">Total</td><td><label id="debet-total" style="display: block; font-weight: bold; text-align: right; width: 100%;">0,00</label></td></tr></tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <span class="panel-title">
                  Kredit
               </span>
            </div>
            <div class="panel-body">
               <div class="btn-toolbar mb-15">
                  <div class="btn-group pull-right"> 
                     <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=jurnal_pettycash&amp;sub=Coa&amp;act=Popup&amp;typ=html&amp;tipe=kredit', 'Chart Of Account', 600, 500);" title="Tambah Kredit">
                        <i class="fa fa-plus-circle"></i> Tambah Akun
                     </a>
                  </div>
               </div>
               <div class="table-reponsive">
                  <table class="table table-striped table-bordered table-hover" style="width: 100%;">
                     <thead>
                        <tr>
                           <th style="width: 20px;">
                              Aksi
                           </th>
                           <th style="width: 115px;">
                              Kode Akun
                              <input type="hidden" name="max_coa_kredit" id="max_coa_kredit" value="0">
                           </th>
                           <th style="width: 145px;">
                              Atribut
                           </th>
                           <th style="width: 215px;">
                              Nama Rekening
                           </th>
                           <th style="width: 200px">
                              Jenis Pajak
                           </th>
                           <th>
                              Deskripsi
                           </th>
                           <th style="width: 200px;">
                              Nilai (Rp.)
                           </th>
                        </tr>
                     </thead>
                     <tbody id="CoaPlaceHolder_kredit"><tr id="kredit-empty-row"><td colspan="7" style="text-align: center;">Pilih Data Akun</td></tr>
                        
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
<script type="text/javascript" language="javascript" charset="utf-8">
// <![CDATA[
document.getElementById('CoaPlaceHolder_debet').addItem     = function(index,id, kode, nama, subAkun, referensi, j_pajak, keterangan, nominal){
   var elemen_id  = 'jurnal_debet_'+index;
   document.getElementById('max_coa_debet').value = index;
   if(document.getElementById(elemen_id)){
      return true;
   }
   var frag             = document.createDocumentFragment();
   var childObj         = this.getElementsByTagName('tr');

   for (var i = childObj.length - 1; i >= 0; i--) {
      if(childObj[i].id === 'debet-empty-row' || childObj[i].id == 'row-debet-total'){
         this.removeChild(childObj[i]);
      }
   };

   var tr      = document.createElement('tr');
   tr.id       = elemen_id;

   var inputId       = document.createElement('input');
   inputId.type      = 'hidden';
   inputId.id        = 'debet-id-'+index;
   inputId.name      = 'debet['+index+'][id]';
   inputId.value     = id;

   var tdKode        = document.createElement('td');
   tdKode.style.textAlign  = 'center';
   var inputKode     = document.createElement('input');
   inputKode.type    = 'hidden';
   inputKode.name    = 'debet['+index+'][kode]';
   inputKode.id      = 'debet-kode-'+index;
   inputKode.value   = kode;

   var labelKode     = document.createElement('label');
   labelKode.innerHTML  = kode;
   labelKode.style.display    = 'block';
   labelKode.style.width      = '100%';
   tdKode.appendChild(labelKode);

   var tdNama        = document.createElement('td');
   var inputNama     = document.createElement('input');
   inputNama.type    = 'hidden';
   inputNama.id      = 'debet-nama-'+index;
   inputNama.name    = 'debet['+index+'][nama]';
   inputNama.value   = nama;
   var labelNama     = document.createElement('label');
   labelNama.innerHTML  = nama;
   tdNama.appendChild(labelNama);

   var tdSubAkun     = document.createElement('td');
   var inputSubAkun  = document.createElement('input');
   inputSubAkun.type       = 'text';
   inputSubAkun.name       = 'debet['+index+'][subaccount]';
   inputSubAkun.className  = 'input_mask';
   inputSubAkun.size       = '22';
   inputSubAkun.id         = 'debet-sub-account-'+index;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);
   var tdJpajak   = document.createElement('td');
   tdJpajak.style ="text-align:center";
   var inputJpajak = document.createElement('select');
   inputJpajak.name     = 'debet['+ index +'][j_pajak]';
   inputJpajak.id       = 'debet-j-pajak-'+ index;
   inputJpajak.classList.add("form-control");
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

   var tdReferensi   = document.createElement('td');
   var inputReferensi      = document.createElement('input');
   inputReferensi.type     = 'text';
   inputReferensi.name     = 'debet['+index+'][nomor_referensi]';
   inputReferensi.id       = 'debet-referensi-'+index;
   inputReferensi.value    = referensi;
   tdReferensi.appendChild(inputReferensi);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = 'debet['+index+'][keterangan]';
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.style.width   = '100%';
   inputKeterangan.id            = 'debet-keterangan-'+index;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);

   var tdNominal     = document.createElement('td');
   var inputNominal           = document.createElement('input');
   inputNominal.type          = 'text';
   inputNominal.name          = 'debet['+index+'][nominal]';
   inputNominal.className     = 'gvFloat';
   inputNominal.id            = 'debet-nominal-'+index;
   inputNominal.value         = nominal;
   inputNominal.setAttribute('onkeyup', 'setNominalJurnal("'+this.id+'");');
   tdNominal.appendChild(inputNominal);

   var tdAksi        = document.createElement('td');
   tdAksi.className  = 'links';
   tdAksi.style.padding       = 0;
   tdAksi.style.paddingTop    = '4px';
   tdAksi.style.textAlign     = 'center';
   var linkAksiDelete         = document.createElement('a');
   linkAksiDelete.style.float = 'none';
   linkAksiDelete.style.display = 'inline-block';
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+index;
   linkAksiDelete.classList.add("btn",'btn-xs','btn-danger')
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.classList.add('fa','fa-trash');
   iconDelete.alt             = 'delete';
   linkAksiDelete.appendChild(iconDelete);
   tdAksi.appendChild(linkAksiDelete);

   tr.appendChild(inputId);
   tr.appendChild(inputKode);
   tr.appendChild(inputNama);
   tr.appendChild(tdAksi);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);   
   tr.appendChild(tdJpajak);
   tr.appendChild(tdKeterangan);
   tr.appendChild(tdNominal);

   frag.appendChild(tr);

   // elemen row total
   var trTotal       = document.createElement('tr');
   trTotal.id        = 'row-debet-total';
   trTotal.style.fontWeight      = 'bold';

   var tdTotalLabel              = document.createElement('td');
   tdTotalLabel.innerHTML        = 'Total';
   tdTotalLabel.style.textAlign  = 'center';
   tdTotalLabel.setAttribute('colspan', '6');

   var tdTotalNominal            = document.createElement('td');
   var labelNominalTotal         = document.createElement('label');
   labelNominalTotal.id          = 'debet-total';
   labelNominalTotal.style.display     = 'block';
   labelNominalTotal.style.fontWeight  = 'bold';
   labelNominalTotal.style.textAlign   = 'right';
   labelNominalTotal.style.width       = '100%';
   labelNominalTotal.innerHTML         = 0;
   tdTotalNominal.appendChild(labelNominalTotal);

   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominal);
   frag.appendChild(trTotal);
   this.appendChild(frag);

   

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

    setNominalJurnal(this.id);
   return true;
}

document.getElementById('CoaPlaceHolder_kredit').addItem     = function(index,id, kode, nama, subAkun, referensi, j_pajak, keterangan, nominal){
   var elemen_id  = 'jurnal_kredit_'+index;
   document.getElementById('max_coa_kredit').value = index;
   if(document.getElementById(elemen_id)){
      return true;
   }
   var frag             = document.createDocumentFragment();
   var childObj         = this.getElementsByTagName('tr');

   for (var i = childObj.length - 1; i >= 0; i--) {
      if(childObj[i].id === 'kredit-empty-row' || childObj[i].id == 'row-kredit-total'){
         this.removeChild(childObj[i]);
      }
   };

   var tr      = document.createElement('tr');
   tr.id       = elemen_id;

   var inputId       = document.createElement('input');
   inputId.type      = 'hidden';
   inputId.id        = 'kredit-id-'+index;
   inputId.name      = 'kredit['+index+'][id]';
   inputId.value     = id;

   var tdKode        = document.createElement('td');
   tdKode.style.textAlign  = 'center';
   var inputKode     = document.createElement('input');
   inputKode.type    = 'hidden';
   inputKode.name    = 'kredit['+index+'][kode]';
   inputKode.id      = 'kredit-kode-'+index;
   inputKode.value   = kode;

   var labelKode     = document.createElement('label');
   labelKode.innerHTML  = kode;
   labelKode.style.display    = 'block';
   labelKode.style.width      = '100%';
   tdKode.appendChild(labelKode);

   var tdNama        = document.createElement('td');
   var inputNama     = document.createElement('input');
   inputNama.type    = 'hidden';
   inputNama.id      = 'kredit-nama-'+index;
   inputNama.name    = 'kredit['+index+'][nama]';
   inputNama.value   = nama;
   var labelNama     = document.createElement('label');
   labelNama.innerHTML  = nama;
   tdNama.appendChild(labelNama);

   var tdSubAkun     = document.createElement('td');
   var inputSubAkun  = document.createElement('input');
   inputSubAkun.type       = 'text';
   inputSubAkun.name       = 'kredit['+index+'][subaccount]';
   inputSubAkun.className  = 'input_mask';
   inputSubAkun.size       = '22';
   inputSubAkun.id         = 'kredit-sub-account-'+index;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);

   var tdJpajak   = document.createElement('td');
   tdJpajak.style ="text-align:center";
   var inputJpajak = document.createElement('select');
   inputJpajak.name     = 'kredit['+ index +'][j_pajak]';
   inputJpajak.id       = 'kredit-j-pajak-'+ index;
   inputJpajak.classList.add("form-control");
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
   
   var tdReferensi   = document.createElement('td');
   var inputReferensi      = document.createElement('input');
   inputReferensi.type     = 'text';
   inputReferensi.name     = 'kredit['+index+'][nomor_referensi]';
   inputReferensi.id       = 'kredit-referensi-'+index;
   inputReferensi.value    = referensi;
   tdReferensi.appendChild(inputReferensi);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = 'kredit['+index+'][keterangan]';
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.style.width   = '100%';
   inputKeterangan.id            = 'kredit-keterangan-'+index;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);

   var tdNominal     = document.createElement('td');
   var inputNominal           = document.createElement('input');
   inputNominal.type          = 'text';
   inputNominal.name          = 'kredit['+index+'][nominal]';
   inputNominal.className     = 'gvFloat';
   inputNominal.id            = 'kredit-nominal-'+index;
   inputNominal.value         = nominal;
   inputNominal.setAttribute('onkeyup', 'setNominalJurnal("'+this.id+'");');
   tdNominal.appendChild(inputNominal);

   var tdAksi        = document.createElement('td');
   tdAksi.className  = 'links';
   tdAksi.style.padding       = 0;
   tdAksi.style.paddingTop    = '4px';
   tdAksi.style.textAlign     = 'center';
   var linkAksiDelete         = document.createElement('a');
   linkAksiDelete.style.float = 'none';
   linkAksiDelete.style.display = 'inline-block';
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+index;
   linkAksiDelete.classList.add("btn",'btn-xs','btn-danger')
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.classList.add('fa','fa-trash');
   iconDelete.alt             = 'delete';
   linkAksiDelete.appendChild(iconDelete);
   tdAksi.appendChild(linkAksiDelete);

   tr.appendChild(inputId);
   tr.appendChild(inputKode);
   tr.appendChild(inputNama);
   tr.appendChild(tdAksi);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);
   tr.appendChild(tdJpajak);
   tr.appendChild(tdKeterangan);
   tr.appendChild(tdNominal);

   frag.appendChild(tr);

   // elemen row total
   var trTotal       = document.createElement('tr');
   trTotal.id        = 'row-kredit-total';
   trTotal.style.fontWeight      = 'bold';

   var tdTotalLabel              = document.createElement('td');
   tdTotalLabel.innerHTML        = 'Total';
   tdTotalLabel.style.textAlign  = 'center';
   tdTotalLabel.setAttribute('colspan', '6');

   var tdTotalNominal            = document.createElement('td');
   var labelNominalTotal         = document.createElement('label');
   labelNominalTotal.id          = 'kredit-total';
   labelNominalTotal.style.display     = 'block';
   labelNominalTotal.style.fontWeight  = 'bold';
   labelNominalTotal.style.textAlign   = 'right';
   labelNominalTotal.style.width       = '100%';
   labelNominalTotal.innerHTML         = 0;
   tdTotalNominal.appendChild(labelNominalTotal);

   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominal);
   frag.appendChild(trTotal);
   this.appendChild(frag);

   

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

    setNominalJurnal(this.id);
   return true;
}

var deleteRecord     = function(elemenId, el){
   var tBody         = document.getElementById(elemenId);
   if(typeof(tBody) != 'undefined' && tBody != null){
      var emptyRow   = 'debet-empty-row';
      var totalRow   = 'row-debet-total';

      if(tBody.id.toUpperCase().indexOf('KREDIT') >= 0){
         emptyRow    = 'kredit-empty-row';
         totalRow    = 'row-debet-total';
      }
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
   var emptyRow   = 'debet-empty-row';

   if(elemen.id.toUpperCase().indexOf('KREDIT') >= 0){
      emptyRow    = 'kredit-empty-row';
   }

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

var setNominalJurnal    = function (elemenId){
   var elemen           = document.getElementById(elemenId)
   var childObj         = elemen.getElementsByTagName('input');
   var elemenId         = elemen.id.toUpperCase();

   var patern           = /debet\[(\d+)\]\[nominal\]/;
   var nominalHolder    = document.getElementById('debet-total');
   if(elemenId.indexOf('KREDIT') >= 0){
      patern            = /kredit\[(\d+)\]\[nominal\]/;
      nominalHolder     = document.getElementById('kredit-total');
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
   }
}

var dataAkunKredit      = [];
var dataAkunDebet       = [];
var dataCoaPettyCash    = {"id":"2","coa_id":"49","kode_akun":"1110101","nama_akun":"Petty Cash"};

if(dataAkunDebet.length > 0){
   for(var i in dataAkunDebet){
      document.getElementById('CoaPlaceHolder_debet').addItem(
         dataAkunDebet[i].index,
         dataAkunDebet[i].id,
         dataAkunDebet[i].kode,
         dataAkunDebet[i].nama,
         dataAkunDebet[i].sub_akun,
         dataAkunDebet[i].referensi,
         dataAkunDebet[i].j_pajak,
         dataAkunDebet[i].keterangan,
         dataAkunDebet[i].nominal
      );
   }
}

if(dataAkunKredit.length > 0){
   for(var i in dataAkunKredit){
      document.getElementById('CoaPlaceHolder_kredit').addItem(
         dataAkunKredit[i].index,
         dataAkunKredit[i].id,
         dataAkunKredit[i].kode,
         dataAkunKredit[i].nama,
         dataAkunKredit[i].sub_akun,
         dataAkunKredit[i].referensi,
         dataAkunKredit[i].j_pajak,
         dataAkunKredit[i].keterangan,
         dataAkunKredit[i].nominal
      );
   }
}
   var get_max_coa_debet = document.getElementById('max_coa_debet').value;
   var max_coa_debet = parseInt(get_max_coa_debet,10) + 1;
   
   var get_max_coa_kredit = document.getElementById('max_coa_kredit').value;

   var setJenisTransaksi = function (value) {
      if (value === 'Y') {
         $('#transaksi_ref').show();
         $('#pengeluaran_ref').hide();
         // $('#nominal_ref').show();
         // $('#btn_popup').hide();
         if(dataAkunDebet.length == 0){
            document.getElementById('CoaPlaceHolder_debet').addItem(
              max_coa_debet,
               dataCoaPettyCash.coa_id,
               dataCoaPettyCash.kode_akun,
               dataCoaPettyCash.nama_akun,
               '',
               '',
               '', 
               '', 
               0
            );
          var tBody         = document.getElementById('CoaPlaceHolder_kredit')
          setEmptyRecord(tBody);
        }
      } else {
         $('#transaksi_ref').hide();
         // $('#nominal_ref').hide();
         $('#pengeluaran_ref').show();

         // $('#btn_popup').show();
         if(dataAkunKredit.length == 0){
            document.getElementById('CoaPlaceHolder_kredit').addItem(
              max_coa_debet,
               dataCoaPettyCash.coa_id,
               dataCoaPettyCash.kode_akun,
               dataCoaPettyCash.nama_akun,
               '',
               '',
               '', 
               '', 
               0
            );

        var tBody         = document.getElementById('CoaPlaceHolder_debet');
        setEmptyRecord(tBody);
        }
      }
   }

   function chekMetode(){
      var metode = $('#metode').val();
      var is_jurnal = $('#is_jurnal').val();

      if(metode == "Imprest" && is_jurnal == 'Sudah'){
         $("#is_penambahan_t").click();
         $("#is_penambahan_y").attr('disabled',true);
      }else{
         $("#is_penambahan_y").attr('disabled',false);
         $("#is_penambahan_y").click();
      }
   }

   $(function () {
      //get value
      var isPenambahan = $("input[name='is_penambahan']:checked").val();
      //set value
      setJenisTransaksi(isPenambahan);
      //
      chekMetode();

      $("input[name='is_penambahan']").click(function () {
         setJenisTransaksi($(this).val());

      });

      $('#tanggal').datepicker({
         autoclose: true,
         format: 'dd MM yyyy',
         orientation: 'bottom'
      });
   });

   function popup(url){
      var isPenambahan = $("input[name='is_penambahan']:checked").val();

      if(isPenambahan=='Y'){
         var form = document.frmInput;
         if(form.r_transaksi_id.value==undefined || form.r_transaksi_id.value==""){
            alert("Silahkan Memilih Referensi Transaksi");
         }else{
            showPopup(url, '', 600, 500);
         }
      }else if(isPenambahan==undefined){
         alert("Silahkan Memilih Jenis Transaksi");  
      }else{
         showPopup(url, 'Daftar COA', 600, 500);
      }
   }

   function popupPenambahan(url){
      let unit_id = $('#unit_id').val()
      if(unit_id == ''){
         alert("Pilih Unit Kerja");
         return false;
      }
      showPopup(url+"&unit_id="+unit_id, 'Referensi Penambahan', 600, 500);
   }

   function popupPengeluaran(url){
      let unit_id = $('#unit_id').val()
      if(unit_id == ''){
         alert("Pilih Unit Kerja");
         return false;
      }
      showPopup(url+"&unit_id="+unit_id, 'Referensi Pengeluaran', 600, 500);
   }
// ]]>
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>