<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('09123456789' => '12345','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sabong International</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <div id="logo" align="center">
        <img src="logo.png">
    </div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Mobile Number:</td>
      <td><input name="Username" type="text" class="Input" placeholder="Input Mobile Number"></td>
    </tr>
    <tr>
      <td align="right">Password:</td>
      <td><input name="Password" type="password" class="Input" placeholder="Input Password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
    <br>
    <div id="footertext" align="center">
      <h2>GET A CHANCE TO WIN</h2>
    </div>
    <div id="textprizes" align="center">
        <h3>1st Prize <br>Toyota Fortuner</h3>
        <h3>2nd Prize <br>200,000 Pesos</h3>
        <h3>3rd Prize <br>Iphone 11pro Max</h3>
    </div>
    <div id="prizes"></div>
   
</body>
</html>