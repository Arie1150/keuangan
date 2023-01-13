<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=76&amp;mid=76">Entri Jurnal</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=inputJurnalUmum&amp;act=view&amp;typ=html">Jurnal Umum</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Jurnal Umum
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
                  <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=JurnalUmum&amp;act=view&amp;typ=html" title="Daftar Jurnal Umum">
                      <i class="fa fa-list-alt"></i> Daftar Jurnal Umum
                  </a>
            </div>
         </div>

         <form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=AddJurnalUmum&amp;act=do&amp;typ=json" class="xhr_form form-horizontal dest_subcontent-element" data-target="/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=JurnalUmum&amp;act=view&amp;typ=html" id="frmInput">
               <input type="hidden" name="data_id" value="">
               <input type="hidden" name="pembukuan_referensi_id" value="">
               <input type="hidden" name="referensi_id" id="referensi_id" value="">
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Kategori Jurnal
                  </label>
                  <div class="col-md-4">
                     
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="kategori_jurnal" id="cmb_kategori_jurnal" class="form-control">
	
		<option value="">-- PILIH --</option>
	
		<option value="1">JT - Jurnal Transfer</option>
	
		<option value="2">JK - Jurnal Koreksi</option>
	
		<option value="3">JU - Jurnal Umum</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Tanggal Transaksi
                  </label>
                  <div class="col-md-4">
                     <input type="text" name="tanggal" id="tanggal" value="10 Januari 2023" readonly="readonly" class="datepicker form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Keterangan
                  </label>
                  <div class="col-md-4">
                     <textarea name="keterangan" id="referensi_keterangan" rows="4" cols="50" class="form-control"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-3 control-label">
                     Penanggung Jawab
                  </label>
                  <div class="col-md-4"> 
                     <input type="text" name="penanggung_jawab" id="penanggung_jawab" value="Demo PTS" class="form-control" readonly="">
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
                             <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=coa&amp;act=popup&amp;typ=html&amp;tipe=debet','Chart Of Account',600, 500);" title="Tambah Debet">
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
                                          <input type="hidden" name="max_coa_debet" id="max_coa_debet" value="0">
                                       </th>
                                       <th style="width: 180px;">
                                          Atribut
                                       </th>
                                       <th style="width: 215px;">
                                          Nama Rekening
                                       </th>
                                        <th style="width: 70px">
                                          Jenis Pajak
                                       </th>
                                       <th style="width: 115px;display: none">
                                          Nomor Referensi
                                       </th>
                                       <th>
                                          Deskripsi
                                       </th>
                                       <th style="width: 225px;">
                                          Nilai (Rp.)
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody id="CoaPlaceHolder_debet">
                                    <tr id="debet-empty-row">
                                       <td colspan="7" style="text-align: center;">
                                          Pilih data Akun
                                       </td>
                                    </tr>
                                 </tbody>
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
                              <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=jurnal_umum&amp;sub=coa&amp;act=popup&amp;typ=html&amp;tipe=kredit', 'Chart Of Account', 600, 500);" title="Tambah Kredit">
                                 <i class="fa fa-plus-circle"></i> Tambah Akun
                              </a>
                           </div>
                        </div>
                        <div class="table-reponsive">
                              <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 20px;">
                                             Aksi
                                          </th>
                                          <th style="width: 115px;">
                                             Kode Akun
                                             <input type="hidden" name="max_coa_kredit" id="max_coa_kredit" value="0">
                                          </th>
                                          <th style="width: 180px;">
                                             Atribut
                                          </th>
                                          <th style="width: 215px;">
                                             Nama Rekening
                                          </th>
                                          <th style="width: 70px">
                                             Jenis Pajak
                                          </th>
                                          <th style="width: 115px;display:none;">
                                             Nomor Referensi
                                          </th>
                                          <th>
                                             Deskripsi
                                          </th>
                                          <th style="width: 225px;">
                                             Nilai (Rp.)
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody id="CoaPlaceHolder_kredit">
                                       <tr id="kredit-empty-row">
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

