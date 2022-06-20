<section id="shkola_services" class="pos-rel pd-b-0 pd-t-100" data-rgen-sm="pd-tb-small">
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
                        'terms'    => 'scool',
                        'operator' => 'IN',
                    ),
                ),


));
?>

<?php if( $query->have_posts() ): ?>
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <?php
            $field = get_field_object('s_type');
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
                        'terms'    => 'scool',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 's_type',
			'value' => array('s_type_gor'),
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
                                            <p class="bold-1 fs14 mr-b-10"><?= get_post_meta(get_the_ID(), 's_lozung', true); ?></p>

                                            <div class="flex-row mr-b-10">
                                                <div class="flex-col-md-7 flex-col-xs-7 lh-2">
                                                    <span class="bold-5">
                                                        время: <?= get_post_meta(get_the_ID(), 's_times', true); ?>
                                                    </span>
                                                    <br> 
                                                    <span class="bold-5">
                                                        м. <?= get_post_meta(get_the_ID(), 's_metro', true); ?>
                                                    </span>
                                                </div>
<div class="flex-col-md-5 flex-col-xs-5 flex-cr">
    <a class="btn btn-primary solid txt-upper small set-popup rd-20" href="#popup-questdesc" 
    data-title='<?php the_title(); ?>'
    data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
    data-desc='<?php the_content(); ?>'>Детали</a>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / info object -->

                                </div>
                                <!-- /.item -->



                              

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
                        'terms'    => 'scool',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 's_type',
			'value' => array('s_type_muz'),
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
                                            <p class="bold-1 fs14 mr-b-10"><?= get_post_meta(get_the_ID(), 's_lozung', true); ?></p>

                                            <div class="flex-row mr-b-10">
                                                <div class="flex-col-md-7 flex-col-xs-7 lh-2">
                                                    <span class="bold-5">
                                                        время: <?= get_post_meta(get_the_ID(), 's_times', true); ?>
                                                    </span>
                                                    <br> 
                                                    <span class="bold-5">
                                                        м. <?= get_post_meta(get_the_ID(), 's_metro', true); ?>
                                                    </span>
                                                </div>
<div class="flex-col-md-5 flex-col-xs-5 flex-cr">
    <a class="btn btn-primary solid txt-upper small set-popup rd-20" href="#popup-questdesc" 
    data-title='<?php the_title(); ?>'
    data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
    data-desc='<?php the_content(); ?>'>Детали</a>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / info object -->

                                </div>
                                <!-- /.item -->



                              

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
                        'terms'    => 'scool',
                        'operator' => 'IN',
                    ),
                ),
    'meta_query' => array(
		array(
			'key' => 's_type',
			'value' => array('s_type_park'),
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
                                            <p class="bold-1 fs14 mr-b-10"><?= get_post_meta(get_the_ID(), 's_lozung', true); ?></p>

                                            <div class="flex-row mr-b-10">
                                                <div class="flex-col-md-7 flex-col-xs-7 lh-2">
                                                    <span class="bold-5">
                                                        время: <?= get_post_meta(get_the_ID(), 's_times', true); ?>
                                                    </span>
                                                    <br> 
                                                    <span class="bold-5">
                                                        м. <?= get_post_meta(get_the_ID(), 's_metro', true); ?>
                                                    </span>
                                                </div>
<div class="flex-col-md-5 flex-col-xs-5 flex-cr">
    <a class="btn btn-primary solid txt-upper small set-popup rd-20" href="#popup-questdesc" 
    data-title='<?php the_title(); ?>'
    data-img='<?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                echo $thumb_url[0];
              ?>' 
    data-desc='<?php the_content(); ?>'>Детали</a>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / info object -->

                                </div>
                                <!-- /.item -->



                              

<?php endwhile; wp_reset_postdata(); ?>
                          
                           </div>
                    </div>
                </div>


<?php endif ?>

</div>
            <!-- / tab content wrapper -->


                       

        </div>
        <!-- / tabs-auto -->
        <div id="popup-questdesc" class="white-popup-block popup-content mfp-hide">
            <div class="pop-header pos-abs w100 typo-light align-c sm-pd-30">

                &nbsp;
                <h2 class="title small mr-0 pos-rel">HEADER TEXT OF MODAL</h2>
            </div>
            <div class="pop-body pd-0 align-l">
                <div class="pop-quest-img mr-auto w100 px-h300 bg-cc bg-cover"></div>

                <div class="quest-description pd-l-30 pd-r-30 pd-t-30"></div>
                <div class="quest-form pd-l-30 pd-r-30 pd-t-30 pd-b-30 mr-auto px-w400" data-rgen-sm="w100">

                    <!-- form-block -->
                    <div class="form-block">
                        <form class="form-widget" action="<?=get_template_directory_uri()?>/formdata.php">
                            <div class="field-wrp">
                                <div class="form-group"><input class="form-control" name="name" required="" type="text" placeholder="Имя" data-label="Name" data-msg="Введите ваше имя." /></div>
                                <div class="form-group"><input class="form-control" name="email" required="" type="email" placeholder="E-mail" data-label="Email" data-msg="Введите e-mail." /></div>
                                <div class="form-group"><input class="form-control" name="phone" required="" type="text" placeholder="Телефон" data-label="Phone" data-msg="Введите ваш телефон." /></div>
                                <input name="formtype" type="hidden" value="9" /> <input name="questName" type="hidden" value="" />

                            </div>
                            <button class="btn solid btn-default btn-color1 block" type="submit"><i class="fa fa-envelope-o"></i> ОТПРАВИТЬ</button>

                        </form>
                        <!-- / form -->

                    </div>
                    <!-- / form block -->

                </div>
            </div>
        </div>

    </div>
</section>