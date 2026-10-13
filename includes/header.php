<?php
$hour = date('H');
$theme = ($hour >= 8 && $hour < 20) ? 'light' : 'dark';

$title = $title ?? 'ГАСТРОВЭЙ';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="Данный сайт предназначен для моей сдачи экзамена.">
    <meta name="author" content="NexisMore">
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="<?= $theme ?>">
<header class="<?= $theme ?>">
    <div class="logo">ГАСТРО </div>
    <div class="logo1"> ВЭЙ </div>

    <div class="navigation div <?= $theme ?>">
        <a href="/index.php">ГЛАВНАЯ</a>
        <a href="/pages/products.php">НАПРАВЛЕНИЯ</a>
        <a href="/pages/about.php">О НАС</a>
        <a href="/pages/sale.php">АКЦИИ</a>
        <a href="/pages/registration.php">ОСТАВИТЬ ЗАЯВКУ</a>
        <a href="/index.php">ЕЩЁ</a>
    </div>
</header>