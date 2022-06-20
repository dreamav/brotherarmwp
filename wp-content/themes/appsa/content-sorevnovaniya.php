<?
$post_terms = get_the_terms($post->ID,'event_type');
foreach ($post_terms as $post_term) $post_category[] = $post_term->name;
$post_thumb_id = get_post_thumbnail_id();
$post_thumb_url = wp_get_attachment_image_src($post_thumb_id,'large', true);

$sorevn_date_arr = explode(" ", get_post_meta(get_the_ID(), 'data_label', true));
?>
<article id="post-<?=$post->ID?>" class="col-md-12 post-<?=$post->ID?> post type-post status-publish format-status has-post-thumbnail hentry category-travel tag-news tag-travel post_format-post-format-status mr-b-100" data-rgen-sm="mr-b-30">
	<div class="post-content-wrapper clearfix">
		<div class="row">
			<div class="col-md-6">
				<div class="post_format_content">
					<div class="sob_date">
						<span class="s_date"><?=$sorevn_date_arr[0]?></span><br>
						<span><?=substr($sorevn_date_arr[1], 0, -1)?></span>
					</div>				
					<span class="post-meta-likes">
						<span class="cstheme_likes cstheme_add_like">
							<img src="<?=get_template_directory_uri()?>/images/logo-article-preview.png" alt="" class="inline">
						</span>
					</span>
					<div class="sob_price">
						<span><?=get_post_meta(get_the_ID(), 'duration', true)?></span>
					</div>
					<div class="sob_duration">
						<span><?=get_post_meta(get_the_ID(), 'price_label', true)?></span>
					</div>					
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
					</div>
					<h2 class="post-title">
						<a href="<?=the_permalink()?>" target="_blank" title="<?=get_the_title();?>" rel="bookmark"><?=get_the_title();?></a>
					</h2>
					<div class="post-content clearfix">
						
							<?=the_excerpt();?>
						
					</div>
					<div class="row">
						<div class="col-md-5" data-rgen-sm="mr-b-10">
							<a href="<?=the_permalink();?>" class="btn solid btn-color1 block bdr-2">Подробнее</a>
						</div>
						<div class="col-md-4">
							<a href="<?=the_permalink();?>" class="btn solid btn-color1 block bdr-2">Купить</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>