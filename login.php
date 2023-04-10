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
    <div class="container rounded">
        <div class="row align-content-center" style="margin-top: 120px">
            <div class="col-4"></div>
            <div class="col border border-dark text-center">
                <form action="index.php" method="post">
                    <input style="margin-top: 10px;" name="login" type="text" placeholder="Логин">
                    <br>
                    <input style="margin-top: 10px;" name="password" type="password" placeholder="Пароль">
                    <br>
                    <input style="margin: 10px 0px;" name="submit" type="submit" value="Войти">
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>