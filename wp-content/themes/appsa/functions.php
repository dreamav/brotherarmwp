<?
add_theme_support( 'post-thumbnails' );
add_post_type_support('page', 'custom-fields');

remove_filter( ‘the_content’, ‘wpautop’ );
remove_filter( ‘the_excerpt’, ‘wpautop’ );

// ДОБАВЛЯЕМ POST_TYPE macros
////////////////////////////////////////////////////////////////////////////////////////////////////
	function macros_post_type(){
	$labels = array(
		'name' => _x('Macros','post type general name', 'appsa'),
		'singular_name' =>_x('Macros','post type singular name', 'appsa'),
		'parent_item_colon' => '',
		'new_item' => 'New Macros',
		'add_new'             => __( 'Добавить новый', 'appsa' ),
		'add_new_item' => 'Add New Macros',
		'edit_item' => 'Edit Macros',
	);

	$args = array(
		'label'  => __( 'macros', 'appsa' ),
		'description' => 'Macros - frequency used texts, available by shortcodes',
		'labels' => $labels,
		'public' => false,
		'publicy_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'macros'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-media-code',
		'supports' => array('title', 'editor', 'revisions')
	);

	register_post_type('macros',$args);
	}

	add_action( 'init', 'macros_post_type', 0 );
// ДОБАВЛЯЕМ POST_TYPE zvit
////////////////////////////////////////////////////////////////////////////////////////////////////
	function zvit_post_type(){
		$labels = array(
			'name' => _x('Звіт','post type general name', 'appsa'),
			'singular_name' =>_x('Звіт','post type singular name', 'appsa'),
			'parent_item_colon' => '',
			'new_item' => 'New Звіт',
			'add_new'             => __( 'Добавить новый', 'appsa' ),
			'add_new_item' => 'Add New Звіт',
			'edit_item' => 'Edit Звіт',
		);

		$args = array(
			'label'               => __( 'zvit', 'appsa' ),
	        'description'         => __( 'Звіт', 'appsa' ),
	        'labels'              => $labels,
	        // Поддерживаемые поля при редактировании записи
	        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
	        // Связь с таксономиями 
	        // 'taxonomies'          => array( 'genre' ),
	        'hierarchical'        => false,
	        'public'              => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'  	  => 20,					// позиция в меню в админке
	        'menu_icon' 		  => 'dashicons-location',  // иконка
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post',
		);

		register_post_type('zvit',$args);
	}

	add_action( 'init', 'zvit_post_type', 0 );

// ДОБАВЛЯЕМ СВОИ МЕНЮ
////////////////////////////////////////////////////////////////////////////////////////////////////
	function register_my_menus() {
		register_nav_menus(array(
			'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
			'bottom' => 'Нижнее меню',      //Название другого месторасположения меню в шаблоне
			'footer1' => 'Футер 1 меню',
			'footer2' => 'Футер 2 меню',
			'footer3' => 'Футер 3 меню',
			'footer4' => 'Футер 4 меню'
		));
	}
	add_action( 'init', 'register_my_menus' );

// Primary_Walker_Nav_Menu
////////////////////////////////////////////////////////////////////////////////////////////////////
	class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {
		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
			global $wp;
			if ( $wp->request == '' ){
				// $item->url = str_replace('/#', '#', $item->url);
				$item->url = str_replace('/kiev/#', '#', $item->url);
				$item->url = str_replace('/moscow/#', '#', $item->url);
				$item->url = str_replace('/rostov/#', '#', $item->url);
				$item->url = str_replace('/novosib/#', '#', $item->url);
				$item->url = str_replace('/ekb/#', '#', $item->url);
				$item->url = str_replace('/kazan/#', '#', $item->url);
				$item->url = str_replace('/spb/#', '#', $item->url);
				$item->url = str_replace('/ny/#', '#', $item->url);
				$item->url = str_replace('/nn/#', '#', $item->url);
				$item->url = str_replace('/omsk/#', '#', $item->url);
				$item->url = str_replace('/chel/#', '#', $item->url);
				$item->url = str_replace('/samara/#', '#', $item->url);
			}
			if (array_search('menu-item-has-children', $item->classes)) {
				$output .= sprintf("\n<li class='%s'><a href='%s' class=\"dropdown-toggle\" >%s</a>\n", ( array_search('current-menu-item', $item->classes) || array_search('current-page-parent', $item->classes) ) ? 'active' : '', $item->url, $item->title
				);
			} else {
				$output .= sprintf("\n<li %s><a href='%s'>%s</a>\n", ( array_search('current-menu-item', $item->classes) ) ? '' : '', $item->url, $item->title
				);
			}

		}

		function start_lvl(&$output, $depth) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
		}
	}

