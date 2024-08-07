<script setup >

import AppLayout from "@/components/Layouts/AppLayout.vue";
import Slider from "@/components/Slider.vue";
import TestimonialSlider from "@/components/TestimonialSlider.vue";
import ProductCard from "@/components/ProductCard.vue";
import { RouterLink } from "vue-router";
import ShoppingCategory from "@/components/ShoppingCategory.vue";
import Banner from "@/components/Banner.vue";
import PrimaryButton from "@/components/PrimaryButton.vue";

</script>

<template>
    <AppLayout>
<!--hero section-->
     <section class=" mt-16 lg:mt-0">
        <div>
            <Slider />
<!--            <img class="w-full h-auto pt-3" src="@/assets/images/Main(1).png" alt="" />-->
        </div>
     </section>

<!-- product section -->
        <section class="container">
            <div class="">
                <h2 class="tracking-wider text-black py-10 font-bold
                text-lg lg:text-3xl">Shopping by Categories </h2>
            </div>
            <ShoppingCategory />

            <Banner />

<!--            product section-->

            <div class="flex gap-3 lg:gap-5">
                <h2 class=" text-black font-bold
                text-lg lg:text-2xl">New Arrivals</h2>
                <h2 class="text-slate-400  font-bold
                text-lg lg:text-2xl">Best Seller</h2>
                <h2 class="text-slate-400  font-bold
                text-lg lg:text-2xl">Sale</h2>
            </div>
            <div class="container flex flex-wrap pb-8">
                <div class="w-1/2 lg:w-1/4 p-3">
                    <!--                        <ProductCard />-->
                    <!--   product-1 -->
                    <div class="flex flex-col overflow-hidden">
                        <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                            <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-57.jpg?v=1717145937" alt="" />
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-59.jpg?v=1717145937" alt="" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 items-center pb-5">
                            <h2 class="text-sm text-center lg:text-lg">Fruit juicer</h2>
                            <p class="text-xs text-center">$14.00</p>
                            <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                Add to Cart
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 lg:w-1/4 p-3">
                    <!--   product-2 -->
                    <div class="flex flex-col overflow-hidden">
                        <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                            <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                     src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-62.jpg?v=1717151487" alt="" />
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                     src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-61.jpg?v=1717151487" alt="" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 items-center pb-5">
                            <h2 class="text-sm text-center lg:text-lg">Graphics card</h2>
                            <p class="text-xs text-center">$14.00</p>
                            <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                Add to Cart
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 lg:w-1/4 p-3">
                    <!--   product-3 -->
                    <div class="flex flex-col overflow-hidden">
                        <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                            <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-16.jpg?crop=center&height=220&v=1717145312&width=200" alt="" />
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-19.jpg?v=1717145312" alt="" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 items-center pb-5">
                            <h2 class="text-sm text-center lg:text-lg">Keypad mobile</h2>
                            <p class="text-xs text-center">$14.00</p>
                            <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                Add to Cart
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 lg:w-1/4 p-3">
                    <!--   product-4 -->
                    <div class="flex flex-col overflow-hidden">
                        <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                            <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-29.jpg?v=1717139441" alt="" />
                                <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                     src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-26.jpg?v=1717139444" alt="" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 items-center pb-5">
                            <h2 class="text-sm text-center lg:text-lg">Bluetooth speaker</h2>
                            <p class="text-xs text-center">$14.00</p>
                            <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                Add to Cart
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
            </div>
<!--            new Arrivel-->
            <div>
                <h2 class="tracking-wider text-black font-bold
                text-lg lg:text-2xl">All Product</h2>
                <div class="container flex flex-wrap pb-8">
                    <div class="w-1/2 lg:w-1/4 p-3">
<!--                        <ProductCard />-->
                        <!--   product-1 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-46.jpg?v=1717145511" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-50.jpg?v=1717145511" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Smart watch</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-2 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-36.jpg?crop=center&height=585&v=1717152383&width=630" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-37.jpg?crop=center&height=585&v=1717152383&width=630" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Wireless Mouse</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-3 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-71.jpg?v=1717150397" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-74.jpg?v=1717150397" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Ear earbuds</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                     </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-4 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-52.jpg?v=1717150164" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-51.jpg?v=1717150164" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Daily toaster</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-5 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-31.jpg?v=1717147070" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-34.jpg?v=1717147070" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Fire tv</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-6 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-66.jpg?v=1717140602" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-67.jpg?v=1717140602" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Camera drone</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-7-->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-24.jpg?v=1717147346" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-22.jpg?v=1717147346" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Gaming controller</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                     </div>
                    <div class="w-1/2 lg:w-1/4 p-3">
                        <!--   product-8 -->
                        <div class="flex flex-col overflow-hidden">
                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-3.jpg?v=1717140014" alt="" />
                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-1_ca85d3b2-d7dc-4ee7-90c5-ae8fe7b95ef0.jpg?v=1717140015" alt="" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center pb-5">
                                <h2 class="text-sm text-center lg:text-lg">Compact cameras</h2>
                                <p class="text-xs text-center">$14.00</p>
                                <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                    Add to Cart
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        banner section-->
        <section class="container">
            <div class="relative">
                <img class="w-full h-56 lg:h-80 rounded-xl" src="@/assets/images/banner-2.png" alt="" />

                <div class="absolute w-full lg:w-1/2 top-1/2 -translate-y-1/2 px-4 lg:left-12 text-white">
                    <div class="flex gap-5 py-5">
                        <img class="w-20 h-7 lg:w-32 lg:h-9" src="@/assets/images/apple.png" alt="" />
                        <img class="w-20 h-7 lg:w-32 lg:h-9" src="@/assets/images/google.png" alt="" />
                    </div>
                    <h2 class="text-lg lg:text-3xl font-bold tracking-wider">Full Change in 2 Hours</h2>
                    <p class="text-xs lg:text-lg text-white pt-3">Forget about waiting for long hours for your trimmer to be changed</p>
                </div>
            </div>
        </section>
