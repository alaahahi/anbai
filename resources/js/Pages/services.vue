<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
let swiperRef = null;
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

const setSwiperRef = (swiper) => {
  swiperRef = swiper;
};
const slideNext = () => {
  swiperRef.slideNext();
};

const slidePrev = () => {
  swiperRef.slidePrev();
};

defineProps({
        meta: Object,
        slider: Object,
        services: Object,
        locale: {
            type: String,
            default: () => $page.props.locale?.locale || 'en',
        },
    })


</script>
<template>
	<Head>
		<title>{{ $t('services') }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
		<section class="serpage">
		<div class="container">
			<div class="serpagewrpr">
				<div class="serpagbner" v-scroll-reveal data-aos-delay="50">
					<img :src="slider.image" :alt="slider.title[locale]" class="serpagbner__img">
				</div>
				<div class="serpagbner__h" v-scroll-reveal data-aos-delay="250">{{ $t('services') }}</div>
				<div class="serpageRow">

					<div class="serpageCrd" v-scroll-reveal :data-aos-delay="350 + (i * 50)" v-for="(service, i) in services" :key="i">
						<h2 class="serpageCrd__h">{{ i + 1 }}</h2>
						<Link :href="'/service/' + service.id + '/show'" class="serpageCrd__h3">
							{{ service.title[locale].slice(0,30) }}
						</Link>
						<p class="serpageCrd__p" v-html="service.description[locale].slice(0,350)"></p>
						<div class="serpageCrd-hr"></div>
					</div>
					
				</div>
			</div>
		</div>
		</section>
		<!-- services end -->
		<section class="serRel"  v-scroll-reveal-zoom-in>
			<div class="container">
	<swiper
      ref="{swiperRef}"
      :modules="modules"
      :navigation="true"
      :slides-per-view="3"
      :space-between="80"
	  :centeredSlides= "true"
      :loop="true"
      :speed="800"
      @swiper="setSwiperRef"
      :scrollbar="{ draggable: true }"
    >
      <swiper-slide v-for="(service, i) in services" :key="i">
		<div class="swiper-slide">
			<Link :href="'/service/' + service.id + '/show'" class="serRelCrd">
				<div class="serRelCrd__link">
					<div class="serRelCrd__mini flex-a r-50">
						<i class="fa-solid fa-arrow-up-right"></i>
					</div>
					View
				</div>
				<img :src="service.image" :alt="service.title[locale]" class="serRelCrd__img">
				<div class="serRelCrd-tab">{{ service.title[locale].slice(0,30) }}</div>
			</Link>
		</div>
	</swiper-slide>

	
	</swiper>
				</div>
			<svg class="serRel__svg" xmlns="http://www.w3.org/2000/svg" width="1920" height="349.814" viewBox="0 0 1920 349.814">
				<path id="Path_586" data-name="Path 586" d="M0-52.12,956.353-82,1920-52.12V217.131s-483.647,50.683-963.647,50.683S0,217.131,0,217.131Z" transform="translate(0 82)"/>
			</svg>
		</section>
		<!-- services related end -->
    </MainLayout>
</template>
<style >
.swiper-wrapper {
    padding: 50px 0;
}
</style>