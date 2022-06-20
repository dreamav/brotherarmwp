<?
$site_language = get_bloginfo( 'language' );
// получаем картинку
$post_thumb_id = get_post_thumbnail_id();
$post_thumb_url = wp_get_attachment_image_src($post_thumb_id,'full', true);
// получим картинки людей
$people = get_post_meta(get_the_ID(), 'people', true);
$people_img_arr = explode(',',$people);
$people_img_id = $people_img_arr[0];
$people_img = wp_get_attachment_image_src($people_img_id,'full', true);
// получим иконку типа квеста
$categories = get_categories( array('type'=>'quests','taxonomy'=>'genre') );
// получим screens
$screens = get_post_meta(get_the_ID(), 'screens', true);
$screens_arr = explode(',',$screens);
$screen_1_url = wp_get_attachment_image_src($screens_arr[0],'full', true);
$screen_2_url = wp_get_attachment_image_src($screens_arr[1],'full', true);

$chisla_str = get_post_meta(get_the_ID(), 'chisla', true);
$chisla_arr = explode(',',$chisla_str);



?>
<section class="pd-0 pos-rel vh100 quest-intro" data-rgen-sm="h-reset" id="home">
    <? if($site_language!="en-US"): ?>
    <div class="selphie">
        <div class="selphie-wrapper">
            <img src="<?= $people_img[0] ?>" alt="">
            <b class="bg-dark1 op-08 full-wh"></b>
        </div>
    </div>
    <?php endif; ?>
    <div class="container pos-rel z2 h100">
        <div class="flex-row h100 pd-t-130" data-rgen-sm="pd-t-40">

            <div class="flex-col-md-12 flex-cc">
                <div class="content align-c">

                    <div class="flex-row gt20 align-c middle-md mr-b-20">
                        <div class="flex-col-md-1">
                            <hr class="light bdr-op-3">
                        </div>
                        <div class="flex-col-md-10">
                            <p class="title mini txt-white mr-b-20" data-rgen-sm="medium mr-b-0"><?= get_post_meta(get_the_ID(), 'lozung', true) ?></p>
                            <h1 class="title txt-white large mr-0" data-rgen-sm="large mr-0"><?= get_the_title() ?></h1>
                        </div>
                        <div class="flex-col-md-1">
                            <hr class="light bdr-op-3">
                        </div>
                    </div>

                    <p class="title-sub mini txt-white lh-2" data-rgen-sm="small mr-b-0"><?= get_post_meta(get_the_ID(), 'short_descr', true) ?></p>
                    <!-- <p class="title-sub mini txt-white align-l" data-rgen-sm="small">Гуляй как в детстве: теперь весь город - твоя игровая площадка!</p> -->
