<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=21&amp;mid=21">Laporan Keuangan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=LapBukubesar&amp;act=view&amp;typ=html">Buku Besar</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Buku Besar
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

   function bukaPopupCOA(xurl) {
      showPopup(xurl,'Chart Of Account',550,550);
   }
</script> 

<div class="panel panel-default">
   <div class="panel-heading">
       <span class="panel-title">
           Pencarian
       </span>
   </div>
   <div class="panel-body">
       <form method="POST" action="/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=LapBukubesar&amp;act=view&amp;typ=html" id="filterbox" name="frmFilterBox" class="xhr_simple_form dest_subcontent-element form-horizontal">
           <div class="row"> 
                     <div class="form-group">
                        <label class="col-md-3 control-label">
                           Chart Of Account
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">  
                              <input type="hidden" name="coa_id" id="coa" value="">
                              <input type="text" name="coa_nama" id="coa_label" readonly="readonly" class="form-control" size="35" value="">
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="bukaPopupCOA('/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=popupCoa&amp;act=view&amp;typ=html');">
                                   <i class="fa fa-search"></i>
                                </button>
                              </div>
                           </div>   
                        </div>
                  </div> 
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
         
               
                  <option value="2028">2028</option>               
               
                  <option value="2027">2027</option>               
               
                  <option value="2026">2026</option>               
               
                  <option value="2025">2025</option>               
               
                  <option value="2024">2024</option>               
               
                  <option value="2023">2023</option>               
               
                  <option value="2022" selected="">2022</option>               
               
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
      <select name="tanggal_akhir_mon" id="tanggal_akhir_mon" onchange="tanggal_akhir_date_change()" class="form-control-normal">         
         
               
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
      

