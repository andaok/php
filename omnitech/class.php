<?php

/**
 * omnitechÃ¿ÀàÒ³Ãæ
 * @author TerryYe
 * @copyright 2009
 */
require_once('onmitech_fns.php');
$class = (empty($_GET['class']) ? '' : $_GET['class']);
$rowoffset = (empty($_GET['rowoffset']) ? 0 : $_GET['rowoffset']);
$product = (empty($_GET['product']) ? '' : $_GET['product']);
try{
   do_html_header();
   echo "<div id=\"container\">";
   do_html_center_product_catalog($class);
   do_html_center_product_datu($class,$product,$rowoffset);
   echo "<div>";
   do_html_footer();
}
catch(Exception $e) {
   echo $e -> getMessage(); 
}
?>