<!--                    <div class="min-px-h30"></div>-->
                    <div class="flex-row gt20 align-c middle-md">
                        <div class="flex-col-md-1">
                            <hr class="light bdr-op-3">
                        </div>
                        <div class="flex-col-md-10 pd-0">
                            <p class="title-sub mini txt-white align-с lh-2" data-rgen-sm="medium mr-b-20"><?=__('Buy now')?></p>
                            <div class="flex-row">
                                <!-- form-block -->
                                <div class="form-block mr-auto">
                                    <form id="quest_order" action="<?=get_template_directory_uri()?>/formdata.php" class="form-widget" data-formtype="newsletter" data-success-redirect="y">
                                        <div class="field-wrp">
                                            <div class="flex-row gt20">
                                                <div class="flex-col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control light bdr-2 bdr-white large w100" data-label="Email" data-msg="<?=__("Enter your e-mail")?>" type="email" name="email" placeholder="E-mail">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control light bdr-2 bdr-white large w100" data-label="Email" required="" data-msg="<?=__('Enter your phone')?>" type="phone" name="phone" placeholder="<?=__('Phone number')?>">
                                                    </div>
                                                </div>
                                                <div class="flex-col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control light bdr-2 bdr-white large w100" data-label="<?=__('Promo code')?>" data-msg="<?=__('Enter promo code')?>" type="text" name="coupon" placeholder="<?=__('Promo code')?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" data-loading-text="<?=__('Wait...')?>" class="btn solid btn-white block btn-reset bdr-2 fs40" style="min-height: 59px;" value="<?= get_post_meta(get_the_ID(), 'price', true) ?>">
                                                            <?=__('Buy for')?> <span id="price"><?= get_post_meta(get_the_ID(), 'price', true) ?></span> <?=__('$')?>
                                                        </button>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="formtype" value="26">
                                                <input type="hidden" name="price" value="<?= get_post_meta(get_the_ID(), 'price', true) ?>">
                                                <input type="hidden" name="quest_name" value="<?= get_the_title() ?>">
                                                <input type="hidden" name="metrika_goal" value="<?= get_post_meta(get_the_ID(), 'metrika_goal', true) ?>">
                                            </div>
                                        </div>
                                    </form><!-- / form -->
                                </div><!-- form-block -->
                            </div>
                            <? if($site_language!="en-US"): ?>
                            <div class="flex-row">
                                <div class="flex-col-md-6">
                                    <a href="#popup-present" class="btn btn-default light mini rd-20 mr-t-30 set-popup" data-rgen-sm="mr-b-10">Купить в подарок</a>
                                </div>
                                <div class="flex-col-md-6">
                                    <a href="/moscow/korporativnie-kvesti-timbildingi/" class="btn btn-default light mini rd-20 mr-t-30" data-rgen-sm="mr-t-0">У вас большая группа?</a>
                                </div>
                            </div>
	                        <? endif; ?>
                        </div>
                        <div class="flex-col-md-1">
                            <hr class="light bdr-op-3">
                        </div>
                    </div>
                </div>
            </div><!-- // END : column //  -->

            <!-- <div class="gorod flex-col-12">
                <img src="/ru/images/gorod.png" alt="">
            </div> -->

        </div><!-- // END : row //  -->
    </div><!-- // END : container //  -->

    <div class="full-vh bg-cc bg-cover" data-stellar="y" data-stellar-ratio="0.8" data-rgen-sm="h100 mr-t-0" data-bg="<?= $post_thumb_url[0] ?>">
	    <b class="bg-dark1 op-08 full-wh"></b>
    </div>
