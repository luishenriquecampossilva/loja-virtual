<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'itatec';

   $conn = new mysqli($server,$user,$password,$bd);
   return $conn;
    ?>