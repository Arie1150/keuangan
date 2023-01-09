<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>
    Sistem Informasi Anggaran dan Keuangan -
    eAnggaran
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="keywords" content="
    Sistem Informasi Anggaran dan Keuangan,
    eAnggaran,
    Sistem Informasi Anggaran dan Keuangan
    eAnggaran
  ">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- CSS Custome -->
  <link href="css/css-custome/jqueryFileTree.css" rel="stylesheet" type="text/css">

  <!-- Core stylesheets -->
  <link href="assets/pixeladmin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/pixeladmin/css/pixeladmin.min.css" rel="stylesheet" type="text/css">
  <link href="assets/pixeladmin/css/widgets.min.css" rel="stylesheet" type="text/css">

  <!-- Theme -->
  <link href="assets/pixeladmin/css/themes/clean.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/pixeladmin/css/eanggaran.css" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/loader.js"></script>
  <link rel="icon" type="assets/login_v3/image/png" href='assets/login_v3/images/favicon-keu.png' />

  <!-- Pace.js -->
  <script src="assets/pixeladmin/pace/pace.min.js"></script>

  <!-- Highcharts script -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body class="px-navbar-fixed">
  <?php
  include "setbar.php";



  if(isset($_GET['content'])){
    include "content/".$_GET['content'].".php";
  }

  include "header.php";
  ?>

  <!-- div id="sidebarContents" class="sidebarContents" -->

  <!-- FormHelper Content BEGIN -->

  <script>
    function updateBreadcrumb(bc_menu, url_menu, bc_submenu, url_submenu) {
      var li_menu = document.getElementById('li_menu');
      var li_submenu = document.getElementById('li_submenu');

      if (bc_menu != '') {
        var span_home = document.getElementById('span_home');
        var span_menu = document.getElementById('span_menu');
        var link_menu = document.getElementById('a_menu');

        li_menu.style.display = 'inline';
        span_home.setAttribute('onclick', "updateBreadcrumb('', '', '', '')");
        span_menu.setAttribute('onclick', "updateBreadcrumb('" + bc_menu + "', '" + url_menu + "', '', '')");
        link_menu.innerHTML = bc_menu;
        link_menu.setAttribute('href', url_menu);

        if (bc_submenu != '') {
          var link_submenu = document.getElementById('a_submenu');

          li_submenu.style.display = 'inline';
          link_submenu.innerHTML = bc_submenu;
          link_submenu.setAttribute('href', url_submenu);
        } else {
          li_submenu.style.display = 'none';
        }
      } else {
        li_menu.style.display = 'none';
        li_submenu.style.display = 'none';
      }
    }

    function openUserManual(xurl) {
      showPopup(xurl, 'Buku Panduan', 650, 500);
    }
  </script>


  <script>
    $(function() {
      $('.menu-click').click(function(e) {
        $('#side-nav').find('li').removeClass('active');
        $(this).addClass('active');
        $(this).parents().parents().addClass('active');
      });
    });
  </script>

  <!-- FormHelper Content END-->

  <script>
    if (window.ButtonAccess) {
      var ba = new ButtonAccess("");
      ba.removeButton();
    }
  </script>


  <script>
    if (window.ButtonAccess) {
      var ba = new ButtonAccess("");
      ba.removeButton();
    }
  </script>

  <!-- FormHelper Content BEGIN -->


  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

  <div class="collapse navbar-collapse" id="px-navbar-collapse">

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span>TA <span class="font-weight-semibold">2023</span></span>
        </a>
      </li>

      <li style="display: none;" class="dropdown">
        <a href="https://google.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="px-navbar-icon fa fa-bell-o font-size-14"></i>
          <span class="px-navbar-icon-label">Pemberitahuan</span>
          <span class="px-navbar-label label label-danger">8</span>
        </a>
        <div class="dropdown-menu p-a-0" style="width: 300px;">
          <div id="navbar-messages" style="height: 280px; position: relative;">
            <div class="widget-messages-alt-item">
              <img src="assets/avatar/2.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
              <div class="widget-messages-alt-description">from <a href="#">Robert Jang</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/3.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
              <div class="widget-messages-alt-description">from <a href="#">Michelle Bortz</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/4.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
              <div class="widget-messages-alt-description">from <a href="#">Timothy Owens</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/5.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
              <div class="widget-messages-alt-description">from <a href="#">Denise Steiner</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/2.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
              <div class="widget-messages-alt-description">from <a href="#">Robert Jang</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/3.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
              <div class="widget-messages-alt-description">from <a href="#">Michelle Bortz</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/4.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
              <div class="widget-messages-alt-description">from <a href="#">Timothy Owens</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>

            <div class="widget-messages-alt-item">
              <img src="assets/avatar/5.jpg" alt="" class="widget-messages-alt-avatar">
              <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
              <div class="widget-messages-alt-description">from <a href="#">Denise Steiner</a></div>
              <div class="widget-messages-alt-date">2h ago</div>
            </div>
          </div>

          <a href="#" class="widget-more-link">MORE MESSAGES</a>
        </div> <!-- / .dropdown-menu -->
      </li>

      <li style="display: none;">
        <form class="navbar-form" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Cari" style="width: 150px;">
          </div>
        </form>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;
          Demo PTS
        </a>

        <ul class="dropdown-menu">
          <li>
            <a class="xhr dest_subcontent-element" id="profil" href="/ekeuanganpts/index.php?mod=profile&amp;sub=profile&amp;act=view&amp;typ=html" title="profil"><i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;Profile</a>
          </li>
          <li><a href="/ekeuanganpts/index.php?mod=login_default&amp;sub=logout&amp;act=do&amp;typ=html" title="logout"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
        </ul>

      </li>
    </ul>

  </div>


  <!-- FormHelper Content END-->

  <script>
    if (window.ButtonAccess) {
      var ba = new ButtonAccess("");
      ba.removeButton();
    }
  </script>
  </nav>
  <!--Navigation-->
  <div id="loading-box-active" class="busy-indicator">
    <div class="animation-icon"></div>
  </div>

  <!-- Core scripts -->
  <script src="assets/pixeladmin/js/bootstrap.min.js"></script>
  <script src="assets/pixeladmin/js/pixeladmin.min.js"></script>

  <!-- Your scripts -->
  <script src="assets/pixeladmin/js/app.js"></script>
  <!-- Your scripts -->
  <script src="assets/pixeladmin/js/alert.js"></script>

  <script>
    var backToTop = function() {
      document.body.scrollTop = 0; // For Chrome, Safari and Opera
      document.documentElement.scrollTop = 0; // For IE and Firefox        
    };
  </script>

  <script type="text/javascript">
    /*re-initation library*/
    /**
     *@author imaduddin@ecampuz.com
     */
    showPopup = function showPopup(url, title, width, height, offsetleft, offsettop) {
      let id = $('.gtfw-modal-popup').length + 1;
      let modalId = 'gtfwPopUpModal' + id;
      let containerId = "popup-subcontent"; //+id;
      let modalHtml = '' +
        '<div id="' + modalId + '" class="modal fade modal-default gtfw-modal-popup" role="dialog">' +
        '<div class="modal-dialog modal-lg">'

        +
        '<!-- Modal content-->' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
        '<h4 class="modal-title">' + title + '</h4>' +
        '</div>' +
        '<div class="modal-body" id="' + containerId + '" style="background: white;">' +
        '<p class="text-center">Loading...</p>' +
        '</div>' +
        '</div>'

        +
        '</div>' +
        '</div>';
      $(modalHtml).on('hidden.bs.modal', function() {
        $('#' + modalId).remove();
      }).on('shown.bs.modal', function() {
        GtfwAjax.replaceContentWithUrl(containerId, url + "&ascomponent=1", null, false, () => {
          /*callback*/
          if ($('#' + modalId).find('[class *="dest_popup-subcontent"]').length) {
            $('#' + modalId).find('[class *="dest_popup-subcontent"]').each((i, v) => {
              var classExists = $('#' + modalId).find('[class *="dest_popup-subcontent"]:eq(' + i + ')').attr('class');
              var splitClass = classExists.length > 0 ? classExists.split(' ') : [];
              var arrNewClass = [];
              for (var i = 0; i < splitClass.length; i++) {
                if (splitClass[i] != "" &&
                  splitClass[i].indexOf('dest_popup-subcontent')) {
                  arrNewClass.push(splitClass[i]);
                }
              };
              var newClass = arrNewClass.join(' ') + ' dest_' + containerId;
              $('#' + modalId).find('[class *="dest_popup-subcontent"]:eq(' + i + ')').attr('class', newClass);
            });
            Behaviour.apply();
          }
        });
      }).modal('show');
    };

    popupClose = function(selector) {
      if (selector != undefined) {
        selector.closest('.gtfw-modal-popup').modal('hide');
      } else {
        $('.gtfw-modal-popup').modal('hide');
      }
    };

    // -------------------------------------------------------------------------
    // Initialize Popover

    $(document).ready(function() {
      showPopover = function(txt_id, txt_title, txt_content, txt_place) {
        $('#' + txt_id).popover({
          title: txt_title,
          content: txt_content,
          placement: txt_place,
          trigger: 'hover',
          toggle: 'popover',
          container: 'body',
          animation: true
        });
      }
    });

    // -------------------------------------------------------------------------
    // Initialize Navbar

    $(function() {
      var file = String(document.location).split('/').pop();

      // Remove unnecessary file parts
      file = file.replace(/(\.html).*/i, '$1');

      if (!/.html$/i.test(file)) {
        file = 'index.html';
      }

      // Activate current nav item
      $('body > .px-nav')
        .find('.px-nav-item > a[href="' + file + '"]')
        .parent()
        .addClass('active');

      $('body > .px-nav').pxNav();
      $('body > .px-footer').pxFooter();

      $('#navbar-notifications').perfectScrollbar();
      $('#navbar-messages').perfectScrollbar();
    });

    // Bootstrap Datepicker Localization
    ! function(a) {
      a.fn.datepicker.dates.id = {
        days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
        daysShort: ["Mgu", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
        daysMin: ["Mg", "Sn", "Sl", "Ra", "Ka", "Ju", "Sa"],
        months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
        today: "Hari Ini",
        clear: "Kosongkan",
        format: "d MM yyyy",
      }
    }(jQuery);
  </script>
</body>

<?php
 include "footer.php";
 ?>

</html>
<noscript>This Site Needs Javascript to be Enabled</noscript>
<script>
  /*
gtfwInit
	initialize / validation page

@author		:	Wahyu A.Y

@modified	:	
@copyright 2014 Gamatechno
*/

  var skStorage = function(typ) {
    this.obj;
    if (!typ) var typ = 'session';
    this.isSupported = function() {
      return this._s || false;
    };
    this.get = function(k) {
      if (this._s) return this.obj.getItem ? this.obj.getItem(k) : this.obj[k];
    };
    this.set = function(k, v) {
      if (this._s) this.obj.setItem ? this.obj.setItem(k, v) : this.obj[k] = v;
    };
    this.remove = function(k) {
      if (this._s) return this.obj.removeItem ? this.obj.removeItem(k) : this.obj[k] = null;
    };
    this._construct = function(typ) {
      if (typeof(Storage) !== 'undefined') {
        this._s = true;
        if (typ == 'session') this.obj = sessionStorage;
        else {
          if (typeof(localStorage) !== 'undefined') this.obj = localStorage;
          else if (typeof(globalStorage) !== 'undefined') this.obj = globalStorage[location.hostname];
          else this._s = false;
        }
      } else this._s = false;
    };
    this._construct(typ);
  };
  var parseScriptTag = function(n) {
    if (!n) return;
    var st = n.getElementsByTagName('SCRIPT');
    try {
      for (var i = 0, m = st.length; i < m; ++i) {
        var sc = document.createElement('script'),
          js = '';
        if (st[i].src) sc.src = st[i].src;
        else {
          if (st[i].text) js = sc.text = st[i].text;
          else if (st[i].textContent) js = sc.textContent = st[i].textContent;
          else js = sc.innerHTML = st[i].innerHTML;
        }

        n.appendChild(sc);
      }
      while (--i > -1) st[i].parentNode.removeChild(st[i]);
    } catch (e) {
      alert(e +
        "\nMake sure you have use \\* *\\ style of comment instead of \\\\");
      alert('code was: ' + js);
    }
    sc = st = null;
  };
  var clearScript = function() {
    var st = document.getElementsByTagName('SCRIPT');
    var i = st.length;
    while (--i > -1) st[i].parentNode.removeChild(st[i]);
    st = i = null;
  };
  var setJsStyle = function(el, st) {
    if (typeof el != 'undefined') {
      if (typeof st == 'object') {
        try {
          for (var i in st) {
            el.style[i] = st[i];
          }
        } catch (e) {}
      }
    }
  };
  var _GTFW_, baseSrc = 'js/' + ((typeof _JV == 'undefined') ? '' : '?v=' + _JV);
  try {
    var _s = new skStorage('session'),
      _GTFW_ = '0b61b86b1e67df7f5992a1ebe9338a49',
      key = 'GTFWSessIDSuitePTS';
    if (_s.isSupported()) {
      var setKey = function(val) {
        if (!val) _s.remove(key);
        else _s.set(key, val);
      };
      if (true) {
        if (!_s.get(key)) {
          setKey(_GTFW_);
        } else {
          if (_GTFW_ !== _s.get(key)) {
            setKey();
            location.href = './?new';
          }
        }
      } else {
        setKey(_GTFW_);
      }
    } else {
      var setKey = function(val) {
        window.name = val;
      };
      if (true) {
        if (window.name === '') {
          setKey(_GTFW_);
        } else {
          if (_GTFW_ !== window.name) {
            setKey('');
            location.href = './?new';
          }
        }
      } else {
        setKey(_GTFW_);
      }
    }
    var bS = document.createElement('script');
    bS.src = baseSrc;
    document.body.appendChild(bS);

    var debugMode = 0,
      debugOdd = true;
    if (debugMode) {
      var debugContainer = document.createElement('div'),
        activePanelButton;
      debugContainer.id = debugContainer.className = 'debugContainer';
      setJsStyle(debugContainer, {
        'position': 'fixed',
        'top': '28px',
        'left': '0px',
        'display': 'none',
        'width': '100%',
        'backgroundColor': '#fefefe',
        'zIndex': '9999999'
      });

      var debugPanel = document.createElement('div');
      debugPanel.id = debugPanel.className = 'debugPanel';
      setJsStyle(debugPanel, {
        'width': '100%',
        'position': 'relative',
        'borderTop': '1px solid #333',
        'borderBottom': '1px solid #333',
        'padding': '8px 0 0 0'
      });
      debugContainer.appendChild(debugPanel);

      var activatePanelButton = function(el) {
        var els = debugPanel.getElementsByTagName('a');
        for (var j = 0, n = els.length; j < n; ++j) {
          if (els[j].className.indexOf('activeDebugPanelButton') > -1) {
            setJsStyle(els[j], {
              'borderBottom': '1px solid #333',
              'backgroundColor': '#eee'
            });
            els[j].className = els[j].className.replace(/ activeDebugPanelButton/g, '');
          }
        }
        setJsStyle(el, {
          'borderBottom': '1px solid #ccc',
          'backgroundColor': '#ccc'
        });
        el.className += ' activeDebugPanelButton';
        activePanelButton = el;
        debugBox.scrollTop = debugBox.scrollHeight;
      };

      var panelButton = [{
        'label': 'All',
        'key': 'all'
      }, {
        'label': 'Database',
        'key': 'database'
      }, {
        'label': 'System',
        'key': 'system'
      }, {
        'label': 'PHP',
        'key': 'php'
      }];
      var panelButtonStyle = {
        'marginRight': '4px',
        'padding': ((typeof debugPanel.style.webkitBorderRadius == 'undefined') ? '2px' : '3px') + ' 8px',
        'border': '1px solid #333',
        'backgroundColor': '#eee',
        'color': '#333',
        'lineHeight': '24px',
        'font-size': '17px',
        'textDecoration': 'none'
      };
      var el = document.createElement('a');
      el.href = '#';
      el.id = 'debug' + panelButton[0]['key'];
      el.className = 'debugPanelButton';
      el.appendChild(document.createTextNode(panelButton[0]['label']));
      setJsStyle(el, panelButtonStyle);
      el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px 8px 0px 0px';
      el.onmousedown = function(e) {
        var els = debugBox.getElementsByTagName('div');
        for (var j = 0, n = els.length; j < n; ++j) els[j].style.display = 'block';
        activatePanelButton(this);
        return false;
      };
      debugPanel.appendChild(el);
      for (var i = 1, m = panelButton.length; i < m; ++i) {
        var el = document.createElement('a');
        el.href = '#';
        el.id = 'debug' + panelButton[i]['key'];
        el.className = 'debugPanelButton';
        el.appendChild(document.createTextNode(panelButton[i]['label']));
        setJsStyle(el, panelButtonStyle);
        el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px 8px 0px 0px';
        el.onmousedown = function(e) {
          var els = debugBox.getElementsByTagName('div');
          for (var j = 0, n = els.length; j < n; ++j) {
            if (els[j].className.indexOf(this.id) > -1) els[j].style.display = 'block';
            else els[j].style.display = 'none';
          }
          activatePanelButton(this);
          return false;
        };
        debugPanel.appendChild(el);
      }
      var el = document.createElement('a');
      el.href = '#';
      el.id = 'debugClearButton';
      el.className = 'debugPanelButton';
      el.appendChild(document.createTextNode('Clear'));
      setJsStyle(el, {
        'marginRight': '4px',
        'marginTop': (typeof debugPanel.style.webkitBorderRadius == 'undefined') ? '-7px' : '-8px',
        'padding': ((typeof debugPanel.style.webkitBorderRadius == 'undefined') ? '2px' : '3px') + ' 8px',
        'border': '1px solid #333',
        'backgroundColor': '#eee',
        'color': '#333',
        'lineHeight': '24px',
        'font-size': '17px',
        'textDecoration': 'none',
        'cssFloat': 'right',
        'styleFloat': 'right'
      });
      el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px';
      el.onmousedown = function(e) {
        if (activePanelButton) {
          var item = debugBox.getElementsByTagName('div');
          var j = item.length;
          if (activePanelButton.id == 'debugall') {
            while (--j > -1) item[j].parentNode.removeChild(item[j]);
          } else {
            while (--j > -1) {
              if (item[j].className.indexOf(activePanelButton.id) > -1) item[j].parentNode.removeChild(item[j]);
            }
          }
        }

        return false;
      };
      debugPanel.appendChild(el);

      var debugBox = document.createElement('div');
      debugBox.id = debugBox.className = 'debugBox';
      setJsStyle(debugBox, {
        'position': 'relative',
        'display': 'block',
        'width': '100%',
        'maxHeight': '400px',
        'backgroundColor': '#fefefe',
        'overflow': 'scroll'
      });
      debugContainer.appendChild(debugBox);

      document.body.appendChild(debugContainer);

      var debugButton = document.createElement('div');
      debugButton.id = debugButton.className = 'debugButton';
      setJsStyle(debugButton, {
        'position': 'fixed',
        'top': '0px',
        'left': '50%',
        'height': '28px',
        'lineHeight': '28px',
        'marginLeft': '-63px',
        'color': '#fff',
        'backgroundColor': '#ff0000',
        'padding': '0 8px',
        'cursor': 'pointer',
        'zIndex': '9999999'
      });
      debugButton.style.borderRadius = debugButton.style.MozBorderRadius = debugButton.style.WebkitBorderRadius = '8px';
      debugButton.appendChild(document.createTextNode('Develoment Mode'));
      debugButton.onmousedown = function(e) {
        if (debugContainer.style.display == 'none') debugContainer.style.display = 'block';
        else debugContainer.style.display = 'none';
        if (activePanelButton) activePanelButton.onmousedown(e);
        else document.getElementById('debug' + panelButton[0]['key']).onmousedown(e);
        return false;
      };
      document.body.appendChild(debugButton);

      var gtfwLog = function(str, type) {
        if (str) {
          if (!type) type = 'all';
          var x = document.createElement('div');
          x.className = 'debug' + type;
          if (activePanelButton) var c = activePanelButton.id;
          else var c = x.className;
          setJsStyle(x, {
            'display': (c == x.className) ? 'block' : 'none',
            'width': '100%',
            'borderBottom': '1px solid #888',
            'whiteSpace': 'pre-wrap',
            'backgroundColor': (debugOdd) ? '#ddd' : '#fff'
          });
          if (str.indexOf('[Error]') > -1) setJsStyle(x, {
            'color': '#fff',
            'backgroundColor': '#ff0000'
          });
          x.innerHTML = str;
          debugBox.appendChild(x);
        }
      };
      var parseLog = function(msg, typ) {
        if (msg) {
          if (!typ) typ = 'all';
          if (typeof msg.length != 'undefined') {
            for (var i = 0, m = msg.length; i < m; ++i) gtfwLog(msg[i], typ);
          } else {
            gtfwLog(msg, typ);
          }
          msg = null;
        }
      };
    } else {
      var gtfwLog = function(str, type) {
        return;
      };
      var parseLog = function() {
        return
      };
    }
  } catch (e) {
    document.write('Your Browser Didn\'t Support To Open This Site');
  }
</script>
<script>
  if (window.ButtonAccess) {
    var ba = new ButtonAccess("");
    ba.removeButton();
  }
</script>