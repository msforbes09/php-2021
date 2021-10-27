<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Lessons</title>
    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            <!-- Test push -->
            <!-- test change to try commit signing -->
            <?= 'Hello, ' . htmlspecialchars(ucfirst(strtolower($_GET['name']))); ?>
        </h1>
    </header>
</body>

</html>