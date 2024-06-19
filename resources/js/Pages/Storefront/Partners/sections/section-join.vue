<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
</script>

<template>
    <section>
        <section-container class="bg-info rounded-xl shadow-md px-6">
            <div class="px-6 grid items-center justify-center w-full lg:h-full grid-cols-1 my-auto lg:grid-cols-2 my-16">
                <div class="flex flex-col col-span-1 text-center lg:text-start text-accent mb-7">
                    <h3 class="text-4xl font-extrabold leading-tight">Join Us</h3>
                    <h3 class="text-4xl font-medium leading-tight">Transform your website visitors into satisfied
                        clients.</h3>
                </div>
                <div class="flex items-center justify-center col-span-1 lg:justify-end">
                    <button
                        class="box-content flex items-center py-4 mr-4 text-sm font-bold border px-7 rounded-2xl border-secondary text-secondary hover:bg-secondary hover:text-white focus:ring-4 focus:ring-purple-blue-100 transition duration-300">
                        Try Demo
                    </button>
                    <button
                        class="flex items-center py-4 text-sm font-bold text-white border px-7 rounded-2xl border-primary bg-primary hover:bg-info focus:ring-4 focus:ring-purple-blue-100 transition duration-300">
                        Get Started Now
                    </button>
                </div>
            </div>
        </section-container>
    </section>
</template>
