<script setup>

defineProps({
  value: {
    type: String,
    default: '',
  }
});

</script>

<template>
  <span class="text-base text-left text-base-300 block">{{ value }}</span>
</template>
