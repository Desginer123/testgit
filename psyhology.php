<?php
/*
Template Name: Психология
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
  <section class="psycology">
    <div class="container">
    <button class="bvi"><?php echo do_shortcode('[FTVI]');?></button>

      <div class="scroll-to-top"><a href="#header"><img src="<?php echo CHILD_IMG_ROOT;?>/arrow__to__top.png" class="scroll-to-top" alt="Кнопка "Вверх"""></a></div>
        <div class="promo__aside" id="scroll-aside">
   <aside>
     <nav class="promo__aside-nav" >
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
      <div class="documents__block">
        <div class="secirity-info blog__title">Нормативные документы </div>
        <div class="secirity-info blog__subtitle">Приказ о сопровождении замещающих семей</div>
          <div class="secirity-info blog__descr">Приказ Департамента образования и науки №6-а от 17 января 2011 года о психолого педагогическом и социальном сопровождении замещающих семей  <a download href="<?php echo CHILD_DOC_ROOT;?>/программа сопровождения.doc"
              class="security-info__link">скачать приказ.</a></div>
          <div class="blog__subtitle">Положение о службе</div>
          <div class="blog__descr">Положение о службе психолого-педагогического и социального сопровождения замещающих семей в государственном образовательном учреждении для детей срот и детей, оставшихся без попечения родителей <a download href="<?php echo CHILD_DOC_ROOT;?>/ПЛАН работы СЛУЖБЫ 2019.docx" class="security-info__link">скачать положение.</a></div>
            <div class="blog__subtitle">Порядок подготовки лиц</div>
          <div class="blog__descr">Порядок подготовки лиц, желающих принять в свою семью ребёнка, оставшегося без попечения родителей <a download href="<?php echo CHILD_DOC_ROOT;?>/совмествый план работы по профилактике безнадзорности.doc" class="security-info__link">скачать документ.</a></div>
          <div class="security-info__item">
            <div class="secirity-info blog__title">Информация о службе</div>
            <div class="secirity-info blog__subtitle">Служба психолого-педагогического и социального сопровождения замещающих семей</div>
            <p class="paragraph">Служба психолого-педагогического и социального сопровождения замещающих семей Краевого государственного казенного учреждения Центр содействия семейному устройству детей – сирот и детей, оставшихся без попечения родителей г. Уссурийска» осуществляет свою деятельность согласно приказу департамента образования и науки Приморского края № 6-а от 17.01.2011 г. с 2011 года.</p>
              <p class="paragraph">В рамках службы сопровождения оказывается психологическая, логопедическая и социально-юридическая комплексная помощь воспитанникам, замещающим семьям, кровным семьям, чьи дети оказались по тем или иным причинам в Центре содействия.</p>
              <p class="paragraph">По направлениям территориальных управлений по опеке и попечительства Уссурийского городского округа, Михайловского района, Пограничного района, Октябрьского района, Черниговского района, Хорольского района, Ханкайского района, Хасанского района, Надеждинского района проводится подготовка лиц, желающих принять на воспитание в свою семью ребенка, оставшегося без попечения родителей.</p>
              <p class="paragraph">Учеба в Школе приемных родителей с 2012 года стала обязательным условием для принятия ребенка в семью. Во всех школах приемных родителей Приморского края обучение проходит по 42-часовой программе, в которую включены все самые важные и нужные темы для будущих кандидатов в опекуны или усыновители.</p>
              <p class="paragraph">Учебная программа Школы в первую очередь направлена на профилактику возврата детей из замещающих семей. Когда человек принимает такое судьбоносное решение, как принятие ребенка в семью, он, конечно, предполагает, что его жизнь изменится, но понятия не имеет, насколько масштабными эти изменения могут оказаться</p>
              <p class="paragraph"> Как правило, занятия длятся около двух месяцев и проходят в группах. Мы не начитываем нашим слушателям скучные лекции. Информация подается максимально интерактивно в форме семинаров и тренингов. Программа поделена на несколько блоков, в которых есть как информативная, так и интерактивная часть, с обсуждениями, упражнениями и ролевыми проигрыванием часто встречающихся ситуаций и так далее. Ведь задача психологов и педагогов Школы заключается не только в информировании, в первую очередь мы должны сделать так, чтобы в процессе прохождения семинаров у слушателей сформировалось четкое осознание того, действительно ли они готовы взять на себя такую колоссальную ответственность.</p>
              <p class="paragraph">Ежегодно в нашей школе проходит обучение от 80 до 130 человек.</p>
              <div class="secirity-info blog__subtitle">Семейное устройство воспитанников центра</div>
            <img src="<?php echo CHILD_IMG_ROOT;?>/psy_image1.jpg" alt="Картинка 1" class="psyhology_image">
            <p class="paragraph">Одной из основных задач работы всех сотрудников центра является защита прав и законных интересов воспитанников, первоочередного права - жить и воспитываться в семье.</p>
            <p class="paragraph">Из 148 воспитанников в 2015 году - 22 ребенка переданы на воспитание в семьи, что составляет 14,8%: <br> усыновлены-1; <br> устроены под опеку-16; <br> переданы родителям-5</p>
            <p class="paragraph">Из 134 воспитанников в 2016 году 32 ребенка переданы на воспитание в семьи, что составляет 23,8%: <br> усыновлены-3; <br> устроены под опеку-21; <br> переданы родителям-8.</p>
            <p class="paragraph">Из 118 воспитанников в 2017 году -26 детей переданы на воспитание в семьи, что составляет 22,0%: <br> усыновлены-2; <br> устроены под опеку-21; <br> переданы родителям-3.</p>
            <p class="paragraph">Из 120 воспитанников в 2018 году -32 ребенка переданы на воспитание в семьи, что составляет 26,6%: <br> усыновлены- 2; <br> устроены под опеку- 8 (3 в родственные семьи); <br> переданы родителям- 22 (в отношении 6 детей – восстановлены в родительских правах).</p>
            <p class="paragraph">Из 104 воспитанников в 2019 году - 27 детей переданы на воспитание в семьи, что составляет 25,9%: <br> усыновлены- 1; <br> устроены под опеку- 16 (6 в родственные семьи); <br> переданы кровным родителям- 10.</p>
            <?php foreach (getPsy() as $psys): ?>
            <p class="paragraph"><?php echo $psys['количество']?></p>
            <?php endforeach; ?>
        </div>
        <div class="security-info__item">
            <div class="secirity-info blog__title">Школа приёмных родителей</div>
            <div class="secirity-info blog__subtitle">Информация</div>
            <img src="<?php echo CHILD_IMG_ROOT;?>/psy_image2.png" alt="Картинка 2" class="psyhology_image">
            <div class="secirity-info blog__descr">Многие семьи принимают решение взять под опеку или усыновить ребёнка и стать ему родными. Важно знать, что перед таким серьезным шагом необходима специальная подготовка. Обучение в ШПР обязательно для всех желающих стать приёмными родителями. Занятия ведут: психолог, социальный педагог, логопед, психиатр. Занятия для кандидатов проводятся по субботам в очной форме.</div>
            <div class="secirity-info blog__subtitle">Подготовка кровных родственников может проходить индивидуально или в группе в рабочие и в выходные дни.</div>
        </div>
        <div class="security-info__item">
            <div class="secirity-info blog__title">Расписание занятий школы приёмных родителей</div>
            <img src="<?php echo CHILD_IMG_ROOT;?>/psy_image3.png" alt="Картинка 3" class="psyhology_image">
           
            <div class="secirity-info blog__subtitle">Занятия проходят с 10:00 до 15:00</div>
            <ul class="psyhology__time">
            <?php foreach (getPsy() as $psys): ?>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_1']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_2']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_3']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_4']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_5']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_6']?></li>
                <li class="time"><?php echo $psys['расписание_занятий_школы_приёмных_родителей_7']?></li>
            <?php endforeach; ?>
            </ul>
            <div class="security__footer">
                КГКУ "Центр содействия семейному устройству детей-сирот и детей, оставшихся без попечения родителей,
                г.Уссурийска", 2020 г.
              </div>
        </div>
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