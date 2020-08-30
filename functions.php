<?php

    add_filter('show_admin_bar', '__return_false');

    define('CHILD_THEME_ROOT', get_template_directory_uri());
    define('CHILD_CSS_ROOT', CHILD_THEME_ROOT . '/css');
    define('CHILD_JS_ROOT', CHILD_THEME_ROOT . '/js');
    define('CHILD_IMG_ROOT', CHILD_THEME_ROOT . '/images');
    define('CHILD_DOC_ROOT', CHILD_THEME_ROOT . '/doc');


    

    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('libs', CHILD_CSS_ROOT . '/libs.min.css');
        wp_enqueue_style('magnific', CHILD_CSS_ROOT . '/magnific.css');
        wp_enqueue_style('main', CHILD_CSS_ROOT . '/style.css');

        
        wp_localize_script( 'jquery', 'mytheme', array('template_url' => get_template_directory_uri(),));
        wp_enqueue_script('libsjs', CHILD_JS_ROOT . '/libs.min.js');
        wp_enqueue_script('libsjs1', CHILD_JS_ROOT . '/main.min.js');
        wp_enqueue_script('libsjs2', CHILD_JS_ROOT . '/magnific.js');
        wp_enqueue_script('libsjs3', CHILD_JS_ROOT . '/jquery.magnific-popup.js');
        wp_enqueue_script('libsjs4', "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js");
        wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">');
        wp_enqueue_script('menu', CHILD_JS_ROOT . '/menu.js');
    });

    add_action('init', function(){
    
        add_theme_support('post-thumbnails');
    
            register_post_type('personal',array(
                'labels' => array(
                    'name'               => 'Сведения о персонале', 
                    'singular_name'      => 'Персонал', 
                    'add_new'            => 'Добавить персонал', 
                    'add_new_item'       => 'Добавление персонала', 
                    'edit_item'          => 'Редактирование информации о персонале', 
                    'new_item'           => 'Новые сведения о персонале', 
                    'view_item'          => 'Смотреть сведения', 
                    'search_items'       => 'Искать сведения',
                    'not_found'          => 'Не найдено', 
                    'not_found_in_trash' => 'Не найдено в корзине', 
                    'parent_item_colon'  => '', 
                    'menu_name'          => 'Сведения о персонале', 
                ),
                
                'public'              => false,
                'show_ui'             => true,
                'menu_position'       => null,
                'menu_icon'           => 'dashicons-format-gallery',
                'hierarchical'        => false,
                'supports'            => [ 'title',  ],
        )   );
            });
            function getPersonal(){ // создание массива, потом прописать в ехо//
                $args = array(
                    'orderby'   => 'date',
                    'order'     => 'ASC',
                    'post_type' => 'personal', // прописать пост тайп из меню вп//
                    'posts_per_page' => -1,
                );
    
                $personals = []; //создать пустой массив назвать как название функции только без гет//
                
                foreach(get_posts ($args) as $post) /* не трогать никогда */ {
                    $personal = get_fields($post->ID); /* название поля в единичном числе */
                    
                    $personals[] = $personal; //перенести данные из формы в массив//
                }
                return $personals; //вернуть массив//
            }

    add_action('init', function(){
    
        add_theme_support('post-thumbnails');
    
            register_post_type('contacts',array(
                'labels' => array(
                    'name'               => 'Контакты', 
                    'singular_name'      => 'Контакты', 
                    'add_new'            => 'Добавить Контакты', 
                    'add_new_item'       => 'Добавление контактов', 
                    'edit_item'          => 'Редактирование контактов', 
                    'new_item'           => 'Новые контакты', 
                    'view_item'          => 'Смотреть контакты', 
                    'search_items'       => 'Искать искать контакты',
                    'not_found'          => 'Не найдено', 
                    'not_found_in_trash' => 'Не найдено в корзине', 
                    'parent_item_colon'  => '', 
                    'menu_name'          => 'Контакты и фото директора', 
                ),
                
                'public'              => false,
                'show_ui'             => true,
                'menu_position'       => null,
                'menu_icon'           => 'dashicons-format-gallery',
                'hierarchical'        => false,
                'supports'            => [ 'title',  ],
        )   );
            });
            function getContacts(){ // создание массива, потом прописать в ехо//
                $args = array(
                    'orderby'   => 'date',
                    'order'     => 'ASC',
                    'post_type' => 'contacts', // прописать пост тайп из меню вп//
                    'posts_per_page' => -1,
                );
    
                $contacts = []; //создать пустой массив назвать как название функции только без гет//
                
                foreach(get_posts($args) as $post) /* не трогать никогда */ {
                    $contact = get_fields($post->ID); /* название поля в единичном числе */
                    
                    $contacts[] = $contact; //перенести данные из формы в массив//
                }
                return $contacts; //вернуть массив//
            }

    add_action('init', function(){
    
        add_theme_support('post-thumbnails');
    
            register_post_type('slider',array(
                'labels' => array(
                    'name'               => 'Фото главной', 
                    'singular_name'      => 'Фото', 
                    'add_new'            => 'Добавить Фото', 
                    'add_new_item'       => 'Добавление фото', 
                    'edit_item'          => 'Редактирование фото', 
                    'new_item'           => 'Новое фото', 
                    'view_item'          => 'Смотреть фото', 
                    'search_items'       => 'Искать фото',
                    'not_found'          => 'Не найдено', 
                    'not_found_in_trash' => 'Не найдено в корзине', 
                    'parent_item_colon'  => '', 
                    'menu_name'          => 'Главная', 
                ),
                
                'public'              => false,
                'show_ui'             => true,
                'menu_position'       => null,
                'menu_icon'           => 'dashicons-format-gallery',
                'hierarchical'        => false,
                'supports'            => [ 'title', 'editor', 'thumbnail' ],
        )   );
            });
    
            function getPhoto(){ // создание массива, потом прописать в ехо//
                $args = array(
                    'orderby'   => 'date',
                    'order'     => 'ASC',
                    'post_type' => 'slider', // прописать пост тайп из меню вп//
                    'posts_per_page' => -1,
                );
    
                $photos = []; //создать пустой массив//
    
                foreach(get_posts($args) as $post ) {
                    $photo = get_fields($post->ID);
                    $photo['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
                    $photos[] = $photo; //перенести данные из формы в массив//
                }
                return $photos; //вернуть массив//
            }

  
            add_action('init', function(){
    
                add_theme_support('post-thumbnails');
            
                    register_post_type('reward',array(
                        'labels' => array(
                            'name'               => 'Новости', 
                            'singular_name'      => 'Достижения', 
                            'add_new'            => 'Добавить достижение', 
                            'add_new_item'       => 'Добавление достижения', 
                            'edit_item'          => 'Редактирование достижений', 
                            'new_item'           => 'Новое достижение', 
                            'view_item'          => 'Смотреть достижения', 
                            'search_items'       => 'Искать фото',
                            'not_found'          => 'Не найдено', 
                            'not_found_in_trash' => 'Не найдено в корзине', 
                            'parent_item_colon'  => '', 
                            'menu_name'          => 'Грамоты', 
                        ),
                        
                        'public'              => false,
                        'show_ui'             => true,
                        'menu_position'       => null,
                        'menu_icon'           => 'dashicons-format-gallery',
                        'hierarchical'        => false,
                        'supports'            => [ 'title', 'editor', 'thumbnail' ],
                )   );
                    });
    
                    function getRewards(){ // создание массива, потом прописать в ехо//
                        $args = array(
                            'orderby'   => 'date',
                            'order'     => 'ASC',
                            'post_type' => 'reward', // прописать пост тайп из меню вп//
                            'posts_per_page' => -1,
                        );
            
                        $rewards = []; //создать пустой массив назвать как название функции только без гет//
                        
                        foreach(get_posts($args) as $post) /* не трогать никогда */ {
                            $reward = get_fields($post->ID); /* название поля в единичном числе */
                            
                            $rewards[] = $reward; //перенести данные из формы в массив//
                        }
                        return $rewards; //вернуть массив//
                    }


                    add_action('init', function(){
    
                        add_theme_support('post-thumbnails');
                    
                            register_post_type('news',array(
                                'labels' => array(
                                    'name'               => 'Новости', 
                                    'singular_name'      => 'Новости', 
                                    'add_new'            => 'Добавить новость', 
                                    'add_new_item'       => 'Добавление новости', 
                                    'edit_item'          => 'Редактирование новости', 
                                    'new_item'           => 'Новая новость', 
                                    'view_item'          => 'Смотреть ности', 
                                    'search_items'       => 'Искать новость',
                                    'not_found'          => 'Не найдено', 
                                    'not_found_in_trash' => 'Не найдено в корзине', 
                                    'parent_item_colon'  => '', 
                                    'menu_name'          => 'Новости', 
                                ),
                                
                                'public'              => false,
                                'show_ui'             => true,
                                'menu_position'       => null,
                                'menu_icon'           => 'dashicons-format-gallery',
                                'hierarchical'        => false,
                                'supports'            => [ 'title' ],
                        )   );
                            });

                            function getNews(){ // создание массива, потом прописать в ехо//
                                $args = array(
                                    'orderby'   => 'date',
                                    'order'     => 'DESC',
                                    'post_type' => 'news', // прописать пост тайп из меню вп//
                                    'posts_per_page' => -1,
                                );
                    
                                $news = []; //создать пустой массив назвать как название функции только без гет//
                                
                                foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                    $new = get_fields($post->ID); /* название поля в единичном числе */
                                    
                                    $news[] = $new; //перенести данные из формы в массив//
                                }
                                return $news; //вернуть массив//
                            }


                            add_action('init', function(){
    
                                add_theme_support('post-thumbnails');
                            
                                    register_post_type('oldnews',array(
                                        'labels' => array(
                                            'name'               => 'Новости старого формата', 
                                            'singular_name'      => 'Новости старого формата', 
                                            'add_new'            => 'Добавить новость', 
                                            'add_new_item'       => 'Добавление новости', 
                                            'edit_item'          => 'Редактирование новости', 
                                            'new_item'           => 'Новая новость', 
                                            'view_item'          => 'Смотреть ности', 
                                            'search_items'       => 'Искать новость',
                                            'not_found'          => 'Не найдено', 
                                            'not_found_in_trash' => 'Не найдено в корзине', 
                                            'parent_item_colon'  => '', 
                                            'menu_name'          => 'Новости старого формата', 
                                        ),
                                        
                                        'public'              => false,
                                        'show_ui'             => true,
                                        'menu_position'       => null,
                                        'menu_icon'           => 'dashicons-format-gallery',
                                        'hierarchical'        => false,
                                        'supports'            => [ 'title' ],
                                )   );
                                    });
        
                                    function getOldnews(){ // создание массива, потом прописать в ехо//
                                        $args = array(
                                            'orderby'   => 'date',
                                            'order'     => 'DESC',
                                            'post_type' => 'oldnews', // прописать пост тайп из меню вп//
                                            'posts_per_page' => -1,
                                        );
                            
                                        $oldnews = []; //создать пустой массив назвать как название функции только без гет//
                                        
                                        foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                            $oldnew = get_fields($post->ID); /* название поля в единичном числе */
                                            
                                            $oldnews[] = $oldnew; //перенести данные из формы в массив//
                                        }
                                        return $oldnews; //вернуть массив//
                                    }
        


                            add_action('init', function(){
    
                            
                            
                                    register_post_type('events',array(
                                        'labels' => array(
                                            'name'               => 'Мероприятия', 
                                            'singular_name'      => 'Мероприятия', 
                                            'add_new'            => 'Добавить мероприятие', 
                                            'add_new_item'       => 'Добавление мероприятия', 
                                            'edit_item'          => 'Редактирование мероприятия', 
                                            'new_item'           => 'Новое мероприятие', 
                                            'view_item'          => 'Смотреть мероприятия', 
                                            'search_items'       => 'Искать мероприятие',
                                            'not_found'          => 'Не найдено', 
                                            'not_found_in_trash' => 'Не найдено в корзине', 
                                            'parent_item_colon'  => '', 
                                            'menu_name'          => 'Мероприятия', 
                                        ),
                                        
                                        'public'              => false,
                                        'show_ui'             => true,
                                        'menu_position'       => null,
                                        'menu_icon'           => 'dashicons-format-gallery',
                                        'hierarchical'        => false,
                                        'supports'            => [ 'title' ],
                                )   );
                                    });
            

                                    function getEvents(){ // создание массива, потом прописать в ехо//
                                        $args = array(
                                            'orderby'   => 'date',
                                            'order'     => 'ASC',
                                            'post_type' => 'events', // прописать пост тайп из меню вп//
                                            'posts_per_page' => -1,
                                        );
                            
                                        $events = []; //создать пустой массив назвать как название функции только без гет//
                                        
                                        foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                            $event = get_fields($post->ID); /* название поля в единичном числе */
                                            
                                            $events[] = $event; //перенести данные из формы в массив//
                                        }
                                        return $events; //вернуть массив//
                                    }



                                    add_action('init', function(){
    
                            
                            
                                        register_post_type('sections',array(
                                            'labels' => array(
                                                'name'               => 'Кружки и секции', 
                                                'singular_name'      => 'Кружки и секции', 
                                                'add_new'            => 'Добавить мероприятие', 
                                                'add_new_item'       => 'Добавление мероприятия', 
                                                'edit_item'          => 'Редактирование мероприятия', 
                                                'new_item'           => 'Новое мероприятие', 
                                                'view_item'          => 'Смотреть мероприятия', 
                                                'search_items'       => 'Искать мероприятие',
                                                'not_found'          => 'Не найдено', 
                                                'not_found_in_trash' => 'Не найдено в корзине', 
                                                'parent_item_colon'  => '', 
                                                'menu_name'          => 'Кружки и секции', 
                                            ),
                                            
                                            'public'              => false,
                                            'show_ui'             => true,
                                            'menu_position'       => null,
                                            'menu_icon'           => 'dashicons-format-gallery',
                                            'hierarchical'        => false,
                                            'supports'            => [ 'title' ],
                                    )   );
                                        });



                                        function getSections(){ // создание массива, потом прописать в ехо//
                                            $args = array(
                                                'orderby'   => 'date',
                                                'order'     => 'ASC',
                                                'post_type' => 'sections', // прописать пост тайп из меню вп//
                                                'posts_per_page' => -1,
                                            );
                                
                                            $sections = []; //создать пустой массив назвать как название функции только без гет//
                                            
                                            foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                                $section = get_fields($post->ID); /* название поля в единичном числе */
                                                
                                                $sections[] = $section; //перенести данные из формы в массив//
                                            }
                                            return $sections; //вернуть массив//
                                        }
                                        add_action('init', function(){
    
                            
                            
                                            register_post_type('openevents',array(
                                                'labels' => array(
                                                    'name'               => 'Открытые мероприятия', 
                                                    'singular_name'      => 'Открытые мероприятия', 
                                                    'add_new'            => 'Добавить мероприятие', 
                                                    'add_new_item'       => 'Добавление мероприятия', 
                                                    'edit_item'          => 'Редактирование мероприятия', 
                                                    'new_item'           => 'Новое мероприятие', 
                                                    'view_item'          => 'Смотреть мероприятия', 
                                                    'search_items'       => 'Искать мероприятие',
                                                    'not_found'          => 'Не найдено', 
                                                    'not_found_in_trash' => 'Не найдено в корзине', 
                                                    'parent_item_colon'  => '', 
                                                    'menu_name'          => 'Открытые мероприятия', 
                                                ),
                                                
                                                'public'              => false,
                                                'show_ui'             => true,
                                                'menu_position'       => null,
                                                'menu_icon'           => 'dashicons-format-gallery',
                                                'hierarchical'        => false,
                                                'supports'            => [ 'title' ],
                                        )   );
                                            });



                                            function getOpenevent(){ // создание массива, потом прописать в ехо//
                                                $args = array(
                                                    'orderby'   => 'date',
                                                    'order'     => 'ASC',
                                                    'post_type' => 'openevents', // прописать пост тайп из меню вп//
                                                    'posts_per_page' => -1,
                                                );
                                    
                                                $openevents = []; //создать пустой массив назвать как название функции только без гет//
                                                
                                                foreach(get_posts ($args) as $post) /* не трогать никогда */ {
                                                    $openevent = get_fields($post->ID); /* название поля в единичном числе */
                                                    
                                                    $openevents[] = $openevent; //перенести данные из формы в массив//
                                                }
                                                return $openevents; //вернуть массив//
                                            }
                                            add_action('init', function(){
    
                            
                            
                                                register_post_type('psy',array(
                                                    'labels' => array(
                                                        'name'               => 'Расписание и усыновленные', 
                                                        'singular_name'      => 'Открытые Расписание и усыновленные', 
                                                        'add_new'            => 'Добавить Расписание и усыновленные', 
                                                        'add_new_item'       => 'Добавление мероприятия', 
                                                        'edit_item'          => 'Редактирование мероприятия', 
                                                        'new_item'           => 'Новое мероприятие', 
                                                        'view_item'          => 'Смотреть мероприятия', 
                                                        'search_items'       => 'Искать мероприятие',
                                                        'not_found'          => 'Не найдено', 
                                                        'not_found_in_trash' => 'Не найдено в корзине', 
                                                        'parent_item_colon'  => '', 
                                                        'menu_name'          => 'Расписание и усыновленные', 
                                                    ),
                                                    
                                                    'public'              => false,
                                                    'show_ui'             => true,
                                                    'menu_position'       => null,
                                                    'menu_icon'           => 'dashicons-format-gallery',
                                                    'hierarchical'        => false,
                                                    'supports'            => [ 'title' ],
                                            )   );
                                                });

                                                function getPsy(){ // создание массива, потом прописать в ехо//
                                                    $args = array(
                                                        'orderby'   => 'date',
                                                        'order'     => 'ASC',
                                                        'post_type' => 'psy', // прописать пост тайп из меню вп//
                                                        'posts_per_page' => -1,
                                                    );
                                        
                                                    $psys = []; //создать пустой массив назвать как название функции только без гет//
                                                    
                                                    foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                                        $psy = get_fields($post->ID); /* название поля в единичном числе */
                                                        
                                                        $psys[] = $psy; //перенести данные из формы в массив//
                                                    }
                                                    return $psys; //вернуть массив//
                                                }

                                                add_action('init', function(){
    
                            
                            
                                                    register_post_type('schoolyears',array(
                                                        'labels' => array(
                                                            'name'               => 'Годы начала и окончания уч.года', 
                                                            'singular_name'      => 'Открытые Годы начала и окончания уч.года', 
                                                            'add_new'            => 'Добавить Годы начала и окончания уч.года', 
                                                            'add_new_item'       => 'Добавление мероприятия', 
                                                            'edit_item'          => 'Редактирование мероприятия', 
                                                            'new_item'           => 'Новое мероприятие', 
                                                            'view_item'          => 'Смотреть мероприятия', 
                                                            'search_items'       => 'Искать мероприятие',
                                                            'not_found'          => 'Не найдено', 
                                                            'not_found_in_trash' => 'Не найдено в корзине', 
                                                            'parent_item_colon'  => '', 
                                                            'menu_name'          => 'Годы начала и окончания уч.года', 
                                                        ),
                                                        
                                                        'public'              => false,
                                                        'show_ui'             => true,
                                                        'menu_position'       => null,
                                                        'menu_icon'           => 'dashicons-format-gallery',
                                                        'hierarchical'        => false,
                                                        'supports'            => [ 'title' ],
                                                )   );
                                                    });


                                                    function getYears(){ // создание массива, потом прописать в ехо//
                                                        $args = array(
                                                            'orderby'   => 'date',
                                                            'order'     => 'ASC',
                                                            'post_type' => 'schoolyears', // прописать пост тайп из меню вп//
                                                            'posts_per_page' => -1,
                                                        );
                                            
                                                        $years = []; //создать пустой массив назвать как название функции только без гет//
                                                        
                                                        foreach(get_posts($args) as $post) /* не трогать никогда */ {
                                                            $year = get_fields($post->ID); /* название поля в единичном числе */
                                                            
                                                            $years[] = $year; //перенести данные из формы в массив//
                                                        }
                                                        return $years; //вернуть массив//
                                                    }