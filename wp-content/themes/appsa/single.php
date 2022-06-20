<?
$event_date = get_post_meta(get_the_ID(), 'event_date', true);
$zakazchik = get_post_meta(get_the_ID(), 'zakazchik', true);

get_header();
?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2TG66X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<div id="page" data-linkscroll='y'>
<? get_template_part( 'parts/navigation' ); ?>


<!--
************************************************************
* Intro section
************************************************************ -->
<section class="pd-tb-small pos-rel" data-rgen-sm="h-reset pd-t-20 pd-b-0" id="blog_article">

	<!--=================================
	= Top content
	==================================-->
	<div class="pos-rel " data-rgen-sm="pd-tb-small mr-b-0" data-rgen-md="mr-b-0">

		<div class="container pos-rel z2">
			<div class="flex-row gt30" style="transform: none;">

				<div class="flex-col-md-9 pull-right content">
					<div class="theiaStickySidebar">
						<div class="align-l mr-b-40">
							<a href="<?=site_url()?>/novosti" class="fs12"><i class="fa fa-long-arrow-left  mr-b-20"></i> Назад к блогу</a>
							<h3 class="title large" data-rgen-sm="medium"><?=get_the_title();?></h3>
							<?if ( !empty($zakazchik) || !empty($event_date) ) {?>
							<div class="flex-row">
								<div class="flex-col-md-6 flex-col-xs-4" data-rgen-sm="">
									<p class="lh-1" data-rgen-sm="mr-b-0"><?=$event_date?></p>
								</div>
								<?if (!empty($zakazchik)):?>
								<div class="flex-col-md-6 flex-col-xs-8" data-rgen-sm="">
									<p class="align-r lh-1" data-rgen-sm="mr-b-0">Заказчик: <?=$zakazchik?></p>
								</div>
								<?endif;?>
							</div>
							<?}?>
						</div>

						<div class="single-post-content clearfix fs16">
							<?
								while ( have_posts() ) : the_post();

									the_content();

									$prevArticle = get_adjacent_post();
									$nextArticle = get_adjacent_post(false,'',false);

								endwhile;
							?>

						</div>

						<div class="align-l mr-t-40" data-rgen-sm="medium mr-t-10">
							<? if (!empty($prevArticle)) { ?>
							<a href="<?=site_url()?>/novosti/<?=$prevArticle->post_name?>" class="fs12"><i class="fa fa-long-arrow-left  mr-b-20"></i> Предыдущая запись</a>
							<? } ?>
							<? if (!empty($nextArticle)) { ?>
							<a href="<?=site_url()?>/novosti/<?=$nextArticle->post_name?>" class="fs12 pull-right">Следующая запись <i class="fa fa-long-arrow-right  mr-b-20"></i></a>
							<? } ?>
						</div>


					</div>
				</div>

				<div id="blog_sidebar" class="flex-col-md-3 first-md" data-rgen-sm="mr-t-60" style="transform: none;">
					<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
						<aside id="text-2" class="widget widget_text">
							<h4 class="widget-title text-center">
							<span>Хей Хей!</span>
							</h4>
							<div class="textwidget">
								<div class="about_me_widget text-center mr-auto">
									<img class=" mr-auto rd" src="<?bloginfo('template_url');?>/images/founder.jpg" alt="">
									<p style="line-height:20px;font-size:12px;color:rgba(51,51,51,0.5);margin-bottom:0;">Основатель SA</p>
									<h6>НИКИТА БОГДАНОВ</h6>
									<p>
										<a class="social_link facebook" target="_blank" href="https://www.facebook.com/bogdanovnikita">
											<i class="fa fa-vk"></i>
										</a>
										<a class="social_link twitter" target="_blank" href="https://vk.com/nikitabogdanov">
											<i class="fa fa-facebook"></i>
										</a>
									</p>
									<p>
										Привет! Хочу напомнить цитату: "Жизнь измеряется не количеством вдохов, а количеством моментов, когда от счастья захватывает дух!"
									</p>
									<p><img class=" mr-auto" src="<?bloginfo('template_url');?>/images/signature.png" alt=""></p>
								</div>
							</div>
						</aside>
					</div>
				</div>

			</div>



		</div>
		<!-- <b class="full-vh bg-cc bg-cover" data-stellar="y" data-stellar-ratio="0.8" data-bg="images/intro-bg09.jpg"></b> -->
	</div>
</section>
<!-- ************** END : Intro section **************  -->
<script>
document.addEventListener("DOMContentLoaded", function(event) { 
	$('.content, #blog_sidebar')
		.theiaStickySidebar({
			additionalMarginTop: 130
		});
});
</script>





<? get_template_part( 'parts/footer' ); ?>
</div>
<? get_footer(); ?>