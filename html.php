<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>

    <?php echo" another line";
    ?>
    <ul>
        <?php
            for ($i=1; $i <=10; $i++) {
                echo "<li>item $i</li>";
            }
            ?>
    </ul>

</body>
</html>