<script setup>
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
import {ref} from "vue";

const props = defineProps({
    date: {
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
    enableTimePicker: {
        type: Boolean,
        default: false
    }
})

defineEmits(['update:date']);
const dateValue = ref(props.date ? props.date.toString() : null);



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
                v-model="dateValue"
                class="!border-0"
                format="dd.MM.yyyy"
                :enable-time-picker="enableTimePicker"
                :week-numbers="{ type: 'iso' }"
                @update:date="(modelData) => $emit('update:date', modelData)"
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
