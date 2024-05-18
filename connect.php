<?php
    
    $connect = new mysqli('localhost', 'root', '', 'crudoperationphp');

    if (!$connect) {
        // echo "Chandrapaaaaaaalaaa";
        die(mysqli_error($connect));
    }
?>