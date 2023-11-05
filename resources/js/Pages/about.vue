<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { ref, onMounted } from "vue";
const showContent = ref(true);
const openForm = ref(0);

// Toggle the value of openForm
const toggleOpenForm = () => {
  openForm.value = openForm.value === 1 ? 0 : 1;
}

</script>

<script>
    import {Head} from '@inertiajs/vue3';
	import { Link } from '@inertiajs/inertia-vue3';

    export default {
        props: {
			meta: Object,
			slider: Object,
			abouts: Object,
			projects_count: Number,
			services: Object,
			clients_count: Number,
			locale: {
				type: String,
				default: () => $page.props.locale?.locale || 'en',
			},
        },
        data(){
            return {
                form: {
                    from: '',
                    email: '',
                    phone: '',
                    message: '',
                },
                commentSent: false,
            }
        },
        methods: {
            submit () {
                try {
                    axios.post('/message', this.form ).then((res)=>{
                        // console.log(res)
                        this.form.from = ''; 
                        this.form.email = ''; 
                        this.form.phone = ''; 
                        this.form.message = ''; 
                        this.commentSent = true;
                        setTimeout(() => {
                            this.commentSent = false;
                        }, 5000);

                    });
                } catch (error) {
                    // console.error('Error submitting comment:', error);
                }
            },
        },

        }

</script>


