<?php

/**
 * CARD类的相关类库
 */
require_once('onmitech_fns.php');


//class card
class card {
      public $classname = "CArd";
      public $productname = "Ultralight";
      public function __set($name,$value) {
             $this -> $name = $value;
      }
      //price table header
      public function showpriceheader() {
             ?>
             <!-- price table start -->
               <tr>
                 <td width="105" rowspan="2" bgcolor="#77C3FF" align="center">QTY</td>
                 <td colspan="6" bgcolor="#77C3FF" align="center">Quotation ( USD )</td> 
               </tr>
               <tr>
                 <td width="42" height="104" bgcolor="#77C3FF" valign="middle">White CARD</td>
                 <td width="79" align="center" valign="middle" bgcolor="#77C3FF">
                 Printed<br />4C+4C <br />
                <a onMouseOver="check(t1)" onMouseOut="check(t1)">
                <img src="images/tsf.jpg" width="20" height="20" /></a>
                 </td>
                 <td width="120" bgcolor="#77C3FF" valign="middle">JET Serial <br />
                  Number<br />
                  <img src="images/icodejet.bmp" width="120" height="20" />
                 </td>
                 <td width="120" bgcolor="#77C3FF" valign="middle">Laser Serial <br />
                  Number<br />
                  <img src="images/icodelaser.bmp" width="120" height="20" />
                 </td>
                 <td width="122" bgcolor="#77C3FF" valign="middle">Pressed Serial <br />
                  Number<br />
                 <img src="images/icodePressed.bmp" width="120" height="20" />
                 </td>
                 <td width="117" align="center" valign="middle" bgcolor="#77C3FF">Electronic Personalization<br />
                 <a onMouseOver="check(t2)" onMouseOut="check(t2)"><img src="images/tsf.jpg" width="20" height="20" /></a>
                 </td>
              </tr>
            <!-- price table end -->
             <?php
      }
      //表头隐藏的DIV t1 and t2
      public function showhidediv() {
             ?>
             <!-- t1开始 -->
             <div id='t1'  style='position:absolute;margin-top:-129px;margin-left:-56px;text-align:center; display:none; z-index:999; width:118px; height:68px; visibility:visible; left: 535px; top: 563px;'>
                  <table width="112" height="107" border="1" cellpadding="0" cellspacing="0">
                      <tr bordercolor="#FFFFFF">
                         <td width="108">
	                       <table width="108" border="0" cellspacing="0" cellpadding="3" bgcolor="#77C3FF">
                             <tr>
                               <td width="104" align="left"><span class="STYLE12 STYLE19 STYLE34">offset</span></td>
                             </tr>
                             <tr>
                               <td align="left"><span class="STYLE12 STYLE19 STYLE34">printing</span></td>
                             </tr>
                             <tr>
                               <td align="left"><span class="STYLE33 STYLE34">four</span></td>
                             </tr>
                             <tr>
                               <td align="left"><span class="STYLE12 STYLE19 STYLE34">colors</span></td>
                             </tr>
                             <tr>
                               <td align="left"><span class="STYLE12 STYLE19 STYLE34">double side </span></td>
                             </tr>
                          </table>
                       </td>
                      </tr>
                  </table>
           </div>
           <!-- t1结束 -->
           <!-- t2开始 -->
           <div id='t2'  style='position:absolute;margin-top:-129px; margin-left:-56px;text-align:center; z-index:999; display:none; width:118px; height:68px; visibility:visible; left: 1000px; top: 603px;'>
                <table width="112" height="60" border="1" cellpadding="0" cellspacing="0">
                   <tr bordercolor="#FFFFFF">
                      <td width="108">
                         <table width="108" border="0" cellspacing="0" cellpadding="3" bgcolor="#77C3FF">
                           <tr>
                            <td width="104" align="left"><span class="STYLE12 STYLE19 STYLE34">Data written into</span></td>
                           </tr>
                           <tr>
                            <td align="left"><span class="STYLE12 STYLE19 STYLE34">card according to</span></td>
                           </tr>
                           <tr>
                            <td align="left"><span class="STYLE33 STYLE34">client request</span></td>
                           </tr>
                        </table>
                     </td>
                 </tr>
               </table>
           </div>
           <!-- t2结束 -->
             <?php
      }
      //show product value table
      public function showvaluetable() {
             $row = $this -> getdbdata();
             echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\">";
             //1 line
             echo "<tr>";
             echo "<td>".$row['key1']."</td>";
             echo "<td>".$row['name']."</td>";
             echo "</tr>";
             //2 line
             echo "<tr>";
             echo "<td>".$row['key2']."</td>";
             echo "<td>".$row['value2']."</td>";
             echo "</tr>";
             //3 line
             echo "<tr>";
             echo "<td>".$row['key3']."</td>";
             echo "<td>".$row['value3']."</td>";
             echo "</tr>";
             //4 line
             echo "<tr>";
             echo "<td>".$row['key4']."</td>";
             echo "<td>".$row['value4']."</td>";
             echo "</tr>";
             //5 line
             echo "<tr>";
             echo "<td>".$row['key5']."</td>";
             echo "<td>".$row['value5']."</td>";
             echo "</tr>";
             //6 line
             echo "<tr>";
             echo "<td>".$row['key6']."</td>";
             echo "<td>".$row['value6']."</td>";
             echo "</tr>";
             //7 line
             echo "<tr>";
             echo "<td>".$row['key7']."</td>";
             echo "<td>".$row['value7']."</td>";
             echo "</tr>";
             //8 line
             echo "<tr>";
             echo "<td>".$row['key8']."</td>";
             echo "<td><img border=\"0\" src=\"images/pdf.bmp\" width=\"16\" height=\"16\" /><a target=\"_blank\" href=\"pdf/".$row['value8']."\">".$row['value8']."</a></td>";
             echo "</tr>";
             echo "</table>";
      }
      //show price table footer
      public function showpricefooter() {
             $row = $this -> getdbdata();
             ?>
             <tr>
                <td height="23">1 - 999</td>
                <td><?php echo $row['price11'] ?></td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
              </tr>
              <tr>
                <td height="23">1,000 - 4,999</td>
                <td><?php echo $row['price12'] ?></td>
                <td><?php echo $row['price21'] ?></td>
                <td rowspan="5"><?php echo $row['price3'] ?></td>
                <td rowspan="5"><?php echo $row['price4'] ?></td>
                <td rowspan="5"><?php echo $row['price5'] ?></td>
                <td rowspan="5"><?php echo $row['price6'] ?></td>
              </tr>
              <tr>
                <td height="24">5,000 - 9,999</td>
                <td><?php echo $row['price13'] ?></td>
                <td><?php echo $row['price22'] ?></td>
              </tr>
              <tr>
                <td height="22">10,000 - 49,999</td>
                <td><?php echo $row['price14'] ?></td>
                <td><?php echo $row['price23'] ?></td>
              </tr>
              <tr>
                <td height="22">50,000 - 99,999</td>
                <td><?php echo $row['price15'] ?></td>
                <td><?php echo $row['price24'] ?></td>
              </tr>
              <tr>
                <td height="21">&gt;100,000</td>
                <td><?php echo $row['price16'] ?></td>
                <td><?php echo $row['price25'] ?></td>
              </tr>
             <?php
      }
      //get product pic url
      public function getimageurl() {
             $row = $this -> getdbdata();
             return $row['image'];
      }
      //get whether show price table bool
      public function getshowpricebool() {
             $row = $this -> getdbdata();
             return $row['showprice'];
      }
      //conntect to database
      public function getdbdata() {
              $classname = $this -> classname;
              $productname = $this -> productname;
              $dbconn = db_connect();
              $query = "select * from $classname where name = '$productname'";
              $result = $dbconn -> query($query);
              if(!$result) {
                throw new Exception('class_fns:getdbdata:conn to db error');
              }
              $num_rows = $result -> num_rows;
              $row = $result -> fetch_assoc();
              return $row;
      }
      //close db connect
      /**
      * private function closedbconn($dbconn,$result) {
      *               $result -> free();
      *               $dbconn -> close();
      *       }
      */
      //display function
      public function display() {
        //echo "<html><head>";
        //echo "<title>test page</title>";
        //echo "<script src=\"SpryAssets/SpryAccordion.js\" type=\"text/javascript\"></script>";
        //echo "</head>";
        //echo "<body>";
        $this -> showhidediv();
        echo "<table class=\"infotable\">";
        echo "<tr>";
        echo "<td>";
        $image = $this -> getimageurl();
        echo "<img src=\"images/superdatu/".$image."\" />";
        echo "</td>";
        echo "<td>";
        $this -> showvaluetable();
        echo "</td>";
        echo "</tr>";
        $showprice = $this -> getshowpricebool();
        if ($showprice) {
        echo "<tr>";
        echo "<td colspan=\"2\">";
        echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\">";
        $this -> showpriceheader();
        $this -> showpricefooter();
        echo "</table>";
        echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
        //echo "</body>";
        //echo "</html>";
      }
}

//update card product 

class updatecard {
    public $classname;
    public $productname;
    public $buttonstatus;
    public $row;
    public function __construct($classname,$buttonstatus,$productname="cardname") {
        $this -> classname = $classname;
        $this -> productname = $productname;
        $this -> buttonstatus = $buttonstatus;
        $this -> row = get_product_data($this -> classname,$this -> productname);
        $this -> display();
    }
    
