<?php
$error="";
$phone=$_POST['phone'];

if(isset($_POST['submit'])){

    if(empty($_POST['phone']))
    {
       $error = "Please Enter Mobile Nunber";
    }elseif(strlen($_POST['phone']) < 12 )
    {
        $error = "Mobile Number Should be of 12 digits";
    }elseif(!preg_match("^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/gm",$phone))
    {
        $error = "Invalid Mobile Number";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile</title>
</head>
    <body>
        <form action="" method="post"> 
            Phone Number: <input type="text" name="phone" >
            <span> <?php echo $error;   ?></span>
            <input type="submit" name="submit" value="Submit"> 
        </form>
    </body>
</html>