<ul class="pagination" style="margin: 0px">
      
      <li class="disabled">
        <a href="#" aria-label="First">
          &lt;&lt;
        </a>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Previous">
          &lt;
        </a>
      </li>
      
    
      
      <li>
        <span>
          <b>1</b>-<b>20</b> dari <b>58</b> &nbsp;
        </span>
      </li>
      
    
      
      <li>
        <a href="/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=LapBukubesar&amp;act=view&amp;typ=html&amp;search=1&amp;coa_id=&amp;coa_nama=&amp;start_date=2022-01-01&amp;end_date=2023-01-31&amp;page=2&amp;keyword=&amp;combo=" aria-label="Next" class="xhr dest_subcontent-element">
          &gt;
        </a>
      </li>
      
    
      
      <li>
        <a href="/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=LapBukubesar&amp;act=view&amp;typ=html&amp;search=1&amp;coa_id=&amp;coa_nama=&amp;start_date=2022-01-01&amp;end_date=2023-01-31&amp;page=3&amp;keyword=&amp;combo=" aria-label="Last" class="xhr dest_subcontent-element">
          &gt;&gt;
        </a>
      </li>
      
    </ul>
    
    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
         </div>
         <div class="btn-group pull-right">  
            <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=ExcelLapBukubesar&amp;act=view&amp;typ=xlsx&amp;rekening=&amp;tgl_awal=2022-01-01&amp;tgl_akhir=2023-01-31&amp;cetak=yes" target="_blank" title="Cetak">
               <i class="fa fa-file-excel-o"></i> Export Xls
            </a>
            <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_bukubesar&amp;sub=CetakLapBukubesar&amp;act=view&amp;typ=html&amp;rekening=&amp;tgl_awal=2022-01-01&amp;tgl_akhir=2023-01-31&amp;cetak=yes')" title="Cetak">
               <i class="ion-printer"></i> 
               Cetak
               </a>
         </div>
      </div>
 
      <div class="table-responsive">
         <table class="table table-bordered table-stipe table-hover"> 
               <thead>
                  <tr>
                     <th width="120">
                       Tanggal
                     </th>
                     <th>
                       Uraian
                     </th> 
                     <th width="250">
                        Referensi
                     </th>
                      <th width="120">
                        Debet (Rp)
                     </th>
                     <th width="120">
                        Kredit(Rp.)
                     </th>
                      <th width="120">
                        Saldo (Rp)
                     </th>
                  </tr>
               </thead>
               <tbody>
                  
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110101 - Petty Cash</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        1 Januari 2022
                                        </td>
                                        <td>Pengisian petty cash untuk bulan januari</td>
                                        <td>PC1/2006.1/01/2022</td>
                                        <td style="text-align:right;">10.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">10.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        31 Januari 2022
                                        </td>
                                        <td>Jurnal transfer perrty cash untuk februari</td>
                                        <td>JT1/000001/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">15.000.000,00</td>
                                        <td style="text-align:right;">10.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        31 Januari 2022
                                        </td>
                                        <td>Jurnal transfer perrty cash untuk februari</td>
                                        <td>JT1/000001/01/2022</td>
                                        <td style="text-align:right;">15.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">10.000.000,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>10.000.000,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110201 - Bank BNI</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        1 Januari 2022
                                        </td>
                                        <td>Pengisian petty cash untuk bulan januari</td>
                                        <td>PC1/2006.1/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">10.000.000,00</td>
                                        <td style="text-align:right;">(10.000.000,00)</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        15 Januari 2022
                                        </td>
                                        <td>Transfer antar bank</td>
                                        <td>JT2/000001/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">7.000.000,00</td>
                                        <td style="text-align:right;">(10.000.000,00)</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        15 Januari 2022
                                        </td>
                                        <td>Transfer antar bank</td>
                                        <td>JT2/000001/01/2022</td>
                                        <td style="text-align:right;">7.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">(10.000.000,00)</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>(10.000.000,00)</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110202 - Bank Mandiri</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        10 Januari 2022
                                        </td>
                                        <td></td>
                                        <td>BKM/00001/000001.5/01.2022</td>
                                        <td style="text-align:right;">40.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">40.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        15 Januari 2022
                                        </td>
                                        <td>Transfer antar bank</td>
                                        <td>JT2/000001/01/2022</td>
                                        <td style="text-align:right;">7.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">40.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        15 Januari 2022
                                        </td>
                                        <td>Transfer antar bank</td>
                                        <td>JT2/000001/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">7.000.000,00</td>
                                        <td style="text-align:right;">40.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        26 Januari 2022
                                        </td>
                                        <td>Pemakaian petty cash januari 2022 dan pengisian kembali.</td>
                                        <td>PC2/1000/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">3.000.000,00</td>
                                        <td style="text-align:right;">37.000.000,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        9 Maret 2022
                                        </td>
                                        <td>Kunjungan studi banding</td>
                                        <td>Expense/2022/03/1</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">4.000.000,00</td>
                                        <td style="text-align:right;">33.000.000,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>33.000.000,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110203 - Bank BTN</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="display:none">
                                        <td align="center">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>0,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110204 - Bank BRI</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="display:none">
                                        <td align="center">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>0,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110205 - Bank BSI</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="display:none">
                                        <td align="center">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>0,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110206 - Bank Panin</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        31 Januari 2022
                                        </td>
                                        <td>Jurnal transfer perrty cash untuk februari</td>
                                        <td>JT1/000001/01/2022</td>
                                        <td style="text-align:right;">15.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        31 Januari 2022
                                        </td>
                                        <td>Jurnal transfer perrty cash untuk februari</td>
                                        <td>JT1/000001/01/2022</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">15.000.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        8 Februari 2022
                                        </td>
                                        <td>Jurnal umum</td>
                                        <td>JU/2022/02/1</td>
                                        <td style="text-align:right;">1.234.000,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">1.234.000,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>1.234.000,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1110207 - Bank BPD</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          1 Januari 2022
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="">
                                        <td align="center">
                                        8 Februari 2022
                                        </td>
                                        <td>Jurnal umum</td>
                                        <td>JU/2022/02/1</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">1.234.000,00</td>
                                        <td style="text-align:right;">(1.234.000,00)</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>(1.234.000,00)</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1120000 - Perlengkapan</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="display:none">
                                        <td align="center">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>0,00</strong></td>
                                    </tr>
                                    
                                
                        
                            
                                      <tr class="">
                                        <td colspan="6">
                                            <strong>1130000 - Piutang</strong>
                                        </td>
                                    </tr>  
                                    
                                       <tr class="">
                                          <td align="center"> 
                                          
                                          </td>
                                          <td>Saldo awal</td>           
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align:right;">0,00</td>
                                       </tr>
                                    
                                
                        
                            
                                    <tr class="" style="display:none">
                                        <td align="center">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                        <td style="text-align:right;">0,00</td>
                                    </tr>
                                    
                                      <tr class="">
                                        <td align="center">
                                        &nbsp;
                                        </td>
                                        <td><strong>SALDO AKHIR</strong></td>           
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td style="text-align:right;"><strong>0,00</strong></td>
                                    </tr>
                                    
                                
                                       
                           
               </tbody>
            </table>
      </div>
   </div>
</div>  
 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>