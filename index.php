<!DOCTYPE html>
<html>
<head>
<title>Welcome to this alcohl level detection system</title>
<style type="text/css">
.container
{
background-color: black;
height: 1200px;
width: 1200px;
}	
.header
{
	background-color: white;
	height: 50px;
	width: 1000px;
	margin: auto;
}
#formm
{
	background-color: yellow;
	width: 600px;
	height: 200px;
	margin: auto;
}
</style>
</head>
<body>
<div  class="container">
<div class="header" >	
<font style="font-size: 20px; margin-left:30%;">Welcome to alcohol detection system and data collection</font>	
</div>
  <div id="formm">
  	<form method="GET" action="" style="margin: auto;">
  	<table>
  	 <tr><td>Username</td><td><input type="text" name="name"></td>
  	</tr>
  	<tr><td>Password</td><td><input type="password" name="password"></td>
  	</tr>
  	 		 <tr><td></td><td><input type="submit" name="login" value="Login"></td>
  	</tr>
  	 	
  	</table>
  	</form>	
  </div>
</div>
</body>
</html>
<?php 
include ('connection.php');

if (isset($_GET['login'])) {
	 $_username=$_GET['name'];
	$_password=$_GET['password'];
	echo $_username.$_password ;
	$q1=mysql_query("select * from  account where username='". $_username."' && password='".$_password."'");
	if ($q1>1) {
		header('Location:details.php');
	}
	else
	{
		echo "data are not correct";
	}
}

?>

