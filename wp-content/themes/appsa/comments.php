<?php
/**
 * Шаблон комментариев (comments.php)
 * Выводит список комментариев и форму добавления
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<section id="testimonials" class="pos-rel pd-b-0 pd-t-100" data-rgen-sm="pd-tb-small">
   <?php if (have_comments()) : // если комменты есть ?>
    <div class="container pos-rel z1 align-c">
        <div class="w-75 mr-auto align-c mr-b-50">
            <h4 class="title mini mr-0 bold-n">Отзывы</h4>
            <h2 class="title" data-rgen-sm="medium">Что думают наши клиенты</h2>
        </div>

        <!-- * carousel-widget -->
        <div class="carousel-widget ctrl-1 align-c pos-rel" data-items="2" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,2|768,2|992,2|1200,2" data-margin="30" data-autoplay="false" data-hauto="true" data-in="false" data-out="false" data-center="false">
            <div class="owl-carousel">
                <?php
                    $args = array( // аргументы для списка комментариев, некоторые опции выставляются в админке, остальное в классе clean_comments_constructor
                        'walker' => new clean_comments_constructor, // класс, который собирает все структуру комментов, нах-ся в function.php
                    );
                    wp_list_comments($args); // выводим комменты
                ?>
            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.carousel-widget -->
    </div>
    <!-- container -->
    <?php endif; // // если комменты есть - конец ?>
    
    <div class="accordion-widget acc-style1" data-acc-handle="y"  id="accwidget2" style="opacity: 1;">
    <div class="acc-block">
        <div class="acc-hd" data-accid="#accwidget2-acc-block-0">
            <div class="info-obj img-l mid g20 mini">
                <h3 class="info bold-1 txt-upper mr-b-30 align-c fs16"><?=_e('Share your opinion!')?></h3>
            </div>
        </div>
        <div class="acc-content" id="accwidget2-acc-block-0" style="display: none;">
             <div class="container">	
                    <div class="flex-row mr-b-40 mb20">
                        <div class="flex-col-md-6 flex-col-md-offset-3 last-md">


                <?php if (comments_open()) { // если комментирование включено для данного поста
                    /* ФОРМА КОММЕНТИРОВАНИЯ */
                    $fields =  array( // разметка текстовых полей формы
                        'author' => '<div class="form-group"><input class="form-control bdr-op-2" id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" placeholder="'.__("Name").'" required></div>', // поле Имя
                        'email' => '<div class="form-group"><input class="form-control bdr-op-2" id="email" name="email" type="email" value="'.esc_attr($commenter['comment_author_email']).'"placeholder="'.__("E-mail").'"  required></div>', // поле email
                        );
                    $args = array( // опции формы комментирования
                        'fields' => apply_filters('comment_form_default_fields', $fields), // заменяем стандартные поля на поля из массива выше ($fields)
                        'comment_field' => '<div class="form-group"><textarea class="form-control bdr-op-2" id="comment" name="comment" cols="30" rows="10" placeholder="'.__("Message").'" required></textarea></div>', // разметка поля для комментирования



                        'must_log_in' => '<p class="must-log-in">Вы должны быть зарегистрированы! '.wp_login_url(apply_filters('the_permalink',get_permalink())).'</p>', // текст "Вы должны быть зарегистрированы!"
                        'logged_in_as' => '<p class="logged-in-as">'.sprintf(__( 'Вы вошли как <a href="%1$s">%2$s</a>. <a href="%3$s">Выйти?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink',get_permalink()))).'</p>', // разметка "Вы вошли как"
                        'comment_notes_before' => '', // Текст до формы
                        'comment_notes_after' => '', // текст после формы
                        'id_form' => 'commentform', // атрибут id формы
                        'id_submit' => 'submit', // атрибут id кнопки отправить
                        'title_reply' => '', // заголовок формы
                        'title_reply_to' => 'Ответить %s', // "Ответить" текст
                        'submit_button' => '<button type="submit" class="btn btn-default block btn-color1">'.__("Submit Review").'</button>', // "Отменить ответ" текст
                        'cancel_reply_link' => 'Отменить ответ', // "Отменить ответ" текст
                        'label_submit' => __("Submit Review"), // Текст на кнопке отправить
                        'class_submit' => 'btn btn-default' // новый параметр с классом копки, добавлен с 4.1
                    );
                    comment_form($args); // показываем нашу форму
                } ?>

                        </div><!-- / column -->

                    </div><!-- / row -->
            </div>   


        </div>
        <!-- / content -->
    </div>
    <!-- / acc-block -->
</div>

    
    
</section>




