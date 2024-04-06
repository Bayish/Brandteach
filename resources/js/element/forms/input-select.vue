<script setup>

defineProps({
    selected: {
        type: String,
        default: null
    },
    options: {
        type: Array,
        default: () => []
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

defineEmits(['update:selected']);




</script>
<template>
    <div>
        <div class="w-full pb-2">
            <label class="label text-secondary text-lg font-semibold cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
        <div
            class="border-2 border-neutral p-2 rounded-md transition ease-in-out duration-150"
        >
            <select
                class="border-none outline-none bg-inherit w-full text-secondary bg-base-100"
                :id="'bt-field-' + inputId"
                @input="$emit('update:selected', $event.target.value)"
            >
                <option disabled selected>Select</option>
                <option
                    v-for="(option, index) in options"
                    :key="index"
                    :selected="option.id === selected"
                    :value="option.id"
                >
                    {{ option.name }}
                </option>
            </select>
        </div>
    </div>
</template>
