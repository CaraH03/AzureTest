<?php
//connect to csdm webdev server and select database
$db = new mysqli(
    'host name'
    'username'
    'password'
    'db_name'
);
if($db->connect_errno){
    die('Connectfailed{'.$db->connect_error.']');
}
