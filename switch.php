<?php
    $Grade = 'A';

    switch($Grade){
        case 'a':
        case 'A':
            echo "Excellent";
        break;
        case 'B':
            echo "Very Good ";
        break;
        case 'C':
            echo "Need Improvement ";
        break;
        default:
            echo "No grade found";
            break;
    }

?>