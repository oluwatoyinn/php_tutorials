<?php

    $name = $_GET["stu_name"];
    $age = $_GET["stu_age"];  
    $weight = $_GET["stu_weight"];

    if(!empty($name) && !empty($age) && !empty($weight)){
        echo 'Name:'. $_GET["stu_name"].'<br>';
        echo 'Age:'. $_GET["stu_age"].'<br>';
        echo 'Weight:'. $_GET["stu_weight"].'<br>';
    }else{
        echo "Please insert all fields";
    }

 

?>