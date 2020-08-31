<?php

// HOW TO GET DATA FROM THE DATABASE
include 'connect.php';

$query ="SELECT * FROM `user_info`";

    if($is_query_run = @mysqli_query($query)){
        echo "Query executed ";

    }else {
        echo "Not executed";
    } 
?>