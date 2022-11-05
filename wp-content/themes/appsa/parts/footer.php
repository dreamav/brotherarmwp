<?
global $blog_id;
$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
$blogname = $current_blog_details->blogname;

?>
<div id="footer">
	<div class="wrap">
		<div class="company">
			<h1><?=$blogname?></h1>
		</div>
		<div class="social">
			<ul>
				<li><a href=""><img src="<?bloginfo('template_url');?>/images/mail.png"></a></li>
				<li><a href="https://www.facebook.com/brotherarmua" target="_blank"><img src="<?bloginfo('template_url');?>/images/facebook.png"></a></li>
			</ul>
		</div>
	</div>
</div>