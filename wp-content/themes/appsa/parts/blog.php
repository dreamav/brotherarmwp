<?
$post_terms = get_the_terms($post->ID,'event_type');
foreach ($post_terms as $post_term) $post_category[] = $post_term->name;
?>
<div class="item">
    <article id="post-<?=$post->ID?>" class="col-md-12 post-<?=$post->ID?> post type-post status-publish format-status has-post-thumbnail hentry category-travel tag-news tag-travel post_format-post-format-status">
        <div class="post-content-wrapper clearfix align-l">
            <div class="flex-row">
                <div class="flex-col-md-6">
                    <div class="post_format_content">
                        <span class="post-meta-likes">
				            <span class="cstheme_likes cstheme_add_like">
								<img src="<?bloginfo('template_url');?>/images/logo-article-preview.png" alt="" class="inline">
                            </span>
                        </span>
                        <a href="<? the_permalink() ?>" target="_blank">
				            <?php echo get_the_post_thumbnail( $page->ID, 'large', true); ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-descr-wrap clearfix">
                        <div class="post-meta clearfix">
                            <span class="post_meta_category">
								<a href="#" rel="category tag">
								<?= $post_category[0] ?></a>
				            </span>
                            <span class="post-meta-date">
                                <?= get_post_meta(get_the_ID(), 'event_date', true); ?>
                            </span>
                        </div>
                        <h2 class="post-title">
                            <a href="<? the_permalink() ?>" target="_blank" title="Permalink to Bell’s Christmas Trees" rel="bookmark"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-content clearfix">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <a class="post_content_readmore heading_font" href="<? the_permalink() ?>" target="_blank">
				            Подробнее <i class="fa fa-chevron-right"></i>
				        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

