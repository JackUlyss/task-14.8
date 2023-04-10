<?php

include 'function.php';

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (checkPassword($login, $password)) {
    session_start(); 

    $_SESSION['auth'] = true; 
    $_SESSION['login'] = $login;
}

$auth = $_SESSION['auth'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SPA</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row align-content-center" style="margin-bottom: 20px">
            <div class="col-1">
                <img src="img/logo.png" alt="logo" class="d-inline">
            </div>
            <div class="col-3">
                <p id="logo-name" class="d-inline">Heliconia Spa</p>
            </div>
            <div class="col-2 text-center">
                <p>О нас</p>
            </div>
            <div class="col-2 text-center">
                <p>Акции</p>
            </div>
            <div class="col-2 text-center">
                <p>Контакты</p>
            </div>
            <div class="col-2 text-center">
<?php if (!$auth) {
    ?> <p><a href="login.php">Войти</a></p><?php 
} else {
    ?> <p><?php echo getCurrentUser(); ?></p><?php
}?>
            </div>
        </div>
        <div class="row" id="img-main">
            <div class="col-6">
                <p id="tf" style="margin: 80px 0 20px 80px;">Подари себе часы райского удовольствия</p>
                <p id="ts" style="margin: 60px 0 80px 80px;">Процедуры нашего салона помогут вам расслабиться, снять
                    стресс и привести тело в тонус.</p>
                <button type="button" class="btn btn-secondary btn-lg" style="margin: 0 0 0 80px">Записаться</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 class="t2">Услуги и Акции</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3" style="z-index: 1;">
                <img src="img/a-1.png" alt="pic1">
            </div>
            <div class="col-3 prom">
                <p class="t3">Балийский и тайский массажи со скидкой <strong>20%!</strong></p>
            </div>
            <div class="col-3" style="z-index: 1;">
                <img src="img/a-2.png" alt="">
            </div>
            <div class="col-3 prom">
                <p class="t3">Шоколадное обертывание со скидкой <strong>50%!</strong></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 class="t2">Галерея</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><img src="img/g-1.png" alt="g-pic-1"></div>
            <div class="col-6"><img src="img/g-2.png" alt="g-pic-2"></div>
        </div>
    </div>
</body>

</html>