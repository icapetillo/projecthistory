<html>
<head>

	<script type="text/javascript">
	
		function cambia_color(selBackground)
		{
			var bgc = selBackground;
			var bgcVal = bgc.options.item(bgc.selectedIndex).value;
			bgc.style.backgroundColor = bgcVal;
		}
		
	</script>
	
</head>

<body>

<form method="post">

<div id="capa_select_color">
<select style="width:75px" name="selBackground" onchange="cambia_color(this)">
	<option value="#F00" style="background-color:#F00">&nbsp;</option>
	<option value="#0F0" style="background-color:#0F0">&nbsp;</option>
	<option value="#00F" style="background-color:#00F">&nbsp;</option>
</select>
</div>

</form>

</body>
</html>