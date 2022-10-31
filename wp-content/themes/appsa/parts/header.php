<?
global $blog_id;
$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
$blogname = $current_blog_details->blogname;
$lang_slug = $current_blog_details->path;

$all_sites = wp_get_sites();
$sites_menu_html = '<ul>';
// unset($all_sites[0]);
foreach ($all_sites as $m_site) {
	$m_site_details = get_blog_details( $m_site[ 'blog_id' ] );
	$menu_text = str_replace("/", "", $m_site_details->path);
	if($menu_text=='') $menu_text = 'ua';

	if ( $m_site[ 'blog_id' ]!=get_current_blog_id() ) {
		$sites_menu_html .= '<li><a href="'.$m_site['path'].'" class="lang lang-'.$menu_text.'"><span>'.ucfirst($menu_text).'</span></a></li>';
	} else {
		$site_name = $menu_text;
	}

}
$sites_menu_html .= '</ul>';
?>
<div id="header">

	<div class="header_top wrap">
		<div class="logo">
			<img src="<?bloginfo('template_url');?>/images/top_logo.png">
			<h1><?=$blogname?></h1>
		</div>


		<div class="menu_wrap">
			<ul class="sf-menu" id="example">
				<li class="current">
					<a href="" class="lang lang-<?=$site_name?>"><span><?=ucfirst($site_name)?></span></a>
					<?=$sites_menu_html;?>					
				</li>
			</ul>

			<ul class="header_menu">
				<li><a href="">Про нас</a></li>
				<li><a href="">Наші потреби</a></li>
				<li><a href="">Звіт</a></li>
				<li><a href="">Реквізити</a></li>
				<li><a href="">Контакти</a></li>
			</ul>
		</div>
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