// ШОРТКОДЫ ДЛЯ ВЫВОДА MACROS
////////////////////////////////////////////////////////////////////////////////////////////////////
	class scope{
		private $scope=array();

		function __construct(){
			$this->scope['host']='http://'.$_SERVER['HTTP_HOST'].'/';
		}

		public function set_scope_var($name, $value){
			$this->scope[$name]=$value;
		}

		public function shortcode( $atts ){
			global $device;

			switch($atts[0]){
				case 'macros':
					if($atts[1]){
						$macros=get_page_by_title( $atts[1], OBJECT, 'macros' );
						if($macros){
							$macros->post_content = str_replace("{:template_url}", get_template_directory_uri(), $macros->post_content);
							$macros->post_content = str_replace("/ru/formdata.php", get_template_directory_uri()."/formdata.php", $macros->post_content);
							return do_shortcode($macros->post_content);
						} 
					}
					break;
				case 'url':
					if($atts[1]&&$atts[1]=='by_page_name'){
						if($atts[2]) $page=get_page_by_title($atts[2]);
						if($page) return get_page_link($page->ID);
					}
					elseif($atts[1]&&$atts[1]=='by_page_id'&&$atts[2]) return get_page_link($atts[2]);
					break;
				case 'current_url':
					if($this->scope['current_url']) return $this->scope['current_url'];
					break;
				case 'host':
					return $this->scope['host'];
					break;
				default:
					return "dd";
					break;
			}
		}
	}

	$scope = new scope();
	add_shortcode( 'get', array($scope,'shortcode') );

// ШОРТКОДЫ ДЛЯ КАРУСЕЛИ
////////////////////////////////////////////////////////////////////////////////////////////////////
	function gen_carousel($atts){
		$ids = explode(',',$atts['ids']);
		$carousel = '<div class="carousel-widget ctrl-1 popgallery-widget ctrl-light pos-rel w100" data-items="1" data-nav="true" data-pager="false" data-itemrange="0,1|420,1|600,1|768,1|992,1|1200,1" data-margin="20" data-autoplay="false" data-hauto="true" data-in="false" data-out="false" data-center="false"> <div class="owl-carousel">';
		foreach ($ids as $id) {
			$attachment_arr = wp_get_attachment_image_src($id,'large');
			$carousel .= '<div class="item"> <div class="owl-content"> <a href="'.$attachment_arr[0].'" class="pop-img"> <img src="'.$attachment_arr[0].'" alt="image"></a> </div> </div>';
		}
		$carousel .= '</div> <!-- /.owl-carousel --> </div> <!-- /.carousel-widget -->';

		return $carousel;
	}
	add_shortcode( 'carousel', 'gen_carousel' );

// ШОРТКОДЫ ДЛЯ КВЕСТОВ
////////////////////////////////////////////////////////////////////////////////////////////////////
	function gen_zvit($atts){
		$args = array(
				'post_type'=> 'zvit',
				'order'    => 'DESC',
				'posts_per_page' => $atts['quantity'],

                'post__not_in' => array(get_the_id(), $atts['exclude'])
		    );
		$the_query = new WP_Query( $args );
		//$quests = $the_query->posts;  array of objects
		
        $output = '';
        if( $the_query->have_posts() ) : 
        	while ( $the_query->have_posts() ) : $the_query->the_post();
	            // gen html
	            ob_start();
	            get_template_part( 'parts/zvit-part' );
	            $output .= ob_get_clean();
        	endwhile;
        endif;

		wp_reset_postdata(); // сброс глобальной переменной $post

		return $output;
	}
	add_shortcode( 'zvit', 'gen_zvit' );

