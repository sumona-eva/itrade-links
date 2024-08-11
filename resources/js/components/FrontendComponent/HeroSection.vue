
<script setup>
import useAxios from '@/composables/useAxios.js';
import {ref, onMounted} from "vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs,Autoplay, } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';

const modules  = [FreeMode, Navigation, Thumbs,Autoplay,];

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
        <div class="container h-40 lg:h-80 animate-pulse bg-slate-200 rounded-lg">

        </div>
    </section>
    <section v-else>
        <div class=" rounded-lg overflow-hidden">
            <Swiper
                :effect="'fade'"

                :speed= "2000"

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
                <SwiperSlide >
                    <a href="/" class="block w-full h-40 lg:h-96 bg-slate-200 rounded-lg overflow-hidden">
                        <img class="w-full h-full" src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1719644143617513.png"/>
                    </a>
                </SwiperSlide>
                <SwiperSlide >
                    <a href="/" class="block w-full h-40 lg:h-96 bg-slate-200 rounded-lg overflow-hidden">
                        <img class="w-full h-full" src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1719048560196606.png"/>
                    </a>
                </SwiperSlide>
                <SwiperSlide >
                    <a href="/" class="block w-full h-40 lg:h-96 bg-slate-200 rounded-lg overflow-hidden">
                        <img class="w-full h-full" src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1719048571944881.png"/>
                    </a>
                </SwiperSlide>
                <SwiperSlide >
                    <a href="/" class="block w-full h-40 lg:h-96 bg-slate-200 rounded-lg overflow-hidden">
                        <img class="w-full h-full" src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1719056622675617.png"/>
                    </a>
                </SwiperSlide>
            </Swiper>
        </div>
    </section>
</template>

