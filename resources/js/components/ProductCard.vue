<script setup >
import { RouterLink } from 'vue-router';
import PrimaryButton from "@/components/PrimaryButton.vue";


</script>

<template>
    <div class="flex flex-col overflow-hidden">
       <div>
            <img class="w-full h-auto object-cover lg:p-5" src="@/assets/images/productCard.png" alt="">
       </div>
        <div class="flex flex-col gap-2 items-center pb-5">
            <h2 class="text-sm text-center lg:text-lg">Zone Sweatshirt</h2>
            <p class="text-xs text-center">$19.95 – $159.95</p>
            <PrimaryButton class="flex items-center gap-3 text-xs my-3 hover:bg-primary/85">
                Add to Cart
            </PrimaryButton>
        </div>
    </div>
</template>
<style scoped>

</style>
