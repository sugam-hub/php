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

$sql = "SELECT * FROM article ORDER BY published_by";

$results = mysqli_query($conn, $sql);

if($results === false){
    echo mysqli_error($conn);
}else{
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<html>
    <head>
        <title>My Blog</title>
    </head>

    <body>
        <?php if(empty($articles)): ?>
            <p>Article not found.</p>
            <?php else:?>
                <ul>
                    <?php foreach($articles as $article) :?>
                        <li>
                            <h2><?= $article['title']; ?></h2>
                            <p><?= $article['content']; ?></p>
                        </li>
                        <?php endforeach;?>
                </ul>
                <?php endif;?>
    </body>
</html>



