<template>
    <AppLayout>
        <section>
            <div class="bg-primary text-secondary flex items-center justify-center py-7 my-5 animate-marquee">
                <span class="text-2xl font-semibold tracking-widest uppercase">Products</span>
            </div>
            <div class="flex justify-between px-5 py-2 text-primary text-lg font-semibold lg:hidden
                        transition-all ease-in-out duration-1000 lg:mt-28">
                <h2>All products</h2>
                <button @click="filter = !filter" >
                    <Icon name="material-symbols:filter-alt-outline" class="text-primary text-2xl"  />
                </button>
            </div>

            <Container class="flex">
                <div class="fixed z-40 top-0 left-0 bottom-0 w-52 lg:relative lg:w-2/12 lg:block lg:translate-x-0 overflow-scroll  bg-white transition-all ease-in-out duration-700"
                :class="{'translate-x-0' : filter, '-translate-x-60' : !filter}">
                    <div class="border-r px-5 py-12 pt-28 lg:pt-0 w-full">
                        <div>
                            <ul>
                                <li>
                                    <div class="group flex items-center gap-3 py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isCetagoryLinks = !isCetagoryLinks">
                                      <span class="font-playfair tracking-wide text-lg font-medium transition-all ease-in-out duration-300">Category</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isCetagoryLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20" />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="cetagory-links flex flex-col gap-3 text-sm font-playfair pl-8 py-4" :class="{'cetagory-links--active' : isCetagoryLinks}">
                                        <li>
                                            <p>Phones</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>iPad & Tab</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Mac</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Wearables</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Headphones & Speaker</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Accessories</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Camera</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Video Game</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <li>
                                    <div class=" group flex items-center gap-3  py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isPriceLinks = !isPriceLinks">

                                      <span class="font-playfair tracking-wide text-lg font-medium ">Brand</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isPriceLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20"  />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="price-links flex flex-col  gap-3 text-sm font-playfair pl-8 py-4" :class="{'price-links--active' : isPriceLinks}">
                                        <li class="category-filter">
                                            <p>Samsung</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Huawei</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Oppo</p>
                                        </li>
                                        <li class="category-filter ">
                                            <p>Vivo</p>
                                        </li>
                                          <li class="category-filter ">
                                            <p>Nokia</p>
                                        </li>
                                          <li class="category-filter ">
                                            <p>Realme</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="-full lg:w-10/12 ">
                    <div class="flex flex-wrap pb-8">
<!--        <ProductCard />-->
                        <div class="container flex flex-wrap pb-8">
                            <div class="w-1/2 lg:w-1/5 p-1 lg:p-2 lg:pb-10" v-for="item in 20">
                                <!--   product-1 -->
                                <ProductCard  />
                            </div>
                        </div>
                    </div>
                </div>
            </Container>
        </section>

    </AppLayout>
</template>
<script setup>
import AppLayout from "@/components/Layouts/AppLayout.vue";
import ProductCard from "@/components/ProductCard.vue";
import {ref} from 'vue';
import PrimaryButton from "@/components/PrimaryButton.vue";
import Container from "@/components/Container.vue";
const isCetagoryLinks = ref(true);
const isPriceLinks = ref(true);
const isLocationLinks = ref(true);
const filter = ref(false);
</script>
