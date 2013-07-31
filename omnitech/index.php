<?php

/**
 * OmnitechÊ×Ò³
 * name:index.php
 * @author TerryYe
 * @copyright 2009
 */

require_once('onmitech_fns.php');

$rowoffset = (empty($_GET['rowoffset']) ? 0 : $_GET['rowoffset']);

$class = (empty($_GET['class']) ? '' : $_GET['class']) ;

$product = (empty($_GET['product']) ? '' : $_GET['product']);

try 
{
do_html_header();

echo "<div id=\"container\">";

do_html_center_main_catalog();

do_html_center_class_datu($class,$product,$rowoffset);

echo "</div>";

do_html_footer();
}

catch(Exception $e) 
{
 //do_html_header('Problem page');
 echo $e -> getMessage();
 //do_html_footer();
 exit;   
}

?>