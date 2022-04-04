<?php

$host = "localhost";
$name = "form";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $name);

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
echo "Connected Successfully!!! <br>";   

if(isset($_POST['submit'])){    
    echo "Yes it works <br>";


$username = $_POST["username"];
$password = $_POST["password"];

echo " Your username is ".$username;
echo "<br>";
echo " Your password is ".$password;
echo "<br>";

$sql = "INSERT INTO users (username, password) VALUES ( '".$username."' , '".$password."')";

$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
}else{
    $id = mysqli_insert_id($conn);
    echo "Inserted record id :". $id;
}
}

?>
