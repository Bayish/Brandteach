<script setup>

defineProps({
  value: {
    type: String,
    default: '',
  }
});

</script>

<template>
  <p class="text-base text-info text-bold">{{ value }}</p>
</template>
