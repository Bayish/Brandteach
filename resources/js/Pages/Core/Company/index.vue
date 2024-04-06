<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import InputText from "@/element/forms/input-text.vue";
import InputTextEditor from "@/element/forms/input-text-editor.vue";
import InputSelect from "@/element/forms/input-select.vue";
import InputCheckbox from "@/element/forms/input-checkbox.vue";
import InputDatepicker from "@/element/forms/input-datepicker.vue";
import InputMedia from "@/element/forms/input-media.vue";
import InputMediaMultiple from "@/element/forms/input-media-multiple.vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    company: {
        type: Object,
        default: null
    },
    memberships: {
        type: Array,
        default: () => [],
    }
})

const form = useForm({
    name: '',
    description: '',
    active: false,
    logo: '',
    membership_id: '',
    address_id: '',
    contact_id: '',
    membership_until: '',
});

const parts = props.company.membership_until.split('-');
const date = new Date(Date.UTC(parts[0], parts[1] - 1, parts[2]));
const formattedDate = date.getDate().toString().padStart(2, '0') + '.' +
    (date.getMonth() + 1).toString().padStart(2, '0') + '.' +
    date.getFullYear();

console.log(props);


</script>

<template>
    <crm-view-content-header
        pageTitle="Company"
    />
    <div class="
        bg-accent
        rounded-3xl
        h-full
        w-full
        overflow-hidden
        mb-4
        flex-1
        flex
        mx-auto
        shadow-md
        before:h-4
        after:h-4
        mr-auto
        flex-col"
    >
        <div class="overflow-y-auto h-full flex-1 flex flex-col px-4 lg:px-8">
            <h3 class="text-info font-bold text-xl my-4">General Settings</h3>
            <form class="flex justify-between max-w-4xl" action="">
                <div class="w-2/3">
                    <div class="w-full flex justify-between items-end">
                        <input-text
                            v-model:modelValue="company.name"
                            class="mb-4 w-1/2"
                            label="Company name"
                            input-id="company-name"
                        />
                        <input-checkbox
                            v-model:checkec="company.active"
                            class="mb-4 ml-2 w-1/2"
                            label="Company active"
                            input-id="company-active"
                        />
                    </div>
                    <input-text-editor
                        v-model:modelValue="checkedText"
                        class="mb-4"
                        label="Company info"
                        input-id="company-description"
                    />
                    <div class="w-full flex justify-between items-center">
                        <input-select
                            v-model:selected="company.membership"
                            :options="memberships"
                            class="mb-4 w-2/3"
                            label="Company membership"
                            input-id="company-membership"
                        />
                        <input-datepicker
                            v-model:date="company.membership_until"
                            :enableTimePicker="false"
                            class="mb-4 ml-2 w-1/3"
                            label="Company name"
                            input-id="company-name"
                        />
                    </div>
                    <input-media-multiple
                        placeholder-title="Upload logo"
                        placeholder-text="Choose multiple photos size should be less than 2mb and should be in JPG, PNG, or GIF format."
                        button-text="Upload"
                        input-id="company-multiple-images"
                        preview-container="company-multiple-image-container"
                    />
                </div>
                <div class="w-1/3 ml-2">
                    <input-media
                        placeholder-title="Upload Images for content"
                        placeholder-text="Choose photo size should be less than 2mb and should be in JPG, PNG, or GIF format."
                        button-text="Upload"
                    />
                </div>
            </form>
        </div>
    </div>
</template>
