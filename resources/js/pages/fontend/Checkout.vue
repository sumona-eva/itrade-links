<script setup>
import Container from "@/components/Container.vue";
import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>
        <!--       checkout design -->
        <Container>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/4 lg:pr-5 mb-10 lg:mb-0 mt-24 lg:mt-5">
                    <div class="flex">
                        <div class="w-full lg:w-2/3">
                            <h2 class="text-2xl font-bold text-primary py-5">Select Address</h2>
                            <div class="flex flex-col lg:flex-row lg:gap-4">
                                <div class="w-full lg:w-1/2 h-full shadow-lg border p-2 border-gray-300 rounded-lg">
                                    <p class="text-xl font-medium text-primary">Address</p>
                                    <ul class="text-sm font-normal py-2">
                                        <li>Mirpur, dhaka</li>
                                        <li>sum@sum.com</li>
                                        <li>1997743456</li>
                                        <li>Area: Dhaka & Delivery Charge: 120 BDT</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap shadow-2xl bg-white mt-5">
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="name"  class="block py-2 font-semibold"> Name</label>
                            <input type="text" name="name" id="name" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your Name">
                        </div>
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="number"  class="block py-2 font-semibold"> Mobile Number</label>
                            <input type="number" name="number" id="number" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your Phone Number">
                        </div>
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="email"  class="block py-2 font-semibold">E-mail</label>
                            <input type="email" name="email" id="email" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your E-mail">
                        </div>
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="city"  class="block py-2 font-semibold"> City</label>
                            <input type="text" name="city" id="city" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your City">
                        </div>
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="state"  class="block py-2 font-semibold"> State</label>
                            <input type="text" name="state" id="state" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your State">
                        </div>
                        <div class="w-full lg:w-1/2 mb-3 px-2">
                            <label for="zip"  class="block py-2 font-semibold"> Zip</label>
                            <input type="number" name="zip" id="city" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your ZIP">
                        </div>
                        <div class="w-full mb-3 px-2">
                            <label for="address"  class="block py-2 font-semibold"> Address</label>
                            <textarea id="address" name="address" rows="4" cols="2" class="border border-gray-300 focus:outline-none w-full p-2 rounded-md " placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button class="rounded w-1/2 text-white text-base font-semibold my-10 py-1 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Save Address</button>
                    </div>
                </div>
                <div class="w-full lg:w-1/4">
                    <div class=" py-7 my-5 mt-8 shadow-lg bg-gray-300 px-5">
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-medium">Subtotal:</p>
                            <p class="font-bold text-sm py-2"> ৳3000</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-medium">Shipping :</p>
                            <p class="font-bold text-sm"> ৳50</p>
                        </div>

                        <div class="flex justify-between items-center py-5">
                            <p class="text-lg font-bold">Total (TAKA):</p>
                            <p class="font-bold text-lg"> ৳3050</p>
                        </div>
                        <RouterLink to="/payment">
                            <button class="rounded w-full text-white text-base font-semibold py-1 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Payment</button>
                        </RouterLink>
                    </div>
                </div>
            </div>
        </Container>
    </AppLayout>
</template>
