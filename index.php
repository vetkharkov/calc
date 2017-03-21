<?php

$rad = (isset($_POST['rad'])) ? $_POST['rad'] : 0;

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:13
 */
require_once __DIR__ . "/app/circle.php";

$area_circle = Circle::Area($rad);

$length_circle = Circle::Perimeter($rad);

$diameter_circle = Circle::Diameter($rad);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="vet">
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="/calc/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" action=""
              class="form-horizontal col-md-6">
            <h3>Программа для расчета площади и периметра круга.</h3>
            <div class="form-group">
                <label for="input1" class="col-sm-3 control-label">Введите радиус круга</label>
                <div class="col-sm-3">
                    <input type="text" name="rad" class="form-control" id="input1" placeholder="<?= $rad ?>"/>
                </div>
                <input type="submit" class="btn btn-primary" value="Расчитать"/>
            </div>
        </form>
    </div>
    <div class="row">
        <p>Диаметр круга равен: <?= $diameter_circle ?></p>
        <p>Площадь круга равна: <?= $area_circle ?></p>
        <p>Длина окружности равна: <?= $length_circle ?></p>
    </div>
</div>
</body>
</html>