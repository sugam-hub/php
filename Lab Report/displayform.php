<html>
    
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

$sql = "SELECT * FROM students";

$results = mysqli_query($conn, $sql);

if($results === false){
    echo mysqli_error($conn);
}else{
    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<head>
    <title>Form</title>
</head>

<body>
    
</body>

</html>