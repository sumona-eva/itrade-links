<script setup>
import Container from "@/components/Container.vue";
import AppLayout from "@/components/Layouts/AppLayout.vue";
import Modal from '@/components/FrontendComponent/Modal.vue';
import {ref} from "vue";

// model
const isModalOpened = ref(false);
const openModal = () => {
    isModalOpened.value = true;
};
const closeModal = () => {
    isModalOpened.value = false;
};
</script>
<template>
    <AppLayout>
        <section class="bg-[url('https://dvf83rt16ac4w.cloudfront.net/upload/media/1705406138408940.png')]
                      bg-no-repeat bg-cover bg-center pt-28 lg:pt-0">
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
                        <div @click="openModal" class="w-full px-3 py-1 lg:tracking-wide rounded my-4 bg-primary hover:bg-white border border-primary hover:text-primary
                                                text-white text-center transition-all ease-in-out duration-500 text-nowrap">
                            Now Click Cash om Delivery
                        </div>
                    </div>
                </div>
            </div>
        </Container>
    </AppLayout>
    <Modal title="Order" :isOpen="isModalOpened" @modal-close="closeModal">
        <div class="">
            <h3 class="text-center font-bold text-2xl">Cash On Delivery</h3>
            <div class="py-10">
                <form  action="" class="px-8">
                    <div class="flex flex-col gap-3 text-primary">
                        <div class="w-full">
                            <div class="flex items-center justify-center">
                                <label for="name" class="w-1/6 block text-base font-semibold">Name: </label>
                                <input type="text" name="name" id="name"
                                       class="w-5/6 relative block border-0 py-2 rounded text-primary shadow-sm ring-1 mx-6
                                       ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex items-center justify-center">
                                <label for="number" class="w-1/6 block text-base font-semibold">Phone: </label>
                                <input type="number" name="number" id="number"
                                       class="w-5/6 block border-0 py-2 rounded text-primary shadow-sm ring-1 mx-6
                                       ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your phone Number">
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex items-center justify-center">
                                <label for="address" class="w-1/6 block text-base font-semibold ">Address: </label>
                                <input type="text" name="address" id="address"
                                       class="w-5/6 block border-0 py-2 rounded text-primary shadow-sm ring-1 mx-6
                                       ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Address">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="py-5">
                    <h3 class="text-base font-semibold">Shipping Method </h3>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-5/6 p-5">
                            <ul class=" border border-gray-400 rounded">
                                <li class="border-b border-gray-400">
                                    <div class="flex items-center justify-between px-3 lg:px-10">
                                        <input class=" my-4" type="radio" name="options" id="option_1">
                                        <label for="option_1">Inside Dhaka</label>
                                        <p class="font-bold">Tk 70</p>
                                    </div>
                                </li>
                                <li class="border-b border-gray-400">
                                    <div class="flex items-center justify-between px-3 lg:px-10">
                                        <input class=" my-4" type="radio" name="options" id="option_1">
                                        <label for="option_1">Outside Dhaka</label>
                                        <p class="font-bold">Tk 130</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-y border-gray-400 py-2">
                    <div class="w-1/6 relative">
                        <div>
                            <img src="https://demo.ishithemes.com/opencart/OPC137/OPC137L02/image/cache/catalog/productsimage/1-1000x1000.jpg" alt="">
                        </div>
                        <span class="absolute top-1 left-12 w-5 h-5 bg-gray-700 rounded-full text-center text-secondary text-sm">
                            3
                        </span>
                    </div>
                    <div class="w-5/6">
                        <div class="flex justify-between px-5">
                            <h3>Apple Cinema 30"</h3>
                            <p>Tk 110.00</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between border-b border-gray-400 px-8 py-5">
                    <ul class="font-medium ">
                        <li>Sub Total </li>
                        <li> Delivery charge </li>
                    </ul>
                    <ul class="font-bold ">
                        <li>Tk 110 </li>
                        <li> Tk 70 </li>
                    </ul>
                </div>
                <div class="flex justify-between font-bold px-8 py-2">
                    <p>Total</p>
                    <p>Tk 180</p>
                </div>
                <RouterLink to="/">
                    <button class="rounded w-full text-white text-base font-semibold my-10 py-1 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Confirm Order Cash On Delivery</button>
                </RouterLink>
            </div>
        </div>
    </Modal>
</template>
