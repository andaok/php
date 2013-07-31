<?php

/**
 * Onmitech网站各部分静态HTML输出函数
 * Name:output_fns.php
 * @author TerryYe
 * @copyright 2009
 */
/**
 * html header
 */
function do_html_header($title="Welcome to Onmitech") 
{
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $title; ?></title>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 为121布局预留的div标签-->
<div id="header">
<table  border="0" cellspacing="0" cellpadding="0" style="font:bold 13px Arial">
  <tr>
	 <td style="background-image:url(images/logo.gif); background-repeat:no-repeat; width:272px; height:42px; background-position:center"></td>
	 <td width="30px"></td>
	 <td style="background-image:url(images/barblueleftround30.gif); background-repeat:no-repeat; width:6px; height:42px; background-position:center"></td>
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 <td width="90px"><p style="background:white; width:90px; height:30px; line-height:30px" align="center"><a href="index.php">Home</a></p></td>
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 <td width="90px"><p style="background:white; width:110px; height:30px; line-height:30px" align="center">About Onmitech</p></td>
	 
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 
	 <td width="90px"><p style="background:white; width:110px; height:30px; line-height:30px" align="center"><a href="contactus.php">Contact Us</a></p></td>
	 
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 
	 <td width="90px"><p style="background:white; width:116px; height:30px; line-height:15px" align="center">Online <br /> Consultation</p></td>
	 
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 
	 <td width="90px"><p style="background:white; width:90px; height:30px; line-height:30px" align="center"><a href="faq.php">FAQ</a></p></td>
	 
	 <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 
	 <td width="90px"><p style="background:white; width:110px; height:30px; line-height:15px" align="center">Payment and Delivery</p></td>
	  <td style="background-image:url(images/back30.gif); background-repeat:no-repeat; width:1px; height:42px; background-position:center"></td>
	 <td style="background-image:url(images/barbluerightround30.gif); background-repeat:no-repeat; width:6px; height:42px; background-position:center"></td> 	
  </tr>
</table>
</div>
 <?php    
}
/**
 * show html footer
 */
function do_html_footer()
{
?>
<!-- 为121布局预留的div标签-->






<div id="footer">
<p>Tel: 00852-3114 9071  Fax: 00852-3114 9072</p>
<p>
Email: sales@e-omnitech.com<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support@e-omnitech.com</p>
<p>Add: Room 1001,10/F.,Tai Yau Building,181,Johnston,Road,Wanchai,Hong Kong.</p>
<p>Copyright@Omni-tech Electronic (HK) Co.,Ltd</p>
</div>

<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
</body>
</html>
<?php
}
/**
 * show html center main catalog part
 */
function do_html_center_main_catalog()
{
 ?> 
      <div id="Accordion1" class="Accordion" tabindex="0">
      <?php get_center_main_catalog(); ?>
         <div id="catalogbottom">
         <p>Online Consultation</p>
         </div>
      </div>
      
   
 <?php   
}
/**
 * 首页类大图,home >> class >> product,(1,2,3...)分页.
 */
function do_html_center_class_datu($class='',$product='',$rowoffset,$pagesize=9) 
{
 ?>
 <div id="content">
    <div id="naviurl">
    <p><?php echo get_center_naviurl($class,$product); ?></p>
    <h4></h4>
    </div>
    <div id="selectdiv">
    <?php get_center_select(); ?>
    </div>
    
    <div id="showtable">
    <?php get_center_class_datu($rowoffset,$pagesize); ?>
    </div>
    <div id="navipage">
    <p>
    <?php
    $dbconn = db_connect();
    $query = "select * from class";
    echo get_center_navipage ($dbconn,$query,9,'',$offsetvarname='rowoffset') 
    ?>
    </p>
    <h4></h4>
    </div>
 </div>
 <?php    
}
/**
 * show html center product catalog part
 */
 function do_html_center_product_catalog($class='')
 {
  ?>
   <div id="Accordion1" class="Accordion" tabindex="0">
         <div class="AccordionPanel">
         <div class="AccordionPanelTab top">Welcome to Onmitech!</div>
         <div class="AccordionPanelproductContent">
         <?php get_center_product_cata_top($class); ?>
         <p><a href="online.php">Online Consultation</a></p>
         <div id="productcata">
         <?php get_center_product_cata($class); ?>
         </div>
         </div>
         </div>
         <div id="catalogbottom">
         <p>Online Consultation</p>
         </div>
   </div>
  <?php
 }
 /**
 * 各类所有产品图展示,home >> class >> product,(1,2,3...)分页.
 */
 function do_html_center_product_datu($class='',$product='',$rowoffset,$pagesize=9) 
 {
  ?>
 <div id="content">
    <div id="naviurl">
    <p><?php echo get_center_naviurl($class,$product); ?></p>
    <h4></h4>
    </div>
    <div id="selectdiv">
    <?php get_center_select(); ?>
    </div>
    <div id="showtable">
    <?php get_center_product_datu($class,$rowoffset,$pagesize); ?>
    </div>
    <div id="navipage">
    <p>
    <?php
    $dbconn = db_connect();
    $query = "select * from product where classname = '$class'";
    $urlothervar = "class=$class";
    echo get_center_navipage ($dbconn,$query,9,$urlothervar,$offsetvarname='rowoffset') 
    ?>
    </p>
    <h4></h4>
    </div>
 </div>
 <?php    
 }
 
 //----------产品详细信息模块---------------------//
 function do_html_center_product_info($classname,$productname) 
 {
    ?>
 <div id="content">
    <div id="naviurl">
    <p><?php echo get_center_naviurl($classname,$productname); ?></p>
    <h4></h4>
    </div>
    <div id="selectdiv">
    <?php get_center_select(); ?>
    </div>
    <div id="showtable">
    <?php 
    $producttemp = new $classname();
    $producttemp -> classname = $classname;
    $producttemp -> productname = $productname;
    $producttemp -> display();
     ?>
    </div>
    <div id="navipage">
    <p>
    </p>
    <h4></h4>
    </div>
 </div>
 <?php    
 }
 
