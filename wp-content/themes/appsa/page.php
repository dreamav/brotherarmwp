<?
$page=get_post();
$scope->set_scope_var('current_url', get_page_link($page->ID));

get_header();?>
    <body>
  
        <div>
            <? get_template_part( 'parts/navigation' ); ?>
			<?
			echo do_shortcode($page->post_content);
			?>
			<? get_template_part( 'parts/footer' ); ?>
        </div>

<?
get_footer();
?>