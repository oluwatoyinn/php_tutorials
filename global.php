<?php

    $name ="Victor";

    function showName (){

        global $name;
        echo "The name of the student is " .$name ;
    } 

    showName();
?>