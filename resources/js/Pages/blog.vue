<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    meta: Object,
    slider: Object,
    posts_new: Object,
    posts_featured: Object,
    posts_trend: Object,
    posts_random: Object,
    posts_social_media: Object,
    tags: Object,
    locale: {
        type: String,
        default: () => $page.props.locale?.locale || 'en',
    },
})


const modules = [Autoplay];

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
        <title> {{ $t('blog') }}</title>
		<meta name="description" :content="meta">
    </Head>


	<MainLayout>
	<!-- header end -->
	<section class="blog">
		<img src="/assets/images/icn1.png" alt="" class="teampage_img-ab">
		<img src="/assets/images/icn2.png" alt="" class="teampage_img-ab2">
		<div class="container">
			<div class="blogWrpr">
				<div class="blogpagecntnt-wrpr"  v-if="posts_featured[0]">
					<div class="blogpagecntnt-box" v-scroll-reveal data-aos-delay="50" >
						<div class="blogpagecntnt-box__hldr">
							<img :src="posts_featured[0].image" :alt="posts_featured[0]" class="blogpagecntnt-box__img">
							<div class="blogpagecntnt-box-ab flex-i justify-between">
								<div class="flex-i gap-1">
									<img src="/assets/images/Writer.png" alt="" class="blogpagecntnt-box-ab__img">
									<h3 class="blogpagecntnt-box-ab__h">{{ posts_featured[0].writer }}</h3>
								</div>
								<div class="blcabtab" v-if="posts_featured[0].category">
									{{posts_featured[0].category.title.slice(0, 22)}}
								</div>
							</div>
						</div>
						<div class="blogpagecntnt-box-body">
							<p class="blogpagecntnt-box-body-desc"  v-html="posts_featured[0].description.slice(0, 150)"></p>
							<Link :href="'/post/' + posts_featured[0].id + '/show'" class="blogpagecntnt-box-body__link">
								{{ posts_featured[0].title.slice(0, 30) }}
							</Link>
							<div class="blogpagecntnt-box-body-wrpr flex-i justify-between">
								<div class="blbbwcol">
									<div class="blbbwcol__mini flex-a r-50">
										<i class="fa-solid fa-calendar-days"></i>
									</div>
									<p class="blbbwcol__p">
										{{ new Date(posts_featured[0].created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
									</p>
								</div>
								<div class="blbbwcol">
									<div class="blbbwcol__mini flex-a r-50">
										<i class="fa-regular fa-comment"></i>
									</div>
									<p class="blbbwcol__p">
										{{posts_featured[0].comments.length}} Comments
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="blogpagecntnt-box" v-scroll-reveal data-aos-delay="150" v-if="posts_featured[1]">
						<div class="blogpagecntnt-box__hldr">
							<img :src="posts_featured[1].image" :alt="posts_featured[1]" class="blogpagecntnt-box__img">
							<div class="blogpagecntnt-box-ab flex-i justify-between">
								<div class="flex-i gap-1">
									<img src="/assets/images/Writer.png" alt="" class="blogpagecntnt-box-ab__img">
									<h3 class="blogpagecntnt-box-ab__h">{{ posts_featured[1].writer }}</h3>
								</div>
								<div class="blcabtab" v-if="posts_featured[1].category">
									{{posts_featured[1].category.title.slice(0, 22)}}
								</div>
							</div>
						</div>
						<div class="blogpagecntnt-box-body">
							<p class="blogpagecntnt-box-body-desc" v-html="posts_featured[1].description.slice(0, 150)"></p>
							<Link :href="'/post/' + posts_featured[1].id + '/show'" class="blogpagecntnt-box-body__link">
								{{ posts_featured[1].title.slice(0, 30) }}
							</Link>
							<div class="blogpagecntnt-box-body-wrpr flex-i justify-between">
								<div class="blbbwcol">
									<div class="blbbwcol__mini flex-a r-50">
										<i class="fa-solid fa-calendar-days"></i>
									</div>
									<p class="blbbwcol__p">
										{{ new Date(posts_featured[1].created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
									</p>
								</div>
								<div class="blbbwcol">
									<div class="blbbwcol__mini flex-a r-50">
										<i class="fa-regular fa-comment"></i>
									</div>
									<p class="blbbwcol__p">{{posts_featured[1].comments.length}} Comments</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="blogWrpr-tab" v-scroll-reveal data-aos-delay="250">
					<h2 class="blogWrpr-tab__h">News For You</h2>
				</div>
				<div class="blogwrp2">
					<div class="blogCol1">
						<div class="blogCol1Card" v-scroll-reveal data-aos-delay="50">
							<div class="blogCol1Card__hdr">
								<div class="blogCol1Card__mini flex-a r-50">
									<i class="fa-solid fa-signs-post"></i>
								</div>
								<h3 class="blogCol1Card__hdr-h">Trending</h3>
							</div>
							<div class="blogCol1Card__body">

								<div class="blgpgwrprCol1CardNews" v-for="blog in posts_trend">
									<div class="blgpgwrprCol1CardNews__Hdr">
										<img :src="blog.image" :alt="blog.title.slice(0, 100)" class="blgpgwrprCol1CardNews__img">
									</div>
									<div class="blgpgwrprCol1CardNews__body">
										<p class="blgpgwrprCol1CardNews_t">
											{{blog.title.slice(0, 80)}}
										</p>
										<Link :href="'/post/' + blog.id + '/show'" class="blgpgwrprCol1CardNews_t2">
											More
										</Link>
									</div>
								</div>

							</div>
						</div>
						<div class="blogCol1Card" v-scroll-reveal data-aos-delay="150">
							<div class="blogCol1Card__hdr blogCol1Card__hdr2">
								<div class="blogCol1Card__mini blogCol1Card__mini2 flex-a r-50">
									<i class="fa-solid fa-tag"></i>
								</div>
								<h3 class="blogCol1Card__hdr-h">Tags</h3>
							</div>
							<div class="blogCol1Card__body blogCol1Card__body2">
								<div class="tagwrpr">

									<a href="#" class="tagLink" v-for="tag in tags">{{ tag.title }}</a>

								</div>
							</div>
						</div>
						<div class="blogCol1Card" v-scroll-reveal data-aos-delay="250">
							<div class="blogCol1Card__hdr blogCol1Card__hdr3">
								<div class="blogCol1Card__mini blogCol1Card__mini3 flex-a r-50">
									<i class="fa-solid fa-tag"></i>
								</div>
								<h3 class="blogCol1Card__hdr-h blogCol1Card__hdr-h3">On Social Media</h3>
							</div>
							<div class="blogCol1Card__body blogCol1Card__body3">


								<div class="blgpgwrprCol1CardNews"  v-for="blog in posts_social_media">
									<div class="blgpgwrprCol1CardNews__Hdr">
										<img :src="blog.image" :alt="blog.title.slice(0, 100)" class="blgpgwrprCol1CardNews__img">
									</div>
									<div class="blgpgwrprCol1CardNews__body">
										<p class="blgpgwrprCol1CardNews_t">
											{{blog.title.slice(0, 80)}}
										</p>
										<Link :href="'/post/' + blog.id + '/show'"  class="blgpgwrprCol1CardNews-row flex-i gap-2">
											<div class="blgpgwrprCol1CardNews-mini flex-a r-50">
												<i class="fa-brands fa-facebook-f"></i>
											</div>
											<p class="blgpgwrprCol1CardNews-row-p">Facebook</p>
										</Link>
									</div>
								</div>


							</div>
						</div>
					</div>
					<div class="blogCol2" v-scroll-reveal data-aos-delay="150" v-if="posts_new.data">


						<div class="blogcard" v-scroll-reveal :data-aos-delay="50 + (index * 50)" v-for="(blog, index) in posts_new.data" :key="index">
							<div class="blogcard-col1">
								<div class="blogcard-col1-tag">
									{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit' }) }}
								</div>
								<img :src="blog.image" :alt="blog.title" class="blogcard-col1__img">
							</div>
							<div class="blogcard-col2">
								<div class="blogcard-col2__row flex-i justify-between">
									<div class="blogcardMini">
										<img src="/assets/images/Writer.png" alt="" class="blogcardMini__img">
										<p class="blogcardMini__name">
											{{blog.writer}}
										</p>
									</div>
									<div class="blogcardMini2">
										<div class="blogcardMini2Box flex-a r-50">
											<i class="fa-regular fa-comment"></i>
										</div>
										<p class="blogcardMini2__p">
											{{blog.comments.length}}
											Comments
										</p>
									</div>
								</div>
								<div class="blogcard-col2Body">
									<Link :href="'/post/' + blog.id + '/show'"  class="blogcard-col2Body_h">
										{{blog.title.slice(0, 60)}}								
									</Link>
									<p class="blogcard-col2Body_p" v-html="blog.description.slice(0, 200)"></p>
								</div>
								<div class="blogcard-col2-row2">
									<p class="blogcard-col2-row2-tag" v-if="blog.category">
										{{blog.category.title.slice(0, 22)}}
									</p>
									-
									<p class="blogcard-col2-row2-p">
										{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
									</p>
									<Link :href="'/post/' + blog.id + '/show'" class="blogcard-col2-row2link">
										<i class="fa-solid fa-arrow-right"></i>
										<span class="go">Go</span>
									</Link>
								</div>
							</div>
						</div>



						<div class="pagination" v-scroll-reveal data-aos-delay="50">

							
							<Link :href="posts_new.prev_page_url" v-show="posts_new.prev_page_url != null">
								<i class="fa-solid fa-arrow-left"></i>
							</Link>
							
								<Link v-for="num in posts_new.last_page"
									:key="num"
									class="page" 
									:class="posts_new.current_page == num ? 'active' : ''"
									:href="'blog' + '?page=' + num">
									{{ num }}
								</Link>
							

							<Link :href="posts_new.next_page_url" v-show="posts_new.next_page_url != null">
								<i class="fa-solid fa-arrow-right"></i>
							</Link>

						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog end -->
	<section class="blogrelted">
		<div class="blogrelted-top">
			<div class="container flex">
				<span class="blogrelted-top__h mx-4 pt-1">Recommended </span>
                <span class="mx-5 flex">
                <div @click="slidePrev()" class="mx-2 swiper-button-prev blrelSlArr blrelSlArr1 flex-a r-50">
				<i class="fa-solid fa-chevron-left"></i>
                </div>
                <div @click="slideNext()" class="mx-2  swiper-button-next blrelSlArr blrelSlArr2 flex-a r-50">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                </span>
               
			</div>
		</div>
        <div class="blrelSl">
        <swiper
            ref="{swiperRef}"
            :modules="modules"
            :centeredSlides= "true"
            :navigation="true"
            :slides-per-view="3.3"
            :space-between="30"
            :loop="true"
            :speed="800"
            :autoplay="{
                delay: 3000,
                disableOnInteraction: false,
            }"
            @swiper="setSwiperRef"
            :scrollbar="{ draggable: true }"
            >


                <swiper-slide v-for="(blog, index) in posts_random" :key="index">
					<div class="blrelSlCrd">
						<div class="blrelSlCrd-tag" v-if="blog.category">{{ blog.category.title.slice(0, 22) }}</div>
						<img :src="blog.image" :alt="blog.title" class="blrelSlCrd__img">
						<div class="blrelSlCrd__content">
							<Link :href="'/post/' + blog.id + '/show'" class="blrelSlCrd__h">{{ blog.title.slice(0, 60) }}</Link>
							<div class="blrelSlCrd__wrprotr flex-i justify-between">
								<div class="blrelSlCrd__wrpr flex-i">
									<div class="blrelSlCrd-cl1">
										<div class="blrelSlCrd-mini flex-a r-50">
											<i class="fa-solid fa-calendar-days"></i>
										</div>
										<p class="blrelSlCrd-cl1__p">
											{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit' }) }}
										</p>
									</div>
									<div class="blrelSlCrd-cl1">
										<div class="blrelSlCrd-mini flex-a r-50">
											<i class="fa-regular fa-comment"></i>
										</div>
										<p class="blrelSlCrd-cl1__p">Comments {{ blog.comments.length }}</p>
									</div>
								</div>
								<div class="blrelSlCrd-cl3">
									<div class="blrelSlCrd-cl3-mini flex-a r-50">
										<img src="/assets/images/Writer.png" alt="" class="blrelSlCrd-pfimg__img">
									</div>
									<p class="blrelSlCrd-cl3__p">{{ blog.writer }}</p>
								</div>
							</div>
							
						</div>
					</div>
				</swiper-slide>
			
        </swiper>
        </div>
	</section>
	<!-- blog Related end -->

    </MainLayout>
</template>
