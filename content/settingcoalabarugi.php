<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=92&amp;mid=92">Setting</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_coa_laba_rugi&amp;sub=AddCoaLabaRugi&amp;act=view&amp;typ=html">Setting CoA Laba Rugi</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Setting CoA Laba Rugi
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
 

<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">
			   COA Laba Rugi
			</span>
        </div>
        <div class="panel-body">
                      
                <form method="POST" action="/ekeuanganpts/index.php?mod=finansi_coa_laba_rugi&amp;sub=SaveCoaLabaRugi&amp;act=do&amp;typ=json" class="xhr_form form-horizontal dest_subcontent-element" data-target="/ekeuanganpts/index.php?mod=finansi_coa_laba_rugi&amp;sub=AddCoaLabaRugi&amp;act=view&amp;typ=html" id="frmInputAp" name="frmInputAp">
                        <input type="hidden" name="data_id" value="">
                        <input type="hidden" name="pembukuan_id" value="">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Jenis Pembukuan
                        </label>
                        <div class="col-sm-5">  
                            <label class="custom-control custom-radio radio-inline">
                                <input type="radio" name="jenis_pembukuan" value="1" checked="checked" id="jns_bisnis" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                Bisnis
                            </label>
                            <label class="custom-control custom-radio radio-inline">
                                    <input type="radio" name="jenis_pembukuan" value="2" id="jns_nirlaba" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                Nirlaba
                            </label>       
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                                Daftar COA
                        </label>
                        <div class="col-sm-8">  
                            
                            <div class="btn-toolbar mb-15">
                                <div class="btn-group pull-right">
                                        <a class="dest_subcontent-element btn btn-info btn-flat" href="javascript:void(0)" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=finansi_coa_laba_rugi&amp;sub=PopupCoa&amp;act=view&amp;typ=html&amp;tipe=debet', 'Chart Of Account</a>', 600, 500);" title="Tambah Debet">
                                            <i class="fa fa-plus-circle"></i>
                                            Tambah Akun
                                        </a>     
                                </div>
                            </div>

                            <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>   
                                            <th style="width: 50px;text-align: center;">
                                                Aksi
                                            </th>                    
                                            <th style="width: 70px;text-align: center;">
                                                Set Aktif
                                            </th>
                                            <th style="width: 100px;text-align: center;">
                                                Kode Akun
                                            </th>
                                            <th style="text-align: center;">
                                                Nama Rekening
                                            </th>    
                                            <th style="text-align: center;">
                                                Pasangan COA
                                            </th>                                  
                                            <th style="width: 50px;text-align: center;">
                                                Status
                                            </th>  
                                        </tr>
                                    </thead>
                                        <tbody id="CoaPlaceHolder_coa">
                                            
                                        <tr id="jurnal_debet_18"><td></td><td style="text-align: center;"><label class="custom-control custom-checkbox custom-control-blank" style="margin-top: 0px; display: inline-block;"><input type="checkbox" id="coa-set-aktif-18" class="custom-control-input" name="coa[18][is_aktif]" value="1" onclick="onlyOneChecked(&quot;18&quot;);"><span class="custom-control-indicator"></span></label></td><td style="text-align: center;"><label style="display: block; width: 100%;">3101000</label><input type="hidden" id="coa-clr-id-18" name="coa[18][clr_id]" value="4"><input type="hidden" id="coa-id-18" name="coa[18][id]" value="18"><input type="hidden" id="coa-is-nirlaba-18" name="coa[18][is_nirlaba]" value="T"><input type="hidden" id="coa-is-aktif-18" name="coa[18][status]" value="YT"><input type="hidden" name="coa[18][kode]" id="coa-kode-18" value="3101000"><input type="hidden" id="coa-nama-18" name="coa[18][nama]" value="Aset Neto Tidak Terikat Tahun Berjalan"></td><td><label>Aset Neto Tidak Terikat Tahun Berjalan</label></td><td><select id="coa-pas-18" name="coa[18][coa_pasangan_id]" class="form-control"><option value="">-- PILIH --</option><option value="18">3101000 - Aset Neto Tidak Terikat Tahun Berjalan</option><option value="48">3102000 - Aset Neto Tidak Terikat Awal Tahun</option><option value="21">3200000 - ASET NETO TERIKAT TEMPORER</option><option value="22">3300000 - ASET NETO TERIKAT PERMANEN</option></select></td><td class="links" style="padding: 4px 0px 0px; text-align: center;"><a href="javascript:void(0);" title="status" style="float: none; display: inline-block;"><img src="images/icons/16/green.gif" alt="status"></a></td></tr><tr id="jurnal_debet_48"><td><a class="btn btn-xs btn-danger" href="javascript:void(0);" title="Delete Akun : 3102000" onclick="deleteRecord(&quot;CoaPlaceHolder_coa&quot;, this);"><i class="fa fa-trash"></i></a></td><td style="text-align: center;"><label class="custom-control custom-checkbox custom-control-blank" style="margin-top: 0px; display: inline-block;"><input type="checkbox" id="coa-set-aktif-48" class="custom-control-input" name="coa[48][is_aktif]" value="1" onclick="onlyOneChecked(&quot;48&quot;);"><span class="custom-control-indicator"></span></label></td><td style="text-align: center;"><label style="display: block; width: 100%;">3102000</label><input type="hidden" id="coa-clr-id-48" name="coa[48][clr_id]" value="6"><input type="hidden" id="coa-id-48" name="coa[48][id]" value="48"><input type="hidden" id="coa-is-nirlaba-48" name="coa[48][is_nirlaba]" value="T"><input type="hidden" id="coa-is-aktif-48" name="coa[48][status]" value="T"><input type="hidden" name="coa[48][kode]" id="coa-kode-48" value="3102000"><input type="hidden" id="coa-nama-48" name="coa[48][nama]" value="Aset Neto Tidak Terikat Awal Tahun"></td><td><label>Aset Neto Tidak Terikat Awal Tahun</label></td><td><select id="coa-pas-48" name="coa[48][coa_pasangan_id]" class="form-control"><option value="">-- PILIH --</option><option value="18">3101000 - Aset Neto Tidak Terikat Tahun Berjalan</option><option value="48">3102000 - Aset Neto Tidak Terikat Awal Tahun</option><option value="21">3200000 - ASET NETO TERIKAT TEMPORER</option><option value="22">3300000 - ASET NETO TERIKAT PERMANEN</option></select></td><td class="links" style="padding: 4px 0px 0px; text-align: center;"><a href="javascript:void(0);" title="status" style="float: none; display: inline-block;"><img src="images/icons/16/red.gif" alt="status"></a></td></tr><tr id="jurnal_debet_21"><td><a class="btn btn-xs btn-danger" href="javascript:void(0);" title="Delete Akun : 3200000" onclick="deleteRecord(&quot;CoaPlaceHolder_coa&quot;, this);"><i class="fa fa-trash"></i></a></td><td style="text-align: center;"><label class="custom-control custom-checkbox custom-control-blank" style="margin-top: 0px; display: inline-block;"><input type="checkbox" id="coa-set-aktif-21" class="custom-control-input" name="coa[21][is_aktif]" value="1" onclick="onlyOneChecked(&quot;21&quot;);"><span class="custom-control-indicator"></span></label></td><td style="text-align: center;"><label style="display: block; width: 100%;">3200000</label><input type="hidden" id="coa-clr-id-21" name="coa[21][clr_id]" value="7"><input type="hidden" id="coa-id-21" name="coa[21][id]" value="21"><input type="hidden" id="coa-is-nirlaba-21" name="coa[21][is_nirlaba]" value="T"><input type="hidden" id="coa-is-aktif-21" name="coa[21][status]" value="T"><input type="hidden" name="coa[21][kode]" id="coa-kode-21" value="3200000"><input type="hidden" id="coa-nama-21" name="coa[21][nama]" value="ASET NETO TERIKAT TEMPORER"></td><td><label>ASET NETO TERIKAT TEMPORER</label></td><td><select id="coa-pas-21" name="coa[21][coa_pasangan_id]" class="form-control"><option value="">-- PILIH --</option><option value="18">3101000 - Aset Neto Tidak Terikat Tahun Berjalan</option><option value="48">3102000 - Aset Neto Tidak Terikat Awal Tahun</option><option value="21">3200000 - ASET NETO TERIKAT TEMPORER</option><option value="22">3300000 - ASET NETO TERIKAT PERMANEN</option></select></td><td class="links" style="padding: 4px 0px 0px; text-align: center;"><a href="javascript:void(0);" title="status" style="float: none; display: inline-block;"><img src="images/icons/16/red.gif" alt="status"></a></td></tr></tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                           
                        </label>
                        <div class="col-sm-5">                              
                            <input type="submit" name="btnsimpan" value="Simpan" class="btn btn-primary">
                            <input type="reset" name="btnReset" value="Batal" class="btn btn-danger">
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
        <li>
            Klik Tombol <b>"Simpan"</b> Setiap kali ingin melakukan perubahan konfigurasi coa laba rugi.
        </li>
        <li>
            Klik Tombol <b>"Batal"</b> Jika ingin membatalkan proses, konfigurasi coa laba rugi akan kembali ke sebelumnya.
        </li>        
        <li>
            Untuk Jenis Pembukuan "Bisnis" hanya dibolehkan memilih (check) satu coa saja.
        </li>       
        <li>
            Untuk Jenis Pembukuan "Nirlaba" boleh memilih banyak coa.
        </li>
        <li>
            Icon <img src="images/icons/16/tick_circle.png" alt="status" style="margin-bottom: -3px;">  Coa Laba Rugi aktif dan sudah digunakan dalam Pembukuan (Tidak bisa dihapus)
        </li>
        <li>
            Icon <img src="images/icons/16/green.gif" alt="status" style="margin-bottom: -3px;">  Coa Laba Rugi aktif dan belum digunakan dalam Pembukuan (Tidak bisa dihapus)
        </li>
        <li>
            Icon <img src="images/icons/16/yellow.gif" alt="status" style="margin-bottom: -3px;">  Coa Laba Rugi tidak aktif dan sudah pernah digunakan dalam Pembukuan (Tidak bisa dihapus)
        </li>
        <li>
            Icon <img src="images/icons/16/red.gif" alt="status" style="margin-bottom: -3px;">  Coa Laba Rugi tidak aktif dan belum pernah digunakan dalam Pembukuan
        </li>
        <li>
            Icon <img src="images/icons/16/button-delete.gif" alt="hapus" style="margin-bottom: -3px;"> Untuk Hapus Coa Laba Rugi (Sebelumnya coa di non-aktifkan terlebih dahulu dengan melakukan un-check pada kolom "SET AKTIF")            
        </li>
    </ul>
