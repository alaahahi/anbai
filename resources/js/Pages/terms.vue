<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    terms: Object,
    locale: {
				type: String,
				default: () => $page.props.locale?.locale || 'en',
			},

    });
</script>

<template>
    <Head title="Terms of Service" />

    <MainLayout>

        <section class="prvplc">
            <div class="container">
                <div class="prvplcWrpr">
                    <div class="prvplc_tag">
                        <div class="prvplc_tagmini flex-a r-50">
                            <i class="fa-solid fa-clipboard"></i>
                        </div>
                        <div class="prvplc_cotnt">
                            <h2 class="prvplc_cotnt_h">{{ terms.title[locale] }}</h2>
                            <p class="prvplc_cotnt_p">{{ $t('Last_updated') }} : 
                                {{ new Date(terms.updated_at).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' }) }}
                            </p>
                        </div>
                    </div>
                    <p class="prvplcBox__p" v-html="terms.description[locale]"></p>
                </div>
            </div>
        </section>


    </MainLayout>
</template>
