<script setup>

import {RouterLink} from "vue-router";
import PrimaryButton from "@/components/PrimaryButton.vue";
</script>

<template>
    <div>
        <div class="container flex flex-wrap pb-16">
            <div class="w-1/2 lg:w-1/5 p-5">
                <!--   product-1 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
                    <RouterLink to="/single-product" class="w-ful h-full flex flex-col items-center justify-between cursor-pointer group">
                        <div class="relative  lg:w-56 lg:h-44 w-full h-24 mx-auto overflow-hidden lg:mb-5 mb-2">
                            <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-75 group-hover:opacity-0 object-cover"
                                 src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-57.jpg?v=1717145937" alt="" />
                            <img class="absolute top-0 bottom-0 left-0 right-0 w-full h-full transition-all ease-in-out duration-700 group-hover:scale-110 opacity-0 group-hover:opacity-100 object-cover"
                                 src="https://qx-elesa-demo2.myshopify.com/cdn/shop/files/pro-59.jpg?v=1717145937" alt="" />
                        </div>
                    </RouterLink>
                    <div class="flex flex-col gap-2 items-center pb-2">
                        <RouterLink to="/single-product" class="text-sm text-center lg:text-lg">Fruit juicer</RouterLink>
                        <p class="text-base text-center">$14.00</p>
                        <RouterLink to="/add-cart">
                            <PrimaryButton class="flex items-center gap-3 my-2 hover:bg-primary/85 ">
                                Add to Cart
                            </PrimaryButton>
                        </RouterLink>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-2 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-3 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-4 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-4 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
        </div>

        <div class="container flex flex-wrap pb-16">
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-1 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-2 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-3 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-4 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-5 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
        </div>
        <div class="container flex flex-wrap pb-16">
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-1 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-2 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-3 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-4 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
            <div class="w-1/2 lg:w-1/5 p-3">
                <!--   product-5 -->
                <div class="flex flex-col overflow-hidden border border-gray-300">
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
        </div>
    </div>
</template>

<style scoped>

</style>
