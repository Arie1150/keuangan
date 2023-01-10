<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=507&amp;mid=507">Transaksi Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=movement_anggaran&amp;sub=movementAnggaran&amp;act=view&amp;typ=html">Relokasi Anggaran</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Relokasi Anggaran
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<style>
table.table-edit input[readonly].gvFloat{
   color: #005E20;
   font-weight: bold;
   border: none;
   text-align: left !important;
   background-color: inherit;
}

</style>
<script language="javascript" type="text/javascript" charset="utf-8">
    // <![CDATA[
    function mvPopupUnitKerja(url){ 
      var kegiatan_asal = document.getElementById("kegrefId");
      var unit_id_asal  = document.getElementById("unit_kerja_id");

      if(unit_id_asal.value == ''){
            alert('Silakan pilih Unit Kerja anggaran asal');
      }else if(kegiatan_asal.value == ''){
            alert('Silakan pilih kegiatan asal');
      }else{   
        showPopup(url,' Unit Kerja',550,550);
      }
    }
    
    function popupMak(){
        var url = '/ekeuanganpts/index.php?mod=movement_anggaran&sub=PopupMak&act=view&typ=html';
        showPopup(url,'',550,550);
    }
    function popupAnggaranAwal(){
        // var bas = document.getElementById("bas");
        // var bas_val = bas.options[bas.selectedIndex].value;
        // var bas_text = bas.options[bas.selectedIndex].text;
        //var mak     = document.getElementById("mak_id").value;
        var unit_id = document.getElementById("unit_kerja_id");
        var unit_nama = document.getElementById("unit_kerja_nama");
        //alert(unit_id);
        if(unit_id.value == ''){
            alert('Silakan pilih Unit Kerja anggaran asal');
        }else{
        /**
        if(mak == '')
        {
            alert('Pilih MAK');
        }
        else
        {*/
            //alert(mak);
            showPopup('/ekeuanganpts/index.php?mod=movement_anggaran&sub=ListKegiatanAnggaran&act=view&typ=html&unit_id=1' + '&unit_id=' + unit_id.value + '&unit_nama=' + unit_nama.value,'Daftar Kegiatan Anggaran Asal',800,550);
        //}
        }
        
    }
    
    function popupAnggaranTujuan(){
        // var bas = document.getElementById("bas");
        var kegiatan_asal = document.getElementById("kegrefId");
        // var bas_val = bas.options[bas.selectedIndex].value;
        // var bas_text = bas.options[bas.selectedIndex].text;
        var anggaran_awal = document.getElementById("kegrefNomor").value;
        //var mak     = document.getElementById("mak_id").value;
        var unit_id = document.getElementById("unit_kerja_id_tujuan");
        var unit_nama = document.getElementById("unit_kerja_nama_tujuan");
        if(kegiatan_asal.value == ''){
            alert('Silakan pilih kegiatan asal');
        }else if(unit_id.value == ''){
            alert('Silakan pilih Unit Kerja anggaran tujuan');
        }else{
            showPopup('/ekeuanganpts/index.php?mod=movement_anggaran&sub=ListKegiatanAnggaranTujuan&act=view&typ=html&unit_id=1' + '&unit_id=' + unit_id.value + '&unit_nama=' + unit_nama.value,'Daftar Kegiatan Anggaran Tujuan',800,550);
        }
    }
    
    function check_val(id){
        var nilai_asal  = document.getElementById("KOMP_" +id+ "_nominal_hidden");
        if(this.value > nilai_asal.value){
            alert('nilai anggaran terlalu besar');
        }
    }
    // ]]>
</script> 

