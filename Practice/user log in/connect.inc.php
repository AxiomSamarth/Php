<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

if(mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
    if(!mysql_select_db('practice'))
    {
        echo 'Error connecting to the database';
    }
}
else
{
    echo 'Error connecting to the server';
}

?>