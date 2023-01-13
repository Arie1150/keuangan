<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=21&amp;mid=21">Laporan Keuangan</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=lapPosisiKeuangan&amp;act=view&amp;typ=html">Posisi Keuangan Sementara</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon fa fa-book"></i> Posisi Keuangan Sementara
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
</script>

<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title">
            Pencarian
        </span>
    </div>
    <div class="panel-body">
        <form method="POST" action="/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=LapPosisiKeuangan&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
            <div class="row"> 
                <div class="form-group">
                    <label class="col-md-3 control-label">
                        Periode
                    </label>
                    <div class="col-md-4">
                        <label class="form-control-label font-weight-semibold">
                            2022 (01 Januari 2022 s/d 31 Desember 2022)
                            <input type="hidden" name="periode_pembukuan" id="periode_pembukuan" value="1">
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">
                        Tanggal Transaksi
                    </label>
                    <div class="col-sm-4">  
                        <div class="input-daterange input-group" id="datepicker-range">
                            <input type="text" class="form-control" name="tanggal_awal" id="tanggal_awal" value="01 January 2022" placeholder="Tanggal Awal" readonly="">
                            <span class="input-group-addon">Sampai</span>
                            <input type="text" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="10 January 2023" placeholder="Tanggal Akhir" readonly="">
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">
                    </label>

                    <div class="col-md-4">
                        <button type="submit" name="btncari" class="btn btn-primary">Tampilkan</button>
                        <button type="reset" name="btnReset" class="btn btn-warning">Reset</button> 
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
                <a class="btn btn-primary btn-outline btn-3d mr-5" style="display: none;" href="/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=ExcelLapPosisiKeuangan&amp;act=view&amp;typ=xlsx&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;cetak=yes" title="Export Excel" target="_blank"><i class="fa fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-outline btn-3d" href="javascript:void(0)" onclick="bukaPopupCetak('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=CetakLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;cetak=yes')" title="Cetak"><i class="ion-printer"></i> Cetak</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-stipe table-hover">
                <thead>
                    <tr>
                        <th align="left" rowspan="2">Uraian</th>
                        <th width="250"> 2022</th>
                    </tr>
                    <tr>
                        <th width="250">Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 15px;"><h2>AKTIVA</h2></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;"><b>Aktiva Lancar</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;"><b>Kas dan Setara Kas</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 60px;"><b>Kas dan Setara Kas Tidak Terikat</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Petty Cash</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=444', '', 500, 400)" title="Lihat Detail">
                                10.000.000,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Bank</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=445', '', 500, 400)" title="Lihat Detail">
                                23.000.000,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;"><b>Deposito</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 60px;">Deposito Tidak Terikat</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=297', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Investasi Jangka Pendek</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=208', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Piutang</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=226', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Piutang Lain-Lain</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=303', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Uang Muka/ Panjar</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=228', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Biaya Dibayar Dimuka</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=204', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;"><b>Aset Tidak Lancar</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Properti Investasi</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=230', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;"><b>Aset Tetap</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 60px;"><b>Aset Tetap Tidak Terikat</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Gedung dan Bangunan</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=306', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Kendaraan</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=307', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Alat Telekomunikasi</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=308', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 75px;">Peralatan dan Mesin</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=309', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Aset Tidak Berwujud</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=345', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Investasi Jangka Panjang</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=346', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Aset Lainnya</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=347', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;font-weight:bold">JUMLAH ASET</td>
                    
                            
                        <td align="right">
                            <b>33.000.000,00</b>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 15px;"><h2>LIABILITAS</h2></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;"><b>Liabilitas Lancar</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Hutang Usaha</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=320', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Hutang Pegawai</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=234', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Biaya yang Masih Harus Dibayar</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=235', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Pendapatan Diterima Dimuka</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=349', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Hutang Pajak</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=350', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;"><b>Liabilitas Jangka Panjang</b></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 45px;">Hutang Jangka Panjang</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=418', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;font-weight:bold">Jumlah Liabilitas</td>
                    
                            
                        <td align="right">
                            <b>0,00</b>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 15px;"><h2>ASET NETO</h2></td>
                    
                            
                        <td align="right"></td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;">Aset Neto Tidak Terikat</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=239', '', 500, 400)" title="Lihat Detail">
                                33.000.000,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;">Aset Neto Terikat Temporer</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=325', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;">Aset Neto Terikat Permanen</td>
                    
                            
                        <td align="right">
                            <a href="javascript:void(0)" onclick="showPopup('/ekeuanganpts/index.php?mod=lap_posisi_keuangan_sementara&amp;sub=DetilLapPosisiKeuangan&amp;act=view&amp;typ=html&amp;tanggal_awal=2022-01-01&amp;tanggal_akhir=2023-01-10&amp;kellap_id=326', '', 500, 400)" title="Lihat Detail">
                                0,00
                            </a>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 30px;font-weight:bold">Jumlah Aset Neto</td>
                    
                            
                        <td align="right">
                            <b>33.000.000,00</b>
                        </td>
                        
                    </tr>
                    
                    <tr class="table-padding">
                        <td style="padding-left: 15px;font-weight:bold">JUMLAH LIABILITAS DAN ASET NETO</td>
                    
                            
                        <td align="right">
                            <b>33.000.000,00</b>
                        </td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
	$('#datepicker-range').datepicker({
      autoclose: true,
      format: 'dd MM yyyy',
      orientation: 'bottom'
    });
</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>