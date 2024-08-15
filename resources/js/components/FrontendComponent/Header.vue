<script setup>
import MobileNav from "@/components/FrontendComponent/MobileNav.vue";

import {ref} from 'vue';
import { RouterLink } from "vue-router";

const open = ref(false);

const isModalOpened = ref(false);

const openModal = () => {
  isModalOpened.value = true;
};
const closeModal = () => {
  isModalOpened.value = false;
};

</script>

<template>

<!-- Moblile nav  -->
     <MobileNav />
<!-- side nav section  -->
     <SideNav :isOpen="isModalOpened" @modal-close="closeModal"  />

    <!--    top header section-->
    <section class="bg-primary  hidden lg:block">
        <div class="container">
            <div class="text-slate-200 flex justify-center items-center py-2 shadow-2xl">
               <div class="flex items-center gap-2">
                   <Icon name="material-symbols:location-on-outline-rounded" class=" text-lg" />
                   <p class="text-xs">The Leading Retail and Online Shop for Computers, Laptops, Monitors & Accessories in Bangladesh</p>
               </div>
           </div>
        </div>
    </section>
    <!--    top header section end -->

    <!-- mid header section -->
    <section class="bg-secondary  hidden lg:block">
        <div class="container">
            <div class="flex justify-between py-2">
                <RouterLink to="/">
                    <img class="w-16 h-auto" src="@/assets/images/logo.png" alt="" />
                </RouterLink>
                <div class="flex items-center">
                    <div class="flex">
<!--                            <Icon name="ic:outline-search" class=" text-lg text-slate-500 absolute top-1/2 -translate-y-1/2 left-3 " />-->
                        <input type="text" id="table-search-users"
                               class="block p-2 ps-4 text-sm text-primary  w-96 bg-white placeholder-slate-500 focus:ring-0 focus:border-white focus:outline-0"
                               placeholder="What are you Looking For?">
                        <button class=" right-[1px] top-0 border bg-gray-300 border-primary text-primary text-center px-4 py-[5px] font-medium">Search</button>
                    </div>
                </div>
                <div class="flex gap-8">
                    <div class="flex items-center justify-center gap-6">
                        <RouterLink to="/add-cart" class="group relative">
                            <Icon name="material-symbols-light:shopping-bag-outline-sharp" class="text-2xl text-primary" />
                            <span class="absolute flex items-center justify-center w-4 h-4 bg-primary rounded-full -top-2 -right-1 text-white text-xs">4</span>
                            <div class="absolute bg-primary text-xs text-white py-1 px-2 hidden group-hover:block left-1/2 -translate-x-1/2 top-8 rounded">
                                <p>Cart</p>
                            </div>
                        </RouterLink>
                        <RouterLink to="/login" class="group relative">
                            <Icon name="streamline:interface-id-user-identification-angle-secure-human-id-person-face-silhouette-security-brackets"
                                  class="text-base text-primary" />
                            <div class="absolute bg-primary text-xs text-white py-1 px-2 hidden group-hover:block left-1/2 -translate-x-1/2 top-8 rounded">
                                <p>Login</p>
                            </div>
                        </RouterLink>
                        <RouterLink to="/register"  class="group relative">
                            <Icon name="ic:baseline-app-registration" class="text-xl text-primary" />
                            <div class="absolute bg-primary text-xs text-white py-1 px-2 hidden group-hover:block left-1/2 -translate-x-1/2 top-8 rounded">
                                <p>Registration</p>
                            </div>
                        </RouterLink>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- mid header section end-->

    <!--  header menu section -->
    <section class="bg-gray-300/85 hidden lg:block">
        <div class="container items-center justify-center flex">
            <div class="w-full">
                <div class="flex items-center py-2 text-primary font-semibold gap-10">
                    <RouterLink to="/all-products" class=" hover:text-slate-400 transition-all ease-in-out duration-500">All Categories</RouterLink>
                    <RouterLink to="/all-products" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Phone</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">iPad & Tab</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Mac</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Wearables</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Headphone & Speaker</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Accessories</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Camera</RouterLink>
                    <RouterLink to="/" class=" hover:text-slate-400 transition-all ease-in-out duration-500">Video Games</RouterLink>
                </div>
            </div>
        </div>
    </section>
    <!-- header menu section end-->


</template>

<style scoped>

</style>
