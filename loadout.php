<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Othyn Fall">
	<meta name="keywords" content="Othyn - Media Production, Programming, Web Development, Gaming and Entertainment." />
	<meta name="author" content="Othyn">
	<link rel="shortcut icon" href="favicon.png">

	<title>Othyn Fall</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom sheet -->
	<link href="css/base.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<?php

	$CharacterList = array(
		'Skye Autumn', 
		'Sweet Autumn', 
		'Simo', 
		'Haigen Hawkins', 
		'Tsygan'
	);
	
	$WeaponList = array(
		'Assault Rifle',
		'Rex',
		'Sniper Rifle',
		'Shotgun',
		'Ballista',
		'Voltaic Hand Cannon',
		'Battle Rifle',
		'Tesla Rifle',
		'Sub Mini-Gun',
		'Gatling Laser',
		'Circle Saw',
		'Nailgun',
		'Drone Launcher',
		'Grenade Launcher',
		'Plasma Rifle',
		'Smatter Band'
	);
	
	$TowerList = array(
		'Cannon',
		'Gatling',
		'Lightning',
		'AR Mine Dispenser',
		'ACP',
		'Kairos',
		'Drone',
		'Violator',
		'Rocket',
		'Amp Spire',
		'Scatter Laser',
		'Focus',
		'Slowfield Dispenser',
		'Range Spire',
		'Makeshift Cannon',
		'Rupture Mine Dispenser',
		'Friendship Laser',
		'Mind Control Spire',
		'Anti Air',
		'Orbital Strike Relay'
	);
	
	$PerkList = array(
		'Hollowpoint Rounds',
		'Static Discharge',
		'Resilient Core',
		'Unstable Core',
		'Marksman',
		'Hip Fire',
		'Corpse Explosion',
		'Phoenix',
		'Rymdskor',
		'Plumber Shoes',
		'Overcharge',
		'Against All Odds',
		'Adrenaline Rush',
		'Tactical Juxtapositin',
		'Shocking Revelation',
		'Exposure Rounds',
		'Slowing Presence',
		'Engineer',
		'Penetrator Rounds',
		'Slowing Rounds',
		'Comsuming Rage',
		'Core-Tower Synergy',
		'Long Range Specialization',
		'Synergy',
		'Core Guardian',
		'G-2 Companion',
		'Trickster',
		'Tinkerer',
		'Electrical Outburst',
		'Fast Hands',
		'Spiked Armor',
		'Explosive Exchange',
		'Thor Module',
		'Long Range Superiority',
		'Parthian Tactics',
		'Desperate Measures',
		'Bloodletter',
		'Collateral Damage',
		'Zeus Module',
		'Frightening Visage',
		'Headache',
		'Reinforcements',
		'Best Friends Forever',
		'Tech Junkie',
		'Armor Shredder',
		'Roboticist',
		'Overkill',
		'Hydra Blood',
		'Steady Aim',
		'Spray N Pray',
		'Biological Warfare',
		'Upper Class',
		'Warming Up'
	);
	
	
	
	$cc = mt_rand(0, count($CharacterList));
	//echo 'cc: '.$cc;
	if($cc == count($CharacterList)){
		$cc = $cc - 1;
	}
	//echo '<br>cc: '.$cc;
	
	
	
	$pw = mt_rand(0, count($WeaponList));
	//echo '<br>pw: '.$pw;
	if($pw == count($WeaponList)){
		$pw = $pw - 1;
	}
	//echo '<br>pw: '.$pw;
	
	$sw = mt_rand(0, count($WeaponList));
	//echo '<br>sw: '.$sw;
	if($sw == count($WeaponList)){
		$sw = $sw - 1;
	}
	//echo '<br>sw: '.$sw;
	
	
	
	$tc1 = mt_rand(0, count($TowerList));
	//echo '<br>tc1: '.$tc1;
	if($tc1 == count($TowerList)){
		$tc1 = $tc1 - 1;
	}
	//echo '<br>tc1: '.$tc1;
	
	$tc2 = mt_rand(0, count($TowerList));
	//echo '<br>tc2: '.$tc2;
	if($tc2 == count($TowerList)){
		$tc2 = $tc2 - 1;
	}
	//echo '<br>tc2: '.$tc2;
	
	$tc3 = mt_rand(0, count($TowerList));
	//echo '<br>tc3: '.$tc3;
	if($tc3 == count($TowerList)){
		$tc3 = $tc3 - 1;
	}
	//echo '<br>tc3: '.$tc3;
	
	$tc4 = mt_rand(0, count($TowerList));
	//echo '<br>tc4: '.$tc4;
	if($tc4 == count($TowerList)){
		$tc4 = $tc4 - 1;
	}
	//echo '<br>tc4: '.$tc4;
	
	
	
	$pl1 = mt_rand(0, count($PerkList));
	//echo '<br>pl1: '.$pl1;
	if($pl1 == count($PerkList)){
		$pl1 = $pl1 - 1;
	}
	//echo '<br>pl1: '.$pl1;
	
	$pl2 = mt_rand(0, count($PerkList));
	//echo '<br>pl2: '.$pl2;
	if($pl2 == count($PerkList)){
		$pl2 = $pl2 - 1;
	}
	//echo '<br>pl2: '.$pl2;
	
	$pl3 = mt_rand(0, count($PerkList));
	//echo '<br>pl3: '.$pl3;
	if($pl3 == count($PerkList)){
		$pl3 = $pl3 - 1;
	}
	//echo '<br>pl3: '.$pl3;
	
	
	
	$character	= $CharacterList[$cc];
	$p_weapon	= $WeaponList[$pw];
	$s_weapon	= $WeaponList[$sw];
	$tower_1	= $TowerList[$tc1];
	$tower_2	= $TowerList[$tc2];
	$tower_3	= $TowerList[$tc3];
	$tower_4	= $TowerList[$tc4];
	$perk_1		= $PerkList[$pl1];
	$perk_2		= $PerkList[$pl2];
	$perk_3		= $PerkList[$pl3];
	
