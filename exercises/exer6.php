<?php
session_start();
?>

<?php
/**
 * 1. Authenticate
 * 2. Remember
 */
$cookie = false;
if(isset($_POST['submit'])) {
	if(!empty($_POST["remember"])) {
		$_SESSION['user'] = setcookie ("username",$_POST["username"],time()+ 3600);
		$_SESSION['pass'] = setcookie ("password",$_POST["password"],time()+ 3600);
		echo "Cookies Set Successfuly";
		$cookie = true;
	} else if ($cookie = true) {
		if ($_POST["username"] != "test" && $_POST["password"] != "test") {
			echo "Incorrect Username or Password";
		} else {
			// setcookie ("username",$_POST["username"],time()+ 3600);
			// setcookie ("password",$_POST["password"],time()+ 3600);
			// echo "Sign in here";
            $_SESSION['loggedin'] = "ok";
		}
		
	} else if(empty($_POST["remember"])){
		setcookie("username","");
		setcookie("password","");
		echo "Cookies Not Set";
	} ?>
	<p><a href="#"> Go to Login Page </a> </p>
<?php } else { ?>
      <form action="" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" name="submit" value="Login"></span></p>
</form>
<?php }


?>

