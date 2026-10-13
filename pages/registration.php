<?php
$title = 'О нас';
$base = '../';
require __DIR__ . '/../includes/header.php';
?>
    <div class="registration-ga">ГастроВэй</div>
    <section class="registration-info">
        <form class="form">
            <div class="form-field">
                <div class="form-text">Населенный пункт</div>
                <div class="">
                    <input type="text" placeholder="Введите название населенного пункта:">
                </div>
            </div>
            <div class="form-field">
                <div class="form-text">Имя</div>
                <div class="">
                    <input type="text" placeholder="Введите имя:">
                </div>
            </div>
            <div class="form-field">
                <div class="form-text">Пол</div>
                <div class="form-text-pol">
                    <select id="project" name="project">
                        <option value="" disabled selected> Ваш пол:</option>
                        <option value="portfolio">Женщина</option>
                        <option value="landing">Мужчина</option>
                    </select>
                </div>

            </div>
            <div class="form-field">
                <div class="form-text">Телефон</div>
                <div class="">
                    <input type="text" placeholder="+7( ___ ) ___ - __ - __">
                </div>
            </div>
            <div class="checkbox">
                <input type="checkbox">

                <label for="form-input">
                    Я даю согласие на обработку персональных данных в<br> соответствии с Политикой
                    конфиденциальности
                </label>
            </div>
            <button class="forum-button" type="submit">ХОЧУ ПОЕХАТЬ!</button>
        </form>
    </section>
</body>



</html>