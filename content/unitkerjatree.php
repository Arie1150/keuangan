<div class="px-content" id="content" style="padding-bottom: 103px;">  
      <div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=5&amp;mid=5">Manajemen Referensi</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=unitkerja&amp;act=view&amp;typ=html">Unit Kerja Tree</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
<script language="javascript" type="text/javascript">
/*
	function centangin_semua(varname, start_num, end_num) {
		var obj = document.getElementById('cek_all');
		var ceks;
		if(obj.checked == false) {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
				if(ceks) ceks.checked = false;
			}
		} else {
			for(i=start_num;i<=end_num;i++) {
				ceks = document.getElementById(varname + i);
				if(ceks) ceks.checked = true;
			}
		}
	}
	function show_checkbox () {
		if(document.getElementById('cek_all'))
			document.getElementById('cek_all').style.display='';
	}
	document.onload = show_checkbox();
	
	
CheckBoxFW_initiate = function (Obj)
{
   if (!Obj || Obj.className.indexOf('CheckBoxFW_parent') < 0 || !Obj.form) return;

   var CBList = new Array;
   var CheckedAll = true;
   var FormObj = Obj.form;

   for (var i = 0; i < FormObj.length; i++) if (FormObj[i] == Obj) break;
   if (i == FormObj.length) return;

   for(i += 1; i < FormObj.length; i++)
   {
      var CBObj = FormObj[i];
      if (CBObj.type.toUpperCase() != 'CHECKBOX') continue;
      if (CBObj.className.indexOf('CheckBoxFW_child') >= 0)
      {
         CBObj.onchange = function () {Obj.checkChild();}
         CBList[CBList.length] = CBObj;
         if (!CBObj.checked) CheckedAll = false;
      }
      if (CBObj.className.indexOf('CheckBoxFW_parent') >= 0) break;
   }

   if (CBList.length > 0)
   {
      Obj.onchange = function ()
      {
         for (var i = 0; i < CBList.length; i++)
            CBList[i].checked = this.checked;
      }

      Obj.checkChild = function ()
      {
         var CheckedAll = true;
         for (var i = 0; i < CBList.length; i++) if (!CBList[i].checked)
         {
            CheckedAll = false;
            break;
         }
         this.checked = CheckedAll;
      }

      Obj.checked = CheckedAll;
   }
}

for (var i = 0; i < document.getElementById('form_list').length; i++)
   CheckBoxFW_initiate(document.getElementById('form_list')[i]);
   */
//end list unit kerja ref


    $(document).ready( function() {
        $('#container_unitkerja').fileTree({
            root: '0',
            script: '/ekeuanganpts/index.php?mod=unitkerja_tree&sub=UnitKerjaTree&act=view&typ=html',
            expandSpeed: 1000,
            collapseSpeed: 1000,
            multiFolder: false
            }
            , function(ka) {
                   //alert(ka);
            }
        );
    });
</script>
<div class="page-header">
   <h1><span class="text-muted font-weight-light">
         <i class="page-header-icon fa fa-building"></i>
         Pengelolaan Unit Kerja
      </span></h1>
</div>
   
<div style="display: none;">
<form method="POST" action="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=unitkerja&amp;act=view&amp;typ=html" class="dataquest xhr_simple_form dest_subcontent-element" id="filterbox">
   <table>
      <tbody><tr>
         <th colspan="2"><h2><strong>Pencarian</strong></h2></th>
      </tr>
         <tr>
            <th width="30%">Kode Unit Kerja</th>
            <td><input type="text" name="kode" value="">
            </td>
         </tr>
         <tr>
            <th>Nama Unit Kerja</th>
            <td><input type="text" name="nama" value="" size="40">
         </td></tr>

         <tr>
            <th>Tipe Unit Kerja</th>
            <td>
         
   <!-- FormHelper Content BEGIN -->
      
	
   <select name="tipeunit" style="width:200px;" class="form-control">
	
		<option value="all">-- SEMUA --</option>
	
		<option value="1">A (Pusat Biaya)</option>
	
		<option value="2">B (Pusat Biaya dan Sumber Penerimaan)</option>
	
		<option value="3">C (Sumber Penerimaan)</option>
	       
	</select>
	

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
            </td>
         </tr>
      <tr>
         <th>&nbsp;</th>
         <td>
            <input type="submit" name="btncari" value=" Tampilkan »" class="buttonSubmit">
         </td>
      </tr>
   </tbody></table>
</form>
</div>





        
        