?>

<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.othyn.com">Othyn</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://www.othyn.com">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	
	<br />
	<br />
	<br /><!-- Temporary. ... and lazyness. -->
	<br />
	<br />
	
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<!-- just for spacing -->
			</div>
			
			<div class="col-md-10">
				<div class="panel panel-othyn">
					<div class="panel-heading">
						<h3 class="panel-title">Sanctum 2 Loadout Generator</h3>
					</div>
					<div class="panel-body table-responsive">
						<table class="table table-striped table-othyn">
							<tbody>
								<tr>
									<td width="20%"><strong>Character:</strong></td>
									<td width="20%"><?=$character ?></td>
									<td width="20%"></td>
									<td width="20%"></td>
									<td width="20%"></td>
								</tr>
								<tr>
									<td width="20%"><strong>Primary Weapon:</strong></td>
									<td width="20%"><?=$p_weapon ?></td>
									<td width="20%"></td>
									<td width="20%"></td>
									<td width="20%"></td>
								</tr>
								<tr>
									<td width="20%"><strong>Secondary Weapon:</strong></td>
									<td width="20%"><?=$s_weapon ?></td>
									<td width="20%"></td>
									<td width="20%"></td>
									<td width="20%"></td>
								</tr>
								<tr>
									<td width="20%"><strong>Towers:</strong></td>
									<td width="20%"><?=$tower_1 ?></td>
									<td width="20%"><?=$tower_2 ?></td>
									<td width="20%"><?=$tower_3 ?></td>
									<td width="20%"><?=$tower_4 ?></td>
								</tr>
								<tr>
									<td width="20%"><strong>Perks:</strong></td>
									<td width="20%"><?=$perk_1 ?></td>
									<td width="20%"><?=$perk_2 ?></td>
									<td width="20%"><?=$perk_3 ?></td>
									<td width="20%"></td>
								</tr>
							</tbody>
						</table>
						
						<p class="help-block" style="font-size:8pt; padding-top:10px; text-align:center;">Known bug / Fix in progress: Table will generate the same item in multiple feilds.</p>
						<p class="help-block" style="font-size:8pt; padding-top:10px; text-align:center;">Also, should really implement an AJAX call instead of refreshing the page...</p>
					
					</div>
					
					<div class="panel-footer">
						<button type="button" class="btn btn-othyn btn-sm hcenter" onClick="window.location.reload();">Generate Random Loadout</button>
						<!-- cheap trick, but it works. It's only temporary ... right? -->
					</div>
				</div>
			</div>
			
			<div class="col-md-1">
				<!-- just for spacing -->
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="container">
			<a class="pull-right" href="sanctum_2_loadout.html"><img id="secret_img" src="img/secret.png" alt="ooohhhh... secret" width="25px" height="25px"/></a>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>