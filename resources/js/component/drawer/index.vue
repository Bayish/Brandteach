<script setup>

</script>

<template>
    <div class="drawer bg-accent">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
                <div class="flex justify-center items-center">
                    <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost md:hidden">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-6 w-6 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                    <div class="flex-1">
                        <slot name="Content">

                        </slot>
                    </div>
                </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu h-full max-w-80 w-full bg-accent p-4">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay mb-8">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </label>
                <slot name="sidebar"/>
            </div>
        </div>
    </div>
</template>
