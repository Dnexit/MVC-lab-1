<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/css/reset.css">
    <link rel="stylesheet" href="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/css/style.css">
    <script src="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/js/time.js" defer></script>
    <script src="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/js/history_accounting.js" defer></script>
</head>
<body id="body--main" background="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/img/9.jpg">

<div class="container">
    <header class="header">
        <h1><?= $title ?></h1>


        <time class="time">10.08.2019 </time>
        <nav class="nav">
            <a href="/index">главная</a>
            <a href="/about">обо мне</a>
            <a href="/interests">мои интересы</a>
            <a href="/learning">учеба</a>
            <a href="/gallery">галерея</a>
            <a href="/contacts">контакты</a>
            <a href="/blog">мой блог</a>
            <a href="/guest-book">гостевая книга</a>
            <a href="/test">тест</a>
            <a href="/history">история</a>
        </nav>
    </header>
    <main class="main">
        <section class="section section--main">
            <?= $content ?>
        </section>
    </main>
</div>

<footer>

</footer>
</body>
</html>

