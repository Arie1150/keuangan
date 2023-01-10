<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=76&amp;mid=76">Entri Jurnal</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=approval_jurnal&amp;sub=approvalJurnal&amp;act=view&amp;typ=html">Approval Jurnal</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Approval Jurnal
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<style>
.toolbar input.approvalButton {	
    background: url("images/icons/16/tick_circle.png") no-repeat  5px 2px;	
	color: #A0410D;
	background-color: #ffffff;
	border: 1px #ece9d6  solid;
	font-size: 8pt;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	height: 22px;
	padding: 2px 7px 4px 23px;
	margin: 1px 1px 0px 0px;
	display: block;
	float: left;
	overflow: hidden;
}

.toolbar input.approvalButton:hover {	
    background: url("images/icons/16/tick_circle.png") no-repeat  5px 2px,
				url("css/sia-mocca/images/button_bg.gif") left bottom repeat;		
	border: #FCE171 1px solid;
}

.toolbar input.approvalButton {
	padding: 2px 5px 0px 23px;
}
.toolbar input.unApprovalButton {	
    background: url("images/icons/16/icon-warning-16x16.gif") no-repeat  5px 2px;	
	color: #A0410D;
	background-color: #ffffff;
	border: 1px #ece9d6  solid;
	font-size: 8pt;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	height: 22px;
	padding: 2px 7px 4px 23px;
	margin: 1px 1px 0px 0px;
	display: block;
	float: left;
	overflow: hidden;
}

.toolbar input.unApprovalButton:hover {	
    background: url("images/icons/16/icon-warning-16x16.gif") no-repeat  5px 2px,
				url("css/sia-mocca/images/button_bg.gif") left bottom repeat;		
	border: #FCE171 1px solid;
}

.toolbar input.unApprovalButton {
	padding: 2px 5px 0px 23px;
}
</style>
<script language="javascript" type="text/javascript">
    function disableBentukTransaksi(value, idName) {
        if (value == 'Y') {
            document.getElementById(idName).disabled = false;
        } else {
            document.getElementById(idName).disabled = true;
            document.getElementById(idName).value = '';
        }
    }
</script>


