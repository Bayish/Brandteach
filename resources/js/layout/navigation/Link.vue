<script setup>
import {Link} from '@inertiajs/vue3';

defineProps({
  href: {
    type: String,
    default: "dashboard"
  },
})

</script>

<template>
  <Link :href="route(href)" class="text-md">
    <slot/>
  </Link>
</template>


