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
                                    <a href="#" class="link-dotted">+7 495 374 7798</a>
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
                                <form action="/ru/formdata.php" class="form-widget">
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
            <section class="pd-0 pos-rel vh100" data-rgen-sm="h-reset" id="home">
                <div class="container pos-rel z2 h100">
                    <div class="flex-row h100 pd-t-130" data-rgen-sm="pd-t-40">
                        <div class="flex-col-md-5">
                            <figure class="bg-cc bg-contain vh85" data-rgen-sm="min-px-h500" data-bg="/ru/images/iphone-img-02.png"></figure>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-6 flex-col-md-offset-1 flex-cc">
                            <div class="content align-c w100">
                                <!-- <p class="mr-b-40"><img src="/ru/images/sa-logo-white.png" class="inline-block align-m" alt="image"></p> -->
                                <div class="flex-row gt20 align-c middle-md">
                                    <div class="flex-col-md-1">
                                        <hr class="light bdr-op-3">
                                    </div>
                                    <div class="flex-col-md-10">
                                        <h1 class="title txt-white large" data-rgen-sm="medium mr-0">При-клю-че-ни-я!</h1>
                                    </div>
                                    <div class="flex-col-md-1">
                                        <hr class="light bdr-op-3">
                                    </div>
                                </div>
                                <h2 class="title txt-white align-c lh-1" data-rgen-sm="small">
                                    Квесты для ваших прогулок<br>и походов в музеи
                                </h2>
                                <p class="title-sub mini txt-white align-c lh-3" data-rgen-sm="small">
                                    Преврати свой променад в увлекательное развлечение!<br>
                                    Скачай приложение, выбери квест и выходи играть<br>
                                    <br>
                                    А еще мы делаем <a class="link-dotted" href="/ru/moscow/korporativnie-kvesti-timbildingi">квест-тимбилдинги</a>
                                    ,<br>
                                    проводим <a class="link-dotted" href="/ru/moscow/shkolnie-kvesti">образовательные квесты для школьников</a>
                                    <br>
                                    и помогаем компаниям делать <a class="link-dotted" href="/ru/moscow/vozmozhnosti">заумные штуки</a>
                                    .
					
                                </p>
                                <div class="flex-row gt20 align-c middle-md mr-t-50" data-rgen-md="mr-t-50">
                                    <div class="flex-col-md-12" data-rgen-md="mr-b-30" data-rgen-sm="mr-b-30">
                                        <p class="title-sub mini txt-white align-c mr-b-10" data-rgen-md="mr-b-10">Пройди свое первое приключение:</p>
                                        <!-- <a href="http://goo.gl/hs5BPz" target="_blank" class="sq50 fs22 bdr-2 mr-lr-5 btn-white solid inline-flex rd flex-cc"><i class="fa fa-apple"></i></a>
							<a href="http://goo.gl/hs5BPz" target="_blank" class="sq50 fs22 bdr-2 mr-lr-5 btn-white solid inline-flex rd flex-cc"><i class="fa fa-android"></i></a>	 -->
                                        <a href="https://appsto.re/ru/_NQLdb.i" target="_blank" class="appstore-btn app-apple" onclick="yaCounter44882842.reachGoal('GOAPPSTORE');ga('send', 'event', 'Button', 'GoAppStore'); return true;">
                                            <i class="fa fa-mobile"></i>
                                            <small>Скачай в</small>
                                            App Store
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=ru.streatadventure.android" target="_blank" class="appstore-btn app-google-play" onclick="yaCounter44882842.reachGoal('GoGooglePlay'); ga('send', 'event', 'Button', 'GoGooglePlay'); return true;">
                                            <i class="google-play-icon">
                                                <img src="/ru/images/google-play.png" alt="">
                                            </i>
                                            <small>Скачай в</small>
                                            Google play
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END : column //  -->
                        <!-- <div class="gorod flex-col-12">
				<img src="/ru/images/gorod.png" alt="">
			</div> -->
                    </div>
                    <!-- // END : row //  -->
                </div>
                <!-- // END : container //  -->
                <div class="full-vh bg-cc bg-cover" data-stellar="y" data-stellar-ratio="0.8" data-rgen-sm="h100 mr-t-0" data-bg="/ru/images/intro-sa.jpg">
                    <b class="bg-dark1 op-07 full-wh"></b>
                </div>
            </section>
            <!-- <div class="pos-rel pd-tb-tiny bg-dark1">
	<div class="container">
		<ul class="logo-list gt-small size-medium reset op-05">
			<li><img src="/ru/images/award-logo-light-01.png" alt="award"></li>
			<li><img src="/ru/images/award-logo-light-02.png" alt="award"></li>
		</ul>
	</div>
