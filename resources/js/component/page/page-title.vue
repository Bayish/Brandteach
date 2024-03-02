<script setup>

defineProps({
  title: {
    type: String,
    default: null,
  }
});

</script>

<template>
  <h2 class="text-info text-4xl">{{ title }}</h2>
</template>