// Добавляем новый метабокс на страницу редактирования комментария
add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box' );
function extend_comment_add_meta_box(){
	add_meta_box( 'title', __( 'Дополнительные поля' ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}

// Отображаем наши поля
function extend_comment_meta_box( $comment ){
	$quest  = get_comment_meta($comment->comment_ID, 'quest', true );
    $icon = get_comment_meta($comment->comment_ID, 'icon', true);

	wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
	?>
	<p>
		<label for="quest"><?php _e( 'Название квеста' ); ?></label>
		<input type="text" name="quest" value="<?php echo esc_attr( $quest ); ?>" class="widefat" />
	</p>
	<p>
		<label for="icon"><?php _e( 'Название файла изображения для отзыва' ); ?></label>
		<input type="text" name="icon" value="<?php echo esc_attr( $icon ); ?>" class="widefat" />
	</p>

	<?php
}

add_action( 'edit_comment', 'extend_comment_edit_meta_data' );
function extend_comment_edit_meta_data( $comment_id ) {
	if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) )
	return;

	if( !empty($_POST['quest']) ){
		$quest = sanitize_text_field($_POST['quest']);
		update_comment_meta( $comment_id, 'quest', $quest );
	}
	else
		delete_comment_meta( $comment_id, 'quest');
    
    if( !empty($_POST['icon']) ){
		$icon = sanitize_text_field($_POST['icon']);
		update_comment_meta( $comment_id, 'icon', $icon );
	}
	else
		delete_comment_meta( $comment_id, 'icon');

}

if (!class_exists('clean_comments_constructor')) { // если класс уже есть в дочерней теме - нам не надо его определять
	class clean_comments_constructor extends Walker_Comment { // класс, который собирает всю структуру комментов
		public function start_lvl( &$output, $depth = 0, $args = array()) { // что выводим перед дочерними комментариями
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) { // что выводим после дочерних комментариев
			$output .= "</ul><!-- .children -->\n";
		}
	    protected function comment( $comment, $depth, $args ) { // разметка каждого комментария, без закрывающего </li>!
	    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
	        echo '<div id="comment-'.get_comment_ID().'" class="item">'; // родительский тэг комментария с классами выше и уникальным якорным id
                echo '<div class="info-obj img-l g20 mini align-l">';
                    echo '<div class="img"><span class="iconwrp txt-color1"><i class="fa fa-quote-left"></i></span></div>'; // покажем аватар с размером 64х64
                    echo '<div class="info">';
                        echo '<p class="fs18">'.get_comment_text();
                            if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'; // если комментарий должен пройти проверку
                        echo '</p><hr />';
                        echo '<div class="mr-t-10">';
                            
                            if (get_comment_meta( get_comment_ID(), 'icon', true ) =='') echo '<img src="/moscow/wp-content/themes/appsa/images/default.jpg" alt="person" class="rd inline-block align-m mr-r-10 max-px-w50" />';
            
                            if (get_comment_meta( get_comment_ID(), 'icon', true ) !='') echo '<img src="/moscow/wp-content/themes/appsa/images/'.get_comment_meta( get_comment_ID(), 'icon', true ).'" alt="person" class="rd inline-block align-m mr-r-10 max-px-w50" />';
            
                            echo '<div class="inline-block align-m">';
                                echo '<h3 class="bold-1 fs16 mr-0">'.get_comment_author().'</h3>';
                                if (get_comment_meta( get_comment_ID(), 'quest', true ) !='') echo '<em class="fs12">о квесте "'.get_comment_meta( get_comment_ID(), 'quest', true ).'"</em>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
	    }
	    public function end_el( &$output, $comment, $depth = 0, $args = array() ) { // конец каждого коммента
			$output .= "</div><!-- #comment item-## -->\n";
		}
	}
}



	function gen_comments($atts){
        $output = '';
        ob_start();
        require get_theme_root()."/appsa/parts/otzyv.php"; 
        $output .= ob_get_clean();

		return $output;
	}
	add_shortcode( 'comments', 'gen_comments' );

// PAGER ЛИСТАЛКА
// http://dimox.name/wordpress-pagination-without-a-plugin/
////////////////////////////////////////////////////////////////////////////////////////////////////
	function wp_corenavi() {
	  global $wp_query;
	  $pages = '';
	  $max = $wp_query->max_num_pages;
	  if (!$current = get_query_var('paged')) $current = 1;
	  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	  $a['total'] = $max;
	  $a['current'] = $current;

	  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
	  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
	  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
	  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

	  if ($max > 1) echo '<div class="navigation">';
	  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	  echo $pages . paginate_links($a);
	  if ($max > 1) echo '</div>';
	}




require_once get_theme_root().'/appsa/classes/free_tours_add_macros_widget.php';
register_sidebar(array('name' => 'Desktop footer'));
