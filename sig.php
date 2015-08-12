<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<?php

		$slash = false;
		if($_GET['name']){
			$name = strtoupper(htmlspecialchars($_GET['name']));	
		}
		if($_GET['position']){
			$position = strtoupper(htmlspecialchars($_GET['position']));
		}
		if($_GET['email']){
			$email = strtoupper(htmlspecialchars($_GET['email']));	
		}
		if($_GET['work']){
			$work = htmlspecialchars($_GET['work']);
		}
		if($_GET['cell']){
			$cell = htmlspecialchars($_GET['cell']);
		}

	?>
	<head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/getSignature.js"></script>
        <link rel="stylesheet" href="css/main.css">
		<!--Import materialize.css-->
	</head>
	<body>
		<div class="container card hoverable">
			<div class="card-content">
				<div id="signature">
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<table cellpadding="0" cellspacing="0" border="0" align="left" id="backgroundTable" style="padding:0 margin:0; float:none; background-color:#fff;">
						<tr style="height:130px;">
							<td style="padding:0;margin:0;float:left; display:block;">
								<img src="http://users.bwinkit.com/aspieslechner/sig-generator/img/top-logo.png" />
							</td>
						</tr>
						<tr style="height:40px;">
							<td style="padding:0;margin:0;float:left; display:block;">
								<h1 style="margin:0; padding:0; font-size:7pt; font-family:'verdana'; color:#7d7d7d; font-weight:bold;">
									<b><?php echo $name;?><span style="color:#d81b60;"> // </span><?php echo $position;?></b><br />
									<?php echo '<a style=color:#d81b60;text-decoration:none; href=mailto:'.$email.'>'.$email;?></a>
								</h1>
							</td>
						</tr>
						<tr style="height:60px;">
							<td style="padding:0;margin:0;float:left; display:block;">
								<p style="margin:0; padding:0; font-size:7pt; letter-spacing:0.1em; font-family:'verdana'; font-weight:100; color:#a5a5a5;">
									<?php if($work):echo '<span style="color:#d81b60;">Tel: </span>'.$work;endif;?><br />
									<?php if($cell):echo '<span style="color:#d81b60;"> Mobile: </span>'.$cell; endif;?><br />
									<span style="color:#d81b60;"> Fax: </span> +49 89 1896 580 29
								</p>
							</td>
						</tr>
						<tr style="height: 75px;">
							<td style="padding:0;margin:0;float:left; display:block;">
									<p style="margin:0; padding:0; font-size:7pt; letter-spacing:0.1em; font-family:'verdana'; font-weight:100; color:#a5a5a5;">Kuby Concept GmbH<br />
									<a style="color:#d81b60;text-decoration:none;" href="http://www.kuby-concept.com">http://www.kuby-concept.com</a><br />
									Infanteriestrasse 11a / Haus B2<br />
									80797 M&uuml;nchen
								</p>
							</td>
						</tr>
						<tr>
							<td style="padding:0;margin:0;float:left; display:block;">
								<p style="margin:0; padding:0; font-size:7pt; letter-spacing:0.1em; font-family:'verdana'; font-weight:100; color:#a5a5a5;">
									Amtsgericht M&uuml;nchen<br />
									HRB 191045<br />
									Gesch&auml;ftsf&uuml;hrung: Jakob Kuby
								</p>
							</td>
						</tr>
					</table>
				</div>
				<p>Kopieren Sie das HTML Markup aus dem Textfeld und erstellen Sie damit Ihre Signatur.</p>
				<textarea id="markup" class="sig-markup">
				</textarea>
			</div>
		</div>	
	</body>
</html>