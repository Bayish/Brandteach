<script setup>
import Logo from "@/layout/header/Logo.vue";
</script>


<template>
  <header class="flex-grow">
    <div class="flex justify-start">
      <div class="mw-full p-4 w-24 mr-auto mb-3"><Logo/></div>
      <div>
        <label for="drawer" aria-label="close sidebar" class="drawer-overlay md:hidden">Close</label>
      </div>
    </div>
  </header>
</template>
