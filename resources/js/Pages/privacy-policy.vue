<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    privacy_policy: Object,
    locale: {
				type: String,
				default: () => $page.props.locale?.locale || 'en',
			},

    });

</script>

<template>
    <Head title="Privacy Policy" />

    <MainLayout>

        <section class="prvplc">
            <div class="container">
                <div class="prvplcWrpr">
                    <div class="prvplc_tag">
                        <div class="prvplc_tagmini flex-a r-50">
                            <i class="fa-solid fa-clipboard"></i>
                        </div>
                        <div class="prvplc_cotnt">
                            <h2 class="prvplc_cotnt_h">{{ privacy_policy.title[locale] }}</h2>
                            <p class="prvplc_cotnt_p">{{ $t('Last_updated') }} : 
                                {{ new Date(privacy_policy.updated_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
                            </p>
                        </div>
                    </div>
                    <p class="prvplcBox__p" v-html="privacy_policy.description[locale]"></p>
                </div>
            </div>
        </section>


        
   
                    
    </MainLayout>

</template>
