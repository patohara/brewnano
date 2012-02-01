<?php $PORT = 14417; ?>
<html>
<head>
	<link rel="stylesheet" href="css/barley/jquery-ui-1.8.17.custom.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/layout.js"></script>
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/content.css" />
	<title>BrewNano!</title>
	<!-- meta tags for apple mobile device auto fullscreen effect -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
</head>
<body id="container">
	<div id="header">
		<h1>BrewNano!</h1>
	</div>
	<div id="content">
		<ul>
			<li><a href="#manual" />Manual Control</a></li>
			<li><a href="#config" />Configuration</a></li>
		</ul>
		<div id="manual">
			<h2>Manual Control</h2>
			<div id="powers" class="power_block ui-widget-header">
				<h3>Power</h3>
				<input type="checkbox" class="power" id="power-1" /><label class="powerlabel" for="power-1">Main</label>
				<input type="checkbox" class="power" id="power-2" /><label class="powerlabel" for="power-2">Valves</label>
				<input type="checkbox" class="power" id="power-3" /><label class="powerlabel" for="power-3">Pumps</label>
				<input type="checkbox" class="power" id="power-4" /><label class="powerlabel" for="power-4">Elements</label>
				<input type="checkbox" class="power" id="power-5" /><label class="powerlabel" for="power-5">Sensors</label>
			</div>
			<div id="valves" class="manual_block ui-widget-header left">
				<h3>Valves</h3>
				<input type="checkbox" class="valve" id="valve-1" /><label class="valvelabel" for="valve-1">Valve 1</label>
				<input type="checkbox" class="valve" id="valve-2" /><label class="valvelabel" for="valve-2">Valve 2</label>
				<input type="checkbox" class="valve" id="valve-3" /><label class="valvelabel" for="valve-3">Valve 3</label>
				<input type="checkbox" class="valve" id="valve-4" /><label class="valvelabel" for="valve-4">Valve 4</label>
				<input type="checkbox" class="valve" id="valve-5" /><label class="valvelabel" for="valve-5">Valve 5</label>
				<input type="checkbox" class="valve" id="valve-6" /><label class="valvelabel" for="valve-6">Valve 6</label>
				<input type="checkbox" class="valve" id="valve-7" /><label class="valvelabel" for="valve-7">Valve 7</label>
				<input type="checkbox" class="valve" id="valve-8" /><label class="valvelabel" for="valve-8">Valve 8</label>
			</div>
			<div id="pumps" class="manual_block ui-widget-header right">
				<h3>Pumps</h3>
				<input type="checkbox" class="pump" id="pump-1" /><label class="pumplabel" for="pump-1">Pump 1</label>
				<input type="checkbox" class="pump" id="pump-2" /><label class="pumplabel" for="pump-2">Pump 2</label>
			</div>
			<div id="elements" class="manual_block ui-widget-header left">
				<h3>Elements</h3>
				<input type="checkbox" class="element" id="element-1" name="elements" /><label class="elementlabel" for="element-1">Element 1</label>
				<input type="checkbox" class="element" id="element-2" name="elements" /><label class="elementlabel" for="element-2">Element 2</label>
			</div>
			<div id="sensors" class="manual_block ui-widget-header right">
				<h3>Sensors</h3>
			</div>
		</div>
		<div id="config"><h2>Configuration (Shared with daemon)</h2></div>
	</div>
	<div id="footer">
		BrewNano!
	</div>
</body>
</html>
