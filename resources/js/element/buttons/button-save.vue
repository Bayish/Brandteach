<script setup>
defineProps({
    text: {
        type: String,
        default: null
    }
})
</script>

<template>
    <div class="flex justify-center items-center">
        <button class="btn bg-primary rounded-xl font-bold text-white w-full max-w-32">{{ text }}</button>
    </div>
</template>
