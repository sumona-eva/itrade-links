
<template>
    <AppLayout>
        <section>
            <div class="flex flex-col lg:flex-row pt-12">
              <div class="w-full lg:w-1/2">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="text-lg font-semibold text-primary mb-5 mt-16 lg:mt-10">Select Your Payment Method</h2>

                    <div class="flex flex-wrap px-10">
                        <div class="w-1/2 lg:w-1/3 px-3 mb-5">
                            <input type="radio" class="peer hidden" name="method" id="cod">
                            <label for="cod" class="border-2 bg-gray-200 rounded-lg peer-checked:border-primary block cursor-pointer">
                                <img class="w-full h-20 object-cover rounded-md" src="https://static.vecteezy.com/system/resources/previews/035/026/415/non_2x/cash-on-delivery-or-cod-icon-design-for-shipping-coupon-bonus-logo-seal-tag-sign-seal-symbol-badge-stamp-sticker-template-website-apps-illustration-free-vector.jpg" alt="">
                            </label>
                        </div>
                        <div class="w-1/2 lg:w-1/3 px-3 mb-5">
                            <input type="radio" class="peer hidden" name="method" id="cod">
                            <label for="cod" class="border-2 bg-gray-200 rounded-lg peer-checked:border-primary block cursor-pointer">
                                <img class="w-full h-20 object-cover rounded-md" src="https://1000logos.net/wp-content/uploads/2021/09/Payoneer-logo-old.png" alt="">
                            </label>
                        </div>
                        <div class="w-1/2 lg:w-1/3 px-3 mb-5">
                            <input type="radio" class="peer hidden" name="method" id="cod">
                            <label for="cod" class="border-2 bg-gray-200 rounded-lg peer-checked:border-primary block cursor-pointer">
                                <img class="w-full h-20 object-cover rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfFiXtMWdFcj3PJS1Tt7LK_ofnDWnfv6knrw&s" alt="">
                            </label>
                        </div>
                        <div class="w-1/2 lg:w-1/3 px-3 mb-5">
                            <input type="radio" class="peer hidden" name="method" id="cod">
                            <label for="cod" class="border-2 bg-gray-200 rounded-lg peer-checked:border-primary block cursor-pointer">
                                <img class="w-full h-20 object-cover rounded-md" src="https://media.designrush.com/inspiration_images/656402/conversions/3-mobile.jpg" alt="">
                            </label>
                        </div>
                    </div>
                </div>

              </div>
              <div class="w-full lg:w-1/2">
                <div class="flex flex-col lg:flex-row items-end justify-center lg:m-12 mb-5">
                  <div class="w-full lg:w-2/3">
                    <div class="bg-gray-200 rounded p-5">
                      <ul>
                        <li class="text-lg font-semibold text-primary">ORDER SUMMARY </li>
                        <li class="text-sm font-normal text-primary py-3 flex justify-between">
                          <span>Subtotal(1items total of Qty and Price)</span>
                          <span>$500 </span>
                        </li>
                        <li class="text-sm font-normal text-primary pb-2 flex justify-between">
                          <span>Included Delivery Charge </span>
                          <span>$50 </span>
                        </li>
                        <li class="text-lg font-semibold text-primary flex justify-between">
                          <span>Total Amount</span>
                          <span>$550 </span>
                        </li>
                      </ul>
                        <div class="px-2 flex gap-5 my-10 ">
                            <RouterLink to="/" class="w-full px-3 py-1 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                text-white text-center transition-all ease-in-out duration-500 rounded">Complete Order</RouterLink>
                        </div>
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
