<script setup>
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
        meta: Object,
        slider: Object,
        types_project: Object,
        projects: Object,
		locale: {
			type: String,
			default: () => $page.props.locale?.locale || 'en',
		},
    })

</script>
<template>
	<Head>
        <title>{{ $t('projects') }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
    	<section class="prjpag">
		<div class="container">
			<div class="prjpagWrpr">
				<div class="prjpagbox" v-scroll-reveal data-aos-delay="50">
					<div class="prjpagbox__col1">
						<div class="prjpagbox__col1-inner1">
							<img :src="slider[0].image" :alt="slider[0].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-swatchbook"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[0].title[locale].slice(0,30) }}</p>
							</div>
						</div>
						<div class="prjpagbox__col1-inner2">
							<img :src="slider[1].image" :alt="slider[1].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-landmark"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[1].title[locale].slice(0,30) }}</p>
							</div>
						</div>
					</div>
					<div class="prjpagbox__col2">
						<div class="prjpagbox__col2-inner1">
							<img :src="slider[2].image" :alt="slider[2].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-swatchbook"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[2].title[locale].slice(0,30) }}</p>
							</div>
						</div>
						<div class="prjpagbox__col2-inner2">
							<img :src="slider[3].image" :alt="slider[3].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-landmark"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[3].title[locale].slice(0,30) }}</p>
							</div>
						</div>
					</div>
					<div class="prjpagbox__col3">
						<div class="prjpagbox__col1-inner1">
							<img :src="slider[4].image" :alt="slider[4].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-compass-drafting"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[4].title[locale].slice(0,30) }}</p>
							</div>
						</div>
						<div class="prjpagbox__col1-inner2">
							<img :src="slider[5].image" :alt="slider[4].title[locale]" class="prjpagbox__col1img">
							<div class="prjpagboxTab">
								<div class="prjpagboxTab-mini flex-a r-50">
									<i class="fa-duotone fa-compass-drafting"></i>
								</div>
								<p class="prjpagboxTab-p">{{ slider[5].title[locale].slice(0,30) }}</p>
							</div>
						</div>
					</div>
				</div>
				<ul class="prjpagList" role="tablist" data-aos="fade-down">

					<li class="prjpagList__item" role="presentation">
						<button class="prjpagList__link active" type="button" data-bs-toggle="pill" data-bs-target="#p100" role="tab" aria-selected="true">
							<i class="fa-solid fa-bars"></i>
							All
						</button>
					</li>

					<li class="prjpagList__item" role="presentation" v-for="(type, i) in types_project">
						<button class="prjpagList__link" type="button" data-bs-toggle="pill" :data-bs-target="'#p' + type.id" role="tab" aria-selected="false">
							{{ type.type[locale].slice(0.30) }}
						</button>
					</li>

=				</ul>
				<div class="tab-content prjpag-tab-content" v-scroll-reveal>

					<div class="tab-pane fade show active" id="p100" role="tabpanel" tabindex="0">
						<div class="row prjpagCard-outr">

							<div class="col-md-6 col-lg-4" v-for="project in projects">
								<Link :href="'/project/' + project.id + '/show'" class="prjpagCard">
									<img :src="project.image" :alt="project.name[locale].slice(0,30)" class="prjpagCard__img">
									<div class="prjpagCard__content">
										<h6 class="prjpagCard__h">{{ project.name[locale].slice(0,30) }}</h6>
										<div class="prjpagCard-wrpr">
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-tag"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.contract_value }}
												</h6>
											</div>
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.contract_duration }}
												</h6>
											</div>
										</div>
										<div class="prjpagCard-wrpr2">
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-location-dot"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.city[locale].slice(0,30) }}
												</h6>
											</div>
											<div class="prjpagCard__link">
												<div class="prjpagCard__linkmini flex-a r-50">
													<i class="fa-solid fa-arrow-up-right"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													Details
												</h6>
											</div>
										</div>
									</div>
								</Link>
							</div>

						</div>
					</div>

					<div class="tab-pane fade" :id="'p' + ty.id" role="tabpanel" tabindex="0" v-for="(ty, i) in types_project">
						<div class="row prjpagCard-outr">

							<div class="col-md-6 col-lg-4" v-for="project in ty.projects">
								<Link :href="'/project/' + project.id + '/show'" class="prjpagCard">
									<img :src="project.image" :alt="project.name[locale].slice(0,30)" class="prjpagCard__img">
									<div class="prjpagCard__content">
										<h6 class="prjpagCard__h">{{ project.name[locale].slice(0,30) }}</h6>
										<div class="prjpagCard-wrpr">
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-tag"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.contract_value }}
												</h6>
											</div>
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.contract_duration }}
												</h6>
											</div>
										</div>
										<div class="prjpagCard-wrpr2">
											<div class="prjpagCardmini">
												<div class="prjpagCardminibox flex-a r-50">
													<i class="fa-solid fa-location-dot"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													{{ project.city[locale].slice(0,30) }}
												</h6>
											</div>
											<div class="prjpagCard__link">
												<div class="prjpagCard__linkmini flex-a r-50">
													<i class="fa-solid fa-arrow-up-right"></i>
												</div>
												<h6 class="prjpagCardmini__h">
													Details
												</h6>
											</div>
										</div>
									</div>
								</Link>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- projects end -->       

    </MainLayout>
</template>
