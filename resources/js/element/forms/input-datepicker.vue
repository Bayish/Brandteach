<script setup>
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
import {ref} from "vue";

const props = defineProps({
    date: {
        type: [Date, String],
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
    enableTimePicker: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['update:date']);
const dateValue = ref(props.date && new Date(props.date).toString());

const handleDate = (modelData) => {
    dateValue.value = modelData;
    emit('update:date', modelData)
}


</script>
<template>
    <div class="datepicker">
        <div class="w-full pb-2">
            <label class="label text-secondary text-lg font-semibold cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
        <div
            class="border-2 rounded-md transition ease-in-out duration-150 border-neutral"
        >
            <VueDatePicker
                ref="dp"
                :model-value="dateValue"
                class="!border-0"
                format="dd.MM.yyyy"
                :enable-time-picker="enableTimePicker"
                :week-numbers="{ type: 'iso' }"
                @update:model-value="handleDate"
            >
            </VueDatePicker>
        </div>
    </div>
</template>


<style>
.datepicker .dp__input,
.datepicker .dp__input:hover,
.datepicker .dp__input:focus{
    border: none !important;
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
    padding-right: 0.5rem !important;
}
</style>
