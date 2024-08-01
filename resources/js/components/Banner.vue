<script setup>

import Button from "@/components/Button.vue";
</script>

<template>
    <div class="flex py-16 gap-5">
        <div class="w-full lg:w-1/2">
            <div class="relative">
                <img class="w-full h-80 rounded-xl" src="@/assets/images/banner-1.png" alt="" />
                <div class="absolute w-1/2 top-1/2 -translate-y-1/2 left-12 text-white">
                    <h2 class="text-3xl font-bold tracking-wider">Thousands of free templates</h2>
                    <p class="text-lg text-white pt-3">Free and easy way to bring your ideas to life</p>
                    <Button class="flex items-center gap-3 my-5 hover:bg-primary/85">
                        Explore More
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-2xl" />
                    </Button>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="relative">
                <img class="w-full h-80 rounded-xl" src="@/assets/images/banner-2.png" alt="" />
                <div class="absolute w-1/2 top-1/2 -translate-y-1/2 left-12 text-white">
                    <h2 class="text-3xl font-bold tracking-wider">Create your unique style</h2>
                    <p class="text-lg text-white pt-3">Free and easy way to create your ideas to life</p>
                    <Button class="flex items-center gap-3 my-5 hover:bg-primary/85">
                        Shop Now
                        <Icon name="material-symbols-light:arrow-right-alt-rounded" class="text-2xl" />
                    </Button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
