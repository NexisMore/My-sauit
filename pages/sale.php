<?php
$hour = date('H');
if ($hour >= 8 && $hour < 20) {
    $theme = 'light';
} else {
    $theme = 'dark';
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title> Главная </title>
    <meta name="description" content="Данный сайт предназначен для моей сдачи экзамена.">
    <meta name="author" content=NexisMore>
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="<?= $theme ?>">
    <header class="<?= $theme ?>">
        <div class="logo">ГАСТРО </div>
        <div class="logo1"> ВЭЙ </div>

        <div class="navigation div <?= $theme ?>">
            <a href="../index.php">ГЛАВНАЯ</a>
            <a href="products.php">НАПРАВЛЕНИЯ</a>
            <a href="about.php">О НАС</a>
            <a href="sale.php">АКЦИИ</a>
            <a href="registration.php">ОСТАВИТЬ ЗАЯВКУ</a>
            <a href="../index.php">ЕЩЁ</a>
        </div>
    </header>
    <section class="sale-hero">
        <div class="discount">
            При оформлении тура<br>
            до 30 мая – скидка 30%
        </div>
        <div class="card-sale">

            <h1>
                Тур о котором<br>
                вы мечтали
            </h1>

            <p>
                Мы уже обо всем позаботились<br>
                — вам остается только<br>
                наслаждаться изысканным<br>
                отдыхом!
            </p>

            <div><a href="products.php" class="btn">ВЫБРАТЬ ТУР ДЛЯ СЕБЯ</a></div>

            <div class="reviews">

                <div class="avatars">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg">
                    <img src="https://randomuser.me/api/portraits/women/22.jpg">
                </div>

                <div class="rating">
                    <div class="stars">★★★★★</div>
                    <span>2000+ отзывов</span>
                </div>

            </div>

        </div>
    </section>
</body>

</html>