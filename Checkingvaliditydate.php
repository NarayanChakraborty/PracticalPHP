<?php
$month=4;  //april(only has 0 days)
$day=31;    //31st
$year=2013;  //2018
if(checkdate($month,$day,$year))
echo 'Date is valid';
else echo'Date is invalid';
?>