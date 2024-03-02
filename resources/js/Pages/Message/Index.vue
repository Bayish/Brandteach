<script setup>
import {ref} from "vue";

const props = defineProps({
  show: {
    type: Boolean,
    default: false
  }
})

const statusOfModal = ref(props.show)

const showModal = () => {
  statusOfModal.value = true;
}

const closeModal = () => {
  statusOfModal.value = false;
}
</script>

<template>

</template>
