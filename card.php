<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="style.css">
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
        </header>
        <main>

            <div class="catalog">
                <table class="cards_teble">
                    <?php
                        include "db_connect.php";

                        $query_id = "SELECT * FROM product";

                        $result_id = mysqli_query($link, $query_id);
                        while ($row_id = mysqli_fetch_assoc($result_id)) {
                            $id = $row_id['id'];
                            $name = $row_id['name'];
                            $price = $row_id['price'];
                            $smallc = $row_id['smallc'];

                            echo '<tr><td><div>
                            <h3>'. $name .'</h3>
                            <img src="img/p'.$id.'.jpg" width="350" height="250" >
                            <p>'.$smallc.'</p>
                            <p>Цена: '.$price.'</p>
                            <button type="submit" class="btn_buy" value="'.$id.'"><a href="page.php?id='.$id.'">Buy</a></button>
                            </div></td></tr>';
                
                        }  
                        
                       
                    ?>
                </table>
            </div>
            
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
