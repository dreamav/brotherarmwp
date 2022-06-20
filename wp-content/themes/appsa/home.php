<?
$page = get_post();
$scope->set_scope_var('current_url', get_page_link($page->ID));

get_header();?>
	<body>
				
		<div id="page" data-linkscroll='y'>
<? get_template_part( 'parts/navigation' ); ?>
<!--
************************************************************
* Intro section
************************************************************ -->
<section class="pd-tb-small pos-rel" data-rgen-sm="h-reset">

	<!--=================================
	= Top content
	==================================-->
	<div class="pos-rel -mr-b-300 z2 pd-tb-large overflow-hidden" data-rgen-sm="pd-tb-small mr-b-0" data-rgen-md="mr-b-0">
		<div class="container pos-rel z2">
			<div class="w75 mr-auto align-c mr-b-100 typo-light" data-rgen-sm="mr-b-0" data-rgen-md="mr-b-0 mr-t-50">
				<h1 class="title fs44 lh-2 txt-upper" data-rgen-sm="medium">Новости</h1>
				<p class="title-sub lh-2" data-rgen-sm="medium mr-b-0">Рассказываем о новых проектах, делимся опытом</p>

			</div>
		</div>
		<!-- <b class="full-vh bg-cc bg-cover" data-stellar="y" data-stellar-ratio="0.8" data-bg="images/intro-bg09.jpg"></b> -->
	</div>
	<div class="full-vh bg-cc bg-cover" data-stellar="y" data-stellar-ratio="0.8" data-rgen-sm="h100 mr-0" data-bg="<?bloginfo('template_url');?>/images/novosti-main-bg.jpg"><b class="bg-dark1 op-07 full-wh"></b></div>
</section>
<!-- ************** END : Intro section **************  -->


<!--
************************************************************
* Intro section
************************************************************ -->
<section class="pd-t-100 pd-b-0 pos-rel" data-rgen-sm="h-reset pd-t-0" id="blog_list">

	<!--=================================
	= Top content
	==================================-->
	<div class="pos-rel " data-rgen-sm="pd-tb-small mr-b-0" data-rgen-md="mr-b-0">
		<div class="container pos-rel z2">


<div class="row" style="transform: none;">

	<div class="col-md-9 pull-right content">
		<div class="row theiaStickySidebar">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content-novosti', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				// twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div>
	</div>

	<div id="blog_sidebar" class="col-md-3 pull-left" style="transform: none;">
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
						<p>
							<img class=" mr-auto" src="<?bloginfo('template_url');?>/images/signature.png" alt=""></p>
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