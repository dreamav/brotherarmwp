<? get_header(); ?>
<body>
	<? get_template_part( 'parts/header-single-zvit' ); ?>

    <div id="content">
    	<div class="wrap">
			<?      
			if (have_posts()) :
			   while (have_posts()) :
				   	the_post();
			        get_template_part( 'content-zvit', get_post_format() );
			   endwhile;
			endif;
			?>
		</div>
	</div>


	<? get_template_part( 'parts/footer' ); ?>

	<? get_footer() ?>
    </body>
</html>