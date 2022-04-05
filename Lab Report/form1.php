<?php
$host = "localhost";
$name = "student";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $name);

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

echo "Connected Successfully!!!";
 
if(isset($_POST["submit"])){
    echo "Worded!!!";

    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $level = $_POST["level"];
    $faculty = $_POST["faculty"];

    // echo $fullname;
    // echo $address;
    // echo $gender;
    // echo $faculty;

    $sql = "INSERT INTO students (fullname, address, phone, email, gender, level, faculty) VALUES('".$fullname."', '".$address."','".$phone."','".$email."','".$gender."','".$level."','".$faculty."' )";

    $result = mysqli_query($conn, $sql);

    if($result === false){
    echo mysqli_error($conn);
    }else{
    $id = mysqli_insert_id($conn);
    echo "Inserted record id :". $id;
}

}
