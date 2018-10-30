<html>
<head>

<link rel="stylesheet" href="index.css">

<title>YSA Break The Fast</title>
</head>
<body>

<div id="titlebar">
	<h1 id="tb_title">Break The Fast</h1>
</div>

<?php
$strConfig = file_get_contents("config.txt");
$configSets = explode("\n", $strConfig);
$title = substr($configSets[0], strpos($configSets[0], ":")+1);
?>



<div id="main">
	<p id="title"><?php echo "$title";?></p>
	<?php
		for($i1 = 1; $i1 < count($configSets); $i1++){
			$section = explode(":", $configSets[$i1]);
			echo "<p id='sectiontitle'>".str_replace("_", " ", $section[0])."</p>";
			$savestr = file_get_contents("saves/".$section[0].".txt");
			$saves = explode("\n", $savestr);
			
		}
	
	?>
</div>
<p id="credit">Powered by MdogTekk</p>
</body>
</html>