    //show product attribute in input text
    private function show_productattri_in_inputtext() {
             $row = $this -> row;
             echo "<table>";
             //1 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key1",$row['key1']);
             echo "</td>";
             echo "<td>";
             
             if ($this -> buttonstatus == "update") {
                echo "<input type=\"hidden\" name=\"name\" value=\"".$row['name']."\" />";
             } else {
                echo "<input type=\"text\" name=\"name\" value=\"".$row['name']."\" />";
             }
             echo "</td>";
             echo "</tr>";
             //2 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key2",$row['key2']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value2",$row['value2']);
             echo "</td>";
             echo "</tr>";
             //3 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key3",$row['key3']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value3",$row['value3']);
             echo "</td>";
             echo "</tr>";
             //4 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key4",$row['key4']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value4",$row['value4']);
             echo "</td>";
             echo "</tr>";
             //5 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key5",$row['key5']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value5",$row['value5']);
             echo "</td>";
             echo "</tr>";
             //6 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key6",$row['key6']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value6",$row['value6']);
             echo "</td>";
             echo "</tr>";
             //7 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key7",$row['key7']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value7",$row['value7']);
             echo "</td>";
             echo "</tr>";
             //8 line
             echo "<tr>";
             echo "<td>";
             show_datain_inputtext("key8",$row['key8']);
             echo "</td>";
             echo "<td>";
             show_datain_inputtext("value8",$row['value8']);
             echo "</td>";
             echo "</tr>";
             echo "</table>";    
    }
    //show product price in inputtext
    private function  show_productprice_inputtext() {
        $row = $this -> row;
        ?>
             <tr>
                <td height="23">1 - 999</td>
                <td><?php show_datain_inputtext("price11",$row['price11']); ?></td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
              </tr>
              <tr>
                <td height="23">1,000 - 4,999</td>
                <td><?php show_datain_inputtext("price12",$row['price12']); ?></td>
                <td><?php show_datain_inputtext("price21",$row['price21']); ?></td>
                <td rowspan="5"><?php show_datain_inputtext("price3",$row['price3']); ?></td>
                <td rowspan="5"><?php show_datain_inputtext("price4",$row['price4']); ?></td>
                <td rowspan="5"><?php show_datain_inputtext("price5",$row['price5']); ?></td>
                <td rowspan="5"><?php show_datain_inputtext("price6",$row['price6']); ?></td>
              </tr>
              <tr>
                <td height="24">5,000 - 9,999</td>
                <td><?php show_datain_inputtext("price13",$row['price13']); ?></td>
                <td><?php show_datain_inputtext("price22",$row['price22']); ?></td>
              </tr>
              <tr>
                <td height="22">10,000 - 49,999</td>
                <td><?php show_datain_inputtext("price14",$row['price14']); ?></td>
                <td><?php show_datain_inputtext("price23",$row['price23']); ?></td>
              </tr>
              <tr>
                <td height="22">50,000 - 99,999</td>
                <td><?php show_datain_inputtext("price15",$row['price15']); ?></td>
                <td><?php show_datain_inputtext("price24",$row['price24']); ?></td>
              </tr>
              <tr>
                <td height="21">&gt;100,000</td>
                <td><?php show_datain_inputtext("price16",$row['price16']); ?></td>
                <td><?php show_datain_inputtext("price25",$row['price25']); ?></td>
              </tr>
             <?php
        
    }
    
