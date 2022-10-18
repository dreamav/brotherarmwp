<? get_header(); ?>
<body>
	<? get_template_part( 'parts/header' ); ?>
	
    <div id="content">
			<?      
			if (have_posts()) :
			   while (have_posts()) :
				   	the_post();
			        get_template_part( 'content-zvit', get_post_format() );
			   endwhile;
			endif;
			?>
	</div>


	<? get_template_part( 'parts/footer' ); ?>

	<? get_footer() ?>
    </body>
</html>