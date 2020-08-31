<?php
// How to connect php to mysql 

$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_password = 'victor';
 
// $store = mysqli_connect('student');

if(!mysqli_connect($mysql_host,$mysql_user,$mysql_password)) 
    {
        die('Cannooot connect to database');
    } 
    else 
        {  
            if (@mysqli_select_db($store,'student'))
            {
                echo "connection success";
            } 
            else 
            {
                die('Cannot connect to database');  
            }
        }

?>