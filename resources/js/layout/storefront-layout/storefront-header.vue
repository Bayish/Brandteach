<script setup>
import Logo from "@/layout/header/Logo.vue";
import navigations from '@/helper/routes';
import {ref} from "vue";
import Link from "@/layout/navigation/Link.vue";
const isOpen = ref(false);
const toggleMenu = (value) => isOpen.value = value;

const storefront = navigations.storefront;
const currentRoute = ref(route().current());

const changeActive = (value) =>{
    currentRoute.value = value;
}

</script>
<template>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-screen-xl container items-center justify-between py-4" aria-label="Global">
            <div class="flex lg:flex-1">
                <div class="mw-full w-14 mr-auto">
                    <Logo/>
                </div>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <Link
                    v-for="(item, index) in storefront.header" :key="index" :href="item.link"
                    class="text-base font-semibold leading-6 text-info hover:text-primary transition duration-200 ease-in-out  hover:scale-105"
                    :class="{'text-primary': currentRoute === item.link}"
                    @click="changeActive(item.link)"
                >
                    {{ item.title }}
                </Link>
            </div>
            <div
                class="hidden lg:flex lg:flex-1 lg:justify-end items-center"
               >
                <div class="relative"  @mouseover="toggleMenu(true)"
                     @mouseleave="toggleMenu(false)">
                    <button
                        type="button"
                        class="flex items-center btn btn-primary rounded-full shadow-none ml-2 text-base font-semibold text-accent">
                        Войти
                        <svg class="h-5 w-5 flex-none text-accent" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>


                    <div
                        :class="{'opacity-100 translate-y-0  z-10': isOpen, 'opacity-0 translate-y-1 -z-10': !isOpen}"
                        class="absolute right-0 top-full mt-1 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 duration-300 ease-in-out">
                        <div class="p-4">
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/login" class="block font-semibold text-gray-900">
                                        Login student
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">If you are student, login here please.</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/login" class="block font-semibold text-gray-900">
                                        Login partners, teachers.
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">If you are teacher or partner you can login here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                            <a href="#"
                               class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Watch demo
                            </a>
                            <a href="#"
                               class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Contact sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>
