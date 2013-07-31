<?php

/**
 * @author terryye
 * @copyright 2010
 */

require_once('onmitech_fns.php');

try 
{
    do_html_header();
    echo "<div id=\"container\">";
    do_html_faq();
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