<div class="panel panel-default">
      <div class="panel-heading">
            <span class="panel-title">
                Proses 
                Budget Reloc
            </span>
      </div>
      <div class="panel-body">

    
    

    <form class="xhr_form form-horizontal" name="movement_anggaran" method="post" action="/ekeuanganpts/index.php?mod=movement_anggaran&amp;sub=Movement&amp;act=do&amp;typ=html">
        <div class="form-group">
            <label class="col-md-3 control-label">
               Tahun Anggaran
            </label>
            <div class="col-md-5">
                <input type="hidden" name="tahun_periode_id" value="9" id="tahun_periode_id">
               <label class="form-control-label">
                    2023
               </label>
            </div>
         </div>
         <div class="form-group">
                <label class="col-md-3 control-label">
                   Unit Kerja
                </label>
                <div class="col-md-5">
                    <input type="hidden" name="tahun_periode_id" value="9" id="tahun_periode_id">
                   <label class="form-control-label">
                        UNIVERSITAS
                   </label>
                </div>
         </div>
         <div class="form-group" style="display:none;">
                <label class="col-md-3 control-label">
                   Bagan Akun Standar
                </label>
                <div class="col-md-5">
                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="" class="form-control">
	
		<option value=""></option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                </div>
         </div>
         <div class="form-group" style="display:none;">
                <label class="col-md-3 control-label">
                   Mata Anggaran
                </label>
                <div class="col-md-5">
                    <div class="input-group">
                        <input type="hidden" name="mak_id" value="" id="mak_id">
                        <input class="form-control" type="text" name="mak_nama" value="" id="mak_nama" onclick="javascript:popupMak();" onfocus="javascript:popupMak();" onkeyup="javascript:popupMak();" onkeydown="javascript:popupMak();" readonly="">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="button" id="popupmak" title="popup_mak" onclick="javascript:popupMak();">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
         </div>
         <div class="form-group" style="display:none;">
                <label class="col-md-3 control-label">
                </label>
                <div class="col-md-5">
                    <textarea class="form-control" name="mak_nama_ro" rows="3" cols="40" id="mak_nama_ro" style="resize:none;" readonly=""></textarea>
                </div>
         </div>


         <div class="form-group">
                <label class="col-md-3 control-label">
                    RKAT Asal
                </label>
                <div class="col-md-5"> 
                </div>
         </div>          
         <div class="form-group">
                <label class="col-md-3 control-label">
                    Unit Kerja *
                </label>
                <div class="col-md-5"> 
                        <!-- <input type="text" name="unitKerjaId" value="" id="unitKerjaId" />
                        <input type="text" name="unitKerjaNama" value="" id="unitKerjaNama" />
                        <label id="unitKerjaNamaLabel"></label> ** -->
                    <div class="input-group">
                        <input type="hidden" name="unitKerjaId" id="unit_kerja_id" value="">
                        <input class="form-control" type="text" size="60" name="unitKerjaNama" id="unit_kerja_nama" value="" readonly="readonly">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" onclick="showPopup('/ekeuanganpts/index.php?mod=movement_anggaran&amp;sub=PopupUnitKerja&amp;act=view&amp;typ=html&amp;type=asal', 'Unit Kerja', 600, 550);">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
         </div>         
         <div class="form-group">
                <label class="col-md-3 control-label">
                    No. RKAT *
                </label>
                <div class="col-md-5">  
                    <div class="input-group">
                        <input type="hidden" name="kegDetId" value="" id="kegDetId">
                        <input type="hidden" name="kegrefId" value="" id="kegrefId">
                        <input size="60" type="text" name="kegrefNomor" value="" id="kegrefNomor" readonly="" class="form-control"> 
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" onclick="popupAnggaranAwal();" id="popup_anggaran_asal" name="anggaran_asal">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
         </div>          
         <div class="form-group">
                <label class="col-md-3 control-label">
                    Nama Aktivitas **
                </label>
                <div class="col-md-5">  
                        <textarea name="kegrefNama" rows="3" cols="60" readonly="" style="resize:none;" id="kegrefNama" class="form-control"></textarea>
                </div>
         </div> 
         <div class="form-group">
                <label class="col-md-3 control-label"> 
                    Total RKAT Tersedia
                </label>
                <div class="col-md-5">                      
                    <div class="input-group">
                        <input type="hidden" name="total_anggaran_asal" value="" id="total_anggaran_asal">
                        <div class="input-group-addon">Rp.</div>
                        <input type="text" name="total_anggaran_asal_tersedia" value="" id="total_anggaran_asal_tersedia" class="gvFloat form-control" size="40" readonly="readonly" style="text-align: right;">
                    </div>
                </div>
         </div> 
         <div class="form-group">
                <label class="col-md-3 control-label"> 
                    Total RKAT Yang Dipindah
                </label>
                <div class="col-md-5">                      
                    <div class="input-group">
                        <div class="input-group-addon">Rp.</div>
                        <input type="text" name="total_movement_anggaran" value="" class="gvFloat form-control" size="40" style="text-align: right;">
                    </div>
                </div>
         </div> 

            
            <div class="form-group">
                    <label class="col-md-3 control-label">
                        RKAT Tujuan
                    </label>
                    <div class="col-md-5"> 
                    </div>
             </div>          
             <div class="form-group">
                    <label class="col-md-3 control-label">
                        Unit Kerja *
                    </label>
                    <div class="col-md-5"> 
                            <!-- <input type="hidden" name="unitKerjaIdTujuan" value="" id="unitKerjaIdTujuan" />
                            <input type="hidden" name="unitKerjaNamaTujuan" value="" id="unitKerjaNamaTujuan" />
                           <label id="unitKerjaNamaTujuanLabel"></label> ** -->
                        <div class="input-group">
                            <input type="hidden" name="unitKerjaIdTujuan" id="unit_kerja_id_tujuan" value="">
                            <input class="form-control" type="text" size="60" name="unitKerjaNamaTujuan" id="unit_kerja_nama_tujuan" value="" readonly="readonly">                            
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default" onclick="mvPopupUnitKerja('/ekeuanganpts/index.php?mod=movement_anggaran&amp;sub=PopupUnitKerja&amp;act=view&amp;typ=html&amp;type=tujuan');">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
             </div>  
                      
            <div class="form-group">
                    <label class="col-md-3 control-label">
                        No. RKAT *
                    </label>
                    <div class="col-md-5">  
                        <div class="input-group">
                            <input type="hidden" name="kegDetIdTujuan" value="" id="kegDetIdTujuan">
                            <input type="hidden" name="kegrefIdTujuan" value="" id="kegrefIdTujuan">
                            <input type="text" size="60" name="kegrefNomorTujuan" value="" id="kegrefNomorTujuan" readonly="" class="form-control"> 
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default" onclick="popupAnggaranTujuan();" id="popup_anggaran_asal" name="anggaran_asal">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </div> 
            <div class="form-group">
                    <label class="col-md-3 control-label">
                        Nama Aktivitas **
                    </label>
                    <div class="col-md-5">   
                        <textarea name="kegrefNamaTujuan" rows="3" cols="60" id="kegrefNamaTujuan" readonly="" class="form-control" style="resize:none;"></textarea>
                    </div>
             </div> 

             <div class="form-group">
                    <label class="col-md-3 control-label"> 
                        Total RKAT
                    </label>
                    <div class="col-md-5">                      
                        <div class="input-group">
                            <div class="input-group-addon">Rp.</div>
                            <input type="text" name="total_anggaran_tujuan" value="" id="total_anggaran_tujuan" class="gvFloat form-control" size="40" readonly="readonly" style="text-align: right;">
                        </div>
                    </div>
             </div> 

            
            <div class="form-group">
                    <label class="col-md-3 control-label"> 
                    </label>
                    <div class="col-md-5">                      
                        <div class="input-group">
                                <input name="save" type="submit" value="Simpan" class="btn btn-primary">
                                <input name="cancel" type="submit" value="Batal" class="btn btn-danger">
                        </div>
                    </div>
            </div>           
    </form>
