<?
$post_terms = get_the_terms($post->ID,'event_type');
foreach ($post_terms as $post_term) $post_category[] = $post_term->name;
$post_thumb_id = get_post_thumbnail_id();
$post_thumb_url = wp_get_attachment_image_src($post_thumb_id,'large', true);
?>
<article id="post-<?=$post->ID?>" class="col-md-12 post-<?=$post->ID?> post type-post status-publish format-status has-post-thumbnail hentry category-travel tag-news tag-travel post_format-post-format-status mr-b-100" data-rgen-sm="mr-b-30">
	<div class="post-content-wrapper clearfix">
		<div class="row">
			<div class="col-md-6">
				<div class="post_format_content">
					<span class="post-meta-likes">
						<span class="cstheme_likes cstheme_add_like">
							<img src="<?=get_template_directory_uri()?>/images/logo-article-preview.png" alt="" class="inline">
						</span>
					</span>
					<a href="<?=the_permalink();?>" target="_blank">
						<img src="<?=$post_thumb_url[0]?>" alt=""></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="post-descr-wrap clearfix">
					<div class="post-meta clearfix">
						<span class="post_meta_category">
							<a href="#" rel="category tag"><?= $post_category[0] ?></a>
						</span>
						<span class="post-meta-date"><?=get_post_meta(get_the_ID(), 'event_date', true)?></span>
					</div>
					<h2 class="post-title">
						<a href="<?=the_permalink()?>" target="_blank" title="<?=get_the_title();?>" rel="bookmark"><?=get_the_title();?></a>
					</h2>
					<div class="post-content clearfix">
						
							<?=the_excerpt();?>
						
					</div>
					<a class="post_content_readmore heading_font" href="<?=the_permalink();?>" target="_blank">
						Подробнее
						<i class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</article>