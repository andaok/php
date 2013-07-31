<?php

/**
 * 包含函数主要为,根据数据库数据生成大目录,子目录,产品页面.
 * name:show_db_fns.php
 * @author TerryYe
 * @copyright 2009
 */
function get_center_main_catalog() 
{
 ?>
  <div class="AccordionPanel">
   <div class="AccordionPanelTab top">Welcome to Onmitech!</div>
   <div class="AccordionPanelContent">
   <img src="images/Factory.JPG" />
   <p class="tabpcontent"><span class="firstletter">W</span>ith the rapid and widely application of IC technology ,RFID bring to our....<a href="onmitech.php">For further details</a></p>
   <p><a href="online.php">Online Consultation</a></p>
   </div>
   </div>
 <?php
 $dbconn = db_connect();
 $query = "select * from main_catalog";
 $result = $dbconn -> query($query);
 if (!$result) 
 {
  throw new Exception('could not get main_catalog data from database');
 }
 $num_rows = $result -> num_rows;
 for ($i=0;$i<$num_rows;$i++)
 {
  $row = $result -> fetch_assoc();
  echo "<div class=\"AccordionPanel\">";
  if($row['tabnew']) {
   echo "<div class=\"AccordionPanelTab\">".$row['tabtitle']."<font style=\"color: red;font-weight: bold;font-style: italic;font-family:Arial,Georgia;font-size: 11px;\">                      NEW!</font></div>";
  }else {
   echo "<div class=\"AccordionPanelTab\">".$row['tabtitle']."</div>";
  }
  echo "<div class=\"AccordionPanelContent\">";
  echo "<img src=\"images/".$row['tabimage']."\" />";
  echo "<p>".$row['tabp']."<a href=\"".$row['tabpurl']."\">For further details</a></p>";
  echo "<p><a href=\"".$row['tabsuburl']."\">Search this type products</a></p>";
  echo "<p><a href=\"online.php\">Online Consultation</a></p>";
  echo "</div>"; 
  echo "</div>";
 }
 $result -> free();
 $dbconn -> close();   
}
//
//规划每页怎样显示图,每行显示图片个数由$tdshu指定.
function get_center_class_datu($rowoffset,$pagesize) 
{
  $dbconn = db_connect();
  $query = "select * from class limit $rowoffset,$pagesize";
  $result = $dbconn -> query($query);
  if (!$result) 
 {
  throw new Exception('could not get class data from database');
 }
  $num_rows = $result -> num_rows;
  $tdshu = 3;
  $zshu = (int)($num_rows/$tdshu);
  $yshu = ($num_rows%$tdshu);
  if ($yshu>0) 
  {
    $zshu=$zshu+1;
  }
  echo "<table class=\"tutable\">";
  for ($i=0;$i<$zshu;$i++) 
  {
    echo "<tr>";
    for ($j=0;$j<$tdshu;$j++) 
    {
        if ($row = $result -> fetch_assoc()) 
        {
        echo "<td class=\"shadow\"><a href=\"class.php?class=".$row['classname']."\"><img src=\"images/datu/".$row['classimage']."\" /></a><br /><a href=\"class.php?class=".$row['classname']."\">".$row['classname']."</a><td>";
        }
    }
    echo "</tr>";
  }
  echo "</table>";
}
//
//生成navigate导航条HOME >> class >> product
function get_center_naviurl($class,$product) 
{
 $naviurl = '';
 if (empty($class)) 
 {
    $naviurl = "<a href=\"index.php\">Home</a> >>";
 }else 
  {
   if (empty($product)) 
    {
     $naviurl = "<a href=\"index.php\">Home</a> >> <a href=\"class.php?class=$class\">$class</a>";
    } else 
      {
       $naviurl = "<a href=\"index.php\">Home</a> >> <a href=\"class.php?class=".$class."\">$class</a> >> <a href=\"product.php?class=".$class."&product=".$product."\">$product</a>";
      }
  }
  return $naviurl;
}
//
//生成分页navigate page url (1.2.3.4)
function get_center_navipage ($dbconn,$query,$pagesize,$urlothervar='',$offsetvarname='rowoffset') 
{    
     /**
      * $_SERVER['PHP_SELF']?$offsetvarname=value&$urlothervar
      * example:
      * class.php?rowoffset=6&class=$class.....
     */
     $navipage='';
     $offset=0;
     $showurl=1;
     $result = $dbconn -> query($query);
     if (!$result) 
     {
      throw new Exception('fun:get_center_navipage,could not get data from database');
     }
     $num_rows = $result -> num_rows;
     if ($num_rows>0) 
     {
       $pagezs = (int)($num_rows/$pagesize);
       $pageys = ($num_rows%$pagesize); 
       if ($pageys>0) 
       {
        $pagezs = $pagezs + 1;
       } 
       for ($i=0;$i<$pagezs;$i++) 
       {
        $temp = "<a href=\"".$_SERVER['PHP_SELF']."?".$offsetvarname."=".$offset."&".$urlothervar."\">$showurl</a>.";
        $navipage = $navipage.$temp;
        $offset = $offset + 9;
        $showurl = $showurl + 1;
       }
     }else 
     {
       $navipage ="no reoord!"; 
     }
     return $navipage;
}
//
/**
 * 规划每页怎样显示图,每行显示图片个数由$tdshu指定.
 * 和函数get_center_class_datu()一样,想写成通用模式,
 * 但下面#标注处,不好处理.
 */
