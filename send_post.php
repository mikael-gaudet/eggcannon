<?php
    //setting up mysql details
    $sql_server = 'sql208.byethost8.com';
    $sql_user = 'b8_20819916';
    $sql_pwd = '711webhosting';
    $sql_db = 'b8_20819916_form';

    //connecting to sql database
    $myslqi = new mysqli( $sql_server, $sql_user, $sql_pwd, $sql_db ) or die( $mysqli->error );
    $sql = "INSERT INTO sales (name,phone,address,pallets)"
?>
