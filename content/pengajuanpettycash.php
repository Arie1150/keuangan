<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=532&amp;mid=532">Petty Cash</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=finansi_pettycash_usulan&amp;sub=InputPettycashUsulan&amp;act=view&amp;typ=html">Pengajuan Petty Cash</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Pengajuan Petty Cash
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>


<div class="panel panel-default">
	<div class="panel-heading">
	   <span class="panel-title">
		   <b>Tambah</b> <small>Usulan Petty Cash</small>
	   </span>
	</div>
	<form method="POST" action="/ekeuanganpts/index.php?mod=finansi_pettycash_usulan&amp;sub=SavePettycash&amp;act=do&amp;typ=json" data-target="/ekeuanganpts/index.php?mod=finansi_pettycash_usulan&amp;sub=PettycashUsulan&amp;act=view&amp;typ=html" class="xhr_form std_form dest_subcontent-element form-horizontal" id="frmInput" name="frmInput">
		<div class="panel-body">
            <div class="btn-toolbar mb-15">
                <div class="btn-group pull-right"> 
                      <a class="xhr dest_subcontent-element btn btn-default btn-flat" href="/ekeuanganpts/index.php?mod=finansi_pettycash_usulan&amp;sub=PettycashUsulan&amp;act=view&amp;typ=html" title="Daftar Pengajuan Petty Cash">
                          <i class="fa fa-list-alt"></i> Daftar Pengajuan Petty Cash
                      </a>
                </div>
            </div>
            <div class="form-group">
				<label class="col-sm-3 control-label">
					Tahun Pembukuan
				</label>
				<div class="col-sm-6">  
                    <b>01 Januari 2022 s/d 31 Desember 2022</b> <input type="hidden" name="tpp_id" value="1">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label required">
					Unit Kerja
				</label>
				<div class="col-sm-3">
               <div class="input-group">                       
                  <input type="hidden" name="unit_id" id="unit_id" value="">
                  <input type="text" name="unit_nama" id="unit_nama" value="" size="50" readonly="" class="form-control">                            
                  <span class="input-group-btn btn-group-align-top">
                     <button type="button" onclick="javascript:showPopup('/ekeuanganpts/index.php?mod=finansi_pettycash_usulan&amp;sub=PopupUnitkerja&amp;act=view&amp;typ=html', 'Unit Kerja', 600, 500)" class="btn btn-default" nama="btn_popup_unit">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div> 
				</div>
			</div>
            <div class="form-group">
				<label class="col-sm-3 control-label required">
					Tanggal Pengajuan
				</label>
				<div class="col-sm-3">  
                    <input type="text" class="form-control" name="pc_tgl_pengajuan" id="pc_tgl_pengajuan" value="10 January 2023" readonly="readonly">
				</div>
			</div>
            <div class="form-group">
				<label class="col-sm-3 control-label required">
					Metode Pengisian
				</label>
				<div class="col-sm-3">  
                    
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="pc_metode_id" id="pc_metode_petty_cash" class="form-control" disabled="">
	
		<option value="">-- PILIH --</option>
	
		<option value="1">Fluktuatif</option>
	
		<option value="2" selected="">Imprest</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
                    <input type="hidden" name="pc_metode_id" value="2">
				</div>
			</div>
			<div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label required">
					Nomor SK
				</label>
				<div class="col-sm-3">
                    <input type="text" class="form-control" name="pc_nomor_sk" value="">
				</div>
			</div>
            <div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label required">
					Periode Petty Cash
				</label>
				<div class="col-sm-3">  
                    <div class="input-daterange input-group" id="datepicker-range">
                        <input type="text" class="form-control" name="pc_tgl_awal" id="pc_tgl_awal" value="10 January 2023" placeholder="Tanggal Awal" readonly="">
                        <span class="input-group-addon">s/d</span>
                        <input type="text" class="form-control" name="pc_tgl_akhir" id="pc_tgl_akhir" value="10 January 2023" placeholder="Tanggal Akhir" readonly="">
                    </div>
				</div>
			</div>
            <div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label">
					Saldo Sisa
				</label>
				<div class="col-sm-3">  
                    <b>Rp. <span id="saldo_sisa"></span></b>
				</div>
			</div>
            <div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label required">
					Saldo Penambahan
				</label>
				<div class="col-sm-3">  
                    <input name="pc_saldo_pengadaan" class="gvFloat form-control" id="pc_saldo_pengadaan" tipe="text" value="" style="text-align: right;">
				</div>
			</div>
            <div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label required">
					Nominal Maksimal Transaksi
				</label>
				<div class="col-sm-3">  
                    <input name="pc_nominal_max_trans" id="pc_nominal_max_trans" tipe="text" value="" class="gvFloat form-control" style="text-align: right;">
				</div>
			</div>
            <div class="form-group hide_pc" style="display: none;">
				<label class="col-sm-3 control-label required">
					Minimal Saldo Petty Cash
				</label>
				<div class="col-sm-3">  
                    <input name="pc_minimum_saldo" id="pc_minimum_saldo" tipe="text" value="" size="35" class="gvFloat form-control" style="text-align: right;">
				</div>
			</div>
            <div class="form-group">
                <label class="control-label col-md-3">
                </label>
                <div class="col-md-5">
                    <input type="submit" name="btnsimpan" value="Simpan" class="btn btn-primary" style="display: ">
                    <input type="reset" name="btnbalik" value="Batal" class="reset btn btn-danger">
                </div>
            </div>
		</div>	  	
        <div class="panel-footer">
			<div class="row">
		   	<div class="col-md-6">
			  		<small class="text-muted">
				 		Tanda <label class="required"></label> menunjukkan bahwa field tersebut harus diisi
			  		</small>
		 		</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
var ref_data = {"41":{"unit_kerja_id":"41","unit_kerja_nama":"REKTORAT","pc_tgl_periode_akhir":"2022-12-31","pc_saldo_pengadaan":"10000000.00","pc_metode_nama":"Imprest","pc_nominal_max_trans":"1000000.00","pc_minimum_saldo":"500000.00","saldo_penggunaan":"0.00","saldo_nominal":"10000000.00","saldo_sisa":"10000000.00","pc_nominal_max_trans_label":"1.000.000,00","pc_minimum_saldo_label":"500.000,00","saldo_sisa_label":"10.000.000,00"}};
console.log(document.frmInput.unit_id);
if(document.frmInput.unit_id.value == ''){
  $('.hide_pc').hide();
}

$(function () {
    $('#pc_tgl_pengajuan').datepicker({
      autoclose: true,
      format: 'dd MM yyyy',
      orientation: 'bottom'
    });
    $('#datepicker-range').datepicker({
      autoclose: true,
      format: 'dd MM yyyy',
      orientation: 'bottom'
    });
});


</script>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>