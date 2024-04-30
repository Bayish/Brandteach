<script setup>

defineProps({
    selected: {
        type: [Number, String],
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
    required: {
        type: Boolean,
        default: false
    },
    disabled: {
        type: Boolean,
        default: false
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
                :disabled="disabled"
                :required="required"
                @input="$emit('update:selected', $event.target.value)"
            >
                <option disabled selected>Select you variant</option>
                <option
                    v-for="(option, index) in options"
                    :key="index"
                    :selected="option.id === selected"
                    :value="option.id"
                    class="bg-base-100"
                >
                    {{ option.name }}
                </option>
            </select>
        </div>
    </div>
</template>

<style scoped>
/* Style the options */
select option {
    background-color: #f8f8f8; /* Background color of options */
    color: #333; /* Text color of options */
}

/* Style hover effect on options */
select option:hover {
    background-color: #ddd; /* Background color on hover */
}

/* Style selected option */
select option:checked {
    background-color: #007bff; /* Background color of selected option */
    color: #fff; /* Text color of selected option */
}
</style>
