<? get_header(); ?>
<body>
    <div>
        <? get_template_part( 'parts/navigation' ); ?>
        <div class="wrap">
			<?      
			if (have_posts()) :
			   while (have_posts()) :
				   	the_post();
			        get_template_part( 'content-zvit', get_post_format() );
			   endwhile;
			endif;
			?>
			<? get_template_part( 'parts/footer' ); ?>
        </div>
	</div>
<?
get_footer();
?>