<script setup>
import {onMounted, ref} from "vue";

const props = defineProps({
    options: {
        type: Array,
        required: true,
    },
    default: {
        type: String,
        required: false,
        default: null,
    },
    tabindex: {
        type: Number,
        required: false,
        default: 0,
    },
})

const emit = defineEmits(['update:modelValue']);

const selected = ref(props.default ? props.default : (props.options.length > 0 ? props.options[0] : null));
const open = ref(false);

onMounted(() => {
    emit('update:modelValue', selected.value);
});


console.log(selected);
const onClick = (option) => {
    selected.value = option;
    open.value = false;
    emit('update:modelValue', selected.value);
}
</script>

<template>
    <div class="border-2 p-2 rounded-md transition ease-in-out duration-150 relative" :tabindex="tabindex" @blur="open = false">
        <div class="border-0" :class="{ open: open }" @click="open = !open">
            {{ selected.name }}
        </div>
        <div class="items absolute top-full" :class="{ 'hidden': !open }">
            <div
                v-for="(option, i) of options"
                :key="i"
                @click="onClick(option)">
                {{ option.name }}
            </div>
        </div>
    </div>
</template>
