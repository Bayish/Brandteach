<script setup>
defineProps({
  type: {
    type: String,
    default: "submit"
  },
  label: {
    type: String,
    default: null
  },
  iconType: {
    type: String,
    default: "fas"
  },
  icon: {
    type: String,
    default: "arrow-right"
  },
})


</script>

<template>
  <button :type="type" class="mt-10 w-36 rounded-2xl btn btn-primary block mx-auto px-4 text-accent flex justify-center items-center text-base">
    <span>{{ label }}</span>
    <span><font-awesome-icon class="font-medium" :icon="[iconType, icon]"/></span>
  </button>
</template>


