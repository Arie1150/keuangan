<div class="subcontent-element" id="subcontent-element">
   <!-- FormHelper Content BEGIN -->
      

   <!-- FormHelper Content BEGIN -->
      
<ol class="breadcrumb page-breadcrumb">
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html">Home</a></li>
    
    <li><a class="xhr dest_subcontent-element " href="/ekeuanganpts/index.php?mod=home&amp;sub=home&amp;act=view&amp;typ=html&amp;dmmid=93&amp;mid=93">Posting</a></li>
    
    
    <li><a class="xhr dest_subcontent-element active" href="/ekeuanganpts/index.php?mod=posting&amp;sub=Posting&amp;act=view&amp;typ=html">Posting Transaksi</a></li>
    

    
</ol>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>

   <!-- FormHelper Content BEGIN -->
      
<div class="page-header">
	<h1>
        <span class="text-muted font-weight-light">
			<i class="page-header-icon "></i> Posting Transaksi
        </span>
    </h1>
</div>

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>


<div class="panel panel-default">
     <div class="panel-heading">
         <span class="panel-title">
            Posting
         </span>
     </div>
     <div class="panel-body">
         
         
         <div class="alert notebox-done">
               <button type="button" class="close" data-dismiss="alert">×</button>
            Semua jurnal sudah terposting
         </div>
         

         <form method="POST" action="/ekeuanganpts/index.php?mod=posting&amp;sub=Posting&amp;act=do&amp;typ=html" class="xhr_form form-horizontal" name="frmPosting" id="frmPosting">
            <div class="form-group">
               <label class="col-md-3 control-label">
                     Posting Terakhir
               </label>
               <div class="col-md-4">
                     <label class="form-control-label">
                        25 Oktober 2022
                     </label>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label">
                     Tanggal Posting
               </label>
               <div class="col-md-4">
                     <input type="hidden" name="last_posting" id="txt_last_posting" value="25 Oktober 2022">
                     
   <!-- FormHelper Content BEGIN -->
                  
