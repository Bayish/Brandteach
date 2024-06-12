<script setup>
const props = defineProps(['activeIndex', 'index']);
const emit = defineEmits(['update-active']);


const updateActive = (index) => {
    emit("update-active", index) ;
}
</script>

<template>
    <div class="navbar-right  relative">
        <button
            class="m-1 btn border-none outline-none bg-primary"
            @click="updateActive(index)">
            <slot name="button"/>
        </button>
        <div v-if="index === activeIndex" class="absolute top-0 right-full">
            <slot name="body"/>
        </div>
    </div>
</template>
