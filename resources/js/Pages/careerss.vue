<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    meta: Object,
    careerss: Object,
    locale: {
        type: String,
        default: () => $page.props.locale?.locale || 'en',
    },
})


</script>
<template>
	<Head>
        <title> {{ $t('careers') }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
        <section class="careers">
		<div class="container">
			<div class="careerswrpr">
				<div class="careerswrpr__top" data-aos="fade-down" data-aos-delay="50">
					<img src="/assets/images/career-img.png" alt="" class="careerswrpr__top-img">
					<div class="careerswrpr-row">
						<div class="careerswrpr-row-mini flex-a r-50">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h2 class="careerswrpr-row__h">Careers at Autocad</h2>
					</div>
					<p class="careerswrpr__top-p">Join The Team</p>
				</div>
				<div class="careerswrpr__body">
					<p class="careerswrpr__body-p">{{ careerss.length }} Jobs available</p>


					<div class="careerswrpr__bodybox" v-scroll-reveal data-aos-delay="150" v-for="career in careerss">
						<div class="careerswrpr__row careerswrpr__row1">
							<i class="fa-sharp fa-solid fa-circle-check"></i>
							<h2 class="careerswrpr__row-h2">{{ career.title[locale].slice(0,50) }}</h2>
							<Link :href="'/applicant/' + career.id + '/show'" class="careerswrpr__btn">Learn More</Link>
						</div>
						<div class="careerswrpr__row">
							<i class="fa-solid fa-clock"></i>
							<h6 class="careerswrpr__row-h3">{{ career.Job_type.slice(0,50) }}</h6>
						</div>
						<div class="careerswrpr__row">
							<i class="fa-sharp fa-solid fa-circle-dollar"></i>
							<h6 class="careerswrpr__row-h3">{{ career.expected_salary }}</h6>
						</div>
						<div class="careerswrpr__row">
							<i class="fa-solid fa-books"></i>
							<h6 class="careerswrpr__row-h3" v-html="career.description[locale].slice(0,500)"></h6>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</section>
	<!-- careers end -->

    </MainLayout>
</template>
