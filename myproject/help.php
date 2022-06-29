<?
include('bd.php');

if(isset($_REQUEST['submit'])){
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(!$name || !$telephone || !$email || !$message){
        $error = "<script>alert('Ви не ввели потрібні дані')</script>";
    }
    else{
        $query = "INSERT INTO help (id, name, telephone, email, message) VALUES ('', '$name', '$telephone', '$email', '$message')";
        mysqli_query($link, $query);
        $new_url = 'http://myproject/index.php';
        header('Location: '.$new_url);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Отримати консультацію</title>
        <meta name="description" content="">
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
      <div class="header">
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
      </div>
      <center>
      <form class="order" id="form" method="POST">
        <input type="text" name="name" placeholder="ПІБ"/><br>
        <input type="tel" name="telephone" placeholder="+380 (xx) xxx-xx-xx" maxlength="9"/><br>
        <input type="text" name="email" placeholder="E-mail"/><br>
        <input type="text" name="message" placeholder="Повідомлення"/><br><br>
        <input type="submit" name="submit" id="submit" value="Отримати консультацію">
      </form>
      </center>
            <div class="footer">
            <a href="index.php"><img src="https://i.postimg.cc/k4BbRJ8r/2.png" class="bombas" alt="БОМБАС"></a>
              <a href="https://github.com/kochetkov-andrii" target="_blank">
                <img src="images/github.svg" class="socnet" id="githab" alt="GitHub">
              </a>
              <a href="https://www.facebook.com/kochetkov.andrii/" target="_blank">
                <img src="images/facebook.svg" class="socnet" id="facebook" alt="Facebook">
              </a>
              <a href="https://twitter.com/kochetkov_andri" target="_blank">
                <img src="images/twitter.svg" class="socnet" id="twitter" alt="Twitter">
              </a>
              <a href="https://www.instagram.com/__nationalist__/" target="_blank">
                <img src="images/instagram.svg" class="socnet" id="instagram" alt="Instagram">
              </a>
              <a href="tel:0971922877" target="_blank">
                <img src="images/phone.svg" class="socnet" id="phone" alt="Телефон">
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
            </div>

        <div id="toTop">Догори</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="javascript/scroll.js"></script>
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