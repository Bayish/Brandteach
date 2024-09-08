<script setup>
import {ref} from "vue";

const isOpen = ref(false);
const toggleMenu = () => isOpen.value = ! isOpen.value;

</script>

<template>
    <div
        class="hidden lg:flex lg:flex-1 lg:justify-end items-center">
        <div class="relative"  @click="toggleMenu()">
            <slot name="button"/>
            <div
                :class="{'opacity-100 translate-y-0  z-10': isOpen, 'opacity-0 translate-y-1 -z-10': !isOpen}"
                class="absolute right-0 top-full mt-1 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 duration-300 ease-in-out py-5 px-3">
                <slot name="content"/>
            </div>
        </div>
    </div>
</template>
