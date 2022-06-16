<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = $remem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "User Name is required";
  } else {
    $name = $_POST["name"];
    // Name validation
    if (!preg_match("/^[a-zA-Z0-9-'_]*$/",$name)) {
      $nameErr = "Only  alpha numeric characters, period, dash or
      underscore allowed";
    }
    else if (strlen($_POST["name"]) <= '1') {
        $passwordErr = "Your username Must Contain At Least 2 Characters!";
    }
  }
  if(empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = $_POST["pass"];
    // Password validation
    if (!preg_match("@[a-zA-Z0-9]@",$pass)) {
      $passErr = " must contain at least eight characters";
    }
    else if (!preg_match("@[^\w]@",$pass)) {
        $passErr = " must contain at one special character";
      }

    else if (strlen($_POST["pass"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
  }
}

?>

<h2>LOGIN</h2>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  User Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Password: <input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <input type="checkbox" name="remember" value="remember">Remember me
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <a href ="/Forgotpass.php"><span style="blue"><u>Forgot Password?</u></span></a>
  <br>

</form>

<?php
echo "<h2>Your Input:</h2>";
echo "User Name: ";
echo $name;
echo "<br>";
echo "Password: ";
echo $pass;
echo "<br>";
?>

</body>
</html>