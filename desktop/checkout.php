<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>novEASE</title>
<link href="css/checkout.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet" type="text/css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<script>
function getDate(days) {      
	var monthNames = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");    
	var now = new Date();   
	now.setDate(now.getDate() + days);   
	var nowString =  monthNames[now.getMonth()] + " " +  now.getDate() + ", " + now.getFullYear();   
	document.write(nowString); 
	}
</script>
</head>

<body>
<div class="chktop">
    <div class="container">
         <img src="images/chk-top.png" alt="" />
    </div>
</div>
<!------------start-sec1------------------>
<div class="secone">
   <div class="container">
   	   <div class="s1inner">       		
       	    <div class="chk-lft">
            	<p class="chklft-hding">select your package today & Save More!</p>                
                <div class="pkg1">               
                    <div class="pkg-hdbox">
                        <p class="pkg-hding">Buy 5 Bottle Supply</p>
                        <div class="pkg-desc"><p>Popular Package</p></div>
                    </div>
                    <div class="pkg-contbox">
                        <div class="pkg-contboxlft">
                        	<img src="images/5btl.png" alt="" width="211" height="164" class="btl5" />
                            <div class="offbox1"><p class="offbox-txt">40%<br />Off</p></div>
                        </div>
                        <div class="pkg-contboxrgt">
                            <div class="pkgcontbox">
                                <p class="pkgcont-hding">YOU SAVE  $139.98</p>
                                <p class="reg-price">REGULAR <span class="strikeout">$209.97</span></p>
                                <p class="sl-price">$41.99<span>/ea</span></p>
                            </div>
                            <button type="submit" class="select-btn" id="btn1"></button>
                        </div>                            
                    </div>
                    <div>
                        <div class="pkgbtm-box1">
                            <p class="subscribe-save pkg1-txt"><span>subscribe</span><br /> & save 50%</p>
                        </div>
                        <div class="pkgbtm-box2">
                            <p class="rtl-price">Retail <span class="strikeout">$349.95</span><br />
                            <span class="rtl2 pkg1-txt">$34.99</span><span class="rtl3 pkg1-txt">/month</span></p>
                        </div>
                        <div class="pkgbtm-box3">
                            <p class="save-price">YOU SAVE<br /> <span class="pkg1-txt">$174.97</span></p>
                        </div>
                        <div class="pkgbtm-box4"><button class="subscribe-btn" id="subbtn1"></button></div>
                    </div>                                
                </div>
                <div class="pkg2">
                	<div class="pkg-hdbox">
                        <p class="pkg-hding">Buy 3 Bottle Supply</p>
                        <div class="pkg-desc"><p>best value Package</p></div>
                    </div>
                    <div class="pkg-contbox">
                        <div class="pkg-contboxlft">
                        	<img src="images/3btl.png" alt="" width="153" height="164" class="btl3" />
                            <div class="offbox2"><p class="offbox-txt">20%<br />Off</p></div>
                        </div>
                        <div class="pkg-contboxrgt">
                            <div class="pkgcontbox">
                                <p class="pkgcont-hding">YOU SAVE  $41.99</p>
                                <p class="reg-price">REGULAR <span class="strikeout">$167.98</span></p>
                                <p class="sl-price">$55.99<span>/ea</span></p>
                            </div>
                            <button type="submit" class="select-btn" id="btn2"></button>
                        </div>                            
                    </div>
                    <div>
                        <div class="pkgbtm-box1">
                            <p class="subscribe-save pkg2-txt"><span>subscribe</span><br /> & save 30%</p>
                        </div>
                        <div class="pkgbtm-box2">
                            <p class="rtl-price">Retail <span class="strikeout">$209.97</span><br />
                            <span class="rtl2 pkg2-txt">$48.98</span><span class="rtl3  pkg2-txt">/month</span></p>
                        </div>
                        <div class="pkgbtm-box3">
                            <p class="save-price">YOU SAVE<br /> <span class="pkg2-txt">$62.99</span></p>
                        </div>
                        <div class="pkgbtm-box4"><button class="subscribe-btn" id="subbtn2"></button></div>
                    </div>           
                </div>
                <div class="pkg3">
                	<div class="pkg-hdbox">
                        <p class="pkg-hding">Buy 1 Bottle Supply</p>
                        <div class="pkg-desc"><p>sampler Package</p></div>
                    </div>
                    <div class="pkg-contbox">
                        <div class="pkg-contboxlft">
                        <img src="images/1btl.png" alt="" width="59" height="164" class="btl1" /></div>
                        <div class="pkg-contboxrgt">
                            <div class="pkgcontbox">
                                <p class="pkgcont-hding">YOU SAVE  $00.00</p>                       
                                <p class="sl-price" style="padding-top:20px;">$69.99<span>/ea</span></p>
                            </div>
                            <button type="submit" class="select-btn" id="btn3"></button>
                        </div>                            
                    </div>
                    <div>
                        <div class="pkgbtm-box1">
                            <p class="subscribe-save  pkg3-txt"><span>subscribe</span><br /> & save 10%</p>
                        </div>
                        <div class="pkgbtm-box2">
                            <p class="rtl-price">Retail <span class="strikeout">$69.99</span><br />
                            <span class="rtl2 pkg3-txt">$63.00</span><span class="rtl3 pkg3-txt">/month</span></p>
                        </div>
                        <div class="pkgbtm-box3">
                            <p class="save-price">YOU SAVE<br /> <span class="pkg3-txt">$6.99</span></p>
                        </div>
                        <div class="pkgbtm-box4"><button class="subscribe-btn" id="subbtn3"></button></div>
                    </div>           
                </div>
                <div class="summary-box">
                	<p class="smry-hding">Order Summary</p>
                    <div class="clearall"></div>
                    <div id="pkg1-prc">
                        <div class="smry-lft"> 
                        	<div id="pkg-btl"><img src="images/smry-5btl.png" alt="" class="smrybtl" /></div>                  	
                            <img src="images/postal.png" alt="" class="smryimg" />
                        </div>
                        <div class="smry-rgt">
                            <ul class="smrylist">
                                <li>novease pure cbd relief<br />
                                <span id="pkgname">Buy 5 Bottles</span></li>
                                <li id="btl-prc">$209.95</li>
                                <li>Shipping and Handling</li>
                                <li id="shp">$0.00</li>
                                <li>Discount</li>
                                <li id="discount">$0.00</li>
                                <li>Total</li>
                                <li id="total">$209.95</li>
                            </ul>
                        </div>
                    </div>                                         
                </div>
            </div>
            <div class="chk-rgt">
            	<div class="sldrtxt" id="fades">
                    <p> 30 people viewing this product right now</p>
                    <p> 25 people purchased this in the last hour</p>
                </div>
            	<div class="chkfrm-top"><img src="images/chk-frmtop.png" alt="" /></div>
                <div class="chkfrm-mid">
                	<p class="weaccept">We Accept</p>
                    <img src="images/cards.png" alt="" class="cards" />
                	<div class="sameas">
                       <input type="checkbox" class="chkbx" checked="checked" id="chkfld" />
                       Is your billing address the same as your <br />shipping address?
                    </div>		
                    <div class="clearfix"></div>                 
                    <div id="billingDiv" style="display:none">
                    	<div class="frmElmnts">
                        	<label>First Name</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>Last Name</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>Address</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>City</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>State</label>
                            <select>    
                                <option value="" onClick="">Select State</option> 
                                <option value='AL' onclick=''  >Alabama (AL)</option>
                                <option value='AK' onclick=''  >Alaska (AK)</option>
                                <option value='AS' onclick=''  >American Samoa (AS)</option>
                                <option value='AZ' onclick=''  >Arizona (AZ)</option>
                                <option value='AR' onclick=''  >Arkansas (AR)</option>
                                <option value='AE-A' onclick=''  >Armed Forces Africa (AE)</option>
                                <option value='AA' onclick=''  >Armed Forces Americas (AA)</option>
                                <option value='AE-C' onclick=''  >Armed Forces Canada (AE)</option>
                                <option value='AE-E' onclick=''  >Armed Forces Europe (AE)</option>
                                <option value='AE-M' onclick=''  >Armed Forces Middle East (AE)</option>
                                <option value='AP' onclick=''  >Armed Forces Pacific (AP)</option>
                                <option value='CA' onclick=''  >California (CA)</option>
                                <option value='CO' onclick=''  >Colorado (CO)</option>
                                <option value='CT' onclick=''  >Connecticut (CT)</option>
                                <option value='DE' onclick=''  >Delaware (DE)</option>
                                <option value='DC' onclick=''  >District of Columbia (DC)</option>
                                <option value='FM' onclick=''  >Federated States of Micronesia (FM)</option>
                                <option value='FL' onclick=''  >Florida (FL)</option>
                                <option value='GA' onclick=''  >Georgia (GA)</option>
                                <option value='GU' onclick=''  >Guam (GU)</option>
                                <option value='HI' onclick=''  >Hawaii (HI)</option>
                                <option value='ID' onclick=''  >Idaho (ID)</option>
                                <option value='IL' onclick=''  >Illinois (IL)</option>
                                <option value='IN' onclick=''  >Indiana (IN)</option>
                                <option value='IA' onclick=''  >Iowa (IA)</option>
                                <option value='KS' onclick=''  >Kansas (KS)</option>
                                <option value='KY' onclick=''  >Kentucky (KY)</option>
                                <option value='LA' onclick=''  >Louisiana (LA)</option>
                                <option value='ME' onclick=''  >Maine (ME)</option>
                                <option value='MD' onclick=''  >Maryland (MD)</option>
                                <option value='MA' onclick=''  >Massachusetts (MA)</option>
                                <option value='MI' onclick=''  >Michigan (MI)</option>
                                <option value='MN' onclick=''  >Minnesota (MN)</option>
                                <option value='MS' onclick=''  >Mississippi (MS)</option>
                                <option value='MO' onclick=''  >Missouri (MO)</option>
                                <option value='MT' onclick=''  >Montana (MT)</option>
                                <option value='NE' onclick=''  >Nebraska (NE)</option>
                                <option value='NV' onclick=''  >Nevada (NV)</option>
                                <option value='NH' onclick=''  >New Hampshire (NH)</option>
                                <option value='NJ' onclick=''  >New Jersey (NJ)</option>
                                <option value='NM' onclick=''  >New Mexico (NM)</option>
                                <option value='NY' onclick=''  >New York (NY)</option>
                                <option value='NC' onclick=''  >North Carolina (NC)</option>
                                <option value='ND' onclick=''  >North Dakota (ND)</option>
                                <option value='MP' onclick=''  >Northern Mariana Islands (MP)</option>
                                <option value='OH' onclick=''  >Ohio (OH)</option>
                                <option value='OK' onclick=''  >Oklahoma (OK)</option>
                                <option value='OR' onclick=''  >Oregon (OR)</option>
                                <option value='PA' onclick=''  >Pennsylvania (PA)</option>
                                <option value='PR' onclick=''  >Puerto Rico (PR)</option>
                                <option value='MH' onclick=''  >Republic of Marshall Islands (MH)</option>
                                <option value='RI' onclick=''  >Rhode Island (RI)</option>
                                <option value='SC' onclick=''  >South Carolina (SC)</option>
                                <option value='SD' onclick=''  >South Dakota (SD)</option>
                                <option value='TN' onclick=''  >Tennessee (TN)</option>
                                <option value='TX' onclick=''  >Texas (TX)</option>
                                <option value='UT' onclick=''  >Utah (UT)</option>
                                <option value='VT' onclick=''  >Vermont (VT)</option>
                                <option value='VI' onclick=''  >Virgin Islands of the U.S. (VI)</option>
                                <option value='VA' onclick=''  >Virginia (VA)</option>
                                <option value='WA' onclick=''  >Washington (WA)</option>
                                <option value='WV' onclick=''  >West Virginia (WV)</option>
                                <option value='WI' onclick=''  >Wisconsin (WI)</option>
                                <option value='WY' onclick=''  >Wyoming (WY)</option>
                    		</select>
                        </div>
                        <div class="frmElmnts">
                        	<label>Zip</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>Phone</label>
                            <input type="text" placeholder="" />
                        </div>
                        <div class="frmElmnts">
                        	<label>Email</label>
                            <input type="text" placeholder="" />
                        </div>
                    </div>                    
                    <div class="frmElmnts">
                        <label>Card Type</label>
                        <select>
                            <option>Visa</option>
                            <option>Mastercard</option>
                            <option>Discover</option>
                        </select>
                    </div>
                    <div class="frmElmnts">
                    	<label>Card Number</label>
                        <input type="text" placeholder="" />
                    </div>
                    <div class="frmElmnts">
                    	<label>Expiry Date</label>
                        <select class="short">
                            <option selected="" value="">Month</option>
                            <option value="01">(01) January</option>
                            <option value="02">(02) February</option>
                            <option value="03">(03) March</option>
                            <option value="04">(04) April</option>
                            <option value="05">(05) May</option>
                            <option value="06">(06) June</option>
                            <option value="07">(07) July</option>
                            <option value="08">(08) August</option>
                            <option value="09">(09) September</option>
                            <option value="10">(10) October</option>
                            <option value="11">(11) November</option>
                            <option value="12">(12) December</option>
                         </select>
                         <select class="short2">
                            <option value="Exp. Year">Year</option> 
                            <option value="17">2017</option>
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>                                                
                         </select>
                    </div> 
                    <div class="frmElmnts">
                    	<label>CVV</label>
                        <input type="text" placeholder="" class="short" />
                        <a   href="cvv.php" class="fancybox fancybox.iframe what">What is This?</a>                   
                	</div> 
                    <div class="clearall"></div>                   
                    <button type="submit" class="chk-submit pulse"></button>
                                  		
                </div>
                <div class="chkfrm-btm"><img src="images/chk-frmbtm.png" alt="" /></div>
                <div class="clearall"></div>
                <div class="moneyback-box">
                	<img src="images/moneyback.jpg" alt="" class="moneyback-seal" />
                    <p class="moneyback-hding1">90 Day Money-back Guarantee</p> 
                    <div class="moneyback-hding2"><p>YOU ARE PROTECTED BY OUR 90-DAY<br /> 
					RISK-FREE MONEY-BACK GUARANTEE!</p></div>            
                    <p class="moneyback-txt">Test drive CBD NOVEASE Relief and if you 
                    are not satisfied for any reason, take up to 90 days to return the 
                    unused portion and we’ll refund 100% if your purchase price plus $10 
                    for just giving it a fair shot.</p>
                </div>
                <div class="clearall"></div>
                <div class="safebox">
                	<div class="safe-hdbox">
                    	<p class="safehd1">Shop With Confidence</p>
                        <p class="safehd2">CBDnovease Relief is safe & secure. Guaranteed</p>
                    </div>
                    <p class="safetxt">You’ll pay nothing if unauthorized charges are made to 
                    your credit card as a result of shopping at www.cbd.com</p>
                </div>
            </div>
       </div>
   </div>
