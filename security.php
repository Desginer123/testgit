<?php
/*
Template Name: Безопасность
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

<body>
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
  <section class="security">
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
      
      </div>
      <div class="security-info">
        <div class="secirity-info blog__title">Всероссийский телефон доверия</div>
        <img src="<?php echo CHILD_IMG_ROOT;?>/Rectangle 12.png" alt="безопасность" class="security__image img_1 margin-top">
      <div class="security-info__item">
       
        
        <div class="secirity-info blog__title">Профилактика травматизма несовершеннолетних на объектах железной дороги</div>
        <img src="<?php echo CHILD_IMG_ROOT;?>/Rectangle 13.png" alt="безопасность" class="security__image">
        <img src="<?php echo CHILD_IMG_ROOT;?>/Rectangle 14.png" alt="безопасность" class="security__image">
        <img src="<?php echo CHILD_IMG_ROOT;?>/Rectangle 15.png" alt="безопасность" class="security__image">
        <img src="<?php echo CHILD_IMG_ROOT;?>/Rectangle 16.png" alt="безопасность" class="security__image">
      </div>
        <div class="security-info__item">
          <div class="secirity-info blog__title">Пропускной режим</div>
          <div class="secirity-info blog__subtitle">Инструкция о пропускном режиме.</div>
          <div class="secirity-info blog__descr">Пропускной режим в учреждении обеспечивается установлением запрета на
            посещение учреждения лицами не являющимися воспитанниками и работниками учреждения. <a download href="<?php echo CHILD_DOC_ROOT;?>/Инструкция о пропускном режиме.docx"
              class="security-info__link">Скачать инструкцию</a></div>
          <div class="blog__subtitle">Положение о пропускном режиме.</div>
          <div class="blog__descr">Настоящее положение разработано на основании постановления правительства РФ от
            24.05.2014 №481. <a download href="<?php echo CHILD_DOC_ROOT;?>/Положение о пропускном режиме.docx" class="security-info__link" title="Скачать документ">Скачать положение</a></div>
        </div>
        <div class="security-info__item">
          <div class="secirity-info blog__title">Планы и программы комплексной безопасности</div>
          <div class="secirity-info blog__subtitle">Положние о защите персональных данных..</div>
          <div class="secirity-info blog__descr">Положние о защите персональных данных работников. Приказ №146-од от
            30.12.2016 г. <a download href="<?php echo CHILD_DOC_ROOT;?>/Положение о защите персональных данных.pdf" class="security-info__link">Скачать.</a></div>
          <div class="blog__subtitle">План профилактических мероприятий по противодействию терроризму и экстремизму.
          </div>
          <div class="blog__descr">План мероприятий по профилактике терроризма и экстремизма на 2018-2019 учебный год.
           <a download href="<?php echo CHILD_DOC_ROOT;?>/План по терроризму.pdf" class="security-info__link">Скачать.</a></div>
          <div class=" blog__subtitle">План профилактической работы по предупреждению девиантного поведения
            воспитанников.</div>
          <div class=" blog__descr">План профилактической работы на 2018-2019 учебный год по предупреждению девиантного
            поведения воспитанников. <a download href="<?php echo CHILD_DOC_ROOT;?>/План девиантный.pdf" class="security-info__link">Скачать.</a></div>
          <div class=" blog__subtitle">План мероприятий по обеспечению комплексной безопасности.</div>
          <div class=" blog__descr">План мероприятий по обеспечению комплексной безопасности на 2017-2018 учебный год.
            <a download href="<?php echo CHILD_DOC_ROOT;?>/план мероприятий по обеспечению комплексной безопасности.pdf" class="security-info__link">Скачать.</a></div>
          <div class=" blog__subtitle">Программа комплексной безопасности.</div>
          <div class=" blog__descr">Программа комплексной безопасности Краевого государственного казенного учреждения
            "Центр содействия семейному устройству детей сирот и детей-оставшихся без попечения родителей г. Уссурийска
            " <a download href="<?php echo CHILD_DOC_ROOT;?>/Программа комплексной безопасности.pdf" class="security-info__link">Скачать.</a></div>
          <div class=" blog__subtitle">Положение о совете профилактики.</div>
          <div class=" blog__descr">Положение о совете профилактики КГКУ "Центр содействия семейному устройству
            детей-сирот и детей, оставшихся без попечения родителей, г.Уссурийска"<a download href="<?php echo CHILD_DOC_ROOT;?>/положение о совете профилактики.doc" class="security-info__link">Скачать.</a></div>
          <div class=" blog__subtitle">Положение о конфликтной комиссии.</div>
          <div class=" blog__descr">Положение о конфликтной комиссиии КГКУ "Центр содействия семейному устройству
            детей-сирот и детей, оставшихся без попечения родителей, г.Уссурийска" <a download href="<?php echo CHILD_DOC_ROOT;?>/положение о конфликтной комиссии.doc" class="security-info__link">Скачать.</a>.</div>
          <div class=" blog__subtitle">Положение о постановке воспитанников на внутридетдомовский учёт.</div>
          <div class=" blog__descr">Положение о постановке воспитанников на внутридетдомовский учёт<a download href="<?php echo CHILD_DOC_ROOT;?>/положение о постановке воспитанников на внутридетдомовский учёт.doc" class="security-info__link">Скачать.</a>
          </div>
          <div class=" blog__subtitle">Правила поведения несовершеннолетних.</div>
          <div class=" blog__descr">Правила поведения несовершеннолетних в общественных местах <a download href="<?php echo CHILD_DOC_ROOT;?>/правила поведения несовершеннолетних.doc" class="security-info__link">Скачать.</a></div>
        </div>
        <div class="security-info__item">
          <div class="secirity-info blog__title">Результаты работы по профилактике безнадзорности и правонарушений
            несовершеннолетних</div>
          <div class="secirity-info blog__subtitle">Справка ОМВД РФ по г. Уссурийску о правонарушениях по итогам 12
            месяцев 2018 года.</div>
          <div class="secirity-info blog__descr">По итогам 12 месяцев в целом по краю отмечается снижение подростковой
            преступности на 0,4% по сравнению с прошлым годом. <a download href="<?php echo CHILD_DOC_ROOT;?>/MVD_2018.pdf" class="security-info__link">Скачать</a></div>
          <div class="blog__subtitle">Сводка ОМВД РФ по г. Уссурийску о правонарушениях за ноябрь 2018 года и 11 месяцев
            2018 года в целом</div>
          <div class="blog__descr">По итогам 11 месяцев на территории УГО отмечается снижение подростковой преступности
            на 1,5% по сравнению с прошлым годом. <a download href="<?php echo CHILD_DOC_ROOT;?>/MVD_nov_2018.pdf" class="security-info__link">Скачать.</a></div>
          <div class="blog__subtitle">Сводка ОМВД РФ по г. Уссурийску о правонарушениях за январь и февраль 2018 года.
          </div>
          <div class="blog__descr">В целом по краю отмечается снижение подростковой преступности на 10,8%. <a download href="<?php echo CHILD_DOC_ROOT;?>/jan_feb.pdf"
              class="security-info__link">Скачать.</a></div>
          <div class="blog__subtitle">Комиссия по делам несовершеннолетних и защитке их прав.</div>
          <div class="blog__descr">В 3 квартале 2018 года поведение несовершеннолетних из числа воспитанников КГКУ
            «Центр содействия семейному устройству детей-сирот и детей, оставшихся без попечения родителей г.
            Уссурийска» на заседаниях комиссии по делам несовершеннолетних и защите их прав Уссурийского городского
            округа не рассматривалось.<a download href="<?php echo CHILD_DOC_ROOT;?>/3kv_doklad.pdf" class="security-info__link">Скачать.</a></div>
        </div>
        <div class="security__footer">
          КГКУ "Центр содействия семейному устройству детей-сирот и детей, оставшихся без попечения родителей,
          г.Уссурийска", 2020 г.
        </div>
      </div>
  </section>

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