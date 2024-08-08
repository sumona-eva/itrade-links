<template>
    <AppLayout>
      <section>
          <div class="w-full max-w-5xl mx-auto py-20">
              <div class="flex flex-wrap">
                  <div class="w-full lg:w-2/3">
                      <h2 class="text-2xl font-bold text-primary p-5">Select Address</h2>
                      <div class="flex flex-col lg:flex-row lg:gap-4">
                          <div class="w-full lg:w-1/2 h-full border-4 p-5 shadow-lg">
                              <p class="text-xl font-medium text-primary">Address</p>
                              <ul class="text-sm font-normal py-3">
                                  <li>Mirpur, dhaka</li>
                                  <li>sum@sum.com</li>
                                  <li>1997743456</li>
                                  <li>Area: Dhaka & Delivery Charge: 120 BDT</li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <div class="w-full lg:w-1/3 font-playfair">
                      <h2 class="text-2xl font-bold text-primary py-5 px-5">Review Order Details</h2>

                      <div class="p-5 bg-gray-200  rounded-lg m-2">
                          <ul>
                              <li class="flex items-center justify-between text-md text-gray-500">
                                  <p>Booking Fee </p>
                                  <p>$ 50.00</p>
                              </li>
                              <li class="flex items-center justify-between text-md text-gray-500">
                                  <p>Sub Total </p>
                                  <p>$ 125.00</p>
                              </li>
                              <li class="flex items-center justify-between  text-lg py-3 font-semibold">
                                  <p>Grant Total </p>
                                  <p>$ 170.00</p>
                              </li>
                          </ul>
                          <div class="px-2 flex gap-5 my-10">
                              <RouterLink to="/payment" class="w-full px-3 py-2 lg:tracking-widest bg-primary hover:bg-white border border-primary hover:text-primary
                                text-white text-center transition-all ease-in-out duration-500">Payment</RouterLink>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </AppLayout>
  </template>

<script setup>

import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>

<style scoped>

</style>
