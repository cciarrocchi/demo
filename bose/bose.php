<?php 
$prov="0";
$email="";
$civ="";
$nom="";
$prenom="";
$ent="";
$fonction="";
$phone="";
$adresse="";
$ville="";
$cp="";
if(isset($_GET['prov']))$prov=$_GET['prov'];
if(isset($_GET['email']))$email=urldecode($_GET['email']);
if(isset($_GET['nom']))$nom=urldecode($_GET['nom']);
if(isset($_GET['prenom']))$prenom=urldecode($_GET['prenom']);
if(isset($_GET['entreprise']))$ent=urldecode($_GET['entreprise']);
if(isset($_GET['fonction']))$fonction=urldecode($_GET['fonction']);
if(isset($_GET['phone']))$phone=urldecode($_GET['phone']);
if(isset($_GET['adresse']))$adresse=urldecode($_GET['adresse']);
if(isset($_GET['ville']))$ville=urldecode($_GET['ville']);
if(isset($_GET['cp']))$cp=urldecode($_GET['cp']);
if(isset($_GET['civ']))$civ=urldecode($_GET['civ']);
if(strtolower($civ)=="m" || strtolower($civ)=="m." || strtolower($civ)=="monsieur")$civ="M";
if(strtolower($civ)=="mme" || strtolower($civ)=="madame")$civ="Mme";
if(strtolower($civ)=="mlle" || strtolower($civ)=="melle" || strtolower($civ)=="mademoiselle")$civ="Mlle";
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<link rel="stylesheet" type="text/css" href="js/ValidationEngine/css/validationEngine.jquery.css">
<script type="text/javascript" src="js/ValidationEngine/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/ValidationEngine/languages/jquery.validationEngine-fr.js"></script>
<script type="text/javascript">

jQuery(document).ready(function(){

	jQuery('#brochureForm').validationEngine();
	
});

function checkForm(){
	var res=jQuery('#brochureForm').validationEngine('validate');
	if(res==true)jQuery('#brochureForm').submit();
}

</script>

</head>

<body>
<style>
.formError{
	display:none;
}
</style>
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
		<h2>Téléchargez le catalogue BtoB Noël 2013 <br />en remplissant le formulaire</h2>
	</div>
	<form id="brochureForm" name="brochureForm" method="post" enctype="application/x-www-form-urlencoded" action="inscription.php">
	<input type="hidden" name="prov" id="prov" value="<?php echo $prov; ?>" />
	<div class="content">
	
		
		
		<div class="form">
			
			<div class="col">
				<p><label for="civ"><sup>*</sup>Civilité</label> 
					<select name="civ" id="civ" size="1" class="validate[required]">
						<option value="M" <?php if($civ=="M"){ ?> selected="selected"<?php }?>>M</option>
						<option value="Mme" <?php if($civ=="Mme"){ ?> selected="selected"<?php }?>>Mme</option>
						<option value="Mlle" <?php if($civ=="Mlle"){ ?> selected="selected"<?php }?>>Mlle</option>
					</select>
				</p>
				<p><label for="name"><sup>*</sup>Nom</label> <input name="name" id="name" type="text" size="25" value="<?php echo urldecode($nom); ?>" class="validate[required,minSize[2]]"></p>
			</div>		
			<div class="col">
				<p class="oblig"><sup>*</sup>Champs obligatoires</p>
				<p><label for="firstname"><sup>*</sup>Prénom</label> <input name="firstname" id="firstname" type="text" value="<?php echo urldecode($prenom); ?>" size="25" class="validate[required,minSize[2]]"></p>
			</div>
			<hr class="visible" />
			<div class="col">
				<p><label for="society"><sup>*</sup>Entreprise</label> <input name="society" id="society" type="text" value="<?php echo urldecode($ent); ?>" size="25" class="validate[required,minSize[2]]"></p>
				<p><label for="email"><sup>*</sup>E-mail</label> <input name="email" id="email" type="text" size="25" class="validate[required,custom[email]]" value="<?php echo urldecode($email); ?>"></p>
			</div>
			<div class="col">
				<p><label for="fonction"><sup>*</sup>Fonction</label> <input name="fonction" id="fonction" type="text" value="<?php echo urldecode($fonction); ?>" size="25" class="validate[required,minSize[2]]"></p>
				<p><label for="phone"><sup>*</sup>Téléphone</label> <input name="phone" id="phone" type="text" size="25" value="<?php echo urldecode($phone); ?>" class="validate[required,minSize[10],maxSize[10],custom[onlyNumbers]]" maxLength="10"></p>
			</div>
			<hr class="visible" />
			<div class="col">
				<p><label for="adress"><sup>*</sup>Adresse</label> <input name="adress" id="adress" type="text" size="25" value="<?php echo urldecode($adresse); ?>" class="validate[required,minSize[10]]"></p>
				<p><label for="cp"><sup>*</sup>Code postal</label> <input name="cp" id="cp" type="text" size="25" value="<?php echo urldecode($cp); ?>" class="validate[required,minSize[5],maxSize[5],custom[onlyNumbers]]" maxLength="5"></p>
			</div>	
			<div class="col">
				<p><label for="city"><sup>*</sup>Ville</label> <input name="city" id="city" type="text" size="25" value="<?php echo urldecode($ville); ?>" class="validate[required,minSize[2]]"></p>
				<p>&nbsp;</p>
			</div>
			<hr />
			
		</div>
		<div class="sidebar" style="position:relative; height:300px;"><img src="images/Catalogue.png" width="300" height="400" style="position:absolute; bottom:0px;" /></div>
		<hr/>
		
	</div>
	<div style="background-color:#f5f5f5; border-top:1px solid #bdbdbd; height:100px;">
		<div style="width:900px; margin:0 auto; padding:20px 0; text-align:left;">
			<div class="sidebar"><a href="javascript:checkForm();" class="cta">Télécharger le catalogue</a></div>
			<p style="width:600px; font-size:13px; line-height:30px; margin:0px; text-align:left;">Je souhaite également : <input name="call" id="call" type="checkbox" value="1" checked="checked" />&nbsp;<label for="call">Être rappelé(e)</label>&nbsp;&nbsp;&nbsp;<input name="devis" id="devis" type="checkbox" value="1" />&nbsp;<label for="devis">un devis personnalisé</label></p>
			<p style="width:620px; font-size:13px; line-height:30px; margin:0px; text-align:left;"><input name="optin" id="optin" type="checkbox" value="1" />&nbsp;<label for="optin">Je souhaite recevoir des informations et des offres promotionnelles de la part de Bose<sup>®</sup></label></p>
		</div>
	</div>
	</form>
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