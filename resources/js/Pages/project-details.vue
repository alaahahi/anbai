<script setup>
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import 'swiper/css/pagination';

import { Swiper, SwiperSlide } from "swiper/vue";
import { Pagination } from 'swiper/modules';

defineProps({
        meta: Object,
        slider: Object,
        project: Object,
        related_projects: Object,
        previous: Number,
        next: Number,
		locale: {
			type: String,
			default: () => $page.props.locale?.locale || 'en',
		},
    })
// Import Swiper styles
import "swiper/css";
let swiperRef = null;

const setSwiperRef = (swiper) => {
  swiperRef = swiper;
};
const slideNext = () => {
  swiperRef.slideNext();
};

const slidePrev = () => {
  swiperRef.slidePrev();
};
</script>
<template>
	<Head>
        <title>{{ $t('project') }} - {{ project.name[locale].slice(0, 100) }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
		
		<section class="prjdet">
			<div class="container">
				<div class="prjdetWrpr">
					<div class="prjdetWrprSl swiper" v-scroll-reveal data-aos-delay="50">
						<div class="prjdetWrprSl-ab">
							<div class="prjdetWrprSl-ab-row">
								<div class="prjdetWrprSl-ab-mini">
									<i class="fa-solid fa-circle-user"></i>
								</div>
								<p class="prjdetWrprSl-ab-row-p">Client :</p>
								<h2 class="prjdetWrprSl-ab-row-h">{{ project.client[locale].slice(0,100) }}</h2>
							</div>
							<div class="prjdetWrprSl-ab-row">
								<div class="prjdetWrprSl-ab-mini">
									<i class="fa-solid fa-circle-dollar"></i>
								</div>
								<p class="prjdetWrprSl-ab-row-p">Cost :</p>
								<h2 class="prjdetWrprSl-ab-row-h">{{ project.contract_value.slice(0,20) }}</h2>
							</div>
							<div class="prjdetWrprSl-ab-row">
								<div class="prjdetWrprSl-ab-mini">
									<i class="fa-solid fa-circle-location-arrow"></i>
								</div>
								<p class="prjdetWrprSl-ab-row-p">City :</p>
								<h2 class="prjdetWrprSl-ab-row-h">{{ project.city[locale].slice(0,100) }}</h2>
							</div>
							<div class="prjdetWrprSl-ab-row">
								<div class="prjdetWrprSl-ab-mini">
									<i class="fa-solid fa-clock"></i>
								</div>
								<p class="prjdetWrprSl-ab-row-p">From :</p>
								<h2 class="prjdetWrprSl-ab-row-h">
									{{ project.start }}
								</h2>
							</div>
							<div class="prjdetWrprSl-ab-row">
								<div class="prjdetWrprSl-ab-mini">
									<i class="fa-solid fa-clock"></i>
								</div>
								<p class="prjdetWrprSl-ab-row-p">To :</p>
								<h2 class="prjdetWrprSl-ab-row-h">
									{{ project.end_date }}
								</h2>
							</div>
						</div>
						<div class="swiper-wrapper">

							<swiper
							:modules="[Pagination]"
							:navigation="true"
							:slides-per-view="1"
							:space-between="30"
							:loop="true"
							:speed="800"
							:pagination="{
							clickable: true,
							}"
							:scrollbar="{ draggable: true }">
          					<swiper-slide   v-for="(image,i) in project.images" :key="i">
								<div class="prjdetSlide">
									<img :src="image.image" :alt="project.name[locale].slice(0,30)" class="prjdetSlide__img">
								</div>
							</swiper-slide>

							
						</swiper>
						<div class="swiper-pagination"></div>
					</div>
					</div>
					<div class="prjdet-tab" v-scroll-reveal data-aos-delay="150">
						<p class="prjdet-tab__p">{{ project.name[locale].slice(0,100) }}</p>
						<div class="prjdet2mini" v-if="project.type">
							<div class="prjdet2mini-div flex-a r-50">
								<i class="fa-duotone fa-compass-drafting"></i>
							</div>
							{{ project.type.type[locale].slice(0,100)}}
						</div>
					</div>
					<div class="prjdetbody" >
						<p class="prjdetbody__p" v-scroll-reveal data-aos-delay="250" v-html="project.description[locale]"></p>
						<p class="prjdetbody__p2">
							Share With :
						</p>
						<ul class="prjdetbodyList" data-aos="zoom-out" data-aos-delay="50">
							<li class="prjdetbodyList__item">
								<a href="#" class="prjdetbodyList__link flex-a r-50">
									<i class="fa-brands fa-facebook-f"></i>
								</a>
							</li>
							<li class="prjdetbodyList__item">
								<a href="#" class="prjdetbodyList__link flex-a r-50">
									<i class="fa-brands fa-twitter"></i>
								</a>
							</li>
							<li class="prjdetbodyList__item">
								<a href="#" class="prjdetbodyList__link flex-a r-50">
									<i class="fa-brands fa-linkedin-in"></i>
								</a>
							</li>
							<li class="prjdetbodyList__item">
								<a href="#" class="prjdetbodyList__link flex-a r-50">
									<i class="fa-brands fa-instagram"></i>
								</a>
							</li>
						</ul>
						<div class="prjdetpagirow">
							<div class="prjdetpagiBox prjdetpagiBox1">
								<Link :href="'/project/' + previous + '/show'" class="prjdetpagiBox__link">
									<i class="fa-solid fa-arrow-left"></i>
									<span>Previous</span>
								</Link>
							</div>
							<div class="prjdetpagiBox prjdetpagiBox2">
								<Link :href="'/project/' + next + '/show'" class="prjdetpagiBox__link">
									<span>Next</span>
									<i class="fa-solid fa-arrow-right"></i>
								</Link>
							</div>
						</div>
					</div>
				</div>
				<div class="prjdetRel" v-if="related_projects.length > 0">
					<div class="prjdetReltag" v-scroll-reveal data-aos-delay="50">
						<h2 class="prjdetReltag__h">Related Projects</h2>
					</div>
					<div class="prjdetRelSl swiper" v-scroll-reveal data-aos-delay="150">
						<div class="swiper-wrapper">
							<swiper
							ref="{swiperRef}"
							:modules="[Pagination]"
							:navigation="true"
							:slides-per-view="4"
							:space-between="30"
							:loop="true"
							:speed="800"
							:pagination="{
							clickable: true,
							}"
							:scrollbar="{ draggable: true }">
          					<swiper-slid v-for="(project,i) in related_projects" :key="i">
								<div class="prjdetRelCrd">
									<img :src="project.image" :alt="project.name[locale].slice(0,30)" class="prjdetRelCrd__img">
									<div class="prjdetRelCrd__content">
										<div class="prjdetRelCrd__content-row">
											<div class="prdmini">
												<div class="prdminidiv flex-a r-50">
													<i class="fa-solid fa-location-dot"></i>
												</div>
												<p class="prdmini__p">{{ project.city[locale].slice(0,30) }}</p>
											</div>
											<div class="prdmini">
												<div class="prdminidiv flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<p class="prdmini__p">{{ project.contract_value }}</p>
											</div>
										</div>
										<Link :href="'/project/' + project.id + '/show'"  class="prjdetRelCrd__btm">
											<h2 class="prjdetRelCrd__btm-h">{{ project.name[locale].slice(0,30) }}</h2>
										</Link>
									</div>
								</div>
							</swiper-slid>
							</swiper>
						</div>
						
						<div class="swiper-button-prev prjdetRelSlArr prjdetRelSlArr1">
							<i class="fa-solid fa-chevron-left"></i>
						</div>
						<div class="swiper-button-next prjdetRelSlArr prjdetRelSlArr2">
							<i class="fa-solid fa-chevron-right"></i>
						</div>
						
					</div>
					<div class="flex justify-center mt-5">
						<div
						@click="slidePrev()"
						class="mx-2 swiper-button-next hLnewsSlArr hLnewsSlArr2 flex-a r-50"
						>
						<i class="fa-solid fa-chevron-left"></i>
						</div>
						<div
						@click="slideNext()"
						class="mx-2 swiper-button-next hLnewsSlArr  hLnewsSlArr2 flex-a r-50"
						>
						<i class="fa-solid fa-chevron-right"></i>
						</div>
					</div>
				</div>
			</div>
		</section>

    </MainLayout>
</template>
