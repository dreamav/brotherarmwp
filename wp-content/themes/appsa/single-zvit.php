<? get_header(); ?>
<body>
    <div class="maincontent">
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
        </div>
		<? get_template_part( 'parts/footer' ); ?>
	</div>
<?
get_footer();
?>