<?
$gallery = get_post_meta(get_the_ID(), 'gallery', true);
?>
<div class="zvit-content">
	<div class="gallery">
		<?= do_shortcode($gallery) ?>
	</div>
	<? the_content() ?>
</div>