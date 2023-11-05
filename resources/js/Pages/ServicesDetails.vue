<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>
<template>
	<MainLayout>
        <section class="serpage">
		<div class="container">
			<div class="serpagewrpr">
				<div class="serpagbner" v-scroll-reveal data-aos-delay="50">
					<img src="assets/images/services/4.png" alt="" class="serpagbner__img">
				</div>
				<div class="serpagbner__h serpagbner__h2" v-scroll-reveal data-aos-delay="150">Architecture Design</div>
				<div class="serdetrow">
					<div class="serdetCol" v-scroll-reveal data-aos-delay="250">
						<p class="serdetCol__p">
							Architecture design is the art of creating functional and aesthetic structures. Architects blend form and function to shape our built environment. They consider space, materials, and human needs to design structures that inspire and serve. Architecture embodies culture, history, and innovation, shaping the way we live, work, and experience the world. Architects envision and realize iconic landmarks, sustainable buildings, and transformative spaces. From ancient wonders like the Pyramids to modern marvels like the Burj Khalifa, architecture reflects our collective aspirations and leaves an indelible mark on society.
						</p>
					</div>
					<div class="serdetCol2" v-scroll-reveal data-aos-delay="350">
						<div class="serdetCol2Box1">
							<img src="assets/images/services/5.png" alt="" class="serdetCol2Box1__img">
						</div>
						<div class="serdetCol2Box1">
							<img src="assets/images/services/6.png" alt="" class="serdetCol2Box1__img">
						</div>
						<div class="serdetCol2Box2">
							<img src="assets/images/services/7.png" alt="" class="serdetCol2Box1__img">
						</div>
					</div>
				</div>
				<div class="serdetpagirow">
					<div class="serdetpagiBox serdetpagiBox1">
						<a href="#" class="serdetpagiBox__link">
							<i class="fa-solid fa-arrow-left"></i>
							<span>Previous</span>
						</a>
					</div>
					<div class="serdetpagiBox serdetpagiBox2">
						<a href="#" class="serdetpagiBox__link">
							<span>Next</span>
							<i class="fa-solid fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    </MainLayout>
</template>
