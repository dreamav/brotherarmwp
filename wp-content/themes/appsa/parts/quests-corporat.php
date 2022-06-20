<section class="pos-rel pd-b-0 pd-t-50" data-rgen-sm="pd-tb-small" id="corporative_programs">
   	<div class="container pos-rel z1">
		<div class="w75 mr-auto align-c mr-b-60">
			<p class="title-sub lh-2" data-rgen-sm="fs18">Организуем тимбилдинги и квесты различных форматов.<br>Каждое мероприятие - неповторимо!<br>
			Подберём идеальную программу для решения Ваших задач.</p>
		</div>
	</div>
   
   
   
    <div class="container pos-rel z1">
        <!-- Tab structure -->
        <div class="tabs-auto tab-style3">
<?php
$query = new WP_Query(array(
    'post_type'=> 'quests',
    'order'    => 'ASC',
    'tax_query' => array(
                     array(
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => 'corporat',
                        'operator' => 'IN',
                    ),
                ),


));
?>

<?php if( $query->have_posts() ): ?>
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <?php
            $field = get_field_object('c_type');
            $value = $field['value'];
            $label = $field['choices'][ $value ];
            $arr[] = $label;
        ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <ul class="tb-list">      
        <?php $result = array_unique($arr); 
            sort($result);
            foreach($result as $key=>$value): ?>
             
              <li class="tb txt-upper"><?php echo $value; ?></li>
            
        <?php endforeach; ?>
              <li class="tb txt-upper">УНИКАЛЬНЫЕ</li>

    </ul>
<?php endif ?>

<!-- /.tb-list -->
            <div class="tb-content">


<?php
$query = new WP_Query(array(
    'post_type'=> 'quests',
    'order'    => 'ASC',
    'tax_query' => array(
                     array(
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => 'corporat',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 'c_type',
			'value' => array('c_type_activ'),
			'compare' => 'IN'
		)
	)

));
?>

<?php if( $query->have_posts() ): ?>
                           
            

                <div class="tb-pn">

                    <!-- carousel-widget 	 -->
                    
                    
                    <div class="carousel-widget ctrl-1 align-c pos-rel" data-items="1" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,2|768,2|992,3|1200,3" data-margin="30" data-autoplay="false" data-hauto="false" data-in="false" data-out="false" data-center="false">
                        <div class="owl-carousel">
                            
    <?php while( $query->have_posts() ) : $query->the_post(); ?>

                                
                            <div class="item">
								<div class="info-obj img-t g20 align-l mr-0">
									<div class="img pos-rel objeck">
										<div class="pos-abs pd-20 pd-b-0 w100 h100" data-gradient="y" data-g-colors="rgba(0,0,0,0)|rgba(0, 153, 229, 0.4)">
											<div class="pos-abs entry-meta">
												<h2 class="title small txt-white">“<?php the_title(); ?>”</h2>
											</div>
										</div>
										<?php echo get_the_post_thumbnail( $page->ID, 'large', true); ?>
									</div>
									<div class="info bdr-l bdr-r bdr-b">
										<p class="bold-1 fs16 mr-b-10"><?= get_post_meta(get_the_ID(), 'c_lozung', true); ?></p>
										<div class="flex-row mr-b-10">
											<div class="flex-col-md-8 flex-col-sm-8 flex-col-xs-8">
												<span class="bold-5">время: <?= get_post_meta(get_the_ID(), 'c_times', true); ?></span><br>
												<span><?= get_post_meta(get_the_ID(), 'c_position', true); ?></span>
											</div>
											<div class="flex-col-md-4 flex-col-sm-4 flex-col-xs-4 flex-cr">
            <a href="#popup-corpprog" class="btn btn-primary solid txt-upper small set-popup rd-20" 
              data-title='<?php the_title(); ?>' 
               data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
              data-opisanie='<?= get_post_meta(get_the_ID(), 'c_desc', true); ?>' 
              data-mechanika='<?= get_post_meta(get_the_ID(), 'c_meh', true); ?>' 
              data-final='<?= get_post_meta(get_the_ID(), 'c_final', true); ?>'>Детали</a>
											</div>
										</div>
									</div>
								</div><!-- / info object -->
							</div><!-- /.item -->



                              