<div class="panel panel-default">
      <div class="panel-heading">
            <span class="panel-title">
                Pencarian
            </span>
      </div>
      <div class="panel-body">
            <form method="POST" action="/ekeuanganpts/index.php?mod=approval_jurnal&amp;sub=ApprovalJurnal&amp;act=view&amp;typ=html&amp;start_date=2023-01-01&amp;end_date=2023-01-31&amp;status=T&amp;tipe=&amp;kode=&amp;page=1" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Tipe Transaksi
                                </label>
                                <div class="col-md-8">
                                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tipe_transaksi" id="cmb_tipe_transaksi" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="32">Administrasi Mahasiswa</option>
	
		<option value="21">Jurnal Pengakuan</option>
	
		<option value="11">Jurnal Penyesuaian</option>
	
		<option value="10">Pembayaran Mahasiswa</option>
	
		<option value="13">Pembayaran Sumbangan Mahasiswa</option>
	
		<option value="4">Pencairan Anggaran</option>
	
		<option value="1">Penerimaan Anggaran</option>
	
		<option value="2">Pengeluaran Anggaran</option>
	
		<option value="5">Pengembalian Sisa Anggaran</option>
	
		<option value="31">Piutang Mahasiswa</option>
	
		<option value="6">Realisasi Anggaran</option>
	
		<option value="7">Rencana Penerimaan Anggaran</option>
	
		<option value="8">Rencana Pengeluaran Anggaran</option>
	
		<option value="20">Transaksi Account Payable</option>
	
		<option value="24">Transaksi ARL</option>
	
		<option value="30">Transaksi ARL PD</option>
	
		<option value="22">Transaksi Cash Advance</option>
	
		<option value="29">Transaksi Cash Advance PD</option>
	
		<option value="28">Transaksi Jurnal PD</option>
	
		<option value="27">Transaksi Jurnal UMK</option>
	
		<option value="26">Transaksi Penyusutan Aset</option>
	
		<option value="34">Transaksi Petty Cash</option>
	
		<option value="16">Transaksi POK</option>
	
		<option value="33">Transaksi Realisasi Keuangan</option>
	
		<option value="18">Transaksi SP2D</option>
	
		<option value="19">Transaksi SPJ</option>
	
		<option value="17">Transaksi SPTB</option>
	
		<option value="3">Umum</option>
	
		<option value="12">Validasi Pembayaran Mahasiswa</option>
	
		<option value="14">Verifikasi Pembayaran Sumbangan Mahasiswa</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                </div>
                            </div>                
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Status
                                </label>
                                <div class="col-md-8">                                
                                     
                                    <label class="custom-control custom-radio radio-inline">
                                        <input type="radio" value="T" name="status" class="custom-control-input" checked=""> 
                                        <span class="custom-control-indicator"></span>Belum Disetujui
                                    </label>
                                     
                                    <label class="custom-control custom-radio radio-inline">
                                        <input type="radio" value="Y" name="status" class="custom-control-input"> 
                                        <span class="custom-control-indicator"></span>Sudah Disetujui
                                    </label>
                                    
                                </div>
                            </div> 
                            <div class="form-group">
                                    <label class="col-md-3 control-label">
                                        Referensi
                                    </label>
                                    <div class="col-md-8">                              
                                            <input type="text" name="kode" size="35" value="" class="form-control">
                                    </div>
                            </div>  
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Interval Pencatatan
                                </label>
                                <div class="col-md-8">                              
                                        
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function start_date_show_day(n) {
      
  m = parseInt(document.getElementById('start_date_mon').options[document.getElementById('start_date_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('start_date_year').value;
    a = new Date(y,m-1,d);
    if(a.getDate()==1) { d = 28; }
  }
 
  if(n>d) { n = d; }
  s = '';
  for(i=0;i<=d;i++) { 
     
     
     iDay = i;
     iDayVal = iDay<10?'0'+iDay:iDay;
     iDay = iDayVal=='00'?'':iDayVal;
      
     s+='<option '+(i==n?'selected':'')+' value='+iDayVal+'>'+iDay+'</option>'; 
   }
 
  document.getElementById("start_date_day").innerHTML=s;
}

function start_date_date_change() {
  d = document.getElementById('start_date_day').options[document.getElementById('start_date_day').selectedIndex].value;
  start_date_show_day(d);
}
</script>
   <div>
      <select name="start_date_day" id="start_date_day" style="display:" class="form-control-normal">
                        
                                                
                  <option value="01" selected="">01</option>               
                                                
                  <option value="02">02</option>               
                                                
                  <option value="03">03</option>               
                                                
                  <option value="04">04</option>               
                                                
                  <option value="05">05</option>               
                                                
                  <option value="06">06</option>               
                                                
                  <option value="07">07</option>               
                                                
                  <option value="08">08</option>               
                                                
                  <option value="09">09</option>               
                                                
                  <option value="10">10</option>               
                                                
                  <option value="11">11</option>               
                                                
                  <option value="12">12</option>               
                                                
                  <option value="13">13</option>               
                                                
                  <option value="14">14</option>               
                                                
                  <option value="15">15</option>               
                                                
                  <option value="16">16</option>               
                                                
                  <option value="17">17</option>               
                                                
                  <option value="18">18</option>               
                                                
                  <option value="19">19</option>               
                                                
                  <option value="20">20</option>               
                                                
                  <option value="21">21</option>               
                                                
                  <option value="22">22</option>               
                                                
                  <option value="23">23</option>               
                                                
                  <option value="24">24</option>               
                                                
                  <option value="25">25</option>               
                                                
                  <option value="26">26</option>               
                                                
                  <option value="27">27</option>               
                                                
                  <option value="28">28</option>               
                                                
                  <option value="29">29</option>               
                                                
                  <option value="30">30</option>               
                                                
                  <option value="31">31</option>               
               
               
      </select>
      <select name="start_date_mon" id="start_date_mon" onchange="start_date_date_change()" class="form-control-normal">         
         
               
                  <option value="01" selected="">Januari</option>               
               
                  <option value="02">Februari</option>               
               
                  <option value="03">Maret</option>               
               
                  <option value="04">April</option>               
               
                  <option value="05">Mei</option>               
               
                  <option value="06">Juni</option>               
               
                  <option value="07">Juli</option>               
               
                  <option value="08">Agustus</option>               
               
                  <option value="09">September</option>               
               
                  <option value="10">Oktober</option>               
               
                  <option value="11">November</option>               
               
                  <option value="12">Desember</option>               
               
               
      </select>
      <select name="start_date_year" id="start_date_year" onchange="start_date_date_change()" class="form-control-normal">
         
               
                  <option value="2028">2028</option>               
               
                  <option value="2027">2027</option>               
               
                  <option value="2026">2026</option>               
               
                  <option value="2025">2025</option>               
               
                  <option value="2024">2024</option>               
               
                  <option value="2023" selected="">2023</option>               
               
                  <option value="2022">2022</option>               
               
                  <option value="2021">2021</option>               
               
                  <option value="2020">2020</option>               
               
                  <option value="2019">2019</option>               
               
                  <option value="2018">2018</option>               
               
                  <option value="2017">2017</option>               
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                        <label class="form-control-clean">
                                            s/d
                                        </label>                                
                                        
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function end_date_show_day(n) {
      
  m = parseInt(document.getElementById('end_date_mon').options[document.getElementById('end_date_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('end_date_year').value;
    a = new Date(y,m-1,d);
    if(a.getDate()==1) { d = 28; }
  }
 
  if(n>d) { n = d; }
  s = '';
  for(i=0;i<=d;i++) { 
     
     
     iDay = i;
     iDayVal = iDay<10?'0'+iDay:iDay;
     iDay = iDayVal=='00'?'':iDayVal;
      
     s+='<option '+(i==n?'selected':'')+' value='+iDayVal+'>'+iDay+'</option>'; 
   }
 
  document.getElementById("end_date_day").innerHTML=s;
}

function end_date_date_change() {
  d = document.getElementById('end_date_day').options[document.getElementById('end_date_day').selectedIndex].value;
  end_date_show_day(d);
}
</script>
   <div>
      <select name="end_date_day" id="end_date_day" style="display:" class="form-control-normal">
                        
                                                
                  <option value="01">01</option>               
                                                
                  <option value="02">02</option>               
                                                
                  <option value="03">03</option>               
                                                
                  <option value="04">04</option>               
                                                
                  <option value="05">05</option>               
                                                
                  <option value="06">06</option>               
                                                
                  <option value="07">07</option>               
                                                
                  <option value="08">08</option>               
                                                
                  <option value="09">09</option>               
                                                
                  <option value="10">10</option>               
                                                
                  <option value="11">11</option>               
                                                
                  <option value="12">12</option>               
                                                
                  <option value="13">13</option>               
                                                
                  <option value="14">14</option>               
                                                
                  <option value="15">15</option>               
                                                
                  <option value="16">16</option>               
                                                
                  <option value="17">17</option>               
                                                
                  <option value="18">18</option>               
                                                
                  <option value="19">19</option>               
                                                
                  <option value="20">20</option>               
                                                
                  <option value="21">21</option>               
                                                
                  <option value="22">22</option>               
                                                
                  <option value="23">23</option>               
                                                
                  <option value="24">24</option>               
                                                
                  <option value="25">25</option>               
                                                
                  <option value="26">26</option>               
                                                
                  <option value="27">27</option>               
                                                
                  <option value="28">28</option>               
                                                
                  <option value="29">29</option>               
                                                
                  <option value="30">30</option>               
                                                
                  <option value="31" selected="">31</option>               
               
               
      </select>
      <select name="end_date_mon" id="end_date_mon" onchange="end_date_date_change()" class="form-control-normal">         
         
               
                  <option value="01" selected="">Januari</option>               
               
                  <option value="02">Februari</option>               
               
                  <option value="03">Maret</option>               
               
                  <option value="04">April</option>               
               
                  <option value="05">Mei</option>               
               
                  <option value="06">Juni</option>               
               
                  <option value="07">Juli</option>               
               
                  <option value="08">Agustus</option>               
               
                  <option value="09">September</option>               
               
                  <option value="10">Oktober</option>               
               
                  <option value="11">November</option>               
               
                  <option value="12">Desember</option>               
               
               
      </select>
      <select name="end_date_year" id="end_date_year" onchange="end_date_date_change()" class="form-control-normal">
         
               
                  <option value="2028">2028</option>               
               
                  <option value="2027">2027</option>               
               
                  <option value="2026">2026</option>               
               
                  <option value="2025">2025</option>               
               
                  <option value="2024">2024</option>               
               
                  <option value="2023" selected="">2023</option>               
               
                  <option value="2022">2022</option>               
               
                  <option value="2021">2021</option>               
               
                  <option value="2020">2020</option>               
               
                  <option value="2019">2019</option>               
               
                  <option value="2018">2018</option>               
               
                  <option value="2017">2017</option>               
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-3">
                                    </label>
                                    <div class="col-md-8">
                                       <input type="submit" name="btnSearch" value=" Filter »" class="btn btn-primary">                   
                                       <input type="reset" name="btnTampilkan" value=" Tampilkan Semua »" class="btn btn-warning">                   
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
      </div>
</div>



<div class="panel panel-default">
        <div class="panel-body">
     
     
     
     <form method="POST" action="/ekeuanganpts/index.php?mod=approval_jurnal&amp;sub=AddApprovalJurnal&amp;act=do&amp;typ=json&amp;start_date=2023-01-01&amp;end_date=2023-01-31&amp;status=T&amp;tipe=&amp;kode=&amp;page=1" class="xhr_form dest_subcontent-element" id="form_list">
     <div class="btn-toolbar mb-15">
        <div class="btn-group">
           
   <!-- FormHelper Content BEGIN -->
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
        </div>
        <div class="btn-group pull-right">
            
            <button type="submit" name="btnApprove" class="btn btn-success btn-flat">
                <i class="fa fa-check"></i> Approve
            </button>
            
        </div>
     </div>
     
     <div class="table-responsive">
     <table class="table table-bordered table-stipe table-hover">
        <thead>
            <tr>
                <th width="5" rowspan="2">
                    No
                    <input type="hidden" name="approve_act" value="">
                </th>
                <th width="5" rowspan="2">	                   					
                    <label class="custom-control custom-checkbox custom-control-blank">
                        <input type="checkbox" class="CheckBoxFW_parent custom-control-input">
                        <span class="custom-control-indicator"></span>
                    </label>
                </th>
                <th rowspan="2">
                    Referensi
                </th>
                <th rowspan="2">
                    Tanggal Transaksi
                </th>
              
                <th rowspan="2" style="display:none;">
                    Is Kas
                </th>
                <th rowspan="2" style="display:none;">
                    Bentuk Transaksi
                </th>
                <th rowspan="2" style="min-width: 120px;">
                    Laba Rugi *
                </th>
                  <th rowspan="2">
                    No. Ref
                </th>
                  <th rowspan="2">
                    No. SP3
                </th>
                <th rowspan="2">
                    Keterangan
                </th>
                <th>
                    Kode Akun
                </th>
                <th rowspan="2">
                    Nama Rekening.
                </th>
                <th rowspan="2">
                    Debet (Rp)
                </th>
                <th rowspan="2">
                    Kredit(Rp.)
                </th>
                <th rowspan="2">
                   Status
                </th>
                <th style="width: 30px;" rowspan="2">
                    Posting
                </th>
                <th rowspan="2">
                    Petugas
                </th>
            </tr>
            <tr>
                <th>
                    Atribut
                </th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td colspan="14" align="center">
                    <em>--Data Tidak Ditemukan--</em>
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
            <span class="panel-title">
               Petunjuk
            </span>
        </div>
        <div class="panel-body">
        <ul>
            <li>
                <img src="images/icons/16/tick_circle.png" alt="approve" style="margin-bottom: -3px;"> Jurnal sudah di setujui
            </li>
            <li>
                <img src="images/icons/16/icon-warning-16x16.gif" alt="approve" style="margin-bottom: -3px;"> Jurnal belum di setujui
            </li>
            <li>
                <img src="images/icons/16/green.gif" alt="posting" style="margin-bottom: -3px;"> Semua Jurnal sudah diposting
            </li>
            <li>
                <img src="images/icons/16/yellow.gif" alt="posting" style="margin-bottom: -3px;"> Jurnal belum diposting
            </li>
        </ul>
    </div>
</div>
    
<script type="text/javascript">
    CheckBoxFW_initiate = function (Obj)
    {
        if (!Obj || Obj.className.indexOf('CheckBoxFW_parent') < 0 || !Obj.form)
            return;

        var CBList = new Array;
        var CheckedAll = true;
        var FormObj = Obj.form;

        for (var i = 0; i < FormObj.length; i++)
            if (FormObj[i] == Obj)
                break;
        if (i == FormObj.length)
            return;

        for (i += 1; i < FormObj.length; i++)
        {
            var CBObj = FormObj[i];
            if (CBObj.type.toUpperCase() != 'CHECKBOX')
                continue;
            if (CBObj.className.indexOf('CheckBoxFW_child') >= 0)
            {
                CBObj.onchange = function () {
                    Obj.checkChild();
                }
                CBList[CBList.length] = CBObj;
                if (!CBObj.checked)
                    CheckedAll = false;
            }
            if (CBObj.className.indexOf('CheckBoxFW_parent') >= 0)
                break;
        }

        if (CBList.length > 0)
        {
            Obj.onchange = function ()
            {
                for (var i = 0; i < CBList.length; i++) {
                    if (CBList[i].getAttribute('disabled') == null) {
                        CBList[i].checked = this.checked;
                    }
                }
            }

            Obj.checkChild = function ()
            {
                var CheckedAll = true;
                for (var i = 0; i < CBList.length; i++)
                    if (!CBList[i].checked)
                    {
                        CheckedAll = false;
                        break;
                    }
                this.checked = CheckedAll;
            }

            Obj.checked = CheckedAll;
        }
    }
    var formObj = document.getElementById('form_list');
    if (typeof (formObj) != 'undefined' && formObj != null) {
        for (var i = 0; i < formObj.length; i++) {
            CheckBoxFW_initiate(formObj[i]);
        }
    }
    
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>