<?php
    $name = filter_input(INPUT_POST, 'name')
    $name = filter_input(INPUT_POST, 'name')
    $name = filter_input(INPUT_POST, 'name')
    $name = filter_input(INPUT_POST, 'name')
    //setting up mysql details
    $sql_server = 'fdb13.awardspace.net';
    $sql_user = '2502818_sales';
    $sql_pwd = 'database0';
    $sql_db = '2502818_sales';

    //connecting to sql database
    $myslqi = new mysqli( $sql_server, $sql_user, $sql_pwd, $sql_db ) or die( $mysqli->error );
    $sql = "INSERT INTO sales (name,phone,address,pallets)"

?>
