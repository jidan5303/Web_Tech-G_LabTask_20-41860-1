<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
    <?php
    $imageErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_FILES["upload"]["size"] > 400000) {
            $imageErr = "Sorry, your file is too large.";           
        }
        else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
            $imageErr = "Picture format must be in jpeg or jpg or png";
        }
        else{
            
        }
    }    
    ?>
    <form action="" method="post">
    <h1>PROFILE PICTURE</h1>
    <img src="image.png" height="150px" width="150px">
    <br><br>
    <input type="file" name="upload" id="upload">
    <span class="error"> <?php echo $imageErr;?></span>
    <br><br>
    <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>