    private function display() {
        $row = $this -> row;
        echo "<html><head>";
        echo "<title>update product page</title>";
        echo "<script src=\"SpryAssets/SpryAccordion.js\" type=\"text/javascript\"></script>";
        //echo "<link href=\"SpryAssets/SpryAccordion.css\" rel=\"stylesheet\" type=\"text/css\">";
        echo "</head>";
        echo "<body>";
        echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<td colspan=\"2\" align=\"center\">";
        echo "该页面格局同产品页面格局一样,改参数和价格时,对照这看";
        ?>
        <input type="hidden" name="classname" value="<?php echo $this -> classname; ?>"  />
        <?php
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan=\"2\">";
        echo "设置为1,显示价格表,设置为0,隐藏价格表,勿设置成其它数值!.<br />";
        show_datain_inputtext("showprice",$row['showprice']);
        echo "</td>";
        echo "</tr>";
        echo "<td>";
        echo "该产品大图名称设置,必须和上传到服务器的该产品大图名称一样.<br />";
        show_datain_inputtext("image",$row['image']);
        echo "<br />";
        echo "该产品小图名称设置,必须和上传到服务器的该产品小图名称一样.<br />";
        show_datain_inputtext("xtimage",$row['xtimage']);
        echo "</td>";
        echo "<td>";
        $this -> show_productattri_in_inputtext();
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan=\"2\">";
        echo "<table>";
        $this -> show_productprice_inputtext();
        echo "</table>";
        echo "</td>";
        echo "</tr>";
        
        // update and add product 按钮
        echo "<tr>";
        echo "<td colspan=\"2\" >";
        //echo "<input type=\"submit\" name=\"updateproduct\" value=\"update product\" >";
        //echo "<input type=\"submit\" name=\"addproduct\" value=\"add product\">";
        ?>
        <input type="submit" name="updateoraddproduct" value="update product" <?php if ($this -> buttonstatus == "add") {echo disabled;} ?> />
        <input type="submit" name="updateoraddproduct" value="add product" <?php if ($this -> buttonstatus == "update") {echo disabled;} ?>  />
        <?php
        echo "</td>";
        echo "</tr>";
        
        echo "</table>";
        echo "</form>";
        echo "</body>";
        echo "</html>";
        
    }
   
}

//-------------添加新产品------------------------------------------//

function add_product_card($classname,$xtimage,$image,$key1,$key2,$key3,$key4,$key5,$key6,
                             $key7,$key8,$name,$value2,$value3,$value4,$value5,$value6,
                             $value7,$value8,$showprice,$price11,$price12,$price13,$price14,$price15,
                             $price16,$price21,$price22,$price23,$price24,$price25,$price3,$price4,
                             $price5,$price6)
{
        $dbconn = db_connect();
        $query = "insert into $classname (xtimage,image,key1,key2,key3,key4,key5,key6,
                             key7,key8,name,value2,value3,value4,value5,value6,
                             value7,value8,showprice,price11,price12,price13,price14,price15,
                             price16,price21,price22,price23,price24,price25,price3,price4,
                             price5,price6) 
                             values ('".$xtimage."','".$image."','".$key1."','".$key2."','".$key3."',
                             '".$key4."','".$key5."','".$key6."','".$key7."','".$key8."','".$name."',
                             '".$value2."','".$value3."','".$value4."','".$value5."','".$value6."',
                             '".$value7."','".$value8."','".$showprice."','".$price11."','".$price12."',
                             '".$price13."','".$price14."','".$price15."','".$price16."','".$price21."',
                             '".$price22."','".$price23."','".$price24."','".$price25."','".$price3."',
                             '".$price4."','".$price5."','".$price6."')" ;  
        $result = $dbconn -> query($query);
        if (!$result) {
            throw new Exception ('page:card.class.php,fns:add_product_card,err:conn db');
            exit;
        } else {
            echo "add product info to $classname table Operation successfully!<br />";
        }
                                                        
}

