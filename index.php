<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sportground</title>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <header>
        <div class='container'>
            <div class='header-wrap'>
                <a href='index.php'><img class='logo-img' src='./assets/images/logo1.png' alt='Hello'></a>
                <div class='invk'>
                    <a target='_blank' href='https://www.instagram.com/sport.groundd/?igshid=zye5ih15nbx' class='in'>
                        <img src='./assets/images/in.svg' title='Интернет магазин Sport Ground в инстаграмм' alt='Интернет магазин Sport Ground в in' />
                    </a>
                    <a href='#' class='vk'>
                        <img src='./assets/images/vk.svg' title='Интернет магазин Sport Ground в вконтакте' alt='Интернет магазин Sport Ground в vk' />
                    </a>
                    <a href='https://msngr.link/tg/@vas_fam' class='tg'>
                        <img src='./assets/images/tg.svg' title='Написать в телеграмм' alt='Написать в телеграмм' />
                    </a>
                </div>
                <div class='cart-super-Btn'>
                    <p class='cartbtn'>0</p>
                    <img class='cart' src='./assets/images/cart.svg' alt='Cart'>
                    <button id='btn-zakaz'>Мои заказы</button>
                    <button id='super-Btn'>Личный кабинет</button>
                </div>
            </div>
        </div>
    </header>
    <section class='main'>
        <div class='container'>
            <h1 class='main-title'>Каталог одежды</h1>
            <!-- Tab links -->
            <div class='tab'>
                <a class='tab-link' href='#content-1'>Для мужчин</a>
                <a class='tab-link' href='#content-2'>Для женщин</a>
                <a class='tab-link' href='#content-3'>Для детей</a>
            </div>
            <!-- Tab content -->
            <div class='taball'>
                <div class='tab-content' id='content-1'>
                    <h3>Одежда для мужчин.</h3>
                    <div class='cards-wrapper'>
                        <div class='card'>
                            <div class='card1'>
                                <img class='img' src='./assets/imgmo/nike.jpg' alt='Atmos x Nike LeBron Basketball T-shirt' />
                                <div class='title'>Nike Nrg Swoosh Logo</div>
                                <div class='razm'>Размер: S, M</div>
                                <img class='img1' src='./assets/imgmo/nike1.jpg' alt='Atmos1' />
                                <img class='img2' src='./assets/imgmo/nike2.jpg' alt='Atmos1' />
                                <img class='img3' src='./assets/imgmo/nike3.jpg' alt='Atmos2' />
                                <button class='btn1' type='submit'>ПОДРОБНЕЕ</button>
                                <hr>
                                <div class='catalog-item__footer'>
                                    <div class='catalog-item__prices'>
                                        <div class='cenaold'>85 руб.</div>
                                        <div class='cena'>80 руб.</div>
                                    </div>
                                    <button class='button_mini'>В корзину</button>
                                </div>
                                <p class='aler'></p>
                            </div>
                            <div class='card2'>
                                <p class='catalog-item__list'>Легкая футболка с культовыми тремя полосками.
                                    Тонкий трикотаж: 100% хлопок. Цвет модели: Black / White.
                                </p>
                                <button class='btn2' type='submit'>назад</button>
                            </div>
                        </div>
                        <!-- ***************************************************************** -->
                    </div>
                </div>
                <div class='tab-content' id='content-2'>
                    <h3>Одежда для женщин.</h3>
                    <div class='cards-wrapperg'>
                        <div class='cardg'>
                            <div class='card1g'>
                                <img class='img' src='./assets/imggo/cropped1.jpg' alt='ADIDAS ORIGINALS CROPPED' />
                                <div class='title'>ADIDAS ORIGINALS CROPPED</div>
                                <div class='razm'>Размеры: xs, s, m</div>
                                <img class='img1' src='./assets/imggo/cropped1.jpg' alt='cropped1' />
                                <img class='img2' src='./assets/imggo/cropped2.jpg' alt='cropped2' />
                                <img class='img3' src='./assets/imggo/cropped4.jpg' alt='cropped3' />
                                <button class='btn1' type='submit'>ПОДРОБНЕЕ</button>
                                <hr>
                                <div class='catalog-item__footer'>
                                    <div class='catalog-item__prices'>
                                        <div class='cenaold'>85 руб.</div>
                                        <div class='cena'>80 руб.</div>
                                    </div>
                                    <button class='button_mini'>В корзину</button>
                                </div>
                                <p class='aler'></p>
                            </div>
                            <div class='card2'>
                                <p class='catalog-item__list'>Adidas создает свои коллекции с применением неизменно передовых технологий и материалов.;
                                    adidas предлагает широкий выбор товаров, начиная от одежды и обуви для профессиональных спортсменов до вещей премиум-класса.;
                                    adidas уже на протяжении многих лет разрабатывает лучшие спортивные изделия с уникальными характеристиками;
                                    Цвет: белый, черный.
                                </p>
                                <button class='btn2' type='submit'>назад</button>
                            </div>
                        </div>
                        <!-- ***************************************************************** -->
                    </div>
                    <p></p>
                </div>
                <div class='tab-content' id='content-3'>
                    <h3>Одежда для детей.</h3>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <img src='./assets/images/up.svg' alt='up' class='pageup' title='Рageup'>
        <div class='container'>
            <ul class='footer-ul'>
                <li><a class='footer-link' href='#'>
                        © Интернет магазин «Sport Ground»
                    </a></li>
                <li><a class='footer-link' href='#'>
                        <img src='./assets/images/map-pointer-icon.svg' alt=''>
                        Контакты:<br>
                        +375 ( 29 ) 341-65-29<br>
                        sport.ground@bk.ru
                    </a></li>
            </ul>
        </div>
    </footer>
    <script defer type='module' src='./js/scrviv.js'></script>
    <script defer type='module' src='./js/scrvivg.js'></script>
    <script defer src='./js/script.js'></script>
</body>

</html>