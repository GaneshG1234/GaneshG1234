    <?php
$insert=false;
include ('config.php');
if(isset($_POST['name'])){
    

// echo "Sucess connecting to the db";
$name =$_POST['name'];
$gender =$_POST['gender'];
$age =$_POST['age'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$other =$_POST['other'];

$sql="INSERT INTO  `winter-trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other');";


//INSERT INTO `trip` (`slno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('0', 'GANESH', '20', 'MALE', 'EXMAPLE@GMAIL.XOM', '9938553919', 'I WANT TO JOIN', current_timestamp());
// echo $sql;

if($con->query($sql)== true){
    // echo "Sucessfully Inserted";
    $insert=true;

}
else{
    echo "ERROR: $sql <br> $con->error";
    
}

$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lobster&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg"     src="gp-logo.jpg" alt="GP Berhampur">
    <div class="container">
        <h1>GP. Berhampur winter trip Travel form </h1>
        <p >Enter Your details to conform your paticipation in the trip</p>
       <?php
       if($insert == true){
        echo "<p class='fd'>Thanks for submitting your form. We are happy to see you joing for the  winter trip</p>";
        }
         ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="bame" placeholder="Enter Your name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email"placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone"placeholder="Enter Your Phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any inforamtion here..."></textarea>
            <button class="btn">Submit</button>
            



        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>