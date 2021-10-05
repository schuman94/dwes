<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php if (isset($_GET['x'], $_GET['y'])): ?>
        <p>La suma vale <?= $_GET['x'] + $_GET['y'] ?></p>
    <?php endif ?>
</body>
</html>