//---------- FAQ 主体-----------------------------------//
function do_html_faq() 
{
    ?>
    <hr color="#2E6FA9" align="center" />
     <table width="800" border="0" cellpadding="5" cellspacing="5">
                <tr>
                  <td><table width="800" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="200" align="center"><span class="STYLE12"><img src="images/tsf.jpg" width="20" height="20" /><strong><a href="#card">Cards</a></strong></span></td>
                      <td width="200" align="center" class="STYLE12"><img src="images/tsf.jpg" width="20" height="20" /><a href="#tagandlabel"><strong>Tag and Labels</strong></a></td>
                      <td width="200" align="center"><span class="STYLE12"><img src="images/tsf.jpg" width="20" height="20" /><a href="#module"><strong>RFID Module</strong></a></span></td>
                      <td width="200" align="center"><span class="STYLE12"><img src="images/tsf.jpg" width="20" height="20" /><a href="#reader"><strong>RFID Reader</strong></a></span></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE38"><img src="images/tsf.jpg" width="20" height="20" /><strong>Cards</strong><a name="card" id="card"></a><br />
                  </span>
                  <hr color="#000000" size="2" width="120" align="left" /></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">1.<span class="STYLE37">What kind of chip you can offer?   
                  </span></span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">UHF:  U-code HSL/U-code-EPC G2/ Em4222/ST XR400/SR/X 256<br />
                    HF:Mifare/S50/S70/Ultralight/SLE66R35/SHC1104/FM11RF08/ST176/Atmel88RF020/Ti2048/Ti256/Legic  min256/I-code1, 2, SLI/Hitag1, 2, S/Inside2k 16k<br />
                    LF:  EM4100/4102/4450/TK4100/TK9013/Temic5557</p></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">2.Does your company offer pre-printing service? What kind of printing you can offer?
                    </span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">We  offer two sides, four colors normal printing, and we also can print  personalized information (logo, ID number or serial number) according to your requirements, besides, we offer laser and silk printing, for  special color, golden sliver and complicated mix-color can also reach a good  effect.</p></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">3.What is the MOQ for pre-printed card?</span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">1000pcs </p></td>
                </tr>
                <tr>
                  <td align="left" class="STYLE38"><img src="images/tsf.jpg" width="20" height="20" /><strong>Tag and Labels</strong><a name="tagandlabel" id="tagandlabel"></a><br /> 
                  <hr color="#000000" size="2" width="180" align="left" /></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">1.What is the application for tags and labels?</span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">Tags: access  control, attendance control, identification, logistic, industrial automation,  skating, tickets, casino token, membership, public transportation, e-payment,  animal tracking, multi-purpose-card system, catering, swimming pool, laundry,  massage center, recreation center.<br />
                  Labels: goods supply management, package and mail service, logistic and storage management system, library and its rent service, airplane luggage label, product certificate, brand anti-fake protection, identification system.</p></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">2.What is the encapsulation material for tags, and can tags and labels be printed?</span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">Tags  encapsulation material: PVC, PET, ABS <br />
                    Tags  and labels can printed also</p></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE38"><img src="images/tsf.jpg" width="20" height="20" /><strong>RFID Module</strong><a name="module" id="module"></a><br />
                  <hr color="#000000" size="2" width="170" align="left" /></span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">1.Does your module accept OEM and do you offer Demo?</span></td>
                </tr>
                <tr>
                  <td align="left"><p class="STYLE37">Yes, we accept OEM according to  our customer’s needs, can be different size and with your brand name on it.<br />
                    We offer free SDK and example program  for your second-round development.</p></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">2.Is your company product antenna or your module with matched antenna?</span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE37">Our OMT-800M has its matched antenna, and we also can OEM antenna as per your specific needs. </span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE38"><img src="images/tsf.jpg" width="20" height="20" /><strong>RFID Reader</strong><a name="reader" id="reader"></a><br />
                  <hr color="#000000" size="2" width="170" align="left" /></span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">1.What kind of interfaces your company can offer for LF/HF readers?</span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE37">RS232, USB, RS485, Wigand 26</span></td>
                </tr>
                <tr>
                  <td align="left"><span class="STYLE42">2.What kind of example program you can offer for readers?</span></td>
                </tr>
				 <tr>
                  <td align="left"><span class="STYLE37">BC, DELPHI, PB, VB, VC</span></td>
                </tr>
              </table>
              <hr color="#2E6FA9" align="center" />
    <?php
}

