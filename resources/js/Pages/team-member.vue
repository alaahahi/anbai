<script setup>
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

import MainLayout from '@/Layouts/MainLayout.vue';

	defineProps({
        meta: Object,
        slider: Object,
        member: Object,
        locale: {
            type: String,
            default: () => $page.props.locale?.locale || 'en',
        },
    })

</script>
<template>
	<Head>
        <title>{{ $t('team') }} - {{ member.title[locale].slice(0, 100) }} ( {{ member.position[locale].slice(0, 35) }} ) </title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
		<section class="teampage">
		<img src="/assets/images/icn1.png" alt="" class="teampage_img-ab">
		<img src="/assets/images/icn2.png" alt="" class="teampage_img-ab2">
		<div class="container">
			<div class="teamwrpr">
				<div class="teamwrpr__banner">
					<img src="/assets/images/team/teampage-bg.png" alt="" class="teamwrpr__img"  data-aos-delay="50"  v-scroll-reveal-zoom-in>
					<div class="teamDetailsbn">
						<div class="teamDetailsbnBox" data-aos="fade-down" data-aos-delay="150">
							<img :src="member.image" :alt="member.title[locale].slice(0, 35)" class="teamDetailsbnBox__img">
						</div>
						<div class="teamDetailsbn__tabotr">
							<div class="teamDetailsbn__tab" v-scroll-reveal data-aos-delay="250">
								<i class="fa-duotone fa-badge-check"></i>
								{{ member.title[locale].slice(0, 100) }}
							</div>
							<div class="teamDetailsbnBox-innwrpr flex-i" v-scroll-reveal data-aos-delay="350">
								<a :href="social.link_first + social.link_last" class="teamDetailsbnBox__link"
									v-for="social in member.socials" 
									v-show="social.title == 'whatsapp'"
									>
									<i class="fa-brands fa-whatsapp"></i>
									Whatsapp
								</a>
								<a :href="'tel:' + member.phone" class="teamDetailsbnBox__link teamDetailsbnBox__link2">
									<i class="fa-regular fa-phone"></i>
									Call Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="teamBody teamBody2">
					<ul class="teamdetlist"  role="tablist" data-aos="fade-down" data-aos-delay="50">
						<li class="teamdetlist__item" role="presentation">
							<div class="teamdetlist__btn active" data-bs-toggle="pill" data-bs-target="#td1" type="button" role="tab" aria-selected="true">
								Bio
							</div>
						</li>
						<li class="teamdetlist__item" role="presentation">
							<div class="teamdetlist__btn" data-bs-toggle="pill" data-bs-target="#td2" type="button" role="tab" aria-selected="false">
								Contact
							</div>
						</li>
						<li class="teamdetlist__item" role="presentation">
							<div class="teamdetlist__btn" data-bs-toggle="pill" data-bs-target="#td3" type="button" role="tab" aria-selected="false">
								Others
							</div>
						</li>
					</ul>
					<div class="tab-content teamdetcontent" v-scroll-reveal data-aos-delay="150">
						<div class="tab-pane fade show active teamdetcontenttab" id="td1" role="tabpanel" tabindex="0">
							<h2 class="teamdetcontent__h">{{ member.position[locale].slice(0, 35) }}</h2>
							<p class="teamdetcontenttab__p" v-html="member.bio[locale].slice(0, 200)"></p>
						</div>
						<div class="tab-pane fade teamdetcontenttab" id="td2" role="tabpanel" tabindex="0">
							<div class="teamdetcontenttab-row">
								<div class="teamdetcontenttab-mini flex-a r-50">
									<i class="fa-regular fa-phone"></i>
								</div>
								<p class="teamdetcontenttab-row__p">Phone : </p>
								<a :href="'tel:' + member.phone" class="teamdetcontenttab-row__link">{{ member.phone.slice(0, 40) }}</a>
							</div>
							<div class="teamdetcontenttab-row">
								<div class="teamdetcontenttab-mini flex-a r-50">
									<i class="fa-light fa-envelope"></i>
								</div>
								<p class="teamdetcontenttab-row__p">Email : </p>
								<a :href="'email:' + member.email.slice(0, 40)" class="teamdetcontenttab-row__link">{{ member.email.slice(0, 40) }}</a>
							</div>
							<div class="teamdetcontenttab-row" v-if="member.socials.lingth > 0">
								<div class="teamdetcontenttab-mini flex-a r-50">
									<i class="fa-light fa-thumbs-up"></i>
								</div>
								<p class="teamdetcontenttab-row__p">Social:</p>
								<ul class="teamdetcontenttab__list">

									<li class="teamdetcontenttab__item" v-for="(social, i) in member.socials">
										<a target="_blank" :href="social.link_first + social.link_last" 
											class="tDetList-teamdetcontenttab__link r-50 flex-a"
											v-html="social.icon" style="font-size: 20px;">
										</a>
									</li>

								</ul>
							</div>
						</div>
						<div class="tab-pane fade teamdetcontenttab" id="td3" role="tabpanel" tabindex="0">
							<h2 class="teamdetcontent__h">support: {{ member.support[locale] }}</h2>
							<p class="teamdetcontenttab__p m-1"><b>experience:</b> {{ member.experience }}</p>
							<p class="teamdetcontenttab__p m-1"><b>completed projects:</b> {{ member.completed_projects }}</p>
							<p class="teamdetcontenttab__p m-1"><b>Join_at:</b> {{ member.Join_at }}</p>
							<p class="teamdetcontenttab__p m-1"><b>langs:</b> {{ member.langs }}</p>
							<p class="teamdetcontenttab__p  m-1" v-html="member.address[locale].slice(0, 200)"></p>
						</div>
					</div>
					<h3 class="teamdetcontent__h3">Check More :</h3>
					<div class="teamdetcontenttabbox"  data-aos-delay="50"  v-scroll-reveal-zoom-in>
						<img src="/assets/images/aboout1.png" alt="" class="teamdetcontenttab__img">
						<Link href="/team" class="teamdetcontenttabbox__link">
							<i class="fa-solid fa-plus"></i>
						</Link>
					</div>
				</div>
			</div>
		</div>
	</section>

		
    </MainLayout>
</template>
