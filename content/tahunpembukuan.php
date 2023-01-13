<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=92&amp;mid=92">Setting</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=TahunPembukuan&amp;act=view&amp;typ=html">Tahun Pembukuan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Tahun Pembukuan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

<div class="panel-group panel-group-info" id="accordion-example-info">
   <div class="panel">
     <div class="panel-heading">
       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example-info" href="#collapseOne-info">
         <i class="fa fa-info-circle"></i>&nbsp;&nbsp;<b>Petunjuk</b>
       </a>
     </div>
     <div id="collapseOne-info" class="panel-collapse collapse">
       <div class="panel-body">
         <ul>
            <li>
               Sebelum sistem digunakan, siapkan saldo awal untuk masing-masing buku besar untuk dimasukkan, kemudian lakukan <strong>Set Tahun Pembukuan Baru</strong>
            </li>
            <li>
               Tekan <button class="btn btn-xs btn-warning"><i class="fa fa-cog"></i></button> untuk melihat detil dan setting saldo awal di masing-masing buku
            </li>
            <li>
               Jika tahun pembukuan sudah berjalan, saldo awal akan langsung diambilkan dari saldo akhir tahun sebelumnya
            </li>
         </ul>
       </div>
     </div>
   </div>
</div>

<div class="panel panel-default" style="display: none;">
		<div class="panel-heading">
			<span class="panel-title">Pencarian</span>
		</div>
		<div class="panel-body">
			<form method="POST" name="frmSearch" action="" class="xhr_simple_form dest_subcontent-element form-horizontal" id="filterbox">
			   <div class="row">
				  <div class="form-group">
					 <label class="control-label col-md-3">
						Nama Unit Kerja
					 </label>
					 <div class="col-md-4">
							
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="unitKerja" class="form-control">
	
		<option value="1" selected="">0000 - UNIVERSITAS</option>
	
		<option value="16">2001 - Fakultas Ekonomi Bisnis</option>
	
		<option value="19">2002 - Fakultas Kedokteran</option>
	
		<option value="20">2003 - Fakultas Hukum</option>
	
		<option value="21">2004 - Fakultas Kedokteran Gigi</option>
	
		<option value="22">2001.1 - Prodi Administrasi Bisnis</option>
	
		<option value="23">2001.2 - Prodi Akuntansi</option>
	
		<option value="26">2005 - Fakultas Ilmu Sosial dan Ilmu Politik</option>
	
		<option value="27">2005.1 - Prodi Ilmu Politik</option>
	
		<option value="28">2006 - Fakultas Teknik</option>
	
		<option value="31">2007 - Fakultas Kesenian</option>
	
		<option value="32">2008 - Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
	
		<option value="33">2009 - Fakultas Keguruan dan Ilmu Pendidikan</option>
	
		<option value="35">2010 - Fakultas Agroteknologi</option>
	
		<option value="38">3001 - Ka.Ur. Perpustakaan</option>
	
		<option value="39">2006.1 - Prodi Teknik Lingkungan</option>
	
		<option value="40">3002 - Ka.Ur.Laboratorium</option>
	
		<option value="41">1000 - REKTORAT</option>
	
		<option value="42">2006.2 - Teknik Kimia</option>
	
		<option value="43">1000.1 - Wakil Rektor Bidang Akademik dan Kemahasiswaan</option>
	
		<option value="44">1000.2 - Wakil Rektor Bidang Keuangan &amp; Sumber Daya Organisasi</option>
	
		<option value="45">1000.3 - Wakil Rektor Bidang Penelitian, Pengembangan &amp; Kerjasama</option>
	
		<option value="46">1000.3.01 - Direktur Penelitian dan Pengabdian Masyarakat</option>
	
		<option value="47">1000.3.01.01 - Manajer Penelitian dan Pengembangan</option>
	
		<option value="48">1000.3.01.02 - Manajer Pemberdayaan dan Pengabdian Masyarakat</option>
	
		<option value="49">2006.3 - Teknik Komputer</option>
	
		<option value="50">1000.2.01 - Direktur Keuangan &amp; Akuntansi</option>
	
		<option value="51">1000.2.02 - Direktur Pengelolaan dan Pengembangan Aset</option>
	
		<option value="52">1000.2.03 - Direktur Sumber Daya Manusia dan Teknologi Informasi</option>
	
		<option value="53">1000.2.03.01 - Manajer Teknologi Komunikasi dan Informasi</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
					 </div>
					 <div class="col-md-5">
						<input type="submit" name="cari" value=" Tampilkan »" class="btn btn-primary">                   
						<input type="reset" name="btnreset" value=" Reset »" class="btn btn-warning">                   
					 </div>
				  </div>
			   </div>               
			   </form>
		</div>
