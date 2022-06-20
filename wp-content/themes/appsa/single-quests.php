<? get_header(); ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2TG66X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<div id="page" data-linkscroll='y'>
<? get_template_part( 'parts/navigation' );

        if( have_posts() ) : 
        	while ( have_posts() ) : the_post();
	            get_template_part( 'parts/quest' );
        	endwhile;
        endif;

get_template_part( 'parts/footer' ); ?>
</div>
<? get_footer(); ?>