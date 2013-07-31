<?php

/**
 * Connnect to database function
 * name:db_fns.php
 * @author TerryYe
 * @copyright 2009
 */
function db_connect() 
{
         $dbconn = new mysqli('localhost','webuser','webuser123','omnitech');
         if (!$dbconn) 
            {
             throw new Exception('could not connect to database server');
            } else 
              {
               return $dbconn;  
              }
}


?>