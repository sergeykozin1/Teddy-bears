<?php
$imail="mishek-mnogo@ya.ru"; //Email (можно через запятую - email1, email2, email3)
$tiny_text="спасибо за вашу заявку, мы свяжемся с вами в ближайшее время."; //Благодарность
$ntimer=""; //Таймер возврата на главную, в секундах - после успешного заказа, по истичению заданного времени заказчика перекинет на главную страницу
$kod_kod=""; //Скрипты
?>
<!DOCTYPE HTML>
<html style="height: 100%; font-family: 'Lato', Calibri, Arial, sans-serif;">
<head>
  <meta http-equiv="content-type" content="text/html" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://use.fontawesome.com/7894f79ab5.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700,900" rel="stylesheet"> 
  <meta name="author" content="smok003" />
  <title> СПАСИБО </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=false"/>
  <?=$ntimer > ' ' ? '<meta http-equiv="refresh" content="' . $ntimer . '; url=/">' : ''?>

<?php
if (isset($_POST['email']) || isset($_POST['tel'])){
  $message = '';
  $client = '';

  $post = array(
    'имя'     => 'Имя: ',           'name'   => 'Имя: ',
    'tel'     => 'Телефон: ',       'phone'  => 'Телефон: ',       'contact'    => 'Контакты: ',
    'mail'    => 'Email: ',         'email'  => 'Email: ',
    /* стандартные доп поля */
    'notes'   => 'Комментарий: ',   'note'   => 'Комментарий: ',   'comment'    => 'Комментарий: ',
    'adres'   => 'Адрес: ',         'adress' => 'Адрес: ',         'address'    => 'Адрес: ',         'addr'  => 'Адрес: ',
    'add'     => 'Дополнительно: ', 'dop'    => 'Дополнительно: ', 'additional' => 'Дополнительно: ',
    'cena'    => 'Цена: ',          'cost'   => 'Цена: ',          'price'      => 'Стоимость: ',
    /* свойства обьектов */
    'size'      => 'Размер: ',      'width'   => 'Ширина: ',     'height'     => 'Высота: ',      'length'  => 'Длинна: ',
    'color'     => 'Цвет: ',    'format'  => 'Формат: ',
    'view'      => 'Вид: ',     'kind'    => 'Вид: ',      
    'weight'    => 'Вес: ',       'veight'  => 'Вес: ',      'wt'     => 'Вес: ',
    'figure'    => 'Фигура: ',    'shape'   => 'Фигура: ',
    'structure' => 'Структура: ',   'pattern' => 'Структура: ',    'texture'  => 'Структура: ',
    'design'    => 'Дизайн: ',    'styling' => 'Дизайн: ',
    'type'      => 'Тип: ',
    'forma'     => 'Форма: ',
    'count'     => 'Количество: '
  );

  foreach ($_POST as $key => $value) {
    $message .= ( $post[$key] ? $post[$key] : ($key . ': ') ) . $value . PHP_EOL;
  }

  $header = 'Content-type: text/plain; charset=UTF-8' . PHP_EOL . 
            'From: ' . $imail . PHP_EOL . 
            'MIME-Version: 1.0'. PHP_EOL;

  $title = 'Заказ с сайта ' . $_SERVER['HTTP_HOST'];


  $sendfile = false;
  if ($_POST['type'] == 'present'){

    $header1 = 'Content-type: text/plain; charset=UTF-8' . PHP_EOL . 
              'From: ' . 'mnogo-mishek.com' . PHP_EOL . 
              'MIME-Version: 1.0'. PHP_EOL;

    $title1 = 'Ваш список ТОП-10 подарков для любимой';
    $message1 ='Здравствуйте!<br/> <br/> Список подарков Вы найдете в прикрепленном PDF файле. <br><br> С Уважением mnogo-mishek.com';
    $sendfile = true;
    $filepath = '10podarkov.pdf';

  }


  if ($sendfile) {
    sendFile($title1, $message1, $_POST['email'], $filepath);
  }

  if (!$imail) { ?>

      <title>Ошибка отправки</title>
    </head>
    <body>
      <div style="width:980px;max-width:100%;margin:0 auto;text-align:center;">
        <h3>
          Ошибка отправки:<br/>Email не задан, некуда отправить заявку
        </h3> 
        вверху файла <strong>spasibo.php</strong> найдите строку <strong>$imail=""</strong> и впишите ваш email в кавычках<br/> пример: <strong>$imail="<b>email@mail.ru</b>"</strong><br/> <br/>
        <strong>Содержимое заявки:</strong><br/> <?=(preg_replace("/\n/i", "<br>", $message))?>
      </div>
      <style>
        html{background-color: #EAC5C5;} b{color:#f00;}
      </style>
    </body>
    </html>

  <?php die; }

  if (mail($imail, $title, $message, $header) == 1) {
//Успешная заявка 
  ?> 

    <section id="s01">
      <nav id="nav" class="pc_nav">
      <div class="wrap">
        <div class="block logo">
          <p>Много Мишек</p>
        </div>
        <div class="block pc7">
          <p>
            <i class="fa fa-map-marker"></i>
            г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
          </p>
        </div>
        <div class="block time">
          <p>   
            <i class="fa fa-clock-o"></i>
            Пн-Вс 9.00-21.00
          </p>
        </div>
        <div class="block tel pc5">
          <a href="tel:89281317304">8 928 131-73-04</a>
        </div>
        <div class="block">
          <a href="#x" class="btn" onclick="popup(2)">заказать звонок</a>
        </div>
      </div>
    </nav>
    <nav class="tablet_nav tablet">
      <div class="wrap">
        <div class="block">
          <p>
            <i class="fa fa-map-marker"></i>
            г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
          </p>
        </div>
        <div class="block time">
          <p>   
            <i class="fa fa-clock-o"></i>
            Пн-Вс 9.00-21.00
          </p>
        </div>
        <div class="block tel">
          <i class="fa fa-phone"></i>
          <a href="tel:89281317304">8 928 131-73-04</a>
        </div>
      </div>
    </nav>
    <div class="tablet pre_nav">
      <div class="wrap">
        <div class="block logo">
          <p>Много Мишек</p>
        </div>
        <div class="block knopka">
          <a href="#x" class="btn" onclick="popup(2)">заказать звонок</a>
        </div>
      </div>
    </div>
    <nav class="mob">
      <div class="wrap">
        <div class="block logo">
          <p>Много Мишек</p>
        </div>
        <div class="block geo">
          <p>
            <i class="fa fa-map-marker"></i>
            г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
          </p>
        </div>
        <div class="block tel">
          <i class="fa fa-phone"></i>
          <a href="tel:89281317304">8 928 131-73-04</a>
        </div>
        <div class="block time">
          <p>   
            <i class="fa fa-clock-o"></i>
            Пн-Вс 9.00-21.00
          </p>
        </div>
      </div>
    </nav>
    </section>
    <hr class="devider">


    <section id="thank_you">
      <div class="wrap">
        <div class="box">
          <h1><span>Спасибо!</span></h1>
          <p class="title slab_reg">Ваш заказ будет обработан в течении 2 минут</p>
          <p class="under">А пока мы упаковываем ваш подарок посмотрите видеоролик</p>
          <div class="video">
            <iframe id="ytplayer" width="560" height="315" src="https://www.youtube.com/embed/FSuN5ZWUzZU?rel=0&autoplay=1&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="fw mt4">
            <div class="cc50 tac">
              <img src="assets/img/roses.png" alt="">
            </div>
            <div class="cc50 mt2">
              <table>
                <tr>
                  <td>19 шт. - </td>
                  <td>2600 р.</td>
                  <td>1900 р.</td>
                </tr>
                <tr>
                  <td>25 шт. - </td>
                  <td>3700 р.</td>
                  <td>2500 р.</td>
                </tr>
                <tr>
                  <td>35 шт. - </td>
                  <td>4200 р.</td>
                  <td>3100 р.</td>
                </tr>
                <tr>
                  <td>51 шт. - </td>
                  <td>5000 р.</td>
                  <td>3700 р.</td>
                </tr>
                <tr>
                  <td>101 шт. - </td>
                  <td>10000 р.</td>
                  <td>6500 р.</td>
                </tr>
              </table>
              <form action="spasibo2.php" method="post">
                <div class="input-control">
                  <label for="select">Кол-во роз</label>
                  <select name="количество роз" id="select">
                    <option>101</option>
                    <option>51</option>
                    <option>35</option>
                    <option>25</option>
                    <option>19</option>
                  </select>
                </div>
                <div class="input-control">
                  <label for="tel">Ваш номер телефона</label>
                  <input type="tel" name="tel" placeholder="+7 (___) ___-__-__" id="tel">
                </div>
                <div class="input-control">
                  <input type="submit" value="заказать">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>








  <section id="s09">
    <div class="wrap">
      <div class="fw">
        <div class="cc33">
          <p class="logo">Много Мишек</p>
          <p>Большие плюшевые медведи <br> в г. Ростове-на-Дону</p>
        </div>
        <div class="cc33">
          <p class="title">О нас</p>
          <ul>
            <li>
              <i class="fa fa-caret-right"></i>
              <a href="#s02" class="scrollto">Преимущества</a>
            </li>
            <li>
              <i class="fa fa-caret-right"></i>
              <a href="#s03" class="scrollto">Каталог</a>
            </li>
            <li>
              <i class="fa fa-caret-right"></i>
              <a href="#s04" class="scrollto">Наш подход к качеству</a>
            </li>
            <li>
              <i class="fa fa-caret-right"></i>
              <a href="#s05" class="scrollto">Часто задаваемые вопросы</a>
            </li>
            <li>
              <i class="fa fa-caret-right"></i>
              <a href="#s07" class="scrollto">Отзывы о наших медведях</a>
            </li>
          </ul>
        </div>
        <div class="cc33">
          <p class="title">Контакты</p>
          <ul>
            <li>
              <i class="fa fa-map-marker"></i>
              г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
            </li>
            <li>
              <i class="fa fa-phone"></i>
              <a href="tel:89281317304">8 928 131-73-04</a>
            </li>
            <li>
              <i class="fa fa-facebook-official"></i>
              <a href="www.facebook.com/mnogomishek" target="_blank">www.facebook.com/mnogomishek</a>
            </li>
            <li>
              <i class="fa fa-odnoklassniki-square"></i>
              <a href="www.ok.ru/group/57809037754431" target="_blank">www.ok.ru/group/57809037754431</a>
            </li>
            <li>
              <i class="fa fa-instagram"></i>
              <a href="www.instagram.com/mnogo_mishek" target="_blank">www.instagram.com/mnogo_mishek</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mob">
        <p class="title">Контакты</p>
        <p class="geo">
          <i class="fa fa-map-marker"></i>
          г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
        </p>
        <p class="tel">
          <i class="fa fa-phone"></i>
          <a href="tel:89281317304">8 928 131-73-04</a>
        </p>
        <div class="socials tac">
          <a href="https://vk.com/mnogo_mishek161" target="_blank"><i class="fa fa-vk"></i></a>
          <a href="www.ok.ru/group/57809037754431" target="_blank"><i class="fa fa-odnoklassniki-square"></i></a>
          <a href="www.facebook.com/mnogomishek" target="_blank"><i class="fa fa-facebook-official"></i></a>
        </div>
      </div>
    </div>
  </section>
  <hr class="grey"></hr>

  <footer id="footer">
    <div class="wrap">
      <p>Все права защищены © 2017 Много мишек</p>
    </div>
  </footer>

  <div class="popup-bg" id="popup-bg">
     <div class="popup" id="popup2">
          <div class="head">
              <div class="close" onclick="popup(-1)"><i class="fa fa-times"></i></div>
              <span>Оставьте заявку и мы свяжемся с вами в ближайшее время</span>
          </div>
          <div class="content">
              <form action="spasiboAfterVideo.php" method="post">
                <input type="text" name="name"  placeholder="Ваше имя">
                  <input type="tel" name="tel" required="" placeholder="+7 (___) ___-__-__" required="">
                  <input type="hidden" name="comment" value="Обратный звонок">
                  <input type="submit" value="Отправить">
              </form>
          </div>    
      </div>
  </div>
  

    <style>
      #s01{
        padding-bottom: 0;
      }
      #info::first-letter{text-transform: uppercase;}
    </style> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='assets/js/mask.js'></script>
    <script src='assets/js/script.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
    <script>
      $(document).ready(function() {
           $('select').niceSelect();
      });
       var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('ytplayer', {
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

      function onPlayerReady() {
          player.playVideo();
          // Mute!
          player.mute();
      }
    </script>

  <?php } else {
// Ошибка отправки ф-цией mail() 
  ?>

    <title>Ошибка отправки!</title></head><body>
      <div class="outer-wrap">
        <div class="container">
          <p id="info">Ошибка отправки заказа!<br/><span>Если вы видите это сообщение при попытке оформить заказ - свяжитесь с нами, для уточнения статуса заказа.</span><br /><br /><a href=".">На главную</a></p>
        </div>
      </div>
    <style>
      html{background-image: linear-gradient(to top, #EAC5C5 0%, #FFF 50%, #EAC5C5 100%); background-color: #EAC5C5;}
    </style>

  <?php }

} else {
// Не указан обязательный парамерт отправки (напр. телефон) 
?>

  <title>Ошибка оформления заказа!</title></head><body>
    <div class="outer-wrap">
      <div class="container">
        <p id="info">Ошибка оформления заказа!<br/><span>Скорее всего, вы просто открыли эту страницу в браузере, вернитесь на главную и попробуйте сделать заказ.</span><br /><br /><a href=".">На главную</a></p>
      </div>
    </div>
  <style>
    html{background-image: linear-gradient(to top, #F0E7E7 0%, #FFF 50%, #F0E7E7 100%); background-color: #FFE4E4;}
  </style>
<?php } ?>
<!-- метрика, аналитика -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46596048 = new Ya.Metrika({
                    id:46596048,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46596048" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?=$kod_kod?>

<style>
  #info {font-size: 1em; vertical-align: middle;}
  #info span {color: gray; font-size:0.8em;}
  .container{width: 95%;}
  h1{
    font-weight: 700;
  }
  .slab_reg{
    font-family: 'Roboto Slab', serif; 
    font-weight: 400;
  }
  body{margin: 0;}
  .container{margin: 0px auto; text-align: center; display: block; bottom: 0%; left: 0%;}
  .outer-wrap{top: 40%; position: absolute; width:100%;}
  @media (min-width: 1920px){body{font-size:24px;}}
  @media (max-width: 1920px){body{font-size:22px;}}
  @media (max-width: 1366px){body{font-size:20px;}}
  @media (max-width: 1024px){body{font-size:18px;}}
</style>

</body>
</html>


<?php 
/**
* Функция отправки письма с вложением
*
**/
function sendFile($head, $message, $email, $filepath){

  $fp = fopen($filepath,"r"); 
  if (!$fp) {
    echo ("Не удается открыть файл"); 
    exit; 
  } 

  $filename = basename($filepath);

  $file = fread($fp, filesize($filepath)); 
  fclose($fp); 
  // чтение файла

  $boundary = "--".md5(uniqid(time())); // генерируем разделитель 
  $headers .= "MIME-Version: 1.0\n"; 
  $headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n"; 
  $multipart .= "--$boundary\n"; 
  $multipart .= "Content-Type: text/html; charset=utf-8\n"; 
  $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 
  $multipart .= "$message\n\n"; 
  $message_part = "--$boundary\n"; 
  $message_part .= "Content-Type: application/octet-stream\n"; 
  $message_part .= "Content-Transfer-Encoding: base64\n"; 
  $message_part .= "Content-Disposition: attachment; filename = \"".$filename."\"\n\n"; 
  $message_part .= chunk_split(base64_encode($file))."\n"; 
  $multipart .= $message_part."--$boundary--\n"; 

  mail($email, $head, $multipart, $headers);
}

 ?>