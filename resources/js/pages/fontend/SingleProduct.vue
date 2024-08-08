<template>
    <AppLayout>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="lg:p-20">
                    <Gallary />
                    <h2 class="font-medium text-xl lg:text-2xl p-5 tracking-wide">Description</h2>
                    <p class="font-roboto text-sm font-normal pl-5 tracking-wide text-gray-500">Aorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu dictum metus, maximus egestas magna.
                        Sed pellentesque nec nunc in suscipit. Quisque rutrum ullamcorper cursus. Vestibulum pellentesque commodo
                        sem, quis finibus tellus consequat vitae. Proin tempus nisi magna, iaculis molestie eros suscipit eu.
                        Aorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="lg:p-20">
                    <h2 class="font-medium text-2xl lg:text-4xl p-10 tracking-wide">Apple Cinema 30"</h2>
                    <h1 class="font-medium text-lg lg:text-xl text-primary px-10 pb-5">$110.00</h1>

                    <div class="px-10">
                        <p class="font-medium text-lg text-primary">share Via</p>
                        <ul class="text-primary">
                            <li class="flex justify-center lg:justify-start gap-4 pt-5">
                                <Icon name="mdi:twitter" class=" text-lg hover:border-2  hover:rounded-full"/>
                                <Icon name="gg:facebook" class=" text-lg hover:border-2  hover:rounded-full"/>
                                <Icon name="bi:whatsapp" class=" text-lg hover:border-2  hover:rounded-full"/>
                            </li>
                        </ul>
                        <p class="font-medium text-lg text-primary py-3">Customer Review</p>
                        <div class="flex items-center">
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <p class="font-roboto text-sm font-normal tracking-wide text-gray-500">( 1 ) Ratings</p>
                        </div>
                        <div class="px-2 flex gap-5 my-10">
                            <label>
                                <input type="number" class="w-20">
                            </label>
                            <RouterLink to="/add-cart" class="w-56 px-3 py-2 lg:tracking-widest bg-primary hover:bg-white border border-primary hover:text-primary
                            text-white text-center transition-all ease-in-out duration-500">ADD TO CART</RouterLink>
                        </div>
                        <div class=" flex flex-warp gap-24">
                            <p>Brand: <span class="text-sm text-gray-500">Apple</span> </p>
                            <p>Product Code: <span class="text-sm text-gray-500">2300</span> </p>
                            <p>Availability: <span class="text-sm text-gray-500">IN Stock</span> </p>
                        </div>
                    </div>
                    <p class="font-roboto text-sm font-normal pl-10 tracking-wide text-gray-500 py-7">Category Shop Tag Product</p>
                </div>
            </div>
        </div>
        <div>
            <h2 class="font-bold text-xl lg:text-2xl text-center tracking-wide pb-16">Related products</h2>
            <div class="flex flex-col flex-wrap lg:flex-row items-center justify-center pb-10">
                <div class="container flex flex-wrap pb-8">
                    <div class="w-1/2 lg:w-1/5 p-3">
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
                    <div class="w-1/2 lg:w-1/5 p-3">
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
                    <div class="w-1/2 lg:w-1/5 p-3">
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
                    <div class="w-1/2 lg:w-1/5 p-3">
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
                    <div class="w-1/2 lg:w-1/5 p-3">
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
                </div>

            </div>

        </div>
    </AppLayout>
</template>

<script setup>
    import AppLayout from "@/components/Layouts/AppLayout.vue";
    import Gallary from "@/components/Gallary.vue";
    import ProductCard from "@/components/ProductCard.vue";
    import PrimaryButton from "@/components/PrimaryButton.vue";
</script>

<style lang="scss" scoped>

</style>
