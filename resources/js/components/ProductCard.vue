<script setup >
import { RouterLink } from 'vue-router';
import Button from "@/components/Button.vue";


</script>

<template>
    <div class="flex flex-col rounded-t-xl overflow-hidden">
       <div>
            <img class="w-full h-auto object-cover p-5" src="@/assets/images/productCard.png" alt="">
       </div>
        <div class="flex flex-col gap-2 items-center  pb-5">
            <h2 class="text-lg">Zone Sweatshirt</h2>
            <p class="text-sm">$19.95 – $159.95</p>
            <Button>
                Add to Cart
            </Button>
        </div>

    </div>
</template>
<style scoped>

</style>
