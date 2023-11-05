<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>
<template>
	<MainLayout>
        <section class="blogDet">
		<div class="container">
			<div class="blogDetWrpr">
				<div class="blogDetBox" v-scroll-reveal data-aos-delay="50">
					<img src="assets/images/blog/7.png" alt="" class="blogDetBox__img">
					<div class="blogDetBox__content">
						<div class="blogDetBox__contentminin">
							<img src="assets/images/about-2.png" alt="" class="blogDetBox__contentminin-img">
							<p class="blogDetBox__contentminin-p">Suhib</p>
						</div>
						<div class="blogDetBox__contentminin2 flex-i">
							<p class="blogDetBox__contentminin2-p">Interior Design</p>
							-
							<p class="blogDetBox__contentminin2-p2">5 min Read</p>
						</div>
					</div>
				</div>
				<div class="blogDet-tab"  v-scroll-reveal data-aos-delay="150">
					<div class="blogDet2mini">
						12 May 
					</div>
					<p class="blogDet-tab__p">We are looking for an experienced Customer Marketing Manager</p>
					<div class="blogDetcomntmini-box">
						<div class="blogDetcomntmini flex-a r-50">
							<i class="fa-regular fa-comment"></i>
						</div>
						<p class="blogDetcomntmini-box-p">12 Comments</p>
					</div>
				
				</div>
				<div class="blogDetbody"  v-scroll-reveal data-aos-delay="250">
					<p class="blogDetbody__p">
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
						is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<p class="blogDetbody__p2">
						Share With :
					</p>
					<ul class="blogDetbodyList"   v-scroll-reveal-zoom-in data-aos-delay="50">
						<li class="blogDetbodyList__item">
							<a href="#" class="blogDetbodyList__link flex-a r-50">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
						</li>
						<li class="blogDetbodyList__item">
							<a href="#" class="blogDetbodyList__link flex-a r-50">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li class="blogDetbodyList__item">
							<a href="#" class="blogDetbodyList__link flex-a r-50">
								<i class="fa-brands fa-linkedin-in"></i>
							</a>
						</li>
						<li class="blogDetbodyList__item">
							<a href="#" class="blogDetbodyList__link flex-a r-50">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
					</ul>
					<div class="blogdetInner"  v-scroll-reveal data-aos-delay="150">
						<div class="blogdetInner__tag">
							<p class="blogdetInner__tag-p">Comments</p>
						</div>
					</div>
					<ul class="cmntList"  role="tablist"  data-aos="fade-down" data-aos-delay="250">
						<li class="cmntList__item" role="presentation">
							<div class="cmntList__btn" data-bs-toggle="pill" data-bs-target="#allorders" type="button" role="tab" aria-selected="true">Add Comment</div>
						</li>
						<li class="cmntList__item" role="presentation">
							<div class="cmntList__btn active" data-bs-toggle="pill" data-bs-target="#toshippingorders" type="button" role="tab" aria-selected="false">Comments</div>
						</li>
					</ul>
					<div class="tab-content cmntcontent" id="pills-tabContent"  v-scroll-reveal data-aos-delay="350">
						<div class="tab-pane fade" id="allorders" role="tabpanel" tabindex="0">
							<form class="cmntcontent-tab">
								<textarea class="cmntcontent-tab__textarea" placeholder="Add Comment"></textarea>
								<button type="submit" class="cmntcontent-tab__btn">Add </button>
							</form>
						</div>
						<div class="tab-pane fade show active" id="toshippingorders" role="tabpanel" tabindex="0">
							<div class="cmntcontent-tab">
								<div class="cmntbox">
									<div class="cmntboximgbox">
										<img src="assets/images/about-2.png" alt="" class="cmntbox-img">
									</div>
									<div class="cmntboxContent">
										<div class="cmntboxContent-row flex-i justify-between">
											<h3 class="cmntboxContent__h">Andrea Walkman</h3>
											<div class="cmntboxContentbox">
												<div class="cmntboxContentbox-mini flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<p class="cmntboxContentbox-p">3 minuets ago</p>
											</div>
										</div>
										<p class="cmntboxContent__p">
											is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
										</p>
									</div>
								</div>
								<div class="cmntbox">
									<div class="cmntboximgbox">
										N S
									</div>
									<div class="cmntboxContent">
										<div class="cmntboxContent-row flex-i justify-between">
											<h3 class="cmntboxContent__h">Andrea Walkman</h3>
											<div class="cmntboxContentbox">
												<div class="cmntboxContentbox-mini flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<p class="cmntboxContentbox-p">3 minuets ago</p>
											</div>
										</div>
										<p class="cmntboxContent__p">
											is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
										</p>
									</div>
								</div>
								<div class="cmntbox">
									<div class="cmntboximgbox">
										N S
									</div>
									<div class="cmntboxContent">
										<div class="cmntboxContent-row flex-i justify-between">
											<h3 class="cmntboxContent__h">Andrea Walkman</h3>
											<div class="cmntboxContentbox">
												<div class="cmntboxContentbox-mini flex-a r-50">
													<i class="fa-solid fa-calendar-days"></i>
												</div>
												<p class="cmntboxContentbox-p">3 minuets ago</p>
											</div>
										</div>
										<p class="cmntboxContent__p">
											is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
										</p>
									</div>
								</div>
								<div class="cmntcontent-tabLoadmore">
									<span class="loadmor">Load More</span>	
									<i class="fa-regular fa-arrow-up"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog Details end -->

    </MainLayout>
</template>
