<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=46&amp;mid=46">Transaksi Realisasi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=transaksi&amp;act=view&amp;typ=html">Transaksi ARL</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Transaksi ARL
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">

    function bukaPopupUnit(xurl) {
        showPopup(xurl, '', 600, 500);
    }

    function bukaPopupTransRef(xurl) {

        showPopup(xurl, 'Payment Instruction UMK & Perjalanan Dinas', 650, 550);

    }

    function popupCoaDebet() {
        if (document.getElementById('trans_ca_id').value !== '') {
            showPopup('/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&sub=PopupCoa&act=view&typ=html', 'COA', 600, 500);
        } else {
            alert('Silahkan Pilih Data Transaksi Cash Advance, Terlebih dahulu');
        }
    }

    function popupCoaKredit() {
        if (document.getElementById('trans_ca_id').value !== '') {
            showPopup('/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&sub=PopupCoaKredit&act=view&typ=html', 'COA', 600, 500);
        } else {
            alert('Silahkan Pilih Data Transaksi Cash Advance, Terlebih dahulu');
        }
    }

</script>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title">
             Transaksi ARL 
        </span>
    </div>
    <div class="panel-body">
        
        <div class="btn-toolbar mb-15">
            <div class="btn-group pull-right"> 
                <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=TransaksiDetil&amp;act=view&amp;typ=html" title="Daftar Jurnal">
                <i class="fa fa-list-alt"></i> List Jurnal
                </a>
            </div>
        </div>

        <form method="POST" action="/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=AddTransaksi&amp;act=do&amp;typ=json" name="frmInput" class="xhr_form std_form form-horizontal" id="frmInputARL" enctype="multipart/form-data">
            <input type="hidden" name="check" id="check" value="">
            <input type="hidden" name="aksi" value="add">
            <input type="hidden" name="trans_id" value="">
            <input type="hidden" name="pembukuan_id" value="">
            <div class="form-group">
                <label class="col-md-3 control-label">
                Nomor Bukti
                </label>
                <div class="col-md-4">                   
                <label class="form-control-label">
                    <b>
                                         
                                (Auto Number)
                            
                    </b>
                </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">
                Referensi Transaksi    
                </label>
                <div class="col-md-4">         
                    <div class="input-group">
                        <input type="hidden" name="peng_real_id" id="peng_real_id" value="">
                        <input type="hidden" name="kegdet_id" id="kegdet_id" value="">
                        <input type="hidden" name="trans_ca_id" id="trans_ca_id" value="">
                        <input type="hidden" name="jenis_sp3_id" id="jenis_sp3_id" value="">
                        <input type="hidden" name="jenis_sp3_old" id="jenis_sp3_old" value="">
                        <input type="text" name="trans_ca_noref" id="trans_ca_noref" value="" size="40" readonly="readonly" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default" onclick="javascript:bukaPopupTransRef('/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=PopupRefTransaksi&amp;act=view&amp;typ=html');">
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
                    <input type="hidden" name="unit_kerja_nama" id="unit_kerja_nama" value="" size="40" readonly="readonly">
                    <label class="form-control-label" id="unit_kerja_nama_label">
                        
                    </label>
                    <label style="font-size: 11px; font-style: italic">( Unit Kerja akan terisi otomatis setelah memilih referensi transaksi )</label>
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
                    <div class="input-group">
                        <input type="hidden" name="nominal" id="nominal" value="">
                        <label class="form-control-label" style="font-weight: bold;">
                            Rp
                            <label id="nominal_f">0,00</label>
                        </label>
                    </div> 
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-3 control-label">
                    Nominal ARL  *
                </label>
                <div class="col-md-4"> 
                    <input type="text" name="nominal_arl" id="nominal_arl" value="" class="gvFloat form-control" style="text-align: right;">
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
                            <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoaDebet('/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=PopupCoa&amp;act=view&amp;typ=html')" title="Tambah">
                                <i class="fa fa-plus-circle"></i> Tambah Akun
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table-debet">
                            <thead>
                                <tr><th style="width: 30px;">
                                    Aksi
                                </th>
                                <th style="width: 115px;">
                                    <input type="hidden" name="max_coa_d" id="max_coa_d" value="0">
                                    Kode Akun                                    
                                </th>
                                <th style="width: 145px;">
                                    Atribut
                                </th>
                                <th>
                                    Nama Rekening
                                </th>
                                <th style="width: 70px">
                                    Jenis Pajak
                                </th>
                                <th style="width: 165px;">
                                    Nilai (Rp.)
                                </th>
                            </tr></thead>
                            <tbody id="CoaPlaceHolder_jurnal_debet">
                                <tr id="jurnal-debet-empty-row">
                                    <td colspan="6" style="text-align: center; font-style: italic;">
                                        -- Data Akun Kosong --
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
                            <a class="dest_subcontent-element btn btn-primary" href="javascript:void(0)" onclick="javascript:popupCoaKredit('/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=PopupCoaKredit&amp;act=view&amp;typ=html')" title="Tambah">
                                <i class="fa fa-plus-circle"></i> Tambah Akun
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table-kredit">
                            <thead>
                                <tr><th style="width: 30px;">
                                    Aksi
                                </th>
                                <th style="width: 115px;">
                                    <input type="hidden" name="max_coa_k" id="max_coa_k" value="0">
                                    Kode Akun                                    
                                </th>
                                <th style="width: 145px;">
                                    Atribut
                                </th>
                                <th>
                                    Nama Rekening
                                </th>
                                <th style="width: 70px">
                                    Jenis Pajak
                                </th>
                                <th style="width: 165px;">
                                    Nilai (Rp.)
                                </th>
                            </tr></thead>
                            <tbody id="CoaPlaceHolder_jurnal_kredit">
                                <tr id="jurnal-kredit-empty-row">
                                    <td colspan="6" style="text-align: center; font-style: italic;">
                                        -- Data Akun Kosong --
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">
                Uraian Transaksi  
                </label>
                <div class="col-md-4"> 
                    <textarea name="keterangan" cols="50" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">
                Penanggung Jawab  *
                </label>
                <div class="col-md-4"> 
                    <input type="text" name="penanggung_jawab" id="penanggung_jawab" value="Demo PTS" size="40" class="form-control"> 
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-3 col-md-7">
                    <input name="btnsimpan" value=" Simpan " class="btn btn-primary" type="submit">
                    <a class="xhr dest_subcontent-element button btn btn-danger" href="/ekeuanganpts/index.php?mod=transaksi_spj_pertransaksi&amp;sub=TransaksiDetil&amp;act=view&amp;typ=html" title="Reset">
                        Batal
                    </a>
                </div>
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
            <li>Tanda <label class="required"></label> menunjukkan bahwa field tersebut harus diisi </li>
        </ul>
    </div>
 </div>