</div> 
<!---------------start-footer------------------->
<div id="footer">
        <div class="container">
         <p class="frt-txt2">
            <a href="#">CONTACT US  </a>|  <a href="#">TERMS AND CONDITIONS</a> |  <a href="#">PRIVACY POLICY</a>
            |  <a href="#">CLINICAL STUDY</a>
            </p>
           <p class="frt-txt1">* These statements have not been evaluated by the FDA. If you are pregnant, nursing, 
           taking medications, or have a medical condition, consult your physician before using this product. 
           Representations regarding the efficacy and safety of novEASE have not been evaluated by the Food and 
           Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. 
           These products are not intended to diagnose, prevent, treat, or cure any disease. 
           <a href="https://www.ncbi.nlm.nih.gov/pubmed/18728714" target="_blank" style="color:#03F">CLICK HERE</a> to find 
           evidence of a test, analysis, research, or study describing the benefits, performance or efficacy of 
            based on the expertise of relevant professionals.</p>
           
          <br>
            <p class="frt-txt1"> Copyright 
			<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> 
            © - All Rights Reserved - novEASE
            </p>
        </div>
 </div>
     
<!--------------------------->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('.fancybox').fancybox(); 
			
		$("#btn1").click(function(){
			//$(".pkg1").addClass("picked");		
			//$(".pkg2, .pkg3").removeClass("picked");
			$("#btn1, .offbox1").addClass("selected");	
			$("#btn2, #btn3, .offbox2").removeClass("selected");	
			//$("#pkg1-prc").css("display","block");
			//$("#pkg2-prc, #pkg3-prc").css("display","none");
			$('#pkg-btl img').attr("src", "images/smry-5btl.png");
			$("#pkgname").html("Buy 5 Bottle Supply");
			$("#btl-prc").html("$209.95");
			$("#shp").html("$0.00");
			$("#discount").html("$0.00");
			$("#total").html("$209.95");
			
			
			//$(".pkg1-txt").css("color","#fff");
			//$(".pkg2-txt, .pkg3-txt").css("color","#ffe63d");		
		});
	    $("#subbtn1").click(function(){
			$("#subbtn1").addClass("selected");
			$("#subbtn2, #subbtn3").removeClass("selected");			
		});
		
		$("#btn2").click(function(){
			//$(".pkg2").addClass("picked");		
			//$(".pkg1, .pkg3").removeClass("picked");
			$("#btn2, .offbox2").addClass("selected");	
			$("#btn1, #btn3, .offbox1").removeClass("selected");				
			//$("#pkg2-prc").css("display","block");
			//$("#pkg1-prc, #pkg3-prc").css("display","none");		
			$('#pkg-btl img').attr("src", "images/smry-3btl.png");
			$("#pkgname").html("Buy 3 Bottle Supply");
			$("#btl-prc").html("$167.97");
			$("#shp").html("$0.00");
			$("#discount").html("$0.00");
			$("#total").html("$167.97");
			
			//$(".pkg2-txt").css("color","#fff");
			//$(".pkg1-txt, .pkg3-txt").css("color","#ffe63d");		
		});
		$("#subbtn2").click(function(){
			$("#subbtn2").addClass("selected");
			$("#subbtn1, #subbtn3").removeClass("selected");			
		});
	
		$("#btn3").click(function(){
			//$(".pkg3").addClass("picked");		
			//$(".pkg1, .pkg2").removeClass("picked");
			$("#btn3").addClass("selected");	
			$("#btn1, #btn2, .offbox1, .offbox2").removeClass("selected");			
			//$("#pkg3-prc").css("display","block");
			//$("#pkg2-prc, #pkg1-prc").css("display","none");		
			$('#pkg-btl img').attr("src", "images/smry-1btl.png");
			$("#pkgname").html("Buy 1 Bottle Supply");
			$("#btl-prc").html("$69.99");
			$("#shp").html("$0.00");
			$("#discount").html("$0.00");
			$("#total").html("$69.99");
			
			//$(".pkg3-txt").css("color","#fff");
			//$(".pkg2-txt, .pkg1-txt").css("color","#ffe63d");		
		});
		$("#subbtn3").click(function(){
			$("#subbtn3").addClass("selected");
			$("#subbtn1, #subbtn2").removeClass("selected");			
		});
		
		$("#chkfld").click(function(){           
			$("#billingDiv").slideToggle();
		});  
		
		$("#fades p").hide();
			function fades($div, cb) {
			$div.fadeIn(2000, function () {
			$div.fadeOut(2000, function () {
				var $next = $div.next();
				if ($next.length > 0) {
					fades($next, cb);
				}
				else {
					// The last element has faded away, call the callback
					cb();
				}
			});
			});
			}
			
			function startFading($firstDiv) {
			fades($firstDiv, function () {
			startFading($firstDiv);
			});
			}
		
		startFading($("#fades p:first-child"));
		
	});
</script>
</body>
</html>