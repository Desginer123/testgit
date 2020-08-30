<?php
/*
Template Name: Контакты
*/
?>




<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1024">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Мы создаём условия, способствующие развитию потенциальных возможностей каждого ребенка. Поможем детям вместе!">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
  <title>Центр содействия семейному устройству г.Уссурийска</title>
  <link rel="shortcut icon" href="<?php echo CHILD_IMG_ROOT;?>/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/magnific.css">
  <?php
    wp_head();
    ?>
</head>

<body class="bg">
  <header class="header flex" id="header">

   <a href="/index.html" class="header__link">

      <div class="container">
         <p class="header__descr">
            Краевое государственное казёное учреждение “центр содействия семейному устройству детей-сирот и детей,
            оставшихся без попечения родителей, г. Уссурийска “
         </p>
         <img src="<?php echo CHILD_IMG_ROOT;?>/header__logo.png" alt="Шапка сайта" class="header__logo">
      </div>
   </a>
</header>
  <!-- WRITE CODE HERE -->
  <section class="contacts">
    <div class="container">
    <button class="bvi"><?php echo do_shortcode('[FTVI]');?></button>

      <div class="scroll-to-top"><a href="#header"><img src="<?php echo CHILD_IMG_ROOT;?>/arrow__to__top.png" class="scroll-to-top" alt="Кнопка "Вверх"""></a></div>
      <div class="promo__aside" id="scroll-aside">
   <aside>
     <nav class="promo__aside-nav">
       <p class="menu__title">
         Меню
       </p>
       <ul class="menu">
         <li class="menu__item"><a href="<?php echo get_page_link( 2 ); ?>" class="menu__link">Главная</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 9 ); ?>" class="menu__link">Новости</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 3 ); ?>" class="menu__link">Мероприятия</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 20 ); ?>" class="menu__link">Документы</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 23 ); ?>" class="menu__link">Безопасность</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 26 ); ?>" class="menu__link">О нас</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 28 ); ?>" class="menu__link">Контакты</a></li>
         <li class="menu__item"><a href="<?php echo get_page_link( 30 ); ?>" class="menu__link">Служба психолого-педагогического и
             социального сопровождения замещающих семей</a></li>
       </ul>
       <div class="aside__footer">
         КГКУ "Центр содействия семейному устройству детей-сирот и детей, оставшихся без попечения родителей,
         г.Уссурийска", 2020 г.
       </div>
     </nav>
   </aside>
 </div>
 <?php foreach (getContacts() as $contacts):?>
      <div class="contacts__block">
        <div class="contacts__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1761.4056141226163!2d131.94015257818944!3d43.835350645581535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddcccadf41694afd!2z0JTQtdGC0YHQutC40Lkg0LTQvtC8INCzLiDQo9GB0YHRg9GA0LjQudGB0LrQsA!5e0!3m2!1sru!2sru!4v1596399642607!5m2!1sru!2sru" class="contacts__map"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="security-info__item">
          <div class="news-blog__info">
            <div class="contact__info-left">
              <div class="contact-info">
                <div class="contact-info__title">Юридическая информация</div>
                <div class="contact-info__adress">
                  692524, Приморский край, г. Уссурийск, ул. Фадеева, 20.
                </div>
                <div class="contact-info__tel">
                  Tel: <a href="tel:+<?php echo $contacts['телефон']?>"><?php echo $contacts['телефон']?></a> <br>
                  Fax: <?php echo $contacts['факс']?>
                </div>
                <div class="contact-info__mail">
                 <a href="mailto: <?php echo $contacts['e-mail']?>"><?php echo $contacts['e-mail']?></a>
                </div>
                <div class="contact-info__work-time">
                  <div class="contact-info__work-time-title">График работы:</div>
                  с 9-00 до 18-00 выходной воскресенье
                </div>
              </div>
            </div>
            <div class="contact__info-right">
              <div class="blog-info-left-title">Директор</div>
              <div class="blog-info-left-descr">
                <div class="contact-info__director">
                  <img src="<?php echo $contacts['фото_директора']?>" alt="Фото Директора" class="contact-info__headteacher">
                  <div class="contact-info__director-info">
                  <?php echo $contacts['имя_директора']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="security-info__item">
          <div class="secirity-info blog__title">Сведения об учредителе</div>
          <div class="contacts__info">
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Полное наименование
              </div>
              <div class="contacts-info__descr">
                Департамент образования и науки Приморского края
              </div>
            </div>
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Почтовый адрес
              </div>
              <div class="contacts-info__descr">
                690110, г.Владивосток, ул.Светланская, д.22
              </div>
            </div>
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Фактический адрес </div>
              <div class="contacts-info__descr">
                690110, г.Владивосток, ул.Алеутская, д.45-б </div>
            </div>
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Телефон, факс, e-mail
              </div>
              <div class="contacts-info__descr">
                <a href="tel:<?php echo $contacts['телефон']?>"><?php echo $contacts['телефон']?></a>, <a href="tel:<?php echo $contacts['факс']?>"><?php echo $contacts['факс']?></a>, <a href="mailto:<?php echo $contacts['e-mail']?>"><?php echo $contacts['e-mail']?></a>
              </div>
            </div>
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Ио директора департамента
              </div>
              <div class="contacts-info__descr">
              <?php echo $contacts['ио_директора_департамента']?>
              </div>
            </div>
            <div class="contacts-info__line">
              <div class="contacts-info__header">
                Заместители директора
              </div>
              <div class="contacts-info__descr">
              <?php echo $contacts['заместители_директора_1']?> <br>
              <?php echo $contacts['заместители_директора_2']?> <br>
              <?php echo $contacts['заместители_директора_3']?> <br>
              <?php echo $contacts['заместители_директора_4']?> <br>
              </div>
            </div>
            <div class="security-info__item">
              <div class="secirity-info blog__title">Отдел охраны прав детей и специального образования</div>
              <div class="contacts__info">
                <div class="contacts-info__line">
                  <div class="contacts-info__header">
                    Начальник отдела
                  </div>
                  <div class="contacts-info__descr">
                  <?php echo $contacts['начальник_отдела_охраны_прав_детей_и_специального_образования']?>
                  </div>
                </div>
              </div>
            </div>
            <div class="security-info__item">
              <div class="secirity-info blog__title">Территориальный отдел опеки и попечительства Уссурийского
                городского округа</div>
              <div class="contacts__info">
                <div class="contacts-info__line">
                  <div class="contacts-info__header">
                    Начальник отдела
                  </div>
                  <div class="contacts-info__descr">
                  <?php echo $contacts['территориальный_отдел_опеки_и_попечительсва_уссурийского_городского_округа']?>
                  </div>
                </div>
              </div>
              <div class="security-info__item">
                <div class="secirity-info blog__title">Форма обратной связи</div>
                
              </div>
              <?php echo do_shortcode('[contact-form-7 id="37" title="Форма обратной связи"]');?>
            </div>
            <div class="security__footer">
              КГКУ "Центр содействия семейному устройству детей-сирот и детей, оставшихся без попечения родителей,
              г.Уссурийска", 2020 г.
            </div>
  </section>
          <?php endforeach;?>
  <!-- STOP WRITE CODE -->
  <footer>
  
</footer>
  <script src="js/libs.min.js"></script>
<script src="js/main.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/maginific.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?php
    wp_footer();
  ?>
</body>

</html>