</div> -->
            <section class="pos-rel" data-rgen-sm="pd-tb-small" id="features">
                <div class="container">
                    <!--=========================================
			=            Content section - 1            =
			==========================================-->
                    <div class="flex-row middle-md mb20">
                        <div class="flex-col-md-6 flex-col-md-offset-1 last-md" data-rgen-sm="align-c">
                            <img src="/ru/images/content-img-01_2.png" class="img-responsive img" alt="image">
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-5" data-rgen-sm="align-c">
                            <div class="content">
                                <h2 class="title bold-n" data-rgen-sm="small">Идеальная прогулка - это приключение!</h2>
                                <p class="title-sub" data-rgen-sm="small">Street Adventure - это уникальное мобильное приложение с городскими квестами. Теперь ты можешь не просто гулять, а играть и разгадывать. На несколько часов ты станешь детективом, алхимиком, специалистом по потусторонним силам, - или кем-то ещё!</p>
                                <hr class="dark mr-tb-30">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img txt-dark2">
                                        <img src="/ru/images/person1.jpg" class="rd" alt="Person">
                                    </div>
                                    <div class="info">
                                        <p class="mr-b-6">"Просто потрясающий квест! Надо было видеть, как у нас горели глаза! По-настоящему погрузились в настроение"</p>
                                        <strong>- Ольга</strong>
                                        <br>
                                    </div>
                                </div>
                                <!-- feedback box -->
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img txt-dark2">
                                        <img src="/ru/images/person4.jpg" class="rd" alt="Person">
                                    </div>
                                    <div class="info">
                                        <p class="mr-b-6">"Даже подумать не могли, что прямо за поворотом столько интересного! Классно и необычно погуляли, теперь много могу рассказать друзьям при случае"</p>
                                        <strong>- Вероника</strong>
                                        <br>
                                    </div>
                                </div>
                                <!-- feedback box -->
                            </div>
                        </div>
                        <!-- // END : column //  -->
                    </div>
                    <!-- // END : row //  -->
                </div>
                <!-- // END : container //  -->
            </section>
            <!-- / Content section -->
            <section class="pos-rel pd-b-50" data-rgen-sm="pd-tb-small" id="quests">
                <div class="container pos-rel z1">
                    <div class="flex-row gt40 mb20">
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=ah-arbat"> -->
                                <a href="/moscow/questy-po-gorodu/ah-arbat">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/quests/ah-arbat/people01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/ah-arbat.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place">
                                                            <span>Квест по сердцу столицы</span>
                                                        </div>
                                                        <span class="title">Ах, Арбат!</span>
                                                        <div class="division">Исторический центр Москвы – настоящая сокровищница любопытных фактов. Квест по Старому Арбату удивит вас яркими красками и необычными историями!</div>
                                                    </div>
                                                </div>
                                                <div class="module-stats">
                                                    <div class="description">Исторический центр Москвы – настоящая сокровищница любопытных фактов. Квест по Старому Арбату удивит вас яркими красками и необычными историями!											</div>
                                                    <div class="address">ст. м. Смоленская (выход на Арбат)</div>
                                                    <div class="subway-item">
                                                        <div class="icon vt_sinyaya">м</div>
                                                        Смоленская											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="">
                                    <div class="price flex-row align-c">
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-rub txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">299</p>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <img class="group inline" alt="количество игроков" src="/ru/images/group.png">
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">2-6</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                                        <p class="mr-b-0 title small txt-white">
                                                            10<sup>+</sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-map-marker txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center">2 км</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/moscow/questy-po-gorodu/ah-arbat" class="button">О квесте</a>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=tayny-patriarshih"> -->
                                <a href="/moscow/questy-po-gorodu/tayny-patriarshih">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/quests/tayny-patriarshih/people01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/teni-patriarshih.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place">
                                                            <span>Прогулка сквозь время</span>
                                                        </div>
                                                        <span class="title">Тайны Патриарших</span>
                                                        <div class="division">Патриаршие пруды – район особенный, мистический. И поныне звон церковных колоколов смешивается здесь с завываниями привидений, а странностей – не перечесть.</div>
                                                    </div>
                                                </div>
                                                <div class="module-stats">
                                                    <div class="description">Патриаршие пруды – район особенный, мистический. И поныне звон церковных колоколов смешивается здесь с завываниями привидений, а странностей – не перечесть.											</div>
                                                    <div class="address">ст. м. Тверская / Пушкинская (Новопушкинский сквер)</div>
                                                    <div class="subway-item">
                                                        <div class="icon vt_zelenaya">м</div>
                                                        Тверская / Пушкинская											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="">
                                    <div class="price flex-row align-c">
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-rub txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">459</p>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <img class="group inline" alt="количество игроков" src="/ru/images/group.png">
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">2-6</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                                        <p class="mr-b-0 title small txt-white">
                                                            14<sup>+</sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-map-marker txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center">2 км</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/moscow/questy-po-gorodu/tayny-patriarshih" class="button">О квесте</a>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=teni-proshlogo"> -->
                                <a href="/moscow/questy-po-gorodu/teni-proshlogo">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/quests/teni-proshlogo/people01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/teni-proshlogo.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place">
                                                            <span>Таинственная история</span>
                                                        </div>
                                                        <span class="title">Тени прошлого</span>
                                                        <div class="division">Однажды в ваших головах поселился робкий голос, шепот, который преследовал вас даже во снах. Сегодня вам впервые удалось различить слова...</div>
                                                    </div>
                                                </div>
                                                <div class="module-stats">
                                                    <div class="description">Однажды в ваших головах поселился робкий голос, шепот, который преследовал вас даже во снах. Сегодня вам впервые удалось различить слова...											</div>
                                                    <div class="address">ст. м. Пушкинская / Тверская (Пушкинский сквер)</div>
                                                    <div class="subway-item">
                                                        <div class="icon vt_purple">м</div>
                                                        Пушкинская / Тверская											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="">
                                    <div class="price flex-row align-c">
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-rub txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">379</p>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <img class="group inline" alt="количество игроков" src="/ru/images/group.png">
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">1-3</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                                        <p class="mr-b-0 title small txt-white">
                                                            14<sup>+</sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-map-marker txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center">2 км</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/moscow/questy-po-gorodu/teni-proshlogo" class="button">О квесте</a>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=razgulnaya-sretenka"> -->
                                <a href="/moscow/questy-po-gorodu/razgulnaya-sretenka">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/quests/razgulnaya-sretenka/people01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/razgulnaya-sretenka.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place">
                                                            <span>Исторический квест</span>
                                                        </div>
                                                        <span class="title">Разгульная Сретенка</span>
                                                        <div class="division">Старинный квартал «красных фонарей» в самом центре Москвы! Не верите? Совершите прогулку по Сретенке и узнайте, как развлекались москвичи на закате Российской империи!</div>
                                                    </div>
                                                </div>
                                                <div class="module-stats">
                                                    <div class="description">Старинный квартал «красных фонарей» в самом центре Москвы! Не верите? Совершите прогулку по Сретенке и узнайте, как развлекались москвичи на закате Российской империи!											</div>
                                                    <div class="address">м. Трубная</div>
                                                    <div class="subway-item">
                                                        <div class="icon vt_salat">м</div>
                                                        м. Трубная											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="">
                                    <div class="price flex-row align-c">
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-rub txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">379</p>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <img class="group inline" alt="количество игроков" src="/ru/images/group.png">
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">1-6</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                                        <p class="mr-b-0 title small txt-white">
                                                            18<sup>+</sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-map-marker txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center">3 км</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/moscow/questy-po-gorodu/razgulnaya-sretenka" class="button">О квесте</a>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=okno-v-modern"> -->
                                <a href="/moscow/questy-po-gorodu/okno-v-modern">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/quests/okno-v-modern/people01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/okno-v-modern.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place">
                                                            <span>Квест по выставке</span>
                                                        </div>
                                                        <span class="title">Окно в модерн</span>
                                                        <div class="division">Увлекательный квест, посвящённый творчеству Антонио Гауди. Познакомьтесь с испанским модерном и получите шанс выиграть поездку в Барселону!</div>
                                                    </div>
                                                </div>
                                                <div class="module-stats">
                                                    <div class="description">Увлекательный квест, посвящённый творчеству Антонио Гауди. Познакомьтесь с испанским модерном и получите шанс выиграть поездку в Барселону!											</div>
                                                    <div class="address">ул. Петровка, 25</div>
                                                    <div class="subway-item">
                                                        <div class="icon vt_seraya">м</div>
                                                        м. Чеховская											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="">
                                    <div class="price flex-row align-c">
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-rub txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">0</p>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <img class="group inline" alt="количество игроков" src="/ru/images/group.png">
                                                    <p class="title title-sub mini mr-b-0 text-center" data-rgen-sm="medium">1-6</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col-md-6 flex-col-sm-12">
                                            <div class="flex-row">
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                                        <p class="mr-b-0 title small txt-white">
                                                            14<sup>+</sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6 flex-col-sm-6">
                                                    <i class="fa fa-map-marker txt-dark2"></i>
                                                    <p class="title title-sub mini mr-b-0 text-center">1 км</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/moscow/questy-po-gorodu/okno-v-modern" class="button">О квесте</a>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <a class="add-favorites user_favorite" data-id="224"></a>
                            <div class=" item item--real scrollable-objects__list__item">
                                <div class="quest-statuses"></div>
                                <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=#"> -->
                                <a href="#">
                                    <div class="image">
                                        <div class="selphie">
                                            <div class="selphie-wrapper">
                                                <img src="/ru/images/" alt="">
                                            </div>
                                        </div>
                                        <div class="img" style="background-image:url(/ru/images/gost-iz-budushchego.jpg);background-position: top center;"></div>
                                        <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                                            <div class="content_empty">
                                                <div class="module-title">
                                                    <div class="module-rating with-icon">
                                                        <span class="rating" data-rating="">
                                                            <img src="/ru/images/icons/holidays.png">
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <div class="place_empty">
                                                            <span>StreetAdventure</span>
                                                        </div>
                                                        <span class="title">Гость из будущего</span>
                                                        <div class="division"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="module-price" style="padding:18px 0px;">
                                    <p class="title title-sub mini mr-b-0 lh-1 text-center v-razrabotke" data-rgen-sm="medium">СОВСЕМ СКОРО</p>
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                    </div>
                    <!-- // END : row //  -->
                </div>
            </section>
            <section class="pos-rel pd-tb-0" data-rgen-sm="pd-tb-small align-c" id="download">
                <div class="container pos-rel z1">
                    <div class="flex-row gt20 mb20 middle-md">
                        <div class="flex-col-md-6">
                            <div class="flex-row gt20 middle-md">
                                <div class="flex-col-md-3 align-c">
                                    <img src="/ru/images/logo-sign.png" data-rgen-sm="mr-auto" class="max-px-w100 inline" alt="app-icon">
                                </div>
                                <!-- // END : column //  -->
                                <div class="flex-col-md-9">
                                    <h2 class="title mini mr-0">Приключения ждут!</h2>
                                    <p class="title-sub small mr-0">Включись прямо сейчас</p>
                                </div>
                                <!-- // END : column //  -->
                            </div>
                            <!-- // END : row //  -->
                            <hr>
                            <p class="title-sub" data-rgen-sm="small">Установи бесплатное приложение, выбери квест и с головой окунись в игру! Хитросплетения историй и разноплановые загадки на фоне городских панорам - рецепт отличного вечера для компании.</p>
                            <a href="https://appsto.re/ru/_NQLdb.i" target="_blank" class="appstore-btn app-apple" onclick="yaCounter44882842.reachGoal('GOAPPSTORE');ga('send', 'event', 'Button', 'GoAppStore'); return true;">
                                <i class="fa fa-mobile"></i>
                                <small>Скачай в</small>
                                App Store
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=ru.streatadventure.android" target="_blank" class="appstore-btn app-google-play" onclick="yaCounter44882842.reachGoal('GoGooglePlay'); ga('send', 'event', 'Button', 'GoGooglePlay'); return true;">
                                <i class="google-play-icon">
                                    <img src="/ru/images/google-play.png" alt="">
                                </i>
                                <small>Скачай в</small>
                                Google play
                            </a>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-5 flex-col-md-offset-1">
                            <div class="pos-rel rd-5 overflow-hidden">
                                <a href="https://www.youtube.com/watch?v=-3FaQrPsLvw" class="full-wh flex-cc video-popup" onclick="yaCounter44882842.reachGoal('VIDEOSTART'); ga('send', 'event', 'Video', 'VideoStart');">
                                    <span class="sq50 btn-white flex-cc solid bdr-2 rd fs20">
                                        <i class="fa fa-play mr-l-4"></i>
                                    </span>
                                </a>
                                <img src="/ru/images/onas_skills-450x450.jpg" class="img-responsive" alt="image" data-rgen-sm="mr-auto">
                            </div>
                        </div>
                        <!-- // END : column //  -->
                    </div>
                    <!-- // END : row //  -->
                </div>
                <!-- // END : container //  -->
            </section>
            <!--
            ************************************************************
            * Content section
            ************************************************************ -->
            <section class="pos-rel pd-b-0 pd-t-100" data-rgen-sm="pd-t-0 pd-b-0" id="main_fishki">
                <div class="container">
                    <!--=========================================
		=            Content section - 1            =
		==========================================-->
                    <div class="w75 mr-auto align-c">
                        <h2 class="title">Уникальное мобильное приложение для квестов</h2>
                        <p class="title-sub small lh-2">Платформа специально разработана для квестов! Большой набор игровых механик позволяет удобно организовывать увлекательные приключения!</p>
                        <hr class="mr-tb-50">
                    </div>
                    <div class="flex-row middle-md mb20">
                        <div class="flex-col-md-3">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/interactive.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n" data-rgen-sm="mr-b-0">Интерактив</h3>
                                    <p class="mr-0">Разные типы вопросов ответов. Интересно решать!</p>
                                </div>
                            </div>
                            <!-- info box -->
                            <hr class="mr-t-30 mr-b-20">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/kak-v-detstbe.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n">Играть как в детстве!</h3>
                                    <p class="mr-0">Горячо-холодно, поиск по карте и другие фишки</p>
                                </div>
                            </div>
                            <!-- info box -->
                            <hr class="mr-t-30 mr-b-20">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/modern.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n">Современно</h3>
                                    <p class="mr-0">Квест автоматизирован. Итоги подведёт непредвзятый судья - компьютер!</p>
                                </div>
                            </div>
                            <!-- info box -->
                        </div>
                        <!-- column -->
                        <div class="flex-col-md-6 align-c">
                            <img src="/ru/images/main-fishki-screen.png" class="mr-auto" alt="image">
                        </div>
                        <!-- / column -->
                        <div class="flex-col-md-3">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/clock.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n">Когда угодно!</h3>
                                    <p class="mr-0">Играйте, когда удобно вам! Никакой предварительной записи и прочей ерунды.</p>
                                </div>
                            </div>
                            <!-- info box -->
                            <hr class="mr-t-30 mr-b-20">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/voiced.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n">Можно не вчитываться</h3>
                                    <p class="mr-0">Вопросы квеста озвучены. Можно просто слушать!</p>
                                </div>
                            </div>
                            <!-- info box -->
                            <hr class="mr-t-30 mr-b-20">
                            <div class="info-obj img-t g10 mini align-c mr-b-20">
                                <div class="img txt-color1">
                                    <span class="iconwrp">
                                        <img src="/ru/images/icons/offline.png" alt="">
                                    </span>
                                </div>
                                <div class="info">
                                    <h3 class="title tiny bold-n">Можно оффлайн</h3>
                                    <p class="mr-0">Квест скачивается заранее. Мобильный интернет для игры не требуется!</p>
                                </div>
                            </div>
                            <!-- info box -->
                        </div>
                        <!-- column -->
                    </div>
                    <!-- / row -->
                </div>
                <!-- / container -->
            </section>
            <!-- / Content section -->
            <!-- ************** END : Content section **************  -->
            <section class="pos-rel pd-b-0 pd-t-100" data-rgen-sm="pd-tb-small" id="testimonials">
                <div class="container pos-rel z1 align-c">
                    <div class="w-75 mr-auto align-c mr-b-50">
                        <h4 class="title mini mr-0 bold-n">Отзывы</h4>
                        <h2 class="title" data-rgen-sm="medium">Что думают наши клиенты</h2>
                    </div>
                    <!-- // END : title //  -->
                    <!--
			************************************************************
			* carousel-widget
			************************************************************ -->
                    <div class="carousel-widget ctrl-1 align-c pos-rel" data-items="2" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,2|768,2|992,2|1200,2" data-margin="30" data-autoplay="false" data-hauto="true" data-in="false" data-out="false" data-center="false">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">У нас все прошло хорошо, все понравилось, все остались в восторге! Действительно одни приятные эмоции и даже погода быстро отошла на второй план, забыли о ней и шли по загадкам.</p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person2.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Виктория</h3>
                                                <em class="fs12">о квесте “Ах, Арбат!”</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">Так круто мы еще не гуляли)Новые места,интересные факты.Над некоторыми вопросами пришлось попотеть,но от этого азарт только усиливался!Спасибо огромное команде Street Adventure!)</p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person3.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Юля</h3>
                                                <em class="fs12">о квесте “Тени прошлого”</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">Все очень понравилось, тем более что погода на Патриарших была чудесная. Задания придуманы грамотно – не совсем легко, но посильно.</p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person4.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Клара</h3>
                                                <em class="fs12">о квесте “Тайны Патриарших”</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">Солнечного 20 мая прошли квест Ах, Арбат (начало в м.Смоленская). Оооочень понравилось! Всё четко)) Погода шептала и мы по новому взглянули на Москву!</p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person5.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Татьяна</h3>
                                                <em class="fs12">о квесте “Ах, Арбат”</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">Классный квест, очень понравилось, что организаторы по желанию меняют маршрут. Я делал подарок своей девушке, который заключался в заказе квеста для нее и ее друзей, но непростого, а с особенным сюрпризом в середине маршрута (о котором, конечно, никто не догадывался). И организаторы мне очень помогли сделать так, что она была по-настоящему счастлива! Спасибо компании, здесь работают потрясающие люди! </p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person6.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Денис</h3>
                                                <em class="fs12">о квесте “Тени прошлого”</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <div class="info-obj img-l g20 mini align-l">
                                    <div class="img">
                                        <span class="iconwrp txt-color1">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="info">
                                        <p class="fs18">Мы с друзьями уже делали квесты от streetadventure на протяжение года! Мы все просто в восторге! Были квесты по легче, но были и такие где надо было поломать голову над вопросами! Маршруты просто замечательны! Очень нравиться ходить по главной, шумной улице и через секунды сворачивать и находиться на тихом переулке. В итоге, мы постоянно вспоминает все прогулки по квестам! Ждем новых!!!</p>
                                        <hr>
                                        <div class="mr-t-10">
                                            <img src="/ru/images/person7.jpg" class="rd inline-block align-m mr-r-10 max-px-w50" alt="Person">
                                            <div class="inline-block align-m">
                                                <h3 class="bold-1 fs16 mr-0">Нина</h3>
                                                <em class="fs12"></em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // END : Info object //  -->
                                <!-- // END : column //  -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <!-- /.carousel-widget -->
                    <!-- ************** END : carousel-widget **************  -->
                    <!-- <hr>

			<ul class="logo-list gt-medium size-medium reset op-05">
				<li><img src="/ru/images/award-logo-01.png" alt="award"></li>
				<li><img src="/ru/images/award-logo-02.png" alt="award"></li>
			</ul>

			<hr> -->
                </div>
                <!-- container -->
                <!-- <img src="/ru/images/feedback-bg.png" class="w100 -mr-t-50" data-rgen-sm="hide" alt="bg"> -->
            </section>
            <section class="pd-tb-50 pos-rel" data-rgen-sm="pd-tb-small" id="faq">
                <div class="container pos-rel z1">
                    <!--=================================
			=            FAQ section            =
			==================================-->
                    <h2 class="title small mr-b-40" data-rgen-sm="medium">Есть вопрос? - Есть ответ!</h2>
                    <div class="flex-row gt40 mb20">
                        <div class="flex-col-md-8">
                            <!-- accordion-widget -->
                            <div class="accordion-widget acc-style1" data-acc-handle="y" data-acc-openclass="ti-arrow-circle-down" data-acc-closeclass="ti-arrow-circle-up">
                                <div class="acc-block">
                                    <div class="acc-hd">
                                        <div class="info-obj img-l mid g20 mini">
                                            <div class="img">
                                                <span class="iconwrp">
                                                    <img src="/ru/images/icons/how_to_play.png" alt="">
                                                </span>
                                            </div>
                                            <h3 class="info bold-1 txt-upper fs16">Как играть?</h3>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <p>Скачай бесплатное приложение из AppStore или PlayStore, выбери квест в своём городе, собери команду и приступай к игре! Вопросы и задания ты увидишь прямо в приложении, а ответы придётся искать в городе. Перед началом первого квеста ты увидишь более подробную инструкцию. В целом - ничего сложного, но при этом очень увлекательно!</p>
                                    </div>
                                    <!-- / content -->
                                </div>
                                <!-- / acc-block -->
                                <div class="acc-block">
                                    <div class="acc-hd">
                                        <div class="info-obj img-l mid g20 mini">
                                            <div class="img">
                                                <span class="iconwrp">
                                                    <img src="/ru/images/icons/clock.png" alt="">
                                                </span>
                                            </div>
                                            <h3 class="info bold-1 txt-upper fs16">Когда можно пройти квест?</h3>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <p>В любой момент! Квесты доступны в приложении круглосуточно, и только ты решаешь, когда начать игру. Не нужно ничего бронировать, да и опоздать на наш квест никак не получится.</p>
                                    </div>
                                    <!-- / content -->
                                </div>
                                <!-- / acc-block -->
                                <div class="acc-block">
                                    <div class="acc-hd">
                                        <div class="info-obj img-l mid g20 mini">
                                            <div class="img">
                                                <span class="iconwrp">
                                                    <img src="/ru/images/icons/faq_prepare.png" alt="">
                                                </span>
                                            </div>
                                            <h3 class="info bold-1 txt-upper fs16">Как подготовиться к квесту?</h3>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <p>Никакая особенная подготовка не требуется. Советуем надеть удобную обувь и как следует зарядить гаджет: он станет твоим проводником в удивительный мир игры, а это непростая работа :)</p>
                                    </div>
                                    <!-- / content -->
                                </div>
                                <!-- / acc-block -->
                                <div class="acc-block">
                                    <div class="acc-hd">
                                        <div class="info-obj img-l mid g20 mini">
                                            <div class="img">
                                                <span class="iconwrp">
                                                    <img src="/ru/images/icons/faq_group.png" alt="">
                                                </span>
                                            </div>
                                            <h3 class="info bold-1 txt-upper fs16">Сколько человек может играть?</h3>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <p>
                                            Идеальная команда для спасения мира - 2-6 человек. Но ты можешь и играть в одиночку, если уверен в своих силах. А если планируется большая компания, можно заказать <a href="/ru/vozmozhnosti" class="link-dotted-color1 txt-color1">групповой квест</a>
                                            : в этом случае вы разделитесь на команды, опытный ведущий встретит и поможет влиться в игру, а для победителей мы подготовим приятные призы.
                                        </p>
                                    </div>
                                    <!-- / content -->
                                </div>
                                <!-- / acc-block -->
                            </div>
                            <!-- / accordion-widget -->
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-4">
                            <div class="info-obj img-t g10 medium align-c">
                                <div class="img">
                                    <span class="iconwrp txt-color1">
                                        <i class="pe-7s-comment"></i>
                                    </span>
                                </div>
                                <div class="info">
                                    <p class="title-sub mr-b-10">Интересно что-то ещё?</p>
                                    <p>Всегда рады помочь!</p>
                                    <p>
                                        <a href="#popup-faq" target="_blank" class="btn btn-default large btn-color1 bold-n set-popup" onclick="yaCounter44882842.reachGoal('FormQuestionOpen'); ga('send', 'event', 'Form', 'FormQuestionOpen');">Задать вопрос</a>
                                        <br>
                                    </p>
                                    <!-- <p><a href="" target="_blank">Подробнее <i class="fa fa-long-arrow-right"></i></a></p> -->
                                </div>
                            </div>
                            <!-- // END : Info object //  -->
                        </div>
                        <!-- // END : column //  -->
                        <div id="popup-faq" class="white-popup-block popup-content mfp-hide">
                            <div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
                                <p class="sq90 inline-flex flex-cc fs80 mr-0 txt-color1">
                                    <i class="pe-7s-mail"></i>
                                </p>
                                <h2 class="title mr-0" data-rgen-sm="small">ЗАДАЙТЕ НАМ ВОПРОС</h2>
                            </div>
                            <div class="pop-body" data-rgen-sm="pd-20">
                                <!-- form-block -->
                                <div class="form-block">
                                    <form action="/ru/formdata.php" class="form-widget">
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
                                                <textarea class="form-control" data-label="Message" required data-msg="Введите вопрос." name="message" placeholder="Ваш вопрос" cols="30" rows="10"></textarea>
                                            </div>
                                            <input type="hidden" name="formtype" value="2">
                                        </div>
                                        <button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block">
                                            <i class="fa fa-envelope-o"></i>
                                            ОТПРАВИТЬ
                                        </button>
                                    </form>
                                    <!-- / form -->
                                </div>
                                <!-- / form block -->
                            </div>
                        </div>
                        <!-- /#popup-content -->
                    </div>
                    <!-- // END : row //  -->
                    <!-- ======= END : FAQ section =======  -->
                </div>
                <!-- container -->
            </section>
            <section class="pd-0 pos-rel bg-color1" data-rgen-sm="pd-tb-small align-c" id="call-to-action">
                <div class="container typo-light pos-rel z2">
                    <div class="flex-row gt40 middle-md">
                        <div class="flex-col-md-3" data-rgen-sm="align-c">
                            <img src="/ru/images/iphone-img-08.png" class="mr-t-50 img" data-rgen-sm="mr-b-20" alt="phone image">
                        </div>
                        <div class="flex-col-md-6" data-rgen-sm="mr-b-20">
                            <h2 class="title middle lh-1" data-rgen-sm="small">
                                Скачай бесплатное приложение,<br>выбери приключение и стартуй!
                            </h2>
                            <div class="flex-col-md-12">
                                <hr class="light bdr-op-3">
                            </div>
                            <!-- <a href="#" class="link-white fs16">Заказать квест на день рождения <i class="fa fa-long-arrow-right mr-l-10"></i></a><br> -->
                            <a href="/ru/moscow/shkolnie-kvesti" class="link-white fs16 lh-1">
                                Заказать образовательный квест для школьников<i class="fa fa-long-arrow-right mr-l-10"></i>
                            </a>
                            <br>
                            <a href="/ru/moscow/korporativnie-kvesti-timbildingi" class="link-white fs16">
                                Заказать квест на корпоратив <i class="fa fa-long-arrow-right mr-l-10"></i>
                            </a>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-3">
                            <div class="flex-row">
                                <div class="flex-col-md-12" data-rgen-md="align-c" data-rgen-sm="align-c">
                                    <a href="https://appsto.re/ru/_NQLdb.i" target="_blank" class="appstore-btn app-apple" onclick="yaCounter44882842.reachGoal('GOAPPSTORE');ga('send', 'event', 'Button', 'GoAppStore'); return true;">
                                        <i class="fa fa-mobile"></i>
                                        <small>Скачай в</small>
                                        App Store
                                    </a>
                                </div>
                            </div>
                            <div class="flex-row">
                                <div class="flex-col-md-12" data-rgen-md="align-c">
                                    <a href="https://play.google.com/store/apps/details?id=ru.streatadventure.android" target="_blank" class="appstore-btn app-google-play" onclick="yaCounter44882842.reachGoal('GoGooglePlay'); ga('send', 'event', 'Button', 'GoGooglePlay'); return true;">
                                        <i class="google-play-icon">
                                            <img src="/ru/images/google-play.png" alt="">
                                        </i>
                                        <small>Скачай в</small>
                                        Google play
                                    </a>
                                </div>
                            </div>
                            <p class="mr-t-20 lh-1" data-rgen-md="fs16 align-c">Стоимость от 0 до 459 рублей</p>
                        </div>
                        <!-- // END : column //  -->
                    </div>
                    <!-- // END : row //  -->
                </div>
                <!-- container -->
                <b class="full-wh op-01 bg-cc" data-bg="/ru/images/pattern-01.png"></b>
            </section>
            <!-- Google map -->
            <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
            <div id="map" style="width: 100%;" class="vh80"></div>
            <script type="text/javascript">
                
	// var locations = [
	//     ['<img src="http://streetadventure.com/ru/images/quest_image.jpg"/><a href="http://streetadventure.ru/?city_id=1">Moscow Quests</a>', 55.75582, 37.6173, 4]
	// ];
	var locations = [
		['<div> <div class="infobox "> <div class="inner"> <div class="mev_image"> <a href="/ru/moscow/questy-po-gorodu/ah-arbat" class="description"> <div class="meta"> <div class="price">299 руб.</div> <h2>Ах, Арбат!</h2> <figure>ст. м. Смоленская (выход на Арбат)</figure> <i class="fa fa-angle-right"></i> </div> </a> <img src="http://streetadventure.com/ru/images/ah-arbat.jpg"></div> </div> </div> </div>', 55.747933, 37.5836873, 4],
		['<div> <div class="infobox "> <div class="inner"> <div class="mev_image"> <a href="/ru/moscow/questy-po-gorodu/tayny-patriarshih" class="description"> <div class="meta"> <div class="price">459 руб.</div> <h2>Тайны Патриарших</h2> <figure>м. Пушкинская / Тверская</figure> <i class="fa fa-angle-right"></i> </div> </a> <img src="http://streetadventure.com/ru/images/teni-patriarshih.jpg"></div> </div> </div> </div>', 55.765078, 37.60429, 4],
		['<div> <div class="infobox "> <div class="inner"> <div class="mev_image"> <a href="/ru/moscow/questy-po-gorodu/teni-proshlogo" class="description"> <div class="meta"> <div class="price">379 руб.</div> <h2>Тени прошлого</h2> <figure>м. Пушкинская / Тверская</figure> <i class="fa fa-angle-right"></i> </div> </a> <img src="http://streetadventure.com/ru/images/filosofskiy-kamen.jpg"></div> </div> </div> </div>', 55.765582, 37.605664, 4],
		['<div> <div class="infobox "> <div class="inner"> <div class="mev_image"> <a href="/ru/moscow/questy-po-gorodu/okno-v-modern" class="description"> <div class="meta"> <div class="price">0 руб.</div> <h2>Окно в модерн</h2> <figure>ул. Петровка, 25 (м. Чеховская)</figure> <i class="fa fa-angle-right"></i> </div> </a> <img src="http://streetadventure.com/ru/images/okno-v-modern.jpg"></div> </div> </div> </div>', 55.767357, 37.614089, 4],
		['<div> <div class="infobox "> <div class="inner"> <div class="mev_image"> <a href="/ru/moscow/questy-po-gorodu/razgulnaya-sretenka" class="description"> <div class="meta"> <div class="price">379 руб.</div> <h2>Разгульная Сретенка</h2> <figure>м. Трубная</figure> <i class="fa fa-angle-right"></i> </div> </a> <img src="http://streetadventure.com/ru/images/razgulnaya-sretenka.jpg"></div> </div> </div> </div>', 55.767939, 37.621884, 4],
	];

	var lat1 = '55.757835'
	var long1 = '37.594312'

	var map = new google.maps.Map(document.getElementById('map'), {
		scrollwheel: false,
	    zoom: 14,
	    center: new google.maps.LatLng(lat1, long1),
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var infowindow = new google.maps.InfoWindow();
	var marker, i;
	for (i = 0; i < locations.length; i++) {
	    marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
	        icon : '/ru/images/marker.png'
	    });

	    // http://en.marnoto.com/2014/09/5-formas-de-personalizar-infowindow.html
		google.maps.event.addListener(infowindow, 'domready', function() {

		   // Reference to the DIV which receives the contents of the infowindow using jQuery
		   var iwOuter = $('.gm-style-iw');

		   /* The DIV we want to change is above the .gm-style-iw DIV.
		    * So, we use jQuery and create a iwBackground variable,
		    * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
		    */
		   var iwBackground = iwOuter.prev();


		   // iwOuter.closest('div').css('width', '533px');

		   // iwOuter.parent('div').css('width', '545px');

		   // Remove the background shadow DIV
		   iwBackground.children(':nth-child(2)').css({'display' : 'none'});
		   iwBackground.children(':nth-child(3)').css({'display' : 'none'});
		   iwBackground.children(':nth-child(1)').css({'display' : 'none'});

		   // Remove the white background DIV
		   iwBackground.children(':nth-child(4)').css({'display' : 'none'});


		   	// Moves the shadow of the arrow 76px to the left margin 
			// iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

			// // Moves the arrow 76px to the left margin 
			// iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
		});


	    google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	            infowindow.setContent(locations[i][0]);
	            infowindow.open(map, marker);
	        }
	    })(marker, i));

	    if ( i == 0 ) {
			infowindow.setContent(locations[i][0]);
		    infowindow.open(map, marker);
	    }
	}
	
            </script>
            <!-- / Google map -->
            <footer class="pd-t-50 pd-b-0 pos-rel bg-white" data-rgen-sm="pd-tb-small">
                <div class="container" data-rgen-sm="align-c">
                    <div class="flex-row gt20 mb30">
                        <div class="flex-col-md-3">
                            <p>
                                <a href="#" class="inline-block max-px-w180">
                                    <img src="/ru/images/sa-logo.png" class="" alt="logo">
                                </a>
                            </p>
                            <p>
                                Москва, ул. Никольская 4/5<br>109012 Россия
                            </p>
                            <div class="mr-b-20">
                                <a target="_blank" href="https://www.facebook.com/streetadventure/" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a target="_blank" href="#" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1">
                                    <i class="fa fa-vk"></i>
                                </a>
                                <a target="_blank" href="#" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-2">
                            <h2 class="title tiny bold-n">БЫСТРЫЕ ССЫЛКИ</h2>
                            <ul class="list-1">
                                <li>
                                    <a href="#features">О проекте</a>
                                </li>
                                <li>
                                    <a href="#quests">Квесты</a>
                                </li>
                                <li>
                                    <a href="#testimonials">Отзывы</a>
                                </li>
                                <li>
                                    <a href="#faq">Вопрос-ответ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-2">
                            <h2 class="title tiny bold-n">О ПРОЕКТЕ</h2>
                            <ul class="list-1">
                                <li>
                                    <a href="/moscow/o-nas" target="_blank">О нас</a>
                                </li>
                                <li>
                                    <a href="/moscow/novosti" target="_blank">Блог</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-2">
                            <h2 class="title tiny bold-n">ВОЗМОЖНОСТИ</h2>
                            <ul class="list-1">
                                <li>
                                    <a href="/moscow/korporativnie-kvesti-timbildingi">Корпоративы</a>
                                </li>
                                <li>
                                    <a href="/moscow/shkolnie-kvesti">Для школьников</a>
                                </li>
                                <li>
                                    <a href="/moscow/pr-resheniya">PR решения</a>
                                </li>
                                <li>
                                    <a href="/moscow/ploshchadkam">Площадкам</a>
                                </li>
                                <!-- <li><a href="http://kvestik.ru/" target="_blank">White Label</a></li> -->
                            </ul>
                        </div>
                        <!-- // END : column //  -->
                        <div class="flex-col-md-3">
                            <h2 class="title tiny bold-n">НОВОСТИ. ТОЛЬКО ВАЖНЫЕ!</h2>
                            <p>Получайте от нас интересные предложения и новости</p>
                            <!-- form-block -->
                            <div class="form-block">
                                <form action="/ru/formdata.php" class="form-widget" data-formtype="newsletter">
                                    <div class="flex-row gt10">
                                        <div class="flex-col-md-9">
                                            <div class="form-group">
                                                <input class="form-control w-100" data-label="Email" data-msg="Введите ваш e-mail" type="email" name="email" placeholder="Ваш e-mail">
                                            </div>
                                        </div>
                                        <input type="hidden" name="formtype" value="3">
                                        <div class="flex-col-md-3">
                                            <button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block fs22 btn-reset">
                                                <i class="fa fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- / row -->
                                </form>
                                <!-- / form -->
                            </div>
                            <!-- form-block -->
                            <a href="#" target="_blank" class="fs11">Политика конфиденциальности</a>
                        </div>
                        <!-- // END : column //  -->
                    </div>
                    <!-- // END : row //  -->
                    <hr>
                    <p class="align-c">
                        <a href="#" target="_blank">Городские квесты-приключения StreetAdventure</a>
                        &copy;2009-<script>
                            document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
            </footer>
        </div>
        <!-- /#page -->

<? get_footer(); ?>
