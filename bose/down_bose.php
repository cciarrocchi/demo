<?php
$uid="";
if(isset($_GET['uid']))$uid=$_GET['uid'];
$user="djsnake81";
$pass="nutateiubesc";
$db_name="bose";
$options = array(
			PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ,
);
$db = new PDO( "mysql:host=localhost;dbname=".$db_name.";charset=utf8", $user, $pass,$options);
$stmt = $db->prepare("INSERT INTO counter (user_id, date_down) VALUES (:uid, :dt)");
$stmt->execute(array(":uid" => $uid,
					 ":dt" => date("Y-m-d H:i:s")));
$file="catalogue_noel_2013.pdf";
header('Content-type: application/pdf');
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename= " . $file);
header("Content-Transfer-Encoding: binary");
readfile($file);
?>