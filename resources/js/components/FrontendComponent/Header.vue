<script setup>


</script>
<template>
    <section class="bg-black">
        <Container>
        <div class="flex items-center justify-between">
            <div class="w-1/6">
                <div class="">
                    <img class="w-28 h-20 p-2" src="@/assets/images/eye-art-logo.svg" alt="">
                </div>
            </div>
            <div class="w-4/6">
                <ul class="flex gap-9 text-white font-bold tracking-wide text-lg">
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Home</RouterLink> </li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">About</RouterLink> </li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Portfolio</RouterLink></li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Service</RouterLink></li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Royel service</RouterLink></li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Blog</RouterLink></li>
                    <li class="pb-1 border-b-2 border-transparent hover:border-secondary transition-all ease-in-out duration-700"><RouterLink to="/">Trending</RouterLink></li>
                </ul>
            </div>
            <div class="w-1/6">
                <button class="flex items-center gap-4 text-lg font-bold text-white bg-secondary px-7 py-2 hover:bg-white hover:text-secondary transition-all ease-in-out duration-500">
                    Let's Talk
                    <Icon name="material-symbols:arrow-upward-rounded" class="text-xl text-white hover:text-secondary transition-all ease-in-out duration-300" />
                </button>
            </div>
        </div>
    </Container>
    </section>
</template>