</section>
<section class="pos-rel" data-rgen-sm="pd-tb-small" id="quest-content">
	<div class="container">
		<!--=========================================
		=            Content section - 1            =
		==========================================-->
		<div class="flex-row middle-md">
			<div class="flex-col-md-6 flex-col-md-offset-1 last-md middle-md" data-rgen-sm="align-c">
				<img src="<?=$screen_2_url[0]?>" class="img-responsive img" alt="image">
				<div class="w75 mr-auto align-c">
					<p class="title-sub mini mr-b-0" data-rgen-sm="small">
						<?=__('Play in')?> <a href="#popup-prilozhenie" class="set-popup link-dotted-color1 txt-color1 "><?=__(' a uniqie app!')?></a>
					</p>
				</div>
			</div>
			<!-- // END : column //  -->
			<div class="flex-col-md-5" data-rgen-sm="align-c mr-t-50">
				<div class="content">
					<p class="title title-sub mini mr-b-8 lh-1" data-rgen-sm="medium">
						<?=get_post_meta(get_the_ID(), 'lozung', true)?></p>
					<h2 class="title" data-rgen-sm="large">
						<?=get_the_title()?></h2>
					<div class="align-l" data-rgen-sm="">
						<?=the_content()?></div>

					<hr class="dark mr-tb-30">
					<div class="flex-row gt20 middle-md mb20" data-rgen-sm="pd-lr-30">
						<?
							if ( $_GET['quest'] == "tayny-patriarshih" ) {
							$mev_col_class = "flex-col-md-3 flex-col-sm-3";
							} else {
							$mev_col_class = "flex-col-md-4";
							}
						foreach ($chisla_arr as $key => $value) {
								$chisl_row = explode('|',$value);
							?>
						<div class="<?=$mev_col_class?>" data-rgen-md="flex-col-sm-4">
							<div class="info-obj img-t g20 mini align-c">
								<h2 class="title medium"><?=$chisl_row[0]?></h2>
								<div class="info">
									<h3 class="bold-1 fs16"><?=$chisl_row[1]?></h3>
								</div>
							</div>
						</div>
						<?}?>
						<? if ( $_GET['quest'] == "tayny-patriarshih" ) { ?>
						<div class="flex-col-md-3 flex-col-sm-3" data-rgen-md="flex-col-sm-3">
							<div class="info-obj img-t g20 tiny align-c">
								<div class="img ">
									<span class="iconwrp"> <i class="fa fa-coffee txt-dark1"></i></span>
								</div>
								<div class="info">
									<h3 class="bold-1 fs14 lh-1">кофе в подарок</h3>
								</div>
							</div>
						</div>
						<? } ?></div>
				</div>
			</div>
			<!-- // END : column //  -->
		</div>
		<!-- // END : row //  -->
	</div>
	<!-- // END : container //  -->
	<div id="popup-prilozhenie" class="white-popup-block popup-content mfp-hide">
		<div class="pop-body pd-30 align-l">
			<div class="w75 mr-auto align-c">
				<h2 class="title mini">
					<?=__('A Unique Mobile App<br>for Quests')?></h2>
				<p class="title-sub fs14 mr-b-10">
					<?=__('A platform created especially for quests with a big set of game mechanics that makes it easy to organize an amazing adventure.')?>
				</p>
			</div>
			<div class="flex-row middle-md gt20">
				<div class="flex-col-md-4 mr-b-0">
					<div class="info-obj img-t g10 mini align-c mr-b-20">
						<div class="img txt-color1">
							<span class="iconwrp"> <img src="<?=get_template_directory_uri()?>/images/icons/interactive.png" alt="" /></span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('Interactive')?></h3>
							<p class="mr-0"><?=__('Different types of answers and questions. Fun to solve!')?></p>
						</div>
					</div>
					<!-- info box -->
					<hr class="mr-t-30 mr-b-20">
					<div class="info-obj img-t g10 mini align-c mr-b-20">
						<div class="img txt-color1">
							<span class="iconwrp">
							 <img src="<?=get_template_directory_uri()?>/images/icons/kak-v-detstbe.png" alt="" />
							</span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('Games from your childhood!')?></h3>
							<p class="mr-0"><?=__('Hot and cold, treasure hunts and other old school favorites')?></p>
						</div>
					</div>
					<!-- info box -->
					<hr class="mr-t-30 mr-b-20">
					<div class="info-obj img-t g10 mini align-c mr-b-0">
						<div class="img txt-color1">
							<span class="iconwrp">
								<img src="<?=get_template_directory_uri()?>/images/icons/modern.png" alt="" />
							</span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('Modern')?></h3>
							<p class="mr-0">
								<?=__('Quests are automatic. The final results are made by the most unbiased judge — the computer!')?>
							</p>
						</div>
					</div>
					<!-- info box -->
				</div>
				<!-- column -->
				<div class="flex-col-md-4 align-c">
					<img src="<?=bloginfo('template_url')?>/images/main-fishki-screen.png" class="mr-auto" alt="image"></div>
				<!-- / column -->
				<div class="flex-col-md-4 mr-b-0">
					<div class="info-obj img-t g10 mini align-c mr-b-20">
						<div class="img txt-color1">
							<span class="iconwrp">
								<img src="<?=get_template_directory_uri()?>/images/icons/clock.png" alt="" />
							</span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('Any Time!')?></h3>
							<p class="mr-0">
								<?=__('Play whenever you want! No schedules, no pre-signups, or any of that boring stuff.')?>
							</p>
						</div>
					</div>
					<!-- info box -->
					<hr class="mr-t-30 mr-b-20">
					<div class="info-obj img-t g10 mini align-c mr-b-20">
						<div class="img txt-color1">
							<span class="iconwrp">
								<img src="<?=get_template_directory_uri()?>/images/icons/voiced.png" alt="" />
							</span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('No need to read it')?></h3>
							<p class="mr-0"><?=__('The quests’ tasks and questions are voiced. Keep walking and just listen!')?></p>
						</div>
					</div>
					<!-- info box -->
					<hr class="mr-t-30 mr-b-20">

					<div class="info-obj img-t g10 mini align-c mr-b-0">
						<div class="img txt-color1">
							<span class="iconwrp">
								<img src="<?=get_template_directory_uri()?>/images/icons/offline.png" alt="" />
							</span>
						</div>
						<div class="info">
							<h3 class="title tiny bold-n"><?=__('Works Offline')?></h3>
							<p class="mr-0">
								<?=__('You can download your quest ahead of time. No need for mobile data to play!')?>
							</p>
						</div>
					</div>
					<!-- info box -->
				</div>
				<!-- column -->
			</div>
		</div>
	</div>
	<!-- /#popup-content -->
