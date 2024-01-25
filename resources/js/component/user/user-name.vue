<script setup>
defineProps({
  name: {
    type: String,
    default: null,
  }
});

</script>

<template>
  <h4 class="text-secondary text-base">Welcome back, {{ name }}!</h4>
</template>
