<script setup>
import Header from "@/components/FrontendComponent/Header.vue";


</script>

<template>
    <!-- <PreLoader v-if="show"/> -->
    <div class="">
 
        <Header />
       

        <main>
            <slot />
        </main>
        <!-- <footer>
            <Footer />
        </footer> -->

    </div>
</template>

<style scoped>

</style>
