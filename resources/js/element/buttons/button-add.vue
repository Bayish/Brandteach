<script setup>
defineProps({
  text: {
    type: String,
    default: null
  }
})
</script>

<template>
  <button class="btn bg-primary text-white">+ {{text}}</button>
</template>
