<script setup>

import Collapse from "@/component/animated/collapse.vue";
import Dropdown from "@/component/dropdown/index.vue";
</script>

<template>
    <div class="container mx-auto h-full">
        <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
            <label for="filter-drawer" class="drawer-button md:hidden pr-4">
                Filter check
            </label>

            <div class="flex items-center">
                <dropdown class="inline-block text-left">
                    <template #button>
                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                            Sort
                            <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </template>
                    <template  #content>
                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                    </template>
                </dropdown>

                <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                    <span class="sr-only">View grid</span>
                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                    <span class="sr-only">Filters</span>
                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="h-full my-8 bg-base-100 antialiased drawer drawer-end md:drawer-open flex flex-row-reverse">
            <input id="filter-drawer" type="checkbox" class="drawer-toggle"/>
            <main class="lg:w-3/4 drawer-content h-screen w-full p-4 md:p-0 md:pr-4 flex flex-col">
                <div>
                    content here
                    <ul>
                        <li>DFJ</li>
                        <li>DFVD</li>
                        <li>SDVSD</li>
                        <li>SDV</li>
                        <li>SDV</li>
                    </ul>
                </div>
            </main>
            <aside class="lg:!w-1/4 h-full drawer-side">
                <label for="filter-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <div class="w-full !max-w-80 lg:max-w-full !h-full h-full flex flex-col bg-accent py-4">
                    <div class="flex items-center justify-between pt-2 pb-8 px-4 bg-accent">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <label for="filter-drawer" aria-label="close sidebar" class="drawer-overlay md:hidden">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </label>
                    </div>

                    <form class="px-4 bg-accent">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                            <li>
                                <a href="#">Totes</a>
                            </li>
                            <li>
                                <a href="#">Backpacks</a>
                            </li>
                            <li>
                                <a href="#">Travel Bags</a>
                            </li>
                            <li>
                                <a href="#">Hip Bags</a>
                            </li>
                            <li>
                                <a href="#">Laptop Sleeves</a>
                            </li>
                        </ul>

                        <collapse class="border-b border-gray-200">
                            <template #header>
                                <button type="button" class="flex w-full items-center justify-between bg-white py-1 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Color</span>
                                </button>
                            </template>
                            <template #content>
                                <div class="pt-6" id="filter-section-0">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Green</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </collapse>

                        <collapse class="border-b border-gray-200">
                            <template #header>
                                <button type="button" class="flex w-full items-center justify-between bg-white py-1 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Category</span>
                                </button>
                            </template>
                            <template #content>
                                <div class="pt-6" id="filter-section-1">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New Arrivals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-3" class="ml-3 text-sm text-gray-600">Organization</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-4" class="ml-3 text-sm text-gray-600">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </collapse>

                        <collapse class="border-b border-gray-200">
                            <template #header>
                                <button type="button" class="flex w-full items-center justify-between bg-white py-1 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Size</span>
                                </button>
                            </template>
                            <template #content>
                                <div class="pt-6" id="filter-section-2">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </collapse>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</template>
