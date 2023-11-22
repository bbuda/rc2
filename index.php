
<!DOCTYPE html>
<html long="ru">
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="inline"><a href="index.php" class="menu"><img src="img/logo_rc.jpg" class="logo"></a></div>
            <div class="inline"><a href="index.php" class="menu">Главная</a></div>
            <div class="inline"><a href="card.php" class="menu">Магазин</a></div>
            <div class="inline"><a href="enter.php" class="menu">Войти</a></div>
            <div class="inline"><a href="reg.php" class="menu">Регистрация</a></div>
            <div class="inline"><a href="exit.php" class="menu" id="exit">Выход</a></div>
            <div class="inline right name"><?= $_SESSION['user']['username'] ?></div>
        </header>
        <main>
            <section class="info">
                <table class="table_prev">
                    <tr>
                        <td>
                        <img src="img/logo_rc.jpg" width="450" height="350">
                        </td>
                        <td>
                        <h1>Добро пожаловать в "SportShop"!</h1>
                        <p>Мы предлагаем лучшие цены на спортивное питание и инвентарь. Нам более 5 лет, мы гарантируем качество и надежность. </p>
                        <p>Наш широкий ассортимент удовлетворит все ваши потребности, поддерживаемые опытными менеджерами. </p>
                        <p>В "SportShop" ваше удовлетворение - наш приоритет. Ваш успех - наша гордость!</p>
            
                        </td>
                    </tr>
                </table>
            </section>

            <section class="product_category">
                <div class="block_line">
                    <div class="card">
                        <h3>Инвентарь</h3>
                        <img src="img/inv.jpg">
                        <p>Value</p>
                        <button class="btn_buy"><a href="card.php">Buy</a></button>
                    </div>
                    <div class="card">
                        <h3>Спортивное питание</h3>
                        <img src="img/pit.jpg">
                        <p>Value</p>
                        <button class="btn_buy"><a href="card.php">Buy</a></button>
                    </div>
                </div>

            </section>

            <section class="about">
    <h2>Добро пожаловать в "SportShop" – ваш лучший выбор для приобретения спортивного питания и инвентаря!</h2>
    <p>Мы заботимся о вашем здоровье, вашей форме и вашем благосостоянии. В "SportShop" мы предлагаем широкий ассортимент продукции, которая поможет вам достичь ваших спортивных целей.</p>

    <p>Наши товары разделены на несколько категорий, чтобы удовлетворить все ваши потребности:</p>

    <section id="food">
        <h2>Питание (FOOD)</h2>
        <p>У нас вы найдете высококачественные продукты для спортивного питания, обеспечивающие вас необходимыми питательными веществами.</p>
    </section>

    <section id="plays">
        <h2>Снаряжение (PLAYS)</h2>
        <p>Наш ассортимент включает в себя разнообразные виды спортивного инвентаря, предназначенного для различных видов тренировок.</p>
    </section>

    <section id="clother">
        <h2>Одежда (CLOTHER)</h2>
        <p>Мы предлагаем стильную и удобную одежду для вашего активного образа жизни, обеспечивая комфорт и свободу движений.</p>
    </section>

    <p><strong>Наши преимущества:</strong></p>
    <ul>
        <li><strong>Широкий выбор продукции:</strong> Мы работаем только с проверенными производителями, предоставляя вам доступ к качественной продукции.</li>
        <li><strong>Выгодные условия:</strong> В "SportShop" мы предлагаем конкурентоспособные цены, акции и скидки, чтобы вы могли сэкономить при каждой покупке.</li>
        <li><strong>Профессиональные консультации:</strong> Наши опытные консультанты готовы помочь вам выбрать подходящие товары, предоставить информацию о спортивном питании и помочь с правильным уходом за инвентарем.</li>
        <li><strong>Удобные условия оплаты и доставки:</strong> Принимаем различные формы оплаты, регулярно проводим акции и гарантируем надежную доставку по Москве и Московской области.</li>
    </ul>

    <p>Сделайте свой выбор в пользу заботы о своем теле и здоровье – выберите "SportShop"!</p>
</section>

            


        </main>
        <footer>
            <span class="left">
                <span>Все права защищены &copy; by Vashkevich</span><br>

            </span> 
            <span class="right">
                <span>Tel.: +7(919)1737890</span><br>
                <span>Email: aleksvkv95@gmail.com</span><br>

                
            </span> 

        </footer>
    </div>
</body>
</html>