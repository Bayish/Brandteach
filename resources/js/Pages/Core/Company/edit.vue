<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import {useForm} from "@inertiajs/vue3";
import InputTextEditor from "@/element/forms/input-text-editor.vue";
import InputMediaMultiple from "@/element/forms/input-media-multiple.vue";
import InputMedia from "@/element/forms/input-media.vue";
import InputText from "@/element/forms/input-text.vue";
import InputCheckbox from "@/element/forms/input-checkbox.vue";
import InputSelect from "@/element/forms/input-select.vue";
import InputDatepicker from "@/element/forms/input-datepicker.vue";
import {ref} from "vue";
import ButtonSave from "@/element/buttons/button-save.vue";
import CompanyContactLink from "@/Pages/Core/Company/templates/company-contact-link.vue";
import InputMail from "@/element/forms/input-mail.vue";
import InputPhone from "@/element/forms/input-phone.vue";
import CompanyForm from "@/Pages/Core/Company/templates/company-form.vue";

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
    company: {
        type: Object,
        default: null
    },
});

console.log(props.company);

const form = useForm({
    ...props.company,
    contactLinks: props.company.contact_links.length > 0 ? props.company.contact_links : [{
        social_media_id: '',
        link: ''
    }]
});


const onSubmit = (event) => {
    event.preventDefault();
    console.log(form)
    try {
        form.post(route('company.store'))
    }catch (e) {
        console.log(e)
    }
}
</script>

<template>
    <crm-view-content-header
        pageTitle="Company create"
    />
    <div
        class="bg-accent rounded-3xl h-full w-full overflow-hidden mb-4 flex-1 flex mx-auto shadow-md before:h-4 after:h-4  mr-auto flex-col">
        <div class="overflow-y-auto h-full px-4 lg:px-8">
            <div class="max-w-3xl  mx-auto h-full flex-1 flex flex-col">
                <h3 class="text-info font-bold text-xl my-4">General Settings</h3>
                <company-form
                    :form="form"
                    :social-medias="socialMedias"
                    :countries="countries"
                    :memberships="memberships"
                    @on-submit="onSubmit"
                />
            </div>
        </div>
    </div>
</template>

