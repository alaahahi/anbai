<script>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
		meta: Object,
		blog: Array,
    },
    created(){
        // console.log(this.blog_id);
    },
    data(){
        return {
            form: {
                blog_id: this.blog.id,
                comment: ''
            },
            commentSent: false,
        }
    },
    methods: {
        submit () {
            try {
                axios.post('/comments', this.form ).then((res)=>{
                    // console.log(res)
                    this.commentSent = true;
                    this.resetCommentField();
					setTimeout(() => {
                        this.commentSent = false;
                    }, 5000);

                });
            } catch (error) {
                // console.error('Error submitting comment:', error);
            }
        },
        resetCommentField() {
            this.form.comment = ''; 
        }
    }

}
</script>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>


<template>
	<Head>
        <title>{{ $t('post') }} - {{ blog.title.slice(0, 100) }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
		<section class="blogDet">
			<div class="container">
				<div class="blogDetWrpr">
					<div class="blogDetBox" v-scroll-reveal data-aos-delay="50">
						<img src="/assets/images/blog/7.png" alt="" class="blogDetBox__img">
						<div class="blogDetBox__content">
							<div class="blogDetBox__contentminin">
								<img src="/assets/images/Writer.png" alt="" class="blogDetBox__contentminin-img">
								<p class="blogDetBox__contentminin-p">{{blog.writer}}</p>
							</div>
							<div class="blogDetBox__contentminin2 flex-i">
								<p class="blogDetBox__contentminin2-p" v-if="blog.category">
									{{blog.category.title.slice(0, 22)}}
								</p>
								-
								<p class="blogDetBox__contentminin2-p2">
									{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
								</p>
							</div>
						</div>
					</div>
					<div class="blogDet-tab"  v-scroll-reveal data-aos-delay="150">
						<div class="blogDet2mini">
							{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit' }) }}
						</div>
						<p class="blogDet-tab__p">
							{{blog.title.slice(0, 60)}}	
						</p>
						<div class="blogDetcomntmini-box">
							<div class="blogDetcomntmini flex-a r-50">
								<i class="fa-regular fa-comment"></i>
							</div>
							<p class="blogDetcomntmini-box-p">{{blog.comments.length}} Comments</p>
						</div>
					
					</div>
					<div class="blogDetbody"  v-scroll-reveal data-aos-delay="250">
						<p class="blogDetbody__p" v-html="blog.description"></p>
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
								<p class="blogdetInner__tag-p">Comments ({{ blog.comments.length }}) </p>
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
							<div class="p-3" style="color: rgb(244, 0, 0);" v-if="form.comment.length > 999">
                                {{ $t('The_character_limit_for_comments_is') }} <b>1000</b> {{ $t('characters') }}
                            </div>
							<div v-if="commentSent" style="color: rgb(244, 0, 0);">{{ $t('sent_succesfully') }}!</div>
							<div class="tab-pane fade" id="allorders" role="tabpanel" tabindex="0">
								<form @submit.prevent="submit" class="cmntcontent-tab">
									<textarea class="cmntcontent-tab__textarea" required v-model="form.comment" maxlength="1000"></textarea>
									<button type="submit" class="cmntcontent-tab__btn">Add </button>
								</form>
							</div>
							<div class="tab-pane fade show active" id="toshippingorders" role="tabpanel" tabindex="0">
								<div class="cmntcontent-tab">

									<div class="cmntbox"  v-for="(comment,i) in  blog.comments" :key="i">
										<div class="cmntboximgbox">
											<img src="/assets/images/Writer.png" alt="" class="cmntbox-img">
										</div>
										<div class="cmntboxContent">
											<div class="cmntboxContent-row flex-i justify-between">
												<h3 class="cmntboxContent__h"></h3>
												<div class="cmntboxContentbox">
													<div class="cmntboxContentbox-mini flex-a r-50">
														<i class="fa-solid fa-calendar-days"></i>
													</div>
													<p class="cmntboxContentbox-p">
														{{ new Date(comment.created_at).toLocaleString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit' }) }}
													</p>
												</div>
											</div>
											<p class="cmntboxContent__p">
												{{comment.comment}}
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
    </MainLayout>
</template>
