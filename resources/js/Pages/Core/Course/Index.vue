<script setup>
import Dashboard from "@/block/dashboard/index.vue";
const props = defineProps({
  teachers: {
    type: Array,
    default: [],
  },
  courses: {
    type: Array,
    default: [],
  },
  students: {
    type: Array,
    default: [],
  },
  user: {
    type: Object,
    default: null
  }
});

console.log(props)
</script>

<template>
  <Dashboard></Dashboard>
</template>
