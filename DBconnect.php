<?php
$db = new mysqli(
    'ap-cdbr-azure-east-c.cloudapp.net',
    'bba1eb6bf04dc6',
    '672863d4',
    'cara'
);
if($db->connect_errno){
    die('Connectfailed{'.$db->connect_error.']');
}


$sql_query="SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
$result = $db->query($sql_query);

while($row=$result->fetch_array()){

}
