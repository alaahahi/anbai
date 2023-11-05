<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Vue3AutoCounter from 'vue3-autocounter';
import { ref, onMounted,onUnmounted  } from "vue";
import { useCookies } from "vue3-cookies";
const { cookies } = useCookies();

const scrollPosition = ref(0);
const counter1 = ref(null)
const counter2 = ref(null)
const counter3 = ref(null)
const run = ref(true);

// Function to handle the scroll event
const handleScroll = () => {
  // Get the scroll position from the window object
  scrollPosition.value = window.scrollY || window.pageYOffset;
  if(scrollPosition.value>1000 && run.value==true) {
   counter1.value.start();
   counter2.value.start();
   counter3.value.start();
	run.value=false;
  }
};

// Attach the scroll event listener when the component is mounted
onMounted(() => {
if(!cookies.get('lnag')){
    cookies.set("lnag", "en");
}
if(!localStorage.getItem('lang')){
	localStorage.setItem('lang', "en");
}
  window.addEventListener('scroll', handleScroll);
});

// Remove the scroll event listener when the component is unmounted
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
})
</script>

<script>

export default {
    data(){
        return {
            form: {
                email: ''
            },
            emailSent: false,
        }
    },
    methods: {
        submit () {
            try {
                axios.post('/maillist', this.form ).then((res)=>{
                    // console.log(res)
                    this.emailSent = true;
                    this.form.email = ''; 
                    setTimeout(() => {
                        this.emailSent = false;
                    }, 5000);

                });
            } catch (error) {
                // console.error('Error submitting email:', error);
            }
        },
    }

}

</script>

