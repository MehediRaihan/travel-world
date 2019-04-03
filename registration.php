<?php
//echo " <pre>";
if(isset($_POST['register'])){
// print_r($_POST);exit();
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$country = $_POST["country"];
$gender = $_POST["gender"];
$textArea = $_POST["textArea"];
$mobileNumber = $_POST["mobileNumber"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelworld";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
        
        // If no error, then save to the database
            $sql = "INSERT INTO users(firstname, lastname, email, address, country, gender, textArea, mobileNumber) 
                    VALUES ('$firstname', '$lastname', '$email', '$address', '$country', '$gender', 
                    '$textArea', '$mobileNumber')";
    

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