function get_center_product_datu($class,$rowoffset,$pagesize) 
{
  $dbconn = db_connect();
  $query = "select * from product where classname = '$class' limit $rowoffset,$pagesize";
  $result = $dbconn -> query($query);
  if (!$result) 
 {
  throw new Exception('could not get class data from database');
 }
  $num_rows = $result -> num_rows;
  $tdshu = 3;
  $zshu = (int)($num_rows/$tdshu);
  $yshu = ($num_rows%$tdshu);
  if ($yshu>0) 
  {
    $zshu=$zshu+1;
  }
  echo "<table class=\"tutable\">";
  for ($i=0;$i<$zshu;$i++) 
  {
    echo "<tr>";
    for ($j=0;$j<$tdshu;$j++) 
    {
        if ($row = $result -> fetch_assoc()) 
        {
        //#    
        echo "<td class=\"shadow\"><a href=\"product.php?class=".$row['classname']."&product=".$row['productname']."\"><img src=\"images/xiaotu/".$row['productimage']."\" /></a><br /><a href=\"product.php?class=".$row['classname']."&product=".$row['productname']."\">".$row['productname']."</a><td>";
        }
    }
    echo "</tr>";
  }
  echo "</table>";  
}
/**
 * 得到每类产品目录
 */
function get_center_product_cata($class) 
{
 $dbconn = db_connect();
 $query = "select * from product where classname = '$class'";
 $result = $dbconn -> query($query);
 if (!$result) 
 {
  throw new Exception('could not get product catalog data from database');
 }
 $num_rows = $result -> num_rows;
 for ($i=0;$i<$num_rows;$i++) 
   {
    $row = $result -> fetch_assoc();
    echo "<P><a href=\"product.php?class=".$row['classname']."&product=".$row['productname']."\">".$row['productname']."</a></p>";
   }
}
/**
 * 产品目录顶部top信息
 */
function get_center_product_cata_top($class) 
{
 $dbconn = db_connect();
 $query = "select * from main_catalog where tabtitle = '$class'";
 $result = $dbconn -> query($query);
 $num_rows = $result -> num_rows;
 if (!$result) 
 {
  throw new Exception('could not get main_catalog data from database');
 }
 if ($num_rows>0) 
   {
    $row = $result -> fetch_assoc();
    echo "<img src=\"images/".$row['tabimage']."\" />";
    echo "<p>".$row['tabp']."</p>";
    echo "<p><a href=\"".$row['tabpurl']."\">For further details</a></p>";
   }else 
     {
        echo "<img src=\"images/Factory.JPG\" />";
        echo "<p>Omnitech Introduce....</p>";
        echo "<p><a href=\"omnitech.php\">For further details</a></p>";
     }
   $result -> free();
   $dbconn -> close();
}

/**
 * 查询产品
 */
function get_center_select()
{
    $dbconn = db_connect();
    
    $query = "select distinct(classname) from product";

    $result = $dbconn -> query($query);

    $num_rows = $result -> num_rows;

    $class[0] = '--please select class name--';

    $product[0][0] = '--please select product name--';

    for ($i=1;$i<=$num_rows;$i++) 
    {
    $row = $result -> fetch_assoc();
    
    $class[$row['classname']] = $row['classname'];
    
    $query1 = "select distinct(productname) from product where classname = '".$row['classname']."'";
    
    $result1 = $dbconn -> query($query1);
    
    $num_rows1 = $result1 -> num_rows;
    
    for ($j=1;$j<=$num_rows1;$j++) 
     {
        $row1 = $result1 -> fetch_assoc();
         
        $product[$row['classname']][$row1['productname']] = $row1['productname'] ;
        
     }    
    }

  

    //$form = new html_quickform('findproductform','get','product.php');
    //根据调用该函数的页面,显示不同表单信息.
    if(strpos($_SERVER['PHP_SELF'],"admin_home.php")==true) 
    {
        $form = new html_quickform('updateproductform','get','admin_updateadd_product.php');
    }else 
     {
        $form = new html_quickform('findproductform','get','product.php');
     }
    

    $group[0] =& HTML_QuickForm::createElement('hierselect','findproductsel');

    $group[0] -> setmainoptions($class);

    $group[0] -> setsecoptions($product);

    //$group[1] =& HTML_QuickForm::createElement('submit','findproductsub','find info');
    //根据调用该函数的页面,显示不同按钮信息.
    
    if(strpos($_SERVER['PHP_SELF'],"admin_home.php")==true) 
    {
        $group[1] =& HTML_QuickForm::createElement('submit','updateoraddsub','update product info');
    }else 
     {
        $group[1] =& HTML_QuickForm::createElement('submit','findproductsub','find product info');
     }
    
    $form->addGroup($group, 'name');

    $form -> display();

}

//
//函数:从数据库取得admin选择要Update的产品信息
function get_product_data($classname,$productname) {
    $dbconn = db_connect();
    $query = "select * from $classname where name = '$productname'";
    $result = $dbconn -> query($query);
    if(!$result) {
    throw new Exception('get_product_data:conn to db error');
    }
    $num_rows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    return $row;   
}

//
//函数:文本框数据显示
function show_datain_inputtext($name,$value) {
    echo "<input type=\"text\" name=\"$name\" value=\"".$value."\" />";
}
?>