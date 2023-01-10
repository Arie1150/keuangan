<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=236&amp;mid=236">Laporan Anggaran</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=lap_program_kegiatan&amp;sub=LapProgramKegiatanParent&amp;act=view&amp;typ=html">Laporan Program Kegiatan</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Laporan Program Kegiatan
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
  function formatNumber(num)
  {
         var num;
         var thousand = '.';
         var multiplier = Math.pow(10, 0);
         
         num = parseFloat(num);
         if (isNaN(num)) num = 0;
         if (num.toString().indexOf('e') != -1) return 'Out of range';
         num = (Math.round(num * multiplier)) / multiplier;
         
         var str = num.toString().split('.');
         var quotient = str[0];
         
         var x = quotient.length % 3;
         var newQuotient = quotient.substr(0, x);
         
         for (var i = x; i < quotient.length; i += 3)
            newQuotient += thousand + quotient.substr(i, 3);
         if (newQuotient.charAt(0) == thousand) newQuotient = newQuotient.substr(1);
         
         return newQuotient;
         
   }
   
    function expandProgramKegiatan(id){
            document.getElementById('status_expand_'+id).value = 1;
    }
    function collapseProgramKegiatan(id){
        
            document.getElementById('status_expand_'+id).value = 0;
    
    }
    
    function getNominalTotalKomponenExpand(id){
            document.getElementById('status_expand_'+id).value = 1;
                
    }

    function getNominalTotalKomponenCollapse(id){
            document.getElementById('status_expand_'+id).value = 0;
                 
    }
    
    /**
     * tipe : 11 untuk biaya langsung tetap
     * tipe : 10 untuk biaya langsung tak tetap
     * tipe : 01 untuk biaya tak langsung tetap
     * tipe : 00 untuk biaya tak langsung tak tetap
     */
    function getTotalBiaya(id,tipe,id_parent,id_up_parent,id_top_parent){
        /**
         * untuk mengetahui jumlah hit pada radio button
         */
        var counter_lt = document.getElementById('counter_lt_'+id);
        var counter_ltt = document.getElementById('counter_ltt_'+id);
        var counter_tlt = document.getElementById('counter_tlt_'+id);
        var counter_tltt = document.getElementById('counter_tltt_'+id);
        var c_lt=0;
        var c_ltt=0;
        var c_tlt=0;
        var c_tltt=0;
        c_lt =(tipe.value == 11) ? (c_lt = parseFloat(counter_lt.value) + 1) : c_lt;
        c_ltt =(tipe.value ==  10) ? (c_ltt = parseFloat(counter_ltt.value) + 1) : c_ltt;
        c_tlt =(tipe.value == 01) ? (c_tlt = parseFloat(counter_tlt.value) + 1) : c_tlt;
        c_tltt =( tipe.value == 00) ? (c_tltt = parseFloat(counter_tltt.value) + 1) : c_tltt;
        /**
         * untuk mengatahui posisi radio button
         */
        var posisi = document.getElementById('posisi_'+id); 
        var b_pos = posisi.value;
        posisi.value = tipe.value;
        document.getElementById('posisi_lama_'+id).value = b_pos;
       
       /**
        * mendapatkan nilai komponen
        */         
        var biaya = document.getElementById('komponen_'+id).value;
        /**
         * nilai total komponen per sub kegiatan
         */
        var b_lt = document.getElementById('total_komp_blt_'+id_parent);
        var b_ltt = document.getElementById('total_komp_bltt_'+id_parent);
        var b_tlt = document.getElementById('total_komp_btlt_'+id_parent);
        var b_tltt = document.getElementById('total_komp_btltt_'+id_parent);
        
        /** up parent - kegiatan **/
        var total_up_komp_blt = document.getElementById('total_komp_blt_'+id_up_parent);
        var total_up_komp_bltt = document.getElementById('total_komp_bltt_'+id_up_parent);
        var total_up_komp_btlt = document.getElementById('total_komp_btlt_'+id_up_parent);
        var total_up_komp_btltt = document.getElementById('total_komp_btltt_'+id_up_parent);

        /** top parent - program **/
        var total_top_komp_blt = document.getElementById('total_komp_blt_'+id_top_parent);
        var total_top_komp_bltt = document.getElementById('total_komp_bltt_'+id_top_parent);
        var total_top_komp_btlt = document.getElementById('total_komp_btlt_'+id_top_parent);
        var total_top_komp_btltt = document.getElementById('total_komp_btltt_'+id_top_parent);

        /**
         * nilai total semua komponen
         */
        var t_b_lt = document.getElementById('b_langsung_tetap');
        var t_b_ltt = document.getElementById('b_langsung_tak_tetap');
        var t_b_tlt = document.getElementById('b_tak_langsung_tetap');
        var t_b_tltt = document.getElementById('b_tak_langsung_tak_tetap');
        
        /**
         * label nilai total semua komponen
         */       
        var lbl_b_lt = document.getElementById('label_b_langsung_tetap');
        var lbl_b_ltt = document.getElementById('label_b_langsung_tak_tetap');
        var lbl_b_tlt = document.getElementById('label_b_tak_langsung_tetap');
        var lbl_b_tltt = document.getElementById('label_b_tak_langsung_tak_tetap');
        
        /** per sub kegiatan **/
        v_b_lt = (b_lt.value == '') ? parseFloat('0') : parseFloat(b_lt.value);
        v_b_ltt = (b_ltt.value == '') ? parseFloat('0') : parseFloat(b_ltt.value);
        v_b_tlt = (b_tlt.value == '') ? parseFloat('0') : parseFloat(b_tlt.value);
        v_b_tltt = (b_tltt.value == '') ? parseFloat('0') : parseFloat(b_tltt.value);
        
        /** total semua komponen **/
        v_t_b_lt = (t_b_lt.value == '') ? parseFloat('0') : parseFloat(t_b_lt.value);
        v_t_b_ltt = (t_b_ltt.value == '') ? parseFloat('0') : parseFloat(t_b_ltt.value);
        v_t_b_tlt = (t_b_tlt.value == '') ? parseFloat('0') : parseFloat(t_b_tlt.value);
        v_t_b_tltt = (t_b_tltt.value == '') ? parseFloat('0') : parseFloat(t_b_tltt.value);
  
        /** total per kegiatan **/
        total_up_komp_blt = (total_up_komp_blt.value =='') ? parseFloat('0') : parseFloat(total_up_komp_blt.value);
        total_up_komp_bltt = (total_up_komp_bltt.value =='') ? parseFloat('0') : parseFloat(total_up_komp_bltt.value);
        total_up_komp_btlt = (total_up_komp_btlt.value =='') ? parseFloat('0') : parseFloat(total_up_komp_btlt.value);
        total_up_komp_btltt = (total_up_komp_btltt.value =='') ? parseFloat('0') : parseFloat(total_up_komp_btltt.value);
        
        /** total per program **/
        total_top_komp_blt = (total_top_komp_blt.value =='') ? parseFloat('0') : parseFloat(total_top_komp_blt.value);
        total_top_komp_bltt = (total_top_komp_bltt.value =='') ? parseFloat('0') : parseFloat(total_top_komp_bltt.value);
        total_top_komp_btlt = (total_top_komp_btlt.value =='') ? parseFloat('0') : parseFloat(total_top_komp_btlt.value);
        total_top_komp_btltt = (total_top_komp_btltt.value =='') ? parseFloat('0') : 
                                                parseFloat(total_top_komp_btltt.value);
        
        
        v_biaya = parseFloat(biaya);
        
        if(tipe.value == 11){
             if(c_lt ==1){
                v_b_lt += v_biaya;
                v_t_b_lt += v_biaya;
                total_up_komp_blt += v_biaya;
                total_top_komp_blt += v_biaya;
             
             /** per sub kegiatan **/
             v_b_ltt = (b_pos == 10 && v_b_ltt != 0) ? (v_b_ltt-= v_biaya) : v_b_ltt;
             v_b_tlt = (b_pos == 01 && v_b_tlt != 0) ? (v_b_tlt-= v_biaya) : v_b_tlt;
             v_b_tltt = (b_pos == 00 && v_b_tltt != 0) ? (v_b_tltt-= v_biaya) : v_b_tltt;
             
             /** total semua komponen **/
             v_t_b_ltt = (b_pos == 10 && v_t_b_ltt != 0) ? (v_t_b_ltt-= v_biaya) : v_t_b_ltt;
             v_t_b_tlt = (b_pos == 01 && v_t_b_tlt != 0) ? (v_t_b_tlt-= v_biaya) : v_t_b_tlt;
             v_t_b_tltt = (b_pos == 00 && v_t_b_tltt != 0) ? (v_t_b_tltt-= v_biaya) : v_t_b_tltt;
             
             /** per kegiatan */
             total_up_komp_bltt = (b_pos == 10 && total_up_komp_bltt != 0) ? 
                                        (total_up_komp_bltt-= v_biaya) : total_up_komp_bltt;
             total_up_komp_btlt = (b_pos == 01 && total_up_komp_btlt != 0) ? 
                                        (total_up_komp_btlt-= v_biaya) : total_up_komp_btlt;
             total_up_komp_btltt = (b_pos == 00 && total_up_komp_btltt != 0) ? 
                                        (total_up_komp_btltt-= v_biaya) : total_up_komp_btltt;
            
            /** per program **/
             total_top_komp_bltt = (b_pos == 10 && total_top_komp_bltt != 0) ? 
                                        (total_top_komp_bltt-= v_biaya) : total_top_komp_bltt;
             total_top_komp_btlt = (b_pos == 01 && total_top_komp_btlt != 0) ? 
                                        (total_top_komp_btlt-= v_biaya) : total_top_komp_btlt;
             total_top_komp_btltt = (b_pos == 00 && total_top_komp_btltt != 0) ? 
                                        (total_top_komp_btltt-= v_biaya) : total_top_komp_btltt;
             }

        }else if(tipe.value == 10){
             if(c_ltt == 1){
                v_b_ltt += v_biaya;
                v_t_b_ltt += v_biaya;
                total_up_komp_bltt += v_biaya;
                total_top_komp_bltt += v_biaya;
             
             /** per sub kegiatan **/
             v_b_lt = (b_pos == 11 && v_b_lt != 0) ? (v_b_lt-= v_biaya) : v_b_lt;
             v_b_tlt = (b_pos == 01 && v_b_tlt != 0) ? (v_b_tlt-= v_biaya) : v_b_tlt;
             v_b_tltt = (b_pos == 00 && v_b_tltt != 0) ? (v_b_tltt-= v_biaya) : v_b_tltt;

            /** total semua komponen **/
             v_t_b_lt = (b_pos == 11 && v_t_b_lt != 0) ? (v_t_b_lt-= v_biaya) : v_t_b_lt;
             v_t_b_tlt = (b_pos == 01 && v_t_b_tlt != 0) ? (v_t_b_tlt-= v_biaya) : v_t_b_tlt;
             v_t_b_tltt = (b_pos == 00 && v_t_b_tltt != 0) ? (v_t_b_tltt-= v_biaya) : v_t_b_tltt;

             /** per kegiatan */
             total_up_komp_blt = (b_pos == 11 && total_up_komp_blt != 0) ? 
                                        (total_up_komp_blt-= v_biaya) : total_up_komp_blt;
             total_up_komp_btlt = (b_pos == 01 && total_up_komp_btlt != 0) ? 
                                        (total_up_komp_btlt-= v_biaya) : total_up_komp_btlt;
             total_up_komp_btltt = (b_pos == 00 && total_up_komp_btltt != 0) ? 
                                        (total_up_komp_btltt-= v_biaya) : total_up_komp_btltt;
            
            /** per program **/
             total_top_komp_blt = (b_pos == 11 && total_top_komp_blt != 0) ? 
                                        (total_top_komp_blt-= v_biaya) : total_top_komp_blt;
             total_top_komp_btlt = (b_pos == 01 && total_top_komp_btlt != 0) ? 
                                        (total_top_komp_btlt-= v_biaya) : total_top_komp_btlt;
             total_top_komp_btltt = (b_pos == 00 && total_top_komp_btltt != 0) ? 
                                        (total_top_komp_btltt-= v_biaya) : total_top_komp_btltt;
             
             }
        }else if(tipe.value == 01){
             if(c_tlt == 1){
                v_b_tlt += v_biaya;
                v_t_b_tlt += v_biaya;
                total_up_komp_btlt += v_biaya;
                total_top_komp_btlt += v_biaya;
             
             /** per sub kegiatan **/
             v_b_lt = (b_pos == 11 && v_b_lt != 0) ?    (v_b_lt-= v_biaya) : v_b_lt ;
             v_b_ltt = (b_pos == 10 && v_b_ltt != 0) ?     (v_b_ltt-= v_biaya) : v_b_ltt;
             v_b_tltt = (b_pos == 00 && v_b_tltt != 0) ?  (v_b_tltt-= v_biaya) :  v_b_tltt;

            /** total semua komponen **/
             v_t_b_lt = (b_pos == 11 && v_t_b_lt != 0) ?    (v_t_b_lt-= v_biaya) : v_t_b_lt ;
             v_t_b_ltt = (b_pos == 10 && v_t_b_ltt != 0) ?     (v_t_b_ltt-= v_biaya) : v_t_b_ltt;
             v_t_b_tltt = (b_pos == 00 && v_t_b_tltt != 0) ?  (v_t_b_tltt-= v_biaya) :  v_t_b_tltt;

             /** per kegiatan */
             total_up_komp_blt = (b_pos == 11 && total_up_komp_blt != 0) ? 
                                        (total_up_komp_blt-= v_biaya) : total_up_komp_blt;
             total_up_komp_bltt = (b_pos == 10 && total_up_komp_bltt != 0) ? 
                                        (total_up_komp_bltt-= v_biaya) : total_up_komp_bltt;
             total_up_komp_btltt = (b_pos == 00 && total_up_komp_btltt != 0) ? 
                                        (total_up_komp_btltt-= v_biaya) : total_up_komp_btltt;
            
            /** per program **/
             total_top_komp_blt = (b_pos == 11 && total_top_komp_blt != 0) ? 
                                        (total_top_komp_blt-= v_biaya) : total_top_komp_blt;
             total_top_komp_bltt = (b_pos == 10 && total_top_komp_bltt != 0) ? 
                                        (total_top_komp_bltt-= v_biaya) : total_top_komp_bltt;
             total_top_komp_btltt = (b_pos == 00 && total_top_komp_btltt != 0) ? 
                                        (total_top_komp_btltt-= v_biaya) : total_top_komp_btltt;

            }              
        }else if(tipe.value == 00){
             if(c_tltt == 1){
                    v_b_tltt += v_biaya;
                    v_t_b_tltt += v_biaya;
                    total_up_komp_btltt += v_biaya;
                    total_top_komp_btltt += v_biaya;
             
             /** per sub kegiatan **/
             v_b_lt = (b_pos == 11 && v_b_lt != 0) ? (v_b_lt-= v_biaya) : v_b_lt;
             v_b_ltt = (b_pos == 10 && v_b_ltt != 0) ? (v_b_ltt-= v_biaya) : v_b_ltt;
             v_b_tlt = (b_pos == 01 && v_b_tltt != 0) ? (v_b_tlt-= v_biaya) : v_b_tlt;

            /** total semua komponen **/
             v_t_b_lt = (b_pos == 11 && v_t_b_lt != 0) ? (v_t_b_lt-= v_biaya) : v_t_b_lt;
             v_t_b_ltt = (b_pos == 10 && v_t_b_ltt != 0) ? (v_t_b_ltt-= v_biaya) : v_t_b_ltt;
             v_t_b_tlt = (b_pos == 01 && v_t_b_tltt != 0) ? (v_t_b_tlt-= v_biaya) : v_t_b_tlt;

             /** per kegiatan */
             total_up_komp_blt = (b_pos == 11 && total_up_komp_blt != 0) ? 
                                        (total_up_komp_blt-= v_biaya) : total_up_komp_blt;
             total_up_komp_bltt = (b_pos == 10 && total_up_komp_bltt != 0) ? 
                                        (total_up_komp_bltt-= v_biaya) : total_up_komp_bltt;
             total_up_komp_btlt = (b_pos == 01 && total_up_komp_btlt != 0) ? 
                                        (total_up_komp_btlt-= v_biaya) : total_up_komp_btlt;
            
            /** per program **/
             total_top_komp_blt = (b_pos == 11 && total_top_komp_blt != 0) ? 
                                        (total_top_komp_blt-= v_biaya) : total_top_komp_blt;
             total_top_komp_bltt = (b_pos == 10 && total_top_komp_bltt != 0) ? 
                                        (total_top_komp_bltt-= v_biaya) : total_top_komp_bltt;
             total_top_komp_btlt = (b_pos == 01 && total_top_komp_btlt != 0) ? 
                                        (total_top_komp_btlt-= v_biaya) : total_top_komp_btlt;
             }
        }
        
        /**
         * isi nilai total komponen per sub kegiatan
         */
        b_lt.value = v_b_lt.toString();
        b_ltt.value = v_b_ltt.toString();
        b_tlt.value = v_b_tlt.toString();
        b_tltt.value = v_b_tltt.toString();        
        
        document.getElementById('total_komp_blt_'+id_parent).value =v_b_lt.toString();
        document.getElementById('total_komp_bltt_'+id_parent).value =v_b_ltt.toString();
        document.getElementById('total_komp_btlt_'+id_parent).value =v_b_tlt.toString();
        document.getElementById('total_komp_btltt_'+id_parent).value =v_b_tltt.toString();
        document.getElementById('label_total_komp_blt_'+id_parent).innerHTML = formatNumber(v_b_lt);
        document.getElementById('label_total_komp_bltt_'+id_parent).innerHTML = formatNumber(v_b_ltt);
        document.getElementById('label_total_komp_btlt_'+id_parent).innerHTML = formatNumber(v_b_tlt);
        document.getElementById('label_total_komp_btltt_'+id_parent).innerHTML = formatNumber(v_b_tltt);

        
        /** kegiatan **/
        document.getElementById('total_komp_blt_'+id_up_parent).value =total_up_komp_blt.toString();
        document.getElementById('total_komp_bltt_'+id_up_parent).value =total_up_komp_bltt.toString();
        document.getElementById('total_komp_btlt_'+id_up_parent).value =total_up_komp_btlt.toString();
        document.getElementById('total_komp_btltt_'+id_up_parent).value =total_up_komp_btltt.toString();
        document.getElementById('label_total_komp_blt_'+id_up_parent).innerHTML = formatNumber(total_up_komp_blt);
        document.getElementById('label_total_komp_bltt_'+id_up_parent).innerHTML = formatNumber(total_up_komp_bltt);
        document.getElementById('label_total_komp_btlt_'+id_up_parent).innerHTML = formatNumber(total_up_komp_btlt);
        document.getElementById('label_total_komp_btltt_'+id_up_parent).innerHTML = formatNumber(total_up_komp_btltt);
        
        /** program **/
        document.getElementById('total_komp_blt_'+id_top_parent).value =total_top_komp_blt.toString();
        document.getElementById('total_komp_bltt_'+id_top_parent).value =total_top_komp_bltt.toString();
        document.getElementById('total_komp_btlt_'+id_top_parent).value =total_top_komp_btlt.toString();
        document.getElementById('total_komp_btltt_'+id_top_parent).value =total_top_komp_btltt.toString();
        document.getElementById('label_total_komp_blt_'+id_top_parent).innerHTML = formatNumber(total_top_komp_blt);
        document.getElementById('label_total_komp_bltt_'+id_top_parent).innerHTML = formatNumber(total_top_komp_bltt);
        document.getElementById('label_total_komp_btlt_'+id_top_parent).innerHTML = formatNumber(total_top_komp_btlt);
        document.getElementById('label_total_komp_btltt_'+id_top_parent).innerHTML = formatNumber(total_top_komp_btltt);

        /**
         * isi nilai dan label total semua komponen
         */
        t_b_lt.value = v_t_b_lt.toString();
        t_b_ltt.value = v_t_b_ltt.toString();
        t_b_tlt.value = v_t_b_tlt.toString();
        t_b_tltt.value = v_t_b_tltt.toString();
        
        lbl_b_lt.innerHTML = formatNumber(v_t_b_lt);
        lbl_b_ltt.innerHTML = formatNumber(v_t_b_ltt);
        lbl_b_tlt.innerHTML = formatNumber(v_t_b_tlt);
        lbl_b_tltt.innerHTML = formatNumber(v_t_b_tltt);       

        /**
         * menyimpan variable hit/counter pada komponen html
         */
        document.getElementById('counter_lt_'+id).value = c_lt.toString();        
        document.getElementById('counter_ltt_'+id).value =c_ltt.toString();
        document.getElementById('counter_tlt_'+id).value = c_tlt.toString();
        document.getElementById('counter_tltt_'+id).value = c_tltt.toString();              
    }
	function deleteObj(id){
		$('#'+id).html('');
	}

	var xpopup = false;

	function focusPopup() {
		if(xpopup) xpopup.focus();
		return true;
	}

	function cetak(url) {
		window.open(url,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
		xpopup='xpopup';
	}

	function bukaPopupCetak(grp) {
		window.open('/ekeuanganpts/index.php?mod=lap_program_kegiatan&sub=cetakProgramKegiatan&act=view&typ=html&grp=' + grp,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
		xpopup='xpopup';
	}

   function bukaPopupCetakRtf(grp) {
		window.open('&grp=' + grp,'xpopup','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
		xpopup='xpopup';
	}

	function popupUnitKerja(action) {

		showPopup('/ekeuanganpts/index.php?mod=lap_program_kegiatan&sub=PopupUnitKerja&act=view&typ=html','Unit Kerja', 550, 500)

	}

	function popupSubUnitKerja() {
	    var url = '';
		var unit_id   = document.getElementById('unit_id').value;
		var unit_nama = document.getElementById('unit_nama_ro').value;


		if(unit_id=='') {
		    alert('Anda Harus Memilih Unit Kerja Dulu');
		    return false;
	    } else {
		     url = url + '&satker=' + unit_id + '&satker_label=' + unit_nama;
			 showPopup(url,'',550,500)

		}


	}

	function resetFormIni() {
		GtfwAjax.replaceContentWithUrl("subcontent-element","/ekeuanganpts/index.php?mod=lap_program_kegiatan&sub=lapProgramKegiatanParent&act=view&typ=html&ascomponent=1");
		/**
		if(document.getElementById('subunit_id')) document.getElementById('subunit_id').value='';
		if(document.getElementById('subunit_nama_ro')) document.getElementById('subunit_nama_ro').innerHTML='';
		if(document.getElementById('subunit_nama_hidden')) document.getElementById('subunit_nama_hidden').value='';
		*/
	}

    function klikFormCetak(url)
    {
        // untuk mengarahkan form target pada action form, menjadi popup
        document.lap_program.target = 'popUp';
        window.open(url,'popUp','width=900,height=600,resizable=yes,scrollbars=yes,right=0;center');
        document.lap_program.action = url;
        document.lap_program.submit();
        
    }
    
    function klikFormExcel(url)
    {
        // untuk mengarahkan form target pada action form
        document.lap_program.target = '_self';
        document.lap_program.action = url;
        document.lap_program.submit();
        
    }    
    document.onmousedown=focusPopup();

</script>
<style type="text/css" media="screen">
/* <![CDATA[ */
    table.table-common tr.table-yellow td{
        background-color: #FFFF66;
    }
    
/* ]]> */
</style>
<div class="panel panel-default">
		<div class="panel-heading">
			  <span class="panel-title">
				  Pencarian
			  </span>
		</div>
		<div class="panel-body">
			  <form method="POST" action="/ekeuanganpts/index.php?mod=lap_program_kegiatan&amp;sub=lapProgramKegiatanParent&amp;act=view&amp;typ=html" id="filterbox" name="filterbox" class="xhr_simple_form dest_subcontent-element form-horizontal">
					  <div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <div class="form-group">
								  <label class="col-md-3 control-label">
									  Tahun Periode
								  </label>
								  <div class="col-md-7">
                                        
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="data[ta_id]" class="form-control">
	
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
						  </div>
						  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">     
                                <div class="form-group">
                                        <label class="col-md-3 control-label">
                                              Unit Kerja
                                        </label><div class="col-md-7">                  
                                            
                                                   <div class="input-group"> 
                                                    <input type="text" name="data[unit_nama][readonly]" id="unit_nama_ro" readonly="readonly" class="form-control" size="35" value="UNIVERSITAS">
                                                       <div class="input-group-btn">
                                                          <button class="btn btn-default" type="button" onclick="javascript:popupUnitKerja()">
                                                             <i class="fa fa-search"></i>
                                                          </button>
                                                       </div>
                                                 </div>  
                                                  
                                                <input type="hidden" name="data[unit_nama]" id="unit_nama_hidden" value="UNIVERSITAS" size="25">
                                                <input type="hidden" name="data[unit_id]" id="unit_id" value="1" size="25">
                                          </div>
                                    </div>   
							  <div class="form-group">
									  <label class="control-label col-md-3">
									  </label>
  
									  <div class="col-md-7">
											<input type="submit" name="btnTampilkan" value="Tampilkan »" class="btn btn-primary">
											<input type="reset" name="btnReset" value="Reset" class="btn btn-warning">
									  </div>
							  </div>
						  </div>
					  </div>
				  </form>
		</div>
  </div>  

   

   <br>
<form id="lap_program" name="lap_program" class="xhr_simple_form dest_subcontent-element" method="POST" target="popUp">
     <input type="hidden" name="th_anggar" value="9" id="th_anggar">
     <input type="hidden" name="th_anggar_nama" value="2023" id="th_anggar_nama">     
     <input type="hidden" name="unit_nama" value="UNIVERSITAS" id="unit_nama">


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
                        <a href="javascript:void(0)" onclick="klikFormCetak('/ekeuanganpts/index.php?mod=lap_program_kegiatan&amp;sub=cetakProgramKegiatan&amp;act=view&amp;typ=html')" title="Cetak" class="btn btn-flat btn-default mr-5">
                            <i class="ion-printer"></i>  Cetak
                        </a>
                        <a class="btn btn-flat btn-default" href="javascript:void(0)" onclick="klikFormExcel('/ekeuanganpts/index.php?mod=lap_program_kegiatan&amp;sub=excelLapProgramKegiatan&amp;act=view&amp;typ=xls')" title="Export Xls"> 
                             <i class="fa fa-file-excel-o"></i> Export Xls
                        </a> 
            </div>
         </div>
         
         <div class="table-responsive">
            <table class="table table-bordered table-stipe table-hover" id="program_kegiatan">
                    <thead>
                            <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Kode</th>
                                    <th rowspan="2">Uraian</th>
                                    <th rowspan="2">Unit Kerja</th>
                                    <th colspan="4">BIAYA</th>
                                    <th rowspan="2">Kuantitas</th>
                                    <th rowspan="2">Nilai Satuan</th>
                                    <th rowspan="2">Jumlah</th>
                                   </tr>
                                   <tr>
                                   <th>Langsung<br>
                                   Tetap</th>
                                    <th>Langsung<br>
                                    Tidak Tetap</th>
                                    <th>Tidak Langsung<br>
                                    Tetap</th>
                                    <th>Tidak Langsung<br>
                                    Tidak Tetap</th>
                                    </tr> 
                    </thead>
                    
                    <tbody>
                        
                        <tr id="27" class="27">
                            <td>
                                <a href="#" class="expand" onclick="expandProgramKegiatan('27')">
                                    <img src="images/jftree/nolines_plus.gif"></a>
                                <a href="#" class="collapse" onclick="collapseProgramKegiatan('27')" style="display: none;">
                                    <img src="images/jftree/nolines_minus.gif"></a>
                                <input type="hidden" id="status_expand_27" name="status_expand_27" value="0">
                    
                            </td>
                            <td>
                                <strong>00</strong>
                                <input type="hidden" name="pk[id][]" value="27">
                                <input type="hidden" name="pk[kode][]" value="00">
                                <input type="hidden" name="pk[tipe][]" value="1">
                            </td>
                            <td>
                                <strong>Kegiatan Pendidikan Perguruan Tinggi</strong>
                                <input type="hidden" name="pk[nama][]" value="Kegiatan Pendidikan Perguruan Tinggi">
                            </td>
                            <td>&nbsp;</td>
                            <td align="right"><strong>
                                    <label id="label_total_komp_blt_27">0</label></strong>
                                <input type="hidden" name="total_komp_blt_27" id="total_komp_blt_27" value="0.00"></td>
                            <td align="right"><strong>
                                    <label id="label_total_komp_bltt_27">0</label></strong>
                                <input type="hidden" name="total_komp_bltt_27" id="total_komp_bltt_27" value="0.00"></td>
                            <td align="right"><strong>
                                    <label id="label_total_komp_btlt_27">0</label></strong>
                                <input type="hidden" name="total_komp_btlt_27" id="total_komp_btlt_27" value="0.00"></td>
                            <td align="right"><strong>
                                    <label id="label_total_komp_btltt_27">118.000.000</label></strong>
                                <input type="hidden" name="total_komp_btltt_27" id="total_komp_btltt_27" value="118000000.00"></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="child-of-27 child-placeholder" style="display: none;"></tr>
                        
                    
                    </tbody>
                    <tfoot>
                        <tr><td align="center" colspan="4">
                            <strong>Total</strong></td>
                        <td align="right"><strong>
                                    <label id="label_b_langsung_tetap">0</label></strong>
                                    <input type="hidden" id="b_langsung_tetap" name="tb_lt" value="0">
                        </td>
                        <td align="right"><strong>
                                    <label id="label_b_langsung_tak_tetap">0</label></strong>
                                    <input type="hidden" id="b_langsung_tak_tetap" name="tb_ltt" value="0">
                        </td>
                        <td align="right"><strong>
                                    <label id="label_b_tak_langsung_tetap">0</label></strong>
                                    <input type="hidden" id="b_tak_langsung_tetap" name="tb_tlt" value="0">
                        </td>
                        <td align="right"><strong>
                                    <label id="label_b_tak_langsung_tak_tetap">118.000.000</label></strong>
                                    <input type="hidden" id="b_tak_langsung_tak_tetap" name="tb_tltt" value="118000000">
                        </td>
                        <td colspan="3">&nbsp;</td>
                    </tr></tfoot> 
                               
                    </table> 
            
        </div>
        </div>
      </div> 
 

</form>
   
   
 <script language="javascript" type="text/javascript">
     $(document).ready(function() {
      $('#program_kegiatan').lazyTreeTable({
        childFetchPath: '/ekeuanganpts/index.php?mod=lap_program_kegiatan&sub=lapProgramKegiatanAsyn&act=view&typ=html&ascomponent=1&ta=9&unit_id=1',
        //zebraStriping: {enabled: true, odd_class: 'alt', even_class: ''}
      });
    });
 </script>  

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>