<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=21&amp;mid=21">Laporan Keuangan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_saldomaster&amp;sub=LapSaldomaster&amp;act=view&amp;typ=html">Saldo Master</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Saldo Master
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   var xpopup;
   function bukaPopupCetak(xurl) {
      xpopup = window.open(xurl,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
      xpopup.focus();
   }
</script>
<div class="panel panel-default">
   <div class="panel-heading">
       <span class="panel-title">
           Pencarian
       </span>
   </div>
   <div class="panel-body">
       <form method="POST" action="/ekeuanganpts/index.php?mod=lap_saldomaster&amp;sub=LapSaldomaster&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
           <div class="row">  
                   <div class="form-group">
                       <label class="col-md-3 control-label">
                        Interval Waktu
                       </label>
                       <div class="col-md-5">
                           
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function tanggal_awal_show_day(n) {
      
  m = parseInt(document.getElementById('tanggal_awal_mon').options[document.getElementById('tanggal_awal_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('tanggal_awal_year').value;
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
 
  document.getElementById("tanggal_awal_day").innerHTML=s;
}

function tanggal_awal_date_change() {
  d = document.getElementById('tanggal_awal_day').options[document.getElementById('tanggal_awal_day').selectedIndex].value;
  tanggal_awal_show_day(d);
}
</script>
   <div>
      <select name="tanggal_awal_day" id="tanggal_awal_day" style="display:" class="form-control-normal">
                        
                                                
                  <option value="00"></option>               
                                                
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
      <select name="tanggal_awal_mon" id="tanggal_awal_mon" onchange="tanggal_awal_date_change()" class="form-control-normal">         
         
               
                  <option value="00"></option>               
               
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
      <select name="tanggal_awal_year" id="tanggal_awal_year" onchange="tanggal_awal_date_change()" class="form-control-normal">
         
               
                  <option value="0000"></option>               
               
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
   function tanggal_akhir_show_day(n) {
      
  m = parseInt(document.getElementById('tanggal_akhir_mon').options[document.getElementById('tanggal_akhir_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('tanggal_akhir_year').value;
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
 
  document.getElementById("tanggal_akhir_day").innerHTML=s;
}

function tanggal_akhir_date_change() {
  d = document.getElementById('tanggal_akhir_day').options[document.getElementById('tanggal_akhir_day').selectedIndex].value;
  tanggal_akhir_show_day(d);
}
</script>
   <div>
      <select name="tanggal_akhir_day" id="tanggal_akhir_day" style="display:" class="form-control-normal">
                        
                                                
                  <option value="00"></option>               
                                                
                  <option value="01">01</option>               
                                                
                  <option value="02">02</option>               
                                                
                  <option value="03">03</option>               
                                                
                  <option value="04">04</option>               
                                                
                  <option value="05">05</option>               
                                                
                  <option value="06">06</option>               
                                                
                  <option value="07">07</option>               
                                                
                  <option value="08">08</option>               
                                                
                  <option value="09">09</option>               
                                                
                  <option value="10" selected="">10</option>               
                                                
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
      <select name="tanggal_akhir_mon" id="tanggal_akhir_mon" onchange="tanggal_akhir_date_change()" class="form-control-normal">         
         
               
                  <option value="00"></option>               
               
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
      <select name="tanggal_akhir_year" id="tanggal_akhir_year" onchange="tanggal_akhir_date_change()" class="form-control-normal">
         
               
                  <option value="0000"></option>               
               
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

                       <div class="col-md-5">
                           <input type="submit" name="btncari" value="Tampilkan »" class="btn btn-primary">
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
            <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_saldomaster&amp;sub=ExcelLapSaldomaster&amp;act=view&amp;typ=xlsx&amp;tgl_awal=2023-01-01&amp;tgl_akhir=2023-01-10&amp;cetak=yes" target="_blank" title="Cetak">
               <i class="fa fa-file-excel-o"></i> Export Xls
            </a>
            <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_saldomaster&amp;sub=CetakLapSaldomaster&amp;act=view&amp;typ=html&amp;tgl_awal=2023-01-01&amp;tgl_akhir=2023-01-10&amp;cetak=yes')" title="Cetak">
               <i class="ion-printer"></i> 
               Cetak
               </a>
         </div>
      </div>
 
      <div class="table-responsive">
         <table class="table table-bordered table-stipe table-hover">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>No Rekening</th>
                     <th>Nama Rekening</th>
                     <th>Saldo Awal (Rp.)</th>
                     <th>Mutasi Debet (Rp.)</th>
                     <th>Mutasi Kredit (Rp.)</th>
                     <th>Saldo Akhir (Rp.)</th>
                  </tr>
               </thead>
               <tbody>
                  
                     <tr><td colspan="7" align="center"><em>--Data Tidak Ditemukan--</em></td></tr>
                     
               </tbody>
         </table>
      </div>
   </div>
</div>  
  


   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>