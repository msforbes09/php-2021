<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Lessons</title>
</head>

<body>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>