<div class="panel panel-default">
   <div class="panel-body">
      
      <div class="btn-toolbar mb-15">
         <div class="btn-group pull-right"> 
            <a class="xhr dest_subcontent-element btn btn-primary btn-flat btn-fwn mr-5" href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=inputUnitkerja&amp;act=view&amp;typ=html&amp;jenis=unit" title="Tambah Unit Kerja">
            <i class="fa fa-plus-circle"></i>
            Tambah Data
         </a>
            <a href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=unitkerja&amp;act=view&amp;typ=xlsx&amp;kode=&amp;nama=&amp;tipeunit=" title="Export Excel" class="btn btn-default btn-flat btn-fwn mr-5">
                  <i class="fa fa-file-excel-o"></i>
               Excel
            </a>
            <a class="xhr dest_subcontent-element btn btn-default btn-flat btn-fwn" href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=UnitkerjaCari&amp;act=view&amp;typ=html" title="Cari">
               <i class="fa fa-search"></i>
               Cari
            </a>           
         </div>
      </div>
      

      
      <div class="panel panel-default">
           <div class="panel-heading">
               <span class="panel-title">
                  Unit Kerja Tree
               </span>
           </div>
           <div class="panel-body">
               <div id="container_unitkerja" class="">

   <div id="js-alert"></div>
   <!-- content BEGIN -->
      

<ul class="jqueryFileTree" style="">
  
          <li class="directory collapsed"><label id="1" class="icon-link">parent -1</label>
          
              <a href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=inputUnitkerja&amp;act=view&amp;typ=html&amp;jenis=subunit&amp;parentUnitId=1" id="" class="add btn btn-primary btn-outline btn-xs" title="Tambah">
              <i class="fa fa-plus"></i></a>
              <a href="/ekeuanganpts/index.php?mod=unitkerja_tree&amp;sub=inputUnitkerja&amp;act=view&amp;typ=html&amp;jenis=unit&amp;dataId=1" id="" class="edit btn btn-warning btn-outline btn-xs" title="Ubah">
              <i class="fa fa-pencil"></i></a>
          
          <label id="1">[0000] - UNIVERSITAS</label>
          </li>                    
   
  </ul>
 

   <!-- content END -->


<noscript>This Site Needs Javascript to be Enabled</noscript><script>/*
gtfwInit
	initialize / validation page

@author		:	Wahyu A.Y

@modified	:	
@copyright 2014 Gamatechno
*/

