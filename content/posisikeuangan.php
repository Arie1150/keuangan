<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=21&amp;mid=21">Laporan Keuangan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=lapPosisiKeuangan&amp;act=view&amp;typ=html">Posisi Keuangan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Posisi Keuangan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
    var xpopup;
    function bukaPopupCetak(xurl) {
        xpopup = window.open(xurl, 'xpopup', 'width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
        xpopup.focus();
    }

    function popupDetail(xurl){
        showPopup(xurl, 'Detil Laporan Posisi Keuangan', 500, 400);
    }
</script>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title">
            Pencarian
        </span>
    </div>
    <div class="panel-body">
        <form method="POST" action="/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=LapPosisiKeuangan&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
            <div class="row"> 
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            Periode
                        </label>
                        <div class="col-md-4">
                            
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="periode_pembukuan" id="periode_pembukuan" class="form-control">
	
		<option value="1" selected="">2022 (01 Januari 2022 s/d 31 Desember 2022)</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-md-3">
                        </label>

                        <div class="col-md-4">
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
                <a class="btn btn-flat btn-default mr-5" href="/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=ExcelLapPosisiKeuangan&amp;act=view&amp;typ=xlsx&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;cetak=yes" target="_blank" title="Non-existent configuration!">
                    <i class="fa fa-file-excel-o"></i>
                    Export Xls
                </a>
                <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=CetakLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;periode_nama=2022&amp;periode_nama_ts=2021&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;cetak=yes')" title="Non-existent configuration!">
                    <i class="ion-printer"></i>
                    Cetak
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-stipe table-hover">
                <thead>
                    <tr>
                        <th align="left" rowspan="2">Uraian</th>
                        <th width="130"> 2022</th>
                        <th width="130">2021</th>
                    </tr>
                    <tr>
                        <th width="130">Jumlah (Rp)</th>
                        <th width="130">Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr class="table-padding">
                            <td style="padding-left: 15px;"><h2>AKTIVA</h2></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;"><b>Aktiva Lancar</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;"><b>Kas dan Setara Kas</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 60px;"><b>Kas dan Setara Kas Tidak Terikat</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Petty Cash</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=444')" title="Lihat Detail">
                                    10.000.000,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=444&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Bank</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=445')" title="Lihat Detail">
                                    23.000.000,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=445&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;"><b>Deposito</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 60px;">Deposito Tidak Terikat</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=297')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=297&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Investasi Jangka Pendek</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=208')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=208&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Piutang</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=226')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=226&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Piutang Lain-Lain</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=303')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=303&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Uang Muka/ Panjar</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=228')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=228&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Biaya Dibayar Dimuka</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=204')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=204&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;"><b>Aset Tidak Lancar</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Properti Investasi</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=230')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=230&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;"><b>Aset Tetap</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 60px;"><b>Aset Tetap Tidak Terikat</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Gedung dan Bangunan</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=306')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=306&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Kendaraan</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=307')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=307&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Alat Telekomunikasi</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=308')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=308&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 75px;">Peralatan dan Mesin</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=309')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=309&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Aset Tidak Berwujud</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=345')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=345&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Investasi Jangka Panjang</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=346')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=346&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Aset Lainnya</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=347')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=347&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;font-weight:bold">JUMLAH ASET</td>
                        
                                
                            <td align="right">
                                <b>33.000.000,00</b>
                            </td>
                            <td align="right">
                                <b>0,00</b>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 15px;"><h2>LIABILITAS</h2></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;"><b>Liabilitas Lancar</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Hutang Usaha</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=320')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=320&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Hutang Pegawai</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=234')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=234&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Biaya yang Masih Harus Dibayar</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=235')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=235&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Pendapatan Diterima Dimuka</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=349')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=349&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Hutang Pajak</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=350')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=350&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;"><b>Liabilitas Jangka Panjang</b></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 45px;">Hutang Jangka Panjang</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=418')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=418&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;font-weight:bold">Jumlah Liabilitas</td>
                        
                                
                            <td align="right">
                                <b>0,00</b>
                            </td>
                            <td align="right">
                                <b>0,00</b>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 15px;"><h2>ASET NETO</h2></td>
                        
                                
                            <td align="right">
                            </td>
                            <td align="right">
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;">Aset Neto Tidak Terikat</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=239')" title="Lihat Detail">
                                    33.000.000,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=239&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;">Aset Neto Terikat Temporer</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=325')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=325&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;">Aset Neto Terikat Permanen</td>
                        
                                
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=326')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td>
                            <td align="right">
                                <a href="javascript:void(0)" onclick="popupDetail('/ekeuanganpts/index.php?mod=lap_posisi_keuangan&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2022-12-31&amp;kellap_id=326&amp;status=TL')" title="Lihat Detail">
                                    0,00
                                </a>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 30px;font-weight:bold">Jumlah Aset Neto</td>
                        
                                
                            <td align="right">
                                <b>33.000.000,00</b>
                            </td>
                            <td align="right">
                                <b>0,00</b>
                            </td> 
                            
                        </tr>
                        
                    <tr class="table-padding">
                            <td style="padding-left: 15px;font-weight:bold">JUMLAH LIABILITAS DAN ASET NETO</td>
                        
                                
                            <td align="right">
                                <b>33.000.000,00</b>
                            </td>
                            <td align="right">
                                <b>0,00</b>
                            </td> 
                            
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