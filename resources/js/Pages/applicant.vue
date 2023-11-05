<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    meta: Object,
    career: Object,
    careerss: Object,
    locale: {
        type: String,
        default: () => $page.props.locale?.locale || 'en',
    },
})

const form = useForm({
    category: props.career.id,
    name: '',
    email: '',
    phone: '',
    description: '',
    file: null,
})

function submit() {
  form.post('/applican-store')
}

</script>

<script>

    export default {
    mounted() {
        this.$nextTick(() => {
        setTimeout(() => {
            this.$refs.message.style.display = "none";
        }, 2000);
        });
    }
    }

</script>


<template>
    <Head>
        <title> {{ $t('applicant') }} - {{ career.title[locale].slice(0, 100) }}</title>
		<meta name="description" :content="meta">
    </Head>

	<MainLayout>
        <section class="careers">
            <div class="container">
                <div class="careerswrpr">
                    <div class="careerswrpr__top" data-aos="fade-down" data-aos-delay="50">
                        <img src="/assets/images/career-img.png" alt="" class="careerswrpr__top-img">
                        <div class="careerswrpr-row">
                            <div class="careerswrpr-row-mini flex-a r-50">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            
                            <h2 class="careerswrpr-row__h">{{ career.title[locale] }}</h2>
                        </div>
                        <p class="careerswrpr__top-p">Join The Team</p>
                        
                    </div>
                    <div class="careerswrpr__body careerswrpr__body2">

                        <p class="careerswrpr__body-p alert" style="color: blue;" v-if="$page.props.flash.message">
                            {{ $page.props.flash.message }}
                        </p>


                        <p class="careerswrpr__body-p">About The Role</p>
                        <div class="careerswrpr__bodybox"  v-scroll-reveal data-aos-delay="150">
                            <div class="careerswrpr__row careerswrpr__row1">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                <h2 class="careerswrpr__row-h2">{{ career.title[locale] }}</h2>
                            </div>
                            <div class="careerswrpr__row">
                                <i class="fa-solid fa-clock"></i>
                                <h6 class="careerswrpr__row-h3">{{ career.Job_type.slice(0,50) }}</h6>
                            </div>
                            <div class="careerswrpr__row">
                                <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                                <h6 class="careerswrpr__row-h3">{{ career.expected_salary }}</h6>
                            </div>
                            <div class="careerswrpr__row">
                                <h6 class="careerswrpr__row-h3 careerswrpr__row-h3-2" v-html="career.description[locale]"></h6>
                            </div>
                            <p class="cardet-h">
                                Apply For This Job
                                <i class="fa-solid fa-arrow-right"></i>
                            </p>

                            <div v-if="commentSent" class="cardet-h">{{ $t('sent_succesfully') }}!</div>
                            <div class="cardet-h" style="color: rgb(244, 0, 0);" v-if="form.name.length > 254">
                                {{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
                            </div>
                            <div class="cardet-h" style="color: rgb(244, 0, 0);" v-if="form.phone.length > 254">
                                {{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
                            </div>
                            <div class="cardet-h" style="color: rgb(244, 0, 0);" v-if="form.email.length > 254">
                                {{ $t('maximum_number') }} <b>255</b> {{ $t('characters') }}
                            </div>
                            <div class="cardet-h" style="color: rgb(244, 0, 0);" v-if="form.description.length > 1499">
                                {{ $t('maximum_number') }} <b>1500</b> {{ $t('characters') }}
                            </div>

                            <form @submit.prevent="submit" class="row cardetForm">
                                <div class="col-lg-6">
                                    <div class="prdTabRCol1-wrpr position-relative">
                                        <input type="text" class="inputF"
                                        :placeholder="$t('Your_full_name')" v-model="form.name" maxlength="255" required>
                                        <span class="form-input-sm-name">{{ $t('Your_full_name') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="prdTabRCol1-wrpr position-relative">
                                        <input class="inputF"
                                        :placeholder="$t('email')" v-model="form.email" maxlength="255" type="email">
                                        <span class="form-input-sm-name">{{ $t('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="prdTabRCol1-wrpr position-relative">
                                        <input class="inputF"
                                        v-model="form.phone" maxlength="255" :placeholder="$t('phone')" type="Phone">
                                        <span class="form-input-sm-name">{{ $t('phone') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="prdTabRCol1-wrpr position-relative">
                                        <textarea class="inputF" 
                                        v-model="form.description" maxlength="1500" required  :placeholder="$t('description')"></textarea>
                                        <span class="form-input-sm-name">{{ $t('description') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="prdTabRCol1-flex-i flex-i">
                                        <p class="prdTabRCol1__p">Attach your CV</p>

                                        <input type="file"
                                            class="prdTabRCol1inputfile"
                                            id="prdTabRCol112"
                                            name="file"
                                            @input="form.file = $event.target.files[0]"
                                            accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                        <label for="prdTabRCol112" class="prdTabRCol112__input">file</label>
                                    </div>

                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                        {{ form.progress.percentage }}%
                                    </progress>

                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="prdTabRCol1btn">Apply Now</button>
                                </div>
                            </form>
                            <h3 class="cardet-h">
                                Other Positions Available 
                                <i class="fa-solid fa-arrow-right"></i>
                            </h3>
                            <div class="cardetFormrow">

                                <Link :href="'/applicant/' + careers.id + '/show'" class="cardetFormrow__link" v-for="careers in careerss">
                                    {{ careers.title[locale].slice(0,80) }}
                                </Link>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>
