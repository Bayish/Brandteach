<script setup>
    import TextHelper from "@/component/texts/text-helper.vue";

    defineProps({
        selected: {
            type: Object,
            default: null
        }
    })
</script>

<template>
    <header class="min-h-24 bg-accent p-4  border-b border-info-content">
        <h2 class="text-xl text-info font-semibold">{{ truncateText(selected.name, 20) }}</h2>
        <text-helper :value="truncateText(selected.description, 50)"/>
    </header>
</template>
