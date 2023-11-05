<script setup>
import { ref } from "vue";
import { useI18n } from "vue-i18n";
import { Link } from '@inertiajs/inertia-vue3';

import DarkModeToggle from '@/Components/DarkToggle.vue';
import axios from 'axios';
import {  onMounted, onBeforeUnmount } from "vue";

const navActive = ref(false);

const openNav = () => {
  navActive.value = true;
};

const closeNav = () => {
  navActive.value = false;
};



const i18n = useI18n();
let language =ref(i18n.locale.value);



const switchLocale = async (locale) => {
	
      try {
        const response = await axios.post(`/change-locale/${locale}`);
        
        if (response.data.success) {
			language.value = locale; 
			i18n.locale.value = locale;
          localStorage.setItem('lang', locale);
		  window.location.reload();
        } else {
          console.error('Failed to change locale');
        }
      } catch (error) {
        console.error('An error occurred:', error);
      }
	};

</script>

<template>
	<div class="bodybg__box bodybg__box-home">
		<img src="/assets/images/body-bg.png" alt="" class="bodybg__img">
	</div>
	<header class="header">
        <div class="container-fluid">
            <div class="hdrwrpr">
				<a href="/" class="hdrlogobox flex-i">
					<img :src="$page.props.setting_share.logo" 
						:alt="$page.props.setting_share.site_title[$page.props.locale].slice(0,20)" 
						v-if="$page.props.setting_share.logo" class="hdrlogobox__img">
				</a>
				<div class="hdrwrprside2">
					<ul class="hdrnavLst"  :class="{ 'active': navActive }" @click="closeNav"> 
						<div class="hdrnavLst-closebtn" >
							<i class="fa-solid fa-xmark"></i>
						</div>
						
						<li  class="hdrnavLst__item " v-for="customize in $page.props.customize_share" v-show="customize.active_navbar == '1'">

							<div v-if="customize.base_module_name == 'services'" class="flex-i hdrnavLstdropdown__btn-wrpr">
								<Link :href="customize.link" class="hdrnavLst__item hdrnavLst__link" :class="{'active' : $page.component === customize.component}">
									{{ customize.title[$page.props.locale] }}
								</Link>
								<button class="hdrnavLstdropdown__btn">
									<i class="fa-solid fa-caret-down"></i>
								</button>
								<div class="hdrnavLstdropdown">

									<Link :href="'/service/' + service.id + '/show'" class="hdrnavLstdropdown__link" v-for="(service, i) in $page.props.services_share">
										{{ service.title[$page.props.locale].slice(0,30) }}
									</Link>

								</div>
							</div>

							<Link v-else :href="customize.link" class="hdrnavLst__item hdrnavLst__link" 
							:class="{'active' : $page.component === customize.component}"> {{ customize.title[$page.props.locale] }}</Link>

						</li>




					</ul>
					<div class="hdrbox3">
						<ul class="hdrbox3Smlist" :class="{ 'active': navActive }">

							<li class="hdrbox3Smlist__item" v-for="social in $page.props.social_share">
								<a target="_blank" class="hdrbox3Smlist__link flex-a r-50"  :href="social.link_first + social.link_last" v-html="social.icon"></a>
							</li>

						</ul>
						<div class="themcontrol">
							<div class="lang flex-a">
								<div v-if="language=='en'" class="lang__box arabic" @click="switchLocale('ar')">
									<i class="fa-sharp fa-regular fa-earth-americas"></i>
									<p class="lang__text">Ar</p>
								</div>
								<div v-if="language=='ar'" class="lang__box english" @click="switchLocale('en')">
									<i class="fa-sharp fa-regular fa-earth-americas"></i>
									<p class="lang__text">En </p>
								</div>
							</div>
							<div class="themcontrol-sep"></div>
							<DarkModeToggle ></DarkModeToggle>					
						</div>
					</div>
					<div class="nvbtn">
						<i class="fa-regular fa-bars" @click="openNav"></i>
					</div>
				</div>
            </div>
        </div>
	</header>
</template>