//--------contact us 主体----------------------------//

function do_html_contactus() 
{
    ?>
    <div id="content">
    <div id="naviurl">
    <p></p>
    <h4></h4>
    </div>
    <div id="selectdiv">
    <?php //get_center_select(); ?>
    </div>
    <div id="showtable">
    <!--contact us start -->
    <table width="658" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
		<table border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr><td colspan="2" align="left"><span class="contact1">Contact US</span>
          </td>
		  </tr>
		  <tr><td colspan="2"><hr size="2" color="#000000" />
          </td></tr>
          <tr>
            <td width="84" align="center" bgcolor="#FFFFFF"><span class="contact2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Address:</strong></span></td>
            <td width="501" align="left"><span class="contact2"><strong>Room 1001, 10/F., Tai Yau Building, 181 Johnston Road, Wanchai, Hong Kong</strong></span></td>
          </tr>
		  <tr><td colspan="2" height="5"></td>
		  </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><span class="contact2"><strong>Telephone:</strong></span></td>
            <td align="left"><span class="contact2"><strong>00852-3114 9071</strong></span></td>
          </tr>
		   <tr><td colspan="2" height="5"></td>
		   </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><span class="contact2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax:</strong></span></td>
            <td align="left"><span class="contact2"><strong>00852-3114 9072</strong></span></td>
          </tr>
		   <tr><td colspan="2" height="5"></td>
		   </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><span class="contact2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail:</strong></span></td>
            <td align="left"><span class="contact2"><strong>sales@e-omnitech.com </strong></span></td>
          </tr>
		   <tr><td colspan="2" height="5"></td>
		   </tr>
          <tr>
            <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="left"><span class="contact2"><strong>support@e-omnitech.com</strong></span></td>
          </tr>
		  <tr><td colspan="2"><hr size="2" color="#000000" />
</td></tr>
        </table>
		</td>
      </tr>
      <!-- message start -->
      <tr>
      <td>
      <form action="contactus.php" method="post">
      
      <table align="center">
      <tr><td colspan="2" height="20"></td></tr>
      
      <tr>
      <td align="center" width="84"><span class="contact3">*Name:</span></td>
      <td align="left" width="480" >
      <input type="text" name="BOOK_NAME" size="20" />
      <span>
      <input class="contact4" type="text" name="BOOK_NAME_INFO" value="" />
      </span>
      </td>
      </tr>
      
      <tr>
      <td align="center" width="84"><span class="contact3">*Email:</span></td>
      <td align="left" width="480">
      <input type="text" name="BOOK_EMAIL" size="20" />
      <span>
      <input class="contact4" type="text" name="BOOK_EMAIL_INFO" value="" />
      </span>
      </td>
      </tr>

      <tr>
      <td align="center" width="84"><span class="contact3">*Subject:</span></td>
      <td align="left" width="480">
      <input type="text" name="BOOK_SUBJECT" size="40" />
      <span>
      <input class="contact4" type="text" name="BOOK_SUBJECT_INFO" value=""/>
      </span>
      </td>
      </tr>

      <tr>
      <td align="center" width="84"><span class="contact3">*Message:</span>
      </td>
      <td align="left" width="480">
      <textarea name="BOOK_CONTENT" cols="50" rows="11"></textarea>
      <span>
      <input class="contact4" type="text" name="BOOK_CONTENT_INFO" />
      </span>
      </td>
      </tr>
      
      <tr>
      <td></td>
      <td align="left">
      <input type="submit" name="SendMsg" value="Send" />
      </td>
      </tr>
      </table>
      </form>
      
      </td>
      </tr>
      <!-- message end -->
      </table>
    <!--contact us end -->
    </div>
    <div id="navipage">
    <p></p>
    <h4></h4>
    </div>
 </div>
 <?php    
}

?>