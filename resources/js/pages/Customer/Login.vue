<template>
    <AppLayout>
        <section>
            <div class="flex justify-center py-24 mx-10">
                <div class="w-full lg:max-w-xs mx-auto">
                        <div class="w-full bg-gray-300 rounded-xl shadow-md">
                            <h3 class="text-center text-primary font-bold text-2xl py-5">Login</h3>
                            <form  action="" class="px-8">

                            <div class="text-primary">
                                <label for="email" class="block pb-1" >Email</label>
                                <input type="email" name="email" id="email" v-model="loginCredential.email"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1 ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Username">
                            </div>
                            <div class="text-primary">
                                <label for="password" class="block pb-1">Password</label>
                                <input type="password" name="password"  id="password" v-model="loginCredential.password"
                                       class="block w-full border-0 py-2 text-primary shadow-sm ring-1  ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Password">
                            </div>

                            <div class="text-center py-5">
                                <button @click="handleLogin" class="rounded w-full text-white text-base font-semibold py-2 px-3 lg:tracking-wide bg-primary hover:bg-white border border-primary hover:text-primary
                                 text-center transition-all ease-in-out duration-500">Log In</button>
                            </div>
                            <p class="font-normal text-sm p-3 text-center text-primary">Don't Have an Account ?
                                <RouterLink to="/register" class="flex items-center justify-center hover:text-primary hover:font-bold">Create Account
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
    // import {toast} from "vue3-toastify";


    const authStore = useAuthStore();
    const router = useRouter()


    //Login
    const loginCredential = ref({
    email: 'poplar@gmail.com',
    password: '12345678',
});

    const handleLogin = async () => {
    try {
    const loginResponse = await authStore.login(loginCredential.value);
    console.log(loginResponse);
        if (loginResponse) {
            toast.success('Login successful!', {autoClose: 1000});
            router.push({name: "Dashboard"});
            }
        } catch (error) {
            toast.error(error.response?.data?.message || 'Login failed. Please try again.', {autoClose: 1000});
        }
    }

</script>
<style scoped>

</style>
