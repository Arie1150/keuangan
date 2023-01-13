<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=rencanaPenerimaan&amp;act=view&amp;typ=html">Laporan Rencana Penerimaan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Laporan Rencana Penerimaan
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
	function bukaPopupUnitKerja(xurl) {
		showPopup(xurl,'Unit Kerja',550,550);

	}
    function bukaPopupPenerimaan(xurl) {
		showPopup(xurl,'Pos Penerimaan',550,550);

	}
    function resetFormIni() {
	    GtfwAjax.replaceContentWithUrl("subcontent-element","/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&sub=RencanaPenerimaan&act=view&typ=html&ascomponent=1");

	}
</script>

<div class="panel panel-default">
      <div class="panel-heading">
            <span class="panel-title">
                Pencarian
            </span>
      </div>
      <div class="panel-body">
            <form method="POST" action="/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=RencanaPenerimaan&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Tahun Periode
                                </label>
                                <div class="col-md-5">
                                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tahun_anggaran" id="tahun_anggaran" class="form-control">
	
		<option value="13">2020</option>
	
		<option value="1">2021</option>
	
		<option value="6">2022</option>
	
		<option value="9" selected="">2023</option>
	
		<option value="10">2024</option>
	
		<option value="12">2025</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                                </div>
                            </div>                
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Unit Kerja
                                </label>
                                <div class="col-md-9">                                
                                    <input type="hidden" name="unitkerja" id="unitkerja" value="1">
                                    
                                         <div class="input-group">
                                          <input type="text" name="unitkerja_label" id="unitkerja_label" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
                                             <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" onclick="javascript:bukaPopupUnitKerja('/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=popupUnitkerja&amp;act=view&amp;typ=html')">
                                                   <i class="fa fa-search"></i>
                                                </button>
                                             </div>
                                       </div>
                                       
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Pos Penerimaan
                                </label>
                                <div class="col-md-9">          
                                   <div class="input-group">
                                    <input type="hidden" name="pos_penerimaan_id" id="pos_penerimaan_id" value="">
                                    <input type="text" size="35" name="pos_penerimaan_nama" id="pos_penerimaan_nama" readonly="readonly" class="form-control" value="">
                                    <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" onclick="javascript:bukaPopupPenerimaan('/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=popupPosPenerimaan&amp;act=view&amp;typ=html')">
                                       <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                 </div>                    
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-offset-3 col-md-9">
                                  <button type="submit" name="btncari" class="btn btn-primary">Tampilkan</button>
                                  <button type="reset" name="btnReset" class="btn btn-warning">Reset</button> 
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
          <b>1</b>-<b>8</b> dari <b>8</b> &nbsp;
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
            <a class="btn btn-success btn-outline btn-3d mr-5" href="/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=ExcelRencanaPenerimaan&amp;act=view&amp;typ=xlsx&amp;tgl=9&amp;id=16&amp;unitkerjaid=1&amp;unitkerja_label=UNIVERSITAS&amp;id_penerimaan=" target="_blank" title="Cetak">
               <i class="fa fa-file-excel-o"></i> Excel
            </a>
            <a class="btn btn-info btn-outline btn-3d" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=rincian_perhitungan_rencana_penerimaan&amp;sub=CetakRencanaPenerimaan&amp;act=view&amp;typ=html&amp;tgl=9&amp;id=16&amp;unitkerjaid=1&amp;unitkerja_label=UNIVERSITAS&amp;id_penerimaan=')" title="Cetak">
               <i class="ion-printer"></i> 
               Print
            </a>
      </div>
   </div>
   
   <div class="table-responsive">
   <table class="table table-bordered table-stipe table-hover">
               <thead>
                     <tr>
                           <th width="5">No</th>
                           <th>
                              Kode 
                              <i class="fa fa-question-circle text-muted" id="popoverKode" data-state="info" onmouseover="showPopover(this.id, 'Kode', 'Kolom Kode menampilkan data Kode Unit Kerja dan Kode Pos Penerimaan', 'top');"></i>
                           </th>
                           <th>
                              Nama 
                              <i class="fa fa-question-circle text-muted" id="popoverNama" data-state="info" onmouseover="showPopover(this.id, 'Nama', 'Kolom Nama menampilkan data Nama Unit Kerja dan Nama Pos Penerimaan', 'top');"></i>
                           </th>
                           <th>
                              Volume 
                              <i class="fa fa-question-circle text-muted" id="popoverVolume" data-state="info" onmouseover="showPopover(this.id, 'Volume', 'Volume Perhitungan Target', 'top');"></i>
                           </th>
                           <th>
                              Tarif (Rp) 
                              <i class="fa fa-question-circle text-muted" id="popoverTarif" data-state="info" onmouseover="showPopover(this.id, 'Tarif (Rp)', 'Tarif Perhitungan Target', 'top');"></i>
                           </th>
                           <th>Usulan Target Penerimaan (Rp)</th>
                           <th style="display: none;">
                              Jumlah (Rp) 
                              <i class="fa fa-question-circle text-muted" id="popoverJumlah" data-state="info" onmouseover="showPopover(this.id, 'Jumlah (Rp)', 'Jumlah Perhitungan Target', 'top');"></i>
                           </th>
                           <th>
                              Total Penerimaan (%) 
                              <i class="fa fa-question-circle text-muted" id="popoverPersen" data-state="info" onmouseover="showPopover(this.id, 'Total Penerimaan (%)', 'Persentase Total Penerimaan dari Target Penerimaan Yang Disetujui', 'top');"></i>
                           </th>
                           <th>
                              Total Penerimaan (Rp) 
                              <i class="fa fa-question-circle text-muted" id="popoverTotal" data-state="info" onmouseover="showPopover(this.id, 'Total Penerimaan (Rp)', 'Total Penerimaan dari Target Penerimaan Yang Disetujui', 'top');"></i>
                           </th>
                        </tr>
               </thead>
               <tbody>
                  
                        
                        <tr class="table-common-even1">
                           <td class="text-center"></td>
                           <td class="text-right"><b>2001.2</b></td>
                           <td><b>Prodi Akuntansi</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"></td>
                           <td style="text-align:right; display: none;"><b>2.035.000.000</b></td>
                           <td style="text-align:right;"><b>2.035.000.000</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"><b>2.035.000.000</b></td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">1</td>
                           <td class="text-right">400009</td>
                           <td>Penerimaan Mahasiswa Baru</td>
                           <td style="text-align:center;">150</td>
                           <td style="text-align:right;">7.500.000</td>
                           <td style="text-align:right; display: none;">1.125.000.000</td>
                           <td style="text-align:right;">1.125.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">1.125.000.000</td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">2</td>
                           <td class="text-right">400018</td>
                           <td>perpanjangan Studi S2</td>
                           <td style="text-align:center;">1</td>
                           <td style="text-align:right;">10.000.000</td>
                           <td style="text-align:right; display: none;">10.000.000</td>
                           <td style="text-align:right;">10.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">10.000.000</td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">3</td>
                           <td class="text-right">400021</td>
                           <td>Penerimaan SPP 2023/2024</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">9.000.000</td>
                           <td style="text-align:right; display: none;">900.000.000</td>
                           <td style="text-align:right;">900.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">900.000.000</td>
                        </tr>
                        
                        <tr class="table-common-even1">
                           <td class="text-center"></td>
                           <td class="text-right"><b>1000.3.01.02</b></td>
                           <td><b>Manajer Pemberdayaan dan Pengabdian Masyarakat</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"></td>
                           <td style="text-align:right; display: none;"><b>100.000.000</b></td>
                           <td style="text-align:right;"><b>100.000.000</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"><b>100.000.000</b></td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">1</td>
                           <td class="text-right">400019</td>
                           <td>Penerimaan Hibah</td>
                           <td style="text-align:center;">1</td>
                           <td style="text-align:right;">100.000.000</td>
                           <td style="text-align:right; display: none;">100.000.000</td>
                           <td style="text-align:right;">100.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">100.000.000</td>
                        </tr>
                        
                        <tr class="table-common-even1">
                           <td class="text-center"></td>
                           <td class="text-right"><b>2005</b></td>
                           <td><b>Fakultas Ilmu Sosial dan Ilmu Politik</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"></td>
                           <td style="text-align:right; display: none;"><b>490.000.000</b></td>
                           <td style="text-align:right;"><b>490.000.000</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"><b>490.000.000</b></td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">1</td>
                           <td class="text-right">400003</td>
                           <td>Penerimaan SPP Ganjil</td>
                           <td style="text-align:center;">350</td>
                           <td style="text-align:right;">1.400.000</td>
                           <td style="text-align:right; display: none;">490.000.000</td>
                           <td style="text-align:right;">490.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">490.000.000</td>
                        </tr>
                        
                        <tr class="table-common-even1">
                           <td class="text-center"></td>
                           <td class="text-right"><b>2006.2</b></td>
                           <td><b>Teknik Kimia</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"></td>
                           <td style="text-align:right; display: none;"><b>1.700.000.000</b></td>
                           <td style="text-align:right;"><b>1.700.000.000</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"><b>1.700.000.000</b></td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">1</td>
                           <td class="text-right">400009</td>
                           <td>Penerimaan Mahasiswa Baru</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">12.000.000</td>
                           <td style="text-align:right; display: none;">1.200.000.000</td>
                           <td style="text-align:right;">1.200.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">1.200.000.000</td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">2</td>
                           <td class="text-right">400020</td>
                           <td>Penerimaan Jasa Fasilitas Laboratorium</td>
                           <td style="text-align:center;">1</td>
                           <td style="text-align:right;">500.000.000</td>
                           <td style="text-align:right; display: none;">500.000.000</td>
                           <td style="text-align:right;">500.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">500.000.000</td>
                        </tr>
                        
                        <tr class="table-common-even1">
                           <td class="text-center"></td>
                           <td class="text-right"><b>2007</b></td>
                           <td><b>Fakultas Kesenian</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"></td>
                           <td style="text-align:right; display: none;"><b>2.160.000.000</b></td>
                           <td style="text-align:right;"><b>2.160.000.000</b></td>
                           <td style="text-align:center;"></td>
                           <td style="text-align:right;"><b>2.160.000.000</b></td>
                        </tr>
                        
                        <tr class="">
                           <td class="text-center">1</td>
                           <td class="text-right">400009</td>
                           <td>Penerimaan Mahasiswa Baru</td>
                           <td style="text-align:center;">1800</td>
                           <td style="text-align:right;">1.200.000</td>
                           <td style="text-align:right; display: none;">2.160.000.000</td>
                           <td style="text-align:right;">2.160.000.000</td>
                           <td style="text-align:center;">100</td>
                           <td style="text-align:right;">2.160.000.000</td>
                        </tr>
                        
                        <tr class="active">
                              <td class="text-center">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td class="text-center"><b>TOTAL JUMLAH</b></td>
                              <td>&nbsp;</td>
                              <td style="text-align:right;">&nbsp;</td>
                              <td style="text-align:right; display: none;"><b>6.485.000.000</b></td>
                              <td style="text-align:right;"><b>6.485.000.000</b></td>
                              <td style="text-align:right;">&nbsp;</td>
                              <td style="text-align:right;"><b>6.485.000.000</b></td>
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