<?php endwhile; wp_reset_postdata(); ?>
                          
                           </div>
                    </div>
                </div>

<?php endif ?>

<?php
$query = new WP_Query(array(
    'post_type'=> 'quests',
    'order'    => 'ASC',
    'tax_query' => array(
                     array(
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => 'corporat',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 'c_type',
			'value' => array('c_type_quest'),
			'compare' => 'IN'
		)
	)

));
?>

<?php if( $query->have_posts() ): ?>
                           
            

                <div class="tb-pn">

                    <!-- carousel-widget 	 -->
                    
                    
                    <div class="carousel-widget ctrl-1 align-c pos-rel" data-items="1" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,2|768,2|992,3|1200,3" data-margin="30" data-autoplay="false" data-hauto="false" data-in="false" data-out="false" data-center="false">
                        <div class="owl-carousel">
                            
    <?php while( $query->have_posts() ) : $query->the_post(); ?>

                                
                            <div class="item">
								<div class="info-obj img-t g20 align-l mr-0">
									<div class="img pos-rel objeck">
										<div class="pos-abs pd-20 pd-b-0 w100 h100" data-gradient="y" data-g-colors="rgba(0,0,0,0)|rgba(0, 153, 229, 0.4)">
											<div class="pos-abs entry-meta">
												<h2 class="title small txt-white">“<?php the_title(); ?>”</h2>
											</div>
										</div>
										<?php echo get_the_post_thumbnail( $page->ID, 'large', true); ?>
									</div>
									<div class="info bdr-l bdr-r bdr-b">
										<p class="bold-1 fs16 mr-b-10"><?= get_post_meta(get_the_ID(), 'c_lozung', true); ?></p>
										<div class="flex-row mr-b-10">
											<div class="flex-col-md-8 flex-col-sm-8 flex-col-xs-8">
												<span class="bold-5">время: <?= get_post_meta(get_the_ID(), 'c_times', true); ?></span><br>
												<span><?= get_post_meta(get_the_ID(), 'c_position', true); ?></span>
											</div>
											<div class="flex-col-md-4 flex-col-sm-4 flex-col-xs-4 flex-cr">
            <a href="#popup-corpprog" class="btn btn-primary solid txt-upper small set-popup rd-20" 
              data-title='<?php the_title(); ?>' 
               data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
              data-opisanie='<?= get_post_meta(get_the_ID(), 'c_desc', true); ?>' 
              data-mechanika='<?= get_post_meta(get_the_ID(), 'c_meh', true); ?>' 
              data-final='<?= get_post_meta(get_the_ID(), 'c_final', true); ?>'>Детали</a>
											</div>
										</div>
									</div>
								</div><!-- / info object -->
							</div><!-- /.item -->



                              

<?php endwhile; wp_reset_postdata(); ?>
                          
                           </div>
                    </div>
                </div>

<?php endif ?>



<?php
$query = new WP_Query(array(
    'post_type'=> 'quests',
    'order'    => 'ASC',
    'tax_query' => array(
                     array(
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => 'corporat',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 'c_type',
			'value' => array('c_type_tvor'),
			'compare' => 'IN'
		)
	)

));
?>

