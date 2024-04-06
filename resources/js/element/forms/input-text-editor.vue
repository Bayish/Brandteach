<script setup>
import {QuillEditor} from '@vueup/vue-quill';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
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
const editorValue = ref('')
defineEmits(['update:modelValue']);

</script>

<template>
    <div>
        <div class="w-full pb-2">
            <label class="label text-secondary font-semibold text-lg cursor-pointer" :for="'bt-field-' + inputId" >{{ label }}</label>
        </div>
        <div
            class="border-2 p-2 rounded-md transition ease-in-out duration-150"
        >
            <QuillEditor
                contentType="html"
                v-model:content="editorValue"
                class="!border-0 min-h-72 text-base"
                @update:content="$emit('update:modelValue', editorValue)"
            />
        </div>
    </div>
</template>

<style>
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
div:-webkit-autofill,
div:-webkit-autofill:hover,
div:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
    border: 1px solid #fff;
    -webkit-text-fill-color: #7D8592;
    -webkit-box-shadow: 0 0 0px 1000px #fff inset;
    transition: background-color 5000s ease-in-out 0s;
}

.ql-editor *::selection {
    background-color: #F4F9FD;
    color: #7D8592;
}
.ql-editor p{
    font-size: 1rem;
}

.ql-editor{
   min-height: 18rem;
}
</style>
