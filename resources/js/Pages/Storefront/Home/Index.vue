<script setup>
import {ref} from "vue";

const isOpen = ref(false);
const toggleMenu = () => isOpen.value = !isOpen.value;

</script>

<template>
    <header class="bg-white">
        <nav class="mx-auto flex container items-center justify-between py-6" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Brand Teach</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                         alt="">
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button type="button" @click="toggleMenu"
                            class="flex items-center gap-x-1 text-base font-semibold leading-6 text-gray-900"
                            aria-expanded="false">
                        Product
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                    <!--
                      'Product' flyout menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0 translate-y-1"
                        To: "opacity-100 translate-y-0"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100 translate-y-0"
                        To: "opacity-0 translate-y-1"
                    -->
                    <div
                        :class="{'opacity-100 translate-y-0': isOpen, 'opacity-0 translate-y-1': !isOpen}"
                        class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 duration-150">
                        <div class="p-4">
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Analytics
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
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
                                              d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Engagement
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Speak directly to your customers</p>
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
                                              d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Security
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
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
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Integrations
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Connect with third-party tools</p>
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
                                              d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Automations
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
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

                <a href="#" class="text-base font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-base font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-base font-semibold leading-6 text-gray-900">Company</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="block text-base font-semibold leading-6 text-gray-900">Sign in</a>
                <a href="#" class="ml-2 block text-base font-semibold leading-6 text-gray-900">Sign up</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                             alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div class="-mx-3">
                                <button type="button"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                        aria-controls="disclosure-1" aria-expanded="false">
                                    Product
                                    <!--
                                      Expand/collapse icon, toggle classes based on menu open state.

                                      Open: "rotate-180", Closed: ""
                                    -->
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                <div :class="{'rotate-180': isOpen}" class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                        demo</a>
                                    <a href="#"
                                       class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                        sales</a>
                                </div>
                            </div>
                            <a href="#"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                               class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="min-h-screen h-full flex flex-col">
        <div class="flex-1 flex flex-col overflow-y-auto h-full overflow-y-auto">
            <div class="container py-10 overflow-y-auto h-full flex flex-col flex-1 mx-auto">
                <div class="grid w-full grid-cols-1 my-auto mt-12 mb-8 md:grid-cols-2 xl:gap-14 md:gap-5">
                    <div class="flex flex-col justify-center col-span-1 text-center lg:text-start">
                        <div class="flex items-center justify-center mb-4 lg:justify-normal">
                            <img class="h-5"
                                 src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-1.png"
                                 alt="logo">
                            <h4 class="ml-2 text-sm font-bold tracking-widest text-primary uppercase">your journey
                                starts here</h4>
                        </div>
                        <h1 class="mb-8 text-4xl font-extrabold leading-tight lg:text-6xl text-info">The world
                            of startups is here</h1>
                        <p class="mb-6 text-base font-normal leading-7 lg:w-3/4 text-grey-900">
                            Say goodbye to endless hours spent on building templates from scratch. Experience the
                            quickest, most responsive, and trendiest dashboard solution available. Seriously.
                        </p>
                        <div class="flex flex-col items-center gap-4 lg:flex-row">
                            <button
                                class="flex items-center py-4 text-sm font-bold text-white px-7 bg-primary hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 transition duration-300 rounded-xl">
                                Get started now
                            </button>
                            <button
                                class="flex items-center py-4 text-sm font-medium px-7 text-dark-grey-700 hover:text-dark-grey-900 transition duration-300 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd"
                                          d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                Book a free call
                            </button>
                        </div>
                    </div>
                    <div class="items-center justify-end hidden col-span-1 md:flex">
                        <img class="w-4/5 rounded-xl"
                             src="/img/landing/online-learning.jpg"
                             alt="header image">
                    </div>
                </div>
            </div>
            <div class="container flex flex-col items-center gap-8 mx-auto my-32">
                <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Trusted by the world
                    best companies</p>
                <div
                    class="flex flex-wrap items-center justify-center w-full gap-6 lg:gap-0 lg:flex-nowrap lg:justify-between">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="155" height="65" viewBox="0 0 184 65" fill="none">
                    <path
                        d="M20.2765 64.8827C14.7995 64.6671 10.3185 63.1822 6.81467 60.4243C6.14599 59.8975 4.55259 58.3178 4.01802 57.6515C2.59718 55.8814 1.6312 54.1586 0.986896 52.2472C-0.995712 46.3634 0.0246651 38.6425 3.90547 30.1689C7.22826 22.9145 12.3555 15.7196 21.3007 5.75465C22.6183 4.28833 26.5423 0 26.5676 0C26.577 0 26.3631 0.367039 26.094 0.813998C23.7681 4.67396 21.778 9.22062 20.6939 13.1568C18.9523 19.4727 19.1624 24.8928 21.3091 29.0957C22.79 31.9911 25.3287 34.4991 28.1835 35.8855C33.1813 38.3117 40.4984 38.5124 49.4342 36.4728C50.0494 36.3315 80.535 28.3133 117.18 18.6541C153.826 8.99389 183.814 1.09648 183.818 1.10298C183.828 1.11136 98.6805 37.2115 54.4788 55.9399C47.4788 58.905 45.6068 59.654 42.3159 60.7988C33.9034 63.7258 26.3678 65.1224 20.2765 64.8827Z"
                        fill="#1B2559"></path>
                </svg>
            </span>
                    <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="155" height="45" viewBox="0 0 155 45" fill="none">
                    <path
                        d="M32.4462 3.36365H6.77368C3.21473 3.36365 0.330353 6.2606 0.330353 9.83507V35.6195C0.330353 39.194 3.21473 42.0909 6.77368 42.0909H32.4462C36.0052 42.0909 38.8895 39.194 38.8895 35.6195V9.83507C38.8895 6.2606 36.0052 3.36365 32.4462 3.36365ZM31.8802 33.0068C31.8802 34.136 30.9691 35.051 29.8448 35.051H9.37505C8.25076 35.051 7.3397 34.136 7.3397 33.0068V12.4478C7.3397 11.3186 8.25076 10.4036 9.37505 10.4036H29.8448C30.9691 10.4036 31.8802 11.3186 31.8802 12.4478V33.0068ZM15.5199 27.9839C14.8724 27.9839 14.3529 27.4582 14.3529 26.8079V18.5999C14.3529 17.9496 14.8724 17.4201 15.5199 17.4201H23.7039C24.3475 17.4201 24.8708 17.9458 24.8708 18.5999V26.804C24.8708 27.4543 24.3475 27.98 23.7039 27.98H15.5199V27.9839ZM49.1128 27.4232H53.3231C53.5324 29.8178 55.1491 31.6868 58.4095 31.6868C61.321 31.6868 63.1121 30.2422 63.1121 28.0578C63.1121 26.0136 61.7087 25.0986 59.181 24.4989L55.9167 23.7942C52.3732 23.0193 49.706 20.7298 49.706 16.9918C49.706 12.8683 53.3541 10.0492 58.0916 10.0492C63.1082 10.0492 66.3377 12.6931 66.6168 16.6024H62.5461C62.0615 14.7723 60.5495 13.6821 58.0955 13.6821C55.498 13.6821 53.7107 15.0916 53.7107 16.8905C53.7107 18.6895 55.2537 19.7797 57.921 20.3794L61.1504 21.0841C64.6939 21.859 67.113 24.0083 67.113 27.7775C67.113 32.5707 63.5347 35.4248 58.4134 35.4248C52.6562 35.4209 49.4656 32.2864 49.1128 27.4232ZM82.1746 42.0909V35.0783L82.4499 32.0022H82.1746C81.2093 34.2139 79.1817 35.4248 76.4291 35.4248C71.9901 35.4248 68.687 31.7958 68.687 26.2317C68.687 20.6675 71.9901 17.0385 76.4291 17.0385C79.1468 17.0385 81.0736 18.3157 82.1746 20.3209H82.4499V17.3812H86.098V42.0909H82.1746ZM82.3103 26.2278C82.3103 22.6689 80.1431 20.5935 77.4914 20.5935C74.8396 20.5935 72.6724 22.6689 72.6724 26.2278C72.6724 29.7867 74.8396 31.862 77.4914 31.862C80.1431 31.862 82.3103 29.7906 82.3103 26.2278ZM89.0095 28.0617V17.3812H92.9329V27.7152C92.9329 30.5148 94.2743 31.862 96.5112 31.862C99.2638 31.862 101.055 29.8918 101.055 26.8157V17.3812H104.978V35.0744H101.33V31.4104H101.055C100.194 33.7622 98.3023 35.4209 95.3792 35.4209C91.1767 35.4209 89.0095 32.7264 89.0095 28.0617ZM107.366 30.1332C107.366 26.8157 109.673 24.8805 113.767 24.6391L118.617 24.3276V22.9453C118.617 21.2866 117.411 20.2859 115.279 20.2859C113.317 20.2859 112.147 21.2866 111.836 22.7039H107.913C108.328 19.11 111.286 17.0346 115.275 17.0346C119.784 17.0346 122.537 18.9698 122.537 22.7039V35.0744H118.888V31.7919H118.613C117.787 33.9685 116.066 35.4209 112.763 35.4209C109.603 35.4209 107.366 33.2794 107.366 30.1332ZM118.621 27.9566V27.0221L114.663 27.2986C112.53 27.4348 111.565 28.2331 111.565 29.8217C111.565 31.1689 112.666 32.1385 114.213 32.1385C117.004 32.1385 118.621 30.3435 118.621 27.9566ZM125.464 35.0783V17.3812H129.112V20.7687H129.387C129.903 18.4519 131.659 17.3812 134.272 17.3812H136.063V20.9401H133.826C131.279 20.9401 129.387 22.5988 129.387 25.7449V35.0744H125.464V35.0783ZM154.013 26.9559H140.626C140.831 30.2033 143.103 32.0372 145.615 32.0372C147.748 32.0372 149.089 31.1728 149.849 29.7205H153.737C152.671 33.3144 149.539 35.4209 145.581 35.4209C140.386 35.4209 136.737 31.5155 136.737 26.2278C136.737 20.9401 140.486 17.0346 145.615 17.0346C150.776 17.0346 154.148 20.5935 154.148 25.0168C154.152 25.8851 154.082 26.3329 154.013 26.9559ZM150.264 24.2264C150.128 21.7733 148.097 20.1146 145.619 20.1146C143.278 20.1146 141.32 21.602 140.835 24.2264H150.264Z"
                        fill="#1B2559"></path>
                </svg>
            </span>
                    <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="184" height="49" viewBox="0 0 184 49" fill="none">
                    <path
                        d="M54.5276 15.4252H62.1957C66.4433 15.4252 68.6485 17.1778 68.6485 20.4687V20.6326C68.709 21.597 68.4236 22.5512 67.8442 23.3217C67.2647 24.0922 66.4297 24.6279 65.491 24.8313C66.6152 24.9309 67.6549 25.4727 68.3845 26.3391C69.1141 27.2055 69.4746 28.3265 69.3878 29.4587V29.5722C69.3878 33.1657 67.0447 35.057 62.5466 35.057H54.5276V15.4252ZM61.4815 23.4822C63.6116 23.4822 64.4511 22.7131 64.4511 20.9605V20.847C64.4511 19.2078 63.5239 18.4639 61.4565 18.4639H58.8378V23.5074L61.4815 23.4822ZM61.8574 31.9679C64.0376 31.9679 65.0274 30.9718 65.0274 29.194V29.0805C65.0274 27.2648 64.0376 26.3444 61.6444 26.3444H58.8378V31.9805L61.8574 31.9679Z"
                        fill="#1B2559"></path>
                    <path
                        d="M70.5407 31.0601C70.5407 27.7062 73.5854 26.4453 77.9583 26.4453H79.5621V25.8779C79.5621 24.1757 79.0483 23.2427 77.2441 23.2427C76.952 23.2078 76.6559 23.2334 76.3741 23.318C76.0923 23.4026 75.8306 23.5443 75.6052 23.7345C75.3799 23.9246 75.1956 24.1592 75.0637 24.4237C74.9318 24.6883 74.8551 24.9772 74.8384 25.2727H71.0795C71.3301 21.8683 73.9989 20.3553 77.4947 20.3553C80.9904 20.3553 83.4588 21.7801 83.4588 25.6762V35.0318H79.6122V33.3044C79.1294 33.9889 78.4786 34.5357 77.7231 34.8915C76.9677 35.2473 76.1335 35.3999 75.302 35.3344C72.7208 35.3344 70.5407 34.0736 70.5407 31.0601ZM79.5621 30.0135V28.7527H78.0334C75.7405 28.7527 74.4124 29.257 74.4124 30.7827C74.4124 31.8292 75.0388 32.5227 76.4798 32.5227C78.2214 32.5731 79.5621 31.6022 79.5621 30.0135Z"
                        fill="#1B2559"></path>
                    <path
                        d="M85.125 30.5305H88.8087C88.9716 31.7914 89.5981 32.5731 91.3147 32.5731C92.8433 32.5731 93.5575 31.9931 93.5575 30.997C93.5575 30.0009 92.7054 29.5975 90.6631 29.3075C86.9042 28.7275 85.4006 27.6305 85.4006 24.8314C85.4006 22.0322 88.1321 20.3553 91.039 20.3553C94.209 20.3553 96.5771 21.5153 96.9279 24.8061H93.3069C93.0939 23.6209 92.4298 23.0788 91.0766 23.0788C89.7234 23.0788 89.0593 23.684 89.0593 24.554C89.0593 25.424 89.7359 25.8148 91.8033 26.1175C95.3743 26.6344 97.3414 27.5422 97.3414 30.6188C97.3414 33.6953 95.1111 35.3344 91.3397 35.3344C87.5683 35.3344 85.2628 33.6322 85.125 30.5305Z"
                        fill="#1B2559"></path>
                    <path
                        d="M98.3564 28.0339V27.8196C98.3089 26.8342 98.4653 25.8496 98.8156 24.9283C99.166 24.0069 99.7028 23.1688 100.392 22.4671C101.081 21.7653 101.907 21.2153 102.819 20.8518C103.73 20.4882 104.707 20.3192 105.686 20.3552C109.37 20.3552 112.64 22.5239 112.64 27.6557V28.7526H102.403C102.504 31.1357 103.794 32.5352 105.937 32.5352C107.766 32.5352 108.668 31.7409 108.919 30.5305H112.678C112.214 33.6322 109.758 35.3596 105.862 35.3596C101.489 35.3344 98.3564 32.6235 98.3564 28.0339ZM108.794 26.3065C108.668 24.1378 107.566 23.1544 105.686 23.1544C104.84 23.1503 104.025 23.4765 103.413 24.0643C102.801 24.6521 102.439 25.4558 102.403 26.3065H108.794Z"
                        fill="#1B2559"></path>
                    <path
                        d="M113.68 28.0338V27.8195C113.632 26.8319 113.79 25.8451 114.141 24.922C114.493 23.9988 115.032 23.1595 115.724 22.4573C116.416 21.7552 117.245 21.2057 118.16 20.8438C119.074 20.4819 120.053 20.3155 121.035 20.3551C124.343 20.3551 127.388 21.8051 127.751 25.9282H123.992C123.967 25.5743 123.872 25.2291 123.712 24.913C123.551 24.5969 123.33 24.3165 123.06 24.0883C122.79 23.8602 122.477 23.6889 122.14 23.5848C121.803 23.4806 121.448 23.4457 121.098 23.4821C119.055 23.4821 117.69 25.0203 117.69 27.769V27.9834C117.69 30.8708 118.943 32.346 121.185 32.346C121.567 32.3681 121.949 32.3136 122.31 32.1856C122.67 32.0576 123.002 31.8588 123.285 31.6006C123.568 31.3425 123.798 31.0302 123.96 30.6819C124.122 30.3337 124.214 29.9564 124.23 29.5721H127.801C127.588 32.9764 125.132 35.3343 120.985 35.3343C116.838 35.3343 113.68 32.7243 113.68 28.0338Z"
                        fill="#1B2559"></path>
                    <path
                        d="M128.716 31.06C128.716 27.7061 131.761 26.4452 136.121 26.4452H137.737V25.8779C137.737 24.1757 137.211 23.2426 135.419 23.2426C135.125 23.204 134.827 23.2269 134.542 23.3097C134.257 23.3926 133.992 23.5337 133.764 23.7242C133.536 23.9148 133.349 24.1506 133.216 24.417C133.082 24.6835 133.005 24.9747 132.989 25.2726H129.23C129.48 21.8683 132.149 20.3552 135.632 20.3552C139.116 20.3552 141.609 21.78 141.609 25.6761V35.0318H137.762V33.3044C137.28 33.9889 136.629 34.5357 135.873 34.8915C135.118 35.2473 134.284 35.3999 133.452 35.3344C130.946 35.3344 128.716 34.0735 128.716 31.06ZM137.737 30.0135V28.7526H136.234C133.941 28.7526 132.6 29.257 132.6 30.7826C132.6 31.8292 133.239 32.5226 134.68 32.5226C136.447 32.5731 137.788 31.6022 137.788 30.0135H137.737Z"
                        fill="#1B2559"></path>
                    <path
                        d="M144.39 20.6326H148.337V22.8265C148.768 22.047 149.401 21.4003 150.169 20.956C150.937 20.5117 151.812 20.2865 152.698 20.3047C153.543 20.2367 154.388 20.4454 155.106 20.8999C155.824 21.3543 156.377 22.0301 156.682 22.8265C157.208 22.0356 157.923 21.3903 158.762 20.9497C159.6 20.5091 160.535 20.2873 161.481 20.3047C164.125 20.3047 166.167 21.9817 166.167 25.7895V34.9813H162.245V26.2813C162.245 24.4404 161.431 23.6208 160.002 23.6208C159.622 23.6042 159.243 23.6703 158.891 23.8145C158.539 23.9588 158.222 24.1778 157.961 24.4567C157.701 24.7356 157.503 25.0677 157.382 25.4305C157.26 25.7932 157.218 26.1781 157.258 26.5587V35.0317H153.324V26.2813C153.324 24.4404 152.485 23.6208 151.094 23.6208C150.713 23.6023 150.332 23.667 149.978 23.8104C149.625 23.9538 149.306 24.1726 149.044 24.4517C148.782 24.7308 148.583 25.0636 148.461 25.4273C148.339 25.791 148.297 26.177 148.337 26.5587V35.0317H144.39V20.6326Z"
                        fill="#1B2559"></path>
                    <path
                        d="M168.874 20.6326H172.833V22.8895C173.305 22.1001 173.972 21.4471 174.769 20.9942C175.566 20.5412 176.466 20.3037 177.381 20.3048C180.877 20.3048 183.646 22.9148 183.646 27.6556V27.8826C183.646 32.6235 180.977 35.2839 177.381 35.2839C176.467 35.3217 175.559 35.1066 174.757 34.662C173.955 34.2175 173.29 33.5604 172.833 32.7622V39.9239H168.874V20.6326ZM179.587 27.6935C179.587 24.7809 178.171 23.3561 176.178 23.3561C174.186 23.3561 172.695 24.8061 172.695 27.6935V27.9078C172.695 30.7826 174.061 32.1822 176.216 32.1822C178.371 32.1822 179.587 30.7196 179.587 27.9583V27.6935Z"
                        fill="#1B2559"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M25.2333 8.5724C14.1151 8.5724 8.31686 18.0491 5.07042 27.3116C4.67798 28.4313 3.45784 29.0188 2.34517 28.6239C1.54933 28.3415 1.02403 27.6329 0.932985 26.8426C0.89674 26.5279 0.929326 26.2003 1.04108 25.8815C4.33513 16.4831 11.0666 4.27283 25.2333 4.27283C32.6382 4.27283 37.9384 9.20254 41.3663 15.125C44.8032 21.063 46.6356 28.4156 47.0485 34.3521C47.0782 34.7788 46.9807 35.2047 46.7685 35.5753C44.7833 39.0431 41.4807 41.303 37.7161 42.6871C33.9608 44.0678 29.6108 44.6318 25.2505 44.6333C21.5459 44.6915 17.8724 43.9454 14.4801 42.4458C11.0824 40.9439 8.04706 38.7215 5.58141 35.9306C5.05688 35.3368 4.9005 34.5004 5.17475 33.7554L5.17636 33.751L5.17942 33.7428L5.18987 33.7147L5.22769 33.6143C5.2603 33.5284 5.30759 33.4052 5.3685 33.2501C5.49025 32.94 5.66697 32.5009 5.89038 31.9755C6.33526 30.9294 6.97439 29.5195 7.74214 28.096C8.49979 26.6912 9.43147 25.181 10.4792 23.9911C11.4343 22.9064 12.9189 21.585 14.8192 21.572L14.8337 21.5719C16.1764 21.5719 17.2794 22.1906 18.0733 22.7854C18.8736 23.3849 19.6004 24.1467 20.1828 24.767C20.2497 24.8381 20.3146 24.9074 20.3778 24.9748C20.9202 25.5536 21.335 25.9962 21.7291 26.3276C21.7734 26.3648 21.8141 26.3977 21.8512 26.4266C21.9794 26.2948 22.1323 26.1221 22.3083 25.9025C22.9345 25.1213 23.6377 24.021 24.3183 22.843C24.9899 21.6805 25.6012 20.5095 26.0469 19.6237C26.2689 19.1824 26.4481 18.8153 26.5711 18.56C26.6326 18.4324 26.68 18.3329 26.7116 18.2661L26.7468 18.1913L26.7552 18.1735L26.757 18.1697C27.2578 17.0948 28.53 16.6313 29.5982 17.1352C30.6665 17.6391 31.1266 18.9192 30.6258 19.9942L30.6212 20.0041L30.6101 20.0278L30.569 20.1149C30.5335 20.19 30.4818 20.2985 30.4157 20.4357C30.2836 20.7099 30.0935 21.0994 29.8588 21.5659C29.3909 22.4958 28.7391 23.7456 28.0121 25.004C27.294 26.2469 26.4632 27.5674 25.6339 28.6019C25.2227 29.1149 24.7565 29.6281 24.2524 30.0316C23.8068 30.3883 23.0208 30.915 22.0132 30.915C20.6808 30.915 19.631 30.1664 18.9894 29.6268C18.3847 29.1183 17.7806 28.472 17.2731 27.9291C17.2061 27.8574 17.1408 27.7876 17.0774 27.7201C16.4758 27.0794 15.9841 26.5804 15.522 26.2342C15.117 25.9309 14.9103 25.881 14.8509 25.873C14.8509 25.873 14.8466 25.8746 14.8429 25.876C14.7776 25.8991 14.3852 26.0383 13.677 26.8426C12.9428 27.6764 12.1916 28.8597 11.4973 30.1469C10.8132 31.4154 10.2315 32.6958 9.81846 33.6671C9.76524 33.7922 9.71497 33.9119 9.6678 34.0253C11.548 35.9106 13.7615 37.4321 16.1985 38.5093C19.033 39.7623 22.103 40.3847 25.1985 40.334L25.2333 40.3337C29.2747 40.3337 33.1 39.8068 36.2499 38.6486C39.1477 37.5832 41.3583 36.0304 42.7324 33.9689C42.2667 28.6857 40.5944 22.3342 37.6743 17.2889C34.618 12.0086 30.4708 8.5724 25.2333 8.5724ZM21.5 26.7321C21.5 26.7321 21.5094 26.725 21.5273 26.7157C21.5089 26.7283 21.5 26.7321 21.5 26.7321Z"
                          fill="#1B2559"></path>
                </svg>
            </span>
                    <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="177" height="45" viewBox="0 0 177 45" fill="none">
                    <path
                        d="M174.225 15.0965C174.225 14.419 173.752 13.9673 172.973 13.9673L171.444 13.9955L171.472 17.4396H172.306V16.2539H172.807L173.53 17.4396H174.503L173.641 16.1128C173.819 16.0123 173.968 15.8649 174.071 15.686C174.173 15.5072 174.227 15.3035 174.225 15.0965ZM172.807 15.5482H172.278V14.673H172.89C173 14.6608 173.111 14.6921 173.199 14.7604C173.287 14.8288 173.346 14.9289 173.363 15.04V15.0683C173.361 15.138 173.344 15.2066 173.314 15.2695C173.285 15.3324 173.242 15.3883 173.19 15.4335C173.137 15.4787 173.076 15.5123 173.01 15.532C172.944 15.5518 172.875 15.5573 172.807 15.5482ZM49.4303 31.0185C48.0119 31.0185 47.0385 29.8893 47.0385 28.2237V20.6297H52.8791V15.2659H47.0524L46.9968 9.11161H40.5443L40.5999 29.607C40.5999 33.7569 43.3255 36.5799 47.3305 36.5799C49.4443 36.5799 51.4468 36.2694 53.0321 35.5354V30.3128C51.9063 30.843 50.6697 31.0854 49.4303 31.0185ZM64.8385 14.9271C58.831 14.9271 54.2141 19.6698 54.2141 25.9652C54.2141 32.2042 58.831 36.5517 65.2 36.5517C68.7879 36.5517 72.1532 35.2531 74.2113 32.5712L69.2607 30.2845C68.2594 31.2161 66.7297 31.5831 65.3669 31.5831C63.1419 31.5831 60.9169 30.4257 60.611 28.0543H75.3794C75.6014 27.207 75.7136 26.3339 75.7132 25.4571C75.7132 18.9923 71.0685 14.9271 64.8524 14.9271H64.8385ZM60.611 23.9044C60.8057 21.0814 62.8082 19.7828 65.0053 19.7828C67.4807 19.7828 69.3441 21.1943 69.3441 23.6221V23.9044H60.611ZM34.4116 31.0185C32.9932 31.0185 32.0197 29.8893 32.0197 28.2237V20.6297H37.8604V15.2659H32.0336L31.978 9.11161H25.5255L25.5811 29.607C25.5811 33.7569 28.3068 36.5799 32.3118 36.5799C34.4255 36.5799 36.428 36.2694 38.0133 35.5354V30.3128C36.8884 30.8456 35.6511 31.088 34.4116 31.0185ZM11.7444 14.9271C6.20973 14.9271 0.396912 18.6253 0.396912 26.0782C0.396912 32.2889 4.51316 36.6364 9.7141 36.6364C12.69 36.6364 14.9429 35.4225 16.4169 33.277L16.6116 36.2694H22.8555V26.3322C22.8555 18.7665 17.3625 14.9271 11.7444 14.9271ZM11.7444 30.9056C8.93535 30.9056 6.90504 28.7883 6.90504 25.7959C6.90504 22.8034 8.90754 20.6861 11.7444 20.6861C14.3588 20.6861 16.5282 23.001 16.5282 25.7959C16.5282 28.5907 14.3588 30.9056 11.7444 30.9056ZM172.668 12.4146C170.637 12.4428 169.33 13.7697 169.358 15.7458C169.386 17.7219 170.721 19.0205 172.751 18.9923C174.726 18.9641 176.061 17.6372 176.033 15.6329C176.005 13.6285 174.67 12.3864 172.668 12.4146ZM172.751 18.4277C171.166 18.4559 170.081 17.3832 170.081 15.7458C170.081 14.1084 171.11 13.0074 172.695 12.9792C174.281 12.951 175.338 14.0237 175.365 15.6893C175.365 17.2985 174.308 18.3995 172.765 18.4277H172.751ZM141.128 15.2941L136.623 28.5625L132.061 15.2941H125.053L133.452 36.2412H139.738L148.137 15.2941H141.128ZM157.843 14.9271C151.836 14.9271 147.219 19.6698 147.219 25.9652C147.219 32.2042 151.836 36.5517 158.205 36.5517C161.793 36.5517 165.158 35.2531 167.216 32.5712L162.266 30.2845C161.264 31.2161 159.735 31.5831 158.372 31.5831C156.147 31.5831 153.922 30.4257 153.616 28.0543H168.384C168.606 27.207 168.719 26.3339 168.718 25.4571C168.718 18.9923 164.073 14.9271 157.843 14.9271ZM162.349 23.9044H153.616C153.811 21.0814 155.813 19.7828 158.01 19.7828C160.486 19.7828 162.349 21.1943 162.349 23.6221V23.9044ZM120.074 6.09094C117.793 6.09094 116.069 7.64363 116.069 9.81738C116.069 11.9911 117.793 13.6003 120.074 13.6003C122.355 13.6003 124.079 12.0194 124.079 9.81738C124.079 7.6154 122.383 6.09094 120.074 6.09094ZM90.7875 14.8989C89.4835 14.8775 88.1962 15.199 87.0509 15.8323C85.9056 16.4655 84.9412 17.3888 84.2516 18.5124L84.0291 15.2941H77.7991V36.2412H84.2516V25.2595C84.3907 22.634 86.4766 20.6297 88.7572 20.6297C91.316 20.6297 92.4841 22.5776 92.4841 25.0336V36.2129H98.9088V24.0173C98.9088 18.71 95.7243 14.8989 90.7875 14.8989ZM110.479 31.0185C109.06 31.0185 108.087 29.8893 108.087 28.2237V20.6297H113.928V15.2659H108.087L108.031 9.11161H101.579L101.634 29.607C101.634 33.7569 104.36 36.5799 108.365 36.5799C110.479 36.5799 112.481 36.2694 114.067 35.5354V30.3128C112.946 30.8433 111.714 31.0857 110.479 31.0185ZM116.82 15.2941V36.2412H123.328V15.2941C122.363 15.9431 121.232 16.2892 120.074 16.2892C118.917 16.2892 117.785 15.9431 116.82 15.2941Z"
                        fill="#1B2559"></path>
                </svg>
            </span>
                    <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="186" height="45" viewBox="0 0 186 45" fill="none">
                    <path
                        d="M15.8087 22.0943C15.8087 19.0548 13.4675 16.9186 10.5917 16.9186C7.71588 16.9186 5.37468 19.0908 5.37468 22.0943C5.37468 25.0618 7.71588 27.2701 10.5917 27.2701C13.4704 27.2673 15.8087 25.1338 15.8087 22.0943ZM15.8498 31.1409V28.7885C14.431 30.4177 12.3189 31.429 9.78977 31.429C4.53455 31.429 0.54541 27.4474 0.54541 22.0943C0.54541 16.7745 4.6873 12.7236 9.90726 12.7236C12.3631 12.7236 14.434 13.7377 15.8527 15.3281V13.0478H20.5704V31.1409H15.8498Z"
                        fill="#1B2559"></path>
                    <path
                        d="M43.4857 27.1233C41.8349 27.1233 41.3766 26.5441 41.3766 25.0258V16.9933H44.4081V13.0478H41.3766V8.63399H36.5415V13.0478H30.3139V11.9478C30.3139 10.4267 30.9279 9.84757 32.617 9.84757H33.6775V6.33703H31.3509C27.3617 6.33703 25.4817 7.56724 25.4817 11.3299V13.045H22.7969V16.9906H25.4817V31.138H30.3169V16.9906H36.5444V25.857C36.5444 29.5476 38.0396 31.1409 41.9524 31.1409H44.4463V27.1233H43.4857Z"
                        fill="#1B2559"></path>
                    <path
                        d="M60.8261 20.4651C60.4824 18.1126 58.4467 16.7023 56.0702 16.7023C53.6908 16.7023 51.7345 18.0766 51.238 20.4651H60.8261ZM51.1969 23.2885C51.5436 25.965 53.5763 27.4862 56.1467 27.4862C58.1794 27.4862 59.754 26.5801 60.6733 25.1337H65.623C64.4715 28.9685 60.8261 31.4289 56.0321 31.4289C50.2393 31.4289 46.1738 27.5942 46.1738 22.1302C46.1738 16.6663 50.4714 12.7208 56.1496 12.7208C61.866 12.7208 66.0079 16.7024 66.0079 22.1302C66.0079 22.5293 65.9697 22.9255 65.8933 23.2885H51.1969Z"
                        fill="#1B2559"></path>
                    <path
                        d="M96.7489 22.0943C96.7489 19.1628 94.4077 16.9186 91.5319 16.9186C88.6561 16.9186 86.3148 19.0908 86.3148 22.0943C86.3148 25.0618 88.6561 27.2701 91.5319 27.2701C94.4077 27.2673 96.7489 25.0258 96.7489 22.0943ZM81.5561 13.0478H86.2737V15.4002C87.6925 13.735 89.8017 12.7236 92.3338 12.7236C97.5126 12.7236 101.578 16.7412 101.578 22.0583C101.578 27.3781 97.4362 31.4317 92.2193 31.4317C89.8017 31.4317 87.8071 30.5257 86.4265 29.0074V38.5859H81.5561V13.0478Z"
                        fill="#1B2559"></path>
                    <path
                        d="M118.583 22.0943C118.583 19.0548 116.245 16.9186 113.366 16.9186C110.49 16.9186 108.149 19.0908 108.149 22.0943C108.149 25.0618 110.49 27.2701 113.366 27.2701C116.245 27.2673 118.583 25.1338 118.583 22.0943ZM118.625 31.1409V28.7885C117.206 30.4177 115.093 31.429 112.564 31.429C107.309 31.429 103.32 27.4474 103.32 22.0943C103.32 16.7745 107.462 12.7236 112.679 12.7236C115.135 12.7236 117.206 13.7377 118.625 15.3281V13.0478H123.343V31.1409H118.625Z"
                        fill="#1B2559"></path>
                    <path
                        d="M73.0519 14.8211C73.0519 14.8211 74.2534 12.7236 77.1938 12.7236C78.4511 12.7236 79.2648 13.1309 79.2648 13.1309V17.747C79.2648 17.747 77.4905 16.7135 75.8602 16.9213C74.2299 17.1291 73.1988 18.5422 73.2047 20.4319V31.1436H68.3343V13.0506H73.0519V14.8211Z"
                        fill="#1B2559"></path>
                    <path
                        d="M145.376 13.0478L133.464 38.5276H128.442L133.118 28.6776L125.211 13.0478H130.904L135.53 23.4908L140.277 13.0478H145.376Z"
                        fill="#1B2559"></path>
                    <path
                        d="M183.4 12.6377L171.591 6.20956C168.125 4.32268 163.792 6.6806 163.792 10.4571V11.1166C163.792 11.7123 164.129 12.2637 164.676 12.5601L166.906 13.7737C167.56 14.1312 168.377 13.6851 168.377 12.973V11.3327C168.377 10.5125 169.318 9.99996 170.07 10.41L180.298 15.9792C181.051 16.3893 181.051 17.4145 180.298 17.8219L170.07 23.3911C169.318 23.8011 168.377 23.2885 168.377 22.4684V21.5955C168.377 17.819 164.045 15.4584 160.576 17.348L148.767 23.7761C145.3 25.6631 145.3 30.3844 148.767 32.2713L160.576 38.6995C164.041 40.5863 168.377 38.2284 168.377 34.4519V33.7924C168.377 33.1967 168.04 32.6481 167.493 32.3488L165.263 31.1325C164.609 30.7751 163.792 31.2212 163.792 31.9333V33.5736C163.792 34.3937 162.853 34.9063 162.1 34.4962L151.872 28.927C151.12 28.5169 151.12 27.4918 151.872 27.0817L162.1 21.5124C162.853 21.1023 163.792 21.6149 163.792 22.4351V23.3079C163.792 27.0844 168.125 29.4452 171.591 27.5555L183.4 21.1273C186.867 19.2459 186.867 14.5246 183.4 12.6377Z"
                        fill="#1B2559"></path>
                </svg>
            </span>
                </div>
            </div>
            <div class="container mx-auto" draggable="true">
                <div class="flex flex-col items-center justify-center h-full bg-accent rounded-xl shadow-md">

                    <div class="flex flex-col items-center justify-center mt-12">
                        <h2 class="mb-4 text-3xl font-extrabold leading-tight text-center lg:text-4xl text-dark-grey-900">
                            Elevate Your Productivity with Motion</h2>
                        <p class="text-lg text-center lg:w-7/12 text-grey-700">Unlock the full potential of your
                            workflow with Windbase. Our platform is designed to streamline your operations and boost
                            productivity. Experience the difference as we help you save time and work more
                            efficiently.</p>
                    </div>
                    <div class="grid grid-cols-1 gap-10 mt-20 lg:grid-cols-3 md:grid-cols-2">
                        <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M22.8233 8C22.8233 7.28 22.4533 6.65 21.8833 6.3L12.8333 1L3.78331 6.3C3.21331 6.65 2.83331 7.28 2.83331 8V18C2.83331 19.1 3.73331 20 4.83331 20H20.8333C21.9333 20 22.8333 19.1 22.8333 18L22.8233 8ZM20.8233 8V8.01L12.8333 13L4.83331 8L12.8333 3.32L20.8233 8ZM4.83331 18V10.34L12.8333 15.36L20.8233 10.37L20.8333 18H4.83331Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Streamline Team
                                    Communication</h4>
                                <p class="font-medium text-grey-700">Streamline communication within your team using our
                                    shared team inboxes. Enhance collaboration and keep everyone on the same page
                                    effortlessly.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col items-center col-span-1 gap-6 px-10 py-5 bg-white shadow-main rounded-3xl">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M3.28996 14.78L3.19996 14.69C2.80996 14.3 2.80996 13.67 3.19996 13.28L9.28996 7.18C9.67996 6.79 10.31 6.79 10.7 7.18L13.99 10.47L20.38 3.29C20.76 2.86 21.43 2.85 21.83 3.25C22.2 3.63 22.22 4.23 21.87 4.62L14.7 12.69C14.32 13.12 13.66 13.14 13.25 12.73L9.99996 9.48L4.69996 14.78C4.31996 15.17 3.67996 15.17 3.28996 14.78ZM4.69996 20.78L9.99996 15.48L13.25 18.73C13.66 19.14 14.32 19.12 14.7 18.69L21.87 10.62C22.22 10.23 22.2 9.63 21.83 9.25C21.43 8.85 20.76 8.86 20.38 9.29L13.99 16.47L10.7 13.18C10.31 12.79 9.67996 12.79 9.28996 13.18L3.19996 19.28C2.80996 19.67 2.80996 20.3 3.19996 20.69L3.28996 20.78C3.67996 21.17 4.31996 21.17 4.69996 20.78Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Gain Insights with Analytics</h4>
                                <p class="font-medium text-grey-700">Gain valuable insights and data analytics for your
                                    team through our analytics dashboard. Make informed decisions and track your
                                    progress effectively.</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M15.8766 12.71C16.857 11.9387 17.5726 10.8809 17.9239 9.68394C18.2751 8.48697 18.2445 7.21027 17.8364 6.03147C17.4283 4.85267 16.6629 3.83039 15.6467 3.10686C14.6305 2.38332 13.4141 1.99451 12.1666 1.99451C10.9192 1.99451 9.70274 2.38332 8.68655 3.10686C7.67037 3.83039 6.90497 4.85267 6.49684 6.03147C6.0887 7.21027 6.05814 8.48697 6.40938 9.68394C6.76063 10.8809 7.47623 11.9387 8.45662 12.71C6.7767 13.383 5.31091 14.4994 4.21552 15.9399C3.12012 17.3805 2.43619 19.0913 2.23662 20.89C2.22218 21.0213 2.23374 21.1542 2.27065 21.2811C2.30756 21.4079 2.36909 21.5263 2.45173 21.6293C2.61864 21.8375 2.86141 21.9708 3.12662 22C3.39184 22.0292 3.65778 21.9518 3.86595 21.7849C4.07411 21.618 4.20745 21.3752 4.23662 21.11C4.45621 19.1552 5.38831 17.3498 6.85484 16.0388C8.32137 14.7278 10.2195 14.003 12.1866 14.003C14.1537 14.003 16.0519 14.7278 17.5184 16.0388C18.9849 17.3498 19.917 19.1552 20.1366 21.11C20.1638 21.3557 20.2811 21.5827 20.4657 21.747C20.6504 21.9114 20.8894 22.0015 21.1366 22H21.2466C21.5088 21.9698 21.7483 21.8373 21.9132 21.6313C22.078 21.4252 22.1547 21.1624 22.1266 20.9C21.9261 19.0962 21.2385 17.381 20.1375 15.9382C19.0364 14.4954 17.5635 13.3795 15.8766 12.71ZM12.1666 12C11.3755 12 10.6021 11.7654 9.94434 11.3259C9.28655 10.8864 8.77385 10.2616 8.4711 9.53074C8.16835 8.79983 8.08914 7.99557 8.24348 7.21964C8.39782 6.44372 8.77879 5.73099 9.3382 5.17158C9.89761 4.61217 10.6103 4.2312 11.3863 4.07686C12.1622 3.92252 12.9665 4.00173 13.6974 4.30448C14.4283 4.60724 15.053 5.11993 15.4925 5.77772C15.932 6.43552 16.1666 7.20888 16.1666 8C16.1666 9.06087 15.7452 10.0783 14.9951 10.8284C14.2449 11.5786 13.2275 12 12.1666 12Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Provide Instant Solutions</h4>
                                <p class="font-medium text-grey-700">Deliver instant answers to your customers or team
                                    members with our shared team inboxes. Ensure quick responses and efficient
                                    problem-solving.</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M7.83331 4C7.83331 2.89 6.94331 2 5.83331 2C4.72331 2 3.83331 2.89 3.83331 4C3.83331 5.11 4.72331 6 5.83331 6C6.94331 6 7.83331 5.11 7.83331 4ZM11.0233 4.5C10.6133 4.5 10.2633 4.75 10.1033 5.13C9.66331 6.23 8.59331 7 7.33331 7H4.33331C3.50331 7 2.83331 7.67 2.83331 8.5V11H8.83331V8.74C10.2633 8.29 11.4133 7.21 11.9533 5.83C12.2133 5.19 11.7133 4.5 11.0233 4.5ZM19.8333 17C20.9433 17 21.8333 16.11 21.8333 15C21.8333 13.89 20.9433 13 19.8333 13C18.7233 13 17.8333 13.89 17.8333 15C17.8333 16.11 18.7233 17 19.8333 17ZM21.3333 18H18.3333C17.0733 18 16.0033 17.23 15.5633 16.13C15.4133 15.75 15.0533 15.5 14.6433 15.5C13.9533 15.5 13.4533 16.19 13.7033 16.83C14.2533 18.21 15.3933 19.29 16.8233 19.74V22H22.8233V19.5C22.8333 18.67 22.1633 18 21.3333 18ZM18.0833 11.09C18.0833 11.09 18.0833 11.08 18.0933 11.09C17.0333 11.36 16.1933 12.2 15.9233 13.26V13.25C15.8133 13.68 15.4133 14 14.9433 14C14.3933 14 13.9433 13.55 13.9433 13C13.9433 12.95 13.9633 12.86 13.9633 12.86C14.3933 11.01 15.8533 9.55 17.7133 9.13C17.7533 9.13 17.7933 9.12 17.8333 9.12C18.3833 9.12 18.8333 9.57 18.8333 10.12C18.8333 10.58 18.5133 10.98 18.0833 11.09ZM18.8333 6.06C18.8333 6.57 18.4633 6.98 17.9733 7.05C14.7833 7.44 12.2733 9.96 11.8833 13.15C11.8133 13.63 11.3933 14 10.8933 14C10.3433 14 9.89331 13.55 9.89331 13C9.89331 12.98 9.89331 12.96 9.89331 12.94C9.89331 12.93 9.89331 12.92 9.89331 12.91C10.3933 8.79 13.6833 5.53 17.8133 5.06H17.8233C18.3833 5.06 18.8333 5.51 18.8333 6.06Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Enhance Customer Connections</h4>
                                <p class="font-medium text-grey-700">Connect with your customers seamlessly using our
                                    shared team inboxes. Improve customer interactions and build stronger
                                    relationships.</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M10.5 13H3.49998C3.23477 13 2.98041 13.1054 2.79288 13.2929C2.60534 13.4804 2.49998 13.7348 2.49998 14V21C2.49998 21.2652 2.60534 21.5196 2.79288 21.7071C2.98041 21.8946 3.23477 22 3.49998 22H10.5C10.7652 22 11.0196 21.8946 11.2071 21.7071C11.3946 21.5196 11.5 21.2652 11.5 21V14C11.5 13.7348 11.3946 13.4804 11.2071 13.2929C11.0196 13.1054 10.7652 13 10.5 13ZM9.49998 20H4.49998V15H9.49998V20ZM21.5 2H14.5C14.2348 2 13.9804 2.10536 13.7929 2.29289C13.6053 2.48043 13.5 2.73478 13.5 3V10C13.5 10.2652 13.6053 10.5196 13.7929 10.7071C13.9804 10.8946 14.2348 11 14.5 11H21.5C21.7652 11 22.0196 10.8946 22.2071 10.7071C22.3946 10.5196 22.5 10.2652 22.5 10V3C22.5 2.73478 22.3946 2.48043 22.2071 2.29289C22.0196 2.10536 21.7652 2 21.5 2ZM20.5 9H15.5V4H20.5V9ZM21.5 13H14.5C14.2348 13 13.9804 13.1054 13.7929 13.2929C13.6053 13.4804 13.5 13.7348 13.5 14V21C13.5 21.2652 13.6053 21.5196 13.7929 21.7071C13.9804 21.8946 14.2348 22 14.5 22H21.5C21.7652 22 22.0196 21.8946 22.2071 21.7071C22.3946 21.5196 22.5 21.2652 22.5 21V14C22.5 13.7348 22.3946 13.4804 22.2071 13.2929C22.0196 13.1054 21.7652 13 21.5 13ZM20.5 20H15.5V15H20.5V20ZM10.5 2H3.49998C3.23477 2 2.98041 2.10536 2.79288 2.29289C2.60534 2.48043 2.49998 2.73478 2.49998 3V10C2.49998 10.2652 2.60534 10.5196 2.79288 10.7071C2.98041 10.8946 3.23477 11 3.49998 11H10.5C10.7652 11 11.0196 10.8946 11.2071 10.7071C11.3946 10.5196 11.5 10.2652 11.5 10V3C11.5 2.73478 11.3946 2.48043 11.2071 2.29289C11.0196 2.10536 10.7652 2 10.5 2ZM9.49998 9H4.49998V4H9.49998V9Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Seamless Web Integration</h4>
                                <p class="font-medium text-grey-700">Integrate our shared team inboxes seamlessly with
                                    your website. Enhance the user experience and provide efficient communication
                                    channels. </p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M10.1666 14C9.90141 14 9.64706 14.1054 9.45952 14.2929C9.27198 14.4804 9.16663 14.7348 9.16663 15V21C9.16663 21.2652 9.27198 21.5196 9.45952 21.7071C9.64706 21.8946 9.90141 22 10.1666 22C10.4318 22 10.6862 21.8946 10.8737 21.7071C11.0613 21.5196 11.1666 21.2652 11.1666 21V15C11.1666 14.7348 11.0613 14.4804 10.8737 14.2929C10.6862 14.1054 10.4318 14 10.1666 14ZM5.16663 18C4.90141 18 4.64706 18.1054 4.45952 18.2929C4.27198 18.4804 4.16663 18.7348 4.16663 19V21C4.16663 21.2652 4.27198 21.5196 4.45952 21.7071C4.64706 21.8946 4.90141 22 5.16663 22C5.43184 22 5.6862 21.8946 5.87373 21.7071C6.06127 21.5196 6.16663 21.2652 6.16663 21V19C6.16663 18.7348 6.06127 18.4804 5.87373 18.2929C5.6862 18.1054 5.43184 18 5.16663 18ZM20.1666 2C19.9014 2 19.6471 2.10536 19.4595 2.29289C19.272 2.48043 19.1666 2.73478 19.1666 3V21C19.1666 21.2652 19.272 21.5196 19.4595 21.7071C19.6471 21.8946 19.9014 22 20.1666 22C20.4318 22 20.6862 21.8946 20.8737 21.7071C21.0613 21.5196 21.1666 21.2652 21.1666 21V3C21.1666 2.73478 21.0613 2.48043 20.8737 2.29289C20.6862 2.10536 20.4318 2 20.1666 2ZM15.1666 9C14.9014 9 14.6471 9.10536 14.4595 9.29289C14.272 9.48043 14.1666 9.73478 14.1666 10V21C14.1666 21.2652 14.272 21.5196 14.4595 21.7071C14.6471 21.8946 14.9014 22 15.1666 22C15.4318 22 15.6862 21.8946 15.8737 21.7071C16.0613 21.5196 16.1666 21.2652 16.1666 21V10C16.1666 9.73478 16.0613 9.48043 15.8737 9.29289C15.6862 9.10536 15.4318 9 15.1666 9Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 px-2 text-center">
                                <h4 class="text-2xl font-extrabold text-dark-grey-900">Effortless Team Management</h4>
                                <p class="font-medium text-grey-700">Manage your team effortlessly with our shared team
                                    inboxes. Simplify team reporting and ensure smooth operations. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                <div class="flex flex-col gap-16">
                    <div class="flex flex-col gap-2 text-center">
                        <h2 class="text-3xl font-extrabold leading-tight lg:text-4xl text-dark-grey-900">How Motion
                            works?</h2>
                        <p class="text-base font-medium leading-7 text-dark-grey-600">Our platform is designed to
                            provide efficient solutions and streamline your experience.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center justify-between w-full lg:flex-row gap-y-10 lg:gap-y-0 lg:gap-x-8 xl:gap-x-10">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 rounded-full shrink-0 bg-purple-blue-500">
                            <span class="text-base font-bold leading-7 text-white">1</span>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-base font-bold leading-tight text-dark-grey-900">Create your Account</h3>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Join our platform by creating
                                your personal account today.</p>
                        </div>
                    </div>
                    <div class="rotate-90 lg:rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42" fill="none">
                            <g clip-path="url(#clip0_3346_6663)">
                                <path
                                    d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                    fill="#A3AED0"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_3346_6663">
                                    <rect width="42" height="42" fill="white" transform="translate(0.666748)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-transparent border-2 border-solid rounded-full shrink-0 text-purple-blue-500 border-purple-blue-500">
                            <span class="text-base font-bold leading-7">2</span>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-base font-bold leading-tight text-dark-grey-900">Setup your Account</h3>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Effortlessly configure your
                                account to tailor it to your preferences.</p>
                        </div>
                    </div>
                    <div class="rotate-90 lg:rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42" fill="none">
                            <g clip-path="url(#clip0_3346_6663)">
                                <path
                                    d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                    fill="#A3AED0"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_3346_6663">
                                    <rect width="42" height="42" fill="white" transform="translate(0.666748)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-transparent border-2 border-solid rounded-full shrink-0 text-purple-blue-500 border-purple-blue-500">
                            <span class="text-base font-bold leading-7">3</span>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-base font-bold leading-tight text-dark-grey-900">Start creating with
                                Motion</h3>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Begin your creative endeavors
                                with Motion and unlock endless possibilities.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto my-16">
                <div
                    class="bg-accent px-4 rounded-xl shadow-md grid items-center justify-center w-full lg:h-full grid-cols-1 my-auto lg:grid-cols-2 my-16">
                    <div class="flex flex-col col-span-1 text-center lg:text-start text-dark-grey-900 mb-7">
                        <h3 class="text-4xl font-extrabold leading-tight">Join Us</h3>
                        <h3 class="text-4xl font-medium leading-tight">Transform your website visitors into satisfied
                            clients.</h3>
                    </div>
                    <div class="flex items-center justify-center col-span-1 lg:justify-end">
                        <button
                            class="box-content flex items-center py-4 mr-4 text-sm font-bold border px-7 rounded-2xl border-purple-blue-500 text-purple-blue-500 hover:bg-purple-blue-500 hover:text-white focus:ring-4 focus:ring-purple-blue-100 transition duration-300">
                            Try Demo
                        </button>
                        <button
                            class="flex items-center py-4 text-sm font-bold text-white border px-7 rounded-2xl border-purple-blue-500 bg-purple-blue-500 hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 transition duration-300">
                            Get Started Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="container px-6 py-8 bg-accent mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Simple, transparent pricing</h2>
                        <p class="mt-4 text-gray-500 dark:text-gray-400">No Contracts. No surorise fees.</p>
                    </div>

                    <div class="overflow-hidden p-0.5 mt-6 border rounded-lg dark:border-gray-700">
                        <div class="sm:-mx-0.5 flex">
                            <button
                                class=" focus:outline-none px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-white bg-blue-500 rounded-lg">
                                Monthly
                            </button>
                            <button
                                class=" focus:outline-none px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 bg-transparent rounded-lg hover:bg-gray-200">
                                Yearly
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 mt-16 -mx-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div
                        class="bg-gray-700 px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Intro</p>
                        <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$19 <span
                            class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                        <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web
                            queries.</p>

                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                            </div>
                        </div>

                        <button
                            class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose plan
                        </button>
                    </div>

                    <div
                        class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Base</p>
                        <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$39 <span
                            class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                        <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web
                            queries.</p>

                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                            </div>
                        </div>

                        <button
                            class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose plan
                        </button>
                    </div>

                    <div class="px-6 py-4 transition-colors duration-200 transform rounded-lg ">
                        <p class="text-lg font-medium text-gray-100">Popular</p>
                        <h4 class="mt-2 text-4xl font-semibold text-gray-100">$99 <span
                            class="text-base font-normal text-gray-400">/ Month</span></h4>
                        <p class="mt-4 text-gray-300">For most businesses that want to optimaize web queries.</p>

                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-300">All limited links</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-300">Own analytics platform</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-300">Chat support</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-300">Optimize hashtags</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-300">Unlimited users</span>
                            </div>
                        </div>

                        <button
                            class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose plan
                        </button>
                    </div>

                    <div
                        class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Exterprise</p>
                        <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$199 <span
                            class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                        <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web
                            queries.</p>

                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                            </div>
                        </div>

                        <button
                            class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose plan
                        </button>
                    </div>
                </div>
            </div>
            <div class="container bg-accent rounded-xl shadow-md flex flex-col items-center gap-16 mx-auto my-32">
                <div class="flex flex-col w-8/12 gap-2">
                    <h2 class="text-3xl font-extrabold text-center md:text-4xl text-dark-grey-900">FAQ</h2>
                    <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Our dedicated team has
                        compiled a comprehensive list of frequently asked questions to provide you with the information
                        you need.</p>
                </div>
                <div class="grid w-full grid-cols-1 gap-5 lg:grid-cols-3 md:grid-cols-2">
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">How long does it typically take to
                                process an order? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Processing times for orders
                                can vary, but we aim to get your order processed as quickly as possible.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">Is there an estimated time frame for
                                order processing? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Our team strives to process
                                orders efficiently. While exact processing times may differ, we work diligently to
                                fulfill your order promptly.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8.25 9.75h4.875a2.625 2.625 0 010 5.25H12M8.25 9.75L10.5 7.5M8.25 9.75L10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185z"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">Can you tell me about your return
                                policy? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Of course! Our return policy
                                is designed to provide you with a hassle-free experience. You can review the details of
                                our return policy on our website, and if you have any specific questions, feel free to
                                ask.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">How do I contact your customer support
                                team? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Contacting our customer
                                support team is easy. You can reach out to us through the contact form on our website,
                                send an email to our dedicated support address, or call our customer support hotline.
                                We're here to assist you.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">What payment methods do you accept for
                                online orders? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">We accept a variety of payment
                                methods to make your online shopping experience convenient. You can use major credit
                                cards, PayPal, and other secure payment options at checkout.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start col-span-1 gap-6 px-8 py-10 rounded-2xl bg-grey-200">
                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
                    </svg>
                </span>
                        <div class="flex flex-col items-start gap-2">
                            <p class="text-xl font-extrabold text-dark-grey-900">Are there any discounts or promotions
                                currently available? </p>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">We regularly run promotions
                                and discounts to provide our customers with value. To stay updated on our current
                                offers, please visit our promotions page on the website or subscribe to our
                                newsletter.</p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
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
        </div>
    </div>
    <footer class="bg-white dark:bg-gray-900">
        <div class="container py-12 mx-auto">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">
                        Subscribe our newsletter to get update.</h1>

                    <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                        <input id="email" type="text"
                               class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                               placeholder="Email Address">

                        <button
                            class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                            Subscribe
                        </button>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Home</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Who
                            We Are</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Our
                            Philosophy</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Retail
                            & E-Commerce</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Information
                            Technology</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Finance
                            & Insurance</a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">

            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-auto h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                </a>
                <p class="text-base font-normal leading-7 text-center text-grey-700">©
                    2023 Motion Tailwind CSS Library. All rights reserved.</p>

                <div class="flex -mx-2">
                    <a href="#"
                       class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                       aria-label="Reddit">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                       class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                       aria-label="Facebook">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                       class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                       aria-label="Github">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
