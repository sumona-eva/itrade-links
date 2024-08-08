<template>
    <AppLayout>
        <section>
            <div class="flex justify-between px-5 py-2 text-white text-lg font-semibold lg:hidden
                        transition-all ease-in-out duration-1000">
                <h2>All products</h2>
                <button @click="filter = !filter" >
                    <Icon name="material-symbols:filter-alt-outline" class="text-secondary text-2xl"  />
                </button>
            </div>

            <div class="container flex">
                <div class="fixed z-10 top-0 left-0 bottom-0 w-52 lg:relative lg:w-3/12 lg:block lg:translate-x-0 overflow-scroll  bg-white transition-all ease-in-out duration-700"
                :class="{'translate-x-0' : filter, '-translate-x-60' : !filter}">
                    <div class="border-r px-5 py-12 w-full">
                        <div>
                            <ul>
                                <li>
                                    <div class="group flex items-center gap-3 py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isCetagoryLinks = !isCetagoryLinks">
                                      <span class="font-playfair tracking-wide text-lg font-medium transition-all ease-in-out duration-300">Category</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isCetagoryLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20" />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="cetagory-links flex flex-col gap-3 text-sm font-playfair pl-8 py-4" :class="{'cetagory-links--active' : isCetagoryLinks}">
                                        <li>
                                            <p>Electronics</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>HeadPhone</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Smart Phone</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Smart Watch</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Trimar</p>
                                        </li>
                                          <li class="category-filter">
                                            <p>Mouse</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <li>
                                    <div class=" group flex items-center gap-3  py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isPriceLinks = !isPriceLinks">

                                      <span class="font-playfair tracking-wide text-lg font-medium ">Brand</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isPriceLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20"  />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="price-links flex flex-col  gap-3 text-sm font-playfair pl-8 py-4" :class="{'price-links--active' : isPriceLinks}">
                                        <li class="category-filter">
                                            <p>Lg</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>Hp</p>
                                        </li>
                                        <li class="category-filter">
                                            <p>IPad</p>
                                        </li>
                                        <li class="category-filter ">
                                            <p>Nikon</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="-full lg:w-9/12 ">
                    <div class="flex flex-wrap pb-8">
<!--                            <ProductCard />-->
                        <div>
                                <h2 class="tracking-wider text-black font-bold
                                    text-lg lg:text-2xl px-4 py-8">All Product</h2>
                                <div class="container flex flex-wrap pb-8">
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--                        <ProductCard />-->
                                        <!--   product-1 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-46.jpg?v=1717145511" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-50.jpg?v=1717145511" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Smart watch</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-2 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-36.jpg?crop=center&height=585&v=1717152383&width=630" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-37.jpg?crop=center&height=585&v=1717152383&width=630" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Wireless Mouse</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-3 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-71.jpg?v=1717150397" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-74.jpg?v=1717150397" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Ear earbuds</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-4 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-52.jpg?v=1717150164" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-51.jpg?v=1717150164" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Daily toaster</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-5 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-31.jpg?v=1717147070" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-34.jpg?v=1717147070" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Fire tv</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-6 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-66.jpg?v=1717140602" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-67.jpg?v=1717140602" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Camera drone</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-7-->
                                        <div class="flex flex-col overflow-hidden">
                                            <div class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <RouterLink to="/single-product" class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-24.jpg?v=1717147346" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-22.jpg?v=1717147346" alt="" />
                                                </RouterLink>
                                            </div>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Gaming controller</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-8 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-3.jpg?v=1717140014" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-1_ca85d3b2-d7dc-4ee7-90c5-ae8fe7b95ef0.jpg?v=1717140015" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Compact cameras</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--                        <ProductCard />-->
                                        <!--   product-1 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-57.jpg?v=1717145937" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-59.jpg?v=1717145937" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Fruit juicer</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-2 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" lass="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-62.jpg?v=1717151487" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo1.myshopify.com/cdn/shop/files/pro-61.jpg?v=1717151487" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Graphics card</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-3 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-16.jpg?crop=center&height=220&v=1717145312&width=200" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-19.jpg?v=1717145312" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Keypad mobile</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 lg:w-1/4 p-3">
                                        <!--   product-4 -->
                                        <div class="flex flex-col overflow-hidden">
                                            <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                                                <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-29.jpg?v=1717139441" alt="" />
                                                    <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                                         src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-26.jpg?v=1717139444" alt="" />
                                                </div>
                                            </RouterLink>
                                            <div class="flex flex-col gap-2 items-center pb-5">
                                                <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Bluetooth speaker</RouterLink>
                                                <p class="text-xs text-center">$14.00</p>
                                                <RouterLink to="/add-cart">
                                                    <PrimaryButton class="flex items-center gap-3 text-xs my-2 hover:bg-primary/85">
                                                        Add to Cart
                                                    </PrimaryButton>
                                                </RouterLink>
                                            </div>
                                        </div>
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
import ProductCard from "@/components/ProductCard.vue";
import {ref} from 'vue';
import PrimaryButton from "@/components/PrimaryButton.vue";
const isCetagoryLinks = ref(true);
const isPriceLinks = ref(true);
const isLocationLinks = ref(true);
const filter = ref(false);
</script>
