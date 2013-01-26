<html>
<head>
	<title>PHP Tester</title>
	<script language="javascript" type="text/javascript" src="assets/edit_area/edit_area_full.js"></script>
	<script language="javascript" type="text/javascript">
	editAreaLoader.init({
			id : "editarea"		// textarea id
			,syntax: "php"			// syntax to be uses for highgliting
			,start_highlight: true		// to display with highlight mode on start-up
		});
	</script>
</head>
<body>
	<pre>
		<?php
		if (!empty($_POST['script'])) {
			eval($_POST['script']);
		}
		?>
	</pre>

	<hr>
	<form action="" method="post">
		<textarea name="script" id="editarea" cols="30" rows="10"><?php echo empty($_POST['script']) ? '// ketik kode' : $_POST['script']; ?></textarea>
		<input type="submit" value="Coba">
	</form>		
</body>
</html>
