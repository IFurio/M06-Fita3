<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex33</title>
</head>
<body>
    <form action="#" method="POST">
        <textarea name="texto"></textarea><br><br>
        <input type="submit">
    </form>

    <?php 
    if (isset($_POST["texto"])) {
        file_put_contents("ex33.txt", 
            file_get_contents("ex33.txt")."\n<hr>\n".$_POST['texto']);
    }
    $file = file("ex33.txt");
    foreach ($file as $paragraf) {
        echo "<p>".trim($paragraf)."</p>\n";
    }
    ?>
</body>
</html>