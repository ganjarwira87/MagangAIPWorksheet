<?php

    $mysqli = new mysqli("localhost","root","","kalo");
    if (!$mysqli){
        die("conection failed:" .mysqli_conect_error());
    }

?>