<?php
	$req_location = $_GET['area'];
	if ($req_location === NULL){ $req_location = "Tokyo"; }
	$locations=array(
			"Sapporo-shi"	=>	"札幌",
			"Morioka-shi"	=>	"盛岡",
			"Tokyo"			=>	"東京",
			"Osaka"			=>	"大阪",
			"Toyama-shi"	=>	"富山",
			"Kanazawa"		=>	"金沢",
			"Naha-shi"		=>	"那覇"
					);
	$weathers=array( "Rain"=>"雨", "Mist"=>"小雨", "Clouds"=>"曇り", "Clear"=>"晴れ" );
	$json = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . $req_location . ',jp'));
	if ($json===NULL){
		return;
	}
	$location_name = $locations[$json->{'name'}];
	$weather = $weathers[$json->{'weather'}[0]->{'main'}];
	$image_path = "http://openweathermap.org/img/w/" . $json->{'weather'}[0]->{'icon'} . ".png";
	$temp = round($json->{'main'}->{'temp'} -273.15, 1);
?>
<html>
<head>
	<link rel="stylesheet" id="main" href="/weather/css/weather.css" type="text/css" media="all">
	<script type="text/javascript">
		function dropsort() {
	    	weather.submit();
		}
	</script>
</head>
<body>
<h1>Today weather</h1>
<form name="weather">
	<div class="custom">
	  <select name="area" onchange="dropsort()">
		<?	foreach($locations as $key=>$value){
				$selected="";
				if($req_location==$key){
					$selected =" selected";
				}
				print "<option value=\"$key\"$selected>$value</option>\n";
			}
		?>
	  </select>  
	</div>
</form>
<img src=<?= $image_path ?> weight="20%" height="20%">
<p>Location: <?= $location_name ?></p>
<p>Weather: <?= $weather ?></p>
<p>Temperature: <?= $temp ?>度</p>

