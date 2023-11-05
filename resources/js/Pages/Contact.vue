<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>
<template>
	<MainLayout>
        <div class="contctPagsec">
		<div class="container">
			<div class="contctPagWrpr">
				<h2 class="contctPagWrpr__h">Contact Us</h2>
				<div class="controw">
					<div class="contBox contBox1" v-scroll-reveal data-aos-delay="50">
						<h2 class="contBox__h">Get in touch</h2>
						<img src="assets/images/contact1.png" alt="" class="contBox__img"   v-scroll-reveal-zoom-in data-aos-delay="350">
						<div class="ofcbox-r">
							<div class="ofcboxcol1">
								<div class="ofcboxcol1mini flex-a r-50">
									<i class="fa-regular fa-location-dot"></i>
								</div>
								Address :
							</div>
							<a href="#" class="ofcboxcol1-p">
								Germany, Berlin
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
								<a href="#" class="ofcboxcol1-p2">
									+971563223241
								</a>
								-
								<a href="#" class="ofcboxcol1-p2">
									+971562213545 
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
							<a href="#" class="ofcboxcol1-p">
								info@eurovan.ae
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
								<li class="ofcboxList__list">
									<a href="#" class="ofcboxList__link flex-a r-50">
										<i class="fa-brands fa-facebook-f"></i>
									</a>
								</li>
								<li class="ofcboxList__list">
									<a href="#" class="ofcboxList__link flex-a r-50">
										<i class="fa-brands fa-twitter"></i>
									</a>
								</li>
								<li class="ofcboxList__list">
									<a href="#" class="ofcboxList__link flex-a r-50">
										<i class="fa-brands fa-youtube"></i>
									</a>
								</li>
								<li class="ofcboxList__list">
									<a href="#" class="ofcboxList__link flex-a r-50">
										<i class="fa-brands fa-instagram"></i>
									</a>
								</li>
								<li class="ofcboxList__list">
									<a href="#" class="ofcboxList__link flex-a r-50">
										<i class="fa-brands fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="contBox contBox2" v-scroll-reveal data-aos-delay="150">
						<h2 class="contBox2__h2">
							Have a question?
							<img src="assets/images/question.png" alt="" class="contBox2__img2"  v-scroll-reveal-zoom-in data-aos-delay="450">
						</h2>
						<form class="bannerform2 active">
							<div class="prdTabRCol1-wrpr position-relative">
								<input type="text" placeholder="Full Name" class="inputF">
								<span class="form-input-sm-name">Full Name </span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<input type="text" placeholder="Phone" class="inputF">
								<span class="form-input-sm-name">Phone</span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<input type="text" placeholder="Email" class="inputF">
								<span class="form-input-sm-name">Email</span>
							</div>
							<div class="prdTabRCol1-wrpr position-relative">
								<textarea type="text" placeholder="Message" class="inputF inputF-textarea"></textarea>
							</div>
							<button type="button" class="bannerform__btn">Send</button>
						</form>
					</div>
				</div>
				<h2 class="conH">On The Map</h2>
				<iframe class="map" v-scroll-reveal data-aos-delay="50" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14523.926166690082!2d54.357658!3d24.4860964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sae!4v1689679934279!5m2!1sen!2sae" ></iframe>
			</div>
		</div>
	</div>
	<!-- contact us end -->

    </MainLayout>
</template>