</div>
</div>

<script type="text/javascript">
    var formInput = document.forms['frmInputAp'];
    var formElements = formInput.elements;

    var clearCurrency = function (str) {
        num = str.toString();
        num = num.replace(/\$|\./g, '');
        num = num.replace(/\$|\,/g, '.');
        num = parseFloat(num);
        return num;
    }

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
        ;
    }
    
    var json_coa = [{"id":"18","kode":"3101000","nama":"Aset Neto Tidak Terikat Tahun Berjalan"},{"id":"48","kode":"3102000","nama":"Aset Neto Tidak Terikat Awal Tahun"},{"id":"21","kode":"3200000","nama":"ASET NETO TERIKAT TEMPORER"},{"id":"22","kode":"3300000","nama":"ASET NETO TERIKAT PERMANEN"}];

    document.getElementById('CoaPlaceHolder_coa').addItem = function (clr_id,id, kode, nama, is_aktif, status, is_nirlaba,pasangan_id) {

        var elemen_id = 'jurnal_debet_' + id;
        if (document.getElementById(elemen_id)) {
            return true;
        }
        var frag = document.createDocumentFragment();
        var childObj = this.getElementsByTagName('tr');

        for (var i = childObj.length - 1; i >= 0; i--) {
            if (childObj[i].id === 'coa-empty-row') {
                this.removeChild(childObj[i]);
            }
        }
        ;

        var tr = document.createElement('tr');
        tr.id = elemen_id;

        var inputClrId = document.createElement('input');
        inputClrId.type = 'hidden';
        inputClrId.id = 'coa-clr-id-' + id;
        inputClrId.name = 'coa[' + id + '][clr_id]';
        inputClrId.value = clr_id;
        
        var inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.id = 'coa-id-' + id;
        inputId.name = 'coa[' + id + '][id]';
        inputId.value = id;

        var inputStatus = document.createElement('input');
        inputStatus.type = 'hidden';
        inputStatus.id = 'coa-is-aktif-' + id;
        inputStatus.name = 'coa[' + id + '][status]';
        inputStatus.value = status;

        var inputIsNirlaba = document.createElement('input');
        inputIsNirlaba.type = 'hidden';
        inputIsNirlaba.id = 'coa-is-nirlaba-' + id;
        inputIsNirlaba.name = 'coa[' + id + '][is_nirlaba]';
        inputIsNirlaba.value = is_nirlaba;

        var tdKode = document.createElement('td');
        tdKode.style.textAlign = 'center';
        var inputKode = document.createElement('input');
        inputKode.type = 'hidden';
        inputKode.name = 'coa[' + id + '][kode]';
        inputKode.id = 'coa-kode-' + id;
        inputKode.value = kode;

        var labelKode = document.createElement('label');
        labelKode.innerHTML = kode;
        labelKode.style.display = 'block';
        labelKode.style.width = '100%';
        tdKode.appendChild(labelKode);

        var tdNama = document.createElement('td');
        var inputNama = document.createElement('input');
        inputNama.type = 'hidden';
        inputNama.id = 'coa-nama-' + id;
        inputNama.name = 'coa[' + id + '][nama]';
        inputNama.value = nama;
        var labelNama = document.createElement('label');
        labelNama.innerHTML = nama;
        tdNama.appendChild(labelNama);

        //select untuk data pasangan
        var tdPas = document.createElement('td');
        var inputPas = document.createElement('select');
        inputPas.id = 'coa-pas-' + id;
        inputPas.name = 'coa[' + id + '][coa_pasangan_id]';
        inputPas.className = 'form-control';

        var option = document.createElement('option');
        option.value = '';
        option.innerHTML = "-- PILIH --";
        inputPas.appendChild(option);

        for(i=0;i<json_coa.length;i++){
            var option = document.createElement('option');
            option.value = json_coa[i].id;
            option.innerHTML = json_coa[i].kode+' - '+json_coa[i].nama;
            if(json_coa[i].id == pasangan_id){
                option.selected = true;
            }
            inputPas.appendChild(option);
        }
        
        tdPas.appendChild(inputPas);

        var tdStatus = document.createElement('td');
        tdStatus.className = 'links';
        tdStatus.style.padding = 0;
        tdStatus.style.paddingTop = '4px';
        tdStatus.style.textAlign = 'center';
        var linkStatus = document.createElement('a');
        linkStatus.style.float = 'none';
        linkStatus.style.display = 'inline-block';
        linkStatus.href = 'javascript:void(0);';
        linkStatus.title = 'status';
        var iconStatusGreen = document.createElement('img');
        iconStatusGreen.src = 'images/icons/16/green.gif';        
        iconStatusGreen.alt = 'status';
        var iconStatusYellow = document.createElement('img');
        iconStatusYellow.src = 'images/icons/16/yellow.gif';
        iconStatusYellow.alt = 'status';
        var iconStatusRed = document.createElement('img');
        iconStatusRed.src = 'images/icons/16/red.gif';
        iconStatusRed.alt = 'status';
        var iconStatusGreenCheck = document.createElement('img');
        iconStatusGreenCheck.src = 'images/icons/16/tick_circle.png';
        iconStatusGreenCheck.alt = 'status';

        var tdSetAktif = document.createElement('td');
        tdSetAktif.style.textAlign = 'center';

        var inputSetAktifWrap = document.createElement('label');
        inputSetAktifWrap.className = 'custom-control custom-checkbox custom-control-blank';
        inputSetAktifWrap.style.marginTop = 0;
        inputSetAktifWrap.style.display = 'inline-block';
        
        var inputSetAktif = document.createElement('input');
        inputSetAktif.type = 'checkbox';
        inputSetAktif.id = 'coa-set-aktif-' + id;
        inputSetAktif.className = 'custom-control-input';
        inputSetAktif.name = 'coa[' + id + '][is_aktif]';
        var set_aktif = 1;
        var isCek = false;

        if (is_aktif === 'Y') {
            isCek = true;
        } else {
            isCek = false;
        }
        inputSetAktif.value = set_aktif;
        inputSetAktif.checked = isCek;
        if (is_nirlaba === 'T') {        
            if(clr_id === 0) {
                onlyOneChecked(id);
            }
            inputSetAktif.setAttribute('onclick', 'onlyOneChecked("' + id + '");');
        }
        var inputSetAktifSpan = document.createElement('span');
        inputSetAktifSpan.className = 'custom-control-indicator';

        inputSetAktifWrap.appendChild(inputSetAktif);
        inputSetAktifWrap.appendChild(inputSetAktifSpan);
        tdSetAktif.appendChild(inputSetAktifWrap);

        var tdAksi = document.createElement('td');
        var linkAksiDelete = document.createElement('a');
        linkAksiDelete.className = 'btn btn-xs btn-danger';
        linkAksiDelete.href = 'javascript:void(0);';
        linkAksiDelete.title = 'Delete Akun : ' + kode;
        linkAksiDelete.setAttribute('onclick', 'deleteRecord("' + this.id + '", this);');
        var iconDelete = document.createElement('i');
        iconDelete.className = 'fa fa-trash';
        iconDelete.alt = 'delete';

        if (status === 'Y') {
            linkStatus.appendChild(iconStatusGreenCheck);
            tdStatus.appendChild(linkStatus);
        } else if (status === 'YT') {
            linkStatus.appendChild(iconStatusGreen);
            tdStatus.appendChild(linkStatus);
        } else if (status === 'TY') {
            linkStatus.appendChild(iconStatusYellow);
            tdStatus.appendChild(linkStatus);
        } else {
            linkAksiDelete.appendChild(iconDelete);
            tdAksi.appendChild(linkAksiDelete);
            linkStatus.appendChild(iconStatusRed);
            tdStatus.appendChild(linkStatus);
        }

        tdKode.appendChild(inputClrId);
        tdKode.appendChild(inputId);
        tdKode.appendChild(inputIsNirlaba);
        tdKode.appendChild(inputStatus);
        tdKode.appendChild(inputKode);
        tdKode.appendChild(inputNama);        

        tr.appendChild(tdAksi);
        tr.appendChild(tdSetAktif);
        tr.appendChild(tdKode);
        tr.appendChild(tdNama);
        tr.appendChild(tdPas);
        tr.appendChild(tdStatus);

        frag.appendChild(tr);
        this.appendChild(frag);
        return true;
    }


    var onlyOneChecked = function (id) {

        var getCheckBox = document.getElementsByClassName('checkbox-coa');
        var iCheckBox;
        for (iCheckBox = 0; iCheckBox < getCheckBox.length; iCheckBox++) {
            if (getCheckBox[iCheckBox].id !== ('coa-set-aktif-' + id)) {
                getCheckBox[iCheckBox].checked = false;
            } else {
                getCheckBox[iCheckBox].checked = true;
            }
        }
    }

    var deleteRecord = function (elemenId, el) {
        var tBody = document.getElementById(elemenId);
        if (typeof (tBody) !== 'undefined' && tBody !== null) {
            var emptyRow = 'coa-empty-row';
            var totalRow = 'row-coa-total';

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
        var emptyRow = 'coa-empty-row';


        var childObj = elemen.getElementsByTagName('tr');
        for (var i = childObj.length - 1; i >= 0; i--) {
            elemen.removeChild(childObj[i]);
        }
        ;

        var frag = document.createDocumentFragment();
        var tr = document.createElement('tr');
        tr.id = emptyRow;
        var td = document.createElement('td');
        td.setAttribute('colspan', 5);
        td.style.textAlign = 'center';
        td.innerHTML = 'Pilih Data Akun';

        tr.appendChild(td);
        frag.appendChild(tr);
        elemen.insertBefore(frag, elemen.firstChild);

        return true;
    }

    document.getElementById('CoaPlaceHolder_coa').deleteAllItem = function ()
    {
        var Obj = this.getElementsByTagName('tr');
        var emptyRow = document.createElement('tr');
        emptyRow.id = 'coa-empty-row';
        var tdEmpty = document.createElement('td');
        tdEmpty.setAttribute('colspan', '5');
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

    var getDataCOA = [{"clr_id":"4","id":"18","kode":"3101000","nama":"Aset Neto Tidak Terikat Tahun Berjalan","is_aktif":"Y","status":"YT","is_nirlaba":"T","coa_pasangan_id":null},{"clr_id":"6","id":"48","kode":"3102000","nama":"Aset Neto Tidak Terikat Awal Tahun","is_aktif":"T","status":"T","is_nirlaba":"T","coa_pasangan_id":null},{"clr_id":"7","id":"21","kode":"3200000","nama":"ASET NETO TERIKAT TEMPORER","is_aktif":"T","status":"T","is_nirlaba":"T","coa_pasangan_id":null}];
    var getDataCOAE = {"2":[{"clr_id":"1","id":"18","kode":"3101000","nama":"Aset Neto Tidak Terikat Tahun Berjalan","is_aktif":"Y","status":"Y","is_nirlaba":"Y","coa_pasangan_id":"48"},{"clr_id":"5","id":"48","kode":"3102000","nama":"Aset Neto Tidak Terikat Awal Tahun","is_aktif":"Y","status":"YT","is_nirlaba":"Y","coa_pasangan_id":null},{"clr_id":"2","id":"21","kode":"3200000","nama":"ASET NETO TERIKAT TEMPORER","is_aktif":"Y","status":"YT","is_nirlaba":"Y","coa_pasangan_id":null},{"clr_id":"3","id":"22","kode":"3300000","nama":"ASET NETO TERIKAT PERMANEN","is_aktif":"Y","status":"YT","is_nirlaba":"Y","coa_pasangan_id":null}],"1":[{"clr_id":"4","id":"18","kode":"3101000","nama":"Aset Neto Tidak Terikat Tahun Berjalan","is_aktif":"Y","status":"YT","is_nirlaba":"T","coa_pasangan_id":null},{"clr_id":"6","id":"48","kode":"3102000","nama":"Aset Neto Tidak Terikat Awal Tahun","is_aktif":"T","status":"T","is_nirlaba":"T","coa_pasangan_id":null},{"clr_id":"7","id":"21","kode":"3200000","nama":"ASET NETO TERIKAT TEMPORER","is_aktif":"T","status":"T","is_nirlaba":"T","coa_pasangan_id":null}]};


    getCoaLabaRugi(getDataCOA);
    function getCoaLabaRugi(dataCOA) {
        if (dataCOA.length > 0) {
            for (var i in dataCOA) {
                document.getElementById('CoaPlaceHolder_coa').addItem(
                        dataCOA[i].clr_id,
                        dataCOA[i].id,
                        dataCOA[i].kode,
                        dataCOA[i].nama,
                        dataCOA[i].is_aktif,
                        dataCOA[i].status,
                        dataCOA[i].is_nirlaba,
                        dataCOA[i].coa_pasangan_id
                        );
            }
        }
    }

    document.getElementById('jns_bisnis').onclick = function () {
        var hasil = confirm('Apakah Anda yakin akan mengganti jenis pembukuan ?');
        if (hasil === true) {
            document.getElementById('CoaPlaceHolder_coa').deleteAllItem();
            var jns = document.getElementById('jns_bisnis').value;
            if (getDataCOAE[jns] !== 'undefined') {
                getCoaLabaRugi(getDataCOAE[jns]);
            }
        } else {
            resetForm();
        }
    };
    document.getElementById('jns_nirlaba').onclick = function () {
        var hasil = confirm('Apakah Anda yakin akan mengganti jenis pembukuan ?');
        if (hasil === true) {
            document.getElementById('CoaPlaceHolder_coa').deleteAllItem();
            var jns = document.getElementById('jns_nirlaba').value;
            if (getDataCOAE[jns] !== 'undefined') {
                getCoaLabaRugi(getDataCOAE[jns]);
            }
        } else {
            resetForm();
        }
    };

    function resetForm() {
        GtfwAjax.replaceContentWithUrl("subcontent-element", "/ekeuanganpts/index.php?mod=finansi_coa_laba_rugi&sub=AddCoaLabaRugi&act=view&typ=html&ascomponent=1");
    }
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>