//-------------更新产品信息-----------------------------------------//

function update_product_card($classname,$xtimage,$image,$key1,$key2,$key3,$key4,$key5,$key6,
                             $key7,$key8,$name,$value2,$value3,$value4,$value5,$value6,
                             $value7,$value8,$showprice,$price11,$price12,$price13,$price14,$price15,
                             $price16,$price21,$price22,$price23,$price24,$price25,$price3,$price4,
                             $price5,$price6) 
{
         $dbconn = db_connect();
         $query = "update $classname set xtimage = '".$xtimage."',image = '".$image."',key1 = '".$key1."',key2 = '".$key2."',
                                         key3 = '".$key3."',key4 = '".$key4."',key5 = '".$key5."',key6 = '".$key6."', 
                                         key7 = '".$key7."',key8 = '".$key8."',value2 = '".$value2."',value3 = '".$value3."',
                                         value4 = '".$value4."',value5 = '".$value5."',value6 = '".$value6."',value7 = '".$value7."',
                                         value8 = '".$value8."',showprice = '".$showprice."',price11 = '".$price11."', 
                                         price12 = '".$price12."',price13 = '".$price13."',price14 = '".$price14."',price15 = '".$price15."',
                                         price16 = '".$price16."',price21 = '".$price21."',price22 = '".$price22."',price23 = '".$price23."', 
                                         price24 = '".$price24."',price25 = '".$price25."',price3 = '".$price3."',price4 = '".$price4."',
                                         price5 = '".$price5."',price6 = '".$price6."' where name = '".$name."'";

        $result = $dbconn -> query($query);
        if (!$result) {
            throw new Exception ('page:card.class.php,fns:update_product_card,err:conn db');
            exit;
        } else {
            echo "update product info to $classname table for $name Operation successfully!<br />";
        }
}


?>