<script language="JavaScript">
   function tanggal_posting_show_day(n) {
      
  m = parseInt(document.getElementById('tanggal_posting_mon').options[document.getElementById('tanggal_posting_mon').selectedIndex].value);
  d = 31;
  if((m==4)||(m==6)||(m==9)||(m==11)) { d = 30; }
  if(m==2) {
    d = 29;
    y = document.getElementById('tanggal_posting_year').value;
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
 
  document.getElementById("tanggal_posting_day").innerHTML=s;
}

function tanggal_posting_date_change() {
  d = document.getElementById('tanggal_posting_day').options[document.getElementById('tanggal_posting_day').selectedIndex].value;
  tanggal_posting_show_day(d);
}
</script>
   <div>
      <select name="tanggal_posting_day" id="tanggal_posting_day" style="display:" class="form-control-normal">
                        
                                                
                  <option value="00"></option>               
                                                
                  <option value="01">01</option>               
                                                
                  <option value="02">02</option>               
                                                
                  <option value="03">03</option>               
                                                
                  <option value="04">04</option>               
                                                
                  <option value="05">05</option>               
                                                
                  <option value="06">06</option>               
                                                
                  <option value="07">07</option>               
                                                
                  <option value="08">08</option>               
                                                
                  <option value="09">09</option>               
                                                
                  <option value="10">10</option>               
                                                
                  <option value="11">11</option>               
                                                
                  <option value="12">12</option>               
                                                
                  <option value="13">13</option>               
                                                
                  <option value="14">14</option>               
                                                
                  <option value="15">15</option>               
                                                
                  <option value="16">16</option>               
                                                
                  <option value="17">17</option>               
                                                
                  <option value="18">18</option>               
                                                
                  <option value="19">19</option>               
                                                
                  <option value="20">20</option>               
                                                
                  <option value="21">21</option>               
                                                
                  <option value="22">22</option>               
                                                
                  <option value="23">23</option>               
                                                
                  <option value="24">24</option>               
                                                
                  <option value="25" selected="">25</option>               
                                                
                  <option value="26">26</option>               
                                                
                  <option value="27">27</option>               
                                                
                  <option value="28">28</option>               
                                                
                  <option value="29">29</option>               
                                                
                  <option value="30">30</option>               
                                                
                  <option value="31">31</option>               
               
               
      </select>
      <select name="tanggal_posting_mon" id="tanggal_posting_mon" onchange="tanggal_posting_date_change()" class="form-control-normal">         
         
               
                  <option value="00"></option>               
               
                  <option value="01">Januari</option>               
               
                  <option value="02">Februari</option>               
               
                  <option value="03">Maret</option>               
               
                  <option value="04">April</option>               
               
                  <option value="05">Mei</option>               
               
                  <option value="06">Juni</option>               
               
                  <option value="07">Juli</option>               
               
                  <option value="08">Agustus</option>               
               
                  <option value="09">September</option>               
               
                  <option value="10" selected="">Oktober</option>               
               
                  <option value="11">November</option>               
               
                  <option value="12">Desember</option>               
               
               
      </select>
      <select name="tanggal_posting_year" id="tanggal_posting_year" onchange="tanggal_posting_date_change()" class="form-control-normal">
         
               
                  <option value="0000"></option>               
               
                  <option value="2023">2023</option>               
               
                  <option value="2022" selected="">2022</option>               
               
                  <option value="2021">2021</option>               
               
                  <option value="2020">2020</option>               
               
                  <option value="2019">2019</option>               
               
                  <option value="2018">2018</option>               
               
                  <option value="2017">2017</option>               
               
                  <option value="2016">2016</option>               
               
                  <option value="2015">2015</option>               
               
                  <option value="2014">2014</option>               
               
                  <option value="2013">2013</option>               
               
                  <option value="2012">2012</option>               
               
                  <option value="2011">2011</option>               
               
                  <option value="2010">2010</option>               
               
                  <option value="2009">2009</option>               
               
                  <option value="2008">2008</option>               
               
                  <option value="2007">2007</option>               
               
                  <option value="2006">2006</option>               
               
                  <option value="2005">2005</option>               
               
                  <option value="2004">2004</option>               
               
                  <option value="2003">2003</option>               
               
                  <option value="2002">2002</option>               
               
                  <option value="2001">2001</option>               
               
                  <option value="2000">2000</option>               
               
                  <option value="1999">1999</option>               
               
                  <option value="1998">1998</option>               
               
                  <option value="1997">1997</option>               
               
                  <option value="1996">1996</option>               
               
                  <option value="1995">1995</option>               
               
                  <option value="1994">1994</option>               
               
                  <option value="1993">1993</option>               
               
                  <option value="1992">1992</option>               
               
                  <option value="1991">1991</option>               
               
                  <option value="1990">1990</option>               
               
                  <option value="1989">1989</option>               
               
                  <option value="1988">1988</option>               
               
                  <option value="1987">1987</option>               
               
                  <option value="1986">1986</option>               
               
                  <option value="1985">1985</option>               
               
                  <option value="1984">1984</option>               
               
                  <option value="1983">1983</option>               
               
                  <option value="1982">1982</option>               
               
                  <option value="1981">1981</option>               
               
                  <option value="1980">1980</option>               
               
                  <option value="1979">1979</option>               
               
                  <option value="1978">1978</option>               
               
                  <option value="1977">1977</option>               
               
                  <option value="1976">1976</option>               
               
                  <option value="1975">1975</option>               
               
                  <option value="1974">1974</option>               
               
                  <option value="1973">1973</option>               
               
                  <option value="1972">1972</option>               
               
                  <option value="1971">1971</option>               
               
                  <option value="1970">1970</option>               
               
                  <option value="1969">1969</option>               
               
                  <option value="1968">1968</option>               
               
                  <option value="1967">1967</option>               
               
                  <option value="1966">1966</option>               
               
                  <option value="1965">1965</option>               
               
                  <option value="1964">1964</option>               
               
                  <option value="1963">1963</option>               
               
                  <option value="1962">1962</option>               
               
                  <option value="1961">1961</option>               
               
                  <option value="1960">1960</option>               
               
                  <option value="1959">1959</option>               
               
                  <option value="1958">1958</option>               
               
                  <option value="1957">1957</option>               
               
                  <option value="1956">1956</option>               
               
                  <option value="1955">1955</option>               
               
                  <option value="1954">1954</option>               
               
                  <option value="1953">1953</option>               
               
                  <option value="1952">1952</option>               
               
                  <option value="1951">1951</option>               
               
                  <option value="1950">1950</option>               
               
                  <option value="1949">1949</option>               
               
                  <option value="1948">1948</option>               
               
                  <option value="1947">1947</option>               
               
                  <option value="1946">1946</option>               
               
                  <option value="1945">1945</option>               
               
                  <option value="1944">1944</option>               
               
                  <option value="1943">1943</option>               
               
                  <option value="1942">1942</option>               
               
                  <option value="1941">1941</option>               
               
                  <option value="1940">1940</option>               
               
                  <option value="1939">1939</option>               
               
                  <option value="1938">1938</option>               
               
                  <option value="1937">1937</option>               
               
                  <option value="1936">1936</option>               
               
                  <option value="1935">1935</option>               
               
                  <option value="1934">1934</option>               
               
                  <option value="1933">1933</option>               
               
                  <option value="1932">1932</option>               
               
                  <option value="1931">1931</option>               
               
                  <option value="1930">1930</option>               
               
                  <option value="1929">1929</option>               
               
                  <option value="1928">1928</option>               
               
                       
      </select>
   </div> 

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script>
               </div>
            </div>   
            <div class="form-group">
               <label class="col-md-3 control-label"> 
               </label>
               <div class="col-md-4">
                        
                              <label style="font-weight: bold;">
                                 Semua jurnal sudah terposting
                              </label>
                           
               </div>
            </div>    
            </form>
            
     </div>
</div>



<!--<div class="petunjuk-area">
   <h4>Petunjuk:</h4>
   <div style="margin:10px 0px 0px 10px;font-weight:bold;color:#965F11">
   <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFBDD; border:#D1C698 1px solid; float: left;">
   </div> = Sudah di jurnal </div>

   <div style="margin:10px 0px 0px 10px;">
   <div style="padding:0px; margin:1px 5px 0px 0px; width:10px; height:10px; background-color:#FFFDEF; border:#D1C698 1px solid; float: left;">
   </div> = Belum di jurnal </div>
</div>-->

   <!-- FormHelper Content END-->
   
<script>if(window.ButtonAccess){ var ba = new ButtonAccess(""); ba.removeButton();}
			</script></div>