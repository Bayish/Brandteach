<script setup>
import {ref} from "vue";
import StorefrontLayout from "@/layout/storefront-layout/index.vue";
import Logo from "@/layout/header/Logo.vue";
import SectionHero from "@/Pages/Storefront/Home/sections/section-hero.vue";
import SectionTestimonial from "@/Pages/Storefront/Home/sections/section-testimonial.vue";
import SectionFeatures from "@/Pages/Storefront/Home/sections/section-features.vue";
import SectionStat from "@/Pages/Storefront/Home/sections/section-stat.vue";
import SectionAccordion from "@/Pages/Storefront/Home/sections/section-accordion.vue";
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
import SectionHowWorks from "@/Pages/Storefront/Home/sections/section-how-works.vue";

const isOpen = ref(false);
const toggleMenu = () => isOpen.value = !isOpen.value;

</script>

<template>
    <storefront-layout>
        <section-hero/>
        <section-features/>
        <section-how-works/>
        <section-testimonial/>
        <div class="container mx-auto">
            <div class=" md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 space-y-4 md:space-y-0">
                <div
                    class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                    <h3 class="mb-3 text-xl font-bold text-indigo-600">Beginner Friendly</h3>
                    <div class="relative">
                        <img class="w-full rounded-xl"
                             src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                             alt="Colors"/>
                        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                            FREE</p>
                    </div>
                    <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Javascript Bootcamp for Absolute
                        Beginners</h1>
                    <div class="my-4">
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
                            <p>1:34:23 Minutes</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </span>
                            <p>3 Parts</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </span>
                            <p>Vanilla JS</p>
                        </div>
                        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Buy
                            Lesson
                        </button>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                    <h3 class="mb-3 text-xl font-bold text-indigo-600">Beginner Friendly</h3>
                    <div class="relative">
                        <img class="w-full rounded-xl"
                             src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                             alt="Colors"/>
                        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                            FREE</p>
                    </div>
                    <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Javascript Bootcamp for Absolute
                        Beginners</h1>
                    <div class="my-4">
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
                            <p>1:34:23 Minutes</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </span>
                            <p>3 Parts</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </span>
                            <p>Vanilla JS</p>
                        </div>
                        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Buy
                            Lesson
                        </button>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                    <h3 class="mb-3 text-xl font-bold text-indigo-600">Intermediate</h3>
                    <div class="relative">
                        <img class="w-full rounded-xl"
                             src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                             alt="Colors"/>
                        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                            $12</p>
                        <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">
                            %20 Discount</p>
                    </div>
                    <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Write a Gatsby plugin using
                        Typescript</h1>
                    <div class="my-4">
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
                            <p>1:34:23 Minutes</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </span>
                            <p>3 Parts</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </span>
                            <p>TypeScript</p>
                        </div>
                        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Start
                            Watching Now
                        </button>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                    <h3 class="mb-3 text-xl font-bold text-indigo-600">Beginner Friendly</h3>
                    <div class="relative">
                        <img class="w-full rounded-xl"
                             src="https://images.unsplash.com/photo-1561835491-ed2567d96913?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                             alt="Colors"/>
                        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                            $50</p>
                    </div>
                    <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Advanced React Native for
                        Sustainability</h1>
                    <div class="my-4">
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
                            <p>1:34:23 Minutes</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </span>
                            <p>3 Parts</p>
                        </div>
                        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </span>
                            <p>Vanilla JS</p>
                        </div>
                        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Buy
                            Lesson
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <section-stat/>
        <section-accordion/>
    </storefront-layout>
</template>
