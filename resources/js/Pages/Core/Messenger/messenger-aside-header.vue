<script setup>
    defineProps()
</script>

<template>
    <header
        class="min-h-24 p-4 border-b border-info-content flex justify-between items-center bg-primary text-accent">
        <h2 class="text-xl font-semibold">Conversations</h2>
        <div class="relative">
            <button id="menuButton" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z"/>
                </svg>
            </button>
        </div>
    </header>
</template>
