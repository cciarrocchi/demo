<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['society']) && isset($_POST['fonction'])){
	$rappel="0";
	$devis="0";
	$optin="0";
	if(isset($_POST['call']))$rappel="1";
	if(isset($_POST['devis']))$devis="1";
	if(isset($_POST['optin']))$optin="1";
	date_default_timezone_set("Europe/Paris");
	$user="djsnake81";
	$pass="nutateiubesc";
	$db_name="bose";
	$options = array(
				PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ,
	);
	$db = new PDO( "mysql:host=localhost;dbname=".$db_name.";charset=utf8", $user, $pass,$options);
	$ip=$_SERVER['REMOTE_ADDR'];
	$s=file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key=3089b559a0bc84f8aeccecf6d537c91bd04eb5258664b848e6dbad4bf9100ef0&ip=".$ip);
	$country=explode(";",$s);
	if($country[0]=="OK"){
		$c=strtolower($country[4]);
	}else{
		$c="undefined";
	}
	$check=$db->query("SELECT * FROM users WHERE civilite='".$_POST['civ']."' AND nom='".$_POST['name']."' AND prenom='".$_POST['firstname']."' AND entreprise='".$_POST['society']."' AND fonction='".$_POST['fonction']."' AND email='".$_POST['email']."' AND telephone='".$_POST['phone']."' AND adresse='".$_POST['adress']."' AND cp='".$_POST['cp']."' AND ville='".$_POST['city']."' AND version='2'");
	$utente=$check->fetch();
	if(count($utente)==0 || $utente===false){
		$stmt = $db->prepare("INSERT INTO users (civilite, nom, prenom, entreprise, fonction, email, telephone, adresse, cp, ville, rappel, devis_pers, optin, ip, country, date_inscription, version,kit) VALUES (:civ, :nom, :prenom, :entr, :fonc, :email, :tel, :add, :cp, :ville, :rappel, :devis, :optin, :ip, :country, :date, '2',:prov)");
		$stmt->execute(array(":civ" => $_POST['civ'],
							 ":nom" => $_POST['name'],
							 ":prenom" => $_POST['firstname'],
							 ":entr" => $_POST['society'],
							 ":fonc" => $_POST['fonction'],
							 ":email" => $_POST['email'],
							 ":tel" => $_POST['phone'],
							 ":add" => $_POST['adress'],
							 ":cp" => $_POST['cp'],
							 ":ville" => $_POST['city'],
							 ":rappel" => $rappel,
							 ":devis" => $devis,
							 ":optin" => $optin,
							 ":ip" => $ip,
							 ":country" => $c,
							 ":date" => date("Y-m-d H:i:s"),
							 ":prov" => $_POST['prov']));
		$u_id=$db->lastInsertId();
	}else{
		$u_id=$utente['user_id'];
	}
}else{
	header("location: bose.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bose</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18387299-23', 'webadvantage.fr');
  ga('send', 'pageview');

</script>
</head>

<body>
<div class="header">
	<div class="content">
	<img src="images/BOSE_LOGO.gif" alt="Bose©" name="logo" width="250" height="70" id="Insert_logo" />
	<p style="float:right; line-height:70px;">Catalogue BtoB Noël 2013</p>
	</div>
</div>

<div id="intro" class="container">
	<div class="content">
	
		<div style="width:450px; text-align:left;">
			<h1>
			<span>Profitez pleinement de la saison des fêtes en offrant</span>
			de beaux cadeaux Bose<sup>®</sup>
			</h1>
			<ul>
				<li>La garantie d’une marque de renommée internationale</li>
				<li>Des conditions commerciales adaptées aux besoins des entreprises</li>
				<li>Une offre dédiée pour les comités d’entreprise et leurs collaborateurs</li>
			</ul>
		</div>
	
	</div>
	<hr />
</div>
<!-- end .container -->

<div id="formulaire" class="container">
	
	<div style="background-color:#dd052b; border-bottom:1px solid #b20423; border-top:1px solid #e4415e;">
		<h2>Téléchargez le catalogue BtoB Noël 2013 <br />
		en cliquant sur le lien ci-dessous</h2>
	</div>
	<div class="content">
		<iframe src="http://nodes.neoperf.com/scripts/tracking.php?params=183|4&track=<?php echo $_POST['email']; ?>" width="1" height="1" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
		<div class="form">
			<br/><br/><br/>
			<p>Téléchargez votre catalogue BtoB Noël 2013 en <a href="down_bose.php?uid=<?php echo $u_id; ?>" style="font-weight:bold; font-size:1em; color:#C00; background-color:none; text-decoration:underline;">cliquant ici</a></p>			
		</div>
		<div class="sidebar" style="position:relative; height:300px;"><img src="images/Catalogue.png" width="300" height="auto" style="position:absolute; bottom:0px;" /></div>
		<hr/>
		
	</div>
	<hr />
</div>
	
<div id="produits" class="container">
	
	<div class="content">
		<h3>Plus belles seront les fêtes avec le son Bose<sup>®</sup></h3>
		<img src="images/Footer.jpg" width="500" height="45" />
	</div>
		
	<hr />
</div>
<!-- end .container -->


<div class="footer">
	<p>© 2013 Bose S.A.S</p>
</div>

</body>
</html>