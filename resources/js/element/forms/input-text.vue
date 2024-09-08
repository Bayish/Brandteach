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
    required: {
        type: Boolean,
        default: false
    },
})

defineEmits(['update:modelValue']);

const focus = ref(false);

const onFocus = (value) =>{
    focus.value = value;
}

</script>
<template>
    <div>
        <div class="w-full pb-2">
            <label class="label text-secondary font-semibold text-lg cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
        <div
            class="border-2 p-2 rounded-md transition ease-in-out duration-150"
            :class="{'border-base-content shadow-sm' : focus, 'border-neutral' : !focus}"
        >
            <input
                class="border-none outline-none bg-inherit w-full text-secondary selection:bg-base-100"
                type="text"
                autocomplete="off"
                :value="modelValue"
                :id="'bt-field-' + inputId"
                :required="required"
                @focus="onFocus(true)"
                @blur="onFocus(false)"
                @input="$emit('update:modelValue', $event.target.value)"
            />
        </div>
    </div>
</template>
