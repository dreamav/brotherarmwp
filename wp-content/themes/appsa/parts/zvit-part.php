<?
// получаем картинку
$post_thumb_id = get_post_thumbnail_id();
$post_thumb_url = wp_get_attachment_image_src($post_thumb_id,'medium', true);

?>

<div class="zvit-item">
	<div class="img" style="background-image:url(<?= $post_thumb_url[0] ?>);"></div>	
	<a href="<? the_permalink() ?>" target="_blank"><?= get_the_title() ?></a>
</div>