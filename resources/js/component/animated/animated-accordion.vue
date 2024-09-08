<script setup >
import { ref, onMounted } from 'vue'
import TextGray from "@/element/text/text-gray.vue";
import TitleThird from "@/element/titles/title-third.vue";

const accordionOpen = ref(false)

const props = defineProps({
    title: String,
    id: String,
    active: Boolean
});

onMounted(() => {
    accordionOpen.value = props.active
})
</script>

<template>
    <div
        class="py-6"
        :class="{'bg-accent shadow-md rounded-md': accordionOpen}"
        :id="`accordion-title-${id}`"
        @click.prevent="accordionOpen = !accordionOpen"
        :aria-expanded="accordionOpen"
        :aria-controls="`accordion-text-${id}`"
    >
        <title-third class="flex items-center justify-between w-full">
            <span>{{ title }}</span>
            <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{ '!rotate-180': accordionOpen }" />
                <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{ '!rotate-180': accordionOpen }" />
            </svg>
        </title-third>
<!--        <h2>-->
<!--            <button-->
<!--                :id="`accordion-title-${id}`"-->
<!--                class="flex items-center justify-between w-full text-left text-lg text-info font-semibold py-2"-->
<!--                @click.prevent="accordionOpen = !accordionOpen"-->
<!--                :aria-expanded="accordionOpen"-->
<!--                :aria-controls="`accordion-text-${id}`"-->
<!--            >-->
<!--                -->
<!--                <span>{{ title }}</span>-->
<!--                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{ '!rotate-180': accordionOpen }" />-->
<!--                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{ '!rotate-180': accordionOpen }" />-->
<!--                </svg>-->
<!--            </button>-->
<!--        </h2>-->
        <div
            :id="`accordion-text-${id}`"
            role="region"
            :aria-labelledby="`accordion-title-${id}`"
            class="grid text-base text-secondary overflow-hidden transition-all duration-300 ease-in-out"
            :class="accordionOpen ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
        >
            <div class="overflow-hidden">
                <text-gray class="py-3">
                    <slot />
                </text-gray>
            </div>
        </div>
    </div>
</template>
