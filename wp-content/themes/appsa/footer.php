<?
global $blog_id;
$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
$lang_slug = str_replace("/", "", $current_blog_details->path);
if($lang_slug=='') $lang_slug = 'ua';
?>

<script type="text/javascript" src="<?bloginfo('template_url');?>/lib/jquery/jquery.min.js"></script>
<? if( $post->post_name == 'sample-page' ) : ?>
<script type="text/javascript" src="<?bloginfo('template_url');?>/js/<?=$lang_slug?>/components.js"></script>
<? endif; ?>
<!-- JavaScript -->
<?php wp_footer(); ?>