<script setup>
defineProps({
    on: Boolean,
});
</script>

<template>
	<section class="banner">
		<div class="bannerSl swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="bannerSlbox flex-a">
						<img src="/assets/images/banner/1.jpg" alt="" class="bannerSlbox__img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bannerSlbox flex-a">
						<img src="/assets/images/banner/2.jpg" alt="" class="bannerSlbox__img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bannerSlbox flex-a">
						<img src="/assets/images/banner/3.jpg" alt="" class="bannerSlbox__img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bannerSlbox flex-a">
						<img src="/assets/images/banner/4.jpg" alt="" class="bannerSlbox__img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bannerSlbox flex-a">
						<img src="/assets/images/banner/5.jpg" alt="" class="bannerSlbox__img">
					</div>
				</div>
			</div>
			<div class="swiper-button-prev bannerSlArr bannerSlArr2 flex-a r-50">
				<i class="fa-sharp fa-solid fa-chevron-right"></i>
			</div>
			<div class="swiper-button-next bannerSlArr bannerSlArr1 flex-a r-50">
				<i class="fa-sharp fa-solid fa-chevron-left"></i>
			</div>
		</div>
	</section>
</template>
