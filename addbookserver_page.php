<?php
//addserver_page.php
include("data_class.php");



$mailid=$_POST['mailid'];
$sendername=$_POST['sendername'];
$receipent=$_POST['receipent'];
$date1=$_POST['date1'];
$mailtype=$_POST['mailtype'];
$status1=$_POST['status1'];
$uniqueid=$_POST['uniqueid'];




$obj=new data();
$obj->setconnection();
$obj->addbook($mailid,$sendername,$receipent,$date1,$mailtype,$status1,$uniqueid);