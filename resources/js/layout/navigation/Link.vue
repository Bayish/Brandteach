<script setup>
import {Link} from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        default: "dashboard"
    },
    routeId: {
        type: Number,
        default: null
    }
})

</script>

<template>
    <Link :href="!routeId ? route(href) : route(href, {id: routeId}) " class="text-md">
        <slot/>
    </Link>
</template>


