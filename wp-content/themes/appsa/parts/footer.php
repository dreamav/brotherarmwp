<?
$site_language = get_bloginfo( 'language' );
?>
<footer class="pd-t-50 pd-b-0 pos-rel bg-white" data-rgen-sm="pd-tb-small">
	<div class="container" data-rgen-sm="align-c">
		<? if($site_language!="en-US"): ?>
		<div class="flex-row gt20 mb30">
			<div class="flex-col-md-3">
				<p>
					<a href="<?=get_home_url();?>" class="inline-block max-px-w180">
					<img src="<?bloginfo('template_url');?>/images/<?=_e('sa-logo_en')?>.png" class="" alt="logo"></a>
				</p>
				<p>
					Москва, ул. Никольская 4/5
					<br>109012 Россия
					<br>ИП Богданов, ИНН 772608555660</p>
				<div class="mr-b-20">
					<a target="_blank" href="https://www.facebook.com/streetadventure/" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1"> <i class="fa fa-facebook"></i>
					</a>
					<a target="_blank" href="#" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1"> <i class="fa fa-vk"></i>
					</a>
					<a target="_blank" href="#" class="sq30 fs14 mr-r-4 rd inline-flex flex-cc bdr-1 btn-color1">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
			<!-- // END : column //  -->	
			<div class="flex-col-md-2">
				<h2 class="title tiny bold-n"><?=_e('LINKS')?></h2>
				<?php 
					wp_nav_menu( array(
						'container' => '',
						'container_class' => '',
						'menu_class'      => 'list-1',
						'theme_location'=>'footer1',
						'after'=>'',
						'walker' => new Primary_Walker_Nav_Menu()
					) );
				?>
			</div>
			<!-- // END : column //  -->	
			<div class="flex-col-md-2">
				<h2 class="title tiny bold-n"><?=_e('ABOUT')?></h2>
				<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class'      => 'list-1', 'theme_location'=>'footer2', 'after'=>'', 'walker' => new Primary_Walker_Nav_Menu() ) ); ?>
			</div>
			<!-- // END : column //  -->	
			<div class="flex-col-md-2">
				<h2 class="title tiny bold-n"><?=_e('ABILITIES')?></h2>
				<?php 
					wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class'      => 'list-1', 'theme_location'=>'footer3', 'after'=>'', 'walker' => new Primary_Walker_Nav_Menu() ) ); ?>
			</div>
			<!-- // END : column //  -->	
			<div class="flex-col-md-3">
				<h2 class="title tiny bold-n">НОВОСТИ. ТОЛЬКО ВАЖНЫЕ!</h2>
				<p>Получайте от нас интересные предложения и новости</p>
				<!-- form-block -->	
				<div class="form-block">
					<form action="<?bloginfo('template_url');?>/formdata.php" class="form-widget" data-formtype="newsletter">
						<div class="flex-row gt10">
							<div class="flex-col-md-9">
								<div class="form-group">
									<input class="form-control w-100" data-label="Email" data-msg="Введите ваш e-mail" type="email" name="email" placeholder="Ваш e-mail"></div>
							</div>
							<input type="hidden" name="formtype" value="3">	
							<div class="flex-col-md-3">
								<button type="submit" data-loading-text="Момент..." class="btn solid btn-default btn-color1 block fs22 btn-reset">
									<i class="fa fa-envelope-o"></i>
								</button>
							</div>
						</div>
						<!-- / row -->	
					</form>
					<!-- / form -->	
				</div>
				<!-- form-block -->	
				<a href="<?=get_home_url();?>/politika-konfidentsialnosti" target="_blank" class="fs11">Политика конфиденциальности</a>
			</div>
			<!-- // END : column //  -->	
		</div>
		<?else:?>
		<div class="flex-row gt20 mb30">
			<div class="flex-col-md-3">
				<p>
					26 Broadway, 8th Floor
					<br>New York, NY10004 
					<br>Tel. +1 646 7518546 
					<br>E-mail: ny@streetadventure.com
				</p>
			</div>
			<div class="flex-col-md-2">
				<?php 
					wp_nav_menu( array(
						'container' => '',
						'container_class' => '',
						'menu_class'      => 'list-1',
						'theme_location'=>'footer1',
						'after'=>'',
						'walker' => new Primary_Walker_Nav_Menu()
					) );
				?>
			</div>
		</div>
		<?endif;?>
		<!-- // END : row //  -->	
		<hr>	
		<p class="align-c">
			<a href="#" target="_blank"><?=($site_language!="en-US")?'Городские квесты-приключения StreetAdventure':''?></a>
			&copy;2009-
			<script>document.write(new Date().getFullYear());</script>
		</p>
	</div>
</footer>