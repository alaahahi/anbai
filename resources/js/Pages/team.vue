<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
        meta: Object,
        slider: Object,
        types_members: Object,
        members: Object,
        locale: {
            type: String,
            default: () => $page.props.locale?.locale || 'en',
        },
    })


</script>
<template>
	<Head>
        <title>{{ $t('team') }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
	<section class="teampage">
		<img src="assets/images/icn1.png" alt="" class="teampage_img-ab">
		<img src="assets/images/icn2.png" alt="" class="teampage_img-ab2">
		<div class="container">
			<div class="teamwrpr">
				<div class="teamwrpr__banner"  v-scroll-reveal="{ delay: 50 }">
					<img src="assets/images/team/teampage-bg.png" alt="" class="teamwrpr__img">
					<div class="teamwrpr__btn">Our Pro Team</div>
				</div>
				<div class="teamBody">
					<div class="row">
						<div class="col-sm-12">
							<ul class="teampagelst flex-i" role="tablist"  v-scroll-reveal-fade-down="{ delay: 200 }" >
								
								<li class="teampagelst__item" role="presentation">
									<div class="teampagelst__btn active" data-bs-toggle="pill" data-bs-target="#t100" type="button" role="tab" aria-selected="true">All</div>
								</li>

								<li class="teampagelst__item" role="presentation" v-for="(ty, i) in types_members">
									<div class="teampagelst__btn" data-bs-toggle="pill" :data-bs-target="'#t' + ty.id" 
										type="button" role="tab" aria-selected="false" tabindex="-1">
										{{ ty.type[locale].slice(0.30) }}
									</div>
								</li>

							</ul>
						</div>
					</div>
					<div class="tab-content teampagecontent" v-scroll-reveal-fade-down="{ delay: 500 }">
						<div class="tab-pane fade show active" id="t100" role="tabpanel" tabindex="0">
							<div class="row teampagecontentwrpr">

								<div class="col-md-6 col-lg-4 col-xl-3"  v-for="(member, i) in members" :key="i">
									<div class="teampagecrd">
										<div class="teampagecrd-hdr">
											<img :src="member.image" :alt="member.title[locale]" class="teampagecrd-hdr__img">
											<div class="teampagecrd-hdr-tab">
												{{ member.position[locale].slice(0, 35) }}
											</div>
										</div>
										<Link :href="'/team/' + member.id + '/show'" class="teampagecrd__body">
											<i class="fa-duotone fa-badge-check"></i>
											<h2 class="teampagecrd__h">{{ member.title[locale].slice(0, 35) }}</h2>
										</Link>
									</div>
								</div>

								
							</div>
						</div>

						<div class="tab-pane fade" :id="'t' + ty.id" role="tabpanel" tabindex="0" v-for="(ty, i) in types_members">
							<div class="row teampagecontentwrpr">

								<div class="col-md-6 col-lg-4 col-xl-3" v-for="(member, i) in ty.members" :key="i">
									<div class="teampagecrd">
										<div class="teampagecrd-hdr">
											<img :src="member.image" :alt="member.title[locale]" class="teampagecrd-hdr__img">
											<div class="teampagecrd-hdr-tab">
												{{ member.position[locale].slice(0, 35) }}
											</div>
										</div>
										<Link :href="'/team/' + member.id + '/show'" class="teampagecrd__body">
											<i class="fa-duotone fa-badge-check"></i>
											<h2 class="teampagecrd__h">{{ member.title[locale].slice(0, 35) }}</h2>
										</Link>
									</div>
								</div>
								
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</section>

    </MainLayout>

	
</template>
