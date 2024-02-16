<script setup>
defineProps({
  pageTitle: {
    type: String,
    default: null
  },
  pageDescription: {
    type: String,
    default: null
  },
  buttonText: {
    type: String,
    default: null
  }
})

</script>

<template>
  <div class="flex py-4 justify-between items-center">
    <div class="mb-2">
      <h4 class="text-info font-bold text-3xl">{{ pageTitle }}</h4>
      <p v-if="pageDescription" class="text-secondary font-semibold">{{pageDescription}}</p>
    </div>
    <div>
      <button v-if="buttonText" class="btn btn-primary text-accent font-bold text-base hover:bg-accent hover:text-primary">+ {{buttonText}}</button>
    </div>
  </div>
</template>
