<script setup>
const props = defineProps({
  groups: {
    type: Array,
    default: () => [],
  },
})

</script>

<template>
  <ul v-for="(group, index) in groups" :key="index">
    <li><a :href="route('group.message', {groupId: group.id})">{{group.name}}</a></li>
  </ul>
</template>
