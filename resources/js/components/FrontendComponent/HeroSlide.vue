
<script setup>
    import useAxios from '@/composables/useAxios.js';
    import {ref, onMounted} from "vue";
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import { FreeMode, Navigation, Thumbs,Autoplay, EffectFade} from 'swiper/modules';
    import 'swiper/css';
    import 'swiper/css/free-mode';
    import 'swiper/css/effect-fade';
    import 'swiper/css/navigation';
    import 'swiper/css/thumbs';

    const modules  = [FreeMode, Navigation, Thumbs,Autoplay,EffectFade];

    const {loading, error, sendRequest} = useAxios();


    const sliders = ref(null);
    const getSlider = async() => {
        const response = await sendRequest({
            method:'get',
            url:'/frontend/v1/get-hero-slider'
        });

        if(response){
            sliders.value = response.data;
        }
    }

    onMounted(() => {
        getSlider();
    });
</script>
<template>
    <section v-if="loading">
        <Container class="selection:h-40 lg:h-96 animate-pulse bg-slate-200 rounded-lg">

        </Container>
    </section>
    <section v-else>
        <Container class="rounded-lg overflow-hidden">
            <Swiper
                :effect="'fade'"
                :speed= "1500"
                :grabCursor="true"
                :autoplay= "{
                    delay: 1000,
                    disableOnInteraction: true,
                }"
                :loop="true"
                :allowTouchMove="true"
                :navigation="true"
                :modules="modules"
                class="mySwiper"
            >
                <SwiperSlide v-for="slider in 4">
                    <a class="block w-full h-40 lg:h-96 bg-slate-200 rounded-lg overflow-hidden">
                        <img class="w-full h-full" src="https://vdigtech.com/wp-content/uploads/2024/03/Image-20.jpg" />
                    </a>
                </SwiperSlide>
            </Swiper>
        </Container>
    </section>
</template>
