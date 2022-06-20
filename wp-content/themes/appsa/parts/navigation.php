<?
$site_language = get_bloginfo( 'language' );
$post_type = get_post_type( $page_id );
if ( $post_type == 'post' || $post_type == 'novosti' && $pagename!='novosti' || $pagename=='vozmozhnosti' || $pagename=='contacts' || $pagename=='privacy'
 || $pagename=='return-and-refund-policy' 
 || $pagename=='terms-and-conditions' 
 ) {
	$nav_sticky_class = 'bg-white navbar-fixed-top nav-sticky';
	$nav_sticky = 'n';
	$nav_glass = 'n';
}else{
	$nav_sticky = 'y';
	$nav_glass = 'y';
}
// получим массив сайтов
$all_sites = wp_get_sites();
$sites_menu_html = '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
unset($all_sites[0]);
foreach ($all_sites as $m_site) {
	$m_site_details = get_blog_details( $m_site[ 'blog_id' ] );

	if ( $m_site[ 'blog_id' ]!=get_current_blog_id() ) {
		$sites_menu_html .= '<a class="dropdown-item" href="'.$m_site['path'].'">'.$m_site_details->blogname.'</a>';
	} else {
		$site_name = $m_site_details->blogname;
	}

}
$sites_menu_html .= '</div>';
?>

<!-- Navigation 1-->
<nav class="nav-wrp nav-1 light bg-white <?=$nav_sticky_class?>" data-glass="<?=$nav_glass?>" data-sticky="<?=$nav_sticky?>">
	<? if($site_language!="en-US"): ?>
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
					<a class="mr-l-6  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$site_name?></a>
					<?=$sites_menu_html;?>
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
	<? endif ;?>
	<div class="container pd-0 bdr-b flex-cc min-px-h100" data-rgen-sm="pd-lr-20 h-reset">
		<div class="flex-row gt0 middle-md">
			<!-- Logo section -->
			<div class="flex-col-md-2">
				<div class="nav-header">
					<a class="navbar-brand" href="<?=get_home_url();?>">
						<img src="<?bloginfo('template_url');?>/images/sa-logo-white.png" alt="Brand logo" class="mev_logo-white">
						<img src="<?bloginfo('template_url');?>/images/sa-logo-dark.png" alt="Brand logo" class="mev_logo-dark">
					</a>
					<a class="nav-handle" data-nav=".nav" data-navopen="pe-7s-more" data-navclose="pe-7s-close">
						<i class="pe-7s-more"></i>
					</a>
				</div>
			</div>
			<!-- Navigation links -->
			<div class="flex-col-md-10 align-r">
				<div class="nav <?=($site_language=="en-US")?'en-us':''?>">
				<?php 
					wp_nav_menu( array(
						'container' => '',
						'container_class' => '',
						'menu_class'      => 'nav-links sf-menu',
						'theme_location'=>'top',
						'after'=>'',
						'walker' => new Primary_Walker_Nav_Menu()
					) );
				?>                        
					<div class="nav-other">
						<a href="#popup-message" class="btn btn-default light mini set-popup rd-20" onclick="yaCounter44882842.reachGoal('FormContactUsOpen'); ga('send', 'event', 'Form', 'FormContactUsOpen');"><i class="fa fa-envelope-o mr-r-5"></i> <?=__('CONTACT US')?></a>
					</div><!-- .Contact button -->                 
				</div><!-- .Nav -->
			</div>
			<!-- .Column -->
		</div>
		<!-- .row -->
		<div id="popup-message" class="white-popup-block popup-content mfp-hide">
			<div class="pop-header align-c pd-b-0" data-rgen-sm="pd-20">
				<p class="sq90 inline-flex flex-cc fs80 mr-0 txt-color1">
					<i class="pe-7s-mail"></i>
				</p>
				<h2 class="title mr-0" data-rgen-sm="small"><?=__('Write to us; we’ll be happy to hear from you :)')?></h2>
			</div>
			<div class="pop-body" data-rgen-sm="pd-20">
				<!-- form-block -->
				<div class="form-block">
					<form action="<?=get_template_directory_uri()?>/formdata.php" class="form-widget">
						<div class="field-wrp">
							<div class="form-group">
								<input class="form-control" data-label="Name" required data-msg="<?=__('Enter your name')?>" type="text" name="name" placeholder="<?=__('Name')?>">
							</div>
							<div class="form-group">
								<input class="form-control" data-label="Email" required data-msg="<?=__('Enter your e-mail')?>" type="email" name="email" placeholder="<?=__('E-mail')?>">
							</div>
							<div class="form-group">
								<input class="form-control" required data-label="Phone" data-msg="<?=__('Enter your phone')?>" type="text" name="phone" placeholder="<?=__('Phone')?>">
							</div>
							<div class="form-group">
								<textarea class="form-control" data-label="Message" required data-msg="<?=__('Enter your message')?>" name="message" placeholder="<?=__('Message')?>" cols="30" rows="10"></textarea>
							</div>
							<input type="hidden" name="formtype" value="1">
						</div>
						<button type="submit" class="btn solid btn-default btn-color1 block">
							<i class="fa fa-envelope-o"></i>
							<?=__('SEND')?>
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