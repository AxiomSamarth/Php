<?php

include 'core.inc.php';
include 'connect.inc.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass_hash = md5($password);
	
	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$pass_hash' ";
	
	if($run = mysql_query($query))
	{
		if(mysql_num_rows($run))
		{
			while($row = mysql_fetch_assoc($run))
			{
				$id = mysql_result($run, 0, 'id');
				$_SESSION['id'] = $id;
				header('Location: index.php');	
			}
		}
		else
		{
			echo 'No results found..!!';
		}
	}
	else
	{
		mysql_error();
	}
}


?>
<!doctype html>
<html lang='en'>
	<head>
		<title>Log in form</title>
		<meta charset = "utf-8" />
	</head>
	<body>
		<form action = "<?php echo $current_file; ?>" method = "POST">
			Username : <input type = "text" name = "username" required /><br /><br />
			Password : <input type = "password" name = "password" required /><br /><br />
			<input type = "submit" value = "Submit" />
		</form>
	</body>
</html>