<?php

/**
 *        @author terryyw
 *        @copyright 2010
 *        adminstrator homepage
 *  
 */
require_once('onmitech_fns.php');

?>
<html>
  <head>
    <title>admin homepage</title>
  </head>
<body>
  <p>Admin Platform</p>
  <hr align="left" />
  <p>��1�����²�Ʒ��Ϣ</p>
  <div id="updateproductdiv"><?php get_center_select(); ?></div>
  <p>��2��������Ʒ</p>
  <div id="addproductdiv"><?php get_allclassname_select("admin_updateadd_product.php","addproductform","updateoraddsub","add this class product"); ?></div>
  <p>��3����������Ϣ</p>
  <div id="updateclassdiv"><?php get_allclassname_select("admin_update_class.php","updateclassform","updateclasssub","update this class");?></div>
  <hr align="left" />
</body>
</html>
<?php

//all product classname to a select list
function get_allclassname_select($url,$formname,$subname,$subvalue) {
         $dbconn = db_connect();
         $query = "select classname from class";
         $result = $dbconn -> query($query);
         $num_rows = $result -> num_rows;
         echo "<form action=\"$url\" method=\"get\">";
         echo "<select name=\"$formname\">";
         echo "<option value=\"\">--please select class name--</option>";
         for ($i=0;$i<$num_rows;$i++) 
         {
              $row = $result -> fetch_assoc();
              echo "<option value=\"".$row['classname']."\">".$row['classname']."</option>";
         }
         echo "</select>";
         echo "<input type=\"submit\" name=\"$subname\" value=\"$subvalue\" />";
         echo "</form>";
         $result -> free();
         $dbconn -> close();
}
?>