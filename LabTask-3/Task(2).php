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
$curpassword = "abc@1234";
$curpassErr = $newpassErr = $retypeErr = "";
$curpass = $newpass = $retype = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["curpass"])) {
    $curpassErr = "Enter current password";
  }
  else{
    $curpass = $_POST["curpass"];
    if ($curpass!=$curpassword) {
        $curpassErr = "Password didn't match. try again.";
    }
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["newpass"])) {
    $newpassErr = "Enter new password";
  }
  else{
    $newpass = $_POST["newpass"];
    if($newpass==$curpassword){
      $newpassErr = " New Password should not be same as the Current Password";
    }
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["retype"])) {
    $newpassErr = "Retype new password";
  }
  else{
    $retype = $_POST["retype"];
    if($retype!=$newpass){
      $retypeErr = " New Password must match with the Retyped Password";
    }
  }
}
?>

<h2>CHANGE PASSWORD</h2>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Current Password : 
  <input type="password" name="curpass" value="<?php echo $curpass;?>">
  <span class="error">* <?php echo $curpassErr;?></span>
  <br><br>

  <span style="color:green">New Password :</span>
  <input type="password" name="newpass" value="<?php echo $newpass;?>">
  <span class="error">* <?php echo $newpassErr;?></span>
  <br><br>

  <span style="color:red">Retype New Password :</span>
  <input type="password" name="retype" value="<?php echo $retype;?>">
  <span class="error">* <?php echo $retypeErr;?></span>
  <br><br>



  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Current Password: ";
echo $curpass;
echo "<br>";
echo "New Password: ";
echo $newpass;
echo "<br>";
echo "Retype New Password: ";
echo $retype;
echo "<br>";

?>

</body>
</html>