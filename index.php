<?php
// we will create connect to mysql database:
// mysql i(improved version) methods(for begineers) or php data objects.
// we are going to use procedural language not oop for connection here
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

//for connection
$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database is failed due to " . mysqli_connect_error());
}
// echo "Success connection to the DB";

//inserting the values that are comming and storing them to DB
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `Trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;


// -> used to access the methods of the objects
if($con->query($sql) == true){
    $insert = true;
}else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpeg" alt="LPU">
    <div class="container">
        <h1>Welcome to Lovely Professional University</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <?php
        if($insert ==true){
        echo "<p class='submitMsg'>Thanks for submiting your details. We are happy to see you join to the US trip.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>