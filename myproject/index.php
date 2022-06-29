<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Головна</title>
        <meta name="description" content="vr club, виар клуб, вр клаб, клуб виртуальной реальности, вр запорожье, игры запорожье, віар клуб, вр клаб, клуб віртуальної реальності, вр запоріжжя, ігри запорожіжжя">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/scroll.css" rel="stylesheet">
        <link rel="stylesheet" href="ism/css/my-slider.css"/>
    </head>
    <body>
    <style>
      .container {margin-top: 11.5rem; display: flex; align-items: center; justify-content: center; padding-top: 10px;}
      .container .ism-slider { margin-left: auto; margin-right: auto; }
    </style>
      <div class="header" tittle="хедер Бомбас" alt="хедер Бомбас">
        <p><?php 
            $file = file("count.txt");
            $count = implode("", $file);
            $count++;
            $myfile = fopen("count.txt","w");
            fputs($myfile,$count);
            fclose($myfile);
            echo "Лічильник відвідувачів: $count"
            ?>
        </p>
        <img src="https://i.postimg.cc/7PjcSNWk/2.png"><br>
        <a href="help.php" style="color:#ffffff; text-decoration: none;">Отримати консультацію</a>
      </div>
              <div class="container">
                <div class="ism-slider" data-transition_type="fade" data-play_type="loop" id="my-slider">
                  <ol>
                    <li onclick="href_1()">
                      <a href="https://drive.google.com/file/d/1vK37pEzeZXBKFtyDAuGrPW5Krf9TjB0-/view?usp=sharing"><img src="ism/image/slides/vr_1.jpg" id="slide_1" tittle="зображення 1 Бомбас" alt="зображення 1 Бомбас"></a>
                    </li>
                    <li onclick="href_2()">
                      <a href="https://drive.google.com/file/d/198Ieb8kibLmtj9ydM0qA8o5gXEWjhxyY/view?usp=sharing"><img src="ism/image/slides/vr_2.jpg" id="slide_2" tittle="зображення 2 Бомбас" alt="зображення 2 Бомбас"></a>
                    </li>
                    <li onclick="href_3()">
                      <a href="https://drive.google.com/file/d/1OYLOThin-Wt6iSKFWNc9rRECWlEaZ9Sf/view?usp=sharing"><img src="ism/image/slides/vr_3.jpg" id="slide_3" tittle="зображення 3 Бомбас" alt="зображення 3 Бомбас"></a>
                    </li>
                  </ol>
                </div>
              </div>
              <center>
                <div id="game" style="border-radius: 20px;  margin-bottom: 5rem;">
                  <img src="images/image.jpg" id="game_image" style="border-radius: 20px; margin-top: 1.5rem; width: 85%;" tittle="зображення 4 Бомбас" alt="зображення 4 Бомбас">
                  <p id="game_name">Назва: Бомбас 2014</p>
                  <p id="game_time">Час: 1 година</p>
                  <p id="game_time">Ціна: 200</p>
                  <a href="registration.php"><button id="game_button" style="margin: 0 0 1em 0; color: #004e4a;border: 3px #004e4a solid; border-radius: 10px;text-align: center; font-size: 115%; font-weight: 600;font-family: 'Inter', sans-serif; padding: .5em 2em .5em 2em; cursor: pointer;background-color: #004e4a79;">Замовити</button></a>
                </div>
              </center>
            <div class="footer">
            <a href="index.php"><img src="https://i.postimg.cc/k4BbRJ8r/2.png" class="bombas" alt="БОМБАС" tittle="зображення 3 Бомбас"></a>
              <a href="https://github.com/kochetkov-andrii" target="_blank">
                <img src="images/github.svg" class="socnet" id="githab" alt="GitHub" title="GitHub">
              </a>
              <a href="https://www.facebook.com/kochetkov.andrii/" target="_blank">
                <img src="images/facebook.svg" class="socnet" id="facebook" alt="Facebook" title="Facebook">
              </a>
              <a href="https://twitter.com/kochetkov_andri" target="_blank">
                <img src="images/twitter.svg" class="socnet" id="twitter" alt="Twitter" title="Twitter">
              </a>
              <a href="https://www.instagram.com/__nationalist__/" target="_blank">
                <img src="images/instagram.svg" class="socnet" id="instagram" alt="Instagram" title="Instagram">
              </a>
              <a href="tel:0971922877" target="_blank">
                <img src="images/phone.svg" class="socnet" id="phone" alt="Телефон" title="Телефон">
              </a>
              <p class="copyright">Copyright© 2022 "Бомбас"</p>
              <a class="email-text" href="mailto:igork8803@gmail.com">igork8803@gmail.com</a>
              <div class="footer-text">
                <a id="telephone" class="buttons" target="_blank" href="telephone.php">Замовити дзвінок</a>
                <a id="news" class="buttons" target="_blank" href="news.php">Підписатися на новини</a>
                <a id="response" class="buttons" target="_blank" href="responses.html">Відгуки</a>
              </div>
              <div id="clock"></div>
              <div class="mapouter">
                <div class="gmap_canvas">
                <iframe width="400" height="200" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=%D0%A1%D1%8B%D1%82%D0%BE%D0%B2%D0%B0%2017&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>
                    .mapouter {
                        position: fixed;
                        bottom: .5%;
                        right: .25%;
                        text-align: right;
                        height: 190px;
                        width: 350px;
                        z-index: 5;
                    }
                </style>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 10em;
                        width: 20em;
                        border-radius: 15px;
                    }
                </style>
            </div>
            </div>

              <div class='container'>
                

        <div id="toTop">Догори</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="javascript/scroll.js"></script>
        <script src="javascript/script.js"></script>
        <script src="ism/js/ism-2.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
        <script>
        VANTA.WAVES({
            el: "html",
            mouseControls: false,
            touchControls: false,
            gyroControls: false,
            minHeight: 750.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            shininess: 10.00,
            waveHeight: 9.00,
            waveSpeed: 0.70,
            zoom: 0.15,
            color: 0x9d9d,
        })
</script>
    </body>
</html>