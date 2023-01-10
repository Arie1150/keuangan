<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=46&amp;mid=46">Transaksi Realisasi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=inputTransaksiRealisasiPenerimaan&amp;act=view&amp;typ=html">Realisasi Penerimaan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Realisasi Penerimaan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
   function bukaPopupMAP(xurl) {
      showPopup(xurl,'MAP',600, 500);
   }
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
      <form method="POST" action="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=HTRealisasiPenerimaan&amp;act=view&amp;typ=html" class="dataquest xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">                
               <div class="form-group">
                  <label class="col-md-4 control-label">
                     Periode
                  </label>
                  <div class="col-md-8">
                        
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function mulai_show_day(n) {
      
  m = parseInt(document.getElementById('mulai_mon').options[document.getElementById('mulai_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('mulai_year').value;
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
 
  document.getElementById("mulai_day").innerHTML=s;
}

function mulai_date_change() {
  d = document.getElementById('mulai_day').options[document.getElementById('mulai_day').selectedIndex].value;
  mulai_show_day(d);
}
</script>
   <div>
      <select name="mulai_day" id="mulai_day" style="display:" class="form-control-normal">
                        
                                                
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
      <select name="mulai_mon" id="mulai_mon" onchange="mulai_date_change()" class="form-control-normal">         
         
               
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
      <select name="mulai_year" id="mulai_year" onchange="mulai_date_change()" class="form-control-normal">
         
               
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
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                        &nbsp;s/d&nbsp;
                        
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function selesai_show_day(n) {
      
  m = parseInt(document.getElementById('selesai_mon').options[document.getElementById('selesai_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('selesai_year').value;
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
 
  document.getElementById("selesai_day").innerHTML=s;
}

function selesai_date_change() {
  d = document.getElementById('selesai_day').options[document.getElementById('selesai_day').selectedIndex].value;
  selesai_show_day(d);
}
</script>
   <div>
      <select name="selesai_day" id="selesai_day" style="display:" class="form-control-normal">
                        
                                                
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
      <select name="selesai_mon" id="selesai_mon" onchange="selesai_date_change()" class="form-control-normal">         
         
               
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
      <select name="selesai_year" id="selesai_year" onchange="selesai_date_change()" class="form-control-normal">
         
               
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
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">
                     Penerimaan
                  </label>
                  <div class="col-md-7">
                     <div class="input-group">
                        <!-- input type="hidden" name="map_kode" id="map_kode" value="" / -->
                        <input type="text" name="map_nama" id="map_nama" value="" size="50" class="form-control">
                        <span class="input-group-btn">
                           <button type="button" class="btn btn-default" name="but_mak" id="but_mak" onclick="bukaPopupMAP('/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=popupMap&amp;act=view&amp;typ=html')">
                              <i class="fa fa-search"></i>
                           </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">          
               <div class="form-group">
                  <label class="col-md-4 control-label">
                     Nomor Bukti
                  </label>
                  <div class="col-md-7">
                     <input type="text" name="nomor_bukti" id="nomor_bukti" value="" class="form-control">
                  </div>
               </div>       
               <div class="form-group">
                  <label class="col-md-4 control-label">
                     Status Jurnal
                  </label>
                  <div class="col-md-7">
                     
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="posting" style="width:100px;" id="posting" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="Y">Sudah</option>
	
		<option value="T" selected="">Belum</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-offset-4 col-md-7">
                     <button type="submit" name="btncari" class="btn btn-primary">
                        Tampilkan »
                     </button>
                     
                     <button type="reset" class="btn btn-warning" name="btnReset">
                        Reset »
                     </button>                          
                  </div>                        
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
          <b>1</b>-<b>1</b> dari <b>1</b> &nbsp;
        </span>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Next">
          &gt;
        </a>
      </li>
      
    
      
      <li class="disabled">
        <a href="#" aria-label="Last">
          &gt;&gt;
        </a>
      </li>
      
    </ul>
    
    
   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
         </div>
         <div class="btn-group pull-right">
            <a class="xhr dest_subcontent-element btn btn-info btn-flat" href="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=inputTransaksiRealisasiPenerimaan&amp;act=view&amp;typ=html" title="Tambah Transaksi">
               <i class="fa fa-plus-circle"></i>
               Tambah
            </a>
         </div>
      </div>
      <form method="POST" action="" class="xhr_simple_form dest_subcontent-element" id="form_list">
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
               <thead>
                  <tr>
                     <th width="5">
                        No
                     </th>
                     <th width="130">
                        Aksi
                     </th>
                     <th>
                        Tanggal
                     </th>
                     <th>
                        Nomor Bukti
                     </th>
                     <th style="display:none">
                        Jenis
                     </th>
                     <th style="display:none">
                        Tipe
                     </th>
                     <th style="display:none">
                        Uraian
                     </th>
                     <th>
                        Target Penerimaan
                     </th>
                     <th>
                        Penanggung Jawab
                     </th>
                     <th>
                        Status Jurnal
                     </th>
                     <th>
                        Total (Rp.)
                     </th>
                  </tr>
               </thead>
               <tbody>
                  
                        
                        <tr class="table-common-even">
                           <td align="center">1</td>
                           <td class="links" align="center">
                              <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=HTFormRealisasiPenerimaan&amp;act=view&amp;typ=html&amp;dataId=48" title="Edit">
                                             <i class="fa fa-pencil"></i>
                                             </a>
                              <a class="xhr dest_subcontent-element btn btn-xs btn-danger" onclick="javascript: return
                                               showBoxConfirmDelete(" 48",="" "bkm="" 00001="" 2006.2="" 01.2023",="" "="" ekeuanganpts="" index.php?mod="finansi_transaksi_realisasi_penerimaan&amp;sub=deleteHTRealisasiPenerimaan&amp;act=do&amp;typ=html&quot;);&quot;" href="/ekeuanganpts/index.php?mod=confirm&amp;sub=confirmDelete&amp;act=do&amp;typ=html&amp;urlDelete=finansi_transaksi_realisasi_penerimaan|deleteHTRealisasiPenerimaan|do|html&amp;urlReturn=finansi_transaksi_realisasi_penerimaan|HTRealisasiPenerimaan|view|html&amp;id=48&amp;label=Transaksi Realisasi Penerimaan&amp;dataName=BKM/00001/2006.2/01.2023" title="Hapus">
                                               <i class="fa fa-trash"></i>
                                               </a>
                              <a class="xhr dest_subcontent-element btn btn-xs btn-primary" href="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=FormCetakTransaksi&amp;act=view&amp;typ=html&amp;dataId=48" title="Export Transaksi">
                                 <i class="fa fa-file-excel-o"></i>
                              </a>
                              <a class="xhr dest_subcontent-element btn btn-xs btn-success" href="/ekeuanganpts/index.php?mod=finansi_transaksi_realisasi_penerimaan&amp;sub=FormCetakBKM&amp;act=view&amp;typ=html&amp;dataId=48&amp;tipe=bkm" title="Export Bukti Kas Masuk">
                                 <i class="fa fa-file-excel-o"></i>
                              </a>
                           </td>
                           <td width="100" align="left">
                              1 Januari 2023
                           </td>
                           <td>
                              BKM/00001/2006.2/01.2023
                           </td>
                           <td style="display:none">
                              Anggaran
                           </td>
                           <td style="display:none">
                              Penerimaan Anggaran
                           </td>
                           <td style="display:none">
                              
                           </td>
                           <td>
                              Penerimaan Mahasiswa Baru
                           </td>
                           <td>
                              Elsa Monika
                           </td>
                           <td>
                              Belum
                           </td>
                           <td align="right">
                              960.000.000,00
                           </td>
                        </tr>
                        
                     
               </tbody>
            </table>
         </div>
      </form>
   </div>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>