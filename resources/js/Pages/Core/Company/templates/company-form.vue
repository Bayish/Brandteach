<script setup>
import InputTextEditor from "@/element/forms/input-text-editor.vue";
import InputMediaMultiple from "@/element/forms/input-media-multiple.vue";
import InputMedia from "@/element/forms/input-media.vue";
import InputText from "@/element/forms/input-text.vue";
import InputCheckbox from "@/element/forms/input-checkbox.vue";
import InputSelect from "@/element/forms/input-select.vue";
import InputDatepicker from "@/element/forms/input-datepicker.vue";
import ButtonSave from "@/element/buttons/button-save.vue";
import CompanyContactLink from "@/Pages/Core/Company/templates/company-contact-link.vue";
import InputMail from "@/element/forms/input-mail.vue";
import InputPhone from "@/element/forms/input-phone.vue";

const props = defineProps({
    memberships: {
        type: Array,
        default: () => [],
    },
    countries: {
        type: Array,
        default: null
    },
    socialMedias: {
        type: Array,
        default: null
    },
    form: {
        type: Object,
        default: null
    },
});


const emit = defineEmits(['on-submit']);

const onSubmit = (event) => {
    emit("on-submit", event) ;
}

const filterOptions = (items, id) => {
    const filteredItems = items.filter(item => item.id === parseInt(id));
    return filteredItems.length > 0 ? filteredItems[0].cities : [];
};

</script>

<template>
    <form class="w-full" @submit="onSubmit">
        <div class="w-full">
            <div class="w-full flex justify-between items-end">
                <input-text
                    v-model:modelValue="form.name"
                    class="mb-4 w-7/12"
                    label="Company name"
                    input-id="company-name"
                />
                <input-checkbox
                    v-model:checked="form.active"
                    class="mb-4 ml-5 w-5/12"
                    label="active"
                    input-id="company-active"
                />
            </div>
            <div class="w-full flex justify-between items-center">
                <input-select
                    v-model:selected="form.membership_id"
                    :options="memberships"
                    class="mb-4 w-7/12"
                    label="Company membership"
                    input-id="company-membership"
                />
                <input-datepicker
                    v-model:date="form.membership_until"
                    :enableTimePicker="false"
                    class="mb-4 ml-2 w-5/12"
                    label="Membership until"
                    input-id="membership-until"
                />
            </div>
            <input-media
                class="w-7/12 mr-auto"
                v-model:file="form.logo"
                placeholder-title="Upload logo"
                placeholder-text="Choose photo size should be less than 2mb and should be in JPG, PNG, or GIF format."
                button-text="Upload"
            />
            <input-text-editor
                v-model:modelValue="form.description"
                class="mb-4"
                label="Company info"
                input-id="company-description"
            />
            <h4 class="text-info font-bold text-lg my-4">Contact</h4>
            <div class="w-full flex justify-between">
                <input-mail
                    v-model:modelValue="form.email"
                    placeholder="company@mail.com"
                    class="mb-4 w-1/2"
                    label="Company mail"
                    input-id="company-mail"
                />
                <input-phone
                    v-model:modelValue="form.phone_number"
                    :options="memberships"
                    placeholder="+9967777..."
                    class="ml-2 mb-4 w-1/2"
                    label="Company phone number"
                    input-id="company-phone-number"
                />
            </div>
            <company-contact-link
                :contact="form.contactLinks"
                :social-medias="socialMedias"
            />
            <h4 class="text-info font-bold text-lg my-4">Address</h4>
            <div class="w-full flex justify-between items-center">
                <input-select
                    v-model:selected="form.country_id"
                    :options="countries"
                    class="mb-4 w-2/3"
                    label="County"
                    input-id="company-country"
                />
                <input-select
                    v-model:selected="form.city_id"
                    :disabled="!form.country_id"
                    :options="filterOptions(countries, form.country_id)"
                    class="ml-2  mb-4 w-2/3"
                    label="City"
                    input-id="company-city"
                />
            </div>
            <div class="w-full flex justify-between items-center">
                <input-text
                    v-model:modelValue="form.street"
                    class="mb-4 w-2/3"
                    label="Street"
                    input-id="company-street"
                />
                <input-text
                    v-model:modelValue="form.house_number"
                    :options="memberships"
                    class="ml-2  mb-4 w-1/3"
                    label="House number"
                    input-id="company-house-number"
                />
            </div>
            <h4 class="text-info font-bold text-lg my-4">Content media files</h4>
            <input-media-multiple
                v-model:files="form.content_media_files"
                placeholder-title="Upload Images for content"
                placeholder-text="Choose multiple photos size should be less than 2mb and should be in JPG, PNG, or GIF format."
                button-text="Upload"
                input-id="company-multiple-images"
                preview-container="company-multiple-image-container"
            />
        </div>
        <button-save type="submit" class="!justify-end my-6" text="Save" @click="onSubmit"/>
    </form>
</template>

