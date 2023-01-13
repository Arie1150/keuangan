<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=76&amp;mid=76">Entri Jurnal</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=jurnal&amp;act=view&amp;typ=html">Daftar Transaksi Jurnal</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Daftar Transaksi Jurnal
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<script type="text/javascript" language="javascript" charset="utf-8">
// <![CDATA[
   function cetak(xurl) {
      var xpopup;
     xpopup = window.open(xurl,'xpopup','width=1100,height=600,resizable=yes,scrollbars=yes,right=0;center');
     xpopup.focus();
   }
// ]]>
</script>
<div class="panel panel-default">
      <div class="panel-heading">
            <span class="panel-title">
                Pencarian
            </span>
      </div>
      <div class="panel-body">
            <form method="POST" action="/ekeuanganpts/index.php?mod=jurnal&amp;sub=jurnal&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Range
                                    Bulan
                                </label>
                                <div class="col-md-7">
                                    
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function bulan_awal_show_day(n) {
      
  m = parseInt(document.getElementById('bulan_awal_mon').options[document.getElementById('bulan_awal_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('bulan_awal_year').value;
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
 
  document.getElementById("bulan_awal_day").innerHTML=s;
}

function bulan_awal_date_change() {
  d = document.getElementById('bulan_awal_day').options[document.getElementById('bulan_awal_day').selectedIndex].value;
  bulan_awal_show_day(d);
}
</script>
   <div>
      <select name="bulan_awal_day" id="bulan_awal_day" style="display:none" class="form-control-normal">
            
      </select>
      <select name="bulan_awal_mon" id="bulan_awal_mon" onchange="bulan_awal_date_change()" class="form-control-normal">         
         
               
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
      <select name="bulan_awal_year" id="bulan_awal_year" onchange="bulan_awal_date_change()" class="form-control-normal">
         
               
                  <option value="2024">2024</option>               
               
                  <option value="2023">2023</option>               
               
                  <option value="2022" selected="">2022</option>               
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                </div>
                            </div>     
                            <div class="form-group">
                              <label class="col-md-3 control-label">
                                  s/d
                              </label>
                              <div class="col-md-7">
                                  
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function bulan_akhir_show_day(n) {
      
  m = parseInt(document.getElementById('bulan_akhir_mon').options[document.getElementById('bulan_akhir_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('bulan_akhir_year').value;
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
 
  document.getElementById("bulan_akhir_day").innerHTML=s;
}

function bulan_akhir_date_change() {
  d = document.getElementById('bulan_akhir_day').options[document.getElementById('bulan_akhir_day').selectedIndex].value;
  bulan_akhir_show_day(d);
}
</script>
   <div>
      <select name="bulan_akhir_day" id="bulan_akhir_day" style="display:none" class="form-control-normal">
            
      </select>
      <select name="bulan_akhir_mon" id="bulan_akhir_mon" onchange="bulan_akhir_date_change()" class="form-control-normal">         
         
               
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
      <select name="bulan_akhir_year" id="bulan_akhir_year" onchange="bulan_akhir_date_change()" class="form-control-normal">
         
               
                  <option value="2024">2024</option>               
               
                  <option value="2023" selected="">2023</option>               
               
                  <option value="2022">2022</option>               
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                              </div>
                          </div>            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group">
                              <label class="col-md-3 control-label">
                                  Nomor Referensi
                              </label>
                              <div class="col-md-7">                                
                                  <input type="text" name="no_referensi" value="" size="20" maxlength="20" class="form-control">
                              </div>
                          </div> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Status Posting
                                </label>
                                <div class="col-md-7">                              
                                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="posting" id="cmb_posting" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="Y">Sudah</option>
	
		<option value="T">Belum</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-3">
                                    </label>
                                    <div class="col-md-7">
                                       <input type="submit" name="btnFilter" value=" Filter »" class="btn btn-primary">                   
                                       <input type="reset" name="btnTampilkan" value=" Reset »" class="btn btn-warning">                   
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
          <b>1</b>-<b>14</b> dari <b>14</b> &nbsp;
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
            <a class="btn btn-flat btn-default mr-5" href="javascript:void(0)" onclick="cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakListJurnal&amp;act=view&amp;typ=html&amp;no_referensi=&amp;posting=&amp;tahun_awal=2022&amp;bulan_awal=01&amp;tahun_akhir=2023&amp;bulan_akhir=01')" title="Cetak">
               <i class="ion-printer"></i> 
               Cetak
            </a>
            <a class="btn btn-flat btn-default" href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=listJurnal&amp;act=view&amp;typ=xlsx&amp;no_referensi=&amp;posting=&amp;tahun_awal=2022&amp;bulan_awal=01&amp;tahun_akhir=2023&amp;bulan_akhir=01" target="_blank" title="Cetak">
               <i class="fa fa-file-excel-o"></i> Export Xls
            </a>
      </div>
   </div>
   
   <div class="table-responsive">
   <table class="table table-bordered table-stipe table-hover">
               <thead>
                  <tr>
                     <th style="width: 25px;">No</th>
                     <th style="width: 70px;">Referensi</th>
                     <th style="width: 100px;">Tanggal Transaksi</th>
                     <th style="width: 80px;">No. Ref</th>
                     <th style="width: 80px;">No. SP3</th>
                     <th>Keterangan</th>
                     <th style="width: 80px;">Kode Akun</th>
                     <th style="width: 170px;">Nama Rekening</th>
                     <th style="width: 170px;">Laba Rugi</th>
                     <th style="width: 120px;">Debet (Rp)</th>
                     <th style="width: 120px;">Kredit(Rp.)</th>
                     <th style="width: 100px;">Petugas</th>
                     <th>Posting</th>
                     <th style="width: 150px;">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  
                        
                        <tr class="">
                           <td rowspan="2">1</td>
                           <td rowspan="2">BKM/00001/2001/10.2022</td>
                           <td rowspan="2">25 Oktober 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Penerimaan SPP FEB</td>
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           <td rowspan="2"></td>
                           <td align="right">7.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2">Adminsitrator</td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge badge-default">Belum</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=43&amp;prid=37')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="">
                           
                           
                           
                           
                           
                           
                           <td align="center">4101000<br><small></small></td>
                           <td>Penerimaan SPP Mahasiswa</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">7.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="">
                           <td rowspan="2">2</td>
                           <td rowspan="2">JT1/000001/08/2022</td>
                           <td rowspan="2">31 Agustus 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Transfer antar bank</td>
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           <td rowspan="2"></td>
                           <td align="right">10.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge badge-default">Belum</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=28&amp;prid=23')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110205<br><small></small></td>
                           <td>Bank BSI</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">10.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="">
                           <td rowspan="2">3</td>
                           <td rowspan="2">2022/04/AP/00001</td>
                           <td rowspan="2">11 April 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2">0001/R/000001.5/04/2022</td>
                           <td rowspan="2">Seminar Nasional FISIPOL</td>
                           <td align="center">5300005<br><small></small></td>
                           <td>Biaya Seminar</td>
                           <td rowspan="2"></td>
                           <td align="right">900.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge badge-default">Belum</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=34&amp;prid=29')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="">
                           
                           
                           
                           
                           
                           
                           <td align="center">2100000<br><small></small></td>
                           <td>Utang Usaha</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">900.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="">
                           <td rowspan="2">4</td>
                           <td rowspan="2">PC1/1000/03/2022</td>
                           <td rowspan="2">31 Maret 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2">0001/SP3/000001.3/03/2022</td>
                           <td rowspan="2">Pengeluaran petty cash bulan maret</td>
                           <td align="center">5200000<br><small></small></td>
                           <td>Belanja Barang</td>
                           <td rowspan="2"></td>
                           <td align="right">1.200.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge badge-default">Belum</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=46&amp;prid=40')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110101<br><small></small></td>
                           <td>Petty Cash</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">1.200.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">5</td>
                           <td rowspan="2">Expense/2022/03/1</td>
                           <td rowspan="2">09 Maret 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2">0001/SP3/000001.3/03/2022</td>
                           <td rowspan="2">Kunjungan studi banding</td>
                           <td align="center">5300002<br><small></small></td>
                           <td>Biaya Kunjungan Indutri Mahasiswa</td>
                           <td rowspan="2">3101000 - Aset Neto Tidak Terikat Tahun Berjalan</td>
                           <td align="right">4.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2">Sarah Zaenab Akuntan</td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=36&amp;prid=32')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=32" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">4.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="">
                           <td rowspan="2">6</td>
                           <td rowspan="2"></td>
                           <td rowspan="2">28 Februari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Pengeluaran untuk snack dan makan siang.</td>
                           <td align="center">5200000<br><small></small></td>
                           <td>Belanja Barang</td>
                           <td rowspan="2"></td>
                           <td align="right">350.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge badge-default">Belum</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=45&amp;prid=39')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110101<br><small></small></td>
                           <td>Petty Cash</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">350.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">7</td>
                           <td rowspan="2">JU/2022/02/1</td>
                           <td rowspan="2">08 Februari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Jurnal umum</td>
                           <td align="center">1110206<br><small></small></td>
                           <td>Bank Panin</td>
                           <td rowspan="2"></td>
                           <td align="right">1.234.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2">Adminsitrator</td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=42&amp;prid=36')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=36" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110207<br><small></small></td>
                           <td>Bank BPD</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">1.234.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">8</td>
                           <td rowspan="2">JT1/000001/01/2022</td>
                           <td rowspan="2">31 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Jurnal transfer perrty cash untuk februari</td>
                           <td align="center">1110101<br><small></small></td>
                           <td>Petty Cash</td>
                           <td rowspan="2"></td>
                           <td align="right">15.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=29&amp;prid=24')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110206<br><small></small></td>
                           <td>Bank Panin</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">15.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">9</td>
                           <td rowspan="2">JT1/000001/01/2022<br><span class="label label-warning">Jurnal Balik</span></td>
                           <td rowspan="2">31 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Jurnal transfer perrty cash untuk februari</td>
                           <td align="center">1110206<br><small></small></td>
                           <td>Bank Panin</td>
                           <td rowspan="2"></td>
                           <td align="right">15.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=29&amp;prid=25')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=25" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110101<br><small></small></td>
                           <td>Petty Cash</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">15.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">10</td>
                           <td rowspan="2">JT2/000001/01/2022</td>
                           <td rowspan="2">15 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Transfer antar bank</td>
                           <td align="center">1110201<br><small></small></td>
                           <td>Bank BNI</td>
                           <td rowspan="2"></td>
                           <td align="right">7.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=35&amp;prid=30')" title="Cetak"> <i class="ion-printer"></i> </a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">7.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">11</td>
                           <td rowspan="2">JT2/000001/01/2022<br><span class="label label-warning">Jurnal Balik</span></td>
                           <td rowspan="2">15 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Transfer antar bank</td>
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           <td rowspan="2"></td>
                           <td align="right">7.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=35&amp;prid=31')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=31" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110201<br><small></small></td>
                           <td>Bank BNI</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">7.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">12</td>
                           <td rowspan="2">BKM/00001/000001.5/01.2022</td>
                           <td rowspan="2">10 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Penerimaan FISIPOL bulan januari</td>
                           <td align="center">1110202<br><small></small></td>
                           <td>Bank Mandiri</td>
                           <td rowspan="2">3101000 - Aset Neto Tidak Terikat Tahun Berjalan</td>
                           <td align="right">40.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2">Sarah Zaenab Akuntan</td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=30&amp;prid=26')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=26" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">4105000<br><small></small></td>
                           <td>Penerimaan Mahasiswa Lainnya</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">40.000.000,00</td>
                           
                           
                           
                        </tr>
                        
                        <tr class="table-common-even2">
                           <td rowspan="2">13</td>
                           <td rowspan="2">PC1/2006.1/01/2022</td>
                           <td rowspan="2">01 Januari 2022</td>
                           <td rowspan="2"></td>
                           <td rowspan="2"></td>
                           <td rowspan="2">Pengisian petty cash untuk bulan januari</td>
                           <td align="center">1110101<br><small></small></td>
                           <td>Petty Cash</td>
                           <td rowspan="2"></td>
                           <td align="right">10.000.000,00</td>
                           <td align="right">0,00</td>
                           <td rowspan="2"></td>
                           <td rowspan="2" class="links" style="text-align: center;"><span class="badge  badge-success">Sudah</span></td>
                           <td class="links" align="center" rowspan="2"><a class="btn btn-xs btn-default" href="javascript:cetak('/ekeuanganpts/index.php?mod=jurnal&amp;sub=cetakJurnal&amp;act=view&amp;typ=html&amp;id=39&amp;prid=34')" title="Cetak"> <i class="ion-printer"></i> </a><a href="/ekeuanganpts/index.php?mod=jurnal&amp;sub=Jurnal&amp;act=view&amp;typ=html&amp;balik=yes&amp;grp=34" class="btn btn-xs btn-default xhr dest_subcontent-element" title="Jurnal Balik"><i class="fa fa-undo"></i></a></td>
                        </tr>
                        
                        <tr class="table-common-even2">
                           
                           
                           
                           
                           
                           
                           <td align="center">1110201<br><small></small></td>
                           <td>Bank BNI</td>
                           
                           <td align="right">0,00</td>
                           <td align="right">10.000.000,00</td>
                           
                           
                           
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
               <span class="badge  badge-success">Sudah</span> Jurnal sudah diposting
            </li>
            <li>
               <span class="badge badge-default">Belum</span> Jurnal belum diposting
            </li>
            <li>
               Klik <button class="btn btn-xs btn-default"><i class="ion-printer" style="margin-bottom: -3px;"></i></button> untuk mencetak data jurnal
            </li>
            <li>
               Klik <button class="btn btn-xs btn-default"><i class="fa fa-file-excel-o" style="margin-bottom: -3px;"></i></button> untuk export excel data jurnal
            </li>
            <li>
               Klik <button class="btn btn-xs btn-default"><i class="fa fa-undo" style="margin-bottom: -3px;"></i></button> untuk melakukan jurnal balik untuk data jurnal yang sudah di posting
            </li>
         </ul>       
  </div>
</div>

<script>
   function jurnalBalik (elemen, id, pembukuanId, referensi) {
      if(confirm('Apakah Anda yakin akan melakukan jurnal balik pada jurnal '+referensi)){
         // console.log('yes'+referensi+'---'+id+'--'+pembukuanId);
         var action     = '';
         var container  = elemen.parentNode;
         var imageLoader   = document.createElement('img');
         imageLoader.src   = 'images/icons/16/ajax-loader-2.gif';
         imageLoader.width = 16;
         var imageWarning     = document.createElement('img');
         imageWarning.src     = 'images/icons/16/lamp-red.gif';
         imageWarning.width   = 16;
         elemen.innerHTML       = '';
         elemen.appendChild(imageLoader);
   
         $.ajax({
            type:"POST",
            url:action,
            data:  { 'id': id, 'pembukuan_id' : pembukuanId, 'referensi' : referensi},
            dataType : "json"
         }).done(function(data){
            eval(data.exec);
            // console.log(data);
         }).fail(function(){
            elemen.innerHTML       = '';
            elemen.appendChild(imageWarning);
            console.log(data);
         });
         // e.preventDefault();
         return false;
      }else{
         return false;
      }
   }
</script>   

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>