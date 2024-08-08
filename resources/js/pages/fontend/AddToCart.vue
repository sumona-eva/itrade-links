<template>
    <AppLayout>
      <section>

          <div class="w-full max-w-3xl mx-auto py-20">
                <div class="flex justify-between">
                    <h2 class="font-bold text-lg">Your Cart</h2>
                    <div class="flex items-center justify-between gap-5">
                        <div>
                            <p class="text-sm text-gray-500">Subtotal</p>
                            <span class="font-bold text-lg">৳3000</span>
                        </div>
                        <div>
                            <RouterLink to="/checkout" class="w-56 px-3 py-2 lg:tracking-wide text-sm bg-primary hover:bg-white border border-primary hover:text-primary
                                    text-white text-center transition-all ease-in-out duration-500">
                                CheckOut
                            </RouterLink>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between py-10">
                    <div class="flex items-center gap-3">
                        <img class="w-36 h-36" src="https://demo.ishithemes.com/opencart/OPC137/OPC137L02/image/cache/catalog/productsimage/1-370x370.jpg" alt="">
                        <div>
                            <h2 class="font-bold text-lg py-2">Apple Cinema 30"</h2>
                            <p class="text-xs">Varient : Gray</p>
                            <p class="font-bold text-sm">Price : 3000</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h2 class="font-bold text-lg py-2">Quantity</h2>
                            <div class="flex gap-8">

                                <p class="font-bold text-sm">Price : ৳3000</p>
                                <Icon name="radix-icons:cross-2" class="text-xl text-gray-500"  />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <h2 class="font-bold text-lg">Subtotal</h2>
                    <p class="font-bold text-lg">৳3000</p>
                </div>
              <div class="my-10">
                  <RouterLink to="/checkout" class="w-56 px-3 py-2 lg:tracking-wide text-sm bg-primary hover:bg-white border border-primary hover:text-primary
                                    text-white text-center transition-all ease-in-out duration-500">
                      CheckOut
                  </RouterLink>
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