<script type="text/javascript" language="javascript" charset="utf-8">
$( function() {
   $(".datepicker").datepicker({
      todayHighlight: true,
      language: 'id'
   });
});

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
   inputSubAkun.classList.add('input_mask');
   inputSubAkun.size       = '22';
   inputSubAkun.id         = 'debet-sub-account-'+index;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);
   var tdJpajak   = document.createElement('td');
   tdJpajak.style ="text-align:center";
   var inputJpajak = document.createElement('select');
   inputJpajak.classList.add('form-control');
   inputJpajak.name     = 'debet['+ index +'][j_pajak]';
   inputJpajak.id       = 'debet-j-pajak-'+ index;
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
   inputReferensi.classList.add('form-control');
   inputReferensi.type     = 'text';
   inputReferensi.name     = 'debet['+index+'][nomor_referensi]';
   inputReferensi.id       = 'debet-referensi-'+index;
   inputReferensi.value    = referensi;
   tdReferensi.appendChild(inputReferensi);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = 'debet['+index+'][keterangan]';
   inputKeterangan.classList.add('form-control');
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.id            = 'debet-keterangan-'+index;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);

   var tdNominal     = document.createElement('td');
   var inputNominal           = document.createElement('input');
   inputNominal.type          = 'text';
   inputNominal.name          = 'debet['+index+'][nominal]';
   inputNominal.classList.add('gvFloat');
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
   linkAksiDelete.classList.add('btn','btn-xs','btn-danger');
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+index;
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.classList.add('fa','fa-trash');
   iconDelete.alt             = 'delete';
   linkAksiDelete.appendChild(iconDelete);
   tdAksi.appendChild(linkAksiDelete);

   tr.appendChild(inputId);   
   tr.appendChild(tdAksi);
   tr.appendChild(inputKode);
   tr.appendChild(inputNama);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);   
   tr.appendChild(tdJpajak);
   //tr.appendChild(tdReferensi);
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
   tdTotalLabel.setAttribute('colspan', '5');

   var tdTotalNominal            = document.createElement('td');
   var labelNominalTotal         = document.createElement('label');
   labelNominalTotal.id          = 'debet-total';
   labelNominalTotal.style.display     = 'block';
   labelNominalTotal.style.fontWeight  = 'bold';
   labelNominalTotal.style.textAlign   = 'right';
   labelNominalTotal.style.width       = '100%';
   labelNominalTotal.innerHTML         = 0;
   tdTotalNominal.appendChild(labelNominalTotal);

   var tdEmptyTotal              = document.createElement('td');
   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominal);
   trTotal.appendChild(tdEmptyTotal);
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
   inputSubAkun.classList.add('input_mask');
   inputSubAkun.size       = '22';
   inputSubAkun.id         = 'kredit-sub-account-'+index;
   inputSubAkun.value      = subAkun;
   inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
   tdSubAkun.appendChild(inputSubAkun);

   var tdJpajak   = document.createElement('td');
   tdJpajak.style ="text-align:center";
   var inputJpajak = document.createElement('select');
   inputJpajak.classList.add('form-control');
   inputJpajak.name     = 'kredit['+ index +'][j_pajak]';
   inputJpajak.id       = 'kredit-j-pajak-'+ index;
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
   inputReferensi.classList.add('form-control');
   inputReferensi.name     = 'kredit['+index+'][nomor_referensi]';
   inputReferensi.id       = 'kredit-referensi-'+index;
   inputReferensi.value    = referensi;
   tdReferensi.appendChild(inputReferensi);

   var tdKeterangan  = document.createElement('td');
   var inputKeterangan     = document.createElement('textarea');
   inputKeterangan.name    = 'kredit['+index+'][keterangan]';
   inputKeterangan.style.resize  = 'none';
   inputKeterangan.classList.add('form-control');
   inputKeterangan.id            = 'kredit-keterangan-'+index;
   inputKeterangan.value         = keterangan;
   tdKeterangan.appendChild(inputKeterangan);

   var tdNominal     = document.createElement('td');
   var inputNominal           = document.createElement('input');
   inputNominal.type          = 'text';
   inputNominal.name          = 'kredit['+index+'][nominal]';
   inputNominal.classList.add('gvFloat');
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
   linkAksiDelete.classList.add('btn','btn-xs','btn-danger');
   linkAksiDelete.href        = 'javascript:void(0);';
   linkAksiDelete.title       = 'Delete '+index;
   linkAksiDelete.setAttribute('onclick', 'deleteRecord("'+this.id+'", this);');
   var iconDelete             = document.createElement('i');
   iconDelete.classList.add('fa','fa-trash');
   iconDelete.alt             = 'delete';
   linkAksiDelete.appendChild(iconDelete);
   tdAksi.appendChild(linkAksiDelete);

   tr.appendChild(inputId);
   tr.appendChild(tdAksi);
   tr.appendChild(inputKode);
   tr.appendChild(inputNama);
   tr.appendChild(tdKode);
   tr.appendChild(tdSubAkun);
   tr.appendChild(tdNama);
   tr.appendChild(tdJpajak);
   //tr.appendChild(tdReferensi);
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
   tdTotalLabel.setAttribute('colspan', '5');

   var tdTotalNominal            = document.createElement('td');
   var labelNominalTotal         = document.createElement('label');
   labelNominalTotal.id          = 'kredit-total';
   labelNominalTotal.style.display     = 'block';
   labelNominalTotal.style.fontWeight  = 'bold';
   labelNominalTotal.style.textAlign   = 'right';
   labelNominalTotal.style.width       = '100%';
   labelNominalTotal.innerHTML         = 0;
   tdTotalNominal.appendChild(labelNominalTotal);

   var tdEmptyTotal              = document.createElement('td');
   trTotal.appendChild(tdTotalLabel);
   trTotal.appendChild(tdTotalNominal);
   trTotal.appendChild(tdEmptyTotal);
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
// ]]>
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>