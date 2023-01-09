<div class="px-content" id="content">
    <div class="subcontent-element" id="subcontent-element">

        <div class="page-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 text-xs-center text-md-left text-nowrap">
                            <h1><i class="page-header-icon ion-ios-pulse-strong"></i>Dashboard</h1>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4 text-xs-center text-md-left text-nowrap  form-inline p-t-1">
                    <div class="form-group">
                        <b>Tahun Anggaran </b>:
                        <!-- FormHelper Content BEGIN -->


                        <select name="ta_id" id="tahun_anggaran_id" class="form-control" class="form-control">

                            <option value="">-- PILIH --</option>

                            <option value="13">2020</option>

                            <option value="1">2021</option>

                            <option value="6">2022</option>

                            <option value="9" SELECTED>2023</option>

                            <option value="10">2024</option>

                            <option value="12">2025</option>

                        </select>


                        <!-- FormHelper Content END-->

                        <script>
                            if (window.ButtonAccess) {
                                var ba = new ButtonAccess("");
                                ba.removeButton();
                            }
                        </script> <button onclick="setTahunAnggaran()" class="btn btn-primary">Tampilkan</button>
                    </div>
                </div>

                <hr class="page-wide-block visible-xs visible-sm">

                <!-- Spacer -->
                <div class="m-b-2 visible-xs visible-sm clearfix"></div>

            </div>
        </div>

        <div class="row">

            <!-- Stats -->



            <!-- / Stats -->

        </div>




        <script type="text/javascript" language="javascript" charset="utf-8">
            // -------------------------------------------------------------------------
            // Initialize Counter Animated

            jQuery(function($) {
                // custom formatting example
                $('.count-number').data('countToOptions', {
                    formatter: function(value, options) {
                        // return value.toFixed(options.decimals).replace(/\B(?=(?:\d)+(?!\d))/g, '.');
                        return formatCurrency(value);
                    }
                });

                // start all the timers
                $('.timer').each(count);

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                }
            });

            function formatCurrency(num) {
                num = num.toString().replace(/\$|\,/g, '');
                if (isNaN(num))
                    num = "0";
                sign = (num == (num = Math.abs(num)));
                num = Math.floor(num * 100 + 0.50000000001);
                cents = num % 100;
                num = Math.floor(num / 100).toString();
                if (cents < 10)
                    cents = "0" + cents;
                for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
                    num = num.substring(0, num.length - (4 * i + 3)) + '.' +
                    num.substring(num.length - (4 * i + 3));
                return (((sign) ? '' : '-') + num);
            }

            // -------------------------------------------------------------------------
            // Initialize datepicker

            $(function() {
                $('#datepicker-range').datepicker({
                    orientation: 'bottom right'
                });
            });
        </script>




        <script type="text/javascript" language="javascript" charset="utf-8">
            function contentUpdateBreadcrumb(bc_menu, url_menu, bc_submenu, url_submenu) {
                if (bc_menu != '') {
                    var li_menu = document.getElementById('li_menu');
                    var span_home = document.getElementById('span_home');
                    var span_menu = document.getElementById('span_menu');
                    var link_menu = document.getElementById('a_menu');

                    li_menu.style.display = 'inline';
                    span_home.setAttribute('onclick', "updateBreadcrumb('', '', '', '')");
                    span_menu.setAttribute('onclick', "updateBreadcrumb('" + bc_menu + "', '" + url_menu + "', '', '')");
                    link_menu.innerHTML = bc_menu;
                    link_menu.setAttribute('href', url_menu);

                } else {
                    var li_submenu = document.getElementById('li_submenu');
                    var link_submenu = document.getElementById('a_submenu');

                    li_submenu.style.display = 'inline';
                    link_submenu.innerHTML = bc_submenu;
                    link_submenu.setAttribute('href', url_submenu);
                }
            }

            // <![CDATA[
            function getFirstEarlyWarning() {
                $.get('/ekeuanganpts/index.php?mod=early_warning&sub=EarlyWarning&act=view&typ=html&ascomponent=1', function(data, textStatus, XMLHttpRequest) {
                    jLocation = "content";
                    url = '/ekeuanganpts/index.php?mod=early_warning&sub=EarlyWarning&act=view&typ=html&ascomponent=1';
                    jTitle = "Early Warning";
                    jValue = "Early Warning";
                    jsWindow(jLocation, jTitle, "<div class='subcontent-element'>" + data + '</div>', 'early_warning');
                });
            };

            function showModuleInform() {
                jsWindow("content", "Module Information", "<div class='subcontent-element' id='module_information_content'> &nbsp; </div>", 'module_information');
            }


            // -------------------------------------------------------------------------
            // Anggaran & Realisasi Pengeluaran

            $.ajax({
                type: "GET",
                url: '/ekeuanganpts/index.php?mod=home&sub=chartAnggRencReal&act=view&typ=json',
                dataType: "json",
                contentType: "application/json",
                crossDomain: true,
                success: function(data) {

                    var arrData = data

                    var chart = new Highcharts.Chart({
                        chart: {
                            type: 'column',
                            renderTo: 'chart_perbandingan_anggaran_realisasi'
                        },
                        title: {
                            text: 'Perbandingan Anggaran'
                        },
                        subtitle: {
                            text: 'Rencana Anggaran dan Realisasi Anggaran'
                        },
                        xAxis: {
                            categories: arrData.unit_kerja
                        },
                        yAxis: [{
                            min: 0,
                            title: {
                                text: 'Rencana & Realisasi'
                            }
                        }],
                        legend: {
                            shadow: false
                        },
                        tooltip: {
                            shared: true
                        },
                        plotOptions: {
                            column: {
                                grouping: false,
                                shadow: false,
                                borderWidth: 0
                            }
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'Rencana',
                            color: 'rgba(165,170,217,1)',
                            data: arrData.rencana,
                            pointPadding: 0.3,
                            pointPlacement: 0
                        }, {
                            name: 'Realisasi',
                            color: 'rgba(126,86,134,.9)',
                            data: arrData.realisasi,
                            pointPadding: 0.4,
                            pointPlacement: 0
                        }]
                    });
                }
            });


            // -------------------------------------------------------------------------
            // Target & Realisasi Penerimaan

            $.ajax({
                type: "GET",
                url: '/ekeuanganpts/index.php?mod=home&sub=chartTerimaRencReal&act=view&typ=json',
                dataType: "json",
                contentType: "application/json",
                crossDomain: true,
                success: function(data) {

                    var arrData = data

                    var chart = new Highcharts.Chart({
                        chart: {
                            type: 'column',
                            renderTo: 'chart_perbandingan_target_realisasi'
                        },
                        title: {
                            text: 'Perbandingan Penerimaan'
                        },
                        subtitle: {
                            text: 'Rencana Penerimaan dan Realisasi Penerimaan'
                        },
                        lang: {
                            drillUpText: 'Kembali'
                        },
                        accessibility: {
                            announceNewData: {
                                enabled: true
                            }
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: [{
                            min: 0,
                            title: {
                                text: 'Rencana & Realisasi'
                            }
                        }],
                        plotOptions: {
                            column: {
                                grouping: false,
                                shadow: false,
                                borderWidth: 0
                            }
                        },
                        legend: {
                            shadow: false
                        },
                        tooltip: {
                            shared: true
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'Rencana',
                            color: 'rgba(248,161,63,1)',
                            data: arrData.rencana,
                            pointPadding: 0.3,
                            pointPlacement: 0
                        }, {
                            name: 'Realisasi',
                            color: 'rgba(186,60,61,.9)',
                            data: arrData.realisasi,
                            pointPadding: 0.4,
                            pointPlacement: 0
                        }],
                        drilldown: {
                            series: arrData.detail_penerimaan
                        }
                    });
                }
            });


            // -------------------------------------------------------------------------
            // Anggaran Per Sumber Dana

            $.ajax({
                type: "GET",
                url: '/ekeuanganpts/index.php?mod=home&sub=chartAnggSumberDana&act=view&typ=json',
                dataType: "json",
                contentType: "application/json",
                crossDomain: true,
                success: function(data) {
                    var d = data
                    var name = Array();
                    var data = Array();
                    var dataArrayFinal = Array();
                    for (i = 0; i < d.length; i++) {
                        name[i] = d[i].name;
                        data[i] = d[i].data;
                    }

                    for (j = 0; j < name.length; j++) {
                        var temp = new Array(name[j], data[j]);
                        dataArrayFinal[j] = temp;
                    }

                    var chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'chart_anggaran_per_sumberdana',
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie',
                            innerSize: '50%',
                        },
                        title: {
                            text: 'Persentase Rencana Anggaran'
                        },
                        subtitle: {
                            text: 'Berdasarkan Sumber Dana'
                        },
                        tooltip: {
                            pointFormat: '{point.y}: <b>{point.percentage:.1f}%</b>'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                }
                            }
                        },
                        series: [{
                            data: dataArrayFinal
                        }],
                        credits: {
                            enabled: false
                        },
                    });
                }
            });


            // -------------------------------------------------------------------------
            // Target & Realisasi Penerimaan

            $.ajax({
                type: "GET",
                url: '/ekeuanganpts/index.php?mod=home&sub=chartPnbpPerAkun&act=view&typ=json',
                dataType: "json",
                contentType: "application/json",
                crossDomain: true,
                success: function(data) {

                    var arrData = data

                    var chart = new Highcharts.Chart({
                        chart: {
                            type: 'column',
                            renderTo: 'chart_perbandingan_target_realisasi_per_map'
                        },
                        title: {
                            text: 'Target Penerimaan Per Akun'
                        },
                        subtitle: {
                            text: 'Rencana Penerimaan dan Realisasi Penerimaan'
                        },
                        xAxis: {
                            categories: arrData.akun
                        },
                        yAxis: [{
                            min: 0,
                            title: {
                                text: 'Rencana & Realisasi'
                            }
                        }],
                        legend: {
                            shadow: false
                        },
                        tooltip: {
                            shared: true
                        },
                        plotOptions: {
                            column: {
                                grouping: false,
                                shadow: false,
                                borderWidth: 0
                            }
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'Rencana',
                            color: 'rgba(248,161,63,1)',
                            data: arrData.rencana,
                            pointPadding: 0.3,
                            pointPlacement: 0
                        }, {
                            name: 'Realisasi',
                            color: 'rgba(186,60,61,.9)',
                            data: arrData.realisasi,
                            pointPadding: 0.4,
                            pointPlacement: 0
                        }]
                    });
                }
            });


            $(document).ready(function() {
                // top five unitkerja (asc)
                $('.sort-button').on('click', function(e) {
                    e.preventDefault();
                    // before click button
                    old_sort_mode = $('#sort-mode').val();

                    if (old_sort_mode == 'desc') {
                        $('#sort-mode').val('asc');
                        $('#sort-icon').addClass('fa-sort-amount-asc');
                        $('#sort-icon').removeClass('fa-sort-amount-desc');

                    } else if (old_sort_mode == 'asc') {
                        $('#sort-mode').val('desc');
                        $('#sort-icon').addClass('fa-sort-amount-desc');
                        $('#sort-icon').removeClass('fa-sort-amount-asc');

                    } else {
                        $('#sort-mode').val('desc');
                        $('#sort-icon').addClass('fa-sort-amount-desc');
                        $('#sort-icon').removeClass('fa-sort-amount-asc');
                    }
                    // after click button
                    latest_sort_mode = $('#sort-mode').val();

                    $.ajax({
                        type: "GET",
                        url: "/ekeuanganpts/index.php?mod=home&sub=topFiveUnitkerja&act=view&typ=json",
                        data: {
                            data_order: latest_sort_mode
                        },
                        dataType: "json",
                        contentType: "application/json",
                        crossDomain: true,
                        success: function(result) {
                            // jika belum ada data rencana anggaran
                            if (result.top_one_label == '') {
                                $('.sort-button').hide();
                                $('.sort-info-panel').show();
                                $('.progress-realisasi').hide();
                                $('#sort-info').html('<em>-- Belum ada data rencana anggaran --</em>');
                            } else {
                                $('.sort-button').show();
                                $('.sort-info-panel').hide();
                                $('.progress-realisasi').show();
                                $('#sort-info').html('');
                            }

                            $('#unit_top_one_icon').addClass(result.top_one_icon + ' font-size-28 line-height-1 text-' + result.top_one_style);
                            $('#unit_top_one_label').html(result.top_one_label);
                            $('#unit_top_one_progress').addClass('progress-bar progress-bar-' + result.top_one_style + ' progress-bar-striped active');
                            $('#unit_top_one_progress').css('width', result.top_one_persen + '%');

                            $('#unit_top_two_icon').addClass(result.top_two_icon + ' font-size-28 line-height-1 text-' + result.top_two_style);
                            $('#unit_top_two_label').html(result.top_two_label);
                            $('#unit_top_two_progress').addClass('progress-bar progress-bar-' + result.top_two_style + ' progress-bar-striped active');
                            $('#unit_top_two_progress').css('width', result.top_two_persen + '%');

                            $('#unit_top_three_icon').addClass(result.top_three_icon + ' font-size-28 line-height-1 text-' + result.top_three_style);
                            $('#unit_top_three_label').html(result.top_three_label);
                            $('#unit_top_three_progress').addClass('progress-bar progress-bar-' + result.top_three_style + ' progress-bar-striped active');
                            $('#unit_top_three_progress').css('width', result.top_three_persen + '%');

                            $('#unit_top_four_icon').addClass(result.top_four_icon + ' font-size-28 line-height-1 text-' + result.top_four_style);
                            $('#unit_top_four_label').html(result.top_four_label);
                            $('#unit_top_four_progress').addClass('progress-bar progress-bar-' + result.top_four_style + ' progress-bar-striped active');
                            $('#unit_top_four_progress').css('width', result.top_four_persen + '%');

                            $('#unit_top_five_icon').addClass(result.top_five_icon + ' font-size-28 line-height-1 text-' + result.top_five_style);
                            $('#unit_top_five_label').html(result.top_five_label);
                            $('#unit_top_five_progress').addClass('progress-bar progress-bar-' + result.top_five_style + ' progress-bar-striped active');
                            $('#unit_top_five_progress').css('width', result.top_five_persen + '%');
                        }
                    });
                });
            });

            $(document).ready(function() {
                $('.sort-button').trigger('click');
            });

            $(document).on({
                ajaxStart: function() {
                    $('#panel_top_five_unitkerja').addClass('form-loading');
                },
                ajaxStop: function() {
                    $("#panel_top_five_unitkerja").removeClass("form-loading");
                }
            });

            function setTahunAnggaran(obj) {
                var url = "/ekeuanganpts/index.php?mod=home&sub=home&act=view&typ=html";
                var ta_id = $('#tahun_anggaran_id').val()
                if (ta_id != "") {
                    GtfwAjax.replaceContentWithUrl("subcontent-element", url + "&ascomponent=1&ta_id=" + ta_id)
                }
            }
        </script>

    </div>

</div>