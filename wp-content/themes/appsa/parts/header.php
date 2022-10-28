<?
global $blog_id;
$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
$blogname = $current_blog_details->blogname;
$lang_slug = $current_blog_details->path;
?>
<div id="header">

	<div class="header_top wrap">
		<div class="logo">
			<img src="<?bloginfo('template_url');?>/images/top_logo.png">
			<h1><?=$blogname?></h1>
		</div>

		<ul class="header_menu">
			<li><a href="">Про нас</a></li>
			<li><a href="">Наші потреби</a></li>
			<li><a href="">Звіт</a></li>
			<li><a href="">Реквізити</a></li>
			<li><a href="">Контакти</a></li>
		</ul>
	</div>

	<div class="header_center">
		<div class="wrap">
			<div class="plea">
				<!-- <h1>ДОЛУЧАЙТЕСЬ ДО<br>НАШОЇ<br>ІНІЦІАТИВИ</h1> -->
				<h1><?=sprintf( __( 'Join%sour%sinitiative', 'appsa' ), "<br>", "<br>" )?></h1>
			</div>
			<div class="button">
				<a><?=_e( 'Help us', 'appsa' )?></a>
			</div>
		</div>
	</div>

</div>