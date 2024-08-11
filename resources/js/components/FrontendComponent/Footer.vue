<script setup>

import {RouterLink} from "vue-router";
</script>

<template>
    <footer>
        <div class="bg-primary">
            <div class="container">
                <div class="relative z-40 lg:px-3 py-3 lg:py-8">
                    <div class="flex flex-col gap-6 justify-between lg:flex-row">
                        <div class="w-full lg:w-1/4">
                            <div class="text-center lg:text-left py-5 lg:py-0">
                                <h2 class="text-secondary font-semibold text-lg lg:text-xl lg:pb-4">Company</h2>
                                <p class="text-xs lg:text-sm text-slate-300 py-2 mb-2">About Us</p>
                                <h2 class="text-slate-300 font-semibold text-xs lg:text-sm mb-2">Our Brands</h2>
                                <p class="text-xs lg:text-sm text-slate-300 py-2">Careers
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4">
                            <div class="text-center lg:text-left pb-5">
                                <h2 class="text-secondary font-semibold text-lg lg:text-xl pb-4">Help Center</h2>
                                <ul class="text-slate-300 leading-loose text-xs lg:text-sm">
                                    <li class="mb-2">FAQ</li>
                                    <li class="mb-2">Support Center</li>
                                    <li class="mb-2">Payment Security</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4">
                            <div class="text-center lg:text-left pb-5">
                                <h2 class="text-secondary font-semibold text-lg lg:text-xl pb-4">Terms & Condition</h2>
                                <ul class="text-slate-300 leading-loose text-xs lg:text-sm">
                                    <li class="mb-2">Terms and Conditions</li>
                                    <li class="mb-2">Privacy Policy</li>
                                    <li class="mb-2">Cookie Policy</li>
                                    <li class="mb-2">Store Locator</li>

                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4">
                            <div class="text-center lg:text-left">
                                <h2 class="text-secondary text-xl lg:text-2xl font-medium py-5 lg:py-0 lg:pb-5">Newsletter</h2>
                                <p class="text-secondary text-xs lg:text-sm font-medium py-5 lg:py-0 lg:pb-5">Sign up for get latest news and update</p>
                                <div class="flex gap-2 pb-3">
                                    <input type="email" id="email"
                                           class="block p-2 ps-3 text-sm text-primary w-56 bg-white placeholder-slate-500 focus:ring-0 focus:border-white focus:outline-0"
                                           placeholder="Your Email">
                                    <button class=" bg-white border-2 border-secondary text-primary text-center px-2 py-[6px] font-semibold">Subscribe</button>
                                </div>
                                <div class="flex gap-3">
                                    <Icon name="material-symbols:phone-in-talk-watchface-indicator-outline" class=" text-lg text-slate-300" />
                                    <p class="text-secondary text-xs font-normal py-5 lg:py-0 lg:pb-5">09678-666777</p>
                                    <Icon name="ic:outline-mail-outline" class=" text-lg text-slate-300" />
                                    <p class="text-secondary text-xs font-normal py-5 lg:py-0 lg:pb-5">support@itradelink.com</p>
                                </div>
<!--                                <div class="pb-8">-->
<!--                                    <RouterLink to="/">-->
<!--                                        <img class="w-16 h-auto" src="@/assets/images/logoo.png" alt="" />-->
<!--                                    </RouterLink>-->
<!--                                </div>-->
                                <ul class="text-slate-300 tracking-widest font-roboto text-sm lg:text-xl font-normal leading-loose">
                                    <li class="flex justify-center lg:justify-start gap-3">
                                        <Icon name="typcn:social-twitter" class=" text-xl text-slate-300" />
                                        <Icon name="basil:facebook-solid" class=" text-xl text-slate-300" />
                                        <Icon name="bx:bxl-instagram-alt" class=" text-xl text-slate-300" />
                                        <Icon name="mdi:youtube" class=" text-xl text-slate-300" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black">
            <div class="container flex items-center justify-between gap-3 py-4">
                <div class="w-full lg:w-1/3">
                    <div class="flex flex-col items-center lg:items-start">
                        <div>
                            <p class="text-xs lg:text-sm text-slate-300 py-2">© 2024 CTP</p>
                        </div>
                        <div class="flex gap-4 text-slate-300 text-xs lg:text-sm">
                            <p>Terms & Conditions</p>
                            <p>Privacy Policy</p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-auto hidden lg:block text-right">
                    <img class="w-96 h-auto p-2" src="https://dvf83rt16ac4w.cloudfront.net/upload/media/1698742255421752.webp" alt="" />
                </div>
            </div>
        </div>

    </footer>
</template>

<style scoped>

</style>
