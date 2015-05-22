<?php 
$email="";
if(isset($_GET['email']))$email=$_GET['email'];
if($email=="")header("location: bose.php");
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

<script type="text/javascript">

function checkForm(){
	jQuery('#rdv_form').submit();
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
	<div class="content">
		<form name="rdv_form" id="rdv_form" method="post" enctype="application/x-www-form-urlencoded" action="set_rdv.php"> 
			<input type="hidden" name="email" id="email" value="<?php echo $email; ?>" />
			<div style="float:left;padding-bottom:20px;">
				<!-- HORAIRE -->
				<div class="bordo">
					<div class="bordo_title">Je souhaite choisir quand &ecirc;tre recontacté(e)</div>
					<table class="rdv_form" cellpadding="0" cellspacing="0">
						<tr>
							<td style="text-align:right;">Jour souhaité : </td>
							<td>
								<select name="jour" id="jour">
									<option value="tous">Lun - Ven</option>
									<option value="lundi">Lundi</option>
									<option value="mardi">Mardi</option>
									<option value="mercredi">Mercredi</option>
									<option value="jeudi">Jeudi</option>
									<option value="vendredi">Vendredi</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="text-align:right;">Tranche horaire : </td>
							<td>
								<select name="horaire" id="horaire">
									<option value="9H-17H30">9H - 17H30</option>
									<option value="9H-12H">9H - 12H</option>
									<option value="12H-17H30">12H - 17H30</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<!-- PROJET -->
				<div class="bordo">
					<div class="bordo_title">Je souhaite détailler mon projet</div>
					<div class="projet_div">
						<textarea name="projet" id="projet" class="projet_txt"></textarea>
					</div>
				</div>
				<div style="width:100px;margin:auto;margin-top:5px;"><a href="javascript:checkForm();" class="cta" style="padding:5px;">Valider</a></div>
			</div>
		</form>
		<div class="sidebar" style="position:relative; height:300px;"><img src="images/Catalogue.png" width="300" height="400" style="position:absolute; bottom:0px;" /></div>
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