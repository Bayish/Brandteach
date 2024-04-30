<script setup>
import Link from "@/layout/navigation/Link.vue";
defineProps({
    pageTitle: {
        type: String,
        default: null
    },
    pageDescription: {
        type: String,
        default: null
    },
    buttonText: {
        type: String,
        default: null
    },
    routeLink: {
        type: String,
        default: 'dashboard'
    }
})

</script>

<template>
    <div class="flex py-5 justify-between items-center">
        <div class="mb-2">
            <h4 class="text-info font-bold text-3xl">{{ pageTitle }}</h4>
            <p v-if="pageDescription" class="text-secondary font-semibold">{{ pageDescription }}</p>
        </div>
        <div v-if="buttonText">
            <Link :href="routeLink"
                  class="btn btn-primary text-accent font-bold text-base hover:bg-accent hover:text-primary">+
                {{ buttonText }}
            </Link>
        </div>
    </div>
</template>