<template>
    <Head>
        <title>{{ $t('about') }}</title>
		<meta name="description" :content="meta">
    </Head>


	<MainLayout>
    <div class="banner">
		<div class="container-fluid">
			<div class="banner-wrpr">
				<div class="bannerBox1 hmabtBox2"   data="50" v-scroll-reveal-fade-up>
					<h2 class="bannerBox1__h">
						<span class="color-main">Autocad</span>
						<span>Engineering</span>
					</h2>
					<p class="bannerBox1__p">Consultancy The Modern Art Of Simplicy</p>
					<div class="bannerBox1__link flex-a active">
						<span @click="toggleOpenForm">
						Get a Consultation

						</span>
						<form  @submit.prevent="submit"  class="bannerform" :class="{'active' :openForm}"> 
							<h2 class="bannerform__h">
								Have a question?
								<img src="assets/images/question.png" alt="" class="bannerform__img">
							</h2>

							<div v-if="commentSent" class="getInTBox-p">{{ $t('sent_succesfully') }}!</div>
							<div class="getInTBox-p" style="color: rgb(244, 0, 0);" v-if="form.from.length > 254">
								{{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
							</div>
							<div class="getInTBox-p" style="color: rgb(244, 0, 0);" v-if="form.phone.length > 254">
								{{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
							</div>
							<div class="getInTBox-p" style="color: rgb(244, 0, 0);" v-if="form.email.length > 254">
								{{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
							</div>
							<div class="getInTBox-p" style="color: rgb(244, 0, 0);" v-if="form.message.length > 1499">
								{{ $t('maximum_number') }} <b>1500</b> {{ $t('characters') }}
							</div>

							<div class="prdTabRCol1-wrpr position-relative">
								<input type="text" class="inputF"
								:placeholder="$t('Your_full_name')" v-model="form.from" maxlength="255" required>
								<span class="form-input-sm-name">{{ $t('Your_full_name') }}</span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<input class="inputF"
								:placeholder="$t('email')" v-model="form.email" maxlength="255" type="email">
								<span class="form-input-sm-name">{{ $t('email') }}</span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<input class="inputF"
								v-model="form.phone" maxlength="255" :placeholder="$t('phone')" type="Phone">
								<span class="form-input-sm-name">{{ $t('phone') }}</span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<textarea class="inputF inputF-textarea"
								v-model="form.message" maxlength="1500" required  :placeholder="$t('message')"></textarea>
								<span class="form-input-sm-name">{{ $t('message') }}</span>
							</div>
							<button type="submit" class="bannerform__btn">{{ $t('send') }}</button>
						</form>
					</div>					
					<form action="" class="bnrform">
						<input type="text" placeholder="Search for " class="bnrform__input">
						<button type="submit" class="bnrform__btn"><i class="fa-solid fa-magnifying-glass"></i></button>
					</form>
				</div>
				<div class="bannerBox2 hmabtBox2"   data="150" v-scroll-reveal-zoom-in>
					<div class="bannerBox2__col1">
						<div class="bannerBox2__col1-inner1">
							<img :src="slider[0].image" :alt="slider[0].title[locale]" class="bannerBox2__col1img">
						</div>
						<div class="bannerBox2__col1-inner2">
							<img :src="slider[1].image" :alt="slider[1].title[locale]" class="bannerBox2__col1img">
						</div>
					</div>
					<div class="bannerBox2__col2">
						<div class="bannerBox2__col2-inner1">
							<img :src="slider[2].image" :alt="slider[2].title[locale]" class="bannerBox2__col1img">
						</div>
						<div class="bannerBox2__col2-inner2">
							<img :src="slider[3].image" :alt="slider[3].title[locale]" class="bannerBox2__col1img">
						</div>
					</div>
					<div class="bannerBox2__col3">
						<div class="bannerBox2__col1-inner1">
							<img :src="slider[4].image" :alt="slider[4].title[locale]" class="bannerBox2__col1img">
						</div>
						<div class="bannerBox2__col1-inner2">
							<img :src="slider[5].image" :alt="slider[5].title[locale]" class="bannerBox2__col1img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
    <div class="aboutpg">
		<div class="container">
			<div class="aboutPagecntnt-wrpr">
				<div class="aboutPageB1" v-scroll-reveal data="50">
					<div class="aboutPageB1__mini" v-if="abouts[0]">
						<div class="aboutPageB1ab"></div>
						<img :src="abouts[0].image" :alt="abouts[0].title[locale]" class="aboutPageB1__mini-img">
						<!-- <div class="aboutPageB1__content">
							<p class="aboutPageB1__content-p">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
							<div class="flex-i gap-2 badgebcx">
								<i class="fa-duotone fa-badge-check"></i>
								<h2 class="aboutPageB1__content-h">Eng. Suhail Darwish</h2>
							</div>
							<p class="badgebcx__p">Founder & G. Manager</p>
						</div> -->
						<div class="aboutPageB1-ab2 flex-i">
							<img src="/assets/images/aboout1.png" alt="" class="aboutPageB1-ab2__img">
							<Link href="/team" class="aboutPageB1-ab2-mini flex-a r-50">
								<i class="fa-solid fa-plus"></i>
							</Link>
						</div>
					</div>
				</div>
				<div class="aboutPageB2"  data="50" v-if="abouts[0]" v-scroll-reveal>
					<h2 class="aboutPageB2__h">
						{{abouts[0].title[locale].slice(0, 50)}}
					</h2>
					<p class="aboutPageB2__p" v-html="abouts[0].description[locale].slice(0, 800)"></p>

					<div class="aboutPageB2-wrpr flex-i">

						<Link href="/team" class="aboutPageB2-tab flex-a">
							<h2 class="aboutPageB2-tab__h">
								{{ $t('work_team') }}
							</h2>
						</Link>

						<div class="aboutPageB2-tab aboutPageB2-tab2 flex-a">
							<div class="aboutPageB2-tab2-ab">
								<i class="fa-solid fa-caret-down"></i>
								<Link :href="'/service/' + service.id + '/show'" 
									class="aboutPageB2-tab2-abbox flex-a" 
									v-for="(service, i) in services"
									v-show="i < 4" :key="i">
									
									{{service.title[locale].slice(0, 10)}}
								</Link>
							</div>

							<Link href="/services" class="aboutPageB2-tab__h">
								{{ $t('our_services') }}
							</Link>

						</div>

					</div>
				</div>
			</div>
			<div class="aboutpgWrpr2" v-if="abouts[1]">
				<img :src="abouts[1].image" :alt="abouts[1].title[locale]" class="aboutpg__img"  data="50" v-scroll-reveal>
				<h2 class="aboutpgWrpr2__h">{{ abouts[1].title[locale].slice(0,13) }}</h2>
			</div>
		</div>
	</div>
    <!-- about end -->
    <div class="abouttpg2" id="abti">
		<div class="container">
			<div class="aboutPageBox2-wrpr">
				<div class="aboutPageBox2col2">
					<h2 class="abouttpg2__h" data="50" v-scroll-reveal>
						<img src="assets/images/Autocad.png" alt="" class="abouttpg2__img">
						{{ $page.props.setting_share.site_title[$page.props.locale].slice(0,30) }}
					</h2>
					<div class="abtPgBx2cl2Iner"  data="150" v-scroll-reveal>
						<div class="abtPgBx2cl2Iner-tab" v-if="abouts[2]">{{abouts[2].title[locale].slice(0, 50)}}</div>
						<p class="abtPgBx2cl2Iner__p" v-html="abouts[2].description[locale].slice(0, 200)" v-if="abouts[2]"></p>
						<div class="abtPgBx2cl2Iner-tab" v-if="abouts[3]">{{abouts[3].title[locale].slice(0, 50)}}</div>
						<p class="abtPgBx2cl2Iner__p" v-html="abouts[3].description[locale].slice(0, 200)" v-if="abouts[3]"></p>

						<div class="abtPgBx2cl2Iner-wrpr flex justify-center">
							<div class="abtPgBx2cl2Iner-wrpr-tab flex-a ">
								<div class="abtbxmini">
									<i class="fa-solid fa-circle-user"></i>
									<p class="abtbxmini__p">{{ $t('service') }}</p>
								</div>
								<h2 class="abtPgBx2cl2Iner-wrpr-tab-h">{{ services.length }}</h2>
							</div>
							<div class="abtPgBx2cl2Iner-wrpr-tab flex-a ">
								<div class="abtbxmini">
									<i class="fa-duotone fa-sitemap"></i>
									<p class="abtbxmini__p">{{ $t('client') }}</p>
								</div>
								<h2 class="abtPgBx2cl2Iner-wrpr-tab-h">{{ clients_count }}</h2>
							</div>
							<div class="abtPgBx2cl2Iner-wrpr-tab flex-a ">
								<div class="abtbxmini">
									<i class="fa-duotone fa-folder-open"></i>
									<p class="abtbxmini__p">{{ $t('project') }}</p>
								</div>
								<h2 class="abtPgBx2cl2Iner-wrpr-tab-h">{{ projects_count }}</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="aboutPageBox2col1"  data="150" v-scroll-reveal>
					<img src="/assets/images/ab.png" alt="" class="aboutPageBox2col1__abimg">
					<div class="aboutPageBox2col1-ab"></div>
					<div class="aboutPageBox2col1-logo">
						<img :src="$page.props.setting_share.logo_sm_white" 
							:alt="$page.props.setting_share.site_title[$page.props.locale].slice(0,20)" 
							v-if="$page.props.setting_share.logo_sm_white"
							class="aboutPageBox2col1-logo-img">
					</div>
					<img :src="abouts[1].image" :alt="abouts[1].title[locale]" class="aboutPageBox2col1__img">
				</div>
			</div>
		</div>
	</div>
	<!-- about us end -->
	</MainLayout>

	
</template>
