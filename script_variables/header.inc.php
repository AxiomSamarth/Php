<?php

$script_name = $_SERVER['SCRIPT_NAME'];

?>

<html>

<head><title>Script Name</title></head>

<body>
	<form action = "<?php echo "$script_name"; ?>" method = "POST">
		<input type = "submit" name = "submit" value = "Submit" />
	</form>
</body>

</html>