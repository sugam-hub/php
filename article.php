<?php

$db_host = "localhost";
$db_name = "lab";
$db_user = "sugam";
$db_pass = "[tfzdgrq8KttRhB*";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if( mysqli_connect_error()){
    echo mysqli_connect_error();
}

echo "Connected Successfully";

$sql = "SELECT * FROM article WHERE id = " . $_GET['id'];

$results = mysqli_query($conn, $sql);

if($results === false){
    echo mysqli_error($conn);
}else{
    $article = mysqli_fetch_assoc($results);
}
?>
                                 
<html>
    <head>
        <title>My Blog</title>
    </head>

    <body>
        <?php if($article===null): ?>
            <p>Article not found.</p>
            <?php else:?>
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
                    
                <?php endif;?>
    </body>
</html>



