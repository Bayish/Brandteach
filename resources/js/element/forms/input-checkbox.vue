<script setup>

defineProps({
    checked: {
        type: Boolean,
        default: false
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

defineEmits(['update:checked']);


</script>
<template>
    <div class="form-control flex flex-row justify-between items-center">
        <div class="w-1/6">
            <input
                class="block toggle toggle-primary toggle-sm checked:text-white"
                type="checkbox"
                :checked="checked"
                @input="$emit('update:checked', $event.target.checked)"
            />
        </div>
        <div class="flex-1 pl-2">
            <label class="label text-secondary font-semibold text-lg cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
    </div>
</template>
