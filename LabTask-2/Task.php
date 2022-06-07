<!DOCTYPE html>
<head>
<style>
.error {color: #FF0000;}
</style>
<body>
    <?php
        $name = $email = $dob = $gender = $degree = $blood = "";
        $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //Name validation
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }
            else{
                $name = $_POST["name"];
                if (!preg_match("/^[a-zA-Z]+[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Start with letter and can contain letters, dash or period only";
                }
                if (str_word_count($name)<2){
                    $nameErr = "At least two word required"; 
                }
            }
            //Email validation
            if(empty($_POST["email"])) {
                $emailErr = "Email is required";
            } 
            else{
                $email = $_POST["email"];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
            }  
            //Date of Birth validation
            if(empty($_POST["dob"])){
                $dobErr = "Date of Birth is required";
            }
            else{
                $dob = $_POST["dob"];
                if($dob<1953 || $dob>1999){
                    $dobErr = "Date of Birth must be between 1953 to 1998";
                }
            }
            //Gender validation
            if(empty($_POST["gender"])){
                $genderErr = "Must select one";
            } 
            else{
                $gender = $_POST["gender"];
            }
            //Degree validation
            if(isset($_POST["option"])){
                if(sizeof($_POST["option"])<2){
                    $degreeErr = "At least two of them must be selected";
                }
            }
            //Blood Group validation
            if(empty($_POST["bloodgrp"])){
                $bloodErr = "Must select blood group";
            }
            else{
                $blood = $_POST["bloodgrp"];
            }
                        
        }
    ?>

    <h2>LAB ASSESSMENT</h2>
    <p><span class="error">* Required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

    1. Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>   
    <br><br>

    2. E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    3. Date of Birth: <input type = "date" name="dob" value="<?php echo $dob;?>">
    <span class="error">* <?php echo $dobErr;?></span>
    <br><br>

    4. Gender: 
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other  
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>

    5.Degree:
    <input type="checkbox" name="option[]" value="SSC"> SSC
    <input type="checkbox" name="option[]" value="HSC"> HSC
    <input type="checkbox" name="option[]" value="BSc"> BSc
    <input type="checkbox" name="option[]" value="MSc"> MSc
    <span class="error">* <?php echo $degreeErr;?></span>
    <br><br>

    6.Blood Group:
    <select name="bloodgrp">
        <option value="">---select group---</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
    </select>
    <span class="error">* <?php echo $bloodErr;?></span>
    <br><br>


    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        echo "<h2>Input:</h2>";
        echo "<b>Name</b>: ";
        echo $name; 
        echo "<br>";
        echo "<b>Email</b>: ";
        echo $email;     
        echo "<br>";
        echo "<b>Date of Birth</b>: ";
        echo $dob;
        echo "<br>";
        echo "<b>Gender</b>: ";
        echo $gender;
        echo "<br>";
        echo "<b>Degree</b>: ";
        if(isset($_POST['option'])){
            if(!empty($_POST['option'])){    
                foreach($_POST['option'] as $value){
                    echo $value.', ';
                }
            }       
        }
        echo "<br>";
        echo "<b>Blood Group</b>: ";
        echo $blood;
        echo "<br>";

    ?>


</body>
</html>
</body>

</html>