var skStorage=function(typ){
	this.obj;
	if(!typ)var typ='session';
	this.isSupported=function(){
		return this._s || false;
	};
	this.get=function(k){
		if(this._s)return this.obj.getItem ? this.obj.getItem(k) : this.obj[k];
	};
	this.set=function(k, v){
		if(this._s)this.obj.setItem ? this.obj.setItem(k, v) : this.obj[k]=v;
	};
	this.remove=function(k){
		if(this._s)return this.obj.removeItem ? this.obj.removeItem(k) : this.obj[k]=null;
	};
	this._construct=function(typ){
		if(typeof(Storage) !== 'undefined'){
			this._s=true;
			if(typ == 'session')this.obj=sessionStorage;
			else{
				if(typeof(localStorage) !== 'undefined')this.obj=localStorage;
				else if(typeof(globalStorage) !== 'undefined')this.obj=globalStorage[location.hostname];
				else this._s=false;
			}
		}else this._s=false;
	};
	this._construct(typ);
};
var parseScriptTag=function(n){
	if(!n)return;
	var st=n.getElementsByTagName('SCRIPT');
	try{
		for(var i=0,m=st.length;i<m;++i){
			var sc=document.createElement('script'),js='';
			if(st[i].src)sc.src=st[i].src;
			else{
				if(st[i].text)js=sc.text=st[i].text;
				else if(st[i].textContent)js=sc.textContent=st[i].textContent;
				else js=sc.innerHTML=st[i].innerHTML;
			}
		
			n.appendChild(sc);
		}
		while(--i>-1)st[i].parentNode.removeChild(st[i]);
	}catch(e){
		alert(e
				+ "\nMake sure you have use \\* *\\ style of comment instead of \\\\");
		alert('code was: ' + js);
	}
	sc=st=null;
};
var clearScript=function(){var st=document.getElementsByTagName('SCRIPT');var i=st.length;while(--i>-1)st[i].parentNode.removeChild(st[i]);st=i=null;};
var setJsStyle=function(el,st){
	if(typeof el != 'undefined'){
		if(typeof st == 'object'){
			try{
				for(var i in st){
					el.style[i] = st[i];
				}
			}catch(e){}
		}
	}
};
var _GTFW_,baseSrc='js/'+((typeof _JV == 'undefined')?'':'?v='+_JV);
try{
	var _s=new skStorage('session'),_GTFW_='c0a8e8f45c133f5a1966f622b916f1e0',key='GTFWSessIDSuitePTS';
	if(_s.isSupported()){
		var setKey = function(val){
			if(!val)_s.remove(key);
			else _s.set(key, val);
		};
		if(true){
			if(!_s.get(key)){
				setKey(_GTFW_);
			}else{
				if(_GTFW_!==_s.get(key)){
					setKey();
					location.href='./?new';
				}
			}
		}else{
			setKey(_GTFW_);
		}
	}else{
		var setKey = function(val){
			window.name=val;
		};
		if(true){
			if(window.name === ''){
				setKey(_GTFW_);
			}else{
				if(_GTFW_!==window.name){
					setKey('');
					location.href='./?new';
				}
			}
		}else{
			setKey(_GTFW_);
		}
	}
	var bS = document.createElement('script');
	bS.src = baseSrc;
	document.body.appendChild(bS);
	
	var debugMode = 0, debugOdd = true;
	if(debugMode){
		var debugContainer = document.createElement('div'), activePanelButton;
		debugContainer.id = debugContainer.className = 'debugContainer';
		setJsStyle(debugContainer,{
			'position'			: 'fixed',
			'top'				: '28px',
			'left'				: '0px',
			'display'			: 'none',
			'width'				: '100%',
			'backgroundColor'	: '#fefefe',
			'zIndex'			: '9999999'
		});
		
		var debugPanel = document.createElement('div');
		debugPanel.id = debugPanel.className = 'debugPanel';
		setJsStyle(debugPanel,{
			'width'				: '100%',
			'position'			: 'relative',
			'borderTop'			: '1px solid #333',
			'borderBottom'		: '1px solid #333',
			'padding'			: '8px 0 0 0'
		});
		debugContainer.appendChild(debugPanel);
		
		var activatePanelButton=function(el){
			var els = debugPanel.getElementsByTagName('a');
			for(var j=0,n=els.length;j<n;++j){
				if(els[j].className.indexOf('activeDebugPanelButton') > -1){
					setJsStyle(els[j],{
						'borderBottom'		: '1px solid #333',
						'backgroundColor'	: '#eee'
					});
					els[j].className = els[j].className.replace(/ activeDebugPanelButton/g,'');
				}
			}
			setJsStyle(el,{
				'borderBottom'		: '1px solid #ccc',
				'backgroundColor'	: '#ccc'
			});
			el.className += ' activeDebugPanelButton';
			activePanelButton = el;
			debugBox.scrollTop = debugBox.scrollHeight;
		};
		
		var panelButton = [{'label':'All', 'key':'all'},{'label':'Database', 'key':'database'},{'label':'System', 'key':'system'},{'label':'PHP', 'key':'php'}];
		var panelButtonStyle = {
			'marginRight'		: '4px',
			'padding'			: ((typeof debugPanel.style.webkitBorderRadius == 'undefined')?'2px':'3px') + ' 8px',
			'border'			: '1px solid #333',
			'backgroundColor'	: '#eee',
			'color'				: '#333',
			'lineHeight'		: '24px',
			'font-size'			: '17px',
			'textDecoration'	: 'none'
		};
		var el = document.createElement('a');
		el.href = '#';
		el.id = 'debug'+panelButton[0]['key'];
		el.className = 'debugPanelButton';
		el.appendChild(document.createTextNode(panelButton[0]['label']));
		setJsStyle(el,panelButtonStyle);
		el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px 8px 0px 0px';
		el.onmousedown = function(e){
			var els = debugBox.getElementsByTagName('div');
			for(var j=0,n=els.length;j<n;++j)els[j].style.display = 'block';
			activatePanelButton(this);
			return false;
		};
		debugPanel.appendChild(el);
		for(var i=1,m=panelButton.length;i<m;++i){
			var el = document.createElement('a');
			el.href = '#';
			el.id = 'debug'+panelButton[i]['key'];
			el.className = 'debugPanelButton';
			el.appendChild(document.createTextNode(panelButton[i]['label']));
			setJsStyle(el,panelButtonStyle);
			el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px 8px 0px 0px';
			el.onmousedown = function(e){
				var els = debugBox.getElementsByTagName('div');
				for(var j=0,n=els.length;j<n;++j){
					if(els[j].className.indexOf(this.id) > -1)els[j].style.display = 'block';
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
		setJsStyle(el,{
			'marginRight'		: '4px',
			'marginTop'			: (typeof debugPanel.style.webkitBorderRadius == 'undefined')?'-7px':'-8px',
			'padding'			: ((typeof debugPanel.style.webkitBorderRadius == 'undefined')?'2px':'3px') + ' 8px',
			'border'			: '1px solid #333',
			'backgroundColor'	: '#eee',
			'color'				: '#333',
			'lineHeight'		: '24px',
			'font-size'			: '17px',
			'textDecoration'	: 'none',
			'cssFloat'			: 'right',
			'styleFloat'		: 'right'
		});
		el.style.borderRadius = el.style.MozBorderRadius = el.style.WebkitBorderRadius = '8px';
		el.onmousedown = function(e){
			if(activePanelButton){
				var item = debugBox.getElementsByTagName('div');
				var j = item.length;
				if(activePanelButton.id == 'debugall'){
					while(--j > -1)item[j].parentNode.removeChild(item[j]);
				}else{
					while(--j > -1){
						if(item[j].className.indexOf(activePanelButton.id) > -1)item[j].parentNode.removeChild(item[j]);
					}
				}
			}
			
			return false;
		};
		debugPanel.appendChild(el);
		
		var debugBox = document.createElement('div');
		debugBox.id = debugBox.className = 'debugBox';
		setJsStyle(debugBox,{
			'position'			: 'relative',
			'display'			: 'block',
			'width'				: '100%',
			'maxHeight'			: '400px',
			'backgroundColor'	: '#fefefe',
			'overflow'			: 'scroll'
		});
		debugContainer.appendChild(debugBox);
		
		document.body.appendChild(debugContainer);
		
		var debugButton = document.createElement('div');
		debugButton.id = debugButton.className = 'debugButton';
		setJsStyle(debugButton,{
			'position'			: 'fixed',
			'top'				: '0px',
			'left'				: '50%',
			'height'			: '28px',
			'lineHeight'		: '28px',
			'marginLeft'		: '-63px',
			'color'				: '#fff',
			'backgroundColor'	: '#ff0000',
			'padding'			: '0 8px',
			'cursor'			: 'pointer',
			'zIndex'			: '9999999'
		});
		debugButton.style.borderRadius = debugButton.style.MozBorderRadius = debugButton.style.WebkitBorderRadius = '8px';
		debugButton.appendChild(document.createTextNode('Develoment Mode'));
		debugButton.onmousedown=function(e){
			if(debugContainer.style.display == 'none')debugContainer.style.display = 'block';
			else debugContainer.style.display = 'none';
			if(activePanelButton)activePanelButton.onmousedown(e);
			else document.getElementById('debug'+panelButton[0]['key']).onmousedown(e);
			return false;
		};
		document.body.appendChild(debugButton);
		
		var gtfwLog=function(str,type){
			if(str){
				if(!type)type = 'all';
				var x = document.createElement('div');
				x.className = 'debug'+type;
				if(activePanelButton)var c=activePanelButton.id;
				else var c=x.className;
				setJsStyle(x,{
					'display'			: (c==x.className)?'block':'none',
					'width'				: '100%',
					'borderBottom'		: '1px solid #888',
					'whiteSpace'		: 'pre-wrap',
					'backgroundColor'	: (debugOdd)?'#ddd':'#fff'
				});
				if(str.indexOf('[Error]') > -1)setJsStyle(x,{
					'color'				: '#fff',
					'backgroundColor'	: '#ff0000'
				});
				x.innerHTML = str;
				debugBox.appendChild(x);
			}
		};
		var parseLog=function(msg, typ){
			if(msg){
				if(!typ)typ = 'all';
				if(typeof msg.length != 'undefined'){
					for(var i=0,m=msg.length;i<m;++i)gtfwLog(msg[i],typ);
				}else{
					gtfwLog(msg,typ);
				}
				msg = null;
			}
		};
	}else{
		var gtfwLog=function(str,type){return;};
		var parseLog=function(){return};
	}
}catch(e){
	document.write('Your Browser Didn\'t Support To Open This Site');
}
 </script><script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>
           </div>
      </div>


</div>
</div>


   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>  
      
   </div>