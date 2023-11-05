<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

// defineProps({
//         meta: Object,
//         contact: Object,
// 		locale: {
// 			type: String,
// 			default: () => $page.props.locale?.locale || 'en',
// 		},
//     })
	

</script>

<script>
    export default {
        props: {
			meta: Object,
			contact: Object,
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
	<MainLayout>
        <div class="contctPagsec">
		<div class="container">
			<div class="contctPagWrpr">
				<h2 class="contctPagWrpr__h">{{ $t('contact_us') }}</h2>
				<div class="controw">
					<div class="contBox contBox1" v-scroll-reveal data-aos-delay="50">
						<h2 class="contBox__h">Get in touch</h2>
						<img :src="contact.image" :alt="contact.title[locale]" class="contBox__img"   v-scroll-reveal-zoom-in data-aos-delay="350">
						<div class="ofcbox-r">
							<div class="ofcboxcol1">
								<div class="ofcboxcol1mini flex-a r-50">
									<i class="fa-regular fa-location-dot"></i>
								</div>
								Address :
							</div>
							<a href="#" class="ofcboxcol1-p">
								{{ contact.address[locale].slice(1,85) }}
							</a>
						</div>
						<div class="ofcbox-r">
							<div class="ofcboxcol1">
								<div class="ofcboxcol1mini flex-a r-50">
									<i class="fa-light fa-phone"></i>
								</div>
								Phone : 
							</div>

							<div class="ofcboxcol1-p2wrpr flex-i gap-1 flex-wrapr">
								<a :href="'tel:' + contact.phone" class="ofcboxcol1-p2">
									{{ contact.phone }}
								</a>
								-
								<a :href="'tel:' + contact.office_phone" class="ofcboxcol1-p2">
									{{ contact.office_phone }}
								</a>
							</div>
							
						</div>
						<div class="ofcbox-r">
							<div class="ofcboxcol1">
								<div class="ofcboxcol1mini flex-a r-50">
									<i class="fa-light fa-envelope"></i>
								</div>
								Email :
							</div>
							<a :href="'mailto:' + contact.email" class="ofcboxcol1-p">
								{{ contact.email }}
							</a>
						</div>
						<div class="ofcbox-r">
							<div class="ofcboxcol1">
								<div class="ofcboxcol1mini flex-a r-50">
									<i class="fa-light fa-thumbs-up"></i>
								</div>
								Social : 
							</div>
							<ul class="ofcboxList">

								<li class="ofcboxList__list" v-for="social in $page.props.social_share">
									<a target="_blank" class="ofcboxList__link flex-a r-50" 
									:href="social.link_first + social.link_last" v-html="social.icon" ></a>
								</li>

							</ul>
						</div>
					</div>
					<div class="contBox contBox2" v-scroll-reveal data-aos-delay="150">
						<h2 class="contBox2__h2">
							Have a question?
							<img src="assets/images/question.png" alt="" class="contBox2__img2"  v-scroll-reveal-zoom-in data-aos-delay="450">
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

						<form @submit.prevent="submit" class="bannerform2 active">
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
				</div>
				<h2 class="conH">On The Map</h2>
				<div v-html="contact.maps"></div>
			</div>
		</div>
	</div>
	<!-- contact us end -->

    </MainLayout>
</template>
