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
<div>
<!-- hmsuccess end -->
<footer class="footer">
		<img src="assets/images/ftrcloud.png" alt="" class="footer__bg">
		<div class="container">
			<div class="footer-wrpr">
				<div class="ftrBox1">
					<a href="/" class="ftrBox1__link flex-a">
						<img src="assets/images/footer-logo.png" alt="" class="ftrBox1__img">
					</a>
					<p class="ftrBox1__p">
						بيت عربي يفتح لأطفال العالم أبواب الحكايات والفنون لقراءة أحلى وعربي أجمل وطفولة أكثر إبداعاً
					</p>
					<ul class="ftrBox1List">
						<li class="ftrBox1List__item">
							<a href="#" class="ftrBox1List__link ftrBox1List__link1 flex-a">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
						</li>
						<li class="ftrBox1List__item">
							<a href="#" class="ftrBox1List__link ftrBox1List__link2 flex-a">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li class="ftrBox1List__item">
							<a href="#" class="ftrBox1List__link ftrBox1List__link3 flex-a">
								<i class="fa-brands fa-linkedin"></i>
							</a>
						</li>
						<li class="ftrBox1List__item">
							<a href="#" class="ftrBox1List__link ftrBox1List__link4 flex-a">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
						<li class="ftrBox1List__item">
							<a href="#" class="ftrBox1List__link ftrBox1List__link5 flex-a">
								<i class="fa-brands fa-tiktok"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="ftrBox2">
					<ul class="ftrBox2List">
						<li class="ftrBox2List__item">
							<a href="/" class="ftrBox2List__link">الرّئيسة</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="our-story.html" class="ftrBox2List__link">حكايتنا</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="our-clubs.html" class="ftrBox2List__link">النّوادي</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="our-events.html" class="ftrBox2List__link">الفعاليّات</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="our-library.html" class="ftrBox2List__link">المكتبة</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="blog.html" class="ftrBox2List__link">المدوّنة</a>
						</li>
						<li class="ftrBox2List__item">
							<a href="contact-us.html" class="ftrBox2List__link">اتّصل بنا</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="footer__p">جميع الحقوق محفوظة © 2022م - بيت عربي</p>
		</div>
	</footer>
</div>
<!-- app-wrapper end -->
<div class="btmtotop">
	<a href="#" target="_blank" class="btmtotop__link btmtotop__link2 flex-a r-50">
		<i class="fa-brands fa-whatsapp"></i>
		<div class="btmtotop__link-tab flex-a">Whatsapp</div>
	</a>
	<a href="#" class="btmtotop__link btmtotop__link3 flex-a r-50">
		<i class="fa-regular fa-arrow-up"></i>
	</a>
</div>
</template>