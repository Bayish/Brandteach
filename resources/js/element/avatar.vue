<script setup>
defineProps({
  image: {
    type: String,
    default: null,
  },
  text: {
    type: String,
    default: null,
  }
});
</script>

<template>
  <div class="avatar" v-if="image">
    <div class="mask mask-squircle w-8 h-8">
      BT
      <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
    </div>
  </div>
  <div class="avatar placeholder" v-else>
    <div class="bg-neutral text-neutral-content rounded-full w-8">
      <span class="text-md">{{ text }}</span>
    </div>
  </div>
</template>
