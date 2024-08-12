<script setup >

import AppLayout from "@/components/Layouts/AppLayout.vue";
import ProductCard from "@/components/ProductCard.vue";
import { RouterLink } from "vue-router";
import ShoppingCategory from "@/components/ShoppingCategory.vue";
import Banner from "@/components/Banner.vue";
import PrimaryButton from "@/components/PrimaryButton.vue";
import AllTypeProduct from "@/components/FrontendComponent/AllTypeProduct.vue";
import HeroSection from "@/components/FrontendComponent/HeroSection.vue";
import useAxios from '@/composables/useAxios.js';
import {ref, onMounted} from "vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs,Pagination,Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';
const modules  = [FreeMode, Navigation, Thumbs,Autoplay];


</script>

<template>
    <AppLayout>
<!--hero section-->
        <section class="mt-20 lg:mt-5">

            <HeroSection />
        </section>


<!-- product section -->
        <section class="container">
            <div class="">
                <h2 class="tracking-wider text-black py-20 text-center font-medium
                text-lg lg:text-4xl">ALL PRODUCT </h2>
            </div>
            <div class="container flex flex-wrap pb-16">
                <div class="w-1/2 lg:w-1/5 p-1 lg:p-2" v-for="item in 5">
                    <!--   product-1 -->
                    <ProductCard  />
                </div>
            </div>
        <AllTypeProduct />
        </section>
        <section class="container">
            <div class="">
                <h2 class="tracking-wider text-black py-20 text-center uppercase font-medium
                text-lg lg:text-4xl">Online Exclusive Products</h2>

                <Swiper
                    :breakpoints="{
                    '375': {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    '768': {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    '1024': {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                }"
                    :centeredSlides="true"
                    :speed= "3000"
                    :freeMode="true"
                    :freeModeMomentum="false"
                    :freeModeMomentumBounce="false"
                    :grabCursor="true"
                    :autoplay= "{
                    delay: 0,
                    disableOnInteraction: true,
                }"
                    :loop="true"
                    :allowTouchMove="true"
                    :disableOnInteraction="true"
                    :modules="modules"
                    class="mySwiper"
                >
                    <SwiperSlide v-for="category in 10" >
                       <div class="pb-5">
                           <ProductCard  />
                       </div>
                    </SwiperSlide>
                </Swiper>

            </div>
        </section>

    </AppLayout>
</template>
<style scoped>

</style>
