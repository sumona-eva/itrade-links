
<script setup lang="ts">
import {ref} from 'vue'
const toggleNav = ref(false);
</script>

<template>
    <!--  phone nav bar-->

    <nav class="lg:hidden px-5 z-50 fixed top-0 left-0 right-0 w-full bg-primary shadow-xl" >

            <!--        menu & logo  -->
            <div class="flex items-center justify-between">

                <div>
                    <RouterLink to="/" class="">
                        <img class="w-16 h-auto p-2" src="@/assets/images/logoo.png"  alt="Logo" >
                    </RouterLink>
                </div>

                <div>
                    <!--            menu bar-->
                    <div class="flex gap-3">
                        <div class="relative">
                            <Icon name="material-symbols-light:shopping-cart-outline-rounded" class=" text-3xl text-white" />
                            <span class="absolute flex items-center justify-center w-4 h-4 bg-white rounded-full -top-1 -right-1 text-primary text-sm">4</span>
                         </div>
                        <div class="elegance-hamburger-menu" @click="toggleNav = !toggleNav">
                            <div class="elegance-hamburger-menu__btn" :class="{'elegance-hamburger-menu__btn--active' : toggleNav}">
                                <span></span>
                            </div>
                        </div>
                    </div>


                    <div :class="{'translate-x-0': toggleNav, 'translate-x-80': !toggleNav}" class="fixed top-0 right-0 bottom-0 w-64 h-full z-50 lg:hidden transition-all ease-in-out duration-500
                         bg-primary border-2 border-gray-100 overflow-y-scroll">
                         <div class="flex justify-between py-4 px-3">
                            <button  @click="toggleNav = false">
                                <Icon name="material-symbols:close-small" class=" text-4xl text-white" />
                            </button>

                            <span class="flex gap-1 text-base text-white font-medium">
                               Login <Icon name="mdi:account-arrow-right-outline" class=" text-2xl text-white" />
                            </span>
                         </div>

                         <div class="px-4 py-3 text-gray-600 ">
                             <h2 class="tracking-wider font-extrabold text-base text-white">Menu</h2>
                             <ul class="py-3 px-2 text-white leading-loose font-semibold text-xs tracking-wide">
                                 <li class=" uppercase">home</li>
                                 <li class=" uppercase">teespace</li>
                                 <li class=" uppercase">shop</li>
                                 <li class=" uppercase">blog</li>
                                 <li class=" uppercase">pages</li>
                             </ul>
                            <h2 class="tracking-wider font-extrabold text-base text-white">Top Category</h2>
                            <ul class="py-3 px-2 text-white leading-loose font-semibold text-xs tracking-wide">
                                <li class=" uppercase">trimer-shirt</li>
                                <li class=" uppercase">long-sleeves</li>
                                <li class=" uppercase">sweater</li>
                                <li class=" uppercase">hoodies</li>
                                <li class=" uppercase">tanktop</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

    </nav>
    <!--  phone nav bar end-->
</template>