</div>


<div class="panel-group panel-group-success" id="accordion-example-success">
   <div class="panel panel-success panel-body-colorful">
     <div class="panel-heading">
       <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-example-success" href="#collapseThree-success">
         <i class="fa fa-calendar"></i>&nbsp;&nbsp;<b>Periode Tahun Pembukuan</b>
       </a>
     </div>
     <div id="collapseThree-success" class="panel-collapse collapse in">
       <div class="panel-body">
			<form method="POST" name="frmInput" action="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=TutupBuku&amp;act=do&amp;typ=html" class="xhr_simple_form dest_subcontent-element form-horizontal" id="form_tahun_pembukuan">
			   <div class="row">
               
            
               <div class="row col-md-6 col-md-offset-3">
                  <div class="col-sm-6">
                     <label>Tanggal Awal</label>
                     <label class="form-control-label text-center">
                        <b>01 Januari 2022</b>
                     </label>
                  </div>
                  <div class="col-sm-6">
                     <label>Tanggal Akhir</label>
                     <label class="form-control-label text-center">
                        <b>31 Desember 2022</b>
                     </label>
                  </div>
               </div>
            
               <div class="row col-md-4 col-md-offset-4">
                     <div class="col-md-12 text-center m-t-3">
                        

                        
                        <input type="submit" name="btnsimpan" value=" Tutup Tahun Pembukuan" class="btn btn-warning btn-3d">    
                        
                     </div>
               </div>
			   </div>               
			   </form>
       </div>
     </div>
   </div>
</div>

<div class="panel-group panel-group-info" id="accordion-summary-info">
   <div class="panel">
     <div class="panel-heading">
       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-summary-info" href="#collapseSummary-info">
         <i class="fa fa-balance-scale"></i>&nbsp;&nbsp;<b>Summary</b>
       </a>
     </div>
     <div id="collapseSummary-info" class="panel-collapse collapse in">
       <div class="panel-body">
         <div class="table-responsive">
            <div class="table-info">
               <table class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th rowspan="2">Total Aktiva (Rp)</th>
                        <th colspan="2">Total Pasiva (Rp)</th>
                     </tr>
                     <tr>
                        <th align="center">TOTAL LIABILITY</th>
                        <th align="center">TOTAL EQUITY</th>
                     </tr>   
                  </thead>
                  <tbody>
                     <tr>
                        <td align="center"><h4>0,00</h4></td>
                        <td align="center"><h4>0,00</h4></td>
                        <td align="center"><h4>0,00</h4></td>
                     </tr>
                     <tr>
                        <td align="center"><h2>0,00</h2></td>
                        <td colspan="2" align="center"><h2>0,00</h2></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
       </div>
     </div>
   </div>
</div>

