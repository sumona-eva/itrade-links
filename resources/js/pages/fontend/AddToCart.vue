<script setup>
import Container from "@/components/Container.vue";
import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>
        <section class="bg-[url('https://dvf83rt16ac4w.cloudfront.net/upload/media/1705406138408940.png')]
                      bg-no-repeat bg-cover bg-center pt-16 lg:pt-0">
            <Container class="py-12">
                <div class="bg-gray-300 inline-block p-4 rounded-lg">
                    <div class="flex gap-3 items-center">
                        <Icon name="material-symbols:line-start-arrow-notch" class="text-3xl" />
                        <h3 class="text-xl lg:text-4xl font-bold text-black">Shopping Cart</h3>
                    </div>
                    <p class="pl-10 text-gray-800 font-medium pt-2 text-xs lg:text-md"><span class="text-gray-400">Home / </span>Shopping Cart</p>
                </div>
            </Container>
        </section>
        <!--        cart design -->
        <Container>
            <div class="flex flex-wrap justify-between">
                <div class="w-full lg:w-8/12 lg:pr-5 mb-10">
                    <div class="flex flex-wrap justify-between shadow-2xl bg-white mt-5" v-for="item in 2">
                        <div class="w-full lg:w-1/5">
                            <div class="p-3">
                                <img class="w-full h-56 lg:h-32 rounded-lg object-cover"
                                     src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1717668125430216.jpeg" alt="">
                            </div>
                        </div>
                        <div class="w-full lg:w-4/5">
                            <div class="w-full p-4 shadow-lg">
                                <div class="flex justify-between">
                                    <div>
                                        <h2 class="font-bold text-xl">Apple Cinema 30"</h2>
                                        <p class="text-sm font-medium">By Online Training Plus and 2 other</p>
                                        <p class="text-sm font-medium">Quantity : 1</p>
                                    </div>
                                    <div>
                                        <p class="font-bold text-lg"> ৳3000</p>
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end pt-5">
                                    <div class="flex gap-8">
                                        <p class="text-sm font-medium">Varient : gray</p>
                                        <p class="text-sm font-medium">Size : XL</p>
                                        <p class="text-sm font-medium">Color : Red</p>
                                    </div>
                                    <div class="flex gap-8 text-base font-medium pt-3 lg:pt-0">
                                        <button>Move to Wishlist</button>
                                        <button>Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12">
                    <div class="p-3 lg:-mt-5 rounded-lg bg-gray-300 text-center mb-8 shadow-lg">
                        <p class="text-sm font-medium">Subtotal:</p>
                        <p class="font-bold text-xl py-3"> ৳3000</p>
                        <RouterLink to="/checkout">
                            <button class="rounded w-full text-white text-base font-semibold py-1 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Checkout Now</button>
                        </RouterLink>
                    </div>
                </div>
            </div>
        </Container>
    </AppLayout>
</template>
