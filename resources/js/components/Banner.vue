<script setup>

import Button from "@/components/PrimaryButton.vue";
</script>

<template>
    <div class="flex lg:flex-row flex-wrap py-16">
        <div class="w-full lg:w-1/2 lg:pr-2 mb-5">
            <div class="relative ">
                <img class="w-full h-56 lg:h-80 rounded-xl" src="https://electrolyte3-store.myshopify.com/cdn/shop/files/camera-banner_jpg.jpg?v=1647434859" alt="" />
                <div class="absolute w-full lg:w-1/2 top-1/2 -translate-y-1/2 px-4 lg:left-12 text-slate-700">
                    <h2 class="text-lg lg:text-3xl font-bold tracking-wider">Thousands of free templates</h2>
                    <p class="text-xs lg:text-lg pt-3">Free and easy way to bring your ideas to life</p>
                    <Button class="flex items-center gap-3 my-5 text-sm hover:bg-primary/85">
                        Explore More
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-lg lg:text-2xl" />
                    </Button>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:pl-2">
            <div class="relative">
                <img class="w-full h-56 lg:h-80 rounded-xl" src="https://electrolyte3-store.myshopify.com/cdn/shop/files/trimmer-banner_jpg.png?v=1647434859" alt="" />
                <div class="absolute w-full lg:w-1/2 top-1/2 -translate-y-1/2 px-4 lg:left-12 text-slate-700">
                    <h2 class="text-lg lg:text-3xl font-bold tracking-wider">Create your unique style</h2>
                    <p class="text-xs lg:text-lg pt-3">Free and easy way to create your ideas to life</p>
                    <Button class="flex items-center gap-3 text-sm my-5 hover:bg-primary/85">
                        Shop Now
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-lg lg:text-2xl" />
                    </Button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
