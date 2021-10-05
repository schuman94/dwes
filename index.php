<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>


    <?php if (isset($_GET['oper'])): ?>
        <p>El valor del parámetro oper es <?= $_GET['oper'] ?> </p>
    <?php else: ?>
        <p>No se ha indicado la operacion</p>
    <?php endif ?>

    <?php if (isset($_GET['x'], $_GET['y'])): ?>
        <?php
        switch ($_GET['oper']) {
            case 'suma':
                $res = $_GET['x'] + $_GET['y'];
                break;
            case 'resta':
                $res = $_GET['x'] - $_GET['y'];
                break;
            case 'multi':
                $res = $_GET['x'] * $_GET['y'];
                break;
            case 'div':
                $res = $_GET['x'] / $_GET['y'];
                break;
        }
        ?>
    
    <p>El resultado es <?= $res ?></p>
    <?php endif ?>
    
</body>
</html>