<script setup>
import {ref, onMounted} from "vue";
import "intersection-observer"; // for cross-browser support
import MainLayout from '@/Layouts/MainLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Vue3AutoCounter from 'vue3-autocounter';

import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import { useForm } from '@inertiajs/vue3'

const openForm = ref(0);

// Toggle the value of openForm
const toggleOpenForm = () => {
  openForm.value = openForm.value === 1 ? 0 : 1;
}

defineProps({
    meta: String,
    slider: Object,
    contact_us: Object,
    abouts: Object,
    services: Object,
    clients: Object,
    types_members: Object,
    members: Object,
    types_project: Object,
    projects: Object,
    questions: Object,
    projects_count: Object,
    clients_count: Object,
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

const showContent = ref(true);

// const questions = ref([
//   {
//     id: 1,
//     text: "Question 1",
//     answer: "It is a long established fact that a reader will be distracted...",
//     isOpen: false,
//   },
//   {
//     id: 2,
//     text: "Question 2",
//     answer: "It is a long established fact that a reader will be distracted...",
//     isOpen: false,
//   },
//   // Add more questions and answers
// ]);

const toggleAnswer = (question) => {
  question.isOpen = !question.isOpen;
};



const form = useForm({
  from: '',
  email: '',
  phone: '',
  message: '',
})

function submit() {
  openForm.value =0
  form.post('/message')

}


</script>



<template>
  <MainLayout>
  <!-- header end -->

  <div class="banner">
		<div class="container-fluid">
			<div class="banner-wrpr">
        
				<div class="bannerBox1 hmabtBox2"   data="50" v-scroll-reveal-fade-up>
          
					<h2 class="bannerBox1__h">
						<span class="color-main">Autocad

            </span>
						<span>Engineering</span>
					</h2>
					<p class="bannerBox1__p">Consultancy The Modern Art Of Simplicy</p>
					<div class="bannerBox1__link flex-a active"  >
            <span @click="toggleOpenForm">
						Get a Consultation
          </span>

						<form  @submit.prevent="submit"  class="bannerform " :class="{'active' :openForm}">
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
				<div class="bannerBox2 hmabtBox2"   data="150"  v-scroll-reveal-zoom-in>
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

  <!-- <div class="banner">
    <div class="container-fluid">
      <div class="banner-wrpr">
        <transition name="fade-up" mode="out-in">
          <div class="bannerBox1 hmabtBox2" v-show="showContent" key="content">
            <h2 class="bannerBox1__h">
              <span class="color-main">Autocad</span>
              <span>Engineering</span>
            </h2>
            <p class="bannerBox1__p">Consultancy The Modern Art Of Simplicy</p>
            <div class="bannerBox1__link flex-a">
              Get a Consultation
              <form class="bannerform">
                <h2 class="bannerform__h">
                  Have a question?
                  <img
                    src="/assets/images/question.png"
                    alt=""
                    class="bannerform__img"
                  />
                </h2>
                <div class="prdTabRCol1-wrpr position-relative">
                  <input type="text" placeholder="Full Name" class="inputF" />
                  <span class="form-input-sm-name">Full Name </span>
                </div>
                <div class="prdTabRCol1-wrpr position-relative">
                  <input type="text" placeholder="Phone" class="inputF" />
                  <span class="form-input-sm-name">Phone</span>
                </div>
                <div class="prdTabRCol1-wrpr position-relative">
                  <input type="text" placeholder="Email" class="inputF" />
                  <span class="form-input-sm-name">Email</span>
                </div>
                <div class="prdTabRCol1-wrpr position-relative">
                  <textarea
                    type="text"
                    placeholder="Message"
                    class="inputF inputF-textarea"
                  ></textarea>
                </div>
                <button type="button" class="bannerform__btn">Send</button>
              </form>
            </div>
            <form action="" class="bnrform">
              <input
                type="text"
                placeholder="Search for "
                class="bnrform__input"
              />
              <button type="submit" class="bnrform__btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </transition>
        <transition name="fade-up" mode="out-in">
          <div class="bannerBox2 hmabtBox2" v-show="showContent" key="content">
            <div class="bannerBox2__col1">
              <div class="bannerBox2__col1-inner1">
                <img
                  src="/assets/images/banner/1.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
              <div class="bannerBox2__col1-inner2">
                <img
                  src="/assets/images/banner/2.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
            </div>
            <div class="bannerBox2__col2">
              <div class="bannerBox2__col2-inner1">
                <img
                  src="/assets/images/banner/5.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
              <div class="bannerBox2__col2-inner2">
                <img
                  src="/assets/images/banner/6.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
            </div>
            <div class="bannerBox2__col3">
              <div class="bannerBox2__col1-inner1">
                <img
                  src="/assets/images/banner/3.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
              <div class="bannerBox2__col1-inner2">
                <img
                  src="/assets/images/banner/4.png"
                  alt=""
                  class="bannerBox2__col1img"
                />
              </div>
            </div>
          </div>
        </transition>
      </div>
    </div>
  </div> -->

  <!-- banner end -->
  <div class="hdrsrv"  >
    <div class="container-fluid">
      <div class="row hdrsrvWrpr">
        <div class="col-md-6 col-lg-4" data="fade-up" v-for="(service, i) in services" :key="i" v-scroll-reveal-fade-up> 
          <div class="hdrsrvcrd">
            <div class="hdrsrvcrdmini" v-html="service.icon"></div>
            <h2 class="hdrsrvcrd__h">{{ service.title[locale].slice(0,30) }}</h2>
            <Link :href="'/service/' + service.id + '/show'" class="hdrsrvcrd__link">
              <i class="fa-regular fa-arrow-up-right"></i>
              Details
            </Link>
          </div>
        </div>
      </div>
      <div class="hdrsrvsl swiper">
      <div class="swiper-wrapper d-block d-md-none">  
      <swiper
      :modules="modules"
      :navigation="true"
      :slides-per-view="1"
      :space-between="30"
      :loop="true"
      :speed="800"
      :scrollbar="{ draggable: true }">
          <swiper-slide  v-for="(service, i) in services" :key="i">
            <div class="hdrsrvcrd">
              <div class="hdrsrvcrdmini" v-html="service.icon"></div>
              <h2 class="hdrsrvcrd__h">{{ service.title[locale].slice(0,30) }}</h2>
              <Link :href="'/service/' + service.id + '/show'" class="hdrsrvcrd__link">
                <i class="fa-regular fa-arrow-up-right"></i>
                Details
              </Link>
            </div>
          </swiper-slide>
      </swiper>
      </div>
      </div>
      <a href="#services" class="hdrsrv__link flex-a r-50"
        ><i class="fa-solid fa-arrow-down"></i
      ></a>
    </div>
  </div>
  <!-- Header services end -->
  <section class="hmabt" style="
      background: url(assets/images/home-about-bg.png) no-repeat top center; 
      background-size: cover;
      "
    >
    <img src="/assets/images/icn4.png" alt="" class="hmabt-img1" v-scroll-reveal="{ delay: 500 }"/>
    <img src="/assets/images/icn5.png" alt="" class="hmabt-img2" v-scroll-reveal="{ delay: 600 }"/>
    <div class="container">
      <div class="row">
        <div class="col-lg-6" v-scroll-reveal-fade-up>
          <div class="hmabtBox2" data="fade-up" v-scroll-reveal-fade-up>
            <h2 class="hmabtBox2__h">
              <img
                src="/assets/images/abt-hdng-bg.png"
                alt=""
                class="hmabtBox2__img"
              />
              {{  abouts[0].title[locale] }}
            </h2>
            <div class="hmabtBox2-inner">
              <p class="hmabtBox2-inner__p" v-html="abouts[0].description[locale].slice(0, 800)"></p>
              <Link href="/about" class="hmabtBox2-inner__link">More</Link>
            </div>
            <div class="hmabtBox2-wrpr">
              <div class="hmabtBox2col2">
                <div class="hmabtBox2col2-mini">
                  <i class="fa-duotone fa-folder-open"></i>
                  <span>{{ $t('project') }}</span>
                </div>
                <div class="hmabtBox2col2-h3">
                  <span class="number">{{ projects_count }}</span>
                  <span>+</span>
                </div>
              </div>
              <div class="hmabtBox2col2">
                <div class="hmabtBox2col2-mini">
                  <i class="fa-duotone fa-sitemap"></i>
                  <span>{{ $t('client') }}</span>
                </div>
                <div class="hmabtBox2col2-h3">
                  <span class="number">{{ clients_count }}</span>
                  <span>+</span>
                </div>
              </div>
              <div class="hmabtBox2col2">
                <div class="hmabtBox2col2-mini">
                  <i class="fa-solid fa-compass-drafting"></i>
                  <span>{{ $t('service') }}</span>
                </div>
                <div class="hmabtBox2col2-h3">
                  <span class="number">{{ services.length }}</span>
                  <span>+</span>
                </div>
              </div>
              <div class="hmabtBox2col1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="74.113"
                  height="32.122"
                  viewBox="0 0 74.113 32.122"
                >
                  <g
                    id="Group_560"
                    data-name="Group 560"
                    transform="translate(-867.227 -2180.048)"
                  >
                    <path
                      id="star-solid_2_"
                      data-name="star-solid (2)"
                      d="M35.852.72a1.281,1.281,0,0,0-2.3,0L30.977,6.011l-5.743.848a1.28,1.28,0,0,0-.712,2.176l4.168,4.124-.984,5.827a1.283,1.283,0,0,0,1.868,1.344L34.7,17.59l5.131,2.74A1.283,1.283,0,0,0,41.7,18.986l-.988-5.827,4.168-4.124a1.28,1.28,0,0,0-.712-2.176l-5.747-.848Z"
                      transform="translate(896.076 2191.69)"
                    />
                    <path
                      id="star-solid_2_2"
                      data-name="star-solid (2)"
                      d="M40.954,1.034a1.84,1.84,0,0,0-3.307,0l-3.692,7.6L25.709,9.848a1.838,1.838,0,0,0-1.022,3.124l5.983,5.92-1.413,8.366a1.842,1.842,0,0,0,2.682,1.929l7.367-3.933,7.367,3.933a1.842,1.842,0,0,0,2.682-1.929l-1.418-8.366,5.983-5.92A1.838,1.838,0,0,0,52.9,9.848L44.646,8.63Z"
                      transform="translate(865.059 2180.048)"
                    />
                    <path
                      id="star-solid_2_3"
                      data-name="star-solid (2)"
                      d="M35.852.72a1.281,1.281,0,0,0-2.3,0L30.977,6.011l-5.743.848a1.28,1.28,0,0,0-.712,2.176l4.168,4.124-.984,5.827a1.283,1.283,0,0,0,1.868,1.344L34.7,17.59l5.131,2.74A1.283,1.283,0,0,0,41.7,18.986l-.988-5.827,4.168-4.124a1.28,1.28,0,0,0-.712-2.176l-5.747-.848Z"
                      transform="translate(843.083 2191.69)"
                    />
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" v-scroll-reveal="{ delay: 500 }">
          <div class="hmabtBox">
            <div class="hmabtBox-ab flex-a r-50">

              <img :src="$page.props.setting_share.logo_white" 
                :alt="$page.props.setting_share.site_title[$page.props.locale].slice(0,20)" 
                v-if="$page.props.setting_share.logo_white" 
                class="hmabtBox-ab__img"
                data="zoom-in" v-scroll-reveal-zoom-in>

            </div>
            <div class="hmabtBox-imgholder">
              <div class="hmabtBox-imgholder-ab"></div>
                <img
                  :src="abouts[0].image"
                  :alt="abouts[0].title[locale]"
                  class="hmabtBox__img"
                  data="zoom-in" v-scroll-reveal-zoom-in
                />
              <div class="hmabtBoxcol1">
                <img
                :src="abouts[1].image"
                  :alt="abouts[1].title[locale]"
                  class="hmabtBoxcol1__img"
                  data="zoom-in" v-scroll-reveal-zoom-in
                />
              </div>
              <div class="hmabtBoxcol1 hmabtBoxcol2">
                <img
                :src="abouts[2].image"
                  :alt="abouts[2].title[locale]"
                  class="hmabtBoxcol1__img"
                  data="zoom-in" v-scroll-reveal-zoom-in
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hmabt__btm" data="fade-down">
      <div class="container">
        <h2 class="hmabt__btm-h">
          <img
            src="/assets/images/hdng-projcts.png"
            alt=""
            class="hmabt__btmimg"
          />
          Our Projects
        </h2>
      </div>
    </div>
  </section>
  <!-- About end -->
  <section
    class="hmprjcts"
    style="
      background: url(assets/images/projects-bg.png) no-repeat bottom center;
      background-size: cover;
    "
  >
    <div class="container">
      <ul class="hmprjctsList" role="tablist" data="fade-down">

        <li class="hmprjctsList__item" role="presentation">
          <button class="hmprjctsList__link active" type="button" 
            data-bs-toggle="pill" data-bs-target="#p100" role="tab" aria-selected="true">
            <i class="fa-solid fa-bars"></i>
            All
          </button>
        </li>

        <li class="hmprjctsList__item" role="presentation" v-for="(type, i) in types_project" :key="i"  v-scroll-reveal="{ delay: 600 }">
          <button class="hmprjctsList__link" type="button" 
            data-bs-toggle="pill" :data-bs-target="'#p' + type.id" role="tab" aria-selected="false">
            {{ type.type[locale].slice(0.30) }}
          </button>
        </li>

        


      </ul>
      <div class="tab-content hmprjcts-tab-content" data="fade-up" v-scroll-reveal-fade-up>

        <div class="tab-pane fade show active" id="p100" role="tabpanel" tabindex="0">
          <div class="row hmprjctsCard-outr">

            <div class="col-md-6 col-lg-4" v-for="project in projects"  :key="project.id"   v-scroll-reveal="{ delay: 600 }">
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


        <div class="tab-pane fade" :id="'p' + ty.id" role="tabpanel" tabindex="0" v-for="(ty, i) in types_project" :key="i">
          <div class="row prjpagCard-outr">

            <div class="col-md-6 col-lg-4" v-for="project in ty.projects" :key="project">
              <Link :href="'/project/' + project.id + '/show'" class="prjpagCard">
                <img :src="project.image" :alt="project.name[locale].slice(0,30)" class="prjpagCard__img"   v-scroll-reveal="{ delay:300 }">
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
      <Link href="projects" class="hmprjcts__link">More</Link>
    </div>
  </section>
  <!-- projects end -->

  <section class="hmServics" id="services">
    <div class="container">
      <h2 class="hmServics__h"   v-scroll-reveal="{ delay: 600 }">
        <img src="/assets/images/Our-Services.png" alt="" class="hmServics__img"/>
        Our Services
      </h2>
      <div class="hmServicsSl swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide" v-for="(service, i) in services" :key="i"   v-scroll-reveal="{ delay: 600 }">
            <Link :href="'/service/' + service.id + '/show'" class="hmServicsCrd">
              <div class="hmServicsCrd__link">
                <div class="hmServicsCrd__mini flex-a r-50">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </div>
                View
              </div>
              <img
                :src="service.image"
                alt=""
                class="hmServicsCrd__img"
              />
              <div class="hmServicsCrd-tab">{{ service.title[locale].slice(0,30) }}</div>
            </Link>
          </div>

        </div>
      </div>
      <Link href="services" class="hmServics__link">More</Link>
    </div>
    <svg
      class="hmServics__svg"
      xmlns="http://www.w3.org/2000/svg"
      width="1920"
      height="349.814"
      viewBox="0 0 1920 349.814"
    >
      <path
        id="Path_586"
        data-name="Path 586"
        d="M0-52.12,956.353-82,1920-52.12V217.131s-483.647,50.683-963.647,50.683S0,217.131,0,217.131Z"
        transform="translate(0 82)"
      />
    </svg>
  </section>
  <!-- services end -->
  <section class="hteam">
    <img src="/assets/images/icn1.png" alt="" class="hteamIcn1" />
    <img src="/assets/images/icn2.png" alt="" class="hteamIcn2" />
    <div class="container">
      <div class="hteam-wrpr">
        <h2 class="hteam-wrpr__h"   v-scroll-reveal="{ delay: 300 }">
          <img
            src="/assets/images/our-team.png"
            alt=""
            class="hteam-wrpr__h-img"
          />
          Meet Our Pro Team
        </h2>
        <ul class="hteamlst flex-i" role="tablist" data="fade-down">
          
          <li class="hteamlst__item" role="presentation">
            <div class="hteamlst__btn active" 
              data-bs-toggle="pill" data-bs-target="#t100" type="button" role="tab" aria-selected="true">
              All
            </div>
          </li>

          <li class="hteamlst__item" role="presentation"  v-for="(ty, i) in types_members" :key="i"   v-scroll-reveal="{ delay: 300 }">
            <div class="hteamlst__btn" data-bs-toggle="pill" :data-bs-target="'#t' + ty.id" 
              type="button" role="tab" aria-selected="false">
              {{ ty.type[locale].slice(0.30) }}
            </div>
          </li>

          
          
        </ul>
        <div class="tab-content teamcontent" id="teamcontent" data="fade-up" v-scroll-reveal-fade-up>

          <div class="tab-pane fade show active" id="t100" role="tabpanel" tabindex="0">
            <div class="row teamcontentwrpr">

              <div class="col-md-6 col-lg-4 col-xl-3"  v-for="(member, i) in members" :key="i">
                <div class="hteamcrd">
                  <div class="hteamcrd-hdr">
                    <img :src="member.image" :alt="member.title[locale]" class="hteamcrd-hdr__img"/>
                    <ul class="hteamcrdList">

                      <li class="hteamcrdList__item" v-for="(social, i) in member.socials" :key="i">
                        <a class="hteamcrdList__link flex-a r-50"
                          target="_blank" :href="social.link_first + social.link_last" v-html="social.icon"></a>
                      </li>
                      
                    </ul>
                    <div class="hteamcrd-hdr-tab">{{ member.position[locale].slice(0, 35) }}</div>
                  </div>
                  <Link :href="'/team/' + member.id + '/show'" class="hteamcrd__body">
                    <i class="fa-duotone fa-badge-check"></i>
                    <h2 class="hteamcrd__h">{{ member.title[locale].slice(0, 35) }}</h2>
                  </Link>
                </div>
              </div>

              
            </div>
          </div>

          <div class="tab-pane fade" :id="'t' + ty.id" role="tabpanel" tabindex="0" v-for="(ty, i) in types_members" :key="i">
            <div class="row teamcontentwrpr">

              <div class="col-md-6 col-lg-4 col-xl-3"  v-for="(member, i) in ty.members" :key="i">
                <div class="hteamcrd">
                  <div class="hteamcrd-hdr">
                    <img :src="member.image" :alt="member.title[locale]" class="hteamcrd-hdr__img"/>
                    <ul class="hteamcrdList">

                      <li class="hteamcrdList__item"  v-for="(social, i) in member.socials" :key="i">
                        <a class="hteamcrdList__link flex-a r-50"
                          target="_blank" :href="social.link_first + social.link_last" v-html="social.icon"></a>
                      </li>

                      
                    </ul>
                    <div class="hteamcrd-hdr-tab">{{ member.position[locale].slice(0, 35) }}</div>
                  </div>
                  <Link :href="'/team/' + member.id + '/show'" class="hteamcrd__body">
                    <i class="fa-duotone fa-badge-check"></i>
                    <h2 class="hteamcrd__h">{{ member.title[locale].slice(0, 35) }}</h2>
                  </Link>
                </div>
              </div>

              
            </div>
          </div>

          
        </div>
        <Link href="team" class="hteam__link">More</Link>
      </div>
    </div>
  </section>
  <!-- team end -->


  <section class="hLnews" data="fade-up" v-scroll-reveal-fade-up>
    <div class="container">
      <h2 class="hteam-wrpr__h">
        <img
          src="/assets/images/last-news.png"
          alt=""
          class="hteam-wrpr__h-img"
        />
        Last News
      </h2>
    </div>
    <swiper
      ref="{swiperRef}"
      :modules="modules"
      :navigation="true"
      :slides-per-view="3.2"
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

      <swiper-slide>
        <div class="hLnewsCrd">
          <div class="hLnewsCrd-tag">Interior Design</div>
          <img src="/assets/images/news/1.png" alt="" class="hLnewsCrd__img" />
          <div class="hLnewsCrd__content">
            <Link href="#" class="hLnewsCrd__h"
              >Lorem ipsum dolor sit amet, con…</Link>
            <div class="hLnewsCrd__wrprotr flex-i justify-between">
              <div class="hLnewsCrd__wrpr flex-i">
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">12 May, 2023</p>
                </div>
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-regular fa-comment"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">Comments</p>
                </div>
              </div>
              <div class="hLnewsCrd-cl3">
                <div class="hLnewsCrd-cl3-mini flex-a r-50">
                  <img
                    src="/assets/images/team/3.png"
                    alt=""
                    class="hLnewsCrd-pfimg__img"
                  />
                </div>
                <p class="hLnewsCrd-cl3__p">Ahmed</p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="hLnewsCrd">
          <div class="hLnewsCrd-tag">Interior Design</div>
          <img src="/assets/images/news/1.png" alt="" class="hLnewsCrd__img" />
          <div class="hLnewsCrd__content">
            <Link href="#" class="hLnewsCrd__h"
              >Lorem ipsum dolor sit amet, con…</Link>
            <div class="hLnewsCrd__wrprotr flex-i justify-between">
              <div class="hLnewsCrd__wrpr flex-i">
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">12 May, 2023</p>
                </div>
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-regular fa-comment"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">Comments</p>
                </div>
              </div>
              <div class="hLnewsCrd-cl3">
                <div class="hLnewsCrd-cl3-mini flex-a r-50">
                  <img
                    src="/assets/images/team/3.png"
                    alt=""
                    class="hLnewsCrd-pfimg__img"
                  />
                </div>
                <p class="hLnewsCrd-cl3__p">Ahmed</p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="hLnewsCrd">
          <div class="hLnewsCrd-tag">Interior Design</div>
          <img src="/assets/images/news/1.png" alt="" class="hLnewsCrd__img" />
          <div class="hLnewsCrd__content">
            <Link href="#" class="hLnewsCrd__h"
              >Lorem ipsum dolor sit amet, con…</Link>
            <div class="hLnewsCrd__wrprotr flex-i justify-between">
              <div class="hLnewsCrd__wrpr flex-i">
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">12 May, 2023</p>
                </div>
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-regular fa-comment"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">Comments</p>
                </div>
              </div>
              <div class="hLnewsCrd-cl3">
                <div class="hLnewsCrd-cl3-mini flex-a r-50">
                  <img
                    src="/assets/images/team/3.png"
                    alt=""
                    class="hLnewsCrd-pfimg__img"
                  />
                </div>
                <p class="hLnewsCrd-cl3__p">Ahmed</p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="hLnewsCrd">
          <div class="hLnewsCrd-tag">Interior Design</div>
          <img src="/assets/images/news/1.png" alt="" class="hLnewsCrd__img" />
          <div class="hLnewsCrd__content">
            <Link href="#" class="hLnewsCrd__h"
              >Lorem ipsum dolor sit amet, con…</Link>
            <div class="hLnewsCrd__wrprotr flex-i justify-between">
              <div class="hLnewsCrd__wrpr flex-i">
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">12 May, 2023</p>
                </div>
                <div class="hLnewsCrd-cl1">
                  <div class="hLnewsCrd-mini flex-a r-50">
                    <i class="fa-regular fa-comment"></i>
                  </div>
                  <p class="hLnewsCrd-cl1__p">Comments</p>
                </div>
              </div>
              <div class="hLnewsCrd-cl3">
                <div class="hLnewsCrd-cl3-mini flex-a r-50">
                  <img
                    src="/assets/images/team/3.png"
                    alt=""
                    class="hLnewsCrd-pfimg__img"
                  />
                </div>
                <p class="hLnewsCrd-cl3__p">Ahmed</p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
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
    </swiper>
  </section>
  
  <!-- latest news end -->

  <section class="hfaq">
    <svg class="hfaq__svg" viewBox="0 0 1920 474.5">
      <path id="Path_586" data-name="Path 586"
        d="M0-41.47,956.353-82,1920-41.47V323.751S1436.353,392.5,956.353,392.5,0,323.751,0,323.751Z"
        transform="translate(0 82)"/>
    </svg>
    <div class="container">
      <h2 class="hfaq__h justify-center text-center">
        <img src="/assets/images/Autocad.png" alt="" class="hfaq-img" />
        F&Q
      </h2>
      <p class="hfaq__p">
        We Are The Answer To All Your Questions
        <img
          src="/assets/images/question-duotone.png"
          alt=""
          class="hfaq__p-img"
        />
      </p>
      <div class="hfaq__wrpr">
        <div class="hfaqBox1" v-scroll-reveal-fade-up>
          <img
            src="/assets/images/half-circle.png"
            alt=""
            class="hfaqBox1__img"
          />

		  <div class="hfaqBox1Accordian"  v-for="question in questions" :key="question.id" @click="toggleAnswer(question)">
						<div class="hfaqBoxQues" :class="{ active: question.isOpen }">
							<p class="hfaqBoxQues__p">{{ question.question[locale].slice(0,60) }}</p>
							<div class="hfaqBoxQuesMini flex-a r-50">
								<i class="fa-solid fa-chevron-down"></i>
							</div>
						</div>
						<div class="hfaqBox1Accordian-ans " :class="{ active: question.isOpen }">
							<p class="hfaqBox1Accordian-ans__p">
								{{ question.answer[locale].slice(0,300) }}
							</p>
						</div>
      </div>
        </div>
        <div class="hfaqBox2">
          <img
            src="/assets/images/faq.png"
            alt=""
            class="hfaqBox2__img"
            data="zoom-in"
            v-scroll-reveal-zoom-in
          />
        </div>
      </div>
    </div>
  </section>
  <!-- faq end -->

  </MainLayout>
</template>