<template>
	<footer class="footer">
		<div class="ftrTop">
			<div class="container">
				<div class="ftrTopWrpr">
					<div class="ftrTopbox1">
						<p class="ftrTopbox1__p">Sign Up For Our Newsletter To Get All The New On The Market. </p>
						<div class="ftrTopbox1__p" style="color: rgb(244, 0, 0);" v-if="form.email.length > 254">
							The maximum number of characters allowed in this field is <b>255</b> characters
						</div>
						<div class="ftrTopbox1__p" style="color: rgb(54, 57, 218);" v-if="emailSent">{{ $t('sent_succesfully') }}!</div>

						<form @submit.prevent="submit" class="ftrnnewsletr">
							<input class="ftrnnewsletr__input" type="email" :placeholder="$t('email')" v-model="form.email" maxlength="255">
							<button class="ftrnnewsletr__btn flex-a" type="submit">{{ $t('Subscribe') }}</button>
						</form>
					</div>
					<div class="ftrTopbox2">

						<div class="ftrTopTab">
							<div class="ftrTopTabmini">
								<i class="fa-duotone fa-folder-open"></i>
								<p class="ftrTopTabmini__p">Projects</p>
							</div>
							<h6 class="ftrTopTab__h">
								<span class="num">
								<vue3-auto-counter ref="counter1" :startAmount="0" :endAmount="$page.props.projects_count" :duration="3"  :autoinit="false" />

								</span>
								+
							</h6>
						</div>
						<div class="ftrTopTab">
							<div class="ftrTopTabmini">
								<i class="fa-duotone fa-sitemap"></i>
								<p class="ftrTopTabmini__p">Client</p>
							</div>
							<h6 class="ftrTopTab__h">
								<span class="num">
									<vue3-auto-counter ref="counter2" :startAmount="0" :endAmount="$page.props.clients_count" :duration="3"  :autoinit="false" /></span>
								+
							</h6>
						</div>
						<div class="ftrTopTab">
							<div class="ftrTopTabmini">
								<i class="fa-duotone fa-compass-drafting"></i>
								<p class="ftrTopTabmini__p">Architects</p>
							</div>
							<h6 class="ftrTopTab__h">
								<span class="num">			<vue3-auto-counter ref="counter3" :startAmount="0" :endAmount="$page.props.team_count" :duration="3"  :autoinit="false" /></span>
								+
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ftrBtm">
			<div class="container">
				<div class="ftrBtm-wrpr">
					<div class="ftrBtmCol1">
						<a href="/" class="ftrBtmCol1__logo flex-a">
							<img :src="$page.props.setting_share.logo" 
								:alt="$page.props.setting_share.site_title[$page.props.locale].slice(0,20)" 
								v-if="$page.props.setting_share.logo" class="ftrBtmCol1__img">

						</a>
						<p class="ftrBtmCol1__p">
							{{ $page.props.setting_share.description[$page.props.locale].slice(0,300) }}
						</p>
					</div>
					<div class="ftrBtmCol2">
						<!-- <h2 class="ftrBtmCol2__h">AutoCad</h2> -->
						<ul class="ftrBtmlist">

							<li  class="ftrBtmlist__item" v-for="customize in $page.props.customize_share" 
								v-show="customize.active_navbar == '1'">


								<Link v-if="customize.base_module_name == 'home'" :href="customize.link" class="ftrBtmCol2__h"> 
									{{ $page.props.setting_share.site_title[$page.props.locale].slice(0,12) }}
								</Link>

								<Link v-else :href="customize.link" class="ftrBtmlist__link"> 
									{{ customize.title[$page.props.locale] }}
								</Link>

							</li>


						</ul>
					</div>
					<div class="ftrBtmCol3">
						<h2 class="ftrBtmCol2__h">Get In Touch</h2>
						<ul class="ftrBtmlist">
							<li class="ftrBtmlist__item">
								<a :href="'tel:' + $page.props.contact_share.office_phone" class="ftrBtmlist__link">{{ $page.props.contact_share.office_phone }}</a>
							</li>
							<li class="ftrBtmlist__item">
								<a :href="'tel:' + $page.props.contact_share.phone" class="ftrBtmlist__link">{{ $page.props.contact_share.phone }}</a>
							</li>
							<li class="ftrBtmlist__item">
								<a :href="'mailto:' + $page.props.contact_share.email" class="ftrBtmlist__link">{{ $page.props.contact_share.email }}</a>
							</li>
						</ul>
						<ul class="ftrBtmlist2">

							<li class="ftrBtmlist2__item" v-for="social in $page.props.social_share">
								<a target="_blank" class="ftrBtmlist2__link flex-a r-50"  :href="social.link_first + social.link_last" v-html="social.icon"></a>
							</li>

						</ul>
					</div>
					<div class="ftrBtmCol4">
						<div class="ftrBtmCol4Box1" v-if="$page.props.projects_share[0]">
							<img :src="$page.props.projects_share[0].image" :alt="$page.props.projects_share[0].name[$page.props.locale]" class="ftrBtmCol4Box1__img">
						</div>
						<div class="ftrBtmCol4Box2">
							<div class="ftrBtmCol4Box2-col1" v-if="$page.props.projects_share[1]">
								<img :src="$page.props.projects_share[1].image" :alt="$page.props.projects_share[1].name[$page.props.locale]" class="ftrBtmCol4Box1__img">
							</div>
							<div class="ftrBtmCol4Box2-col2" v-if="$page.props.projects_share[2]">
								<img :src="$page.props.projects_share[2].image" :alt="$page.props.projects_share[2].name[$page.props.locale]" class="ftrBtmCol4Box1__img">
							</div>
						</div>
						<div class="ftrBtmCol4Box3" v-if="$page.props.projects_share[3]">
							<img :src="$page.props.projects_share[3].image" :alt="$page.props.projects_share[3].name[$page.props.locale]" class="ftrBtmCol4Box1__img">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ftrbtm2">
			<div class="container">
				<div class="ftrbtm2-wrpr">
					<p class="ftrbtm2__p">
						<a href="http://skilledtech.ae" target="_blank" rel="noopener noreferrer" style="color: rgb(57, 51, 179);">
                            {{ $t('Programming_and_development') }} Skilled Tech
                        </a>
					</p>
					<!-- <p class="ftrbtm2__p ftrbtm2__p2">© 2023 Autocad. All Rights Reserved.</p> -->
					<p class="ftrbtm2__p ftrbtm2__p2" v-show="$page.props.setting_share.copy_right">
                        {{ $t('All_rights_reserved') }} 
                        {{ $page.props.setting_share.copy_right.slice(0,30) }}
                    </p>

					<ul class="ftrbtm2List">
						<li class="ftrbtm2List__item">
							<Link href="/about" class="ftrbtm2List__link">About us</Link>
						</li>
						<li class="ftrbtm2List__item">
							<Link href="/trems" class="ftrbtm2List__link">Terms & Conditions</Link>
						</li>
						<li class="ftrbtm2List__item">
							<Link href="/privacy-policy" class="ftrbtm2List__link">Privacy Policy</Link>
						</li>
						<li class="ftrbtm2List__item">
							<Link href="/contact-us" class="ftrbtm2List__link">Contact us</Link>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</template>