<script>

    var formInput = document.forms['frmInputARL'];
    var formElements = formInput.elements;

    var clearCurrency = function (str) {
        num = str.toString();
        num = num.replace(/\$|\./g, '');
        num = num.replace(/\$|\,/g, '.');
        num = parseFloat(num);
        return num;
    };

    var formatNumber = function (num, mode) {
        var num = num.toString();
        num = num.replace(/\$|\,/g, '');
        if (isNaN(num)) {
            num = "0";
        }
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num * 100 + 0.50000000001);
        cents = num % 100;
        num = Math.floor(num / 100).toString();
        if (cents < 10) {
            cents = "0" + cents;
        }
        for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++) {
            num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
        }

        return ((sign) ? '' : '-') + num + ',' + cents;
    };

    /* ADD COA Debet */
    document.getElementById('CoaPlaceHolder_jurnal_debet').addItem = function (index, trans_id, id, kode, nama, subAkun, j_pajak, keterangan, nominal) {

        var elemen_id = 'jurnal_debet_' + index;
        document.getElementById('max_coa_d').value = index;
        if (document.getElementById(elemen_id)) {
            return true;
        }
        var frag = document.createDocumentFragment();
        var childObj = this.getElementsByTagName('tr');

        for (var i = childObj.length - 1; i >= 0; i--) {
            if (childObj[i].id === 'jurnal-debet-empty-row' || childObj[i].id === 'row-jurnal-total') {
                this.removeChild(childObj[i]);
            }
        }
        ;

        //var ronly = false;
        var tr = document.createElement('tr');
        tr.id = elemen_id;

        var prKId = document.createElement('input');
        prKId.type = 'hidden';
        prKId.id = 'jurnal-trans-id-' + index;
        prKId.name = 'jurnal[' + index + '][trans_id]';
        prKId.value = trans_id;

        var inputStatus = document.createElement('input');
        inputStatus.type = 'hidden';
        inputStatus.id = 'jurnal-status-' + index;
        inputStatus.name = 'jurnal[' + index + '][status]';
        inputStatus.value = 'D';

        var inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.id = 'jurnal-id-' + index;
        inputId.name = 'jurnal[' + index + '][id]';
        inputId.value = id;

        var tdKode = document.createElement('td');
        tdKode.style.textAlign = 'center';
        var inputKode = document.createElement('input');
        inputKode.type = 'hidden';
        inputKode.name = 'jurnal[' + index + '][kode]';
        inputKode.id = 'jurnal-kode-' + index;
        inputKode.value = kode;

        var labelKode = document.createElement('label');
        labelKode.innerHTML = kode;
        labelKode.style.display = 'block';
        labelKode.style.width = '100%';
        tdKode.appendChild(labelKode);

        var tdNama = document.createElement('td');
        var inputNama = document.createElement('input');
        inputNama.type = 'hidden';
        inputNama.id = 'jurnal-nama-' + index;
        inputNama.name = 'jurnal[' + index + '][nama]';
        inputNama.value = nama;
        var labelNama = document.createElement('label');
        labelNama.innerHTML = nama;
        tdNama.appendChild(labelNama);

        var tdSubAkun = document.createElement('td');
        var inputSubAkun = document.createElement('input');
        inputSubAkun.type = 'text';
        inputSubAkun.name = 'jurnal[' + index + '][subaccount]';
        inputSubAkun.className = 'input_mask';
        inputSubAkun.size = '22';
        inputSubAkun.id = 'jurnal-sub-account-' + index;
        inputSubAkun.value = subAkun;
        inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
        tdSubAkun.appendChild(inputSubAkun);

        var tdJpajak = document.createElement('td');
        tdJpajak.style = "text-align:center";
        var inputJpajak = document.createElement('select');
        inputJpajak.name = 'jurnal[' + index + '][j_pajak]';
        inputJpajak.id = 'jurnal-j-pajak-' + index
                var jPajakArray = [{"id":0,"nama":"--Pilih--"},{"id":"3","nama":"PPh Pasal 4 (2)"},{"id":"2","nama":"PPh-21"},{"id":"4","nama":"PPh-23"},{"id":"1","nama":"PPN"}];
        var options_str = "";
        if (jPajakArray.length > 0) {
            for (var i in jPajakArray) {
                var selected = '';
                if (j_pajak === jPajakArray[i]['id']) {
                    selected = 'selected="selected"';
                }
                options_str += '<option value="' + jPajakArray[i]['id'] + '" ' + selected + ' >' +
                        jPajakArray[i]['nama'] +
                        '</option>';
            }
        }

        inputJpajak.innerHTML = options_str;
        tdJpajak.appendChild(inputJpajak);

        var tdKeterangan = document.createElement('td');
        var inputKeterangan = document.createElement('textarea');
        inputKeterangan.name = 'jurnal[' + index + '][keterangan]';
        inputKeterangan.style.resize = 'none';
        inputKeterangan.style.width = '100%';
        inputKeterangan.id = 'jurnal-keterangan-' + index;
        inputKeterangan.value = keterangan;
        tdKeterangan.appendChild(inputKeterangan);


        var tdNominal = document.createElement('td');
        var inputNominal = document.createElement('input');
        inputNominal.type = 'text';
        inputNominal.name = 'jurnal[' + index + '][nominal]';
        inputNominal.className = 'gvFloat';
        inputNominal.id = 'jurnal-nominal-' + index;
        inputNominal.value = nominal;
        inputNominal.setAttribute('onkeyup', 'setNominalJurnal("' + this.id + '");');
        //inputNominal.readOnly = ronly;
        tdNominal.appendChild(inputNominal);
        var tdAksi = document.createElement('td');
        tdAksi.className = 'links';
        tdAksi.style.padding = 0;
        tdAksi.style.paddingTop = '4px';
        tdAksi.style.textAlign = 'center';
        var linkAksiDelete = document.createElement('a');
        linkAksiDelete.className =' btn btn-xs btn-danger';
        linkAksiDelete.style.float = 'none';
        linkAksiDelete.style.display = 'inline-block';
        linkAksiDelete.href = 'javascript:void(0);';
        linkAksiDelete.title = 'Delete ' + kode;
        linkAksiDelete.setAttribute('onclick', 'deleteRecord("' + this.id + '", this);');
        var iconDelete             = document.createElement('i');
        iconDelete.className       = 'fa fa-trash';
        iconDelete.alt             = 'delete';

        // if( trans_id === '0' || trans_id === 0 ) {
        linkAksiDelete.appendChild(iconDelete);
        tdAksi.appendChild(linkAksiDelete);
        // } 

        tdKode.appendChild(prKId);
        tdKode.appendChild(inputStatus);
        tdKode.appendChild(inputId);
        tdKode.appendChild(inputKode);
        tdKode.appendChild(inputNama);
        tr.appendChild(tdAksi);
        tr.appendChild(tdKode);
        tr.appendChild(tdSubAkun);
        tr.appendChild(tdNama);
        tr.appendChild(tdJpajak);
        tr.appendChild(tdNominal);
        frag.appendChild(tr);
        // elemen row total
        var trTotal = document.createElement('tr');
        trTotal.id = 'row-jurnal-total';
        trTotal.style.fontWeight = 'bold';


        var tdTotalLabel = document.createElement('td');
        tdTotalLabel.innerHTML = 'Total';
        tdTotalLabel.style.textAlign = 'center';
        tdTotalLabel.setAttribute('colspan', '5');

        var tdTotalNominal = document.createElement('td');
        var labelNominalTotal = document.createElement('label');
        labelNominalTotal.id = 'jurnal-total';
        labelNominalTotal.style.display = 'block';
        labelNominalTotal.style.fontWeight = 'bold';
        labelNominalTotal.style.textAlign = 'right';
        labelNominalTotal.style.width = '100%';
        labelNominalTotal.innerHTML = 0;
        tdTotalNominal.appendChild(labelNominalTotal);

        // var tdEmptyTotal = document.createElement('td');
        trTotal.appendChild(tdTotalLabel);
        trTotal.appendChild(tdTotalNominal);
        // trTotal.appendChild(tdEmptyTotal);
        frag.appendChild(trTotal);

        this.appendChild(frag);

        var childObjNominal = tdNominal.firstChild;
        do {
            if (childObjNominal.tagName && childObjNominal.tagName.toUpperCase() === 'INPUT' && childObjNominal.getAttribute('class') !== null && childObjNominal.getAttribute('class').toUpperCase() === 'GVFLOAT') {
                gValidation20090108['.gvFloat'](childObjNominal);
            }
        } while (childObjNominal = childObjNominal.nextSibling);


        var subAkunNode = tdSubAkun.firstChild;
        do {
            if (subAkunNode.tagName && subAkunNode.tagName.toUpperCase() === 'INPUT' && subAkunNode.getAttribute('class') !== null && subAkunNode.getAttribute('class').toUpperCase() === 'INPUT_MASK') {
                $(subAkunNode).inputmask('**-**-**-**-**-**-**');
                custom_js['.input_mask'](subAkunNode);
            }
        } while (subAkunNode = subAkunNode.nextSibling);

        setNominalJurnal(this.id);

        return true;
    };
    /* END - ADD COA Debet */


    /* ADD COA Kredit */
    document.getElementById('CoaPlaceHolder_jurnal_kredit').addItem = function (index, trans_id, id, kode, nama, subAkun, j_pajak, keterangan, nominal) {

        var elemen_id = 'jurnal_kredit_' + index;
        document.getElementById('max_coa_k').value = index;
        if (document.getElementById(elemen_id)) {
            return true;
        }
        var frag = document.createDocumentFragment();
        var childObj = this.getElementsByTagName('tr');

        for (var i = childObj.length - 1; i >= 0; i--) {
            if (childObj[i].id === 'jurnal-kredit-empty-row' || childObj[i].id === 'row-jurnal-total-kredit') {
                this.removeChild(childObj[i]);
            }
        }
        ;

        //var ronly = false;
        var tr = document.createElement('tr');
        tr.id = elemen_id;

        var prKId = document.createElement('input');
        prKId.type = 'hidden';
        prKId.id = 'jurnalk-trans-id-' + index;
        prKId.name = 'jurnalk[' + index + '][trans_id]';
        prKId.value = trans_id;

        var inputStatus = document.createElement('input');
        inputStatus.type = 'hidden';
        inputStatus.id = 'jurnalk-status-' + index;
        inputStatus.name = 'jurnalk[' + index + '][status]';
        inputStatus.value = 'K';

        var inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.id = 'jurnalk-id-' + index;
        inputId.name = 'jurnalk[' + index + '][id]';
        inputId.value = id;

        var tdKode = document.createElement('td');
        tdKode.style.textAlign = 'center';
        var inputKode = document.createElement('input');
        inputKode.type = 'hidden';
        inputKode.name = 'jurnalk[' + index + '][kode]';
        inputKode.id = 'jurnalk-kode-' + index;
        inputKode.value = kode;

        var labelKode = document.createElement('label');
        labelKode.innerHTML = kode;
        labelKode.style.display = 'block';
        labelKode.style.width = '100%';
        tdKode.appendChild(labelKode);

        var tdNama = document.createElement('td');
        var inputNama = document.createElement('input');
        inputNama.type = 'hidden';
        inputNama.id = 'jurnalk-nama-' + index;
        inputNama.name = 'jurnalk[' + index + '][nama]';
        inputNama.value = nama;
        var labelNama = document.createElement('label');
        labelNama.innerHTML = nama;
        tdNama.appendChild(labelNama);

        var tdSubAkun = document.createElement('td');
        var inputSubAkun = document.createElement('input');
        inputSubAkun.type = 'text';
        inputSubAkun.name = 'jurnalk[' + index + '][subaccount]';
        inputSubAkun.className = 'input_mask';
        inputSubAkun.size = '22';
        inputSubAkun.id = 'jurnalk-sub-account-' + index;
        inputSubAkun.value = subAkun;
        inputSubAkun.setAttribute('data-mask', '**-**-**-**-**-**-**');
        tdSubAkun.appendChild(inputSubAkun);

        var tdJpajak = document.createElement('td');
        tdJpajak.style = "text-align:center";
        var inputJpajak = document.createElement('select');
        inputJpajak.name = 'jurnalk[' + index + '][j_pajak]';
        inputJpajak.id = 'jurnalk-j-pajak-' + index;
                var jPajakArray = [{"id":0,"nama":"--Pilih--"},{"id":"3","nama":"PPh Pasal 4 (2)"},{"id":"2","nama":"PPh-21"},{"id":"4","nama":"PPh-23"},{"id":"1","nama":"PPN"}];
        var options_str = "";
        if (jPajakArray.length > 0) {
            for (var i in jPajakArray) {
                var selected = '';
                if (j_pajak === jPajakArray[i]['id']) {
                    selected = 'selected="selected"';
                }
                options_str += '<option value="' + jPajakArray[i]['id'] + '" ' + selected + ' >' +
                        jPajakArray[i]['nama'] +
                        '</option>';
            }
        }

        inputJpajak.innerHTML = options_str;
        tdJpajak.appendChild(inputJpajak);

        var tdKeterangan = document.createElement('td');
        var inputKeterangan = document.createElement('textarea');
        inputKeterangan.name = 'jurnalk[' + index + '][keterangan]';
        inputKeterangan.style.resize = 'none';
        inputKeterangan.style.width = '100%';
        inputKeterangan.id = 'jurnalk-keterangan-' + index;
        inputKeterangan.value = keterangan;
        tdKeterangan.appendChild(inputKeterangan);


        var tdNominal = document.createElement('td');
        var inputNominal = document.createElement('input');
        inputNominal.type = 'text';
        inputNominal.name = 'jurnalk[' + index + '][nominal]';
        inputNominal.className = 'gvFloat';
        inputNominal.id = 'jurnalk-nominal-' + index;
        inputNominal.value = nominal;
        inputNominal.setAttribute('onkeyup', 'setNominalJurnalKredit("' + this.id + '");');
        //inputNominal.readOnly = ronly;
        tdNominal.appendChild(inputNominal);
        var tdAksi = document.createElement('td');
        tdAksi.className = 'links';
        tdAksi.style.padding = 0;
        tdAksi.style.paddingTop = '4px';
        tdAksi.style.textAlign = 'center';
        var linkAksiDelete = document.createElement('a');
        linkAksiDelete.className =' btn btn-xs btn-danger';
        linkAksiDelete.style.float = 'none';
        linkAksiDelete.style.display = 'inline-block';
        linkAksiDelete.href = 'javascript:void(0);';
        linkAksiDelete.title = 'Delete ' + kode;
        linkAksiDelete.setAttribute('onclick', 'deleteRecordKredit("' + this.id + '", this);');
        var iconDelete             = document.createElement('i');
        iconDelete.className            = 'fa fa-trash';
        iconDelete.alt             = 'delete';

        // if( trans_id === '0' || trans_id === 0 ) {
        linkAksiDelete.appendChild(iconDelete);
        tdAksi.appendChild(linkAksiDelete);
        // } 

        tdKode.appendChild(prKId);
        tdKode.appendChild(inputStatus);
        tdKode.appendChild(inputId);
        tdKode.appendChild(inputKode);
        tdKode.appendChild(inputNama);
        tr.appendChild(tdAksi);
        tr.appendChild(tdKode);
        tr.appendChild(tdSubAkun);
        tr.appendChild(tdNama);
        tr.appendChild(tdJpajak);
        tr.appendChild(tdNominal);
        frag.appendChild(tr);
        // elemen row total
        var trTotal = document.createElement('tr');
        trTotal.id = 'row-jurnal-total-kredit';
        trTotal.style.fontWeight = 'bold';


        var tdTotalLabel = document.createElement('td');
        tdTotalLabel.innerHTML = 'Total';
        tdTotalLabel.style.textAlign = 'center';
        tdTotalLabel.setAttribute('colspan', '5');

        var tdTotalNominal = document.createElement('td');
        var labelNominalTotal = document.createElement('label');
        labelNominalTotal.id = 'jurnal-total-kredit';
        labelNominalTotal.style.display = 'block';
        labelNominalTotal.style.fontWeight = 'bold';
        labelNominalTotal.style.textAlign = 'right';
        labelNominalTotal.style.width = '100%';
        labelNominalTotal.innerHTML = 0;
        tdTotalNominal.appendChild(labelNominalTotal);

        // var tdEmptyTotal = document.createElement('td');
        trTotal.appendChild(tdTotalLabel);
        trTotal.appendChild(tdTotalNominal);
        // trTotal.appendChild(tdEmptyTotal);
        frag.appendChild(trTotal);

        this.appendChild(frag);

        var childObjNominal = tdNominal.firstChild;
        do {
            if (childObjNominal.tagName && childObjNominal.tagName.toUpperCase() === 'INPUT' && childObjNominal.getAttribute('class') !== null && childObjNominal.getAttribute('class').toUpperCase() === 'GVFLOAT') {
                gValidation20090108['.gvFloat'](childObjNominal);
            }
        } while (childObjNominal = childObjNominal.nextSibling);


        var subAkunNode = tdSubAkun.firstChild;
        do {
            if (subAkunNode.tagName && subAkunNode.tagName.toUpperCase() === 'INPUT' && subAkunNode.getAttribute('class') !== null && subAkunNode.getAttribute('class').toUpperCase() === 'INPUT_MASK') {
                $(subAkunNode).inputmask('**-**-**-**-**-**-**');
                custom_js['.input_mask'](subAkunNode);
            }
        } while (subAkunNode = subAkunNode.nextSibling);

        setNominalJurnalKredit(this.id);

        return true;
    };
    /* END - ADD COA Kredit */

    var setNominalArl = function (nominalArl) {
        var totalDebet = document.getElementById('nominal_arl');
        totalDebet.value = formatNumber(nominalArl);
        //var totalKredit = 0;
    };

    /* For COA Debet */
    var deleteRecord = function (elemenId, el) {
        var tBody = document.getElementById(elemenId);
        if (typeof (tBody) !== 'undefined' && tBody !== null) {
            var emptyRow = 'jurnal-debet-empty-row';
            var totalRow = 'row-jurnal-total';

            var record = el.parentNode.parentNode;
            var firstNode = tBody.firstChild.nextSibling;
            var childObj = tBody.getElementsByTagName('tr');

            if (firstNode.id !== emptyRow || firstNode.id !== totalRow) {
                tBody.removeChild(record);
                if (childObj.length === 0) {
                    setEmptyRecord(tBody);
                } else {
                    if (childObj[0].id === totalRow) {
                        setEmptyRecord(tBody);
                    } else {
                        setNominalJurnal(tBody.id);
                    }
                }
            } else {
                setEmptyRecord(tBody);
            }
        } else {
            console.log('Cannot find HTML elemen');
        }
    }

    var setEmptyRecord = function (elemen) {
        var emptyRow = 'jurnal-debet-empty-row';


        var childObj = elemen.getElementsByTagName('tr');
        for (var i = childObj.length - 1; i >= 0; i--) {
            elemen.removeChild(childObj[i]);
        }
        ;

        var frag = document.createDocumentFragment();
        var tr = document.createElement('tr');
        tr.id = emptyRow;
        var td = document.createElement('td');
        td.setAttribute('colspan', 6);
        td.style.textAlign = 'center';
        td.style.fontStyle = 'italic';
        td.innerHTML = '-- Pilih Data Akun --';

        tr.appendChild(td);
        frag.appendChild(tr);
        elemen.insertBefore(frag, elemen.firstChild);

        return true;
    };

    var setNominalJurnal = function (elemenId) {
        var elemen = document.getElementById(elemenId);
        var childObj = elemen.getElementsByTagName('input');
        var elemenId = elemen.id.toUpperCase();
        //var maxNominal       = formElements.nominal.gvGetValue();


        var patern = /jurnal\[(\d+)\]\[nominal\]/;
        var nominalHolder = document.getElementById('jurnal-total');
        var nominalTotal = 0;

        if (childObj.length > 0) {
            for (var i = childObj.length - 1; i >= 0; i--) {
                var str = childObj[i].name;
                if (str.match(patern)) {
                    var nominal = clearCurrency(childObj[i].value);
                    nominalTotal += nominal;
                }
            }
            ;
        }

        if (nominalHolder !== null || typeof (nominalHolder) !== 'undefined') {
            nominalHolder.innerHTML = formatNumber(nominalTotal);
        }

        setNominalArl(nominalTotal);
    };

    document.getElementById('CoaPlaceHolder_jurnal_debet').deleteAllItem = function ()
    {
        var Obj = this.getElementsByTagName('tr');
        var emptyRow = document.createElement('tr');
        emptyRow.id = 'jurnal-debet-empty-row';
        var tdEmpty = document.createElement('td');
        tdEmpty.setAttribute('colspan', '6');
        tdEmpty.style.textAlign = 'center';
        tdEmpty.style.fontStyle = 'italic';
        tdEmpty.innerHTML = '-- Pilih Data Akun -- ';
        emptyRow.appendChild(tdEmpty);

        for (var i = Obj.length - 1; i >= 0; i--) {
            this.removeChild(Obj[i]);
        }
        ;
        this.appendChild(emptyRow);
    };

    var dataJurnal = [];
    if (dataJurnal.length > 0) {
        for (var i in dataJurnal) {
            document.getElementById('CoaPlaceHolder_jurnal_debet').addItem(
                    dataJurnal[i].index,
                    dataJurnal[i].trans_id,
                    dataJurnal[i].id,
                    dataJurnal[i].kode,
                    dataJurnal[i].nama,
                    dataJurnal[i].sub_akun,
                    dataJurnal[i].j_pajak,
                    dataJurnal[i].keterangan,
                    dataJurnal[i].nominal
                    );
        }
    }
    /* END - For COA Debet */

    /* For COA Kredit */
    var deleteRecordKredit = function (elemenId, el) {
        var tBody = document.getElementById(elemenId);
        if (typeof (tBody) !== 'undefined' && tBody !== null) {
            var emptyRow = 'jurnal-kredit-empty-row';
            var totalRow = 'row-jurnal-total-kredit';

            var record = el.parentNode.parentNode;
            var firstNode = tBody.firstChild.nextSibling;
            var childObj = tBody.getElementsByTagName('tr');

            if (firstNode.id !== emptyRow || firstNode.id !== totalRow) {
                tBody.removeChild(record);
                if (childObj.length === 0) {
                    setEmptyRecordKredit(tBody);
                } else {
                    if (childObj[0].id === totalRow) {
                        setEmptyRecordKredit(tBody);
                    } else {
                        setNominalJurnalKredit(tBody.id);
                    }
                }
            } else {
                setEmptyRecordKredit(tBody);
            }
        } else {
            console.log('Cannot find HTML elemen');
        }
    }

    var setEmptyRecordKredit = function (elemen) {
        var emptyRow = 'jurnal-kredit-empty-row';


        var childObj = elemen.getElementsByTagName('tr');
        for (var i = childObj.length - 1; i >= 0; i--) {
            elemen.removeChild(childObj[i]);
        }
        ;

        var frag = document.createDocumentFragment();
        var tr = document.createElement('tr');
        tr.id = emptyRow;
        var td = document.createElement('td');
        td.setAttribute('colspan', 6);
        td.style.textAlign = 'center';
        td.style.fontStyle = 'italic';
        td.innerHTML = '-- Pilih Data Akun --';

        tr.appendChild(td);
        frag.appendChild(tr);
        elemen.insertBefore(frag, elemen.firstChild);

        return true;
    };

    var setNominalJurnalKredit = function (elemenId) {
        var elemen = document.getElementById(elemenId);
        var childObj = elemen.getElementsByTagName('input');
        var elemenId = elemen.id.toUpperCase();
        //var maxNominal       = formElements.nominal.gvGetValue();


        var patern = /jurnalk\[(\d+)\]\[nominal\]/;
        var nominalHolder = document.getElementById('jurnal-total-kredit');
        var nominalTotal = 0;

        if (childObj.length > 0) {
            for (var i = childObj.length - 1; i >= 0; i--) {
                var str = childObj[i].name;
                if (str.match(patern)) {
                    var nominal = clearCurrency(childObj[i].value);
                    nominalTotal += nominal;
                }
            }
            ;
        }

        if (nominalHolder !== null || typeof (nominalHolder) !== 'undefined') {
            nominalHolder.innerHTML = formatNumber(nominalTotal);
        }

    };

    document.getElementById('CoaPlaceHolder_jurnal_kredit').deleteAllItem = function ()
    {
        var Obj = this.getElementsByTagName('tr');
        var emptyRow = document.createElement('tr');
        emptyRow.id = 'jurnal-kredit-empty-row';
        var tdEmpty = document.createElement('td');
        tdEmpty.setAttribute('colspan', '6');
        tdEmpty.style.textAlign = 'center';
        tdEmpty.style.fontStyle = 'italic';
        tdEmpty.innerHTML = '-- Pilih Data Akun -- ';
        emptyRow.appendChild(tdEmpty);

        for (var i = Obj.length - 1; i >= 0; i--) {
            this.removeChild(Obj[i]);
        }
        ;
        this.appendChild(emptyRow);
    };

    var dataJurnalK = [];
    if (dataJurnalK.length > 0) {
        for (var i in dataJurnalK) {
            document.getElementById('CoaPlaceHolder_jurnal_kredit').addItem(
                    dataJurnalK[i].index,
                    dataJurnalK[i].trans_id,
                    dataJurnalK[i].id,
                    dataJurnalK[i].kode,
                    dataJurnalK[i].nama,
                    dataJurnalK[i].sub_akun,
                    dataJurnalK[i].j_pajak,
                    dataJurnalK[i].keterangan,
                    dataJurnalK[i].nominal
                    );
        }
    }
    /* END - For COA Kredit */

    $(function () {
        $("#tanggal").datepicker({
            dateFormat: 'd MM yy'
        });       

    });
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>