</section>
<!-- / Content section -->
<?
if($site_language!="en-US"){
$otzyvy_str = get_post_meta(get_the_ID(), 'otzyvy', true);
$otzyvy_str = ereg_replace("\r\n","`",$otzyvy_str);
$otzyvy_arr = explode('`',$otzyvy_str);
?>
<section class="pd-tb-0" id="places_desc">
	<div class="container pd-t-100"  data-rgen-sm="pd-t-20">	
		<div class="w75 mr-auto align-c mr-b-40">
			<h2 class="title">Отзывы, фото и места приключения</h2>
		</div>
		<div class="flex-row gt60 mb40">
			<div class="flex-col-md-6">
				<h4 class="title mini mr-b-10 bold-n lh-2" data-rgen-sm="fs24">Аудио-отзывы от прошедших квест</h4>
				<h3 class="bold-1 fs16 mr-b-10">Отзывы игроков на квест "<?= get_the_title() ?>". <br>В конце каждого маршрута мы просим оставить аудиоотзыв об игре.<br>Вот, что нам записывают:</h3>
				<? foreach ($otzyvy_arr as $key => $value) {
						$otzyv = explode('|',$value);
					?>
				<div class="flex-row">
					<div class="flex-col-md-1 flex-col-sm-1 flex-col-xs-1 play-button-sm">
						<div id="jquery_jplayer_<?=$key?>" class="jp-jplayer"></div>
						<div id="jp_container_<?=$key?>" class="jp-audio-stream" role="application" aria-label="media player">
							<div class="jp-type-single">
								<div class="jp-gui jp-interface">
									<div class="jp-controls">
										<button class="jp-play" role="button" tabindex="0">play</button>
									</div>
								</div>
							</div>
						</div>				
					</div>
					<div class="flex-col-md-8  flex-col-sm-8 flex-col-xs-8">
						<h5 class="fs16 lh-9"><?=$otzyv[0]?></h5>
					</div>
				</div>
				<? } ?>

				<div class="flex-row px-h400" data-rgen-sm="h-reset">
					<!-- carousel-widget -->
					<div class="carousel-widget ctrl-1 popgallery-widget ctrl-light pos-rel" 
						data-items="1"
						data-nav="true"
						data-pager="false"
						data-itemrange="0,1|420,1|600,1|768,1|992,1|1200,1"
						data-margin="20"
						data-autoplay="false"
						data-hauto="false"
						data-in="false"
						data-out="false"
						data-center="false">
						<div class="owl-carousel">
							<?foreach ($people_img_arr as $key => $value) {
								$people_img = wp_get_attachment_image_src($value,'full', true);
							?>
							<div class="item flex-cc">
								<div class="content"><img src="<?=$people_img[0]?>" alt="image"></div>
							</div><!-- /.item -->
							<?}?>
						</div><!-- /.owl-carousel -->
					</div><!-- /.carousel-widget -->
				</div> <!-- /.flex-row -->
			</div> <!-- /.flex-col-md-6 -->
			<div class="flex-col-md-6">
				<h4 class="title mini mr-b-10 bold-n">За время квеста ты увидишь:</h4>
				<?
				$mesta_str = get_post_meta(get_the_ID(), 'mesta', true);
				$mesta_str = ereg_replace("\r\n","`",$mesta_str);
				$mesta_arr = explode('`',$mesta_str);				
				foreach ($mesta_arr as $key => $value) {
				        $mesto = explode('|',$value);
				        $mesto_img = wp_get_attachment_image_src($mesto[2],'small', true);
				    ?>
					<div class="flex-col-md-12">
						<div class="info-obj img-l g20 medium">
							<div class="img"><img src="<?=$mesto_img[0]?>" class="rd-5" alt="image"></div>
							<div class="info">
								<h3 class="bold-1 fs16 mr-b-10"><a href="#" target="_blank"><?=$mesto[0]?></a></h3>
								<p class="mr-0"><?=$mesto[1]?></p>
							</div>
						</div><!-- info box -->
					</div><!-- column -->
				<?}?>
				<? if(get_post_meta(get_the_ID(), 'ud_mest', true)!="") {?><h6 class="mr-b-10 bold-n"><?=get_post_meta(get_the_ID(), 'ud_mest', true)?></h6><?}?>
			</div>

		</div>
	</div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function(event) { 

<? foreach ($otzyvy_arr as $key => $value) {
	$otzyv_aud_id = explode('|',$value);
    $otzyv_aud = wp_get_attachment_url($otzyv_aud_id[1]);

	?>
	$("#jquery_jplayer_<?=$key?>").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Stirring of a fool",
				mp3: "<?=$otzyv_aud?>",
			});
		},
		play: function() { // To avoid multiple jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "../../js",
		supplied: "mp3,m4a",
		wmode: "window",
		globalVolume: true,
		useStateClassSkin: true,
		cssSelectorAncestor: "#jp_container_<?=$key?>",
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
<? } ?>


});
</script>
<? } // end if ?>
<!--
************************************************************
* How it work section
************************************************************ -->
<section class="pos-rel pd-0 pd-t-100" data-rgen-sm="pd-tb-small">
	<div class="container pos-rel z1 align-c">
		<div class="w75 mr-auto">
			<h2 class="title" data-rgen-sm="small"><?=__('Play in real life!')?></h2>
			<p class="title-sub" data-rgen-sm="small"><?=__('You can play any time you want.<br>No need of booking')?></p>	
		</div>
		
		<div class="flex-row gt50 mb20">
			
			<div class="flex-col-md-2 flex-col-md-offset-0-5">
				<div class="info-obj img-t g30 medium align-c">
					<div class="img txt-dark2"><span class="iconwrp rd bg-color1 txt-white"><i class="pe-7s-download"></i></span></div>
					<div class="info">
						<h3 class="bold-1 fs16"><?=__('DOWNLOAD OUR FREE APP')?></h3>
					</div>
				</div><!-- info box -->
			</div><!-- // END : column //  -->
			<div class="flex-col-md-1 flex-cc">
				<img src="<?=bloginfo('template_url')?>/images/qhiw_arrow_color1.png" class="mr-auto max-px-w300 w200" data-rgen-sm="hide" alt="arrow">
			</div>
			<div class="flex-col-md-2">
				<div class="info-obj img-t g30 medium align-c">
					<div class="img txt-dark2"><span class="iconwrp rd bg-color1 txt-white"><i class="pe-7s-map-2"></i></span></div>
					<div class="info">
						<h3 class="bold-1 fs16"><?=__('CHOOSE AN ADVENTURE')?></h3>
					</div>
				</div><!-- info box -->
			</div><!-- // END : column //  -->
			<div class="flex-col-md-1 flex-tc">
				<img src="<?=bloginfo('template_url')?>/images/qhiw_arrow_fliped_color1.png" class="mr-auto max-px-w300 w200" data-rgen-sm="hide" alt="arrow">
			</div>
			<div class="flex-col-md-2">
				<div class="info-obj img-t g30 medium align-c">
					<div class="img txt-dark2"><span class="iconwrp rd bg-color1 txt-white"><p class="fs30 mr-b-0"><sup>24</sup>/<sub>7</sub></p></span></div>
					<div class="info">
						<h3 class="bold-1 fs16"><?=__('WALK<BR> AND SEARCH FOR CLUES')?></h3>
					</div>
				</div><!-- info box -->
			</div><!-- // END : column //  -->
			<div class="flex-col-md-1 flex-cc">
				<img src="<?=bloginfo('template_url')?>/images/qhiw_arrow_color1.png" class="mr-auto max-px-w300 w200" data-rgen-sm="hide" alt="arrow">
			</div>
			<div class="flex-col-md-2">
				<div class="info-obj img-t g30 medium align-c">
					<div class="img txt-dark2"><span class="iconwrp rd bg-color1 txt-white"><i class="pe-7s-cup"></i></span></div>
					<div class="info">
						<h3 class="bold-1 fs16"><?=__('CHALLENGE YOUR FRIENDS')?></h3>
					</div>
				</div><!-- info box -->
			</div><!-- // END : column //  -->

		</div><!-- // END : row //  -->

	</div><!-- // END : container //  -->