<div class="panel-group panel-group-info" id="accordion-saldo-info">
   <div class="panel">
      <div class="panel-heading">
         <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-saldo-info" href="#collapseSaldo-info">
            <i class="fa fa-line-chart"></i>&nbsp;&nbsp;<b>Saldo</b>
         </a>
      </div>
      <div id="collapseSaldo-info" class="panel-collapse collapse">
         <div class="panel-body">
            <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover">
                  <thead>
                     <tr>
                        <th width="70" rowspan="2">No</th>
                        <th width="70" rowspan="2">Aksi</th>
                        <th rowspan="2">Kode Akun</th>
                        <th rowspan="2">Nama Rekening</th>
                        <th rowspan="2" style="width:120px">Saldo Normal</th>
                        <th rowspan="2" style="display: none;">Tipe Akun</th>
                        <th rowspan="2" style="width:150px">Saldo Tahun Sebelumnya</th>
                        <th colspan="3">Saldo Awal Tahun</th>
                     </tr>
                     <tr>
                        <th style="width:150px">Debet</th>
                        <th style="width:150px">Kredit</th>
                        <th style="width:150px">Jumlah</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">1</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=49&amp;headtxt=1110101|Petty Cash" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110101</td>
                              <td>Petty Cash</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">2</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=10&amp;headtxt=1110201|Bank BNI" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110201</td>
                              <td>Bank BNI</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">3</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=27&amp;headtxt=1110202|Bank Mandiri" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110202</td>
                              <td>Bank Mandiri</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">4</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=28&amp;headtxt=1110203|Bank BTN" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110203</td>
                              <td>Bank BTN</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">5</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=40&amp;headtxt=1110204|Bank BRI" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110204</td>
                              <td>Bank BRI</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">6</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=45&amp;headtxt=1110205|Bank BSI" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110205</td>
                              <td>Bank BSI</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">7</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=46&amp;headtxt=1110206|Bank Panin" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110206</td>
                              <td>Bank Panin</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">8</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=47&amp;headtxt=1110207|Bank BPD" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">1110207</td>
                              <td>Bank BPD</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">9</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=19&amp;headtxt=2100000|Utang Usaha" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">2100000</td>
                              <td>Utang Usaha</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">10</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=23&amp;headtxt=2200000|Utang Bank" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">2200000</td>
                              <td>Utang Bank</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">11</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=69&amp;headtxt=2300000|Utang Gaji" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">2300000</td>
                              <td>Utang Gaji</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">12</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=70&amp;headtxt=2400000|Utang Bunga" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">2400000</td>
                              <td>Utang Bunga</td>
                              <td style="text-align:center;"><span class="label label-success">Debet</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">13</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=18&amp;headtxt=3101000|Aset Neto Tidak Terikat Tahun Berjalan" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">3101000</td>
                              <td>Aset Neto Tidak Terikat Tahun Berjalan</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">14</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=48&amp;headtxt=3102000|Aset Neto Tidak Terikat Awal Tahun" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">3102000</td>
                              <td>Aset Neto Tidak Terikat Awal Tahun</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="table-common-even">
                              <td align="center" style="width:70px">15</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=21&amp;headtxt=3200000|ASET NETO TERIKAT TEMPORER" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">3200000</td>
                              <td>ASET NETO TERIKAT TEMPORER</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                           <tr class="">
                              <td align="center" style="width:70px">16</td>
                               <td class="links" align="center">
                                 
                                    <a class="xhr dest_subcontent-element btn btn-xs btn-warning" href="/ekeuanganpts/index.php?mod=tahun_pembukuan&amp;sub=DetilSaldoAwal&amp;act=view&amp;typ=html&amp;coaid=22&amp;headtxt=3300000|ASET NETO TERIKAT PERMANEN" title="Detil dan Setting Saldo Awal">
                                       <i class="fa fa-cog"></i>
                                    </a>
                                 
                                 
                              </td>
                              <td align="center">3300000</td>
                              <td>ASET NETO TERIKAT PERMANEN</td>
                              <td style="text-align:center;"><span class="label label-warning">Kredit</span></td>
                              <td style="display: none;"></td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                              <td style="text-align:right;">0,00</td>
                           </tr>
                           
                        
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
function popupListTransaksi(xurl) {
	showPopup(xurl, 'List Transaksi', 900, 650);
}

function popupListJurnal(xurl) {
	showPopup(xurl, 'List Jurnal', 900, 650);
}
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>