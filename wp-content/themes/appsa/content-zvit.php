<?
$gallery = get_post_meta(get_the_ID(), 'gallery', true);
?>
<div class="section wrap">
	<div class="sec_header">
		<h2><?= get_the_title() ?></h2>
	</div>
	<div class="sec_content">
		<div class="content_text">
			<? the_content() ?>
		</div>
		<div class="content_data">
			<?= do_shortcode($gallery) ?>
		</div>
	</div>
</div>