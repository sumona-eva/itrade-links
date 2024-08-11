<script setup >
import { RouterLink } from 'vue-router';
import PrimaryButton from "@/components/PrimaryButton.vue";


</script>

<template>
<!--    <div class="w-1/2 lg:w-1/5 p-5">-->
        <!--   product-1 -->
        <div class="flex flex-col overflow-hidden border border-gray-300">
            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden mb-2">
                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-57.jpg?v=1717145937" alt="" />
                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-59.jpg?v=1717145937" alt="" />
                </div>
            </RouterLink>
            <div class="flex flex-col gap-2 items-center pb-2">
                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Fruit juicer</RouterLink>
                <p class="text-base text-center">$14.00</p>
                <RouterLink to="/add-cart">
                    <PrimaryButton class="flex items-center gap-3 my-2 hover:bg-primary/85 ">
                        Add to Cart
                    </PrimaryButton>
                </RouterLink>
            </div>
        </div>
<!--    </div>-->
</template>
<style scoped>

</style>