</div>
</div>



<div class="panel panel-default panel-petunjuk">
        <div class="panel-heading">
            <span class="panel-title">
               Petunjuk
            </span>
        </div>
        <div class="panel-body">
            <ul>
                <li>
                    Tanda * menunjukkan bahwa field tersebut harus diisi atau dipilih.
                </li>
                <li>
                    Tanda ** menunjukkan terisi bila Kode Output dipilih.
                </li>
            </ul>
        </div>
</div>

    <script>        
        /*
        document.getElementById('KOMP_Place_Holder').addItem = function (detailId, kodeKomponen, namaKomponen, nominal,nominal_hid)
        {
           var id = 'detailId_'+detailId;
           if (document.getElementById(id)) return true;
           var childObj = this.getElementsByTagName('tr');
           nomor = childObj.length;

           var tr = document.createElement('tr');
           tr.setAttribute("id", id);
           if (nomor % 2 == 0) tr.setAttribute('class', 'table-common-even');

           var tdKodeKomponen = document.createElement('td');
           tdKodeKomponen.setAttribute("style", 'padding: 2px; text-align: center');
           tdKodeKomponen.innerHTML = kodeKomponen +"<input type='hidden' name='KOMP[" + detailId + "][kodeKomponen]' value='" + kodeKomponen + "'><input type='hidden' name='KOMP[" + detailId + "][rp_id]' value='" + detailId + "'>";

           var tdNamaKomponen = document.createElement('td');
           tdNamaKomponen.setAttribute("style", 'padding: 2px; text-align: left');
           tdNamaKomponen.innerHTML = namaKomponen + " <input type='hidden' name='KOMP[" + detailId + "][namaKomponen]' value='" + namaKomponen + "'>";
           var tdNominalLabel = document.createElement('td');
           tdNominalLabel.setAttribute("style", 'padding: 2px; text-align: right');
           tdNominalLabel.innerHTML = formatCurrency(nominal_hid);
           
           var tdNominal = document.createElement('td');
           tdNominal.setAttribute("style", 'padding: 2px; text-align: right');
           
           tdNominal.innerHTML = "<input type='text' name='KOMP[" + detailId + "][nominal]' value='" + nominal + "'> <input type='hidden' name='KOMP[" + detailId + "][nominal_hid]' value='" + nominal_hid + "'>";

           tr.appendChild(tdKodeKomponen);
           tr.appendChild(tdNamaKomponen);
           tr.appendChild(tdNominalLabel);
           tr.appendChild(tdNominal);
           this.appendChild(tr);

           var childNode = tdNominal.firstChild;
           do {if (childNode.tagName && childNode.tagName.toUpperCase() == 'INPUT') gValidation20090108['.gvFloat'](childNode);} while (childNode = childNode.nextSibling);

           childObj[0].style.display = 'none';
           return true;
        }

        document.getElementById('KOMP_Place_Holder').deleteItem = function (id)
        {
           this.removeChild(document.getElementById(id));
           var Obj = this.getElementsByTagName('tr');
           if (Obj.length == 1)
           {
              Obj[0].style.display = '';
           }
           else for (var i = 1; i < Obj.length; i++)
              Obj[i].setAttribute('class',(i % 2)?'':'table-common-even');
        }

        document.getElementById('KOMP_Place_Holder').deleteAllItem = function ()
        {
           var Obj = this.getElementsByTagName('tr');
           for (i = Obj.length - 1; i > 0; i--)
              if (Obj[i].id) this.removeChild(Obj[i]);
           Obj[i].style.display = '';
        }
        
        document.getElementById('KOMP_Place_Holder2').addItem = function (detailId, kodeKomponen, namaKomponen, nominal,nominal_hid)
        {
           var id = 'detailId_'+detailId;
           if (document.getElementById(id)) return true;
           var childObj = this.getElementsByTagName('tr');
           nomor = childObj.length;

           var tr = document.createElement('tr');
           tr.setAttribute("id", id);
           if (nomor % 2 == 0) tr.setAttribute('class', 'table-common-even');

           var tdKodeKomponen = document.createElement('td');
           tdKodeKomponen.setAttribute("style", 'padding: 2px; text-align: center');
           tdKodeKomponen.innerHTML = kodeKomponen +"<input type='hidden' name='KOMPTUJUAN[" + detailId + "][kodeKomponen]' value='" + kodeKomponen + "'><input type='hidden' name='KOMPTUJUAN[" + detailId + "][rp_id]' value='" + detailId + "'>";

           var tdNamaKomponen = document.createElement('td');
           tdNamaKomponen.setAttribute("style", 'padding: 2px; text-align: left');
           tdNamaKomponen.innerHTML = namaKomponen + " <input type='hidden' name='KOMPTUJUAN[" + detailId + "][namaKomponen]' value='" + namaKomponen + "'>";
           var tdNominalLabel = document.createElement('td');
           tdNominalLabel.setAttribute("style", 'padding: 2px; text-align: right');
           tdNominalLabel.innerHTML = formatCurrency(nominal_hid);
           
           var tdNominal = document.createElement('td');
           tdNominal.setAttribute("style", 'padding: 2px; text-align: right');
           tdNominal.innerHTML = "<input type='text' name='KOMPTUJUAN[" + detailId + "][nominal]' value='"+nominal+"'><input type='hidden' name='KOMPTUJUAN[" + detailId + "][nominal_hid]' value='"+nominal_hid+"'>";

           tr.appendChild(tdKodeKomponen);
           tr.appendChild(tdNamaKomponen);
           tr.appendChild(tdNominalLabel);
           tr.appendChild(tdNominal);
           this.appendChild(tr);

           var childNode = tdNominal.firstChild;
           do {if (childNode.tagName && childNode.tagName.toUpperCase() == 'INPUT') gValidation20090108['.gvFloat'](childNode);} while (childNode = childNode.nextSibling);

           childObj[0].style.display = 'none';
           return true;
        }

        document.getElementById('KOMP_Place_Holder2').deleteItem = function (id)
        {
           this.removeChild(document.getElementById(id));
           var Obj = this.getElementsByTagName('tr');
           if (Obj.length == 1)
           {
              Obj[0].style.display = '';
           }
           else for (var i = 1; i < Obj.length; i++)
              Obj[i].setAttribute('class',(i % 2)?'':'table-common-even');
        }

        document.getElementById('KOMP_Place_Holder2').deleteAllItem = function ()
        {
           var Obj = this.getElementsByTagName('tr');
           for (i = Obj.length - 1; i > 0; i--)
              if (Obj[i].id) this.removeChild(Obj[i]);
           Obj[i].style.display = '';
        }
        
        function formatCurrency(num) {
            num = num.replace(/\$|\,/g,'.');
            num = num.toString().replace(/\$|\,/g,'');
            if(isNaN(num))
            num = "0";
            sign = (num == (num = Math.abs(num)));
            num = Math.floor(num*100+0.50000000001);
            cents = num%100;
            num = Math.floor(num/100).toString();
            if(cents<10)
            cents = "0" + cents;
            for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3))+'.'+
            num.substring(num.length-(4*i+3));
            return (((sign)?'':'-')+ num + ',' + cents);
        }
    

      
        var dataM = null;
        if(typeof(dataM) != "undefined"){
            for (var i in dataM)  {
                document.getElementById('KOMP_Place_Holder').addItem
                (
                    dataM[i]['rp_id'],
                    dataM[i]['kodeKomponen'],
                    dataM[i]['namaKomponen'],
                    dataM[i]['nominal'],
                    dataM[i]['nominal_hid']
                );
            }
        }
        
      var dataMT = null;
        if(typeof(dataMT) != "undefined"){
            for (var i in dataMT)  {
                document.getElementById('KOMP_Place_Holder2').addItem
                (
                    dataMT[i]['rp_id'],
                    dataMT[i]['kodeKomponen'],
                    dataMT[i]['namaKomponen'],                    
                    dataMT[i]['nominal'],
                    dataMT[i]['nominal_hid']
                );
            }
        }
        */
    </script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>