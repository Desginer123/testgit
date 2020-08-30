
<?php
/*
Template Name: Новости
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
  <section class="news">
    <div class="container">
   
    <button class="bvi"><?php echo do_shortcode('[FTVI]');?></button>

    <div class="scroll-to-top"><a href="#header"><img src="<?php echo CHILD_IMG_ROOT;?>/arrow__to__top.png" class="scroll-to-top" alt="Кнопка "Вверх"""></a></div>
      <div class="promo__aside_nav" id="scroll-aside" >
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
      <div class="rewards__wrapper">
        <div class=" blog__subtitle " id="rewards__title">Достижения</div>
        <?php foreach(getRewards() as $reward): ?>
        <div class="rewards__item">
          <a class="fancybox" title="Грамота" href="<?php echo $reward['грамоты'] ?>">
            <img src="<?php echo $reward['грамоты'] ?>" class="about-license__img fancybox" alt="Грамота" /></a>
        </div>
        <?php endforeach; ?>
        
      </div>
      <div class="news__block">
        
        <img src="<?php echo CHILD_IMG_ROOT;?>/news__header.png" alt="Шапка сайта" class="news__header">
        <div class="security-info__item">
          <div class="news-blog__info">
            <div class="blog__info-left">
              <div class="blog-info-left-title">К нам могут обращаться:</div>
              <div class="blog-info-left-descr margin-bot">
                <ul>
                  <li class="blog-info-left-list">-родители (законные представители) детей от 0 до 18 лет;</li>
                  <li class="blog-info-left-list">-граждане, желающие принять на воспитание в свою семью детей,
                    оставшихся без попечения родителей.</li>
                </ul>
              </div>
              <div class="blog-info-left-title margin-top">Содержание консультативных услуг:</div>
              <div class="blog-info-left-descr margin-bot">
                <ul class="blog-info_ul">
                  <li class="blog-info-left-list">-проблемы развития ребенка;</li>
                  <li class="blog-info-left-list">-проблемы воспитания и содержания обучения ребенка;</li>
                  <li class="blog-info-left-list">-помощь в решении конфликтных ситуаций (школьных, среди сверстников,
                    внутрисемейных);</li>
                  <li class="blog-info-left-list">-помощь на этапах приёма ребёнка в семью;</li>
                  <li class="blog-info-left-list">-помощь в создание индивидуальной коррекционно-развивающей программы
                    для ребенка;</li>
                  <li class="blog-info-left-list">-помощь по составлению индивидуального домашнего расписания распорядка
                    жизнедеятельности, развивающих занятий в домашних условиях, щадящих или специальных условиях
                    познавательной деятельности, профилактики появления вторичных отклонений в домашних условиях,
                    тренировка адаптивных возможностей детей.</li>
                </ul>
              </div>
            </div>
            <div class="blog__info-right">
              <div class="blog-info-left-title"> Виды услуг:</div>
              <div class="blog-info-left-descr margin-bot">
                <ul>
                  <li class="blog-info-left-list">-очная консультация;</li>
                  <li class="blog-info-left-list">-выездная очная консультация;</li>
                  <li class="blog-info-left-list">-дистанционная консультация;</li>
                  <div class="blog-info-left-title"> ВСЕ УСЛУГИ БЕСПЛАТНЫЕ</div>
                </ul>
              </div>
              <div class="blog-info-left-title margin-top">В состав службы входят следующие специалисты:</div>
              <div class="blog-info-left-descr margin-bot">
                <ul>
                  <li class="blog-info-left-list">-социальный педагог; </li>
                  <li class="blog-info-left-list">-педагог психолог;</li>
                  <li class="blog-info-left-list">-учитель;</li>
                  <li class="blog-info-left-list">-логопед;</li>
                  <li class="blog-info-left-list">-учитель начальных классов;</li>
                  <li class="blog-info-left-list">-воспитатель дошкольных групп;</li>
                  <li class="blog-info-left-list ">-дефектолог;</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="security-info__item">
            <div class="news-blog__info">
              <div class="blog__info-left">
                <div class="blog-info-left-title  ">Наши контакты:</div>
                <div class="blog-info-left-descr margin-bot">
                  692500 г. Уссурийск, ул. Комсомольская, 53 <br> Электронный адрес: <a href="mailto:detskiydom2ussur@mail.ru">detskiydom2ussur@mail.ru</a><br> Сайт:
                  http://detskiydomuss.ru
                </div>
              </div>
              <div class="blog__info-right">
                <div class="blog-info-left-title ">Часы работы:</div>
                <div class="blog-info-left-descr margin-bot">
                  Понедельник –суббота с 9.00 – 20.00
                </div>
                <div class="blog-info-left-title phone_num ">Телефон:</div>
                <div class="blog-info-left-descr margin-bot ">
                  <a href="tel:8 (4234) 34-64-49;">8 (4234) 34-64-49;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="secirity-info news__title">Наше веселое лето в лагере #Лаборатория приключений «Кавардак»
          продолжается</div>
        <div class="news__teachers-block">
          
          <div class="our__teachers">
            <div class="our__teacher-title">Наши любимые воспитатели</div>
            <a  title="Наши любимые воспитатели" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/our__favorite_teacher.jpg">
              <img src="<?php echo CHILD_IMG_ROOT;?>/our__favorite_teacher.jpg" class="our__teacher-photos" alt="Наши любимые воспитатели" /></a>
          </div>
          <div class="our__teachers">
            <div class="our__teacher-title">Путешествие в прошлое</div>
            <a  title="Путешествие в прошлое" class="image-popup-zoom" href="<?php echo CHILD_IMG_ROOT;?>/travel_to_the_past.jpg">
              <img src="<?php echo CHILD_IMG_ROOT;?>/travel_to_the_past.jpg" class="our__teacher-photos" alt="Путешествие в прошлое" /></a>
          </div>
        </div>
        <div class="our__teacher-title">Наши игры и забавы</div>
        <div class="news__games-block">
          <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_1.jpg">
            <img src="<?php echo CHILD_IMG_ROOT;?>/game_1.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
            <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_2.jpg">
              <img src="<?php echo CHILD_IMG_ROOT;?>/game_2.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
              <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_3.jpg">
                <img src="<?php echo CHILD_IMG_ROOT;?>/game_3.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_4.jpg">
                  <img src="<?php echo CHILD_IMG_ROOT;?>/game_4.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                  <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_5.jpg">
                    <img src="<?php echo CHILD_IMG_ROOT;?>/game_5.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                    <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_6.jpg">
                      <img src="<?php echo CHILD_IMG_ROOT;?>/game_6.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                      <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_7.jpg">
                        <img src="<?php echo CHILD_IMG_ROOT;?>/game_7.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                        <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_8.jpg">
                          <img src="<?php echo CHILD_IMG_ROOT;?>/game_8.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                          <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_9.jpg">
                            <img src="<?php echo CHILD_IMG_ROOT;?>/game_9.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                            <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_10.jpg">
                              <img src="<?php echo CHILD_IMG_ROOT;?>/game_10.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                              <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_11.jpg">
                                <img src="<?php echo CHILD_IMG_ROOT;?>/game_11.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
                                <a  title="Наши игры и забавы" class="our__teacher-photo" href="<?php echo CHILD_IMG_ROOT;?>/game_12.jpg">
                                  <img src="<?php echo CHILD_IMG_ROOT;?>/game_12.jpg" class="our__teacher-photo" alt="Лицензия" /></a>
        </div>
        <?php foreach(getNews() as $news): ?>
        <div class="security-info__item margin-top">
        <img src="<?php echo $news['главное_фото'] ?> " class="news__rainbow-img">
        </div>
        <div class="news-rainbow__header">
          <div class="news-rainbow__admin">
            <?php echo $news['администратор']?>
          </div>
          <div class="news-rainbow__title">
            <?php echo $news['заголовок_новости']?>
          </div>
          <div class="news-rainbow__right-corner">
            <div class="news-rainbow__date">
              <?php echo $news['дата_публикации']?> <br> 
            </div>
            <p class="news-rainbow__number"><?php echo $news['дата_публикациимесяц-год']?></p>
          </div>
        </div>
        <div class="news-rainbow__descr">
          <?php echo $news['описание_новости']?>
        </div>
        <div class="news-rainbow__wrapper popup-gallery">

            <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_1'] ?>">
              <img src="<?php echo $news['фотография_1'] ?>" class="news-rainbow__items" alt /></a>

              <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_2'] ?>">
                <img src="<?php echo $news['фотография_2'] ?>" class="news-rainbow__items" alt /></a>
                <a class="news-rainbow__items" href="<?php echo $news['фотография_3'] ?>">
                  <img src="<?php echo $news['фотография_3'] ?>" class="news-rainbow__items" alt /></a>
                  <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_4'] ?>">
                    <img src="<?php echo $news['фотография_4'] ?>" class="news-rainbow__items" alt /></a>
                    <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_5'] ?>">
                      <img src="<?php echo $news['фотография_5'] ?>" class="news-rainbow__items" alt /></a>
                      <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_1'] ?>">
              <img src="<?php echo $news['фотография_6'] ?>" class="news-rainbow__items" alt /></a>

              <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_2'] ?>">
                <img src="<?php echo $news['фотография_7'] ?>" class="news-rainbow__items" alt /></a>
                <a class="news-rainbow__items" href="<?php echo $news['фотография_3'] ?>">
                  <img src="<?php echo $news['фотография_8'] ?>" class="news-rainbow__items" alt /></a>
                  <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_4'] ?>">
                    <img src="<?php echo $news['фотография_9'] ?>" class="news-rainbow__items" alt /></a>
                    <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $news['фотография_5'] ?>">
                      <img src="<?php echo $news['фотография_10'] ?>" class="news-rainbow__items" alt /></a>
        </div>
        
        <?php endforeach; ?>
        <?php foreach(getOldnews() as $oldnews): ?>
        <div class="security-info__item margin-top">
        <img src="<?php echo $oldnews['главное_фото'] ?> " class="news__rainbow-img">
        </div>
        <div class="news-rainbow__header">
          <div class="news-rainbow__admin">
            <?php echo $oldnews['администратор']?>
          </div>
          <div class="news-rainbow__title">
            <?php echo $oldnews['заголовок_новости']?>
          </div>
          <div class="news-rainbow__right-corner">
            <div class="news-rainbow__date">
              <?php echo $oldnews['дата_публикации']?> <br> 
            </div>
            <p class="news-rainbow__number"><?php echo $oldnews['дата_публикациимесяц-год']?></p>
          </div>
        </div>
        <div class="news-rainbow__descr">
          <?php echo $oldnews['описание_новости']?>
        </div>
        <div class="news-rainbow__wrapper popup-gallery">

            <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_1'] ?>">
              <img src="<?php echo $oldnews['фотография_1'] ?>" class="news-rainbow__items" alt /></a>

              <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_2'] ?>">
                <img src="<?php echo $oldnews['фотография_2'] ?>" class="news-rainbow__items" alt /></a>
                <a class="news-rainbow__items" href="<?php echo $pldnews['фотография_3'] ?>">
                  <img src="<?php echo $oldnews['фотография_3'] ?>" class="news-rainbow__items" alt /></a>
                  <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_4'] ?>">
                    <img src="<?php echo $oldnews['фотография_4'] ?>" class="news-rainbow__items" alt /></a>
                    <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_5'] ?>">
                      <img src="<?php echo $oldnews['фотография_5'] ?>" class="news-rainbow__items" alt /></a>
                      <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_1'] ?>">
              <img src="<?php echo $oldnews['фотография_6'] ?>" class="news-rainbow__items" alt /></a>

              <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_2'] ?>">
                <img src="<?php echo $oldnews['фотография_7'] ?>" class="news-rainbow__items" alt /></a>
                <a class="news-rainbow__items" href="<?php echo $oldnews['фотография_3'] ?>">
                  <img src="<?php echo $oldnews['фотография_8'] ?>" class="news-rainbow__items" alt /></a>
                  <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_4'] ?>">
                    <img src="<?php echo $oldnews['фотография_9'] ?>" class="news-rainbow__items" alt /></a>
                    <a  title="Общегородская акция «Радуга детства»" class="news-rainbow__items" href="<?php echo $oldnews['фотография_5'] ?>">
                      <img src="<?php echo $oldnews['фотография_10'] ?>" class="news-rainbow__items" alt /></a>
        </div>
        
        <?php endforeach; ?>
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