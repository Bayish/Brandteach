<script setup>
import {ref} from "vue";

defineProps({
    modelValue: {
        type: String,
        default: null
    },
    inputId: {
        type: String,
        default: null
    },
    label: {
        type: String,
        default: null
    },
    type: {
        type: String,
        default: null
    },
    placeholder: {
        type: String,
        default: null
    },
})

defineEmits(['update:modelValue']);

const focus = ref(false);

const onFocus = (value) =>{
    focus.value = value;
    console.log(focus)
}

</script>
<template>
    <div>
        <div class="w-full pb-2">
            <label class="label text-secondary text-base cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
        <div
            class="border-2 p-2 rounded-md transition ease-in-out duration-150 min-h-16"
            :class="{'border-base-content shadow-sm' : focus, 'border-neutral' : !focus}"
        >
            <textarea
                class="
                    border-none
                    outline-none
                    bg-inherit
                    w-full
                    text-secondary
                    selection:bg-base-100
                "
                :id="'bt-field-' + inputId"
                @focus="onFocus(true)"
                @blur="onFocus(false)"
            >
            </textarea>
        </div>
    </div>
</template>


