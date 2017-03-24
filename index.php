<?php
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:13
 */
error_reporting(E_ALL);// устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require_once __DIR__ . "/app/Set_Get.php";// подключаем трейт, абстрактный класс Figure и все производные классы

$rad = (isset($_POST['rad'])) ? $_POST['rad'] : 0;
$heightRect = (isset($_POST['height'])) ? $_POST['height'] : 0;
$widthRect = (isset($_POST['width'])) ? $_POST['width'] : 0;
$triangle_h = (isset($_POST['triangle_h'])) ? $_POST['triangle_h'] : 0;
$triangle_a = (isset($_POST['triangle_a'])) ? $_POST['triangle_a'] : 0;
//------------Круг----------------
$circle = new Circle($rad);
$area_circle = $circle->getResultArea();
$length_circle = $circle->getResultPerimeter();
$diameter_circle = $circle->getResultDiameter();
//---------Прямоугольник-----------
$rectangle = new Rectangle($heightRect, $widthRect);
$area_rect = $rectangle->getResultArea();
$length_rect = $rectangle->getResultPerimeter();
//----------Треугольник------------
$triangle = new Triangle($triangle_h, $triangle_a);
$area_tr = $triangle->getResultArea();
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
              class="form-horizontal col-md-8 col-md-offset-2">
            <h3>Программа для расчета площади и периметра.</h3>
            <div class="form-group">
                <div class="row">
                    <h4>Расчет площади и периметра круга</h4>
                    <div class="col-sm-3">
                        <img src="/calc/img/circle.jpg">
                    </div>
                    <div class="col-sm-4">
                        <label for="input1" class="control-label">Введите радиус круга R = </label>
                        <input type="text" name="rad" class="form-control" id="input1" placeholder="<?= $rad ?>"/>
                        <input type="submit" class="btn btn-primary" value="Расчитать"/>
                    </div>
                    <div class="row">
                        <p>Диаметр круга равен: <?= $diameter_circle ?></p>
                        <p>Площадь круга равна: <?= $area_circle ?></p>
                        <p>Длина окружности равна: <?= $length_circle ?></p>
                    </div>
                </div>

                <div class="row">
                    <h4>Расчет площади и периметра прямоугольника</h4>
                    <div class="col-sm-4">
                        <img src="/calc/img/rectangle.jpg" width="200" height="100">
                    </div>
                    <div class="col-sm-4">
                        <label for="input2" class="control-label">Введите высоту фигуры a=</label>
                        <input type="text" name="height" class="form-control" id="input2" placeholder="<?= $heightRect ?>"/>
                        <label for="input3" class="control-label">Введите ширину фигуры b=</label>
                        <input type="text" name="width" class="form-control" id="input3" placeholder="<?= $widthRect ?>"/>
                        <input type="submit" class="btn btn-primary" value="Расчитать"/>
                    </div>
                    <div class="row">
                        <p>Площадь прямоугольника равна: <?= $area_rect ?></p>
                        <p>Периметр прямоугольника равен: <?= $length_rect ?></p>
                    </div>
                </div>

                <h4>Расчет площади треугольника</h4>
                <div class="col-sm-4">
                    <img src="/calc/img/triangle.jpg" width="200" height="200">
                </div>
                <div class="col-sm-4">
                    <label for="input4" class="control-label">Введите h = </label>
                    <input type="text" name="triangle_h" class="form-control" id="input4" placeholder="<?= $triangle_h ?>"/>
                    <label for="input5" class="control-label">Введите основание a =</label>
                    <input type="text" name="triangle_a" class="form-control" id="input5" placeholder="<?= $triangle_a ?>"/>
                    <input type="submit" class="btn btn-primary" value="Расчитать"/>
                </div>
                <div class="row">
                    <p>Площадь треугольника равна: <?= $area_tr ?></p>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
