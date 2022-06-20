<? get_header(); ?>
    <body>
   
        <div id="page" data-linkscroll='y'>
            <!-- Navigation 1-->
            <nav class="nav-wrp nav-1 light bg-white" data-glass="y" data-sticky="y">
                <div class="container pd-0 bdr-b min-px-h30 flex-cc" data-rgen-sm="pd-lr-20 h-reset hide">
                    <div class="flex-row">
                        <div class="flex-col-md-3 txt-white flex-cl">
                            <div class="nav-social" data-rgen-sm="hide">
                                <a target="_blank" href="https://www.facebook.com/streetadventure/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a target="_blank" href="#">
                                    <i class="fa fa-vk"></i>
                                </a>
                                <a target="_blank" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-col-md-3 txt-white flex-cc" id="city-menu">
                            <i class="fa fa-map-marker"></i>
                            <div class="dropdown">
                                <a class="mr-l-6  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Москва</a>
                                <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">Чита</a>
					    <a class="dropdown-item" href="#">Самара</a>
					    <a class="dropdown-item" href="#">Санкт-Петербург</a>
					  </div>-->
                            </div>
                        </div>
                        <div class="flex-col-md-3 txt-white flex-cr">
                            <div class="pd-r-20 mev_company-phone">
                                <i class="fa fa-phone"></i>
                                <span class="mr-l-2">
                                    <a href="#" class="link-dotted">+7 (495) 255-55-31</a>
                                </span>
                                &nbsp;&nbsp;с 10 до 22
					
                            </div>
                        </div>
                        <div class="flex-col-md-3 txt-white flex-cr">
                            <div class="mev_company-email">
                                <i class="fa fa-envelope"></i>
                                <span class="mr-l-2">moscow@streetadventure.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pd-0 bdr-b min-px-h100 flex-cc" data-rgen-sm="pd-lr-20 h-reset">
                    <div class="flex-row gt0 middle-md">
                        <!-- Logo section -->
                        <div class="flex-col-md-2">
                            <div class="nav-header">
                                <a class="navbar-brand" href="/moscow/">
                                    <img src="/ru/images/sa-logo-white.png" alt="Brand logo" class="mev_logo-white">
                                    <img src="/ru/images/sa-logo-dark.png" alt="Brand logo" class="mev_logo-dark">
                                </a>
                                <a class="nav-handle" data-nav=".nav" data-navopen="pe-7s-more" data-navclose="pe-7s-close">
                                    <i class="pe-7s-more"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Navigation links -->
                        <div class="flex-col-md-10 align-r">
                            <?php 
                                wp_nav_menu( array(
                                    'container_class' => 'nav',
                                    'menu_class'      => 'nav-links sf-menu',
                                    'theme_location'=>'top',
                                    'after'=>'',
                                    'walker' => new Primary_Walker_Nav_Menu()
                                ) );
                            ?>                        
                                                        
                            <!-- .Nav -->
                        </div>
                        <!-- .Column -->
                    </div>
                    <!-- .row -->
                    <div id="popup-message" class="white-popup-block popup-content mfp-hide">
                        <div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
                            <p class="sq90 inline-flex flex-cc fs80 mr-0 txt-color1">
                                <i class="pe-7s-mail"></i>
                            </p>
                            <h2 class="title mr-0" data-rgen-sm="small">Напишите нам, мы будем рады :)</h2>
                        </div>
                        <div class="pop-body" data-rgen-sm="pd-20">
                            <!-- form-block -->
                            <div class="form-block">
                                <form action="<?=get_template_directory_uri()?>/formdata.php" class="form-widget">
                                    <div class="field-wrp">
                                        <div class="form-group">
                                            <input class="form-control" data-label="Name" required data-msg="Введите ваше имя." type="text" name="name" placeholder="Имя">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" data-label="Email" required data-msg="Введите e-mail." type="email" name="email" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required data-label="Phone" data-msg="Введите ваш телефон." type="text" name="phone" placeholder="Телефон">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" data-label="Message" required data-msg="Введите сообщение." name="message" placeholder="Сообщение" cols="30" rows="10"></textarea>
                                        </div>
                                        <input type="hidden" name="formtype" value="1">
                                    </div>
                                    <button type="submit" class="btn solid btn-default btn-color1 block">
                                        <i class="fa fa-envelope-o"></i>
                                        ОТПРАВИТЬ
                                    </button>
                                </form>
                                <!-- / form -->
                            </div>
                            <!-- / form block -->
                        </div>
                    </div>
                    <!-- .popup-content -->
                </div>
                <!-- .container -->
                <div class="triangle-down">
                    <svg version="1.1" id="menu_arrow_down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 40" enable-background="new 0 0 1280 40" xml:space="preserve">
                        <polygon fill="#fff" points="196,40 0,0 1280,0 "/>
                    </svg>
                    <div class="polygon-shadow"></div>
                </div>
            </nav>
            <!-- ************** END : Navigation **************  -->
            
<?      
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
<? get_template_part( 'parts/footer' ); ?>
           
        </div>
        <!-- /#page -->

<? get_footer(); ?>
