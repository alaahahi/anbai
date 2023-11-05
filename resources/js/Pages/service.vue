<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

	defineProps({
        meta: Object,
        slider: Object,
        service: Object,
        previous: String,
        next: String,
        related_services: Object,
        locale: {
            type: String,
            default: () => $page.props.locale?.locale || 'en',
        },
    })


</script>
<template>
	<Head>
        <title>{{ $t('service') }}  - service.title[locale].slice(0, 25)</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
        <section class="serpage">
		<div class="container">
			<div class="serpagewrpr">
				<div class="serpagbner" v-scroll-reveal data-aos-delay="50">
					<img :src="slider.image" :alt="slider.title[locale]" class="serpagbner__img">
				</div>
				<div class="serpagbner__h serpagbner__h2" v-scroll-reveal data-aos-delay="150">Architecture Design</div>
				<div class="serdetrow">
					<div class="serdetCol" v-scroll-reveal data-aos-delay="250">
						<p class="serdetCol__p">
							{{service.description[locale]}}
						</p>
					</div>
					<div class="serdetCol2" v-scroll-reveal data-aos-delay="350">
						<div class="serdetCol2Box1">
							<img src="/assets/images/services/5.png" alt="" class="serdetCol2Box1__img">
						</div>
						<div class="serdetCol2Box1">
							<img src="/assets/images/services/6.png" alt="" class="serdetCol2Box1__img">
						</div>
						<div class="serdetCol2Box2">
							<img :src="service.image" :alt="service.title[locale].slice(0, 9)" class="serdetCol2Box1__img">
						</div>
					</div>
				</div>
				<div class="serdetpagirow">
					<div class="serdetpagiBox serdetpagiBox1">
						<Link :href="'/service/' + previous + '/show'" class="serdetpagiBox__link" v-show="previous">
							<i class="fa-solid fa-arrow-left"></i>
							<span>{{ $t('previous') }}</span>
						</Link>
					</div>
					<div class="serdetpagiBox serdetpagiBox2">
						<Link :href="'/service/' + next + '/show'" class="serdetpagiBox__link" v-show="next">
							<span>{{ $t('next') }}</span>
							<i class="fa-solid fa-arrow-right"></i>
						</Link>
					</div>
				</div>
			</div>
		</div>
	</section>

    </MainLayout>
</template>