</section>
<!-- ************** END : How it work section **************  -->
<section class="pd-tb-medium pos-rel" data-rgen-sm="pd-tb-small" id="pricing">
	<div class="container pos-rel z1">
		<div class="w75 mr-auto align-c">
			<h2 class="title mr-b-0"><?=__('It’s  high time for an adventure!')?></h2>
			<?if($site_language!="en-US"):?><h4 class="title title-sub lh-2" data-rgen-sm="fs22 mr-t-20">Купи квест для своей команды или закажи игру с ведущим!</h4><?endif;?>
		</div>

		<!--=========================================
		=  Pricing tables
		=============================================-->
		<div class="flex-row gt20 mr-b-50 mb20">
			<div class="flex-col-md-12">
				<!-- Price block -->
				<div class="price-table-1 anim align-c bdr-1 bdr-op-1 pd-30 rd-5 h100">

					<form action="<?=bloginfo('template_url')?>/formdata.php" class="form-widget" data-formtype="newsletter" data-success-redirect="y" novalidate="novalidate">
						<div class="field-wrp flex-row">
							<div class="form-group flex-col-md-4 pd-l-10 pd-r-10">
								<input class="form-control bg-white txt-dark1 bdr-dark1" data-label="Name" required="" data-msg="<?=__('Enter your name')?>" type="text" name="name" placeholder="<?=__('Name')?>" aria-required="true">
							</div>
							<div class="form-group flex-col-md-4 pd-l-10 pd-r-10">
								<input class="form-control bg-white txt-dark1 bdr-dark1" data-label="Email" required="" data-msg="<?=__('Enter your phone')?>" type="phone" name="phone" placeholder="<?=__('Phone')?>" aria-required="true">
							</div>
							<div class="form-group flex-col-md-4 pd-l-10 pd-r-10">
								<input class="form-control bg-white txt-dark1 bdr-dark1" data-label="Email" required="" data-msg="<?=__('Enter your e-mail')?>" type="email" name="email" placeholder="E-mail" aria-required="true">
							</div>

							<input type="hidden" name="formtype" value="26">
							<input type="hidden" name="price" value="<?= get_post_meta(get_the_ID(), 'price', true) ?>">
							<input type="hidden" name="quest_name" value="<?= get_the_title() ?>">
                            <input type="hidden" name="metrika_goal" value="<?= get_post_meta(get_the_ID(), 'metrika_goal', true) ?>">
						</div>
						<div class="form-group flex-col-md-4 flex-col-md-offset-4 pd-l-10 pd-r-10">
						    <!-- <button type="submit" data-loading-text="<?=__('Wait...')?>" class="btn solid btn-color1 bdr-2 btn-block mr-b-10" onclick="yaCounter44882842.reachGoal('."'GOAPPSTORE'".'); ga('."'send'".', '."'event'".', '."'Button'".', '."'GoAppStore'".'); return true;"><?=__('Buy now for')?> <?=get_post_meta(get_the_ID(), 'price', true)?> <?=__('$')?></button> -->
						    <button
						    	id="paymentButton"
						    	type="submit"
						    	class="btn solid btn-color1 bdr-2 btn-block mr-b-10"
					    	>
					    		<?=__('Buy now for')?> <?=get_post_meta(get_the_ID(), 'price', true)?> <?=__('$')?>
						    </button>
                        </div>
					</form>

				</div>
				<!-- Price block -->
			</div><!-- column -->
		</div><!-- row -->
		<!-- ======= END : Pricing tables =======  -->
		<? if($site_language!="en-US"): ?>
		<div class="w75 mr-auto align-c">
			<h5><a href="#havequestion" class="set-popup txt-color1 link-dotted-color1" onclick="yaCounter44882842.reachGoal('FormContactUsOpen'); ga('send', 'event', 'Form', 'FormContactUsOpen');">Есть вопрос? Пишите - мы с радостью ответим, поможем, подскажем</a></h5>
		</div>
		<!-- form : "mfp-hide" Add this class before using -->
		<div id="popup-buy" class="white-popup-block popup-content mfp-hide">
			<div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
				<p class="sq90 inline-flex flex-cc fs80 mr-0 txt-color1"><i class="pe-7s-mail"></i></p>
				<h2 class="title mr-0" data-rgen-sm="small">КУПИТЬ ЗА <span></span></h2>
			</div>
			<div class="pop-body" data-rgen-sm="pd-20">
				<!-- form-block -->
				<div class="form-block">
					<form action="<?=bloginfo('template_url')?>/formdata.php" class="form-widget" data-success-redirect='y'>
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

							<input type="hidden" name="formtype" value="25">
							<input type="hidden" name="price" value="<?=get_post_meta(get_the_ID(), 'price', true)?>">
							<input type="hidden" name="quest_name" value="<?=get_the_title()?>">
                            <input type="hidden" name="metrika_goal" value="<?= get_post_meta(get_the_ID(), 'metrika_goal', true) ?>">
						</div>
						<button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block"><i class="fa fa-envelope-o"></i> ОТПРАВИТЬ</button>
					</form><!-- / form -->
				</div><!-- / form block -->
			</div>
		</div><!-- /#popup-content -->
		
        <!-- form : "mfp-hide" купить в подарок -->
		<div id="popup-present" class="white-popup-block popup-content mfp-hide">
			<div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
				<p class="inline-flex flex-cc mr-0 txt-color1">Квест от Street Adventure — отличный сюрприз! После оплаты покупки на вашу почту придёт красивый бланк с промокодом, который можно распечатать и подарить.</p>
				
			</div>
			<div class="pop-body" data-rgen-sm="pd-20">
				<!-- form-block -->
				<div class="form-block">
					<form action="<?=bloginfo('template_url')?>/formdata.php" class="form-widget" data-success-redirect='y'>
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

							<input type="hidden" name="formtype" value="25">
							<input type="hidden" name="price" value="<?=get_post_meta(get_the_ID(), 'price', true)?>">
							<input type="hidden" name="quest_name" value="<?=get_the_title()?>">
                            <input type="hidden" name="metrika_goal" value="<?= get_post_meta(get_the_ID(), 'metrika_goal', true) ?>">
						</div>
						<button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block"><i class="fa fa-shopping-cart" aria-hidden="true"></i> КУПИТЬ</button>
					</form><!-- / form -->
				</div><!-- / form block -->
			</div>
		</div><!-- /#popup-content -->
		
		<div id="havequestion" class="white-popup-block popup-content mfp-hide">
			<div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
				<p class="sq90 inline-flex flex-cc fs80 mr-0 txt-color1"><i class="pe-7s-mail"></i></p>
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

							<input type="hidden" name="formtype" value="24">
							<input type="hidden" name="quest_name" value="<?=get_the_title()?>">
						</div>
						<button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block"><i class="fa fa-envelope-o"></i> ОТПРАВИТЬ</button>
					</form><!-- / form -->
				</div><!-- / form block -->
			</div>
		</div><!-- /#popup-content -->
		<? endif; ?>
		<!-- ************** END : Popup form block **************  -->
	</div><!-- container -->
</section>
<?
if($site_language!="en-US"){
?>
<section class="pos-rel pd-b-50 pd-t-0" data-rgen-sm="pd-tb-small" id="quests">
	<div class="container pos-rel z1">
		<div class="w75 mr-auto align-c">
			<h2 class="title">Особенно рекомендуем:</h2>
			<!-- <hr class="mr-tb-50"> -->
		</div>
		<div class="flex-row gt40 mb20">
			<?=do_shortcode('[quests quantity=3 exclude=571]');?>
		</div><!-- // END : row //  -->
	</div>
</section>
<?
echo do_shortcode('[get macros "Квест - Экран с видео"]');
echo do_shortcode('[get macros "Квест - Вопросы"]');
echo do_shortcode('[get macros "Главная - Карта"]'); 
} else {
echo do_shortcode('[get macros "Corporative - screen with video"]');
echo do_shortcode('[get macros "Home - map"]'); 
}?>
