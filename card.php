<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Магазин</title>
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
                    <a href="https://msngr.link/tg/@vas_fam" class="tg">
                        <img src="./assets/images/tg.svg" title="Написать в телеграмм" alt="Написать в телеграмм">
                    </a>
                </div>
                <div class="cart-super-Btn">
                    <p class="cartbtn">0</p>
                    <img class="cart" src="./assets/images/cart.svg" alt="Cart">
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="row">
                <div>
                    <h1 class='main-title'>Корзина</h1>
                    <table class="table" id="table2">
                        <thead>
                            <tr class="">
                                <th data-type="number">№</th>
                                <th data-type="string">Название</th>
                                <th data-type="number">Цена/ш, бел.руб.</th>
                                <th data-type="number">Количество</th>
                                <th data-type="number">Цена, бел.руб.</th>
                                <th data-type="number"></th>
                            </tr>
                        </thead>
                        <tbody class="cartt">
                            <!-- Строки с товарами в корзине -->
                        </tbody>
                    </table>
                    <div id="tovar_kuplen">
                    </div>
                    <div class="price_result">
                    </div>

                </div>
            </div>
        </div>
        <!-- Модальный -->
        <div id="myModal" class="modal">
            <!-- Модальное содержание -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Заполните форму заявки</h2>
                <h3>мы перезвоним вам</h3>
                <!-- <h3 id="modalzag" name="modalzag"></h3> -->
                <form class="feed-form" action="card.php" method="post">
                    <label for="modalzag">Заказ товара:</label>
                    <input name="modalzag" id="modalzag" type="text" readonly />
                    <label for="kol">Количество товара:</label>
                    <input name="kol" id="kol" type="text" readonly />
                    <label for="cena">Цена товара бел. руб.:</label>
                    <input name="cena" id="cena" type="text" readonly />
                    <input name="name" required="required" placeholder="Ваше ФИО" type="text" />
                    <input name="phone" required="required" placeholder="Ваш телефон" />
                    <input name="email" required="required" placeholder="Ваш E-mail" type="email" />
                    <textarea name="adres" id="adres" required="required" placeholder="Введите адрес доставки товара" rows="3" cols="43" name="text"></textarea>
                    <select id="mod_dost" name="modal_dost" required="required">
                        <option selected value="">Выберите способ доставки</option>
                        <option value="Почта">Почта</option>
                        <option value="Европочта">Европочта</option>
                        <option value="Курьерская служба">Курьерская служба</option>
                        <option value="Срочная курьерская служба">Срочная курьерская служба</option>
                        <option value="Транспортная компания">Транспортная компания</option>
                        <option value="Самовывоз">Самовывоз</option>
                    </select>
                    <h3 id="modal_dos"></h3>
                    <button class="button_modal_cart">Купить</button>
                </form>
                <?php
                $fio = $_POST['name'];
                $tel = $_POST['phone'];
                $email = $_POST['email'];
                $modal_dost = $_POST['modal_dost'];
                $adres = $_POST['adres'];
                $pokuptov = $_POST['modalzag'];
                $kol = $_POST['kol'];
                $cena = $_POST['cena'];
                $sposobdostav = $_POST['modal_dost'];
                $fio = htmlspecialchars($fio);
                $email = htmlspecialchars($email);
                $tel = htmlspecialchars($tel);
                $modal_dost = htmlspecialchars($modal_dost);
                $adres = htmlspecialchars($adres);
                $pokuptov = htmlspecialchars($pokuptov);
                $kol = htmlspecialchars($kol);
                $cena = htmlspecialchars($cena);
                $sposobdostav = htmlspecialchars($sposobdostav);
                $fio = urldecode($fio);
                $email = urldecode($email);
                $tel = urldecode($tel);
                $modal_dost = urldecode($modal_dost);
                $adres = urldecode($adres);
                $pokuptov = urldecode($pokuptov);
                $kol = urldecode($kol);
                $cena = urldecode($cena);
                $sposobdostav = urldecode($sposobdostav);
                $to = 'kaleev.fam@mail.ru'; // адрес получателя
                $subject = 'Куплен товар на сайте sportground '; // тема письма
                // текст письма
                $message = "ФИО: " . $fio . "<br/>";
                $message .= "E-mail пользователя: " . $email . ' номер телефона ' . $tel . "<br/>";
                $message = "Наименование товара: " . $pokuptov . "<br/>";
                $message = "Количество товара: " . $kol . "<br/>";
                $message = "Цена товара: " . $cena . "<br/>";
                $message .= "Адрес покупателя: " . $adres;
                $message .= "Способ доставки: " . $sposobdostav;
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
                $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
                if (isset($_POST['name']) and isset($_POST['email'])) {
                    mail($to, $subject, $message, $headers);
                    //Запись сообщения в таблицу otzk БД
                    include('configinc.php');
                    $datazak = date("Y-m-d H:i:s");
                    if (isset($_POST["name"])) {
                        //вставляем данные, подставляя их в запрос
                        $sql = mysqli_query($db, "INSERT INTO `pokup` (`fio`, `email`, `tel`, `pokup_tov`, `kol`, `cena`,`adrdost`, `datazak`, `sposobdostav`) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['modalzag']}', '{$_POST['kol']}','{$_POST['cena']}','{$_POST['adres']}', '{$datazak}', '{$sposobdostav}')");
                        echo "<script>
                    setTimeout(function(){
                        window.location.href = 'card.php';
                      }, 2000);   
                      document.getElementsByClassName('nazvCart')[0].innerHTML = 'Товар заказан!!!';
                      //alert('$pokuptov');
                      document.getElementById('tovar_kuplen').innerHTML = '$pokuptov ' +'в количестве ' +' $kol' + ' шт ' + 'на сумму' + ' $cena' + ' бел. руб.';
                     </script>";
                    }
                    //Если вставка прошла успешно
                    if ($sql) {
                        echo '<div>Данные добавлены в таблицу отзывов!</div>';
                    } else {
                        echo '<p>Произошла ошибка добавления данных в таблицу отзывов: </p>';
                    }
                    echo "<div>Сообщение успешно отправлено на email администратора сайта!</div>";
                    mysqli_free_result($result);
                    mysqli_close($db);
                } else {
                    echo "<div>При отправке сообщения на почту администратора возникли ошибки</div>";
                }
                ?>
            </div>
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
    <script defer src="./js/script1.js"></script>
</body>

</html>