<h1 class="title mr-30 text-center txt-upper" style="color: #29a9e9;" data-rgen-sm="medium">Галерея эмоций</h1>
<div class="pos-rel pd-0" id="gallery">
	<!-- swiper-gallery -->
	<div class="swiper-gallery layout-1">

		<!-- Large images -->
		<div class="swiper-container gallery-top vh80">
			<div class="swiper-wrapper">
				<? foreach ($imgs as $gall_image):
					$img_url = wp_get_attachment_image_src($gall_image,'full', true);
				?>
				<!-- Slide -->
				<div class="swiper-slide" data-bg="<?=$img_url[0]?>"></div>
				<? endforeach; ?>
			</div><!-- /.swiper-wrapper -->
			<!-- Navigation buttons -->
			<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
			<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
		</div><!-- /Large images -->

		<!-- Thumb images -->
		<div class="swiper-container gallery-thumbs sm-hide bg-dark1">
			<div class="swiper-wrapper">
				<? foreach ($imgs as $gall_image):
					$thumb_url = wp_get_attachment_image_src($gall_image,'small', true);
				?>
				<!-- Thumb image -->
				<div class="swiper-slide" data-bg="<?=$thumb_url[0]?>"></div>
				<? endforeach; ?>				
			</div><!-- /.swiper-wrapper -->
		</div><!-- /.Thumb images -->
	</div><!-- /.swiper-gallery -->
</div>