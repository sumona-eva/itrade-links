<template>
    <AppLayout>
        <section>

            <div class="flex justify-center py-24 mx-10">
                <div class="w-full lg:max-w-xs mx-auto">
                    <div class="w-full bg-gray-300 rounded-xl shadow-md">
                        <h3 class="text-center text-primary font-bold text-2xl py-5">Registration</h3>
                        <form  action="" class="px-8">

                            <div class="text-primary">
                                <label for="name" class="block pb-1" >Name</label>
                                <input type="text" name="name" id="name" v-model="RegisterCredential.name"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                             ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Name">
                            </div>
                            <div class="text-primary">
                                <label for="email" class="block pb-1" >Email</label>
                                <input type="email" name="email" id="email" v-model="RegisterCredential.email"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                             ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Email">
                            </div>
                            <div class="text-primary">
                                <label for="number" class="block pb-1" >Phone Number</label>
                                <input type="number" name="number" id="number" v-model="RegisterCredential.phone"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                            ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Phone Number">
                            </div>
                            <div class="text-primary">
                                <label for="password" class="block pb-1">Password</label>
                                <input type="password" name="password"  id="password" v-model="RegisterCredential.password"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                              ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Password">
                            </div>

                            <div class="text-center py-5">
                                <button @click="handleRegister" class="rounded w-full text-white text-base font-semibold py-2 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Register</button>
                            </div>
                            <p class="font-normal text-sm p-3 text-center text-primary">Already Have an Account?
                                <RouterLink to="/login" class="flex items-center justify-center hover:text-primary hover:font-bold">Login
                                </RouterLink>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup lang="ts">
    import AppLayout from "@/components/Layouts/AppLayout.vue";
    import {ref} from 'vue';
    import {useAuthStore} from '@/stores/useAuthStore.js';
    import {useRouter} from 'vue-router'
    import {toast} from "vue3-toastify";


    const authStore = useAuthStore();
    const router = useRouter()


    //Login
    const RegisterCredential = ref({
        name : 'poplar',
        email: 'poplar@gmail.com',
        phone : 1998855667,
        password: '12345678',
    });

    const handleRegister = async () => {
        try {
            const RegisterResponse = await authStore.signup(RegisterCredential.value);
            console.log(RegisterResponse);
            if (RegisterResponse) {
                toast.success('Logout successful!', {autoClose: 1000});
                router.push({name: "Dashboard"});
            }
        } catch (error) {
            toast.error(error.response?.data?.message || 'Register failed. Please try again.', {autoClose: 1000});
        }
    }
</script>

<style scoped>

</style>
