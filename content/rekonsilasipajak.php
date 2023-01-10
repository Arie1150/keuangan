<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=511&amp;mid=511">Pajak</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=laporan_pajak&amp;sub=laporanPajak&amp;act=view&amp;typ=html">Rekonsiliasi Pajak</a></li>
    
</ol>

<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=511&amp;mid=511">Pajak</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=laporan_pajak&amp;sub=laporanPajak&amp;act=view&amp;typ=html">Rekonsiliasi Pajak</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Rekonsiliasi Pajak
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<div class="panel panel-default">
   <div class="panel-heading">
        <span class="panel-title">
           Pencarian
        </span>
   </div>
   <div class="panel-body"> 
 
   <form method="POST" action="/ekeuanganpts/index.php?mod=laporan_pajak&amp;sub=laporanPajak&amp;act=view&amp;typ=html" id="frmfilter" name="frmfilter" class="xhr_simple_form dest_subcontent-element form-horizontal">
      <div class="row">
         <div class="form-group">
            <label class="col-md-3 control-label">
               Periode
            </label>
            <div class="col-md-7">
               
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function periode_show_day(n) {
      
  m = parseInt(document.getElementById('periode_mon').options[document.getElementById('periode_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('periode_year').value;
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
 
  document.getElementById("periode_day").innerHTML=s;
}

function periode_date_change() {
  d = document.getElementById('periode_day').options[document.getElementById('periode_day').selectedIndex].value;
  periode_show_day(d);
}
</script>
   <div>
      <select name="periode_day" id="periode_day" style="display:none" class="form-control-normal">
            
      </select>
      <select name="periode_mon" id="periode_mon" onchange="periode_date_change()" class="form-control-normal">         
         
               
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
      <select name="periode_year" id="periode_year" onchange="periode_date_change()" class="form-control-normal">
         
               
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
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label">
               Unit Kerja
            </label>
            <div class="col-md-4">
   
               
               <div class="input-group">
                  <input type="hidden" name="unit_id" id="unit_id" value="1">
                  <input type="text" name="txt_unit" id="txt_unit" value="UNIVERSITAS" size="35" readonly="" class="form-control">
                  <div class="input-group-btn">
                     <button class="btn btn-default" type="button" onclick="showPopup('/ekeuanganpts/index.php?mod=laporan_pajak&amp;sub=PopupUnitKerja&amp;act=view&amp;typ=html', 'Unit Kerja', 650, 500);">
                        <i class="fa fa-search"></i>
                     </button>
                  </div>
               </div>
               
   
   
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3">
            </label>
   
            <div class="col-md-4">
               <input type="submit" name="btnSearch" value="Tampilkan »" class="btn btn-primary">
               <input type="reset" name="btnReset" value="Reset" class="btn btn-warning">
            </div>
         </div>
      </div>
   </form>
   </div>
</div> 
 
<div class="panel panel-default">
   <div class="panel-body">
 <div class="btn-toolbar mb-15">
   <div class="btn-group">
      
   <!-- FormHelper Content BEGIN -->
      

    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
   </div>
   <div class="btn-group pull-right">   
        <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=laporan_pajak&amp;sub=ExportExcel&amp;act=view&amp;typ=xlsx&amp;periode=2023-01-01&amp;unit_id=1&amp;unit=UNIVERSITAS&amp;" target="_blank" title="Cetak">
          <i class="fa fa-file-excel-o"></i> Export Xls
        </a> 
   </div>
 </div>
 
 <div class="table-responsive">
    <table class="table table-bordered table-stipe table-hover">
      <thead>
         <tr>
            <th rowspan="2" style="width: 25px;">
               No
            </th>
            <th rowspan="2" style="width: 100px;">
               Tanggal
            </th>
            <th rowspan="2" style="min-width: 100px;">
               Nomor Bukti
            </th>
            <th rowspan="2" style="min-width: 100px;">
               Keterangan
            </th>
            <th colspan="2">
               Unit Kerja
            </th>
             <th colspan="2">
               Chart Of Account
            </th>
            <th rowspan="2" style="display:none">
               Nominal Bruto (Rp)
            </th>
            
                  <th colspan="4">
                     Dasar Pengenaan Pajak
                  </th>
               
         </tr>
         <tr>
            <th style="width: 65px;">
               Kode
            </th>
            <th style="min-width: 150px;">
               Nama
            </th>
            <th style="width: 65px;">
               Kode
            </th>
            <th style="min-width: 150px;">
               Nama
            </th>
            
                  
                     <th style="width: 95px;">
                        PPN
                     </th>
                  
                     <th style="width: 95px;">
                        PPh-21
                     </th>
                  
                     <th style="width: 95px;">
                        PPh Pasal 4 (2)
                     </th>
                  
                     <th style="width: 95px;">
                        PPh-23
                     </th>
                  
               
         </tr>
      </thead>
      <tbody>
         
               <tr>
                  <td colspan="10">
                     <center>
                        <em>
                           --Data Tidak Ditemukan--
                        </em>
                     </center>
                  </td>
               </tr>
            
      </tbody>
   </table>
</div>
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
            Gunakan Form Pencarian untuk menampilkan data pajak
         </li>
         <li>
            <button class="btn btn-xs btn-default">
               <i class="fa fa-file-excel-o"></i>
            </button> Di gunakan untuk export laporan berupa data Excel
         </li>
      </ul>
      
            <br>
            <h4 style="display: none;">
               Keterangan Pajak
            </h4>
            <ul style="display: none;">
               
                  <li style="font-weight: bold;">
                     <label style="width: 95px; display: block; float: left;">
                        0001
                     </label>
                     PPN
                  </li>
               
                  <li style="font-weight: bold;">
                     <label style="width: 95px; display: block; float: left;">
                        0002
                     </label>
                     PPh-21
                  </li>
               
                  <li style="font-weight: bold;">
                     <label style="width: 95px; display: block; float: left;">
                        0003
                     </label>
                     PPh Pasal 4 (2)
                  </li>
               
                  <li style="font-weight: bold;">
                     <label style="width: 95px; display: block; float: left;">
                        0004
                     </label>
                     PPh-23
                  </li>
               
            </ul>
         
   </div>
</div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>