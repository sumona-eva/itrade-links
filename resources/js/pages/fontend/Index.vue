<script setup >

import AppLayout from "@/components/Layouts/AppLayout.vue";
import Slider from "@/components/Slider.vue";
import TestimonialSlider from "@/components/TestimonialSlider.vue";
import ProductCard from "@/components/ProductCard.vue";
import { RouterLink } from "vue-router";
import ShoppingCategory from "@/components/ShoppingCategory.vue";
import Banner from "@/components/Banner.vue";
</script>

<template>
    <AppLayout>
<!--hero section-->
     <section class="container">
        <div>
            <img class="w-full h-auto p-2" src="@/assets/images/Main(1).png" alt="" />
        </div>
     </section>

<!-- product section -->
        <section class="container">
            <div class="">
                <h2 class="tracking-wider text-primary py-10 font-playfair font-bold
                text-2xl lg:text-3xl">Shopping by Categories </h2>
            </div>
            <ShoppingCategory />

            <Banner />

<!--            product section-->

            <div class="flex gap-5">
                <h2 class="tracking-wider text-primary font-playfair font-bold
                text-xl lg:text-2xl">New Arrivals</h2>
                <h2 class="tracking-wider text-slate-400 font-playfair font-bold
                text-xl lg:text-2xl">Best Seller</h2>
                <h2 class="tracking-wider text-slate-400 font-playfair font-bold
                text-xl lg:text-2xl">Sale</h2>
            </div>
            <div class="container flex flex-wrap pb-8">
                <div class="w-1/2 lg:w-1/4 p-3"  v-for="item in 4">
                    <ProductCard />
                </div>
            </div>
<!--            new Arrivel-->
            <div>
                <h2 class="tracking-wider text-primary font-playfair font-bold
                text-xl lg:text-2xl">All Product</h2>
                <div class="container flex flex-wrap pb-8">
                    <div class="w-1/2 lg:w-1/4 p-3"  v-for="item in 8">
                        <ProductCard />
                    </div>
                </div>
            </div>
        </section>
<!--        banner section-->
        <section class="container">
            <div class="relative">
                <img class="w-full h-80 rounded-xl" src="@/assets/images/banner-2.png" alt="" />

                <div class="absolute  w-1/2 top-1/2 -translate-y-1/2 left-12 text-white">
                    <div class="flex gap-5 py-5">
                        <img class="w-32 h-9" src="@/assets/images/apple.png" alt="" />
                        <img class="w-32 h-9" src="@/assets/images/google.png" alt="" />
                    </div>
                    <h2 class="text-3xl font-bold tracking-wider">Full Change in 2 Hours</h2>
                    <p class="text-lg text-white pt-3">Forget about waiting for long hours for your trimmer to be changed</p>
                </div>
            </div>
        </section>
<!--        Brand section-->
        <section class="container">
            <div class="flex justify-between py-16">
                <div class="w-1/3">
                    <h2 class="text-2xl font-bold ">Brand</h2>
                    <p class="flex gap-4 items-center pl-5 py-3 text-xs">
                        And More
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-2xl" />
                    </p>
                </div>
                <div class="flex flex-wrap w-2/3">
                    <img class="w-1/4 h-auto" src="@/assets/images/spotify.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/lattice.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/upwork.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/dribble.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/feedly.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/hopin.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/amazon.png" alt="" />
                    <img class="w-1/4 h-auto" src="@/assets/images/ebay.png" alt="" />
                </div>
            </div>

        </section>

<!--        testmonial -->

        <section>
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-1/2 lg:w-1/2 lg:pr-2.5">
                        <div class="w-full relative bg-primary rounded-xl h-full">
                            <img class="w-full h-full rounded-xl" src="@/assets/images/banner-2.png" alt="">
                            <div class="absolute top-1/2 -translate-y-1/2 left-10">
                                <h3 class="text-white font-semibold text-2xl mb-5">Download our app</h3>
                                <p class="text-white">Available for iOS and Android</p>

                                <div class="flex items-center gap-5 mt-5">
                                    <a href="#" class="bg-white flex items-center gap-4  px-5 py-3 rounded">
                                        <img class="w-6 h-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5hzpE9QwpnX6MMxn7BORyYQh7OZ7H9AxB6A&s" alt="">
                                        <span class="text-xl">Google Play</span>
                                    </a>
                                    <a href="#" class="bg-white flex items-center gap-4 px-5 py-2 rounded">
                                        <img class="w-6 h-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaSW2w-z-gcDxr0v8qhKd5Pq6qyj8Bh3UuLQ&s" alt="">
                                        <div>
                                            <span class="text-xs font-gray-400 block">Download on the</span>
                                            <span class="text-black text-lg font-bold -mt-2 block">App Store</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:pl-2.5">
                        <div class="p-6 bg-green-200/70 h-full rounded-xl">
                            <h3 class="text-2xl font-semibold mb-5">Testimonials</h3>
                            <p>“For all your printing prerequisites. Offer to make
                                and print their pamphlets, business cards,
                                solicitations, and occasion programs.”</p>

                            <div class="flex gap-3 mt-5">
                                <img class="w-14 h-14 rounded-full border-2 border-white object-cover" src="https://www.shutterstock.com/image-photo/happy-handsome-caucasian-man-casual-260nw-2378378987.jpg" alt="">
                                <div>
                                    <h4>Eddy</h4>
                                    <p class="text-sm text-gray-400">Designer at Lift</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center text-primary text-xl font-bold max-w-sm mx-auto py-16">
            <h2 class="">Get the latest news, events & more delivered to your inbox.
            </h2>
            <div class="pt-16 w-1/2">
                <input type="email" id="table-search-users"
                       class="block p-2 ps-8 text-sm text-gray-400  rounded-lg w-96 bg-transparent placeholder-white focus:ring-none focus:border-none"
                       placeholder="your email address ...">
            </div>
        </div>
    <section class="container">
        <div class="flex gap-10 justify-center py-5">
            <img class="w-32 h-32 rounded-xl" src="@/assets/images/Item-1.png" alt="" />
            <img class="w-32 h-32 rounded-xl" src="@/assets/images/Item-2.png" alt="" />
            <img class="w-32 h-32 rounded-xl" src="@/assets/images/Item-3.png" alt="" />
            <img class="w-32 h-32 rounded-xl" src="@/assets/images/Item-4.png" alt="" />
            <img class="w-32 h-32 rounded-xl" src="@/assets/images/Item-5.png" alt="" />
        </div>
    </section>


    </AppLayout>
</template>
<style scoped>

</style>
