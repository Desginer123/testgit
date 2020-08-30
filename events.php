<?php
/*
Template Name: Меропрития
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
  <section class="ivent">
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
      <div class="event__block">
        <?php  foreach(getEvents() as $event): ?>
      <div class="event__guarden-of-memory margin-top">
          <div class="event__guarden-of-memory-title">
            <?php echo $event['заголовок_мероприятия']?>
          </div>
          <div class="event__guarden-of-memory-descr"><?php echo $event['описание_мероприятия']?>
          </div>
          <div class="event__guarden-of-memory-wrapper">
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom fancybox image" href="<?php echo $event['фотография_мероприятия_1']?>">
                <img src="<?php echo $event['фотография_мероприятия_1']?>" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo $event['фотография_мероприятия_2']?>">
                <img src="<?php echo $event['фотография_мероприятия_2']?>" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo $event['фотография_мероприятия_3']?>">
                <img src="<?php echo $event['фотография_мероприятия_3']?>" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo $event['фотография_мероприятия_4']?>">
                <img src="<?php echo $event['фотография_мероприятия_4']?>" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="event__title margin-top">
          Мероприятия к 75-летию Победы!
        </div>
        <div class="event__guarden-of-memory">
          <div class="event__guarden-of-memory-title">
            Акция Сад Памяти
          </div>
          <div class="event__guarden-of-memory-descr"> КГКУ «Центра содействия семейному устройству г. Уссурийска»
            присоединился к международной акции «Сад Памяти». На территории центра мы высадили плакучую иву в память о
            генерале армии, дважды Герое Советского союза Черняховском Иване Даниловиче. Иван Данилович - один из
            талантливейших молодых полководцев. В нашем городе есть п. Черняховский названный в его честь. Сотрудники
            «Уссурийского музея» на заседании клуба «Исток» в феврале 2020 года рассказывали нам о героическом пути
            этого человека. Мы уважаем
            и чтим память этого храброго, и умеющего только своим присутствием вселять в сердца воинов бодрость и веру в
            успех полководца. На официальном сайте «Сад Памяти» мы отметили свою точку и ждем сертификат об участии.
          </div>
          <div class="event__guarden-of-memory-wrapper">
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom fancybox image" href="<?php echo CHILD_IMG_ROOT;?>/garden_1.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/garden_1.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/garden_2.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/garden_2.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/garden_3.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/garden_3.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Сад памяти»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/garden_4.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/garden_4.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Сад памяти»" /></a>
            </div>
          </div>
        </div>
        <div class="event__guarden-of-memory">
          <div class="event__guarden-of-memory-title">
            Акция #окна_победы </div>
          <div class="event__guarden-of-memory-descr"> Ребята КГКУ «Центр содействия семейному устройству г. Уссурийска»
            присоединились к патриотической акции «ОКНА ПОБЕДЫ». Несколько дней в своих группах мальчишки и девчонки
            готовили украшения на окна в честь Дня Великой Победы. К украшению фасада добавили изготовленный печатным
            способом баннер и украшение на центральное окно. Посмотрите, как радостно мы встречаем наш священный
            праздник. Гордимся, помним, славим!</div>
          <div class="event__guarden-of-memory-wrapper">
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Окна победы»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/windows_1.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/windows_1.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Окна победы»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Окна победы»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/windows_2.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/windows_2.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Окна победы»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Окна победы»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/windows_3.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/windows_3.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Окна победы»" /></a>
            </div>
            <div class="event__guarden-of-memory-item">
              <a  title="Общегородская акция «Окна победы»" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/windows_4.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/windows_4.jpg" class="event__guarden-of-memory-item" alt="Общегородская акция «Окна победы»" /></a>
            </div>
          </div>
        </div>
        <div class="event__guarden-of-memory">
          <div class="event__guarden-of-memory-title">
            Достижения </div>
          <div class="subtitle">
            Достижения воспитанников за I полугодие 2020 года
          </div>
          <div class="event__guarden-of-memory-descr"> Достижения воспитанников КГКУ «Центр содействия семейному
            устройству г.Уссурийска» за I полугодие 2020 года <a href="<?php echo CHILD_DOC_ROOT;?>/Достижения.zip" download class="security-info__link">Скачать архив.</a>.</div>
        </div>
        <div class="event__guarden-of-memory">
          <div class="event__guarden-of-memory-title">
            Детальный план </div>
          <div class="subtitle">
            План работы летнего лагеря на июнь, июль, август 2020 г в КГКУ «Центр содействия семейному устройству детей
            – сирот и детей, оставшихся без попечения родителей г. Уссурийск»
          </div>
          <div class="event__guarden-of-memory-descr"> С 1 июня по 31 августа 2020 года <a download href="<?php echo CHILD_DOC_ROOT;?>/План работы летнего лагеря на июнь, июль, август 2020 г.docx"  class="security-info__link">Скачать.</a>
          </div>
        </div>
        
          <div class="events__date">
          <div class="events__date-title">
          <?php foreach (getYears() as $years):?>
            Расписание кружков и секций на <?php echo $years['начало_учебного_года']?>-<?php echo $years['окончание_учебного_года']?> учебный год
          <?php endforeach;?>
          </div>
          <table width="100%"  cellpadding="4" cellspacing="0" class="sections">
            <tr class="table__head">
              <th class="table__column_personal">Название кружка</th><th class="table__column_personal">Руководитель</th><th class="table__column_personal">Понедельник</th><th class="table__column_personal">Вторник</th><th class="table__column_personal">Среда</th><th class="table__column_personal">Четверг</th><th class="table__column_personal">Пятница</th><th class="table__column_personal">Суббота</th><th class="table__column_personal">Воскресенье</th>
             </tr>
             <?php foreach (getSections() as $sections): ?>
             <tr class="table__row">
              <th class="table__column_personal"><?php echo $sections['название_кружка']?></th><th class="table__column_personal"><?php echo $sections['руководитель']?></th><th class="table__column_personal"><?php echo $sections['понедельник']?></th><th class="table__column_personal"><?php echo $sections['вторник']?></th><th class="table__column_personal"><?php echo $sections['среда']?></th><th class="table__column_personal"><?php echo $sections['четверг']?></th><th class="table__column_personal"><?php echo $sections['пятница']?></th><th class="table__column_personal"><?php echo $sections['суббота']?></th><th class="table__column_personal"><?php echo $sections['воскресенье']?></th>
             </tr>
             <?php endforeach; ?>
           </table>
           <div class="security-info__item">
          <div class="events__date-title ">
          <?php foreach (getYears() as $years):?>
            Открытые мероприятия на <?php echo $years['начало_учебного_года']?>-<?php echo $years['окончание_учебного_года']?> учебный год
          <?php endforeach;?>
          </div>
          <table width="100%"  cellpadding="4" cellspacing="0">
            <tr class="table__head">
              <th class="table__column_personal">№ п/п</th><th class="table__column_personal">Мероприятие</th><th class="table__column_personal">Ответственный воспитатель	</th><th class="table__column_personal">Сроки проведения</th>
             </tr>
             <?php $events = array( 'posts_per_page' => 10 ); ?>
             <?php foreach (getOpenevent() as $events): ?>
            <tr class="table__row">
             <th class="table__column_personal"><?php echo $events['номер_мероприятия']?></th><th class="table__column_personal"><?php echo $events['Мероприятие']?></th><th class="table__column_personal"><?php echo $events['ответственный_воспитатель']?></th><th class="table__column_personal"><?php echo $events['сроки_проведения']?></th>
            </tr>
             <?php endforeach; ?>
            
           </table>
          </div>
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