<?php if( $query->have_posts() ): ?>
                           
            

                <div class="tb-pn">

                    <!-- carousel-widget 	 -->
                    
                    
                    <div class="carousel-widget ctrl-1 align-c pos-rel" data-items="1" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,2|768,2|992,3|1200,3" data-margin="30" data-autoplay="false" data-hauto="false" data-in="false" data-out="false" data-center="false">
                        <div class="owl-carousel">
                            
    <?php while( $query->have_posts() ) : $query->the_post(); ?>

                                
                            <div class="item">
								<div class="info-obj img-t g20 align-l mr-0">
									<div class="img pos-rel objeck">
										<div class="pos-abs pd-20 pd-b-0 w100 h100" data-gradient="y" data-g-colors="rgba(0,0,0,0)|rgba(0, 153, 229, 0.4)">
											<div class="pos-abs entry-meta">
												<h2 class="title small txt-white">“<?php the_title(); ?>”</h2>
											</div>
										</div>
										<?php echo get_the_post_thumbnail( $page->ID, 'large', true); ?>
									</div>
									<div class="info bdr-l bdr-r bdr-b">
										<p class="bold-1 fs16 mr-b-10"><?= get_post_meta(get_the_ID(), 'c_lozung', true); ?></p>
										<div class="flex-row mr-b-10">
											<div class="flex-col-md-8 flex-col-sm-8 flex-col-xs-8">
												<span class="bold-5">время: <?= get_post_meta(get_the_ID(), 'c_times', true); ?></span><br>
												<span><?= get_post_meta(get_the_ID(), 'c_position', true); ?></span>
											</div>
											<div class="flex-col-md-4 flex-col-sm-4 flex-col-xs-4 flex-cr">
            <a href="#popup-corpprog" class="btn btn-primary solid txt-upper small set-popup rd-20" 
              data-title='<?php the_title(); ?>' 
               data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
              data-opisanie='<?= get_post_meta(get_the_ID(), 'c_desc', true); ?>' 
              data-mechanika='<?= get_post_meta(get_the_ID(), 'c_meh', true); ?>' 
              data-final='<?= get_post_meta(get_the_ID(), 'c_final', true); ?>'>Детали</a>
											</div>
										</div>
									</div>
								</div><!-- / info object -->
							</div><!-- /.item -->



                              

<?php endwhile; wp_reset_postdata(); ?>
                          
                           </div>
                    </div>
                </div>

<?php endif ?>

<div class="tb-pn">
				<div class="flex-row mr-b-40 mb20">
				<div class="flex-col-md-6 flex-col-md-offset-3 last-md">
					<p>Мы открыты для самых нестандартных запросов! Расскажите о задумке, и мы предложим подходящие варианты реализации.</p>
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
								<input type="hidden" name="formtype" value="7">
							</div>
							<button type="submit" class="btn solid btn-default btn-color1 block"><i class="fa fa-envelope-o"></i> ОТПРАВИТЬ</button>
						</form><!-- / form -->
					</div><!-- / form block -->
				</div> <!-- / flex-col -->
				</div> <!-- / flex-row -->
				</div><!-- tab pane -->


</div>
            <!-- / tab content wrapper -->


                       

        </div>
        <!-- / tabs-auto -->
	<div id="popup-corpprog" class="white-popup-block popup-content mfp-hide">
		
		<div class="pop-header pos-abs w100 typo-light align-c sm-pd-30">
			<b data-gradient="y" data-g-colors="rgba(0,0,0,1)|rgba(0,0,0,0)" class="full-wh"></b>
			<h2 class="title small mr-0 pos-rel">HEADER TEXT OF MODAL</h2>
		</div>
		
		<div class="pop-body pd-0 align-l">
			<div class="pop-quest-img mr-auto w100 px-h300 bg-cc bg-cover"></div>

			<!-- <h2 class="title">Simple title text</h2> -->
			<div class="quest-description pd-l-30 pd-r-30 pd-t-30">
				<!-- Tab structure -->
				<div class="tabs-auto tab-style3">
					<ul class="tb-list">
						<li class="tb tb-cor txt-upper">Описание</li>
						<li class="tb tb-cor txt-upper">Механика</li>
						<li class="tb tb-cor txt-upper">Финал</li>
					</ul><!-- /.tb-list -->

					<div class="tb-content">
						<div class="tb-pn program-opisanie">
							
						</div><!-- tab pane -->

						<div class="tb-pn program-mechanika">
													
						</div><!-- tab pane -->

						<div class="tb-pn program-final">
													
						</div><!-- tab pane -->

					</div><!-- / tab content wrapper -->
				</div><!-- / tabs-auto -->					
			</div>
			<div class="quest-form pd-l-30 pd-r-30 pd-t-30 pd-b-30 mr-auto px-w400" data-rgen-sm="w100">
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
							<!-- <div class="form-group">
								<textarea class="form-control" data-label="Message" required data-msg="Введите сообщение." name="message" placeholder="Сообщение" cols="30" rows="10"></textarea>
							</div> -->

							<input type="hidden" name="formtype" value="6">
							<input type="hidden" name="questName" value="">
						</div>
						<button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block"><i class="fa fa-envelope-o"></i> ОТПРАВИТЬ</button>
					</form><!-- / form -->
				</div><!-- / form block -->
			</div>
		</div>
	</div><!-- /#popup-content -->

    </div>
</section>