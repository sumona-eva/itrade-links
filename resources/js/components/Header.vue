<script setup>
import MobileNav from "@/components//MobileNav.vue";
import SideNav from "@/components//SideNav.vue";
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
    <section class="bg-white  hidden lg:block">
        <div class="container">
            <div class="text-slate-500 flex justify-between items-center py-2 shadow-2xl">
               <div class="flex items-center gap-2">
                   <Icon name="material-symbols:location-on-outline-rounded" class=" text-lg" />
                   <p class="text-sm">Find A Store</p>
               </div>

               <div class="flex justify-center items-center gap-3">

                   <div class="">
                       <Icon name="typcn:social-twitter" class=" text-lg" />
                   </div>
                   <div class="">
                       <Icon name="basil:facebook-solid" class=" text-lg" />
                   </div>
                   <div class="">
                       <Icon name="bx:bxl-instagram-alt" class=" text-lg" />
                   </div>
                   <div class="">
                       <Icon name="mdi:youtube" class=" text-lg" />
                   </div>
               </div>
           </div>
        </div>
    </section>
    <!--    top header section end -->


    <!-- mid header section -->
    <section class="bg-white  hidden lg:block">
        <div class="container">
            <div class="flex justify-between">
                <RouterLink to="/">
                    <img class="w-16 h-auto p-2" src="@/assets/images/logo.png" alt="" />
                </RouterLink>
                <div class="flex items-center">
                    <div class="relative">
                            <Icon name="ic:outline-search" class=" text-lg text-slate-500 absolute top-1/2 -translate-y-1/2 left-3 " />
                        <input type="text" id="table-search-users"
                               class="block p-2 ps-8 text-sm text-black rounded-lg w-96 bg-transparent placeholder-slate-500 focus:ring-0 focus:border-primary focus:outline-0"
                               placeholder="What are you Looking For?">
                        <button class="absolute -right-8 top-0 bg-primary rounded-lg text-white text-center px-4 py-[7px] font-medium">Search</button>
                    </div>
                </div>
                <div class="flex gap-8">
                    <div class="flex items-center gap-4">
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                             <Icon name="material-symbols:phone-in-talk" class="text-lg" />
                        </span>
                        <div>
                            <p class="text-black text-xs font-semibold">Hotline:<span class="text-black text-sm font-semibold ps-3">0199886677</span></p>
                            <p class="text-slate-400 text-xs">Pickup your order for free</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-6">
                        <RouterLink to="/">
                            <Icon name="streamline:interface-user-single-close-geometric-human-person-single-up-user" class="text-lg text-black" />
                        </RouterLink>
                        <RouterLink to="/">
                            <Icon name="material-symbols:kid-star-outline-sharp" class="text-lg text-black" />
                        </RouterLink>
                        <RouterLink to="/">
                            <Icon name="clarity:shopping-bag-line" class="text-lg text-black" />
                        </RouterLink>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- mid header section end-->

    <!--  header menu section -->
    <section class="bg-white hidden lg:block">
        <div class="container">
            <div class="items-center justify-between flex">
                <div class="w-4/6">
                    <div class="flex items-center py-5 text-black font-semibold gap-10 tracking-wider">
                        <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">Home</RouterLink>
                        <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">TeeSpace</RouterLink>
                        <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">Shop</RouterLink>
                        <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">Blog</RouterLink>
                        <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">Pages</RouterLink>
                    </div>
                </div>
                <div class="w-1/6">
                    <div class="flex gap-2 justify-end text-black text-sm">
                        <Icon name="pepicons-pop:fire" class="text-lg text-primary" />
                        <p>Extra <span class="text-primary"> Sale 30%</span> off</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header menu section end-->


</template>

<style scoped>

</style>
