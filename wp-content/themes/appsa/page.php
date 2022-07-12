<?
$page=get_post();
$scope->set_scope_var('current_url', get_page_link($page->ID));

get_header();?>
    <body>
  
        <div class="maincontent">
            <? get_template_part( 'parts/navigation' ); ?>
            <div class="wrap">
			<?
			// echo do_shortcode($page->post_content);
			?>
				<div id="about">
					<h2>Про нас</h2>
					<div class="descr">
						<p>Ми ГО «Плече потбратима» допомагаємо хлопцям на передовій.<br>
							Все необхідне для захисту й оборони нашої країни доставляємо їм напряму та передаємо особисто в руки.
						</p>
							
					</div>
				</div>
				<div id="need">
					<h2>Наші потреби</h2>

						<p>	Однією з найважливіших потреб на фронті є транспорт.<br>
							Оскільки, наразі з купівлею автомобілів є деякі проблеми, то маємо прохання знайти можливість допомогти з придбанням таких автомобілів як:</p>
						<ul>
							<li>Volkswagen transporter (роки випуску - 1996-2004), (дизель, повнопривідний, з двома боковими дверками)</li>
							<li>джипи (роки випуску - до 2004), (повнопривідні, механічні).</li>
						</ul>
						<p>Якщо джипи новіші, то прохання звернутися за окремими додатковими консультаціями в приватні повідомлення.<br>
						Всіх небайдужих та в кого є можливість просимо долучитися.</p>
				</div>
				<div id="report">
					<h2>Звіт</h2>
					<div class="zvit_items">
						<?=do_shortcode('[zvit quantity=12 exclude=0]');?>
					</div>
				</div>
				<div id="accounts">
					<h2>Реквізити</h2>
					<accounts></accounts>
				</div>
				<div id="contact-form">
					<?=do_shortcode('[contact-form-7 id="57" title="Контактна форма"]')?>
				</div>
			</div>
			<? get_template_part( 'parts/footer' ); ?>
        </div>

<?
get_footer();
?>