<!--        Brand section-->
        <section class="container">
            <div class="flex flex-wrap justify-between py-16">
                <div class="w-full lg:w-1/3">
                    <h2 class="text-xl lg:text-2xl font-bold ">Brand</h2>
                    <p class="flex gap-4 items-center pl-5 py-3 text-xs">
                        And More
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-2xl" />
                    </p>
                </div>
                <div class="flex flex-wrap w-full lg:w-2/3">
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
                    <div class="w-full lg:w-1/2 lg:pr-2.5">
                        <div class="w-full relative bg-primary rounded-xl h-full">
                            <img class="w-full h-full rounded-xl" src="@/assets/images/banner-2.png" alt="">
                            <div class="absolute top-1/2 -translate-y-1/2 px-4 lg:left-10">
                                <h3 class="text-white font-semibold text-lg lg:text-2xl mb-5">Download our app</h3>
                                <p class="text-white text-xs">Available for iOS and Android</p>

                                <div class="flex items-center gap-5 mt-5">
                                    <a href="#" class="bg-white flex items-center gap-4 rounded">
                                        <img class="w-20 h-7 lg:w-32 lg:h-9" src="@/assets/images/apple.png" alt="" />
                                    </a>
                                    <a href="#" class="bg-white flex items-center gap-4 rounded">
                                        <img class="w-20 h-7 lg:w-32 lg:h-9" src="@/assets/images/google.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:pl-2.5">
                        <div class="p-6 bg-green-200/70 h-56 lg:h-full rounded-xl mt-5 lg:mt-0">
                            <h3 class="text-lg lg:text-2xl font-semibold mb-5">Testimonials</h3>
                            <p class="text-xs lg:text-sm">“For all your printing prerequisites. Offer to make
                                and print their pamphlets, business cards,
                                solicitations, and occasion programs.”</p>

                            <div class="flex gap-3 mt-5">
                                <img class="w-14 h-14 rounded-full border-2 border-white object-cover" src="https://www.shutterstock.com/image-photo/happy-handsome-caucasian-man-casual-260nw-2378378987.jpg" alt="">
                                <div>
                                    <h4 class="">Eddy</h4>
                                    <p class="text-xs lg:text-sm text-gray-400">Designer at Lift</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center text-primary text-lg lg:text-xl font-bold max-w-sm mx-auto py-16">
            <h2 class="px-6 lg:px-0">Get the latest news, events & more delivered to your inbox.
            </h2>
            <div class="pt-16 w-full ">
                <div class="flex items-center justify-between">
                     <input type="email" id="table-search-users"
                           class="block p-2 ps-8 text-sm text-gray-400 rounded-lg w-96 bg-transparent placeholder-gray-400 ring-transparent focus:ring-transparent focus:border-transparent border-transparent"
                           placeholder="your email address ...">
                    <Icon name="material-symbols:arrow-forward" class="text-2xl text-gray-400" />
                </div>
            </div>
        </div>
    <section class="container overflow-x-scroll">
        <div class="flex gap-10 justify-center py-5 ">
            <img class="w-24 h-24 lg:w-32 lg:h-32 rounded-xl" src="@/assets/images/Item-1.png" alt="" />
            <img class="w-24 h-24 lg:w-32 lg:h-32 rounded-xl" src="@/assets/images/Item-2.png" alt="" />
            <img class="w-24 h-24 lg:w-32 lg:h-32 rounded-xl" src="@/assets/images/Item-3.png" alt="" />
            <img class="w-24 h-24 lg:w-32 lg:h-32 rounded-xl" src="@/assets/images/Item-4.png" alt="" />
            <img class="w-24 h-24 lg:w-32 lg:h-32 rounded-xl" src="@/assets/images/Item-5.png" alt="" />
        </div>
    </section>


    </AppLayout>
</template>
<style scoped>

</style>
