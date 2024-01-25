<script setup>
import Dashboard from "@/block/dashboard/index.vue";

defineProps({
  teachers: {
    type: Array,
    default: [],
  }
});

</script>

<template>
  <Dashboard >
    <div class="mt-4 w-full">
        <div class="flex justify-start">
          <h4 class="text-secondary text-base">Welcome back, Evan!</h4>

        </div>
    </div>
  </Dashboard>
</template>


