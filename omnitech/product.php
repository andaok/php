<?php

/**
 *                        @author terryyw
 *                        @copyright 2004
 */

//--------------产品展示----------------------------------//
require_once('onmitech_fns.php');

//
$classname = (empty($_GET['class']) ? '' : $_GET['class']);
$productname = (empty($_GET['product']) ? '' : $_GET['product']);

//-------------查询来自多选框-----------------------------//
if (!empty($_GET['name'])) {
    $formarray = $_GET['name'];
    //$updateoraddsub = $formarray['updateoraddsub'];
    $classname = $formarray[findproductsel][0];
    $productname = $formarray[findproductsel][1];
    if ($classname == "0" || $productname == "0") {
        echo "please select class and product";
        exit;
    }
}

//
try{
   //do_html_header();
   do_html_header();
   echo "<div id=\"container\">";
   do_html_center_product_catalog($classname);
   do_html_center_product_info($classname,$productname);
   echo "<div>";
   do_html_footer();
}

//
catch(Exception $e) {
   echo $e -> getMessage(); 
}

?>