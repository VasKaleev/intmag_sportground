<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-wrap">
                <a href="index.php"><img class="logo-img" src="./assets/images/logo1.png" alt="Hello"></a>
                <div class="invk">
                    <a target="_blank" href="https://www.instagram.com/sport.groundd/?igshid=zye5ih15nbx" class="in">
                        <img src="./assets/images/in.svg" title="Интернет магазин Sport Ground в инстаграмм" alt="Интернет магазин Sport Ground в in">
                    </a>
                    <a href="#" class="vk">
                        <img src="./assets/images/vk.svg" title="Интернет магазин Sport Ground в вконтакте" alt="Интернет магазин Sport Ground в vk">
                    </a>
                    <a href="https://msngr.link/tg/@vas_fam" target="_blank" class='tg'>
                        <img src="./assets/images/tg.svg" title="Написать в телеграмм" alt="Написать в телеграмм">
                    </a>
                </div>
                <div class="cart-super-Btn">
                    <p class="cartbtn">0</p>
                    <img class="cart" src="./assets/images/cart.svg" alt="Cart">
                </div>
                <!-- Модальное окно -->
                <div id="myModalLk" class="modal">
                    <!-- Модальное содержание -->
                    <div class="modal-content-lk">
                        <span class="close">&times;</span>
                        <h3>Введите имя пользователя и пароль</h3>
                        <form class="feed-form feed-form_mt25" action="#">
                            <input name="name" placeholder="Ваше имя" type="text" />
                            <input name="password" placeholder="Пароль" type="password" />
                            <button class="button_modal_cart">Войти</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <h6 class="main-title">Мои покупоки товаров в интернет магазине</h6>
            <form name="f1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="f1">
                <input type="text" id="search_zak" required name="search_q" placeholder="Введите номер телефона..." />
                <input type="submit" id="btn-search-zak" value="Найти заказы" />
            </form>
            <?php
            if (!empty($_POST['search_q'])) {
                echo '<style>#f1 {display: none}</style>';
                $nn = 0;
                $search_q = '';
                $search_q = $_POST['search_q'];
                include('configinc.php');
                $search_q = trim($search_q);
                $search_q = strip_tags($search_q);
                $result = mysqli_query($db, "SELECT `id`,`fio`,`tel`,`email`,`datazak`, `pokup_tov`, `kol`, `cena`,`sposobdostav`,`adrdost`,`oplata` FROM `pokup` WHERE `tel` LIKE '%$search_q%'");
                echo '<table class="table" id="table2">';
                echo '<tr class="align-middle">';
                echo '<td>N</td><td>ФИО</td><td>Номер телефона</td><td>Адрес эл. почты</td><td>Адрес доствки</td><td>Дата заказа</td><td>Название товара</td><td>Колич.</td><td>Цена бел.руб.</td><td>Способ доставки</td><td>Номер заказа</td><td>Признак оплаты товара</td>';
                echo '</tr>';
                echo '<tr>';
                while ($itog = mysqli_fetch_assoc($result)) {
                    $nn++;
                    $nomerzak = $itog["id"];
                    $fio = $itog["fio"];
                    $tel = $itog["tel"];
                    $email = $itog["email"];
                    $adrdost = $itog["adrdost"];
                    $datazak = $itog["datazak"];
                    $pokuptov = $itog["pokup_tov"];
                    $kol = $itog["kol"];
                    $cena = $itog["cena"];
                    $sposobdostav  = $itog["sposobdostav"];
                    $adrdost = $itog["adrdost"];
                    $oplata  = $itog["oplata"];
                    echo '<td>' . $nn . '</td><td>' . $fio . '</td><td>' . $tel . '</td><td>' . $email . '</td><td>' . $adrdost . '</td><td>' . $datazak . '</td><td>' . $pokuptov . '</td><td>' . $kol . '</td><td>' . $cena . '</td><td>' . $sposobdostav . '</td><td>' . $nomerzak . '</td><td>' . $oplata . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                mysqli_free_result($result);
                mysqli_close($db);
            }
            ?>
        </div>
    </section>
    <footer>
        <img src="./assets/images/up.svg" alt="up" class="pageup" title="Рageup">
        <div class="container">
            <ul class="footer-ul">
                <li><a class="footer-link" href="#">
                        © Интернет магазин «Sport Ground»
                    </a></li>
                <li><a class="footer-link" href="#">
                        <img src="./assets/images/map-pointer-icon.svg" alt="">
                        Контакты:<br>
                        +375 (29) 341-65-29<br>
                        sport.ground@bk.ru
                    </a></li>
            </ul>
        </div>
    </footer>
    <script defer type="module" src="./js/scrviv.js"></script>
    <script defer src="./js/script.js"></script>
</body>

</html>